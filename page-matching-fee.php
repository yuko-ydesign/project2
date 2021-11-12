<?php get_header();
/*
Template Name: matching-fee
*/
?>
      <div class="fv fv--matching-fee">
        <h1 class="fv__title"><span>マッチングの料金</span></h1>
        <div class="fv__side-title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
        </div>
      </div>
      <div class="inner">
        <ul class="breadcrumb">
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li>マッチングの料金</li>
        </ul>
        <div class="heading">
          <p class="heading__text">マッチングの</p>
          <h2 class="heading__title">料金</h2>
        </div>
        <div class="sub-container">
          <p class="sub-container__top"> ハニークローバーでご利用いただける保育メニューです。 </p>
          <div class="sub-container__content">
            <div class="sub-container__text">
              <p>マッチングの料金は、次の3つに分かれます。</p>
              <ul class="ul">
                <li>シッター自身が設定したマッチング料金</li>
                <li>お客様のご希望料金</li>
                <li>今日できます、明日できますのマッチング料金</li>
              </ul>
              <p class="sub-container__asta"> ※マッチングのご案内は<a href="<?php echo home_url('/matching'); ?>">こちら</a>
              </p>
              <p class="sub-container__asta"> ※今日明日できますのご案内は<a href="<?php echo home_url('/matching#s-system'); ?>">こちら</a>
              </p>
            </div>
          </div>
        </div>
        <section class="s-feature">
          <div class="card-l" id="01">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__unit">
                <h3 class="card-l__title"> シッター自身が設定したマッチング料金について </h3>
                <div class="card-l__short">
                  <div class="card-l__desc">
                    <p> マッチング料金は、シッターが個別に決めた時給に対し、ハニークローバーの事務手数料を加えた金額となります。シッティング品質と管理はハニークローバーが原則責任を持ち行い、ハニクロ派遣と同様にお届けします。 </p>
                    <p> ハニクロの品質へのこだわりは<a href="<?php echo home_url('/quality'); ?>" class="card-l__link">こちら</a>をご覧ください。 </p>
                    <p>各種チケットは全てご利用いただけます。</p>
                  </div>
                </div>
              </div>
              <h4 class="middle-title">ご確認のいただき方</h4>
              <ul class="figure-list figure-list--3column">
                <li class="figure figure--number">
                  <div class="figure__no">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_ol_01.svg" alt="" />
                  </div>
                  <div class="figure__top">
                    <div class="figure__thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/matching-fee/01/image_01.svg" alt="" />
                    </div>
                    <p class="figure__title"> シッター検索を押してください。 </p>
                  </div>
                </li>
                <li class="figure figure--number">
                  <div class="figure__no">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_ol_02.svg" alt="" />
                  </div>
                  <div class="figure__top">
                    <div class="figure__thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/matching-fee/01/image_02.svg" alt="" />
                    </div>
                    <p class="figure__title"> 様々な条件でシッターを検索していただけます。 </p>
                    <div class="figure__text">
                      <p>名前の検索をしていただく場合、「詳細検索」の「フリーワード検索」をご利用ください。</p>
                    </div>
                  </div>
                </li>
                <li class="figure figure--number">
                  <div class="figure__no">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_ol_03.svg" alt="" />
                  </div>
                  <div class="figure__top">
                    <div class="figure__thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/matching-fee/01/image_03.svg" alt="" />
                    </div>
                    <p class="figure__title"> 「単価表」を押していただくと、シッターのマッチング時給をご覧いただくことができます。 </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_69.svg" alt="" />
            </div>
          </div>
          <div class="card-l" id="02">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__unit">
                <h3 class="card-l__title">お客様のご希望料金について</h3>
                <div class="card-l__short">
                  <div class="card-l__desc">
                    <p> シッターをご指名いただく際に、お客様のご希望料金をシッターに直接ご相談いただくことができます。お客様のご希望料金の７０％が実際にシッターが受け取る金額になります。 </p>
                    <p>ハニクロの品質へのこだわりは<a href="<?php echo home_url('/quality'); ?>" class="card-l__link">こちら</a>をご覧ください。</p>
                    <br />
                    <p> （例）<br />ハニクロ派遣でAランクのシッターに関東で通常保育を日中ご利用いただくと、一時間2,200円
                （シッターの報酬は50％の1,100円）<br />マッチングで当該シッターに2,200円のご希望をいただくと、シッターの報酬は70％の1,540円となるため、ご指名をいただくと、シッターにとても有益なため、ぜひご利用ください。
              </p>
                  </div>
                </div>
                <div class="note note--small">
                  <p class="note__title">ご注意いただきたいこと</p>
                  <div class="note__content">
                    <p> 料金単価は１種類となります（時間２０００円など）。 </p>
                    <p> １８時まではいくら、１８時以降はいくら、などの設定はできません。 </p>
                  </div>
                </div>
              </div>
              <h4 class="middle-title">ご希望料金の設定のいただきかた</h4>
              <ul class="figure-list figure-list--1column">
                <li class="figure figure--number">
                  <div class="figure__no">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_ol_01.svg" alt="" />
                  </div>
                  <div class="figure__top">
                    <div class="figure__thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/matching-fee/01/image_01.svg" alt="" />
                    </div>
                    <p class="figure__title"> シッターへのご指名（マッチング）予約中に「シッターへの希望時給」を数字でご入力ください。 </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_70.svg" alt="" />
            </div>
          </div>
          <div class="card-l" id="03">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__unit">
                <h3 class="card-l__title"> 今日できます、明日できますのマッチング料金について </h3>
                <div class="card-l__short">
                  <div class="card-l__desc">
                    <p> 今日、明日の急ぎのご予約に対応できるシッターを個別にご指名いただく際の料金となります。<br />ご予約画面で、今日明日対応できるシッターの一覧をご確認いただけます。<br />今日明日対応できるシッター情報、料金は毎日更新されます。通常のマッチング料金と異なる料金設定となります。
              </p>
                  </div>
                </div>
              </div>
              <h4 class="middle-title">ご確認のいただき方</h4>
              <ul class="figure-list">
                <li class="figure figure--number">
                  <div class="figure__no">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_ol_01.svg" alt="" />
                  </div>
                  <div class="figure__top">
                    <div class="figure__thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/matching-fee/03/image_01.svg" alt="" />
                    </div>
                    <p class="figure__title"> 「予約する」を押していただき、ご予約画面トップの「すぐに依頼できるシッター」内の、「保育場所」を選択していただくと、該当地域に待機をしているシッター一覧をご確認いただけます。 </p>
                  </div>
                </li>
                <li class="figure figure--number">
                  <div class="figure__no">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_ol_02.svg" alt="" />
                  </div>
                  <div class="figure__top">
                    <div class="figure__thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/matching-fee/03/image_01.svg" alt="" />
                    </div>
                    <p class="figure__title"> 時間単価や対応時間をご確認いただき、ご希望のシッターに直接ご指名予約をいただくことができます。 </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_71.svg" alt="" />
            </div>
          </div>
        </section>
      </div>
      <?php get_footer(); ?>