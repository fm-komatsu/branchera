<?php
//base
include ("../function.php");
$pageTtl = 'Mr.わくわくメンテナンス講座';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "住まいの達人「Mr.わくわく」が、暮らしを快適にする「住まいのセルフメンテナンス」について分かりやすく解説いたします！";
$metaThum = $img_url."/magazine/wakuwaku/wakuwaku-main@2x.png";

//bodyClass
$body_class ="page-list knowhowIndex";

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
					<h2 class="u-category-title__ttl">Mr.わくわく<br clear="u-only-pc">メンテナンス講座</h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<div class="u-photolist__row">
				<?php echo show_category_photoList("wakuwaku"); ?>
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
