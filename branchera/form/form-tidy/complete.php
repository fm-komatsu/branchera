<?php
error_reporting(0);
// 直接URL叩いたときの対策：emailとemail2両方含まれていなかったらindexへリダイレクト
if(empty($_POST['email']) && empty($_POST['email2'])){
  header('Location: ./index.php');
  exit();
}

//base
include ("../../function.php");
$title ="整理収納サービスのお申込み";
$pageTtl = '【送信完了】'.$title;

//csrf
include($inc_path.'/form/inc/csrf-check-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="sendForm form single";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
include($inc_path.'/form/inc/mail_config.php');
?>
<?php

$from_email = $_COM_FROM_MAIL;
$from_name = $_COM_FROM_NAME;

$item_array = array("hasekoid", "pnt_value", "name", "name2", "postal-code", "address-level1", "tel","tel2", "email","email2", "menu"
, "smile", "smilePoint", "service", "details", "building_type", "building_name_no", "time_string", "date", "flyer", "contact_memo");

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();


if (HTTP_HOST === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[] = 'hcgcc-suteki@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'hc_cr@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'info@ouchi-detox.com';
	$_TO_TANTO_EMAIL[] = 'Masahiro_Tsukada@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'Noriko_Miyasaka@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'Yasuhiro_Shimoda@haseko.co.jp';
} else {
	// ステージング
	$_TO_TANTO_EMAIL[] = 'k.ohta@amiten.co.jp';
	$_TO_TANTO_EMAIL[] = 'm-amishiro@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
  $_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
  $_TO_TANTO_EMAIL[] = 'nonoyama@f-marketing.jp';
  $_TO_TANTO_EMAIL[] = 'ishii@f-marketing.jp';
  $_TO_TANTO_EMAIL[] = 'yamasaki@f-marketing.jp';
  $_TO_TANTO_EMAIL[] = 'komatsu@f-marketing.jp';
}

$mail_txt = file_get_contents('mail.txt');

foreach ($_TO_TANTO_EMAIL as $value){
	$to_email = $value;
	send_brc_mail($to_email, $_COM_FROM_MAIL_TANTO, $from_name, $_POST, $item_array, $mail_txt);
}

//お客さま向けメール
$reply_txt = file_get_contents('reply.txt');
if(!empty($_POST['email_other']) && $_POST['email_other'] != "なし"){
	$to_email = $_POST['email_other'];
	send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
}else{
	if(!empty($_POST['email']) && $_POST['email'] != "なし"){
		$to_email = $_POST['email'];
		send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
	}
	if(!empty($_POST['email2']) && $_POST['email2'] != "なし"){
		$to_email = $_POST['email2'];
		send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
	}
}

?>
<main id="main">
	<article>

		<header class="MainHead">
			<div class="MainHead-inner">
				<p class="MainHead-sub">送信完了</p>
				<h1 class="MainHead-ttl">整理収納サービス</h1>
			</div>
		</header>

		<div id="container">
			<div id="cont">

				<hr class="mt0">
				<h2 class="l-ttl mb3">入力内容の送信が完了いたしました</h2>
				<p>このたびは、整理収納サービスにお申込みいただきまして、誠にありがとうございます。ご登録いただいたメールアドレスに<b>「自動返信メール」</b>をお送りいたしましたのでご確認ください。</p>
				<p>担当者または協力会社より、電話にて、改めて内容確認の連絡をさせていただきます。</p>
				<hr>
				<?php include ($inc_path."/form/inc/u-send-info-mail.php") ?>
				<?php include ($inc_path."/form/inc/u-send-info-etc_to_e-suteki.php") ?>
				<hr>
				<?php include ($inc_path."/form/inc/u-send-close.php") ?>

			</div>
		</div>
	</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
