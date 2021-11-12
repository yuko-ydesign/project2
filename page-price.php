<?php get_header();
/*
Template Name: price
*/
?>
<div class="fv">
  <h1 class="fv__title"><span>ハニクロ派遣の料金</span></h1>
  <div class="fv__side-title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/side_title.svg" alt="" />
  </div>
</div>
<div class="inner">
  <ul class="breadcrumb">
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li>ハニクロ派遣の料金</li>
  </ul>
  <section class="s-type">
    <div class="heading">
      <p class="heading__text">ハニクロの選べる２種類の</p>
      <h2 class="heading__title">サービス体系</h2>
    </div>
	  <div class="l-center">
	  <p> ハニクロ派遣、マッチングの２種類からご希望に合わせてサービスをお選びください。<br>初めてのご利用や、病児保育など急ぎでベビーシッターが必要になった場合にハニクロ派遣を利用される方が多いです。<br>ハニクロ派遣、マッチングのどちらにおいても入会金や年会費は無料です。会員の登録に費用がかかることもございません。<br>ご利用いただいた際の料金のみのご請求となります。</p>
　 　 </div> 
    <ul class="type-list">
      <li>
        <div class="type-list__inner">
          <p class="type-list__en-title">Type1</p>
          <h3 class="type-list__title">ハニクロ派遣とは？</h3>
          <p class="type-list__text"> お客様からはSまたはAのランクのみ選択いただき、あらかじめ決まった<a href="<?php echo home_url('/area'); ?>">サービスエリア</a>と料金システムの上で、ハニクロ事務局がおすすめのシッターを派遣するサービス体系です。 </p>
          <div class="type-list__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fee/type/image_01.jpg" alt="" />
          </div>
          <div class="l-center">
            <a href="<?php echo home_url('/childcare'); ?>" class="button">ハニクロ派遣について</a>
          </div>
        </div>
        <p class="asterisk asterisk--center asterisk--small">
          <span> ハニクロ派遣の料金については以下をご参照ください </span>
        </p>
      </li>
      <li>
        <div class="type-list__inner">
          <p class="type-list__en-title">Type2</p>
          <h3 class="type-list__title">マッチングとは？</h3>
          <p class="type-list__text"> ハニクロ事務局が仲介元となり、お客様が任意のシッターを指名し派遣するマッチングシステムです。ハニクロ派遣とは完全に異なる料金システムとなっております。 </p>
          <div class="type-list__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fee/type/image_02.jpg" alt="" />
          </div>
          <div class="l-center">
            <a href="<?php echo home_url('/matching'); ?>" class="button">マッチングシステムについて</a>
          </div>
        </div>
        <p class="asterisk asterisk--center asterisk--small">
          <span> マッチングシステムの料金は上記ページよりご確認ください。 </span>
        </p>
      </li>
    </ul>
    <div class="white-content">
      <p>ハニクロ派遣、マッチングともにさまざまなチケットをご利用いただけます。ご利用いただけるチケットは <a href="<?php echo home_url('/ticket'); ?>">こちら</a>よりご確認いただけます。</p>
    </div>
  </section>
</div>
<section class="s-fee">
  <div class="inner">
    <div class="heading">
      <p class="heading__text">ハニクロ派遣の</p>
      <h2 class="heading__title">基本料金</h2>
      <span>(税込み)</span>
    </div>
	<div class="l-center">
	  <p> 時間帯によって料金は異なりますが、早朝・深夜のシッティングのご依頼にも応じます。幼稚園や保育園、習い事等への送迎も可能です。<br>夜勤や早朝勤務、またお疲れの中ゆっくりお休みになるために、宿泊保育も提供しており、利用して正解だったとのお声を多くいただいております。<br>別途、シッターの自宅からご利用の場所までの交通費がかかります。基本的には実費となりますが、<br>ご利用者様の方で金額の上限を設定していただくことも可能です。</p>
