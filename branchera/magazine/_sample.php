<?php
//base
include ("../function.php");
$pageTtl = 'サンプルページ';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="page-list";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/_temp" ,"パンくず名");
		$panAry[] = array("/_temp/index.php" ,"パンくず名");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
					<div class="main-header__tags u-tags">
						<h5 class="u-tags__ttl">キーワード</h5>
						<?php echo show_category_tags("magazine,town,town2 , wakuwaku,comic"); ?>
					</div>
				</div>
			</div>
		</header>

		<section class="main__item">
			<div class="u-photolist__row">
				<?php
				echo show_category_photoList("wakuwaku,gift");
				?>
			</div>
		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
