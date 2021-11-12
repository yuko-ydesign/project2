<?php get_header();
/*
Template Name: childcare
*/
?>
<div class="fv fv--dispatch">
  <h1 class="fv__title"><span>ハニクロ派遣とは</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>ハニクロ派遣の料金</li>
  </ul>
  <p class="subtitle">選べるハニクロの<br class="sp" />ふたつのサービス</p>
  <ul class="tabs">
    <li class="is-active"><span>ハニクロ派遣とは</span></li>
    <li><a href="<?php echo home_url('/matching'); ?>">マッチングとは</a></li>
  </ul>
  <section class="s-feature">
    <div class="heading">
      <p class="heading__text">ハニクロ派遣の</p>
      <h2 class="heading__title">特徴</h2>
    </div>
    <ul class="list-f list-f--dispatch">
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/feature/illust_01.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p> 担当させていただくシッターをハニクロ事務局が調整させていただきます。 </p>
        </div>
      </li>
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/feature/illust_02.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p>料金体系はSランクとAランクの２種類に分かれます。</p>
          <div class="list-f__link">
            <a href="#difference">SランクとAランクの違いはこちらをご覧ください。</a>
          </div>
        </div>
      </li>
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/feature/illust_03.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p> ご予約時に、[Sランク]・[Aランク]・[どちらでもよい]からお選びいただきます。 </p>
          <div class="list-f__link">
            <a href="<?php echo home_url('/price'); ?>">SランクとAランクの料金はこちらをご覧ください。</a>
          </div>
        </div>
      </li>
      <li>
        <p class="list-f__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
        </p>
        <div class="list-f__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/feature/illust_04.svg" alt="" />
        </div>
        <div class="list-f__text">
          <p>具体的なご利用の流れは<a href="<?php echo home_url('/flow'); ?>">こちら</a>をご覧ください。 </p>
        </div>
      </li>
    </ul>
  </section>
</div>
<section class="s-type">
  <div class="heading">
    <p class="heading__text">ハニクロ派遣でご利用いただける</p>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/box/image_01.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_02'); ?>">
              <div>
                <p class="box__title">病児保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/box/image_02.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <div>
              <div>
                <p class="box__title">産前産後サポート</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/box/image_03.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_03'); ?>">
              <div>
                <p class="box__title">短時間送迎</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/box/image_04.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box swiper-slide">
            <a href="<?php echo home_url('service#no_07'); ?>">
              <div>
                <p class="box__title">宿泊保育</p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/box/image_05.jpg" alt="" />
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
    <div class="inner">
      <p class="asterisk">
        <span> 教育シッターやシッター宅保育などはマッチングのみでのご利用になりますのでご注意ください。 </span>
      </p>
    </div>
  </div>
</section>
<section class="s-system">
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
        <p class="item__text"> 自治体の育児支援制度をご利用いただく際は、<br class="pc" />料金体系やご予約の流れが自治体のルールに則ります。
        </p>
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
<section class="s-difference" id="difference">
  <div class="inner">
    <div class="heading">
      <p class="heading__text">SランクとAランクの</p>
      <h2 class="heading__title">違い</h2>
    </div>
    <div class="card-list card-list--dispatch">
      <div class="card">
        <p class="card__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </p>
        <div class="card__text">
          <p class="card__title">ハニクロレポート評価得点</p>
          <div class="card__desc">
            <ul class="ul ul--red">
              <li> ハニクロレポートがマニュアル通りに正確に記録されているかを確認します。</li>
              <li> Aランク、Sランクともにオムツ交換や睡眠時の呼吸確認頻度など、お子様を安全に保育するために必要な、ハニクロが独自に決めた保育手順に従ってシッティングがされていることを確認し、その上でお子様との遊び方や過ごし方において評価がされているシッターがSランクの基準になります。</li>
            </ul>
          </div>
        </div>
        <div class="card__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/difference/illust_01.svg" alt="" />
        </div>
      </div>
      <div class="card">
        <p class="card__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
        </p>
        <div class="card__text">
          <p class="card__title">お客様からの評価得点</p>
          <div class="card__desc">
            <ul class="ul ul--red">
              <li> お客様からいただいたレビューを日々拝読します。</li>
              <li> 純粋に、「子供をこの方にお任せしてよかった」と思っていただいたお言葉の頻度および内容が一定水準を超えていることがSランクの基準になります。</li>
            </ul>
          </div>
        </div>
        <div class="card__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/difference/illust_02.svg" alt="" />
        </div>
      </div>
      <div class="card">
        <p class="card__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
        </p>
        <div class="card__text">
          <p class="card__title">勤務回数</p>
          <div class="card__desc">
            <ul class="ul ul--red">
              <li> 年間勤務回数が最低100回であることがSランクの基準になります。</li>
            </ul>
          </div>
        </div>
        <div class="card__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/difference/illust_03.svg" alt="" />
        </div>
      </div>
      <div class="card">
        <p class="card__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
        </p>
        <div class="card__text">
          <p class="card__title">勤務への取り組み</p>
          <div class="card__desc">
            <ul class="ul ul--red">
              <li> 遅刻（公共交通機関の遅延は除く）および欠勤（正当な理由のないキャンセル）がないこと。また、やむを得ない事情の場合は報告、連絡がマニュアル通りに行われていることを確認します。</li>
              <li> Aランク、Sランクともに無断欠勤または欠勤や遅刻時の連絡が滞りなく行われていることを確認し、その上で連絡の素早さやお客さまへのきめ細やかな配慮を一定水準を超えてなされていることがSランクランクの基準になります。</li>
            </ul>
          </div>
        </div>
        <div class="card__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/difference/illust_04.svg" alt="" />
        </div>
      </div>
      <div class="card">
        <p class="card__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
        </p>
        <div class="card__text">
          <p class="card__title">保育への取り組み</p>
          <div class="card__desc">
            <ul class="ul ul--red">
              <li> 外部研修等への積極的な参加を行い、前向きな姿勢で保育に取り組んでいることを確認します。</li>
              <li> 追加マニュアル研修など、ハニクロが実施する追加の研修全て出席することがSランクの基準になります。</li>
            </ul>
          </div>
        </div>
        <div class="card__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dispatch/difference/illust_05.svg" alt="" />
        </div>
      </div>
    </div>
    <div class="note">
      <p class="note__title">SランクとAランクについてご注意いただきたいこと</p>
      <ul class="ul ul--red">
        <li> Aランクのシッターも安全に保育をさせていただく十分な資質、能力を持っております。</li>
        <li> ランクに関わらず、ハニークローバーの全てのシッターが備えている素養や特徴につきましてはこちらをご覧ください。</li>
        <li> ランクに関わらず、全てのシッターが安全に保育をし、ハニクロ事務局は保育中の安全を見守りフォローをする体制を整えております。 <br class="pc" /><a href="<?php echo home_url('/quality#section01'); ?>">シッティング中のハニクロ事務局の安全に対する取り組みはこちらをご覧ください。</a>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php get_footer(); ?>