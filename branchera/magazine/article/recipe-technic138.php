<?php
//base
include( "../../function.php" );
$content = get_id_data( '15138' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「なめろうの作り方」を動画とテキストで解説。新鮮な魚を美味しく味わえるなめろうの作り方と、余っても安心のアレンジレシピについてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '138';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'nCI0U5X5TEU';

//導入文
$introTxt = '第138回は、「なめろうの作り方」です。なめろうの美味しい作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','お隣さんが釣ってきたあじをくれたよ！たたきにしようか？'),

//コウちゃん　通常
array ('ko','01','え～、おさかな、たたくの？'),

//フラッキー　通常
array ('fl','01','たたきは、包丁で魚をたたく料理のことさ！なめろうにすると美味しいぜ！'),

//ミエ　通常
array ('mama','01','あ～、なめろうもいいね！でも、どうやって作るの？'),

//フラッキー　通常
array ('fl','01','じゃあ、今日は美味しいなめろうの作り方を教えてやるぜ！'),

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
array ('ttl_l','mb0','「なめろう」とはどんな料理？'),

// （本文1）
array ('text','mb2','なめろうとは、<a href="'.$base_url.'/magazine/article/recipe-technic40.php" class="recipe-design__link">新鮮な生魚</a>と味噌、薬味を包丁でたたき、和える料理です。もともと漁師が船の上で作っていた料理で、たたいた魚の舌触りがなめらかなことから「なめろう」という名前が付いたといわれています。<br>
なめろうに使う魚は、主にあじやいわし、さんま、とびうお、さばなどの青魚です。そのほか、まぐろ、かつお、たちうお、さわらなどでもできますよ。'),

// （大見出し2）
array ('ttl_l','mb1','なめろうの作り方'),
array ('text','mb2','白いごはんにもお酒にも相性のいい、「あじのなめろう」の作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','しょうが','1かけ'),
array ('mtr','にんにく','1かけ'),
array ('mtr','ねぎ','1/2本'),
array ('mtr','あじ(三枚おろしにしたもの)','120g'),
array ('mtr','味噌','大さじ1/2'),
array ('mtr','醤油','小さじ1'),
array ('mtr','青じそ','2枚'),
array ('mtr-end'),

array('step','01','mb0','しょうが、にんにく、ねぎを<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。'),
array('step','02','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic41.php" class="recipe-design__link">三枚おろしにしたあじ</a>を細切りにしてから、粗みじん切りにします。'),
array('step','03','mb0','包丁で細かくなるまでたたきます。'),
array('step','04','mb0','よくたたいたあじの上に、味噌、醤油、しょうが、にんにく、ねぎをのせ、味がなじむようにたたきます。'),
array('step','05','mb3','ときどき全体を混ぜ合わせながら、なめらかになるまでしっかりたたきます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','2本の包丁でたたくと作業がラクに！'),
array ('free','mb0','粗みじん切りした後は、2本の包丁を使ってたたくと効率的に細かくできるぞ！'),
array ('chk-end'),

array('step','06','mb3','器に青じそを敷き、なめろうをのせて完成です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','鮮度を保つために魚とお皿は冷やしてから調理を！'),
array ('free','mb0','魚はたたいているうちに温度が上がってしまう。魚の鮮度を保つコツは、調理前に魚を冷蔵庫でしっかり冷やしておくことだ。器も冷蔵庫で冷やしておくと、食卓でも鮮度が保てるぜ！'),
array ('chk-end'),

// （大見出し3）
array ('ttl_l','mb1','人気のアレンジレシピ'),
array ('text','mb2','なめろうが残ってしまった場合、翌日は火を通したアレンジレシピで楽しむことができますよ。簡単にできる人気レシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','あじのさんが焼き'),
array ('textimg','07','right','あじのさんが焼き','mb2','さんが焼きとは、なめろうを焼いて作る南房総の郷土料理です。なめろうを小さく丸め、円盤形にします。フライパンに油を入れて熱し、円盤型のなめろうを弱火で焼きます。焼き色が付いたら、裏返し、両面が焼きあがったら完成です。お弁当のおかずにもおすすめですよ。'),

//（小見出し）
array ('ttl_m','mb1','あじのつみれ汁'),
array ('textimg','08','left','あじのつみれ汁','mb0','なめろうに豆腐と片栗粉を加えて、フードプロセッサーで混ぜ合わせます。お湯を沸かした鍋に、なめろうをスプーンですくって入れます。出汁を入れて味を調え、三つ葉をのせればできあがりです。お好みでにんじん、しいたけなどを入れても合いますよ。'),


);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','わぁ、このなめろう美味しいな'),

//ミエ　通常
array ('mama','01','あったかいごはんにのせても美味しい～♪'),

//コウちゃん　喜ぶ
array ('ko','03','わ～い、おいしいね～'),

//フラッキー　褒める
array ('fl','03','あじ以外の魚を使えば、また違った食感や味が楽しめるぜ！'),

//ミエ　通常
array ('mama','01','そうだ、今度はかつおで作ってみよう！'),

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
