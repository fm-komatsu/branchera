<?php

//取得したxmlを入れてください。
$getFlpApiXml = $inc_path."/functions/dummyfile/flpapiDummyData.xml";


//以下、xmlから必要なユーザー情報を取り出して配列に変換

$flpApiAry = xmlFileChangeFuc($getFlpApiXml);

if($flpApiAry == false){
  //エラーハンドリング
}else if(array_key_exists('error',$flpApiAry)){
  //エラーハンドリング
}else if(array_key_exists('member_info',$flpApiAry)){
  $IDinfo = $flpApiAry['member_info'];
  $IDinfo = IDinfoUnsetsFuc($IDinfo);
}

//--------------------- functions ---------------------//

function xmlFileChangeFuc($xml){

  $sx = simplexml_load_file($xml);
  $json = json_encode($sx);
  $a = json_decode($json, true);
  return $a;

}

function IDinfoUnsetsFuc($ary){

  unset($ary['company_group_info']);
  unset($ary['parent_member_info']);
  unset($ary['parent_info']);
  foreach ($ary as $key => &$val) {
    if(!$val){
      $val = "";
    }
  }
  unset($val);
  return $ary;

}

?>
