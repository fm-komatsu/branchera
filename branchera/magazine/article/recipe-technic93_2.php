<?php
//base
include( "../../function.php" );
$content = get_id_data( '15093' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「目玉焼きの作り方」を動画とテキストで解説。基本の作り方を中心に、黄身を半熟〜かために調整する方法、黄身が白身の中心に来るようにする方法など、より上手に焼くプロのテクニックをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '93';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'rxoximKutpc';

//導入文
$introTxt = '第93回は、「プロの技！きれいな目玉焼きの作り方」です。半熟からかためまで、お好みの焼き加減で目玉焼きを仕上げるコツをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // ママ　困る
  array ('mama','02','困ったわ～。朝食の目玉焼き、半熟トロトロにしたかったのに火が通り過ぎちゃった！'),

  // コウちゃん　通常
  array ('ko','01','こうちゃん、とろとろじゃなきゃやだ～！'),

  // ママ　困る
  array ('mama','02','焼き直すしかないか…でもまた失敗したらどうしよう～'),

  // フラッキー　通常
  array ('fl','01','おいおい、朝から目玉焼きで悪戦苦闘だな！<br>目玉焼きはポイントを押さえれば、簡単に焼き加減を調整できるぜ！'),

  // ママ　通常
  array ('mama','01','本当！？フラッキー、そのポイントを教えて～！'),

  // フラッキー　通常
  array ('fl','01','よし、分かった！上手に仕上がる目玉焼きの作り方を教えてやるぜ！')


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
  array('ttl_l','mb0','基本の目玉焼きの作り方'),

//  （本文1）
  array('text','mb3','焼くだけの簡単な料理と思われがちな目玉焼き。しかし、好みの焼き加減に仕上げるのは意外に難しいものです。<a href="'.$base_url.'/magazine/article/recipe-technic02.php" class="recipe-design__link">火加減</a>や時間など、今さら聞けないポイントを伝授。目玉焼きをプロのようにきれいに仕上げるコツをご紹介します。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ( 'mtr','卵','1個'),
array ( 'mtr','水','大さじ1/2'),
array ( 'mtr','サラダ油','適量'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb3','容器に卵を割り入れます。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','フライパンに直接卵を割り入れない！'),
array('free','mb0','<p class="mb2"><a href="'.$base_url.'/magazine/article/recipe-technic62.php" class="recipe-design__link">卵を割り入れる</a>ときは、一旦容器に入れてからフライパンに移すといいぞ！直接フライパンに割り入れると、黄身が崩れてしまうおそれがあるからな。</p><p class="mb0">よりきれいに焼きたいときは、一度ざるに通して、白身のサラサラした部分を取っておこう！白身がふっくらとした状態に仕上がるぜ！</p>'),
array('chk-end'),

array('step','02','mb0','フライパンに薄くサラダ油を引き、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。'),
array('step','03','mb0','フライパンに手をかざして、温かく感じるまで熱したら、容器の卵をそっと流し入れます。'),
array('step','04','mb0','白身が固まってきたら、水を大さじ1/2加えます。'),
array('step','05','mb0','そのまま蓋をせずに3～5分程度焼き、好みの黄身のかたさになったら火を止めます。'),
array('step','06','mb3','フライ返しで取り出して、皿に盛ったら完成です。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','半熟もかためも！黄身のかたさの調節方法'),
array('free','mb0','<p class="mb2">「半熟トロトロがいい！」「しっかり火を通したい！」などなど…焼き加減の好みは人によって違うよな。それぞれどんな風に焼けばいいのか、ポイントを教えてやるぜ！</p>'),
array ('ttl_s','mb0','黄身を半熟にする場合'),
array('free','mb0','<p class="mb2">黄身を半熟にしたいときは、中火にして短時間で焼くんだ！時間は黄身の具合を見て調節しよう。黄身の周縁が固まってきたら、火を止める合図だぜ！</p>'),
array ('ttl_s','mb0','黄身に完全に火を通す場合'),
array('free','mb0','<p class="mb2">完全に火を通す場合は、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にしてじっくり8分程度焼くんだ！よりかために仕上げたいなら、12分程度焼こう。時間をかけて焼くことで、黄身はかたくなり、白身はカリッとした仕上がりになるぞ。<br>蓋をしないで焼くと、黄身が白っぽくならず、黄色いままきれいに仕上がるぜ！</p><p class="mb0">意外と簡単だろ？ぜひ好みやその日の気分に合わせて、焼き加減を調節してみてくれよ！</p>'),
array('chk-end'),

// （大見出し2）
array('ttl_l','mb0','ちょっぴり技ありな目玉焼きの作り方'),

// （本文2）
array('text','mb3','基本の目玉焼きの作り方をマスターしたら、さらに技ありな目玉焼きにチャレンジしてみてはいかがでしょうか？思わず試してみたくなる、プロの技をご紹介します。'),

// （小見出し）
array('ttl_m','','黄身を真ん中にする方法'),
array('textimg','07','left','切り干し大根の煮物','mb2','あらかじめ<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵の黄身と白身を分けて</a>、それぞれボウルや容器などに入れておきます。基本の目玉焼きと同様に、先に白身だけをフライパンに入れましょう。次に、中央にやさしく黄身を移し入れます。そのままお好みのかたさになるまで焼いたら完成です。黄身がちょうど真ん中にくる、きれいな目玉焼きになりますよ。'),

// （小見出し）
array('ttl_m','','ハート型の目玉焼きを作る方法'),
array('textimg','08','right','ハート型の目玉焼きを作る方法','mb2','アルミホイルを折りたたんで、幅3cm程度の棒状にしてください。これを輪になるように曲げて、ハートの形に整えて型にします。<br>
型をフライパンに置いて、型の中にボウルなどに割り入れた卵を移しましょう。好みのかたさになるまで焼いたらできあがりです。ハート型は、市販のシリコン製のものを使うという方法もありますよ。'),

// （小見出し）
array('ttl_m','','両面焼きの目玉焼きを作る方法'),
array('free','mb0','<p class="mb2">両面を焼いた目玉焼きは、「オーバーイージー」「サニーサイドダウン」などといわれます。アメリカでは一般的な焼き方で、半熟の状態に仕上げるのが特徴です。<br>基本の目玉焼きの方法で半熟まで焼いたら、フライ返しで裏に返します。そのまま弱火で10秒程度焼いて、皿に盛りつけて完成です。</p><p class="mb0">ちなみに、しっかり両面を焼いたものは「ターンオーバー」といわれます。</p>'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　通常
array ('mama','01','できた～！コウちゃんが好きな半熟と、パパが好きなかための目玉焼き！ '),

// コウちゃん　喜ぶ
array ('ko','03','とろとろおいしい～'),

// パパ　通常
array ('papa','01','僕の目玉焼きもちょうどいいかたさだよ！白身もカリッとしてて美味しい！'),

// フラッキー　通常
array ('fl','01','目玉焼きは<a href="'.$base_url.'/magazine/article/recipe-technic84.php" class="recipe-design__link">ウインナー</a>やベーコンを添えて食べるのはもちろん、<a href="'.$base_url.'/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>や<a href="'.$base_url.'/magazine/article/recipe-technic86.php" class="recipe-design__link">チャーハン</a>にのせても美味しいぜ！'),

// ママ　通常
array ('mama','01','いろいろな食べ方を試してみよーっと！'),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','13002'),
array ('recommend-recipe-id','15054'),
array ('recommend-recipe-id','15048'),
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
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
