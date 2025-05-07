<?php // faq/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="国際貿易YWG株式会社の会社概要ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>よくある質問 | 国際貿易YWG株式会社</title>

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
  <link rel="stylesheet" href="../css/faq.css">
</head>

<body>
  <?php include('../includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content" class="pt-5">

    <!-- サブヒーロー -->
    <section id="subhero" class="subhero parallax text-center d-flex align-items-center justify-content-center">
      <div>
        <p class="subhero-subtitle">FAQ</p>
        <h1 class="subhero-title">よくあるご質問</h1>
      </div>
    </section>

    <section id="faq" class="container py-5">

      <!-- 貿易業務 -->
      <h3 class="mb-4 fw-bold text-center">貿易業務</h3>
      <div class="accordion mb-5" id="accordionTrade">
        <?php
        $tradeFaq = [
          [
            'q' => '海外商品を輸入したいのですが仕入れることは可能でしょうか？',
            'a' => '可能です。輸出、輸入業務は弊社にお任せくださいませ。商品仕入れ、メーカー様への対応、書類作成、ご指定の場所（倉庫）まで商品をお届け致します。'
          ],
          [
            'q' => '現在食品の会社を経営しております。今後海外で自社商品を販売したいのですがどの様にすればよろしいでしょうか？',
            'a' => '現在、中国、ベトナムでの店舗（スーパーマーケット、小売店）などに食品を卸させて頂いております。ご紹介も出来ますので是非弊社にご相談下さい。但し商品により輸出出来ない物も御座いますのでまずはお問合せお待ちしております。'
          ],
          [
            'q' => 'インターネットで取引先を探す場合は、顔が見えないため不安です。この際、取引先を決めるポイントなどありますか？',
            'a' => 'いくつかの判断基準はございますが弊社へ依頼を頂けましたら調査は可能です。また、興信所に調査依頼をすることも可能です。また、見本市なども御座いますのでご案内、通訳ご同行のサービスも行っております。'
          ],
          [
            'q' => '輸入アウトソーシングは可能でしょうか。',
            'a' => '可能です。輸入手続き、交渉、売買契約書の作成等全て当社名義で行いますので御社はノーリスクで安心して輸入が行えます。万が一サンプル品と実際の商品の品質など問題があった場合のクレームも当社でご対応させて頂きます。'
          ],
        ];

        foreach ($tradeFaq as $i => $item):
          $idx = $i + 1;
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTrade<?= $idx ?>">
              <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTrade<?= $idx ?>"
                aria-expanded="false"
                aria-controls="collapseTrade<?= $idx ?>">
                <p class="fw-bold mb-0">
                  <?= htmlspecialchars($item['q']) ?>
                </p>
              </button>
            </h2>
            <div id="collapseTrade<?= $idx ?>"
              class="accordion-collapse collapse"
              aria-labelledby="headingTrade<?= $idx ?>"
              data-bs-parent="#accordionTrade">
              <div class="accordion-body">
                <?= nl2br(htmlspecialchars($item['a'])) ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 外国人材サポート -->
      <h3 class="mb-4 fw-bold text-center">外国人材サポート</h3>
      <div class="accordion mb-5" id="accordionHr">
        <?php
        $hrFaq = [
          [
            'q' => '現在技能実習生の受け入れを検討しておりますが、どこの国からの受け入れが可能でしょうか、また何名から受け入れは可能でしょうか。',
            'a' => '弊社では現在、勤勉で真面目だと好評を頂いているベトナムからの受け入れを行っております。受け入れ人数は１名から可能です。また、受入れ可能な人数は受入れ企業の常勤雇用者（雇用保険被保険者）人数よって決められています。'
          ],
          [
            'q' => '技能実習生の申し込みから受け入れにはどのくらい期間が必要ですか？',
            'a' => '申し込みを頂いてから、日本に入国するまでは約6ヶ月の期間を頂いております。この期間中に技能実習生は母国で日本語、日本での生活一般に関する知識（歴史･文化、生活様式、職場のルール）、技能等の修得に資する知識（修得技能の目標･内容、職場の規律･心構え）についての学習を行います。知識だけでなく、身体共に磨かれた技能実習生が入国します。入国後は約1ヶ月の講習期間を経て受入れ企業に配属されます。'
          ],
          [
            'q' => '外国人技能実習生の受け入れを検討しているが、どの職種でも可能なのでしょうか',
            'a' => 'どの職種でも可能というわけではありません。技能実習生の受け入れができる作業は、82職種146作業での受け入れが可能となっております。詳細はお問合せ下さいませ。'
          ],
          [
            'q' => '技能実習生を社会保険に加入させることは必要ですか？',
            'a' => '技能実習生と企業の間では雇用契約を締結することから、労働基準法が適用され、社会保険（健康保険・厚生年金）、労働保険（雇用保険・労災保険）に加入させる必要があります。'
          ],
          [
            'q' => '技能実習生の受け入れではどんな費用がいくらかかりますか？',
            'a' => '選定費用・初期費用・監理費が技能実習生を受け入れるために必要です。詳しい金額はお気軽にお問い合わせください。'
          ],
          [
            'q' => '特定技能外国人を受け入れるために受入れ企業としての認定を受ける必要がありますか？',
            'a' => '受入れ企業が認定を受ける必要はありませんが，特定技能外国人を受け入れようとする場合，外国人本人に係る在留諸申請の審査において，受入れ企業が所定の基準を満たしている必要があります。'
          ],
          [
            'q' => '御社の日本語学校で学んだ人材の受け入れは可能でしょうか？',
            'a' => '可能です。弊社の日本語学校では、『外国人技能実習』『外国人エンジニア』『特定技能』などの就労で日本へ行く事が決定したベトナム人に対し、貴社のご希望に適した教育プログラムの作成により、より実践的な貴社に合った質の高い即戦力となる人材を育成することが可能です。'
          ],
        ];

        foreach ($hrFaq as $i => $item):
          $idx = $i + 1;
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingHr<?= $idx ?>">
              <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseHr<?= $idx ?>"
                aria-expanded="false"
                aria-controls="collapseHr<?= $idx ?>">
                <p class="fw-bold mb-0">
                  <?= htmlspecialchars($item['q']) ?>
                </p>
              </button>
            </h2>
            <div id="collapseHr<?= $idx ?>"
              class="accordion-collapse collapse"
              aria-labelledby="headingHr<?= $idx ?>"
              data-bs-parent="#accordionHr">
              <div class="accordion-body">
                <?= nl2br(htmlspecialchars($item['a'])) ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 海外コンサルティング -->
      <h3 class="mb-4 fw-bold text-center">海外コンサルティング</h3>
      <div class="accordion mb-5" id="accordionConsult">
        <?php
        $consultFaq = [
          [
            'q' => '海外進出にあたり現地での提携先を探したいのですが、サポートは可能ですか？',
            'a' => '可能です。お客様が希望される条件に合ったパートナーをピックアップし、面談を重ねながら貴社に合った提携先を数社ご提案させて頂き、パートナーとの契約締結までサポートします。'
          ],
          [
            'q' => '社内で海外進出を検討していますが、どの段階で相談すればよいですか？',
            'a' => '海外事業における目的を定められた時点でご相談ください。弊社では、対象国の選定等から支援させて頂きます。'
          ],
          [
            'q' => '海外での会社設立、登記などのサポートは可能でしょうか？',
            'a' => '事務所候補地の選定からライセンスの申請、銀行口座開設、社印登録、税務コードの登録、就業規則作成、現地の基準、法律に従った書類の準備、また、それらの書類は日本側でも確約書での手続きが必要となり弊社では一連の業務立上げをトータルサポート致します。'
          ],
          [
            'q' => 'すでに海外進出しているのですが、良い人材に恵まれません。良い人材のご紹介は可能ですか？',
            'a' => 'すでに海外進出している企業様だけでなく、これから進出される企業様へも人材のご紹介は可能です。弊社では、現地でのネットワークを活用させて幅広くニーズに合った人材を企業様へ提供させて頂くことが出来ます。'
          ],
          [
            'q' => '海外OEM生産を検討しておりますがサポートは可能でしょうか？',
            'a' => '可能です。弊社ではOEM生産だけでなく、生産委託先を探したい、自社商品を販売してくれる会社を探したい企業様など新しくビジネスを始めるにあたり取引先となる企業をベトナム政府機関をはじめとする現地ネットワークを活用し、信頼のおける企業との契約まで徹底コンサルティング致します。'
          ],
          [
            'q' => '海外進出にあたり不動産関係のご紹介は可能でしょうか？',
            'a' => '可能です。対象物件は工業団地、倉庫、賃貸住宅（駐在員用）、オフィス、店舗などで、あらゆるニーズご対応致します。弊社では賃主交渉の代行や転居・退去までお手伝いサポートさせて頂いております。'
          ],
          [
            'q' => '海外進出を検討しておりますが、現地視察などのサポートは可能でしょうか？',
            'a' => '海外進出を検討、もしくは進出希望の企業様へ、現地視察の徹底サポート（同行ガイド兼通訳、宿泊先ホテル、視察企業の選定、アポイント、チャーター車）致します。視察に関するあらゆる手配を承っております。'
          ],
          [
            'q' => '海外マーケティングリサーチは可能でしょうか？',
            'a' => '可能です。市場調査やマーケティング・リサーチには様々な方法があり、弊社では、お客様に最適な調査方法の設計から実行、報告までをオーダーメイドでご支援し、次のアクションへと繋がる市場調査、マーケティング・リサーチをおこないます。'
          ],
        ];

        foreach ($consultFaq as $i => $item):
          $idx = $i + 1;
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingConsult<?= $idx ?>">
              <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseConsult<?= $idx ?>"
                aria-expanded="false"
                aria-controls="collapseConsult<?= $idx ?>">
                <p class="fw-bold mb-0">
                  <?= htmlspecialchars($item['q']) ?>
                </p>
              </button>
            </h2>
            <div id="collapseConsult<?= $idx ?>"
              class="accordion-collapse collapse"
              aria-labelledby="headingConsult<?= $idx ?>"
              data-bs-parent="#accordionConsult">
              <div class="accordion-body">
                <?= nl2br(htmlspecialchars($item['a'])) ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 海外委託販売業務 -->
      <h3 class="mb-4 fw-bold text-center">海外委託販売業務</h3>
      <div class="accordion mb-5" id="accordionSales">
        <?php
        $salesFaq = [
          [
            'q' => '海外で自社製品を委託販売したいのですが可能でしょうか。',
            'a' => '可能です。弊社では中国のアジア最大のインターネットショッピングサイトに販売店舗が御座います。そちらの店舗にて貴社自社製品の出品が可能です。もちろん自社製品以外でも販売したい商品の出品も可能です。日本製品のリピーター率も高く、好評を得ております。但し、出品規制のある商品も御座いますのでまずはお問合せ下さいませ。'
          ],
          [
            'q' => '海外委託販売を依頼したいのですがどの様な準備が必要でしょうか？',
            'a' => 'ご契約お振込み後、販売したい商品写真数枚、商品情報の詳細、取り扱い方法などの情報をご提供頂きます。また、商品によっては規制が厳しい場合は追加で商品写真、商品情報の追加をお願いする場合は御座います。'
          ],
          [
            'q' => '物価の違いによる価格相場がわかりませんが金額はどのように決めたら良いでしょうか。',
            'a' => 'ご契約前に弊社中国スタッフが市場リサーチを行い報告書を発行致します。リサーチ内容は同商品が販売されているのかどうか、またはいくらで売られているのか、同商品が出品されていない場合は、類似商品の価格、または月にどれくらい売られているか等中国市場の傾向も含めて報告書を発行させて頂きますので、報告書を参考に送料、利益等含めて価格を決定して頂きます。'
          ],
          [
            'q' => '中国語がわかりませんが大丈夫でしょうか。',
            'a' => '問題御座いません。ご提出頂きました情報を中国現地スタッフが翻訳し、商品ページを作成致します。また、お問合せ、購入者へのご対応も全て現地スタッフが中国語で対応致しますのでご安心下さいませ。'
          ],
          [
            'q' => '商品はどの様に発送すればよいでしょうか。',
            'a' => '弊社では現地に商品倉庫が御座いますが、２種類の発送方法にてご対応ほうほうとさせて頂いております。商品をまとめて現地倉庫に発送して頂き、商品が販売されたら直接倉庫から発送させて頂く方法と、中国への送料は高くなりますが販売されたらお客様の元から直接購入者へ発送して頂く在庫を持たない発送方法が御座います。'
          ],
        ];

        foreach ($salesFaq as $i => $item):
          $idx = $i + 1;
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSales<?= $idx ?>">
              <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSales<?= $idx ?>"
                aria-expanded="false"
                aria-controls="collapseSales<?= $idx ?>">
                <p class="fw-bold mb-0">
                  <?= htmlspecialchars($item['q']) ?>
                </p>
              </button>
            </h2>
            <div id="collapseSales<?= $idx ?>"
              class="accordion-collapse collapse"
              aria-labelledby="headingSales<?= $idx ?>"
              data-bs-parent="#accordionSales">
              <div class="accordion-body">
                <?= nl2br(htmlspecialchars($item['a'])) ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
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