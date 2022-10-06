<?php
header("Content-Type: application/json; charset=utf-8");

// CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
//base
include("../../../function.php");
// 読んだねポイント
require_once '../point.php';

// active=trueなものを配列で返却
echo json_encode(get_active_ids());