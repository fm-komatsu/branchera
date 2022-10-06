<?php
//base
include( "../../function.php" );
$content = get_id_data( '15148' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「鮭のムニエルの作り方」を動画とテキストで解説。レモンバターソースで作る簡単レシピと、クリームソースやトマトソース、きのこソースなど人気のアレンジをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '148';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'mqEzcP_zFz8';

//導入文
$introTxt = '第148回は、「鮭のムニエルの作り方」です。焦げ付かず、美味しく仕上がる基本のレシピを動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','もうすっかり秋だね〜…秋といえば、脂がのった秋鮭！<br>
ねえねえ、夕飯のおかずは鮭にしない？'),

//フラッキー　通常
array ('fl','01','おっ、鮭か！それなら、ムニエルはどうだ？<br>
ソースでいろいろアレンジも楽しめるぞ'),

//マサキ　困る
array ('papa','02','わあ、美味しそうだね<br>
だけど、ムニエルってどうやって作るんだっけ…？'),

//フラッキー　通常
array ('fl','01','心配ご無用！<br>
魚のうまみを活かした、美味しいムニエルの作り方なら俺におまかせだぜ♪'),

//マサキ　通常
array ('papa','01','おおっ、頼もしい！<br>
それじゃあ、さっそく頼むよフラッキー！'),

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
array ('ttl_l','mb0','鮭のムニエルの作り方'),

// （本文1）
array ('text','mb2','ムニエルとはフレンチの調理法のひとつで、魚の切り身に下味を付け、小麦粉を薄くまぶして焼き上げることです。小麦粉をまぶすことによって、外側はサクッと、中はジューシーに仕上がるのが特長。蒸して火を通すホイル焼きや、直火で焼くグリルなどとは違った食感を楽しめます。<br>
ここでは、ムニエルの定番・<a href="'.$base_url.'/magazine/article/recipe21.php" class="recipe-design__link">鮭</a>を使った基本のレシピをご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','生鮭','2切れ'),
array ('mtr','塩','小さじ1/4'),
array ('mtr','小麦粉','大さじ1'),
array ('mtr','オリーブオイル','小さじ1'),
array ('mtr','バター','20g'),
array ('mtr','レモン汁','大さじ1/2'),
array ('mtr','塩','ひとつまみ'),
array ('mtr','パセリ（みじん切り）','大さじ1'),
array ('mtr','レモン（輪切り）','2枚'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','生鮭の両面に塩を振って<strong>10分</strong>ほど置きます。'),
array('step','02','mb0','鮭から出た余分な水分を、キッチンペーパーで拭き取ります。'),
array('step','03','mb0','鮭に小麦粉をまぶし、軽くはたいて薄く付くようにします。'),
array('step','04','mb0','フライパンにオリーブオイルを入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し、小麦粉を付けた鮭の皮目を下にして焼きます。<strong>3分</strong>焼いて、焼き色が付いたら裏返します。'),
array('step','05','mb0','油をキッチンペーパーで拭き取りながら、さらに<strong>2〜3分</strong>焼きます。'),
array('step','06','mb0','ほとんど焼けたところでバターを入れ、全体に絡めます。'),
array('step','07','mb0','火を止め、鮭を取り出したフライパンに、レモン汁、塩、パセリのみじん切りを加えて混ぜ、ソースを作ります。'),
array('step','08','mb3','鮭を器に盛り、<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">レモンの輪切り</a>をのせ、ソースをかけてできあがりです。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ムニエルにおすすめの魚'),
array('text','mb0','鮭以外にも、淡白でくせのない<a href="'.$base_url.'/magazine/article/recipe-technic140.php" class="recipe-design__link">白身魚</a>はムニエルによく合います。ひらめ、かれい、たら、すずき、めかじきなど、そのとき手に入りやすい旬の魚で作ってみてくださいね。'),
array ('plus-end'),

// （小見出し）
array ('ttl_m','mb0','ムニエルの保存方法'),

// （本文2）
array ('text','mb3','鮭のムニエルは多めに作って保存しておけば、<a href="'.$base_url.'/magazine/article/recipe-collect08.php" class="recipe-design__link">常備菜</a>や<a href="'.$base_url.'/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当のおかず</a>に活用できる便利なメニューです。<br>
保存の際は、ほかの食材の匂いが移らないようにラップに包むか密閉容器に入れます。冷蔵で<strong>翌日〜翌々日、冷凍で約1ヵ月</strong>が保存期間の目安です。
温め直す際はフライパンやトースターを使うと、表面がサクッとした食感に仕上がりますよ。'),


//（大見出し2）
array ('ttl_l','mb1','鮭のムニエルのアレンジレシピ'),

// （本文2）
array ('text','mb2','鮭のムニエルは、添えるソースを変えるとさまざまな美味しさを楽しめます。'),

//（小見出し）
array ('ttl_m','mb1','タルタルソース'),
array ('textimg','09','right','タルタルソース','mb2','フライによく添えられるタルタルソースは、鮭のムニエルとの相性も抜群です。<br>
フォークで粗くつぶした<a href="'.$base_url.'/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>と、<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にした玉ねぎ・<a href="'.$base_url.'/magazine/article/recipe-technic126.php" class="recipe-design__link">ピクルス</a>を、マヨネーズ・砂糖・塩こしょうで和えます。ムニエルにたっぷり添え、あればパセリのみじん切りを彩りとして加えましょう。'),

//（小見出し）
array ('ttl_m','mb1','トマトソース'),
array ('textimg','10','left','トマトソース','mb2','さわやかな酸味の<a href="'.$base_url.'/magazine/article/recipe-technic89.php" class="recipe-design__link">トマトソース</a>で、鮭のムニエルがさっぱりとした味わいに。<br>
鮭のムニエルを焼いて取り出した後のフライパンで、オリーブオイルとみじん切りにしたにんにくを炒めます。香りが出てきたら、みじん切りにした玉ねぎを加えます。しんなりしたら角切りにしたトマトを加え、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で煮込みましょう。塩こしょうで味をととのえて完成です。'),

//（小見出し）
array ('ttl_m','mb1','和風ソース'),
array ('textimg','11','right','和風ソース','mb2','バター風味のムニエルには、しょうゆベースの香ばしいソースがマッチします。<br>
鮭のムニエルを焼いて取り出した後のフライパンに、しょうゆとみりん、酒を入れてひと煮立ちさせるだけ。先に少量のバターできのこを炒めてから調味料類を入れて煮立てれば、和風きのこソースになりますよ。'),

//（小見出し）
array ('ttl_m','mb1','クリームソース'),
array ('textimg','12','left','クリームソース','mb0','鮭のムニエルのごちそう感がアップする、リッチな味わいのソースです。<br>
鮭のムニエルを焼いた後のフライパンをきれいに拭くか、または別のフライパンを用意して、バターを熱します。溶けたら薄力粉を振り入れ、そこに牛乳を少しずつ注ぎ入れながらよく混ぜます。塩こしょうで味をととのえ、ひと煮立ちしたらできあがりです。お好みでほうれん草のソテーを添えると、彩りがアップしますよ。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//コウちゃん　喜ぶ
array ('ko','03','わ〜、すごいおさかなりょうり〜♪'),

//フマサキ　通常
array ('papa','01','フフフ、おしゃれだろ〜？なのに意外と簡単に作れちゃった！<br>
ビールやワインにも合うし、もっといろんな魚で試してみたいなあ'),
 
//フラッキー　褒める
array ('fl','03','秋鮭の次は、冬が旬のひらめはどうだ？'),

//ミエ　通常
array ('mama','01','わあ〜、美味しそう！ソースはレモンバターがいいかな？'),

//マサキ 通常
array ('papa','01','クリームソースや、和風ソースにもチャレンジしてみたいね<br>
フラッキー、ありがとう！'),

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
