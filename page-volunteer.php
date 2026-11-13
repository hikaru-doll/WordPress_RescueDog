<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="page-php page-volunteer main">
  <div class="wrapper">
    <h1 class="title"><?php the_title(); ?></h1>
    <div class="image">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/volunteer2.webp" alt="散歩中の保護犬" />
    </div>
    <p class="intro">
      私たちの活動にご興味をもっていただき、ありがとうございます。<br>
      RescueDogでは、ボランティアとして私たちと共に保護犬たちの世話をしてくれる人を募集しています。
    </p>
    <!-- section  -->
    <section class="section">
      <h2 class="volunteer-title">条件</h2>
      <ul>
        <li>犬が好きな方</li>
        <li>体力に自信のある方</li>
        <li>18歳以上（18歳未満の型は保護者の同意が必要です）</li>
        <li>短時間でも構いません</li>
      </ul>
    </section>
    <!-- section  -->
    <section class="section">
      <h2 class="volunteer-title">持ち物</h2>
      <ul>
        <li>身分証明書（18歳未満の型は保護者の同意が必要です）</li>
        <li>汚れてもいい衣服・スニーカー（こちらで着替もできます）</li>
        <li>長時間お手伝いしてくれる方は、昼食や飲み物</li>
      </ul>
    </section>
    <!-- section  -->
    <section class="section">
      <h2 class="volunteer-title">主な内容</h2>
      <ul>
        <li>保護犬たちのお世話（ご飯の用意、ケージのお掃除、トイレのお掃除、タオル・毛布などのお洗濯、他</li>
        <li>保護犬たちのお散歩（特に、大型犬の飼育経験のある方は大歓迎です。 大型犬に関しては、かなりの運動量を必要とします。なので体力の相当ある方は大歓迎です）</li>
        <li>車での運搬（動物病院への送り迎えや、犬の保護に必要な物資の運搬など）</li>
        <li>保護犬たちの保護やケア（去勢手術のための保護、負傷している犬のケア、保健所からの一時預かりと保護、犬の搬入 等）<br>
          ※こちらは犬に関しての知識がかなり必要となってきます。内容をみて、可能である場合は伝えてください</li>
      </ul>
    </section>
    <!-- section -->
    <p class="warning-volunteer">
      ご希望の方は施設に直接お電話で。希望日時や時間をお知らせください。<br>
      わからないことがあればどうぞお気軽にお問い合わせください。
    </p>
  </div>
</main>
<?php get_footer(); ?>