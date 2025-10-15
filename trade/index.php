<?php // trade/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="YWGインターナショナル株式会社の貿易業ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>貿易業 | YWGインターナショナル株式会社</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" href="../img/icons/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
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
  <main id="main-content" class="main-content">

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
        <div class="row align-items-top trade-item" id="export-business" aria-labelledby="export-business-title">
          <div class="col-md-6">
            <img
              src="../img/export.jpg"
              alt="輸出事業のイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6">
            <h2 id="export-business-title">輸出事業</h2>
            <h3 class="lead fw-bold mb-3">グローバルに広がる、日本品質の価値を世界へ</h3>
            <p>
              YWGインターナショナル株式会社は、東南アジアを中心とした海外市場に向けて、日本が誇る高品質な化粧品、日用雑貨、日本食材、中古商品などを幅広く輸出しております。信頼性・安全性・機能性に優れた「Made in Japan」製品の魅力を、現地のニーズに合わせた形で世界へと届けることを使命としています。
            </p>
            <h3 class="h5 fw-bold mt-3">環境への配慮と持続可能な社会に向けて</h3>
            <p>
              私たちは製品輸出のみならず、廃材や廃プラスチックなどのリサイクル事業にも積極的に取り組んでいます。限りある資源を再活用することで、原料供給の側面からも環境負荷の低減に貢献し、持続可能な循環型社会の実現を目指しています。
            </p>
            <h3 class="h5 fw-bold mt-3">YWGインターナショナルが選ばれる理由</h3>
            <ul class="list-unstyled trade-feature-list mb-0" aria-label="YWGインターナショナルが選ばれる理由">
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>東南アジア市場に特化した豊富なネットワークと実績</span></li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>厳選された日本製品の調達力と品質管理</span></li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>貿易からリサイクルまで、一貫したサプライチェーン対応</span></li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>環境と経済の両立を目指す持続可能な事業運営</span></li>
            </ul>
          </div>
        </div>

        <!-- 輸入事業 -->
        <div class="row align-items-start trade-item" id="import-business" aria-labelledby="import-business-title">
          <div class="col-md-6 order-md-2">
            <img src="../img/import.jpg"
              alt="輸入事業のイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6 order-md-1">
            <h2 id="import-business-title">輸入事業</h2>
            <p class="lead fw-bold mb-3">アジアのモノづくりと、日本市場をつなぐ架け橋に</p>
            <p>
              当社は、東南アジアにおける提携縫製工場との強固なネットワークを活かし、アパレル製品の輸入において大きな強みを持っています。高品質かつ柔軟な対応が可能な体制により、小ロットから量産まで対応いたします。
            </p>
            <p>
              また、韓国からの美容機器の輸入・国内販売も手がけており、美容・健康分野においても確かな実績を築いています。「こんな商品を取り扱いたい」といった個別のご要望にも柔軟に対応いたしますので、ぜひお気軽にご相談ください。
            </p>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-lightbulb text-warning me-1" aria-hidden="true"></i>私たちの強み</h3>
            <ul class="list-unstyled trade-feature-list mb-0" aria-label="輸入事業の強み">
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>東南アジアとのダイレクトな提携により高コストパフォーマンスな輸入対応</span></li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>アパレルから美容機器まで、多様なカテゴリに対応可能</span></li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>輸出入双方に対応することでワンストップな取引体制を実現</span></li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle" aria-hidden="true"></i><span>柔軟かつスピーディーな対応力で、お客様のビジネスを力強く支援</span></li>
            </ul>
          </div>
        </div>

        <!-- 海外進出コンサル -->
        <div id="overseas-consulting" class="row align-items-start trade-item" aria-labelledby="consulting-title">
          <div class="col-md-6">
            <img src="../img/consulting.jpg"
              alt="海外進出コンサルティングのイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6">
            <h2 id="consulting-title">海外進出コンサルティング</h2>
            <p class="lead fw-bold mb-3">アジア市場への挑戦を、確かなパートナーシップでサポート</p>
            <p>
              YWGインターナショナル株式会社では、アジア圏へのビジネス展開をお考えの企業様に向けた、総合的な海外進出支援サービスを提供しています。
              豊富な現地ネットワークと実務経験を活かし、的確かつ迅速な対応で、企業様の海外展開を力強く後押しいたします。
            </p>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-pin-angle-fill text-primary me-1" aria-hidden="true"></i>提供サービス一覧</h3>
            <ul class="list-unstyled trade-feature-list mb-3">
              <li><strong>ビジネスマッチング：</strong> 現地企業・代理店・パートナー候補とのマッチング支援</li>
              <li><strong>商品リサーチ：</strong> 現地ニーズや市場動向を踏まえた製品調査・分析</li>
              <li><strong>現地視察アテンド：</strong> 視察・商談・展示会などへの同行、通訳、現地案内対応</li>
              <li><strong>海外法人設立支援：</strong> 会社登記、不動産物件のご紹介、オフィス契約のサポート</li>
              <li><strong>OEM・製造サポート：</strong> 東南アジア圏でのOEM生産や委託先工場のご紹介</li>
              <li><strong>総合コンサルティング：</strong> 海外展開に伴うあらゆる課題への戦略的アドバイス</li>
            </ul>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-check2-square text-success me-1" aria-hidden="true"></i>こんなお悩みに対応します</h3>
            <ul class="list-unstyled trade-feature-list mb-3">
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>アジアで販路を拡大したいが、現地のパートナーが見つからない</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>商談・市場調査を効率的に進めたい</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>現地法人を設立したいが、手続きや法律が分からない</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>OEMを検討しているが信頼できる工場が見つからない</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>初めての海外展開で、何から始めるべきか分からない</li>
            </ul>

            <h3 class="h5 fw-semibold mt-4">✨ アジア進出、最初の一歩を私たちとともに。</h3>
            <p>単なるアドバイスにとどまらず、現地密着型の実働支援を通じて、お客様の「成功する海外進出」を実現します。</p>
            <p>まずはお気軽にご相談ください。</p>
          </div>
        </div>

        <!-- 貿易輸出入代行 -->
        <div id="export-import-agency" class="row align-items-top trade-item" aria-labelledby="agency-title">
          <div class="col-md-6 order-md-2">
            <img src="../img/agency.jpg"
              alt="貿易輸出入代行サービスのイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6 order-md-1">
            <h2 id="agency-title"><i class="bi bi-ship me-1 text-primary" aria-hidden="true"></i>貿易輸出入代行サービス</h2>
            <p class="lead fw-bold mb-3">貿易業務をワンストップで代行。御社の“手間”を削減します。</p>
            <p>
              YWGインターナショナル株式会社では、煩雑で専門知識を要する貿易実務全般をワンストップで代行しております。
              書類作成、通関、輸送手配などの手間をすべて当社が担うことで、お客様は本業に専念いただけます。
            </p>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-box-seam-fill text-warning me-1" aria-hidden="true"></i>サービス内容一覧</h3>
            <ul class="list-unstyled trade-feature-list mb-3">
              <li><strong>通関・貿易書類作成：</strong> インボイス、パッキングリスト、B/L（船荷証券）などの作成・管理</li>
              <li><strong>インコタームズに基づく条件設計：</strong> 適切な輸送条件・取引条件の提案・設定</li>
              <li><strong>HSコード分類・関税対応：</strong> 輸出入品目の分類、関税・税制への対応支援</li>
              <li><strong>船積・航空輸送手配：</strong> FCL（コンテナ単位）、LCL（混載）、航空便など柔軟に対応</li>
              <li><strong>保険の付保：</strong> 貨物損害リスクに備えた適切な保険加入サポート</li>
              <li><strong>国内配送まで一貫対応：</strong> 港・空港から最終納品先までの国内輸送手配も可能</li>
            </ul>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-check2-circle text-success me-1" aria-hidden="true"></i>選ばれる理由</h3>
            <ul class="list-unstyled trade-feature-list mb-3">
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>豊富な実務経験に基づく安心・確実な手続き</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>中小企業様・初めての貿易取引でも分かりやすく丁寧にサポート</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>物流・法務・税制まで一貫対応でスムーズな進行</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>東南アジア・韓国との取引に強みあり</li>
            </ul>

            <h3 class="h5 fw-semibold mt-4">🌟 外注ではなく、“信頼できる社外パートナー”として。</h3>
            <p>
              単なる代行業務ではなく、御社の「海外ビジネス部門」の一員のように、実務＋提案型のサポートをご提供いたします。</p>
              <p>初めての海外取引から、すでに商流のある企業様まで、柔軟に対応可能です。お気軽にお問い合わせください。</p>
          </div>
        </div>

        <!-- 商品の営業代行 -->
        <div id="sales-agency" class="row align-items-top trade-item" aria-labelledby="sales-agency-title">
          <div class="col-md-6">
            <img src="../img/sales.jpg"
              alt="商品の営業代行サービスのイメージ"
              class="img-fluid mb-4 mb-md-0"
              loading="lazy" decoding="async">
          </div>
          <div class="col-md-6">
            <h2 id="sales-agency-title">商品の営業代行サービス</h2>
            <p class="lead fw-bold mb-3">販路開拓から商談、受注後の運用まで、すべてお任せください。</p>
            <p>
              YWGインターナショナル株式会社では、国内外のバイヤー・小売店・ECモール等への営業活動をトータルで代行しております。
              “売るため”に必要なすべてのステップに伴走し、貴社商品の販路拡大・販売力強化を支援いたします。
            </p>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-wrench-adjustable-circle text-primary me-1" aria-hidden="true"></i>対応範囲（すべて一気通貫で対応）</h3>
            <ul class="list-unstyled trade-feature-list mb-3">
              <li><strong>販路開拓・商談代行：</strong> 国内外のバイヤー・流通パートナーへのアプローチ、提案、商談設定</li>
              <li><strong>受注後の運用サポート：</strong> 納品調整、ロジスティクス連携、顧客対応など販売後の実務対応</li>
              <li><strong>多言語カタログ・販促資料整備：</strong> 英語・中国語など現地言語での商品紹介資料・販促物の作成支援</li>
              <li><strong>展示会出展サポート：</strong> 国内外の見本市・展示会への出展手続き・現地対応をサポート</li>
              <li><strong>テストマーケティング：</strong> 新商品・新市場向けに小ロット販売や市場反応の分析実施</li>
              <li><strong>成果レポート・フィードバック：</strong> 活動実績や改善提案を含むレポート提出による継続改善型支援</li>
            </ul>

            <h3 class="h5 fw-bold mt-3"><i class="bi bi-people-fill text-success me-1" aria-hidden="true"></i>このような企業様におすすめです</h3>
            <ul class="list-unstyled trade-feature-list mb-3">
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>自社に営業部門がなく、外部に販売を任せたい</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>国内市場はあるが、海外への販路開拓をしたい</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>ECモールや小売店との商談がうまく進まない</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>展示会に出たいが、ノウハウや人手が足りない</li>
              <li class="d-flex gap-2"><i class="bi bi-check-circle"></i>商談後のフォローアップや実務を任せたい</li>
            </ul>

            <h3 class="h5 fw-semibold mt-4">💬 結果につながる“攻めの営業支援”</h3>
            <p>私たちは、単なる代理営業ではなく、売れる仕組みづくりから実行までを担うパートナーです。</p>
            <p>目標設定・戦略構築から、現場の泥臭い交渉・調整まで、一社一社に最適なスタイルで伴走いたします。</p>
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