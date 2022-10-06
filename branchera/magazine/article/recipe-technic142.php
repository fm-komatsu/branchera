<?php
//base
include( "../../function.php" );
$content = get_id_data( '15142' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「アメリカンチェリーのコンポートの作り方」を動画とテキストで解説。コンポートをアレンジした美味しい食べ方や、人気のデザートレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '142';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'zvP9SbmpQQI';

//導入文
$introTxt = '第142回は、お料理オンラインイベントのメニュー「アメリカンチェリーのコンポートの作り方」です。そのままいただくほか、幅広いアレンジも楽しめる便利なレシピを動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　困る
array ('mama','02','アメリカンチェリーを買ってきたけど、そのまま食べるのにちょっと飽きてきちゃった…<br>
まだたくさんあるのに、困ったなあ'),

//フラッキー　通常
array ('fl','01','それなら、俺の友達のマユ先生におまかせだ！<br>
美味しいコンポートの作り方を、オンラインで教えてくれるぞ'),

//コウちゃん　通常
array ('ko','01','「こんぽーと」ってなあに？'),

//マユ先生
array ('mayu','01','フルーツをお砂糖のシロップで煮たものです<br>
生のままよりいろいろなアレンジを楽しめるだけでなく、甘みが足りないフルーツも美味しくいただけますよ'),

//ミエ　通常
array ('mama','03','わあ、素敵！ぜひ作ってみたいです！'),

//マサキ　通常
array ('papa','01','僕とコウちゃんも画面を見ながら一緒に手伝おう<br>
マユ先生、よろしくお願いします！'),

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
array ('ttl_l','mb0','アメリカンチェリーのコンポートの作り方'),

// （本文1）
array ('text','mb2','フルーツをシロップで煮て作るコンポートは、そのままいただくほか、いろいろな<a href="'.$base_url.'/magazine/article/recipe-collect04.php" class="recipe-design__link">スイーツレシピ</a>にも活用できる便利な一品です。アメリカンチェリーで作ると、真っ赤な実の色がテーブルに華やぎを添えてくれますよ。'),

// （小見出し）
array ('ttl_m','mb1','材料（作りやすい分量）'),
array ('mtr-st'),
array ('mtr','アメリカンチェリー','200g'),
array ('mtr','砂糖','60g（アメリカンチェリーの30%）'),
array ('mtr','水','60ml'),
array ('mtr','レモン果汁','大さじ1'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','アメリカンチェリーのヘタを手で取ります。種はペティナイフや割り箸などを使って取り出します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','アメリカンチェリーの種抜き方法'),
array ('free','mb2','アメリカンチェリーの種抜きは、専用の種抜き器を使うと簡単だが、ペティナイフや割り箸でも種を抜くことができるぞ。'),
array ('free','mb2','ペティナイフを使う場合は、実の中心の種に刃先を当てながら、ぐるりと1周切れ目を入れ、両手で実をひねって半分に割り開き、種を取り出すんだ。'),
array ('free','mb0','実の形をそのまま残したい場合は、割り箸を実のお尻からヘタに向かって差し込み、種を押し出してくれ。よりきれいに種を押し出すには、先にヘタのほうから爪楊枝を差し込み、種に沿ってぐるりと回すようにして、実から種を外しておくといいぞ。'),
array ('chk-end'),

array('step','02','mb0','ヘタと種を除いたアメリカンチェリーに砂糖をまぶし、1〜2時間置きます。'),
array('step','03','mb0','砂糖がすべて溶けて、アメリカンチェリーから水分が出たらOKです。'),
array('step','04','mb0','水とレモン果汁を加えて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。'),
array('step','05','mb0','沸騰したら、中火のまま5分ほど煮て完成です。'),
array('step','06','mb3','グラスに入れたり、アイスクリームに添えたりするなど、お好みの盛り付けをしてください。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','コンポートの美味しい食べ方'),
array('text','mb0','適量をグラスに入れ、炭酸水やスパークリングワインを注いでドリンクにするほか、ヨーグルトやバニラアイスクリームに添えるのもおすすめです。<br>
また、できあがったコンポートにキルシュワッサー（さくらんぼで作った蒸留酒）を大さじ2ほど加えると、大人向けの味わいに仕上がりますよ。'),
array ('plus-end'),

// （小見出し）
array ('ttl_m','mb1','コンポートの保存期間'),
array('text','mb3','フルーツの素材感を生かして作るコンポートは、コンフィチュールやジャムより砂糖の量が少ないため、長期間の保存には向いていません。シロップごと密閉できる容器に入れ、冷蔵保存します。<strong>4〜5日程度</strong>で食べきるようにしましょう。'),


//（大見出し2）
array ('ttl_l','mb1','アメリカンチェリーのコンポートを使ったスイーツレシピ'),
array ('text','mb2','コンポートを作ったら、手作りスイーツにも活用してみましょう！'),

//（小見出し）
array ('ttl_m','mb1','アメリカンチェリーのフラン'),
array('text','mb2','「フラン」とは、卵や牛乳で作るかためのプリンのようなスイーツ。生地から顔をのぞかせるチェリーがかわいらしい仕上がりです。'),
array ('textimg','07','right','リゾット','mb2','ボウルに卵・砂糖・薄力粉を入れて混ぜます。温めた牛乳を注ぎ入れてよく混ぜたら、鍋に移し、かき混ぜながら加熱します。とろみがついたら器に流し入れ、水気を切ったアメリカンチェリーのコンポートを飾ってオーブンへ。美味しそうな焼き目が付いたらできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','アメリカンチェリーのパイ'),
array('text','mb2','アメリカンな雰囲気たっぷりのスイーツ。市販のパイシートを使えば、初心者でも簡単に作れます。'),
array ('textimg','08','left','アメリカンチェリーのパイ','mb0','市販のパイシートを細長く切り、格子模様を作っておきます。もう1枚のパイシートを麺棒でのばし、型に隙間なく敷きます。中にアメリカンチェリーのコンポートを入れ、格子模様にしたパイシートを上にのせて卵液を塗ります。予熱したオーブンでこんがり焼き上げればできあがりです。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','買いすぎて持て余し気味だったアメリカンチェリーが、コンポートになるとこんなに新鮮に楽しめるなんて〜！'),

//コウちゃん　喜ぶ
array ('ko','03','まっかできらきら♪<br>
かわいい～'),

//マサキ　通常
array ('papa','01','種を取るのは初めてだったけど、先生の手元を見ながらできたから分かりやすかったね'),

//マユ先生
array ('mayu','01','トーストにのせたり、クリームチーズに添えたりと、お好みで幅広く楽しめるコンポートはいつ作っても便利ですよ<br>
ほかのフルーツでもぜひチャレンジしてみてくださいね'),

//ミエ　通常
array ('mama','01','大好きなフルーツをもっと楽しめそうでワクワクです♪<br>
先生、ありがとうございました！'),


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
