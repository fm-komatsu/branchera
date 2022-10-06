<?php
//base
include ("../function.php");
$pageTtl = '西台・高島平エリア';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "すてきな「街」みつけました。あなたのそばに長谷工がきっとある。マンション建設をはじめ、住まいに関わり続けた長谷工のある風景をご紹介します。";
$metaThum = $img_url."/thum/magazine-nishidaitown.png";

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

		<header class="main__category-title u-category-title town">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex">
					<h2 class="u-category-title__ttl"><?php echo $pageTtl; ?></h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<div class="u-photolist__row">
				<?php echo show_category_photoList("town"); ?>
			</div>
		</section>

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
