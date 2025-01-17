<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = '高齢者住宅1泊2日「無料」体験宿泊特典のお申込み';
$pageTtl = '高齢者住宅1泊2日「無料」体験宿泊特典のお申込み';

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

<h3 class="l-ttl">必要事項をご入力をください</h3>

<div class="label req error">
<h5 class="label-ttl s-ttl">お問い合わせ内容</h5>
<div class="label-inner inputRadio-row">
  <p class="info">1つのみお選びください</p>
  <label for="type-1" class="inputRadio-label">
    <input type="radio" name="types" id="type-1" class="inputRadio-item" value="体験宿泊予約">
    <p>体験宿泊予約</p>
  </label>
  <label for="type-2" class="inputRadio-label">
    <input type="radio" name="types" id="type-2" class="inputRadio-item" value="見学予約">
    <p>見学予約</p>
  </label>
  <label for="type-3" class="inputRadio-label">
    <input type="radio" name="types" id="type-3" class="inputRadio-item" value="資料請求">
    <p>資料請求</p>
  </label>
  <label for="type-4" class="inputRadio-label">
    <input type="radio" name="types" id="type-4" class="inputRadio-item" value="その他お問い合わせ">
    <p>その他お問い合わせ</p>
  </label>
  <p class="warning required">どれか1つをお選びください</p>
</div>
</div>

<div class="label req error">
<h5 class="label-ttl s-ttl">ご希望のエリア</h5>
<div class="label-inner inputCheckbox-row">
  <p class="info">複数選択可※３つまで</p>
  <label for="area-1" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-1" class="inputCheckbox-item" value="東京都">
    <p>東京都</p>
  </label>
  <label for="area-2" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-2" class="inputCheckbox-item" value="埼玉県">
    <p>埼玉県</p>
  </label>
  <label for="area-3" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-3" class="inputCheckbox-item" value="神奈川県">
    <p>神奈川県</p>
  </label>
  <label for="area-4" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-4" class="inputCheckbox-item" value="千葉県">
    <p>千葉県</p>
  </label>
  <label for="area-5" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-5" class="inputCheckbox-item" value="静岡県">
    <p>静岡県</p>
  </label>
  <label for="area-6" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-6" class="inputCheckbox-item" value="愛知県">
    <p>愛知県</p>
  </label>
  <label for="area-7" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-7" class="inputCheckbox-item" value="京都府">
    <p>京都府</p>
  </label>
  <label for="area-8" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-8" class="inputCheckbox-item" value="大阪府">
    <p>大阪府</p>
  </label>
  <label for="area-9" class="inputCheckbox-label">
    <input type="checkbox" name="area[]" id="area-9" class="inputCheckbox-item" value="兵庫県">
    <p>兵庫県</p>
  </label>
    <p class="warning required">どれか１つお選びください</p>
    <p class="warning nomorethan-3">３つ以内でお選びください</p>
</div>
</div>

<label for="areaNameText" class="label mb3">
  <h5 class="label-ttl s-ttl">その他ご希望のエリア</h5>
  <div class="label-inner">
    <input type="text" name="areaNameText" id="areaNameText" placeholder="例：◯◯◯◯駅近く">
  </div>
</label>

<div class="assist">
<p class="mb0"><a href="http://www.haseko-senior.co.jp/branchera/" target="_blank" rel="nofollow" class="a-arrow">こちらから施設の一覧をご覧いただけます</a><br>
<small>※体験宿泊はホームの状況によりご利用いただけない場合がございます。あらかじめご了承ください。</small></p>
</div>
<hr>

<h2 class="l-ttl">ご希望の施設がありましたらご記入ください。</h2>
 <p>その他、ご自由にご記入ください。</p>

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
