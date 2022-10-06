<?php
//base
include( "../../function.php" );
$content = get_id_data( '15110' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「チャーシューの作り方」を動画とテキストで解説。フライパンを使った簡単&時短チャーシューレシピをご紹介します。また、チャーシューを使ったアレンジレシピも合わせてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '110';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'GxnS6KoWZu0';

//導入文
$introTxt = '第110回は、「フライパンを使ったチャーシューの作り方」です。おつまみやおかずに大活躍のチャーシューを、フライパンひとつで作るレシピをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// マサキ　通常
array ('papa','01','はあ〜、この間入ったラーメン屋さん美味しかったなあ…<br>
なんといってもチャーシューが最高！あれだけでもおかわりしたいくらいだ'),

// コウちゃん　通常
array ('ko','01','こうちゃんも、ちゃーしゅーだいすき♪'),

// マサキ　困る
array ('papa','02','いつでも食べられるように、家でチャーシュー作りにチャレンジ！…してみたいけど、<br class="u-only__pc">
やっぱり漬け込みに時間をかけたり、オーブンでじっくり焼いたりしないといけないのかな？'),

// フラッキー　通常
array ('fl','01','おっと、その心配はご無用だぜ！<br>
実は、フライパンひとつで簡単にチャーシューが作れるんだ！簡単で時短なのに仕上がりは絶品だぞ'),

// マサキ　驚く
array ('papa','03','フラッキー！本当にフライパンだけでチャーシューを作れるの？<br>
その作り方、ぜひ教えて！'),

// フラッキー　褒める
array ('fl','03','オッケー♪じゃあ、さっそく始めるぞ！'),
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
array ('ttl_l','mb0','フライパンを使ったチャーシューの作り方'),

// （本文1）
array ('text','mb2','やわらかくとろける豚肉の食感と、甘辛い風味がたまらないチャーシュー。手間も時間もかかりそうなこの一品を、フライパンひとつで美味しく仕上げる作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb0','材料'),
array ('mtr-st'),
array ('mtr','豚肩ロース（ブロック）','400g'),
array ('mtr','塩','小さじ1/2'),
array ('mtr','しょうが','1かけ'),
array ('mtr','にんにく','2かけ'),
array ('mtr','サラダ油','適量'),
array ('mtr','醤油','大さじ2'),
array ('mtr','酒','大さじ2'),
array ('mtr','みりん','大さじ2'),
array ('mtr','砂糖','大さじ1'),
array ('mtr','白髪ねぎや香菜','適量'),
array ('mtr-end'),
// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb0','あらかじめ豚肉は常温に戻しておきます。<br>
豚肉の表面にまんべんなくフォークを刺し、穴を開けます。'),

array('step','02','mb0','全体に塩を揉み込み、10分程度置いたら水気をキッチンペーパーで拭き取ります。'),

array('step','03','mb0','生姜はよく洗い、皮付きのまま薄切りにします。<br>
にんにくは皮をむき、包丁の腹でつぶします。'),

array('step','04','mb0','フライパンにサラダ油を入れて中火で熱します。<br>
豚肉を入れ、全面にこんがりと焼き目を付けてください。'),

array('step','05','mb3','生姜、にんにくを加えて蓋をし、弱火で20分加熱します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','肉全体に火を通すには？'),
array ('free','mb0','途中で2〜3回、蓋を開けて豚肉をひっくり返そう。豚肉全体に火が通りやすくなるぜ！'),
array ('chk-end'),

array('step','06','mb0','火を止め、生姜とにんにくを取り出したら、余分な油をキッチンペーパーで拭き取ります。そこへ醤油・酒・みりん・砂糖を入れ、弱めの中火にかけましょう。<br>
豚肉を返しながら、5分程度煮絡めてください。'),

array('step','07','mb0','火から下ろして粗熱が取れたら、豚肉を薄く切ります。切ったときに薄いピンク色の肉汁が出るようなら火が通っています。真っ赤な血が流れてくる場合は、アルミホイルに包んでしばらく置き、余熱で火を通してください。'),

array('step','08','mb3','皿に盛って、お好みで<a href="'.$base_url.'/magazine/article/recipe-technic36.php" class="recipe-design__link">白髪ねぎ</a>や香菜を添えたらできあがりです。'),

// ■Plus1
array ('plus-st'),
array ('plus-ttl','mb','肉の部位の選び方'),
array ('free','mb0','<p>チャーシューは、使う肉の部位によって違った味わいが楽しめます。</p>
<ul class="u-list__ul_dot">
<li>肩ロース…ほどよく脂がのっていて、コクがある</li>
<li>バラ…肩ロースよりも脂身が多く、濃厚でこってりした味わい</li>
<li>モモ…脂身が少なめで赤身が中心。あっさりしてヘルシー</li>
</ul>
<p>ほか、豚バラの薄切りやお手頃な鶏むね肉を使ったアレンジもおすすめです。いろいろな種類の肉を試して、自分好みの味を作ってみてくださいね。</p>'),
array ('plus-end'),

// （大見出し2）
array ('ttl_l','mb','作り置きで大活躍！チャーシュー活用レシピ'),

// （本文2）
array ('text','mb2','そのまま食べても美味しいチャーシューは、幅広いアレンジが可能！多めに作っておけば、いろいろなメニューに活用できます。人気の簡単レシピをご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb','チャーシュー丼'),
array ('textimg','09','left','alt','mb','薄く切ったチャーシューを温かいご飯の上にのせ、市販の焼き肉のタレで味付け。最後に、刻んだ青ねぎ（長ねぎでも可）を散らします。お腹がペコペコのときにもすぐ作れる、ボリューム満点の一品です。お好みで煮卵を添えても◎。'),

// （小見出し）
array ('ttl_m','mb','中華風サラダ'),
array ('text','mb2','細切りにしたチャーシューを<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>のきゅうりと一緒に、ごま油ベースのドレッシングであえます。細切りにした薄焼き卵を入れるとボリュームアップ。'),

// （小見出し）
array ('ttl_m','mb','チャーハン'),
array ('textimg','10','right','alt','mb2','いつもの<a href="'.$base_url.'/magazine/article/recipe-technic86.php" class="recipe-design__link">チャーハン</a>に、角切りにしたチャーシューをたっぷり入れて。甘辛い味が、香ばしい醤油風味のご飯によく合います。'),

// （小見出し）
array ('ttl_m','mb','ねぎとチャーシューのスープ'),
array ('text','mb2','鶏ガラスープに、細切りにしたチャーシューと長ねぎを入れてひと煮立ちさせます。最後に、ごま油を適量たらして風味を付けたらできあがり。長ねぎ以外でも、キャベツやニラ、にんじんなど、お好みの野菜を入れて作ってみてくださいね。
'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','ジャ〜ン、自家製のチャーシューができあがったよ！'),

//ミエ　驚く
array ('mama','03','わあ、まるでお店のチャーシューみたい！すごく美味しそうな焼き色〜<br>
これがフライパンで作れるなんてびっくり！'),

//コウちゃん　喜ぶ
array ('ko','03','とろとろ〜やわらか〜い♪'),

//フラッキー　褒める
array ('fl','03','週末に作り置きしておけば、いろいろなメニューに活用できるぞ！<br>
お弁当のおかずにも大活躍だぜ♪'),

//マサキ　通常
array ('papa','01','そうだね！我が家の定番おかずが増えたよ。フラッキー、ありがとう〜♪'),

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
