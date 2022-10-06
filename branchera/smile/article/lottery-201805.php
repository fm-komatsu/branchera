
<?php
//base
include ("../../function.php");
$content = get_id_data('9023');
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
		$smile_id_test = "91";//テストFLP用リンクナンバー
		$smile_id_production = "91";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="../../lib/img/smile/article/lottery-1805.png"
				data-retina="../../lib/img/smile/article/lottery-1805@2x.png"
				alt="抽選で30名さまに当たる！【エド・インター】脳活キューブ"
				style="max-width:752px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="../../lib/img/smile/article/lottery-1805-sp.png"
				data-retina="../../lib/img/smile/article/lottery-180-sp@2x.png"
				alt="抽選で30名さまに当たる！【エド・インター】脳活キューブ"
				style="max-width:1080px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1805_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1805_image01@2x.png"
						alt="【エド・インター】脳活キューブ　遊びながら脳が鍛えられる、模様合わせパズル。お子さまだけでなく、大人も楽しめます。"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1805_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1805_image02@2x.png"
						alt="【エド・インター】脳活キューブ　遊びながら脳が鍛えられる、模様合わせパズル。お子さまだけでなく、大人も楽しめます。"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1805_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1805_image03@2x.png"
						alt="エド・インター　ロゴマーク"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">25個の木製キューブが脳を活性化</h4>
					<p class="lottery-point__ex">脳活キューブは6面に書かれているさまざまな模様を組み合わせて、1つのイラストを作り上げるパズルです。平面作例140問、立体作例10問のテキストブック。最初はキューブ2個から作る簡単なものから、最後は大人も時間がかかる難易度の高いものまで、年齢を問わずに遊ぶことができます。</p>

					<h4 class="lottery-point__ttl">楽しみながら、脳のトレーニング</h4>
					<p class="lottery-point__ex">テキストブックの問題だけでなく、自由な発想で楽しめるのも魅力のひとつ。柔軟な創造力を身につけることができます。また、繰り返しチャレンジすることで集中力が鍛えられ、完成した時の達成感を得ることも。遊びながら図形の認識力や判断力も得られて、お子さまの指先を使う練習にもなります。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">北欧を感じさせる優しい色合いと、天然木で作られた木のぬくもりが人気の「脳活キューブ」。お子さまの成長にあわせて難しい問題にチャレンジできるので、長く遊んでいただけます。お子さまはもちろん、大人も夢中になる立体パズルをぜひご家族でお楽しみください♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>キューブ：幅30×奥行き30×高さ30mm　トレー：幅193×奥行き193×高さ18mm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>720g</dd>
						</dl>
						<dl>
							<dt>素材</dt>
							<dd>天然木</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>キューブ×25、トレー×1、枠板×5、テキストブック（42ページ）×１</dd>
						</dl>
						<dl>
							<dt>対象年齢</dt>
							<dd>3歳から</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年6月中旬頃お手元に届くよう、賞品を発送いたします。
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
