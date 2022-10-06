<?php
//base
include ("../../function.php");
$content = get_id_data('3006');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「'.$pageTtl.'」-'.siteName();
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
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<img
				data-src="../../lib/img/gift/kasikosh/main.png"
				data-retina="../../lib/img/gift/kasikosh/main@2x.png"
				alt="ブランド品・貴金属などの無料宅配買取「5,000円以上で1,000円UP」"
				style="max-width:753px;"
				class="u-img__max">
				<p>会員さま限定で “ブランド品・貴金属などの無料宅配買取「5,000円以上で1,000円UP」” を実施いたします。忙しいあなたも、ご自宅から商品を送るだけで安心買取・簡単3ステップ。お得なこの機会に、ぜひ会員さま特典をご利用ください。</p>


				<div class="u-assist">
					<div class="u-float__left u-position__center">
						<img
						data-src="../../lib/img/gift/kasikosh/logo.png"
						data-retina="../../lib/img/gift/kasikosh/logo@2x.png"
						alt="カシコシュロゴ"
						style="max-width:116px;"
						class="u-img__max"
						>
					</div>
					<p class="mt0">カシコシュは、あなたの「もう使わない、使えない品物」を次のお客さまへ届けるお手伝いをする、長谷工グループの総合リサイクルショップです。<br><a href="http://www.haseko.co.jp/kasikosh/" target="_blank" rel="nofollow" class="u-icon">カシコシュウェブサイトはこちら</a></p>
				</div>

				<?php
				$useName = "宅配買取";
				$useNameAct = "お申し込みを";
				$useLinks = $base_url.'/form/form-kasikosh/';
				include ($inc_path."/lib/inc/page/_gift/__u-use.php");
				?>

			</section>
			<section class="main__item">

				<h4 class="u-ttl__m">こんなお品物があったら、ご自宅から、カシコシュの無料宅配買取へ</h4>
				<div class="u-assist">
					<p class="mt0">時計・アクセサリー / 貴金属（金・プラチナ・ダイヤモンドなど） / ブランドバッグ / ブランド小物 / 衣料品 / 和服 / 靴 / 切手 など</p>
					<p><strong>上記のほかにも、無料宅配買取をご希望のお品物がある場合は、お気軽にお問い合わせください。</strong></p>
				</div>

				<h4 class="u-ttl__m">簡単3ステップ！ 無料宅配買取手順</h4>
				<img
				data-src="../../lib/img/gift/kasikosh/flow.png"
				data-srcset="../../lib/img/gift/kasikosh/flow-img-sp@2x.png 420w,../../lib/img/gift/kasikosh/flow.png"
				alt="簡単3ステップ！ 無料宅配買取手"
				style="max-width:699px;"
				class="u-img__center u-img__max mb2">

				<div class="u-assist mb3">
					TEL：0428-32-6591（営業時間／平日10:00～18:00まで） 担当 中村（なかむら）
				</div>

				<?php
				$useName = "宅配買取";
				$useNameAct = "お申し込みを";
				$useLinks = $base_url.'/form/form-kasikosh/';
				include ($inc_path."/lib/inc/page/_gift/__u-use.php");
				?>

				<h4 class="u-ttl__m">カシコシュWEB店舗のご紹介</h4>
				<div class="u-list__dl">
					<dl>
						<dt><a href="http://sellinglist.auctions.yahoo.co.jp/user/kasikosh" target="_blank" rel="nofollow" class="u-icon">カシコシュ ヤフオク！店</a></dt>
						<dd>カシコシュは「ヤフオク！」にも出店中。賢くお買物をするならこちら。</dd>
					</dl>
				</div>
			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
