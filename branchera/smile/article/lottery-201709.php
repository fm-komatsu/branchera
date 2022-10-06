<?php
//base
include ("../../function.php");
$content = get_id_data('9015');
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
		$smile_id_production = "63";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row">
				<img
				data-src="../../lib/img/smile/article/lottery-1709.png"
				data-retina="../../lib/img/smile/article/lottery-1709@2x.png"
				alt="抽選で10名さまに当たる！【Sterling Club】ソーラーダイナモラジオライト"
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
						data-src="../../lib/img/smile/article/lottery-201709-img1.png"
						data-retina="../../lib/img/smile/article/lottery-201709-img1@2x.png"
						alt="ソーラーダイナモラジオライト"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201709-img2.png"
						data-retina="../../lib/img/smile/article/lottery-201709-img2@2x.png"
						alt="ソーラーダイナモラジオライト"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201709-img3.png"
						data-retina="../../lib/img/smile/article/lottery-201709-img3@2x.png"
						alt="ソーラーダイナモラジオライト"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">いざという時にも安心の多機能ラジオライト</h4>
					<p class="lottery-point__ex">LEDライト、AM/FMラジオ、サイレン機能が１台の中にギュッとつまった多機能ラジオライトです。ソーラーパネル付きだから昼間は太陽の光だけで充電が可能。さらにダイナモハンドルを回しても充電ができるので、夜間や曇りの日も安心です。災害時はもちろん、キャンプやアウトドアでも活躍してくれます。</p>

					<h4 class="lottery-point__ttl">ケーブルをつなぐだけでスマートフォンの充電ができます</h4>
					<p class="lottery-point__ex">「プラグイン携帯電話充電機能」を搭載しているので、あらかじめソーラーパネルなどで充電しておいた電力を利用してスマートフォン・携帯電話を充電することができます。充電方法は専用ケーブルをつなぐだけなので、とっても簡単です。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">外出時にスマートフォンの充電が切れて困った！なんて経験はありませんか？そんな時このラジオライトがあれば<strong>充電切れを気にすることなく</strong>思い切り楽しめます。<br>コンパクトサイズなので<strong>旅行やアウドドアにも楽々持ち運びができますよ♪</strong></p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>セット内容</dt>
							<dd>本体、接続ケーブル1本＆コネクター4種</dd>
						</dl>
						<dl>
							<dt>本体サイズ</dt>
							<dd>幅66 x 奥行134 x 高さ38mm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>200g（本体のみ）</dd>
							</dl>
							<dl>
								<dt>使用電源</dt>
								<dd>ダイナモハンドル充電、太陽電池、USB電源（5848 AC/USBアダプター（別売））</dd>
							</dl>
						</div>
					</div>
					<small class="u-small">
						※コネクター4種内訳：緑ラベル・スマートフォン（microUSBプラグ）、オレンジラベル・au用、青ラベル・FOMA/Softbank3G用、白コネクター・アイフォーン4/4S用Dockコネクター
						<br>※プラグイン携帯電話充電機能につきましては、一部の機種で使用できない場合がありますので、ご了承ください。
						<br>※充電ができない場合は、商品取扱説明書に記載のお問い合わせ窓口にご相談ください。
						<br>※アイフォーン5以降のシリーズへの充電は、アップル社の純正ケーブルをご使用ください。
						<br>※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。
						<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2017年10月中旬頃お手元に届くよう、賞品を発送いたします。
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
