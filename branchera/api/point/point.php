<?php
// pointList.jsonのidentification_idで1件取得
function check_json($identification_id)
{
	$mituketa_json = file_get_contents("../json/pointList.json");
	$ids = json_decode($mituketa_json);
	$ret = array();
	foreach ($ids as $id) {
		if ($id->identification_id == $identification_id) {
			$ret = $id;
		}
	}
	return $ret;
}

// pointList.jsonの中からactiveな項目のidの配列を返却
function get_active_ids(){
	$mituketa_json = file_get_contents(dirname(__FILE__) . "/json/pointList.json");
	$ids = json_decode($mituketa_json);
	$active_ids = array();
	foreach ($ids as $id) {
		if ($id->active == true) {
			array_push($active_ids, $id->identification_id);
		}
	}
	return $active_ids;

}

// APIの返却情報を作成
function make_json($message, $result, $error_code, $error_message)
{
	$return_array = array(
		"message" => $message,
		"result" => $result
	);
	if ($error_code) {
		$return_array["errors"] = array(
			"code" => $error_code,
			"message" => $error_message
		);
	}
	return json_encode($return_array);
}
?>