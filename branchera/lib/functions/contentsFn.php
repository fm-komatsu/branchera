<?php

//------------- 呼び出し用function

//該当カテゴリーのタグ数合算表示
function show_all_tags()
{

	global $search_url;
	$data = get_data();

	$list = $data;

	$tagList = array();
	foreach ($list as $key => $value) {
		foreach ($value['tags'] as $key => $value) {
			$tagList[$key] = $value;
		}
	}

	arsort($tagList);

	$html = '';
	$html .= '<div class="u-tags__row">';
	foreach ($tagList as $key => $value) {
		$html .= '<a href="' . $search_url . "?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $value . '</span></a>';
	}
	$html .= '</div>';

	return $html;
}


//該当カテゴリーのタグ数合算表示
function show_category_tags($categors)
{

	global $search_url;
	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}

	$tagList = array();
	foreach ($list as $key => $value) {
		foreach ($value['tags'] as $key => $value) {
			$tagList[$key] = $value;
		}
	}

	$html = '';
	$html .= '<div class="u-tags__row">';
	foreach ($tagList as $key => $value) {
		$html .= '<a href="' . $search_url . "?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $value . '</span></a>';
	}
	$html .= '</div>';

	return $html;
}

//main-header用タグ出力
function show_content_tags($content)
{

	global $search_url;
	$data = $content;

	$tagList = array();
	foreach ($data['tags'] as $key => $value) {
		$tagList[$key] = $value;
	}

	$html = '';
	foreach ($tagList as $key => $value) {
		$html .= '<a href="' . $search_url . "?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $value . '</span></a>';
	}

	return $html;
}

//Alsok関連のphotoList
function show_category_photoListalsok($categors, $exceptcnt_id)
{
	$data = get_data();
	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['contents_id'] != $exceptcnt_id) {
				if ($dataVal['category_list'] == $value) {
					$list[$key] = $dataVal;
				}
			}
		}
	}
	echo photoListHtml($list);
}

//該当カテゴリーのphotoList
function show_category_photoList($categors)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	echo photoListHtml($list);
}

//該当カテゴリーのphotoList-random
function show_category_photoList__random($categors, $num = 4)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtml($list);
}

//該当カテゴリーのphotoList-random
function f_show_category_photoList__random($categors, $num = 4)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo f_photoListHtml($list);
}

//該当カテゴリーのonlyphoto
function show_category_photoOne($categors, $cnt_id)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['contents_id'] == $cnt_id) {
				$list[$key] = $dataVal;
			}
		}
	}
	$list = array_slice($list, 0, 1);
	echo photoListHtml($list);
}

//該当カテゴリーのphotoList-random 一つだけ画像を取得
function s_show_category_photoList__random($categors, $num = 1)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['contents_id'] !== 10008) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo s_photoListHtml($list);
}

//該当カテゴリーのphotoList-random 一つだけ画像を取得
function url_show_category_photoList__random($categors, $num = 1)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo url_photoListHtml($list);
}

//該当カテゴリーとタグのphotoList-random 一つだけ画像を取得
function url_show_category_tag2_photoList__random($categors, $tag1, $tag2, $num = 1)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo s_onlyPhotoHtml($list);
}

//該当カテゴリーとタグのphotoList-random 一つだけ画像を取得
function url_show_category_tag3_photoList__random($categors, $tag1, $tag2, $tag3, $num = 1)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2 && $dataVal['tag3'] == $tag3) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo s_onlyPhotoHtml($list);
}

//該当カテゴリーのdata
function show_category_data($categors)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return $list;
}

//イベントカテゴリーとタグのphotoList psm
function show_event_photoList_tags($categors, $tag1, $tag2, $tag3)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$CategorsAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($CategorsAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2 && $dataVal['tag3'] == $tag3) {
				$list[$key] = $dataVal;
			} else if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == "ゴルフ" && $dataVal['tag3'] == '' && $dataVal['icon-img'] != 'end') {
				$list[$key] = $dataVal;
			}
		}
	}
	echo photoListHtml($list);
}

function show_event_photoList_2tags($categors, $tag1, $tag2)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$CategorsAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($CategorsAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2) {
				$list[$key] = $dataVal;
			}
		}
	}
	echo photoListHtml($list);
}

