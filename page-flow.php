<?php get_header();
/*
Template Name: flow
*/
?>
<div class="fv fv--dispatch">
  <h1 class="fv__title"><span>ご利用の流れ</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>ご利用の流れ</li>
  </ul>
  <p class="subtitle">シッターが決まる<br class="sp" />までの流れ</p>
  <ul class="tabs tabs--4column">
    <li id="tab01" class="is-active">
      <a href="">ハニクロ派遣<span>の流れ</span></a>
    </li>
    <li id="tab02">
      <a href="">マッチング<span>の流れ</span></a>
    </li>
    <li id="tab03" class="is-small">
      <a href="">今日できます、明日できます<span>のマッチングの流れ</span></a>
    </li>
    <li id="tab04">
      <a href="">定期<span>の流れ</span></a>
    </li>
  </ul>
  <section class="s-flow-content">
    <div class="flow-content-area">
      <div class="flow-content is-show">
        <div class="heading heading--reverse">
          <p class="heading__text">の流れ</p>
          <h2 class="heading__title">ハニクロ派遣</h2>
        </div>
        <div class="card-list">
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">日程の選択</p>
              <div class="card__desc"> ご予約の日程を選択し、”ハニクロ派遣を利用する”をチェックしてください。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_23.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">ランクの選択</p>
              <div class="card__desc"> [Sランク]、[Aランク]、[どちらでもよい]の内からご希望を選択してください。<br /><a class="card__link" href="<?php echo home_url('/price'); ?>">SランクとAランクの違いはこちらをご覧ください。</a>
              </div>
              <div class="card__box-container">
                <div class="card__box">
                  <p class="card__box__title">Sランクを選んだ場合</p>
                  <p class="card__box__text"> Sランクのシッターからハニクロ事務局が調整させていただきます。<br />料金はSランクの料金となります。
                  </p>
                </div>
                <div class="card__box">
                  <p class="card__box__title">Aランクを選んだ場合</p>
                  <p class="card__box__text"> Aランクのシッターからハニクロ事務局が調整させていただきます。<br />料金はAランクの料金となります。
                  </p>
                </div>
                <div class="card__box">
                  <p class="card__box__title">どちらでもよいを選んだ場合</p>
                  <p class="card__box__text"> Sランク、Aランクの両方のシッターからハニクロ事務局が調整させていただきます。<br />料金は選ばれたシッターの属するランクの料金となります。
                  </p>
                </div>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_27.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">オプション入力</p>
              <div class="card__desc"> 対象のお子さま、ご希望の時間、上限交通費、家事などのオプションを入力してください。 </div>
              <div class="card__box-container">
                <div class="card__box">
                  <p class="card__box__title">上限交通費について</p>
                  <p class="card__box__text"> お支払いいただける上限の交通費をご入力いただきます。<br />シッターは、上限の交通費を上回った分を自費でお伺いします。そのため、上限の交通費の設定金額によってはシッターが決まりやすい、決まりづらいなど発生する場合がございますのでご承知ください。
                  </p>
                </div>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_30.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッター調整</p>
              <div class="card__desc"> ハニクロ事務局にてシッターを調整いたします。 </div>
              <div class="card__box-container">
                <div class="card__box">
                  <p class="card__box__title"> ハニクロ事務局のシッター調整のポイント </p>
                  <ul class="ul ul--red">
                    <li>保育場所までの交通費</li>
                    <li>お子様のご年齢とシッターの年齢</li>
                    <li>病児保育時のお子様の疾病に対応できるシッター</li>
                    <li>保育中のご希望とシッターの得意分野との相性</li>
                  </ul>
                  <p class="card__box__text"> などを元にハニクロ事務局の社員が人力でシッターを人選させていただきます。 </p>
                </div>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_29.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターのご案内</p>
              <div class="card__desc"> シッター決定後、お客さまに担当させていただくシッターをご案内いたします。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_05.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの自己紹介</p>
              <div class="card__desc"> シッターの詳しい自己紹介をご連絡いただけます。<br /><a class="card__link disable">シッター情報でご覧いただける内容はこちらをご覧ください。</a>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_06.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_07.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">チャットでのコミュニケーション</p>
              <div class="card__desc"> いつでもチャットでシッターとコミュニケーションを取っていただけます。 </div>
              <ul class="ul ul--red">
                <li>当日の保育の内容についての細かいご希望</li>
                <li>シッターへのご質問</li>
              </ul>
              <p class="card__desc"> などございましたらいつでもチャットにてご連絡いただけます。 </p>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_07.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="flow-content is-show">
        <div class="heading heading--reverse">
          <p class="heading__text">の流れ</p>
          <h2 class="heading__title">マッチング</h2>
        </div>
        <div class="card-list">
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">日程の選択</p>
              <div class="card__desc"> ご予約の日程を選択し、”マッチングを利用する”をチェックしてください。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_23.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">オプション入力</p>
              <div class="card__desc"> 対象のお子さま、ご希望の時間、上限交通費、家事などのオプションを入力してください。 </div>
              <div class="card__box-container">
                <div class="card__box">
                  <p class="card__box__title">上限交通費について</p>
                  <p class="card__box__text"> お支払いいただける上限の交通費をご入力いただきます。<br />シッターは、上限の交通費を上回った分を自費でお伺いします。そのため、上限の交通費の設定金額によってはシッターからお断りを受ける可能性もございます。
                  </p>
                </div>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_30.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの指名</p>
              <div class="card__desc"> シッターを検索してご指名いただきます。<br />お客さまのシッター検索画面では、過去に利用されたシッター、お気に入りのシッターなどとともに、新規のシッターを様々な検索軸でお探しいただけます。<br />シッター検索の詳しい機能はこちら
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_28.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">値段の交渉</p>
              <div class="card__desc"> 値段の交渉をしていただくことができます。<br />シッターにご指名いただく際に、料金はシッターの掲げる単価が基準となりますが、「長時間保育を依頼するので下げてほしい」などのご要望がある場合は、単価をお客さまから逆提案をしてご指名いただくことができます。
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_48.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">要望の共有</p>
              <div class="card__desc"> ご要望の内容を細かくシッターに共有していただけます。<br />チャット機能を使い、ご指名いただく前にシッターにご要望をお伝えいただき、快諾を受けたシッターをご指名いただくことができます。<br />保育当日にシッターと対面された際にご希望を受け入れられなかったなどの行き違いが起こらないよう、十分にコミュニケーションをお取りいただけます。
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_31.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">複数名指名</p>
              <div class="card__desc"> 複数のシッターにご指名いただけます。<br />何名かのシッターに同時にご指名いただき、返事の早いシッターでお決めいただくなどをすることもできます。
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_43.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_07.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの決定</p>
              <div class="card__desc"> シッターからのお引き受けさせていただく通知ともに、決定します。<br />値段の交渉をしていただいた場合、シッターから更なる提案がなされることもございますが、その際はご検討ください。
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_32.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="flow-content">
        <div class="heading heading--reverse">
          <p class="heading__text">のマッチングの流れ</p>
          <h2 class="heading__title">今日できます、明日できます</h2>
        </div>
        <div class="card-list">
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">一覧を見る</p>
              <div class="card__desc"> 予約画面トップで保育場所を選択すると、今日できるシッター、明日できるシッター、の一覧をご覧いただけます。<br />ご指定の保育場所にお伺いができる距離のシッターの一覧が表示されます。
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_24.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの指名</p>
              <div class="card__desc"> シッターの詳細とご利用料金をご確認いただき、ご指名いただけます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_28.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">要望のお伝え</p>
              <div class="card__desc">
                <p> チャットをご利用いただき、ご要望の内容などをお伝えいただくことができます。 </p>
                <ul class="ul ul--red">
                  <li> 保育園に急にお迎えに行く必要があり、ご自宅の鍵をお客さまのご勤務先などに取りに伺う場合 </li>
                  <li> 保育園にお迎えに伺い、病院にお連れしてご自宅で保育をさせていただく場合 </li>
                </ul>
                <p> など、細かいご要望やお打ち合わせにつきましても、チャットを使って細かやかにお客さまとシッターの間で情報共有をしていただくことができます。 </p>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_31.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの決定</p>
              <div class="card__desc"> シッターからお引き受けさせていただく通知とともに、決定します。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_32.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="flow-content">
        <div class="heading heading--reverse">
          <p class="heading__text">の流れ</p>
          <h2 class="heading__title">定期</h2>
        </div>
        <h3 class="middle-title">初回のお申込み</h3>
        <div class="card-list card-list--flow-04-01">
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">定期お申し込み</p>
              <div class="card__desc"> 定期のお申し込みをご入力ください。<br />時間帯や曜日などが完全にお決まりでない場合もお申し込みいただけます。<br />○時～○時の間の○時間程度<br />週○回であれば曜日は問いません<br />など
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_44.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの調整</p>
              <div class="card__desc"> 対応させていただけるシッター全員を紹介させていただきます。<br>シッターのプロフィールや時間単価などをご覧いただき、ご検討ください。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_29.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">特定のシッターに相談</p>
              <div class="card__desc"> シッター検索からお探しいただくか、過去にご利用になられたシッターの中からご検討いただくことなどできます。詳細のプロフィールをご覧いただき、ご検討ください。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_45.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターのご案内</p>
              <div class="card__desc"> 担当をさせていただけるシッターが挙がりましたら、ハニクロ事務局より案内をさせていただきます。<br />お客さまはシッターのプロフィールをご覧いただけます。<br />シッターにより料金が異なりますので、料金のご確認とご検討をお願いいたします。
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_05.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターとの面談</p>
              <div class="card__desc">
                <p> ご希望に応じてシッターと面談をしていただくことができます。 </p>
                <ul class="ul ul--red">
                  <li> オンラインでの面談をしていただくこともできます。</li>
                  <li> チャットでさまざまご質問やご要望をシッターにお問い合わせいただくこともできます。</li>
                </ul>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_46.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">定期保育の開始</p>
              <div class="card__desc">
                <p>定期の保育が開始します。</p>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_16.svg" alt="" />
            </div>
          </div>
        </div>
        <h3 class="middle-title middle-title--margin">日々のご利用の流れ</h3>
        <div class="card-list card-list--flow-04-02">
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">スケジュールの確認</p>
              <div class="card__desc"> 前月の中旬に、翌月のスケジュールの確認をシッターがさせていただきます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_47.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">スケジュールのお伺い</p>
              <div class="card__desc">
                <p> ハニクロ事務局よりお客様に翌月のスケジュールをお伺いします。 </p>
                <ul class="ul ul--red">
                  <li> シッターがお伺いできかねる日がある場合、代替シッターを調整させていただくか、お休みとさせていただくかのご判断をお願いさせていただきます。</li>
                  <li> ご利用になる日、キャンセルになる日をご判断いただき、アプリ上でチェックをお願いいたします。</li>
                </ul>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_08.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの伺い</p>
              <div class="card__desc"> 前月に決めたスケジュールに合わせ、担当シッターがお伺いをさせていただきます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_09.svg" alt="" />
            </div>
          </div>
        </div>
        <h3 class="middle-title middle-title--margin"> シッティング前日からの流れ </h3>
        <div class="card-list card-list--flow-04-03">
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターからのお伺いのお知らせ</p>
              <div class="card__desc"> シッターから、「明日お伺いをさせていただく予定です」というお知らせが届きます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_10.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">レポートの共有</p>
              <div class="card__desc">
                <p> 過去にご利用になられた際のレポートを明日お伺いするシッターに共有していただくことができます。<br />以前のシッターがどのように保育をさせていただき、お子さまがどのような遊びがお好きなのかなどを把握し、お子さまに最大限喜んでいただける保育の準備をさせていただきます。
                </p>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_11.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターからのお伺いのお知らせ</p>
              <div class="card__desc"> 出発前、シッターから「今からお伺いをさせていただきます」というお知らせが届きます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_12.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターからの体温のお知らせ</p>
              <div class="card__desc"> 出発前、シッターから「ただいまの体温は○○度です」というお知らせが届きます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_13.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">チャットでのやり取り</p>
              <div class="card__desc"> シッターが保育場所に到着するまでの間、ご希望に応じてチャットでシッターに保育のご要望など細かい内容をお伝えいただくことができます。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_14.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターの到着</p>
              <div class="card__desc"> 保育開始１０分前くらいにシッターが到着します。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_15.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_07.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">保育の開始</p>
              <div class="card__desc">
                <p> 準備を整え、保育を開始いたします。<br />保育中は、ハニークローバーの定める保育指針に従って、全てのシッターが保育をさせていただきます。<br />おむつ交換・睡眠時の呼吸確認の頻度、水分補給のタイミングなど、安全に快適にお子様にお過ごしいただくための手順に従って保育をさせていただきます。<br />シッティング終了時にお子様のオムツがパンパンになっていたり、シッターがお子様におやつを過分に差し上げるなどが起こらないように管理をしております。
                </p>
                <a class="card__link" href="<?php echo home_url('/quality'); ?>">詳しくは、品質へのこだわりをご覧ください。</a>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_16.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_08.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">レポートの通知</p>
              <div class="card__desc">
                <p> 保育中、レポートを入力し、リアルタイムでお客さまに通知されます。 </p>
                <a class="card__link" href="<?php echo home_url('/app-feature/#section06'); ?>"> レポートの内容はこちらからご覧ください。 </a>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_17.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_09.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">シッターのフォロー</p>
              <div class="card__desc">
                <p> ハニクロ事務局はレポートの内容を随時確認し、必要に応じてシッターをフォローいたします。 </p>
                <a class="card__link" href="<?php echo home_url('/quality/#section01'); ?>"> シッティング中のハニクロ事務局のフォロー体制はこちらからご覧ください。 </a>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_18.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_10.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">保育の終了</p>
              <div class="card__desc"> 保育が終了し、シッターより交通費等を報告いたします。 </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_19.svg" alt="" />
            </div>
          </div>
          <div class="card">
            <p class="card__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_11.svg" alt="" />
            </p>
            <div class="card__text">
              <p class="card__title">ご請求内容の確認</p>
              <div class="card__desc">
                <p> ご請求の内容を確認していただき、承認およびレビューをお願いいたします。<br />レビューはシッター向けのメッセージと、お客さまの中で留めていただく内容を分けていただくことができます。<br />お気に入り、NGの設定をしていただくことができます。
                </p>
                <a class="card__link disable"> レビューの詳しい機能はこちらをご覧ください。 </a>
              </div>
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_20.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>