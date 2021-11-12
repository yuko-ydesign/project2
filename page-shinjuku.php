<?php get_header();
/*
Template Name: form-shinjuku
*/
?>
<div class="fv fv--shinjuku">
  <h1 class="fv__title">
    <span>新宿区育児支援家庭訪問事業<br />予約フォーム</span>
  </h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li><a href="<?php echo home_url('/service'); ?>">サービス一覧</a></li>
    <li>新宿区育児支援家庭訪問事業予約フォーム</li>
  </ul>
  <div class="heading">
    <p class="heading__text">新宿区育児支援家庭訪問事業</p>
    <h2 class="heading__title">予約フォーム</h2>
  </div>
  <div class="sub-container">
    <p class="sub-container__top"> こちらは「新宿区育児支援家庭訪問事業」予約フォームです。 </p>
    <div class="sub-container__content">
      <p class="sub-container__text"> こちらの予約フォームは「新宿区育児支援家庭訪問事業」ご利用者様専用となります。<br />ご予約フォーム送信後、自動返信メールを必ずご確認ください。<br />確認がとれない場合は、弊社までお電話にてお問合せくださいますようお願い申し上げます。<br />ご利用希望日の1週間前までにご予約をお願いしておりますが、1週間を過ぎたご予約でも、可能な場合は対応いたします。</p>
    </div>
  </div>
  <section class="s-form">
    <h2 class="middle-title">ご予約フォーム</h2>
    <?php the_content();?>
    <div class="note">
      <p class="note__title">キャンセルポリシー</p>
      <div class="note__content">
        <p> 土・日・祝日を除く利用日の前日17時以降のキャンセルについては、1時間分のキャンセル料が発生しますので、ご注意下さい。 </p>
        <p> ※ご依頼は、24時間受付可能ですが、シッターの手配業務は平日の9：00～17：00となります。 </p>
        <p>※利用希望日の1週間前までに、ご予約をお願いします。</p>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>