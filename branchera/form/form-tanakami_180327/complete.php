<?php
// 直接URL叩いたときの対策：emailが含まれていなかったらindexへリダイレクト
if(empty($_POST['email'])){
	header('Location: ./index.php');
	exit();
}

//base
include ("../../function.php");
$title ="平成29年産「たなかみ米」限定販売20％OFF特典のお申込み";
$pageTtl = '【送信完了】'.$title;

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

$item_array = array("hasekoid", "name", "name2", "postal-code", "address-level1"
, "tel", "tel2", "email", "email2", "name_other", "name2_other"
, "postal-code_other", "address-level1_other", "tel_other"
, "order",  "contact_memo");

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
if ($_SERVER["HTTP_HOST"] === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[0] = 'anshindeli@haseko.co.jp';
	$_TO_TANTO_EMAIL[1] = 'brancheraclub@haseko.co.jp';
} else {
	// ステージング
	$_TO_TANTO_EMAIL[0] = 'm-amishiro@dji.co.jp';
	$_TO_TANTO_EMAIL[1] = 'm-usui@dji.co.jp';
	$_TO_TANTO_EMAIL[2] = 'otkzh77@gmail.com';
}

$mail_txt = file_get_contents('mail.txt');

foreach ($_TO_TANTO_EMAIL as $value){
	$to_email = $value;
	send_brc_mail($to_email, $from_email, $from_name, $_POST, $item_array, $mail_txt);
}

//お客さま向けメール
$reply_txt = file_get_contents('reply.txt');
if(!empty($_POST['email']) && $_POST['email'] != "なし"){
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
				<?php include ($inc_path."/form/inc/u-send-finish.php") ?>
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
