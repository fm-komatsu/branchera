
<?php
//base
include ("../../function.php");
$content = get_id_data('9026');
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
		$smile_id_test = "100";//テストFLP用リンクナンバー
		$smile_id_production = "100";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="../../lib/img/smile/article/lottery-1808.png"
				data-retina="../../lib/img/smile/article/lottery-1808@2x.png"
				alt="抽選で10名さまに当たる！【ルルド】マッサージクッションSSフット"
				style="max-width:752px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="../../lib/img/smile/article/lottery-1808-sp.png"
				data-retina="../../lib/img/smile/article/lottery-1808-sp@2x.png"
				alt="抽選で10名さまに当たる！【ルルド】マッサージクッションSSフット"
				style="max-width:1080px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_center">
						<img
						data-src="../../lib/img/smile/article/lottery-1808_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1808_image01@2x.png"
						alt="【タイガー】ヨーグルトメーカー クリアブルー"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img
						data-src="../../lib/img/smile/article/lottery-1808_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1808_image02@2x.png"
						alt="ヨーグルトや発酵食品などさまざまな食べ方が楽しめる"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img
						data-src="../../lib/img/smile/article/lottery-1808_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1808_image03@2x.png"
						alt="【タイガー】ヨーグルトメーカー クリアブルー"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">手もみ感覚のマッサージクッション</h4>
					<p class="lottery-point__ex">フット専用に設計されたもみ玉を採用しているので、パワフルな手もみ感覚で、しっかりともみほぐすことができます。また、約8度のゆるやかな傾斜が足にフィット！自然な体勢でマッサージできます♪本体は約15分で自動停止するので、安心です。</p>

					<h4 class="lottery-point__ttl">どこでも使い方はいろいろ♪</h4>
					<p class="lottery-point__ex">足裏だけでなく置き方を変えるだけで、体のいろいろなところをマッサージできます。ふくらはぎや太もも、腰など…疲れに合わせてお使いください。表面のカバーは、半分だけ外して足を入れると、もみ感がさらにアップ！自分好みのリラクゼーションタイムをお楽しみいただけます。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">まるでマカロンのような、かわいらしい形のマッサージクッション。表面のカバーは取りはずして洗濯ができるので、いつでも清潔に保つことができます。また、毎日使っても1ヵ月あたりの電気代は約３円なのでとても経済的！（1日約15分使用した場合）お家で気軽に本格的な足裏マッサージができるので、夏の疲れを癒すのにピッタリです！</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table_long">
						<dl>
							<dt>サイズ</dt>
							<dd>（約）W260×L260×H130mm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>（約）1.3kg</dd>
						</dl>
						<dl>
							<dt>回転数</dt>
							<dd>（約）30回転/分</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>ACアダプター・取扱説明書（ 保証書含む ）</dd>
						</dl>
						<dl>
							<dt>使用目的又は効果</dt>
							<dd>あんま、マッサージの代用。一般家庭で使用すること。<br>（疲労回復、血行を良くする、筋肉の疲れをやわらげる、筋肉のこりをほぐす、神経痛・筋肉痛の痛みの緩解）</dd>
						</dl>


						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年9月中旬頃お手元に届くよう、賞品を発送いたします。
					</small>
				</div>

				<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

			</section>

			<aside class="main__item">
				<h3 class="u-ttl__l">よくあるご質問</h3>
				<ol class="u-list__ol">
					<?php include ($inc_path."/lib/inc/page/_smile/smile-faq.php") ?>
				</ol>
			</aside>

			<nav class="main__snav snav">
				<?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
			</nav>

		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
