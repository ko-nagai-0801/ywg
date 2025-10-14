<?php // about/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="YWGインターナショナル株式会社の会社概要ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>会社概要 | YWGインターナショナル株式会社</title>

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
  <link rel="stylesheet" href="../css/about.css">
</head>

<body>
  <?php include('../includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content" class="main-content">

    <!-- サブヒーロー -->
    <section id="subhero" class="subhero parallax text-center d-flex align-items-center justify-content-center">
      <div>
        <p class="subhero-subtitle">Company Profile</p>
        <h1 class="subhero-title">会社概要</h1>
      </div>
    </section>

    <section id="about" class="py-5">
      <div class="container">
        <div class="table-responsive">
          <table class="table table-bordered about-table mx-auto">
            <tbody>
              <tr>
                <th scope="row">会社名</th>
                <td>YWGインターナショナル株式会社</td>
              </tr>
              <tr>
                <th scope="row">法人番号</th>
                <td>5020001102730</td>
              </tr>
              <tr>
                <th scope="row">事業内容</th>
                <td>
                  <ul class="about-table__list list-unstyled mb-0" role="list" aria-label="事業内容一覧">
                    <li>海外輸出入業</li>
                    <li>海外ビジネスコンサルティング</li>
                    <li>外国人サポート</li>
                    <li>海外委託販売業</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">本社住所</th>
                <td>〒232-0022 神奈川県横浜市南区高根町4-23-6-102</td>
              </tr>
              <tr>
                <th scope="row">TEL</th>
                <td>045-341-4806</td>
              </tr>
              <tr>
                <th scope="row">FAX</th>
                <td>045-341-4850</td>
              </tr>
              <tr>
                <th scope="row">E-Mail</th>
                <td>お問い合わせフォームよりご連絡ください</td>
              </tr>
              <tr>
                <th scope="row">創立</th>
                <td>2010年3月1日</td>
              </tr>
              <tr>
                <th scope="row">設立</th>
                <td>2013年10月2日</td>
              </tr>
              <tr>
                <th scope="row">役員</th>
                <td>代表取締役 笹川政吉</td>
              </tr>
              <tr>
                <th scope="row">取引銀行</th>
                <td>
                  <ul class="about-table__list list-unstyled mb-0" role="list" aria-label="取引銀行一覧">
                    <li>みずほ銀行 横浜中央支店</li>
                    <li>横浜信用金庫 野毛町支店</li>
                    <li>楽天銀行</li>
                  </ul>
                </td>
              </tr>

              <tr>
                <th scope="row">加盟団体</th>
                <td>
                  <ul class="about-table__list list-unstyled mb-0" role="list" aria-label="加盟団体一覧">
                    <li>守成クラブ</li>
                  </ul>
                </td>
              </tr>

              <tr>
                <th scope="row">グループ会社</th>
                <td>
                  <ul class="about-table__list list-unstyled mb-0" role="list" aria-label="グループ会社一覧">
                    <li>928合同会社</li>
                    <li>ビューティーサロン月の雫</li>
                    <li>earth協同組合</li>
                    <li>富士国際日本語学校（ベトナム企業）</li>
                    <li>イスモヨジャティベルシナル（インドネシア企業）</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">取引社数</th>
                <td>520件</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>


    <!-- 経営理念 -->
    <section id="philosophy" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-4"><strong>経営理念</strong></h2>
        <p class="text-center">
          我々は、社会の夢と豊かさの実現に貢献し、「明日」に向かって「誠実」に「挑戦」し続けます。
        </p>
        <p class="text-center">
          我が国と世界の架け橋になりたいと思います。
        </p>
        <p class="text-end">代表取締役 笹川政吉</p>
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