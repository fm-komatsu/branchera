<?php
//base
include ("../../function.php");
$pageTtl = "アンケート完了";

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
		include ($inc_path."/lib/inc/pan.php");
		?>
		<div class="main__wrapper mt5">
			<section class="main__item">
				<h2 class="u-ttl__l">アンケートの回答を受け付けました。</h2>
				<div class="flex between mb2">
					<div class="w85">
						<p>アンケートへのご協力ありがとうございました。</p>
						<p>ご回答いただきました内容は、今後のクラブ運営やコンテンツ制作の参考とさせていただきます。
							<br><small class="u-small">※スマイルの付与はアンケート期間終了から1週間程度とさせていただきます。また、複数回ご回答いただいた場合でも付与スマイルは300とさせていただきます。</small>
						</p>
					</div>
					<div class="w15 u-only__pc">
						<img src="<?php echo $img_url; ?>/event/enq/bran.png" class="u-img__max">
					</div>
				</div>

				<div class="u-position__center u-assist">
					<p>引き続きブランシエラクラブをお楽しみください。</p>
					<a href="<?php echo $base_url ?>/" class="u-btn u-position__center" >ブランシエラクラブトップページはこちら</a>
				</div>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
