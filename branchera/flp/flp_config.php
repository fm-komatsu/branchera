<?php

define("FLP_HTTP", "https://");

/**
 * HTTP_HOSTを定義
 *
 * プロキシ経由の場合はHTTP_X_FORWARDED_HOSTを、ない場合はHTTP_HOSTを取得します。
 * 複数ある場合は、先頭のHOSTを定義します。
 *
 * @return void HTTP_HOSTを定義
 */
function defineHttpHost() {
	// HOSTデーターを取得
	if (isset($_SERVER["HTTP_X_FORWARDED_HOST"])) {
		$hostString = $_SERVER["HTTP_X_FORWARDED_HOST"];
	} else {
		$hostString = $_SERVER["HTTP_HOST"];
	}
	// 「,」で分割
	$hostAry = explode(",", $hostString);
	// はじめのHOSTを定義
	define('HTTP_HOST',$hostAry[0]);
}
defineHttpHost();

/**
 * FLP承認関連の定義
 *
 * 接続HOST
 * 「現」HASEKOサーバー（www.haseko.co.jp） -> 本番FLP
 * 「新」HASEKOテストサーバー（www1.haseko.co.jp）-> 本番FLP
 * 「新」HASEKOサーバー（stage.ism.life）-> 本番FLP
 * 「現」開発サーバー（brc.aws-testserver.com） -> ステージングFLP
 * 「新」開発サーバー（branchera.aws-testserver.com） -> ステージングFLP
 * 「新」HASEKOステージングサーバー（stage.haseko.co.jp） -> ステージングFLP
 */
if (HTTP_HOST === "www.haseko.co.jp" ||
    HTTP_HOST === "www1.haseko.co.jp" ||
    HTTP_HOST === "stage.ism.life") {
    // 本番環境 TODO:正しい設定
    define("BASIC_USER",     "");
    define("BASIC_PASSWORD", "");
    define("FLP_DOMAIN",     "haseko.flpjp.com");
    define("FLP_API_DOMAIN", "api-haseko.flpjp.com");
    // 証明書
    define("FLP_API_CERTIFICATE_DIR",  $inc_path . "/flp/");
    define("FLP_API_CERTIFICATE_FILE", "prd_api_haseko_client.pem");
    /** APIキー*/
    define ("FLP_API_KEY_KEY", "api_key");
    define ("FLP_API_KEY_VAL", "8238614f8bc75e49791d25931ec75e7f9b5e64ff");
} else {
    // ステージング
    //define("BASIC_USER",     "flp-user01");
    //define("BASIC_PASSWORD", "v5haxf");
    define("BASIC_USER",     "");
    define("BASIC_PASSWORD", "");
    define("FLP_DOMAIN",     "stg-haseko-blue.dev.fanlife-platform.com");
    define("FLP_API_DOMAIN", "stg-api-haseko-blue.dev.fanlife-platform.com");
    // 証明書
    define("FLP_API_CERTIFICATE_DIR",  $inc_path . "/flp/");
    define("FLP_API_CERTIFICATE_FILE", "stg_api_haseko-blue_client.pem");
    /** APIキー*/
    define ("FLP_API_KEY_KEY", "api_key");
    define ("FLP_API_KEY_VAL", "b94be9cce1a888ba9ddefa3f9e92b2c202a200b1");
}

/**
 * FLPのexternalUrl定義（パラメーター付き）
 *
 * 接続HOST毎のパラメーター
 * 「現」HASEKOサーバー（www.haseko.co.jp） -> なし
 * 「新」HASEKOテストサーバー（www1.haseko.co.jp）-> _1
 * 「新」HASEKOサーバー（stage.ism.life）-> _ism
 * 「現」開発サーバー（brc.aws-testserver.com） -> なし
 * 「新」開発サーバー（branchera.aws-testserver.com） -> _dev
 * 「新」HASEKOステージングサーバー（stage.haseko.co.jp） -> _stg
 *
 * @return void パラメーター付きのexternalUrlの定義
 */
function defineExternalUrls() {
  switch (HTTP_HOST) {
    case 'www1.haseko.co.jp':
        $param =  "_1";
        break;
    case 'stage.ism.life':
        $param =  "_ism";
        break;
    case 'branchera.aws-testserver.com':
        $param =  "_dev";
        break;
    case 'stage.haseko.co.jp':
        $param = "_stg";
        break;
    default:
        $param = "";
  }
  // ログイン
  define("FLP_ExternalUrlForLogin", "/externalUrlForLogin/ext_login_brc". $param);
  // ログアウト
  define("FLP_ExternalUrlForLogout", "/externalUrl/sso_logout_brc". $param);
  // SSOチェック
  define("FLP_ExternalUrlForAuth", "/externalUrlForAuth/sso_check_brc" . $param);
}
defineExternalUrls();

/** FLPフロントURL*/
define("FLP_URL",     FLP_HTTP . FLP_DOMAIN);
/** FLP APIURL*/
define("FLP_API_URL", FLP_HTTP . FLP_API_DOMAIN);

// FLP API関連の定義

/** 企業コード*/
define ("FLP_COMPANY_CD_KEY", "company_cd");
define ("FLP_COMPANY_CD_VAL", "hc00000002");

/** リフレッシュトークン */
define ("FLP_REFRESH_TOKEN_KEY", "refresh_token");

/** 会員情報取得フラグ(固定で取得) */
define ("FLP_MEMBER_INFO_FLG_KEY", "member_info_flg");
define ("FLP_MEMBER_INFO_FLG_VAL", "1");

/** API結果コード:正常 */
define ("FLP_API_RESULT_CODE_OK", "00");

/** API結果コード:リフレッシュトークンエラー */
define ("FLP_API_RESULT_CODE_ERROR_REFRESH_TOKEN", "33");

// FLPフロント関連の定義

/** 送信時遷移先URLキー*/
define ("FLP_QUERY_DISPATCH", "dispatch");

/** リダイレクト結果：成功時遷移先URLクエリキー*/
define ("FLP_REDIRECT_QUERY_DISPATCH",      FLP_QUERY_DISPATCH);
/** リダイレクト結果：成功時リフレッシュトークンクエリキー*/
define ("FLP_REDIRECT_QUERY_REFRESH_TOKEN", "refresh_token");
/** リダイレクト結果：失敗時エラークエリクエリ*/
define ("FLP_REDIRECT_QUERY_ERROR",         "error");


// セッション関連の定義
/** リフレッシュトークンセッションキー */
define ("SESSION_REFRESH_TOKEN", "refresh_token");

/** 会員情報 */
define ("SESSION_MEMBER_INFO",    "member_info");

/** 次の遷移先URL */
define ("SESSION_NEXT_URL",       "next_url");

/** リダイレクトエラー */
define ("SESSION_REDIRECT_ERROR", "redirect_error");

// 会員情報の定義

/** アクセス区分有効 */
define ("MEMBER_INFO_ACCESS_CONTROL_DIV_ENABLE", 1);

?>
