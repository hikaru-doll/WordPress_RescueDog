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

        <!-- ACFカスタムフィールド -------------------------------->
        <?php if (get_field('page_image')): ?>
          <img class="image" src="<?php the_field('page_image'); ?>">
        <?php endif; ?>

        <?php if (get_field('page_intro')): ?>
          <p class="intro"><?php the_field('page_intro'); ?></p>
        <?php endif; ?>
        <!-- ご支援について-専用フィールド -->
        <?php if (get_field('section_title1')): ?>
          <h2> <?php the_field('section_title1'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('request1')): ?>
          <p class="request"><?php the_field('request1'); ?></p>
        <?php endif; ?>
        <?php if (get_field('necessary')): ?>
          <div class="necessary">
            <ul>
              <li>
                <h3>特に必要なもの</h3>
                <p><?php the_field('necessary'); ?></p>
              </li>
              <li>
                <h3>嬉しいもの</h3>
                <p><?php the_field('happy'); ?></p>
              </li>
            </ul>
          </div>
        <?php endif; ?>
        <?php if (get_field('table_address')): ?>
          <p>物資の援助にご協力いただける方は、下記住所まで直接ご送付くださいますと本当に助かります。</p>
          <dl class="grid">
            <dt>住所</dt>
            <dd><?php the_field('table_address'); ?></dd>
            <dt>宛先</dt>
            <dd><?php the_field('table_name'); ?></dd>
            <dt>電話番号</dt>
            <dd><?php the_field('table_tel'); ?></dd>
          </dl>
        <?php endif; ?>
        <?php if (get_field('section_title2')): ?>
          <h2><?php the_field('section_title2'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('request2')): ?>
          <p class="request"><?php the_field('request2'); ?></p>
        <?php endif; ?>
        <?php if (get_field('table_bank')): ?>
          <dl class="grid">
            <dt>銀行名</dt>
            <dd><?php the_field('table_bank'); ?></dd>
            <dt>支店名</dt>
            <dd><?php the_field('table_bank_branch'); ?></dd>
            <dt>口座番号</dt>
            <dd><?php the_field('table_bank_number'); ?></dd>
            <dt>振込先口座名義</dt>
            <dd><?php the_field('table_account'); ?></dd>
          </dl>
        <?php endif; ?>
        <!-- 譲渡の条件/流れ―専用フィールド -->
        <?php if (get_field('page_lists')): ?>
          <div class="lists"><?php the_field('page_lists'); ?></div>
        <?php endif; ?>
        <!-- ボランティア募集-専用フィールド -->
        <?php if (get_field('recruitment')): ?>
          <?php the_field('recruitment'); ?>
        <?php endif; ?>
        <?php if (get_field('warning')): ?>
          <p class="warning-volunteer"><?php the_field('warning'); ?></p>
        <?php endif; ?>
        <!-- 私たちについて-専用のフィールド start-->
        <?php if (get_field('about_title1')): ?>
          <section class="section">
            <div class="text">
              <h2 class="about-title"><?php the_field('about_title1'); ?></h2>
              <p><?php the_field('sentence1'); ?></p>
            </div>
            <div class="image">
              <?php if (get_field('about_image1')): ?>
                <img src="<?php the_field('about_image1'); ?>">
              <?php endif; ?>
            </div>
          </section>
          <section class="section revers">
            <div class="text">
              <h2 class="about-title"><?php the_field('about_title2'); ?></h2>
              <p><?php the_field('sentence2'); ?></p>
            </div>
            <div class="image">
              <?php if (get_field('about_image2')): ?>
                <img src="<?php the_field('about_image2'); ?>">
              <?php endif; ?>
            </div>
          </section>
          <section class="section">
            <div class="text">
              <h2 class="about-title"><?php the_field('about_title3'); ?></h2>
              <p><?php the_field('sentence3'); ?></p>
            </div>
            <div class="image">
              <?php if (get_field('about_image3')): ?>
                <img class="about_image3" src="<?php the_field('about_image3'); ?>">
              <?php endif; ?>
            </div>
          </section>
          <section class="section revers">
            <div class="text">
              <h2 class="about-title"><?php the_field('about_title4'); ?></h2>
              <p><?php the_field('sentence4'); ?></p>
            </div>
            <div class="image">
              <?php if (get_field('about_image4')): ?>
                <img src="<?php the_field('about_image4'); ?>">
              <?php endif; ?>
            </div>
          </section>
        <?php endif; ?>
  </div>
<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>