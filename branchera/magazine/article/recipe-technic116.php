<?php
//base
include( "../../function.php" );
$content = get_id_data( '15116' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「すき焼きの作り方」を動画とテキストで解説。基本の具材を使って美味しいすき焼きを作る方法をご紹介します。また、電子レンジで簡単に作れる割り下のレシピも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '109';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '116';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'FDVrAi-czbA';

//導入文
$introTxt = '第116回は、「すき焼きの作り方」です。基本のすき焼きの作り方と、簡単で美味しいアレンジレシピをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// パパ　通常
array ('papa','01','あー、お腹空いた～<br>
寒い季節はお肉たっぷりのすき焼きが恋しくなるよなぁ…'),

// ママ　通常
array ('mama','01','わかる〜。じゃあ今夜は豪華にすき焼きにしちゃおうかな！<br>
でもすき焼きのたれがないわね。パパ、ちょっと買ってきてくれない？'),

// フラッキー　通常
array ('fl','01','ちょっと待ちな！割り下は家にある材料で簡単に手作りできるんだぜ！'),

// ママ　困る
array ('mama','02','そうなの！？いつも市販のたれを使ってたから、ちゃんと手作りできるか不安だわ…'),

// フラッキー　通常
array ('fl','01','安心しな！割り下はポイントさえ守れば、簡単に手作りできるんだ<br>
せっかくのご馳走だろ？ちょっと手を加えて、美味しいすき焼きにしようぜ！'),

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
array ('ttl_l','mb0','基本のすき焼きの作り方'),

// （本文1）
array ('text','mb2','冬に人気の鍋料理といえば、すき焼き。薄切りの牛肉を使った、手軽に作れるご馳走です。すき焼きに使う甘い醤油ベースのたれ「割り下」は、実は家にある材料で簡単に作ることができます。今回は、割り下のレシピと、基本のすき焼きの作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('mtr','牛肉（薄切り／すき焼き用）','400g'),
array ('mtr','長ねぎ','2本'),
array ('mtr','しいたけ','8個'),
array ('mtr','白菜','150g'),
array ('mtr','春菊','1束'),
array ('mtr','焼き豆腐','1丁'),
array ('mtr','牛脂','適量'),
array ('mtr','卵','適量'),
array ('mtr-end'),
array ('ttl5','mb0','＜割り下＞'),
array ('mtr-st'),
array ('mtr','醤油','150ml'),
array ('mtr','みりん','150ml'),
array ('mtr','水','150ml'),
array ('mtr','ざらめ（または砂糖）','50g'),
array ('mtr-end'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ざらめで割り下を美味しくランクアップ！'),
array ('free','mb0','砂糖ではなく、ざらめを入れることが割り下を美味しくするポイントだ。ざらめを使うことで、コクのある上品な甘みが出るぞ。'),
array ('chk-end'),

// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb3','割り下の材料を耐熱容器に入れ、600Wに設定した電子レンジで2分加熱します。取り出したらよく混ぜ、ざらめを溶かします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','割り下は最初に作る！'),
array ('free','mb0','すき焼きは手早く作ることが大切だ！調理中に割り下を作り始めると、鍋が煮詰まって具材に水分が染み込みすぎてしまうことも。先に割り下を作っておけば、調理がスムーズに進められるぞ！'),
array ('chk-end'),

array('step','02','mb3','長ねぎは1.5cm幅の斜め切りにします。しいたけは軸を取り、白菜は<a href="'.$base_url.'/magazine/article/recipe-technic111.php" class="recipe-design__link">ざく切り</a>、春菊は5cmの長さに切りましょう。<br>焼き豆腐は食べやすい大きさに切ってください。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','しらたきを入れる場合はアク抜きを！'),
array('text','mb0','最近は<a href="'.$base_url.'/magazine/article/recipe-technic78.php" class="recipe-design__link">アク抜き</a>済みのしらたきも多いですが、そうでないものを使う場合は事前にアク抜きをしておきましょう。しらたきはアク抜きをすると、凝固剤として使われている石炭のえぐみを取ることができます。アク抜きの方法は、しらたきを適度な長さに切り、沸騰したお湯でひと煮立ちさせれば完了です。'),
array ('plus-end'),

array('step','03','mb0','鍋を熱し、牛脂を入れて溶かします。'),

array('step','04','mb0','長ねぎを入れて焼きます。焼き色が付いたら裏返してください。'),

array('step','05','mb0','牛脂を取り出し、割り下を注ぎます。'),

array('step','06','mb0','沸騰したら牛肉を1枚入れ、色が変わったら裏返して両面に火を通します。こうすることで、汁全体に牛肉のうまみを行き渡らせることができます。牛肉は、器に溶いておいた<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>に絡めて食べましょう。'),

array('step','07','mb3','残りの具材を入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で煮ます。火が通ったらできあがり！'),


// （大見出し1）
array ('ttl_l','mb0','すき焼きのアレンジレシピ'),

// （本文2）
array ('text','mb2','すき焼きが余ったときは、アレンジを加えることで違った味わいを楽しむことができますよ。人気のアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','すき焼きうどん'),
array ('textimg','08','right','すき焼きうどん','mb2','すき焼きの締めにぴったりなうどんです。作り方はとっても簡単！鍋にうどん、お好みでお麩を入れ、やわらかく煮ます。次に、余ったすき焼きとねぎを加えて煮込み、卵を入れましょう。卵がお好みのかたさになれば完成です。'),

//（小見出し）
array ('ttl_m','mb1','すき焼きリゾット'),
array ('textimg','09','left','すき焼きリゾット','mb2','余ったすき焼きをチーズと<a href="'.$base_url.'/magazine/article/recipe-technic74.php" class="recipe-design__link">トマト</a>で洋風リゾット風に！すき焼きに割り下を少量加えて煮込みます。さらにご飯とトマトを加えてひと煮立ちさせたら、ピザ用チーズを加えて完成！甘い味付けとチーズの塩味が合う一品です。'),

//（小見出し）
array ('ttl_m','mb1','すき焼きドライカレー'),
array ('textimg','10','right','すき焼きドライカレー','mb0','すき焼きの残り汁を使った、和風のドライカレーです。玉ねぎとにんにくをざく切りし、先に玉ねぎをフライパンで炒めます。玉ねぎに焼き色が付いてきたら、にんにくとひき肉を炒めましょう。ひき肉に火が通ったら、カレー粉と塩を加えます。粉っぽさがなくなってきたら、すき焼きの汁とトマトジュース、水煮した大豆を加え、水気がなくなるまで煮詰めてください。ご飯に盛り付けてできあがり！'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//コウちゃん　通常
array ('ko','01','すきやき、おいし〜い！'),

//パパ　通常
array ('papa','01','コクがあって、<a href="'.$base_url.'/magazine/article/recipe-technic32.php" class="recipe-design__link">お肉</a>が一段と美味しく感じるよ！<br>
この長ねぎも香ばしくって、箸が進むなあ〜'),

//フラッキー　通常
array ('fl','01','よく気づいてくれたな！<br>
ねぎは牛脂で焼くと香ばしさが出て、グッと美味しくなるんだぜ'),

//ママ　通常
array ('mama','01','余った分をご飯にかけて、すき焼き丼にしても美味しそう！'),

//パパ　通常
array ('papa','01','いいね〜！まあ、いつも全部食べ切っちゃうから余らないんだけどね♪'),

//フラッキー　通常
array ('fl','01','マサキたちの場合、アレンジ用に新しく作る必要がありそうだな！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','14022'),
array ('recommend-recipe-id','14012'),
array ('recommend-recipe-id','15110'),
array ('recommend-recipe-end'),

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
