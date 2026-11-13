<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="page-php page-about main">
  <div class="wrapper">
    <h1 class="title"><?php the_title(); ?></h1>
    <!-- 私たちについて-専用のフィールド start-->
    <p class="intro">私たちは一貫して殺処分ゼロを目指し、一匹でも多くの命が安心して幸せな場所で過ごせるよう努めています。 あなたと共に、未来を照らす一歩を踏み出していきたいと考えています。以下は、私たちの主な活動内容です。</p>
    <!-- section  -->
    <section class="section">
      <div class="text">
        <h2 class="about-title">保護</h2>
        <p>
          私たちは、多頭飼育の状況が崩れ、保健所に送られ、命の危機に瀕した可愛らしい仲間たちをお預かりしています。彼らは過酷な状況から逃れ、新しい愛情豊かな家庭を待ち望んでいます。<br>
          これらの犬たちは、過去の辛い経験に耐えながらも、未来への希望を胸に新たなスタートを迎えています。私たちの施設では、温かい環境で包み込まれ、優しさと理解に満ちたケアを提供しています。
        </p>
      </div>
      <div class="image">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/protect.webp" alt="保護されている犬たち">
      </div>
    </section>
    <!-- section -->
    <section class="section revers">
      <div class="text">
        <h2 class="about-title">医療</h2>
        <p>
          必要な治療やケアを行い、彼らの健康な未来をサポートします。<br>
          私たちの施設では、信頼できる獣医師により、愛犬たちの健康を第一に考えた専門的なケアを提供しています。彼らの幸せと健康が私たちの最優先事項です。<br>
          獣医により、ノミやダニなどの除去はもちろん、定期的なワクチン接種や健康診断を行っています。また、犬たちが怪我をした場合には、必要な治療も獣医師が丁寧に行います。<br>
          我々はあらゆる状況に対応できるよう、獣医師と協力し、犬たちが幸せで健康的な未来を歩む手助けをしています。安心して、家族として迎え入れることのできる仲間たちを提供するために、獣医師とともに丁寧なケアを行っています。
        </p>
      </div>
      <div class="image">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/medical.jpg" alt="健康診断を受ける保護犬">
      </div>
    </section>
    <!-- section -->
    <section class="section">
      <div class="text">
        <h2 class="about-title">トレーニング</h2>
        <p>
          それぞれの個性に合わてしっかりしたしつけを行い、新しい家庭での順応を手助けします。<br>
          また、彼らのほとんどが、昔のつらい思い出から、人間がちょっと怖いと感じてしまっていることがあります。でも心配しないでくださいね、そのようなケースでは特別なお世話をしています。<br>
          ゆっくりと人間に慣れてもらえるように、心のケアをしています。あたたかい手や優しい言葉で、犬たちが安心できるようにサポートしています。<br>
          どんなに怖がっていた子も、時間をかけてじっくりお世話をすることで、少しずつ人に慣れて来ます。優しい時間とお手伝いで、彼らが安心して幸せな日々を過ごせるように努めています。
        </p>
      </div>
      <div class="image">
        <img class="about_image3" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/training.jpg" alt="トレーニング中の保護犬">
      </div>
    </section>
    <!-- section -->
    <section class="section revers">
      <div class="text">
        <h2 class="about-title">里親への譲渡</h2>
        <p>
          あなたの家族にぴったりの仲間との出会いをお手伝いします。<br>
          彼らはただ一つの願いを抱えています…それは、優しい手に触れられ、新しい家族として迎え入れられることです。ご支援いただける方々と、共に彼らにとって暖かい未来を築いていけることを心より願っています。の仲間との出会いをお手伝いします。
        </p>
      </div>
      <div class="image">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/adopt-1.webp" alt="里親と向き合う犬">
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>