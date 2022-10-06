<?php 

//ホスト名取得
$host = ($_SERVER["HTTP_HOST"]);

//フルパスリンクURL
$link_url = ("https://".$host.$base_url);

#######################################
#          各種追加リンク関連             #
#######################################

//brc_url
$brc_url = "https://www.haseko.co.jp/branchera";

#----------------------#
# FLPマイページ関連
#----------------------#

//マイページ-baseURL
//$mybase_url = 'https://stg-haseko-blue.dev.fanlife-platform.com'; //テスト環境
$mybase_url = 'https://haseko.flpjp.com'; //本番環境

//トップ
$mytop_url = $mybase_url."/mypage";

//ポイント
$mypoint_url = $mybase_url."/pointExchangeDetail";

//新規入会
$myentry_url = $mybase_url."/regMail";

//登録情報
$myinfo_url = $mybase_url."/memDisplay";



#----------------------#
# その他
#----------------------#

//no_link
$no_link = "javascript:void(0);";

//お問い合わせ
$contact_url = $base_url."/form-contact";

//ログイン
//$login_url = $base_url.'/functions/ssologin.php';

//ログアウト
//$logout_url = $base_url.'/functions/ssologout.php';



?>