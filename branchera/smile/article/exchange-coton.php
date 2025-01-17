<?php
//base
include ("../../function.php");
$content = get_id_data('10012');
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
		$smile_num = "20,000";//必要スマイル数
		$smile_id_test = "46";//テストFLP用リンクナンバー
		$smile_id_production = "46";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-coton-img1.png"
              data-retina="../../lib/img/smile/article/exchange-coton-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-coton-img2.png"
              data-retina="../../lib/img/smile/article/exchange-coton-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-coton-img3.png"
              data-retina="../../lib/img/smile/article/exchange-coton-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
      <h4 class="lottery-point__ttl">手のひらサイズの洗濯機で、デリケート素材も自宅で簡単お洗濯</h4>
      <p>水洗いすると型崩れしやすいプリーツスカートやしわ加工のストールなど、デリケート素材についた汚れもピンポイントで部分洗いができるので、クリーニングに出す費用も大きく節約。家計にもうれしい商品です。</p>
      <h4 class="lottery-point__ttl">汚れをたたく、押し出す、洗い出す、の新技術を採用</h4>
      <p>コトンは水を噴射しながらたたいて汚れを落とす、新技術「押し出し洗い」を採用。1分間で約700回振動し、すすぎの水を出しながらたたいて繊維から汚れを押し出します。汚れがついた直後であれば、最短約30秒で洗濯することもできます。</p>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>毎日洗濯をしていても、シャツのエリ・そでの黄ばみや汚れは、なかなか落ちにくいもの。<br>そんなときはピンポイント洗濯ができるコトンにおまかせ。<strong>コトンで予洗いして、あとは普段通り洗濯機に入れるだけで、ガンコな黄ばみや汚れもサッパリ綺麗に</strong>なります。</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>本体サイズ</dt>
            <dd>幅46mm×奥行46mm×高さ176mm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約 200 g（キャップ・電池を除く）</dd>
          </dl>
          <dl>
            <dt>カラー</dt>
            <dd>スカーレットオレンジ</p>
          </dl>
          <dl>
            <dt>電源方式</dt>
            <dd>単4形アルカリ乾電池または単4形充電式ニッケル水素電池（3本/別売り）</dd>
          </dl>
          <dl>
            <dt>付属品</dt>
            <dd>たたきマット</dd>
          </dl>
        </div>
      </div>
    <small class="u-small">※写真はイメージです。<br>※カラーはスカーレットオレンジのみとなります。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>


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
