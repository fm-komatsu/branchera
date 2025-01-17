<?php
//base
include ("../../function.php");
$content = get_id_data('9020');
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
		$smile_id_production = "81";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="../../lib/img/smile/article/lottery-1802.png"
				data-retina="../../lib/img/smile/article/lottery-1802@2x.png"
				alt="抽選で20名さまに当たる！【ハニーウエア】ソリッド 15cmミルクパン"
				style="max-width:740px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="../../lib/img/smile/article/lottery-1802-sp.png"
				data-retina="../../lib/img/smile/article/lottery-1802-sp@2x.png"
				alt="抽選で20名さまに当たる！【ハニーウエア】ソリッド 15cmミルクパン"
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
						data-src="../../lib/img/smile/article/lottery-1802_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1802_image01@2x.png"
						alt="【ハニーウエア】ソリッド 15cmミルクパン 見た目もかわいらしくお手入れも簡単な片手ハンドルのホーロー製ミルクパンです。"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1802_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1802_image02@2x.png"
						alt="【ハニーウエア】ソリッド 15cmミルクパン 今回お届けする商品はホワイトです。"
						class="u-img__max">
						<figcaption class="u-small">
							※今回、お届けする商品はホワイトです。
						</figcaption>
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1802_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1802_image03@2x.png"
						alt="Honey Ware ロゴマーク"
						class="u-img__max">
					</figure>
				</div>
				<!--p class="u-small">※賞品にビールはついておりません。</p-->
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">おしゃれでお手入れも簡単なホーロー製ミルクパン</h4>
					<p class="lottery-point__ex">ソリッド 15cmミルクパンの魅力は、何と言ってもその見た目のかわいらしさとお手入れのしやすさです。<br>鉄の表面にガラス質を焼き付けているので、美しい色合いをいつまでも保つことができ、また鉄製鍋と比べて錆びにくく汚れやニオイもつきにくいので日ごろのお手入れもとっても簡単。毎日の料理の強い味方になること間違いなしです。</p>

					<h4 class="lottery-point__ttl">保温も保存もばっちり！作り置きしても料理のおいしさをキープします</h4>
					<p class="lottery-point__ex">芯材が鉄でできているので、ガス火はもちろんIH調理器でも効率よく加熱することができ、しかも一度温まると表面のガラス質が熱を閉じ込めてくれるので、保温性もばっちりです。また酸や塩分にも強いため、食材の保存にも適しており、料理を作り置きすることが多いご家庭でも安心してご利用いただけます。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">


					<p class="smile-comment__ex">ホーロー製の鍋は、鉄製鍋と違って調理の際に<strong>不要な金属イオンが発生しない</strong>という特長があります。汚れに強くて清潔＆金属イオンも発生しないホーロー製ミルクパンは、<strong>小さなお子さまの離乳食の調理にも適した安全な製品</strong>です。ぜひご活用ください！</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>幅275 × 奥行155 × 高さ115ｍｍ</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>0.9kg（小箱含む）</dd>
						</dl>
						<dl>
							<dt>容量</dt>
							<dd>1.2L</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>ホワイト</dd>
						</dl>
						<dl>
							<dt>その他</dt>
							<dd>直火、IH200V対応</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。
						<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年3月中旬頃お手元に届くよう、賞品を発送いたします。
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
