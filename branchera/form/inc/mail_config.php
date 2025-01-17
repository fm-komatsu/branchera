<?php

//メール関連
$_DEFAULT_SUBJECT = 'お申込みを受付いたしました。';

//お客様向け送信元のアドレス
$_COM_FROM_MAIL = 'noreply@haseko.co.jp';
//担当者向け送信元のアドレス
$_COM_FROM_MAIL_TANTO = 'brancheraclub@haseko.co.jp';
//送信元のアドレス
$_COM_FROM_NAME = '長谷工グループ「ブランシエラクラブ」事務局';

//POSTを変数に
foreach ($_POST as $key => $value) {
	$$key = htmlspecialchars($value);
}

function send_mail($to_email, $from_email, $from_name, $subject, $mailbody)
{
	$header = "";
	mb_language('uni');
	mb_internal_encoding('utf8');
	$header .= 'From:'.mb_encode_mimeheader($from_name)."<$from_email>\n";
	// $content = stripslashes(han_kaku_to_jen_kaku($mailbody));
	$content = $mailbody;
	//$subject = base64_encode($subject);
	//$subject = "=?iso-2022-jp?b?".$subject."?=";

	if (mb_send_mail($to_email, $subject, $content, $header)) {
		return true;
	} else {
		return false;
	}
}

function send_brc_mail($to_email, $from_email, $from_name, $post, $item_array, $mail_txt)
{
	$mail_txt = explode("\n", $mail_txt);
	$subject = $mail_txt[0];
	$subject = str_replace('{{DATE}}', date('Y/m/d H:i:s', time()), $subject);

	$mailbody = '';
	for ($i = 1;$i < count($mail_txt);++$i) {
		$mailbody .= $mail_txt[$i]."\n";
	}

	$mailbody = str_replace('{{DATE}}', date('Y/m/d H:i:s', time()), $mailbody);
	$mailbody = str_replace('{{USER_AGENT}}', $_SERVER['HTTP_USER_AGENT'], $mailbody);
	$mailbody = str_replace('{{REMOTE_ADDR}}', $_SERVER['REMOTE_ADDR'], $mailbody);
	$mailbody = str_replace('{{REMOTE_HOST}}', $_SERVER['REMOTE_HOST'], $mailbody);
	foreach ($item_array as $key) {
		$mailbody = str_replace("{{{$key}}}", $post[$key], $mailbody);
	}

	send_mail($to_email, $from_email, $from_name, $subject, $mailbody);
}
