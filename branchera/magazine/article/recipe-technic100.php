<?php
//base
include( "../../function.php" );
$content = get_id_data( '15100' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「まぐろの漬けの作り方」を動画とテキストで解説。余った刺身まぐろを美味しく長持ちさせる、「漬けダレ」のレシピをご紹介します。また、漬け丼やだし茶漬けなどのアレンジメニューもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '100';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '2Pz_gdMtsf4';

//導入文
$introTxt = '第100回は、「まぐろの漬けの作り方」です。タレに漬け込むことで保存しやすくなり、風味も豊かに。簡単な作り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // ママ　困る
  array ('mama','02','まぐろのお刺身が安かったから、買い過ぎちゃった…余ったお刺身は冷蔵庫で保存できるかな～？'),

  // パパ　通常
  array ('papa','01','うーん、できるだけ早く食べたほうがいいんじゃないかな？'),

  // ママ　困る
  array ('mama','02','美味しいうちに食べ切れるか不安～'),

  // フラッキー　通常
  array ('fl','01','余った刺身はタレに漬けて、まぐろの漬けにするといいぞ！翌日になっても美味しく食べられるぜ！'),

  // パパ　通常
  array ('papa','01','おっ、それはいいね！まぐろの漬け丼、家で食べられたら嬉しいなー'),

  // フラッキー　通常
  array ('fl','01','よーし！では、美味しいまぐろの漬けの作り方を伝授しよう！タレの作り方は基本中の基本だから、よく聞いておくんだぞー'),

  // ママ　通常
  array ('mama','01','了解！'),


);

