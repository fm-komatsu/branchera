<?php
// Date関数エラー対策（本番環境にtimezone設定がないため）
date_default_timezone_set('Asia/Tokyo');

#1) [ $base_url ]を、ディレクトリ構成に合わせて修正してください
$base_url = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__FILE__));

#2) 開発環境に合わせて、エラーハンドリングしてください
ini_set('display_errors', 0);

#3）開発環境に合わせて、サーバーのフルパスを取得してください
$inc_path = (dirname(__FILE__));

#--------- sso/flpAPI関連 -------#

require_once $inc_path . '/flp/flp_config.php';

if (!defined("IGNORE_SESSION_CHECK") || IGNORE_SESSION_CHECK === false) {
	if(isset($flp_check_redirect)){
		#echo "flp_check_redirect = true";
		require_once $inc_path . '/flp/flp_session_check_redirect.php';
	}else{
		#echo "flp_check_redirect = false";
		require_once $inc_path . '/flp/flp_session_check.php';
	}
}

include ($inc_path."/lib/functions/ssoFlag_IDinfo.php");

#--------- Login/Logout関連 -------#

include ($inc_path."/lib/functions/ssoGetUrl.php");

#-------- html関連 -------#

include ($inc_path."/lib/functions/htmlMetas.php");
include ($inc_path."/lib/functions/htmlLinks.php");
include ($inc_path."/lib/functions/htmlBodyClass.php");
include ($inc_path."/lib/functions/contentsFn.php");
include ($inc_path."/lib/functions/onclick_count.php");

#-------- クリックポイント関連 --------#
include ($inc_path."/lib/functions/clickPoint.php");

?>
