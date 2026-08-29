<?php
defined('ABSPATH') || exit;
?>
<!-- footer ----------------------->
<footer class="footer">
  <p class="attention">※本サイトは架空の施設を想定して制作したポートフォリオ作品です。実在する施設ではありません。</p>

  <div class="footer-container grid wrapper">
    <div class="item">
      <img
        class="logo"
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/RescueDog.png"
        alt="レスキュードッグのロゴ" />
      <dl class="reception grid">
        <dt>所在地</dt>
        <dd>〒665-0000<br>兵庫県宝塚市子犬町1-2-3</dd>
        <dt>電話番号</dt>
        <dd><a href="tel:0000000000">0000-00-0000</a></dd>
        <dt>受付時間</dt>
        <dd>午前9時～午後6時</dd>
      </dl>
    </div>
    <div class="access">
      <iframe title="アクセスマップ" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.910554096172!2d135.34233507452436!3d34.80819212743968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000f45d6ecc9fa3%3A0xfffca8c820285434!2z44CSNjY1LTA4NDUg5YW15bqr55yM5a6d5aGa5biC5qCE55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1787924488610!5m2!1sja!2sjp" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
    <!-- WP標準機能のメニューマネージャー使用 -->
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footer_nav',
        'container' => 'nav',
        'container_class' => 'footer-nav',
        'menu_class' => 'footer-nav-menu',
      )
    ); ?>

  </div>
  <p class="copyright">&copy;<span id="year"></span> RESCUE DOG</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>