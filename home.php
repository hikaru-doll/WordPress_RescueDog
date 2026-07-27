<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="home-php main">
  <div class="bg">
    <h1 class="title">お知らせ一覧</h1>
    <ul class="lists">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="content">
            <div class="image">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
            <h2 class="dog-name"> <?php the_title(); ?></h2>
            <ul class="attribute flex">
              <li>年齢：<?php the_field('age'); ?></li>
              <li>性別：<?php the_field('sex'); ?></li>
            </ul>
            <p class="profile"> <?php echo esc_html(wp_trim_words(get_field('profile'), 40, '…')); ?></p>
            <p class="read-more"> <?php the_title(); ?>をもっと知る</p>
            </a>
          </li>
      <?php endwhile;
      endif; ?>

      <li class="item">
        <a href="#">
          <div class="grid inner">
            <div class="image">
              <img src="assets/img/volunteer.webp" alt="" />
            </div>
            <div class="text">
              <h2 class="item-title">ボランティアさんと散歩へ</h2>
              <p class="date">2026.05.24</p>
              <p class="content">
                今日は大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">続きを読む</p>
            </div>
          </div>
        </a>
      </li>
      <!-- delete later from here*************************************************-->
      <li class="item">
        <a href="#">
          <div class="grid inner">
            <div class="image">
              <img src="assets/img/volunteer.webp" alt="" />
            </div>
            <div class="text">
              <h2 class="item-title">ボランティアさんと散歩へ</h2>
              <p class="date">2026.05.24</p>
              <p class="content">
                今日は大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">続きを読む</p>
            </div>
          </div>
        </a>
      </li>
      <li class="item">
        <a href="#">
          <div class="grid inner">
            <div class="image">
              <img src="assets/img/volunteer.webp" alt="" />
            </div>
            <div class="text">
              <h2 class="item-title">ボランティアさんと散歩へ</h2>
              <p class="date">2026.05.24</p>
              <p class="content">
                今日は大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">続きを読む</p>
            </div>
          </div>
        </a>
      </li>
      <li class="item">
        <a href="#">
          <div class="grid inner">
            <div class="image">
              <img src="assets/img/volunteer.webp" alt="" />
            </div>
            <div class="text">
              <h2 class="item-title">ボランティアさんと散歩へ</h2>
              <p class="date">2026.05.24</p>
              <p class="content">
                今日は大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">続きを読む</p>
            </div>
          </div>
        </a>
      </li>
      <li class="item">
        <a href="#">
          <div class="grid inner">
            <div class="image">
              <img src="assets/img/volunteer.webp" alt="" />
            </div>
            <div class="text">
              <h2 class="item-title">ボランティアさんと散歩へ</h2>
              <p class="date">2026.05.24</p>
              <p class="content">
                今日は大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">続きを読む</p>
            </div>
          </div>
        </a>
      </li>
      <li class="item">
        <a href="#">
          <div class="grid inner">
            <div class="image">
              <img src="assets/img/volunteer.webp" alt="" />
            </div>
            <div class="text">
              <h2 class="item-title">ボランティアさんと散歩へ</h2>
              <p class="date">2026.05.24</p>
              <p class="content">
                今日は大学生のボランティアさんがたくさん遊んでくれました！
              </p>
              <p class="link">続きを読む</p>
            </div>
          </div>
        </a>
      </li>
      <!-- delete later from to this point*************************************************-->
    </ul>
    <p class="pagenation">pagenation</p>
  </div>
</main>
<?php get_footer(); ?>