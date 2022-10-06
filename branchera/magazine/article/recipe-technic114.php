<?php
//base
include( "../../function.php" );
$content = get_id_data( '15114' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「数の子の塩抜き方法」を動画とテキストで解説。ほどよく塩気を残し、美味しく仕上げる塩抜きのコツをご紹介します。保存方法やアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '114';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'A5Zwbw28Raw';

//導入文
$introTxt = '第114回は、「数の子の塩抜き」です。おせち料理に欠かせない数の子の、上手な下ごしらえについてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ミエ　通常
array ('mama','01','そろそろ<a href="'.$base_url.'/magazine/article/recipe14.php" class="recipe-design__link">おせち料理</a>の準備を始めなくっちゃ<br>
前回よりもレベルアップ目指して頑張るぞ～'),

// マサキ　通常
array ('papa','01','じゃあ、今年は数の子をぜひ入れてほしいな'),

// ミエ　通常
array ('mama','01','そう言われると思って、今回は真っ先に数の子を買ってきたよ～♪<br>
…えーと、これってそのままお重に入れていいんだっけ…？'),

// フラッキー　怒る
array ('fl','02','ブ～～～！数の子を美味しくいただくには、<a href="'.$base_url.'/magazine/article/recipe-technic14.php" class="recipe-design__link">塩抜き</a>が必要！<br>
これはまた俺の出番か？'),

// ミエ　困る
array ('mama','02','あっ、フラッキー！<br>
数の子の下ごしらえの方法、ぜひ教えて～'),

// フラッキー　褒める
array ('fl','03','よし！じゃあ、さっそく始めるぞ！'),

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
array ('ttl_l','mb0','数の子の塩抜きの方法'),

// （本文1）
array ('text','mb2','ニシンの卵である数の子は、おせち料理の定番の一品。下ごしらえの塩抜きを丁寧に行なうと、美味しさがグンとアップします。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人前）'),
array ('mtr-st'),
array ('mtr','塩漬けの数の子','200g'),
array ('mtr','水','1,000ml（2～3回分）'),
array ('mtr','塩','小さじ1（2～3回分）'),
array ('mtr-end'),


// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb0','数の子の塩抜きは、たっぷりの塩水で行います。<br>
水に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を入れ、薄い塩水を作りましょう。'),

array('step','02','mb0','塩水の中に、数の子を入れます。半日～1日の間、そのまま浸けておきましょう。'),

array('step','03','mb3','途中で1～2回、塩水を変えます。だいたい3～4時間おきに1度変えるとよいでしょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','失敗しない塩抜きのコツ'),
array ('free','mb0','塩抜きを成功させるには、ほどよい加減に塩気を残すのがコツだ。塩気が抜けすぎると、苦味が出ることがあるから要注意！少し味見をして、そのままでも食べられるくらいの塩加減になっていればOKだぞ。<br>
もし塩抜きしすぎて苦味が出てしまったら、分量より濃いめの塩水に1～2時間漬けてみよう。'),
array ('chk-end'),

array('step','04','mb0','数の子の薄い膜（薄皮）を取り除きます。<br>
指の腹で優しくこするようにして取り除きましょう。'),

array('step','05','mb0','薄い膜を取り除いた数の子を、一口大に切ります。'),

array('step','06','mb3','器に盛ったら完了です。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','数の子の保存方法'),
array('text','mb2','基本的に、数の子は冷蔵庫で保存します。数の子を冷凍すると、「プチッ」とした独特の歯ごたえが損なわれてしまうので、必ず冷蔵庫で保存しましょう。<br>
塩抜き前、塩抜き後、味付け後それぞれの保存方法と保存期間を詳しくお伝えします。'),
array('ttl_s','mb0','塩抜き前の場合'),
array('text','mb2','塩抜き前（塩漬け状態）の数の子は、冷蔵庫で長期保存ができます。<br>
保存期間の目安は、約2～3ヵ月です。'),
array('ttl_s','mb0','塩抜き後の場合'),
array('text','mb2','塩抜き後の数の子も、冷蔵庫に入れて保存します。塩抜きをすると長期保存ができなくなるので、早めに食べるようにしてください。<br>
保存期間の目安は、約3～4日です。'),
array('ttl_s','mb0','味付け後の場合'),
array('text','mb0','味付けした数の子も、基本的には冷蔵庫で保存します。<br>
ただし、松前漬けやちらし<a href="'.$base_url.'/magazine/article/recipe16.php" class="recipe-design__link">寿司</a>など、小さく刻んで使う料理に入れる場合は、冷凍保存してもよいでしょう。冷凍した数の子を使うときは、冷蔵庫に移し1日ほどかけてゆっくり解凍してください。<br>
保存期間の目安は、冷蔵庫で約3～4日、冷凍庫で約3ヵ月です。'),
array ('plus-end'),


// （大見出し1）
array ('ttl_l','mb0','数の子の人気レシピ'),

// （本文2）
array ('text','mb2','塩抜きした数の子を美味しくいただける、人気レシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','おせちの合わせ地'),
array ('textimg','07','right','おせちの合わせ地','mb2','おせちに入れる数の子は、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、みりん、酒の合わせ地に漬け込んで味付けします。1日ほど漬けたら、食べやすい大きさに切り分けて盛り付けましょう。仕上げに削り節を散らして完成です。'),

//（小見出し）
array ('ttl_m','mb1','松前漬け'),
array ('textimg','08','left','松前漬け','mb2','数の子にするめや<a href="'.$base_url.'/magazine/article/recipe-technic05.php" class="recipe-design__link">昆布</a>などを合わせて漬けた、北海道の郷土料理です。<br>
軽くあぶるか、酒に浸してやわらかくしたするめを5cm長さに切ります。昆布とにんじんも、するめと長さを合わせて細切りにしてください。塩抜きして適当な大きさにちぎった数の子と合わせ、煮切りした酒、醤油、塩少々と共に保存容器へ。液が少なくなったら継ぎ足しながら、1週間程度漬けたら食べ頃です。'),

//（小見出し）
array ('ttl_m','mb1','数の子のディップ'),
array ('free','mb0','塩気のある数の子は、クリーミーなディップの具材にもぴったり。数の子が余ってしまったときにおすすめです。<br>
室温に戻したクリームチーズに、おろしたにんにく、醤油、粗びき黒こしょう各少々と、塩抜きした数の子を加えてよく混ぜます。薄切りにしたバゲットやクラッカーと一緒にどうぞ。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','数の子の下ごしらえって難しいのかと思ったけど、<br class="u-only__pc">
コツを押さえれば簡単なのね！'),

//マサキ　通常
array ('papa','01','美味しい数の子が入って、今回のおせちは豪華になりそうだね'),

//コウちゃん　喜ぶ
array ('ko','03','おしょうがつ、たのしみ～♪'),

//フラッキー　褒める
array ('fl','03','数の子はおせち以外にもいろいろ使える食材なんだ<br>
残ったら、<a href="'.$base_url.'/magazine/article/recipe-technic43.php" class="recipe-design__link">ちらし寿司</a>や<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>の具にするのもおすすめだぞ！'),

//ミエ　驚く
array ('mama','03','和風にも洋風にもアレンジできるんだ！<br>
これからは、お正月以外にも使ってみようかな♪'),
);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','14014'),
array ('recommend-recipe-id','14016'),
array ('recommend-recipe-id','15043'),
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
