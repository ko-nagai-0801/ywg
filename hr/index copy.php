<?php // hr/index.php 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="YWGインターナショナル株式会社の会社概要ページです。">
  <link rel="icon" href="../favicon.ico">
  <title>外国人材紹介 | YWGインターナショナル株式会社</title>

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
  <link rel="stylesheet" href="../css/hr.css">
</head>

<body>
  <?php include('../includes/header.php'); ?>

  <!-- メインコンテンツ -->
  <main id="main-content" class="main-content">

    <!-- サブヒーロー -->
    <section id="subhero" class="subhero parallax">
      <div class="subhero__inner">
        <p class="subhero-subtitle">Human Resources</p>
        <h1 class="subhero-title">外国人材紹介</h1>
      </div>
    </section>


    <!-- =====================================================
       01 外国人技能実習生
  ===================================================== -->
    <section id="trainee" class="container hr__section py-5">

      <h2 class="hr__section-heading mb-4">外国人技能実習生</h2>

      <div class="row mb-5">
        <!-- 1-A 説明 -->
        <div class="col-lg-6">
          <div class="hr__content">
            <h3 class="hr__section-subheading mb-3">外国人技能実習生制度とは</h3>
            <p>
              外国人技能実習制度は、日本の企業において発展途上国の若者を技能実習生として受け入れ、実際の実務を通じて実践的な技術や技能・知識を学び、帰国後母国の経済発展に役立ててもらうことを目的とした公的制度です。
            </p>
            <p>
              一般的に受入れ可能職種に該当する企業様は、組合のような監理団体を通じて技能実習生を受け入れることができます。入国した実習生は、実習実施機関（受入れ企業様）と雇用関係を結び、実践的な能力を高めるために１年～３年間の技能実習に入ります。
            </p>
          </div>
        </div>
        <!-- 1-B カルーセル -->
        <div class="col-lg-6">
          <div id="traineeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <!-- 5 dots -->
              <button type="button" data-bs-target="#traineeCarousel" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#traineeCarousel" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#traineeCarousel" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#traineeCarousel" data-bs-slide-to="3"></button>
              <button type="button" data-bs-target="#traineeCarousel" data-bs-slide-to="4"></button>
            </div>
            <div class="carousel-inner rounded">
              <!-- 画像5枚 -->
              <div class="carousel-item active">
                <img src="../img/hr/hr-trainee-01.jpg" alt="技能実習の様子1" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="../img/hr/hr-trainee-02.jpg" alt="技能実習の様子2" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="../img/hr/hr-trainee-03.jpg" alt="技能実習の様子3" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="../img/hr/hr-trainee-04.jpg" alt="技能実習の様子4" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="../img/hr/hr-trainee-05.jpg" alt="技能実習の様子5" loading="lazy">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#traineeCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#traineeCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>

      <!-- 1-C ボックス２種 -->
      <div class="hr__box-container mb-5">

        <!-- オススメ -->
        <div class="hr__box mb-3">
          <h4 class="hr__box-title">こんな企業様にオススメ</h4>
          <ul class="hr__box-list">
            <li>若手の活用により社内の活性化を図りたい。</li>
            <li>今後ベトナム等、海外進出を検討している。</li>
            <li>建設関係、機械・金属関係など技能実習対象職種・作業に該当する企業</li>
          </ul>
        </div>
        <!-- メリット -->
        <div class="hr__box mb-3">
          <h4 class="hr__box-title">採用メリット</h4>
          <ul class="hr__box-list">
            <li>基礎技術を持つ人材の活用が可能</li>
            <li>３年の長期で安定した人材確保が可能</li>
          </ul>
        </div>

      </div>

      <!-- 最下部テキスト -->
      <p class="trainee-bottom-text">
        当社では、基礎技術を習得した勤勉な人材ベトナムやその他の若手人材を技能実習生として企業様へご紹介致します。
      </p>

    </section>


    <!-- =====================================================
       02 外国人エンジニア（以下レイアウトは変更なし）
  ===================================================== -->
    <section id="engineer" class="container hr__section py-5">

      <h2 class="hr__section-heading mb-4">外国人エンジニア</h2>

      <!-- ① 定義＋カルーセル -->
      <div class="row gy-4 align-items-start mb-5">
        <div class="col-lg-6">
          <div class="hr__content">
            <h3 class="hr__section-subheading">外国人エンジニア（技術者）とは</h3>
            <p>
              外国人が日本に滞在するために必要な在留資格
              「技術・人文知識・国際業務」の「技術」に相当する資格です。日本で就職する外国人はこの在留資格により滞在が許可され、
              在留資格の内容と異なる活動（仕事）を行うことはできません。
            </p>

            <h3 class="hr__section-subheading">外国人エンジニアの技術力</h3>
            <p>
              ベトナム・中国・インドなどの外国人エンジニアは AI やブロックチェーン等、先端技術分野で高い技術力を保有しています。
              日本人エンジニアと比較しても遜色なく活躍できます。
            </p>
          </div>
        </div>

        <!-- カルーセル -->
        <div class="col-lg-6">
          <div id="engineerCarousel" class="carousel slide rounded" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#engineerCarousel" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#engineerCarousel" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#engineerCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner rounded">
              <div class="carousel-item active"><img src="../img/hr/hr-engineer-01.jpg" alt="エンジニア画像1" loading="lazy"></div>
              <div class="carousel-item"><img src="../img/hr/hr-engineer-02.jpg" alt="エンジニア画像2" loading="lazy"></div>
              <div class="carousel-item"><img src="../img/hr/hr-engineer-03.jpg" alt="エンジニア画像3" loading="lazy"></div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#engineerCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#engineerCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>

      <!-- ② メリット（番号付き＋説明） -->
      <h3 class="hr__section-subheading mb-3">【外国人エンジニアのメリット】</h3>
      <ol class="benefit-list mb-5">
        <li>
          <strong>仕事へのモチベーションが高い</strong>
          <p>
            スキルを持った人材が「日本で働きたい！」と考え、日本語を学習して来日します。日本で働くことが目的なので仕事に対するモチベーションが違います。これは離職リスクが低いことにもつながります。
          </p>
        </li>
        <li>
          <strong>雇用期間に制限がない</strong>
          <p>
            技能実習生の場合、制度上1～3年（最長5年）で母国に帰国することになります。技術者の場合は在留資格に定められた期間において滞在・就労が可能であり、資格の更新もできるため長く働くことができます。10年以上働くと永住権の取得も可能になります。
          </p>
        </li>
        <li>
          <strong>外国人雇用の体制づくりが進む</strong>
          <p>
            エンジニアの追加採用、技能実習生の受け入れなど今後の人材調達において外国人労働者の採用を考えたとき、その管理指導を行うポジションを任せることもでき、よりスムーズな受け入れが期待できます。
          </p>
        </li>
      </ol>

      <!-- ③ YWG の強み -->
      <div class="hr__box-container mb-5">
        <div class="hr__box mb-3">
          <h4 class="hr__box-title">YWGの強み</h4>
          <div class="p-3">
            当社では、求人企業様の業種・職種により、優秀なベトナム人エンジニアをご紹介させて頂き、人材の選定から入国後のフォローまで、万全のサービス体制で企業様をサポートいたします。
          </div>
        </div>
      </div>

      <!-- ④ 対象職種 -->
      <h4 class="hr__subheading mb-2">【対象職種】</h4>
      <ul class="role-list">
        <li>3D・CADオペレーター</li>
        <li>制御システム</li>
        <li>ネットワーク・サーバ運用・保守</li>
        <li>ネットワーク・サーバ設計・構築</li>
        <li>通信インフラ設計・構築</li>
        <li>パッケージソフト・OS開発</li>
        <li>サポート、ヘルプデスク</li>
        <li>アプリケーション開発</li>
        <li>電気・電子技術者、機械技術者</li>
        <li>品質・生産管理</li>
        <li>サービスエンジニア</li>
        <li>整備士</li>
        <li>機械・機構設計、回路設計</li>
        <li>電気・電子・機械・半導体技術関連</li>
        <li>MC・NC工作機械技術者</li>
        <li>半導体設計、生産技術</li>
        <li>筐体設計</li>
        <li>金型設計</li>
      </ul>

    </section>


    <!-- =====================================================
      03 特定技能
  ===================================================== -->
    <!--  -->
    <section id="tokutei" class="container hr__section py-5">
      <div class="container">

        <!-- タイトル -->
        <h2 class="hr__section-heading mb-4">特定技能</h2>

        <!-- 背景説明 -->
        <div class="row mb-5">
          <div class="hr__content mb-5 col-lg-6">
            <h3 class="hr__section-subheading">【背景】</h3>
            <p>
              中小規模事業者をはじめとした人手不足は深刻化しており、我が国の経済・社会基盤の持続可能性を阻害する可能性があります。
              そのため現行制度を拡充し、真に受入れが必要と認められる分野において、一定の専門性・技能を有する外国人材を幅広く受け入れる
              仕組みとして <strong>在留資格「特定技能」</strong> が創設されました。
            </p>
            <p>
              週 28 時間内のアルバイトや単純労働が認められない技能実習生だけでは賄い切れない
              労働力不足を解消するため、一定のルールのもとで外国人の新たな就労を認める制度です。
            </p>
          </div>

          <!-- カルーセル -->
          <div class="col-lg-6">
            <div id="tokuteiCarousel" class="carousel slide rounded" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#tokuteiCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#tokuteiCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#tokuteiCarousel" data-bs-slide-to="2"></button>
              </div>
              <div class="carousel-inner rounded">
                <div class="carousel-item active"><img src="../img/hr/hr-tokutei-01.jpg" alt="特定技能画像1" loading="lazy"></div>
                <div class="carousel-item"><img src="../img/hr/hr-tokutei-02.jpg" alt="特定技能画像2" loading="lazy"></div>
                <div class="carousel-item"><img src="../img/hr/hr-tokutei-03.jpg" alt="特定技能画像3" loading="lazy"></div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#tokuteiCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#tokuteiCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 特定技能の特徴 -->
      <h4 class="hr__section-subheading mb-3">【特定技能の特徴】</h4>
      <ol class="benefit-list mb-5">
        <li>
          <strong>単純労働の就労が可能</strong>
          <p>
            今までの日本政府は外国人の単純労働での在留資格は認めていませんでした。しかし、「特定技能」の在留資格では日本国内の少子化、高齢社会の進行による人手不足を補うために単純労働の就労が可能。
          </p>
        </li>
        <li>
          <strong>学歴要件、実務経験は必要ない</strong>
          <p>
            日本における就労できる代表的な在留資格（ビザ）「技術・人文知識・国際業務」では原則学歴もしくは実務経験 が求められますが、在留資格「特定技能」では必要ありません。一定以上の知識や技能レベルがあるかどうかは試験によって確認され、在留資格「特定技能」が許可されます。
          </p>
        </li>
      </ol>

      <!-- 業種リスト(14) -->
      <h4 class="hr__section-subheading mb-2">【特定技能14業種】</h4>
      <ul class="industry-list mb-3">
        <li>介護</li>
        <li>ビルクリーニング</li>
        <li>素形材産業</li>
        <li>産業機械製造業</li>
        <li>電気・電子情報関連産業</li>
        <li><u>建設</u></li>
        <li><u>造船・舶用工業</u></li>
        <li>自動車整備</li>
        <li>航空</li>
        <li>宿泊</li>
        <li>農業</li>
        <li>漁業</li>
        <li>飲食料品製造業</li>
        <li>外食業</li>
      </ul>
      <p class="note">
        ※特定技能 1 号は 14 分野で受入れ可。下線の 2 分野（建設、造船・舶用工業）のみ特定技能 2 号の受入れ可
      </p>

      </div>
    </section>

    <!-- =====================================================
       04 外国人材アルバイト紹介（サンプル文）
  ===================================================== -->
    <section id="parttime" class="container hr__section py-5" aria-labelledby="parttime-title">

      <h2 id="parttime-title" class="hr__section-heading mb-4">外国人材アルバイト紹介</h2>

      <!-- A. 説明 + 画像 -->
      <div class="row gy-4 align-items-start mb-5">
        <!-- 説明 -->
        <div class="col-lg-6">
          <div class="hr__content">
            <h3 class="hr__section-subheading">（◆サンプル◆）サービス概要</h3>
            <p>
              （◆◆◆サンプルテキスト◆◆◆）<br>
              短時間の人手不足をスピーディに補いたい企業様向けに、在留資格の範囲内で就労可能な外国人材をご紹介します。
              受入れ前に<span class="fw-bold">在留資格・資格外活動許可・週28時間上限の確認</span>など、法令順守の事前チェックを実施。
              文化・コミュニケーションへの配慮も含め、現場にフィットする人選と定着支援まで伴走いたします。
            </p>

            <h3 class="hr__section-subheading mt-4">（◆サンプル◆）こんな企業様に</h3>
            <ul class="hr__box-list">
              <li>急な欠員・繁忙期のシフト補完が必要</li>
              <li>夜間・早朝・土日など特定時間帯の人手不足</li>
              <li>多言語接客・インバウンド対応を強化したい</li>
            </ul>
          </div>
        </div>


        <!-- アルバイト画像 カルーセル -->
        <div class="col-lg-6">
          <div id="parttimeCarousel" class="carousel slide rounded" data-bs-ride="carousel" aria-label="アルバイト紹介ギャラリー">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#parttimeCarousel" data-bs-slide-to="0" class="active" aria-label="1枚目"></button>
              <button type="button" data-bs-target="#parttimeCarousel" data-bs-slide-to="1" aria-label="2枚目"></button>
              <button type="button" data-bs-target="#parttimeCarousel" data-bs-slide-to="2" aria-label="3枚目"></button>
            </div>

            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="../img/hr/hr-parttime-01.jpg" alt="アルバイト紹介イメージ1" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="../img/hr/hr-parttime-02.jpg" alt="アルバイト紹介イメージ2" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="../img/hr/hr-parttime-03.jpg" alt="アルバイト紹介イメージ3" loading="lazy">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#parttimeCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">前へ</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#parttimeCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">次へ</span>
            </button>
          </div>
        </div>

      </div>

      <!-- 受入れ前チェック（法令遵守の観点） -->
      <div class="hr__box-container mb-5">
        <div class="hr__box mb-3">
          <h4 class="hr__box-title">（◆サンプル◆）受入れ前の主なチェック項目</h4>
          <ul class="hr__box-list">
            <li>在留カード確認（在留資格・在留期間）</li>
            <li>資格外活動許可の有無（留学等の場合）</li>
            <li>就労可能な職務内容と時間帯（本人の契約条件に適合）</li>
            <li>週28時間以内の時間管理（学則等の制限がある場合）</li>
          </ul>
        </div>
      </div>




      <!-- B. 対応分野（例） -->
      <h3 class="hr__section-subheading mb-3">対応分野（例）</h3>
      <ul class="industry-list mb-5">
        <li>飲食・フードサービス（ホール／キッチン補助）</li>
        <li>小売・販売（接客／品出し／レジ補助）</li>
        <li>物流・倉庫（ピッキング／仕分け／梱包）</li>
        <li>ホテル・清掃（客室清掃／共用部清掃 等）</li>
        <li>製造補助（軽作業／検品）</li>
        <li>コール・バックオフィス（日本語レベル応相談）</li>
      </ul>

    </section>



    <!-- =====================================================
      05 富士国際日本語教育学園
