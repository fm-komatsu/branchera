<?php
//base
include( "../../function.php" );
$content = get_id_data( '15154' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「圧力鍋の使い方」を動画とテキストで解説。おもり式とスプリング式の2つの特徴と、火加減や加圧時間、急冷のタイミングなどのポイントを伝授！カレーや角煮といった、圧力鍋で作る人気レシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '154';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'AiVfLvdkZ3k';

//導入文
$introTxt = '第154回は、「圧力鍋の使い方」です。短時間で美味しく料理ができる圧力鍋の使い方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','最近、圧力鍋を買ったから、今日は<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>の煮物を作ってみようかな'),

//フラッキー　通常
array ('fl','01','圧力鍋は時短で料理ができるし、かたいかぼちゃにも早く火が通るぞ！'),

//マサキ　通常
array ('papa','01','早速水をいっぱいに入れて...'),

//フラッキー　怒る
array ('fl','02','マサキ、ストップ！<br>圧力鍋にそんなに水を入れたら危険だぞ！'),
 
//マサキ　通常
array ('papa','01','えっ、そうなの？'),

//フラッキー　通常
array ('fl','01','しょうがないな～、俺が正しい圧力鍋の使い方を教えてやるぜ！'),

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
array ('ttl_l','mb0','圧力鍋の種類'),

// （本文1）
array ('text','mb2','時間がかかる<a href="'.$base_url.'/magazine/article/recipe19.php" class="recipe-design__link">煮込み料理</a>を、あっという間に調理できる圧力鍋。光熱費が節約できるだけでなく、料理の味が格段に美味しく仕上がるため人気です。'),
array ('text','mb2','加熱時間が短くなる理由は、鍋の中に圧力が生まれるから。一般的な鍋は蓋をしても蒸気が外に出てしまいますが、圧力鍋は密封することで空気や蒸気を閉じ込めて、鍋の中の圧力を高めます。圧力が高まるとすぐに沸騰するため、食材を火にかける時間が短くなるのです。'),
array ('text','mb2','そして、圧力鍋で煮込んだ料理が美味しい理由は、閉じ込めた水蒸気が鍋の中で活発に動き回って食材に染み込むから。食材がみずみずしい状態で加熱されるため、うまみを凝縮した美味しい料理に仕上がるのです。'),
array ('text','mb2','圧力鍋には2つの種類があるので、ご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb1','おもり式'),
array('step','01','mb0','鍋蓋の蒸気口におもりがついたタイプです。圧力がかかって蒸気が出始めると、蒸気の力でおもりが揺れ、「シュッシュッ」と音を出します。この音が出たら、圧力がかかったサイン。音が気になる、という人もいますが、鍋から目を離していても、火を弱めるタイミングを音で教えてくれるメリットがあります。'),

// （小見出し）
array ('ttl_m','mb1','スプリング式'),
array('step','02','mb3','鍋蓋の蒸気口にスプリングが入ったタイプで、ばねの力で圧力を調整します。圧力がかかると、表示ピンが上がるようになっています。「高圧」「低圧」と圧力を調整できるモデルが多いため、食材に合わせて圧力を細かく調整したい人に向いています。<br>また、おもり式のような音が出ないため、静かに調理ができるのが特徴ですが、鍋から目を離していると表示ピンが上がったかどうかを見落としてしまうことも。スプリング式を使う場合は目を離さないようにしましょう。'),

// （大見出し2）
array ('ttl_l','mb0','圧力鍋の使い方'),
array ('text','mb2','圧力鍋は使い方を間違えるとやけどすることもあるので、正しい使い方を知ってから、使い始めましょう。ここではスプリング式の圧力鍋をメインに、使い方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','03','mb3','材料を入れます。このとき、圧力鍋の規定量を超えないように注意しましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','規定量をしっかり守ってくれよな！'),
array ('free','mb2','圧力鍋に規定量以上の油やお酒を入れるのはNGだぞ！弾けて爆発する可能性があるんだ。圧力鍋の説明書に書かれている適量をオーバーしないように気を付けてくれよな。ちなみに重曹は少量でも爆発する可能性があるから、入れてはいけないぞ！'),
array ('free','mb0','それから、カレーやシチューのルーは食材を煮込んだ後に入れるんだぜ！ルーにはとろみがあるから、圧力鍋のノズルを塞いでしまう原因になるんだ。練り物や<a href="'.$base_url.'/magazine/article/recipe-technic38.php" class="recipe-design__link">餅</a>を圧力鍋で調理するのもNGだぞ！調理中に膨らんでノズルを塞ぐ可能性があるからな。'),
array ('chk-end'),

array('step','04','mb3','規定量の水を入れ、しっかり蓋をします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','加熱前に3つの注意点を確認しよう！'),
array ('free','mb0','1つ目は、加圧するとき鍋に規定量の水を入れること！水が多いと、圧力で鍋の蓋が開いてしまう可能性があるからな。2つ目は、空焚きをしないこと。鍋が傷んでしまうぞ。3つ目は、蒸気の出口であるノズルを塞がないこと。ノズルが塞がれると、異常な圧力がかかって爆発する可能性があるから注意してくれ！使う前にノズルが詰まっていないか確認しよう！'),
array ('chk-end'),

array('step','05','mb0','鍋底からはみ出ない程度の<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にかけて加熱します。'),
array('step','06','mb0','圧力鍋のピンが上がれば、鍋の中に圧力がかかっているサインです。'),
array('step','07','mb3','蒸気が止まったら、火力を下げます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','おもり式圧力鍋の火を弱めるタイミングは？'),
array ('free','mb0','スプリング式圧力鍋は、蒸気が止まったら火を弱めるのに対し、おもり式圧力鍋の場合は、蒸気が出ておもりが揺れ始めたタイミングで<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にするんだ！火を弱めるタイミングを忘れないようにしてくれよな。'),
array ('chk-end'),

