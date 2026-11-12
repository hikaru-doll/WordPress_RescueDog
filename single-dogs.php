<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="single-dogs main">
  <div class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <div class="content grid">
          <div class="image">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </div>
          <dl class="text grid">
            <dt>名前</dt>
            <dd><?php the_title(); ?></dd>
            <dt>性別</dt>
            <dd><?php the_field('sex'); ?></dd>
            <dt>年齢</dt>
            <dd><?php the_field('age'); ?></dd>
            <dt>ワクチン接種</dt>
            <dd><?php the_field('vaccine'); ?></dd>
            <dt>狂犬病注射</dt>
            <dd><?php the_field('injection'); ?></dd>
            <dt>不妊・去勢手術</dt>
            <dd><?php the_field('surgery'); ?></dd>
            <dt>ここに来た理由</dt>
            <dd><?php the_field('reason'); ?></dd>
          </dl>
        </div>
        <p class="profile">
          <?php the_field('profile'); ?>
        </p>
      <?php endwhile; ?>
    <?php endif; ?>
    <!--前後ナビゲーション（シーケンシャルナビゲーション）  -->
    <div class="pager">
      <?php the_post_navigation(array(
        'prev_text' => '前のワンちゃんへ',
        'next_text' => '次のワンちゃんへ'
      ));
      ?>
    </div>
  </div>
  </div>
</main>
<?php get_footer(); ?>