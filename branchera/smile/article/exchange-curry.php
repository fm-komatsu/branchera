<?php
//base
include ("../../function.php");
$content = get_id_data('10014');
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
$itemEnd = '※商品入れ替えにつき1/7でご案内終了になります。';

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
		$smile_id_test = "44";//テストFLP用リンクナンバー
		$smile_id_production = "44";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-curry-img1.png"
              data-retina="../../lib/img/smile/article/exchange-curry-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-curry-img2.png"
              data-retina="../../lib/img/smile/article/exchange-curry-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-curry-img3.png"
              data-retina="../../lib/img/smile/article/exchange-curry-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
      <h4 class="lottery-point__ttl">フォン・ド・ボーソースをベースにしたこだわりの味わい</h4>
      <p>フォン・ド・ボーソースをベースに、牛肉、野菜、果実、特製スパイスを贅沢に使用したコクのある本格派の中辛タイプのカレーです。こだわりの味わいをぜひお試しください。</p>
      <h4 class="lottery-point__ttl">20袋入りなので、いろいろなシーンでお使いいただけます</h4>
      <p>普段の食事でちょっとした贅沢をしたいときはもちろん、大人数での急な来客の際にも安心の20袋入りです。ご家庭でカレーパーティーなどを開いてみるのもいいですね。</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>ご家庭でレストランの本格的な味を再現したレトルトカレーのセットです。お湯で温めるか、お皿に移して電子レンジで温めるだけでＯＫなので、<strong>急な来客時の対応や、ちょっと家事をお休みしたい時などいろいろなシーンで活用できる</strong>便利で美味しい商品ですよ♪</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>レストラン レトルトギフト ディナービーフカレー 中辛200ｇ×20袋</dd>
          </dl>
          <dl>
            <dt>原材料</dt>
            <dd>野菜・果実（玉ねぎ、人参、リンゴ、バナナ、しょうが、にんにく）、牛肉、小麦粉、食用油脂 （牛脂、豚脂）、砂糖、乳糖、食塩、カレー粉、ソテー・ド・オニオン、トマトケチャップ、酵  母エキス、ビーフエキス、フォン・ド・ボーソース、香辛料、ソースパウダー、乳たん白、チキンブイヨン、脱脂粉乳、ぶどう糖、バター、調味料（アミノ酸など）、カラメル色素、酸味料、（その他大豆由来原材料を含む）</dd>
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
