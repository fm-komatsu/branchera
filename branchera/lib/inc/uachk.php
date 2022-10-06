<?php
$ua = $_SERVER['HTTP_USER_AGENT'];// ユーザエージェントを取得

if(isSmartPhone($ua)) {
	$link2Cluboff = 'https://sp.club-off.com/haseko/index.cfm';
	$uachk = 1;
} else {
	$link2Cluboff = 'https://www.club-off.com/haseko/index.cfm';
	$uachk = 0;
}

function isSmartPhone($ua) {
  if((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPad') !== false) || (strpos($ua, 'iPod') !== false) ||(strpos($ua, 'Android') !== false)) return true;
  return false;
}?>