//イベントカテゴリーとレポートタグのphotoList psm
function show_eventrev_photoList_tags($categors, $tag1, $tag2, $tag3)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$CategorsAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($CategorsAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2 && $dataVal['tag3'] == $tag3) {
				$list[$key] = $dataVal;
			} else if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2 && $dataVal['tag3'] == '') {
				$list[$key] = $dataVal;
			}
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2 && $dataVal['tag3'] == 'ゴルフ' && $dataVal['icon-img'] == 'reviewboth') {
				$list[$key] = $dataVal;
			}
		}
	}
	echo photoListHtml($list);
}

//ゴルフイベントレポートタグのphotoList psm
function show_golfrev_photoList_tags($categors, $tag1, $tag2, $tag3)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$CategorsAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($CategorsAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['tag1'] == $tag1 && $dataVal['tag2'] == $tag2 && $dataVal['tag3'] == 'ゴルフ') {
				$list[$key] = $dataVal;
			}
		}
	}
	echo photoListHtml($list);
}

//該当IDの配列データー
function get_id_data($id)
{

	$data = get_all_data();
	$list = array();

	foreach ($data as $key => $dataVal) {
		if ($dataVal['contents_id'] == $id) {
			$list[0] = $dataVal;
		}
	}

	// クリックポイント転送判定
	if (isset($_GET["page_cl_mail"])) {
		click_point_article($list[0]);
	}
	//
	return $list[0];
}

