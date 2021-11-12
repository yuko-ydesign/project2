<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php if( is_front_page() ) { ?>
      <title><?php bloginfo( 'name' ); ?></title>
      <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
      <meta property="og:type" content="website" />
    <?php } else { ?>
      <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
      <meta property="og:title" content="<?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?>">
      <meta property="og:type" content="article" />
    <?php } ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/meta/favicon.ico">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:url" content="https://sitter.honeyclover.co.jp/">
    <meta name="twitter:card" content="summary">
    <meta property="og:image" content="https://sitter.honeyclover.co.jp/assets/images/meta/ogimage.png">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sanitize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plan2.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper<?php if( is_front_page() ) { echo ' top'; } elseif(is_single()) { echo ' single'; } elseif(is_post_type_archive('column') || is_home() || is_post_type_archive('faq')) { echo ' archive'; } elseif(is_post_type_archive('area')) { echo ' service-area'; } elseif(is_page('app-feature')) { echo ' app-feature'; } elseif(is_page('childcare')) { echo ' childcare'; } elseif(is_page('company')) { echo ' company'; } elseif(is_page('flow')) { echo ' flow'; } elseif(is_page('matching')) { echo ' matching'; } elseif(is_page('price')) { echo ' price'; } elseif(is_page('quality')) { echo ' quality'; } elseif(is_page('service')) { echo ' service'; } elseif(is_page('municipality')) { echo ' service'; }  elseif(is_page('regular_use')) { echo ' service'; } elseif(is_page('form-shinjuku')) { echo ' form-shinjuku'; } elseif(is_page('info')) { echo ' info'; } elseif(is_404()) { echo ' not-found'; } elseif(is_page('matching-fee')) { echo ' matching-fee'; } elseif(is_page('terms') || is_page('privacy')) { echo ' terms'; } elseif(is_page('payment')) { echo ' payment'; } elseif(is_page('ticket')) { echo ' ticket'; } elseif(is_page('option')) { echo ' option'; } elseif(is_tax('column_cat') || is_tax('faq_cat')) { echo ' archive'; } elseif(is_tax('area_cat')) { echo ' archive-area'; } elseif(is_page('corporate')) { echo ' corporate'; } elseif(is_page('notation')) { echo ' notation'; } elseif(is_page('insurance')) { echo ' insurance'; }?>">
      <header class="header">
        <div class="header__fixed">
          <div class="header__logo">
            <a class="pc" href="<?php echo home_url('/');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_header@2x.png" alt="" /></a>
          </div>
          <button class="header__button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/button_white.svg" alt="" />
          </button>
          <nav class="header__naviBox">
            <div class="header__naviBox__top">
              <div class="header__naviBox__logo">
                <a href="<?php echo home_url('/');?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_header@2x.png" alt="" />
                </a>
              </div>
              <button class="header__closeButton">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/close_white.svg" alt="" />
              </button>
            </div>
            <div class="header__naviBox__left">
              <ul class="header__gnavi">
                <li<?php if(is_page('price')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/price');?>">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_01.svg" alt="" />
                    </div>
                    <p>ハニクロ派遣の料金</p>
                  </a>
                </li>
                <li<?php if(is_page('matching-fee')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/matching-fee');?>">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_02.svg" alt="" />
                    </div>
                    <p>マッチングの料金</p>
                  </a>
                </li>
                <li<?php if(is_page('service')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/service');?>">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_03.svg" alt="" />
                    </div>
                    <p> サービス一覧<span>（保育メニュー、自治体、定期利用）</span>
                    </p>
                  </a>
                </li>
                <li<?php if(is_page('flow')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/flow');?>">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_04.svg" alt="" />
                    </div>
                    <p>ご利用の流れ</p>
                  </a>
                </li>
                <li<?php if(is_page('quality')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/quality');?>">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_05.svg" alt="" />
                    </div>
                    <p>品質へのこだわり</p>
                  </a>
                </li>
                <li<?php if(is_page('app-feature')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/app-feature');?>">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_06.svg" alt="" />
                    </div>
                    <p>アプリの機能</p>
                  </a>
                </li>
                <li<?php if(is_post_type_archive('area')) { echo ' class="is-active"'; }?>>
                  <a href="<?php echo home_url('/area');?>" class="">
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_07.svg" alt="" />
                    </div>
                    <p>サービスエリア</p>
                  </a>
                </li>
                <!--ハンバーガーメニュー -->
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_01.svg" alt="" />
                    </div>
                    <p>料金表</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/price');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>ハニクロ派遣</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/matching-fee');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>マッチング</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/price');?>#ss-option" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>キャンセル料、オプション</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_02.svg" alt="" />
                    </div>
                    <p>サービス</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/childcare');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>ハニクロ派遣とは</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/matching');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>マッチングとは</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/service');?>#tab01" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>保育種別</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/municipality');?>#tab02" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>自治体</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/regular_use');?>#tab03" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>定期利用</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/corporate');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>法人利用</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_03.svg" alt="" />
                    </div>
                    <p>サービスエリア</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/hokkaido');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>北海道</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/kitakanto');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>北関東</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/kanto');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>関東</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/chubu');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>中部</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/kansai');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>関西</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/kyusyu');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>九州</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/area_cat/okinawa');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>沖縄・離島</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_04.svg" alt="" />
                    </div>
                    <p>お支払い</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/payment');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>お支払方法</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/ticket');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>割引チケット</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_05.svg" alt="" />
                    </div>
                    <p>アプリの機能</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/app-feature');?>#link-01" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>シッター検索、評価</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/app-feature');?>#link-02" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>シッター・事務局とのチャット</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/app-feature');?>#link-03" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>予約・今日明日可シッター検索</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/app-feature');?>#link-04" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>保育中のリアルタイムレポート</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_06.svg" alt="" />
                    </div>
                    <p>会社概要</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/company');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>ハニークローバーについて</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/terms');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>ご利用規約</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/insurance');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>加入団体、保険</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_07.svg" alt="" />
                    </div>
                    <p>その他</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/faq');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>よくあるご質問</p>
                  </a>
                </li>
                <li style="display:none;" class="hum-nav hum-nav-before">
                  <a href="<?php echo home_url('/column');?>" class="">
                    <div class="header__gnavi__image">
                    </div>
                    <p>コラム</p>
                  </a>
                </li>
                <li style="display:none; height:1px;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                    </div>
                    <p></p>
                  </a>
                </li>
                <li style="display:none; height:1px;" class="hum-nav hum-nav-title">
                  <a>
                    <div class="header__gnavi__image">
                    </div>
                    <p></p>
                  </a>
                </li>
                <!--ハンバーガーメニュー終了 -->
              </ul>
              <ul class="header__subNavi">
                <li><a href="<?php echo home_url('/column');?>" class="">コラム</a></li>
                <li><a href="<?php echo home_url('/company');?>">会社概要</a></li>
              </ul>
            </div>
            <div class="header__info">
              <ul class="header__info__navi">
                <li>
                  <a href="<?php echo home_url('/info');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_08.svg" alt="" /> 問合せ</a>
                </li>
                <li>
                  <a href="<?php echo home_url('/faq');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/illust_navi_09.svg" alt="" /> よくあるご質問</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="pc">
          <ul class="header__subNavi">
            <li><a href="<?php echo home_url('/column');?>" class="">コラム</a></li>
            <li><a href="<?php echo home_url('/company');?>">会社概要</a></li>
          </ul>
        </div>
        <!-- ここにspの時のボタン -->
      </header>
