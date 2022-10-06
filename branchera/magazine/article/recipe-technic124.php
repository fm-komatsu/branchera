<?php
//base
include( "../../function.php" );
$content = get_id_data( '15124' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「菜の花のゆで方・ゆで時間」を動画とテキストで解説。春の味覚・菜の花を美味しく仕上げるための、ゆで方のコツや適したゆで時間をご紹介します。菜の花の辛子和えやパスタなど、定番のメニューもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '124';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'UVas7xkryKA';

//導入文
$introTxt = '第124回は、菜の花のゆで方です。食卓を春らしく彩る、人気のレシピもご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ミエ　通常
array ('mama','01','だんだん春らしくなってきたから、今日のごはんは春の食材を取り入れよう！と思って、スーパーで菜の花を買って来たんだけど…'),

// フラッキー　通常
array ('fl','01','へえ〜菜の花か、独特の苦味が美味しいよな♪'),

// ミエ　困る
array ('mama','02','あっ、フラッキーいいところに！あのね、私も菜の花は大好きなんだけど、実は家でゆでたことがなくて…'),

// フラッキー　通常
array ('fl','01','ふむふむ。菜の花をより美味しく食べるには、ゆでる順番と時間がポイントなんだ！<br>ポイントをちゃんと押さえてゆでないと、かたくなったり、やわらかくなりすぎたりするんだよな〜'),

// ミエ　通常
array ('mama','01','なるほど！じゃあフラッキー、さっそく正しいゆで方を教えて！'),

// フラッキー　褒める
array ('fl','03','よし、それじゃあサクッといくぞー！'),

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
array ('ttl_l','mb0','美味しい菜の花のゆで方をマスター！'),

// （本文1）
array ('text','mb2','早春に出回り、食卓を春らしく彩る菜の花。鮮やかな色彩と歯ごたえを生かすために、ゆで過ぎに注意しながら<a href="'.$base_url.'/magazine/article/recipe-collect03.php" class="recipe-design__link">下ごしらえ</a>しましょう。'),

// （小見出し）
array ('ttl_m','mb0','菜の花の選び方'),
array ('text','mb2','新鮮な菜の花を選ぶには、花の有無と茎の状態をチェックします。具体的には、以下のポイントに気を付けて選ぶようにしましょう。'),

array ('ttl_s','mb0','花が咲いていないものを選ぶ'),
array ('text','mb2','花が咲いている菜の花は、えぐみが出やすいので避けましょう。つぼみが開いていないものを選んでください。'),

array ('ttl_s','mb0','茎の切り口がみずみずしく、芯まで緑色をしているものを選ぶ'),
array ('text','mb2','切り口がしなびていたり、茎に空洞があるのは古いものです。新鮮で色鮮やかなものを選ぶようにしましょう。'),

// （小見出し）
array ('ttl_m','mb1','菜の花のゆで方'),
array ('ttl_s','mb1','材料'),
array ('mtr-st'),
array ('mtr','菜の花','1束'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1杯'),
array ('mtr-end'),

array ('ttl_s','mb1','手順'),
array('step','01','mb0','菜の花の根元を1cm程度切って、水で洗います。'),
array('step','02','mb0','菜の花を葉の部分と茎の部分に切り分けます。'),
array('step','03','mb3','鍋に湯を沸かして塩を入れ、茎の部分だけ先に入れます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','先に茎をゆでよう！'),
array ('free','mb0','かたい茎の部分を先に入れて、30秒くらいゆでよう！効率よく火が通せるし、茎も葉もちょうどよいかたさにゆでることができるぞ！<br>茎が太い場合は様子を見て、茎のゆで時間を15〜30秒ほどのばしてもOK！'),
array ('chk-end'),

array('step','04','mb0','30秒ほどたって茎が少しやわらかくなったら、葉の部分も入れます。<br>さらに30秒ほどゆでましょう。'),
array('step','05','mb0','ざるにあげ、冷水を張ったボウルにさらしてから、水気をしっかり絞ります。'),
array('step','06','mb3','食べやすい長さに切って完了です。'),

// （小見出し）
array ('ttl_m','mb0','菜の花の保存方法'),
array ('text','mb3','葉がやわらかい菜の花はしおれやすいので、買ってきたらすぐに下ごしらえして保存するのがおすすめです。かためにゆでて、水気をしっかり絞ったらラップで包み、冷蔵または冷凍保存します。<br>保存期間の目安は、冷蔵で約3日、冷凍で約1ヵ月です。冷凍した菜の花は、自然解凍して、水気を絞って使いましょう。'),


// （大見出し2）
array ('ttl_l','mb0','菜の花を使った人気レシピ'),

// （本文2）
array ('text','mb2','独特のほろ苦さと、みずみずしさが特徴の菜の花。シンプルなおひたしから洋風の<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>まで、菜の花を使った春らしい人気レシピをご紹介します！'),

//（小見出し）
array ('ttl_m','mb1','菜の花と油揚げの煮浸し'),
array ('textimg','07','right','菜の花と油揚げの煮浸し','mb2','ジュワッと煮汁の染みた油揚げと、菜の花の相性が抜群の一品！鍋にだし汁、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin2" class="recipe-design__link">みりん</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を合わせて沸かします。油揚げは熱湯で油抜きをし、食べやすい大きさに切っておきましょう。下ごしらえした菜の花と油揚げを鍋に加え、弱めの<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で1分ほど煮たらできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','菜の花の辛子和え'),
array ('textimg','08','left','菜の花の辛子和え','mb2','菜の花のレシピの定番、辛子和え。下ごしらえした菜の花を、だし汁、みりん、醤油、練り辛子で和えるだけの手軽な一品です。辛子を抜けば普通のおひたしになります。合わせ調味料の代わりに、市販のめんつゆを使うと時短になりますよ。'),

//（小見出し）
array ('ttl_m','mb1','菜の花のペペロンチーノ'),
array ('textimg','09','right','菜の花のペペロンチーノ','mb0','菜の花のほろ苦い味わいと鮮やかな彩りを楽しめる、シンプルな<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>です。菜の花は食べやすい長さに切っておき、パスタのゆで上がり1〜2分前に茎から入れて一緒にゆでておきます。次に、フライパンにオリーブオイル、<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>のにんにく、赤唐辛子、ベーコンを入れて熱してください。香りが出たらゆで上がったパスタと菜の花を入れて和え、塩で味を調えて完成です。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','菜の花の辛子和え、できたよ〜！コウちゃんは、辛子なしで甘めのおひたしね♪'),
  
//マサキ　通常
array ('papa','01','わあ、春らしい食卓だなあ！このほろ苦さと歯ごたえが最高だね'),

//コウちゃん　喜ぶ
array ('ko','03','おいしい〜♪'),

//フラッキー　褒める
array ('fl','03','下ごしらえした菜の花は、ほかの葉物野菜と同じように幅広いレシピに使えるぞ<br>ツナマヨやごまと和えたり、スープに入れたり…気軽にいろいろ楽しんでくれよな！'),

//ミエ　通常
array ('mama','01','いつも使っている葉物野菜の代わりにするだけで、食卓が旬の雰囲気に変わるね♪<br>フラッキー、ありがとう！'),


);

//関連記事
$recommendrecipe = array (
  array	('recommend-recipe-st'),
  array ('recommend-recipe-id','15064'),
  array ('recommend-recipe-id','13003'),
  array ('recommend-recipe-id','15157'),
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
