<?php
//base
include( "../../function.php" );
$content = get_id_data( '15152' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「角煮のレシピ」を動画とテキストで解説。甘辛い味付けと、ホロホロほぐれる柔らかい食感で人気の角煮の作り方を伝授！チャーハンやルーローハンなど、角煮を使ったアレンジレシピもご紹介します。';
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
$currentNumber = '152';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'fSTXjQ-KEZw';

//導入文
$introTxt = '第152回は、「角煮のレシピ」です。ちょっとした集まりのときにも重宝する角煮の作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','今日はおうちで映画会！<br>
せっかくだから、いつもより特別感のあるレシピを一緒に作ろうよ！'),

//マサキ　通常
array ('papa','01','いいね！豚の角煮なんてどうかな～<br>
やわらかくて、コウちゃんも喜びそう'),

//ミエ　困る
array ('mama','02','でも、角煮っておうちで作っても美味しくとろとろにできるのかな<br>
圧力鍋も持ってないし...'),

//フラッキー　通常
array ('fl','01','2人とも、俺に任せろ！圧力鍋がなくてもやわらかく美味しく作れる方法を教えるぜ！'),

//マサキ　通常
array ('papa','01','フラッキー、ありがとう！早速挑戦だ！'),

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
array ('ttl_l','mb0','角煮のレシピ・基本の作り方'),

// （本文1）
array ('text','mb2','豚バラ肉を<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">調味料</a>や香味野菜と一緒に煮た豚の角煮。甘辛い味付けと、口の中でほろほろとほぐれるやわらかさが人気の一品です。'),

// （小見出し）
array ('ttl_m','mb1','材料（2～3人分）'),
array ('mtr-st'),
array ('mtr','豚バラブロック肉','600g'),
array ('mtr','生姜','1かけ分'),
array ('mtr','ゆで卵','4個'),
array ('mtr','水','400ml'),
array ('mtr','醤油','大さじ5'),
array ('mtr','酒','大さじ5'),
array ('mtr','きび砂糖','大さじ2'),
array ('mtr','練りがらし','好みで適量'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','豚バラ肉は5cm幅に<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">切ります</a>。'),
array('step','02','mb0','鍋にたっぷりの水と豚バラ肉を入れ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にかけます。'),
array('step','03','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>を取ります。'),
array('step','04','mb3','沸騰したら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にして、厚手のキッチンペーパーで落とし蓋をして、<strong>2時間</strong>ゆでます'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','落とし蓋をして煮るのが鉄則！'),
array ('free','mb0','落とし蓋をすると、熱がムラなく全体に行き渡るぞ！'),
array ('chk-end'),

array('step','05','mb0','竹串がすっと通るやわらかさになったら、火を止め、蓋をして<strong>30分</strong>蒸らします。'),
array('step','06','mb3','豚肉を取り出して流水でやさしく洗います。鍋も洗います。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ゆで汁はスープに活用しよう！'),
array ('free','mb0','豚肉をゆでたときのお湯は捨てないようにしよう！煮汁には豚肉のエキスや栄養が溶け出しているから、調味料と野菜を加えれば美味しいスープになるぞ！<br>
脂が気になる場合は、ゆで汁を一度冷まして、表面に白く固まった脂を取り除こう。'),
array ('chk-end'),

array('step','07','mb0','水、醤油、酒、きび砂糖を鍋に入れ、豚肉、<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">生姜</a>を加えて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。沸騰したら弱火にし、厚手のキッチンペーパーで落とし蓋をして<strong>30分</strong>煮ます。'),
array('step','08','mb3','火を止め、<a href="'.$base_url.'/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>を入れます。<br>落とし蓋をしたまま、さらに蓋をして冷まします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ひと晩置くと、味がなじむぞ！'),
array ('free','mb0','煮物は冷めていくときに味がなじむんだ。角煮はできあがってすぐ食べても美味しいが、さらに美味しくするには、ひと晩寝かせておくといいぞ。味がしっかりなじんで、いっそう美味しい角煮になるぜ！'),
array ('chk-end'),

array('step','09','mb0','角煮が冷めて味がなじんだら、食べる前に弱火で温め直します。冷めてからしばらく時間がたっての温め直しの場合は、落とし蓋は必要ありません。'),
array('step','10','mb3','器に盛って、練りがらしを添えたら完成です。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','角煮を簡単、時短で作る方法'),
array ('free','mb2','角煮は長時間煮込む料理ですが、簡単に、しかも時短で作ることもできます。圧力鍋、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">炊飯器</a>、電子レンジで角煮を作る方法をご紹介します。'),
array ('ttl_s','mb0','圧力鍋で作る方法'),
array ('free','mb2','圧力鍋に水、豚肉を入れて蓋をロックし、高圧にセットして強火にかけます。ピンが上がったら<strong>20分</strong>加圧し、急冷します。<br>
豚肉を流水で洗い、鍋もきれいにしたら、肉、生姜と調味料を入れて蓋をロックし、高圧にセットして強火にかけます。ピンが上がったら、<strong>10分</strong>ほど加圧します。火を止めてピンが下がったら、蓋を取り、アクと脂を取り除きます。煮汁が1/3程度になるまで煮詰めたら完成です。'),
array ('ttl_s','mb0','炊飯器で作る方法'),
array ('free','mb0','ぶつ切りにした豚肉をフライパンで焼き、先に旨みを閉じ込めておきます。炊飯器に豚肉と水、生姜を入れて炊きます。炊けたら生姜を取り除き、調味料を入れ、もう一度通常モードで炊飯すればできあがりです。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','角煮のアレンジレシピ'),

// （本文2）
array ('text','mb2','余った角煮をリメイクすれば、別のメニューに生まれ変わります。人気のアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','角煮の簡単チャーハン'),
array ('textimg','11','right','角煮の簡単チャーハン','mb2','角煮を使えば、一味違った<a href="'.$base_url.'/magazine/article/recipe-technic86.php" class="recipe-design__link">チャーハン</a>ができますよ。余った角煮を小さく刻み、レンジで温めます。フライパンで半熟の<a href="'.$base_url.'/magazine/article/recipe-collect02.php" class="recipe-design__link">スクランブルエッグ</a>を作り、取り出します。フライパンに小口切りした<a href="'.$base_url.'/magazine/article/recipe-technic36.php" class="recipe-design__link">ねぎ</a>、角煮、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>を入れて炒めます。<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>を戻し、塩、こしょう、鶏がらスープを入れて炒め、煮汁で味をととのえて完成です。'),

//（小見出し）
array ('ttl_m','mb1','角煮のおでん'),
array ('textimg','12','left','角煮のおでん','mb2','角煮の煮汁で作るおでんです。<a href="'.$base_url.'/magazine/article/recipe02.php" class="recipe-design__link">大根</a>を食べやすい大きさに切り、レンジで温めておきます。角煮の煮汁のなかへ大根とゆで卵を入れて煮込みます。大根が色づいて味がしみたら、器に盛り、レンジで温めた角煮を添えればできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','ルーローハン'),
array ('textimg','13','right','ルーローハン','mb0','角煮を使った台湾で人気の丼です。残った角煮を食べやすい形に刻みます。戻した<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">干ししいたけ</a>、<a href="'.$base_url.'/magazine/article/recipe-technic77.php" class="recipe-design__link">たけのこ</a>を1cm角に切り、刻んだ角煮と一緒に炒め、角煮の煮汁で煮詰めます。丼にごはんを盛り、煮詰めた具材とゆで卵、炒めたちんげん菜をのせて完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//フマサキ　通常
array ('papa','01','ハードル高いと思ってたけど、煮込んでいる間は映画を見ながら作れちゃった！'),

//ミエ　通常
array ('mama','01','おっ、箸でほぐれる～♪<br>
やわらかくて甘辛くて、定食屋さんの味！'),

//コウちゃん　喜ぶ
array ('ko','03','おいしいね～、このおにく'),

//フラッキー　通常
array ('fl','01','じっくり時間をかけて煮込むから、ここまでやわらかくなるんだぜ！<br>
どうしても時間がないときは、臨機応変に時短レシピで作ればいいぞ！'),

//フマサキ　通常
array ('papa','01','簡単でしかも美味しい角煮！これからもいっぱい作っちゃおうっと！'),

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
