<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="index main">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>