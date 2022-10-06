<?php
//base
$session_check_switch = "0";
include("../../function.php");
$pageTtl = '長谷工グループ「ブランシエラクラブ」へお問い合わせ';
$title  = $pageTtl;

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
$_COM_FROM_MAIL_TANTO = 'brancheraclub@haseko.co.jp';

$item_array = array(
	"hasekoid", "name", "name2", "postal-code", "address-level1", "tel", "email", "email2", "contact_memo"
);

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
if (HTTP_HOST === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'brancheraclub@z-31lwc4ne2s76jfki9qqfkfhv8xg73hxk3i7nshoor9n2dkpqaa.2v-1dgl2eai.ap13.case.salesforce.com';
} else {
	// ステージング
	$_TO_TANTO_EMAIL[] = 'm-amishiro@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
	$_TO_TANTO_EMAIL[] = 'k.ohta@amiten.co.jp';
	$_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'Asaki_Yoshida@haseko.co.jp';
	$_TO_TANTO_EMAIL[] = 'brancheraclub@2vtx2hj7y88vay4i70z5wpaamusk80crqki2iixrl0t8gnu0sj.0l-2h66eae.cs58.case.sandbox.salesforce.com';
}

if ($ssoFlag == 1) {
	$mail_txt = file_get_contents('mail-member.txt');
} else {
	$mail_txt = file_get_contents('mail.txt');
}

foreach ($_TO_TANTO_EMAIL as $value) {
	$to_email = $value;
	send_brc_mail($to_email, $_COM_FROM_MAIL_TANTO, $from_name, $_POST, $item_array, $mail_txt);
}

//お客さま向けメール
if ($ssoFlag == 1) {
	$reply_txt = file_get_contents('reply-member.txt');
} else {
	$reply_txt = file_get_contents('reply.txt');
}


if ($_POST['email'] != "" || $_POST['email'] != "なし") {
	$to_email = $_POST['email'];
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
				$tName = 'ブランシエラクラブへお問い合わせ';
				include $inc_path . '/form/inc/u-send-finish.php';
				?>
				<?php include($inc_path . '/form/inc/u-send-info-mail.php') ?>
				<?php include($inc_path . '/form/inc/u-send-info-respons.php') ?>
				<?php include($inc_path . '/form/inc/u-send-info-etc.php') ?>
				<hr>
				<?php include($inc_path . '/form/inc/u-send-close.php') ?>

			</div>
		</div>
	</article>
</main>

<?php include($inc_path . '/form/inc/footer.php') ?>
<?php include($inc_path . '/form/inc/foot.php') ?>
