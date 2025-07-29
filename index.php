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
  <?php include('./includes/top-header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content">

    <!-- Hero -->
    <section id="hero" class="pt-5 text-center hero-bg">
      <p class="hero-subtitle">アジアを中心とした貿易・コンサルティング・外国人材サポート</p>
      <h1 class="hero-title">国際貿易YWG株式会社</h1>
      <a href="#contact" class="btn btn-primary hero-btn">ご相談・お問い合わせ</a>
    </section>

    <!-- ========================
      バナーセクション
========================= -->
    <!-- <section id="business" class="section-banner section-banner--business">
  <h2 class="section-banner__heading text-center">
    <i class="bi bi-people-fill me-2" aria-hidden="true"></i>
    <span class="section-banner__title">事業内容</span>
  </h2>
</section> -->

    <section id="abouts" class="py-5">
      <div class="container">
        <div class="row g-4">

          <!-- 会社概要 -->
          <div class="card-wrap">
            <div class="card service-card">
              <a href="./about/" class="card-body">
                <div class="card-icon mb-3">
                  <i class="bi bi-building"></i>
                </div>
                <h5 class="card-title">会社概要</h5>
                <p class="card-text">当社についてご紹介します。</p>
              </a>
            </div>
          </div>

          <!-- FAQ -->
          <div class="card-wrap">
            <div class="card service-card">
              <a href="./faq/" class="card-body">
                <div class="card-icon mb-3">
                  <i class="bi bi-question-circle"></i>
                </div>
                <h5 class="card-title">FAQ</h5>
                <p class="card-text">よくあるご質問をまとめています。</p>
              </a>
            </div>
          </div>

          <!-- 採用情報 -->
          <div class="card-wrap">
            <div class="card service-card">
              <a href="./recruit/" class="card-body">
                <div class="card-icon mb-3">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h5 class="card-title">採用情報</h5>
                <p class="card-text">一緒に働く仲間を募集しています。</p>
              </a>
            </div>
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

    <section id="services" class="py-5">
      <div class="container services-container">

        <!-- 貿易業 -->
        <div class="card-wrap">
          <div class="card service-card">
            <a href="./trade/" class="card-body">
              <div class="card-icon mb-3">
                <i class="bi bi-truck"></i>
              </div>
              <h5 class="card-title">貿易業</h5>
              <p class="card-text">アジア〜欧米への輸出入・物流コンサルをワンストップで。</p>
            </a>
          </div>
        </div>

        <!-- 外国人材紹介 -->
        <div class="card-wrap">
          <div class="card service-card">
            <a href="./hr/" class="card-body">
              <div class="card-icon mb-3">
                <i class="bi bi-person-lines-fill"></i>
              </div>
              <h5 class="card-title">外国人材紹介</h5>
              <p class="card-text">企業様と外国人求職者を結ぶ、人材マッチングサービス。</p>
            </a>
          </div>
        </div>

        <!-- サロン事業 -->
        <div class="card-wrap">
          <div class="card service-card">
            <a href="./salon/" class="card-body">
              <div class="card-icon mb-3">
                <i class="bi bi-droplet me-1"></i>
              </div>
              <h5 class="card-title">サロン事業</h5>
              <p class="card-text">リラクゼーションサロン『月の雫』についてはこちら</p>
            </a>
          </div>
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