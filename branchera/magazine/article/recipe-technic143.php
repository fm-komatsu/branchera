<?php
//base
include("../../function.php");
$content = get_id_data('15143');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「お好み焼きの基本の作り方」を動画とテキストで解説。とろろを使った本格的で美味しいお好み焼きを作るポイントと、広島風やチーズトッピングなど人気のアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '105';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '143';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'IZzf_qosrsQ';

//導入文
$introTxt = '第143回は、お料理の初心者でも、自宅で美味しくできる「お好み焼きの作り方」です。子どもにも大人にも人気のお好み焼き（豚玉）の作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //コウちゃん　通常
  array('ko', '01', 'こうちゃん、おこのみやき、たべた～い'),

  //ミエ　通常
  array('mama', '01', 'この前、お祭りで食べたお好み焼きが美味しかったんだね！'),

  //マサキ　通常
  array('papa', '01', 'よし、パパが作ってやろう！<br>
でも、お好み焼きってふわふわに作るのが難しいんだよな'),

  //フラッキー　通常
  array('fl', '01', 'コツが分かれば家でもふわふわのお好み焼きが作れるぜ！'),

  //マサキ　通常
  array('papa', '01', 'コツがあるのか<br>
フラッキー、そのコツってやつを教えてよ！'),

);

// 手順
$step = array(
  // 大見出し：array ('ttl_l','mb','text'),
  // 小見出し：array ('ttl_m','mb','text'),
  // 見出し（h5）：array ('ttl_s','mb','text'),
  // 見出し（他）：array ('ttl（3-5）','mb',text),
  // 本文：array ('text','mb','text'),
  // 本文（フリー）：array ('free','mb','text'),
  // 画像ありテキスト：array ('textimg','num','float方向','alt','mb','text'),

  // check start：
  // array ('chk-st'),
  // check end：
  // array ('chk-end'),

  // plus1 start：array ('plus-st'),
  // plus1 title：array ('plus-ttl'),
  // plus1 end：array ('plus-end'),

  /* 材料 start：
array ('mtr-st'),

材料
array ('mtr','材料名','分量'),

材料 end：
array ('mtr-end'),
*/

  // 手順：array ('step','num','mb','text'),

  // （大見出し1）
  array('ttl_l', 'mb0', '基本のお好み焼きの作り方'),

  // （本文1）
  array('text', 'mb2', '日本のソウルフードの1つであるお好み焼き。関西風、関東風、広島風など、地域によって作り方が異なります。今回は関西風お好み焼きの定番「豚玉」の作り方をご紹介します。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料（2～3人前）'),
  array('mtr-st'),
  array('mtr', 'キャベツ', '300g'),
  array('mtr', '紅しょうが', '20g'),
  array('mtr', '青ねぎ', '3本'),
  array('mtr', '豚バラ薄切り肉', '4枚（80g）'),
  array('mtr', '山芋', '80g'),
  array('mtr', 'だし汁', '100ml'),
  array('mtr', '小麦粉', '100g'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>', '少々'),
  array('mtr', '卵', '2個'),
  array('mtr', '天かす', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>3'),
  array('mtr', 'サラダ油', '適量'),
  array('mtr-end'),
  array('ttl5', 'mb0', 'トッピング材料'),
  array('mtr-st'),
  array('mtr', 'ソース', '適量'),
  array('mtr', 'マヨネーズ', '適量'),
  array('mtr', 'かつおぶし', '適量'),
  array('mtr', '青のり', '適量'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', 'mb1', '手順'),
  array('step', '01', 'mb0', 'キャベツと紅しょうがをみじん切りにします。'),
  array('step', '02', 'mb0', '青ねぎを小口切りにします。'),
  array('step', '03', 'mb0', '豚バラ肉を半分に切ります。'),
  array('step', '04', 'mb0', '山芋をよく洗い、皮ごと<a href="' . $base_url . '/magazine/article/recipe-technic75.php" class="recipe-design__link">すりおろし</a>、ボウルに入れます。'),
  array('step', '05', 'mb0', 'だし汁を加えて山芋をよく伸ばします。'),
  array('step', '06', 'mb0', '小麦粉をふるいにかけて、ボウルに入れます。'),
  array('step', '07', 'mb0', '塩と卵を入れて、生地をよく混ぜ合わせます。'),
  array('step', '08', 'mb3', '生地にキャベツ、紅しょうが、青ねぎ、天かすを入れて、混ぜ合わせます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'ふわふわにするコツは混ぜ方にあり！'),
  array('free', 'mb0', '生地と具を混ぜ過ぎず、サックリ混ぜてくれ！それが、ふっくらしたお好み焼きを作るコツなんだぜ！<br>
混ぜると、小麦粉に含まれるグルテンが水分に反応して適度な粘り気が出る。しかし、混ぜ過ぎると粘りが出すぎて、生地が固くなってしまうんだ。<br>
生地と具を混ぜるときは、空気が入るように手短にサクッと混ぜよう！'),
  array('chk-end'),

  array('step', '09', 'mb3', 'フライパンにサラダ油を入れて熱します。生地の1/3を丸く入れ、3分程度焼きます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '美味しさのコツは一人前ずつ焼くこと！'),
  array('free', 'mb0', 'お好み焼きは一度に2～3人分を焼くより、1人分ずつ焼くほうが美味しくできるぞ！フライパンに生地を大きく広げ過ぎると、裏返すことが難しく、ばらばらになる可能性があるんだ。フライパンに入れる生地の量は、フライ返しで簡単にひっくり返せる程度にしよう。<br>
一度にたくさん焼きたいときは、天板の広いホットプレートを使うと便利だぞ！'),
  array('chk-end'),

  array('step', '10', 'mb0', '生地の上に豚バラ肉をのせて、裏返します。'),
  array('step', '11', 'mb3', 'フライパンに蓋をして5分程度蒸し焼きにします。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '焼くときは動かさない！押さえ付けない！'),
  array('free', 'mb0', '焼いている間は、お好み焼きを動かさないことが美味しく作るポイントだぞ。動かすと形が崩れることもある。それに、押さえ付けるのもタブーだぜ。固いお好み焼きになってしまうぞ！'),
  array('chk-end'),

  array('step', '12', 'mb0', '蓋を外して生地を裏返し、2分加熱します。'),
  array('step', '13', 'mb3', 'お皿に移し、ソースをかけ、マヨネーズ、かつお節、青のりをトッピングすれば完成です。'),

  // （小見出し）
  array('ttl_m', 'mb1', 'チーズトッピングの材料と作り方（2～3人前）'),
  array('mtr-st'),
  array('mtr', 'ピザ用チーズ', '80g'),
  array('mtr', '牛乳', '大さじ2'),
  array('mtr-end'),

  array('step', '14', 'mb0', '耐熱ボウルにピザ用チーズを入れます。'),
  array('step', '15', 'mb0', '牛乳を加えます。'),
  array('step', '16', 'mb3', 'ラップをふんわりかけて600Wに設定した電子レンジで1分加熱します。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'チーズが溶けない場合の方法は？'),
  array('free', 'mb0', '電子レンジで熱しても、チーズが溶けずに残っていることもある。そのときは、10秒ずつ追加しながら加熱するといいぞ！とろ～りといい具合にチーズが溶けるぜ。'),
  array('chk-end'),

  array('step', '17', 'mb3', 'よくかき混ぜて、ソースを塗ったお好み焼きにかけたら完成です。'),

  //（大見出し2）
  array('ttl_l', 'mb1', 'お好み焼きのアレンジレシピ'),
  array('text', 'mb2', 'お好み焼きは具材を変えれば、いろいろな味を楽しめますよ。おすすめのお好み焼きレシピを3つご紹介します。'),

  //（小見出し）
  array('ttl_m', 'mb1', '海鮮お好み焼き'),
  array('textimg', '18', 'right', '海鮮お好み焼き', 'mb2', '<a href="' . $base_url . '/magazine/article/recipe-technic49.php" class="recipe-design__link">えび</a>、いかは、冷凍の場合あらかじめ解凍します。お好み焼きの生地を作ったボウルに、キャベツ、えび、いか、豚肉、紅しょうが、天かすを入れてサクッと混ぜ合わせます。<br>
サラダ油を入れて熱したフライパンに生地を流し入れます。焼き色が付いたら裏返し、蓋をして蒸し焼きにします。焼きあがったら、お皿にのせてマヨネーズ、かつお節、青のりなどトッピングをして完成です。'),

  //（小見出し）
  array('ttl_m', 'mb1', '広島風お好み焼'),
  array('textimg', '19', 'left', '広島風お好み焼', 'mb2', 'クレープのように薄い生地が特徴の「広島風お好み焼き」も人気のレシピです。小麦粉を水で溶いた生地を、熱したホットプレートに流し入れます。薄く丸く広げ、削り節とキャベツをたっぷりのせ、その上に<a href="' . $base_url . '/magazine/article/recipe-technic122.php" class="recipe-design__link">もやし</a>と天かすをのせます。さらに豚肉をのせて塩こしょうをし、生地が焼けたら、ひっくり返します。'),
  array('text', 'mb2', 'ホットプレートの片側でソース味の<a href="' . $base_url . '/magazine/article/recipe-technic134.php" class="recipe-design__link">焼きそば</a>を作り、その上に先ほどの生地をのせます。'),
  array('text', 'mb2', 'その隣で、溶いた卵を生地と同じ大きさに広げて焼きます。卵の上に焼きそばごと生地をのせ、卵が上になるようにひっくり返し、ソースや青のりでトッピングしたらできあがりです。'),

  //（小見出し）
  array('ttl_m', 'mb1', '幼児向けお好み焼き'),
  array('textimg', '20', 'right', '幼児向けお好み焼き', 'mb0', '野菜が豊富で栄養満点のお好み焼きは、幼児食にうってつけです。キャベツ、にんじん、しめじをみじん切りにして、ゆでるか、ラップをかけて電子レンジで加熱します。その後、小麦粉、卵、だし汁を加えて混ぜ合わせます。<br>
サラダ油を入れて熱したフライパンに生地を入れて、小さな形に焼きます。両面に焼き色がつき、食べやすい形に切ったら完成です。1歳から食べられますよ。'),

);

//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //コウちゃん　喜ぶ
  array('ko', '03', 'わーい、ふわっふわ～'),

  //マサキ　通常
  array('papa', '01', '外はカリカリ、中はふんわり<br>屋台の味にできたぞ～！'),

  //ミエ　通常
  array('mama', '01', 'わ～、美味しい！<br>お祭りを思い出すな～♪'),

  //フラッキー　通常
  array('fl', '01', '卵に野菜、具材がたっぷり入ったお好み焼きは、栄養満点のバランス食なんだぜ！'),

  //マサキ　通常
  array('papa', '01', 'よーし、具材を変えてどんどん作るぞ！'),

);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '15134'),
  array('recommend-recipe-id', '15125'),
  array('recommend-recipe-id', '14015'),
  array('recommend-recipe-end'),

);

?>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-cnt.php"); ?>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php $toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php"); ?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
