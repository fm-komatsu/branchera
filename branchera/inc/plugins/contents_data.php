<?php

//------------- 呼び出し用function

function show_search_words($category = "" ,$search_link = ""){
  $contents=explode("\n",file_get_contents(dirname(__FILE__)."/contents.tsv"));
  $count_tag = count_tag($contents, $category);
  foreach($count_tag as $key => $value){
    $html .= '<a href="'.$search_link."?tag=".$key.'"><em>'.$key.'</em><span class="num">'.$value.'</span></a>';
  }
  return $html;
}

function show_sp_slide_photo_list_by_ids($ids, $base_url = "", $img_url = "" ,$search_link = ""){
  $data = getdata("","",$ids);
  return photoListHtmlFuc($data,$base_url);
}

function show_photo_list_by_tag($tag, $base_url = "", $img_url = "" ,$search_link = ""){
  if($tag == "null" || $tag == "NULL"){
    return "";
  }
  $data = getdata("",$tag);
  return photoListHtmlFuc($data,$base_url);
}

function show_photo_list_by_category($category, $base_url ="", $img_url = "" ,$search_link = ""){
  $data = getdata($category);
  echo photoListHtmlFuc($data,$base_url);
}

// ------------ 記事ソート用関数（優先度大きい順、優先度同じ時は記事ID大きい方を先）

function cmp($a, $b){
	if($a['priority'] == $b['priority']){
		return ($a['contents_id'] < $b['contents_id']) ? 1 : -1 ;
	}
	return ($a['priority'] < $b['priority']) ? 1 : -1 ;
}

function count_tag($contents,$category=""){
	$count = array();
	$return = array();
	foreach ($contents as $line) {
		$l = explode("\t", $line);
      if($l[0] == null){ continue; }
		if($category != "" && $l[3] != $category){ continue; }
		if($l[8]==""){
			if($l[9]!="" && $l[9]!="null" && $l[9]!="NULL"){ $tags[]=$l[9]; }
			if($l[10]!="" && $l[10]!="null" && $l[10]!="NULL"){ $tags[]=$l[10]; }
			if($l[11]!="" && $l[11]!="null" && $l[11]!="NULL"){ $tags[]=$l[11]; }
		}
   }
  foreach ($contents as $line) {
		$l = explode("\t", $line);
		if($l[8]==""){
			if($l[9]!="" && $l[9]!="null" && $l[9]!="NULL"){ $count[$l[9]]++; }
			if($l[10]!="" && $l[10]!="null" && $l[10]!="NULL"){ $count[$l[10]]++; }
			if($l[11]!=""&& $l[11]!="null" && $l[11]!="NULL"){ $count[$l[11]]++; }
		}
	}
	foreach ($tags as $tag) {
		$return[$tag] = $count[$tag];
	}
	arsort($return);
	return $return;
}


//--------------- html書き出しfunction


