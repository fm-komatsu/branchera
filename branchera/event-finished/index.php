<?php
//base
include ("../function.php");
$pageTtl = '本キャンペーンは終了いたしました。';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="404";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		include ($inc_path."/lib/inc/pan.php");
		?>
		<div class="main__wrapper mt5">

			<section class="main__item mb0">
				<h3 class="u-ttl__l">本キャンペーンは終了いたしました。</h3>
				<p>本キャンペーンは終了し、ページの掲載期間が過ぎているため削除いたしました。<br>あらかじめご了承ください。</p>
				<hr>
				<h4 class="u-ttl__s">ブランシエラクラブのトップページは<a href="<?php echo $base_url ?>/">こちら</a></h4>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
