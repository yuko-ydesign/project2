<?php get_header();
/*
Template Name: insurance
*/
?>
<div class="fv fv--insurance">
  <h1 class="fv__title"><span>加入団体・保険</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>加入団体・保険</li>
  </ul>
  <div class="heading">
    <h2 class="heading__title">加入団体・保険</h2>
  </div>
  <p class="section-headText"> ハニークローバーは各種団体、保険に加入し、安全第一に保育サービスを提供させていただきます。 </p>
  <div class="sub-container">
    <div class="profile">
      <h3 class="profile__top">加入団体</h3>
      <dl class="profile__dl">
        <div>
          <dt>全国保育サービス協会</dt>
          <dd>
            <p><a href="http://www.acsa.jp/" target="_blank" rel="noopener">http://www.acsa.jp/</a></p>
          </dd>
        </div>
        <div>
          <dt>全国病児保育協議会</dt>
          <dd>
            <p><a href="https://byoujihoiku.net/" target="_blank" rel="noopener">https://byoujihoiku.net/</a></p>
          </dd>
        </div>
      </dl>
    </div>
  </div>
  <div class="sub-container">
    <div class="profile">
      <h3 class="profile__top">加入保険</h3>
      <dl class="profile__dl">
        <div>
          <dt>損害保険ジャパン株式会社</dt>
          <dd>
            <p>「ベビーシッター業経営者賠償責任補償」コースX<br>「ホームヘルパー（家事代行業務）経営者賠償責任補償」</p>
          </dd>
        </div>
        <div>
          <dt>Chubb損害保険株式会社</dt>
          <dd>
            <p>「ベビーシッター請負先のお子様の傷害事故補償」コースA</p>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>
<?php get_footer(); ?>