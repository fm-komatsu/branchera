<?php
//base
include("../function.php");
$pageTtl = 'アンケート';

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = "アンケートに答えて、スマイルをためよう！アンケート結果はレポートページにてご紹介いたします。";
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "page-list";

//imakura-cafe check
$imakuraCheck = true;

//enqCheck check
$enqCheck = false;

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		include($inc_path . "/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__icon">
					<img data-src="../lib/img/common/body/category-icon__enquete.png" data-retina="../lib/img/common/body/category-icon__enquete@2x.png" alt="<?php echo $pageTtl; ?>の画像" width="76" height="90">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>
		<section class="main__item">
			<section class="main__item smile-lottery">
				<h2 class="u-ttl__l_cafe  first-of-type">いま暮らcaf&eacute;</h2>
				<?php if (isset($imakuraCheck) && $imakuraCheck) { ?>
					<div class="u-photolist__row mb3">
						<?php
						echo show_category_photoList("imakura-cafe");
						?>
					</div>
				<?php } else { ?>
					<div class="u-assist mb3">
						<p class="center u-text__align_l">現在、ご回答いただけるアンケートはありません。</p>
					</div>
				<?php } ?>
				<div>
					<a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php" class="center u-btn_brand_l mb3">いま暮らcaf&eacute;レポートはコチラ</a>
				</div>
			</section>
			<section>
				<h2 class="u-ttl__l first-of-type">アンケート</h2>
				<?php if (isset($enqCheck) && $enqCheck) { ?>
					<div class="smile-lottery mb3">
						<div class="u-photolist__row">
							<?php
							echo show_category_photoList("enq");
							?>
						</div>
					</div>
				<?php } else {
				} ?>
				<div class="u-photolist__row">
					<?php
					echo show_category_photoList("enq-report");
					?>
				</div>
			</section>
		</section>
		<section class="main__wrapper">
			<?php include($inc_path . "/lib/inc/page/_enquete/__past.php") ?>
		</section>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
