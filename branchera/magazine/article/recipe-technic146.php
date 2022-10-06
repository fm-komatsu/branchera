<?php
//base
include( "../../function.php" );
$content = get_id_data( '15146' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「にんじんグラッセの作り方」を動画とテキストで解説。プロが作るようなつやのあるグラッセのレシピと、かぼちゃやさつまいもなど、子どもも喜ぶ人気のアレンジをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '146';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'd1MiE89cYVE';

//導入文
$introTxt = '第146回は、「にんじんグラッセの作り方」です。付け合わせの定番、にんじんグラッセを美味しくきれいに仕上げる作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　困る
array ('mama','02','今日の夕ご飯は<a href="'.$base_url.'/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>なんだけど、付け合わせが浮かばない…
何がいいかなあ'),

//マサキ　通常
array ('papa','01','にんじんグラッセはどう？
レストランの洋食プレートみたいに見えそうだよ'),

//ミエ　驚く
array ('mama','03','なるほど！コウちゃんも、甘いグラッセならきっと喜ぶね
でも、お店で出てくるようなものを作るなんて難しそう…'),

//フラッキー　通常
array ('fl','01','心配ご無用！
大事なポイントを押さえれば、誰でもプロ並みのつやつやグラッセが作れちゃうんだぜ♪'),

//ミエ　通常
array ('mama','01','えっ、本当？
フラッキー、にんじんグラッセの上手な作り方を教えて〜'),

//フラッキー　通常
array ('fl','01','よしきた！それじゃあ、さっそくいくぞ〜！'),

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
array ('ttl_l','mb0','にんじんグラッセの作り方'),

// （本文1）
array ('text','mb2','「グラッセ」はフランス料理の調理法で、食材に照り（つや）が出るように煮ることを指します。和食で照り煮を作る場合はみりんを入れますが、フランス料理のグラッセはバターと砂糖で照りを出すのが特徴です。<br>甘くつややかなにんじんグラッセは、洋食の付け合わせの定番。ハンバーグやステーキに添えるだけで、家庭料理が本格的な雰囲気になりますよ。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','にんじん','1本（150g）'),
array ('mtr','水','200ml'),
array ('mtr','バター','10g'),
array ('mtr','砂糖','大さじ1'),
array ('mtr','塩','ひとつまみ'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','にんじんは皮をむき、1cm厚さの輪切りにして<a href="'.$base_url.'/magazine/article/recipe-technic31.php#mentori" class="recipe-design__link">面取り</a>します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','面取りは煮崩れを防ぐため！'),
array ('free','mb0','野菜をきれいな形で煮上げるために、煮崩れしやすい角をあらかじめ取っておくことを「面取り」というんだ。とがっている角の部分を、包丁で薄く削り取ろう。難しかったら、ピーラーを使うと楽だぞ！'),
array ('chk-end'),

array('step','02','mb0','小鍋に水、バター、砂糖、塩、にんじんを入れ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。'),
array('step','03','mb0','沸騰したら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にして、やわらかくなるまで20分ほど煮ます。'),
array('step','04','mb3','最後は<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にして、つやが出るまで煮詰めましょう。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','カロリーと甘さを抑えるには？'),
array('text','mb2','にんじんグラッセのカロリーが気になるときは、砂糖の代わりにはちみつを使ってみましょう。砂糖の約3分の1量でほぼ同じ甘さを出せるうえ、カロリーは砂糖より低いので、ヘルシーなグラッセができます。ただし、1歳未満の乳幼児には与えないように注意しましょう。'),
array('text','mb0','また、甘さを抑えてあっさり仕上げたいときは、砂糖の量を控えてコンソメで味付けするのがおすすめです。にんじんグラッセの甘さが苦手な人にも、食べやすく仕上がりますよ。'),
array ('plus-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','電子レンジで時短する方法'),
array('text','mb2','にんじんグラッセを時間をかけずに簡単に仕上げたいときは、電子レンジの利用がおすすめです。上記のレシピと同分量の場合、水を大さじ2に減らし、カットしたにんじんと、その他の材料を耐熱ボウルに入れてラップをかけ、600Wに設定した電子レンジで2分加熱します。一度取り出して全体を混ぜ合わせ、再び2分加熱しましょう。'),
array ('plus-end'),

// （小見出し）
array ('ttl_m','mb1','にんじんグラッセの保存方法'),
array('text','mb3','中までしっかり火を通しているにんじんグラッセは、日持ちしやすい一品です。冷蔵保存で約1週間、冷凍保存で約1ヵ月保存することができます。<br>使うときは自然解凍か、電子レンジで加熱しましょう。'),

//（大見出し2）
array ('ttl_l','mb1','グラッセのアレンジレシピ'),
array ('text','mb2','基本のにんじんグラッセをマスターしたら、アレンジレシピにもチャレンジしてみましょう！'),

//（小見出し）
array ('ttl_m','mb1','かぼちゃのグラッセ'),
array ('textimg','05','right','かぼちゃのグラッセ','mb2','和風の煮物でおなじみのかぼちゃを、洋風のグラッセで！<br>鍋にひと口大にカットしたかぼちゃと被るくらいの水、砂糖を入れて煮込みます。やわらかくなったらバターを絡め、塩少々で味を調えてできあがり。バターとかぼちゃのコンビネーションがたまらない味わいです。'),

//（小見出し）
array ('ttl_m','mb1','さつまいものグラッセ'),
array ('textimg','06','left','さつまいものグラッセ','mb2','ほくほくの甘いさつまいもで作るグラッセは、おやつ感覚で楽しめる一品です。<br>さつまいもは1.5cm厚さの<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にし、水にさらしてアク抜きします。下ごしらえが済んださつまいもと、被るくらいの水を鍋に入れ、バター、砂糖、塩少々を加えて煮込みます。水気がなくなり、つやが出ればできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','離乳食中期向けのにんじんグラッセ'),
array ('textimg','07','right','離乳食中期向けのにんじんグラッセ','mb0','栄養豊富で甘みのあるにんじんグラッセは、赤ちゃんの離乳食にもおすすめです。<br>にんじんを大人用のグラッセより小さめにカットし、鍋でやわらかく煮ます。ゆで汁を捨て、<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ1〜2</a>程度の水と、ごく少量ずつのバター、砂糖、塩を加え、煮詰めてつやを出します。容器に移し、赤ちゃんの離乳の進み具合に合わせて小さく潰しましょう。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//コウちゃん　喜ぶ
array ('ko','03','このにんじん、あまくておいしーい！'),

//マサキ　通常
array ('papa','01','うん、つやつやしてきれいな形だし、まるでお店で食べるにんじんグラッセみたいだね'),

//ミエ　通常
array ('mama','01','ハンバーグはいつもと同じなのに、にんじんグラッセがあるだけですごく本格的な感じ〜♪'),

//フラッキー　褒める
array ('fl','03','にんじんグラッセが余ったら、牛乳を加えてミキサーにかけるとにんじんポタージュが簡単に作れるぞ！'),

//ミエ　驚く
array ('mama','03','余りでもう1品できちゃうなんて助かる！明日の朝食はポタージュとトーストにしようっと♪<br>フラッキー、ありがとう！'),

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
