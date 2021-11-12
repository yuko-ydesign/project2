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
      <div class="card-l" id="no_02">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              病児保育
              <span class="card-l__title__caption">
                （ハニクロ派遣・マッチング）
              </span>
            </h3>
            <div class="card-l__desc">
              <ul class="ul">
                <li> お子さまがご体調を崩された際にご利用いただけるプランです。 </li>
                <li> 病状や疾病に合わせて、シッターが病児保育をさせていただきます。 </li>
                <li> １回あたり２時間よりご利用いただけます（以後３０分単位で加算）。 </li>
              </ul>
            </div>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc"> 詳しい料金につきましては<a href="<?php echo home_url('/price'); ?>" class="card-l__link">こちら</a>をご覧ください。 </div>
          </div>
          <div class="card-l__unit">
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_62.svg" alt="" />
        </div>
      </div>
      <div id="to_02"></div>
      <div class="card-l" id="no_02">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              代表的な疾病
              <span class="card-l__title__caption">
              </span>
            </h3>
            <section class="st-Layout page" id="normal">
                <div class="page_inner" style="max-width: 1200px;">
                 <div id="normal_plan">
                   <ul id="place" style="margin-top:50px;">
           					<li><a href="<?php echo home_url('/sick_kaze');?>" class="sicklink">風邪</a></li>
                     <li><a href="<?php echo home_url('/sick_influenza');?>" class="sicklink">インフルエンザ</a></li>
                     <li><a href="<?php echo home_url('/sick_noro');?>" class="sicklink">ノロウィルス</a></li>
                     <li><a href="<?php echo home_url('/sick_rota');?>" class="sicklink">ロタウィルス</a></li>
                     <li><a href="<?php echo home_url('/sick_mizuboso');?>" class="sicklink">水ぼうそう</a></li>
                     <li><a href="<?php echo home_url('/sick_husin');?>" class="sicklink">風疹 </a></li>
                     <li><a href="<?php echo home_url('/sick_otahuku');?>" class="sicklink">おたふくかぜ</a></li>
                     <li><a href="<?php echo home_url('/sick_hasika');?>" class="sicklink">はしか</a></li>
                     <li><a href="<?php echo home_url('/sick_tyujien');?>" class="sicklink">急性中耳炎</a></li>
                     <li><a href="<?php echo home_url('/sick_sissin');?>" class="sicklink">突発性発疹</a></li>
                     <li><a href="<?php echo home_url('/sick_adeno');?>" class="sicklink">アデノウィルス</a></li>
                     <li><a href="<?php echo home_url('/sick_pool');?>" class="sicklink">咽頭結膜炎（プール熱）</a></li>
                     <li><a href="<?php echo home_url('/sick_ketumakuen');?>" class="sicklink">流行性角結膜炎</a></li>
                     <li><a href="<?php echo home_url('/sick_herpangina');?>" class="sicklink">ヘルパンギーナ</a></li>
                     <li><a href="<?php echo home_url('/sick_teasi');?>" class="sicklink">手足口病</a>　など</li>
                   </ul><br><br>
                 </div>
               </div>
             </section>
          </div>
        </div>
      </div>
      <div class="card-l" id="no_03">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              ハニークローバーの病児保育の特徴
            </h3>
            <div class="card-l__desc">
              <ul class="ul">
                <li> 病児の看護師が各シッターをフォローいたします。<br>（ハニークローバーの代表者も小児看護師として、都内のNICUに長らく勤務をしておりました。） </li>
                <li> 当日の急なご用命にも無料で対応させていただきます。<br>（アプリでは「今日明日対応できます」シッター一覧があり、直接マッチング指名をしていただくこともできます。）<br><br>「今日明日対応できます」は<a href="<?php echo home_url('/app-feature');?>#link-03" style="text-decoration: underline; color: #d33d2f;">こちら</a><br><br>（ハニークローバーのベビーシッターサービスは当日手配料、入会金、年会費が全て無料でご利用いただけます。）</li>
                <li> 病院未受診のお子様もご利用いただくことができます。<br>（晩に急に発熱し、翌朝よりご利用いただく際などは、病児保育シッターがお子様を通院同行させていただきます。） </li>
                <li>ワクチン接種済みのシッターをご指名いただくことができます。<br>（ご指名の際はお電話またはチャットにてお気軽にご相談下さい。）</li>
                <li>病児保育中は、ベビーシッターよりお子様の検温、お具合などのレポートをリアルタイムで通知させていただきます。<br><br>保育中のレポートについては<a href="<?php echo home_url('/app-feature');?>#link-04" style="text-decoration: underline; color: #d33d2f;">こちら</a>をご確認ください。<br></li><br>
                <li>保育中の担当シッターへのご連絡はチャットを使っていつでもお取りいただけます。<br><br>チャット機能については<a href="<?php echo home_url('/app-feature');?>#link-02" style="text-decoration: underline; color: #d33d2f;">こちら</a>をご確認ください。</li>
              </ul>
            </div>
          </div>
          <div class="card-l__unit">
          </div>
        </div>
      </div>
      <div class="card-l" id="no_04">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              病児保育をご利用いただく際の流れ
            </h3>
            <div class="card-l__desc">
              <ul class="ul">
                <li> アプリまたはブラウザより無料のご利用登録をお願いいたします。 </li>
                <li> 直接シッターをご指名いただく際は、マッチング予約をご利用下さい。 </li>
                <li> シッターの調整完了後、アプリまたお電話にて連絡をさせていただきます。 </li>
                <li>自治体の補助制度をご利用いただくことができます。<a href="<?php echo home_url('/municipality');?>#tab02" style="text-decoration: underline; color: #d33d2f;">こちら</a>よりご確認いただけます。<br><br></li>
              </ul>
            </div>
          </div>
          <div class="group">
            <div class="group__head">
              <p class="group__title"> 宿泊保育でご利用いただけること </p>
            </div>
            <div class="group__content">
              <ul class="ul">
                <li> 各種チケットをご利用いただけます。異なるチケットを同時にご利用いただけますのでお気軽にお使い下さい。<br>チケットは<a href="<?php echo home_url('/ticket');?>" style="text-decoration: underline; color: #d33d2f;">こちら</a>です。 </li>
                <li> お支払いはクレジットカードまたは現金後払いとなります。お支払い方法は<a href="<?php echo home_url('/payment');?>" style="text-decoration: underline; color: #d33d2f;">こちら</a>です。 </li>
              </ul>
            </div>
          </div>
          <div class="card-l__unit">
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
