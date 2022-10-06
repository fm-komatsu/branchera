<?php
//base
include ("../../function.php");
$content = get_id_data('4029');
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

				<h2 class="u-ttl__l first-of-type">女子プロバスケットボール公式戦観戦レポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
					<dt>開催日</dt>
						<dd>2017年11月12日（日）</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>大田区総合体育館</dd>
					</dl>
				</div>

				<p class="mb3">東京羽田ヴィッキーズ vs トヨタ自動車アンテローブスのWリーグ公式戦観戦に、会員さまを無料ご招待。今回は長谷工グループが主催するゲームとして、スペシャル観覧席をご用意いたしました。</p>

				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
						src="../../lib/img/event/report-basket/img__1@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>スペシャル観覧席はコートが近く、とても迫力がありました。</p>
					</div>
					<div class="w50">
						<img
						src="../../lib/img/event/report-basket/img__2@2x.png"
						style="max-width:400px;"
						class="u-img__max">
						<p>ヴィッキーちゃんと一緒に大盛り上がりなゲーム観戦でした。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>初めてバスケットボールの試合を観戦しました。席もコートに近く大変迫力があり、楽しめました。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>目の前で熱い戦いを見て、すっかりヴィッキーズのファンになりました。また観戦に来たいと思います。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>学生の時にバスケットボールをやっていたのですが、今回ゲーム観戦に招待していただき、またやりたくなりました。</p>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>ヴィッキーズの選手たちのひたむきなプレーを見て、ついつい声を出して応援してしまいました。ヴィッキーズ頑張れ！</p>
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
