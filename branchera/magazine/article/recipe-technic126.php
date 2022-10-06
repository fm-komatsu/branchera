<?php
//base
include( "../../function.php" );
$content = get_id_data( '15126' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ピクルスの作り方」を動画とテキストで解説。常備菜にぴったりな美味しいピクルスのレシピをご紹介します。きゅうり、セロリ、にんじん、パプリカを使ったレシピを中心に、ピクルスを活用したアレンジレシピも紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '126';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'z-Cppg4ms1Q';

//導入文
$introTxt = '第126回は、「ピクルスの作り方」です。簡単にできて彩りも楽しめるピクルスは、常備菜にぴったり！野菜がたっぷりとれて、ヘルシーなピクルスの簡単レシピをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','今日は久しぶりにハンバーガーだぞ♪ '),

//コウちゃん　笑顔
array ('ko','01','やった～。こうちゃん、はんばーがーのすっぱいおやさい、すき～'),

//マサキ　通常
array ('papa','01','すっぱい野菜？ああ、ピクルスね！パパもピクルス好きだよ〜'),

//コウちゃん　笑顔
array ('ko','01','ぱぱー、これつくれる？'),

//マサキ　通常
array ('papa','01','どうかなあ？ピクルスって自分で作れるのかな…'),

// フラッキー　通常
array ('fl','01','ピクルスは自分で簡単に作れるぞ！しかも、自家製ピクルスなら定番のきゅうり以外にも、好きな野菜で作ることができるぜ！'),

//マサキ　笑顔
array ('papa','01','本当に！？じゃあフラッキー、さっそく教えて！'),

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
array ('ttl_l','mb0','ピクルスの作り方'),

// （本文1）
array ('text','mb2','野菜をピクルス液に漬けておくだけで、翌日にはできあがるピクルス。野菜の色が鮮やかに仕上がるので、付け合わせに大活躍の常備菜です。甘酸っぱくて爽やかな風味は、肉料理やフライドポテトにも相性抜群！パプリカ、セロリ、トマト、ホワイトアスパラ、にんじんなど、ピクルスはいろいろな野菜で作ることができます。今回は、簡単にできるピクルスの作り方をご紹介します！'),

// （小見出し）
array ('ttl_m','mb1','材料（750mlの容器1瓶分）'),
array ('mtr-st'),
array ('mtr','きゅうり','2本'),
array ('mtr','セロリ','1/2本'),
array ('mtr','にんじん','1/2本'),
array ('mtr','パプリカ（赤・黄）','各1/3個'),
array ('mtr-end'),
array ('ttl5','mb0','＜ピクルス液＞'),
array ('mtr-st'),
array ('mtr','米酢','1/2カップ（100ml)'),
array ('mtr','水','1カップ（200ml）'),
array ('mtr','砂糖','大さじ3'),
array ('mtr','塩','大さじ1'),
array ('mtr','粒黒こしょう','約20粒'),
array ('mtr','赤唐辛子（半分に割って種を取る）','1本'),
array ('mtr','ローリエ','1枚'),
array ('mtr-end'),


array ('ttl_m','mb1','手順'),
array('step','01','mb0','きゅうりは両端を落として、長さを2等分にした後、2～4等分のスティック状に切ります。'),
array('step','02','mb0','セロリは<a href="'.$base_url.'/magazine/article/recipe-technic79.php" class="recipe-design__link">筋を取って</a>おきます。にんじんは<a href="'.$base_url.'/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむいて</a>、パプリカは種とヘタを取り除きましょう。'),
array('step','03','mb0','セロリ、にんじん、パプリカは、スティック状のきゅうりの形に合わせて切ります。'),
array('step','04','mb0','ピクルス液の材料を鍋に入れます。<br>沸騰させたら、火を止めましょう。'),
array('step','05','mb0','清潔な瓶に、切り揃えた野菜を入れます。<br>熱いうちに、ピクルス液を瓶に注いでください。粒黒こしょう、赤唐辛子、ローリエも一緒に入れて漬け込むと、しっかりと野菜に風味が移ります。'),
array('step','06','mb3','粗熱が取れたら蓋をして、冷蔵庫に一晩置いたらできあがりです。'),


