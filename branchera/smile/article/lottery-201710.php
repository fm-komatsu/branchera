<?php
//base
include ("../../function.php");
$content = get_id_data('9016');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $pageTtl.'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
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
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>

		<?php
		$smile_flug = "lottery";// exchange or lottery or service or no_flp
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "65";//テストFLP用リンクナンバー
		$smile_id_production = "65";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row">
				<img
				data-src="../../lib/img/smile/article/lottery-1710.png"
				data-retina="../../lib/img/smile/article/lottery-1710@2x.png"
				alt="抽選で15名さまに当たる！【SPIEGELAU】クラフトビールグラス３点セット"
				style="max-width:625px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201710-img1.png"
						data-retina="../../lib/img/smile/article/lottery-201710-img1@2x.png"
						alt="クラフトビールグラス３点セット"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201710-img2.png"
						data-retina="../../lib/img/smile/article/lottery-201710-img2@2x.png"
						alt="クラフトビールグラス３点セット"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201710-img3.png"
						data-retina="../../lib/img/smile/article/lottery-201710-img3@2x.png"
						alt="クラフトビールグラス３点セット"
						class="u-img__max">
					</figure>
				</div>
				<p class="u-small">※賞品にビールはついておりません。</p>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">クラフトビールの魅力を最大限に引き出すグラスセット</h4>
					<p class="lottery-point__ex">今回ご紹介するビールグラスセットは、クラフトビールの楽しみ方をグッと奥深いものにしてくれます。<br>クラフトビールの魅力はなんといってもスタイルごとに異なる個性豊かな香りと味わいですが、その魅力を最大限に引き出すためには、それぞれのスタイルに合った最適な形状のグラスで飲むことがポイントとなります。</p>

					<h4 class="lottery-point__ttl">クラフトビールの代表的なスタイルを楽しめるグラス3点をセレクト</h4>
					<p class="lottery-point__ex">「IPAインディア・ペール・エール」グラスの特徴はうねり状になったグラス下部。ビールが空気に触れやすくなり豊かな泡立ちとなり、ホップの香りと苦味を存分に楽しめます。「アメリカン・ウィート・ビール/ヴィットビア」グラスは、ふくらみのある形状がビールのフルーティな香りを凝縮し、飲む方の鼻孔を刺激します。「スタウト」グラスは、くびれ形状がビールの対流を生み出しきめ細かな泡立ちを実現、焙煎したモルトの豊かな風味を最大限際立たせてくれます。ぜひ、このグラスセットでクラフトビールの魅力を味わい尽くしてください。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">SPIEGELAUのグラスは見た目が美しいのはもちろん、<strong>耐久性も抜群</strong>です。<strong>食器洗浄機を使った洗浄テストでは1,500回繰り返し洗ってもほとんど傷も付かない</strong>ほど！さすが世界中の5つ星ホテルやレストランのプロフェッショナルに愛用されるだけのことはありますね♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>セット内容</dt>
							<dd><クラフトビールグラス> クラフトビール・テイスティング・キット（3個入）<br>IPAインディア・ペール・エール×1個、アメリカン・ウィート・ビール/ヴィットビア×1個、スタウト×1個</dd>
						</dl>
						<dl>
							<dt>本体サイズ</dt>
							<dd>IPAインディア・ペール・エール　高さ：186mm　容量： 540 ml<br>アメリカン・ウィート・ビール/ヴィットビア　高さ： 170mm　容量： 750 ml <br>	スタウト　高さ：180mm　容量： 600 ml</dd>
						</dl>
						<dl>
							<dt>素材</dt>
							<dd class="u-spec-desc">クリスタルガラス</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。
						<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2017年11月中旬頃お手元に届くよう、賞品を発送いたします。
					</small>
				</div>

				<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

			</section>

			<aside class="main__item">
				<h3 class="u-ttl__l">よくあるご質問</h3>
				<?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
			</aside>

			<nav class="main__snav snav">
				<?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
			</nav>

		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