function show_photo_list_by_tag($tags)
{

	$data = get_data();

	$tags = preg_replace("/( |　)/", "", $tags);
	$tagAry = explode(",", $tags);
	$list = array();

	foreach ($data as $key => $dataVal) {
		foreach ($tagAry as $value) {
			if ($dataVal['tag1'] == $value || $dataVal['tag2'] == $value || $dataVal['tag3'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return photoListHtml($list);
}

// ------------

function count_tag($contents, $category = "")
{

	$count = array();
	$return = array();

	foreach ($contents as $l) {
		if ($l['contents_id'] == "") {
			continue;
		} // エスケープ処理1
		if ($l['priority'] == "-1") {
			continue;
		} // エスケープ処理1
		if ($l["category_list"] != $category) {
			continue;
		} // エスケープ処理2

		if ($l['tag1'] != "") {
			$count[$l["tag1"]] = 0;
		}
		if ($l['tag2'] != "") {
			$count[$l["tag2"]] = 0;
		}
		if ($l['tag3'] != "") {
			$count[$l["tag3"]] = 0;
		}
	}

	foreach ($contents as $l) {
		if ($l['contents_id'] == "") {
			continue;
		} // エスケープ処理1
		if ($l['priority'] == "-1") {
			continue;
		} // エスケープ処理1
		if ($l["category_list"] != $category) {
			continue;
		} // エスケープ処理2

		if ($l['tag1'] != "") {
			$tags[] = $l["tag1"];
			$count[$l["tag1"]]++;
		}
		if ($l['tag2'] != "") {
			$tags[] = $l["tag2"];
			$count[$l["tag2"]]++;
		}
		if ($l['tag3'] != "") {
			$tags[] = $l["tag3"];
			$count[$l["tag3"]]++;
		}
	}

	foreach ($tags as $tag) {
		$return[$tag] = $count[$tag];
	}

	arsort($return);
	return $return;
}

//複数カテゴリーでNEWラベルをランダムに取得するホームのmain-v用 photoList-random psm
function show_categorys_home__random($categors1, $categors2, $num = 4)
{

	$data = get_data();

	$categors1 = preg_replace("/( |　)/", "", $categors1);
	$categors2 = preg_replace("/( |　)/", "", $categors2);
	$roulette = (rand(1, 100));
	if ($categors2) {
		if ($roulette > 50) {
			$categors = $categors1;
		} else {
			$categors = $categors2;
		}
	} else {
		$categors = $categors1;
	}
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['icon-img'] == "new") {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtmlHome($list);
}

//単独カテゴリーでNEWラベルを取得し、指定のタイトルをつけるホームのmain-v用 photoList psm
function show_categorys_home__ttl($categors1, $ttl = null, $GaDataClick = null)
{

	$data = get_data();

	$categors1 = preg_replace("/( |　)/", "", $categors1);
	$categors = $categors1;
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['icon-img'] == "new") {
				if (isset($ttl) && $ttl) {
					$dataVal['title'] = $ttl;
				} else {
				};
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0);
	echo photoListHtmlHome($list, $GaDataClick);
}


//該当カテゴリーでランダムに取得するホームのmain-v用 photoList-random psm
function show_category_home__random($categors, $num = 4, $GaDataClick = null)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtmlHome($list, $GaDataClick);
}

//該当カテゴリーでランダムに取得するホームのmain-v用 photoList-random psm
function show_category_home__random_ttl($categors, $num = 4, $ttl = null, $GaDataClick = null)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				if (isset($ttl) && $ttl) {
					$dataVal['title'] = $ttl;
				} else {
				};
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtmlHome($list, $GaDataClick);
}


//レシピ以外カテゴリーでNEWラベルをランダムに取得するホームのmain-v用 photoList-random psm
function show_Allcategorys_home__random($num = 4)
{

	$data = get_data();

	$New = preg_replace("/( |　)/", "", "new");
	$NewAry = explode(",", $New);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($NewAry as $value) {
			if ($dataVal['icon-img'] == $value) {
				if ($dataVal['category_list'] == 'recipe' or $dataVal['category_list'] == 'recipe-technic') {
				} else {
					$list[$key] = $dataVal;
				}
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtmlHome($list, $ttl);
}

//レシピ以外カテゴリーでランダムに取得するホームのmain-v用 photoList-random psm
function show_Onecategorys_home__random($categors, $num = 4, $exclusion1, $exclusion2)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$CategorsAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($CategorsAry as $value) {
			if ($dataVal['category_list'] == $value && $dataVal['contents_id'] !== $exclusion1 && $dataVal['contents_id'] !== $exclusion2) {
				$list[$key] = $dataVal;
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtmlHome($list);
}

//該当IDのホームお知らせ用配列データー
function get_id_HomeNews($id, $myNoticeLabel = null, $myCategory, $myCntttl, $myPredicate, $myDataGaClick = null)
{

	$data = get_all_data();
	$list = array();

	foreach ($data as $key => $dataVal) {
		if ($dataVal['contents_id'] == $id) {
			$list[0] = $dataVal;
		}
	}
	echo photoHtmlHomeNews($list, $myNoticeLabel, $myCategory, $myCntttl, $myPredicate, $myDataGaClick);
}

//該当サービスの記事をランダムで取り出すホーム用 photoList-random psm
function show_service_home__random($categors, $num = 2, $ex_in = 0)
{

	$data = get_data();

	if (preg_match('/magazine/', $categors)) {
		$categors = preg_replace("/( |　)/", "", 'magazine');
		$categors2 = preg_replace("/( |　)/", "", 'town');
		$categors3 = preg_replace("/( |　)/", "", 'comic');
		$categors4 = preg_replace("/( |　)/", "", 'wakuwaku');
		$categors5 = preg_replace("/( |　)/", "", 'monozukuri');
		$categors6 = preg_replace("/( |　)/", "", 'cafe-report');
		// $categors5 = preg_replace("/( |　)/", "", 'recipe' );
		// $categors6 = preg_replace("/( |　)/", "", 'recipe-technic' );

		$categoryAry = explode(",", $categors);
		$categoryAry2 = explode(",", $categors2);
		$categoryAry3 = explode(",", $categors3);
		$categoryAry4 = explode(",", $categors4);
		$categoryAry5 = explode(",", $categors5);
		$categoryAry6 = explode(",", $categors6);
		// $categoryAry5 = explode(",",$categors5);
		// $categoryAry6 = explode(",",$categors6);
	} elseif (preg_match('/smile/', $categors)) {
		$categors = preg_replace("/( |　)/", "", 'exchange-hcg');
		$categors2 = preg_replace("/( |　)/", "", 'exchange-product');
		$categors3 = preg_replace("/( |　)/", "", 'lottery');

		$categoryAry = explode(",", $categors);
		$categoryAry2 = explode(",", $categors2);
		$categoryAry3 = explode(",", $categors3);
	} elseif (preg_match('/recipe/', $categors)) {
		$categors = preg_replace("/( |　)/", "", 'recipe');
		$categors2 = preg_replace("/( |　)/", "", 'recipe-technic');

		$categoryAry = explode(",", $categors);
		$categoryAry2 = explode(",", $categors2);
	} elseif (preg_match('/enq/', $categors)) {
		$categors = preg_replace("/( |　)/", "", 'enq');
		$categors2 = preg_replace("/( |　)/", "", 'imakura-cafe');
		$categors3 = preg_replace("/( |　)/", "", 'enq-report');

		$categoryAry = explode(",", $categors);
		$categoryAry2 = explode(",", $categors2);
		$categoryAry2 = explode(",", $categors3);
	} else {

		$categors = preg_replace("/( |　)/", "", $categors);

		$categoryAry = explode(",", $categors);
	}
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
		if (isset($categoryAry2)) {
			foreach ($categoryAry2 as $value) {
				if ($dataVal['category_list'] == $value) {
					$list[$key] = $dataVal;
				}
			}
		}
		if (isset($categoryAry3)) {
			foreach ($categoryAry3 as $value) {
				if ($dataVal['category_list'] == $value) {
					$list[$key] = $dataVal;
				}
			}
		}
		if (isset($categoryAry4)) {
			foreach ($categoryAry4 as $value) {
				if ($dataVal['category_list'] == $value) {
					$list[$key] = $dataVal;
				}
			}
		}
		if (isset($categoryAry5)) {
			foreach ($categoryAry5 as $value) {
				if ($dataVal['category_list'] == $value) {
					$list[$key] = $dataVal;
				}
			}
		}
		if (isset($categoryAry6)) {
			foreach ($categoryAry6 as $value) {
				if ($dataVal['category_list'] == $value) {
					$list[$key] = $dataVal;
				}
			}
		}
	}
	shuffle($list);
	$list = array_slice($list, 0, $num);
	echo photoListHtmlService($list, $ex_in);
}

//該当カテゴリーのtitleData
function show_category_titleData($categors)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return titleListHtml($list);
}

//住まいのSOSのtitleData
function show_category_titleSumaiData($categors)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return titleSumaiListHtml($list);
}


//今くらcafe専用
function show_imakura_titleData($categors)
{

	$data = get_data();

	$categors = preg_replace("/( |　)/", "", $categors);
	$categoryAry = explode(",", $categors);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($categoryAry as $value) {
			if ($dataVal['category_list'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return cafetitleListHtml($list);
}

//該当IDのphotoList
function show_id_photoList($ids)
{

	$data = get_data();

	$ids = preg_replace("/( |　)/", "", $ids);
	$idAry = explode(",", $ids);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($idAry as $value) {
			if ($dataVal['contents_id'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return photoListHtml($list);
}

//スマイル交換商品　該当IDのphoto
function show_id_smile_photo($ids)
{

	$data = get_data();

	$ids = preg_replace("/( |　)/", "", $ids);
	$idAry = explode(",", $ids);
	$list = array();
	foreach ($data as $key => $dataVal) {
		foreach ($idAry as $value) {
			if ($dataVal['contents_id'] == $value) {
				$list[$key] = $dataVal;
			}
		}
	}
	return photoSmileHtml($list);
}


// ------------


//--------------- html書き出しfunction


function photoListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		//$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ttl = strip_tags($val['title']);

		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-photolist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		$_iconHtml = "";
		if ($_icon) {
			$_iconHtml = "\t\t" . "\t\t" . '<div class="u-photolist__icon ' . $_icon . '"><span>' . $_icon . '</span></div>' . PHP_EOL;
		}

		$_tagSetHtml = "";
		$_tagSetHtml .= "\t\t" . '<div class="u-photolist__tags u-tags">' . PHP_EOL;
		$_tagSetHtml .= "\t\t\t\t" . '<div class="u-tags__row">' . PHP_EOL;
		foreach ($val['tags'] as $key => $val) {
			$_tagSetHtml .= "\t\t\t\t\t\t" . '<a href="' . $base_url . "/search/?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $val . '</span></a>' . PHP_EOL;
		};
		$_tagSetHtml .= "\t\t\t\t</div>" . PHP_EOL;
		$_tagSetHtml .= "\t\t" . '</div>' . PHP_EOL;

		//html
		$html .= '<article class="u-photolist__item ' . $_icon . '">' . PHP_EOL
			. '<label class="u-photolist__wrap ' . $_icon . '">' . PHP_EOL
			. "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . '<div class="u-photolist__img ' . $_icon . '"><img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="' . $_icon . '"></div>' . PHP_EOL
			. "\t\t" . "\t\t" . '<div class="u-photolist__txtbox">' . PHP_EOL
			. "\t\t" . "\t\t" . "\t\t" . '<h3 class="u-photolist__ttl ' . $_icon . '">' . $_ttl . '</h3>' . PHP_EOL
			. "\t\t" . "\t\t" . "\t\t" . '<p class="u-photolist__ex ' . $_icon . '">' . $_ex . '</p>' . PHP_EOL
			. "\t\t" . "\t\t" . '</div>' . PHP_EOL
			. $_iconHtml
			. "\t\t" . $_wrapEndHtml
			. $_tagSetHtml
			. "</label>" . PHP_EOL
			. '</article>' . PHP_EOL . PHP_EOL;
	}
	return $html;
} //photoListHtml


function f_photoListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="f-photolist__row" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="f-photolist__row end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="f-photolist__row">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		//html
		$html .= '<li class="f-photolist">'
			. "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . '<img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="f-photolist__img">' . PHP_EOL

			. "\t\t" . "\t\t" . '<h3 class="f-photolist__ttl">' . $_ttl . '</h3>' . PHP_EOL
			. "\t\t" . "\t\t" . '<p class="f-photolist__ex">' . $_ex . '</p>' . PHP_EOL
			. "\t\t" . $_wrapEndHtml
			. '</li>';
	}
	return $html;
} //photoListHtml

function s_photoListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-photolist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		$_iconHtml = "";
		if ($_icon) {
			$_iconHtml = "\t\t" . "\t\t" . '<div class="u-photolist__icon ' . $_icon . '"><span>' . $_icon . '</span></div>' . PHP_EOL;
		}

		$_tagSetHtml = "";
		$_tagSetHtml .= "\t\t" . '<div class="u-photolist__tags u-tags">' . PHP_EOL;
		$_tagSetHtml .= "\t\t\t\t" . '<div class="u-tags__row">' . PHP_EOL;
		foreach ($val['tags'] as $key => $val) {
			$_tagSetHtml .= "\t\t\t\t\t\t" . '<a href="' . $base_url . "/search/?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $val . '</span></a>' . PHP_EOL;
		};
		$_tagSetHtml .= "\t\t\t\t</div>" . PHP_EOL;
		$_tagSetHtml .= "\t\t" . '</div>' . PHP_EOL;

		//html
		$html .= '<img src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="' . $_icon . '">' . PHP_EOL
			. '<figcaption class="smile__ttl">' . $_ttl . '</figcaption>';
	}
	return $html;
} //s_photoListHtml

function s_onlyPhotoHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-photolist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		$_iconHtml = "";
		if ($_icon) {
			$_iconHtml = "\t\t" . "\t\t" . '<div class="u-photolist__icon ' . $_icon . '"><span>' . $_icon . '</span></div>' . PHP_EOL;
		}

		//html
		$html .= '<img src="' . $_img . '" alt="' . strip_tags($_ttl) . ' class="' . $_icon . '"">';
	}
	return $html;
} //s_onlyPhotoHtml

