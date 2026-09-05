<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="contact-php main">
  <div class="wrapper">
    <h1 class="title">お問い合わせ</h1>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="contact-form"><?php the_content(); ?></div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>