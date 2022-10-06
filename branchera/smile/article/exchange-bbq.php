<?php
//base
include ("../../function.php");
$content = get_id_data('10011');
$pageTtl = $content['title'];

//meta
$metaTtl = 'スマイルで交換できる「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

// 欠品フラグ
$itemShortage = 0;
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		$smile_flug = "exchange";// exchange or lottery or service or no_flp
		$smile_num = "20,000";//必要スマイル数
		$smile_id_test = "47";//テストFLP用リンクナンバー
		$smile_id_production = "47";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/exchange-bbq-img1.png"
						data-retina="../../lib/img/smile/article/exchange-bbq-img1@2x.png"
						alt="image"
						style="max-width:350px;"
						class="u-img__max"
						>
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/exchange-bbq-img2.png"
						data-retina="../../lib/img/smile/article/exchange-bbq-img2@2x.png"
						alt="image"
						style="max-width:350px;"
						class="u-img__max"
						>
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/exchange-bbq-img3.png"
						data-retina="../../lib/img/smile/article/exchange-bbq-img3@2x.png"
						alt="image"
						style="max-width:350px;"
						class="u-img__max"
						>
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">食卓のテーブルで楽しむ本格ＢＢＱスタイル</h4>
					<p>食卓のテーブルにおけるコンパクト設計ながら、分厚いステーキも美味しく焼ける強力なヒーターを搭載。肉汁を逃がさずジューシーに焼き上げます。また、表面の穴から肉の余分な油を落として焼けるから、豚バラ肉など脂の多い肉もヘルシーに調理できます。</p>
					<h4 class="lottery-point__ttl">どなたにも安心の設計</h4>
					<p>ヒーターを取り外して、プレートから本体まで丸洗いできるから、油の多いお料理の後もスッキリとお手入れできていつでも清潔にお使いいただけます。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>肉の余分な脂を落として焼けるバーベキュープレートと、炒めものやグリル料理に便利なフラットプレートをセットでお届けします。<strong>見ごたえたっぷりの20品の専用レシピブック付き</strong>なので、届いたその日からいろいろな料理をお試しいただけます♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>セット内容</dt>
							<dd>本体、バーベキュープレート 、フラットプレート 、フタ、水トレイ 、ヒーターセット 、フタスタンド 、専用レシピブック</dd>
						</dl>

						<dl>
							<dt>本体サイズ</dt>
							<dd>約 幅42.0 × 奥行23.0 × 高さ16.5cm（収納時）</p>
							</dl>
							<dl>
								<dt>重量</dt>
								<dd>約 2.95kg</dd>
							</dl>
							<dl>
								<dt>カラー</dt>
								<dd>レッド</dd>
							</dl>
							<dl>
								<dt>消費電力</dt>
								<dd>1200W</dd>
							</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※カラーはレッドのみとなります。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。
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
