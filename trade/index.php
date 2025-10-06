<?php // trade/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="YWGインターナショナル株式会社の会社概要ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>貿易業 | YWGインターナショナル株式会社</title>

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
  <link rel="stylesheet" href="../css/trade.css">
</head>

<body>
  <?php include('../includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content" class="pt-5">

    <!-- サブヒーロー -->
    <section id="subhero" class="subhero parallax text-center d-flex align-items-center justify-content-center">
      <div>
        <p class="subhero-subtitle">Trading</p>
        <h1 class="subhero-title">貿易業</h1>
      </div>
    </section>


    <!-- 輸出・輸入事業 -->
    <section id="export-import" class="py-5">
      <div class="container">
        <!-- 輸出事業 -->
        <div class="row align-items-center trade-item">
          <div class="col-md-6">
            <img src="../img/export.jpg"
              alt="輸出事業"
              class="img-fluid mb-4 mb-md-0">
          </div>
          <div class="col-md-6">
            <h2>輸出事業</h2>
            <p>
              アジアを中心に高品質な日本製の化粧品、日用雑貨、日本食材等、エステクリニック、百貨店、小売店へ輸出しており、食材に関しましては中国北京市に３０店舗以上ある大手スーパーと提携し、安心で安全な厳選された日本食材を約５０種類以上卸しております。また、廃材、廃プラ等リサイクル事業にも取り組み、環境問題にも貢献しております。
            </p>
          </div>
        </div>

        <!-- 輸入事業 -->
        <div class="row align-items-center trade-item">
          <div class="col-md-6 order-md-2">
            <img src="../img/import.jpg"
              alt="輸入事業"
              class="img-fluid mb-4 mb-md-0">
          </div>
          <div class="col-md-6 order-md-1">
            <h2>輸入事業</h2>
            <p>
              ベトナムに提携先の鉱山を持っており、全国的に炭酸カルシウムの店舗販売、原材料として企業様の加工工場への卸業務、ベトナム食材の輸入販売、飲食店への卸業務も行っております。また、東南アジアで高品質なアジアン家具の販売業務も行っております。
            </p>
          </div>
        </div>

        <!-- 海外進出コンサル -->
        <div id="overseas-consulting" class="row align-items-center trade-item">
          <div class="col-md-6">
            <img src="../img/consulting.jpg"
              alt="海外進出コンサルティングのイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6">
            <h2>海外進出コンサル</h2>
            <p>
              アジア圏への海外ビジネス展開をお考えの企業様へ、的確かつ迅速をモットーに
              ビジネスマッチング、商品リサーチ、現地視察アテンドサービス、進出支援（会社登記、設立、不動産物件）
              OEM、総合コンサルティングサービスを行っています。
            </p>
          </div>
        </div>

        <!-- 貿易輸出入代行 -->
        <div id="export-import-agency" class="row align-items-center trade-item">
          <div class="col-md-6 order-md-2">
            <img src="../img/agency.jpg"
              alt="貿易輸出入代行のイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6 order-md-1">
            <h2>貿易輸出入代行</h2>
            <p>
              （◆◆◆サンプルテキスト◆◆◆）<br>
              煩雑な通関・書類・輸送手配をワンストップで代行します。インコタームズに基づく条件設計、
              HSコード分類、船積／航空手配、保険付保、FCL／LCL、国内配送まで一貫対応。御社は本業に集中できます。
            </p>
          </div>
        </div>

        <!-- 商品の営業代行 -->
        <div id="sales-agency" class="row align-items-center trade-item">
          <div class="col-md-6">
            <img src="../img/sales.jpg"
              alt="商品の営業代行のイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6">
            <h2>商品の営業代行</h2>
            <p>
              （◆◆◆サンプルテキスト◆◆◆）<br>
              国内外バイヤー・小売・ECモール向けに、販路開拓から商談、受注後の運用まで伴走します。
              多言語カタログ整備、展示会出展支援、テストマーケ、成果レポーティングまでを一気通貫で支援。
            </p>
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