array('step','08','mb0','タイマーをセットして、加圧時間を計ります。'),
array('step','09','mb0','加圧時間が終わったら、火を止めます。'),
array('step','10','mb3','圧力が下がるまで放置します。<br>急冷する場合は、鍋をシンクに置き、ステンレスの部分に水をかけます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','圧力を下げるには2つの方法がある！'),
array ('free','mb0','鍋の圧力を下げるには、自然放置と急冷の2つの方法があるんだ。自然放置は火を止めてそのまま放置する方法。急冷は、圧力鍋に水をかけて圧力を下げる方法だ。自然放置しておくと、余熱で中の食材が煮崩れしてしまうこともある。かぼちゃの煮物のように煮崩れしやすいメニューや、<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>や<a href="'.$base_url.'/magazine/article/recipe-technic95.php" class="recipe-design__link">枝豆</a>などゆで上げた後に余熱が必要ないものの場合は急冷するといいぞ。'),
array ('chk-end'),

array('step','11','mb3','ピンが完全に下がったら、蓋を開けます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','圧力が抜けていないときは蓋を開けない！'),
array ('free','mb0','圧力が抜けていない状態で蓋を開けるのはNG！蒸気が吹き出てやけどの原因になることがあるぞ。'),
array ('chk-end'),

array('step','12','mb3','調理完了です！'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','使った後のお手入れ方法'),
array ('text','mb0','普通の鍋と同様に中性洗剤で洗います。ノズル、ピンに欠けがないか確認しましょう。また、蒸気の出口に詰まりがある場合は、よく洗って詰まりを取り除くようにします。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','圧力鍋を使った人気レシピ'),

// （本文2）
array ('text','mb2','圧力鍋を使えば、いつもの料理が手早く、しかも何倍も美味しく仕上がります。圧力鍋で作る人気のレシピをお伝えします。'),

//（小見出し）
array ('ttl_m','mb1','チキンカレー'),
array ('textimg','13','right','チキンカレー','mb2','定番のチキン<a href="'.$base_url.'/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>です。<a href="'.$base_url.'/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>、にんじんを一口大に切り、玉ねぎは薄切りにします。圧力鍋に油を引き、一口大に切った鶏のもも肉を炒めます。野菜を加えて炒めたら、水を入れて蓋をし、強火にかけます。圧力がかかったら、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で5分加熱した後、火を止めます。圧力が下がったら蓋を開けてカレーのルーを加え、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で加熱します。ルーが溶けたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','肉じゃが'),
array ('textimg','14','left','肉じゃが','mb2','いつもの肉じゃがも、圧力鍋を使えば短時間でできます。じゃがいも、にんじん、玉ねぎを大きめに切り、<a href="'.$base_url.'/magazine/article/recipe-technic19.php" class="recipe-design__link">牛肉</a>は食べやすい大きさに切ります。圧力鍋に材料と<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">調味料</a>を入れます。火にかけ圧力がかかったら、弱火にして4～5分加熱し、火を止めます。圧力が抜けたら蓋を開け、混ぜ合わせれば完成です。'),

//（小見出し）
array ('ttl_m','mb1','スペアリブ'),
array ('textimg','15','right','スペアリブ','mb2','圧力鍋で簡単に、やわらかい<a href="'.$base_url.'/magazine/article/recipe22.php" class="recipe-design__link">スペアリブ</a>ができます。フライパンを熱して豚スペアリブの表面を軽く焼きます。圧力鍋に水、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">醤油</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">みりん</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">酒</a>、オイスターソース、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">砂糖</a>、にんにく、豚スペアリブを入れて蓋をします。中火にかけ、圧力がかかり蒸気が出たら弱火にし、8分間加熱し火を止めます。圧力が抜けたら蓋を開け、再び中火にかけ、照りが出るまで煮詰めたらできあがり！'),

//（小見出し）
array ('ttl_m','mb1','角煮'),
array ('textimg','16','left','角煮','mb0','時間がかかる豚の<a href="'.$base_url.'/magazine/article/recipe-technic152.php" class="recipe-design__link">角煮</a>も短時間でやわらかく仕上がります。豚肉、水、酒を圧力鍋に入れて蓋をし、中火で熱します。圧力がかかったら、弱火で20分加熱します。加圧後火を止め、粗熱が取れるまで放置します。豚肉とゆで汁を別々に取り、鍋を洗います。ゆでた豚肉、ゆで汁、<a href="'.$base_url.'/magazine/article/recipe-technic36.php" class="recipe-design__link">ねぎ</a>、<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">生姜</a>、みりん、醤油、酒を圧力鍋に入れ、圧力がかかったら、弱火で15分加熱します。再び粗熱が取れるまで放置したら完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//フマサキ　通常
array ('papa','01','すごい！あっという間に煮物ができちゃった！'),

//ミエ　通常
array ('mama','01','かぼちゃって火が通るまでに時間がかかるのに、こんなに早くできて魔法みたい！'),
 
//コウちゃん　喜ぶ
array ('ko','03','あまくて、ほくほく～♪'),
 
//フラッキー　通常
array ('fl','01','圧力鍋でロールキャベツもシチューも時短でできちゃうぞ！<br>
<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>だってすぐ炊けるんだ！'),

//フマサキ　驚く
array ('papa','03','えっ！炊飯もできるの！？<br>明日は圧力鍋でごはんを炊いてみよう！'),

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
