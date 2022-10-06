<?php
//base
include ("../../function.php");
$content = get_id_data('4019');
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

				<h2 class="u-ttl__l first-of-type">骨盤の調整レッスンレポート &laquo;東京・大阪W開催&raquo; </h2>

				<div class="u-list__dl_table mb3">
					<dl>
					<dt>開催日</dt>
						<dd>[東京］2017年8月26日(土)<br>[大阪］2017年9月9日(土)</dd>
					</dl>
					<dl>
						<dt>講師</dt>
						<dd>[東京］ kyo先生（ボディワークプロデューサー）<br>[大阪］ミホ先生（b-i stylist）</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>[東京］ b−i STYLE® スタジオ<br>[大阪］スタジオ・ヨギーOSAKA</dd>
					</dl>
				</div>

				<p class="mb3">今回は骨盤の調整レッスンを東京・大阪のW開催で実施しました！</p>

				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-kotsuban2/img01@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
						<p>終了後のスッキリしたみなさまの表情が印象的な東京会場でした！</p>
					</div>
					<div class="w50">
						<img
						src="../../lib/img/event/report-kotsuban2/img02@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
						<p>初の大阪開催！熱気に包まれながらレッスンしていただきました。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>整体やマッサージはよく行きますが、“自分で整える”ということに魅力を感じました。</p>
								<h5 class="h5_event">埼玉県在住 40代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>産後の骨盤の痛みに悩んでいましたが、参加してとてもよかったです。</p>
								<h5 class="h5_event">大阪府在住 30代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>肩こりがあり身体のメンテナンスをしたいと思っていました。同様のイベントがあればまた参加したいです。</p>
								<h5 class="h5_event">神奈川県在住 60代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>デスクワークが多く、身体のゆがみが気になっていて参加しました。楽しい時間をありがとうございました。</p>
								<h5 class="h5_event">東京都在住 20代女性</h5>
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
