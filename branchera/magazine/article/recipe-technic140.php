<?php
//base
include( "../../function.php" );
$content = get_id_data( '15140' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「アクアパッツァの作り方」を動画とテキストで解説。おもてなしにぴったりなアクアパッツァの作り方と、残りスープを使ったアレンジレシピについてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '140';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'SOPQRKPxMMQ';

//導入文
$introTxt = '第140回は、お料理オンラインイベントのメニュー「アクアパッツァの作り方」です。おうちでもバル気分を楽しめる、おしゃれなレシピを動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　困る
array ('papa','02','最近外食になかなか行けないし、おうちでもお店のようなおしゃれな料理を作りたいな～'),

//フラッキー　通常
array ('fl','01','それなら嬉しい助っ人がいるぞ！俺の友達のマユ先生がバル風レシピを作ったんだ<br>
アクアパッツァの作り方を教えてくれるぞ！'),

//ミエ　通常
array ('mama','01','アクアパッツァ、おしゃれだね！食卓に並んだらパーティー気分になれそう！'),

//コウちゃん　通常
array ('ko','01','ぱーてぃー、したい！'),

//マユ先生
array ('mayu','01','今日はオンラインで、私と一緒に料理をしましょう！<br>
アクアパッツァは短い時間でも簡単に作れますよ'),

//マサキ　通常
array ('papa','01','オンラインで教えてもらえるのは嬉しいね。マユ先生、よろしくお願いします！'),

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
array ('ttl_l','mb0','アクアパッツァの作り方'),

// （本文1）
array ('text','mb2','アクアパッツァは、白身魚を白ワインで煮込んで作る、イタリアンの定番料理。スープに出た魚介のうまみを楽しむことができます。見た目も華やかなので、<a href="'.$base_url.'/magazine/article/recipe-collect06.php" class="recipe-design__link">パーティーメニュー</a>としてもおすすめです。美味しいアクアパッツァの作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','白身魚（切り身）','4切れ'),
array ('mtr','塩','小さじ1/2'),
array ('mtr','あさり','200g'),
array ('mtr','ミニトマト','12個'),
array ('mtr','オリーブ（ブラックまたはグリーン）','12個'),
array ('mtr','ケーパー','小さじ1'),
array ('mtr','にんにく','1かけ'),
array ('mtr','白ワイン','100ml'),
array ('mtr','水','100ml'),
array ('mtr','オリーブオイル','大さじ2'),
array ('mtr','こしょう','少々'),
array ('mtr','イタリアンパセリ','適量'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic14.php" class="recipe-design__link">あさりを砂抜き</a>し、貝と貝をこすり合わせるようにして洗います。'),
array('step','02','mb0','ミニトマトのヘタを取ります。'),
array('step','03','mb0','にんにくを<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。<br>芽は臭いの元になるので、取りましょう。'),
array('step','04','mb3','白身魚に塩を振ります。<br>水気が出るまで10分ほど置きます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','白身魚は何を使うのがよい？'),
array ('free','mb0','白身魚は真鯛、金目鯛、たら、めばる、さわらなどがおすすめだ！'),
array ('chk-end'),

array('step','05','mb3','キッチンペーパーで切り身から出た水気を拭き取ります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','水気はしっかり拭くのが大事'),
array ('free','mb0','塩を振って水気を出すことで、魚の臭みを取ることができるぞ。<br>また、水気をしっかり拭くことで、魚を焼いたときに身が崩れにくくなるんだ！'),
array ('chk-end'),

array('step','06','mb0','フライパンにオリーブオイルを入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し、皮目を下にして切り身を焼きます。<br>切り身をのせる前にフライパンをしっかり熱することで、魚の皮が焦げ付くのを防げます。'),
array('step','07','mb0','魚に焼き目が付いたら裏返します。'),
array('step','08','mb0','フライパンにあさり、オリーブ、ケーパー、にんにく、トマト、白ワイン、水を入れます。<br>蓋をして中火で加熱します。'),
array('step','09','mb0','煮立ったら弱火にし、蓋をして3～5分ほど熱します。'),
array('step','10','mb0','あさりの殻が開いたら、塩こしょうで味をととのえます。'),
array('step','11','mb3','具材をバランスよく盛り付けて、パセリをのせたらできあがり。'),

//（大見出し2）
array ('ttl_l','mb1','アクアパッツァのスープを活かしたアレンジレシピ'),
array ('text','mb2','アクアパッツァの残りスープを、ほかの料理に使うのもおすすめです！スープを活かした美味しいアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','アクアパッツァパスタ'),
array ('textimg','12','right','アクアパッツァパスタ','mb0','魚介のうまみを楽しめる<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>です。パスタを袋の表示より短い時間でゆでます。アクアパッツァの残りスープをフライパンで温めます。薄切りにした玉ねぎを入れ、ゆでたパスタにスープを吸わせるように絡めます。最後に塩で味をととのえたら完成です！'),

//（小見出し）
array ('ttl_m','mb1','リゾット'),
array ('textimg','13','left','リゾット','mb0','アクアパッツァのスープを活かした逸品です。アクアパッツァの残りスープに水を足して、鍋で温めます。オリーブオイルを引いたフライパンで、みじん切りにした玉ねぎを炒めます。<br>
フライパンに米を洗わずに入れ、透明になるまで炒めます。フライパンに温めたスープを少しずつ入れ、スープがなくなるまで加熱してください。塩で味をととのえたら、お皿に盛り付けます。パルミジャーノチーズをかければ完成です！'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','アクアパッツァ、見た目もおしゃれにできたよ～'),

//コウちゃん　喜ぶ
array ('ko','03','おさかな、おいしい～'),

//ミエ　通常
array ('mama','01','先生に教えてもらいながらできてよかった！本当に短時間で作れてすごい！'),

//マユ先生
array ('mayu','01','アクアパッツァのスープには、魚介のうまみがたくさん。ぜひスープをアレンジして楽しんでくださいね。'),

//マサキ　通常
array ('papa','01','また自分でも作ってみようっと！'),


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
