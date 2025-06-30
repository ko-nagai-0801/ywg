<?php
  // includes/header.php
  $base = (dirname($_SERVER['SCRIPT_NAME']) === '/' ? './' : '../');
?>
<header class="site-header" role="banner">
  <a class="skip-link" href="#main-content">本文へスキップ</a>
  <div class="header-inner">
    <a href="<?= htmlspecialchars($base) ?>" class="logo">
      <img src="<?= htmlspecialchars($base) ?>img/logo.png" alt="YWG">
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
    <button class="hamburger" aria-label="メニューを開く" aria-expanded="false">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
  <nav class="nav mobile-nav" aria-label="モバイルナビゲーション">
    <ul>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base) ?>">TOP</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'about/') ?>">会社概要</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'trade/') ?>">貿易業</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'hr/') ?>">外国人材紹介</a></li>
      <!-- <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'salon/') ?>">サロン事業</a></li> -->
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'faq/') ?>">FAQ</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'recruit/') ?>">採用情報</a></li>
      <li class="mobile-nav-items"><a href="<?= htmlspecialchars($base . 'contact/') ?>">お問い合わせ</a></li>
    </ul>
  </nav>
</header>
