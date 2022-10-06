<?php
//base
include ("../../function.php");
$content = get_id_data('3001');
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
      <div class="product-img center">
        <img
        data-src="../../lib/img/gift/mail/mail-img01.png"
        data-retina="../../lib/img/gift/mail/mail-img01@2x.png"
        alt="月に2回メールマガジンを、年に3回ブランシエラレター（会報誌）をお届けします"
        class="u-img__max"
        >
      </div>
      <p style="margin-bottom: 24px;">ブランシエラクラブ会員のみなさまへ、毎週木曜日に暮らしに役立つさまざまな情報をご登録いただいたメールアドレスにお届けいたします。
        <br>毎月の抽選賞品のお知らせ、お得なキャンペーン情報のほか、さまざまなテーマのアンケート募集や暮らしに役立つコンテンツをご紹介します。
        <br>毎週木曜日のメールマガジンをお見逃しなく！
      </p>
      <a href="<?php echo $myentry_url ?>" target="_blank"  rel='nofollow' class="u-btn_point_l center"><span>長谷工IDの新規登録（無料）はこちら</span></a>

    </section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