function photoListHtmlHome($data, $GaDataClick = null)
{
	global $base_url, $img_url;
	if (isset($GaDataClick) && $GaDataClick) {
		$GaDataClickCode = ' data-ga-click="' . $GaDataClick . '"';
	} else {
	}
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 120, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 120, "…", 'utf-8');


		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="f-photolist__row"' . $GaDataClickCode . ' target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="f-photolist__row end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="f-photolist__row"' . $GaDataClickCode . '>' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		//html
		$html .= '<a href="' . $_url . '"' . $GaDataClickCode . '>'
			. "\t\t" . '<div class="main-v__bts">'
			. "\t\t" . "\t\t" . '<label href="' . $_url . '" class="main-v__bt">'
			. '<span>'
			. $_ttl .
			'</span></label>'
			. '</div>'
			. "\t\t" . "\t\t" . '<img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="u-img__max">' . PHP_EOL
			. "\t\t"
			. '</a>';
	}
	return $html;
}

// photoHtmlHomeNews
function photoHtmlHomeNews($data, $myNoticeLabel, $myCategory, $myCntttl, $myPredicate, $myDataGaClick)
{
	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');

		if ($myCntttl) {
			$myCntttl = $myCntttl;
		} else {
			$myCntttl = $_ttl;
		}

		if (isset($myDataGaClick)) {
			$myDataGaClickOutput = 'data-ga-click = "' . $myDataGaClick . '"';
		} else {
			$myDataGaClickOutput = null;
		}

		if ($myNoticeLabel && isset($myNoticeLabel)) {
			$myNoticeLabel = $myNoticeLabel;
		} else {
			$myNoticeLabel = null;
		}
		$noticeLabelHtml = "";
		if ($myNoticeLabel) {
			$noticeLabelHtml = "\t\t" . "\t\t" . '<div class="news-item__icon ' . $myNoticeLabel . '"><span>' . $myNoticeLabel . '</span></div>' . PHP_EOL;
		}


		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="f-photolist__row news-item__link" target="_blank" ' . $myDataGaClickOutput . '>' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="f-photolist__row end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="f-photolist__row news-item__link" ' . $myDataGaClickOutput . '>' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		//html
		$html .= '<article class="news__item news-item">' . PHP_EOL
			. '<label class="news-item__row">' . PHP_EOL
			. "\t\t" . '<div class="news-item__wrap ' . $myNoticeLabel . '">' . PHP_EOL
			. "\t\t" . "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . "\t\t" . '<div class="news-item__img"><img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="u-img__max"></div>' . PHP_EOL
			. "\t\t" . "\t\t" . "\t\t" . '<h3 class="news-item__ttl">【' . $myCategory . '】' . $myCntttl . '' . $myPredicate . '</h3>' . PHP_EOL
			. "\t\t" . "\t\t" . $_wrapEndHtml
			. $noticeLabelHtml . PHP_EOL
			. "\t\t" . "</div>" . PHP_EOL
			. "</label>" . PHP_EOL
			. '</article>' . PHP_EOL . PHP_EOL;
	}
	return $html;
} //photoHtmlHomeNews

