
<?php
//base
include ("../../function.php");
$content = get_id_data('9025');
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
		$smile_id_test = "95";//テストFLP用リンクナンバー
		$smile_id_production = "95";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
				<div class="lottery-banner__row">
					<div id="canvas-container">
						<div class="lottery-banner__1807 u-only__pc">
							<canvas id="mainvCanvas" class="lottery-banner__1807">
							</canvas>
							<canvas id="sineCanvas" class="lottery-banner__bg"></canvas>
						</div>
						<div class="u-only__sp">
							<div class="lottery-banner__1807">
								<img
								data-src="../../lib/img/smile/article/lottery-1807-sp.png"
								data-retina="../../lib/img/smile/article/lottery-1807-sp@2x.png"
								alt="抽選で10名さまに当たる！【タイガー】ヨーグルトメーカー クリアブルー"
								style="max-width:1063px;"
								class="u-img__max"
								>

							</div>
							<canvas id="sinespCanvas" class="lottery-banner__bg"></canvas>
						</div>


					</div>
				</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row_rev">
					<figure class="lottery-figs__item_rev">
						<img
						data-src="../../lib/img/smile/article/lottery-1807_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1807_image01@2x.png"
						alt="【タイガー】ヨーグルトメーカー クリアブルー"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_rev">
						<img
						data-src="../../lib/img/smile/article/lottery-1807_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1807_image02@2x.png"
						alt="ヨーグルトや発酵食品などさまざまな食べ方が楽しめる"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_rev">
						<img
						data-src="../../lib/img/smile/article/lottery-1807_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1807_image03@2x.png"
						alt="【タイガー】ヨーグルトメーカー クリアブルー"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">ヨーグルトから発酵食品までさまざまな食べ方が楽しめる</h4>
					<p class="lottery-point__ex">20度から60度まで、<strong>1度きざみでの細かい温度設定ができる</strong>ため、プレーンヨーグルトやカスピ海ヨーグルト、豆乳ヨーグルトなど、さまざまな種類のヨーグルトをお楽しみいただけます。さらに、塩麴や、醤油麹、甘酒などの<strong>ヨーグルト以外の発酵食品も手軽に</strong>作ることができ、料理の幅が広がります。</p>

					<h4 class="lottery-point__ttl">「パック牛乳」をそのままセットできるので、お手入れが簡単</h4>
					<p class="lottery-point__ex">パック牛乳をそのままセットできるので、<strong>洗い物も少なく衛生的</strong>。発酵容器やスプーンなど付属品すべて、耐熱容器に入れた<strong>熱湯消毒（100度まで）が可能</strong>です。また操作方法もとっても簡単。タッチキーと調節つまみで温度と時間をセットするだけで、手軽にお好みのヨーグルトが作れます。<strong>1食（110g）あたり約32.3円で作ることができる</strong>ので、お財布にもうれしいアイテムです。<br>※火にかけながらの煮沸消毒はできません。また、食器洗浄機、食器乾燥機は使用できません。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">1時間から48時間まで1時間単位のタイマー機能付きなので、<strong>酸味の調整も自由自在</strong>です。例えば、まろやかな味にしたいときは、発酵時間を短くしたり、酸味を強めたいときには、時間を長くするなどして自分好みのヨーグルトを作ることができます。<strong>お子さまや酸味が苦手な方でも食べやすく調整することができる</strong>ので、好みの味を見つけてくださいね♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table_long">
						<dl>
							<dt>容量</dt>
							<dd>発酵容器の場合：500mL<br>パック牛乳の場合：1000mL または 500mL（底面約7cm角のもの）</dd>
						</dl>
						<dl>
							<dt>消費電力（W）</dt>
							<dd>30</dd>
						</dl>
						<dl>
							<dt>温度調節（度）</dt>
							<dd>20〜60（1度きざみ）</dd>
						</dl>
						<dl>
							<dt>時間設定（時間）</dt>
							<dd>1〜48（1時間単位）</dd>
						</dl>
						<dl>
							<dt>サイズ 幅×奥行×高さ（約）cm</dt>
							<dd>11.5 × 14.9 × 26.5</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>発酵容器・発酵容器ふた・スプーン</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年8月中旬頃お手元に届くよう、賞品を発送いたします。
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
