<?php
// 直接URL叩いたときの対策：emailとemail2両方含まれていなかったらindexへリダイレクト
if(empty($_POST['email']) && empty($_POST['email2'])){
  header('Location: ./index.php');
  exit();
}

//base
include ("../../function.php");
$title ="ブルーノートグループ特典のお申込み";
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

$item_array = array("hasekoid", "name", "name2", "tel","tel2", "email","email2"
, "place", "order-year", "order-month", "order-day", "order-name", "order-amount", "order-when", "contact_memo");

$place = $_POST['place'];

//内部向けメール：担当者メールアドレス
$_TO_TANTO_EMAIL = array();
if (HTTP_HOST === "www.haseko.co.jp") {
  // 本番環境 TODO:正しい設定
  if($place=='ブルーノート東京'){
    $_TO_TANTO_EMAIL[] = 'club@bluenote.co.jp';
    $_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
  }elseif($place=='モーション・ブルー・ヨコハマ'){
    $_TO_TANTO_EMAIL[] = 'club@motionblue.co.jp';
    $_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
  }elseif($place=='コットンクラブ'){
    $_TO_TANTO_EMAIL[] = 'club@cottonclubjapan.co.jp';
    $_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
  }else{
    $_TO_TANTO_EMAIL[] = 'brancheraclub@haseko.co.jp';
  }
} else {
  // ステージング
  if($place=='ブルーノート東京'){
    $_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
    $_TO_TANTO_EMAIL[] = 'k.ohta+bluenote@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'amishiro+bluenote@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
  }elseif($place=='モーション・ブルー・ヨコハマ'){
    $_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
    $_TO_TANTO_EMAIL[] = 'k.ohta+motionblue@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'amishiro+motionblue@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
  }elseif($place=='コットンクラブ'){
    $_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
    $_TO_TANTO_EMAIL[] = 'k.ohta+cottonclub@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'amishiro+cottonclub@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
  }else{
    $_TO_TANTO_EMAIL[] = 'm-usui@dji.co.jp';
    $_TO_TANTO_EMAIL[] = 'k.ohta+other@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'amishiro+other@amiten.co.jp';
    $_TO_TANTO_EMAIL[] = 'Toshie_Sakuraba@haseko.co.jp';
  }
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
