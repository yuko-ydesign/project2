<?php get_header();
/*
Template Name: corporate
*/
?>
      <div class="fv fv--corporate">
        <h1 class="fv__title"><span>法人利用</span></h1>
        <div class="fv__side-title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
        </div>
      </div>
      <div class="inner">
        <ul class="breadcrumb">
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li>法人利用</li>
        </ul>
        <p class="subtitle"> ベビーシッター、キッズシッターサービスを、法人のお客様もご利用いただくことができます </p>


          <div class="type-list__inner" style="margin-top:15px;">
            <div class="l-center">
              <a href="<?php echo home_url('/customer_corporation');?>" class="button" style="width:100%;">御社のお客様を<br class="sp" />対象にした保育</a>
            </div>
          </div>
          <div class="type-list__inner" style="margin-top:15px;">
            <div class="l-center">
              <a href="<?php echo home_url('/employee_corporation');?>" class="button" style="width:100%;">御社の社員様を<br class="sp" />対象にした保育</a>
            </div>
          </div>
          <div class="type-list__inner"style="margin-top:15px;">
            <div class="l-center">
              <a href="<?php echo home_url('/dispatch_corporation');?>" class="button" style="width:100%;">保育園、幼稚園、<br class="sp" />学童のヘルプ</a>
            </div>
          </div>
          <div class="type-list__inner"style="margin-top:15px;">
            <div class="l-center">
              <a href="<?php echo home_url('/apartment_corporation');?>" class="button" style="width:100%;">マンションギャラリー<br class="sp" />マンション内キッズルームの運営</a>
            </div>
          </div>

        <div class="s-corporate">
          <section class="is-show" id="corporate_01">
            <h3 class="middle-title">ハニークローバーの法人契約の特徴</h3>
            <ul class="list-f list-f--corporate_01">
              <li>
                <p class="list-f__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
                </p>
                <div class="list-f__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_03.svg" alt="" />
                </div>
                <div class="list-f__text"> 専用の管理画面を発行させていただきます。ご利用状況などを逐次ご確認いただくことができます。 </div>
              </li>
              <li>
                <p class="list-f__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
                </p>
                <div class="list-f__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_34.svg" alt="" />
                </div>
                <div class="list-f__text"> イベント時のおもちゃやマットなどのレンタルもさせていただきます。お見積りを都度提出させていただきます。 </div>
              </li>
              <li>
                <p class="list-f__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
                </p>
                <div class="list-f__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_04.svg" alt="" />
                </div>
                <div class="list-f__text"> 社員様の利用時などにつきましては、<a href="https://sitter.honeyclover.co.jp/ticket" style="text-decoration: underline;
                    color: #d33d2f;">各種チケット</a>をご利用いただけます。 </div>
              </li>
              <li>
                <p class="list-f__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
                </p>
                <div class="list-f__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_04.svg" alt="" />
                </div>
                <div class="list-f__text"> ご商談、お打ち合わせをご希望の際は、弊社社員が訪問をさせていただきます。</div>
              </li>
              <li>
                <p class="list-f__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
                </p>
                <div class="list-f__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_04.svg" alt="" />
                </div>
                <div class="list-f__text"> 保育スタッフにつきましては事前にご確認いただくことができます。 </div>
              </li>
            </ul>

<div class="sub-container">
  <div class="sub-container__content">
    <ul class="ul">
        ご用命につきましては最善を尽くして対応をさせていただきますのでご利用をご検討のお客様はぜひお問い合わせ下さい。<br><br>
        <span style="font-weight:bold;">サービスエリア</span><br>
        北海道　北関東　関東　中部　関西　中国　九州　沖縄（本島、石垣島、宮古島）<br>
        サービスエリアは<a href="https://sitter.honeyclover.co.jp/area/" style="text-decoration: underline;
            color: #d33d2f;">こちら</a>からご確認いただけます
    </ul>
  </div>
</div>
          </section>
        </div>
      </div>
      <?php get_footer(); ?>
