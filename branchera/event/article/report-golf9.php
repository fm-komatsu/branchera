<?php
//base
include ("../../function.php");
$content = get_id_data('4053');
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

				<h2 class="u-ttl__l first-of-type">PGAゴルフアカデミー体験レッスン2018 東西W開催レポート</h2>

				<div class="u-list__dl_table">
					<dl>
						<dt> [開催場所]</dt>
						<dd>
							<ul class="u-list__ul_num">
								<li>PGAゴルフアカデミー東条の森　東条の森カントリークラブ内</li>
								<li>PGAゴルフアカデミー太平洋クラブ益子　太平洋クラブ益子PGAコース内</li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt> [開催日]</dt>
						<dd>
							<ul class="u-list__ul_num">
								<li>2018年11月10日（土）</li>
								<li>2018年11月17日（土）</li>
							</ul>
						</dd>
					</dl>
				</div>

				<p class="mb3">今回は、関東と関西のダブル開催となりましたが、どちらも晴天に恵まれ、無事終了しました。</p>

				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
						src="<?php echo $img_url ?>/event/report-golf9/img__1@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p style="font-feature-settings: 'palt';">それぞれの悩みや今日の予定など、しっかりカウンセリングから始まりました。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						src="<?php echo $img_url ?>/event/report-golf9/img__2@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p style="font-feature-settings: 'palt';">スイングをする元となる体のコンディショニングトレーニングも重要なレッスンの一つです。</p>
					</div>
				</div>
				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
						src="<?php echo $img_url ?>/event/report-golf9/img__3@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p style="font-feature-settings: 'palt';">打ち方等の技術面はもちろん、状況判断や冷静なトラブル回避方法も教えていただきました。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						src="<?php echo $img_url ?>/event/report-golf9/img__4@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p style="font-feature-settings: 'palt';">コース内のバンカーから、打ちたい距離を打ち分けるレッスン！脱出するだけじゃなく寄せるポイントもしっかり習いました。</p>
					</div>
				</div>

				<div class="u-assist">

					<p>コース内レッスン、練習場レッスン、コンディショニング、ラウンドレッスンいずれにおいても、ご参加いただいたみなさま、頷きながら熱心に受講されていたのが印象的でした。<br>解散する頃には日も暮れ、朝早くから長時間のプログラムとなりましたが、お楽しみいただけました。</p>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>参加して良かったです。ゴルフ場の中でレッスンを受けるのは初めてだったのでとてもためになりました。</p>
								<h5 class="h5_event">関東在住　40代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>不得意だったバンカーのコツを教えていただき、反復練習できてよかったです。<br>すぐにでもラウンドしたいです。</p>
								<h5 class="h5_event">関西在住　40代男性</h5>
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
