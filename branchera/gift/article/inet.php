<?php
//base
include ("../../function.php");
$content = get_id_data('3007');
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
				<h3 class="u-ttl__l">ハイグレード賃貸からワンルームまで!<br>賃貸マンション仲介手数料最大50％<sup class="cap">※</sup>OFF</h3>
				<img
				data-src="../../lib/img/gift/inet/img01.jpg"
				data-retina="../../lib/img/gift/inet/img01.jpg"
				alt="Image photo"
				style="max-width:720px;"
				class="u-img__max"
				>
      </div>
    <p style="margin-bottom: 24px;">「長谷工アイネット」を利用して賃貸物件に入居された場合、仲介手数料最大50%OFF<small class="u-small">※</small>を実施いたします。</p>

    <div class="img mb3 center">
      <img
				data-src="../../lib/img/gift/inet/img02.png"
				data-retina="../../lib/img/gift/inet/img02@2x.png"
				alt="ご優待"
				style="max-width:723px;"
				class="u-img__max"
			>
    </div>

    <?php
      $useName = "賃貸物件";
      $useNameAct = "お申し込みを";
      $useLinks = $base_url.'/form/form-rent/';
      include ($inc_path."/lib/inc/page/_gift/__u-use.php");
    ?>
    <h4 class="u-ttl__m">ご利用の流れ</h4>
    <p>長谷工アイネットのWEBサイトより物件をお選びいただくか、ご希望のエリア(駅名)・間取りなどをご記入の上、お申込みください。</p>
    <div class="img data-img center" style="margin-bottom: 20px;">
      <div class="u-only__pc">
        <img
				data-src="../../lib/img/gift/inet/flow-img.png"
				data-retina="../../lib/img/gift/inet/flow-img@2x.png"
				alt="ご利用の流れ"
				style="max-width:704px;"
				class="u-img__max"
			>
      </div>
      <div class="u-only__sp">
        <img
				data-src="../../lib/img/gift/inet/flow-img-sp.png"
				data-retina="../../lib/img/gift/inet/flow-img-sp@2x.png"
				alt="ご利用の流れ"
				style="max-width:704px;"
				class="u-img__max"
			>
      </div>
    </div>

    <?php
    $useName = "賃貸物件";
    $useNameAct = "お申し込みを";
    $useLinks = $base_url.'/form/form-rent/';
    include ($inc_path."/lib/inc/page/_gift/__u-use.php");
    ?>


    <h4 class="u-ttl__m">長谷工アイネットについて</h4>
    <p class="img fr">
    <img
		  data-src="../../lib/img/gift/inet/img03.png"
		  data-retina="../../lib/img/gift/inet/img03@2x.png"
      alt="長谷工アイネット"
      style="max-width:242px;"
      class="u-img__max"
			>
    </p>

    <p>「長谷工アイネット」は、東京・大阪の各都市部を中心に賃貸マンションを豊富に取り扱っております。</p>
    <p style="margin-bottom: 24px;">長谷工が自社開発する新築賃貸物件のいち早いご案内と、直扱い物件6万戸の賃貸情報に加え、提携先からの特選賃貸情報をご用意しています。</p>
    <h5 class="u-ttl__s">長谷工アイネットの取扱い賃貸物件はこちら</h5>
    <div class="snav__row">
      <a href="http://www.inet-tokyo.com/" target="_blank" rel="nofollow" class="snav__item" data-ga-click="hcg-page__inet_syutoken">首都圏</a>
      <a href="http://www.haseko-inet-osaka.com/" target="_blank" rel="nofollow" class="snav__item" data-ga-click="hcg-page__inet_kansaiken">関西圏</a>
     <!-- <a href="http://www.haseko-hln.co.jp/nagoya/index.html" target="_blank" rel="nofollow" class="snav__item">東海圏</a>-->
    </div>


  <ul class="u-small">
    <li>※長谷工ライブネット管理物件の仲介手数料割引は最大10万円までとなります。</li>
    <li>※長谷工アイネットの他のキャンペーンとの併用については、長谷工アイネット担当者にお問い合わせください。</li>
  </ul>

  </section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
