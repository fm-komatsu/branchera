<?php

function click_point_article($content)
{
	// クエリpage_cl_mailがない場合は返す
	if (!isset($_GET["page_cl_mail"])) {
		return;
	}
	$page_cl_mail = $_GET["page_cl_mail"];
	foreach ($content["page_cl_mail"] as $key => $val) {
		if ($page_cl_mail == $val) {
			$url = $content["url"];
			// $base_url使えないので、転送先が何階層上の/point/get/mail/…なのかを$urlから求める
			$dir_level = str_repeat("../", substr_count($url, '/') - 1);

			$flp_cl_mail = $content["flp_cl_mail"][$key];
			$expiry_cl_mail = $content["expiry_cl_mail"][$key];
			header("location:" . $dir_level . "point/get/mail/" . $val
				. "/?" .  $_SERVER['QUERY_STRING']
				. "&url=" . $url
				. "&flp_cl_mail=" . $flp_cl_mail
				. "&expiry_cl_mail=" . $expiry_cl_mail);
		}
	}
}
function click_point_landing()
{
	// 必要要素をパラメータから取得
	$page_cl_mail = $_GET["page_cl_mail"];
	$flp_cl_mail = $_GET["flp_cl_mail"];
	$expiry_cl_mail = $_GET["expiry_cl_mail"];
	$url = $_GET["url"];

	// 有効期限表記変換
	$week = array("日", "月", "火", "水", "木", "金", "土");
	$format1 = "Y年m月d日（";
	$format2 = ")";
	$str_time = $expiry_cl_mail . " 00:00:00";
	$timestamp = strtotime($str_time);
	$mail_expiration =  date($format1, $timestamp) . $week[date('w', $timestamp)] . "）";

	// 期限切れ判定プログラム
	$date_expiration =  new DateTime($expiry_cl_mail . " 23:59:59");
	$now = new DateTime('now');
	if ($now > $date_expiration) {
		header("location:../expiration/?" . $_SERVER['QUERY_STRING']);
	}
	// 必要要素をセッション格納
	session_start();
	$_SESSION["cl_mail"] = array(
		"url" => $url,
		"flp_cl_mail" => $flp_cl_mail,
		"expiry_cl_mail" => $expiry_cl_mail
	);
	return array(
		"flp_cl_mail" => $flp_cl_mail,
		"expiry_cl_mail" => $expiry_cl_mail,
		"url" => $url,
		"mail_expiration" => $mail_expiration
	);
}

function click_point_result()
{
	// ポイント付与フラグが存在しなければ異常終了
	if (!isset($_GET["pnt"])) {
		error_end();
	}
	// すでに付与されていたら転送
	if ($_GET["pnt"] == 0) {
		header("location:../result-already/?" . $_SERVER["QUERY_STRING"]);
		exit();
	}
	// URLをセッションから取得
	session_start();
	if ($_SESSION["cl_mail"]) {
		$url = $_SESSION["cl_mail"]["url"];
		$expiry_cl_mail = $_SESSION["cl_mail"]["expiry_cl_mail"];
		$_SESSION["cl_mail"] = array();
	} else {
		// セッションにない場合はURLクエリから探す（リロード対策）
		if (isset($_GET["url"]) && isset($_GET["expiry_cl_mail"])) {
			$url = $_GET["url"];
			$expiry_cl_mail = $_GET["expiry_cl_mail"];
		} else {
			error_end();
		}
	}
	// 期限切れ判定プログラム
	$date_expiration =  new DateTime($expiry_cl_mail . " 23:59:59");
	$now = new DateTime('now');
	if ($now > $date_expiration) {
		error_end();
	}
	return array("url" => $url, "expiry_cl_mail" => $expiry_cl_mail);
}

function click_point_result_already()
{
	// ポイント付与フラグが存在しなければ異常終了
	if (!isset($_GET["pnt"])) {
		error_end();
	}
	// URLをセッションから取得
	session_start();
	if ($_SESSION["cl_mail"]) {
		$url = $_SESSION["cl_mail"]["url"];
		$expiry_cl_mail = $_SESSION["cl_mail"]["expiry_cl_mail"];
		$_SESSION["cl_mail"] = array();
	} else {
		// セッションにない場合はURLクエリから探す（リロード対策）
		if (isset($_GET["url"]) && isset($_GET["expiry_cl_mail"])) {
			$url = $_GET["url"];
			$expiry_cl_mail = $_GET["expiry_cl_mail"];
		} else {
			error_end();
		}
	}
	// 期限切れ判定プログラム
	$date_expiration =  new DateTime($expiry_cl_mail . " 23:59:59");
	$now = new DateTime('now');
	if ($now > $date_expiration) {
		error_end();
	}

	return array("url" => $url, "expiry_cl_mail" => $expiry_cl_mail);
}

function error_end()
{
	header("HTTP/1.0 404 Not Found");
	header("location:../../../../../http404/");
	exit();
}
