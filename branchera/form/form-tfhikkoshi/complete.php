<?php
// 直接URL叩いたときの対策：emailとemail2両方含まれていなかったらindexへリダイレクト
if(empty($_POST['email']) && empty($_POST['email2'])){
  header('Location: ./index.php');
  exit();
}

//base
include ("../../function.php");
$title ="トレファク引越 見積り依頼";
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

$item_array = array(
	"hasekoid",
	"name",
	"name-sei",
	"name-mei",
	"name2",
	"name-sei-kana",
	"name-mei-kana",
	"postal-code",
	"address-level1",
	"new-address",
	"tel",
	"tel2",
	"tel-dummy",
	"email",
	"email2",
	"email_dummy",
	"hikkoshi-year",
	"hikkoshi-month",
	"hikkoshi-day",
	"mitsumori-year",
	"mitsumori-month",
	"mitsumori-day",
	"hikkoshi-madori",
	"hikkoshi-amount",
	"renraku",
	"sell",
	"contact_memo"
	#"inet_guide",
	#"water_guide",
	#"sellcar"
);

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
if (HTTP_HOST === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[] = 'hikkoshi@treasure-f.com';
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
				<h1 class="MainHead-ttl"><?php echo $title ?></h1>
			</div>
		</header>

		<div id="container">
			<div id="cont">

				<p>このたびは、<b><?php echo $title ?></b>をいただきまして、誠にありがとうございます。ご登録いただいたメールアドレスに<b>「自動返信メール」</b>をお送りいたしましたのでご確認ください。</p>
				<p>通常、3営業日ほどで、担当者よりご連絡させていただきます。</p>

				<?php include ($inc_path."/form/inc/u-send-info-mail.php") ?>
				<?php include ($inc_path."/form/inc/u-send-info-respons.php") ?>
				<?php include ($inc_path."/form/inc/u-send-info-etc.php") ?>
				<hr>
				<?php include ($inc_path."/form/inc/u-send-close.php") ?>

			</div>
		</div>
	</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
