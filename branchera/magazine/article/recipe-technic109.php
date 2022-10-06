<?php
//base
include( "../../function.php" );
$content = get_id_data( '15109' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「れんこんの下ごしらえ&保存方法」を動画とテキストで解説。れんこんを美味しく食べるための正しい下ごしらえの方法や、料理に合わせたおすすめの切り方、保存方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '109';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'gBTkWXKG3Xc';

//導入文
$introTxt = '第109回は、「れんこんの下ごしらえ」方法です。あく抜きの仕方や、保存方法についてもご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ママ　通常
array ( 'mama','01','大きくて立派なれんこんを買ってきちゃった！'),

// コウちゃん　通常
array ( 'ko','01','まま、なにつくるの〜？'),

// ママ　通常
array ( 'mama','01','きんぴらを作るよ♪今のうちに下ごしらえしようっと！<br>とりあえず皮をむいて…切り方は適当でいいかな。このまま置いておこう〜'),

// フラッキー　通常
array ( 'fl','01','ミエ！れんこんを切ってそのまま放置すると変色するぞ～'),

// ママ　驚く
array ( 'mama','03','えええっ？そうなの？'),

// フラッキー　通常
array ( 'fl','01','それに、れんこんは切り方によっても食感が変わるんだぞ！<br>適当に切るんじゃなく、料理に合わせて切り方を変えるのが大事なんだぜ！'),

// ママ　困り顔
array ( 'mama','02','そうだったのね…！フラッキー、れんこんを美味しく食べるための下ごしらえ方法を教えて！'),

// フラッキー　通常
array ( 'fl','01','よし、俺に任せとけ！')

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
array ('ttl_l','mb0','れんこんの下ごしらえ方法'),

// （本文1）
array ('text','mb2','秋から冬が旬のれんこん。寒い季節、「温かい煮物にして食べる」という方も多いのではないでしょうか。輪切りにすると丸い穴が並び、向こう側がよく見えることから「先行きの見通しがよい」と縁起を担がれている食材でもあります。<a href="'.$base_url.'/magazine/article/recipe14.php" class="recipe-design__link">おせち料理</a>には欠かせませんよね。今回は、そんなれんこんの下ごしらえ方法をご紹介します。'),


// （小見出し）
array ('ttl_m','mb0','手順'),

array ('step','01','mb0','れんこんはよく洗って汚れを落としておきます。 根元の部分を切り落としましょう。'),
array ('step','02','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic23.php" class="recipe-design__link">ピーラー</a>でれんこんの皮をむきます。'),
array ('step','03','mb3','好みの切り方でれんこんを切ります。'),

// Plus1
array ('plus-st'),
array('plus-ttl','mb0','れんこんの切り方で食感が変わる！'),
array ('text','mb0','れんこんは、切り方によって食感が変わるので、好みや料理に合わせて切り方を変えましょう。ほくほくした食感を残したいときは、厚めの<a href="'.$base_url.'/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>や<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>に。シャキシャキと軽い食感にしたいときは、薄めの輪切りにします。歯ごたえがある食感にしたいときは、繊維に沿って縦切りにしましょう。<br>煮物にする際は、面の数が増えることで表面積が広がる、<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>がおすすめです。味が染み込みやすくなりますよ。'),
array ('plus-end'),

array ('step','04','mb3','ボウルにれんこんと浸る程度の水を入れ、約10分置きます。水に浸すことで、れんこんの断面が変色するのを防ぐことができます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb0','水に浸すのはアク抜きではなく、変色を防ぐため！'),
array ('text','mb0','水に食材を浸ける作業を「<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク抜き</a>」として行なう場合が多いが、れんこんにいわゆるアク（苦味やえぐ味）はない。水に浸けるのは、あくまで変色を防ぐためだと覚えておこう！ちなみに、れんこんが変色するのは、断面が空気にさらされて、ポリフェノールが酸化してしまうことが原因だぜ！'),
array ('chk-end'),

// ■Check
array ('chk-st'),
array ('ttl4','mb0','水と酢水、どちらに浸せばよいの？'),
array ('text','mb2','れんこんの変色防止には、水に浸す方法と、酢水に浸ける方法がある！水と酢水、どちらに浸すかによって、れんこんの食感や色味が変わるんだ。好みや用途に合わせて使い分けるといいぞ！'),
array ('text','mb0','水に浸けると、ほっくりしたやわらかな食感になる。煮物のときは、水でアク抜きするのがおすすめだぜ。酢水に浸けると、でんぷん質の働きが止まって、シャキシャキした食感になる！そして、水を使うよりも白くなるのが大きな特徴だ。サラダやちらし寿司のトッピングなど、白さを際立たせたい料理に適しているぞ！'),
array ('chk-end'),

array ('step','05','mb3','水気を切ったら下ごしらえ完了です。'),

// （大見出し2）
array ('ttl_l','mb0','れんこんの保存方法'),

// （本文2）
array ('text','mb2','れんこんの美味しさを保つには、正しい手順で保存することが大切です。切る前の状態とカットした状態、それぞれの保存方法をご紹介します。'),

// （小見出し）
array('ttl_m','','切る前の状態で保存する場合'),
array ('text','mb2','切る前のれんこんは、常温で保存できます。軽く濡らしたキッチンペーパーに包み、ビニール袋に入れて風通しのよい場所で保存しましょう。ただし夏場の場合は、冷蔵庫に入れてください。<br>保存期間の目安は、約2週間です。'),

// （小見出し）
array('ttl_m','','カットした状態で冷凍保存する場合'),
array ('text','mb2','冷凍保存すると、カットした状態でも長持ちさせることができます。<br>まず、れんこんは手順通りに下ごしらえしてください。水に浸した後、キッチンペーパーで水気を拭き取ります。ファスナー付き保存袋に入れて、冷凍庫に入れましょう。使用するときは、冷凍のまま加熱します。<br>保存期間の目安は、約1ヵ月です。'),

// （小見出し）
array('ttl_m','','カットした状態で冷蔵保存する場合'),
array ('text','mb3','数日の間に使い切る場合は、冷蔵庫で保存するとよいでしょう。<br>れんこんは手順通りに下ごしらえして、保存容器に入れます。そこに被るくらいの水を入れ、蓋をして冷蔵庫で保存します。水は毎日変えましょう。<br>保存期間の目安は、約3日間です。'),


// （大見出し3）
array('ttl_l','mb0','れんこんを使った人気レシピ'),

// （本文3）
array('text','mb2','炒めても、煮込んでも美味しいれんこん。いくつかレシピを覚えておけば、「もう一品欲しい！」というときにも役立ちますよ。れんこんを使った人気レシピをご紹介します。'),

// （小見出し）
array('ttl_m','','れんこんのきんぴら'),
array('textimg','06','right','れんこんのきんぴら','mb2','細いれんこんなら輪切りに、太いれんこんなら半月切りにします。シャキシャキした食感にする場合は2〜3mm幅程度、食べ応えがある食感にしたい場合は5〜6mm幅程度に切るとよいでしょう。水に浸けて水気を拭いた後、ごま油で炒めてください。醤油、砂糖、酒で味付けします。赤唐辛子を最後に入れると、ピリッとした味わいに！'),

// （小見出し）
array('ttl_m','','筑前煮'),
array('textimg','07','left','筑前煮','mb2','サラダ油を引いた鍋で、鶏もも肉を炒めます。鶏もも肉の色が変わったら、一口大に切ったれんこん、里芋、ごぼう、にんじん、しいたけ、こんにゃくを加えて炒めましょう。そこに酒、砂糖、醤油、みりん、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>を加えて煮ます。アクを取って落とし蓋をし、15~20分経てば完成です。'),

array('ttl_m','','れんこんのサラダ'),
array('textimg','08','right','れんこんのサラダ','mb2','れんこんを薄切りにし、塩ゆでしておきます。ボウルにマヨネーズとマスタードを入れて混ぜ、そこへれんこんと小さく切ったハムを入れて混ぜ合わせてください。仕上げに塩こしょうを適量振ったら、できあがり。スライスしたきゅうりを入れるのもおすすめです。'),

array('ttl_m','','れんこんのフライ'),
array('textimg','09','left','れんこんのフライ','mb0','れんこんを1cm程度の厚さの輪切りにします。水に浸けた後水気を拭き取ったら、塩、こしょうを振ってください。小麦粉、溶き卵、パン粉の順に衣を付け、熱した油で揚げましょう。きつね色になったらできあがりです。からしとウスターソースを付けて召し上がれ！串揚げにしても美味しいですよ。'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　笑顔
array ( 'mama','01','れんこんのきんぴら、無事完成〜！どうぞ召し上がれ！'),

// コウちゃん　笑顔
array ( 'ko','03','しゃきしゃき！おいしい〜！'),

// パパ　笑顔
array ( 'papa','01','薄切りにしたれんこんも美味しいね！おかわりしちゃおうっと♪'),

// フラッキー　通常
array ( 'fl','01','下ごしらえしたれんこんを冷凍保存しておけば、ササッと一品作りたいときに重宝するぞ！'),

// ママ　笑顔
array ( 'mama','01','それは便利ね！残ったれんこんで、次はほかのレシピにも挑戦してみよう〜！'),


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
