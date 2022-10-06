<?php
//base
include( "../../function.php" );
$content = get_id_data( '15089' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「トマトソースの作り方」を動画とテキストで解説。本格的なトマトソースを、電子レンジを使って超簡単に作る時短レシピをご紹介します。また、パスタやオムライスなど、トマトソースと相性抜群な人気メニューもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '89';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'wvSiiaXw6AE';

//導入文
$introTxt = '第89回は、「電子レンジで超簡単！トマトソースの作り方」です。本格的なトマトソースの時短レシピをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // パパ　通常
  array ('papa','01','今日はゆっくり晩御飯が作れそうだな〜！コウちゃん、何が食べたい？'),

  // コウちゃん　通常
  array ('ko','01','ぱすた～！とまとのぱすた～！'),

  // パパ　困り顔
  array ('papa','02','トマトか～。困ったな、出来合いのトマトソースは切らしているんだよな…'),

  // フラッキー　通常
  array ('fl','01','トマトソースなら、電子レンジで簡単に手作りできるぞ！'),

  // パパ　驚く
  array ('papa','03','ええ！レンジで～！？'),

  // フラッキー　通常
  array ('fl','01','ああ！材料を耐熱ボウルに入れて、レンジでチンするだけさ！<br>コウちゃんも大喜びの、美味し～いトマトソースの作り方を教えてやるぜ！')


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
  array('ttl_l','mb0','レンジでできる簡単トマトソースの作り方'),

//  （本文1）
  array('text','mb3','パスタやピザ、ロールキャベツを始め、幅広いメニューに使えるトマトソース。フレッシュトマトで手作りもよいですが、ちょっと時間がかかります。しかし電子レンジを使えば、美味しい本格的なパスタソースが手早く簡単に作れますよ。早速作り方をご紹介しましょう。'),

  // （小見出し）
  array('ttl_m','mb3','材料'),
  array ('mtr-st'),
  array ( 'mtr','ホールトマト缶','1缶'),
  array ( 'mtr','玉ねぎ（みじん切り）','1/2個'),
  array ( 'mtr','おろしにんにく','小さじ1'),
  array ( 'mtr','塩','小さじ1/2'),
  array ( 'mtr','オリーブオイル','大さじ3'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m','mb3','手順'),
  array('step','01','mb0','全ての材料を、耐熱ボウルに入れて混ぜます。<br>ふんわりとラップをしたら、600Wに設定した電子レンジで3分加熱してください。'),
  array('step','02','mb0','加熱が終わったら、トマトを潰しながら混ぜます。'),
  array('step','03','mb3','全体が均一に混ざったら、ラップをせずに電子レンジ（600W）で4分加熱しましょう。'),



  // ■Check
  array('chk-st'),
  array('ttl4','mb0','仕上げはラップをせずに加熱！'),
  array('free','mb0','<p class="mb2">耐熱ボウルにラップをするのは最初だけ。2回目の加熱からは、ラップをしないで加熱するぞ。こうすることで、程よく水分が抜けてソースが濃縮されるんだ！</p>
  <p>ちなみに、ラップを外すことでソースがはねる可能性があるから、耐熱ボウルはソースの量に対して、一回り大きなサイズを選ぶのがおすすめだぜ！このレシピの量なら、直径18cm程度でOKだ！</p>'),
  array('chk-end'),

  array('step','04','mb3','加熱が終わったら、全体を軽く混ぜます。<br>再びラップをせずに、電子レンジ（600W）で3分加熱します。全体を混ぜたら完成です。'),



  // ■Plus1
  array ('plus-st'),
  array('plus-ttl','mb0','レンジを使わない場合の作り方'),
  array('free','mb0','<p class="mb2">時間に余裕があるときは、電子レンジを使わずに、煮込んでトマトソースを作るのもおすすめです。レンジでも美味しいトマトソースが作れますが、煮込むとより濃厚な味わいになりますよ。<br>まず、フライパンにオリーブオイルとにんにく（みじん切り）を入れて弱火にかけます。香りが出てきたら、<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切りにした玉ねぎ</a>を加えましょう。甘みが出るまで中火で炒めたら、ホールトマト（1缶分）を加えて潰しながら混ぜます。ローリエやオレガノなどのハーブを加えて、蓋をせずに7～8分中火で煮込んでください。最後に塩で味を調えたら完成です。</p>
  <p>トマトホール缶がない場合は、<a href="'.$base_url.'/magazine/article/recipe-technic74.php" class="recipe-design__link">生のトマト</a>やトマトジュースを使って作れます。その場合は、水分が程よく抜けるまで、じっくり時間をかけて煮込んでくださいね。</p>'),
  array ('plus-end'),

  // ■Plus1
  array ('plus-st'),
  array('plus-ttl','mb0','トマトソースの保存方法'),
  array('free','mb0','<p class="mb2">余ったトマトソースは、すぐに使うときには冷蔵で保存しましょう。2～3日間保存できます。<br>長期間保存したい場合は、冷凍保存がおすすめです。1回分ごとに小分けにして、ファスナー付き保存袋に入れて保存しましょう。1ヵ月以内を目安に使い切ってください。</p>
  <p>加熱調理するスープ類や煮込み料理に使用する際には、冷凍の状態のまま使ってください。料理にかけて使う場合は、電子レンジで2～3分加熱して、解凍してから使いましょう。</p>'),
  array ('plus-end'),


  // （大見出し2）
  array('ttl_l','mb0','トマトソースを使った人気レシピ'),

  // （本文2）
  array('text','mb3','あらかじめトマトソースが作ってあれば、いろいろな料理に使用して楽しめます。さらに、調理時間の短縮にもつながりますよ。トマトソースを使った人気レシピをご紹介します。'),

  // （小見出し）
  array('ttl_m','mb3','トマトソースパスタ'),
  array('textimg','05','right','トマトソースパスタ','mb2','イタリアンの定番であるトマトソースパスタも、基本のトマトソースがあれば簡単に作れます。ベーコンやソーセージなどお好みの食材を、オリーブオイルで炒めます。そこへトマトソースを加えて、さらに加熱します。ゆでたパスタを入れて、トマトソースとよく混ぜ合わせたら完成です。お好みで粉チーズを振りかけて召し上がれ！'),

  // （小見出し）
  array('ttl_m','mb3','オムライス'),
  array('textimg','06','left','オムライス','mb2','いつものオムライスも、ケチャップではなくトマトソースをかけると、本格的な味わいに。<br>できあがったオムライスの上に、加熱したトマトソースをかけたら完成です。<br>もちろん、オムレツにかけても美味しくいただけますよ。'),

  // （小見出し）
  array('ttl_m','mb3','ハンバーグ'),
  array('textimg','07','right','ハンバーグ','mb2','トマトソースはハンバーグのソースとしても使えます。焼き上がったハンバーグに、加熱したトマトソースをかけたら完成です。きのこやチーズを加えても美味しく食べられますよ。'),

  // （小見出し）
  array('ttl_m','mb3','トマトソースのピザ'),
  array('textimg','08','left','トマトソースのピザ','mb0','トマトソースと市販のピザ生地があれば、ピザも簡単に作ることができます。<br>全体にトマトソースを塗ったピザ生地に、ピザ用チーズをのせます。そこにハムやピーマン、玉ねぎ、むきえび、コーンなど、お好みの具をのせましょう。200℃のオーブンで7～8分焼いたら完成です。'),
  );



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
  // コウちゃん　喜ぶ
array ('ko','03','とまとぱすた！おいし～！おいし～！'),

// ママ　通常
array ('mama','01','このパスタ、本当に美味しいわ～！本格的な味よ！'),

// パパ　通常
array ('papa','01','ふっふっふ、電子レンジで簡単に作ったとは思えないだろ？'),

// フラッキー　褒める
array ('fl','03','材料を混ぜて電子レンジに入れるだけだから、初心者でも簡単だろ？<br>時間も短縮できるから忙しい人にもおすすめだぞ！'),

// パパ　通常
array ('papa','01','ありがとう、フラッキー！<br>よ～し、次はピザに挑戦しよう！'),
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
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