===================================================== -->
    <section id="fuji" class="container hr__section py-5">

      <!-- タイトル + ロゴ -->
      <h2 class="hr__section-heading mb-3">富士国際日本語教育学園</h2>

      <div class="fuji__box row mb-4">
        <div class="col-lg-8">
          <p>
            『外国人技能実習』『外国人エンジニア』『特定技能』などの就労で日本へ行くことが決定した
            ベトナム人に対し、企業様からご依頼を頂き、質の高い即戦力となる人材を育成するため、
            ハノイ市内にベトナム人経営者と共に富士国際日本語教育学園を開校致しました。
          </p>
          <p>
            外国人が異国で就労する上で、仕事面の即戦力はもちろんのこと、
            まずは日本の生活・風習・文化に馴染めるかという課題に直面します。
          </p>
          <p>
            当学園では日本語コミュニケーション能力だけでなく、ビジネスマナーや生活ルール、
            日本人とのコミュニケーション方法、仕事の進め方まで含めた独自カリキュラムを構築。
            即戦力として日本社会に適応できるワンランク上の人材を育成しています。
          </p>
        </div>
        <div class="col-lg-4">
          <div class="fuji-logo-wrap">
            <img src="../img/hr/hr-fuji-logo.jpg" alt="富士国際日本語教育学園 ロゴ" class="fuji-logo">
          </div>
        </div>
      </div>

      <!-- 校内・授業風景画像（任意で複数枚） -->
      <figure class="hr__figure mb-5">
        <img src="../img/hr/hr-fuji-img.jpg"
          alt="富士国際日本語教育学園の授業風景"
          loading="lazy"
          class="img-fluid rounded">
      </figure>

      <!-- 特徴ボックス -->
      <div class="hr__box-container mb-5">
        <div class="hr__box mb-5">
          <h4 class="hr__box-title">富士国際日本語教育学園 の特徴</h4>
          <ul class="hr__box-list fuji-features">
            <li>貴社のご希望に適した教育プログラムの作成により、より実践的な人材教育が可能</li>
            <li>日本語だけでなく、日本を熟知した即戦力人材の育成が可能</li>
            <li>寮完備により集中した上達の早い人材教育、個別指導にも対応</li>
            <li>日本語能力試験 N5 を取得させて送り出し</li>
          </ul>
        </div>
      </div>

      <!-- ビジネス教育プラン -->
      <p class="hr__content mb-5">
        当社ではビジネス教育プランをご利用頂く事により、企業様ごとに合った即戦力となる人材を育成し、
        幅広い業種の日本企業様へ優秀なベトナム人材を送り出しております。
      </p>

      <!-- カルーセル -->
      <div class="carousel-wrapper">
        <div id="fujiCarousel" class="carousel slide rounded" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#fujiCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#fujiCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#fujiCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#fujiCarousel" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#fujiCarousel" data-bs-slide-to="4"></button>
          </div>
          <div class="carousel-inner rounded">
            <div class="carousel-item active"><img src="../img/hr/hr-fuji-01.jpg" alt="富士国際日本語教育学園1" loading="lazy"></div>
            <div class="carousel-item"><img src="../img/hr/hr-fuji-02.jpg" alt="富士国際日本語教育学園2" loading="lazy"></div>
            <div class="carousel-item"><img src="../img/hr/hr-fuji-03.jpg" alt="富士国際日本語教育学園3" loading="lazy"></div>
            <div class="carousel-item"><img src="../img/hr/hr-fuji-04.jpg" alt="富士国際日本語教育学園4" loading="lazy"></div>
            <div class="carousel-item"><img src="../img/hr/hr-fuji-05.jpg" alt="富士国際日本語教育学園5" loading="lazy"></div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#fujiCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#fujiCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <!-- 住所 -->
        <address class="hr__content">
          <strong>住所：</strong>BT2.9 Khu đô thị chức năng Tây Mỗ, Nam Từ Liêm, Hà Nội【ハノイ市西部】
        </address>
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