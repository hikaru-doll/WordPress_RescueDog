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
    <main class="contact-php main">
      <div class="wrapper">
        <h1 class="title">お問い合わせ</h1>
        <div class="contact-form-7">contact form 7</div>
      </div>
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
