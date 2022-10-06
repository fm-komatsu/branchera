<?php
//base
include ("../../function.php");
$content = get_id_data('10002');
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
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		$smile_flug = "exchange";// exchange or lottery or service or no_flp
		$smile_num = "100,000";//必要スマイル数
		$smile_id_test = "8";//テストFLP用リンクナンバー
		$smile_id_production = "8";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/exchange-am09-img1.png"
						data-retina="../../lib/img/smile/article/exchange-am09-img1@2x.png"
						alt="【ダイソン】hot + cool AM09"
						style="max-width:350px;"
						class="u-img__max"
						>
					</figure>
					<figure class="lottery-figs__item">
					</figure>
					<figure class="lottery-figs__item">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">夏は涼しく、冬は暖かく</h4>
					<p>夏は扇風機として勢いのある風を、冬はヒーターとしてより早く、均一に部屋を暖めます。遠くまでパワフルな風を届けるフォーカスモードと、周囲の風を巻き込み広範囲に風を届けるワイドモードを搭載。エアコンと併用することで、サーキュレーターとしてもお使いいただけます。</p>

					<h4 class="lottery-point__ttl">室温を快適な温度に保つ</h4>
					<p>設定温度に達するまで稼動し、設定温度に達すると自動的に電源がオフになることで、室温を正確に保ちます。一般的なファンヒーターと異なり、部屋を暖めすぎることもなく、効率的にエネルギーを使用します。スリープタイマー付きなので、夜間の使用にも最適。</p>

					<h4 class="lottery-point__ttl">どなたにも安心の設計</h4>
					<p>高速回転する羽根がなく、転倒時自動停止機能を搭載しているので、お子さまのいるご家庭でも安心です。露出した発熱体がなく、可燃性の燃料も使用しないので、排気ガスやヒーター特有のにおいを発生させません。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>夏は扇風機として、冬はファンヒーターとして<strong>年間を通して使用できる</strong>ので、シーズンによって押入れから出し入れしたりといった面倒な手間がありません。<strong>掃除が大変なカバーや羽根もありませんので、日常のお手入れも簡単</strong>です♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>セット内容</dt>
							<dd>本体、リモコン</dd>
						</dl>
						<dl>
							<dt>本体サイズ</dt>
							<dd>約 幅204 × 奥行204 × 高さ595mm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約 2.68kg</dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>涼風モード （最小）5.4 W/ （最大）26W 　温風モード 1200W</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
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
