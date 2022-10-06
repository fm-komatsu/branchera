<?php
//base
include ("../../function.php");
$pageTtl = "アンケート締切り";

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url.'/thum/event.png';

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		$panAry[] = array("/enquete/article/enq-vol01.php","会員さまアンケート");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<div class="main__wrapper mt5">
			<section class="main__item">
				<h2 class="u-ttl__l">本アンケートは終了いたしました。</h2>
				<p>引き続きブランシエラクラブをお楽しみください。</p>
				<img src="<?php echo $base_url; ?>/lib/img/event/enq/bran.png">
				<a href="<?php echo $base_url ?>/enquete" class="u-btn_l">アンケート一覧へ</a></div>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