// photoListHtmlService
function photoListHtmlService($data, $ex_in)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="service-inner" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="service-inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="service-inner">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		$_iconHtml = "";
		if ($_icon) {
			$_iconHtml = "\t\t" . "\t\t" . '<div class="u-photolist__icon ' . $_icon . '"><span>' . $_icon . '</span></div>' . PHP_EOL;
		}

		$_tagSetHtml = "";
		$_tagSetHtml .= "\t\t" . '<div class="u-photolist__tags u-tags">' . PHP_EOL;
		$_tagSetHtml .= "\t\t\t\t" . '<div class="u-tags__row">' . PHP_EOL;
		foreach ($val['tags'] as $key => $val) {
			$_tagSetHtml .= "\t\t\t\t\t\t" . '<a href="' . $base_url . "/search/?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $val . '</span></a>' . PHP_EOL;
		};
		$_tagSetHtml .= "\t\t\t\t</div>" . PHP_EOL;
		$_tagSetHtml .= "\t\t" . '</div>' . PHP_EOL;

		//html
		if ($ex_in == 0) {
			$html .= '<article class="service-inner__item">' . PHP_EOL
				. '<label class="service-inner__wrap">' . PHP_EOL
				. "\t\t" . $_wrapStartHtml
				. "\t\t" . "\t\t" . '<div class="service-inner__header">' . PHP_EOL
				. "\t\t" . "\t\t" . "\t\t" . '<div class="service-inner__img"><img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="u-img__max"></div>' . PHP_EOL
				. "\t\t" . "\t\t" . "\t\t" . '<h3 class="service-inner__ttl u-icon">' . $_ttl . '</h3>' . PHP_EOL
				. "\t\t" . "\t\t" . '</div>' . PHP_EOL
				. "\t\t" . $_wrapEndHtml
				. $_tagSetHtml
				. "</label>" . PHP_EOL
				. '</article>' . PHP_EOL . PHP_EOL;
		} else {
			$html .= '<article class="service-inner__item">' . PHP_EOL
				. '<label class="service-inner__wrap">' . PHP_EOL
				. "\t\t" . $_wrapStartHtml
				. "\t\t" . "\t\t" . '<div class="service-inner__header">' . PHP_EOL
				. "\t\t" . "\t\t" . "\t\t" . '<div class="service-inner__img"><img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="u-img__max"></div>' . PHP_EOL
				. "\t\t" . "\t\t" . "\t\t" . '<h3 class="service-inner__ttl">' . $_ttl . '</h3>' . PHP_EOL
				. "\t\t" . "\t\t" . '</div>' . PHP_EOL
				. "\t\t" . "\t\t" . '<p class="service-inner__ex u-icon">' . $_ex . '</p>' . PHP_EOL
				. "\t\t" . $_wrapEndHtml
				. $_tagSetHtml
				. "</label>" . PHP_EOL
				. '</article>' . PHP_EOL . PHP_EOL;
		}
	}
	return $html;
} //photoListHtmlService

