<?php
include ("../../function.php");
$title ="ダミー賃貸マンション仲介手数料「最大50％OFF」特典のお申し込み";
$meta_title = $title.' | '.$siteName;
$meta_description = "個別ディスクリプション |".$description;
$body_class ="inputForm form single";
?>
<?php include ($inc_path."/form/inc/head.php") ?>
<?php include ($inc_path."/form/inc/header.php") ?>

<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <p class="MainHead-sub">長谷工グループ「ブランシエラクラブ」会員さま特典</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include ($inc_path."/form/inc/u-formflow.php") ?>

<p>お申し込みありがとうございます。ダミーダミーダミー場合は、等の注釈を入れます。ダミーダミーダミーダミーダミーダミーダミーダミー詳しくは個人情報の保護方針をご確認ください。</p>

<?php include ($inc_path."/form/inc/u-req.php") ?>

<form action="./confirm.php">

<?php include ($inc_path."/form/inc/mypage-member-info.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-how.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-address.php") ?>
<hr>

<h2 class="l-ttl">サンプル</h2>
<p>.label(class)に.reqを追加すると任意→必須になる。<br>
.label(class)に.errorを追加するとworningが表示される。</p>


<label for="sample1" class="label">
  <h5 class="label-ttl s-ttl">inputTextエリア</h5>
  <div class="label-inner">
    <input type="text" autocomplete="" id="sample1" class="" placeholder="例：大宮駅周辺">
  </div>
</label>

<label for="sample2" class="label req error">
  <h5 class="label-ttl s-ttl">inputTextエリア</h5>
  <div class="label-inner">
    <input type="text" autocomplete="" id="sample2" class="" placeholder="例：大宮駅周辺">
    <p class="warning required">◯◯◯をご入力ください</p>
  </div>
</label>

<label for="sample3" class="label req error">
  <h5 class="label-ttl s-ttl">inputTextエリア※説明付き</h5>
  <div class="label-inner">
   <p class="info">確認のためもう一度ご入力ください</p>
    <input type="text" autocomplete="" id="sample3" class="" placeholder="例：例文">
    <p class="warning required">◯◯◯をご入力ください</p>
  </div>
</label>

<div class="label req error">
  <h5 class="label-ttl s-ttl">radioエリア</h5>
  <div class="label-inner inputRadio-row">
    <p class="info">１つのみお選びください</p>
    <label for="cb-sample1" class="inputRadio-label">
      <input type="radio" name="radio1" id="cb-sample1" class="inputRadio-item">
      <p>ラベル名</p>
    </label>
    <label for="cb-sample2" class="inputRadio-label">
      <input type="radio" name="radio1" id="cb-sample2" class="inputRadio-item">
      <p>ラベル名</p>
    </label>
    <label for="cb-sample3" class="inputRadio-label">
      <input type="radio" name="radio1" id="cb-sample3" class="inputRadio-item">
      <p>ラベル名</p>
    </label>
    <label for="cb-sample4" class="inputRadio-label">
      <input type="radio" name="radio1" id="cb-sample4" class="inputRadio-item">
      <p>ラベル名</p>
    </label>
    <label for="cb-sample5" class="inputRadio-label">
      <input type="radio" name="radio1" id="cb-sample5" class="inputRadio-item">
      <p>ラベル名</p>
    </label>
    <p class="warning required">どれか１つお選びください</p>
  </div>
</div>

<div class="label req error">
  <h5 class="label-ttl s-ttl">checkboxエリア</h5>
  <div class="label-inner inputCheckbox-row">
    <p class="info">複数選択可※３つまで</p>
    <label for="cb-sample-1" class=" inputCheckbox-label">
      <input type="checkbox" id="cb-sample-1" class=" inputCheckbox-item">
      <p>チェックボックス名</p>
    </label>
    <label for="cb-sample-2" class=" inputCheckbox-label">
      <input type="checkbox" id="cb-sample-2" class=" inputCheckbox-item">
      <p>チェックボックス名</p>
    </label>
    <label for="cb-sample-3" class=" inputCheckbox-label">
      <input type="checkbox" id="cb-sample-3" class=" inputCheckbox-item">
      <p>チェックボックス名</p>
    </label>
    <label for="cb-sample-4" class=" inputCheckbox-label">
      <input type="checkbox" id="cb-sample-4" class=" inputCheckbox-item">
      <p>チェックボックス名</p>
    </label>
    <label for="cb-sample-5" class=" inputCheckbox-label">
      <input type="checkbox" id="cb-sample-5" class=" inputCheckbox-item">
      <p>チェックボックス名</p>
    </label>
    <p class="warning required">どれか１つお選びください</p>
    <p class="warning nomorethan-3">３つ以内でお選びください</p>
  </div>
</div>

<hr>

<h2 class="l-ttl">その他お問い合わせ内容</h2>

 <label for="contact" class="label req error">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <textarea id="contact" placeholder="お問い合わせ内容は、具体的にご記入ください" class="inputTextarea-item"></textarea>
    <p class="warning required">お問い合わせ内容をご記入ください</p>
  </div>
</label>

<hr>

<?php include ($inc_path."/form/inc/u-policy.php") ?>

<hr>

<p>入力内容がOKな場合は下記が表示される</p>
<small>button.formBtn-submit(Class)に「ok」を追加</small>
<div class="formBtn">
  <button type='submit' alt="send" class="formBtn-submit ok"><span>入力内容を確認する</span></button>
</div>

<hr>
<p><small>※その他注釈ダミーダミーダミーダミーダミーダミーダミーダミーダミー</small></p>

<?php include ($inc_path."/form/inc/u-formssl.php") ?>

</form>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/form/inc/foot.php") ?>
<?php include ($inc_path.'/js/ami-validate.js') ?>
