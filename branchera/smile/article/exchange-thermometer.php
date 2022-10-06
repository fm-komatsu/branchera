<?php
//base
include ("../../function.php");
$content = get_id_data('10045');
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

$exchangeItem = "exchange-thermometer";

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
		$smile_num = "5,000";//必要スマイル数
		$smile_id_test = "193";//テストFLP用リンクナンバー
		$smile_id_production = "193";//本番FLP用リンクナンバー
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
      <h4 class="lottery-point__ttl">見やすい大型表示とバックライト！暗い場所でも大丈夫♪</h4>
      <p>本製品は、健康をサポートする商品を多数販売するメーカー・タニタの体温計。文字高約14mmの大型表示で、測定結果が見やすいのがポイントです。バックライトも搭載されているので、暗い場所でもばっちり体温が確認できます。就寝前や夜中の急な発熱時にも役立つ体温計です。</p>
      <h4 class="lottery-point__ttl">やわらかく、曲がる測定部でしっかりフィット</h4>
      <p>測定部は曲がる素材を使用した「フレキシブル測定部」。脇の真ん中にしっかりフィットするので、ズレることなく正しい体温が測定できます。不意に動いてしまう赤ちゃんや、元気なお子さまの体温測定でも安心です。さらに、測定部は水洗いができるので、常に清潔を保つことができます。</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>日々の体調管理に欠かせない体温計。<br>本製品は、前回の測定結果を記録する「前回値メモリー」機能が搭載されているので、数値を忘れたり、消してしまっても後から確認可能！<br>シンプルながら、使いやすい体温計です。一家に1本あると役立つこと間違いなし！</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
				<h5 class="u-terms__ttl">詳細スペック</h5>
				<div class="u-terms__inner u-list__dl_table_long2">
					<dl>
						<dt>主な材質</dt>
						<dd>ABS、PMMA、TPE、ステンレス</dd>
					</dl>
					<dl>
						<dt>オートパワーオフ</dt>
						<dd>あり</dd>
					</dl>
					<dl>
						<dt>電源</dt>
						<dd>DC3V　コイン形リチウム電池（CR2032）×1個</dd>
					</dl>
					<dl>
						<dt>主な付属品</dt>
						<dd>取扱説明書(保証書、添付文書付き)、EMC技術情報、収納ケース、お試し用電池(コイン形リチウム電池（CR2032）×1個) </dd>
					</dl>
					<dl>
						<dt>電池寿命</dt>
						<dd>約9,900回（予測検温、手動オフ） 約1,800回（実測検温、手動オフ）</dd>
					</dl>
					<dl>
						<dt>測定方式</dt>
						<dd>予測・実測</dd>
					</dl>
					<dl>
						<dt>消費電流</dt>
						<dd>7.8ｍA以下</dd>
					</dl>
					<dl>
						<dt>測定部位</dt>
						<dd>腋下</dd>
					</dl>
					<dl>
						<dt>バックライト</dt>
						<dd>あり</dd>
					</dl>
					<dl>
						<dt>医療機器認証番号</dt>
						<dd>229AFBZX00027000</dd>
					</dl>
					<dl>
						<dt>電撃に対する保護の形式</dt>
						<dd>内部電源機器</dd>
					</dl>
					<dl>
						<dt>装着部の分類</dt>
						<dd>BF形装着部</dd>
					</dl>
					<dl>
						<dt>測定時間</dt>
						<dd>予測：約20秒 実測：約10分</dd>
					</dl>
					<dl>
						<dt>体温表示</dt>
						<dd>3桁表示、最小表示単位0.1℃ </dd>
					</dl>
					<dl>
						<dt>測温範囲</dt>
						<dd>32.0～42.0℃</dd>
					</dl>
					<dl>
						<dt>最大許容誤差</dt>
						<dd>32.0～42.0℃の範囲で±0.1℃（恒温水槽を用いて実測測定した場合）</dd>
					</dl>
					<dl>
						<dt>使用環境</dt>
						<dd>周囲温度範囲：10～40℃  相対湿度範囲：30～85％ RH</dd>
					</dl>
					<dl>
						<dt>輸送・保管環境</dt>
						<dd>周囲温度範囲：-20～60℃ 相対湿度範囲：10～95％ RH</dd>
					</dl>
					<dl>
						<dt>防浸性</dt>
						<dd>一部防浸形</dd>
					</dl>
					<dl>
						<dt>型式承認番号</dt>
						<dd>第H173号</dd>
					</dl>
					<dl>
						<dt>前回値表示</dt>
						<dd>あり</dd>
					</dl>
					<dl>
						<dt>告知音</dt>
						<dd>あり</dd>
					</dl>
					<dl>
						<dt>JANコード</dt>
						<dd>4904785647008</dd>
					</dl>
					<dl>
						<dt>商品寸法</dt>
						<dd>幅 136×  高さ 29 ×  奥行 15（mm）</dd>
					</dl>
					<dl>
						<dt>本体質量</dt>
						<dd>約 23g（電池含む） </dd>
					</dl>
					<dl>
						<dt>個装箱寸法</dt>
						<dd>幅 80×  高さ 186 ×  奥行 29（mm）</dd>
					</dl>
					<dl>
						<dt>個装箱質量</dt>
						<dd>約 80g</dd>
					</dl>
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
