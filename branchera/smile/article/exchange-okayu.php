<?php
//base
include ("../../function.php");
$content = get_id_data('10005');
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
		$smile_num = "10,000";//必要スマイル数
		$smile_id_test = "16";//テストFLP用リンクナンバー
		$smile_id_production = "16";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-okayu-img1.png"
              data-retina="../../lib/img/smile/article/exchange-okayu-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-okayu-img2.png"
              data-retina="../../lib/img/smile/article/exchange-okayu-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-okayu-img3.png"
              data-retina="../../lib/img/smile/article/exchange-okayu-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">和食の名店の味わいをご家庭で</h4>
          <p>ホテルオークラ東京の和食・天ぷらの名店「山里」の、風味豊かなおかゆと雑炊スープをセットで。あん・玉子の2種類のおかゆと、松茸・蟹・帆立の3種類の雑炊スープをご家庭でお楽しみください。温めるだけでお召し上がりいただけるレトルトタイプながらも、できたてのような味わいを堪能していただけます。</p>
          <h4 class="lottery-point__ttl">贈り物としても喜ばれる名店の味</h4>
          <p>高級感のある包装で、贈答用にも最適。お祝いやお礼、ご挨拶にお見舞いなど、どなたにもお喜びいただける逸品です。</p>
        </div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>セット内容：おかゆ（特製あん付） ×1　玉子がゆ×1　雑炊スープ（松茸・蟹・帆立）×各2</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>約 幅37.0 × 奥行30.5 × 高さ5.0cm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>おかゆ（特製あん付）（おかゆ：250ｇ　特製あん：50ｇ）　玉子がゆ（250ｇ） 雑炊スープ 松茸　（250ｇ）　雑炊スープ　蟹（250ｇ）　雑炊スープ　帆立　（250ｇ）</dd>
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