　 　 </div>   
  </div>
  <div class="table">
    <div class="table__illust">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fee/table/illust_01.svg" alt="" />
    </div>
    <div class="table__head">
      <div class="table__title">
        <div class="times-3">通常保育</div>
        <div class="times-3">病児保育</div>
        <div>短時間送迎</div>
        <div>産前産後<br />サポート</div>
        <div class="times-2">宿泊保育</div>
      </div>
      <div class="table__second">
        <div>8:00~18:00</div>
        <div>18:00~22:00</div>
        <div>22:00~24:00<br />4:00~8:00</div>
        <div class="is-gray">8:00~18:00</div>
        <div class="is-gray">18:00~22:00</div>
        <div class="is-gray">22:00~24:00<br />4:00~8:00</div>
        <div>7:00~20:00</div>
        <div class="is-gray">8:00~18:00</div>
        <div class="is-large">22時~6時<br />乳幼児</div>
        <div class="is-large">22時~6時<br />6歳以上</div>
      </div>
    </div>
    <div class="table__body">
      <div>
        <p class="table__body__head">関東<br />Aランク</p>
        <p><strong>1,210</strong>円/30分</p>
        <p><strong>1,375</strong>円/30分</p>
        <p><strong>1,540</strong>円/30分</p>
        <p class="is-gray"><strong>1,375</strong>円/30分</p>
        <p class="is-gray"><strong>1,595</strong>円/30分</p>
        <p class="is-gray"><strong>1,815</strong>円/30分</p>
        <p><strong>3,520</strong>円/60分</p>
        <p class="is-gray"><strong>1,650</strong>円/30分</p>
        <p class="is-large"><strong>17,600</strong>円/1泊</p>
        <p class="is-large"><strong>14,300</strong>円/1泊</p>
      </div>
      <div>
        <p class="table__body__head">関東<br />Sランク</p>
        <p><strong>1,650</strong>円/30分</p>
        <p><strong>1,815</strong>円/30分</p>
        <p><strong>1,980</strong>円/30分</p>
        <p class="is-gray"><strong>1,760</strong>円/30分</p>
        <p class="is-gray"><strong>1,980</strong>円/30分</p>
        <p class="is-gray"><strong>2,200</strong>円/30分</p>
        <p><strong>3,520</strong>円/60分</p>
        <p class="is-gray"><strong>2,200</strong>円/30分</p>
        <p class="is-large"><strong>17,600</strong>円/1泊</p>
        <p class="is-large"><strong>14,300</strong>円/1泊</p>
      </div>
      <div>
        <p class="table__body__head">関東以外<br />Aランク</p>
        <p><strong>1,100</strong>円/30分</p>
        <p><strong>1,320</strong>円/30分</p>
        <p><strong>1,485</strong>円/30分</p>
        <p class="is-gray"><strong>1,320</strong>円/30分</p>
        <p class="is-gray"><strong>1,430</strong>円/30分</p>
        <p class="is-gray"><strong>1,705</strong>円/30分</p>
        <p><strong>3,520</strong>円/60分</p>
        <p class="is-gray"><strong>1,540</strong>円/30分</p>
        <p class="is-large"><strong>16,500</strong>円/1泊</p>
        <p class="is-large"><strong>13,200</strong>円/1泊</p>
      </div>
      <div>
        <p class="table__body__head">関東以外<br />Sランク</p>
        <p><strong>1,540</strong>円/30分</p>
        <p><strong>1,705</strong>円/30分</p>
        <p><strong>1,870</strong>円/30分</p>
        <p class="is-gray"><strong>1,705</strong>円/30分</p>
        <p class="is-gray"><strong>1,870</strong>円/30分</p>
        <p class="is-gray"><strong>2,035</strong>円/30分</p>
        <p><strong>3,520</strong>円/60分</p>
        <p class="is-gray"><strong>1,870</strong>円/30分</p>
        <p class="is-large"><strong>16,500</strong>円/1泊</p>
        <p class="is-large"><strong>13,200</strong>円/1泊</p>
      </div>
      <div>
        <p class="table__body__head">備考</p>
        <p class="times-3">最低利用時間<br />2時間</p>
        <p class="times-3 is-gray">最低利用時間<br />2時間</p>
        <p class="">最低利用時間<br />1時間</p>
        <p class="is-gray">最低利用時間<br />2時間</p>
        <p class="times-2"> 最低利用時間<br />1泊<br />※病児保育と<br />併用する場合は<br />＋275円/30分
        </p>
      </div>
    </div>
    <div class="table__buttons">
      <button class="table__prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow_prev.svg" alt="" />
      </button>
      <button class="table__next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow_next.svg" alt="" />
      </button>
    </div>
  </div>
  <div class="inner">
    <p class="asterisk">
      <span> 税込料金です。 </span>
    </p>
  </div>
</section>
<section class="s-option" id="s-option">
  <div class="inner">
    <div class="heading">
      <p class="heading__text">ハニクロ派遣の</p>
      <h2 class="heading__title">オプション料金</h2>
      <span>(税込み)</span>
    </div>
	<div class="l-center">
	  <p>家事もお願いしたい、子どもが2人以上いるという方の支援もしております。お気軽にご相談ください。<br>また、年末年始など、時期によっては料金が割増になることもございますことをご承知おきください。</p>
