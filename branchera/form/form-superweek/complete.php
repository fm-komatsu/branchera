<?php
// 直接URL叩いたときの対策：emailとemail2両方含まれていなかったらindexへリダイレクト
if(empty($_POST['email']) && empty($_POST['email2'])){
  header('Location: ./index.php');
  exit();
}

$session_check_switch = "0";
include '../../function.php';
$title = '「長谷工住まいの大相談会」特別セミナー＆イベントご予約フォーム';
$meta_title = '【送信完了】'.$title.' | '.$siteName;
$meta_description = $description;
$body_class = 'sendForm form single';
include($inc_path.'/form/inc/csrf-check-token.php');
?>

<?php include($inc_path.'/form/inc/head.php') ?>
<header id="header">
  <div class="Header">
    <h1 class="log80year"><a href="<?php echo $brc_url ?>" target="_blank"><img src="<?php echo $base_url ?>/img/form/common/logo80year.svg" alt=""></a></h1>
  </div>
</header>
<?php include($inc_path.'/form/inc/mail_config.php') ?>

<?php

$from_email = $_COM_FROM_MAIL;
$from_name = $_COM_FROM_NAME;

$item_array = array("seminar01","seminar01","seminar02","seminar03","seminar04","seminar05","seminar06","seminar07","seminar08", "seminar09","seminar10","name", "name2", "email", "contact_memo");

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
if (HTTP_HOST === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[] = 'toshie_G_sakuraba@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'Shoko_Kagawa@haseko.co.jp';
} else {
	// ステージング
	$_TO_TANTO_EMAIL[] = 'm-amishiro@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'k.ohta@amiten.co.jp';
  $_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
}

$mail_txt = file_get_contents('mail.txt');

foreach ($_TO_TANTO_EMAIL as $value){
  $to_email = $value;
  send_brc_mail($to_email, $_COM_FROM_MAIL_TANTO, $from_name, $_POST, $item_array, $mail_txt);
}

//お客さま向けメール
$reply_txt = file_get_contents('reply.txt');
if(!empty($_POST['email']) && $_POST['email'] != "なし"){
	$to_email = $_POST['email'];
	send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
}
if(!empty($_POST['email2']) && $_POST['email2'] != "なし"){
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

<h2 class="l-ttl mb3">入力内容の送信が完了いたしました</h2>
<p>このたびは、<b>「長谷工住まいの大相談会」特別セミナー＆イベントに</b>ご予約いただきまして、誠にありがとうございます。ご登録いただいたメールアドレスに<b>「自動返信メール」</b>をお送りいたしましたのでご確認ください。</p>
<hr>
<?php include($inc_path.'/form/inc/u-send-info-mail.php') ?>
<div class="assist">
  <h5 class="s-ttl mb3">定員のあるイベントは先着順となります。</h5>
    <p class="mb0">ご予約が完了しても、定員を超えた場合は、イベントにご参加いただけないことがございますので予めご了承ください。その際は、担当者よりご連絡をさせていただきます。</p>
</div>
<?php include($inc_path.'/form/inc/u-send-info-etc.php') ?>
<hr>
<?php include($inc_path.'/form/inc/u-send-close.php') ?>

</div>
</div>
</article>
</main>

<?php include($inc_path.'/form/inc/footer.php') ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include($inc_path.'/form/inc/foot.php') ?>
