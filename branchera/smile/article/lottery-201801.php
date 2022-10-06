<?php
//base
include ("../../function.php");
$content = get_id_data('9019');
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
		$smile_id_production = "78";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row">
				<img
				data-src="../../lib/img/smile/article/lottery-1801.png"
				data-retina="../../lib/img/smile/article/lottery-1801@2x.png"
				alt="抽選で15名さまに当たる！【タニタ】コンディションセンサー シラセル"
				style="max-width:740px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1801_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1801_image01@2x.png"
						alt="【タニタ】コンディションセンサー シラセル"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1801_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1801_image02@2x.png"
						alt="【タニタ】コンディションセンサー シラセル 「季節性インフルエンザ」 「食中毒」「熱中症」「カビ・ダニ」が発生しやすい環境かを文字と4色の光でお知らせするとともに、音声で対策方法まで教えてくれます！"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1801_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1801_image03@2x.png"
						alt="【タニタ】コンディションセンサー シラセル"
						class="u-img__max">
					</figure>
				</div>
				<!--p class="u-small">※賞品にビールはついておりません。</p-->
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">光と音で室内環境の変化を素早くお知らせ！</h4>
					<p class="lottery-point__ex">コンディションセンサー ”シラセル”は、室内環境があなたに最適な状況かをお知らせしてくれる、とても便利な温湿度計です。「季節性インフルエンザ」 「食中毒」「熱中症」「カビ・ダニ」が発生しやすい環境かを文字と4色の光でお知らせするとともに、音声で対策方法まで教えてくれます！</p>

					<h4 class="lottery-point__ttl">暗い場所では自動で消音、光の明るさも調整してくれます！</h4>
					<p class="lottery-point__ex">お部屋の明るさ感知機能がついているため、暗い場所では自動で音声のボリュームをOFFにし、光の強弱やお知らせする回数を調整してくれます。そのため、就寝している時も安心してお使いいただけます。小さなお子さまや高齢の方がいるご家庭にはとても便利で親切なアイテムと言えますね。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">


					<p class="smile-comment__ex"><strong>とてもコンパクトサイズ</strong>なので、リビングだけでなく、寝室や子供部屋など、設置する場所を選びません！例えば、お子さまの背の高さに合わせて低い位置に設置すれば、<strong>室内環境がお子さまにとって最適</strong>かどうかもチェックできますよ♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>セット内容</dt>
							<dd>本体、お試し用電池(単3形アルカリ乾電池(LR6)×4本)、取扱説明書（保証書付）</dd>
						</dl>
						<dl>
							<dt>本体サイズ</dt>
							<dd>幅99 × 奥行99 × 高さ118ｍｍ</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約 190g（乾電池含む）</dd>
						</dl>
						<dl>
							<dt>電源</dt>
							<dd>DC6V 単3形アルカリ乾電池(LR6)×4本</dd>
						</dl>
						<dl>
							<dt>お知らせ機能</dt>
							<!--dd class="u-spec-desc">スチール、ぶな</dd-->
							<dd>【光点灯】青:季節性インフルエンザ、緑: 食中毒、赤: 熱中症、紫: カビ・ダニ<br>【音声】季節性インフルエンザ、食中毒、熱中症、カビ・ダニの状態をアナウンス</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。
						<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年2月中旬頃お手元に届くよう、賞品を発送いたします。
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
