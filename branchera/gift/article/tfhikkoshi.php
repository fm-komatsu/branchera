<?php
//base
include ("../../function.php");
$content = get_id_data('3020');
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
			<div class="product-img">
				<h3 class="u-ttl__l">お引越し「基本料金10％OFF」「買い取り金額10%UP」おトクな2大特典</h3>
				<img
				data-src="../../lib/img/gift/tfhikkoshi/main-v.jpg"
				data-retina="../../lib/img/gift/tfhikkoshi/main-v@2x.jpg"
				alt="Image photo"
				style="max-width:720px;"
				class="u-img__max"
				>
      </div>
    <p style="margin-bottom: 24px;">「トレファク引越」を利用してお引越しすると<strong>「基本料金10％OFF」</strong>、家具・家電・楽器・スポーツ用品などの<strong>「買い取り金額10%UP」</strong>のおトクな特典をご利用いただけます。</p>
			<div class="u-only__pc">
		    <div class="img mb2 center">
		      <img
						data-src="../../lib/img/gift/tfhikkoshi/tokuten0102.png"
						data-retina="../../lib/img/gift/tfhikkoshi/tokuten0102@2x.png"
						alt="トレファク引越特典"
						style="max-width:720px;"
						class="u-img__max"
					>
		    </div>
		</div>
		<div class="u-only__sp">
			<div class="img mb2 center">
				<img
					data-src="../../lib/img/gift/tfhikkoshi/tokuten-sp.png"
					data-retina="../../lib/img/gift/tfhikkoshi/tokuten-sp@2x.png"
					alt="トレファク引越特典"
					style="max-width:382px;"
					class="u-img__max"
				>
			</div>
	</div>

	<h4 class="u-ttl__m">トレファク引越はココが違う！</h4>
	<div class="img center mb4">
		<figure>
			<img
				data-src="../../lib/img/gift/tfhikkoshi/difference.png"
				data-retina="../../lib/img/gift/tfhikkoshi/difference@2x.png"
				alt="ご優待"
				style="max-width:706px;"
				class="u-img__max"
			>
		</figure>
	</div>
	<div class="lottery-point">
		<div class="lottery-point__row">
			<h4 class="lottery-point__ttl">お引越し前に出た不用なものを買い取ります。</h4>
			<p class="lottery-point__ex">トレファク引越なら使わなくなったものを売って、お引越し料金がさらにお安くなります。</p>

			<h4 class="lottery-point__ttl">お引越し・買い取りの見積を同時に行います。</h4>
			<p class="lottery-point__ex">トレファク引越では「お引越し」と「買い取り」両方をまとめてお見積できるため、お引越し前の忙しい時間を有効にお使いいただけます。</p>

			<h4 class="lottery-point__ttl">買い取り品はお引越し直前まで使えます。</h4>
			<p class="lottery-point__ex">買い取り品もお引越し時に搬出するため、冷蔵庫や洗濯機などの生活必需品を売る場合でも、ご不便感じることなく直前までお使いいただけます。</p>
		</div>
	</div>

	<h4 class="u-ttl__m">買い取り対象品</h4>
	<p class="mb4">家具製品・電化製品・贈答品・インテリア雑貨・デジタル機器・スポーツ用品・アウトドア用品・楽器のご相談が可能です。<br>それ以外のお品物は、処分でのご相談も承っております。是非ご相談ください。</p>

    <?php
      $useName = "見積り";
      $useNameAct = "依頼";
      $useLinks = $base_url.'/form/form-tfhikkoshi/';
      include ($inc_path."/lib/inc/page/_gift/__u-est.php");
    ?>
    <h4 class="u-ttl__m">ご利用の流れ</h4>
    <div class="img data-img center" style="margin-bottom: 20px;">
      <div class="u-only__pc">
        <img
				data-src="../../lib/img/gift/tfhikkoshi/flow.png"
				data-retina="../../lib/img/gift/tfhikkoshi/flow@2x.png"
				alt="ご利用の流れ"
				style="max-width:690px;"
				class="u-img__max"
			>
      </div>
      <div class="u-only__sp">
        <img
				data-src="../../lib/img/gift/tfhikkoshi/flow-sp.png"
				data-retina="../../lib/img/gift/tfhikkoshi/flow-sp@2x.png"
				alt="ご利用の流れ"
				style="max-width:350px;"
				class="u-img__max"
			>
      </div>
    </div>

    <?php
    $useName = "見積り";
    $useNameAct = "依頼";
    $useLinks = $base_url.'/form/form-tfhikkoshi/';
    include ($inc_path."/lib/inc/page/_gift/__u-est.php");
    ?>


    <h4 class="u-ttl__m">お引越し特典提携企業</h4>
    <p class="img">
    <img
		  data-src="../../lib/img/gift/tfhikkoshi/tfhikkoshi_logo.png"
		  data-retina="../../lib/img/gift/tfhikkoshi/tfhikkoshi_logo@2x.png"
      alt="トレファク引越"
      style="max-width:132px;"
      class="u-img__max"
			>
    </p>

  </section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
