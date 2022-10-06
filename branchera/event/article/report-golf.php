<?php
//base
include ("../../function.php");
$content = get_id_data('4009');
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
				data-src="../../lib/img/event/report-golf/main.jpg"
				data-srcset="../../lib/img/event/report-golf/main-sp@2x.jpg 420w,../../lib/img/event/report-golf/main@2x.jpg"
				alt="会員限定イベント第2弾 松本哲也プロによるゴルフレッスン「ミニ講座＆レッスン！！ パッティング編」　イベントレポート"
				class="u-img__max">

				<p class="mb-inner">大好評の会員さま限定イベント2回目は、長谷工グループ主催のイベント「長谷工住まいの大相談会」のプログラムとして、松本哲也プロによるゴルフレッスン「ミニ講座＆レッスン！！ パッティング編」を開催しました。パッティングの基本的な考え方から、自宅での練習方法まで具体的に教えていただきました。</p>


				<div class="u-assist">
					<div class="u-float__left u-position__center">
						<img
						src="../../lib/img/event/report-golf/img001@2x.jpg"
						style="max-width:200px;"
						class="u-img__max">
					</div>
					<h6 style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">教えてくれたのはこの方！</h6>
					<p >公益社団法人日本プロゴルフ協会ティーチングプロA級会員</p>
					<h5>松本哲也プロ</h5>
					<p>柏市のガーデン藤ヶ谷ゴルフレンジで、独自の理論が分かりやすいと大好評の松本プロ。2015年にはレッスン指導に関する独自のアイディアや理論において、特に優れたティーチングプロを表彰する制度「PGAティーチングプロアワード」において最優秀賞を受賞されました。今回は、そんな松本プロにパッティングの基本を、初心者でもわかりやすく解説いただきました。</p>
				</div>

				<h4 class="u-ttl__m">パッティングが好きになれば、ゴルフゲームの楽しさの本質が見えてくる！</h4>

				<p>今回は、長谷工コミュニティが運営をするレンタルオフィス「ビステーション新橋」に松本プロをお招きして、パッティングのレッスンをしていただきました。前半のハツラツとした松本プロの説明に、徐々に会場は盛り上がっていき、積極的に質問などが飛び交うほど！「パターが上手なら、勝ったようなものですよ！」という言葉で、後半の実践練習への期待が膨らみます。</p>
				<p><img src="../../lib/img/event/report-golf/img01@2x.jpg" class="u-img__max"></p>

				<h4 class="u-ttl__m">いよいよ実践練習！松本プロ考案のオリジナル練習方法に驚きの連続！</h4>

				<p>後半は、会場に用意されたパターマットを使って、「方向性」と「距離感」をつかむための、具体的な練習方法を教わりました。松本プロがご自身で用意されたオリジナル練習器具や座って行なう練習方法など、どれも斬新で、すぐにでも実践できるものばかり！<br>だんだんコツを掴んできて、会員さま同士のコミュニケーションも広がり、楽しいレッスンになりました。</p>
				<p><img class="w100" src="../../lib/img/event/report-golf/img02@2x.jpg" /></p>

				<p class="mb4">最後は、松本プロに直接質問をする贅沢な時間を満喫し、イベントは終了。もっとお話しを聞きたいほどの充実した内容で、「また開催してください！」というありがたいお言葉もいただきました。</p>

				<div class="u-assist" style="line-height:2;">
					<strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong>
				</div>
			</section>


			<section class="main__item" id="after">
				<h2 class="u-ttl__l">【応募は終了いたしました】会員さま限定！！<br>第85回日本プロゴルフ選手権大会　日清カップヌードル杯アフターコンペに参加しませんか？</h2>
				<p>5月の沖縄、まぶしい青空の下、まだまだ熱戦の興奮冷めやらぬトーナメント会場において開催される「第85回日本プロゴルフ選手権大会　日清カップヌードル杯　アフターコンペ」への<strong>「会員さま限定」</strong>の案内です。</p>
				<p>今年で第85回を迎える歴史あるプロゴルフトーナメント、「日本プロゴルフ選手権大会日清カップヌードル杯」。そのファイナルラウンドと同じピンポジションでプレーが出来る、またとない機会です。みなさまふるってご応募ください。</p>
				<small class="u-small">※応募人数　8名、2名1組でご応募いただけます。応募多数の場合は抽選になります。<br>※参加費・渡航費・宿泊費などはご自身でご負担いただきます。</small>

				<h4 class="u-ttl__m">イベント概要</h4>
				<div class="u-list__dl_table">
					<dl>
						<dt>[開催日程]</dt>
						<dd><strong>5月15日（月）</strong><br><strong style="background: none;">トーナメント本戦　5月11日（木）～14日（日）</strong><br>予選ラウンド：5月11日（木）～12日（金）<br>決勝ラウンド：5月13日（土）～14日（日）
						</dd>
					</dl>
					<dl>
						<dt>[開催場所]</dt>
						<dd>かねひで喜瀬カントリークラブ（沖縄県名護市喜瀬）</dd>
					</dl>
					<dl>
						<dt>[参加人数]</dt>
						<dd>8名（2名1組で応募可能）</dd>
					</dl>
					<dl>
						<dt>[費用]</dt>
						<dd>2.8万円（コンペ参加費・プレー費・パーティー代含む）<br><span class="cap">※現地にて各自精算　※渡航費・宿泊費別</span></dd>
					</dl>
					<dl>
						<dt>[申し込み]</dt>
						<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
					</dl>
					<dl>
						<dt>[予約受付期間]</dt>
						<dd>2017年4月9日（日）まで</dd>
					</dl>
					<dl>
						<dt>[当選発表]</dt>
						<dd>4月11日（火）に当選者へメールでご連絡いたします。</dd>
					</dl>
					<dl>
						<dt>[備考]</dt>
						<dd>ご希望の方には「第85回日本プロゴルフ選手権大会　日清カップヌードル杯」のトーナメント観戦チケット（招待券）をプレゼントいたします。</dd>
					</dl>
				</div>

				<label class="u-btn_end center mt2" >応募は終了いたしました</label>
			</section>

		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
