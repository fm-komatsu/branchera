<?php
//base
include ("../../function.php");
$content = get_id_data('4059');
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

			<section class="section wrapper">

				<h2 class="u-ttl__l first-of-type">ゴルフラウンドレッスン in 小野東洋GC レポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
						<dt>イベント内容</dt>
						<dd>スタート前、練習場レッスン、パターアプローチレッスン<br>その後、参加者3名にプロ1名が同行し、1ラウンド18ホールレッスン（キャディ付）</dd>
					</dl>
					<dl>
					<dt>開催日</dt>
						<dd>2019年1月26日（土）</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>兵庫県 / 小野東洋ゴルフ倶楽部</dd>
					</dl>
					<dl>
						<dt>参加人数</dt>
						<dd>15名</dd>
					</dl>
					<dl>
						<dt>ティーチング<br>プロ</dt>
						<dd>鶴田良二、伊東諭史、辻哲之、松川明敬、森本英明</dd>
					</dl>
				</div>
				<p class="mb3">前日からの降雪の予報通り、イベント当日は、スタートする頃には小雪がちらつくお天気でした。<br>冷たい風も強く、極寒の中ではありましたが、PGAティーチングプロのレッスンを熱心にご受講いただきました。</p>

				<div class="flex between mb3">
					<div class="w50">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf11/img__1.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf11/img__1@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
						<p>スタート前に練習場でレッスン。スイングフォームなどアドバイスをいただきました。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf11/img__2.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf11/img__2@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
						<p>パター・アプローチもスタート前にレッスンしていただきました。</p>
					</div>
				</div>
				<div class="flex between mb3">
					<div class="w50">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf11/img__3.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf11/img__3@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
						<p>小雪がちらつく中ラウンドスタート。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf11/img__4.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf11/img__4@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
						<p>雪の中、プロのアドバイスに参加者のみなさまもプレーに熱が入ります。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>親身に教えてもらえて良かったです。わかっていてもできない部分を指摘されて納得できました。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>プロとのラウンドでリズムやルーティーンがいかに重要なのかが理解できました。機会があればまた受けたいです。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>10年位スコアが伸び悩んでいたので、これからレベルアップできそうです。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>レッスンを受けてすぐ直ったので良かったです。忘れないように練習します。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>プロと回るのが初めてでした。プロが打つ打球を観ているだけでも充分勉強になりました。あまり練習に行っていなかったですが、これを機に頑張ります。</p>
							</div>
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
