<?php

//ホスト名取得
$host = (HTTP_HOST);
$severName = $host;

$page_url  = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$page_url .= HTTP_HOST.$_SERVER["REQUEST_URI"];

$thum_url = $base_url."/lib/img/thum";
$img_url = $base_url."/lib/img";
$metaThum = $base_url."/lib/img/home@2x.png";

#######################################
#          各種追加リンク関連             #
#######################################

if (HTTP_HOST === "www.haseko.co.jp" ||
    HTTP_HOST === "www1.haseko.co.jp" ||
    HTTP_HOST === "stage.ism.life") {
    // 本番環境 TODO:正しい設定
    //define("FLP_bDOMAIN", "");
    define("FLP_base_DOMAIN", "haseko.flpjp.com");
} else {
    // ステージング
    define("FLP_base_DOMAIN", "stg-haseko-blue.dev.fanlife-platform.com");
}

#----------------------#
# FLPマイページ関連
#----------------------#

//マイページ-baseURL
$mybase_url = "https://".FLP_base_DOMAIN;
//トップ
$mytop_url = $mybase_url."/mypage";
//ポイント
$mypoint_url = $mybase_url."/pointExchangeDetail";
//ラッキールーム
$mylucky_url = $mybase_url."/dailyPointGrantEntry";
//新規入会
$myentry_url = $mybase_url."/regMail";
//登録情報
$myinfo_url = $mybase_url."/memDisplay";
//住まいレージ履歴
$myhistory_url = $mybase_url."/pointInfo";
//ログイン
$login_url = $mybase_url.FLP_ExternalUrlForLogin;
//ログアウト
$logout_url = $mybase_url.FLP_ExternalUrlForLogout;
// FLPメールポイント（/public/lib/inc/page/_point/__landing.phpへ直書き）
// $mailPoint_url = $mybase_url .'/externalUrlForLogin/' .  $flp_cl_mail;
//長谷工IDとは
$IDabout_url = $base_url.'/id/';

#----------------------#
# ブランシエラクラブ内フォーム関連
#----------------------#

//ブランシエラクラブ内フォームへのbase_url
$formbase_url = $base_url."/form";
//お問い合わせ
$contact_url = $formbase_url."/form-contact";
//登録解除
$withdrawal_url = $mybase_url."/memDisplay";

#----------------------#
# 物件サイト外部リンク
#----------------------#
//ブランシエラ板橋西台サイト
$site_itabashi80 = "http://www.haseko.co.jp/branchera/sumai/nishidai80";
//ブランシエラ板橋西台来場予約フォーム
$site_itabashi80_req = "https://www.haseko.co.jp/branchera/sumai/nishidai80/form/reserve/";
//ブランシエラ千林
$site_omiya82 ="http://www.haseko-sumai.com/kansai/sinki/omiya82/index.html";
//ブランシエラ二条城
$site_nj47 ="https://www.haseko-sumai.com/kansai/sinki/nj47/";
//ブランシエラ山本町南
$site_bcyamamoto ="http://www.haseko-sumai.com/kansai/sinki/bcyamamoto/index.html";
//西台来場予約リンク
$nishidai80_ad = "https://www.haseko.co.jp/branchera/member/reserve/nishidai80/";
#----------------------#
# その他
#----------------------#
//長谷工コーポレートサイト
$hc_url = 'http://www.haseko.co.jp/hc/';
//no_link
$no_link = "javascript:void(0);";

//search_url
$search_url = $base_url."/search/";

?>
