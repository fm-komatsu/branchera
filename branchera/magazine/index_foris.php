<?php
//base
include ("../function.php");
$content = get_id_data( '16000' );
$pageTtl = 'プロが解決！住まいのSOS';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "全国から寄せられる「住まいのお困りごと」をご家庭を訪問して、ひとつひとつクリアにしていく住まいのプロ、住まいスター。さて今回はどんな難問が解決されるでしょう？！";
$metaThum = $img_url."/thum/index_foris@2x.jpg";

//bodyClass
$body_class ="page-list foris-index";

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
		<header class="main__category-title u-category-title alsok">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex">
					<h2 class="u-category-title__ttl">
						<div>
							<div class="u-small">プロが解決！</div>
							<div>住まいのSOS</div>

						</div>
					</h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<div class="mb3">
				<img src="<?php echo $img_url; ?>/magazine/foris/common/main-v@2x.jpg"
				alt="「住まいスター」は、住まいに関して日々研究している住まいのマイスター。みなさまのお悩みを解決します！"
				class="u-img__max"
				loading="lazy">
			</div>
			<div class="mb2">
				<div class="u-photolist__row">
					<?php echo show_category_photoList("foris-children"); ?>
				</div>
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
