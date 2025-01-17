
<?php
//base
include ("../../function.php");
$content = get_id_data('9021');
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
		$smile_id_test = "83";//テストFLP用リンクナンバー
		$smile_id_production = "83";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="../../lib/img/smile/article/lottery-1803.png"
				data-retina="../../lib/img/smile/article/lottery-1803@2x.png"
				alt="抽選で30名さまに当たる！【ブルーノ】BIG LEDランタン"
				style="max-width:740px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="../../lib/img/smile/article/lottery-1803-sp.png"
				data-retina="../../lib/img/smile/article/lottery-1803-sp@2x.png"
				alt="抽選で30名さまに当たる！【ブルーノ】BIG LEDランタン"
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
						data-src="../../lib/img/smile/article/lottery-1803_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1803_image01@2x.png"
						alt="【ブルーノ】BIG LEDランタン おしゃれで機能も充実＆持ち運びも便利なLEDランタンです。"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1803_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1803_image02@2x.png"
						alt="【ブルーノ】BIG LEDランタン おしゃれで機能も充実＆持ち運びも便利なLEDランタンです。"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1803_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1803_image03@2x.png"
						alt="【ブルーノ】BIG LEDランタン おしゃれで機能も充実＆持ち運びも便利なLEDランタンです。"
						class="u-img__max">
					</figure>
				</div>
				<!--p class="u-small">※賞品にビールはついておりません。</p-->
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">レトロな見た目がとってもおしゃれなLEDランタン</h4>
					<p class="lottery-point__ex">昔ながらのオイルランタンを模した最新式のLEDランタンです。レトロでおしゃれなデザインなのでアウトドアはもちろんお部屋のインテリアとしてお使いいただいても雰囲気満点です。湖畔で過ごす心地よい昼下がりをコンセプトに作られたこの商品は、魅力的なデザインと温かみのある灯であなたの様々な生活シーンを照らしてくれます。</p>

					<h4 class="lottery-point__ttl">ダイヤル式の無段階調光で明るさも自由自在</h4>
					<p class="lottery-point__ex">LEDの明るさは無段階で調光が可能なため、ご利用するシーンに合わせて最適な明るさに調節することができます。また吊り下げ用のハンガーも付いているのでテントの天井はもちろん、屋外の木の枝などにも吊るすことができ設置場所を選びません。電源は電池式（単１形電池×２本）なので、外出先でも補充がとっても簡単です。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">


					<p class="smile-comment__ex">アウトドア以外にも、インテリアとしてそのままお使いいただけるおしゃれなデザインです♪リビングやベッドルームなどに置けば、停電や災害時など、いざという時にすぐ持ち出すことができる防災グッズ（非常灯）としても活用いただけます！</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>幅178 × 奥行140 × 高さ300ｍｍ</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>450g</dd>
						</dl>
						<dl>
							<dt>素材</dt>
							<dd>ブリキ/ガラス</dd>
						</dl>
						<dl>
							<dt>その他</dt>
							<dd>電球色LEDライト（14灯）、照度調節機能、吊り下げハンガー付き、単1形電池×2（別売）</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年4月中旬頃お手元に届くよう、賞品を発送いたします。
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