function url_photoListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-photolist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		$_iconHtml = "";
		if ($_icon) {
			$_iconHtml = "\t\t" . "\t\t" . '<div class="u-photolist__icon ' . $_icon . '"><span>' . $_icon . '</span></div>' . PHP_EOL;
		}

		$_tagSetHtml = "";
		$_tagSetHtml .= "\t\t" . '<div class="u-photolist__tags u-tags">' . PHP_EOL;
		$_tagSetHtml .= "\t\t\t\t" . '<div class="u-tags__row">' . PHP_EOL;
		foreach ($val['tags'] as $key => $val) {
			$_tagSetHtml .= "\t\t\t\t\t\t" . '<a href="' . $base_url . "/search/?tag=" . $key . '" class="u-tags__item">' . $key . '<span class="u-tags__num">' . $val . '</span></a>' . PHP_EOL;
		};
		$_tagSetHtml .= "\t\t\t\t</div>" . PHP_EOL;
		$_tagSetHtml .= "\t\t" . '</div>' . PHP_EOL;

		//html
		$html .= $_img . PHP_EOL;
	}
	return $html;
} //url_photoListHtml

// titleListHtml
function titleListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-ttllist__inner" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-ttllist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-ttllist__inner">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		//html
		$html .= '<li class="u-ttllist__item">' . PHP_EOL
			. "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . $_ttl . PHP_EOL
			. "\t\t" . $_wrapEndHtml
			. '</li>' . PHP_EOL . PHP_EOL;
	}
	return $html;
} //titleListHtml

