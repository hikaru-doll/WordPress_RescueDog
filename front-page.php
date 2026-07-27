<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="front-page main">
  <!-- mainvisual --------->
  <section class="mainvisual">
    <picture class="hero-image">
      <?php $theme_uri = esc_url(get_theme_file_uri()); ?>
      <source
        media="(min-width: 767px)"
        srcset="<?php echo $theme_uri; ?>/assets/img/mainvisual-pc.webp" />
      <img src="<?php echo $theme_uri; ?>/assets/img/mainvisual-sp.webp" alt="犬と人" />
    </picture>
    <div class="catchphrase">
      <h2>小さな命を、大切な家族へ。</h2>
      <p>
        西宮・宝塚エリアで活動する小さな動物保護施設。<br class="blank" />
        様々な理由で保護した犬を<br />新しい家族へ迎え入れる活動をしています。
      </p>
      <div class="flex hero-buttons">
        <div class="hero-button search">
          <a href="#">保護犬を探す</a>
        </div>
        <div class="hero-button">
          <a href="#support">支援をする</a>
        </div>
      </div>
    </div>
  </section>
  <!-- news ------------->
  <section class="news wrapper">
    <h2 class="section-title">お知らせ</h2>
    <ul class="lists">
      <?php
      $recent_posts = new WP_Query(array(
        'post_type'      => 'post', // ★デフォルト投稿
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      ));
      if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
          <li class="item">
            <a href="<?php the_permalink(); ?>">
              <time class="date"><?php the_date(); ?></time>
              <h3 class="item-title"><?php the_title(); ?></h3>
              <p class="text">
                <?php echo esc_html(wp_trim_words(get_the_content(), 40, '…')); ?>
              </p>
              <p class="link">もっと読む</p>
            </a>
          </li>

      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </ul>
    <div class="button">
      <a href="#">お知らせの一覧を見る</a>
    </div>
  </section>
  <!-- dogs -------------->
  <section class="dogs bg">
    <h2 class="section-title">ワンちゃん紹介</h2>
    <ul class="lists grid">
      <?php
      $dogs_posts_latest = new WP_Query(array(
        'post_type'      => 'dogs', // ★デフォルト投稿
        'posts_per_page' => 4,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      ));

      if ($dogs_posts_latest->have_posts()) :
        while ($dogs_posts_latest->have_posts()) : $dogs_posts_latest->the_post();
      ?>



          <li class="item">
            <a href="<?php the_permalink(); ?>">
              <div class="image">
                <?php the_post_thumbnail(); ?>
              </div>
              <h3 class="name"><?php the_title(); ?></h3>
              <ul class="attribute flex">
                <li>年齢：<?php the_field("age"); ?></li>
                <li>性別：<?php the_field("sex"); ?></li>
              </ul>
            </a>
          </li>

        <?php
        endwhile;
        wp_reset_postdata(); // ← 必須！
      else :
        ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </ul>
    <div class="button">
      <a href="#">ワンちゃんをもっと見る</a>
    </div>
  </section>
  <!-- story -->
  <section class="story wrapper">
    <p>
      やむを得ずペットを手放さなければならなくなった飼い主や<br />
      多頭飼育崩壊から救われた命を優しく包み込み<br />
      里親探しの架け橋となる活動をしています。
    </p>
    <p>
      彼らが再び愛と温かさに満ちた 温かい家庭で幸せに暮らせるよう<br />
      私たちは一緒に歩み 心をこめて支えています。
    </p>
    <p>彼らと共に織りなす感動のストーリーに ご参加いただければ幸いです。</p>
  </section>
  <!-- about -->
  <section class="about">
    <div class="inner">
      <h2 class="section-title">私たちについて</h2>
      <p>
        私たちは犬たちの未来を明るく照らす小さな力となることを使命とし、
        責任をもって犬の保護に取り組んでいます。
      </p>
      <p>
        必病気やケガを抱えた犬たちには、獣医師と連携し、必要な医療を提供。
        隣接した動物病院と協力し、ワクチンや予防接種などの健康管理を徹底しています。
        <br />
        しつけが必要な犬たちには、専門のトレーニングを通じて新しい家庭での幸せな生活へのステップアップをサポート。
        <br />
        また、犬それぞれの必要な運動量に合わせ、充実した散歩を通じて体力と心の健康を促進しています。
      </p>
      <p>
        私たちは一貫して殺処分ゼロを目指し、一匹でも多くの命が安心して幸せな場所で過ごせるよう努めています。
        あなたと共に、未来を照らす一歩を踏み出していきたいと考えています。
      </p>
      <a class="link">私たちについて詳しく読む</a>
    </div>
  </section>
  <!-- support -->
  <section class="support wrapper">
    <h2 class="section-title">ご支援について</h2>
    <div class="grid">
      <div class="donation item">
        <a href="">
          <p>物資や寄付などの<br class="blank" />ご支援ページへ</p>
        </a>
      </div>
      <div class="volunteer item">
        <a href="#">
          <p>ボランティアでの<br class="blank" />支援ページへ</p>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>