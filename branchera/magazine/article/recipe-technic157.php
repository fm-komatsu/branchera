<?php
//base
include( "../../function.php" );
$content = get_id_data( '15157' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ほうれん草のゆで方」を動画とテキストで解説。やわらかい葉からかたい茎まで、均一にゆで上げるコツをご紹介！さらに、ゆでたほうれん草を活用した美味しいアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '157';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'sNQUecQ1uWE';

//導入文
$introTxt = '第157回は、「ほうれん草のゆで方」です。ほうれん草を美味しくゆでる方法を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','今日はほうれん草をたくさん買っちゃった！'),

//マサキ　通常
array ('papa','01','いいね～、栄養たっぷりの<a href="'.$base_url.'/magazine/article/recipe-collect03.php" class="recipe-design__link">野菜</a>だね'),

//ミエ　困る
array ('mama','02','でも、ほうれん草って、ゆでるといつもやわらかくなりすぎちゃう'),

//フラッキー　通常
array ('fl','01','それはゆで方の問題だ！葉から茎までほどよい食感に仕上げるコツがあるぞ！'),

//ミエ　通常
array ('mama','01','フラッキー、ほうれん草の美味しいゆで方をぜひ教えて！'),

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
array ('ttl_l','mb0','ほうれん草のゆで方'),

