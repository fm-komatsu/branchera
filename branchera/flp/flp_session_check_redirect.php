<?php
require_once $inc_path . '/flp/flp_connection.php';

//セッション開始
session_start();

// 毎回初期化
unset($_SESSION[SESSION_MEMBER_INFO]);

$connection = new FlpConnection();
//セッションからリフレッシュトークン取得
$refreshToken = isset($_SESSION[SESSION_REFRESH_TOKEN]) ? $_SESSION[SESSION_REFRESH_TOKEN]: null;
// リフレッシュトークンがある場合有効性をチェック(会員情報も取得)
if (is_null($refreshToken) === false) {
    $result = $connection->ssoApiVerificationAndGetMemberInfo($refreshToken);
    if (is_null($result) === false) {
        //結果確認
        if (strval($result->result_code) === FLP_API_RESULT_CODE_OK) {
            $memberInfo = json_decode(json_encode($result->member_info),TRUE);
            //区分確認
            if (intval($memberInfo["access_control_div"]) == MEMBER_INFO_ACCESS_CONTROL_DIV_ENABLE) {
                $_SESSION[SESSION_MEMBER_INFO] = $memberInfo;
            }
        } else if (strval($result->result_code) == FLP_API_RESULT_CODE_ERROR_REFRESH_TOKEN) {
            // リフレッシュトークンが不正なので再取得
            $refreshToken = null;
            unset($_SESSION[SESSION_REFRESH_TOKEN]);
        }
    }
}

/**
 * ・セッションにリフレッシュトークンと認証用の会員情報が保持されていない場合
 * ・リフレッシュトークンエラーが返却された場合
 * セッション確認リダイレクトから戻ってきたときはチェックしない
 */
if (is_null($refreshToken) && (isset($_SESSION[SESSION_REDIRECT_ERROR]) === false)) {
    //実際に遷移したかったURLをセションに保存
    $currentURL = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . HTTP_HOST . $_SERVER["REQUEST_URI"];
    $_SESSION[SESSION_NEXT_URL] = $currentURL;
    $connection->ssoCheck(array(FLP_QUERY_DISPATCH => $currentURL));
    exit;
}
unset($_SESSION[SESSION_REDIRECT_ERROR]);

?>