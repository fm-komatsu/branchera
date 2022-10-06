<?php
//base
include ("../function.php");
$pageTtl = '浦和区駒場エリア';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "すてきな「街」みつけました。文教の薫り漂う緑豊かな邸宅街。利便性だけでなくライフスタイルに合わせたお店も多い浦和区駒場エリア。";
$metaThum = $img_url."/thum/magazine-urawatown.png";

//bodyClass
$body_class ="page-list";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
		$panAry[] = array("/magazine/index_town.php" ,"すてきな街見つけました");
		include ($inc_path."/lib/inc/pan.php");
		?>

		<div class="main__wrapper">

			<section class="main__item">
				<h2 class="u-ttl__l">すてきな「街」みつけました【浦和区駒場エリア】</h2>
				<p>文教の薫り漂う緑豊かな邸宅街。利便性だけでなくライフスタイルに合わせたお店も多い浦和区駒場エリア。
					<br>この素敵な街に、ブランシエラマガジンはフォーカスしてみました。
				</p>
			</section>

			<section class="main__item" id="urawa">
				<div class="map u-only__pc">
					<p class="urawa01">
						<a class="mfp-btn__img" href="<?php echo $img_url; ?>/magazine/urawa/img01.png"><img src="../lib/img/magazine/urawa/pin.png" /></a>
					</p>
					<p class="urawa02">
						<a class="mfp-btn__img"  href="<?php echo $img_url; ?>/magazine/urawa/img02.png"><img src="../lib/img/magazine/urawa/pin.png" /></a>
					</p>
					<p class="urawa03">
						<a class="mfp-btn__img"  href="<?php echo $img_url; ?>/magazine/urawa/img03.png"><img src="../lib/img/magazine/urawa/pin.png" /></a>
					</p>
					<p class="urawa04">
						<a class="mfp-btn__img"  href="<?php echo $img_url; ?>/magazine/urawa/img04.png"><img src="../lib/img/magazine/urawa/pin.png" /></a>
					</p>
					<p class="urawa05">
						<a href="<?php echo $base_url; ?>/magazine/article/urawa-01.php"><img src="../lib/img/magazine/urawa/pin.png" /></a>
					</p>
					<p class="urawa06">
						<a href="<?php echo $base_url; ?>/magazine/article/urawa-02.php"><img src="../lib/img/magazine/urawa/pin01.png" /></a>
					</p>
					<p class="urawa07">
						<a href="<?php echo $base_url; ?>/magazine/article/urawa-03.php"><img src="../lib/img/magazine/urawa/pin.png" /></a>
					</p>
				</div>

				<div class="mapsp u-only__sp">
					<p><img src="<?php echo $img_url ?>/magazine/urawa/map-sp@2x.png" usemap="#Map" class="u-img__max" />
						<map name="Map">
							<area shape="rect" coords="1032,497,1437,722" href="#spot01" data-scroll>
							<area shape="rect" coords="756,180,1246,487" href="#spot02" data-scroll>
							<area shape="rect" coords="183,664,653,922" href="#spot03" data-scroll>
							<area shape="rect" coords="107,920,458,1114" href="#spot04" data-scroll>
							<area shape="rect" coords="246,162,594,438" href="<?php echo $base_url ?>/magazine/article/urawa-01.php">
							<area shape="rect" coords="343,1130,518,1376" href="<?php echo $base_url ?>/magazine/article/urawa-02.php">
							<area shape="rect" coords="403,441,756,661" href="<?php echo $base_url ?>/magazine/article/urawa-03.php">
						</map>
					</p>
					<p class="mb4">緑豊かな邸宅街に誕生する「ブランシエラ浦和駒場」周辺は、散策にぴったりなスポットが豊富に点在。<br>今回は、ブランシエラクラブ編集部がさいたま市浦和区駒場を散策して街の魅力をご紹介します。</p>
					<p class="mb4" id="spot01"><img src="<?php echo $img_url; ?>/magazine/urawa/img01-sp@2x.png" class="u-img__max" ></p>
					<p class="mb4" id="spot02"><img src="<?php echo $img_url; ?>/magazine/urawa/img02-sp@2x.png" class="u-img__max" ></p>
					<p class="mb4" id="spot03"><img src="<?php echo $img_url; ?>/magazine/urawa/img03-sp@2x.png" class="u-img__max" ></p>
					<p class="mb4" id="spot04"><img src="<?php echo $img_url; ?>/magazine/urawa/img04-sp@2x.png" class="u-img__max" ></p>
				</div>
			</section>

			<section class="main__item mb0">
				<h4 class="u-ttl__m">浦和区駒場のお洒落スポット</h4>
				<div class="u-photolist__row">
					<?php echo show_category_photoList("town2"); ?>
				</div>
			</section>

		</div>

	</article>
</main>

<?php
$this_page_article = false;
//$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
