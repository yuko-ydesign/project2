<?php get_header(); ?>
<div class="mv">
  <div class="mv__main">
    <div class="mv__content">
      <a href="<?php echo home_url('/childcare'); ?>">
        <div class="mv__box">
          <p class="mv__box__title">シッター派遣</p>
          <p class="mv__box__text">お客様に合わせてご案内</p>
        </div>
        <div class="mv__cursor">
          <div class="mv__cursor__content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv/cursor_01.svg" alt="" />
          </div>
        </div>
      </a>
    </div>
    <div class="mv__content">
      <a href="<?php echo home_url('/matching'); ?>">
        <div class="mv__box">
          <p class="mv__box__title">シッターマッチング</p>
          <p class="mv__box__text"> 自分自身で最適なシッター<br class="sp" />を見つけて依頼</p>
        </div>
        <div class="mv__cursor">
          <div class="mv__cursor__content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv/cursor_02.svg" alt="" />
          </div>
        </div>
      </a>
    </div>
  </div>
  <a href="https://user.honey-clover.com/login" class="login-button" target="_blank" rel="noopener">
    <div class="login-button__illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/login_illust.png" alt=""></div>
    <div class="login-button__text">
      <p>ハニクロご利用者さまへ</p>
      <p class="login-button__title">新規会員登録・ログインはこちら</p>
    </div>
  </a>
  <div class="news-box">
    <div class="news-box__icon">NEWS</div>
    <div class="news-box__content">
      <?php
      $args = [
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'paged' => $paged,
      ];
      $the_query = new WP_Query($args);
      while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <p class="news-box__date"><?php the_time('Y.m.d'); ?></p>
          <p class="news-box__title">
            <span class="pc"><?php the_title(); ?></span>
            <span class="sp"><?php the_title(); ?></span>
          </p>
        </a>
      <?php endwhile;  ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
  <div class="mv__side-title">
    <h1>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="ベビーシッター派遣のハニークローバー" />
    </h1>
  </div>
  <div class="mv__scroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll.png" alt="" /></div>
</div>
<section class="top-app">
  <div class="inner">
    <div class="top-title l-center">
      <p class="top-title__arch">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/app/title.svg" alt="" />
      </p>
      <p class="top-title__text">ハニークローバーのアプリなら</p>
      <h2 class="top-title__main">保育状況を<br class="sp" />リアルタイムで</h2>
      <p class="top-title__text">ご覧いただけます</p>
    </div>
    <ol class="app-ol">
      <li>
        <div class="app-ol__thumb">
          <div class="app-ol__top">
            <p class="app-ol__number">01</p>
            <p class="app-ol__title-en">REPORT</p>
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/app/illust_01.svg" alt="" />
          </div>
        </div>
        <p class="app-ol__title">オンラインレポート機能</p>
        <p class="app-ol__text"> 保育中のレポートがシッターよりリアルタイムで届きます。お子様の今の状況が確認できて安心です。</p>
        <div class="l-center">
          <a class="button" href="<?php echo home_url('/app-feature/#section06'); ?>">詳しく知る</a>
        </div>
      </li>
      <li>
        <div class="app-ol__thumb">
          <div class="app-ol__top">
            <p class="app-ol__number">02</p>
            <p class="app-ol__title-en">SEARCH</p>
          </div>
          <div class="app-ol__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/app/illust_02.svg" alt="" />
          </div>
        </div>
        <p class="app-ol__title">シッター検索評価機能</p>
        <p class="app-ol__text"> シッターを自由に検索でき、ハニクロからの評価、他の利用者様からの評価、資格情報などがご覧いただけます。 </p>
        <div class="l-center">
          <a class="button" href="<?php echo home_url('/app-feature/#section01'); ?>">詳しく知る</a>
        </div>
      </li>
      <li>
        <div class="app-ol__thumb">
          <div class="app-ol__top">
            <p class="app-ol__number">03</p>
            <p class="app-ol__title-en">OTHER</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/app/illust_03.svg" alt="" />
        </div>
        <p class="app-ol__title">その他の便利機能</p>
        <p class="app-ol__text"> シッターや事務局とのチャット、今日明日対応可のシッター検索、シッター指名時の指値機能などご利用いただけます。 </p>
        <div class="l-center">
          <a class="button" href="<?php echo home_url('/app-feature/#section02'); ?>">詳しく知る</a>
        </div>
      </li>
    </ol>
  </div>
