<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rescue Dog</title>
    <link rel="stylesheet" href="assets/css/variable.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="responsive.css" />
  </head>
  <body>
    <!-- header ----------------------->
    <header class="header flex">
      <!-- <div class="flex"> -->
      <div class="flex">
        <h1 class="logo">
          <a href="#">
            <img src="assets/img/RescueDog.png" alt="レスキュードッグのロゴ" />
          </a>
        </h1>
        <ul class="reception">
          <li>電話番号:<a href="tel:0000-00-0000">0000-00-0000</a></li>
          <li>受付時間:午前9時～午後6時</li>
        </ul>
      </div>
      <nav id="header-nav" class="header-nav">
        <ul class="nav-menu flex">
          <li><a href="#">トップ</a></li>
          <li><a href="#"> ワンちゃん紹介 </a></li>
          <li>
            <a href="">譲渡について</a>
            <ul class="sub-menu">
              <li><a href="#b">譲渡の流れ</a></li>
              <li><a href="#c   ">譲渡の条件</a></li>
            </ul>
          </li>
          <li><a href="#">ご支援について</a></li>
          <li><a href="#">私たちについて</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>
      <nav id="open-nav" class="open-nav">
        <ul class="nav-menu flex">
          <li><a href="#">トップぺージ</a></li>
          <li><a href="#">ワンちゃん紹介</a></li>
          <li>
            譲渡について
            <ul class="sub-menu">
              <li><a href="#">譲渡の流れ</a></li>
              <li><a href="#">譲渡の条件</a></li>
            </ul>
          </li>
          <li><a href="#">ご支援について</a></li>
          <li><a href="#">私たちについて</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>
      <button
        class="ham"
        aria-controls="open-nav"
        aria-expanded="false"
        aria-label="メニューを開く"
      >
        <span class="ham1"></span>
        <span class="ham2"></span>
        <span class="ham3"></span>
      </button>
      <!-- </div> -->
    </header>
    <!-- main ------------------------->
    <main class="front-page main">
      <!-- mainvisual --------->
      <section class="mainvisual">
        <picture class="hero-image">
          <source
            media="(min-width: 767px)"
            srcset="assets/img/mainvisual-pc.webp"
          />
          <img src="assets/img/mainvisual-sp.webp" alt="ボーダーコリー" />
        </picture>
        <div class="catchphrase">
          <h2>小さな命を、大切な家族へ。</h2>
          <p>
            西宮・宝塚エリアで活動する小さな動物保護施設。<br class="blank" />
            様々な理由で保護した犬を<br />新しい家族へ迎え入れる活動をしています。
          </p>
          <div class="flex hero-buttons">
            <div class="hero-button search">
              <a href="#">保護犬を探す</a>
            </div>
            <div class="hero-button">
              <a href="#support">支援をする</a>
            </div>
          </div>
        </div>
      </section>
      <!-- news ------------->
      <section class="news wrapper">
        <h2 class="section-title">お知らせ</h2>
        <ul class="lists">
          <li class="item">
            <a href="#">
              <p class="date">2026年5月24日</p>
              <h3 class="item-title">ボランティアさんと散歩へ</h3>
              <p class="text">
                今日は、大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">もっと読む</p></a
            >
          </li>
          <li class="item">
            <a href="#">
              <p class="date">2026年5月24日</p>
              <h3 class="item-title">ボランティアさんと散歩へ</h3>
              <p class="text">
                今日は、大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">もっと読む</p></a
            >
          </li>
          <li class="item">
            <a href="#">
              <p class="date">2026年5月24日</p>
              <h3 class="item-title">ボランティアさんと散歩へ</h3>
              <p class="text">
                今日は、大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">もっと読む</p></a
            >
          </li>
        </ul>
        <div class="button">
          <a href="#">お知らせの一覧を見る</a>
        </div>
      </section>
      <!-- dogs -------------->
      <section class="dogs bg">
        <h2 class="section-title">ワンちゃん紹介</h2>
        <ul class="lists grid">
          <li class="item">
            <a href="#">
              <div class="image">
                <img src="assets/img/volunteer.webp" alt="ワンコ" />
              </div>
              <h3 class="name">リリー</h3>
              <ul class="attribute flex">
                <li>推定５歳</li>
                <li>女の子</li>
              </ul>
            </a>
          </li>
          <li class="item">
            <a href="#">
              <div class="image">
                <img src="assets/img/volunteer.webp" alt="ワンコ" />
              </div>
              <h3 class="name">リリー</h3>
              <ul class="attribute flex">
                <li>推定５歳</li>
                <li>女の子</li>
              </ul>
            </a>
          </li>
          <li class="item">
            <a href="#">
              <div class="image">
                <img src="assets/img/volunteer.webp" alt="ワンコ" />
              </div>
              <h3 class="name">リリー</h3>
              <ul class="attribute flex">
                <li>推定５歳</li>
                <li>女の子</li>
              </ul>
            </a>
          </li>
        </ul>
        <div class="button">
          <a href="#">ワンちゃんをもっと見る</a>
        </div>
      </section>
      <!-- story -->
      <section class="story wrapper">
        <p>
          やむを得ずペットを手放さなければならなくなった飼い主や<br />
          多頭飼育崩壊から救われた命を優しく包み込み<br />
          里親探しの架け橋となる活動をしています。
        </p>
        <p>
          彼らが再び愛と温かさに満ちた 温かい家庭で幸せに暮らせるよう<br />
          私たちは一緒に歩み 心をこめて支えています。
        </p>
        <p>彼らと共に織りなす感動のストーリーに ご参加いただければ幸いです。</p>
      </section>
      <!-- about -->
      <section class="about">
        <div class="inner">
          <h2 class="section-title">私たちについて</h2>
          <p>
            私たちは犬たちの未来を明るく照らす小さな力となることを使命とし、
            責任をもって犬の保護に取り組んでいます。
          </p>
          <p>
            必病気やケガを抱えた犬たちには、獣医師と連携し、必要な医療を提供。
            隣接した動物病院と協力し、ワクチンや予防接種などの健康管理を徹底しています。
            <br />
            しつけが必要な犬たちには、専門のトレーニングを通じて新しい家庭での幸せな生活へのステップアップをサポート。
            <br />
            また、犬それぞれの必要な運動量に合わせ、充実した散歩を通じて体力と心の健康を促進しています。
          </p>
          <p>
            私たちは一貫して殺処分ゼロを目指し、一匹でも多くの命が安心して幸せな場所で過ごせるよう努めています。
            あなたと共に、未来を照らす一歩を踏み出していきたいと考えています。
          </p>
          <a class="link">私たちについて詳しく読む</a>
        </div>
      </section>
      <!-- support -->
      <section class="support wrapper">
        <h2 class="section-title">ご支援について</h2>
        <div class="grid">
          <div class="donation item">
            <a href="">
              <p>物資や寄付などの<br class="blank" />ご支援ページへ</p></a
            >
          </div>
          <div class="volunteer item">
            <a href="#">
              <p>ボランティアでの<br class="blank" />支援ページへ</p></a
            >
          </div>
        </div>
      </section>
    </main>
    <!-- footer ----------------------->
    <footer class="footer">
      <div class="flex wrapper">
        <div class="item">
          <img
            class="logo"
            src="assets/img/RescueDog.png"
            alt="レスキュードッグのロゴ"
          />
          <dl class="reception grid">
            <dt>電話番号：</dt>
            <dd><a href="tel:09000000000">090-0000-0000</a></dd>
            <dt>受付時間：</dt>
            <dd>午前9時～午後6時</dd>
          </dl>
        </div>
        <nav id="footer-nav" class="footer-nav">
          <ul>
            <li><a href="#">トップページ</a></li>
            <li><a href="#">ワンちゃん紹介</a></li>
            <li><a href="#">譲渡の条件</a></li>
            <li><a href="#">譲渡の流れ</a></li>
            <li><a href="#">お知らせ一覧ページ</a></li>
            <li><a href="#">私たちについて</a></li>
            <li><a href="#">ご支援について</a></li>
            <li><a href="#">ボランティアさん募集</a></li>
            <li><a href="#">お問い合わせ</a></li>
            <li><a href="#">収支報告一覧ページ</a></li>
            <li><a href="#">プライバシーポリシー</a></li>
          </ul>
        </nav>
      </div>
      <p class="copyright">&copy;<span id="year"></span> RESCUE DOG</p>
    </footer>
    <script src="main.js"></script>
  </body>
</html>
