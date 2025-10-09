<?php
// /includes/footer.php
require_once __DIR__ . '/app.php'; // ← ヘッダー未読込でも安全に動作させる

?>
<footer role="contentinfo" class="bg-light">
  <div class="container py-4">

    <!-- フッター ナビ -->
    <div class="row">
      <div class="col-12 text-center mb-3">
        <ul class="list-inline footer-nav">
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('about/'), ENT_QUOTES, 'UTF-8') ?>">会社概要</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('trade/'), ENT_QUOTES, 'UTF-8') ?>">貿易業</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('hr/'), ENT_QUOTES, 'UTF-8') ?>">外国人材紹介</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('salon/'), ENT_QUOTES, 'UTF-8') ?>">サロン事業</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('faq/'), ENT_QUOTES, 'UTF-8') ?>">FAQ</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('recruit/'), ENT_QUOTES, 'UTF-8') ?>">採用情報</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('contact/'), ENT_QUOTES, 'UTF-8') ?>">お問い合わせ</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars(href('privacy/'), ENT_QUOTES, 'UTF-8') ?>">プライバシーポリシー</a></li>
        </ul>
      </div>
    </div>

    <!-- 会社情報 -->
    <div class="row">
      <div class="col-12 text-center">
        <p class="mb-1">YWGインターナショナル株式会社</p>
        <p class="small mb-0">
          〒232-0022 神奈川県横浜市南区高根町4-23-6-102<br>
          TEL: 045-341-4806 FAX: 045-341-4850
        </p>
      </div>
    </div>

    <!-- 著作権表記 -->
    <div class="row">
      <div class="col-12 text-center">
        <small>&copy; 2025 YWGインターナショナル株式会社</small>
      </div>
    </div>

  </div>
</footer>