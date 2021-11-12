<?php get_header();
/*
Template Name: service
*/
?>
<div class="fv fv--service">
  <h1 class="fv__title"><span>サービス一覧</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>サービス一覧</li>
  </ul>
  <ul class="tabs">
    <li id="tab01" class="is-active"><a>保育メニュー</a></li>
    <li id="tab02"><a class="">自治体</a></li>
    <li id="tab03"><a class="">定期利用</a></li>
  </ul>
</div>
<div class="service-section-wrap">
  <div class="inner">
    <section class="s-service s-menu is-show">
      <div class="heading">
        <h2 class="heading__title">保育</h2>
        <p class="heading__text">メニュー</p>
      </div>
      <div class="sub-container">
        <p class="sub-container__top"> ハニークローバーでご利用いただける保育メニューです。 </p>
        <div class="sub-container__content">
          <p class="sub-container__text"> お客様のあらゆるご要望にお応えできるプランをご用意しております。プランに該当しないご要望にも可能な限りお応えしますので、ご相談ください。<br />産前産後サポートと自治体のサービスは<a class="disable">こちら</a>をご覧ください。 </p>
          <ul class="sub-container__link">
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_01.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/normal_childcare');?>">通常保育</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_02.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/childcare_for_sick_children');?>">病児保育</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_03.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/transfer');?>">短時間送迎</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_04.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/childcare_at_sitters_house');?>">シッター宅保育</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_05.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/education_sitter');?>">教育シッター</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_06.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/foreign_language_sitter');?>">外国語シッター</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_07.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/accommodation_childcare');?>">宿泊保育</a>
            </li>
            <li>
              <p class="sub-container__link__num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/number/no_08.svg" alt="" />
              </p>
              <a href="<?php echo home_url('/consecutive_nights_childcare');?>">連泊保育</a>
            </li><br>
          </ul>
          <div class="group">
            <div class="group__head">
              <p class="group__title"> <br>オプション </p>
            </div>
          </div>
          <div class="sub-container__link">
            <ul class="page-links">
              <li>
                <a href="<?php echo home_url('/option');?>#option-s-01">家事代行</a>
              </li>
              <li>
                <a href="<?php echo home_url('/option');?>#option-s-02">掃除</a>
              </li>
              <li>
                <a href="<?php echo home_url('/option');?>#option-s-03">洗濯</a>
              </li>
              <li>
                <a href="<?php echo home_url('/option');?>#option-s-04">沐浴・入浴介助</a>
              </li>
              <li>
                <a href="<?php echo home_url('/option');?>#option-s-05">複数保育</a>
              </li>
              <li>
                <a href="<?php echo home_url('/option');?>#option-s-06">キャンセル料</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="to_01"></div>
      <div class="card-l" id="no_01">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              通常保育
              <span class="card-l__title__caption">
                （ハニクロ派遣・マッチング）
              </span>
            </h3>
            <div class="card-l__desc"> 最もスタンダードな保育プランです。 </div>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc"> お子さまが最大限楽しくお過ごしいただけるよう、工夫を凝らして保育をさせていただきます。 </div>
          </div>
          <div class="card-l__unit">
            <div class="card-l__block">
              <p class="tag">お客様にお願いしたいこと</p>
              <p class="card-l__desc"> 初めてお会いいただくシッターと打ち解けていただき、楽しい時間をお過ごしいただくために、ぜひご協力をお願いいたします。 </p>
            </div>
            <div class="card-l__desc card-l__desc--s-margin">
              <ul class="ul">
                <li> お子さまが今どのような遊びが好きなのか、教えてください。<br />ご年齢（月齢）や性別などによってかなり変わりますのでなるべく細かく教えてください。<br />シッターにチャットで事前にお伝えいただけますと、できる範囲で準備をして伺わせていただきます。
                </li>
                <li> 折り紙などの材料をお持ちすることをご希望にならない場合は、お知らせください。<br />過去のレポートを参照し、シッターの判断で折り紙などの材料をお持ちすることがございます。<br />ご不要でしたらお知らせいただけますと助かります。
                </li>
                <li> テレビゲームなどの許諾についてのご指示をお願いいたします。<br />許諾の場合は長さなど、ご家庭の方針を教えてください。
                </li>
                <li> 外に遊びにお連れしてよいかも教えてください。<br />公園などにお連れして遊ぶ場合、ご自宅の鍵をお預かりする必要がございます。
                </li>
              </ul>
            </div>
            <p class="card-l__desc card-l__desc--m-margin"> 安全に、快適にお子様にお過ごしいただくための保育の進め方は、全てのシッターがハニークローバーの定める保育マニュアルに沿っております。<br class="sp" />詳しい内容につきましては、<a class="disable card-l__link">こちら</a>をご覧ください。 </p>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_61.svg" alt="" />
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
            <div class="card-l__desc"> 対応させていただく疾病の例は<a class="disable card-l__link">こちら</a>。 </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_62.svg" alt="" />
        </div>
      </div>
      <div id="to_03"></div>
      <div class="card-l" id="no_03">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
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
      <div id="to_04"></div>
      <div class="card-l" id="no_04">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              シッター宅保育
              <span class="card-l__title__caption">
                （マッチング）
              </span>
            </h3>
            <p class="card-l__desc">*準備中</p>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc">
              <ul class="ul">
                <li> シッターの自宅でお子さまを保育させていただくプランです。 </li>
                <li> １回あたり1時間よりご利用いただけます（以後30分単位で加算）。 </li>
                <li> 料金はシッター個人により異なりますのでシッター検索よりご確認ください。 </li>
                <li> 保育を進めさせていただく手順は通常保育と変わりはございませんが、特徴が３つあります。 </li>
              </ul>
            </div>
            <div class="card-l__block">
              <div class="group-list">
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴1</p>
                    <p class="group__title"> 他のお子さまと一緒に保育をさせていただくことがございます。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> シッター宅の受け入れ可能人数によっては、他のお子さまとご一緒いただくことがございます。 マンツーマンをご希望の場合は、マンツーマンのシッター宅をお選びください。 </p>
                  </div>
                </div>
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴2</p>
                    <p class="group__title"> ご指定の場所までの送迎の可否はシッターによります。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> お子さまをご指定の場所まで送迎をさせていただけるか、シッター宅までお客さまご自身で送迎をしていただく必要があるか、シッター宅により異なりますのでご承知ください。 </p>
                  </div>
                </div>
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴3</p>
                    <p class="group__title"> 病児保育、宿泊保育など、自由にプランをご相談いただけます。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> ご希望のプランにつきましては、担当のシッターと自由にご相談いただくことができます。 </p>
                  </div>
                </div>
              </div>
              <p class="tag">お客様にお願いしたいこと</p>
              <p class="card-l__desc"> 初めてお会いいただくシッターと打ち解けていただき、楽しい時間をお過ごしいただくために、ぜひご協力をお願いいたします。 </p>
              <div class="card-l__desc card-l__desc--s-margin">
                <ul class="ul">
                  <li> お子さまが好きで持ち運べるおもちゃなどございましたら是非お持ちください。<br />（シッター宅にもお子さまに楽しんでいただけるものをなるべくご用意いたしますが、可能な範囲でお持ちいただけるとありがたいです。）
                  </li>
                  <li> オムツや着替え、飲み物やミルクなどは多めにお持ちください。<br />（ミルクにつきましては、お水もご用意いただきますようお願いいたします。）
                  </li>
                  <li> お食事は原則としてお持ちください。<br />（ご予約を前もっていただけますと、シッターがお弁当などを購入させていただくこともできます。ご希望の際はご相談ください。）
                  </li>
                  <li> 宿泊保育をご用命になる際は、リラックスできる寝具をお持ちください。<br />（枕や毛布など、普段慣れ親しんだ寝具がございましたら極力お持ちください。）
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_64.svg" alt="" />
        </div>
      </div>
      <div id="to_05"></div>
      <div class="card-l" id="no_05">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              教育シッター
              <span class="card-l__title__caption">
                （マッチング）
              </span>
            </h3>
            <p class="card-l__desc">*準備中</p>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc">
              <ul class="ul">
                <li>お子さまへの教育を目的としたサービスです。</li>
                <li> １回あたり1時間よりご利用いただけます（以後30分単位で加算）。 </li>
                <li> 料金はシッター個人により異なりますのでシッター検索よりご確認ください。 </li>
                <li> 教育シッターの特徴は３つあります。 </li>
              </ul>
            </div>
            <div class="card-l__block">
              <div class="group-list">
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴1</p>
                    <p class="group__title"> 教育の内容や指導レベルはシッターによりかなり異なります。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> 運動、教養、芸術まで、シッターにより指導ができる内容やレベルが大きく異なります。<br />そのため、お受験対策などを目的に教育シッターをご利用いただく際は、事前にシッターとの綿密な打ち合わせや面談をお願いいたします。
                    </p>
                  </div>
                </div>
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴2</p>
                    <p class="group__title"> 教育に対する比重が大きくなります。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> 前提としてお子さまに安全な保育がなされますが、その上でお客さまと事前に決めた教育の内容が履行されるように進めさせていただきます。<br />楽しんで学んでいただけるよう最善の努力をいたしますが、どうしても取り組みたくないというお子さまのご様子の場合は、お客さまに相談をさせていただきます。<br />なお、お客さまは自由にご覧いただくことができます。
                    </p>
                  </div>
                </div>
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴3</p>
                    <p class="group__title"> 笑顔で学んでいただくことを大切にします。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> 知識や知恵を吸収し、その後も忘れずに維持されるためには、お子さまにそのこと自体に関心を持っていただき、できるようになった（身についた）ことによる喜びを感じていただくことが大事です。<br />そのため、その場が窮屈で辛い時間になるのではなく、知りたいことを学べる楽しい時間になるよう最善を尽くします。<br />一方で、お子さまの性格としてどうしても気が進まない分野もございます。万一そのように感じられたらお客さまに率直にお伝えし、今後のご相談をさせていただきます。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_65.svg" alt="" />
        </div>
      </div>
      <div id="to_06"></div>
      <div class="card-l" id="no_06">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              外国語シッター
              <span class="card-l__title__caption">
                （マッチング）
              </span>
            </h3>
            <p class="card-l__desc">*準備中</p>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc">
              <ul class="ul">
                <li>外国語での保育をさせていただくサービスです。</li>
                <li> １回あたり1時間よりご利用いただけます（以後30分単位で加算）。 </li>
                <li> 料金はシッター個人により異なりますのでシッター検索よりご確認ください。 </li>
                <li> 外国語シッターの特徴は３つあります。 </li>
              </ul>
            </div>
            <div class="card-l__block">
              <div class="group-list">
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴1</p>
                    <p class="group__title"> 発音のレベルはシッターにより大きく異なります。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> 特定の言語に対応ができることと、母国語として特定の言語を使用してきたことは異なります。<br />そのため、お子さまへの教育目的で利用を検討されているお客さまは、母国語として使用してきたシッターの中で、地域による発音の特徴も含めた上でご検討ください。
                    </p>
                  </div>
                </div>
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴2</p>
                    <p class="group__title"> 日本語のレベルはシッターにより大きく異なります。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> お客さまご自身がシッターとは日本語でコミュニケーションを取る必要がある、または保育園などからの送迎も含めてご利用の際に、保育園からの引き継ぎで日本語でのコミュニケーションを取る必要があるなどの際は、シッターの日本語能力が必要になります。 </p>
                  </div>
                </div>
                <div class="group group--tag">
                  <div class="group__head">
                    <p class="group__tag">特徴3</p>
                    <p class="group__title"> シッターにより得意とする分野が大きく異なります。 </p>
                  </div>
                  <div class="group__content">
                    <p class="group__text"> シッティングを得意とするシッターや、語学教育を得意とするシッターなど、シッターにより得意とする分野が大きく異なります。横断的に様々なことを行うことを得意とするシッターは多くないため、目的を明確にしていただいた上でご利用いただけますとお互いの行き違いを防ぐことができます。 </p>
                  </div>
                </div>
              </div>
              <p class="tag">お客さまにご理解いただきたいこと</p>
              <div class="card-l__desc">
                <ul class="ul">
                  <li> 目的を具体的にしていただき、ご利用ください。<br />（シッティングが目的なのか、語学教育が目的なのか、主とする目的を明確にしてください。語学教育が目的の場合は、シッターに求めるシッティングの範囲についても事前に明確にお決めいただきますようお願いいたします。）
                  </li>
                  <li> シッターに求める日本語のレベルを予めご検討ください。<br />（外国語教育が主とする目的の場合につきましても、保育園などへの送迎や外出を伴う保育（例えば動物園などに一緒に行って遊ぶなど）をご希望になる場合、相応の日本語能力が必要になります。保護者さまのシッターとの意思疎通につきましても、シッターにどの程度の日本語レベルをお求めになられるかをご検討いただいた上で、シッターの人選をしていただきますようお願いいたします。）
                  </li>
                  <li> シッターの出身国の習慣や価値観をご理解ください。<br />（ハニークローバーとして、シッターに対して業務上のお願いや価値観を共有いたしますが、休みや遅刻が許容される内容や範囲、申告するタイミングについて、それぞれの出身国の中で広く共有されている感覚が異なりますため、一定のご理解をいただき、必ず守って欲しいことなどご希望がある際は、事前にお伝えいただきますようお願いいたします。）
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_66.svg" alt="" />
        </div>
      </div>
      <div id="to_07"></div>
      <div class="card-l" id="no_07">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_07.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              宿泊保育
              <span class="card-l__title__caption">
                （ハニクロ派遣・マッチング）
              </span>
            </h3>
            <p class="card-l__desc"> 宿泊を伴ってお子さまの保育をさせていただくプランです。 </p>
          </div>
          <div class="card-l__unit">
            <p class="card-l__desc"> 22:00～翌日６時の範囲で、１泊単位でご利用いただけます。 </p>
          </div>
          <div class="card-l__unit">
            <div class="group-list">
              <div class="group">
                <div class="group__head">
                  <p class="group__title"> このようなパターンで多くご利用をいただいております。 </p>
                </div>
                <div class="group__content">
                  <ul class="ul">
                    <li> お疲れの中、ゆっくりお休みになるためにご利用いただくパターン </li>
                    <li>夜勤のためにご利用いただくパターン</li>
                    <li> 早朝の早い時間に出勤をなさるためにご利用いただくパターン </li>
                  </ul>
                  <p class="group__text group__text--margin"> お客さまが同居されていてももちろんご利用いただけます。利用して正解だったとのお声をたくさんいただいておりますので、ぜひご利用ください。 </p>
                </div>
              </div>
              <div class="group">
                <div class="group__head">
                  <p class="group__title"> 宿泊保育でご利用いただけること </p>
                </div>
                <div class="group__content">
                  <ul class="ul">
                    <li> お休みの前後のシッティング（食事提供、保育園送迎、入浴介助なども全て対応いたします） </li>
                    <li> お休み中のシッティング（トイレ補助、おむつ交換、ミルク提供、飲料提供なども全て対応いたします） </li>
                  </ul>
                </div>
              </div>
              <div class="group">
                <div class="group__head">
                  <p class="group__title"> シッターがお子さまと同室で見守るか、別室で見守るかを予めご判断ください。 </p>
                </div>
                <div class="group__content">
                  <ul class="ul">
                    <li> シッターがお子さまと同室で見守る場合<br />（部屋を暗くしてお子さまを見守りますため、シッターも就寝いたしますことをご了承ください。お子さまが水分補給やトイレなどご要望がある際は、速やかに起床してシッティングをさせていただきます。）
                    </li>
                    <li> シッターがお子さまと別室で見守る場合<br />（暗視モニターをご用意ください。モニター越しにお子さまの呼吸や安全を一定の頻度で確認し、シッターは起床して見守ります。別室での見守りを希望され、かつモニターのご用意が無い場合、どのように見守るかのご相談を事前にさせていただきます。）
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_67.svg" alt="" />
        </div>
      </div>
      <div id="to_08"></div>
      <div class="card-l" id="no_08">
        <p class="card-l__number">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_08.svg" alt="" />
        </p>
        <div class="card-l__text">
          <div class="card-l__unit">
            <h3 class="card-l__title card-l__title--large">
              連泊保育
              <span class="card-l__title__caption">
                （マッチング）
              </span>
            </h3>
            <p class="card-l__desc">*準備中</p>
          </div>
          <div class="card-l__unit">
            <div class="card-l__desc card-l__short">
              <ul class="ul">
                <li>連泊を伴ってお子さまの保育をさせていただくプランです。</li>
                <li> ご旅行やご出張に同行させていただくパターンと、お客さま宅に滞在させていただくパターンがございます。 </li>
                <li> ご利用いただくにあたり、以下の内容をご留意ください。 </li>
              </ul>
            </div>
            <div class="card-l__block">
              <p class="tag">お客さまにご留意いただきたいこと</p>
              <div class="group-list">
                <div class="group group">
                  <div class="group__head">
                    <p class="group__title"> ご旅行やご出張に同行させていただくパターン </p>
                  </div>
                  <div class="group__content">
                    <ul class="ul">
                      <li> 移動代、宿泊費用、保育中のシッターの食事代につきましてはお客さまでご負担ください。 </li>
                      <li> 日中、就寝時のどちらかはシッターの自由時間（休憩時間）としてください。シッターが１日連続７時間以上睡眠ができる環境を整えていただきますようお願いいたします。 </li>
                      <li> シッターに求められる保育の範囲や日程・時間帯、逆にシッターに許容していただける自由な時間や日程を明確にしていただけると、シッターも価格をなるべくお客さまに歩み寄って検討をさせていただけます。 </li>
                    </ul>
                  </div>
                </div>
                <div class="group">
                  <div class="group__head">
                    <p class="group__title"> お客さま宅に滞在させていただくパターン </p>
                  </div>
                  <div class="group__content">
                    <ul class="ul">
                      <li>お子さまの日中の過ごし方を予めご検討ください。</li>
                      <li> お子さまが日中に保育園などに通われる場合、お客さま宅にての家事をご要望になるかなど、ご希望のプランをご検討ください。 </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-l__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_68.svg" alt="" />
        </div>
      </div>
    </section>
    <section class="s-service s-municipality">
      <div class="heading">
        <h2 class="heading__title">自治体</h2>
        <p class="heading__text">サービス</p>
      </div>
      <p class="section-headText"> ハニークローバーは、一部自治体の保育事業を運営させていただいております。<br class="pc" />ご利用方法がご不明な際は電話で説明をさせていただきます。<br class="pc" />お気軽にお申し付けくださいませ。</p>
      <p class="app-ol__title">ハニクロは入会金、年会費、当日手配料の全てが無料でご利用いただけます。</p>
      <div class="sub-container">
        <p class="sub-container__top"> ご注意いただきたいこと </p>
        <div class="sub-container__content">
          <ul class="ul">
            <li> ご利用の流れは、ハニクロの通常のご利用の流れと異なり、自治体独自の運用基準に沿ってください。 </li>
            <li> ご利用のスタイルに応じて、自治体の制度利用、一般のご利用と使い分けをお願いいたします。 </li>
            <li> ご利用に関するお問い合わせにつきましては、自治体に直接お願いいたします。 </li>
          </ul>
        </div>
      </div>
      <div class="profile profile--service">
        <h3 class="profile__top"> 現在ご利用いただける<br class="sp" />自治体制度一覧</h3>
        <dl class="profile__dl">
          <div>
            <dt>東京都</dt>
            <dd>
              <div>
                <div>
                  <p> ベビーシッター利用支援事業 </p>
                  <a href="https://www.fukushihoken.metro.tokyo.lg.jp/kodomo/hoiku/bs/index.html" target="_blank" rel="noopener">https://www.fukushihoken.metro.tokyo.lg.jp/kodomo/hoiku/bs/index.html</a>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>新宿区</dt>
            <dd>
              <div>
                <div>
                  <p>育児支援家庭訪問事業（産前産後支援）</p>
                  <p> ご予約はお電話（050-5358-6038）もしくは「新宿区育児支援家庭訪問事業ご予約」  にて承っております。 </p>
                  <p>
                    <a href="https://www.city.shinjuku.lg.jp/kodomo/file03_02_00001.html" target="_blank" rel="noopener">https://www.city.shinjuku.lg.jp/kodomo/file03_02_00001.html</a>
                  </p>
                  <p>ご予約フォームは<a href="<?php echo home_url('/form-shinjuku'); ?>">こちら</a></p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>渋谷区</dt>
            <dd>
              <div>
                <div>
                  <p>育児支援ヘルパー派遣事業「にこにこママ」</p>
                  <p>
                    <a href="https://www.city.shibuya.tokyo.jp/kodomo/hoiku/service/niko.html" target="_blank" rel="noopener">https://www.city.shibuya.tokyo.jp/kodomo/hoiku/service/niko.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>杉並区</dt>
            <dd>
              <div>
                <div>
                  <p>杉並区産前・産後支援ヘルパー</p>
                  <p>
                    <a href="https://www.city.suginami.tokyo.jp/guide/kosodate/ninshin/1004681.html" target="_blank" rel="noopener">https://www.city.suginami.tokyo.jp/guide/kosodate/ninshin/1004681.html</a>
                  </p>
                </div>
              </div>
              <div>
                <div>
                  <p>杉並区多胎児家庭家事・育児支援ヘルパー</p>
                  <p>
                    <a href="https://www.city.suginami.tokyo.jp/guide/kosodate/tashisetai/1062506.html" target="_blank" rel="noopener">https://www.city.suginami.tokyo.jp/guide/kosodate/tashisetai/1062506.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>世田谷区</dt>
            <dd>
              <div>
                <div>
                  <p> 世田谷区産前・産後訪問支援事業（ツインズプラスサポート） </p>
                  <p>
                    <a href="https://www.city.setagaya.lg.jp/mokuji/kodomo/001/003/d00190837.html" target="_blank" rel="noopener">https://www.city.setagaya.lg.jp/mokuji/kodomo/001/003/d00190837.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>市川市</dt>
            <dd>
              <div>
                <div>
                  <p> 市川市産前産後ホームヘルププラス </p>
                  <p>
                    <a href="https://www.city.ichikawa.lg.jp/chi01/1111000060.html" target="_blank" rel="noopener">https://www.city.ichikawa.lg.jp/chi01/1111000060.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
        </dl>
      </div>
      <div class="profile profile--service">
        <h3 class="profile__top"> 東京都ベビーシッター利用支援事業<br class="sp" />（一時預かり利用支援）</h3>
        <dl class="profile__dl">
          <div>
            <dt>新宿区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.shinjuku.lg.jp/kodomo/ikukyuhukkishien_00002.html" target="_blank" rel="noopener">https://www.city.shinjuku.lg.jp/kodomo/ikukyuhukkishien_00002.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>台東区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.taito.lg.jp/kosodatekyouiku/kosodate/mokutei/hoiku_youjikyouiku/hoikutakuji/sitter/bebissittaR3.html" target="_blank" rel="noopener">https://www.city.taito.lg.jp/kosodatekyouiku/kosodate/mokutei/hoiku_youjikyouiku/hoikutakuji/sitter/bebissittaR3.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>品川区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.shinagawa.tokyo.jp/PC/kodomo/kodomo-hoyou/kodomo-hoyou-hoikuen/hpg000033556.html" target="_blank" rel="noopener">https://www.city.shinagawa.tokyo.jp/PC/kodomo/kodomo-hoyou/kodomo-hoyou-hoikuen/hpg000033556.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>大田区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.ota.tokyo.jp/seikatsu/kodomo/shien/r3bs.html" target="_blank" rel="noopener">https://www.city.ota.tokyo.jp/seikatsu/kodomo/shien/r3bs.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>渋谷区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.shibuya.tokyo.jp/kodomo/hoiku/service/babysitter.html" target="_blank" rel="noopener">https://www.city.shibuya.tokyo.jp/kodomo/hoiku/service/babysitter.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>中野区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.tokyo-nakano.lg.jp/dept/244000/d030202.html" target="_blank" rel="noopener">https://www.city.tokyo-nakano.lg.jp/dept/244000/d030202.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>豊島区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.toshima.lg.jp/506/2108261729.html" target="_blank" rel="noopener">https://www.city.toshima.lg.jp/506/2108261729.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>北区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.kita.tokyo.jp/k-hoiku/bebyshitta3.html" target="_blank" rel="noopener">https://www.city.kita.tokyo.jp/k-hoiku/bebyshitta3.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>荒川区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.arakawa.tokyo.jp/a037/kosodate/hoikuen/baby-sitter.html" target="_blank" rel="noopener">https://www.city.arakawa.tokyo.jp/a037/kosodate/hoikuen/baby-sitter.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>板橋区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.itabashi.tokyo.jp/kosodate/teate/shisetsu/1031521.html" target="_blank" rel="noopener">https://www.city.itabashi.tokyo.jp/kosodate/teate/shisetsu/1031521.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>葛飾区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.katsushika.lg.jp/kurashi/1000056/1002333/1019965.html" target="_blank" rel="noopener">https://www.city.katsushika.lg.jp/kurashi/1000056/1002333/1019965.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>江戸川区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.edogawa.tokyo.jp/e047/kosodate/kosodate/babysitter/jigyosya.html" target="_blank" rel="noopener">https://www.city.edogawa.tokyo.jp/e047/kosodate/kosodate/babysitter/jigyosya.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>三鷹市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.mitaka.lg.jp/c_service/079/079008.html" target="_blank" rel="noopener">https://www.city.mitaka.lg.jp/c_service/079/079008.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>府中市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.fuchu.tokyo.jp/smph/kosodate/shussan/hoikujo/R3baby_sitter.html" target="_blank" rel="noopener">https://www.city.fuchu.tokyo.jp/smph/kosodate/shussan/hoikujo/R3baby_sitter.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>国立市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.kunitachi.tokyo.jp/kosodate/kosodate/kosodate10/1548760168903.html" target="_blank" rel="noopener">https://www.city.kunitachi.tokyo.jp/kosodate/kosodate/kosodate10/1548760168903.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>福生市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.fussa.tokyo.jp/life/child/nursery/1009085.html" target="_blank" rel="noopener">https://www.city.fussa.tokyo.jp/life/child/nursery/1009085.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>狛江市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.komae.tokyo.jp/index.cfm/43,114021,586,3431,html" target="_blank" rel="noopener">https://www.city.komae.tokyo.jp/index.cfm/43,114021,586,3431,html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>武蔵村山市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.musashimurayama.lg.jp/kosodate/azukeru/1012426/1011263.html" target="_blank" rel="noopener">https://www.city.musashimurayama.lg.jp/kosodate/azukeru/1012426/1011263.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>東大和市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.higashiyamato.lg.jp/index.cfm/33,105541,345,598,html" target="_blank" rel="noopener">https://www.city.higashiyamato.lg.jp/index.cfm/33,105541,345,598,html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
        </dl>
      </div>
      <div class="profile profile--service">
        <h3 class="profile__top"> 東京都ベビーシッター利用支援事業<br class="sp" />（ベビーシッター事業者連携型）</h3>
        <dl class="profile__dl">
          <div>
            <dt>中央区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.chuo.lg.jp/kosodate/shien/babysitterazukari.html" target="_blank" rel="noopener">https://www.city.chuo.lg.jp/kosodate/shien/babysitterazukari.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>文京区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.bunkyo.lg.jp/kyoiku/kosodate/okosan/ichijiteki/babysitter.html" target="_blank" rel="noopener">https://www.city.bunkyo.lg.jp/kyoiku/kosodate/okosan/ichijiteki/babysitter.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>豊島区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.toshima.lg.jp/258/2106221523.html" target="_blank" rel="noopener">https://www.city.toshima.lg.jp/258/2106221523.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>北区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.kita.tokyo.jp/k-hoiku/20210320_bebyshittaitizi.html" target="_blank" rel="noopener">https://www.city.kita.tokyo.jp/k-hoiku/20210320_bebyshittaitizi.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>荒川区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.arakawa.tokyo.jp/a037/kosodate/bsitijiazukari.html" target="_blank" rel="noopener">https://www.city.arakawa.tokyo.jp/a037/kosodate/bsitijiazukari.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>葛飾区</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="https://www.city.katsushika.lg.jp/kurashi/1000056/1002333/1025553.html" target="_blank" rel="noopener">https://www.city.katsushika.lg.jp/kurashi/1000056/1002333/1025553.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
          <div>
            <dt>武蔵野市</dt>
            <dd>
              <div>
                <div>
                  <p>
                    <a href="http://www.city.musashino.lg.jp/kurashi_guide/hoikuen/1030349.html" target="_blank" rel="noopener">http://www.city.musashino.lg.jp/kurashi_guide/hoikuen/1030349.html</a>
                  </p>
                </div>
              </div>
            </dd>
          </div>
        </dl>
      </div>
    </section>
  </div>
  <section class="s-service s-regular">
    <div class="inner">
      <div class="heading">
        <h2 class="heading__title">定期利用</h2>
      </div>
      <div class="section-headText">
        <p>定期でシッターサービスを便利にご利用いただけます。</p>
        <p> 各種チケットのご利用は自由にしていただけます。ご利用いただけるチケットは<a href="<?php echo home_url('/ticket'); ?>">こちら</a></p>
        <p>定期のご利用の流れは<a href="<?php echo home_url('/flow/?tab04'); ?>">こちら</a>をご覧ください。</p>
      </div>
      <div class="sub-container">
        <p class="sub-container__top"> ハニクロ定期サービスの特徴 </p>
        <div class="sub-container__content">
          <ul class="ul">
            <li> シッターは固定（数名でのローテーションになることもございます）させていただきます。 </li>
            <li>
              <p> ご希望の時間単価をご提示いただくことができます。 </p>
              <p> ご希望の時間単価にてお引き受けをさせていただけるシッターを調整し、ご案内をさせていただきます。 </p>
            </li>
            <li>
              <p> シッターからの時間単価の逆提案からご検討いただくこともできます。 </p>
              <p> Aシッターが時間○○円にて対応させていただけます、Bシッターが時間○○円にて対応させていただけます、 という具合でお知らせします。 </p>
            </li>
            <li>シッターとは事前にご面談（有料）いただくことができます。</li>
            <li> シッターがお休みをいただきたい日は、代替シッターをハニクロで調整をさせていただくことができます。 </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="service-feature">
      <div class="heading">
        <p class="heading__text">保育種別ごとの</p>
        <h2 class="heading__title">特徴</h2>
      </div>
      <div class="bg-gray">
        <div class="inner">
          <div class="box-list">
            <div class="swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="box box--number swiper-slide">
                  <a class="disable">
                    <div class="box__top">
                      <p class="box__number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
                      </p>
                      <p class="box__title">通常保育</p>
                      <div class="box__text">
                        <ul class="ul">
                          <li>
                            <p> お子さまへの知育内容含め、ご希望内容をお伺いし、保育に取り入れさせていただきます。 </p>
                            <p> 過去の保育レポートをシッターは共有させていただき、次回の保育に活かします。 </p>
                            <p>詳しくはこちらを御覧ください</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/box/image_01.jpg" alt="" />
                    </div>
                  </a>
                </div>
                <div class="box box--number swiper-slide">
                  <a class="disable">
                    <div class="box__top">
                      <p class="box__number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
                      </p>
                      <p class="box__title">オプション家事代行</p>
                      <div class="box__text">
                        <ul class="ul">
                          <li>
                            <p> 料理、掃除、洗濯よりご希望に応じてご指示いただけます。シッターとはチャットを通じて小まめにご要望をお伝えいただけます。 </p>
                            <p>チャット機能はこちらをご覧ください</p>
                          </li>
                          <li>
                            <p> 家事のご請求は１分単位、内容に応じて料金が異なります。 </p>
                            <p> 詳しい料金は担当シッターの料金表をご覧ください。マイページのシッター検索よりご確認いただけます。 </p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/box/image_02.jpg" alt="" />
                    </div>
                  </a>
                </div>
                <div class="box box--number swiper-slide">
                  <a class="disable">
                    <div class="box__top">
                      <p class="box__number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
                      </p>
                      <p class="box__title">教育シッター</p>
                      <div class="box__text">
                        <ul class="ul">
                          <li> 教育の具体的な内容、進捗についてはレポートに細かく報告させていただきます。 </li>
                          <li> お休みの際の代替シッターは必要に応じて通常保育にて調整をさせていただきます。 </li>
                        </ul>
                      </div>
                    </div>
                    <div>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/box/image_03.jpg" alt="" />
                    </div>
                  </a>
                </div>
                <div class="box box--number swiper-slide">
                  <a class="disable">
                    <div class="box__top">
                      <p class="box__number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
                      </p>
                      <p class="box__title">短時間送迎</p>
                      <div class="box__text">
                        <ul class="ul">
                          <li> お迎え場所、時間などの変更にも臨機応変に対応させていただきます。 </li>
                          <li> シッターにチャットでお伝えいただければ直前の変更にも対応させていただきます。 </li>
                        </ul>
                      </div>
                    </div>
                    <div>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/box/image_04.jpg" alt="" />
                    </div>
                  </a>
                </div>
                <div class="box box--number swiper-slide">
                  <a class="disable">
                    <div class="box__top">
                      <p class="box__number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
                      </p>
                      <p class="box__title">外国語保育</p>
                      <div class="box__text">
                        <ul class="ul">
                          <li> 保育園の送迎なども対応させていただきます。シッターによっては道に不慣れな場合もございますので事前にご相談ください。 </li>
                          <li> 病児保育に切り替えをご希望の際は日本人シッターに変更させていただくことがございます。 </li>
                        </ul>
                      </div>
                    </div>
                    <div>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/box/image_05.jpg" alt="" />
                    </div>
                  </a>
                </div>
                <div class="box box--number swiper-slide">
                  <a class="disable">
                    <div class="box__top">
                      <p class="box__number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_06.svg" alt="" />
                      </p>
                      <p class="box__title">宿泊保育</p>
                      <div class="box__text">
                        <ul class="ul">
                          <li> 起床後の保育園などへのお送りなどにも対応させていただきます。 </li>
                          <li> シッターにチャットでお伝えいただければ直前の変更にも対応させていただきます。 </li>
                        </ul>
                      </div>
                    </div>
                    <div>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/box/image_06.jpg" alt="" />
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
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
