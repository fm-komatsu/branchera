<?php
//base
$session_check_switch = "0";
include ("../../function.php");
$title ="高齢者住宅1泊2日「無料」体験宿泊特典のお申込み";
$pageTtl = '【ご入力内容の確認】'.$title;

//csrf
include($inc_path.'/form/inc/csrf-check-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="confForm form single";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
?>
<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <p class="MainHead-sub">ご入力内容の確認</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include ($inc_path."/form/inc/u-formflow.php") ?>
<p>下記の項目をご確認の上、「この内容で送信する」ボタンを押してください。</p>
<hr class="mt1">

<form method="post" action="./complete.php">
<?php include ($inc_path."/form/inc/input-hidden.php") ?>

<h2 class="l-ttl">お客さまのご登録情報</h2>

<div class="label">
  <h5 class="s-ttl label-ttl">長谷工ID</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["hasekoid"]); ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">お名前</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["name"]); ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">フリガナ</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["name2"]); ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">ご住所</h5>
  <div class="label-inner">
    <p>〒<?php echo h($_POST["postal-code"]); ?></p>
    <p><?php echo h($_POST["address-level1"]); ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">電話番号</h5>
  <div class="label-inner">
    <p>固定：<?php echo h($_POST["tel"]); ?></p>
    <p>携帯：<?php echo h($_POST["tel2"]); ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">メールアドレス</h5>
  <div class="label-inner">
    <p>PC：<?php echo h($_POST["email"]); ?></p>
    <p>携帯：<?php echo h($_POST["email2"]); ?></p>
  </div>
</div>
<hr>

<h3 class="l-ttl">担当者からの連絡方法</h3>

<div class="label">
  <h5 class="label-ttl s-ttl">ご希望の連絡方法</h5>
  <div class="label-inner">
      <p><?php echo h($_POST["order_how"]); ?></p>
  </div>
</div>

<hr>

<h2 class="l-ttl">必要事項</h2>

<div class="label">
  <h5 class="label-ttl s-ttl">お問い合わせ内容</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["types"]); ?></p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">ご希望のエリア</h5>
  <div class="label-inner  inputCheckbox-row">
    <?php
    $area_string = "";
    foreach($_POST["area"] as $area){
      $area_string .= $area . "\n";
    ?>
    <p><?php echo $area; ?></p>
    <?php } ?>
  </div>
</div>
<input type="hidden" name="area_string" value="<?php echo $area_string; ?>">

<div class="label">
  <h5 class="label-ttl s-ttl">その他ご希望のエリア</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["areaNameText"]); ?></p>
  </div>
</div>

<hr>

  <h2 class="l-ttl">ご希望の施設・お問い合わせ</h2>
 <div class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <p><?php echo h($_POST["contact_memo"]); ?></p>
  </div>
</div>

<div class="formBtn">
  <button type='submit' alt="send" class="formBtn-send ok"><span>この内容で送信する</span></button>
</div>

</form>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
