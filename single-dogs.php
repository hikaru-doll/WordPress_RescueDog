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
          ワンちゃん用のおやつよりもリンゴが大好きな女の子。とてもやさしくて、
          新参者の面倒はほとんど彼女が見てくれます。
          生後数カ月でここに来る子たちのほとんどが彼女に懐くのです。
          とてつもない母性の持ち主です。
          ロープのおもちゃが大好きで、ボール投げよりロープ引っ張り系を好みます。
          とはいえ、遊ぶことよりも、幼犬の面倒を見ている方が好きっぽい。とてもいい子です！
        </p>
      <?php endwhile; ?>
    <?php endif; ?>

    <p class="pagenation">pagenation</p>
  </div>
</main>
<?php get_footer(); ?>