<?php
//base
include ("../../function.php");
$content = get_id_data('4030');
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

				<h2 class="u-ttl__l first-of-type">宝塚歌劇 花組公演観劇レポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
					<dt>公演日時</dt>
						<dd>2018年1月3日(水) 11:00開演</dd>
					</dl>
					<dl>
						<dt>公演劇場</dt>
						<dd>宝塚大劇場 （兵庫県宝塚市栄町1丁目1−57）</dd>
					</dl>
				</div>

				<p class="mb3">宝塚歌劇 花組公演に会員さまをご招待。ミュージカル・ゴシック『ポーの一族』の公演チケットをご用意いたしました。</p>

				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
						data-src="../../lib/img/event/report-takarazuka/img01.jpg"
						data-retina="../../lib/img/event/report-takarazuka/img01@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
					</div>
					<div class="w50">
						<img
						data-src="../../lib/img/event/report-takarazuka/img02.jpg"
						data-retina="../../lib/img/event/report-takarazuka/img02@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>1月3日正月早々に宝塚歌劇の花組公演を観劇でき、年の初めのめでたさもあって、幸せな１日を味わえました。<br>歌劇はステージ上もよく見えましたし、演劇は途中の休憩を含めて３時間程でしたが花組出演者のすばらしい演技と華やかさを堪能でき夫婦２人楽しい１日を送れました。<br>ありがとうございました。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>今回は花組公演ペアチケットありがとうございました。<br>私は残念ながら当日都合が悪く、娘と孫にプレゼントしました。<br>最初プレゼントする旨を娘に話したところ、大喜びでした。<br>また、孫も小さいころピアノとバレエを習っていたこともあり大喜びでした。<br>そして、当日現地に到着するなり、早速LINEで写真を送ってまいりました。<br>また、帰宅後感想を孫に確認したところフィナーレに大変感激したとのことで、早速小学校で友達に話したようです。<br>二人にとっては良き思い出になったと思います。<br>本当にありがとうございました。<br>今後ともよろしくお願いいたします。</p>
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
