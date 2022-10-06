<?php
// セッションチェックを行わずfunction.phpを読み込む
define ("IGNORE_SESSION_CHECK", true);
require_once '../function.php';

//セッション開始
session_start();

$replaceURL = "/branchera";
//エラーチェック
if (isset($_GET[FLP_REDIRECT_QUERY_ERROR])) {
    $_SESSION[SESSION_REDIRECT_ERROR] = $_GET[FLP_REDIRECT_QUERY_ERROR];
} else if (isset($_GET[FLP_REDIRECT_QUERY_REFRESH_TOKEN]) && isset($_GET[FLP_REDIRECT_QUERY_DISPATCH])){
    //リフレッシュトークンをセッションに保存
    $_SESSION[SESSION_REFRESH_TOKEN] = $_GET[FLP_REDIRECT_QUERY_REFRESH_TOKEN];
    $replaceURL = $_GET[FLP_REDIRECT_QUERY_DISPATCH];
}
if (isset($_SESSION[SESSION_NEXT_URL])) {
    $replaceURL = $_SESSION[SESSION_NEXT_URL];
    unset($_SESSION[SESSION_NEXT_URL]);
}

header('location: '.$replaceURL);
exit();

//echo '
//<script type="text/javascript" language="javascript">
//<!--
    //location.replace("' . $replaceURL . '");
// -->
//</script>
//';
