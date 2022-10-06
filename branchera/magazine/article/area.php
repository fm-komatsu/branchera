<?php
//base
include ("../../function.php");
$content = get_id_data('2002');
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
				data-src="../../lib/img/magazine/nishidai80/area-main.png"
				data-retina="../../lib/img/magazine/nishidai80/area-main@2x.png"
				alt="生活利便施設やおしゃれなお店が揃う街"
				style="max-width:855px;"
				class="u-img__max"
				>

			</div>
			<small class="u-small">※左：ダイエー西台、右：ピーコックストア高島平店</small>
			<p>「西台」駅に隣接する「ダイエー」、複合商業施設「メトロ・エム」、「高島平」駅近くの「東急ストア」「ピーコック」など、毎日のお買い物に便利な商業施設が多いのも西台・高島平エリアの特徴です。また、かわいらしいカフェや創業50年以上の菓子材料製造の老舗が展開する洋菓子店など、お洒落なお店が点在していることも、このエリアの魅力となっています。</p>

			<h4 class="u-ttl__m">商業複合施設「メトロ・エム」</h4>
			<div class="img fr">
				<img src="../../lib/img/magazine/nishidai80/area-sub-1.png" alt="高島平とうきゅう">
				<p class="cap left" style="margin-top: 0;"><span class="u-small">※高島平とうきゅう</span></p>
			</div>
			<p class="u-clearfix">都営三田線「高島平」駅から徒歩10分に立地する複合商業施設「メトロ・エム」。食品スーパー「高島平とうきゅう」やホームセンター「ケーヨーデイツー」の他に、ファミリーレストランやフードコートもあり、家族でお買い物をした後にゆっくりと食事をするというスタイルも楽しめます。</p>

			<h4 class="u-ttl__m">板橋区。東京で一番住みたくなるまちを目指して。</h4>
			<p>板橋区は、「東京で一番住みたくなるまちを目指して」をスローガンに「いたばし未来創造プラン」を策定しています。プランでは「あたたかい人づくり」「元気な街づくり」「安心・安全」という３つのナンバーワンを掲げており、それぞれに子育て支援や教育の充実、コミュニティの活発化や産業の活性化、防犯・防災の強化や自然や都市景観への配慮などが取り組まれています。</p>

			<h4 class="u-ttl__m">西台・高島平のお洒落スポット</h4>
			<div class="mb6">
				<ul class="flex flex_around" id="town-list-spot">
					<li>
						<a href="<?php echo "$base_url" ?>/magazine/article/spot-1.php" >
							<img
							data-src="../../lib/img/magazine/town/shop-1.png"
							data-retina="../../lib/img/magazine/town/shop-1@2x.png"
							alt="カフェ　ハナハナ"
							style="max-width: 240px;"
							class="u-img__max"
							>
						</a>
					</li>
					<li>
						<a href="<?php echo "$base_url" ?>/magazine/article/spot-2.php" >
							<img
							data-src="../../lib/img/magazine/town/shop-2.png"
							data-retina="../../lib/img/magazine/town/shop-2@2x.png"
							alt="欧風カレー　インディラ"
							style="max-width: 240px;"
							class="u-img__max"
							>
						</a>
					</li>
					<li>
						<a href="<?php echo "$base_url" ?>/magazine/article/spot-3.php" >
							<img
							data-src="../../lib/img/magazine/town/shop-3.png"
							data-retina="../../lib/img/magazine/town/shop-3@2x.png"
							alt="菓子工房　ガトーマスダ"
							style="max-width: 240px;"
							class="u-img__max"
							>
						</a>
					</li>
				</ul>
			</div>
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
