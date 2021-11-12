<?php get_header();
/*
Template Name: matching
*/
?>
<div class="fv fv--match">
  <h1 class="fv__title"><span>マッチングとは</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>マッチングとは</li>
  </ul>
  <p class="subtitle">選べるハニクロの<br class="sp" />ふたつのサービス</p>
  <ul class="tabs">
    <li><a href="<?php echo home_url('/childcare'); ?>">ハニクロ派遣とは</a></li>
    <li class="is-active"><span>マッチングとは</span></li>
  </ul>
  <section class="s-feature">
    <div class="heading">
      <p class="heading__text">マッチングの</p>
      <h2 class="heading__title">特徴</h2>
    </div>
    <ul class="list-f list-f--match">
      <li class="add-image">
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/illust_01.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p> 担当させていただくシッターを、お客さまがご指名いただきます。 </p>
        </div>
        <div class="list-f__rightImage">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/image_01.png" alt="" class="pc" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/image_01_sp.png" alt="" class="sp" />
        </div>
      </li>
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/illust_02.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p>ご利用料金は、シッター自らが設定し、シッターごとに異なります。</p>
          <div class="list-f__link">
            <a href="<?php echo home_url('/price'); ?>">マッチングのご利用料金はこちらをご覧ください。</a>
          </div>
        </div>
      </li>
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/illust_03.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p> シッター検索で、シッターに対する事前の評価を<br class="pc" />
            できるだけ正確にしていただける情報をご確認いただけます。
          </p>
          <div class="list-f__link">
            <a class="disable">ご確認いただけるシッター情報はこちらをご覧ください。</a>
          </div>
        </div>
      </li>
      <li class="add-image">
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/illust_04.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p> ご指名いただく前に、チャットでシッターと交流していただき、<br class="pc" />
            具体的なご要望の内容やお尋ね事項などをシッターと認識を<br class="pc" />
            合わせていただくことができます。
          </p>
        </div>
        <div class="list-f__rightImage">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/image_02.png" alt="" class="pc" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/image_02_sp.png" alt="" class="sp" />
        </div>
      </li>
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/feature/illust_05.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p> 具体的なご利用の流れは<a href="<?php echo home_url('/flow'); ?>">こちら</a>をご覧ください。 </p>
        </div>
      </li>
    </ul>
  </section>
</div>
<section class="s-type">
  <div class="heading">
    <p class="heading__text">マッチングでご利用いただける</p>
    <h2 class="heading__title">保育種別</h2>
  </div>
  <div class="bg-gray">
    <div class="box-list box-list--5column">
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_01'); ?>">
              <div>
                <p class="box__title">通常保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_01.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_02'); ?>">
              <div>
                <p class="box__title">病児保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_02.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <div>
              <div>
                <p class="box__title">産前産後サポート</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_03.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_03'); ?>">
              <div>
                <p class="box__title">短時間送迎</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_04.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_07'); ?>">
              <div>
                <p class="box__title">宿泊保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_05.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <div class="box__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/recommend.svg" alt="" />
            </div>
            <a href="<?php echo home_url('service#no_02'); ?>">
              <div>
                <p class="box__title">今日できます</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_06.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <div class="box__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/recommend.svg" alt="" />
            </div>
            <div>
              <div>
                <p class="box__title">明日できます</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_07.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="box swiper-slide">
            <div>
              <div>
                <p class="box__title">シッター宅保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_08.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_05'); ?>">
              <div>
                <p class="box__title">教育シッター</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_09.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_06'); ?>">
              <div>
                <p class="box__title">外国語保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_10.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_08'); ?>">
              <div>
                <p class="box__title">連泊保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/match/box/image_11.jpg" alt="" />
              </div>
            </a>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>
<section class="s-system" id="s-system">
  <div class="item item--full">
    <div class="item__top">
      <div class="heading">
        <p class="heading__text">今日できます、明日できますの</p>
        <h2 class="heading__title">ご利用方法</h2>
      </div>
      <p class="item__text"> 通常のマッチングとは別に、今日、明日の緊急のご予約に対応させていただけるシッターをご覧いただくことができます。<br class="sp" />ご希望の保育場所に近いシッターを<br class="sp" />ご指名いただき、速やかにご利用<br class="sp" />いただくことができます。
      </p>
    </div>
  </div>
  <div class="l-flex item-column">
    <div class="item">
      <div class="item__top">
        <div class="heading">
          <p class="heading__text">お得にご利用</p>
          <h2 class="heading__title">チケット制度</h2>
        </div>
        <p class="item__text">各種チケットは全てご利用いただけます。</p>
      </div>
      <div>
        <div class="item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/system/illust_01.svg" alt="" />
        </div>
        <a class="button button--large" href="<?php echo home_url('/ticket'); ?>">ご利用いただけるチケットはこちら</a>
      </div>
    </div>
    <div class="item item--image-right">
      <div class="item__top">
        <div class="heading">
          <p class="heading__text">自治体の</p>
          <h2 class="heading__title">育児支援制度</h2>
        </div>
        <p class="item__text"> 自治体の育児支援制度をご利用いただく際は、<br class="pc" />料金体系やご予約の流れが自治体のルールに則ります。</p>
      </div>
      <div>
        <div class="item__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/system/illust_02.svg" alt="" />
        </div>
        <a class="button" href="<?php echo home_url('/service?tab02'); ?>">詳しく知る</a>
      </div>
    </div>
  </div>
</section>
<section class="s-difference">
  <div class="inner">
    <div class="note">
      <div class="note-border note-border--top"></div>
      <div class="note-border note-border--bottom"></div>
      <div class="note-border note-border--left"></div>
      <div class="note-border note-border--right"></div>
      <p class="note__title">ハニクロマッチングでご理解いただきたいこと</p>
      <ul class="ul ul--red">
        <li> 品質の責任は原則としてハニークローバーが負います。お客さまとシッターの当事者同士の問題解決をお願いすることは原則ございません。</li>
        <li> 各種保険はハニークローバーで加入しております。</li>
        <li> マッチングのシッターはハニクロ派遣のシッターと同一であり、マッチングのみのシッターは存在しません。<br />シッターの採用や研修、理解度の把握はハニークローバーが対面に準じた方法で行い、映像等資料の閲覧により研修とすることはございません。 <br class="pc" /><a href="<?php echo home_url('/quality#section03'); ?>">詳しい採用や研修の内容はこちらをご覧ください </a>
        </li>
        <li> シッティング中の品質確認やフォロー体制につきましても、ハニクロ派遣と同様にハニクロ事務局が行います。 <br class="pc" /><a href="<?php echo home_url('/quality#section01'); ?>">シッティング中のハニクロ事務局の安全に対する取り組みはこちらをご覧ください。 </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php get_footer(); ?>