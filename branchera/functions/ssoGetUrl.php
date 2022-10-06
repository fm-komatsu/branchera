<?php 

$_SESSION['visitURL'] = getUrl();

//------function

function getUrl(){
    $http = 'http' . (@$_SERVER['HTTPS'] ? 's' : '');
    $query = $_SERVER['QUERY_STRING'] ? "?$_SERVER[QUERY_STRING]" : '';
    return "$http://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]$query";
}

?>