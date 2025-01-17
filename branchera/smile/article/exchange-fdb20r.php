<?php
//base
include ("../../function.php");
$content = get_id_data('10004');
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
		$smile_id_test = "12";//テストFLP用リンクナンバー
		$smile_id_production = "12";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-fdb20r-img1.png"
              data-retina="../../lib/img/smile/article/exchange-fdb20r-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-fdb20r-img2.png"
              data-retina="../../lib/img/smile/article/exchange-fdb20r-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-fdb20r-img3.png"
              data-retina="../../lib/img/smile/article/exchange-fdb20r-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
      <h4 class="lottery-point__ttl">おしゃれな自転車で街を颯爽と駆け抜ける！</h4>
      <p>アメリカ車を代表するブランド、シボレーの折りたたみ自転車。シンプルなデザインにシボレーのエンブレムが光る、スタイリッシュな自転車です。街に、アウトドアに、おしゃれな自転車で他の人と差をつけましょう！</p>
      <h4 class="lottery-point__ttl">車に乗せられる！狭いスペースに置ける！</h4>
      <p>半分に折りたためばコンパクトになるので、遠くへ持ち運んで乗りたい人にも、収納場所がない人にも最適。見た目も実用性も兼ね揃えた折りたたみ自転車です。</p>
			</div>


   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>本体サイズ</dt>
            <dd>■組立時：約 幅143 × 奥行58 × 高さ99cm　■折畳時：80 x 45.5 x 56cm</dd>
          </dl>
          <dl>
            <dt>タイヤサイズ</dt>
            <dd>20インチ</dd>
          </dl>
          <dl>
            <dt>カラー</dt>
            <dd>ホワイト</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約 13.5kg</dd>
          </dl>
          <dl>
            <dt>材質</dt>
            <dd>■本体：スチール　■リム：アルミ合金</dd>
          </dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。<br><span style="color:red; font-weight:bold;">※3月下旬入荷予定</span></small>


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
