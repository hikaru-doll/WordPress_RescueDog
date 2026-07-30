<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="single-php main">
  <div class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="single-title"><?php the_title(); ?></h1>
        <p class="date"><?php the_time("Y.m.d"); ?></p>
        <div class="text">
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
        </div>
        <!--前後ナビゲーション（シーケンシャルナビゲーション）  -->
        <div class="pager">
          <?php the_post_navigation(array(
            'prev_text' => '前の記事へ',
            'next_text' => '次の記事へ'
          ));
          ?>
        </div>
  </div>
</main>
<?php get_footer(); ?>