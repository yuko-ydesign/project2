<?php get_header();
/*
Template Name: option
*/
?>
      <div class="fv fv--option">
        <h1 class="fv__title"><span>オプション</span></h1>
        <div class="fv__side-title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
        </div>
      </div>
      <div class="inner">
        <ul class="breadcrumb">
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li>オプション</li>
        </ul>
        <div class="heading">
          <h2 class="heading__title">オプション</h2>
        </div>
        <div class="sub-container">
          <div class="sub-container__content">
            <ul class="page-links">
              <li>
                <a href="#option-s-01">家事代行</a>
              </li>
              <li>
                <a href="#option-s-02">掃除</a>
              </li>
              <li>
                <a href="#option-s-03">洗濯</a>
              </li>
              <li>
                <a href="#option-s-04">沐浴・入浴介助</a>
              </li>
              <li>
                <a href="#option-s-05">複数保育</a>
              </li>
              <li>
                <a href="#option-s-06">キャンセル料</a>
              </li>
            </ul>
          </div>
        </div>
        <div id="option-s-01" style="height:5px;">
        </div>
        <section>
          <h3 class="middle-title">家事代行オプション</h3>
          <div class="white-content">
            <div class="list-o">
              <p class="list-o__tag">特徴1</p>
              <p class="list-o__text"> 内容に応じて単価が異なります。異なる内容の組み合わせも自由にしていただけます。 </p>
            </div>
            <div class="list-o">
              <p class="list-o__tag">特徴2</p>
              <p class="list-o__text"> ご請求は1分単位になります。「水回りのお掃除を18分行った」場合、Bの18分のご請求となります。 </p>
            </div>
            <div class="list-o">
              <p class="list-o__tag">特徴3</p>
              <p class="list-o__text"> 産前産後サービスは家事代行オプションはかからずご利用いただけます。 </p>
            </div>
          </div>
          <div class="white-content white-content--centerd">
            <p class="white-content__heading">家事代行オプションの料金はこちら</p>
            <div class="white-content__buttons">
              <a class="button white-content__buttons__button" href="<?php echo home_url('/price#s-option'); ?>"
                >ハニクロ派遣</a
              >
            </div>
            <p class="white-content__caption">マッチングのオプション料金は、シッター検索よりご確認いただけます。</p>
          </div>
          <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランA</p>
                    <h4>一汁三菜調理</h4>
                  </div>
                  <p class="box-l__text"> 一般的な家庭料理の調理になります。ご家族の皆様分を調理することもでき、メニューは相談をさせていただきます。<br />メッセージチャットでシッターとは直接やり取りをしていただき、ご希望のメニューや具材などについて事前に打ち合わせをしていただけます。
            </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/01/image_01.jpg" alt="" />
                </div>
              </div>
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランB</p>
                    <h4>軽食一品</h4>
                  </div>
                  <p class="box-l__text"> お子様の昼食やおやつなどで軽めのメニューの調理になります。うどん、ホットケーキなどをイメージしていただけるとありがたいです。 </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/01/image_02.jpg" alt="" />
                </div>
              </div>
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランC</p>
                    <h4>切る、むくなどの準備</h4>
                  </div>
                  <p class="box-l__text"> じゃがいもの皮をむく、たまねぎのみじん切りをする、食事を温めて準備する、などの食事の用意に係る調理や作業になります。 </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/01/image_03.jpg" alt="" />
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </section>
        <div id="option-s-02" style="height:5px;">
        </div>
        <section>
          <h3 class="middle-title">掃除オプション</h3>
          <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランA</p>
                    <h4>お風呂、トイレの掃除</h4>
                  </div>
                  <p class="box-l__text"> お子様の安全な保育に支障がないことを条件にお受けさせていただきます。 </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/02/image_01.jpg" alt="" />
                </div>
              </div>
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランB</p>
                    <h4>水回りの掃除</h4>
                  </div>
                  <p class="box-l__text"> 食器洗いからシンクの掃除など、水回り全般の掃除をさせていただきます。 </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/02/image_02.jpg" alt="" />
                </div>
              </div>
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランC</p>
                    <h4>お部屋の掃除</h4>
                  </div>
                  <p class="box-l__text"> 主に保育に使用したお部屋の片付けや掃除機がけなどの掃除をさせていただきます。 </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/02/image_03.jpg" alt="" />
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </section>
        <div id="option-s-03" style="height:5px;">
        </div>
        <section>
          <h3 class="middle-title">洗濯オプション</h3>
          <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランA</p>
                    <h4>洗濯干し</h4>
                  </div>
                  <p class="box-l__text"> 洗濯済みの衣類を干させていただきます。 </p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/03/image_01.jpg" alt="" />
                </div>
              </div>
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランB</p>
                    <h4>取り込みたたむ</h4>
                  </div>
                  <p class="box-l__text">干してある洗濯物を取り込みたたみます。</p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/03/image_02.jpg" alt="" />
                </div>
              </div>
              <div class="box-l swiper-slide">
                <div class="box-l__head">
                  <div class="box-l__title">
                    <p class="box-l__sub-title">プランC</p>
                    <h4>取り込みのみ</h4>
                  </div>
                  <p class="box-l__text">干してある洗濯物を取り込みます。</p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/option/03/image_03.jpg" alt="" />
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </section>
        <div id="option-s-04" style="height:5px;">
        </div>
        <section>
          <h3 class="middle-title">沐浴・入浴介助オプション</h3>
          <div class="white-content">
            <ul class="ul">
              <li> 新生児のお子様の沐浴、乳児幼児のお子様の入浴介助をさせていただきます。 </li>
              <li> お子様が一人で入浴される場合、上がった際の体拭きや着替えの補助についてはオプション料金はいただきません。 </li>
            </ul>
          </div>
          <div class="white-content white-content--centerd">
            <p class="white-content__heading">沐浴・入浴オプションの料金はこちら
            </p>
            <div class="white-content__buttons">
              <a class="button white-content__buttons__button" href="<?php echo home_url('/price#table_02_03'); ?>"
                >ハニクロ派遣</a
              >
            </div>
            <p class="white-content__caption">マッチングのオプション料金は、シッター検索よりご確認いただけます。</p>
          </div>
        </section>
        <div id="option-s-05" style="height:5px;">
        </div>
        <section>
          <h3 class="middle-title">複数保育オプション</h3>
          <div class="white-content">
            <ul class="ul">
              <li>シッター一名に対し、お子様が複数の場合のオプションです。</li>
              <li> シッターが何名まで対応させていただけるかにつきましては、お子様の年齢や保育場所の間取りなどによって異なりますので３名以上のお子様の保育をご希望の際は事前にご相談ください。 </li>
            </ul>
          </div>
          <div class="white-content white-content--centerd">
            <p class="white-content__heading">複数保育オプションの料金はこちら</p>
            <div class="white-content__buttons">
              <a class="button white-content__buttons__button" href="/price#table_02_02"
                >ハニクロ派遣</a
              >
            </div>
            <p class="white-content__caption">マッチングのオプション料金は、ハニクロ派遣と同様の加算となります。</p>
          </div>
          <div id="option-s-06" style="height:1px;">
          </div>
          <div class="note">
            <p class="note__title">キャンセル料</p>
            <ul class="ul">
              <li> キャンセル料の日付け、区切りの時間につきましては、ハニクロコールセンターの営業時間に則りますのでご注意ください。 </li>
              <li> コールセンターの営業時間はコロナウイルスの影響で時間短縮をしていることがございます。 </li>
              <li> 現在の営業時間は<a href="#footer-info">こちら</a>をご覧ください。 <p class="bold"> 前日キャンセル<br class="sp" />
            ご利用予定料金の５０％
          </p>
                <p class="bold"> 当日キャンセル<br class="sp" />
            ご利用予定料金の１００％
          </p>
              </li>
              <li> コールセンターが１８時までの場合、１８時を過ぎたご連絡につきましては翌営業日のお取り扱いとなります。 </li>
            </ul>
          </div>
        </section>
      </div>
      <?php get_footer(); ?>