// titleSumaiListHtml
function titleSumaiListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		// $_img = $img_url."/thum/".$val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 100, "…", 'utf-8');
		// $_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		// $_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-ttllist__inner" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-ttllist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-ttllist__inner">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		//html
		$html .= '<li class="u-ttllist__item">' . PHP_EOL
			. "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . $_ttl . PHP_EOL
			. "\t\t" . $_wrapEndHtml
			. '</li>' . PHP_EOL . PHP_EOL;
	}
	return $html;
} //titleSumaiListHtml


// cafetitleListHtml
function cafetitleListHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_ex = mb_strimwidth($val['description'], 0, 80, "…", 'utf-8');
		$_icon = $val['icon-img'];

		$_ttl = strip_tags($_ttl);
		if (strpos($_ttl, "〜") !== false) {
			$_ttl = str_replace('〜', '', $_ttl);
		}
		if (strpos($_ttl, "あなたの今を聞かせて！") !== false) {
			$_ttl = str_replace('あなたの今を聞かせて！', '', $_ttl);
		}

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-ttllist__inner" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-ttllist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-ttllist__inner">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		//html
		$html .= '<li class="u-ttllist__item">' . PHP_EOL
			. "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . $_ttl . PHP_EOL
			. "\t\t" . $_wrapEndHtml
			. '</li>' . PHP_EOL . PHP_EOL;
	}
	return $html;
} //cafetitleListHtml


function photoSmileHtml($data)
{

	global $base_url, $img_url;
	$html = "";

	foreach ($data as $val) {

		//代入
		$_img = $img_url . "/thum/" . $val['image'];
		$_url = $base_url . $val['url'];
		$_ttl = mb_strimwidth($val['title'], 0, 70, "…", 'utf-8');
		$_point = number_format($val['required_points']);
		$_icon = $val['icon-img'];

		if ($val['blank'] == "1") {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '" target="_blank">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		} elseif ($val['blank'] == "2") {
			$_wrapStartHtml = '<div class="u-photolist__inner end">' . PHP_EOL;
			$_wrapEndHtml = "</div>" . PHP_EOL;
		} else {
			$_wrapStartHtml = '<a href="' . $_url . '" class="u-photolist__inner ' . $_icon . '">' . PHP_EOL;
			$_wrapEndHtml = "</a>" . PHP_EOL;
		};

		$_iconHtml = "";
		if ($_icon) {
			$_iconHtml = "\t\t" . "\t\t" . '<div class="u-photolist__icon ' . $_icon . '"><span>' . $_icon . '</span></div>' . PHP_EOL;
		}

		//html
		$html .= '<article class="u-photolist__item smile-exchange ' . $_icon . '">' . PHP_EOL
			. '<label class="u-photolist__wrap smile-exchange ' . $_icon . '">' . PHP_EOL
			. "\t\t" . $_wrapStartHtml
			. "\t\t" . "\t\t" . '<div class="u-photolist__exchange">' . PHP_EOL
			. "\t\t" . "\t\t" . '<div class="u-photolist__pcwrap u-clearfix">' . PHP_EOL
			. "\t\t" . "\t\t" . "\t\t" . '<div class="u-photolist__img smile-exchange ' . $_icon . '"><img data-src="' . $_img . '" alt="' . strip_tags($_ttl) . '" class="' . $_icon . '"></div>' . PHP_EOL
			. "\t\t" . "\t\t" . '<div class="u-photolist__txtbox">' . PHP_EOL
			. "\t\t" . "\t\t" . "\t\t" . '<h4 class="u-photolist__ttl ' . $_icon . '">' . $_ttl . '</h4>' . PHP_EOL
			. "\t\t" . "\t\t" . '</div>' . PHP_EOL
			. "\t\t" . "\t\t" . '</div>' . PHP_EOL
			. "\t\t" . "\t\t" . '<div class="u-photolist__pointwrap">' . PHP_EOL
			. "\t\t" . "\t\t" . '<p class="u-photolist__point ' . $_icon . '">' . $_point . '<span class="u-font__small">スマイル</span></p>' . PHP_EOL
			. "\t\t" . "\t\t" . '</div>' . PHP_EOL
			. "\t\t" . "\t\t" . '</div>' . PHP_EOL
			. $_iconHtml
			. "\t\t" . $_wrapEndHtml
			. "</label>" . PHP_EOL
			. '</article>' . PHP_EOL . PHP_EOL;
	}
	return $html;
} //photoSmileHtml



