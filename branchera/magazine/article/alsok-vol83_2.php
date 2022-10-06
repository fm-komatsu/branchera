<?php
//base
include( "../../function.php" );
$content = get_id_data( '20004' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2020";
$release_month ="12";
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
        <h3 class="u-ttl__l">暮らしの安全を見守る「防犯カメラ」を有効に活用する</h3>
        <p class="mb4">マンション共用部分の防犯において、マンション管理員や居住者さまの目線に加え、第3の「目」となるのが防犯カメラです。今回は防犯カメラの役割や、トラブルを未然に防ぐ方法についてALSOKに話をお聞きしました。ALSOKでは、防犯カメラに関して豊富な知識でお客さまをサポートしています。</p>
        <section class="mb5">
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">マンションにおける防犯カメラの役割とは？</span></h4>
          <div class="flex between">
            <div class="w50">
              <p>防犯カメラのマンションでの役割はいくつかあります。</p>
              <h5><span class="u-font__strong">①『抑止力』</span></h5>
              <p class="mb3">防犯カメラ設置をアピールすることで、侵入者やトラブルの発生を抑えます。</p>
              <img src="<?php echo $img_url; ?>/magazine/alsok/83/alsok83__img01@2x.png"
                alt="（イメージ画像）オートロック盤を操作する人を見る犯罪者｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center mb2_sp">
              <h5><span class="u-font__strong">②『確認』</span></h5>
              <p class="mb3">事故や事件が起きた時には、録画映像の確認として役立ちます。現在一般的な防犯カメラは、人物の顔まで鮮明に判別できる映像を24時間撮影し、2週間～1ヵ月程度保存することができます。さらに夜間消灯される場所でも赤外線付きのカメラであれば撮影も可能です。<br><span class="u-small">※「確認」については管理組合や管理会社にて使用細則やルールが設けられています。</span></p>
              <h5><span class="u-font__strong">③『トラブル防止やマナー向上』</span></h5>
              <p>ゴミ捨て場など目が届きにくい箇所に設置することで、マナー意識の向上につながり、トラブルを回避することができます。</p>
            </div>
            <div class="w50">
              <img src="<?php echo $img_url; ?>/magazine/alsok/83/alsok83__img01@2x.png"
                alt="（イメージ画像）オートロック盤を操作する人を見る犯罪者｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc mb3">
              <img src="<?php echo $img_url; ?>/magazine/alsok/83/alsok83__img02@2x.png"
                alt="（イメージ画像）空のペットボトルをポイ捨てする人｜<?php echo $pageTtl?>" class="u-img__max center">
            </div>
          </div>
        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">設置ポイントや、導入の流れは？</span></h4>
          <div class="flex between">
            <div class="w50 mb3_sp">
              <p>防犯カメラのシステムをリニューアルしたり、新しく導入する場合、まず現地調査を行ない、人の動線を調べます。その後、管理組合さまとともに設置場所や画角、台数など、ご予算や規約に照らし合わせながら検討します。</p><p><strong>設置ポイントは、エントランスや非常階段、駐車場の扉などの「人の出入り口」となる場所</strong>。その他、駐車場や集合ポスト、エレベータ―内などが一般的です。</p>
            </div>
            <div class="w50">
              <figure class="mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/83/alsok83__img03@2x.png"
                alt="（イメージ画像）防犯カメラ設置位置を確認｜<?php echo $pageTtl?>" class="u-img__max center">
              </figure>
            </div>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">防犯カメラの故障や、ダミーカメラの設置には注意を</span></h4>
          <p class="mb2">万が一、何か起きた時に防犯カメラが故障していたら意味がありません。機器トラブルや経年劣化による故障などが発生する前に、定期的なメンテナンスサービスを受けることをおすすめいたします。</p>
					<p class="mb3">また、予算を抑えカメラ台数を多く見せられる「ダミーカメラ※」は有効な手段ですが、簡単にダミーであると見破られ、逆に狙われやすい箇所を作ってしまうこともあるので、設置に関しては十分な注意が必要です。<br>
					<span class="u-small">※ダミーカメラは、電子機器以外の部分は本物と同じタイプのものもあります。</span></p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">トラブルを未然に防ぐコミュニティづくり</span></h4>
          <p class="mb2">防犯カメラは効果的な機器ですが、マンション内すべての箇所に設置するのは難しいのも事実です。例えば数分の外出でも施錠をしたり、<strong>日頃から居住者同士の声掛けによって強いコミュニティを作ることも防犯対策となります</strong>。トラブルを未然に防ぐためには、居住者の皆さまの防犯意識を高めることも大切です。</p>
          <div class="flex between">
            <div class="w50">
              <img src="<?php echo $img_url; ?>/magazine/alsok/83/alsok83__img04@2x.png"
                alt="（イメージ画像）数分の外出時に施錠する人｜<?php echo $pageTtl?>" class="u-img__max center mb3_sp">
						</div>
						<div class="w50">
              <img src="<?php echo $img_url; ?>/magazine/alsok/83/alsok83__img05@2x.png"
                alt="（イメージ画像）挨拶をする｜<?php echo $pageTtl?>" class="u-img__max center">
            </div>
        </section>
        <div class="mt8 mt2_sp mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>	
        <section>
          <h5>■関連記事</h5>
          <div class="u-photolist__row">
            <?php echo show_category_photoListalsok("alsok-mansion",$exceptcnt_id); ?>
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
