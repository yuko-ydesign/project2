<?php get_header();
/*
Template Name: payment
*/
?>
      <div class="fv fv--payment">
        <h1 class="fv__title"><span>お支払い方法</span></h1>
        <div class="fv__side-title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
        </div>
      </div>
      <div class="inner">
        <ul class="breadcrumb">
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li>お支払い方法</li>
        </ul>
        <div class="heading">
          <h2 class="heading__title">お支払い方法</h2>
        </div>
        <div class="sub-container">
          <p class="sub-container__top"> 領収書・お支払い方法 </p>
          <div class="sub-container__content">
            <ul class="ul">
              <li> 領収書が発行可能です。詳しくは <a href="#p_s_04">こちら</a>をご覧ください </li>
              <li>
                <p> ベビーシッターのご利用料金は、クレジットカード、後払いのお支払い方法をお選びいただけます。 </p>
                <p> クレジットカードは以下のブランドをご利用いただくことができます。 </p>
                <div class="ul__image ul__image--column">
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/payment_01.jpg" alt="" id="payment_01" />
                  </div>
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/payment_02.jpg" alt="" id="payment_02" />
                  </div>
                </div>
              </li>
              <li>
                <p> 後払いは、株式会社ネットプロテクションズの提供するNP後払いサービスが適用され、サービスの範囲内で個人情報を提供し、代金債権を譲渡します。 </p>
                <div class="ul__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/payment_03.jpg" alt="" id="payment_03" />
                </div>
              </li>
              <li>
                <p> 各種チケットをご利用いただくことができますのでぜひご利用ください。 </p>
                <p>チケットについては<a href="" class="disable">こちら</a>をご覧ください。</p>
              </li>
            </ul>
          </div>
        </div>
        <section id="p_s_01">
          <h3 class="middle-title">クレジットカードでのお支払いの流れ</h3>
          <div class="card-l" id="s_01_no_01">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h4 class="card-l__title"> ご予約をいただき、シッターが確定する時点で与信枠の確保をさせていただきます。 </h4>
                <div class="card-l__desc">
                  <ul class="ul">
                    <li>
                      <h5 class="ul__head">与信枠の確保の金額</h5>
                      <p>ご利用予定料金＋1,000円（仮の交通費）</p>
                      <p> ※実際に決済をさせていただく際は、実際にかかった料金＋費用とさせていただきます。 </p>
                    </li>
                    <li>
                      <h5 class="ul__head">以下の点にご注意ください。</h5>
                      <ul class="ul">
                        <li> 定期のご予約など、複数日をまとめてご予約いただく際は、与信も連続して行いますため、クレジットカード会社より確認の連絡が入ることがございます。 </li>
                        <li> あくまで与信枠の確保です。実際の決済ではございませんのでご承知ください。 </li>
                        <li> デビットカードの場合は引き落としが実行されますのでご注意ください。 </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-l__desc">
                <div class="card-l__block">
                  <div class="group">
                    <div class="group__head">
                      <p class="group__title">与信枠の考え方</p>
                    </div>
                    <div class="group__content">
                      <p class="group__text"> 与信枠は、お客様のクレジットカードの限度額の範囲で確保をさせていただきます。そのため、限度額が大きい場合においても、高額の決済を既にされていたり、カードご利用金額のご精算前の場合は枠の確保ができないこともございます。 </p>
                      <p> また、ご予約日がカードご利用金額のご精算後の日付の場合においても、与信枠はご精算前の限度額内となりますのでご注意ください。 </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_11.svg" alt="" />
            </div>
          </div>
          <div class="card-l card-l--image" id="s_01_no_02">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card-l__text">
              <h3 class="card-l__title"> シッティングが終了し、ご利用料金が確定し、お客様に承認をしていただきます。 </h3>
              <div class="card-l__short">
                <div class="card-l__desc">
                  <ul class="ul">
                    <li> マイページ「予約一覧」からご確認いただけます。 </li>
                    <li> ご利用料金を確認していただき、よろしければ「承認する」をタップしてください。ご不明な点などございましたら「ハニクロと協議する」をタップしてください。ハニクロ事務局より連絡を差し上げます。 </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/card-l/image_01_02.svg" alt="" />
            </div>
          </div>
          <div class="card-l" id="s_01_no_03">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h3 class="card-l__title"> ハニクロ事務局が最終確認をし、クレジットカードでの決済を実行させていただきます。 </h3>
                <div class="card-l__desc card-l__short">
                  <p> 決済実行日は、ご利用翌日から事務局側でのチケットのご利用確認ができるまでの間になります。 </p>
                </div>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_06.svg" alt="" />
            </div>
          </div>
        </section>
        <section id="p_s_02">
          <h3 class="middle-title">後払いでのお支払いの流れ</h3>
          <div class="card-l" id="s_02_no_01">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h4 class="card-l__title"> ご予約をいただき、シッターが確定する時点でショッピング枠の確保をさせていただきます。 </h4>
                <div class="card-l__desc">
                  <ul class="ul">
                    <li>
                      <h5 class="ul__head"> ご利用限度額:累計残高で30万円(税込)までです。 </h5>
                      <p> 与信審査が通らなかった場合はサービスをご利用いただけないので、ご了承ください。 </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_11.svg" alt="" />
            </div>
          </div>
          <div class="card-l" id="s_02_no_02">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h3 class="card-l__title"> クレジットカードと同様に、シッティングが終了し、ご利用料金が確定し、お客様に承認をしていただきます。 </h3>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_52.svg" alt="" />
            </div>
          </div>
          <div class="card-l" id="s_02_no_03">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h3 class="card-l__title"> 請求書を郵送させていただきます。 </h3>
                <div class="card-l__desc card-l__short">
                  <ul class="ul">
                    <li>
                      <h5 class="ul__head"> 請求書発行日から14日以内にお支払いをお願いいたします。 </h5>
                      <p>「コンビニ」「郵便局」「銀行」でお支払いいただけます。</p>
                    </li>
                    <li>
                      <h5 class="ul__head">現金後払い手数料</h5>
                      <p> 請求書発行月540円(一般会員さまはご利用いただかない月は発生いたしません) </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_20.svg" alt="" />
            </div>
          </div>
        </section>
        <section id="p_s_03">
          <h3 class="middle-title">お支払い方法のご登録をお願いいたします</h3>
          <div class="note note--middle">
            <div class="note__content">
              <p> 専用アプリをダウンロードしていただくか、ブラウザよりご利用登録を事前にお願いいたします。 </p>
              <p><a href="https://user.honey-clover.com/register-entry" target="_blank" rel="noopener">こちら</a>よりご登録いただくことができます。</p>
            </div>
          </div>
          <div class="card-l card-l--image" id="s_03_no_01">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h4 class="card-l__title"> アプリまたはブラウザのマイページよりお支払者様情報をご登録ください。 </h4>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/card-l/image_03_01.svg" alt="" />
            </div>
          </div>
          <div class="card-l card-l--image" id="s_03_no_02">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h3 class="card-l__title"> 続いてお支払い方法のご登録をお願いいたします。 </h3>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/card-l/image_03_02.svg" alt="" />
            </div>
          </div>
          <div class="card-l" id="s_03_no_03">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_03.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h3 class="card-l__title"> 完了です。 </h3>
                <div class="card-l__desc card-l__short">
                  <p> お支払い方法の変更をご希望の場合は、②よりいつでもご変更いただけます。 </p>
                </div>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illust/illust_27.svg" alt="" />
            </div>
          </div>
        </section>
        <section id="p_s_04">
          <h3 class="middle-title">領収書の発行について</h3>
          <div class="note note--middle">
            <div class="note__content">
              <p> マイページより領収書をダウンロード、印刷していただくことができます。 </p>
              <p>郵送での領収書のご送付は承りかねますことをご了承ください。</p>
            </div>
          </div>
          <div class="card-l card-l--image" id="s_04_no_01">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_01.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h4 class="card-l__title"> マイページトップの「ご請求内容・領収書印刷」をタップしてください。 </h4>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/card-l/image_04_01.svg" alt="" />
            </div>
          </div>
          <div class="card-l card-l--image" id="s_04_no_02">
            <p class="card-l__number">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/number/no_02.svg" alt="" />
            </p>
            <div class="card-l__text">
              <div class="card-l__short">
                <h3 class="card-l__title"> 「領収書ダウンロード」をタップしてください。 </h3>
              </div>
            </div>
            <div class="card-l__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/card-l/image_04_02.svg" alt="" />
            </div>
          </div>
        </section>
      </div>
      <?php get_footer(); ?>