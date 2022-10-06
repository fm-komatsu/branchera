<?php
//base
include( "../../function.php" );
$content = get_id_data( '15099' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「冬瓜の食べ方」を動画とテキストで解説。夏から初秋にかけてが旬の野菜・冬瓜を、美味しく調理するための下ごしらえ方法をご紹介します。また、あんかけやスープなどのおすすめ冬瓜レシピもお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '99';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '3kJw5biJwpA';

//導入文
$introTxt = '第99回は、「冬瓜の下ごしらえの方法」です。夏野菜のひとつ、冬瓜の美味しい食べ方についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // ママ　通常
  array ('mama','01','はぁ〜、重かった！<br>スーパーで安かったから、初めて冬瓜を買ってきちゃった'),

  // コウちゃん　通常
  array ('ko','01','わあ～すいかみたい！<br>これ、どうやってたべるのー？'),

  // ママ　困る
  array ('mama','02','それが…お得だって言われてつい買っちゃったけど、実は食べ方をよく知らないのよね～<br>とりあえず、スイカみたいに切ってみようかな？'),

  // フラッキー　怒る
  array ('fl','02','こらこら！<br>冬瓜は幅広い料理に使える便利な野菜だけど、きちんと下ごしらえをすることが大事なんだぞ！'),

  // ママ　驚く
  array ('mama','03','そうなの？じゃあフラッキー、下ごしらえの方法をさっそく教えて！'),

  // フラッキー　通常
  array ('fl','01','おぉっと、やる気だな！そうこなくっちゃ！'),


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
array('ttl_l','mb0','冬瓜とは？冬瓜の基礎知識'),

//  （本文1）
array('text','mb3','冬瓜（とうがん）は「冬の瓜」と書きますが、実は夏野菜のひとつです。夏に収穫しても、冷暗所に置いておけば冬まで長持ちするので、この名前がついたといわれています。<br>
ほとんどが水分でできている実は、さっぱりとした味わいで夏にぴったり。淡白なので、多様な料理に使うことができます。特に煮込み料理とは相性がよく、やわらかくとろけるような食感を楽しめますよ。<br>
生のままいただくこともできますが、青臭さが気になることがあるので、料理に使う前には下ごしらえをするのがおすすめです。'),

// （大見出し2）
array('ttl_l','mb0','冬瓜の食べ方｜下ごしらえのコツ'),

// （本文2）
array('text','mb3','冬瓜は下ごしらえをすると、青臭さや苦味が抑えられ、料理の味が染みやすくなります。包丁を入れるときは、滑らないように気を付けて行いましょう。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ( 'mtr','冬瓜','1個'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','冬瓜は4等分してから、扱いやすい大きさ（4cm幅程度）に切ります。'),
array('step','02','mb3','料理や好みに合わせた厚さに皮をむきます。厚めにむく場合は、包丁で5〜7mm程度の厚さに。薄めにむく場合は、ピーラーで皮をむきましょう。<br>皮に近くかたい部分には、深さ2〜3mm程度の隠し包丁を格子状に入れてください。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','皮むきの厚さ'),
array('text','mb0','冬瓜の皮はかたいから、厚めにむいたほうが食べやすい。でも、透き通った緑色を生かす「翡翠（ひすい）煮」のような料理では、あえて皮を薄くむくんだ！この場合、皮に近い部分は食感がかたくて味も入りにくいから、隠し包丁を入れるといいぞ！こうすることで、きれいな緑色をキープしつつ、食べやすく作ることができるぜ。'),
array('chk-end'),

array('step','03','mb0','包丁で一口大に切ります。'),
array('step','04','mb0','種とワタの部分を取り除きましょう。<br>煮物に使う場合は、角を薄くそぐ「面取り」もしておくと、煮崩れを防げます。'),
array('step','05','mb0','鍋に水（分量外）を入れ、沸騰させます。沸騰したら切った冬瓜を入れて、中火で7〜10分ゆでましょう。'),
array('step','06','mb3','竹串がすっと通るくらいのやわらかさになったら、火から下ろします。<br>ざるにあげ、水気を切ったら下ごしらえ完了です。'),

// （大見出し3）
array('ttl_l','mb0','冬瓜の人気レシピ'),

// （本文2）
array('text','mb3','下ごしらえをした冬瓜を、いろいろなレシピで楽しんでみましょう！煮物をはじめとした、人気メニューの作り方をご紹介します。'),

// （小見出し）
array('ttl_m','','冬瓜のそぼろあんかけ'),
array('textimg','07','left','冬瓜のそぼろあんかけ','mb2','やさしい風味の鶏そぼろあんが、トロっとやわらかな冬瓜に絡む人気の一品です。<br>
鍋にだし汁、醤油、みりんを沸騰させます。そこに軽く炒めた鶏ひき肉と、下ごしらえした冬瓜を加えて弱火で煮込みます。冬瓜に味が染みたら、<a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">水溶き片栗粉</a>を入れてとろみを付けましょう。<br>
鶏そぼろのほか、<a href="'.$base_url.'/magazine/article/recipe-technic49.php" class="recipe-design__link">えび</a>やかにかまを使っても美味しく食べられます。夏は冷やしてからいただくのもおすすめです。
'),

// （小見出し）
array('ttl_m','','冬瓜とベーコンのスープ'),
array('textimg','08','right','冬瓜とベーコンのスープ','mb2','朝食にぴったりの簡単スープです。<br>まず、鍋に水とスープの素を煮立てます。そこに下ごしらえした冬瓜と、一口大に切ったベーコンを入れて煮込みましょう。最後に、塩とこしょうで味を調えたらできあがりです。お好みでパセリを散らしても。'),

// （小見出し）
array('ttl_m','','冬瓜と夏野菜のゼリー寄せ'),
array('free','mb3','<p class="mb0">見た目も涼しげな夏の一品。おもてなしにも最適です。<br>
鍋に水とスープの素を煮立て、水でふやかしておいた粉ゼラチンを入れて、ゼリー液を作ります。粗熱が取れたら、下ごしらえした冬瓜、ゆでてさやから外した<a href="'.$base_url.'/magazine/article/recipe-technic95.php" class="recipe-design__link">枝豆</a>、ゆでて薄切りにした<a href="'.$base_url.'/magazine/article/recipe-technic69.php" class="recipe-design__link">オクラ</a>を加え、型に流して冷蔵庫で冷やしましょう。<br>
ゼリー液をだし汁と塩で作れば、和風の味わいに。えびやささみを入れるとボリュームアップしますよ。</p>'),

// ■Plus1
array('plus-st'),
array('plus-ttl','mb0','冬瓜の皮でもう一品'),
array('text','mb0','お料理に使った冬瓜の皮も、捨てずに活用！ちょっと珍しい、「緑のきんぴら」を作ってみましょう。冬瓜の皮を細切りにして軽く炒め、同じく細切りにしたにんじんを加えて炒め合わせます。酒、醤油、みりんを加え、汁気が飛んだらできあがり。お好みで白すりごまを振ってどうぞ。'),
array ('plus-end'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　通常
array ('mama','01','お待たせ〜！冬瓜のそぼろあんかけと、スープを作ってみたよ♪'),

// パパ　通常
array ('papa','01','わあ、冷たいあんかけも夏にはいいね！つるっとしたのどごしで食べやすいよ'),

// コウちゃん　喜ぶ
array ('ko','03','つるつる～♪とろとろ〜♪'),

// フラッキー　　褒める
array ('fl','03','冬瓜は、包丁を入れる前なら冷暗所で長期保存できるのも便利だな！<br>皮をむいて切った後使い切れなかった分は、冷凍保存するのがおすすめだぞ！'),

// ママ　通常
array ('mama','01','ありがとう、フラッキー！<br>今年の夏はいろいろな冬瓜レシピにチャレンジしてみようっと！'),
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
