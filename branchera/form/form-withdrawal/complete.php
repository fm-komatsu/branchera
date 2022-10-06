<?php
// 直接URL叩いたときの対策：emailとemail2両方含まれていなかったらindexへリダイレクト
if(empty($_POST['email']) && empty($_POST['email2'])){
  header('Location: ./index.php');
  exit();
}

//base
include ("../../function.php");
$title ="長谷工IDの登録解除";
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

$item_array = array("hasekoid", "name", "email", "email2" , "contact_memo");

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
if (HTTP_HOST === "www.haseko.co.jp") {
	// 本番環境 TODO:正しい設定
	$_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
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

				<?php include ($inc_path."/form/inc/u-formflow.php") ?>

				<hr class="mt0">

				<h2 class="l-ttl">長谷工ID登録解除の受付が完了いたしました</h2>

				<p>このたびは、ブランシエラクラブをお引き立ていただきありがとうございました。登録解除処理が完了するまで２〜３営業日のお時間をいただいております。また、登録解除のタイミングによりメールマガジンが数回配信される可能性がありますのでご了承ください。</p>

				<hr>
				<div class="assist">
					<h5 class="s-ttl mb3">数日たっても、登録解除が完了しない場合</h5>
					<p class="mb0">万一、登録解除処理が遅れている場合は、登録解除受付が完了していない可能性がございますので、お手数ですが<a href="<?php echo $base_url ?>/form/form-contact/" target="_blank">こちらより</a>お問い合わせをお願いいたします。</p>
				</div>
				<?php include ($inc_path."/form/inc/u-send-info-etc.php") ?>
				<hr>
				<?php include ($inc_path."/form/inc/u-send-close.php") ?>

			</div>
		</div>
	</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
