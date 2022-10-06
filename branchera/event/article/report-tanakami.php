<?php
//base
include ("../../function.php");
$content = get_id_data('4014');
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

			<section class="section wrapper" style="padding-top: 0;">
				<div class="img mb4 u-only__pc mainBg2 center"></div>
				<img
				data-src="<?php echo $img_url; ?>/event/report-tanakami/main-sp@2x.png"
				alt="まぼろしのお米『たなかみ米』田植え体験 ～収穫レポート～"
				class="u-img__max u-only__sp mb3" >

				<div class="mb6 date u-position__center">
					<p>【記事一覧】</p>
					<p>
						<a href="#area10-late" data-scroll>10月下旬ごろ</a>&emsp;|&emsp;
						<a href="#area10-10" data-scroll>10月10日（火）</a>&emsp;|&emsp;
						<a href="#area9-28" data-scroll>9月28日（木）</a>&emsp;|&emsp;
						<a href="#area9" data-scroll>9月27日（水）</a>
						<br>
						<a href="#area8" data-scroll>9月12日（火）</a>&emsp;|&emsp;
						<a href="#area7" data-scroll>8月24日（木）</a>&emsp;|&emsp;
						<a href="#area5" data-scroll>8月7日（月）・8日（火）</a>
						<br>
						<a href="#area6" data-scroll>7月31日（月）</a>&emsp;|&emsp;
						<a href="#area3" data-scroll>7月24日（月）</a>&emsp;|&emsp;
						<a href="#area2" data-scroll>7月8日（土）</a>&emsp;|&emsp;
						<a href="#area1" data-scroll>7月3日（月）</a>
					</p>
				</div>

				<article class="repoArea" id="area10-late">
					<h3 class="mb2"><time datetime="2017-10">10月下旬ごろ</time></h3>
					<figure class="u-position__center u-column__item">
						<img
						data-src="<?php echo $img_url; ?>/event/report-tanakami/area10-late__01.jpg"
						class="u-img__max"
						style="max-width:497px;">
					</figure>
					<p class=" u-column__item">乾燥した籾を、籾摺り機で、外の皮を剥ぎ玄米にします。</p>
					<br>
					<div class="u-column__2">
						<figure class="u-position__center u-column__item">
							<img
							data-src="<?php echo $img_url; ?>/event/report-tanakami/area10-late__02_1.jpg"
							class="u-img__max"
							style="max-width:497px;">
						</figure>
						<figure class="u-position__center u-column__item">
							<img
							data-src="<?php echo $img_url; ?>/event/report-tanakami/area10-late__02_2.jpg"
							class="u-img__max"
							style="max-width:497px;">
						</figure>
					</div>
					<p>籾摺り⇒石抜き（1.8㎜目での選別）⇒色彩選別機⇒計量選別機（1.9㎜目での選別して計量）30㎏の単位で、袋に詰めます。</p>
					<br>
					<div class="u-column__2">
						<figure class="u-position__center u-column__item">
							<img
							data-src="<?php echo $img_url; ?>/event/report-tanakami/area10-late__03_1.jpg"
							class="u-img__max"
							style="max-width:497px;">
						</figure>
						<figure class="u-position__center u-column__item">
							<img
							data-src="<?php echo $img_url; ?>/event/report-tanakami/area10-late__03_2.jpg"
							class="u-img__max"
							style="max-width:497px;">
						</figure>
					</div>
					<p>精米は玄米保管庫で保管されていた玄米を取り出し、精米機（写真）にかけます。</p>
					<br>
					<figure class="u-position__center">
						<img
						data-src="<?php echo $img_url; ?>/event/report-tanakami/area10-late__04.jpg"
						class="u-img__max"
						style="max-width:497px;">
					</figure>
					<p>精米機⇒小米取り⇒精米色彩選別機⇒計量機（写真）で、計量していよいよ出荷用袋へ！これでみなさまの元へお送りできますよ♪</p>
				</article>

				<article class="repoArea" id="area10-10">
					<h3 class="mb2"><time datetime="2017-10-10">2017年10月10日（火）</time></h3>
					<figure class="u-position__center">
						<img
						data-src="<?php echo $img_url; ?>/event/report-tanakami/img28.jpg"
						data-retina="<?php echo $img_url; ?>/event/report-tanakami/img28@2x.jpg"
						alt="コンバインを使って脱穀!"
						class="u-img__max"
						style="max-width:497px;">
					</figure>
					<p>ようやく天日干しが終わりました！<br>コンバインを使って脱穀しています。<br>もうすぐみなさまのお手元にお届けできますよー♪</p>
				</article>

				<article class="repoArea" id="area9-28">
					<h3 class="mb2"><time datetime="2017-9-28">2017年9月28日（木）</time></h3>
					<figure class="u-position__center">
						<img
						data-src="<?php echo $img_url; ?>/event/report-tanakami/img25.jpg"
						data-retina="<?php echo $img_url; ?>/event/report-tanakami/img25@2x.jpg"
						alt="稲を逆さにつるして天日干!"
						class="u-img__max"
						style="max-width:497px;">
					</figure>
					<p>刈り取った稲を逆さにつるして天日干しします。「はさがけ」とか「稲木（いなき）」と呼ばれています。</p>
					<br>
					<figure class="u-position__center">
						<img
						data-src="<?php echo $img_url; ?>/event/report-tanakami/img26.jpg"
						data-retina="<?php echo $img_url; ?>/event/report-tanakami/img26@2x.jpg"
						alt="可愛いバッタ！"
						class="u-img__max"
						style="max-width:497px;">
					</figure>
					<p>おいしい稲にバッタがたくさん引き寄せられています（笑）</p>
					<br>
					<figure class="u-position__center">
						<img
						data-src="<?php echo $img_url; ?>/event/report-tanakami/img27.jpg"
						data-retina="<?php echo $img_url; ?>/event/report-tanakami/img27@2x.jpg"
						alt="はさがけ完了！"
						class="u-img__max"
						style="max-width:497px;">
					</figure>
					<p>はさがけ完了しました！<br>天気にもよりますが、10日前後で天日干しが終わる予定です。</p>
				</article>

				<div class="repoArea" id="area9">
					<h3 class="mb2">2017年9月27日（水）</h3>
					<div class="w65 center mb1"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img24@2x.jpg" /></div>
					<p class="left">ブランシエラクラブで田植えをしたお米の収穫です。<br>大きく貢献したアイガモちゃんも一緒に「はい、チーズ！」<br>この後、2週間くらい天日で干します。<br><br>農薬を使わずに作ったお米です！</p>
				</div>

				<div class="repoArea" id="area8">
					<h3 class="mb2">2017年9月12日（火）</h3>
					<div class="w65 center mb1"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img23@2x.jpg" /></div>
					<p class="left">みなさまが頑張って田植えをした田んぼが実りの秋を迎え、まもなく収穫です。みなさまの愛情と期待がこめられた稲は上々の出来栄えです。<br>今日は田んぼの水を抜きました。地面が乾いたらいよいよ収穫です。</p>
				</div>

				<div class="repoArea" id="area7">
					<h3 class="mb2">2017年8月24日（木）</h3>
					<div class="w65 center mb1"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img20@2x.jpg" /></div>
					<p class="left">1mほどまで成長しました！！あとは、こうべを垂れ実るだけです。楽しみ！！</p>
				</div>

				<div class="repoArea" id="area5">
					<h3 class="mb2">2017年8月7日（月）・8日（火）</h3>
					<div class="flex between center mb2">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img15@2x.jpg" /></figure>
						<p class="w50 left mt0">台風直撃（>_<）<br><br>午後9時過ぎ、田んぼの水を取水している大戸川が氾濫危険水位を超過しました。<br>避難勧告も発令され、長谷工あんしんデリでは災害対策本部を設置し、対応に追われました。</p>
					</div>
					<div class="flex between center mb1">
						<p class="w50 left mt0">台風一過の8/8（火）午前8時頃、氾濫注意の水位まで下がりました。<br>とりあえず一安心です。これから、全田んぼのパトロールに向かいます。今のところ、大きな被害もなく無事です。<br>ここ5・6年、気象の変化をつくづく感じます。</p>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img16@2x.jpg" /></figure>
					</div>
				</div>

				<div class="repoArea" id="area6">
					<h3 class="mb2">2017年7月31日（月）</h3>
					<div class="w60 center mb1"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img18@2x.jpg" /></div>
					<p class="left mb3">西表島で農業経験のあるスタッフ、しんちゃんと一緒に田んぼの雑草取りをしました。<br>「クサネム」という名前の外来種です。本当に厄介な雑草なんです…。</p>

					<div class="flex between center mb2">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img17@2x.jpg" /></figure>
						<p class="w50 left mt0">クサネムの実は枝豆を小さくしたような実で、お米の粒の大きさ、重さがほぼ一緒の為、選別出来ず混入する怖れがあります。雑草の実が成るまでに除去します。</p>
					</div>

					<div class="flex between center mb4">
						<p class="w50 left mt0">田んぼの水の蒸発で湿度89%、気温はなんと40度！まるで低温サウナ？</p>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img19@2x.jpg" /></figure>
					</div>

					<div class="flex between center mb1">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img13@2x.jpg" /></figure>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img14@2x.jpg" /></figure>
					</div>
					<p>田んぼの水路で、生き物観察をしました。<br>メダカ、ヤゴ（トンボの幼虫）、川エビ、カエル、ザリガニ、アメンボ、ゲンゴロウの幼虫？、コオロギ、タニシなど、たくさんの生き物が生息してました。</p>
				</div>

				<div class="repoArea" id="area3">
					<h3 class="mb2">2017年7月24日（月）</h3>
					<div class="w65 center mb1">
						<figure><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img08@2x.jpg" /></figure>
					</div>
					<p class="mb3">青々とした稲はもう60cmくらいまで成長しましたよ。</p>

					<div class="flex between w80 center mb1">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img09@2x.jpg" /></figure>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img10@2x.jpg" /></figure>
					</div>
					<p>田んぼでプカプカ♪<br>雑草も無く、こんなに稲が成長したのもアイガモちゃんのおかげです。Good job！アイガモちゃん！<br><span class="tb">右</span><span class="sp">上</span>は泳ぎつかれておウチへ帰るアイガモちゃん。羽の色もグレーに変わってすっかり大人になりました。</p>


					<div class="flex between w80 center mb1">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img11@2x.jpg" /></figure>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img12@2x.jpg" /></figure>
					</div>
					<p class="mb4">稲もだいぶ成長したので、そろそろアイガモちゃんたちの役目も終わりかな・・・？<br>アイガモちゃんがいなくなって、ようやくアメンボがゆっくりできているようです（笑）</p>
				</div>

				<div class="repoArea" id="area2">
					<h3>2017年7月8日（土）</h3>
					<p class="mb2">アイガモちゃんがこんなに大きくなりました。両手で抱えないともう捕まえられません。</p>
					<div class="flex between w80 center mb4">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img05@2x.jpg" /></figure>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img06@2x.jpg" /></figure>
					</div>
					<p class="mb2">田んぼを元気に泳いで雑草を食べてくれるおかげで、稲もアイガモちゃんもすくすく育っています(＾◇＾)<br>稲は1週間でさらに10cmほども成長しました！</p>
					<div class="w45 center mb1">
						<figure><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img07@2x.jpg" /></figure>
					</div>
				</div>

				<div class="repoArea" id="area1">
					<h3>2017年7月3日（月）</h3>
					<p class="mb2">6月17日（土）に手植えをしたときは、まだ水面からちょっとしか顔を出していなかった稲が、約3週間でもう30cm位まで成長しました。<br>これからどんどん成長していきますのでお楽しみに！</p>
					<div class="flex between w85 center mb4">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img03@2x.jpg" /></figure>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img04@2x.jpg" /></figure>
					</div>
					<p class="mb2">アイガモちゃんも、3倍くらいに大きくなりました。以前は手のひらにちょこんと収まっていましたが、もう両手サイズにまで成長しました＼(^o^)／<br>今は元気に田んぼの除草をしてくれています。</p>
					<div class="flex between w85 center mb1">
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img01@2x.jpg" /></figure>
						<figure class="w50"><img class="w100" src="<?php echo $img_url; ?>/event/report-tanakami/img02@2x.jpg" /></figure>
					</div>
				</div>

				<a href="<?php echo $base_url ?>/event/article/report-tanakami2.php" class="u-btn u-position__center">イベントレポート公開中！</a>

			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
