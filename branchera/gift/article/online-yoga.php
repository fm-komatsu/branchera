<?php
//base
include ("../../function.php");
$content = get_id_data('3041');
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
		<section class="main__wrapper">
			<div class="product-img mb3">
				<h3 class="u-ttl__l">長谷工コミュニティ×yoga i.umコラボ企画</h3>
				<img
				src="<?php echo $img_url ?>/gift/online-yoga/main-v@2x.jpg"
				alt="ご優待 | <?php echo $pageTtl ?>"
				style="max-width:720px;"
				class="u-img__max u-only__pc"
				>
				<img
				src="<?php echo $img_url ?>/gift/online-yoga/main-v-sp@2x.jpg"
				alt="ご優待 | <?php echo $pageTtl ?>"
				class="u-img__max u-only__sp"
				>
			</div>
			<div class="mb3">
				<h4>一生ものの身体に！姿勢改善ヨガをご自宅で！</h4>
				<p>ステイホームやテレワークでボディラインが気になる方、肩こりや腰痛が慢性化している方には、ご自宅でレッスンが受けられる「オンラインヨガ」がおすすめ！<br>yoga i.umオリジナル姿勢改善メソッド「ヨガトレ&reg;」や、月替わりのヨガ、朝ヨガ、夜ヨガなど初心者から経験者まで楽しめる豊富なメニューのレッスンを受けられます。</p>
			</div>
			<div class="u-column mb3">
				<div class="u-column__2">
					<div class="u-column__item">
						<img
							src="<?php echo $img_url ?>/gift/online-yoga/img01@2x.png"
							alt="point1 毎月100本以上のプログラムが受け放題 | <?php echo $pageTtl ?>"
							class="u-img__max u-only__pc"
						>
						<img
							src="<?php echo $img_url ?>/gift/online-yoga/img01-sp@2x.png"
							alt="point1 毎月100本以上のプログラムが受け放題 | <?php echo $pageTtl ?>"
							class="u-img__max u-only__sp mb3_sp"
						>
					</div>
					<div class="u-column__item">
						<img
							src="<?php echo $img_url ?>/gift/online-yoga/img02@2x.png"
							alt="point2 好きな時間にレッスン！朝早くから夜遅くまでOK！ | <?php echo $pageTtl ?>"
							class="u-img__max u-only__pc"
						>
						<img
							src="<?php echo $img_url ?>/gift/online-yoga/img02-sp@2x.png"
							alt="point2 好きな時間にレッスン！朝早くから夜遅くまでOK！ | <?php echo $pageTtl ?>"
							class="u-img__max u-only__sp"
						>
					</div>
				</div>
			</div>
			<div>
				<img
					src="<?php echo $img_url ?>/gift/online-yoga/img03@2x.png"
					alt="ご優待価格　月額2,200円（通常価格：月額11,000円） | <?php echo $pageTtl ?>"
					class="u-img__max u-only__pc"
				>
				<img
					src="<?php echo $img_url ?>/gift/online-yoga/img03-sp@2x.png"
					alt="ご優待価格　月額2,200円（通常価格：月額11,000円） | <?php echo $pageTtl ?>"
					class="u-img__max u-only__sp"
				>
			</div>
			<div class="center mb3"><small class="u-small">お支払いは毎月クレジットカード自動引き落としとなります。</small></div>
			<div class="u-btn-layout">
				<div class="u-btn-layout__row center mb2_sp">
					<a href="https://www.yogaium.com/haseko" target="_blank" class="u-btn_point u-btn-layout__item u-icon" data-ga-click="onlineyoga__1" style="margin-top : 8px;">詳細はこちら</a>
				</div>
			</div>
	</section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
