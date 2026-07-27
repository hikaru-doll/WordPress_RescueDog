<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main ------------------------->
<main class="single-reports main">
  <div class="wrapper">
    <h1 class="title">収支報告書</h1>
    <p class="lead">
      私たちの活動は、皆様からの寄付をはじめ、
      さまざまなご協力によって支えられて成り立っています。
      寄付をして下さった方々に心より感謝いたします。
    </p>
    <!-- 収入の部 -->
    <table class="table">
      <thead>
        <tr class="grid">
          <th scope="col">収入</th>
          <th scope="col">金額</th>
        </tr>
      </thead>
      <tbody>
        <tr class="grid">
          <th scope="row">前年度繰越金</th>
          <td><?php the_field('carryover'); ?>円</td>
          <th scope="row">寄付（現金）</th>
          <td><?php the_field('cash'); ?>円</td>
          <th scope="row">寄付（クレジットカード）</th>
          <td><?php the_field('card'); ?>円</td>
          <th scope="row">募金</th>
          <td><?php the_field('fund_raising'); ?>円</td>
          <th scope="row">譲渡による収入</th>
          <td><?php the_field('transfer_money'); ?>円</td>
        </tr>
      <tfoot>
        <tr class="grid">
          <th scope="row">合計</th>
          <td><?php the_field('income'); ?>円</td>
        </tr>
      </tfoot>
      </tbody>
    </table>
    <!-- 支出の部 -->
    <table class="table">
      <thead>
        <tr class="grid">
          <th scope="col">支出</th>
          <th scope="col">金額</th>
        </tr>
      </thead>
      <tbody>
        <tr class="grid">
          <th scope="row">医療費</th>
          <td><?php the_field('medical'); ?>円</td>
          <th scope="row">食費（フード・おやつ）</th>
          <td><?php the_field('food'); ?>円</td>
          <th scope="row">消耗品費</th>
          <td><?php the_field('consumables'); ?>円</td>
          <th scope="row">光熱費/通信費</th>
          <td><?php the_field('communication'); ?>円</td>
          <th scope="row">雑費</th>
          <td><?php the_field('rough'); ?>円</td>
        </tr>
      <tfoot>
        <tr class="grid">
          <th scope="row">合計</th>
          <td><?php the_field('expense'); ?>円</td>
        </tr>
      </tfoot>
      </tbody>
    </table>
    <p class="pagenation">pagenation</p>
  </div>
</main>
<?php get_footer(); ?>