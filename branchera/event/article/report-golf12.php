<?php
//base
include ("../../function.php");
$content = get_id_data('4063');
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
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>
		<div class="main__wrapper">

			<section class="section wrapper">
				<h2 class="main-v">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf12/main-v.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf12/main-v@2x.jpg"
						alt="会員さま限定イベント スナッグゴルフ 親子体験イベント2019レポート 開催日：2019年3月9日（土）"
						class="u-img__max u-only__pc">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf12/main-v-sp.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf12/main-v-sp@2x.jpg"
						alt="会員さま限定イベント スナッグゴルフ 親子体験イベント2019レポート 開催日：2019年3月9日（土）"
						class="u-img__max u-only__sp">
				</h2>

				<p class="mb3"><strong>2018年、ご好評をいただいた「スナッグゴルフ親子体験イベント」</strong>。第2弾となる今回も、プロによる丁寧な指導と、親子チームに分かれて行なうゲームに大盛り上がり！<br>ゴルフを通して、会員さま同士の交流も深まった今回のイベントについてレポートします。</p>

				<div class="u-assist">
					<div class="u-float__left u-position__center">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf12/pga_info.png"
						data-retina="<?php echo $img_url ?>/event/report-golf12/pga_info@2x.png"
						style="max-width:200px;"
						alt="<?php echo $pageTtl ?>"
						class="u-img__max">
					</div>
					<h3 class="u-ttl__s mt0">公益社団法人 日本プロゴルフ協会（PGA)</h3>
					<hr>
					<p>1957年7月、東西のプロゴルフ協会を統合して設立された男子プロゴルファー団体。今回は、誰でも簡単にゴルフの基本が学べる『スナッグゴルフ』を用いて、PGAティーチングプロの方々にゴルフの基礎を教えていただきました。</p>
				</div>

				<section class="mb3">
					<h3 class="u-ttl__m">ゴルフ未経験でも楽しめる！プロの指導に子どもたちもワクワク</h3>
					<div class="u-clearfix mb3">
						<div class="u-float__left w50">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__1.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__1@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
						<div>
							<p>イベントは、高井戸にある東京ゴルフ専門学校の教場ショートコースで開催されました。まず、PGAが発行する<strong>「ジュニアのためのゴルフはじめてBOOK」を用いて、ゴルフの基本ルールを学んでいきます。</strong><br>ちょっぴり専門的な内容に、はじめは緊張も感じられましたが、ティーチングプロの分かりやすい説明で、子どもたちも次第にテンションアップ！ゴルフコースを日本地図に見立てた説明では、「スタートは沖縄!?」「ホールは北海道？」など、元気いっぱいの声が響きました。</p>
							<p>最後にティーチングプロが<strong>「たくさんの友達を作って帰ってください。それがゴルフをする中で一番最初に『楽しいな』と思えることです。」</strong>と優しく声をかけると、子どもたちも笑顔に。これでゴルフに取り組む準備は万端！</p>
						</div>
					</div>
					<div class="flex between mb3 center">
						<div class="w50 mb2_sp">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__2.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__2@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
						<div class="w50">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__3.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__3@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
					</div>
					<div>
						<p>そしていよいよ、打ち方の指導が始まります！まずは、準備体操からスタートです。しっかり体をほぐしたら、ティーチングプロが実際にクラブを持ち、立ち方やスイングの仕方を一から説明。クラブをほうき、ボールをゴミに例えて、<strong>「目指す方向にほうきでゴミを掃いてください！」</strong>とパットの解説をすると、子どもたちが次々に動きを真似していきます。中には子どもと並んで、真剣に素振りをする保護者の方の姿も。</p>
					</div>
				</section>
				<section class="mb3">
					<h3 class="u-ttl__m">1グループごとにティーチングプロが1名帯同</h3>
					<div>
						<p>打ち方を学んだら、2～3組の親子で1つのグループを作り、各自で実際にボールを打つ練習を進めていきます。<br>パットの練習をした後は、ドライバーショットの練習もスタート！ティーチングプロの見事なお手本スイングには、「お～！」と歓声が上がりました。</p>
					</div>
					<div class="flex between mb3 center">
						<div class="w50 mb2_sp">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__4.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__4@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
						<div class="w50">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__5.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__5@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
					</div>
					<div>
						<p>今回の体験のポイントは何といっても、<strong>1グループごとにティーチングプロが必ず1名帯同するということ</strong>。まず狙いを定めて、次にクラブをボールに当てて…と、動作をじっくり確認しながら、フォームを学ぶことができました。<br>なかなか体験できない贅沢な環境の中、和気あいあいと練習に励む子どもたち。保護者のみなさまもプロにスイングのコツを聞くなど、活発な交流が見られました。</p>
					</div>
				</section>
				<section>
					<h3 class="u-ttl__m">最後はコースに出てゲーム開始！白熱した戦いに大盛り上がり</h3>
					<div class="flex between mb3 center">
						<div class="w33 mb2_sp">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__6.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__6@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
						<div class="w33 mb2_sp">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__7.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__7@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
						<div class="w33">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf12/img__8.jpg"
							data-retina="<?php echo $img_url ?>/event/report-golf12/img__8@2x.jpg"
							style="max-width:400px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
					</div>
					<div class="mb3">
						<p>いよいよイベントも終盤。最後は実際にコースに出て、ゲーム開始です！親子でチームを組み、ほかのチームと交互に打ち合って競います。今まで学んできたことの成果を出そうと、どのチームも気合の入ったスイングを披露。<br>子どもがプレーし、保護者がキャディ役を務めるチームもあれば、親子で1球ずつ交代して打つチームも。それぞれのチームの個性が出たゲームに、<strong>子どもたちからは「楽しかった！」「またやりたい！」といった声がたくさん寄せられました。</strong></p>
					</div>
					<div>
						<p>イベントの最初にティーチングプロがおっしゃった「みんなで仲良くなれたら」という言葉通り、それぞれのご家庭同士の交流も見られた今回の体験イベント。ゴルフの基礎を学ぶことがコミュニケーションにつながり、楽しい時間を過ごすことができました。早くも第3回開催への期待が高まります！</p>
					</div>
				</section>


				<div class="u-assist center" style="line-height:2;">
					<span class="u-font__bold">ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますのでぜひ、チェックしてください。</span>
				</div>
			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
