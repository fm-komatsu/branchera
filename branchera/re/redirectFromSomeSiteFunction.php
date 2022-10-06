<?php
/**
 * SSOチェック付きのリダイレクト関数
 *
 * 使用例：
 * include_once ("./redirectFromFunction.php");
 * redirectFromFunction('/smile');
 *
 * @param String $to ログイン時リダイレクト先
 * @param String $toNoSso 未ログイン時リダイレクト先
 * @return Void 該当箇所へリダイレクト
 */
function redirectFromSomeSiteFunction( $to = '/', $toNoSso = '/http404') {

	// SSOチェクを有効化
	$flp_check_redirect = true;

	// function.php読み込み
	include_once (dirname(__FILE__)."/../function.php");

	// SSO（ログイン済）判定でリダイレクト
	if ($ssoFlag === 1) {
		header("Location: ".$base_url.$to);
		exit;
	}else{
		header("Location: ".$base_url.$toNoSso);
		exit;
	};

}
?>
