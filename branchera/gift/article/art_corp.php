<?php
//base
include ("../../function.php");
$content = get_id_data('3013');
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
        <h3 class="u-ttl__l">お引越し「基本料金20％OFF」をはじめとしたおトクな3大特典！</h3>
        <img
        data-src="../../lib/img/gift/art_corp/main.png"
        data-retina="../../lib/img/gift/art_corp/main@2x.png"
        alt="Image photo"
        style="max-width:720px;"
        class="u-img__max"
        >
      </div>
    <p style="margin-bottom: 24px;">「アート引越センター」を利用してお引越しすると、基本料金20%OFFや段ボールサービス、梱包資材無料レンタルなどうれしい特典をご利用いただけます。</p>
      <div class="u-only__pc">
        <div class="img mb3 center">
          <img
            data-src="../../lib/img/gift/art_corp/tokuten.png"
            data-retina="../../lib/img/gift/art_corp/tokuten@2x.png"
            alt="ご優待"
            style="max-width:723px;"
            class="u-img__max"
          >
        </div>
    </div>
    <div class="u-only__sp">
      <div class="img mb3 center">
        <img
          data-src="../../lib/img/gift/art_corp/tokuten-sp.png"
          data-retina="../../lib/img/gift/art_corp/tokuten-sp@2x.png"
          alt="ご優待"
          style="max-width:723px;"
          class="u-img__max"
        >
      </div>
  </div>
    <ul class="u-small">
      <li>※1 お引越しの日から1年以内の間に、1回に限り無料でご利用いただけます。</li>
      <li>※2 5箱セットでご用意いたします。</li>
      <li>※上記特典の詳細については、アート引越センターの担当者に直接お問い合わせください。</li>
  </ul>

    <?php
      $useName = "見積り";
      $useNameAct = "依頼";
      $useLinks = $base_url.'/form/form-art-ohikkoshi/';
      include ($inc_path."/lib/inc/page/_gift/__u-est.php");
    ?>
    <h4 class="u-ttl__m">ご利用の流れ</h4>
    <div class="img data-img center" style="margin-bottom: 20px;">
      <div class="u-only__pc">
        <img
        data-src="../../lib/img/gift/art_corp/moushikomi.png"
        data-retina="../../lib/img/gift/art_corp/moushikomi@2x.png"
        alt="ご利用の流れ"
        style="max-width:704px;"
        class="u-img__max"
      >
      </div>
      <div class="u-only__sp">
        <img
        data-src="../../lib/img/gift/art_corp/moushikomi-sp.png"
        data-retina="../../lib/img/gift/art_corp/moushikomi-sp@2x.png"
        alt="ご利用の流れ"
        style="max-width:704px;"
        class="u-img__max"
      >
      </div>
    </div>

    <?php
    $useName = "見積り";
    $useNameAct = "依頼";
    $useLinks = $base_url.'/form/form-art-ohikkoshi/';
    include ($inc_path."/lib/inc/page/_gift/__u-est.php");
    ?>


    <h4 class="u-ttl__m">お引越し特典提携企業</h4>
    <p class="img">
    <img
      data-src="../../lib/img/gift/art_corp/logo.jpg"
      alt="アート引越センター"
      style="max-width:132px;"
      class="u-img__max"
      >
    </p>

  </section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
