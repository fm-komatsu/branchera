<?php
//base
include( "../../function.php" );
$content = get_id_data( '21001' );
$pageTtl = $content[ 'title' ];

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
        <h3 class="u-ttl__l">車上荒らしに要注意！車の犯罪被害を防ぐには</h3>
        <p class="mb3">車の盗難被害といえば車そのものを盗むと思われがちですが、近年、むしろ駐車中の車から貴重品などが盗まれる車上荒らしの被害が増えています。<br>車のセキュリティが進歩するなか、ガラスを割ってドアを開けるという単純で強引なやり方もいまだ横行しているとか。<br>街のなかで、マンションで、車上荒らしの被害から身を守る術（すべ）についてALSOKに話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">「車を盗る」から「車の中のものを盗る」へ</span></h4>
          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/41/alsok41__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/41/alsok41__img01@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:311px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/41/alsok41__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/41/alsok41__img01-sp@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:263px" class="u-img__max u-only__sp center">
          </figure>
          <p class="mb3">車の盗難と聞いて「うちは大丈夫。高級外車じゃないから」と考えるのは禁物です。</p>
          <p class="mb3">車両盗難の被害は全体には減少傾向。高額車両のセキュリティが強化され盗難が難しくなったためで、代わりに被害は中低額車両に広がりつつあります。一方で駐車中の車から貴重品などを盗む車上荒らしは件数が多く、一向に減る気配がありません。</p>
          <p class="b3">車の中から盗まれるのはカーナビや高級オーディオ、貴重品の入ったバッグなど。手口は車のキーをこじ開けて中のものを盗るパターンですが、こじ開けに手間取るとガラスを割ってドアを開けたり、中には三角窓だけを割り、そこから手を入れ盗めるものだけを盗むという場合も多いとのこと。さらに、<strong>顧客データなどが入ったパソコンを盗まれた場合、多くの個人情報も同時に盗まれ2次被害につながる恐れもあります。<br>財布を盗まれただけでも、中にある銀行カードや保険証など、個人情報を悪用される場合もありますので、充分に注意が必要です。</strong></p>
        </section>
        <section class="mb8">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">一人ひとりの注意とご近所の力で撃退へ</span></h4>
          <p class="mb3">ではこうした被害を防ぐにはどうすればいいでしょうか。</p>
          <div class="u-assist">
            <p class="mb3">いちばん基本的なことは、貴重品などを車の中に置かない、やむを得ない場合は車のシートを倒して下に置き、外から見えないようにするなど日頃から注意を怠らないこと。</p>
            <p class="mb3">さらにマンションの場合、管理組合による駐車場全体の対策も必要です。建物から死角になりがちなところにあったり植栽に囲まれている場合など、まず防犯カメラの設置を。<br>一カ所だけでなく数カ所設置すればより効果的です。<br>また薄暗いところや戸外にある場合は、防犯灯も設置して犯罪作業をやりづらくすることも有効。</p>
            <p>そして最後はやはり「人の目」です。<br>最近の犯罪者は、ひと目見てそれとわかるような格好をしていません。ビジネスマンと変わらない雰囲気のため、駐車場で見かけても新しく引っ越してきた人程度に考えてしまいがち。<br><strong>普段から声をかけ合い、あいさつを交わすようなご近所付き合いが活発なマンションなら、不審者にそれとなく気づくことができるでしょう。住民同士の連携や人の力も大切です。</strong></p>
          </div>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
              $exceptcnt_id = $content['contents_id'];
              echo show_category_photoListalsok("alsok-other",$exceptcnt_id);
            ?>
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
