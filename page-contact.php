<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="contact-php main">
  <div class="wrapper">
    <h1 class="title">お問い合わせ</h1>
    <p>アスタリスク(<span class="span">*</span>)の付いた項目は必須項目です</p>
    <p>お迎えご希望のワンちゃんが未定であれば「未定」と記入してください。</p>
    <p>借家・賃貸の場合は、ペット可の住宅であることが前提です。</p>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="contact-form"><?php the_content(); ?></div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>