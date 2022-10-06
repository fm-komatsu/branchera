<?php
//base
include( "../../function.php" );
$content = get_id_data( '15151' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「炊き込みごはんのレシピ」を動画とテキストで解説。鶏肉とたけのこを使った基本の炊き込みごはんの作り方を伝授！コーン、ひじき、あさり、ツナなどを使った人気のアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '151';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '29P40LbwBYw';

//導入文
$introTxt = '第151回は、「炊き込みごはんのレシピ」です。いろいろな具材で楽しむ人気の炊き込みごはんの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">白いごはん</a>も美味しいけど、たまには炊き込みごはんが食べたくなるな～'),

//ミエ　困る
array ('mama','02','炊き込みごはん、いいよね！<br>
でも、どんな具を用意したらいいか分からないし、味付けが難しそうだし…'),

//フラッキー　通常
array ('fl','01','ミエ、炊き込みごはんは簡単にできるんだぜ！'),

//ミエ　通常
array ('mama','01','えっ、そうなの？フラッキー、教えて～！'),

//フラッキー　通常
array ('fl','01','よし、俺がとびきり美味しい炊き込みごはんの作り方を教えてしんぜよう！'),

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
array ('ttl_l','mb0','炊き込みごはんの作り方'),

// （本文1）
array ('text','mb2','秋は<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>や栗、春は<a href="'.$base_url.'/magazine/article/recipe-technic77.php" class="recipe-design__link">たけのこ</a>や山菜など、四季折々の具材を米と一緒に炊き込む炊き込みごはん。栄養バランスがよいうえに、材料の風味がしみ込んで白いごはんと違った味わいを楽しめます。<br>
今回は、たけのこの炊き込みごはんの作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','米','2合'),
array ('mtr','鶏もも肉','小1/2枚(100g)'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">醤油</a>(下味用)','大さじ1/2'),
array ('mtr','みりん(下味用)','大さじ1/2'),
array ('mtr','干ししいたけ','2枚(約4g)'),
array ('mtr','水(干ししいたけ用)','100ml'),
array ('mtr','たけのこ(水煮)','100g'),
array ('mtr','にんじん','1/4本(50g)'),
array ('mtr','油揚げ','1/2枚'),
array ('mtr','醤油','大さじ2'),
array ('mtr','みりん','大さじ2'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','下準備：干ししいたけはさっと水で洗い、水100mlに入れて落としラップをして戻します。'),
array('step','02','mb0','米を研ぎ、ざるにあげて30分ほど置いておきます。'),
array('step','03','mb0','鶏肉は余分な脂を取り除き、2cm角に<a href="'.$base_url.'/magazine/article/recipe-technic01.php" class="recipe-design__link">切り</a>ます。ボウルに入れ、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">醤油</a><a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1/2、みりん大さじ1/2をまわし入れて軽くもみます。'),
array('step','04','mb0','干ししいたけは水気をしぼり、3mm幅に<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">切り</a>ます。戻し汁は使うので取っておきます。'),
array('step','05','mb0','たけのこは食べやすい大きさに切り、<a href="'.$base_url.'/magazine/article/recipe-technic23.php" class="recipe-design__link">にんじん</a>は<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にします。油揚げは半分に切ってから、細切りにします。'),
array('step','06','mb3','炊飯器の内釜に米を入れ、干ししいたけの戻し汁、醤油大さじ2、みりん大さじ2を加えます。炊飯器の2合の目盛りまで水を注ぎます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','炊飯器以外で炊く場合は戻し汁に水を加えて300mlに！'),
array ('free','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic29.php" class="recipe-design__link">土鍋</a>や圧力鍋など、水加減の目盛りが付いていないものを使って炊き込みごはんを作る場合は、米2合に対し、干ししいたけの戻し汁に水を足して300mlにするといいぞ！美味しい炊き込みごはんが作れるぜ♪'),
array ('chk-end'),

array('step','07','mb0','米と調味料をざっと混ぜたら、その上に干ししいたけ、たけのこ、にんじん、油揚げを広げて入れます。'),
array('step','08','mb0','鶏肉を下味ごと入れたら、炊飯します。'),
array('step','09','mb3','炊き上がったら、全体をさっくり混ぜてできあがりです！'),


//（小見出し）
array ('ttl_m','mb0','炊き込みごはんの保存方法'),

// （本文2）
array ('text','mb3','炊き込みごはんが余ったときには、炊き込みごはんが熱いうちに冷凍保存しましょう。ラップにのせて平たくなるように包み、粗熱が取れたら冷凍します。熱いうちにラップで包むと水分が残るため、レンジで解凍したときにふっくらとしたごはんになりますよ。<br>
保存期間は具材によって異なります。きのこや鶏肉を使った炊き込みごはんの保存は<strong>約3週間</strong>です。具材が<a href="'.$base_url.'/magazine/article/recipe-technic72.php" class="recipe-design__link">魚介類</a>の場合は、傷みやすいため、<strong>約1週間</strong>が目安です。'),

//（大見出し2）
array ('ttl_l','mb1','炊き込みごはんの人気アレンジレシピ'),

// （本文2）
array ('text','mb2','具材を変えるだけで、炊き込みごはんのバリエーションが広がります。人気の高い炊き込みごはんのアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','コーンの炊き込みごはん'),
array ('textimg','10','right','コーンの炊き込みごはん','mb2','甘みのある<a href="'.$base_url.'/magazine/article/recipe-technic96.php" class="recipe-design__link">コーン</a>をたっぷり使った炊き込みごはんです。コーンの水煮は汁気を切ります。研いだ米に白だし、酒、醤油と水を加え、コーンの水煮をのせて炊飯します。炊き上がったらバターを入れてさっくり混ぜましょう。器によそって完成です。'),

//（小見出し）
array ('ttl_m','mb1','あさりの深川風炊き込みごはん'),
array ('textimg','11','left','あさりの深川風炊き込みごはん','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic14.php" class="recipe-design__link">あさり</a>を入れた深川風の炊き込みごはんです。まず、あさりのむき身を洗い、ざるに上げて水気を切ります。鍋に水、醤油、砂糖、酒、だしを入れて煮立て、あさりと<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">千切りにした生姜</a>を入れてさっと煮ます。火を止め、具と煮汁に分けます。炊飯器に研いだ米と煮汁を入れて炊きます。炊き上がったら具を加えて10分ほど蒸らして、できあがり。'),

//（小見出し）
array ('ttl_m','mb1','ツナとひじきの炊き込みごはん'),
array ('textimg','12','right','ツナとひじきの炊き込みごはん','mb0','ツナ缶を使った炊き込みごはんです。缶詰のツナは油を切っておきます。ひじきは水で戻します。炊飯器に研いだ米、醤油、みりん、だし、水を加えます。ツナ、半分にカットしたえのきだけ、千切りにしたにんじん、ひじきをのせて炊きます。炊きあがったら、斜めに切ったさやいんげんを加えて10分ほど蒸らし、軽く混ぜて完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//フマサキ　通常
array ('papa','01','おお、立派な炊き込みごはんだ～♪'),

//ミエ　通常
array ('mama','01','意外と簡単にできちゃった！'),

//コウちゃん　喜ぶ
array ('ko','03','たきこみごはん、コウちゃん、だいすき～'),
 
//フラッキー　通常
array ('fl','01','<a href="'.$base_url.'/magazine/article/recipe-technic148.php" class="recipe-design__link">鮭</a>やほたて、まいたけを入れても美味しいぞ<br>
しかも、白だしやめんつゆでも作れるんだぜ！'),

//ミエ　通常
array ('mama','01','わっ、それは簡単！<br>
いろんな具材を使って炊き込みごはんのレパートリーを増やしていこうっと♪'),

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
