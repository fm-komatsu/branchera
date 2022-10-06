<?php
//base
include( "../../function.php" );
$content = get_id_data( '15098' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「いんげんのゆで方」を動画とテキストで解説。いんげんを美味しく、色よくゆでるための手順とコツをご紹介します。筋の取り方や板ずりの方法、保存方法なども詳しく解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '98';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'OeofMKmcDVI';

//導入文
$introTxt = '第98回は、「いんげんのゆで方」です。いんげんを美味しくゆでるには、正しく下ごしらえすることが大切です。簡単で美味しく、色鮮やかにゆでるコツや保存方法などをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // コウちゃん　通常
  array ('ko','01','まま、なにつくるの～'),

  // ママ　通常
  array ('mama','01','いんげんのごま和えだよ！'),

  // コウちゃん　通常
  array ('ko','01','きょうはいんげん、ふにゃふにゃじゃないー？'),

  // ママ　困る
  array ('mama','02','はっ、そういえば…前に作ったとき、ゆですぎて美味しくできなかったんだった！また失敗したらどうしよう〜！'),

  // フラッキー　通常
  array ('fl','01','まあ落ち着け！ゆで時間さえ気をつければ、いんげんを上手にゆでるのは簡単だ！今日は、基本のいんげんのゆで方を教えてやるぜっ！'),

  // ママ　通常
  array ('mama','01','フラッキー、ありがとう！今日は美味しくゆでられるように頑張るぞ！'),


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
  array('ttl_l','mb0','基本のいんげんのゆで方'),

//  （本文1）
  array('text','mb3','鮮やかな緑色が映えるいんげんは、お料理にも大活躍！いんげんは、しっかり塩を入れて正しい時間でゆでると、色よく味わいも深くなります。さっそく、手順をご紹介しましょう。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ( 'mtr','いんげん','100g'),
array ( 'mtr','塩','小さじ1'),
array ( 'mtr','水','500ml'),
array ( 'mtr','冷水','（分量外）'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','いんげんは洗っておきます。いんげんのヘタの先端を、筋がある方向に折ります。ヘタをそのままゆっくり引っ張り、筋を取りましょう。'),
array('step','02','mb3','いんげんの上下を逆にして持ち、同じように筋を取ります。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','いんげんに筋がない場合は？'),
array('text','mb0','最近のいんげんには、筋がない場合も多いぞ。いんげんに筋がない場合は、筋取りをしなくても大丈夫だぜ！ヘタを5mm程度切り落として、次の手順に進もう！'),
array('chk-end'),

array('step','03','mb0','鍋やフライパンに水を入れて加熱し、沸騰させます。'),
array('step','04','mb3','鍋に塩といんげんを入れて、約2分ゆでてください。歯ごたえを残すため、長くゆで過ぎないように注意しましょう。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','より色鮮やかにゆでたいときは「板ずり」をしよう！'),
array('text','mb2','板ずりとは、塩を使った野菜の下ごしらえ方法だ。ゆでる前に板ずりしておくと、いんげんに生えている細かい毛を取り除くことができるぞ。そして、より色鮮やかに仕上がり、下味にもなるんだ！'),
array('text','mb2','板ずりは、いんげんのヘタと筋を取った後に行うぞ。まずまな板にいんげんを並べて、塩を振りかけよう。次に手先を使って、いんげんをまな板の上でコロコロと転がしたら完了だ！ゆでるときはいんげんに塩が付いたままでOK。その代わり、鍋には塩を入れなくていいぜ！より色鮮やかに仕上げたいときは、ぜひ試してみてくれ。'),
array('text','mb0','ちなみに、<a href="'.$base_url.'/magazine/article/recipe-technic69.php" class="recipe-design__link">オクラ</a>もいんげんと同様に、板ずりすると細かい毛を取り除けるぞ！'),
array('chk-end'),

array('step','05','mb3','ゆで上がったら、冷水にさらして粗熱を取りましょう。冷水にさらすことで、色を保ちやすくなります。最後にキッチンペーパーで水気を拭き取ったら完了です。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','電子レンジでいんげんを加熱する方法'),
array('text','mb2','いんげんは、電子レンジで加熱して食べることもできます。少ない水量で加熱するため、栄養素が流れ出るのを防げますよ。'),
array('text','mb0','まずヘタと筋を取った後、軽く水にくぐらせましょう。次に耐熱皿にのせて、軽く塩をかけます。ラップをして、600wに設定した電子レンジで1分半程度加熱してください。加熱時間は、様子を見て調整しましょう。<br>ちょうどよいかたさになったら電子レンジから取り出して、ゆでる方法と同様に、冷水にさらします。こうすることで色を保ちやすくなります。最後にキッチンペーパーで水気を拭き取ったら完了です。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','いんげんの冷凍保存方法'),

// （本文2）
array('text','mb3','ゆでたいんげんは、生の状態よりも傷みやすくなります。長期間保存したい場合は、冷凍保存するのがおすすめ。ゆでた状態で冷凍すると、生のまま凍らせるよりも風味や栄養を保ちやすくなります。さっそく、手順をご紹介します。'),

// （小見出し）
array('ttl_m','','手順'),
array('free','mb0','<p class="mb2">まず、ゆでたいんげんをキッチンペーパーで拭き、水気をしっかり取ります。いんげん同士がなるべく重ならないようにファスナー付き保存袋に入れ、冷凍庫で保存しましょう。<br>保存期間の目安は、約1ヵ月です。</p>
<p class="mb3">加熱調理に使う場合は、解凍せず凍ったまま使ってOKです。サラダに使うときは、電子レンジの解凍モードで加熱するか、熱湯を回しかけてから使いましょう。</p>'),

// （大見出し3）
array('ttl_l','mb0','いんげんを使った人気レシピ'),

// （本文3）
array('text','mb3','おかずを彩り、使い勝手のよいいんげん。定番のごま和えとサラダのレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','いんげんのごま和え'),
array('textimg','06','right','いんげんのごま和え','mb2','定番のごま和えは、ゆでたいんげんがあればすぐに作ることができるお手軽メニューです。まずごまを炒ってから、<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">すり鉢</a>で軽くすります。そこに醤油と砂糖を加え、よく混ぜましょう。次にゆでたいんげんを食べやすい大きさに切り、すり鉢に加えてください。全体を和えたらできあがりです。'),

// （小見出し）
array('ttl_m','','にんじんといんげんのサラダ'),
array('text','mb0','ごま和えをアレンジしてサラダ風に仕上げたメニューです。<br>まず、ゆでたいんげんを食べやすい大きさに切ります。にんじんは<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にしておきましょう。<br>ボウルに、すりごま、マヨネーズ、砂糖、醤油を入れて混ぜ合わせます。そこにいんげん、にんじんを加えて、よく和えたらできあがりです。'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// コウちゃん　笑顔
array ('ko','03','いんげん、しゃきしゃきー！'),

// パパ　通常
array ('papa','01','食感がいいから、マヨネーズをつけるだけでも美味しいね♪'),

// ママ　通常
array ('mama','01','よかった～！フラッキーのおかげで失敗せず、ちょうどいいかたさにゆでられたわ！'),

// フラッキー　　褒める
array ('fl','03','今回は板ずりもしたから、より色鮮やかになったな！'),

// ママ　通常
array ('mama','01','彩りがいいから、お弁当や肉料理の付け合わせにもよさそう！さっそく、明日の<a href="'.$base_url.'/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>に入れようっと！'),
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
