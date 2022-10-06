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
		$smile_id_test = "18";//テストFLP用リンクナンバー
		$smile_id_production = "18";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-solokaffe-img1.png"
              data-retina="../../lib/img/smile/article/exchange-solokaffe-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-solokaffe-img2.png"
              data-retina="../../lib/img/smile/article/exchange-solokaffe-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-solokaffe-img3.png"
              data-retina="../../lib/img/smile/article/exchange-solokaffe-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">おしゃれでコンパクトなコーヒーメーカー</h4>
          <p>1カップ分のコーヒーを淹れられるコーヒーメーカー。スタイリッシュなデザインで、インテリアになじみます。500mlペットボトルと変わらないくらいのコンパクトなサイズなので、ちょっとしたスペースにもすっきり置けます。</p>
          <h4 class="lottery-point__ttl">コーヒーの風味を最大限活かすゴールドフィルター</h4>
          <p>ゴールドフィルターは、金属のコーヒーフィルター。豆の成分がダイレクトに抽出されるので、紙のフィルターと比べて、コーヒー本来の味や香りを最大限楽しむことができます。洗って繰り返し使えるので、ゴミが少なく経済的。</p>
          <h4 class="lottery-point__ttl">耐熱ガラスのグラス付きで、コーヒーをさらに楽しむ</h4>
          <p>二重構造のダブルウォールグラス付き。保温・保冷効果が長続きするうえに、アツアツのコーヒーを淹れても外側が熱くなりにくく快適です。氷を入れたグラスに直接コーヒーを抽出する、急冷アイスコーヒーにも対応。急速に冷やすことで、コーヒー本来の風味をしっかりと楽しめます。</p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>熱々のホットコーヒーはもちろん、急冷のアイスコーヒーも淹れたての味わいが楽しめるように<strong>耐熱のダブルウォールグラスがセット</strong>になっています。この<strong>グラスは職人による手作りなので、ひとつひとつ大きさや形に違いがある</strong>んですよ♪</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>本体、スマートカセット（ウォータータンク+フィルターホルダー）、ゴールドフィルター、ダブルウォールグラス、計量スプーン、専用レシピシート</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>約 幅9.0 × 奥行16.5 × 高さ21.0cm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約710g（本体600g＋グラス110g）</dd>
          </dl>
          <dl>
            <dt>消費電力</dt>
            <dd>350W</dd>
          </dl>
          <dl>
            <dt>定格電圧</dt>
            <dd>100V 50/60Hz</dd>
          </dl>
          <dl>
            <dt>容量</dt>
            <dd>約200ml</dd>
          </dl>
          <dl>
            <dt>材質</dt>
            <dd>本体：ABS樹脂/TRITAN樹脂、グラス：耐熱ガラス、トレイ：ステンレス</dd>
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
