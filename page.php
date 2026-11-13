<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="page-php main">
  <div class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>