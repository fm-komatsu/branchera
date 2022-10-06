<?php
//base
$session_check_switch = "0";
include ("../../function.php");
$title ="長谷工ID登録解除";
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
  <h5 class="s-ttl label-ttl">メールアドレス</h5>
  <div class="label-inner">
    <p>PC：<?php echo h($_POST["email"]); ?></p>
    <p>携帯：<?php echo h($_POST["email2"]); ?></p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">退会理由</h5>
  <div class="label-inner inputTextarea-row">
    <p><?php echo h($_POST["contact_memo"]); ?></p>
  </div>
</div>

<hr>

<div class="assist policy">
  <h5 class="s-ttl"><span>注意事項</span></h5>
  <p class="mb0">登録解除すると、現在お持ちのスマイル（長谷工ポイント）が失効します。また、メールマガジンの購読や会員さま限定企画・キャンペーンなどの各種特典が受けられなくなります。本当に登録解除してよろしいですか？</p>
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