// 手順
$step = array (
  // 大見出し：array ('ttl_l','mb','text'),
  // 小見出し：array ('ttl_m','mb','text'),
  // 見出し（h5）：array ('ttl_s','mb','text'),
  // 見出し（他）：array ('ttl（3-5）','mb',text),
  // 本文：array ('text','mb','text'),
  // 本文（フリー）：array ('free','mb','text'),
  // 画像ありテキスト：array ('textimg','num','float方向','alt','mb','text'),

  // check start：array ('chk-st'),
  // check end：array ('chk-end'),

  // plus1 start：array ('plus-st'),
  // plus1 title：array ('plus-ttl'),
  // plus1 end：array ('plus-end'),

  // 材料 start：array ('mtr-st'),
  // 材料 end：array ('mtr-end'),
  // 材料 array ('mtr','材料名','分量'),

  // 手順：array ('step','num','mb','text'),

//  （大見出し1）
  array('ttl_l','mb0','まぐろの漬けの作り方'),

//  （本文1）
  array('text','mb3','新鮮なまぐろをタレに漬け込んだまぐろの漬け。そのまま食べても、熱い<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>にのせてもよし。タレの味が染み込んだまぐろの漬けは、手軽に作れる美味しい一品です。簡単なので、ぜひお試しください。'),

// （小見出し）
array('ttl_m','','材料（2人前）'),
array ('mtr-st'),
array ( 'mtr','まぐろ（刺身用の柵、またはカット済みの刺身）','180g'),
array ( 'mtr','＜漬けタレ用の調味料＞',''),
array ( 'mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</>','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2'),
array ( 'mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#sake" class="recipe-design__link">酒</a>','大さじ1'),
array ( 'mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin2" class="recipe-design__link">みりん</a>','大さじ1'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','まぐろは斜めに<a href="'.$base_url.'/magazine/article/recipe-technic24.php#sogigiri" class="recipe-design__link">そぎ切り</a>にします。'),
array('step','02','mb0','耐熱容器に酒とみりんを入れます。600wに設定した電子レンジで1分程度加熱し、アルコールを飛ばします。'),
array('step','03','mb0','電子レンジから取り出したら、粗熱が取れるまで冷まします。冷めたら、醤油を加えましょう。これでタレの準備は完了です。'),
array('step','04','mb3','そぎ切りにしたまぐろをファスナー付き保存袋に入れます。そこにタレを加えて下さい。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','味が濃くなるのを避けたいときは… '),
array('text','mb0','時間が経てば経つほど、まぐろに味が染み込んで味が濃くなっていくぞ。味が濃くなるのを避けたい場合は、醤油の量を大さじ1と1/2に減らして漬けよう！<br>できあがったまぐろの漬けを1枚食べてみて、もし味が薄いようなら醤油を少し足して調整するといいぞ！'),
array('chk-end'),


array('step','05','mb0','空気を抜いて封をしたら、軽くなじませて冷蔵庫に入れます。'),
array('step','06','mb3','20分程度置いたらできあがりです。翌日中に食べ切るようにしましょう。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','まぐろの漬け丼にする方法 '),
array('text','mb0','まぐろの漬けを使った料理といえば、漬け丼。タレがごはんに染み込んで、食欲をそそる一品です。作り方はとても簡単！まず、丼に温かいごはんを盛って、まぐろの漬けをのせます。刻んだ<a href="'.$base_url.'/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>、海苔、いりごまをトッピングして、お好みでわさびとすりおろした生姜をのせたらできあがりです。さらに<a href="'.$base_url.'/magazine/article/recipe-technic08.php#separate-eggs" class="recipe-design__link">卵黄</a>をのせると、まろやかな味わいになりますよ。<br>
まぐろの漬けを作った際は、ぜひ漬け丼をお試しくださいね。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','人気のアレンジレシピ'),

// （本文2）
array('text','mb3','漬け丼のほかにも、まぐろの漬けを使ったさまざまなアレンジレシピがあります。既にしっかり味付けしてある分、調理の手間が省けて簡単に作ることができますよ。さっそくおすすめのレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','だし茶漬け'),
array('textimg','07','right','だし茶漬け','mb2','器にごはんを盛り、まぐろの漬けをのせます。上から粉末だしを振りかけ、お湯を注ぎましょう。最後に刻み海苔、三つ葉、わさびなどの薬味をのせれば、だし茶漬けのできあがりです。'),

// （小見出し）
array('ttl_m','','まぐろとアボカドのサラダ '),
array('text','mb2','レタス、きゅうり、トマトなどの野菜を食べやすい大きさに切ります。<a href="'.$base_url.'/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>は一口大にカットし、変色しないようにレモン汁をかけておきましょう。<br>野菜とアボカドを皿に盛り、まぐろの漬けを数枚のせます。練わさび、マヨネーズ、酢を混ぜたドレッシングをかけて完成です。'),

// （小見出し）
array('ttl_m','','山かけ丼'),
array('textimg','08','left','山かけ丼','mb2','長芋は皮をむいた後すりおろして、だし汁と醤油を混ぜ合わせておきます。<br>器に<a href="'.$base_url.'/magazine/article/recipe-technic43.php" class="recipe-design__link">酢飯</a>を盛り、まぐろの漬けと、とろろをのせます。仕上げに刻み海苔、大葉の<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>を散らしたらできあがりです。お好みでわさびを添えていただきましょう。'),

// （小見出し）
array('ttl_m','','<span id="chirashi">ちらし寿司</span>'),
array('text','mb0','ちらし寿司の具材にも、まぐろの漬けがよく合います。酢飯の上に<a href="'.$base_url.'/magazine/article/recipe-technic37.php" class="recipe-design__link">錦糸卵</a>、菜の花、大葉などのお好みの具材と一緒に、まぐろの漬けをのせましょう。<a href="'.$base_url.'/magazine/article/recipe16.php" class="recipe-design__link">こちらのアレンジレシピ</a>のように、ケーキ型にすると華やかになりますよ。'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　通常
array ('mama','01','わ～、美味しくできたわ！'),

// パパ　通常
array ('papa','01','漬けにすると、ごはんに合うからいくらでも食べられるね'),

// コウちゃん　笑顔
array ('ko','03','こうちゃん、おかわりほしいー！'),

// フラッキー　　通常
array ('fl','01','タレににんにくやラー油を加えて、中華風にしても美味しいぞ！'),

// ママ　笑顔
array ('mama','01','よーし！また、お刺身をいっぱい買ってきちゃおうっと！'),


);

//関連記事
$recommendrecipe = array (
  array	('recommend-recipe-st'),
  array ('recommend-recipe-id','15136'),
  array ('recommend-recipe-id','15138'),
  array ('recommend-recipe-id','15024'),
  array ('recommend-recipe-end'),
);
  
// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-cnt.php"); ?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php");
  ?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