// （本文1）
array ('text','mb2','ほうれん草は、緑黄色野菜のなかでもカロテンやビタミン、鉄分を豊富に含む栄養価の高い野菜です。特にほうれん草の旬である11月～3月には、栄養価がピークを迎え、美味しさもアップします。ほうれん草の上手なゆで方を覚えて、さまざまなお料理に活用しましょう。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','ほうれん草','1袋分'),
array ('mtr','塩','小さじ1杯'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','根の先が汚れているまたは乾燥している場合は切ります。束がバラバラにならないような部分で切りましょう。<br>
1株ずつ、根元に1～2㎝の深さで、十字に切り込みを入れます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','十字に切り込みを入れる理由'),
array ('free','mb0','根元に十字に切り込みを入れると、洗いにくい根元の泥がすっきり落とせるんだ。さらに、かたい根元にも火が通りやすくなるぞ！'),
array ('chk-end'),

array('step','02','mb0','ボウルに水をはり、ためた水の中で、根元をよく洗います。ボウルの水を取り替えて、葉も洗います。'),
array('step','03','mb0','鍋にお湯を沸かし、沸騰したらスプーン1杯の<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を入れます。'),
array('step','04','mb3','葉の部分を手で持ち、茎の部分だけをお湯につけて<strong>30秒程度</strong>ゆでます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','輪ゴムを使うとゆでやすい！'),
array ('free','mb0','大量のほうれん草をゆでる場合は、根元を輪ゴムでまとめておくのがおすすめだ！バラバラにならないから、作業がしやすいぞ！'),
array ('chk-end'),

array('step','05','mb3','ほうれん草全体をお湯に入れ、箸で沈め、<strong>30秒程度</strong>ゆでます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','上手にゆでるコツは部位によってゆで時間を変えること！'),
array ('free','mb0','ほうれん草は茎と葉のかたさが違うよな？だからこそ、部位によってゆで時間を変えることが必要なんだ。やわらかい葉とかたい茎、それぞれのゆで時間を変えると、食感が均一になって美味しくなるぞ！'),
array ('chk-end'),

array('step','06','mb0','冷水をはったボウルに入れて、ほうれん草を冷まします。'),
array('step','07','mb2','ほうれん草の根元を揃えて束ね、縦にして水気を絞ります。'),

// （小見出し）
array ('ttl_m','mb1','醤油洗いの方法'),
array ('text','mb2','ほうれん草の定番メニューのおひたしを美味しく作るコツ、それが醤油洗いです。醤油洗いとは、ほうれん草全体に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を行きわたらせ、味をなじませること。<br>
醤油の塩分で余計な水分を出すことができるため、醤油の味が均等に行きわたります。'),

array('step','08','mb0','バットにゆでたほうれん草を並べ、<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1/2の醤油を振りかけます。'),
array('step','09','mb0','しっかり水気を絞ります。このときも、ほうれん草の根元を揃えて束ね、縦に持って絞ります。'),
array('step','10','mb3','食べやすい長さに切って完成です。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','より簡単に！電子レンジ・フライパンを使ったゆで方'),
array ('text','mb2','電子レンジを使うとお湯の準備がいらないので、時短につながります。耐熱ボウルに、ほうれん草を入れ、塩をまぶしラップをかけて加熱します。水に溶けやすいビタミンCが逃げにくいというメリットもあります。'),
array ('text','mb0','また、鍋の代わりに深めのフライパンを使えば、少量の水でゆでられます。ほうれん草を入れて30秒たったら裏返し、再び30秒ゆでたら、冷水に取り出します。フライパンでゆでると、お湯を沸かす時間を短縮できますよ。'),
array ('plus-end'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','離乳食に使う場合のゆで方は？'),
array ('text','mb2','ほうれん草は栄養豊富で<a href="'.$base_url.'/magazine/article/recipe-technic56.php" class="recipe-design__link">離乳食</a>に適した野菜です。初期・中期・後期の離乳食の場合は、大人が食べるときの倍のゆで時間で、やわらかくすることが大切です。'),
array ('text','mb2','初期：葉だけをくたくたになるまでゆでましょう。その後、冷水にさらして<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>をしっかり抜きます。細かく切ってからブレンダーにかけ、とろとろにして少しずつ食べさせます。'),
array ('text','mb2','中期：葉を同じくしっかりゆでたら、冷水にさらします。中期からは、<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にして与えます。'),
array ('text','mb0','後期：後期になると、ほうれん草のおひたしも食べられるようになります。葉と茎の部分をやわらかくなるまでゆで、小さく切ります。味付けは醤油を入れず、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>だけでもよいですよ。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','ほうれん草の保存方法'),

// （本文2）
array ('text','mb2','ほうれん草は常備しておくと、あと一品、副菜が欲しいときに役立つ野菜です。生のほうれん草とゆでたほうれん草、それぞれ保存方法をご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','生のほうれん草の場合'),
array ('text','mb2','生のほうれん草は湿ったキッチンペーパーに包み、ビニール袋へ入れて冷蔵庫で保存します。このとき、畑に生えていたときのように立てて保存すると、みずみずしさが長持ちしますよ。保存期間の目安は<strong>2～3日</strong>です。'),

//（小見出し）
array ('ttl_m','mb1','ゆでたほうれん草の場合'),
array ('text','mb2','ゆでたほうれん草は水気をしっかり切ってから1食分ずつラップに包み、ファスナー付き保存袋に入れて冷凍します。使う際は凍ったまま<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>や炒め物などに使えます。保存期間の目安は<strong>約1ヵ月</strong>です。'),

//（大見出し2）
array ('ttl_l','mb1','ほうれん草の人気のレシピ'),
array ('text','mb2','ほうれん草を使った簡単レシピをご紹介します。ぜひ作ってみてくださいね。'),

//（小見出し）
array ('ttl_m','mb1','ほうれん草とベーコンのクリームパスタ'),
array ('textimg','11','right','ほうれん草とベーコンのクリームパスタ','mb2','ゆでたほうれん草をカットした後、2cm幅に切ったベーコンと一緒に炒めます。薄力粉を加えて炒め、牛乳、塩を入れます。そこに、ゆでた<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>を入れて、黒こしょう、粉チーズをかけたらできあがり！'),

//（小見出し）
array ('ttl_m','mb1','ほうれん草のポタージュ'),
array ('textimg','12','left','ほうれん草のポタージュ','mb0','ほうれん草をゆでます。みじん切りにした玉ねぎと、1〜2cmの<a href="'.$base_url.'/magazine/article/recipe-technic131.php" class="recipe-design__link">角切り</a>にした<a href="'.$base_url.'/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>をバターで炒め、水、コンソメ、塩を入れて煮込みます。
煮込んだものを、ゆでたほうれん草と一緒にブレンダーやミキサーに入れて、なめらかになったら鍋に戻します。豆乳か牛乳を入れてもう一度煮て、黒こしょうで味をととのえたら完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('mama','01','おぉ、しゃきっとしたほうれん草のおひたし！まるでお店の味だね'),

//コウちゃん　喜ぶ
array ('ko','03','ぜんぜんにがくな～い'),

//ミエ　通常
array ('mama','01','お料理の腕がまた上がった気がする～♪'),

//フラッキー　褒める
array ('fl','03','冷凍保存しておけば、味噌汁やうどんの具材が欲しいときにすぐ使えるぞ'),

//ミエ　通常
array ('mama','01','便利だね！<br>明日は<a href="'.$base_url.'/magazine/article/recipe-technic149.php" class="recipe-design__link">ポタージュ</a>にもチャレンジしようかな～♪'),

//コウちゃん　喜ぶ
array ('ko','03','わ～い！こうちゃん、たべた～い'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15046'),
array ('recommend-recipe-id','15124'),
array ('recommend-recipe-id','15129'),
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
