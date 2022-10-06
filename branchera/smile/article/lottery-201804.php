
<?php
//base
include ("../../function.php");
$content = get_id_data('9022');
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
		$smile_id_test = "88";//テストFLP用リンクナンバー
		$smile_id_production = "88";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="../../lib/img/smile/article/lottery-1804.png"
				data-retina="../../lib/img/smile/article/lottery-1804@2x.png"
				alt="抽選で10名さまに当たる！【レコルト】ポットデュオフェット"
				style="max-width:740px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="../../lib/img/smile/article/lottery-1804-sp.png"
				data-retina="../../lib/img/smile/article/lottery-1804-sp@2x.png"
				alt="抽選で10名さまに当たる！【レコルト】ポットデュオフェット"
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
						data-src="../../lib/img/smile/article/lottery-1804_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1804_image01@2x.png"
						alt="【レコルト】ポットデュオフェット「煮る・焼く・蒸す・揚げる・炊く」の5役を1台でこなし、テーブルでできたての料理が味わえる卓上電気調理鍋。"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1804_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1804_image02@2x.png"
						alt="【レコルト】ポットデュオフェット「煮る・焼く・蒸す・揚げる・炊く」の5役を1台でこなし、テーブルでできたての料理が味わえる卓上電気調理鍋。"
						class="u-img__max">
						<figcaption class="u-small">※今回、お届けする商品はレッドです。</figcaption>
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1804_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1804_image03@2x.png"
						alt="【レコルト】ポットデュオフェット「煮る・焼く・蒸す・揚げる・炊く」の5役を1台でこなし、テーブルでできたての料理が味わえる卓上電気調理鍋。"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">「煮る・焼く・蒸す・揚げる・炊く」の5役を1台でこなす</h4>
					<p class="lottery-point__ex">付属のパーツを取り替えることでメインディッシュからデザートまで、さまざまな料理を作ることができます。テーブルで調理できるため冷めることなく、できたてアツアツの料理を楽しめます。また、串揚げや天ぷらなど食べる分をその場で揚げられるので、みんなでテーブルで盛り上がりながら食事を楽しめますね。</p>

					<h4 class="lottery-point__ttl">コンパクトなので手軽に調理ができる</h4>
					<p class="lottery-point__ex">コンパクト&amp;軽量なので持ち運びしやすく、出し入れがラクラク！使いたいときにいつでもサッと取り出せます。さらに、付属パーツはすべて重ねてすっきり収納できます。また、フッ素樹脂コーティングされているのでお手入れも簡単です。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">


					<p class="smile-comment__ex">1台5役、揚げ物も手軽に作れるポットデュオフェット。ブランシエラマガジン「うちのご飯は世界イチ」で3/22(木)から紹介の「とりのカレーから揚げ」もこれなら手軽に作れます。</p>
						<figure class="u-float__right">
							<a href="<?php echo $base_url; ?>/magazine/article/recipe04.php" >
								<img
								data-src="../../lib/img/smile/article/curry-fried-chicken.jpg"
								data-retina="../../lib/img/smile/article/curry-fried-chicken@2x.jpg"
								alt="【レコルト】ポットデュオフェットなら「とりのカレーから揚げ」も手軽に作れます。"
								style="max-width:150px;"
								class="u-img__max">
							</a>
						</figure>

					<p>カレー風味でひと味違ったスパイシーなから揚げ、一度食べるとやみつきになっちゃう♪メインにもビールのお供にもなる美味しい一品、このポットデュオフェットでチャレンジしてみては？<br class="u-clearfix"><a href="<?php echo $base_url; ?>/magazine/article/recipe04.php" class="u-icon" style="font-feature-settings: 'palt' 1;">「とりのカレーから揚げ」の詳しいレシピはコチラ</a>
				</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>本体（ 収納時 ）：約 幅 240mm × 奥行 220mm × 高さ175mm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約 1.6kg</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>レッド</dd>
						</dl>
						<dl>
							<dt>素材</dt>
							<dd>本体：スチール、PBT樹脂</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>セラミックボウル、グリルプレート、蒸し料理用アミ、揚げものカバー、フタ、専用レシピブック（ 30レシピ ）<br>取扱説明書（ 保証書含む ）</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年5月中旬頃お手元に届くよう、賞品を発送いたします。
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
