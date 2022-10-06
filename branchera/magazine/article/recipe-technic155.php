<?php
//base
include( "../../function.php" );
$content = get_id_data( '15155' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「温野菜のレシピ」を動画とテキストで解説。せいろをはじめ、フライパンや電子レンジで温野菜を美味しく作る方法をご紹介！さらに、バラエティ豊かな味わいを楽しめるドレッシングのレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '155';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'LOFt6haIWcE';

//導入文
$introTxt = '第155回は、寒い季節に人気の「温野菜のレシピ」です。野菜の栄養を逃さず美味しく調理する方法を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','野菜を食べたいけど、寒いから<a href="'.$base_url.'/magazine/article/recipe09.php" class="recipe-design__link">サラダ</a>じゃなく、温野菜にしようかな'),

//マサキ　通常
array ('papa','01','野菜をたっぷり食べられるからいいね～'),

//ミエ　困る
array ('mama','02','でも、野菜をゆでると水っぽくなっちゃって…どうすればいいのかなぁ'),

//フラッキー　通常
array ('fl','01','ミエ、ゆでずに温野菜を作る調理法があるぞ！'),

//ミエ　通常
array ('mama','01','えっ、本当？フラッキー、お願い、教えて～！'),

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
array ('ttl_l','mb0','温野菜の作り方'),

// （本文1）
array ('text','mb2','生野菜が食べにくい、寒い季節にうれしい温野菜。調理法には、ゆでるだけでなく、<a href="'.$base_url.'/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸す</a>方法があり、ゆでる方法に比べると栄養分の流出が少ないのが特長です。今回は、せいろ、フライパン、電子レンジを使った温野菜の作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（1人分）'),
array ('mtr-st'),
array ('mtr','にんじん','80g'),
array ('mtr','かぼちゃ','80g'),
array ('mtr','ブロッコリー','80g'),
array ('mtr','水',''),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','せいろの場合'),
array ('text','mb2','杉や竹、ひのきなどで作られたせいろ。せいろを使うと、たっぷりの蒸気でゆっくり温度を上昇させながら加熱するため、野菜のうまみを逃さず、ほっくりと仕上がります。せいろで調理する野菜には、<a href="'.$base_url.'/magazine/article/recipe-technic120.php" class="recipe-design__link">いも類</a>や<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>などがおすすめです。<br>
せいろは、数段重ねて蒸せば、一度にたくさんの料理を作ることもできる便利な道具です。正しくお手入れすれば、長く使えますよ。'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','かぼちゃは薄切りに、にんじんは<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>に、<a href="'.$base_url.'/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>は食べやすい大きさに<a href="'.$base_url.'/magazine/article/recipe-technic01.php" class="recipe-design__link">切ります</a>。'),
array('step','02','mb3','せいろにオーブンシートを敷き、切った野菜を並べます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','見映えのよさを意識して野菜を並べよう！'),
array ('free','mb0','せいろは蒸し終わった後、そのままテーブルに出せるおしゃれな<a href="'.$base_url.'/magazine/index_technic_cookware-seasoning.php" class="recipe-design__link">調理器具</a>。だから、きれいに野菜を盛り付けることをおすすめするぜ！見映えをよくするポイントは、色味の似た野菜を隣に置かないこと！それから、野菜は隙間なく詰めるといいぜ。'),
array ('chk-end'),

array('step','03','mb0','鍋でお湯を沸かします。'),
array('step','04','mb2','せいろを鍋に乗せ、強めの<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけて<strong>8分</strong>蒸したら、完成です。'),

