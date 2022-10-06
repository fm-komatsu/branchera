<?php
//base
include ("../../function.php");
$content = get_id_data('4031');
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

				<h2 class="u-ttl__l first-of-type">PGAゴルフアカデミー体験レッスン 東西W開催レポート</h2>

				<div class="u-list__dl_table">
					<dl>
					<dt>[開催日時]</dt>
						<dd>第1回　2017年11月19日（日）　第2回　2017年12月24日（日）</dd>
					</dl>
					<dl>
						<dt> [開催場所]</dt>
						<dd>
							<ul class="u-list__ul_num">
								<li>PGAゴルフアカデミー太平洋クラブ益子　太平洋クラブ益子PGAコース内</li>
								<li>PGAゴルフアカデミー東条の森　東条の森カントリークラブ内</li>
							</ul>
						</dd>
					</dl>
				</div>

				<h4 class="u-ttl__m_shortmargin">体験レッスンスケジュール</h4>
				<div class="sc_table mb4">
					<dl>
						<dt>7：30</dt>
						<dd>コース内レッスン・コンディショニング（ストレッチや体操）</dd>
					</dl>
					<dl>
						<dt>10：00</dt>
						<dd>コンディショニング・練習場レッスン</dd>
					</dl>
					<dl>
						<dt>12：00</dt>
						<dd>昼食</dd>
					</dl>
					<dl>
						<dt>13：30</dt>
						<dd>ラウンドレッスン（9ホール）</dd>
					</dl>
					<dl>
						<dt>16：30</dt>
						<dd>解散</dd>
					</dl>
				</div>
				<p class="mb3">今回はPGAのゴルフアカデミー体験レッスンを、栃木県「太平洋クラブ益子」と兵庫県「東条の森カントリークラブ」にてW開催いたしました。</p>

				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-golf4/img__1@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p style="font-feature-settings: 'palt';">可動域拡大を目的とし、バランスボールやストレッチポールを使ったコンディショニング（動的ストレッチ）を受けます。<br>ゴルフスイングに役立つだけでなく、ゴルフを長く続けるための身体づくりもレッスンの一部です。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-golf4/img__2@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p style="font-feature-settings: 'palt';">ご参加のみなさまでいざコースへ！コース内ならではの傾斜地や芝など、気になる点もプロからその場でアドバイスしてもらえるので、実践にすぐ役立ちます。<br>即効性の高いレッスンとなりました。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>苦手にしていたアイアンをティーチングプロから丁寧に教えてもらえ、とても分かりやすかったです。コース上の実践の中で教えてもらえたことや、最新の計測器でスイングを診断してもらえたことは他では味わえない貴重な経験でした。ありがとうございました！
								</p>
								<h5 class="h5_event">東京都在住 40代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>スイングの解析や動画撮影の機器を使って、説得力のある技術指導をしてもらいました。自分では気付かないスイングのクセも、理解しやすく教えてもらえたのでとても良かったです。体験レッスンに参加して、さらにゴルフが好きになりました。さっそく実践したいので、早くラウンドしたいです！
								</p>
								<h5 class="h5_event">東京都在住 50代男性</h5>
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
