<?php
defined('ABSPATH') || exit;
?>

<!-- footer ----------------------->
<footer class="footer">
  <div class="flex wrapper">
    <div class="item">
      <img
        class="logo"
        src="assets/img/RescueDog.png"
        alt="レスキュードッグのロゴ" />
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
<?php wp_footer(); ?>
</body>

</html>