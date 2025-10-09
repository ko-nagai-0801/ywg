<?php
// /includes/app.php
declare(strict_types=1);

// 二重読み込み防止
if (!defined('APP_BOOTSTRAPPED')) {
    define('APP_BOOTSTRAPPED', true);

    /**
     * FSパス（ファイルシステムパス）を正規化
     * - Windowsの '\' → '/'へ
     * - 末尾スラッシュを除去（'/'単体は維持）
     */
    function norm_fs_path(string $p): string
    {
        $p = str_replace('\\', '/', $p);
        return ($p === '/') ? '/' : rtrim($p, '/');
    }

    /** プロジェクトの物理パス（includes の 1つ上=ルート） */
    function app_project_root_fs(): string
    {
        $rp = realpath(__DIR__ . '/..') ?: (__DIR__ . '/..');
        return norm_fs_path($rp);
    }

    /** ドキュメントルートの物理パス（未定義なら空文字） */
    function app_doc_root_fs(): string
    {
        $dr = $_SERVER['DOCUMENT_ROOT'] ?? '';
        return norm_fs_path($dr);
    }

    /**
     * Web上のベースパス（'/' または '/subdir/'）を算出
     * - 通常: 物理パスどうしの差分で安定算出
     * - ルート直下なら '/'
     */
    function app_base_url_path(): string
    {
        $project = app_project_root_fs();
        $docroot = app_doc_root_fs();

        // 通常のWeb実行では docroot が空になることは少ない想定
        if ($docroot !== '' && strpos($project, $docroot) === 0) {
            $base = substr($project, strlen($docroot)); // 先頭の docroot を削除
            return ($base === '' ? '/' : $base . '/');
        }

        // フォールバック（特殊環境向け）：最低限 '/' を返す
        return '/';
    }

    // ベースパスを定数に（どこからでも使える・上書き禁止）
    define('BASE_URL_PATH', app_base_url_path());

    /**
     * ベースパスからの相対パスを絶対パス化（エスケープは出力時に）
     * 例: href('about/') → '/about/' or '/subdir/about/'
     */
    function href(string $path): string
    {
        return BASE_URL_PATH . ltrim($path, '/');
    }
}
