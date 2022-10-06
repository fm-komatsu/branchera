<?php
//base
include( "../../function.php" );
$content = get_id_data( '15130' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「オートミールの美味しい食べ方」を動画とテキストで解説。電子レンジを使って簡単に作れる、甘いデザートのようなミルクリゾット風レシピと、食べやすいおかゆ風レシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '130';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'lbslljMYWFM';

//導入文
$introTxt = '第130回は、「オートミールの美味しい食べ方」です。食物繊維やビタミンが豊富なヘルシー食材、オートミールの美味しい食べ方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','じゃーん！健康にいいと聞いて、オートミールを買ってきたよ！'),

//マサキ　困り顔
array ('papa','02','オートミール？前に食べたことがあるけど、あまり得意じゃないんだよな～'),

//ミエ　通常
array ('mama','01','え〜？だって、最近パパの体型が気になるから…'),

//フラッキー　通常
array ('fl','01','マサキ、安心しろ！オートミールはアレンジ次第で美味しく食べられるぞ！'),

//マサキ　驚き
array ('papa','03','えっそうなの！？'),

//ミエ　通常
array ('mama','01','私も美味しい食べ方、知りたい！ぜひ教えてフラッキー！'),


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
array ('ttl_l','mb0','オートミールとは？'),

// （本文1）
array ('text','mb2','オートミールとは、オーツ麦を脱穀して食べやすくした食品です。「oats（オーツ）」と「meal（食事）」という単語を組み合わせた名前になっています。食物繊維やミネラルが豊富に含まれ、栄養価が高いことで知られています。100gあたりに含まれる食物繊維量は、なんと玄米の約3倍、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">白米</a>の約20倍！さらに、食後の血糖値の上昇が緩やかな「低GI食品」なので、米に比べると太りにくい主食だといえます。'),

// （小見出し）
array ('ttl_m','mb1','オートミールの種類'),
array ('text','mb2','オートミールには水分を加え加熱してから食べるものと、そのまま食べられるものの2タイプに分かれます。'),

// （小見出し）
array ('ttl_s','mb1','加熱調理が必要なもの'),
array ('text','mb2','スティールカットオーツ：脱穀したオーツ麦を割ったもの。胚芽や外皮がそのまま残っているので、栄養価が高く、噛み応えがある。やや加熱調理に時間がかかる'),
array ('text','mb2','ロールドオーツ：麦を蒸したあとに、ローラーで平たく伸ばしたもの。加熱処理されている分、スティールカットオーツよりも加熱時間が短縮される'),
array ('ttl_s','mb1','そのままでも食べられるもの'),
array ('text','mb2','クイックオーツ：ロールドオーツを細かく砕いたもので、オーツ麦特有の歯応えはほとんど残っていない状態。そのまま食べられるが、味付けがされていないので調理して食べるのが一般的。ロールドオーツより加熱時間が短縮される'),
array ('text','mb2','インスタントオーツ：ロールドオーツに味付けしたもの。シリアルのようにそのまま、または牛乳をかけるだけで食べることができる'),
array ('text','mb3','このように、オートミールは基本的に「調理してから食べる」のが前提といえます。そのまま食べたり、牛乳をかけたりするだけでよいコーンフレークやグラノーラとの大きな違いです。'),

// （大見出し2）
array ('ttl_l','mb1','オートミールの美味しい食べ方'),
array ('text','mb2','オートミールの調理はとっても簡単！火を使わず、電子レンジで加熱することができます。オートミール自体の味は淡白なので、味付け次第でいろいろなアレンジができるのが魅力です。今回は、牛乳を使って甘く仕上げるミルクリゾット風レシピと、和風の塩味で食べやすい<a href="'.$base_url.'/magazine/article/recipe-technic56.php" class="recipe-design__link">おかゆ</a>風レシピをご紹介します！'),

// （小見出し）
array ('ttl_m','mb1','牛乳で甘く仕上げる！ミルクリゾット風レシピ'),
array ('text','mb2','オートミールを牛乳に浸して食べると、甘みが出て食べやすくなります。お好みでフルーツやナッツなどをトッピングするのもよいでしょう。忙しい朝にぴったりなレシピです。'),

// （小見出し）
array ('ttl_s','mb1','材料（1人分）'),
array ('mtr-st'),
array ('mtr','オートミール','30g'),
array ('mtr','牛乳','100ml'),
array ('mtr','水','100ml'),
array ('mtr','好みのフルーツ、ナッツなど','適量'),
array ('mtr-end'),

