<?php
//base
include ("../../function.php");
$content = get_id_data('10010');
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
		$smile_id_test = "48";//テストFLP用リンクナンバー
		$smile_id_production = "48";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-irobot-img1.png"
              data-retina="../../lib/img/smile/article/exchange-irobot-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-irobot-img2.png"
              data-retina="../../lib/img/smile/article/exchange-irobot-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-irobot-img3.png"
              data-retina="../../lib/img/smile/article/exchange-irobot-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
      <h4 class="lottery-point__ttl">水を噴きつけ、こびりついた汚れ・ベタつきをスッキリ拭き取り</h4>
      <p>食べこぼしやこぼれた飲み物のベタつきも、キレイさっぱりと拭き取ります。障害物を感知して動くので、壁や家具、ラグなどに水を噴きつけることもありません。</p>
      <h4 class="lottery-point__ttl">狭い場所もスイスイ入り、自分で考えながら拭き掃除してくれます</h4>
      <p>四角くコンパクトなボディ（幅178mm・高さ84mm）のブラーバ ジェットは、家具のすき間や狭いスペースにもスイスイ入り込みます。規則正しいパターンで動いて、システムキッチンの脚まわりやソファの下なども、小回りを利かせてくまなくキレイにしてくれます。</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>ブラーバジェットは汚れの種類に合わせて<strong>３つのクリーニングパッドをご用意</strong>しています。<br>パッドをセットしたら、後は<strong>本体のタンクに水を入れてCLEANボタンを押すだけで自動的に最適な清掃モードを選択</strong>してくれるので、面倒な操作も必要ありません♪</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>本体、バッテリー、バッテリー充電器、使い捨てウェットモップパッド（2枚）、使い捨てダンプスウィープパッド（2枚）、使い捨てドライスウィープパッド（2枚）</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>幅178mm×奥行170mm×高さ84mm</p>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約1.2kg（バッテリー装着時/クリーニングパッド除く）</dd>
          </dl>
          <dl>
            <dt>電源方式</dt>
            <dd>充電式リチウムイオン電池（充電時間：最大2時間）</dd>
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