// ■Check
array ('chk-st'),
array ('ttl4','mb2','ピクルスの保存期間は10日程度！'),
array ('free','mb0','ピクルスは密閉容器に入れ、冷蔵庫で保存しよう。保存期間の目安は、約10日だぜ！'),
array ('chk-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ピクルスにおすすめの野菜は？'),
array('text','mb0','ピクルスは多様な野菜で楽しむことができます。今回ご紹介した野菜のほか、ミニトマト、みょうが、ラディッシュなど、冷蔵庫にあるたいていの野菜はピクルスにできます。夏はきゅうりやなすなどの夏野菜、冬は<a href="'.$base_url.'/magazine/article/recipe-technic109.php" class="recipe-design__link">れんこん</a>や<a href="'.$base_url.'/magazine/article/recipe-technic45.php" class="recipe-design__link">ごぼう</a>などの冬野菜…と、旬の野菜をピクルスにすると、より美味しく仕上がるのでおすすめですよ。'),
array ('plus-end'),


// （大見出し2）
array ('ttl_l','mb0','こんなに使える！ピクルス活用レシピ'),

// （本文2）
array ('text','mb2','そのまま食べても美味しいピクルスですが、ほかのソースや料理に加えて食べるのもおすすめです。野菜のうまみとほどよい酸味を手軽に加えることができるので、調味料のようにも使えますよ。さっそく、ピクルスを活用したレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','タルタルソース'),
array ('textimg','07','right','タルタルソース','mb2','揚げ物に付けるタルタルソースも、ピクルスがあれば簡単に作れるのをご存じですか？<br>きゅうりのピクルスと、ゆで卵、玉ねぎ、イタリアンパセリを<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にして、ボウルに入れます。そこにレモン汁とマヨネーズを加え、よく混ぜ合わせたら、冷蔵庫で冷やしてできあがりです。程よい酸味が、エビフライやカキフライなどの海鮮のフライにぴったりですよ。'),

//（小見出し）
array ('ttl_m','mb1','マカロニサラダ'),
array ('textimg','08','left','マカロニサラダ','mb2','お弁当のおかずやお酒のおつまみにも大人気のマカロニサラダ。ピクルスを使うと、より美味しい一品になります。<br>まず、ゆでて粗熱を取ったマカロニと、マカロニの大きさに合わせて切ったピクルス、細かく切ったゆで卵をボウルに入れます。そこにマヨネーズを加えてよく混ぜ合わせます。塩、こしょうで味を整えて、イタリアンパセリを散らしたらできあがり！<br>
ピクルスは、きゅうり、にんじん、<a href="'.$base_url.'/magazine/article/recipe-technic118.php" class="recipe-design__link">カリフラワー</a>など、好みのものを使えばOKです。'),

//（小見出し）
array ('ttl_m','mb1','ピクルス液をマリネ液に'),
array ('textimg','09','right','ピクルス液をマリネ液に','mb0','ピクルスそのものだけでなく、漬け込んでいるピクルス液もアレンジ可能です。ピクルス液にすりおろしたにんにく、オリーブオイル、ハーブソルト、こしょうを加えると、マリネ液になります。加熱した鮭、白身魚、エビなどを漬け込めば、簡単に魚介のマリネを作ることができますよ。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','ママ、見て見て！きれいにピクルスができたよ！'),

//コウちゃん　笑顔
array ('ko','03','ぴくるす～！'),

//ミエ　笑顔
array ('mama','01','本当だ！自家製のピクルスっていいね。箸休めやおつまみにぴったりだし、ピックを刺すと華やかでおもてなしにも使えそう♪'),
  
//フラッキー　笑顔
array ('fl','01','だろ？とりあえず常備しておくと便利だよな！野菜を買い過ぎたら、ピクルスを作るといいぜ！'),


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
