<?php
$contents=explode("\n",file_get_contents("./contents.tsv"));
$json_array = array();

foreach ($contents as $line) {
	$l = explode("\t", $line);
	if($l[8]==""){	//下書きとヘッダは出力しない
		$tmp = array();
		$tmp['contents_id'] = $l[0];
		$tmp['title'] = $l[1];
		$tmp['url'] = $l[4];
		$tmp['image'] = $l[5];
		$tmp['icon-img'] = $l[6];
		$tmp['blank'] = $l[7];
		$tmp['tag'] = array($l[9],$l[10],$l[11]);
		$json_array[]=$tmp;
	}
}
echo json_encode($json_array);

/*
array(12) {
 [
 [0]=> string(11) "contents_id" [
 [1]=> string(5) "title" [
 [2]=> string(11) "category_id" [
 [3]=> string(13) "category_list" [
 [4]=> string(3) "url" [
 [5]=> string(5) "image" [
 [6]=> string(8) "icon-img" [
 [7]=> string(5) "blank" [
 [8]=> string(5) "draft" [
 [9]=> string(4) "tag1" [
 [10]=> string(4) "tag2" [
 [11]=> string(4) "tag3" } 
*/