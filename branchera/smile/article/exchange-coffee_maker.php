<?php
//base
include ("../../function.php");
$content = get_id_data('10043');
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

$exchangeItem = "exchange-coffee_maker";

// 欠品フラグ
$itemEnd = '';

?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		$smile_flug = "exchange";// exchange or lottery or service or no_flp
		$smile_num = "10,000";//必要スマイル数
		$smile_id_test = "191";//テストFLP用リンクナンバー
		$smile_id_production = "191";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              src="<?php echo $img_url ?>/smile/article/<?php echo $exchangeItem ?>-img1@2x.jpg"
              alt="<?php echo $pageTtl?>｜image"
              style="max-width:350px;"
              class="u-img__max"
							loading="lazy"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              src="<?php echo $img_url ?>/smile/article/<?php echo $exchangeItem ?>-img2@2x.jpg"
              alt="<?php echo $pageTtl?>｜image"
              style="max-width:350px;"
              class="u-img__max"
							loading="lazy"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              src="<?php echo $img_url ?>/smile/article/<?php echo $exchangeItem ?>-img3@2x.jpg"
              alt="<?php echo $pageTtl?>｜image"
              style="max-width:350px;"
              class="u-img__max"
							loading="lazy"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
      <h4 class="lottery-point__ttl">コンパクト&シンプル機能で使いやすいコーヒーメーカー</h4>
      <p>本製品は、コンパクトかつシンプルな機能で使いやすいコーヒーメーカーです。難しい操作いらずで、忙しい朝にも美味しいコーヒーを簡単に淹れることができます。コーヒーカップ2〜5杯分の容量なので、自分だけのリラックスタイムや、家族と過ごす団らんにもぴったりですよ。</p>
      <h4 class="lottery-point__ttl">「アロマツイスター」でコーヒーの香りと味わいを引き出す
</h4>
      <p>コーヒーを均一に攪拌（かくはん）するため、本製品のポット蓋は「アロマツイスター」という特殊構造になっています。さらに、メリタ独自の「一つ穴抽出」で、お湯の流れと抽出時間をコントロール。コーヒーが持つ本来の風味とアロマを最大限にお楽しみいただけます。手軽に本格的なコーヒーを楽しみたい方におすすめの製品です。</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>美味しいコーヒーを淹れられるだけでなく、保温機能やしずく漏れ防止機能が付いているのが本製品のポイント。時間が経っても温かいコーヒーを飲むことができるうえ、保温ポットを外してもしずくが漏れにくく、プレートの汚れを防いでくれます。<br>そして給水タンクが取り外し可能で、洗うことができるので衛生的！<br>コーヒーがお好きな方は、ぜひこの機会にご利用ください。</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
				<h5 class="u-terms__ttl">詳細スペック</h5>
				<div class="u-terms__inner u-list__dl_table_long2">
					<dl><dt>型番</dt><dd>SCG58-3-B</dd></dl>
					<dl><dt>カラー</dt><dd>ジェットブラック</dd></dl>
					<dl><dt>荷姿</dt><dd>6（6×1）</dd></dl>
					<dl><dt>最大水容量</dt><dd>0.7リットル	</dd></dl>
					<dl><dt>定格</dt><dd>AC100V/600W</dd></dl>
					<dl><dt>本体サイズ</dt><dd>幅180×奥行195×高さ265（mm）</dd></dl>
					<dl><dt>化粧箱サイズ</dt><dd>幅215×奥行195×高さ275（mm）</dd></dl>
					<dl><dt>本体重量</dt><dd>1.3kg</dd></dl>
					<dl><dt>杯数</dt><dd>2-5杯</dd></dl>
					<dl><dt>フィルターサイズ</dt><dd>1×2</dd></dl>
					<dl><dt>交換用ポット</dt><dd>CP-58</dd></dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>


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
