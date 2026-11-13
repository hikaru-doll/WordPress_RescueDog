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
                <!--  -->
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
                $profile = $get_dog_field('profile');
                ?>
                <ul class="attribute flex">
                  <li>年齢：<?php echo esc_html($age); ?></li>
                  <li>性別：<?php echo esc_html($sex); ?></li>
                </ul>
                <div class="content">
                  <?php echo esc_html(wp_trim_words($profile, 35, '…')); ?>
                </div>
                <div class="link"><?php the_title(); ?>をもっと知る</div>
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