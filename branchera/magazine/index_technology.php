<?php
//base
include ("../function.php");
$pageTtl = '長谷工の技術・サービス';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "「つくってきたからわかるんだ」の長谷工がお客さまの声に耳を傾け、マンションの在り方を考える。この作業を何度も繰り返してきた経験から生まれた「長谷工の技術・サービス」をご紹介します。";
$metaThum = $img_url."/thum/magazine-index@2x.png";

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
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__category-title u-category-title">
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
				<?php echo show_category_photoList("magazine"); ?>
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
