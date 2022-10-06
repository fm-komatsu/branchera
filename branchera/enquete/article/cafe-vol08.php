<?php
//base
include ("../../function.php");
$content = get_id_data('11041');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

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
				<h2 class="u-ttl__l_cafe first-of-type mt0">「いま暮らcaf&eacute;」のアンケートにお答えください！</h2>

				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex mb3">
							<p class="mb2">みなさまの“声”から、“暮らしの今”を切り取りお伝えする、「いま暮らcaf&eacute;」。“今”この時をどのように感じ、行動しているかをお聞きし、すばやくレポートにして掲載していきます！</p>
							<p>少しずつ春の兆しが感じられる今日この頃、そろそろ春物の衣類を用意されている方も多いのではないでしょうか。今回は、衣替えについてお聞きします。季節を通じて何かと頭を悩ませることの多い衣服周りのこと、収納場所のことなど、みなさまの「今」をお聞かせください！</p>
						</div>
						<img src="<?php echo $img_url; ?>/enquete/imakura_cafe-staff@2x.png" class="enquete-ex__img" >
					</div>
				</div>

				<div class="u-assist">
					<h5 class="u-ttl__s">アンケート概要</h5>
					<div class="u-list__dl_table">
						<dl>
							<dt>タイトル</dt>
							<dd>「季節替わりの準備」</dd>
						</dl>
						<dl>
							<dt>受付期間</dt>
							<dd>2021年3月11日（木）～3月17日（水）</dd>
						</dl>
						<dl>
							<dt>対象者</dt>
							<dd><strong>長谷工IDをお持ちの方で、冬物から春夏物への衣替えの収納にあれこれ悩んでいる方</strong></dd>
						</dl>
						<dl>
							<dt>特典</dt>
							<dd>ご回答いただいた方全員に50スマイルプレゼント<br><span class="u-small">※スマイルの付与はアンケート期間終了から1週間程度とさせていただきます。</span></dd>
						</dl>
						<dl>
							<dt>回答方法</dt>
							<dd>ページ下部の「アンケートはこちらから」ボタンよりお答えください<br><span class="u-small">※ご回答は1IDにつき1度のみとなります。</span></dd>
						</dl>
						<dl>
							<dt>集計結果</dt>
							<dd>本WEBサイトにて公開させていただきます</dd>
						</dl>
					</div>
				</div>

				<?php if($eventSts == 'new') { ?>
				<div class="u-btn-layout">
					<div class="u-btn-layout__row">
						<a href="https://haseko.flpjp.com/spiralUrl/BRC023" target="_blank" rel="nofollow" class="u-btn_point u-btn-layout__item">アンケートはこちらから</a>
					</div>
				</div>
				<?php } else { ?>
					<label class="u-btn_end center mt2" >アンケートは終了いたしました</label>
				<?php } ?>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
