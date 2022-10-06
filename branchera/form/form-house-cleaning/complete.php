<?php
error_reporting(0);

// 直接URL叩いたときの対策：emailとemail2両方含まれていなかったらindexへリダイレクト
if (empty($_POST['email']) && empty($_POST['email2'])) {
	header('Location: ./index.php');
	exit();
}

//base
include("../../function.php");
$title = "ハウスクリーニングのお申込み";
$pageTtl = '【送信完了】' . $title;

//csrf
include($inc_path.'/form/inc/csrf-check-token.php');

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "sendForm form single";

//htmlHeader
include($inc_path . '/form/inc/head.php');
include($inc_path . '/form/inc/header.php');
include($inc_path . '/form/inc/mail_config.php');
?>
<?php

$from_email = $_COM_FROM_MAIL;
$from_name = $_COM_FROM_NAME;

// 担当者向けの送信元アドレス上書き
$_COM_FROM_MAIL_TANTO = 'brc-cleaning@haseko.co.jp';

$item_array = array(
	"hasekoid", "pnt_value", "name", "name2", "postal-code", "address-level1", "tel", "tel2", "email", "email2", "menu", "smile", "smilePoint", "contact_memo", "flyer", "building_type", "building_name"
);

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();


if (HTTP_HOST === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[] = 'brc-cleaning@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'brc-cleaning@2z3ciaj7sam9x8qn5vfgcd3lcd2g7m07fdj0fg5xl72cofs7b2.2v-1dgl2eai.ap13.case.salesforce.com';
} else {
	// ステージング
	$_TO_TANTO_EMAIL[] = 'k.ohta@amiten.co.jp';
	$_TO_TANTO_EMAIL[] = 'm-amishiro@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'brc-cleaning@32yo3ghkppxw4mvx9j6wko80ogfdp6m5435j8yp9jg8bgquk7.0l-2h66eae.cs58.case.sandbox.salesforce.com';
}

$mail_txt = file_get_contents('mail.txt');

foreach ($_TO_TANTO_EMAIL as $value) {
	$to_email = $value;
	send_brc_mail($to_email, $_COM_FROM_MAIL_TANTO, $from_name, $_POST, $item_array, $mail_txt);
}

//お客さま向けメール
$reply_txt = file_get_contents('reply.txt');
if (!empty($_POST['email_other']) && $_POST['email_other'] != "なし") {
	$to_email = $_POST['email_other'];
	send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
} else {
	if (!empty($_POST['email']) && $_POST['email'] != "なし") {
		$to_email = $_POST['email'];
		send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $reply_txt);
	}
	if (!empty($_POST['email2']) && $_POST['email2'] != "なし") {
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
				<h1 class="MainHead-ttl">ハウスクリーニング</h1>
			</div>
		</header>

		<div id="container">
			<div id="cont">

				<hr class="mt0">
				<h2 class="l-ttl mb3">入力内容の送信が完了いたしました</h2>
				<p>このたびは、ハウスクリーニングにお申込みいただきまして、誠にありがとうございます。ご登録いただいたメールアドレスに<b>「自動返信メール」</b>をお送りいたしましたのでご確認ください。</p>
				<p>担当者または協力会社より、電話にて、改めて内容確認の連絡をさせていただきます。</p>
				<hr>
				<?php include($inc_path . "/form/inc/u-send-info-mail.php") ?>
				<?php include($inc_path . "/form/inc/u-send-info-etc_to_e-suteki.php") ?>
				<hr>
				<?php include($inc_path . "/form/inc/u-send-close.php") ?>

			</div>
		</div>
	</article>
</main>

<?php include($inc_path . "/form/inc/footer.php") ?>
<?php include($inc_path . "/form/inc/foot.php") ?>
