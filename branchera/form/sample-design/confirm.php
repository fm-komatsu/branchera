<?php
include ("../../function.php");
$title ="賃貸マンション仲介手数料「最大50％OFF」特典のお申し込み";
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
    <h1 class="MainHead-ttl"> 賃貸マンション仲介手数料「最大50％OFF」特典のお申し込み</h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include ($inc_path."/form/inc/u-formflow.php") ?>

<p>下記の項目をご確認の上、「この内容で送信する」ボタンを押してください。</p>
<hr class="mt1">

<form action="./complete.php">

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
      <p><?php echo $_POST["tel"]; ?></p>
    </div>
  </div>
  <div class="label">
    <h5 class="s-ttl label-ttl">メールアドレス</h5>
    <div class="label-inner">
      <p><?php echo $_POST["email"]; ?></p>
    </div>
  </div>
<hr>

<h3 class="l-ttl">担当者からの連絡方法</h3>

<div class="label">
  <h5 class="label-ttl s-ttl">ご希望の連絡方法</h5>
  <div class="label-inner">
      <p>固定電話</p>
  </div>
</div>

<hr>

<h3 class="l-ttl">ご登録情報以外の送り先・ご連絡先</h3>

<div class="label">
  <h5 class="label-ttl s-ttl">お名前</h5>
  <div class="label-inner">
    <p>長谷工 太郎</p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">フリガナ</h5>
  <div class="label-inner">
    <p>ハセコウ　タロウ</p>
  </div>
</div>

<div class="label">
  <h5 class=" label-ttl s-ttl">郵便番号</h5>
  <div class="label-inner">
    <p>000-0000</p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">ご住所</h5>
  <div class="label-inner">
    <p>東京都港区芝２丁目３２−１</p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">電話番号</h5>
  <div class="label-inner">
    <p>09000000000</p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">メールアドレス</h5>
  <div class="label-inner">
    <p>info@haseko.co.jp</p>
  </div>
</div>

<hr>

<h2 class="l-ttl">サンプル</h2>

<div class="label">
  <h5 class="label-ttl s-ttl">inputTextエリア</h5>
  <div class="label-inner">
    <p>大宮駅周辺</p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">radioエリア</h5>
  <div class="label-inner inputRadio-row">
    <p>ラベル名</p>
  </div>
</div>

<div class="label">
  <h5 class="label-ttl s-ttl">checkboxエリア</h5>
  <div class="label-inner inputCheckbox-row">
      <p>チェックボックス名</p>
      <p>チェックボックス名</p>
      <p>チェックボックス名</p>
  </div>
</div>

<hr>

<h2 class="l-ttl">その他お問い合わせ内容</h2>

 <div class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <p>お問い合わせ内容が入ります。</p>
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
