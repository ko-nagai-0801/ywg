<?php // index.php (TOP Page)
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="国際貿易YWG株式会社はアジア～欧米の輸出入代行・物流コンサル・外国人材支援を提供します">
  <link rel="icon" href="./favicon.ico">
  <title>国際貿易YWG株式会社</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  
  <!-- Favicons -->
  <link rel="icon" href="./img/icons/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/icons//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/icons//favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/icons//apple-touch-icon.png">
  <link rel="manifest" href="./img/icons//site.webmanifest">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Reset CSS -->
  <link rel="stylesheet" href="./css/reset.css">
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Site CSS -->
  <link rel="stylesheet" href="./css/mybootstrap.css">
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/top.css">
</head>

<body>
<?php include('./includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content">

    <!-- Hero -->
    <section id="hero" class="pt-5 text-center hero-bg">
      <p class="hero-subtitle">アジアを中心とした貿易・コンサルティング・外国人材サポート</p>
      <h1 class="hero-title">国際貿易YWG株式会社</h1>
      <a href="#contact" class="btn btn-primary hero-btn">ご相談・お問い合わせ</a>
    </section>

<!-- ========================
      ？？？バナーセクション
========================= -->
<!-- <section id="business" class="section-banner section-banner--business">
  <h2 class="section-banner__heading text-center">
    <i class="bi bi-people-fill me-2" aria-hidden="true"></i>
    <span class="section-banner__title">事業内容</span>
  </h2>
</section> -->

<!-- ↓ タイトル帯の下は通常コンテンツ。背景は出てこない -->
<section id="services" class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./about/" class="service-card d-block text-center text-decoration-none py-5">
              会社概要
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./faq/" class="service-card d-block text-center text-decoration-none py-5">
              FAQ
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./recruit/" class="service-card d-block text-center text-decoration-none py-5">
              採用情報
            </a>
          </div>
        </div>
      </div>
    </section>

<!-- ========================
      事業内容バナーセクション
========================= -->
<section id="business" class="section-banner section-banner--business">
  <!-- セクション見出し -->
  <h2 class="section-banner__heading text-center">
    <!-- decorative, aria-hidden -->
    <i class="bi bi-briefcase-fill me-2" aria-hidden="true"></i>
    <span class="section-banner__title">事業内容</span>
  </h2>
</section>

<!-- ↓ タイトル帯の下は通常コンテンツ。背景は出てこない -->
<section id="services" class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./about/" class="service-card d-block text-center text-decoration-none py-5">
              会社概要
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./trade/" class="service-card d-block text-center text-decoration-none py-5">
              貿易業
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./hr/" class="service-card d-block text-center text-decoration-none py-5">
              外国人材紹介
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./salon/" class="service-card d-block text-center text-decoration-none py-5">
              サロン事業
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./faq/" class="service-card d-block text-center text-decoration-none py-5">
              FAQ
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <a href="./recruit/" class="service-card d-block text-center text-decoration-none py-5">
              採用情報
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>


<?php include('./includes/contact-cta.php'); ?>

<?php include('./includes/to-page-top.php'); ?>

<?php include('./includes/footer.php'); ?>

  <!-- JS: Bootstrap & カスタム -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="./js/main.js" defer></script>
</body>

</html>