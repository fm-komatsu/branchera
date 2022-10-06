<?php

// APIからのアクセスだったときはvisitURLを書き換えない
if(!strpos($_SERVER['REQUEST_URI'], "/api/point/")){
	$_SESSION['visitURL'] = getUrl();
}
//------function

/**
 * URLを取得して返却
 *
 * @return String URL
*/
function getUrl(){
    $http = 'http' . (@$_SERVER['HTTPS'] ? 's' : '');
    $query = $_SERVER['QUERY_STRING'] ? "?$_SERVER[QUERY_STRING]" : '';
    return $http . "://" . HTTP_HOST . $_SERVER['REQUEST_URI'] . $query;
}

?>
