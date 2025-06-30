<?php
// includes/footer.php

// ルート直下かサブディレクトリかを判定してリンクの基準パスを作る
$base = (dirname($_SERVER['SCRIPT_NAME']) === '/' ? './' : '../');
?>
<footer role="contentinfo" class="bg-light">
  <div class="container py-4">

    <!-- フッター ナビ -->
    <div class="row">
      <div class="col-12 text-center mb-3">
        <ul class="list-inline footer-nav">
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'about/'); ?>">会社概要</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'trade/'); ?>">貿易業</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'hr/'); ?>">外国人材紹介</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'salon/'); ?>">サロン事業</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'faq/'); ?>">FAQ</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'recruit/'); ?>">採用情報</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'contact/'); ?>">お問い合わせ</a></li>
          <li class="list-inline-item"><a href="<?= htmlspecialchars($base . 'privacy/'); ?>">プライバシーポリシー</a></li>
        </ul>
      </div>
    </div>

    <!-- 会社情報 -->
    <div class="row">
      <div class="col-12 text-center">
        <p class="mb-1">国際貿易YWG株式会社</p>
        <p class="small mb-0">
          〒232-0022 神奈川県横浜市南区高根町4-23-6-102<br>
          TEL: 045-341-4806 FAX: 045-341-4850
        </p>
      </div>
    </div>

    <!-- 著作権表記 -->
    <div class="row">
      <div class="col-12 text-center">
        <small>&copy; 2025 国際貿易YWG株式会社</small>
      </div>
    </div>

  </div>
</footer>
