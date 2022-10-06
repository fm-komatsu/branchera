<?php
//base
include( "../../function.php" );
$content = get_id_data( '15123' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「中華鍋の使い方とお手入れ方法」を動画とテキストで解説。購入した中華鍋を初めて使う際に必要な、空焼き・油ならしといった準備から、使用した後の洗い方などを詳しくご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠
$comic02PrId = '101';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '123';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'S931Y007J3Y';

//導入文
$introTxt = '第123回は、「中華鍋の使い方とお手入れ方法」です。<a href="'.$base_url.'/magazine/article/recipe01.php" class="recipe-design__link">炒め料理</a>、<a href="'.$base_url.'/magazine/article/recipe-technic09.php" class="recipe-design__link">揚げ料理</a>、<a href="'.$base_url.'/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸し料理</a>など、さまざまな調理に活躍する鉄製の中華鍋。初めて使うときの準備方法・使い方や、お手入れの方法についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// マサキ　通常
array ('papa','01','じゃーん！鉄製の中華鍋を買ったんだ♪<br>この中華鍋で本格<a href="'.$base_url.'/magazine/article/recipe-technic86.php" class="recipe-design__link">チャーハン</a>を作ろうと思ってさ～'),

//  コウちゃん　通常
array ('ko','01','やった～！ちゃ～はんだ～'),

// マサキ　通常
array ('papa','01','よ～し、コウちゃん！とびきりのチャーハンを作ってあげるからね！<br>さっそく材料を炒めて…'),

// フラッキー　通常
array ('fl','01','ちょっと待った～！<br>鉄製の中華鍋は、最初に使う前にやらなきゃならないことがあるんだぞ！<br>いきなり使うのはNGなんだぜ〜'),

// マサキ　驚く
array ('papa','03','ええっ！？そうだったの？フラッキー、何をすればいいか教えて〜！'),

// フラッキー　通常
array ('fl','01','よーし、俺が中華鍋の使い方とお手入れ方法を教えてやるぜ！'),

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
array ('ttl_l','mb0','中華鍋を初めて使うときの準備方法'),

// （本文1）
array ('text','mb2','熱伝導がよい鉄製の中華鍋。食材に均等に熱が行き渡るので、より美味しく調理できるのが魅力です。しかし、購入後すぐに調理に使うのはNG。最初に、鍋の表面に施されているさび止めの加工を落とさなくてはなりません。中華鍋を初めて使うときに行う準備についてご紹介します。'),

// （小見出し）
array ('ttl_m','mb0','空焼き'),

array('step','01','mb0','中性洗剤とスポンジで軽く洗い、鍋表面の汚れやほこりを落とします。洗い終わったら、乾いたふきんで水分を拭き取りましょう。'),
array('step','02','mb0','中華鍋を<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけて、空焼きを行います。やけどを防ぐために、鍋の持ち手はふきんで包んだ上から持つようにしましょう。'),
array('step','03','mb0','白い煙が出てきたら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にします。'),
array('step','04','mb0','表面の色が青白く変わったら、さび止め加工を焼き終えたサインです。中華鍋を傾けて、フチの部分も同様に強火で焼いていきます。'),
array('step','05','mb3','全体を焼き切ったら、火から下ろして冷ましましょう。温度が下がったら、再度中性洗剤とスポンジで鍋を洗い流します。これで空焼きの完了です。'),

// （小見出し）
array ('ttl_m','mb0','油ならし'),

array('step','06','mb0','空焼きが終わったら、油ならしを行います。空焼きのあとに油ならしをすることで、鍋の表面に油の膜を張って、食材の焦げ付きを防ぐことができます。<br>
まず、水気を拭き取った鍋にお玉1杯分のサラダ油をなじませて、中火で加熱してください。'),
array('step','07','mb0','鍋全体にしっかり油をなじませたら、余分な油を捨てます。'),
array('step','08','mb3','<a href="'.$base_url.'/magazine/article/recipe-technic03.php" class="recipe-design__link">皮</a>や茎、外葉などのくず野菜を適量入れて、中火で軽く炒めます。くず野菜を入れて炒めることで、鍋に油膜を作りやすくなるほか、鉄特有の臭いを取ることができます。<br>
まんべんなく炒めたら火から下ろして、たわしを使って水洗いをしましょう。'),


// ■Check
array ('chk-st'),
array ('ttl4','mb2','油ならし後は洗剤で洗わない！'),
array ('free','mb0','油ならしの後は、絶対に洗剤を使わず、たわしやささら（竹や木の棒を束ねた洗浄道具）などで洗うようにしよう！<br>
洗剤で洗うと、せっかくコーティングした油が落ちてしまって、油ならしの作業が台無しになってしまうんだ。もし間違って洗剤を使った場合は、油ならしの工程を再度行わなくちゃいけなくなるぞ！'),
array ('chk-end'),

array('step','09','mb3','しっかりと水気を拭き取ったら、サラダ油をなじませたキッチンペーパーで表面を拭きます。これで、初めて使うときの準備は完了です。'),


// （大見出し2）
array ('ttl_l','mb0','中華鍋のお手入れ方法'),

// （本文2）
array ('text','mb2','鉄製の中華鍋を長く使い続けるには、正しい方法でお手入れすることが大事です。使った後きちんとお手入れすることで、食材がこびりつきにくく、より使いやすい鍋に育っていきます。さっそく手順をご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','10','mb0','中華鍋を使用した後は、お湯で流しながらたわしやささらで洗いましょう。さびの原因になるので、洗剤は使わないようにしてください。<br>
たわしやささらでこすることで、洗剤を使わなくても、鍋にこびりついた汚れや塩分を落とすことができます。'),
array('step','11','mb3','洗い終わったら、火にかけて水分を飛ばします。その後、サラダ油をなじませたキッチンペーパーで表面を拭きます。これで使用後のお手入れは完了です。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ひどい油汚れや焦げを落とす方法'),
array('text','mb2','中華鍋は、長く使っているうちに油汚れや焦げが蓄積されることがあります。通常のお手入れでどうしても落ちない場合は、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を使って油汚れや焦げを落とす方法がおすすめです。'),
array('text','mb0','まず、鍋に塩をひとつかみ分入れて、火にかけます。鍋が十分に温まったら、鍋を揺らして塩がまんべんなく行きわたるようにしてください。次に、畳んだふきんを使って塩を鍋にこすり付けます。手が熱くならない程度に厚みがあるふきんを使いましょう。10秒くらいこすったら、鍋の塩を捨てて水洗いしてください。仕上げに、サラダ油をなじませたキッチンペーパーで表面を拭いて完了です。<br>
この作業は鍋が熱い状態で行うので、やけどしないように十分に注意してください。'),
array ('plus-end'),

);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','空焼きも油ならしもしたから、さっそくチャーハンを作るぞ～！'),

//コウちゃん　喜ぶ
array ('ko','03','わ～い、ちゃーはんだ～'),

//ママ　通常
array ('mama','01','パパ、中華鍋を振るのが様になってるね！'),

//フラッキー　通常
array ('fl','01','使い終わった中華鍋は、洗剤を使わないでお湯で洗うんだぞ！'),

//マサキ　通常
array ('papa','01','OK！<br>これからどんどん中華鍋を育てていくからね～♪'),

//フラッキー　通常
array ('fl','01','いいぞ！この調子で、マサキのお料理力も育てていこう！'),


);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

?>
<?php
	//関連記事
	$recommendrecipe = array (
	array	('recommend-recipe-st'),
	array ('recommend-recipe-id','15086'),
	array ('recommend-recipe-id','15088'),
	array ('recommend-recipe-id','15085'),
	array ('recommend-recipe-end')

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
