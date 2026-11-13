<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="single-dogs main">
  <div class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>


        <?php
        $post_id = get_the_ID();

        $get_dog_field = function ($field_name) use ($post_id) {
          if (function_exists('get_field')) {
            return get_field($field_name, $post_id);
          }

          return get_post_meta($post_id, $field_name, true);
        };

        $sex = $get_dog_field('sex');
        $age = $get_dog_field('age');
        $vaccine = $get_dog_field('vaccine');
        $injection = $get_dog_field('injection');
        $surgery = $get_dog_field('surgery');
        $reason = $get_dog_field('reason');
        $profile = $get_dog_field('profile');
        ?>



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
            <dd><?php echo esc_html($sex); ?></dd>
            <dt>年齢</dt>
            <dd><?php echo esc_html($age); ?></dd>
            <dt>ワクチン接種</dt>
            <dd><?php echo esc_html($vaccine); ?></dd>
            <dt>狂犬病注射</dt>
            <dd><?php echo esc_html($injection); ?></dd>
            <dt>不妊・去勢手術</dt>
            <dd><?php echo esc_html($surgery); ?></dd>
            <dt>ここに来た理由</dt>
            <dd><?php echo esc_html($reason); ?></dd>
          </dl>
        </div>
        <p class="profile">
          <?php echo  nl2br(esc_html($profile)); ?>
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
</main>
<?php get_footer(); ?>