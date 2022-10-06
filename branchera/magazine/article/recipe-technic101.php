<?php
//base
include( "../../function.php" );
$content = get_id_data( '15101' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「高野豆腐の戻し方」を動画とテキストで解説。高野豆腐は正しい方法で戻すことで、食感がよくなり、味が染み込みやすくなります。水やぬるま湯で戻す基本の方法や、電子レンジを使った時短方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '101';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'AACLQqqhn2Y';

//導入文
$introTxt = '第101回は、「高野豆腐の戻し方」です。独特の食感を生かす、上手な戻し方についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // ママ　通常
  array ('mama','01','ジャ〜ン、今日は高野豆腐を買っちゃった！職場の人に「栄養たっぷりでヘルシーだよ」って教えてもらったの♪'),

  // コウちゃん　通常
  array ('ko','01','おとうふなのに、かちかちだ〜！'),

  // ママ　通常
  array ('mama','01','でしょ〜。だけど、お水に入れるとふわふわになるんだよ！…そういえば、高野豆腐を戻すの初めてだ。何かコツとかがあるのかな…？'),

  // フラッキー　通常
  array ('fl','01','おいお〜い、オレの出番か〜？もちろん、高野豆腐を美味しく、味が染みやすく戻すにはコツがあるぜ！'),

  // ママ　驚く
  array ('mama','03','やっぱり！フラッキー、さっそく教えてくれない？'),

  // フラッキー　褒める
  array ('fl','03','よしきた、オレについてこい！'),


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
array('ttl_l','mb0','高野豆腐の戻し方'),

//  （本文1）
array('text','mb3','生の<a href="'.$base_url.'/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a>を冷凍し、乾燥させた高野豆腐は、日本古来の食材です。水またはぬるま湯で戻す基本の方法と、電子レンジを使って簡単に早く戻す方法をご紹介します。'),

// （小見出し）
array('ttl_m','','水、ぬるま湯で高野豆腐を戻す方法'),
array ('text','mb3','基本的に、高野豆腐は水かぬるま湯で戻します。水とぬるま湯のどちらを使うかは、メーカーの指示に従いましょう。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ('mtr','高野豆腐','適量'),
array ('mtr','水またはぬるま湯','適量'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','高野豆腐を、バットやボウルに重ならないように並べます。そこに水またはぬるま湯を、高野豆腐が軽く浮き上がる程度に注ぎ入れてください。'),
array('step','02','mb0','蓋やラップなどで高野豆腐が浮き上がるのを押さえながら、水を吸って2〜3倍程度の体積になるまで浸けておきます。<br>※浸ける時間は、高野豆腐のメーカーの指示に従ってください。'),
array('step','03','mb0','高野豆腐が水を吸ってやわらかくなったら、両手で挟んで水気を軽く絞りましょう。<br>白い濁り汁が出なくなるまで行ないます。'),
array('step','04','mb3','別のバットやボウルにきれいな水を張ります。濁り汁を絞りきった高野豆腐を、きれいな水に移し替えましょう。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','濁り汁はしっかり絞ろう！'),
array('text','mb0','濁り汁をしっかり絞っておくと、高野豆腐の乾物臭さを抑えられるんだ。<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">味付け</a>も染み込みやすくなるぞ！'),
array('chk-end'),

array('step','05','mb3','最後にもう一度水気をよく絞り、料理に適した大きさに切ったら完了です。'),

// （小見出し）
array('ttl_m','','電子レンジを使って高野豆腐を戻す方法'),
array ('text','mb3','「できるだけ短時間で戻したい」という場合は、電子レンジを使うと便利です。基本の方法で戻したときよりも、弾力がある仕上がりになります。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ('mtr','高野豆腐','適量'),
array ('mtr','水','適量'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','06','mb0','耐熱皿に高野豆腐を重ならないように並べます。そこに、ひたひたになる程度の水を注ぎ入れてください。'),
array('step','07','mb0','そのまま2〜3分置き、高野豆腐に水を吸わせます。'),
array('step','08','mb0','ぴったりとラップを張り、600Wに設定した電子レンジで1分程度加熱します。'),
array('step','09','mb3','粗熱が取れたら、バットやボウルに張ったきれいな水で軽く洗って完了です。'),

// ■Plus1
array('plus-st'),
array('plus-ttl','mb0','熱湯で戻して新食感！？'),
array('text','mb0','高野豆腐を戻すときの温度は、水かぬるま湯が基本です。ですが、あえて熱湯で戻して「プルプル食感」を楽しむ方法もあります。<br>手順は簡単！まず厚手の鍋で沸かした熱湯に高野豆腐を沈め、蓋をして4分程度放置します。ふっくらしたら、ざるにあげて水気を切るだけ。火傷に気を付けて行ないましょう。<br>いつもと違った食感で食べたくなったときに、試してみてくださいね。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','戻した高野豆腐で簡単レシピ！'),

// （本文2）
array('text','mb3','副菜からメインディッシュまで、高野豆腐を使った人気のレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','煮物'),
array('textimg','10','left','煮物','mb2','煮汁をたっぷり含んだ高野豆腐が美味しい、定番の一品です。<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、みりん、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加え、<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>にした<a href="'.$base_url.'/magazine/article/recipe-technic146.php" class="recipe-design__link">にんじん</a>と、戻して一口大に切った高野豆腐を合わせて煮込みます。器に盛り、ゆでた絹さやを彩りに添えればできあがり。'),

// （小見出し）
array('ttl_m','','炊き込みごはん','','/magazine/article/recipe-technic151.php'),
array('text','mb2','高野豆腐のかさ増し効果でヘルシー度アップ！<br>洗ってざるにあげた<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">米</a>を炊飯器に入れます。そこに分量の水と調味料（みりん、醤油、酒）、戻して細切りにした高野豆腐、刻んだにんじん、<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">しいたけ</a>を加えて炊きましょう。炊き上がったらさっくりと混ぜ、お好みで万能ねぎや刻み海苔を散らしましょう。'),

// （小見出し）
array('ttl_m','','味噌汁'),
array('text','mb2','いつもの豆腐のかわりに高野豆腐を使った<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>です。<br>鍋にだし汁を煮立て、戻して小さく切った高野豆腐と、長ねぎ、<a href="'.$base_url.'/magazine/article/recipe-technic135.php" class="recipe-design__link">わかめ</a>などのお好みの具材を入れます。ひと煮立ちしたら火を止めて、味噌を溶き入れましょう。最後に沸騰しない程度に温めたらできあがりです。'),

// （小見出し）
array('ttl_m','','ハンバーグ','','/magazine/article/recipe-technic112.php'),
array('text','mb0','高野豆腐を練り込むことで、ハンバーグがふっくらと仕上がります。<br>ひき肉に、戻して粗みじん切りにした高野豆腐、<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切りのたまねぎ</a>、溶き<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>、塩こしょうを加えてよく混ぜ、タネを作ります。形を整え、手のひらに打ち付けるようにして空気を抜いたら、油を引いたフライパンに並べて焼き上げましょう。'),


);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　通常
array ('mama','01','お待たせ〜！今夜は高野豆腐の煮物にしたよ！'),

// コウちゃん　喜ぶ
array ('ko','03','わあ〜！こうやどうふ、ふわふわになってる♪'),

// パパ　通常
array ('papa','01','ヘルシー食材だから、安心してたくさん食べられるのがうれしいよね！'),

// フラッキー　　褒める
array ('fl','03','ちなみに開封した高野豆腐は、酸化しやすいから早めに使うのがおすすめだぜ！<br>でも、未開封なら冷暗所で5〜6ヵ月は保存できるぞ！'),

// ママ　通常
array ('mama','01','栄養豊富なうえに、日持ちもするなんて助かる！これからは、もっと使いこなせるように頑張ろうっと♪'),
);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15080'),
array ('recommend-recipe-id','15158'),
array ('recommend-recipe-id','15039'),
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
