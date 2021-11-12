<?php get_header('sick');
/*
Template Name: service
*/
?>
<div class="fv fv--service">
  <h1 class="fv__title"><span>保育メニュー</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="service-section-wrap service" style="margin-bottom:50px;">
  <div class="inner">
    <section class="s-service s-menu is-show">
      <div class="card-l" id="no_03">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              短時間送迎
              <span class="card-l__title__caption">
                （ハニクロ派遣・マッチング）
              </span>
            </h3>
            <div class="card-l__desc card-l__short">
              <ul class="ul">
                <li>お子さまの送迎に特化してご利用いただけるプランです。</li>
                <li> 保育園、学童、小学校、幼稚園、習い事、ご自宅、保護者さまとのお待ち合わせ場所、などさまざまな場所から場所へ、お子さまを送迎させていただきます。 </li>
                <li> １回あたり１時間よりご利用いただけます（以後１時間単位で加算）。 </li>
              </ul>
            </div>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc"> 詳しい料金につきましては<a href="<?php echo home_url('/price'); ?>" class="card-l__link">こちら</a>をご覧ください。 </div>
          </div>
          <div class="card-l__unit">
            <div class="group-list">
              <div class="group">
                <div class="group__head">
                  <p class="group__title">シッターの自家用車の使用について</p>
                </div>
                <div class="group__content">
                  <p class="group__text"> 自家用車を使用できるシッターの場合、お子さまを自動車で送迎をさせていただくことができます。<br />その際の追加料金は一切ございません。短時間送迎保育の料金にて対応させていただきます。<br />チャイルドシートにつきましてはお客さまご自身でご用意いただきますようお願いいたします。
                  </p>
                </div>
              </div>
              <div class="group">
                <div class="group__head">
                  <p class="group__title"> お子さまの体調不良時に保育園や小学校などから急なお迎えを要請されたときについて </p>
                </div>
                <div class="group__content">
                  <p class="group__text"> シッターがお迎えに伺うことができます。必要に応じて保護者さまと相談の上、病院にお連れした後にご自宅にお送りすることがございます。その際は、病児保育として承りますことをご了承ください。 </p>
                </div>
              </div>
              <div class="group">
                <div class="group__head">
                  <p class="group__title">当日の急なご予約にも無料で対応させていただきます</p>
                </div>
                <div class="group__content">
                  <p class="group__text"> ハニークローバーのベビーシッターサービスは、当日手配料金、入会金、年会費が全て無料でご利用いただけます。<br />当日の急なご用命につきましてもお気軽にご相談ください。「今日明日対応できますシッター」をアプリでご覧いただき、シッターを直接ご指名いただくこともできます。<br />「今日明日対応できますシッター」は<a href="<?php echo home_url('/app-feature');?>#link-03" style="text-decoration: underline; color: #d33d2f;">こちら</a>
                  </p>
                </div>
              </div>
              <div class="group">
                <div class="group__head">
                  <p class="group__title">シッターの自家用車の使用について</p>
                </div>
                <div class="group__content">
                  <p class="group__text"> 当日の急のご予約でお子さまを保育園や小学校などにお迎えに伺い、ご自宅にお送りする際に、ご自宅の鍵を保護者さまの職場などご指定の場所にシッターが取りに伺うこともできます。<br />鍵の受け取り→お迎え→お送りの要領で進めさせていただきます。<br />臨機応変に対応させていただきますので、ご要望の際はお申し付けください。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_63.svg" alt="" />
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
