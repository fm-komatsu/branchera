<?php
//base
include ("../../function.php");
$content = get_id_data('4039');
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

				<h2 class="u-ttl__l first-of-type">脱ゆがみライフ！骨盤の調整レッスン201805レポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
					<dt>開催日</dt>
						<dd>2018年5月19日(土)</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd> b−i STYLE® スタジオ</dd>
					</dl>
					<dl>
						<dt>講師</dt>
						<dd>kyo先生（ボディワークプロデューサー）</dd>
					</dl>
				</div>

				<p class="mb3">今回は東京で開催。各回とも大変ご好評をいただきました！</p>

				<div class="flex">
					<div class="center">
						<img
						data-src="../../lib/img/event/report-kotsuban3/report-kotsuban3@2x.jpg"
						data-retina="../../lib/img/event/report-kotsuban3/report-kotsuban3@2x.jpg"
						style="max-width:640px;"
						class="u-img__max">
					</div>
				</div>
				<p class="mb3 u-assist center">kyo先生の優しい心地よい声が、時には厳しく響いたスタジオ内。<br>みなさま集中して、レッスンを受けていらっしゃいました。<br>レッスン後、熱心にkyo先生とお話しされている方も♪</p>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>普段、運動をしないので心配でしたが、初心者でも無理がない動きだったので、安心してレッスンを受けることができました。また、機会がありましたら是非参加したいと思います。</p>
								<h5 class="h5_event">埼玉県在住 30代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>遠方より参加しましたが、とても有意義な時間でした。<br>今後、是非名古屋でも計画して欲しいです。</p>
								<h5 class="h5_event">岐阜県在住 50代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>少し興味はあるけれど、本格的に始めるきっかけがない…という時に、今回のような体験型のイベントはとても嬉しいです。レッスンの内容も大変良かったです。</p>
								<h5 class="h5_event">神奈川県在住 30代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>健康と心地よい暮らしを求め参加しました。このレッスンはとても素晴らしいので、また参加させていただきたいです。</p>
								<h5 class="h5_event">東京都在住 50代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>もともと、骨盤の調整に興味がありました。楽しく有意義な時間をありがとうございました。</p>
								<h5 class="h5_event">東京都在住 40代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>骨盤の調整に関心があり、kyo先生のレッスンにも是非参加したいと思っていました。</p>
								<h5 class="h5_event">東京都在住 50代女性</h5>
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
