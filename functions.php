<?php
defined('ABSPATH') || exit;
?>
<?php
function rescueDog_enqueue_styles()
{
  // CSS・JSファイル読み込み----------
  $uri = get_theme_file_uri();
  wp_enqueue_style(
    'variable',
    $uri . '/assets/css/variable.css',
    array(),
    filemtime(get_theme_file_path('/assets/css/variable.css'))
  );
  wp_enqueue_style(
    'reset',
    $uri . '/assets/css/reset.css',
    array('variable'),
    filemtime(get_theme_file_path('/assets/css/reset.css'))
  );
  wp_enqueue_style(
    'style',
    $uri . '/style.css',
    array('reset'),
    filemtime(get_theme_file_path('/style.css'))
  );
  wp_enqueue_style(
    'main',
    $uri . '/assets/css/main.css',
    array('style'),
    filemtime(get_theme_file_path('/assets/css/main.css'))
  );
  wp_enqueue_style(
    'responsive',
    $uri . '/responsive.css',
    array('main'),
    filemtime(get_theme_file_path('/responsive.css'))
  );
  wp_enqueue_script(
    'my-script',
    get_theme_file_uri('/main2.js'),
    array(),
    filemtime(get_theme_file_path('/main2.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'rescueDog_enqueue_styles');

//セットアップ------------------------
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');
// メインクエリの件数制御--------------------------------
function my_custom_posts_per_page($query)
{
  // 管理画面には影響を与えない
  if (! is_admin() && $query->is_main_query()) {
    // ワンちゃん紹介（archive-dogs.php)に適用
    if (is_post_type_archive('dogs')) {
      $query->set('posts_per_page', -1);
      // お知らせ一覧（home.php)に適用
    } elseif (is_home()) {
      $query->set('posts_per_page', 10);
    }
  }
}
add_action('pre_get_posts', 'my_custom_posts_per_page');
// デフォルト投稿の管理画面メニューのラベル変更---------
add_action(
  'admin_menu',
  function () {
    global $menu;
    $menu[5][0] = 'お知らせ♬';
  }
);
// カスタム投稿タイプの使用----------------------
function create_my_post_type()
{
  register_post_type(
    'dogs', //このクエリの識別子（スラッグ）
    array(
      'label' => 'ワンちゃん紹介', //管理画面のサイドメニューに表示されるラベル
      'public' => true,
      'hierarchical' => false, //ヒエラルキー（階層）を持つかどうか
      // trueにすると、固定ページになる（？）
      'has_archive' => true, //trueなら設定からpermalinkを更新する
      'show_in_rest' => true,
      'menu_position' => 4, //デフォルトポストの下
      'menu_icon' => 'dashicons-pets',
      'taxonomies' => array(
        'category'
      ),
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'custom-fields'
      ),
    ),
  );
  register_post_type(
    'reports',
    array(
      'label' => '収支報告一覧',
      'public' => true,
      'hierarchical' => false,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-money-alt',
      'taxonomies' => array(
        'category'
      ),
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'custom-fields'
      ),
    ),
  );
}
add_action('init', 'create_my_post_type');
// WordPress標準機能のメニューを登録する-----------
register_nav_menus([
  'global_nav' => 'グローバルナビ',
  'hamburger_nav' => 'ハンバーガーナビ',
  'footer_nav' => 'フッターナビ',
]);

// 構造化データ-----------------------------------
function insert_custom_structured_data()
{
  // トップページの場合
  if (is_front_page() || is_home()) {
?>
    <script type="application/ld-json">
      {
          "@context": "https://schema.org",
          "@type": "AnimalShelter",
          "name": "Rescue Dog",
          "image": "https://hikarudoll.xsrv.jp/rescue-dog/assets/img/mainvisual-pc.webp",
          "url": "https://hikarudoll.xsrv.jp/rescue-dog",
          "telephone": "0000-00-0000",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "宝塚市子犬町1-2-3",
            "addressLocality": "兵庫県",
            "postalCode": "665-000",
            "addressCountry": "JP"
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
              ],
              "opens": "9:00",
              "closes": "18:00"
            }
          ]
        }        
    </script>
<?php
  }
}
add_action('wp_head', 'insert_custom_structured_data');


// Walkerクラス
class Accessible_Nav_Walker extends Walker_Nav_Menu
{

  // 各メニュー項目の開始タグ
  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $has_children = in_array('menu-item-has-children', $item->classes);

    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $class_names = join(' ', array_filter($classes));

    $output .= '<li class="' . esc_attr($class_names) . '">';

    if ($has_children) {
      // 子メニューを持つ項目 → 開閉専用のbutton(遷移なし)
      $output .= '<button type="button" class="menu-toggle-button" aria-haspopup="true" aria-expanded="false">';
      $output .= esc_html($item->title);
      $output .= '<span class="menu-toggle-icon" aria-hidden="true"></span>';
      $output .= '</button>';
    } else {
      // 子メニューを持たない項目 → 通常のリンク
      $output .= '<a href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a>';
    }
  }

  // 子メニュー(<ul>)の開始タグ
  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $output .= '<ul class="sub-menu">';
  }

  // 子メニュー(<ul>)の終了タグ
  function end_lvl(&$output, $depth = 0, $args = null)
  {
    $output .= '</ul>';
  }

  // 各メニュー項目の終了タグ
  function end_el(&$output, $item, $depth = 0, $args = null)
  {
    $output .= '</li>';
  }
}
