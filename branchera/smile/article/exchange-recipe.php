<?php
//base
include ("../../function.php");
$content = get_id_data('10001');
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
		$smile_num = "100,000";//必要スマイル数
		$smile_id_test = "10";//テストFLP用リンクナンバー
		$smile_id_production = "10";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-recipe-img1.png"
              data-retina="../../lib/img/smile/article/exchange-recipe-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-recipe-img2.png"
              data-retina="../../lib/img/smile/article/exchange-recipe-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">素材の旨みをそのままぎゅっと！</h4>
          <p>素材の水分を活用して調理するので、素材本来のおいしさがぎゅっと凝縮されます。普段の調理では出せないような味を実現！</p>
          <h4 class="lottery-point__ttl">栄養素がたくさん残るから健康的</h4>
          <p>野菜などの食材に含まれる水分を活用して調理するので、調理によって失われやすいビタミンCや葉酸などもより多く残ります。煮物も必要最低限の調味料だけで作れるので、栄養成分の流出が抑えられるうえにヘルシー！</p>
          <h4 class="lottery-point__ttl">自動調理で簡単楽々1品</h4>
          <p>タイミングがむずかしいかきまぜや、コツがいる火加減もすべて自動でコントロール。焦げてしまいがちなカレーやシチュー、味のしみ込み加減がむずかしい煮物も、手間なしでおいしく仕上げます。さらに、食材の量を自動検知するので、分量を選ばずに加熱できます。</p>
			  </div>
      </div>


   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
        <dl>
            <dt>セット内容</dt>
            <dd>■本体</dd><dd>■蒸し板</dd><dd>■保存専用ふた</dd><dd>■メニュー集</dd>
          </dl>
          <dl>
            <dt>消費電力</dt>
            <dd>600W</p>
          </dl>
          <dl>
            <dt>定格電圧</dt>
            <dd>交流100V 50-60Hz 共用</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>約 幅364 × 奥行280 × 高さ224mm</dd>
          </dl>
          <dl>
            <dt>質量</dt>
            <dd>約 5.2kg</dd>
          </dl>
          <dl>
            <dt>定格容量</dt>
            <dd>約 1.6L</dd>
          </dl>
          <dl>
            <dt>設定温度（発酵）</dt>
            <dd>35～65℃</dd>
          </dl>
          <dl>
            <dt>最大予約設定時間</dt>
            <dd>12時間</dd>
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
