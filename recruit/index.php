<?php // recruit/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="国際貿易YWG株式会社の会社概要ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>採用情報 | 国際貿易YWG株式会社</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- Reset CSS -->
  <link rel="stylesheet" href="../css/reset.css">
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Site CSS -->
  <link rel="stylesheet" href="../css/mybootstrap.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/childpage.css">
  <link rel="stylesheet" href="../css/recruit.css">
</head>

<body>
  <?php include('../includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content" class="pt-5">

    <!-- サブヒーロー -->
    <section id="subhero" class="subhero parallax text-center d-flex align-items-center justify-content-center">
      <div>
        <p class="subhero-subtitle">Recruit</p>
        <h1 class="subhero-title">採用情報</h1>
      </div>
    </section>

    <section id="recruit" class="py-5">
      <div class="container">
        <p>現在弊社では以下のポジションで人材を募集しております。</p>

        <div class="accordion" id="recruitAccordion">

          <!-- 募集職種A -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingA">
              <button class="accordion-button" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseA"
                aria-expanded="true"
                aria-controls="collapseA">
                募集職種A
              </button>
            </h3>
            <div id="collapseA" class="accordion-collapse collapse show"
              aria-labelledby="headingA"
              data-bs-parent="#recruitAccordion">
              <div class="accordion-body">
                <dl class="row mb-0">
                  <dt class="col-sm-3">業種</dt>
                  <dd class="col-sm-9">営業兼事務</dd>

                  <dt class="col-sm-3">雇用形態</dt>
                  <dd class="col-sm-9">正社員</dd>

                  <dt class="col-sm-3">勤務地</dt>
                  <dd class="col-sm-9">神奈川県横浜市</dd>

                  <dt class="col-sm-3">仕事内容</dt>
                  <dd class="col-sm-9">
                    <ul class="mb-0">
                      <li>ベトナム関連業務サポート</li>
                      <li>事務作業</li>
                      <li>受け入れ企業への巡回業務</li>
                    </ul>
                  </dd>

                  <dt class="col-sm-3">勤務条件</dt>
                  <dd class="col-sm-9">
                    <ul class="mb-0">
                      <li>完全週休２日制</li>
                      <li>祝祭日休み</li>
                      <li>就業時間：9:00～17:00</li>
                    </ul>
                  </dd>

                  <dt class="col-sm-3">給料</dt>
                  <dd class="col-sm-9">日給月給制：日当8,000円</dd>

                  <dt class="col-sm-3">採用条件</dt>
                  <dd class="col-sm-9">
                    <ul class="mb-0">
                      <li>ベトナム人女性（年齢27歳まで）</li>
                      <li>Excel、Wordが可能</li>
                      <li>日本語検定N3程度の日本語能力</li>
                      <li>在宅ワークも可能な方</li>
                    </ul>
                  </dd>
                </dl>
              </div>
            </div>
          </div>

          <!-- 募集職種B -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingB">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseB"
                aria-expanded="false"
                aria-controls="collapseB">
                募集職種B
              </button>
            </h3>
            <div id="collapseB" class="accordion-collapse collapse"
              aria-labelledby="headingB"
              data-bs-parent="#recruitAccordion">
              <div class="accordion-body">
                <dl class="row mb-0">
                  <dt class="col-sm-3">業種</dt>
                  <dd class="col-sm-9">現在募集しておりません。</dd>

                  <dt class="col-sm-3">雇用形態</dt>
                  <dd class="col-sm-9">正社員</dd>

                  <dt class="col-sm-3">勤務地</dt>
                  <dd class="col-sm-9">東京、ベトナム</dd>

                  <dt class="col-sm-3">勤務条件</dt>
                  <dd class="col-sm-9">海外駐在可能な方</dd>

                  <dt class="col-sm-3">給料</dt>
                  <dd class="col-sm-9">月収25万円以上</dd>

                  <dt class="col-sm-3">その他</dt>
                  <dd class="col-sm-9">—</dd>
                </dl>
              </div>
            </div>
          </div>

          <!-- 募集職種C -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingC">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseC"
                aria-expanded="false"
                aria-controls="collapseC">
                募集職種C
              </button>
            </h3>
            <div id="collapseC" class="accordion-collapse collapse"
              aria-labelledby="headingC"
              data-bs-parent="#recruitAccordion">
              <div class="accordion-body">
                <dl class="row mb-0">
                  <dt class="col-sm-3">業種</dt>
                  <dd class="col-sm-9">現在募集しておりません。</dd>

                  <dt class="col-sm-3">雇用形態</dt>
                  <dd class="col-sm-9">正社員</dd>

                  <dt class="col-sm-3">勤務地</dt>
                  <dd class="col-sm-9">東京、ベトナム</dd>

                  <dt class="col-sm-3">勤務条件</dt>
                  <dd class="col-sm-9">海外駐在可能な方</dd>

                  <dt class="col-sm-3">給料</dt>
                  <dd class="col-sm-9">月収25万円以上</dd>

                  <dt class="col-sm-3">その他</dt>
                  <dd class="col-sm-9">—</dd>
                </dl>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <!-- ================================
    ・求人へのご応募 CTA
================================ -->
  <div id="contact-cta"
    class="section-banner section-banner--cta footer-separator">
    <div class="section-banner__box container text-center py-5">
      <h3 class="section-banner__h3">Apply a job</h3>
      <h2 class="section-banner__heading mb-3">
        求人へのご応募
      </h2>
      <p>ご相談やご質問がある方は、お問い合わせフォームよりご連絡ください。</p>

      <a href="<?php echo htmlspecialchars((dirname($_SERVER['SCRIPT_NAME']) === '/' ? './' : '../') . 'contact/'); ?>"
        class="btn btn-primary">
        お問い合わせフォームへ
      </a>
    </div>
  </div>

  <?php include('../includes/to-page-top.php'); ?>

  <?php include('../includes/footer.php'); ?>

  <!-- JS: Bootstrap & カスタム -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="../js/main.js" defer></script>
</body>

</html>