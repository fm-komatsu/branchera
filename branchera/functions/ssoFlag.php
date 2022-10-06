<?php 

//セッションでフラグを書き換えをおねがいします。
// 0:未ログイン、1：ログイン時、２：エラー、9：デザイン確認用のダミー情報
$ssoFlag = 0;


//--------------------- functions ---------------------//

//以下はデザイン確認用にurlクエリ取得後フラグを書き換え。
//以下のクエリ書き換えは本番では使わない。

function dummy_ssoFlagParamsFunc() {
  $str=$_SERVER["REQUEST_URI"];
  $srt=urldecode($str);
  $url=parse_url($str);
  parse_str($url['query'], $parms);
  //var_dump( $parms );
  return $parms;
}

if (!empty($_SERVER['QUERY_STRING'])){
  $ssoFlagAry = dummy_ssoFlagParamsFunc();
  $ssoFlag = $ssoFlagAry['dummyssoflag'];
}

?>
