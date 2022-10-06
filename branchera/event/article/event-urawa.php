<?php
//base
include ("../../function.php");
$content = get_id_data('6002');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<!-- section -->
			<section class="main__item" id="report">
				<h2 class="u-ttl__l">【ブランシエラ浦和駒場】ご来場特典プレゼント！</h2>
				<img data-src="../../lib/img/event/event-urawa/img01.png"
				data-retina="../../lib/img/event/event-urawa/img01@2x.png"
				alt="【ブランシエラ浦和駒場】ご来場特典プレゼント！"
				class="u-img__max mb-inner">
			</section>
			<section class="main__item">
				<?php include ($inc_path."/lib/inc/u-mansion-urawa.php"); ?>

			</section>

		</div><!-- //wrapper -->

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
