<?php get_header();
/*
Template Name: info
*/
?>
<div class="fv fv--info">
  <h1 class="fv__title">
    <span>お問い合わせ</span>
  </h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/');?>">ホーム</a></li>
    <li>お問い合わせ</li>
  </ul>
  <div class="heading">
    <h2 class="heading__title">お問い合わせ</h2>
  </div>
  <section class="s-tel">
    <h3 class="middle-title">お電話でのお問い合わせ</h3>
    <div class="tel-box">
      <p class="tel-box__title">
        <span>TEL.</span><a href="tel:050-5434-3429">050-5434-3429</a>
      </p>
      <p class="tel-box__time">平日　9:00 - 18:00</p>
      <p class="tel-box__time">日曜　14:00 - 18:00</p>
    </div>
  </section>
  <section class="s-mail">
    <h3 class="middle-title">メールでのお問い合わせ</h3>
    <?php the_content();?>
  </section>
</div>
<?php get_footer(); ?>