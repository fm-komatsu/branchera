<?php
//base
include ("../function.php");
$pageTtl = 'お探しのページが見つかりませんでした。';

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
				<h3 class="u-ttl__l">お探しのページが見つかりませんでした。</h3>
				<p>お客さまがお探しのページが見つかりませんでした。URLが正しく入力されているかどうか、もう一度ご確認ください。<br>正しく入力してもページが表示されない場合は、ページが移動したか、もしくは掲載期間が終了し削除された可能性がございます。</p>
				<hr>
				<h4 class="u-ttl__s">ブランシエラクラブのトップページは<a href="<?php echo $base_url ?>/">こちら</a></h4>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
