<?php
//base
include( "../../function.php" );
$content = get_id_data( '15107' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ピーマンの肉詰めの作り方」を動画とテキストで解説。肉だねがはがれないようにするコツや、簡単なソースのアレンジレシピなども併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '107';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '107';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'U3ene-NbJnA';

//導入文
$introTxt = '第107回は、「はがれない！ピーマンの肉詰めの作り方」です。調理しているうちに、肉だねがはがれてしまいやすいピーマンの肉詰め。失敗せずに上手に作る方法をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ミエ　困る
array ( 'mama','02','夕飯に作ったピーマンの肉詰め、肉だねとピーマンがバラバラになっちゃった…<br>途中まで上手に作れていたのに～！'),

// コウちゃん　通常
array ( 'ko','01','おにくとぴーまん、ばらばら～'),

// マサキ　通常
array ( 'papa','01','だけど、味は美味しかったよ！'),

// ミエ　困る
array ( 'mama','02','でも、明日の<a href="'.$base_url.'/magazine/article/recipe-technic47.php" class="recipe-design__link">お弁当</a>には入れられないな…'),

// フラッキー　通常
array ( 'fl','01','はがれないピーマンの肉詰めを作るにはコツがいるんだ！俺が教えてやるから、そう落ち込むな！'),

// ミエ　通常
array ( 'mama','01','うう…フラッキーありがとう！さっそく教えて〜！')

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

// （大見出し1）
array ('ttl_l','mb0','ピーマンの肉詰めの作り方'),

// （本文1）
array ('text','mb2','お弁当のおかずとしても人気のピーマンの肉詰め。しかし、焼いているうちに肉だねがピーマンからはがれてしまった…という経験がある方もいるのではないでしょうか？<br>そこで今回は、肉だねがはがれない、ピーマンの肉詰めの作り方についてご紹介します。'),

// （小見出し）
array ('ttl_m','mb0','材料（2人分）'),
array ('mtr-st'),
array ('mtr','ピーマン','3個'),
array ('mtr','薄力粉','大さじ1'),
array ('mtr','合いびき肉','150g'),
array ('mtr','玉ねぎ','1/4個'),
array ('mtr','パン粉','大さじ2'),
array ('mtr','牛乳','大さじ1'),
array ('mtr','塩','小さじ1/4'),
array ('mtr','こしょう','少々'),
array ('mtr','サラダ油','小さじ1/2'),
array ('mtr-end'),
array ('ttl5','mb0','＜ソース＞'),
array ('mtr-st'),
array ('mtr','ケチャップ','大さじ1'),
array ('mtr','中濃ソース','大さじ1'),
array ('mtr','醤油','小さじ1'),
array ('mtr','水','大さじ1'),
array ('mtr-end'),
// （小見出し）
array ('ttl_m','mb0','手順'),

array ('step','01','mb0','ピーマンは、洗ってから縦半分に切ります。次に、ヘタを落とさずに種とワタを取り除きます。'),
array ('step','02','mb0','バットにピーマンを並べて、茶こしで薄力粉をふっておきます。'),
array ('step','03','mb0','玉ねぎを<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。'),
array ('step','04','mb0','ボウルに、合いびき肉、みじん切りにした玉ねぎ、パン粉、牛乳、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、こしょうを加えて、しっかりと練り混ぜます。'),
array ('step','05','mb0','ピーマンに、肉だねをすき間なく詰めます。詰めたときにこんもりするくらいに詰めましょう。'),
array ('step','06','mb3','肉だねをピーマンに詰め終わったら、バットに残った薄力粉を表面にまぶします。'),
// ■Check
array ('chk-st'),
array ('ttl4','mb0','肉だねをはがれないようにする方法は？'),
array ('text','mb2','肉だね部分がはがれる理由のひとつは、加熱によって肉が縮むこと。肉が縮むことでピーマンとの間に隙間ができ、はがれやすくなってしまうんだ！だから仕込みの段階で、肉が縮んでもはがれないように工夫をしておくといいぞ！'),

array ('text','mb0','まずやってほしいのは、<strong>ピーマンに小麦粉や<a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>などの粉をふっておく</strong>こと。この粉に水分と熱が加わると、肉とピーマンをくっつける“のり”のような働きをしてくれるぞ！
また、肉だねを詰めるときにも工夫が必要だ。肉が多少縮んでもすき間ができないように、<strong>ピーマンの隅々まで肉だねを詰め込む</strong>んだ！ピーマンのヘタを落とさずに使うことで、肉がピーマンに収まりやすくなるぞ。そして、山のようにこんもりと詰めるのがポイントだ。これでよりはがれにくくなるぞ！'),
array ('chk-end'),

array ('step','07','mb0','フライパンにサラダ油を入れて、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱します。フライパンが温まったら、肉の面を下にして、<strong>1分程度</strong>焼きましょう。'),
array ('step','08','mb0','肉詰めを裏返したらフライパンに蓋をして、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で<strong>5分程度</strong>蒸し焼きにします。'),
array ('step','09','mb0','フライパンの蓋を取ったら、肉詰めに竹串を刺して、焼き加減を確認します。透明な肉汁が出たら、火が通っています。'),
array ('step','10','mb0','ケチャップ、中濃ソース、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、水を加えて煮詰めます。'),
array ('step','11','mb3','ソースがとろりとするまで煮詰めたら完成です。'),


// Plus1
array ('plus-st'),
array('plus-ttl','mb0','しいたけの肉詰めをはがれないようにするには？'),
array ('text','mb0','ピーマンの肉詰めと同じく、肉だねを詰めて作るしいたけの肉詰め。しいたけの場合も、肉だねがはがれる原因はピーマンの肉詰めと同じ！ですので、「しいたけに粉をふっておく」「肉だねを隙間なく詰め込む」といった工夫をすることで、はがれにくく、きれいなしいたけの肉詰めに仕上げることができますよ。ぜひお試しください。'),
array ('plus-end'),

// （大見出し2）
array ('ttl_l','mb0','ピーマンの肉詰めにぴったり！たれのアレンジレシピ'),

// （本文2）
array ('text','mb3','同じピーマンの肉詰めでも、かけるたれに変化を加えることでバリエーションが広がります。いつもの味に飽きたときは、簡単に作れるたれでアレンジしてみてください！'),

// （小見出し）
array ('ttl_m','mb0','照り焼き風'),
array ('text','mb2','甘辛い照り焼き風のたれは、ピーマンとの相性抜群。まず、醤油、酒、みりん、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を合わせます。肉詰めを蒸し焼きにした後、たれを加えて、煮詰めれば完成です。お好みで白ごまや糸唐辛子などをのせるのもおすすめですよ。'),

// （小見出し）
array ('ttl_m','mb0','からし醤油味'),
array ('text','mb2','さっぱりとした和風の味わいになる、からし醤油味のたれ。肉詰めを蒸し焼きにして、食べる際に醤油とからしを添えたら完成です。爽やかな辛さが病みつきになりますよ。'),

// （小見出し）
array ('ttl_m','mb0','時短に！焼き肉のたれ'),
array ('text','mb0','時間のないときは、市販の焼き肉のたれをかけるだけでも美味しくいただけます。ピーマンが苦手なお子さまにもおすすめです。'),


);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ミエ　通常
array ( 'mama','01','フラッキーが教えてくれた通り作ったら、はがれずにきれいにできた！'),

// マサキ　通常
array ( 'papa','01','見た目はもちろんだけど、味もとっても美味しいよ！'),

// フラッキー　褒める
array ( 'fl','03','案外、コツを覚えれば簡単だろ？ちょっとひと手間かけるだけで、ちゃんときれいに作れるんだぜ！'),

// ミエ　通常
array ( 'mama','01','ありがとう、フラッキー！次は、しいたけや<a href="'.$base_url.'/magazine/article/recipe08.php" class="recipe-design__link">なす</a>の肉詰めも作ってみようかな～！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','13001'),
array ('recommend-recipe-id','15112'),
array ('recommend-recipe-id','15090'),
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
