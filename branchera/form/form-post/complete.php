<?php
include ("../../function.php");
$title ="みなさまの「ご意見・ご要望」をポストへ投稿";
$meta_title = '【送信完了】'.$title.' | '.$siteName;
$meta_description = $description;
$body_class ="sendForm form single";
?>

<?php include ($inc_path."/form/inc/head.php") ?>
<?php include ($inc_path."/form/inc/header.php") ?>
<?php include($inc_path.'/form/inc/mail_config.php') ?>

<?php

$from_email = $_COM_FROM_MAIL;
$from_name = $_COM_FROM_NAME;

$item_array = array("hasekoid", "name", "name2", "postal-code", "address-level1", "tel","tel2", "email","email2", "types", "contact_memo");

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
$_TO_TANTO_EMAIL[0] = 'brancheraclub@haseko.co.jp';

$mail_txt = file_get_contents('mail.txt');

foreach ($_TO_TANTO_EMAIL as $value){
  $to_email = $value;
  send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $mail_txt);
}

//お客さま向けメール
$reply_txt = file_get_contents('reply.txt');
if($_POST['email'] != "" || $_POST['email'] != "なし"){
  $to_email = $_POST['email'];
  send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
}
if($_POST['email2'] != "" || $_POST['email2'] != "なし"){
  $to_email = $_POST['email2'];
  send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
}
?>
<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <p class="MainHead-sub">送信完了</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php
  $tantou = "";
  include ($inc_path."/form/inc/u-send-finish.php");
?>
<?php include ($inc_path."/form/inc/u-send-info-mail.php") ?>
<?php include ($inc_path."/form/inc/u-send-info-etc.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-send-close.php") ?>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/form/inc/foot.php") ?>
