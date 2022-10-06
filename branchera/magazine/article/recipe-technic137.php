<?php
//base
include( "../../function.php" );
$content = get_id_data( '15137' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「大葉の保存方法」を動画とテキストで解説。大葉の鮮度が長持ちする保存方法と、大葉をアクセントに使った人気のレシピについてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '137';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'YTk0MQqlHGM';

//導入文
$introTxt = '第137回は、「大葉の保存方法」です。爽やかな風味が印象的な大葉を、鮮度を保ちながら長持ちさせる方法を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　困る
array ('mama','02','今日のご飯用に大葉を買ったけど、1パックに入っている量が多くて使い切れるかな～'),

//マサキ　通常
array ('papa','01','それならしばらく大葉を使った料理でいくしかないね'),

//フラッキー　通常
array ('fl','01','いやいや毎日大葉料理じゃなくても大丈夫だ！大葉は冷凍保存すれば約1ヵ月くらい持つんだぞ！'),

//ミエ　驚く
array ('mama','03','えっ？そんなに持つの？'),

//フラッキー　通常
array ('fl','01','そうさ、ちょっとのコツで、香りを落とさず保存できるぜ！'),

//ミエ　通常
array ('mama','01','知りたい！知りたい！フラッキー、教えて！'),

//フラッキー　通常
array ('fl','01','よし、任せとけ！'),

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
array ('ttl_l','mb0','大葉の冷凍保存方法'),

// （本文1）
array ('text','mb2','薬味や料理のアクセントとして活躍する大葉。大葉には水分が多く含まれているため、常温で保存するとすぐ乾燥して使い物にならなくなってしまいます。しかし冷凍保存すれば、最大で1ヵ月くらいもちますよ。大葉の鮮度を落とさずに、長持ちさせる保存方法をご紹介します。'),

array('step','01','mb0','大葉を洗って、キッチンペーパーで水分をしっかりと拭き取ります。'),
array('step','02','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>やみじん切りなど、使いやすい大きさに切ります。'),
array('step','03','mb3','切った葉をつぶさないようにして、保存容器やファスナー付き保存袋に入れ、冷凍室で保存します。<strong>保存期間の目安は、約1ヵ月</strong>です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ふんわり入れておくと、使う分だけ取り出しやすくなるぜ！'),
array ('free','mb0','切った大葉を保存容器やファスナー付き保存袋に入れるときには、ふんわりとした状態で入れておくことがポイントだ！ふんわり入れておけば葉っぱ同士が密着しづらいから、使う分だけ取り出しやすいぞ！'),
array ('chk-end'),

// （大見出し2）
array ('ttl_l','mb1','大葉の冷蔵保存方法'),
array ('text','mb2','2週間以内で使い切るときは、冷蔵保存が向いています。正しい冷蔵保存の方法をご紹介します。'),

array('step','04','mb0','大葉の<strong>茎の先端を1～2mmくらいカット</strong>します。'),
array('step','05','mb3','瓶またはコップに<strong>1～2mmくらいの量の水</strong>を入れ、大葉の茎を入れます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','水に浸けるのは茎だけ！'),
array ('free','mb0','大葉を水に浸けるときには、茎だけを浸すようにするんだ！葉の部分を水に浸けてしまうと痛みの原因になるからな！茎を切ったらすぐ水に浸けるか、水に浸けたまま切ってくれよな！'),
array ('chk-end'),

array('step','06','mb3','瓶またはコップに蓋をしたり、ラップをかけたりして、冷蔵庫の野菜室で冷蔵します。<br><strong>保存期間の目安は、約10日～2週間</strong>です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','容器の水は定期的に取り替える！'),
array ('free','mb0','瓶やコップに入れた水は、そのままにしていてはダメ！<strong>3～4日に1回程度は取り替える</strong>ようにするとより鮮度が保たれるぞ！'),
array ('chk-end'),

// （大見出し3）
array ('ttl_l','mb1','大葉を使ったレシピ'),
array ('text','mb2','薬味として添えられる大葉ですが、料理に使うのも大人気！大葉を使った人気レシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','大葉とベーコンのパスタ'),
array ('textimg','07','right','大葉とベーコンのパスタ','mb2','イタリアンが和風になる！大葉を使った<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>です。フライパンにオリーブオイルを入れ、食べやすい大きさに切ったベーコンと、えのきやしめじなどのきのこ類を炒めます。かためにゆでたパスタを入れてバターや醤油、塩、こしょうなどを加えて混ぜ、最後に大葉をのせたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','大葉と梅の豚肉巻き'),
array ('textimg','08','left','大葉と梅の豚肉巻き','mb0','相性抜群な大葉と梅を使った、おかずやおつまみに最適な料理です。スライスした豚肉の上に、種を取り除いてつぶした梅干しと、大葉、スライスチーズをのせ、豚肉を巻きます。巻き終わりを下にしてフライパンで焼き、全体に焼き目が付いたら完成です。'),


);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//フラッキー　通常
array ('fl','01','大葉の保存ができると、使いたい分だけ使えて便利だぜ！'),

//ミエ　通常
array ('mama','01','本当！これなら大葉が残っても少しずつ使っていけそう！ありがとう、フラッキー！'),

//マサキ　通常
array ('papa','01','大葉の話を聞いていたら、大葉のパスタが食べたくなったな'),

//コウちゃん　通常
array ('ko','01','こうちゃんも、ぱすたがたべたい～'),

//ミエ　通常
array ('mama','01','よ～し！じゃあ、今夜は大葉のパスタにしよう！'),

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
