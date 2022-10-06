<?php
// CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

// POST以外受け付けない
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header( "HTTP/1.1 404 Not Found" );
	exit();
}
// POST内容そのままJSONで返す
header("Content-Type: application/json; charset=utf-8");
echo json_encode($_POST);
