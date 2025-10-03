<?php
// ① このファイル自身の絶対パス
echo "__FILE__ : ", __FILE__, "<br>";

// ② ドキュメントルート（公開ディレクトリ）の絶対パス
echo "DOCUMENT_ROOT : ", $_SERVER['DOCUMENT_ROOT'] ?? '(undefined)', "<br>";

// ③ このファイルのディレクトリ絶対パス
echo "dirname(__FILE__) : ", dirname(__FILE__), "<br>";

// ④ 任意パスの正規化（例：1つ上の階層=public_htmlの親）
echo "realpath('../') : ", realpath(__DIR__ . '/../'), "<br>";
