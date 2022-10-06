<?php
//base
include ("../../function.php");
$content = get_id_data('4028');
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

				<h2 class="u-ttl__l first-of-type">PGAスペシャルプロアマ大会2017 イベントレポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
						<dt>イベント内容</dt>
						<dd>プロ1名/アマ3名の1組4名でラウンド</dd>
					</dl>
					<dl>
					<dt>開催日</dt>
						<dd>[関西] 2017年8月3日（木）<br>[関東] 2017年10月2日（月）</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>[関西] 兵庫県三木市／太平洋クラブ 六甲コース（6名さまご参加）<br>[関東] 茨城県石岡市／サミットゴルフクラブ（6名さまご参加）</dd>
					</dl>
				</div>
				<p class="mb3">シニアトッププロと一緒に1ラウンドプレーできる「スペシャルプロアマ大会」を開催いたしました。晴天の中、シニアトッププロにアドバイスを受けながらラウンドしました。</p>

				<div class="flex between mb3">
					<div class="w50">
						<img
						src="../../lib/img/event/report-golf3/img__2@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>シニアトッププロに、晴天の中レッスンしていただきました。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-golf3/img__1@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>大自然を感じながら、バンカーショット。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>プロアマ大会に参加させていただきありがとうございました。大変貴重な経験をさせていただき、また楽しい1日を過ごさせていただきました。</p>
								<h5 class="h5_event">神奈川県在住 50代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>中根プロとのラウンドでたくさんの勉強をさせていただき、その日の内に成長を感じることができました。非常に満足のいくスコアでした。</p>
								<h5 class="h5_event">大阪府在住 50代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>同行されたプロからは要所要所で的確なワンポイントアドバイスをいただき、今後の課題と参考にさせていただきました。</p>
								<h5 class="h5_event">神奈川県在住 50代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>楽しい一日を提供いただき感謝いたします。白石プロとのラウンドでした。人柄も良い方で応援したくなるプロでした。</p>
								<h5 class="h5_event">兵庫県在住 60代男性</h5>
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
