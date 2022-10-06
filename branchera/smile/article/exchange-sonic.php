<?php
//base
include ("../../function.php");
$content = get_id_data('10009');
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
		$smile_num = "50,000";//必要スマイル数
		$smile_id_test = "49";//テストFLP用リンクナンバー
		$smile_id_production = "49";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-sonic-img1.png"
              data-retina="../../lib/img/smile/article/exchange-sonic-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-sonic-img2.png"
              data-retina="../../lib/img/smile/article/exchange-sonic-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-sonic-img3.png"
              data-retina="../../lib/img/smile/article/exchange-sonic-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">歯垢除去力は手磨きの約10倍、約1週間で自然な白い歯へ</h4>
          <p>1人1人の歯と歯ぐきの形に合わせて変形するアダプティブクリーンブラシヘッドは、ゴム製なので歯の表面のカーブにぴったりとフィット。歯に触れる表面積が約4倍、歯肉腺や歯間の歯垢を最大10倍除去します。また、ホワイトモードなら歯の表面に付着したステインも強力に除去します。</p>
          <h4 class="lottery-point__ttl">2つの充電方法で、ご家庭でも旅行先でも簡単便利</h4>
          <p>ダイヤモンドクリーンは2つの充電方式を採用。充電グラスなら、歯ブラシを置くだけで充電が可能。もちろん普通のグラスとして使用することもできます。また、トラベルケースはコンセントに差し込んでの充電の他、PCにUSB接続して充電することもできます。</p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>PHILIPSが独自に開発した<strong>音波水流（1分間に31,000回の高速振動と幅広い振幅の組み合わせ）で歯間と歯肉縁を優しくしっかりと磨いてくれます</strong>。手磨きでは実現できない、次世代のオーラルケアをぜひご体感ください！</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>ダイヤモンドクリーン 1本、アダプティブクリーンブラシ（レギュラー） 1本、ダイヤモンドクリーンブラシ（コンパクト） 1本、舌磨きブラシヘッド 1本、 充電グラス 1個、充電トラベルケース（USB電源アダプター/USBケーブル付き）</dd>
          </dl>
          <dl>
            <dt>ブラシ振動数</dt>
            <dd>約31,000ブラシストローク/分</dd>
          </dl>
          <dl>
            <dt>対応電圧</dt>
            <dd>100-240V (海外電圧対応可能)</dd>
          </dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。<br><b class="u-color__red">※ただいま一時的に商品が欠品となっている影響で、発送は2018年2月以降になります。予めご了承ください。</b></small>


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
