<?php
//base
include ("../../function.php");
$content = get_id_data('4034');
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

			<section class="main__item">
				<img
				data-src="../../lib/img/event/report-golf6/main-v.png"
				data-retina="../../lib/img/event/report-golf6/main-v@2x.png"
				alt="スナッグゴルフ親子体験イベントレポート"
				class="u-img__max mb4">

				<div class="u-assist">

					<p class="mb-inner mb4">3月初めとは思えないような、汗ばむくらいのお天気の中、18組の親子にご参加いただきました。<br>今回は、ゴルフ未経験者でも楽しめる「スナッグゴルフ」（プラスチック製の道具を使用）。<br>PGA（公益社団法人 日本プロゴルフ協会）にご協力いただき、7名のティーチングプロの方にゴルフの基本を教えていただきました！</p>
				</div>

				<div class="u-list__dl_table mb3">
					<dl>
						<dt>イベント内容</dt>
						<dd>PGAティーチングプロ7名に教えてもらう、スナッグゴルフ体験会</dd>
					</dl>
					<dl>
					<dt>開催日時</dt>
						<dd>2018年3月3日（土）10：00～12：00</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>東京ゴルフ専門学校内、教場ショートコース（ハイランドセンター）</dd>
					</dl>
				</div>

				<h4 class="u-ttl__m">まずは、ゴルフの基本的なルールやスイングを学びます。</h4>
				<div class="flex between">
					<div class="w50 mb2">
						<p>まずはじめに、教本に沿ってゴルフの基本的なルールについて学び、準備体操。<br>その後、クラブの持ち方から丁寧に教えていただき、練習マットを使ってパッティングとスイングの練習です。<br>クラブの位置を時計の針に見立て、小さいスイングから中くらい、大きいスイングと順にご指導いただきました。</p>
					</div>
					<figure class="w50 mb2">
						<img
						data-src="../../lib/img/event/report-golf6/report-golf06_01.jpg"
						data-retina="../../lib/img/event/report-golf6/report-golf06_01@2x.jpg"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
					<figure class="w50 mb2">
						<img
						data-src="../../lib/img/event/report-golf6/report-golf06_02.jpg"
						data-retina="../../lib/img/event/report-golf6/report-golf06_02@2x.jpg"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
					<figure class="w50">
						<img
						data-src="../../lib/img/event/report-golf6/report-golf06_03.jpg"
						data-retina="../../lib/img/event/report-golf6/report-golf06_03@2x.jpg"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
				</div>

				<h4 class="u-ttl__m">パッティングとスイングの仕方を覚えたら、いよいよコースへ！</h4>
				<div class="flex between mb">
					<figure class="w50 mb2">
						<img
						data-src="../../lib/img/event/report-golf6/report-golf06_04.jpg"
						data-retina="../../lib/img/event/report-golf6/report-golf06_04@2x.jpg"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
					<div class="w50 mb2">
						<p>3組の親子で１つのグループを作り、7つのコースを回ります。<br>各グループに1人ずつPGAティーチングプロがついて、時には冗談なども飛び出すなど、盛り上げながら教えてくださったので、みなさま緊張しながらも楽しくラウンドできました。</p>
					</div>
					<figure class="w50 mb2">
						<img
						data-src="../../lib/img/event/report-golf6/report-golf06_05.jpg"
						data-retina="../../lib/img/event/report-golf6/report-golf06_05@2x.jpg"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
					<figure class="w50">
						<img
						data-src="../../lib/img/event/report-golf6/report-golf06_06.jpg"
						data-retina="../../lib/img/event/report-golf6/report-golf06_06@2x.jpg"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
				</div>

				<!-- <h4 class="u-ttl__m">テレビでは味わえない、臨場感と迫力のパノラマを満喫！</h4>
				<figure class="mb1">
					<img
					src="../../lib/img/event/report-golf2/img03@2x.jpg"
					class="u-img__max">
				</figure>
				<figure class="mb1">
					<img
					src="../../lib/img/event/report-golf2/img04@2x.jpg"
					class="u-img__max">
				</figure>
				<p>広々としたコース内は、緩やかな起伏があり、観戦しているだけでいい運動に！<br>わたしたちから見ると、一見難しそうなコースでも、狙いすましたようにグリーンへオンする正確なショットは、プロならではのクオリティでした。参加者のみなさまからも「こんなに近くでプロのプレーを見られるなんて！」といった、感動のコメントもいただけた観戦ツアーでした。</p> -->

				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>先日はありがとうございました。<br>息子と楽しくいい時間を過ごせました。<br>また機会がありましたら、他のイベントでもお世話になりたいと思います。<br>今後ともよろしくお願いいたします。お疲れさまでした。</p>
								<h5 class="h5_event">東京都在住 30代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>子どもは凄く楽しかったと言っていました。<br>天気が良くて、暑いぐらいだったけど場所が非常に良く行きやすかったです。</p>
								<h5 class="h5_event">東京都在住 40代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>子どもと一緒に有意義な時間を過ごせました。貴重な経験をさせてもらいました。<br>おみやげもいただきありがとうございました。</p>
								<h5 class="h5_event">東京都在住 30代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>帰宅するなり、子どもが今日のことを楽しそうに話してくれました。ありがとうございました。</p>
								<h5 class="h5_event">お留守番のお母さま</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>天候にも恵まれ、息子も楽しかったと言っていました。<br>そのあと、「打ちっぱなしに連れて行って」と言われてますので、さっそく連れていく予定です・・・</p>
								<h5 class="h5_event">千葉県在住 40代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>初めてのゴルフで少し心配でしたが、プロの方の教え方もわかりやすく楽しめました。</p>
								<h5 class="h5_event">東京都在住 40代男性</h5>
							</div>
						</div>
					</div>

				</div>


				<div class="u-assist" style="line-height:2;">
					<strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong>
				</div>
			</section>

		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
