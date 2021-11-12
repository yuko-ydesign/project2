<?php get_header();
/*
Template Name: ticket
*/
?>
      <div class="fv fv--ticket">
        <h1 class="fv__title"><span>ご利用いただけるチケット</span></h1>
        <div class="fv__side-title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
        </div>
      </div>
      <div class="inner">
        <ul class="breadcrumb">
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li>ご利用いただけるチケット</li>
        </ul>
        <div class="heading">
          <p class="heading__text">ご利用いただける</p>
          <h2 class="heading__title">チケット</h2>
        </div>
        <div class="sub-container">
          <p class="sub-container__top"> 民間・行政のチケットを自由にご利用いただけます。 </p>
          <div class="sub-container__content">
            <div class="sub-container__text">
              <ul class="ul">
                <li>複数の種類のチケットを同時にご利用いただけます。</li>
                <li>自治体の補助にもご利用いただけます。</li>
                <li> 法人契約でのご利用の場合、法人からの補助＋チケットをご利用+自治体の補助を同時に受けていただくこともできます。 </li>
                <li> 自治体の支援制度にハニクロサービスをご利用になる場合は、チケットのご利用がいただけないことがございます。<a href="<?php echo home_url('/service?tab02'); ?>">こちら</a>をご覧ください。 </li>
                <li> 万一お手元のチケットで弊社でご利用いただけない場合は、ご利用いただけるよう速やかに手続きを試みますのでメッセージにて教えてください。弊社で認識していないチケットの場合、何らかのお礼をさせていただきます。 </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="sub-container">
          <p class="sub-container__top"> ご利用いただけるチケット </p>
          <div class="sub-container__content">
            <div class="sub-container__text">
              <div class="to-section">
                <a href="#ticket_01"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_01.svg" alt="" />
                  <p> ベビーシッター派遣事業割引券（発行元：公益社団法人全国保育サービス協会） </p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_02">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_02.svg" alt="" />
                  <p>ライフサポート倶楽部（発行元：リソルライフサポート株式会社）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_03"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_03.svg" alt="" />
                  <p>すくすくえいど（発行元：株式会社ベネフィット・ワン）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_04"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_04.svg" alt="" />
                  <p>リロクラブ（発行元：株式会社リロクラブ）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_05"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_05.svg" alt="" />
                  <p>キッズdo（発行元：株式会社リロクラブ）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_06"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_06.svg" alt="" />
                  <p>ウェルボックス（発行元：株式会社イーウェル）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_07"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_07.svg" alt="" />
                  <p>えらべる倶楽部（発行元：株式会社JTBベネフィット）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_08">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_08.svg" alt="" />
                  <p>杉並区子育て応援券（発行元：杉並区）</p>
                </a>
              </div>
              <div class="to-section">
                <a href="#ticket_09">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/number/no_ol_09.svg" alt="" />
                  <p>世田谷区子育て応援券（発行元：世田谷区）</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <section class="">
          <h3 class="middle-title">ご利用の流れ</h3>
          <div class="card-list">
            <div class="card" id="card_01">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> シッターご利用時に、シッターに直接チケットをお渡しください。 </p>
                <div class="card__desc"> 「お客様名」「シッティング日時」「押印」などにつきまして、お客様ご自身で漏れなく必ずご記入ください。<br />ご記入や押印に不足がある場合は受付ができかねることがございますのでご注意ください。
          </div>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_21.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_02">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> お渡しいただいたチケットの種別、枚数を記録してください。 </p>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_72.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_03">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> 後日のご利用料金の承認画面にて、チケットも含めてご案内しますのでご確認いただき、承認ボタンをタップしてください。 </p>
                <div class="card__desc"> ご利用料金を確認していただき、よろしければ「承認する」をタップしてください。 お渡しいただいたチケットの種別や枚数が合わない場合や、ご不明な点などございましたら 「ハニクロと協議する」をタップしてください。ハニクロ事務局より連絡を差し上げます。 </div>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/card/image_01.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_04">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> 承認をいただきましたら決済をさせていただきます。 </p>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_32.svg" alt="" />
              </div>
            </div>
          </div>
          <h3 class="middle-title">シッターへのお渡しを失念された場合について</h3>
          <div class="white-content">
            <p> チケットによって、後日のご提出に対応できるものとそうでないものがございます。 </p>
            <p> そのため、こちらの流れに沿ってお進めいただき、またご理解くださいますようお願いいたします。 </p>
          </div>
          <div class="card-list">
            <div class="card" id="card_05">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> チケットのシッターへのお渡しそびれの旨をハニクロ事務局にメッセージでお知らせください。 </p>
                <div class="card__desc">
                  <p>”チケットの種類””枚数”を添えてお知らせください。</p>
                </div>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_73.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_06">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> チケット発行元に事務局より相談をし、受付させていただけるか 確認をいたします。 </p>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_11.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_07">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> 受付させていただける場合、その旨をメッセージにてお知らせしますので、 元払いにて弊社高輪本社宛にご送付ください。 </p>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_07.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_08">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_04.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> 当該日のご利用料金の決済前の場合は料金を相殺させていただき、 決済後の場合は振込手数料をお客様のご負担にて入金させていただきます。 </p>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_32.svg" alt="" />
              </div>
            </div>
            <div class="card" id="card_09">
              <p class="card__number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_05.svg" alt="" />
              </p>
              <div class="card__text">
                <p class="card__title"> 受付をいたしかねる場合は、その旨をご理解ください。 再度の交渉またはご相談には応じかねますことをご理解ください。 </p>
              </div>
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_06.svg" alt="" />
              </div>
            </div>
          </div>
          <h3 class="middle-title">各種チケット詳細</h3>
          <ul class="ticket-box-l">
            <li class="ticket-box" id="ticket_01">
              <div class="ticket-box__main">
                <p class="ticket-box__title">ベビーシッター派遣事業割引券</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher"> 公益社団法人全国保育サービス協会 </p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_01.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <p> ２０２１年の発行が開始されましたら掲載いたします。 </p>
              </div>
            </li>
            <li class="ticket-box" id="ticket_02">
              <div class="ticket-box__main">
                <p class="ticket-box__title">ライフサポート倶楽部</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">福利厚生チケット</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_02.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <ol>
                  <li> 会員番号、会員氏名、ご利用日<br
                class="pc"
              />のご記入を漏れなくお願いいたします。
            </li>
                </ol>
              </div>
            </li>
            <li class="ticket-box" id="ticket_03">
              <div class="ticket-box__main">
                <p class="ticket-box__title">すくすくえいど</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">株式会社ベネフィット・ワン</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_03.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <ol>
                  <li>「ハニークローバー」とご記入ください。</li>
                </ol>
              </div>
            </li>
            <li class="ticket-box" id="ticket_04">
              <div class="ticket-box__main">
                <p class="ticket-box__title">リロクラブ</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">株式会社リロクラブ</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_04.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <ol>
                  <li>会員ID 会員様名 お子様名　ご年齢 ご利用日 をご記入下さい。</li>
                </ol>
              </div>
            </li>
            <li class="ticket-box" id="ticket_05">
              <div class="ticket-box__main">
                <p class="ticket-box__title">キッズdo</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">株式会社リロクラブ</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_05.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <ol>
                  <li> 会員氏名、お子さまのお名前、会員ID、お子さまのご年齢、利用日をご記入下さい。 </li>
                  <li>利用施設名称：ハニークローバーとご記入下さい。</li>
                </ol>
              </div>
            </li>
            <li class="ticket-box" id="ticket_06">
              <div class="ticket-box__main">
                <p class="ticket-box__title">ウェルボックス</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">株式会社イーウェル</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_06.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <ol>
                  <li> 会員番号、会員氏名、続柄、利用日、お子さまのご年齢をご記入下さい。 </li>
                </ol>
              </div>
            </li>
            <li class="ticket-box" id="ticket_07">
              <div class="ticket-box__main">
                <p class="ticket-box__title">えらべる倶楽部</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">株式会社JTBベネフィット</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_07.jpg" alt="" />
                </div>
              </div>
              <div class="ticket-box__desc">
                <ol>
                  <li>ご利用者様名　続柄 ご利用日 をご記入下さい。</li>
                  <li>ハニークローバーとご記入下さい。</li>
                </ol>
              </div>
            </li>
            <li class="ticket-box" id="ticket_08">
              <div class="ticket-box__main">
                <p class="ticket-box__title">子育て応援研</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">杉並区</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_08.jpg" alt="" />
                </div>
              </div>
            </li>
            <li class="ticket-box" id="ticket_09">
              <div class="ticket-box__main">
                <p class="ticket-box__title">せたがや子育て応援券</p>
                <div class="ticket-box__flex">
                  <p class="ticket-box__tag">発行元</p>
                  <p class="ticket-box__publisher">世田谷区</p>
                </div>
                <div class="ticket-box__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket/ticket/image_09.jpg" alt="" />
                </div>
              </div>
            </li>
          </ul>
        </section>
      </div>
      <?php get_footer(); ?>