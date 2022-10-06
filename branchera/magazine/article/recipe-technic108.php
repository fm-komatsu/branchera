<?php
//base
include( "../../function.php" );
$content = get_id_data( '15108' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「揚げない大学芋の作り方」を動画とテキストで解説。揚げずにヘルシーに仕上げる大学芋の作り方や、砂糖以外で甘味を付ける方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '108';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '1kP_Y83nPfo';

//導入文
$introTxt = '第108回は、「揚げない大学芋の作り方」です。揚げない、ヘルシーで美味しい大学芋の作り方についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ママ　通常
array ( 'mama','01','大学芋が食べたくて、さつまいもをたくさん買ってきちゃった♪'),

// パパ　通常
array ( 'papa','01','秋になるとやっぱり食べたくなるよね〜！'),

// ママ　困る
array ( 'mama','02','うん！ただ、大学芋って油で揚げてから蜜と絡めるのよね…<br>だから、カロリーが気になっちゃう～！'),

// フラッキー　通常
array ( 'fl','01','ミエ！大学芋は揚げなくても、いつものフライパンでヘルシーに作れるんだぞ！'),

// ママ　驚く
array ( 'mama','03','えっ！？フラッキー、お願い！揚げない大学芋の作り方を教えて～！'),

// フラッキー　通常
array ( 'fl','01','よし、きた！揚げずにできる、とびきり美味しい大学芋の作り方を教えてやるぜっ！')

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

// （大見出し1）
array ('ttl_l','mb0','揚げない大学芋の作り方'),

// （本文1）
array ('text','mb2','秋から冬にかけて旬を迎えるさつまいも。さつまいもの甘さが引き立つ大学芋は、子どもから大人まで、年齢を問わず愛される人気のおやつです。揚げずに簡単にできる、ヘルシーな大学芋の作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb0','材料'),
array ('mtr-st'),
array ('mtr','さつまいも','1本（250g）'),
array ('mtr','砂糖','大さじ2'),
array ('mtr','醤油','小さじ1'),
array ('mtr','黒いりごま','適量'),
array ('mtr','サラダ油','大さじ2'),
array ('mtr-end'),
// （小見出し）
array ('ttl_m','mb0','手順'),

array ('step','01','mb0','さつまいもはヘタを切り、小さめの<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>にします。'),
array ('step','02','mb0','切ったさつまいもを10分程度水にさらし、しっかりとキッチンペーパーで水気を拭き取ります。'),
array ('step','03','mb0','さつまいもをフライパンに入れます。そこにサラダ油を入れ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱してください。'),
array ('step','04','mb0','サラダ油が泡立ってきたら弱火にして、蓋をします。そのまま10分程度蒸し焼きにしましょう。'),
array ('step','05','mb0','蓋を開け、さつまいもに竹串を通して、火が通っているか確認します。竹串がスッと通るくらいまで火が通ったら、余分な油をキッチンペーパーで拭き取ります。'),
array ('step','06','mb0','中火にして砂糖と醤油を加え、さつまいもとよく絡めます。'),
array ('step','07','mb3','最後に黒いりごまを加えて、ざっと混ぜたら完成です。'),


// Plus1
array ('plus-st'),
array('plus-ttl','mb0','砂糖の代わりにはちみつやみりんを使ったレシピも！'),
array ('textimg','08','right','alt','mb2','大学芋の美味しさの決め手となる、甘い蜜。砂糖の代わりにはちみつを使うと、冷めても蜜が固まりにくくなります。砂糖の代わりにはちみつを使う場合も、分量の目安は大さじ2です。また、メープルシロップを使うと、すっきりした甘すぎない蜜になりますよ。'),
array ('text','mb0','ツヤっとした仕上がりにしたいときは、砂糖の代わりにみりんを使うのがおすすめです。<br>飴のように固まらずにツヤが出て、あっさりとした味になります。<br>砂糖の代わりに使用する場合、みりん1/2カップと醤油小さじ1を半量になるまで煮詰めてから、さつまいもと絡めましょう。さつまいもはフライパンで熱し、調味料だけ電子レンジで加熱して絡めてもOKです。ぜひ好みに合わせてアレンジしてくださいね。'),
array ('plus-end'),


);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// パパ　通常
array ( 'papa','01','おっ、美味しい！絶妙な甘じょっぱさがたまらないな〜！'),

// ママ　通常
array ( 'mama','01','はい、コウちゃんも召し上がれ！'),

// コウちゃん　喜ぶ
array ( 'ko','03','わーい！ほくほく～♪'),

// フラッキー　通常
array ( 'fl','01','ちなみに、さつまいもは食物繊維やビタミンCが豊富に含まれているんだぜ！'),

// パパ　通常
array ( 'papa','01','へえ〜！じゃあ、いっぱい食べても罪悪感が少ないね。もっと食べちゃおうっと♪'),

// コウちゃん　喜ぶ
array ( 'ko','03','こうちゃんもおかわり〜！'),

// ママ　通常
array ( 'mama','01','私も私も！'),

// フラッキー　通常
array ( 'fl','01','おいおい！ヘルシーでも食べ過ぎは禁物だぞ〜！'),


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
