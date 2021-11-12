<?php get_header();
/*
Template Name: app-feature
*/
?>
<div class="fv fv--app-feature">
  <h1 class="fv__title"><span>アプリの機能</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>アプリの機能</li>
  </ul>
  <div class="top-title l-center">
    <p class="top-title__arch">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/app/title.svg" alt="" />
    </p>
    <p class="top-title__text">ハニクロアプリはお客様の</p>
    <h2 class="top-title__main"> 便利で安心した<br />シッターサービスのご利用に</h2>
    <p class="top-title__text">大きく貢献します</p>
  </div>
  <section class="s-feature">
    <div class="heading">
      <p class="heading__text">ハニクロアプリの</p>
      <h2 class="heading__title" id="link-01">特徴</h2>
    </div>
    <ul class="content-list">
      <li id="section01" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_35.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title">シッター検索機能</h3>
            <p class="content__desc"> シッターの顔写真、年齢、居住エリア、保有資格、特技、自己紹介、勤務回数などの基本的な情報をご覧いただけます。 </p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list figure-list--3column">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/01/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> 過去に利用されたお客さまからの評価の忖度の余地を少なくしております。 </p>
            </div>
            <div class="figure__text">
              <ul class="ul ul--red ul--large">
                <li> 過去に利用されたお客さまからのお気に入りのパーセンテージが表示されます。</li>
                <li> 過去に利用されたお客さまからの文章レビューが表示されます。（文章レビューはシッターが読めない仕組みを導入し、シッターには別の文章が通知できる仕様となっております。） </li>
              </ul>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/01/image_02.svg" alt="" />
              </div>
              <p class="figure__title">遅刻や欠勤の数が表示されております。</p>
            </div>
            <div class="figure__text">
              <ul class="ul ul--red ul--large">
                <li> やむを得ない理由での遅刻や欠勤で、かつハニクロの定める報告連絡の手順に沿っていた場合はカウントされません。</li>
                <li> やむを得ない理由での遅刻や欠勤であっても、報告連絡がハニクロの手順に沿っていない場合はカウントされます。</li>
              </ul>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/01/image_03.svg" alt="" />
              </div>
              <p class="figure__title"> ハニクロからの評価が表示されております。 </p>
            </div>
            <div class="figure__text">
              <ul class="ul ul--red ul--large">
                <li> SランクまたはAランクのどちらに属するかが表示。</li>
                <li> ランクは毎月の評価により動くことがあります。</li>
                <li> 具体的な評価の基準については<a class="disable">こちら</a>をご覧ください。</li>
              </ul>
            </div>
          </li>
        </ul>
        <div id="link-02" style="height:1px;">
        </div>
      </li>
      <li id="section02" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_36.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title">チャット機能</h3>
            <p class="content__desc"> シッターおよびハニクロ事務局といつでもチャットをしていただくことができます。<br />保育中は必要に応じてシッターに追加のご指示や延長などのご相談をしていただくことができます。</p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list figure-list--3column">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/02/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> 既読未読状況を随時ご確認いただけます。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/02/image_02.svg" alt="" />
              </div>
              <p class="figure__title"> マッチングでご指名いただく前に、候補のシッターとチャットをしていただけます。詳しい保育のご希望やシッターへのご質問などをご連絡いただき、ご指名の是非を慎重にご検討いただけます。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/02/image_03.svg" alt="" />
              </div>
              <p class="figure__title"> チャットの内容は残ります。ハニクロ事務局も過去の内容を拝読した上で、スムーズなコミュニケーションをお届けします。 </p>
            </div>
          </li>
        </ul>
        <div id="link-03" style="height:1px;">
        </div>
      </li>
      <li id="section03" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_38.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title">スポット利用予約機能</h3>
            <p class="content__desc"> ハニクロ派遣、マッチングのいずれもご利用いただけます。<br />ハニクロ派遣とマッチングの違いは<a href="<?php echo home_url('/price'); ?>">こちら</a>をご覧ください。 </p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/03/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> マッチングご利用時、シッターに値段交渉をしていただくことができます。 </p>
              <div class="figure__text">
                <ul class="ul ul--red ul--large">
                  <li> ハニクロ派遣、マッチングのいずれもご利用いただけます。ハニクロ派遣とマッチングの違いは<a href="<?php echo home_url('/price'); ?>">こちら</a>をご覧ください。</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </li>
      <li id="section04" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_39.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title"> 今日できます、明日できますの<br class="pc" />マッチング予約機能</h3>
            <p class="content__desc"> 今日、明日の急なご用命にお応えできるシッターを直接ご指名いただけます。 </p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/04/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> 情報は毎日更新されます。 </p>
              <div class="figure__text">
                <ul class="ul ul--red ul--large">
                  <li> シッターは毎日情報を更新しますので、対応できるシッターのみが表示されます。</li>
                  <li> スポットのマッチングと同様に値段の交渉をしていただけます。</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </li>
      <li id="section05" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_40.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title">定期利用申し込み機能</h3>
            <p class="content__desc"> 定期でのご利用を申し込みいただくことができます。 </p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list figure-list--4column">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/05/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> ご指名がない場合は新規シッターの調整はハニクロ事務局が人力で行います。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/05/image_02.svg" alt="" />
              </div>
              <p class="figure__title"> 特定のシッターに個別にご相談いただくことができます。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/05/image_03.svg" alt="" />
              </div>
              <p class="figure__title"> 次月以降のご利用につきましては、ハニクロ事務局がお客さま及びシッターのスケジュール調整を人力で行います。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/05/image_04.svg" alt="" />
              </div>
              <p class="figure__title"> シッターがお伺いできない日については、ハニクロ事務局が人力で代替シッターの調整等させていただきます。詳しくは<a class="disable">こちら</a>はご覧ください。 </p>
            </div>
          </li>
        </ul>
      </li>
      <div id="link-04" style="height:1px;">
      </div>
      <div style="height:20px;">
      </div>
      <li id="section06" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_41.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title"> リアルタイムのハニクロレポートのお受け取りと保管 </h3>
            <p class="content__desc"> 保育の状況をリアルタムでシッターから通知され、ご確認いただけます。<br />保育終了後は一枚のレポートに様式が変換され、以降いつでもお読みいただけます。</p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list figure-list--3column">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/06/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> 過去のレポートを次回のシッターに共有していただくことができます。シッターはお子さまに合わせた保育の準備を行うことができます。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/06/image_02.svg" alt="" />
              </div>
              <p class="figure__title"> 保育中の細かいレポートはハニクロ事務局にもリアルタイムに通知されます。ハニクロ事務局は必要に応じてシッターにフォローを行います。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/06/image_03.svg" alt="" />
              </div>
              <p class="figure__title"> 保育中のお子さまの様子などを画像でお届けすることもできます。ご希望の際はお申し付けください。 </p>
            </div>
          </li>
        </ul>
      </li>
      <li id="section07" class="content">
        <div class="content__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_07.svg" alt="" />
        </div>
        <div class="content__top">
          <div class="content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_42.svg" alt="" />
          </div>
          <div class="content__text">
            <h3 class="content__title">各種登録機能</h3>
            <p class="content__desc"> 保育場所の情報は無制限にご登録いただけます。<br class="pc" />お支払者様のご勤務先はご登録いただかなくてもご利用いただけます。<br class="pc" />保育指示書は事前にいつでもご登録いただけます。</p>
          </div>
        </div>
        <h4 class="middle-title">ハニクロアプリの魅力</h4>
        <ul class="figure-list">
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/07/image_01.svg" alt="" />
              </div>
              <p class="figure__title"> ご旅行先などで利用される際は、該当エリアの料金体系に自動で変更されます。 </p>
            </div>
          </li>
          <li class="figure">
            <div class="figure__top">
              <div class="figure__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-feature/07/image_02.svg" alt="" />
              </div>
              <p class="figure__title"> お子さま情報、お客さま情報は写真を添付していただけます。送迎保育をご利用になる際もシッターが間違えずにお子さまの元に伺います。 </p>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </section>
</div>
<?php get_footer(); ?>
