<?php
//base
include ("../../function.php");
$content = get_id_data('10013');
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
$itemShortage = 0;
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
		$smile_id_test = "45";//テストFLP用リンクナンバー
		$smile_id_production = "45";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-shoes-img1.png"
              data-retina="../../lib/img/smile/article/exchange-shoes-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-shoes-img2.png"
              data-retina="../../lib/img/smile/article/exchange-shoes-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-shoes-img3.png"
              data-retina="../../lib/img/smile/article/exchange-shoes-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">梅雨・雨天時に大活躍。きっちり乾燥してカビやニオイを防ぎます</h4>
          <p>布製のスニーカーはもちろん、長靴やデリケートな革靴にもお使いいただけるくつ専用の乾燥機です。乾きにくいつま先まできちんと乾燥できるのでカビやニオイも防いでくれます。</p>
          <h4 class="lottery-point__ttl">シューズボックスに収納できるコンパクトサイズ</h4>
          <p>折りたたみ式のスタンドが付いてとってもコンパクト。シューズボックスなど狭い場所にもすっぽり収まるサイズなので、場所を選ばず手軽に収納できます。</p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>「急な雨で大切な靴が濡れてしまった…」「子どもが毎日靴を汚してくるけど、一晩じゃ乾かないので洗うのをあきらめていた…」のようにお困りの方の強い味方。例えば<strong>スニーカーなら、洗ってから約50分で乾かすことができます</strong>。これなら気兼ねなく洗えますね♪</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>本体サイズ</dt>
            <dd>約 幅150 x 奥行90 x 高さ220mm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約 670 g</dd>
          </dl>
          <dl>
            <dt>カラー</dt>
            <dd>ブラウン</dd>
          </dl>
          <dl>
            <dt>消費電力</dt>
            <dd>標準モード時:150 W<br>革靴モード時:135 W</dd>
          </dl>
          <dl>
            <dt>電源</dt>
            <dd>AC 100 V　50 - 60 Hz</dd>
          </dl>
          <dl>
            <dt>電源コード</dt>
            <dd>約 1.8 m</dd>
          </dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br>※カラーはブラウンのみとなります。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>


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
