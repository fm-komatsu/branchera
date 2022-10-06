<?php
//base
include( "../../function.php" );
$content = get_id_data( '15156' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「メレンゲの作り方」を動画とテキストで解説。ハンドミキサーでも手動の泡立て器でも、卵白がしっかり泡立つコツをご紹介！さらに、メレンゲを活用したお菓子やお料理のレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '156';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'hC7obHUwnDs';

//導入文
$introTxt = '第156回は、「メレンゲの作り方」です。お菓子作りに欠かせないメレンゲの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　困る
array ('mama','02','フラッキー、聞いて～！<br>
今年の<a href="'.$base_url.'/magazine/article/recipe-technic119.php" class="recipe-design__link">バレンタインデー</a>は手作りの<a href="'.$base_url.'/magazine/article/recipe-collect04.php" class="recipe-design__link">スイーツ</a>を友達と交換することになったんだけど、
何を作ったらいいかな？'),

//フラッキー　通常
array ('fl','01','シフォンケーキなんてどうだ？'),

//ミエ　困る
array ('mama','02','お菓子作りの初心者にとって、あんなふわふわな<a href="'.$base_url.'/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>を作るなんて無理！
ハードル、高すぎる～'),

//フラッキー　通常
array ('fl','01','心配ご無用！メレンゲさえ上手に作れたら、簡単にシフォンケーキができちゃうぜ！'),

//ミエ　通常
array ('mama','01','えっ、そうなの？<br>じゃ、やってみようかな<br>フラッキー、メレンゲの作り方を教えてね！'),

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
array ('ttl_l','mb0','メレンゲの作り方'),

// （本文1）
array ('text','mb2','メレンゲとは「<a href="'.$base_url.'/magazine/article/recipe-technic08.php#separate-eggs" class="recipe-design__link">卵白</a>を泡立てたもの」「泡立てた卵白に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加えたもの」のこと。ふわふわした食感を出すお菓子作りには、なくてはならない存在です。たとえば、シフォンケーキやスフレなどの生地を膨らませたり、ムースやマシュマロに空気を含ませたりするために用いられます。<br>
メレンゲは、ハンドミキサーか泡立て器を使って作ります。使用する道具によって分量と作り方が異なるため、それぞれの作り方をご紹介しましょう。'),
array ('text','mb2','また、ご紹介するレシピは、そのまま焼いてメレンゲクッキーを作れるように砂糖が多めになっています。ケーキやスフレなどを作る際は、そのレシピに記載された砂糖の量でメレンゲを作ってくださいね。'),

// （小見出し）
array ('ttl_m','mb1','ハンドミキサーを使用する場合'),
array ('text','mb2','ハンドミキサーを用いると、泡立て器よりも簡単にメレンゲを作ることができます。ハンドミキサーで作ったメレンゲは、キメが整い、コシがあってしっかりしていることが特徴です。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','卵白','2個'),
array ('mtr','砂糖','80g'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','ボウルに卵白を入れ、冷やしておきます。'),

// ■Check
array ('chk-st'),
array ('free','mb0','コシのあるしっかりしたメレンゲを作るには、室温ではなく冷たい卵白を使うことがコツだぞ。ボウルに卵白を入れたら、冷蔵庫でよく冷やしておいてくれ！<br>
ボウルとハンドミキサーに水分や油分などの汚れがついていたら、しっかり拭き取っておくのも大切だぞ！水分や油分が混ざり込むと、卵白がしっかり泡立たないんだ。'),
array ('chk-end'),

array('step','02','mb0','全体が白っぽくなるまで低速で卵白を混ぜます。'),
array('step','03','mb3','ボウルに砂糖の<strong>1/3</strong>を加えます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','砂糖を3回に分けて入れる理由とは？'),
array ('free','mb0','砂糖には、できた泡を安定させる働きと、卵白の泡立ちを抑える働きがあるんだ。一気に砂糖を加えてしまうと、泡立ちを抑える力が働きすぎて、しっかり泡立たたない。だから、砂糖は3回に分けて入れるんだ。泡が安定して、ボリュームのあるメレンゲが作れるぜ。'),
array ('chk-end'),

array('step','04','mb0','泡のキメが細かくなるまで、高速で混ぜます。'),
array('step','05','mb0','ボウルに残りの砂糖の<strong>半分</strong>を加えます。'),
array('step','06','mb0','軽くツノが立つまで高速で混ぜます。'),
array('step','07','mb0','残りの砂糖を加えます。'),
array('step','08','mb2','ツノが立ち、つやが出るまで泡立てたら完成です。'),

// （小見出し）
array ('ttl_m','mb1','泡立て器を使用する場合'),
array ('text','mb2','手動の泡立て器で卵白2個分のメレンゲを作るのはかなり大変なので、卵白は1個にします。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','卵白','1個'),
array ('mtr','砂糖','40g'),
array ('mtr-end'),


// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','09','mb0','ボウルに卵白を入れ、冷やしておきます。'),
array('step','10','mb3','軽く筋が通るまで混ぜ合わせます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','塩を少量加えると泡立ちやすくなるぞ！'),
array ('free','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>にはタンパク質を固める性質があるから、ごく少量の塩を入れると泡が立ちやすくなるぞ！<br>とはいえ、泡立て器でたくさんのメレンゲを作りたい場合は、ハンドミキサーの使用をおすすめするぜ。'),
array ('chk-end'),

array('step','11','mb0','ボウルに砂糖の<strong>1/3</strong>を加えます。'),
array('step','12','mb3','軽くツノが立つまで泡立てます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ボウルを傾けて混ぜ合わせる！'),
array ('free','mb0','泡立て器を使うときは、ボウルを傾けて、泡立て器を前に軽く叩きつけるようにして混ぜていくとやりやすいぞ！'),
array ('chk-end'),

array('step','13','mb0','ボウルに残りの砂糖の<strong>半分</strong>を加えて、泡立てます。'),
array('step','14','mb0','残りの砂糖を加えて、泡立てます。'),
array('step','15','mb3','つやがある状態まで泡立てたら、完成です。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','卵白には泡立つ性質がある！'),
array ('text','mb0','卵白からキメの細かいメレンゲができるのは、卵白に含まれるタンパク質の性質によるものです。卵白には「たくさんの泡を作る性質」と「泡を持続させる力」、それから「空気に触れるとかたくなる性質」があります。<br>
卵白を撹拌して徐々に空気を混ぜ込んでいくと、最初は大きな粗い泡ができますが、次第に泡は細かくなり、空気に触れるに従って、つやのあるしっかりした泡に変わっていきます。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','人気のメレンゲアレンジレシピ'),

// （本文2）
array ('text','mb2','メレンゲを使ったお菓子や料理のレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','メレンゲクッキー'),
array ('textimg','16','right','メレンゲクッキー','mb2','メレンゲを焼くだけでできる手軽なクッキ－です。メレンゲを絞り袋に詰めます。クッキングシートを敷いた天板にメレンゲを好みの形に絞り出します。ちなみに、星型の口金を使い、中央から外に向けて2周絞るとバラの形になりますよ。<strong>100度</strong>に予熱したオーブンで<strong>1時間</strong>焼き、オーブンの熱が下がるまで、そのままにしておきます。十分冷めたら、取り出して召し上がれ！'),

//（小見出し）
array ('ttl_m','mb1','シフォンケーキ'),
array ('textimg','17','left','シフォンケーキ','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic71.php" class="recipe-design__link">スポンジケーキ</a>よりもふわふわで、軽めな食感が人気のシフォンケーキです。ボウルに卵黄と砂糖を入れて、泡立て器で混ぜます。サラダ油を加えて白っぽくなるまで混ぜ、牛乳を加えて再び混ぜます。次に薄力粉を入れて混ぜ合わせた後、メレンゲを3回に分けて混ぜて生地を作ります。生地を型に流し入れて、<strong>170度</strong>に予熱したオーブンで<strong>30分</strong>焼けば完成です！'),

//（小見出し）
array ('ttl_m','mb1','スフレパンケーキ'),
array ('textimg','18','right','スフレパンケーキ','mb2','ふんわりした食感が人気の<a href="'.$base_url.'/magazine/article/recipe-technic94.php" class="recipe-design__link">パンケーキ</a>です。薄力粉、ベーキングパウダーを最初に合わせてふるっておきます。ボウルに卵黄、牛乳、塩を入れて泡立て器で混ぜ、サラダ油を加えて混ぜ、さらに粉類を入れて混ぜ合わせます。メレンゲを3回に分けて生地にふんわりと混ぜていきます。フライパンに油をひき、生地を入れて焼きます。<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">ホイップクリーム</a>やお好みのフルーツ（<a href="'.$base_url.'/magazine/article/recipe-technic83.php" class="recipe-design__link">マンゴー</a>など）を添えればできあがり！'),

//（小見出し）
array ('ttl_m','mb1','スフレオムレツ'),
array ('textimg','19','left','スフレオムレツ','mb0','メレンゲを入れるだけで、いつもの<a href="'.$base_url.'/magazine/article/recipe-technic48.php" class="recipe-design__link">オムレツ</a>がふわふわに！卵黄を溶きほぐし、塩とこしょうを加えます。メレンゲ(砂糖ではなく、塩を加えて泡立てたもの)の<strong>1/3</strong>を加えて混ぜ合わせ、残りのメレンゲを加えたら、さっくりと混ぜ合わせます。フライパンにバターを入れて火にかけ、バターが溶けたら、流し込みます。淡いキツネ色になったら、半分に折り、器に盛ったらできあがりです。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','シフォンケーキの完成でーす！試食してみて～'),

//コウちゃん　喜ぶ
array ('ko','03','こうちゃん、これすき〜！ふわふわしてる'),

//マサキ　通常
array ('papa','01','わっ、美味しい！なんだかカフェにいるみたいで優雅な気分になるなぁ！'),

//フラッキー　通常
array ('fl','01','メレンゲは料理にも使えるぞ！<br>まずはスフレオムレツをおすすめするぜ'),

//ミエ　通常
array ('mama','01','作ってみようっと！<br>メレンゲだけでお菓子とお料理のレパートリーが広がるなんて、一石二鳥よね！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','14020'),
array ('recommend-recipe-id','15071'),
array ('recommend-recipe-id','14013'),
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
