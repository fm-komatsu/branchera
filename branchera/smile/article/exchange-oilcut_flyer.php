<?php
//base
include ("../../function.php");
$content = get_id_data('10016');
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
$itemShortageOilcut = 1;
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
		$smile_id_test = "49";//テストFLP用リンクナンバー
		$smile_id_production = "102";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");

		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-oilcut_flyer-img1.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-oilcut_flyer-img1@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-oilcut_flyer-img2.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-oilcut_flyer-img2@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-oilcut_flyer-img3.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-oilcut_flyer-img3@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">油を使わないので、ヘルシー</h4>
          <p>唐揚げやポテトフライなどの揚げ物を、空気と熱で調理するオイルカットフライヤー。油を使わないで作るので、余分なカロリーをおさえることができます。また、焼きすぎないので外はサクッサク、中はジューシー。油っこい料理を控えたい方や、健康的な毎日を送りたい方にオススメです。</p>
          <h4 class="lottery-point__ttl">使い方はとっても簡単</h4>
          <p>下ごしらえした食材をセットし、温度設定ダイアルを調整するだけで、美味しくムラのない揚げ物を作ることができます。揚げ物をあまり作ったことがない方や、料理が苦手な方でも簡単に調理することができます。</p>
					<h4 class="lottery-point__ttl">お手入れラクラクで調理中も快適</h4>
          <p>油を使わないので、後処理やコンロなどの掃除をする必要がありません。さらに、バスケットは丸洗いできるので後片づけがラクラク♪油の嫌な匂いも抑えられるので、快適に調理をすることができます。</p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>エビフライのようなメイン料理からドーナツなどのお菓子まで、幅広く作ることができます。直接火をあてないので焦がす心配がなく、料理が苦手という方にもピッタリ。火を使わず安全なので、お子さまと一緒に楽しく作ることができます♪</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>本体・耐熱シート・取扱説明書（保証書付）</dd>
          </dl>
          <dl>
            <dt>サイズ</dt>
            <dd>幅250×奥行き335×高さ330mm</dd>
          </dl>
          <dl>
            <dt>重量</dt>
            <dd>約5.5kg</dd>
          </dl>
					<dl>
            <dt>消費電力</dt>
            <dd>1400W</dd>
          </dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>


				<?php
					$content['title'] = '【ベルソス】オイルカットフライヤー ホワイト×レッド';
					include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
				?>

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
