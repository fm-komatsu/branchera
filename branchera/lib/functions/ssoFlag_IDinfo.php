<?php

//$ssoFlag = 0:未ログイン、1：ログイン時 /#ログインフラグ
//$DIinfo[] #flpからの取得したXML情報を整形

if (isset($_SESSION[SESSION_MEMBER_INFO])){

  $ssoFlag = 1;
  $IDinfo = $_SESSION[SESSION_MEMBER_INFO];
  $IDinfo = IDinfoUnsetsFuc($IDinfo);

}else if (!empty($_SERVER['QUERY_STRING'])){

  $ssoFlagAry = dummy_ssoFlagParamsFunc();

	if(array_key_exists('dummyssoflag',$ssoFlagAry)){
		  $ssoFlag = $ssoFlagAry['dummyssoflag'];
			$url = $inc_path .'/lib/functions/dummyfile/flpDummyData.json';

			// dummymode導入
			if(array_key_exists('dummymode', $_GET)){
				if($_GET['dummymode']=='nodata'){
					$url = $inc_path .'/lib/functions/dummyfile/flpDummyData_nodata.json';
				}
			}

		  $json = file_get_contents($url);
		  $IDinfo = json_decode($json,true);
		  $IDinfo = IDinfoUnsetsFuc($IDinfo);
	}else{
		  $ssoFlag = 0;
		  $IDinfo = "";
	}

}else{

  $ssoFlag = 0;
  $IDinfo = "";

}

//--------------------- functions ---------------------//

//URLクエリ取得後に配列へ格納
function dummy_ssoFlagParamsFunc() {
  $str = $_SERVER["REQUEST_URI"];
  $srt = urldecode($str);
  $url = parse_url($str);
  parse_str($url['query'], $parms);
  //echo "<pre>";
  //print_r( $parms );
  //echo "</pre>";
  return $parms;
}

//flpからの取得したXML情報を整形
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
  $ary['pnt_value'] = number_format($ary['pnt_value']);
  $ary['postal_cd'] = preg_replace("/^(\d{3})(\d{4})$/", "$1-$2", $ary['postal_cd']);
  $ary['city'] = mb_convert_kana($ary['city'], "KVa",'UTF-8');
  $ary['address'] = mb_convert_kana($ary['address'], "KVa",'UTF-8');
  if($ary['address'] == ""){
    $ary['address'] = "";
  }else{
    $ary['address'] = mb_convert_kana($ary['address'], "KVa",'UTF-8');
  };
  return $ary;
}

?>
