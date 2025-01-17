<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = '長谷工ID登録解除';
$pageTtl = '長谷工ID登録解除';

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
   <p class="MainHead-sub">必要事項のご入力</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include ($inc_path."/form/inc/u-formflow.php") ?>
<?php include ($inc_path."/form/inc/u-req.php") ?>

<form method="post" action="./confirm.php">
	<input type="hidden" name="token" value="<?php echo $token; ?>">

<h3 class="l-ttl">お客さまのご登録情報をご確認ください</h3>

<div class="label req error">
  <h5 class="s-ttl label-ttl">長谷工ID</h5>
  <div class="label-inner">
    <p><?php echo $IDinfo["member_card_no"]; ?></p>
    <input type="hidden" name="hasekoid" value="<?php echo $IDinfo["member_card_no"]; ?>">
  </div>
</div>

<div class="label req error">
  <h5 class="s-ttl label-ttl">お名前</h5>
  <div class="label-inner">
    <p><?php echo $IDinfo["last_name"]; ?>　<?php echo $IDinfo["first_name"]; ?></p>
		<input type="hidden" id="name" name="name" value="<?php echo $IDinfo["last_name"]; ?> <?php echo $IDinfo["first_name"]; ?>">
		<input type="hidden" id="name-sei" name="name-sei" value="<?php echo $IDinfo["last_name"]; ?>">
		<input type="hidden" id="name-mei" name="name-mei" value="<?php echo $IDinfo["first_name"]; ?>">
		<p class="warning required" data-validate-target="name-sei"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より名前（姓）を入力ください</p>
		<p class="warning required" data-validate-target="name-mei"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より名前（名）を入力ください</p>
  </div>
</div>

<div class="label req error">
  <h5 class="s-ttl label-ttl">メールアドレス</h5>
  <div class="label-inner">
    <p>PC：<?php echo $IDinfo["mail_add_pc"]; ?></p>
    <p>携帯：<?php echo $IDinfo["mail_add_mb"]; ?></p>
    <input type="hidden" name="email" value="<?php echo $IDinfo["mail_add_pc"]; ?>">
    <input type="hidden" name="email2" value="<?php echo $IDinfo["mail_add_mb"]; ?>">
		<input type="hidden" id="email_dummy" name="email_dummy" value="<?php echo $IDinfo["mail_add_pc"]; ?><?php echo $IDinfo["mail_add_mb"]; ?>">
		<p class="warning required" data-validate-target="email_dummy"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりメールアドレスを入力ください</p>
  </div>
</div>

<hr>

<h2 class="l-ttl">よろしければ登録解除の理由をお聞かせください</h2>
 <label for="contact" class="label">
  <h5 class="label-ttl s-ttl">登録解除理由</h5>
  <div class="label-inner inputTextarea-row">
    <textarea name="contact_memo" id="contact_memo" class="inputTextarea-item"></textarea>
  </div>
</label>

<hr>

<div class="assist policy">
  <h5 class="s-ttl"><span>注意事項</span></h5>
  <p>登録解除すると、現在お持ちのスマイル（長谷工ポイント）が失効します。また、メールマガジンの購読や会員さま限定企画・キャンペーンなどの各種特典が受けられなくなります。登録解除してよろしいですか？</p>
  <ul class="list">
    <li><a href="<?php echo $base_url ?>/rules/" target="_blank">長谷工グループ「ブランシエラクラブ」のサービスご利用について</a></li>
    <li><a href="<?php echo $base_url ?>/rules/id.php" target="_blank">長谷工ID利用規約</a></li>
  </ul>
  <label for="policy" class="inputCheckbox-label">
    <input type="checkbox" id="policy" class="inputCheckbox-item">
    <p>上記の内容に同意する</p>
  </label>
  <p class="warning required">同意をしてください</p>
</div>

<div class="formBtn label error">
  <button type='submit' alt="send" class="formBtn-submit"><span>入力内容を確認する</span></button>
  <p class="warning submitbutton error">未入力項目か、入力内容に誤りがあります</p>
</div>

<?php include ($inc_path."/form/inc/u-formssl.php") ?>

</form>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
