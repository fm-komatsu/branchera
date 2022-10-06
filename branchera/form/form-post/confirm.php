<?php
include ("../../function.php");
$title ="みなさまの「ご意見・ご要望」をポストへ投稿";
$meta_title = '【ご入力内容の確認】'.$title.' | '.$siteName;
$meta_description = $description;
$body_class ="confForm form single";
?>
<?php include ($inc_path."/form/inc/head.php") ?>
<?php include ($inc_path."/form/inc/header.php") ?>

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
    <p><?php echo $_POST["hasekoid"]; ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">お名前</h5>
  <div class="label-inner">
    <p><?php echo $_POST["name"]; ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">フリガナ</h5>
  <div class="label-inner">
    <p><?php echo $_POST["name2"]; ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">ご住所</h5>
  <div class="label-inner">
    <p>〒<?php echo $_POST["postal-code"]; ?></p>
    <p><?php echo $_POST["address-level1"]; ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">電話番号</h5>
  <div class="label-inner">
    <p>固定：<?php echo $_POST["tel"]; ?></p>
    <p>携帯：<?php echo $_POST["tel2"]; ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">メールアドレス</h5>
  <div class="label-inner">
    <p>PC：<?php echo $_POST["email"]; ?></p>
    <p>携帯：<?php echo $_POST["email2"]; ?></p>
  </div>
</div>

<hr>

<h2 class="l-ttl">ご意見・ご要望</h2>
<div class="label">
  <h5 class="label-ttl s-ttl">種類</h5>
  <div class="label-inner">
      <p><?php echo $_POST["types"]; ?></p>
  </div>
</div>
 <div class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <p><?php echo $_POST["contact_memo"]; ?></p>
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
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/form/inc/foot.php") ?>