array ('ttl_s','mb1','手順'),
array('step','01','mb0','耐熱容器にオートミール、牛乳を入れて、600Wに設定した電子レンジで3分加熱します。'),
array('step','02','mb3','好みのフルーツやナッツをのせたらできあがり。甘い味付けが好きな方は、はちみつやメープルシロップをかけるのもおすすめです。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','調理の手間を省くなら、オーバーナイトオーツがおすすめ！'),
array('textimg','03','right','alt','mb0 mt1_sp','「加熱調理の手間を省きたい！」という場合は、水、牛乳、豆乳、アーモンドミルクなどにオートミールを一晩浸しておく「オーバーナイトオーツ」がおすすめです。前の晩に準備して冷蔵庫に入れておけば、朝起きたときにはオートミールがふやけて、すぐに食べられる状態になっています。フルーツやナッツを加えて食べると、より美味しいですよ。'),
array ('plus-end'),

// （小見出し）
array ('ttl_m','mb1','和風で食べやすい！おかゆ風レシピ'),
array ('text','mb2','鶏がらのだしで味付けすれば、一気におかゆや雑炊のような仕上がりに。オートミール初心者の方でも食べやすく、具材のアレンジもしやすいレシピです。'),

// （小見出し）
array ('ttl_s','mb1','材料（1人分）'),
array ('mtr-st'),
array ('mtr','オートミール','30g'),
array ('mtr','水','200ml'),
array ('mtr','鶏がらスープの素','小さじ2'),
array ('mtr','溶き<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>','1個分'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>','適量'),
array ('mtr','青ねぎ','少々'),
array ('mtr-end'),

array ('ttl_s','mb1','手順'),
array('step','04','mb0','耐熱容器にオートミール、水、鶏がらスープの素を入れて、600Wに設定した電子レンジで1分30秒加熱します。'),
array('step','05','mb0','電子レンジから耐熱容器を取り出し、溶き卵を加えます。再度電子レンジで1分30秒加熱しましょう。'),
array('step','06','mb0','塩で味をととのえます。'),
array('step','07','mb3','最後に青ねぎを散らしたらできあがり。普通のおかゆと同じく、梅干し、チーズ、納豆、キムチ、のりなどのトッピングがよく合います。お好みのアレンジで食べてみてください。'),


// （大見出し3）
array ('ttl_l','mb0','オートミールを使った人気のアレンジレシピ'),

// （本文3）
array ('text','mb2','癖のないオートミールは、<a href="'.$base_url.'/magazine/article/recipe-collect04.php" class="recipe-design__link">お菓子</a>や料理の食材としても重宝します。ヘルシーで食べごたえもあるので、常備しておくと便利です。'),

//（小見出し）
array ('ttl_m','mb1','オートミールのパンケーキ'),
array ('textimg','08','right','オートミールのパンケーキ','mb2','小麦粉を使わず作れる、ヘルシーな<a href="'.$base_url.'/magazine/article/recipe-technic94.php" class="recipe-design__link">パンケーキ</a>です。ボウルにオートミール、牛乳やアーモンドミルク、豆乳などの水分、はちみつ、卵を入れて混ぜ、生地を作ります。熱したフライパンにオリーブオイルやココナッツオイルなどの油を敷き、生地を流し入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で焼きましょう。両面に軽く焦げ目がついたらできあがりです。生地に潰したバナナを入れると甘みが増しますよ。'),

//（小見出し）
array ('ttl_m','mb1','オートミールのチーズリゾット'),
array ('textimg','09','left','オートミールのチーズリゾット','mb2','チーズと豆乳の濃厚な風味が美味しいチーズリゾットです。フライパンにバターを溶かし、油を切ったツナを入れて軽く炒めてください。まいたけ、しめじなどの<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>を加え、しんなりしてきたら、豆乳と水を入れます。温まってきたら、オートミール、粉チーズ、コンソメ顆粒、塩を入れて、とろみがつくまで弱火で5分程煮ます。器に盛りつけたらパセリを散らして、リゾットのできあがりです。'),

array ('ttl_m','mb1','オートミールのクッキー'),
array ('textimg','10','right','オートミールのクッキー','mb0','スティールカットオーツやロールドオーツのオートミールを使えば、ザクザクした食感のクッキーに。ピーナッツバターと卵を混ぜたら、オートミール、砕いたナッツ、ドライフルーツを加えて、さらに混ぜて生地を作ります。生地を丸めて平たく押し伸ばし、お好みのクッキーの形に成形してください。成形した生地を、アルミホイルを敷いた180度のトースターで10～15分ほど焼けば、完成です。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','なるほど！オートミールをおかゆにすると食べやすいね。<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">すりごま</a>をかけても美味しいよ！'),

//コウちゃん　喜ぶ
array ('ko','03','こうちゃん、あまいのがいい～！'),

//ミエ　通常
array ('mama','01','コウちゃんはミルクリゾット風が好きなんだね！はちみつも入れようか〜'),

//フラッキー　褒める
array ('fl','03','オートミールは電子レンジでササっと調理できるから、忙しい朝にもおすすめだぜ！'),

//ミエ　通常
array ('mama','01','栄養満点だし美容にもいいから、しばらく朝ごはんはオートミールにしようっと！'),


);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','13002'),
array ('recommend-recipe-id','15132'),
array ('recommend-recipe-id','15144'),
array ('recommend-recipe-end'),

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
