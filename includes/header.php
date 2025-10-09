<?php
// /includes/header.php
require_once __DIR__ . '/app.php';

// 以降は BASE_URL_PATH または href() を使う
?>
<header class="site-header" role="banner">
  <a class="skip-link" href="#main-content">本文へスキップ</a>

  <div class="header-inner">
    <a href="<?= htmlspecialchars(BASE_URL_PATH, ENT_QUOTES, 'UTF-8') ?>" class="logo" aria-label="トップへ">
      <img src="<?= htmlspecialchars(href('img/logo.webp'), ENT_QUOTES, 'UTF-8') ?>" alt="YWG">
    </a>

    <nav class="nav desktop-nav" aria-label="グローバルナビゲーション">
      <ul>
        <li><a href="<?= htmlspecialchars(BASE_URL_PATH, ENT_QUOTES, 'UTF-8') ?>">TOP</a></li>
        <li><a href="<?= htmlspecialchars(href('about/'),   ENT_QUOTES, 'UTF-8') ?>">会社概要</a></li>
        <li><a href="<?= htmlspecialchars(href('trade/'),   ENT_QUOTES, 'UTF-8') ?>">貿易業</a></li>
        <li><a href="<?= htmlspecialchars(href('hr/'),      ENT_QUOTES, 'UTF-8') ?>">外国人材紹介</a></li>
        <li><a href="<?= htmlspecialchars(href('salon/'),   ENT_QUOTES, 'UTF-8') ?>">サロン事業</a></li>
        <li><a href="<?= htmlspecialchars(href('faq/'),     ENT_QUOTES, 'UTF-8') ?>">FAQ</a></li>
        <li><a href="<?= htmlspecialchars(href('recruit/'), ENT_QUOTES, 'UTF-8') ?>">採用情報</a></li>
        <li><a href="<?= htmlspecialchars(href('contact/'), ENT_QUOTES, 'UTF-8') ?>">お問い合わせ</a></li>
      </ul>
    </nav>

    <button class="hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="mobileNav">
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>
  </div>

  <nav id="mobileNav" class="nav mobile-nav" aria-label="モバイルナビゲーション">
    <ul>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(BASE_URL_PATH, ENT_QUOTES, 'UTF-8') ?>">TOP</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('about/'),   ENT_QUOTES, 'UTF-8') ?>">会社概要</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('trade/'),   ENT_QUOTES, 'UTF-8') ?>">貿易業</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('hr/'),      ENT_QUOTES, 'UTF-8') ?>">外国人材紹介</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('salon/'),   ENT_QUOTES, 'UTF-8') ?>">サロン事業</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('faq/'),     ENT_QUOTES, 'UTF-8') ?>">FAQ</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('recruit/'), ENT_QUOTES, 'UTF-8') ?>">採用情報</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars(href('contact/'), ENT_QUOTES, 'UTF-8') ?>">お問い合わせ</a></li>
    </ul>
  </nav>
</header>