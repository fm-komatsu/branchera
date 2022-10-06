<?php
//base
include ("../../function.php");
$content = get_id_data('4032');
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

				<h2 class="u-ttl__l first-of-type">ゴルフラウンドレッスン in 若洲レポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
						<dt>イベント内容</dt>
						<dd>参加者3名にプロ1名が同行し、1ラウンド18ホールレッスン（キャディ付）</dd>
					</dl>
					<dl>
					<dt>開催日</dt>
						<dd>2018年1月20日（土）</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>東京都江東区／若洲ゴルフリンクス</dd>
					</dl>
				</div>
				<p class="mb3">都心から好アクセスの若洲ゴルフリンクスにてPGA（日本プロゴルフ協会）認定ティーチングプロにじっくり18ホールご指導をいただきました。 プロ1名とアマチュア3名の少人数で実践的なラウンドレッスンを行ないました。</p>

				<div class="flex between mb3">
					<div class="w50">
						<img
						src="../../lib/img/event/report-golf5/img__1@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>東京のビル群をバックに、18ホールをラウンド。</p>
					</div>
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-golf5/img__2@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>PGAティーチングプロにティーショットからパッティングまでアドバイスいただきました。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>プロにアドバイスを受けまくりました。<br>大変貴重な体験をさせていただきました。<br>ありがとうございました。</p>
								<h5 class="h5_event">東京都在住</h5>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb woman">
						<div class="inner">
							<div>
								<p>プロの方にレッスンしていただきながら、プレーも見られるという、とても貴重な経験をさせていただきました。<br>たくさんアドバイスをいただきましたので、今後に活かせるよう、忘れないうちにコースに出たいと思います。</p>
								<h5 class="h5_event">東京都在住</h5>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>現役のプロと一緒にプレーするという、貴重な体験を提供していただきありがとうございました。プロの迫力のあるプレーを間近でみることができ感動しました。<br>またラウンドレッスンでは、コース攻略の考え方についてプロから貴重なアドバイスをいただくことができ、大変勉強になりました。<br>レッスンをしていただいた高橋プロを応援すべく、プレー以外にもゴルフ場に足を運んでみようと思います。ありがとうございました。</p>
								<h5 class="h5_event">神奈川県在住</h5>
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