function photoListHtmlFuc($data,$base_url){
    
    foreach($data as $article){

    $_img = $base_url.'/img/'.$article['image'];
    $_url = $base_url.$article['url'];
    $_ttl = mb_strimwidth($article['title'], 0, 70, "…", 'utf-8');
    $_ex = mb_strimwidth($article['description'], 0, 80, "…", 'utf-8');
    $_icon = $article['icon-img'];

    if($article['blank']==""){
      $_wrapStartHtml = '<a href="'.$_url.'" class="u-photoList-row link">'.PHP_EOL;
      $_wrapEndHtml = "</a>".PHP_EOL;
    }elseif($article['blank']=="2"){
      $_wrapStartHtml = '<div class="u-photoList-row end">'.PHP_EOL;
      $_wrapEndHtml = "</div>".PHP_EOL;
    }else{
      $_wrapStartHtml = '<a href="'.$_url.'" class="u-photoList-row link" target="_blank">'.PHP_EOL;
      $_wrapEndHtml = "</a>".PHP_EOL;
    };

    $_iconHtml = "";
    if($article['blank']=="2"){
      $_iconHtml = "";
    }elseif(!empty($_icon)){
      $_iconHtml .= '<div class="icon-img"><span class="'.$_icon.'">'.$_icon.'</span></div>'.PHP_EOL;
    }

    $_tagSetHtml = "";
    if (!empty($article['tag'])){
      if ($article['blank']=="2"){
        $_tagSetHtml .= '<div class="tags end">'.PHP_EOL;
      }else{
        $_tagSetHtml .= '<div class="tags">'.PHP_EOL;
      }
      foreach($article['tag'] as $tag) {
        $_tagSetHtml .= '<a href="'.$base_url."/search/?tag=".$tag['tag_name'].'"><em>'.$tag['tag_name'].'</em><span class="num">'.$tag['tag_count'].'</span></a>'.PHP_EOL;
      };
      $_tagSetHtml .= '</div>'.PHP_EOL;
    };

    $html .= '<li class="u-photoList">'.PHP_EOL
      .$_wrapStartHtml
      .'<img src="'.$_img.'" alt="'.$_ttl.'" class="img">'.PHP_EOL
      .'<h3 class="ttl">'.$_ttl.'</h3>'.PHP_EOL
      .'<p class="ex">'.$_ex.'</p>'.PHP_EOL
      .$_iconHtml
      .$_wrapEndHtml
      .$_tagSetHtml
      .'</li>'.PHP_EOL.PHP_EOL;

  }
  return $html;

}//photoListHtmlFuc




//---------------- tsvのエンコード&配列化


function getdata($category = "", $tag = "", $ids = "", $is_header = false){
	$contents=explode("\n",file_get_contents(dirname(__FILE__)."/contents.tsv"));
	$json_array = array();
	$count_tag = count_tag($contents);
	foreach ($contents as $line) {
		$l = explode("\t", $line);
		if($category != "" && $l[3] != $category){ continue; }
		if($tag != "" && $l[9] != $tag && $l[10] != $tag && $l[11] != $tag){ continue; }
		if($ids != "" && !in_array($l[0], explode(",", $ids))) { continue; }
		if(!($l[8]=="priority" || ($l[8]=="-1" && !$is_header))){	//下書きとヘッダは出力しない
			$tmp = array();
			$tmp['contents_id'] = $l[0];
			$tmp['title'] = $l[1];
			$tmp['description'] = $l[2];
			$tmp['category'] = $l[3];
			$tmp['url'] = $l[4];
			$tmp['image'] = $l[5];
			$tmp['icon-img'] = $l[6];
			$tmp['blank'] = $l[7];
			$tmp['priority'] = ($l[8]=="") ? 10 : $l[8];

			if($l[9]!="" && $l[9]!="null" && $l[9]!="NULL"){
				$tmp['tag'][] = array("tag_name"=>$l[9],"tag_count"=>$count_tag[$l[9]]);
			}
			if($l[10]!="" && $l[10]!="null" && $l[10]!="NULL"){
				$tmp['tag'][] = array("tag_name"=>$l[10],"tag_count"=>$count_tag[$l[10]]);
			}
			if($l[11]!="" && $l[11]!="null" && $l[11]!="NULL"){
				$tmp['tag'][] = array("tag_name"=>$l[11],"tag_count"=>$count_tag[$l[11]]);
			}
			$json_array[]=$tmp;
		}
	}
	usort($json_array, 'cmp');
	return $json_array;
	// return array_reverse($json_array);
}

function json_xencode($value, $options = 0, $unescapee_unicode = true)
{
  $v = json_encode($value, $options);
  if ($unescapee_unicode) {
    $v = unicode_encode($v);
    // スラッシュのエスケープをアンエスケープする
    $v = preg_replace('/\\\\\//', '/', $v);
  }
  return $v;
}

/**
 * Unicodeエスケープされた文字列をUTF-8文字列に戻す。
 * 参考:http://d.hatena.ne.jp/iizukaw/20090422
 * @param unknown_type $str
 */
function unicode_encode($str){
  return preg_replace_callback("/\\\\u([0-9a-zA-Z]{4})/", "encode_callback", $str);
}

function encode_callback($matches) {
  return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UTF-16");
}




