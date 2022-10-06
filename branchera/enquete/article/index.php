
<?php
//base
include ("../../function.php");
$content = get_id_data('11005');
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
				<h2 class="u-ttl__l">第3回会員さまアンケートを実施させていただきます。</h2>

				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex">
							<p>みなさまの声を取り入れ、ブランシエラクラブをより良いものにしていくため、会員さまにアンケートを実施させていただきます。</p>
							<p><strong>ご回答いただいた方には100スマイルをプレゼント！</strong></p>
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
							<dd>2017年7月3日（月）～2017年7月12日（水）</dd>
						</dl>
						<dl>
							<dt>対象者</dt>
							<dd>長谷工IDをお持ちの方</dd>
						</dl>
						<dl>
							<dt>特典</dt>
							<dd>ご回答いただいた方全員に100スマイルプレゼント<br><span class="u-small">※スマイルの付与はアンケート期間終了から1週間程度とさせていただきます。また、複数回ご回答いただいた場合でも付与スマイルは100とさせていただきます。</span></dd>
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
				<label class="u-btn_end center">アンケートは終了いたしました</label>
			</section>

		</div>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