</section>
<section class="top-service">
  <div class="l-center">
    <div class="section-title">
      <p class="section-title__en">SERVICE</p>
      <p class="section-title__ja">保育メニュー</p>
		 <p class="box__text"> 急な仕事で当日予約をしたい、疲れをとるために夜間の保育をお願いしたい、幼稚園までの送迎や家事もしてほしい…など、<br>様々なケースに対応したサービスを提供いたしております。<br>好きな遊びなどを含め、事前にお子さまについてできる限り詳細な情報をお伝えいただきますと、よりきめ細かい保育が可能です。<br>不安な点等ございましたら、何でもお気軽にご相談ください。 </p>
    </div>
  </div>
  <div class="bg-gray">
    <div class="box-list">
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="box box--number swiper-slide">
            <a href="<?php echo home_url('/service/#to_01'); ?>">
              <div class="box__top">
                <p class="box__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
                </p>
                <p class="box__title">通常メニュー</p>
                <p class="box__text"> お客さま宅保育・シッター宅保育・教育シッター・病児保育・外国語保育・お子さまの送迎などご利用いただけます </p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/service/image_01.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box box--number swiper-slide">
            <a href="<?php echo home_url('/service?tab02'); ?>">
              <div class="box__top">
                <p class="box__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
                </p>
                <p class="box__title">産前産後サポート</p>
                <p class="box__text"> 調理などの家事代行メニューやご兄弟含めた保育プランも提案させていただきます </p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/service/image_02.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box box--number swiper-slide">
            <a href="<?php echo home_url('/service?tab02'); ?>">
              <div class="box__top">
                <p class="box__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
                </p>
                <p class="box__title">自治体の行政サービス</p>
                <p class="box__text"> ハニクロが受託している自治体の保育支援制度をご利用いただけます </p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/service/image_03.jpg" alt="" />
              </div>
            </a>
          </div>
          <div class="box box--number swiper-slide">
            <a class="disable">
              <div class="box__top">
                <p class="box__number">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
                </p>
                <p class="box__title">定期サービス</p>
                <p class="box__text"> 初回の面談やシッター欠勤時の代替シッター調整など細やかに対応いたします </p>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/service/image_04.jpg" alt="" />
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
<section class="top-quality">
  <div class="inner">
    <div class="top-quality-container">
      <div>
        <div class="section-title">
          <p class="section-title__en">QUALITY</p>
          <p class="section-title__subtext">創業１０年間守り続けている</p>
          <p class="section-title__ja">保育品質</p>
        </div>
        <div class="container container--01">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/quality/illust_01.svg" alt="" />
          <p class="container__title">面接研修の中身</p>
          <p class="container__text"> 保育種別ごとの研修はもちろんのこと、座学研修のみならず実技研修も行います。研修終了時は、シッターとして持たなければならない知識や技能を備えていることを確認いたします。その上で、シッターとして相応しいマナーや言葉遣い、心遣いや包容力、責任感など性格面の基礎能力を持ち合わせているかを判断し、採用しております。 </p>
          <div class="l-right l-center-sp">
            <a class="button" href="<?php echo home_url('/quality/#section03'); ?>">詳しく見る</a>
          </div>
        </div>
      </div>
      <div>
        <div class="container container--02">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/quality/illust_02.svg" alt="" />
          <p class="container__title">所属シッターの<br class="sp" />ご案内</p>
          <p class="container__text"> ハニクロに所属しているシッターは全員非喫煙者です。全員が保育士資格所有者ではございませんが、全員が保育に関わる経験をハニクロに所属する以前から有しております。アプリではシッターの自己紹介、経験、保有資格、特技、他のお客様やハニクロ事務局からの評価をご覧いただき、マッチング指名をしていただくことが可能です。 </p>
          <div class="l-right l-center-sp">
            <a class="button disable">詳しく見る</a>
          </div>
        </div>
        <div class="container container--03">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/quality/illust_03.svg" alt="" />
          <p class="container__title">保育中の<br class="sp" />安全管理</p>
          <p class="container__text"> ハニクロ事務局は、シッターの保育場所への出発前確認、出発時点体温確認、現地到着確認を行います。保育中はシッターがアプリからお客様に保育の様子をリアルタイムに逐次報告をいたしますが、報告内容や頻度をハニクロ事務局も確認し、必要に応じてシッターを電話やチャットでフォローし、お子さまの安全を会社全体でしっかりお守りします。<br> 病児保育におきましても、過去累計10万件以上の実績がありながら、設立以来1度も事故等は起こしておりません。</p>
          <div class="l-right l-center-sp">
            <a class="button" href="<?php echo home_url('/quality/#section01'); ?>">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="top-news is-column">
  <div class="inner">
    <div class="section-title">
      <p class="section-title__en">COLUMN</p>
      <p class="section-title__ja">コラム</p>
    </div>
    <div class="news-list l-flex">
      <?php
      $columnArgs = [
        'post_type'      => 'column',
        'posts_per_page' => 4,
        'paged' => $paged,
      ];
      $the_query = new WP_Query($columnArgs);
      while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="news">
          <a class="" href="<?php the_permalink(); ?>">
            <div class="news__head">
              <p class="news__date"><?php the_time('Y.m.d'); ?></p>
              <p class="news__title"><?php the_title(); ?></p>
            </div>
            <?php $excerpt = get_the_excerpt(); ?>
            <p class="news__text"> <?php echo $excerpt; ?></p>
          </a>
        </div>
      <?php endwhile;  ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="l-center">
      <a href="<?php echo home_url('/column'); ?>" class="button">もっと見る</a>
    </div>
  </div>
</section>
<section class="top-news" style="background:#F2F0ED">
  <div class="inner">
    <div class="section-title">
      <p class="section-title__en">NEWS</p>
      <p class="section-title__ja">お知らせ</p>
    </div>
    <div class="news-list l-flex">
      <?php
      $newsArgs = [
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'paged' => $paged,
      ];
      $the_query = new WP_Query($newsArgs);
      while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="news">
          <a class="" href="<?php the_permalink(); ?>">
            <div class="news__head">
              <p class="news__date"><?php the_time('Y.m.d'); ?></p>
              <p class="news__title"><?php the_title(); ?></p>
            </div>
            <?php $excerpt = get_the_excerpt(); ?>
            <p class="news__text"> <?php echo $excerpt; ?></p>
          </a>
        </div>
      <?php endwhile;  ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="l-center">
      <a href="<?php echo home_url('/news'); ?>" class="button">もっと見る</a>
    </div>
  </div>
</section>
<div class="cursor-circle">
  <div class="cursor-circle__content">詳しく見る</div>
</div>
<?php get_footer(); ?>