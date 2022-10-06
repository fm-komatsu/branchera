<?php
header("Content-Type: application/json; charset=utf-8");

//base
include("../../../function.php");

// アクセス制限
// リファラ
$referer = isset($_SERVER["HTTP_REFERER"]) ?$_SERVER["HTTP_REFERER"]:"";
// 自分のサーバのbranchera領域
$brc_host = HTTP_HOST . "/branchera/";
$brc_host_test = HTTP_HOST . "/branchera_test/";
// 自分のサーバのbranchera領域からのアクセスでなければ404
if(!strpos($referer, $brc_host) && !strpos($referer, $brc_host_test)){
	header("HTTP/1.1 404 Not Found");
	exit();
}

// 開発サーバー・長谷工ステージングサーバー用にCORSを開放
if (
	HTTP_HOST === "brc.aws-testserver.com" ||
	HTTP_HOST === "branchera.aws-testserver.com" ||
	HTTP_HOST === "stage.haseko.co.jp"
) {
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: *");
	header("Access-Control-Allow-Headers: *");
}

// 読んだねポイント
require_once '../../../flp/flp_connection_point.php';
require_once '../point.php';
// POST以外受け付けない
if ($_SERVER["REQUEST_METHOD"] != "POST") {
	header("HTTP/1.1 404 Not Found");
	exit();
}
//セッション開始
session_start();
$member_card_no = isset($_SESSION[SESSION_MEMBER_INFO]['member_card_no']) ? $_SESSION[SESSION_MEMBER_INFO]['member_card_no'] : "";

// デバッグ用
if ($_POST["debug"]) {
	$member_card_no = "0100052256";
}
if ($member_card_no === "") {
	echo make_json("ログイン後お試しください", "failed", "101", "member_card_noがセッションにない");
	exit();
}
// identification_id
if (isset($_POST["identification_id"])) {
	$identification_id = $_POST["identification_id"];
} else {
	echo make_json("IDがセットされていません", "failed", "102", "IDがセットされていません");
	exit();
}
// check pointList.json
if ($ret = check_json($identification_id)) {
	if ($ret->active == false) {
		echo make_json("アクティブでないIDです", "failed", "103", "non-active ID");
		exit();
	}
} else {
	echo make_json("登録されていないIDです", "failed", "104", "jsonにないID");
	exit();
}
$pntValue = $ret->pnt_value;
$reason = $ret->reason;

$connection = new FlpConnectionPoint();
$res = $connection->hstMngPntGrant(
	$identification_id,
	$member_card_no,
	$pntValue,
	$reason
);
if ($res->result_code == "00") {
	echo make_json("正常終了", "success", "", "", $pntValue);
	exit();
} elseif ($res->result_code == "10") {
	echo make_json("BRCAPIエラー", "failed", "10", "BRCAPIエラー：リクエストパラメータを確認してください。");
	exit();
} elseif ($res->result_code == "20") {
	echo make_json("BRCAPIエラー", "failed", "20", "BRCAPIエラー：企業コードまたはAPIキーを確認してください。");
	exit();
} elseif ($res->result_code == "30") {
	echo make_json("ポイントが付与できませんでした。すでに退会済みか、存在しない会員情報です。", "failed", "30", "ポイントが確認できませんでした。すでに退会済みか、存在しない会員情報です。");
	exit();
} elseif ($res->result_code == "41") {
	echo make_json("システムエラーが発生しました。しばらく時間をおいて再度お試しください。", "failed", "41", "システムエラーが発生しました。しばらく時間をおいて再度お試しください。");
	exit();
} elseif ($res->result_code == "42") {
	echo make_json("すでに取得済みのため、ポイント取得ができませんでした。", "already", "", "");
	exit();
} elseif ($res->result_code == "52") {
	echo make_json("システムエラーが発生しました。しばらく時間をおいて再度お試しください。", "failed", "52", "システムエラーが発生しました。しばらく時間をおいて再度お試しください。");
	exit();
} elseif ($res->result_code == "99") {
	echo make_json("システムエラーが発生しました。しばらく時間をおいて再度お試しください。", "failed", "99", "システムエラーが発生しました。しばらく時間をおいて再度お試しください。");
	exit();
}
