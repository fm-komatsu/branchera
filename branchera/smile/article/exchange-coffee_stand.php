<?php
//base
include ("../../function.php");
$content = get_id_data('10015');
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
		$smile_id_test = "101";//テストFLP用リンクナンバー
		$smile_id_production = "101";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-coffee_stand-img1.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-coffee_stand-img1@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-coffee_stand-img2.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-coffee_stand-img2@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-coffee_stand-img3.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-coffee_stand-img3@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">手軽に本格ドリップコーヒーが作れる</h4>
          <p>コンパクトサイズなのに、一度に最大カップ5杯分・600mlのコーヒーを淹れられます。使い方もとっても簡単！タンクに水を、フィルターにコーヒー粉をそれぞれ入れて、ガラスポットをセットし、電源スイッチを入れるだけ。カップ5杯分の抽出時間は約6分とスピーディーなため、朝の忙しい時間にも家族みんなのコーヒーを淹れることができます。</p>
          <h4 class="lottery-point__ttl">ペーパーフィルターを使わないので経済的</h4>
          <p>洗って繰り返し使える「パーマネントフィルター」がついているため、ペーパーフィルターを使わなくても本格的なドリップコーヒーを楽しむことができます。経済的かつ余計なゴミを出さないので、環境に優しくとってもエコ。</p>
          <h4 class="lottery-point__ttl">お手入れラクラク、オートオフ機能で安全</h4>
          <p>付属のガラスポット、フィルター、計量スプーンなど、本体以外は水洗いできるので、いつでも清潔にお使いいただけます。また、スイッチを入れてから約30分後に、自動で電源が切れるオートオフ機能付きなので、消し忘れの心配がなく安全。さらに、コーヒーを淹れたあともオートオフまで自動保温になるため、温かさをキープすることができます。</p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>デザインと機能を兼ね備えた“レコルト”のコーヒーメーカー。本格的なドリップコーヒーを楽しめるうえに、高さ25センチとコンパクトなサイズで、置き場所にも困ることはありません。また、レトロ感のあるデザインで、インテリアの一部としても楽しむことができます♪</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>本体・ガラスポット・パーマネントフィルター・フィルターホルダー・計量スプーン</dd>
          </dl>
          <dl>
            <dt>カラー</dt>
            <dd>ブラック</dd>
          </dl>
          <dl>
            <dt>サイズ</dt>
            <dd>本体（ガラスポットセット時）：約 幅14.5 × 奥行20.5 × 高さ25.0cm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約1.1kg</dd>
          </dl>
          <dl>
            <dt>消費電力</dt>
            <dd>550W</dd>
          </dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br><br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>


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
