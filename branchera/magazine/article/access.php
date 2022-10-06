<?php
//base
include ("../../function.php");
$content = get_id_data('2003');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//release date
$release_year = "2014";
$release_month ="11";
$release_day ="";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_town.php", "すてきな街見つけました" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img center">

				<img
				data-src="../../lib/img/magazine/nishidai80/index-main.png"
				data-retina="../../lib/img/magazine/nishidai80/index-main@2x.png"
				alt="23区内、大手町へ直通29分、池袋まで22分"
				style="max-width:720px;"
				class="u-img__max"
				>

			</div>

			<p>西台・高島平エリアの特徴は、何といっても都心が身近なことです。「大手町」駅へダイレクトで29分という近さは、オンタイムもオフタイムも充実したものにしてくれます。そして、都心が身近でありながら、ファミリーの暮らしにうれしい環境が整うのも、このエリアの特徴です。生活利便施設はもちろん、映画館や水族館といったレジャー施設も充実。都心を身近にゆったりと暮らしたい方にとっても、都心ライフをアクティブに楽しみたい方にとっても、暮らしやすい環境が広がるエリアです。</p>

			<h4 class="u-ttl__m">「高島平」駅から始発利用可。都心主要駅からの終電は0時前後。</h4>
			<figure class="img fr center">
				<img
				data-src="../../lib/img/magazine/nishidai80/index-sub-1.png"
				data-retina="../../lib/img/magazine/nishidai80/index-sub-1@2x.png"
				alt="「高島平」駅から始発利用可。都心主要駅からの終電は0時前後。"
				style="max-width: 360px;"
				class="u-img__max"
				>
				<figcaption><p class="cap left" style="margin-top: 0;"><span class="u-small">※imagephoto</span></p></figcaption>
			</figure>
			<p>西台・高島平エリアは、都営三田線の2つの駅が利用可能です。「高島平」駅では一部で始発電車も利用することができ、通勤混雑率も低めになっていることが、ビジネスパーソンには大きな魅力となっています。
				「西台」駅「高島平」駅から利用できる都営三田線は、「大手町」へダイレクトアクセス。沿線上の「新板橋」「巣鴨」「水道橋」「日比谷」などから15路線へ乗り継ぎが可能なため、新宿・渋谷方面へも30分以内でアクセスすることができます。</p>
				<p>さらに、都心主要駅からの最終電車が0時前後まで運行していることも、日々忙しいビジネスパーソンにとって大きな魅力となっています。</p>

				<h4 class="u-ttl__m">都心に近い、新宿11km圏内。<br>吉祥寺、成城学園前、田園都市、二子玉川と同じ距離件。</h4>
				<div class="img center">
					<img
					data-src="../../lib/img/magazine/nishidai80/index-area.png"
					data-retina="../../lib/img/magazine/nishidai80/index-area@2x.png"
					alt="エリア概念図"
					style="max-width: 556px;"
					class="u-img__max"
					>
				</div>
				<p>「西台」「高島平」エリアは新宿11km圏。実際に街を歩いていると、都会的で洗練された雰囲気と、ファミリーも暮らしやすい環境が融合している街という印象を受けます。</p>
				<p>これは同じ新宿11km圏である「吉祥寺」「成城学園前」「二子玉川」にも言えることで、新宿11km圏というのは都心を軽快に楽しみながら、身近な環境で心地よく寛ぐために、ちょうどいい距離条件なのかもしれません。</p>
			</section>
			<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
		</article>
	</main>

	<?php
	$toindex_url = "/magazine/index_town.php";
	include ($inc_path."/lib/inc/toindex__magazin.php");
	?>
	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
