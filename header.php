<?php
defined('ABSPATH') || exit;
?>
<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rescue Dog</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header ----------------------->
  <header class="header flex">
    <!-- <div class="flex"> -->
    <div class="flex">
      <h1 class="logo">
        <a href="#">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/RescueDog.png" alt="レスキュードッグのロゴ" />
        </a>
      </h1>
      <ul class="reception">
        <li>電話番号:<a href="tel:0000-00-0000">0000-00-0000</a></li>
        <li>受付時間:午前9時～午後6時</li>
      </ul>
    </div>
    <!-- WP標準機能のメニューマネージャー使用 ----->
    <!-- PC用のヘッダーのナビゲーション -->
    <?php wp_nav_menu(
      array(
        'theme_location' => 'global_nav',
        'container' => 'nav',
        'container_class' => 'header-nav',
        'menu_class' => 'nav-menu',
        // サブメニューの開閉の<button>を挿入するために書き換える
        'walker' => new Accessible_Nav_Walker(),
      )
    ); ?>
    <!-- SP用のハンバーガーメニューのナビゲーション -->
    <?php wp_nav_menu(
      array(
        'theme_location' => 'hamburger_nav',
        'container' => 'nav',
        'container_class' => 'open-nav',
        'menu_class' => 'nav-menu',
      )
    ); ?>
    <button
      class="ham"
      aria-controls="open-nav"
      aria-expanded="false"
      aria-label="メニューを開く">
      <span class="ham1"></span>
      <span class="ham2"></span>
      <span class="ham3"></span>
    </button>
  </header>