<?php
//base
include( "../../function.php" );
$content = get_id_data( '15113' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「お雑煮のレシピ」を動画とテキストで解説。地域ごとに材料や作り方が異なるお雑煮。基本の関東風&amp;関西風のレシピとともに、ほかの地域のお雑煮の特徴をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '113';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'JySVDFJadVc';

//導入文
$introTxt = '第113回は、お正月の定番・お雑煮の作り方です。関東風・関西風を基本に、全国のご当地レシピも幅広くご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ミエ　通常
array ('mama','01','お正月の楽しみといえば、やっぱりごちそう！<br>
おせちの中身は、前回とちょっと変化をつけたいなあ'),

// コウちゃん　通常
array ('ko','01','おぞうにも、ある〜？'),

// ミエ　通常
array ('mama','01','もちろん！でも、お雑煮も毎回同じだとマンネリよね…<br>
どうすれば、違う味にできるかな？'),

// フラッキー　通常
array ('fl','01','そんなのカンタ〜ン！<br>
お雑煮は関東風にするか関西風にするかだけでも、大きく変わるんだぜ！'),

// ミエ　驚く
array ('mama','03','え〜っ、そうなの！<br>
フラッキー、関東風と関西風の違い、教えてくれない？'),

// フラッキー　褒める
array ('fl','03','オッケー！じゃあ、さっそく始めるぞ！'),

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
array ('ttl_l','mb0','基本のお雑煮レシピ｜関東風・関西風'),

// （本文1）
array ('text','mb2','お正月といえば、やっぱりお雑煮。お雑煮は、作られる地域によって具材や味付けが異なります。今回は、代表的な関東風・関西風の2つの作り方をご紹介！ぜひ、違いを楽しんでみてください。'),

// （小見出し）
array ('ttl_m','mb1','関東風のお雑煮レシピ'),
array ('ttl5','mb0','材料（2人分）'),
array ('mtr-st'),
array ('mtr','鶏もも肉（皮なし）','100g'),
array ('mtr','肉の下味用調味料','酒小さじ1、醤油小さじ1'),
array ('mtr','しいたけ','2個'),
array ('mtr','にんじん','30g'),
array ('mtr','三つ葉','4〜5本'),
array ('mtr','だし汁','300ml'),
array ('mtr','醤油','小さじ1'),
array ('mtr','酒','小さじ1'),
array ('mtr','塩','少々'),
array ('mtr','角餅','2個'),
array ('mtr','かまぼこ（8mm幅）','2切れ'),
array ('mtr-end'),


// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb0','鶏肉を一口大に切ります。<br>
ボウルなどに移し、下味用調味料（酒、醤油）をまぶします。'),

array('step','02','mb0','しいたけのかさに切り込みを入れ、飾り切りにします。'),

array('step','03','mb3','にんじんを8mm幅の輪切りにし、花形に抜きます。<br>
型抜きしたにんじんに切り込みを入れ、ねじり梅にします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','<span id="nejiriume">ねじり梅の切り方</span>'),
array ('textimg','04','right','ねじり梅','mb0','ねじり梅とは、梅の花をイメージした飾り切りの1種だ！にんじんを花形に抜いたら、花びらと花びらの間に、中心に向かって2mmほどの深さの切り込みを入れる。次に、切り込みに向かって斜めに花びらをそぎ落とせば、ねじり梅の完成だ！<br>
お雑煮に、お正月らしい華やかさを添えることができるぞ。お煮しめに入れるのもおすすめだぜ！'),
array ('chk-end'),

array('step','05','mb0','三つ葉をざく切りにします。'),

array('step','06','mb0','鍋にだしを入れて中火にかけます。<br>
沸騰したら弱火にして、鶏肉、しいたけ、にんじんを加えて煮ます。<br>
具材に火が通ったら、醤油、酒、塩で味を調えましょう。
'),

array('step','07','mb3','<a href="'.$base_url.'/magazine/article/recipe-technic38.php" class="recipe-design__link">角餅をこんがりと焼き</a>、かまぼこと共に器に盛ります。
具と汁を注ぎ入れ、三つ葉を飾って完成です。
'),

// （小見出し）
array ('ttl_m','mb1','関西風のお雑煮レシピ'),
array ('ttl5','mb0','材料（2人分）'),
array ('mtr-st'),
array ('mtr','里芋','1個'),
array ('mtr','だいこん','30g'),
array ('mtr','にんじん','30g'),
array ('mtr','だし','400ml'),
array ('mtr','白味噌','大さじ2 1/2'),
array ('mtr','丸餅','2個'),
array ('mtr','ゆずの皮','適宜'),
array ('mtr-end'),

array('step','08','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic66.php" class="recipe-design__link">里芋</a>の皮をむき、4等分の<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にします。
'),

array('step','09','mb0','ボウルなどの容器に移し、少々の塩（分量外）で塩もみしてから、熱湯で3分ゆでます。<br>
ゆで上がったら、ボウルに張った水に取り、ぬめりを洗い流してください。
'),

array('step','10','mb0','だいこんとにんじんをそれぞれ5mm厚さの輪切りにし、花型に抜きます。'),

array('step','11','mb0','鍋に、だし、里芋、だいこん、にんじんを入れ、中火にかけます。<br>
具がやわらかく煮えたら火を止めましょう。
'),

array('step','12','mb0','鍋に白味噌を溶き入れます。'),

array('step','13','mb3','丸餅を熱湯でゆで、器に盛ります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','餅の形と調理法の違い'),
array ('free','mb0','焼いた角餅を使う東日本と違って、西日本のお雑煮は、丸いお餅を焼かずに使うことが多いんだ。ゆですぎるとドロドロになってしまうから、やわらかくなったらすぐお湯から引き上げるのが美味しく仕上げるコツだぞ！'),
array ('chk-end'),

array('step','14','mb3','具と汁を注ぎ入れ、<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にしたゆずの皮を飾ってできあがりです。'),

// （大見出し1）
array ('ttl_l','mb0','個性豊か！日本全国のお雑煮レシピ'),

// （本文2）
array ('text','mb2','お雑煮の作り方は関東風・関西風に大きく分けられるだけでなく、細かい地域ごとにさまざまな特色があります。個性豊かなご当地レシピの数々をご紹介しましょう！'),

//（小見出し）
array ('ttl_m','mb1','九州・博多風'),
array ('free','mb','「出世魚」と呼ばれるぶりが入った、すまし汁のお雑煮です。<br>
だしを火にかけ、戻した干ししいたけとぶりを加えて煮ます。醤油・酒・塩で味を調えたら、ゆでた丸餅と小松菜を器に盛り、具と汁を注ぎ入れましょう。'),

//（小見出し）
array ('ttl_m','mb1','北海道風'),
array ('textimg','15','right','北海道風','mb2','北海道の食材・鮭といくらをふんだんに使って、豪華に仕上げます。<br>
あらかじめ熱湯をかけておいた鮭と、にんじんやしいたけなどの具材をだしで煮ます。やわらかくなったら醤油、酒、塩で味を調え、焼いた角餅を盛った器に、具と汁を注ぎ入れます。'),

//（小見出し）
array ('ttl_m','mb1','四国・香川風'),
array ('textimg','16','left','四国・香川風','mb2','白味噌の汁に、あんこ入りのお餅が入った甘いお雑煮です。<br>
輪切りにしただいこんとにんじんをだしで煮ます。火が通ったら白味噌を溶き入れ、あん餅を加えましょう。餅がやわらかくなったら器に注ぎ入れ、お好みで青のりをかけてどうぞ。'),

//（小見出し）
array ('ttl_m','mb1','東海・名古屋風'),
array ('textimg','17','right','東海・名古屋風','mb0','「もち菜」という青菜がメインのシンプルなお雑煮です。ここでは、手に入りやすい小松菜を使います。<br>
小松菜は塩ゆでして、5cmの長さに切っておきます。だしを火にかけ、醤油、酒、塩で味を調えたら、ゆでた角餅と小松菜を盛った器に注ぎ入れます。仕上げに削り節をのせてできあがりです。彩りに紅白かまぼこを入れても◎。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','ジャーン！今年のお正月は、去年と違って関西風のお雑煮にしてみたよ♪'),

//マサキ　通常
array ('papa','01','わあ〜、初めて食べたけど、白味噌の上品な味わいが新鮮だね！'),

//コウちゃん　喜ぶ
array ('ko','03','おもちがまんまる♪'),

//フラッキー　褒める
array ('fl','03','関東風と関西風を日替わりで作れば、飽きずにお雑煮を楽しめるぞ！<br>さらに各地域の作り方を真似すれば、一気にレパートリーが増えるぜ♪'),

//ミエ　通常
array ('mama','01','バラエティ豊かなお雑煮で、今年のお正月はいっそう楽しく過ごせそう♪<br>
ありがとう、フラッキー！'),
);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15019'),
array ('recommend-recipe-id','15004'),
array ('recommend-recipe-id','15152'),
array ('recommend-recipe-end'),

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
