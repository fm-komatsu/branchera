<?php

$path_parts = pathinfo($_SERVER['SCRIPT_NAME']);

$dirAry = explode("/", $path_parts['dirname']);
$mydir = implode(" ", $dirAry);
$filename = $path_parts['filename'];

if($ssoFlag == 1){
	$ssoClass = "sso_flag";
}else{
	$ssoClass = "";
}

?>
