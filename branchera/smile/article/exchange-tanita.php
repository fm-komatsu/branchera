<?php
//base
include ("../../function.php");
$content = get_id_data('10025');
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
		$smile_num = "9,000";//必要スマイル数
		$smile_id_test = "186";//テストFLP用リンクナンバー
		$smile_id_production = "186";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              src="<?php echo $img_url ?>/smile/article/exchange-tanita-img1@2x.jpg"
              alt="<?php echo $pageTtl?>｜image"
              style="max-width:350px;"
              class="u-img__max"
							loading="lazy"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              src="<?php echo $img_url ?>/smile/article/exchange-tanita-img2@2x.jpg"
              alt="<?php echo $pageTtl?>｜image"
              style="max-width:350px;"
              class="u-img__max"
							loading="lazy"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              src="<?php echo $img_url ?>/smile/article/exchange-tanita-img3@2x.jpg"
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
      <h4 class="lottery-point__ttl">これ1台で体重、体脂肪率、BMI、内臓脂肪レベルを一気に測定！</h4>
      <p>本製品は、健康をサポートする商品を多数販売するメーカー・タニタの体組成計。ご自身の身長や年齢などを設定するだけで、手軽に体の状態をチェック♪体重だけでなく、体脂肪率、BMI、内臓脂肪レベルなどを細かく測定することができます！電源のON/OFFの操作も必要なく、乗ると自動で測定開始！子どもからご高齢の方まで、どの世代でも使いやすい体組成計です♪</p>
      <h4 class="lottery-point__ttl">軽くてコンパクト♪強化ガラス仕様のスタイリッシュなデザイン！</h4>
      <p>強化ガラスを使用したスタイリッシュなデザインなので、おしゃれなインテリアと一緒に置いても浮きません！コンパクトかつ軽いので、移動もラクチン♪洗面所で、リビングで、寝室で…と、いろいろな場所に持ち運んで使うことができます。立てかけ収納ができるので、しまうときの場所をとらないのもポイント！</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>適正体重をキープするためには、正しい数値を測定することが大切です♪<br>本製品のおすすめポイントは、便利な「乗るピタ機能」が付いていること！事前にデータを入力しておけば、乗るだけで登録者の中から測定者を認識し、自動で測定・結果表示してくれる機能です。自分でボタンやスイッチを押すことなく、即測定できます！ぜひ日々の体調管理にお役立てください♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
				<h5 class="u-terms__ttl">詳細スペック</h5>
				<div class="u-terms__inner u-list__dl_table_long2">
					<dl><dt>ひょう量（最大計量）</dt><dd>150 kg</dd></dl>
					<dl><dt>最小表示</dt><dd>0 ～ 100kgまで 100g　100 ～ 150kgまで 200g</dd></dl>
					<dl><dt>体脂肪率測定</dt><dd>0.1%単位 対象年齢：6 ～ 99才 判定：やせ/-標準/＋標準/軽肥満/肥満</dd></dl>
					<dl><dt>BMI</dt><dd>0.1単位 対象年齢：6 ～ 99才</dd></dl>
					<dl><dt>内臓脂肪レベル</dt><dd>0.5レベル単位 対象年齢：18 ～ 99才 判定：標準/やや過剰/過剰</dd></dl>
					<dl><dt>アスリートモード</dt><dd>あり</dd></dl>
					<dl><dt>登録人数</dt><dd>5人</dd></dl>
					<dl><dt>体重のみ測定機能</dt><dd>あり</dd></dl>
					<dl><dt>ゲストモード</dt><dd>あり （呼出ボタンから選択）</dd></dl>
					<dl><dt>主な付属品</dt><dd>取扱説明書（保証書付)、お試し用電池(単4形乾電池（R03）×4本）</dd></dl>
					<dl><dt>過去データ</dt><dd>前回値</dd></dl>
					<dl><dt>消費電流</dt><dd>最大 30 mA</dd></dl>
					<dl><dt>身長設定</dt><dd>90.0 ～ 220.0 cm （0.5 cm単位）</dd></dl>
					<dl><dt>年齢設定</dt><dd>生年月日設定：1900年1月1日～（6才以上）</dd></dl>
					<dl><dt>自動認識機能（乗るピタ）</dt><dd>あり</dd></dl>
					<dl><dt>表示文字高</dt><dd>28 mm</dd></dl>
					<dl><dt>電源</dt><dd>DC6V　単4形乾電池（R03）×4本</dd></dl>
					<dl><dt>主な材質</dt><dd>ABS、PE、強化ガラス、ステンレス</dd></dl>
					<dl><dt>JANコード</dt><dd>4904785814714</dd></dl>
					<dl><dt>商品寸法</dt><dd>幅 297mm ×  高さ 25mm × 奥行 210mm</dd></dl>
					<dl><dt>本体質量</dt><dd>約 1.4kg（乾電池含む）</dd></dl>
					<dl><dt>個装箱寸法</dt><dd>幅 337mm ×  高さ 41mm ×  奥行 254mm</dd></dl>
					<dl><dt>個装箱質量</dt><dd>約 1.6kg</dd></dl>
					<dl><dt>製造国</dt><dd>中国</dd></dl>
					<dl><dt>保証期間</dt><dd>1年</dd></dl>
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
