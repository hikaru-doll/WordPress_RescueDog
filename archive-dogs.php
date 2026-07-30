<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="archive-dogs main">
  <div class="wrapper">
    <h1 class="title"><?php echo post_type_archive_title(); ?></h1>

    <ul class="grid lists">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>


          <li class="item">
            <a href="<?php the_permalink(); ?>">
              <div class="image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="text">
                <h2 class="name"><?php the_title(); ?></h2>
                <ul class="attribute flex">
                  <li>年齢：<?php the_field("age"); ?></li>
                  <li>性別：<?php the_field("sex"); ?></li>
                </ul>
                <p class="content">
                  <?php echo esc_html(wp_trim_words(get_field('profile'), 35, '…')); ?>
                </p>
                <p class="link"><?php the_title(); ?>をもっと知る</p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else: ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>