// （小見出し）
array ('ttl_m','mb1','フライパンの場合'),
array ('text','mb2','たとえせいろを持っていなくても、フライパンがあれば温野菜を手軽に作れます。せいろよりは仕上がりの味が若干劣るものの、蒸気で加熱するため野菜がほっくりと美味しく仕上がります。<br>ただし、少量の水を使うため、栄養分が多少流出してしまいます。'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','05','mb0','フライパンに、<a href="'.$base_url.'/magazine/article/recipe-technic146.php" class="recipe-design__link">にんじん</a>、かぼちゃ、ブロッコリー、水(100ml)を入れます。'),
array('step','06','mb2','蓋をして、<strong>6分</strong>ほど中火で蒸したらできあがりです。'),

// （小見出し）
array ('ttl_m','mb1','電子レンジの場合'),
array ('text','mb2','電子レンジを使えば、温野菜が時短ででき、しかも洗い物が少なくて済みます。電子レンジは、少量の温野菜を作るときに向いています。一方で野菜の量が多いときは、加熱時間が長くなるため、電子レンジでの調理はおすすめできません。<br>
また、電子レンジは水分をマイクロ波で温める構造となっているため、パサつくことがあり、お使いの電子レンジによっては加熱ムラができることもあります。加熱にムラがあった場合は、一旦取り出してから野菜の向きを変えたり、混ぜ合わせたりした後、再加熱するとよいでしょう。'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','07','mb0','耐熱皿にかぼちゃ、にんじん、ブロッコリーを入れて、水<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1を振り入れます。'),
array('step','08','mb0','ふんわりとラップをします。'),
array('step','09','mb3','600Wに設定した電子レンジで<strong>5分</strong>加熱したら完成です。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','温野菜におすすめのほかの野菜'),
array ('text','mb0','かぼちゃやにんじん、ブロッコリーのほか、蒸すことでさらに美味しくなる野菜はたくさんあります。おすすめは、<a href="'.$base_url.'/magazine/article/recipe-technic109.php" class="recipe-design__link">れんこん</a>、<a href="'.$base_url.'/magazine/article/recipe-technic118.php" class="recipe-design__link">カリフラワー</a>、かぶ、大きく切ったキャベツなどです。お好みのものを試してくださいね。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','温野菜ソースのレシピ'),

// （本文2）
array ('text','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic145.php" class="recipe-design__link">ドレッシング</a>をかけるだけで美味しくいただける温野菜。けれどいつも同じドレッシングだと飽きてしまいますよね。そこで、ご紹介するのがソースのアレンジレシピです。ソースで味付けを変えれば、飽きることなく温野菜を楽しめます。'),

//（小見出し）
array ('ttl_m','mb1','バーニャカウダソース'),
array ('textimg','10','right','バーニャカウダソース','mb2','アンチョビとにんにくをベースにしたイタリア生まれの温かいソースです。まず、アンチョビを細かく刻みます。鍋を中火にかけ、オリーブオイルを入れて熱します。にんにくを<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にし、焦がさないように炒めアンチョビを加えます。鍋に水で溶いたコーンスターチと、<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">生クリーム</a>をそのまま加え、とろみが出たら完成です。'),

//（小見出し）
array ('ttl_m','mb1','トマトディップソース'),
array ('textimg','11','left','トマトディップソース','mb2','温野菜だけでなく、<a href="'.$base_url.'/magazine/article/recipe17.php" class="recipe-design__link">魚料理</a>にも使える<a href="'.$base_url.'/magazine/article/recipe-technic89.php" class="recipe-design__link">トマトソース</a>です。トマトは<a href="'.$base_url.'/magazine/article/recipe-technic74.php" class="recipe-design__link">皮をむき</a>、小さめにカットします。ボウルに、カットしたトマト、トマトケチャップ、オリーブオイル、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">砂糖、塩、こしょう</a>を入れて混ぜればできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','和風ヨーグルトソース'),
array ('textimg','12','right','和風ヨーグルトソース','mb2','和の食材、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>をベースにした和風のソースです。味噌に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、ヨーグルトを混ぜ、最後にごま油を加えて混ぜます。あっという間に、風味豊かな和風ソースの完成です。温野菜だけなく、<a href="'.$base_url.'/magazine/article/recipe-technic144.php" class="recipe-design__link">蒸した鶏のささみ</a>にもよく合いますよ。'),

//（小見出し）
array ('ttl_m','mb1','チーズソース'),
array ('textimg','13','left','チーズソース','mb0','チーズを温め、とろとろにしたソースです。耐熱容器にスライスチーズをちぎって入れ、牛乳を少々加えて、電子レンジで加熱します。一旦、取り出し、塩こしょうを振り、スプーンでよく混ぜ合わせます。再び電子レンジで温め、とろとろになったらできあがりです。チーズソースは<a href="'.$base_url.'/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>にも使えます。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//コウちゃん　喜ぶ
array ('ko','03','おやさい、ほくほくしてておいしい～♪'),

//ミエ　通常
array ('mama','01','せいろを使ったら、いつもよりずっと美味しくできたみたい！'),
 
//マサキ　通常
array ('papa','01','こんなに美味しいといくらでも食べられるな～'),
 
//フラッキー　通常
array ('fl','01','温野菜に適した野菜はいっぱいあるし、ソースのアレンジもたくさんあるぞ！<br>
明太子にマヨネーズと生クリームを合わせたソースも美味しいぞ～'),

//ミエ　通常
array ('mama','01','毎日野菜を食べるのが楽しみになるね！フラッキー、ありがとう！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','13003'),
array ('recommend-recipe-id','15120'),
array ('recommend-recipe-id','15126'),
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
