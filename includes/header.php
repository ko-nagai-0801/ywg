<?php
// includes/header.php

// ── 1) プロジェクトの物理パス（includes の 1 つ上＝プロジェクトルート）
$projectRootFs = realpath(__DIR__ . '/..');                 // 例: C:/xampp/htdocs/3002-ywg
$projectRootFs = str_replace('\\', '/', $projectRootFs);

// ── 2) ドキュメントルートの物理パス
$docRootFs = isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : '';
$docRootFs = rtrim(str_replace('\\', '/', $docRootFs), '/'); // 例: C:/xampp/htdocs

// ── 3) Web上のベースパスに変換
$base = str_replace($docRootFs, '', $projectRootFs);         // 例: /3002-ywg
$base = $base === '' ? '/' : $base . '/';                    // 本番直下なら '/', ローカルなら '/3002-ywg/'

// これで常に：
//   ローカル:  /3002-ywg/  → /3002-ywg/img/logo.webp
//   本番直下: /            → /img/logo.webp
?>
<header class="site-header" role="banner">
  <a class="skip-link" href="#main-content">本文へスキップ</a>

  <div class="header-inner">
    <a href="<?= htmlspecialchars($base) ?>" class="logo" aria-label="トップへ">
      <img src="<?= htmlspecialchars($base) ?>img/logo.webp" alt="YWG">
    </a>

    <nav class="nav desktop-nav" aria-label="グローバルナビゲーション">
      <ul>
        <li><a href="<?= htmlspecialchars($base) ?>">TOP</a></li>
        <li><a href="<?= htmlspecialchars($base . 'about/') ?>">会社概要</a></li>
        <li><a href="<?= htmlspecialchars($base . 'trade/') ?>">貿易業</a></li>
        <li><a href="<?= htmlspecialchars($base . 'hr/') ?>">外国人材紹介</a></li>
        <li><a href="<?= htmlspecialchars($base . 'salon/') ?>">サロン事業</a></li>
        <li><a href="<?= htmlspecialchars($base . 'faq/') ?>">FAQ</a></li>
        <li><a href="<?= htmlspecialchars($base . 'recruit/') ?>">採用情報</a></li>
        <li><a href="<?= htmlspecialchars($base . 'contact/') ?>">お問い合わせ</a></li>
      </ul>
    </nav>

    <button class="hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="mobileNav">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>

  <nav id="mobileNav" class="nav mobile-nav" aria-label="モバイルナビゲーション">
    <ul>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base) ?>">TOP</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'about/') ?>">会社概要</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'trade/') ?>">貿易業</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'hr/') ?>">外国人材紹介</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'salon/') ?>">サロン事業</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'faq/') ?>">FAQ</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'recruit/') ?>">採用情報</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'contact/') ?>">お問い合わせ</a></li>
    </ul>
  </nav>
</header>