//---------------- jsonのエンコード&配列化

function get_data()
{

	$jsonUrl = (dirname(__FILE__)) . "/contents.json";
	if (file_exists($jsonUrl)) {
		$json = file_get_contents($jsonUrl);
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$data = json_decode($json, true);
	}

	foreach ($data as $key => $value) {
		foreach ($value as $keys => $val) {
			if ($val == "null" || $val == "NULL" ||  $val == "") {
				$val = "";
			}
			$data[$key][$keys] = $val;
		}
	}

	foreach ($data as $key => $value) {
		if ($value['priority'] == "") {
			$value['priority'] = "0";
		} elseif ($value['priority'] == '-1') {
			unset($data[$key]);
		}
	}

	usort($data, 'cmp');
	$data = add_tags($data);

	return $data;
}


function get_all_data()
{

	$jsonUrl = (dirname(__FILE__)) . "/contents.json";
	if (file_exists($jsonUrl)) {
		$json = file_get_contents($jsonUrl);
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$data = json_decode($json, true);
	}

	foreach ($data as $key => $value) {
		foreach ($value as $keys => $val) {
			if (is_array($val)) {
				$data[$key][$keys] = $val;
			} else {
				$val = strval($val);
				if ($val == "null" || $val == "NULL" ||  $val == "") {
					$val = "";
				}
				$data[$key][$keys] = $val;
			}
		}
	}

	$unset_data = array();

	foreach ($data as $key => $value) {
		if ($value['priority'] == "") {
			$value['priority'] = "0";
		} elseif ($value['priority'] == '-1') {
			array_push($unset_data, $data[$key]);
			unset($data[$key]);
		}
	}

	usort($data, 'cmp');
	$data = add_tags($data);

	usort($unset_data, 'cmp');
	$unset_data = add_tags($unset_data);

	foreach ($unset_data as $key => $value) {
		array_push($data, $value);
	}

	return $data;
}

// ------------ 記事ソート用関数（優先度大きい順、優先度同じ時は記事ID大きい方を先）

function cmp($a, $b)
{
	if ($a['priority'] == $b['priority']) {
		return ($a['contents_id'] < $b['contents_id']) ? 1 : -1;
	}
	return ($a['priority'] < $b['priority']) ? 1 : -1;
}

//

function add_tags($data)
{

	$count = array();
	$return = array();

	foreach ($data as $l) {
		if ($l['tag1'] != "") {
			$count[$l["tag1"]] = 0;
		}
		if ($l['tag2'] != "") {
			$count[$l["tag2"]] = 0;
		}
		if ($l['tag3'] != "") {
			$count[$l["tag3"]] = 0;
		}
	}

	foreach ($data as $l) {
		if ($l['tag1'] != "") {
			$tags[] = $l["tag1"];
			$count[$l["tag1"]]++;
		}
		if ($l['tag2'] != "") {
			$tags[] = $l["tag2"];
			$count[$l["tag2"]]++;
		}
		if ($l['tag3'] != "") {
			$tags[] = $l["tag3"];
			$count[$l["tag3"]]++;
		}
	}

	foreach ($data as $key => $value) {
		$value['tags'] = array();

		foreach ($value as $keys => $val) {
			if ($keys == "tag1" || $keys == "tag2" || $keys == "tag3") {
				foreach ($count as $countKey => $countVal) {
					if ($val == $countKey) {
						$value['tags'][$countKey] = $countVal;
					}
				} //count
			}
		}
		$data[$key] = $value;
	}
	return $data;
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
function unicode_encode($str)
{
	return preg_replace_callback("/\\\\u([0-9a-zA-Z]{4})/", "encode_callback", $str);
}

function encode_callback($matches)
{
	return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UTF-16");
}
