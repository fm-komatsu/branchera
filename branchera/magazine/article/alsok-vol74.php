<?php
//base
include( "../../function.php" );
$content = get_id_data( '21012' );
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
$release_year = "2021";
$release_month ="3";
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
      <section class="main__item mb3">
        <h3 class="u-ttl__l">不正侵入による犯罪被害に備える</h3>
        <p class="mb3">私たちは、日々様々な犯罪のリスクと隣り合わせに暮らしています。空き巣など不正侵入も依然として多く、被害に遭うと財産を失うだけでなく精神的ショックも大きいものです。<br>今回は侵入被害の危険を回避する対策と心がけを警備のプロALSOKにお伺いしました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">侵入を未然に防ぐ「あかおに」対策</span></h4>
          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2 mb3_sp">東京都の侵入窃盗の場所別発生状況では、<strong>戸建てやマンションなどの住宅系が全体の57.8%を占めています。</strong>（2020年7月 警視庁データより）マンションがオートロックであっても宅配業者を装って侵入し、不在住戸を物色、侵入窃盗に及ぶ事例も発生しています。</p>
                <img src="<?php echo $img_url; ?>/magazine/alsok/74/alsok74__img01-sp@2x.png" alt="（円グラフ）侵入窃盗の場所別発生状況（東京都）｜<?php echo $pageTtl?>" style="max-width:274px" class="u-img__max center u-only__sp mb3_sp" loading="lazy">
              <p class="mb3">そこでALSOKでは、侵入被害を未然に防ぐための防犯対策として<strong>「あかおに（赤鬼）」</strong>という標語を取り入れて注意を呼びかけています。（下表）<br><strong>灯りをつけて犯行をしづらくし、カメラで監視、音で威嚇、二重の施錠</strong>で犯行を断念させることを目的とした、センサーライトや補助錠などの対策手法も紹介しています。加えて、留守中の室内の確認には、スマホと連動したモニターカメラがおすすめです。室内をくまなく映し出せるため、ご高齢者やペットの見守りとしても活用できます。</p>
                <img src="<?php echo $img_url; ?>/magazine/alsok/74/alsok74__img02-sp@2x.png" alt="住まいの防犯対策「あかおに（赤鬼）」｜<?php echo $pageTtl?>" style="max-width:274px" class="u-img__max center u-only__sp" loading="lazy">
						</div>
						<div class="w50">
							<figure class="center mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/74/alsok74__img01@2x.png" alt="（円グラフ）侵入窃盗の場所別発生状況（東京都）｜<?php echo $pageTtl?>" style="max-width:329px" class="u-img__max center u-only__pc" loading="lazy">
              </figure>
						</div>
          </div>
          <figure class="mb3 center">
            <img src="<?php echo $img_url; ?>/magazine/alsok/74/alsok74__img02@2x.png" alt="住まいの防犯対策「あかおに（赤鬼）」<?php echo $pageTtl?>" style="max-width:731px" class="u-img__max center u-only__pc" loading="lazy">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">対策をしっかりして狙われる対象にならない！</span></h4>
          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2">住人が鍵をポストや植木鉢の下などに隠すことはよくあるケースですが、狙われる対象になりやすいのでやめましょう。窓に面格子を付けていても、外して侵入される場合もあるので、家を空ける際には、<strong>まずは戸締りをしっかり行い、油断は禁物です。また、植栽を目隠しとして利用している住宅は、中が見えづらいので注意が必要です。</strong>さらに不審者が近寄りづらくなるようなご近所のネットワークづくりも大切になります。</p>
              <p class="mb6"><strong>大切な財産や家族を守るためには、一つひとつの対策を積み上げ、簡単に侵入されない環境を整えておくことが重要です。</strong></p>
						</div>
						<div class="w50">
							<figure class="center mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/74/alsok74__img03@2x.png" alt="（イメージ画像）不審者が近寄りづらくなるようなご近所のネットワークづくりも大切になります｜<?php echo $pageTtl?>" style="max-width:330px" class="u-img__max center u-only__pc" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/74/alsok74__img03-sp@2x.png" alt="（イメージ画像）不審者が近寄りづらくなるようなご近所のネットワークづくりも大切になります｜<?php echo $pageTtl?>" style="max-width:284px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
						</div>
          </div>
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
