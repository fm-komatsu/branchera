<?php
//base
include ("../../function.php");
$content = get_id_data('10003');
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
		$smile_id_test = "14";//テストFLP用リンクナンバー
		$smile_id_production = "14";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-truesleeper-img1.png"
              data-retina="../../lib/img/smile/article/exchange-truesleeper-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-truesleeper-img2.png"
              data-retina="../../lib/img/smile/article/exchange-truesleeper-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>

				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">今まで体験したことのない寝心地を</h4>
          <p>体の凹凸に合わせて自在に変形する低反発マットレスが、体全体を優しく包み込むようにフィット。首、肩、腰に負担をかけないから、楽な姿勢でぐっすり快眠！翌朝の目覚めのすっきり感が違います。</p>
          <h4 class="lottery-point__ttl">お使いのベッドや布団の上に重ねるだけ</h4>
          <p>特別なベッドやセッティングなどは必要ありません。今お使いのベッドや布団の上から重ねるだけで、いつもの寝具を一気にグレードアップ！届いた日からすぐにお使いいただけます。</p>
			  </div>
      </div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
        <dl>
            <dt>セット内容</dt>
            <dd>■本体</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>■本体：約 幅970 × 長さ1950 × 厚さ50mm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約 4.6kg（本体のみ）</dd>
          </dl>
          <dl>
            <dt>材質</dt>
            <dd>■本体：ウレタンフォーム</dd>
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
