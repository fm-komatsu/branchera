<?php
//base
include ("../../function.php");
$content = get_id_data('10044');
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

$exchangeItem = "exchange-hot_plate";

// 欠品フラグ
$itemShortage = '1';

?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		$smile_flug = "exchange";// exchange or lottery or service or no_flp
		$smile_num = "20,000";//必要スマイル数
		$smile_id_test = "192";//テストFLP用リンクナンバー
		$smile_id_production = "192";//本番FLP用リンクナンバー
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
      <h4 class="lottery-point__ttl">「焼く」「煮る」両方に使える！便利なホットプレート
</h4>
      <p>本製品は深さ4cmの深型ホットプレート！「焼く」「煮る」両方に使うことができるのが大きな特徴です。具や汁がこぼれにくく、パエリアやブイヤベースなど、さまざまなメニューの調理ができます。<br>そしてプレート表面は、浅い凹凸のダイヤカットディンプル仕上げ。油なじみがよくこげつきにくいので、お好み焼きやホットケーキなどの粉物を焼く際にもぴったりです。</p>
      <h4 class="lottery-point__ttl">丸洗い可能、2.5mのロングコード…使いやすい工夫がたくさん！</h4>
      <p>本製品の大きな特徴は、何と言っても機能性が高く使いやすいこと！プレートには耐久性に優れたチタンセラミックコートを採用しているので、丈夫で傷つきにくく、金属ベラも使用可能です。さらに、プレートは丸洗いOKで、簡単にお手入れできます！電源コードは2.5mの長さなので、コンセントが遠くても大丈夫。温度調節プラグも軽い力でセットできるのに、外れにくい安心仕様♪毎日使うのにぴったりの製品です！</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>スタンダードで、暮らしの中で使いやすいアイテムが揃っている「STAN.」シリーズの本製品。上でご紹介したポイント以外にも、使いやすくするための機能や工夫がたくさん！そのひとつが、プレートのフチに手が触れにくくするための「本体ガード」です。熱いプレートに手が触れにくい構造なので、お子さまとの調理の際も安心して使えます！一家の食卓に、ぜひこのホットプレートを加えてください♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
				<h5 class="u-terms__ttl">詳細スペック</h5>
				<div class="u-terms__inner u-list__dl_table_long2">
					<dl>
						<dt>型名</dt>
						<dd>EA-FA10</dd>
					</dl>
					<dl>
						<dt>電源</dt>
						<dd>交流100V 50 / 60 Hz</dd>
					</dl>
					<dl>
						<dt>消費電力</dt>
						<dd>1200W</dd>
					</dl>
					<dl>
						<dt>コードの長さ</dt>
						<dd>2.5m</dd>
					</dl>
					<dl>
						<dt>外形寸法</dt>
						<dd>幅445 × 奥行305 × 高さ140 （mm）</dd>
					</dl>
					<dl>
						<dt>質量</dt>
						<dd>約4.8kg</dd>
					</dl>
					<dl>
						<dt>温度調節の範囲</dt>
						<dd>保温〜250℃</dd>
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
