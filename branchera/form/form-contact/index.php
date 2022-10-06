<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$pageTtl = '長谷工グループ「ブランシエラクラブ」へお問い合わせ';
$title  = $pageTtl;

//csrf
include($inc_path.'/form/inc/csrf-set-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="inputForm form single";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
?>

<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <div class="flex between">
      <div class="self-center">
        <p class="MainHead-sub">必須項目のご入力</p>
        <h1 class="MainHead-ttl"><?php echo $title ?></h1>
      </div>
      <div class="center_sp">
        <img
          data-src="<?php echo $img_url ?>/faq/contact-img.png"
          data-retina="<?php echo $img_url ?>/faq/contact-img@2x.png"
          alt="お問い合わせ"
          class="u-img__max"
          style="max-width:204px"
        >
      </div>
    </div>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include($inc_path.'/form/inc/u-formflow.php') ?>
<p>※お問い合わせ内容によっては、お答えできかねる場合がございます。あらかじめご了承ください。</p>
<?php include($inc_path.'/form/inc/u-req.php') ?>

<?php
if($ssoFlag == 1){
  $cntactLinks = "./confirm-member.php";
}else{
  $cntactLinks = "./confirm.php";
}
?>
<form method="POST" action="<?php echo $cntactLinks; ?>">
	<input type="hidden" name="token" value="<?php echo $token; ?>">

<?php
  if($ssoFlag == 1){
    include($inc_path.'/form/inc/mypage-member-info.php');
  }else{
    include($inc_path.'/form/inc/u-address-contact.php');
  }
?>
<hr>

<h2 class="l-ttl">ご質問・ご相談・ご意見などをご入力ください</h2>

<label for="contact" class="label req error">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <textarea name="contact_memo" id="contact" placeholder="お問い合わせ内容は、具体的にご記入ください" class="inputTextarea-item"></textarea>
    <p class="warning required">お問い合わせ内容をご記入ください</p>
  </div>
</label>

<hr>

<?php include($inc_path.'/form/inc/u-policy.php') ?>
<hr>
<?php include($inc_path.'/form/inc/u-formssl.php') ?>

</form>

</div>
</div>
</article>
</main>

<?php include($inc_path.'/form/inc/footer.php') ?>
<?php include($inc_path.'/form/inc/foot.php') ?>
