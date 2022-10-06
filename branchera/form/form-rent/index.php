<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = '賃貸マンション仲介手数料「最大50％OFF」特典のお申込み';
$pageTtl = '賃貸マンション仲介手数料「最大50％OFF」特典のお申込み';

//csrf
include($inc_path.'/form/inc/csrf-set-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="inputForm form single membersOnly";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
include($inc_path."/lib/functions/sso_login_re.php");
?>
<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <p class="MainHead-sub">会員さま特典</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include ($inc_path."/form/inc/u-formflow.php") ?>
<?php include ($inc_path."/form/inc/u-req.php") ?>

<form method="post" action="./confirm.php">
	<input type="hidden" name="token" value="<?php echo $token; ?>">
  <?php include ($inc_path."/form/inc/mypage-member-info.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-how.php") ?>
<hr>

<h2 class="l-ttl">ご希望のエリア・賃料などをご記入ください</h2>

<label for="aera-1" class="label">
  <h5 class="label-ttl s-ttl">ご希望のエリア</h5>
  <div class="label-inner">
    <input type="text" id="area-1" name="area" placeholder="例：大宮駅周辺">
  </div>
</label>

<div class="label">
  <h5 class="label-ttl s-ttl">ご希望の間取り</h5>
  <div class="label-inner inputCheckbox-row">
    <p class="info">複数選択可</p>
    <label for="madori-1" class="inputCheckbox-label">
      <input type="checkbox" name="madori[]" id="madori-1" class="inputCheckbox-item" value="1K・1R">
      <p>1K・1R</p>
    </label>
    <label for="madori-2" class="inputCheckbox-label">
      <input type="checkbox" name="madori[]" id="madori-2" class="inputCheckbox-item" value="1DK・1LDK">
      <p>1DK・1LDK</p>
    </label>
    <label for="madori-3" class="inputCheckbox-label">
      <input type="checkbox" name="madori[]" id="madori-3" class="inputCheckbox-item" value="2DK・2LDK">
      <p>2DK・2LDK</p>
    </label>
    <label for="madori-4" class="inputCheckbox-label">
      <input type="checkbox" name="madori[]" id="madori-4" class="inputCheckbox-item" value="3DK・3LDK">
      <p>3DK・3LDK</p>
    </label>
    <label for="madori-5" class="inputCheckbox-label">
      <input type="checkbox" name="madori[]" id="madori-5" class="inputCheckbox-item" value="4LDK以上">
      <p>4LDK以上</p>
    </label>
  </div>
</div>

<label for="price" class="label">
  <h5 class="label-ttl s-ttl">ご希望の賃料</h5>
  <div class="label-inner">
    <input type="text" name="price" id="price" placeholder="例：7.5万円～8.0万円">
  </div>
</label>

<hr>

<h2 class="l-ttl">具体的なご希望物件があればご入力ください</h2>

<label for="bukken" class="label">
  <h5 class="label-ttl s-ttl">ご希望物件</h5>
  <div class="label-inner">
    <input type="text" name="bukken" id="bukken" placeholder="例：タウンステイ芝公園">
  </div>
</label>

<hr>

<h2 class="l-ttl">その他お問い合わせ内容</h2>

 <label for="contact" class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <textarea name="contact_memo" id="contact" placeholder="お問い合わせ内容は、具体的にご記入ください" class="inputTextarea-item"></textarea>
  </div>
</label>

<hr>
<?php include ($inc_path."/form/inc/u-policy.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-formssl.php") ?>

</form>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
