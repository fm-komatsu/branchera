<?php
//base
include ("../../function.php");
$content = get_id_data('4054');
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
				data-src="<?php echo $img_url ?>/event/report-golf10/main-v@2x.png"
				alt="公益社団法人 日本プロゴルフ協会 ティーチングプロ A級会員によるミニ講座＆レッスン!! パッティング編 レポート"
				class="u-img__max">

				<p class="mb-inner">前回も好評だった松本哲也プロによるゴルフレッスン「ミニ講座＆レッスン!! パッティング編」が、今回も長谷工コミュニティが運営するレンタルオフィス「ビステーション新橋」にて開催されました！前回よりもさらにパワーアップした内容に、会場は多いに盛り上がりました。</p>


				<div class="u-assist">
					<div class="u-float__left u-position__center">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf10/matsumoto_pro.png"
						data-retina="<?php echo $img_url ?>/event/report-golf10/matsumoto_pro@2x.png"
						style="max-width:200px;"
						class="u-img__max">
					</div>
					<h6 style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">教えてくれたのはこの方！</h6>
					<p >公益社団法人日本プロゴルフ協会ティーチングプロA級会員</p>
					<h5>松本哲也プロ</h5>
					<p>柏市のガーデン藤ヶ谷ゴルフレンジにて、独自の理論に基づき行なっているレッスン指導が大変分かりやすいと大好評の松本プロ。2015年にはレッスン指導に関する独自のアイディアや理論において、特に優れたティーチングプロを表彰する「PGAティーチングプロアワード」において最優秀賞を受賞。</p>
				</div>

				<h4 class="u-ttl__m">自分のイメージ通りに打てることが大切！</h4>

				<p>前回同様、今回もスコアを大きく左右するパッティング方法について、松本プロ独自の練習方法をご紹介いただきました。<br>ご自身のクラブを持参されている方も見受けられ、みなさまの期待と気合いを感じながらレッスンスタートです！まずは、パッティングで大切なことを、実際の練習動画を見ながら解説していただきました。</p>
				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__1.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__1@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__2.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__2@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
				</div>
				<p>パッティンググリーンにはさまざまな起伏があり、傾斜や上り下り、芝目などを考慮してラインを読みパットを打ちますが、実際に自分の読んだライン通りに打てているのか分からない人が多いそうです。松本プロの<strong>「ラインを読む力より、読んだライン通りに打つ事のほうが大事」</strong>などの言葉を書きとめる会員さまもいらっしゃいました。</p>

				<h4 class="u-ttl__m">真っ直ぐに打つためには“構え”が重要！</h4>

				<p>自分の狙い通りに打つためには、まずは真っ直ぐに打つことから。そして<strong>真っ直ぐに打つためには、まず“構え”が大切</strong>ということで、次はいよいよクラブを使った実践練習です。真っ直ぐに打つためのポイントは、“足の位置と目線の位置”とのことで、自宅でもできる簡単な練習方法を教えていただきました。</p>
				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__3.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__3@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__4.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__4@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
				</div>

				<h4 class="u-ttl__m">さらにパワーアップした練習ツールを使って、距離感を掴む練習！</h4>

				<p>前回はお手製だった練習ツールが、今回は商品化されて登場！手前から順に、赤・白・青・黒と並べられた8つのゴールボックスに、ボールを入れてゆくという練習なのですが、ただボールが入れば良いのではなく、狙ったボックスにボールを打つことを目的とした練習になります。最初はボールを2球、ポンポンとリズミカルに打ち、２球とも同じ色のボックスに入ればOK！<strong>体に距離感を叩き込みます</strong>。さらに、ここからは4つのグループに分かれて、会員さま同士で構えや打ち方をチェック。そして、最後はチーム対抗で、徐々にボールの飛距離を長くしていくというリレーゲームを実施しました。<strong>会場のいたるところから、拍手や歓声があがり、大いに盛り上がりました！</strong></p>
				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__5.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__5@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__6.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__6@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
				</div>

				<div class="flex between mb3">
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__7.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__7@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
					<div class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf10/img__8.png"
							data-retina="<?php echo $img_url ?>/event/report-golf10/img__8@2x.png"
							style="max-width:400px;" class="u-img__max">
					</div>
				</div>

				<p class="mb4">最後に松本プロから、自宅でも練習できる方法を教えていただき、レッスンは終了となりました。お帰りの際には、<strong>「楽しかったです」「早速、自宅で練習します！」というみなさまからの嬉しい声を多数いただくことができました</strong>。</p>

				<div class="u-assist" style="line-height:2;">
					<span class="u-font__bold">ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</span>
				</div>
			</section>


	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
