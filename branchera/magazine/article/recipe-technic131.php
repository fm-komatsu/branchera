<?php
//base
include( "../../function.php" );
$content = get_id_data( '15131' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「さいの目切りの方法」を動画とテキストで解説。食材を食べやすいサイコロ形にする切り方と、野菜スープや味噌汁など、さいの目切りにした食材で作る人気レシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '131';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'l1wMQeqrS1I';

//導入文
$introTxt = '第131回は、「さいの目の切り方」です。さまざまな野菜を、さいの目（サイコロ形）に切る方法をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','にんじん、じゃがいも、玉ねぎ、大根…<br>野菜がたくさんあるから、今日は野菜スープを作ってみよう！<br>でも、野菜はどう切ればいいんだろう？'),

//フラッキー　通常
array ('fl','01','マサキ！野菜スープにするなら、「さいの目切り」をおすすめするぜ！'),

//マサキ　困る
array ('papa','02','さいの目？どんな切り方なの？'),

//フラッキー　通常
array ('fl','01','野菜をサイコロのような形に切る方法だ！'),

//マサキ　困る
array ('papa','02','サイコロかあ、なんだかきれいに仕上がりそう！<br>だけど、不器用な僕でもちゃんと切れるんだろうか…？'),

//フラッキー　通常
array ('fl','01','大丈夫！俺がしっかりコツを教えてやるぜ！'),


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
array ('ttl_l','mb0','さいの目切りの方法'),

// （本文1）
array ('text','mb2','さいの目切りは、サイコロのような小さな立方体にする切り方。「角切り」の一種ですが、さいの目切りは一般的な角切りより、小さめのサイズになるのが特徴です。1cm幅の<a href="'.$base_url.'/magazine/article/recipe-technic91.php" class="recipe-design__link">拍子木切り</a>にした後、端から1cm幅に切っていきます。火が通りやすいので、煮込み料理に適している切り方です。また、小さく食べやすいので、サラダにもよく使われます。
さっそく、野菜の種類別のさいの目切りの方法をご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb1','にんじんの場合'),
array('step','01','mb0','長さ4～5cmに切って、皮をむいておきます。'),
array('step','02','mb0','縦にして、端から幅1cmの板状に切っていきます。'),
array('step','03','mb0','板状にしたにんじんを、縦に幅1cmに切ります。'),
array('step','04','mb0','数本まとめて横向きにして、端から幅1cmに切ります。'),
array('step','05','mb3','完了！大根もにんじんと同じ方法でさいの目切りにできます。'),

// （小見出し）
array ('ttl_m','mb1','きゅうりの場合'),
array('step','06','mb0','ヘタを切り落として、半分の長さに切ります。'),
array('step','07','mb0','縦にして幅1cmに切ります。'),
array('step','08','mb0','断面を下にして置き、端から縦に幅1cmに切ります。'),
array('step','09','mb0','数本まとめて横向きにして、端から幅1cmに切ります。'),
array('step','10','mb3','完了！'),

// （小見出し）
array ('ttl_m','mb1','豆腐の場合'),
array ('text','mb2','野菜だけでなく、豆腐もさいの目切りにする機会が多い食材です。味噌汁の具材にするときは、さいの目切りにします。'),
array ('textimg','11','left','豆腐の場合','mb3','まず豆腐を手のひらにのせて、高さ1cmになるように、手のひらと平行に包丁を入れます。次に、端から幅1〜1.5cm程度の棒状に切ってください。最後に縦のラインと垂直になるように、横向きに幅1〜1.5cm程度に切れば完了です。'),


// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','さいの目切りが適している、ほかの食材と料理は？'),
array('text','mb0','さいの目切りが適している食材や料理には、ご紹介した以外にもさまざまなものがあります。たとえばトマト、ハム、チーズなどは、さいの目切りにしてサラダに使うのに適しています。玉ねぎ、じゃがいも、里芋、はんぺんなどは、さいの目切りにして汁物に入れるのがおすすめです。<br>
ほか、長芋やたけのこを和え物に使いたいとき、<a href="'.$base_url.'/magazine/article/recipe-technic110.php" class="recipe-design__link">チャーシュー</a>を<a href="'.$base_url.'/magazine/article/recipe-technic86.php" class="recipe-design__link">チャーハン</a>に入れたいときなど、さいの目切りはさまざまな場面で役立ちますよ。'),
array ('plus-end'),

// （大見出し2）
array ('ttl_l','mb1','さいの目切りにした食材で作る人気レシピ'),
array ('text','mb2','さいの目切りにした食材で作る人気メニューをご紹介します。食べやすく、見た目もきれいに仕上がるのでぜひお試しください。'),

//（小見出し）
array ('ttl_m','mb1','ミネストローネ'),
array ('textimg','12','right','ミネストローネ','mb2','じゃがいも、にんじん、玉ねぎ、キャベツを1cmのさいの目切りにします。鍋にオリーブオイルとにんにくを入れ、香りが出てきたら野菜を入れてよく炒めてください。野菜がしんなりしてきたら、ホールトマトを入れ、潰します。水とコンソメを加えて、弱火でじっくり煮込めば完成です。また、具材にセロリ、マッシュルーム、ズッキーニ、パプリカなどを加えると、彩りがよりよくなります。'),

//（小見出し）
array ('ttl_m','mb1','コロコロサラダ'),
array ('textimg','13','left','コロコロサラダ','mb0','きゅうり、トマト、ロースハム、プロセスチーズをさいの目切りにします。レタスをちぎり、全ての具材をボウルに入れて合わせましょう。お好みのドレッシングをかけ、よく混ぜ合わせたらできあがり。コーンをトッピングするのもおすすめです。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','上手に切れたぞ～！'),

//ミエ　驚く
array ('mama','03','わー、野菜の形がきれいに揃ってる！'),

//フラッキー　通常
array ('fl','01','形が小さいから、野菜に火が通りやすいぜ！'),

//コウちゃん　通常
array ('ko','01','ぱぱ〜！やさいすーぷ、はやくつくって～'),

//マサキ　通常
array ('papa','01','とびきり美味しい野菜スープ、すぐ作るから待っててね！'),

//フラッキー　通常
array ('fl','01','いろんな野菜をさいの目にカットして、冷凍しておくと便利だぞ！<br>
時短で野菜スープが作れるぜ〜！'),

//マサキ　通常
array ('papa','01','それ、便利だね！今度やってみようっと♪'),


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
