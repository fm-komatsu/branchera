<?php
//base
include( "../../function.php" );
$content = get_id_data( '18002' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2019";
$release_month ="6";
$release_day ="";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
    include( $inc_path . "/lib/inc/pan.php" );
    ?>
    <?php
    include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
    ?>
    <div class="main__wrapper">
      <section class="main__item">
        <h3 class="u-ttl__l">パートナーや家族を守る救急救命。緊急時にできること</h3>
        <p class="mb3">高齢者の安心・安全な暮らしを守るため、ALSOKが行なっている訪問講座「ALSOKほっとライフ講座」。「家族や地域のつながりが大切。高齢者の防犯対策」の「防犯編」に続き今回は、いざというとき命を守る「救急救命編」です。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">増加している心臓突然死。居合わせた人の対応がカギ</span></h4>
          <p class="mb3">食生活の欧米化などの理由により、日本人の死亡原因の中でも、心疾患（心停止による突然死など）の割合は年々増加しています。<br>心停止は自宅での発症が75%を占め、特に50〜70代の高齢男性に発症者が多い傾向があります。</p>
          <p class="mb3">また自宅で発症した場合、頼みの救急車を手配しても、<strong>救急車が到着するまで全国平均で約8分、通報までの時間や機材搬入の時間を合わせると、さらに約5分かかるといわれています。この間、何の救命措置もとらず手をこまねいていれば、社会復帰率は1分ごとに約10%ずつ低下していきます。</strong></p>
          <p>高齢世帯は心停止を招くリスクが高いうえに、子ども世帯とは離れ、夫婦2人暮らしの場合も多いものです。大切なパートナーの命を守るために、いざというときにどうすればいいか、知識と心構えをもっておいてほしいと思います。</p>
          <figure>
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img01@2x.png"
              alt="＜グラフ＞心肺停止後の経過時間と社会復帰率｜<?php echo $pageTtl?>" style="max-width:527px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img01-sp@2x.png"
              alt="＜グラフ＞心肺停止後の経過時間と社会復帰率｜<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
          </figure>

        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">楽しみながら積極的に参加できる工夫を</span></h4>
          <div class="u-float__right">
            <figure class="mb3">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img02@2x.png"
                alt="ALSOKほっとライフ口座（イメージ）｜<?php echo $pageTtl?>" style="max-width:321px" class="u-img__max u-only__pc center">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img02-sp@2x.png"
                alt="ALSOKほっとライフ口座（イメージ）｜<?php echo $pageTtl?>" style="max-width:275px" class="u-img__max u-only__sp center">
            </figure>
          </div>

          <p class="mb3">「ALSOKほっとライフ講座」では、一般市民向けの救急救命講習を、高齢者向けにアレンジした講座（※1）を実施しており、緊急時に自分に何ができるか、日頃からどのような心構えが必要かについて、知ってもらうことに重点を置いた内容となっています。</p>
          <p class="mb3">心肺蘇生法の一連の動作を体験していただく場面では、胸骨圧迫を継続するのは大変であることを体感し、可能ならば周囲の方に応援を求めることが重要であることを、認識していただきます。ご高齢者のみなさまは若い方以上に高い関心をもって積極的に参加してくれますが、頑張り過ぎて逆に体調を崩さないよう、配慮しながら練習を行ないます。</p>
          <p>AED（※2）使用方法の実演説明も行ないます。AEDという名前は知っていても、機能や使い方は分からないという方は多数いらっしゃいます。音声で案内してくれるので、誰にでも簡単に使えるということを、見学して知ることも大きな意味があります。</p>
          <small class="u-small">（※1）国士舘大学大学院 救急システム研究科 医学博士 田中秀治教授が監修。</small><br>
          <small class="u-small">（※2）Automated External Defibrillator自動体外式除細動器</small>

        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">命を守るための情報を家族内で共有しておく</span></h4>
          <div class="u-clearfix">
            <div class="u-float__right u-clearfix w45">
              <figure class="center mb3 u-fig">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img03@2x.png"
                  alt="「こんなときは、すぐ119番」｜<?php echo $pageTtl?>" style="max-width:317px" class="u-img__max u-only__pc center">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img03-sp@2x.png"
                  alt="「こんなときは、すぐ119番」｜<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
                <figcaption class="u-float__left u-only__pc">（※3）</figcaption>
              </figure>
              <figure class="center u-clearfix">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img04.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img04@2x.png"
                  alt="「緊急通報情報シート（※4）」｜<?php echo $pageTtl?>" style="max-width:307px" class="u-img__max u-only__pc center">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img04-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/58/alsok58__img04-sp@2x.png"
                  alt="「緊急通報情報シート（※4）」｜<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
                <figcaption class="u-float__left u-only__pc">（※4）</figcaption>
              </figure>
            </div>
            <p class="mb3">最近では、体に異常を感じても「こんな夜中にご近所迷惑では」「家族に心配かけるといけない」と考え、すぐに救急車を呼ばなかったために手遅れとなり、命を落としてしまう高齢者も増えているそうです。</p>
            <p class="mb3">些細な違和感であっても、死を招く病の前兆である場合があるので、「ALSOKほっとライフ講座」では、直ちに通報が必要な症状を一覧表（※3）にしてご紹介しています。<br>判断に迷う場合は、お住まいの自治体の救急電話相談窓口に相談すれば答えてくれるので、あらかじめ調べておくといいでしょう。</p>
            <p class="mb3">また、気が動転してしまいがちな緊急時に、冷静に必要な情報（自宅の住所やかかりつけ医院など）を119番に伝えられるよう、「緊急通報情報シート（※4）」を、電話の近くに掲示しておくことをお勧めしています。</p>
          </div>
          <div class="u-assist">
            <p>「知っていれば命を救えたかもしれないのに…」と後悔しないためにも、かけがえのないご家族やご自身の命を守るための情報を、家族内で共有しておいていただきたいと思います。</p>
          </div>
        </section>
        <div class="mt6 mt2_sp mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
        <h5>■関連記事</h5>
        <div class="u-photolist__row">
          <?php echo show_category_photoListalsok("alsok-senior",$exceptcnt_id); ?>
        </div>
        </section>
      </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
