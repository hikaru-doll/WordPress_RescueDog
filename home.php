<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="home-php main">
  <div class="bg">
    <h1 class="title">お知らせ一覧</h1>
    <ul class="lists">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="item">
            <a href="<?php the_permalink(); ?>">
              <div class="grid inner">
                <div class="image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="text">
                  <h2 class="item-title"><?php the_title(); ?></h2>
                  <time class="date"><?php the_date("Y. m. d"); ?></p>
                    <p class="content">
                      <?php echo esc_html(wp_trim_words(get_the_content(), 40, '…')); ?>
                    </p>
                    <p class="link">続きを読む</p>
                </div>
              </div>
            </a>
          </li>
      <?php endwhile;
      endif; ?>


    </ul>
    <p class="pagenation">pagenation</p>
  </div>
</main>
<?php get_footer(); ?>