　 　 </div>     
  </div>
  <div class="table table--large">
    <div class="table__illust">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fee/table/illust_02.svg" alt="" />
    </div>
    <div class="table__head">
      <div class="table__title">
        <div class="times-3" id="table_02_01">
          家事代行

        </div>
        <div class="is-gray width-2" id="table_02_02">
          <p>複数保育</p>
        </div>
        <div class="width-2" id="table_02_03">
          <p>沐浴・入浴介助</p>
        </div>
        <div class="is-gray width-2" id="table_02_04">
          <p>シッター面接</p>
        </div>
        <div class="times-2" id="table_02_05">
          キャンセル料
        </div>
        <div class="is-gray width-2" id="table_02_06">
          <p>年末年始、お盆、GWなど</p>
        </div>
        <div class="width-2" id="table_02_07d">
          <p>24時を過ぎた場合</p>
        </div>
      </div>
      <div class="table__second">
        <div class="is-large"> A<br />調理：一汁三菜の一般メニュー<br />掃除：お風呂トイレ<br />洗濯：干す
        </div>
        <div class="is-large"> B<br />調理：軽食一品<br />掃除：水回り <br />洗濯：取り込みたたむ
        </div>
        <div class="is-large"> C<br />調理：切る・皮むきなどの準備 <br />掃除：部屋の掃除 <br />洗濯：取り込みのみ
        </div>
        <div class="is-gray is-none"></div>
        <div class="is-gray is-none"></div>
        <div class="is-gray is-none"></div>
        <div>1営業日前の<br />キャンセル</div>
        <div>当日の<br />キャンセル</div>
        <div class="is-none"></div>
        <div class="is-none"></div>
      </div>
    </div>
    <div class="table__body">
      <div>
        <p class="table__body__head">関東<br />Aランク</p>
        <p class="is-large width-4">
          <span><strong>18</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>15</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>9</strong>円/1分</span>
        </p>
        <p class="width-4 is-gray">
          <span>基本料金の<br class="sp" />50％追加</span>
        </p>
        <p class="width-4">
          <span><strong>880</strong>円/1回</span>
        </p>
        <p class="width-4 is-gray">
          <span>通常保育1時間分の料金</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の50%</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の100%</span>
        </p>
        <p class="width-4 is-gray">
          <span>25%を割り増し</span>
        </p>
        <p class="width-4">
          <span>宿泊保育で精算</span>
        </p>
      </div>
      <div>
        <p class="table__body__head">関東<br />Sランク</p>
        <p class="is-large width-4">
          <span><strong>18</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>15</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>9</strong>円/1分</span>
        </p>
        <p class="width-4 is-gray">
          <span>基本料金の<br class="sp" />50％追加</span>
        </p>
        <p class="width-4">
          <span><strong>880</strong>円/1回</span>
        </p>
        <p class="width-4 is-gray">
          <span>通常保育1時間分の料金</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の50%</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の100%</span>
        </p>
        <p class="width-4 is-gray">
          <span>25%を割り増し</span>
        </p>
        <p class="width-4">
          <span>宿泊保育で精算</span>
        </p>
      </div>
      <div>
        <p class="table__body__head">関東以外<br />Aランク</p>
        <p class="is-large width-4">
          <span><strong>18</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>15</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>9</strong>円/1分</span>
        </p>
        <p class="width-4 is-gray">
          <span>基本料金の<br class="sp" />50％追加</span>
        </p>
        <p class="width-4">
          <span><strong>880</strong>円/1回</span>
        </p>
        <p class="width-4 is-gray">
          <span>通常保育1時間分の料金</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の50%</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の100%</span>
        </p>
        <p class="width-4 is-gray">
          <span>25%を割り増し</span>
        </p>
        <p class="width-4">
          <span>宿泊保育で精算</span>
        </p>
      </div>
      <div>
        <p class="table__body__head">関東以外<br />Sランク</p>
        <p class="is-large width-4">
          <span><strong>18</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>15</strong>円/1分</span>
        </p>
        <p class="is-large width-4">
          <span><strong>9</strong>円/1分</span>
        </p>
        <p class="width-4 is-gray">
          <span>基本料金の<br class="sp" />50％追加</span>
        </p>
        <p class="width-4">
          <span><strong>880</strong>円/1回</span>
        </p>
        <p class="width-4 is-gray">
          <span>通常保育1時間分の料金</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の50%</span>
        </p>
        <p class="width-4">
          <span>当初ご利用料金の100%</span>
        </p>
        <p class="width-4 is-gray">
          <span>25%を割り増し</span>
        </p>
        <p class="width-4">
          <span>宿泊保育で精算</span>
        </p>
      </div>
      <div>
        <p class="table__body__head">備考</p>
        <p class="times-3"> ※産前産後サポートは家事代行利用時もオプション料金の加算はありません。 </p>
      </div>
    </div>
    <div class="table__buttons">
      <button class="table__prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow_prev.svg" alt="" />
      </button>
      <button class="table__next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow_next.svg" alt="" />
      </button>
    </div>
  </div>
  <div class="inner">
    <p class="asterisk">
      <span> 税込料金です。 </span>
    </p>
  </div>
</section>
<?php get_footer(); ?>