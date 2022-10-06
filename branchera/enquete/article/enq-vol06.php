
<?php
//base
include ("../../function.php");
$content = get_id_data('11010');
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
	<article class="main__row ">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<h2 class="u-ttl__l">第6回会員さまアンケートを実施させていただきます。</h2>

				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex">
							<p>みなさまの声を取り入れ、ブランシエラクラブをより良いものにしていくため、会員さまにアンケートを実施させていただきます。</p>
							<p>今回は「ブランシエラクラブについて」です。奮ってご回答ください。</p>
							<p><strong>ご回答いただいた方には300スマイルをプレゼント！</strong></p>
							<p>みなさまのご回答をお待ちしております！</p>
						</div>
						<img src="<?php echo $img_url; ?>/enquete/bran.png" class="enquete-ex__img" >
					</div>
				</div>

				<div class="u-assist">
					<h5 class="u-ttl__s">アンケート概要</h5>
					<div class="u-list__dl_table">
						<dl>
							<dt>受付期間</dt>
							<dd>2018年4月2日（月）～2018年4月15日（日）</dd>
						</dl>
						<dl>
							<dt>対象者</dt>
							<dd>長谷工IDをお持ちの方</dd>
						</dl>
						<dl>
							<dt>特典</dt>
							<dd>ご回答いただいた方全員に300スマイルプレゼント<br><span class="u-small">※スマイルの付与はアンケート期間終了から1週間程度とさせていただきます。また、複数回ご回答いただいた場合でも付与スマイルは300とさせていただきます。</span></dd>
						</dl>
						<dl>
							<dt>回答方法</dt>
							<dd>ページ下部の「アンケートはこちらから」ボタンよりお答えください</dd>
						</dl>
						<dl>
							<dt>集計結果</dt>
							<dd>本WEBサイトにて公開させていただきます</dd>
						</dl>
					</div>
				</div>

				<label class="u-btn_end center mt2" >アンケートは終了いたしました</label>
				<!-- <div class="u-btn-layout">
					<div class="u-btn-layout__row">
						<a href="https://haseko.flpjp.com/spiralUrl/BRC001" target="_blank" rel="nofollow" class="u-btn_point u-btn-layout__item">アンケートはこちらから</a>
					</div>
				</div> -->
			</section>

		</div>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
