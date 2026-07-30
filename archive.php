<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="archive-page main">
  <div class="wrapper">
    <h1 class="title">収支報告書一覧</h1>
    <ul>
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <li><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?> 年　収支報告書
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>