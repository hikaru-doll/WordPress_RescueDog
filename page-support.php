<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="page-php support main">
  <div class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="title"><?php the_title(); ?></h1>
        <p class="intro">
          いつも多大なるご支援、心より感謝しています。皆様のご支援により私たちのもとへ届いた物資は、大切に使わせていただいています。 また、寄付金は主に保護犬たちの医療へと使わせていただいています。<br>
          私たちの活動は、皆様からのご支援や、さまざまなご協力によって支えられて成り立っています。 皆様のご協力をお待ちしています。
        </p>
        <section class="section">
          <h2>支援物資について</h2>
          <p>
            消耗品（フード、シート、新聞紙）は、常に必要なものです。RescueDogに直接お持ちいただいても構いません。よろしくお願いします。
          </p>
          <?php
          $post_id = get_the_ID();

          $get_support_field = function ($field_name) use ($post_id) {
            if (function_exists('get_field')) {
              return get_field($field_name, $post_id);
            }

            return get_post_meta($post_id, $field_name, true);
          };

          $necessary = $get_support_field('necessary');
          $happy = $get_support_field('happy');
          ?>



          <div class="necessary">
            <ul>
              <li>
                <h3>特に必要なもの</h3>
                <p><?php echo esc_html($necessary); ?></p>
              </li>
              <li>
                <h3>嬉しいもの</h3>
                <p><?php echo esc_html($happy); ?></p>
              </li>
            </ul>
          </div>
          <p>物資の援助にご協力いただける方は、下記住所まで直接ご送付くださいますと本当に助かります。</p>
          <dl class="grid">
            <dt>住所</dt>
            <dd>〒999-9999 日本県日本市日本町10-10-10</dd>
            <dt>宛先</dt>
            <dd>RescueDog 行</dd>
            <dt>電話番号</dt>
            <dd>0000-00-0000</dd>
          </dl>
        </section>
        <section>
          <h2>寄付について</h2>
          <p>
            寄付金は主に保護犬たちの医療をはじめ、トリミングなどに充てられます。あたたかいご支援を以下の口座にお願いいたします。
          </p>
          <dl class="grid">
            <dt>銀行名</dt>
            <dd>ooo銀行</dd>
            <dt>支店名</dt>
            <dd>ooo支店</dd>
            <dt>口座番号</dt>
            <dd>普通 000-000-00000</dd>
            <dt>振込先口座名義</dt>
            <dd>レスキュードッグ</dd>
          </dl>
        </section>


      <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>