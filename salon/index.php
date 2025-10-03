<?php // salon/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="YWGインターナショナル株式会社のサロン事業紹介ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>サロン事業 | YWGインターナショナル株式会社</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" href="../img/icons/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/icons//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/icons//favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/icons//apple-touch-icon.png">
  <link rel="manifest" href="../img/icons//site.webmanifest">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Reset CSS -->
  <link rel="stylesheet" href="../css/reset.css">
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Site CSS -->
  <link rel="stylesheet" href="../css/mybootstrap.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/childpage.css">
  <link rel="stylesheet" href="../css/salon.css">
</head>

<body>
  <?php include('../includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content" class="pt-5">

    <!-- サブヒーロー -->
    <section id="subhero" class="subhero parallax text-center d-flex align-items-center justify-content-center">
      <div>
        <p class="subhero-subtitle">Salon</p>
        <h1 class="subhero-title">サロン事業</h1>
      </div>
    </section>

    <!-- サロン事業 -->
    <section id="salon" class="py-5">
      <div class="container">
        <!-- サロン事業 -->
        <div class="row align-items-center salon-item">

          <div class="col-md-6">
            <h2>サロン事業</h2>
            <p>
              当社では、リラクゼーションサロン『月の雫』を経営しています。
            </p>

            <div class="my-3">
              <a
                href="https://thukino.com/"
                class="btn btn-primary btn-lg rounded-pill d-inline-flex align-items-center gap-2"
                target="_blank"
                rel="noopener"
                aria-label="リラクゼーションサロン『月の雫』公式サイトを新しいタブで開く">
                公式サイトへ
                <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6">
            <!-- 画像リンク -->
            <a href="https://thukino.com/" target="_blank" rel="noopener">
              <img src="../img/salon-image.webp"
                alt="サロン事業"
                class="img-fluid mb-4 mb-md-0">
            </a>
          </div>

        </div>
      </div>
    </section>

  </main>

  <!-- ================================
    ・お問い合わせ CTA
================================ -->
  <?php include('../includes/contact-cta.php'); ?>

  <?php include('../includes/to-page-top.php'); ?>

  <?php include('../includes/footer.php'); ?>

  <!-- JS: Bootstrap & カスタム -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="../js/main.js" defer></script>
</body>

</html>