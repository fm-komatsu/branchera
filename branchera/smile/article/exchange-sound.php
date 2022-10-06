<?php
//base
include ("../../function.php");
$content = get_id_data('10008');
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
$itemShortage = 1;
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
		$smile_id_test = "50";//テストFLP用リンクナンバー
		$smile_id_production = "50";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-sound-img1.png"
              data-retina="../../lib/img/smile/article/exchange-sound-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-sound-img2.png"
              data-retina="../../lib/img/smile/article/exchange-sound-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-sound-img3.png"
              data-retina="../../lib/img/smile/article/exchange-sound-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">こだわり抜いたデザインから生まれる、透明感のある美しい音色</h4>
          <p>有機ガラス管の端面を加振器で上下に振動させることによって音を出す新しい音作り。息をのむような、今までに聞いたことがない、目の前で歌っているような、リアル感溢れる音色で部屋中を満たします。</p>
          <h4 class="lottery-point__ttl">気軽に持ち運べてワイヤレスに楽しめる</h4>
          <p>スマホやウォークマンなどとブルートゥース接続で音楽再生可能。また充電式のバッテリー内蔵のため、室内はもちろん、テラスや屋外のキャンプ場など、好きな場所に持ち運んでワイヤレスで音楽を楽しめます。<br><small class="cap u-small">＊防水・防塵対応ではありません。</small></p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>スピーカーとしての性能はもちろん、インテリアとしても秀逸な商品です。住空間に溶け込む素材感とたたずまいなので、<strong>ダイニングで家族と囲んで利用したり、友人とのホームパーティで雰囲気を盛り上げたり</strong>と、さまざまなシーンで活躍してくれます。</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>本体、ACアダプター、電源コード、クリーニングクロス</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>約&Phi;82mm×303mm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約920g（充電池を含む）</dd>
          </dl>
          <dl>
            <dt>電源形式</dt>
            <dd>リチウムイオンバッテリー、AC電源</dd>
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
