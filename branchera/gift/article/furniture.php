<?php
//base
include("../../function.php");
$content = get_id_data('3004');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/gift/", "優待サービス");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<?php
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<div>
					<?php include($inc_path . "/lib/inc/page/_gift/__furniture-list.php"); ?>
				</div>
			</section>
		</div>

		<div class="main__wrapper">
			<section class="main__item mb4" id="flow">
				<div class="mb4">
					<?php include($inc_path . "/lib/inc/page/_gift/__furniture-flow.php"); ?>
				</div>
				<div>
					<?php include($inc_path . "/lib/inc/page/_gift/__furniture-request.php"); ?>
				</div>
			</section>
			<div>
				<?php include($inc_path . "/lib/inc/page/_gift/__furniture-attention.php"); ?>
			</div>
		</div>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
