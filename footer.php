<?php
defined('ABSPATH') || exit;
?>
<!-- footer ----------------------->
<footer class="footer">
  <p class="attention">※本サイトは架空の施設を想定して制作したポートフォリオ作品です。実在する施設ではありません。</p>

  <div class="flex wrapper">
    <div class="item">
      <img
        class="logo"
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/RescueDog.png"
        alt="レスキュードッグのロゴ" />
      <dl class="reception grid">
        <dt>電話番号：</dt>
        <dd><a href="tel:09000000000">090-0000-0000</a></dd>
        <dt>受付時間：</dt>
        <dd>午前9時～午後6時</dd>
      </dl>
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
  </div>
  <p class="copyright">&copy;<span id="year"></span> RESCUE DOG</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>