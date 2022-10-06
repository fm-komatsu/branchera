<?php
//base
include( "../../function.php" );
$content = get_id_data( '20001' );
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
        <h3 class="u-ttl__l">身近な暮らしの安心・安全を守るマンションセキュリティを強化するには</h3>
        <p class="mb3">毎日の暮らしの中にさまざまな犯罪の危険性が潜んでいる現代社会。<br>より効果的、効率的に、お住まいのマンションのセキュリティ力をアップするために、ALSOKにアドバイスをもらいました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">敷地内と共用部の防犯対策を考える</span></h4>

          <p class="mb3">マンションの防犯対策を検討する場合、まずは敷地内の状況について確認する必要があります。エントランスまでのアプローチが長く、途中に植栽の茂みなどがあったり、死角となったりする箇所が多い場合などは注意が必要です。</p>
          <p>また、エントランス以外の場所で、敷地外につながる扉を使用する場合、特に夜間においては、扉の向こう側の状態も想定して注意することが必要です。</p>
          <div class="u-assist mb5">
            <figure class="u-float__right u-float__right_sp topminusm4 topminus0_sp">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img01@2x.png"
                alt="<?php echo $pageTtl?>" style="max-width:90px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img01-sp@2x.png"
                alt="<?php echo $pageTtl?>" style="max-width:70px" class="u-img__max u-only__sp center">
            </figure>
            <h5>
              <strong>
                point
              </strong>
            </h5>
            <p>対策としては防犯カメラの設置が第一です。防犯カメラは存在そのものが抑止効果を発揮しますが、最近は性能も大きく進化しています。敷地の広いマンションなどに提案する防犯カメラシステムとして、カメラが人間の動きを検知して、自動的に追尾する機能を搭載しているものもあります。</p>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">費用対効果も考慮して検討を</span></h4>
          <p>共用部もやはり防犯カメラの設置が有効です。エントランス以外の裏の出入り口や、非常階段、屋上の出入り口なども注意が必要です。しかし、カメラの新設や増設には、当然コストもかかるという課題があります。管理組合の状況や予算に合わせて、新システム導入か既存のグレードアップかを、検討するといいでしょう。</p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">コミュニティ力は防犯のカギ</span></h4>
          <p class="mb3">防犯カメラの存在は、居住者のモラルやマナーの向上にもつながります。<br>たとえば敷地内が雑然として汚れていたり、ゴミ出しのルールが守られていなかったり、放置自転車が目につくところにあるなどの荒れた印象は、犯罪や不審者を引き寄せる温床となりやすいもの。<br>そうした箇所に防犯カメラを設置することで、犯罪抑止の一方、そこを利用する居住者自身の意識を変える効果があります。</p>
          <p class="mb3">防犯機器は日々進化しており、ALSOKは最新の防犯システムを提案し、みなさまを全力でサポートしていきたいと考えています。しかし、大切なことは住民の方が常に身近な防犯感覚を養うことです。機器に依存し過ぎず、一人ひとりが防犯に対する心構えをもつことが大切です。</p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img02@2x.png"
              alt="コミュニティ力は防犯のカギ｜<?php echo $pageTtl?>" style="max-width:523px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/48/alsok48__img02-sp@2x.png"
              alt="コミュニティ力は防犯のカギ｜<?php echo $pageTtl?>" style="max-width:260px" class="u-img__max u-only__sp center">
          </figure>
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
