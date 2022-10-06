<?php
//base
include ("../../function.php");
$content = get_id_data('4052');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'PGA主催のプロアマ大会へ会員さまをご招待いたしました。8/2（木）開催の太平洋クラブ六甲コース、10/1（月）開催のサミットゴルフクラブでの様子をレポートいたします。';
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

			<section class="section wrapper">

				<h2 class="u-ttl__l first-of-type">PGAプロアマ大会2018 イベントレポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
						<dt>イベント内容</dt>
						<dd>プロ1名/アマ3名の1組4人でのラウンド</dd>
					</dl>
					<dl>
					<dt>開催日</dt>
						<dd>
							<ul>
								<li>関西：2018年8月2日（木）</li>
								<li>関東：2018年10月1日（月）</li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>
							<ul>
							<li>関西：兵庫県三木市／太平洋クラブ六甲コース（6名さまご参加）</li>
							<li>関東：茨城県石岡市／サミットゴルフクラブ（6名さまご参加）</li>
						</ul>
						</dd>
					</dl>
				</div>
				<h3 class="u-ttl__s">【太平洋クラブ六甲コース】</h3>
				<p class="mb3">暑い中の開催でした、参加されたみなさまはブロとのラウンドを楽しんでいらっしゃいました。<br>シニアプロの随所に光るいぶし銀の技を間近で体感しておりました。</p>

				<div class="flex between mb3">
					<div class="w50">
						<img
						src="../../lib/img/event/report-golf7-8/img__1@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>今シーズン２勝をマークしている山添昌良プロと</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-golf7-8/img__2@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>ロングパットが決まってナイスバーディーでした</p>
					</div>
				</div>

				<h3 class="u-ttl__s">【サミットゴルフクラブ】</h3>
				<p class="mb3">PGAシニアツアー公式戦の会場であるサミットゴルフクラブは、その名にふさわしいコースコンディションで、参加した方は、苦戦しながらもプロのアドバイスを有効に活用しているようでした。</p>

				<div class="flex between mb3">
					<div class="w50">
						<img
						data-src="../../lib/img/event/report-golf7-8/img__3.png"
						style="max-width:400px;"
						data-retina="../../lib/img/event/report-golf7-8/img__3@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>加藤仁プロは、移動中も軽妙なトークで楽しませてくださいました</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						data-src="../../lib/img/event/report-golf7-8/img__4.png"
						style="max-width:400px;"
						data-retina="../../lib/img/event/report-golf7-8/img__4@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>グリーンは、傾斜がきつい上、メジャー大会仕様の早さに苦戦しておりました</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb woman">
						<div class="inner">
							<div style="font-feature-settings : 'palt';">
								<p>遠方からでも参加して良かったです。<br>アドバイスがとても的確でわかりやすかったです。</p>
								<h5 class="h5_event">関西ご参加 関東在住 女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div style="font-feature-settings : 'palt';">
								<p>シニアプロは、ミスショットの後のリカバリーが上手で参考になりました。</p>
								<h5 class="h5_event">関東ご参加 関東在住 男性</h5>
							</div>
						</div>
					</div>

				<div class="u-assist center" style="line-height:2;">
					<strong>ぜひ、次のイベントの開催をお楽しみに！</strong>
				</div>
			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
