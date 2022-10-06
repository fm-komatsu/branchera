<?php
//base
include( "../../function.php" );
$content = get_id_data( '15133' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「牛すじの下処理方法」を動画とテキストで解説。やわらかく仕上がる下ごしらえの手順と、煮込みやカレーなど牛すじを使った人気レシピをご紹介します。';
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
$currentNumber = '133';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '_BcLwRU5Hpw';

//導入文
$introTxt = '第133回は、「牛すじの下処理」です。牛すじのかたさや臭みをやわらげる、下処理の手順を伝授！牛すじを使った定番レシピもご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','業務用スーパーで牛すじが安く売ってたから、買ってきちゃった！<br>
牛すじを料理で使いこなせたら、プロみたいでかっこいいよね'),

//フラッキー　通常
array ('fl','01','確かにかたくて食べにくそうな牛すじを、トロットロに仕上げられたら最高だよな！'),

//パパ　困り顔
array ('papa','02','だけど、自分で美味しく下処理できるか、心配だなあ…<br>
臭みも取らないといけないし、圧力鍋は持ってないし'),

//フラッキー　通常
array ('fl','01','それなら任せとけ！牛すじは正しく下ゆですれば、やわらかく仕上がって臭みも取れるんだ！<br>
牛すじを美味しくする下ゆでの方法を、俺が教えてやるぜ！'),

//パパ　通常
array ('papa','01','本当！？美味しい牛すじ料理、作れるようになりたい！'),

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
array ('ttl_l','mb0','牛すじの下処理と保存方法'),

// （本文1）
array ('text','mb2','おでんや<a href="'.$base_url.'/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>の具として人気の牛すじ。とろりとやわらかく、コクがあって美味しいですよね。しかし、正しく<a href="'.$base_url.'/magazine/article/recipe-technic19.php" class="recipe-design__link">下処理</a>をしないと、かたくなったり臭みが残ったりしてしまいます。牛すじの下処理の方法を覚えて、お店のような仕上がりをおうちで再現しましょう！'),

// （小見出し）
array ('ttl_s','mb1','材料'),
array ('mtr-st'),
array ('mtr','牛すじ肉','500g'),
array ('mtr','生姜','1かけ(約10g)'),
array ('mtr','長ねぎの青い部分','1本分'),
array ('mtr-end'),

array ('ttl_s','mb1','手順'),
array('step','01','mb0','生姜とねぎは風味付けとして使います。<br>生姜は皮を付けたまま、5mm幅の<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にしておきます。'),
array('step','02','mb0','牛すじをボウルに溜めた水の中に入れ、擦るようにして汚れを落とします。'),
array('step','03','mb0','鍋に牛すじと、牛すじが完全に浸る程度の水を入れます。'),
array('step','04','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけて沸騰させます。徐々に<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>が出てくるので、沸騰したらそのまま1分置きましょう。'),
array('step','05','mb0','1分後、牛すじをざるにあげて、流水で表面に付いた汚れを洗い流します。'),
array('step','06','mb0','脂とアクをすすいで綺麗にした鍋に、牛すじを戻します。<br>生姜とねぎを加えて、再び牛すじが浸るくらいの水を注ぎ、沸騰するまで加熱してください。'),
array('step','07','mb3','沸騰したら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にして、そのまま1時間半～2時間程度ゆでます。アクが出てきたら、都度おたまですくい取りましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','鍋の水量に注意！'),
array ('free','mb0','ゆでている途中で、鍋の水量が少なくなってきたら水を注ぎ足してくれ！牛すじ肉が水に浸かっている状態を、常にキープしておくことが大切だぞ！'),
array ('chk-end'),

array('step','08','mb3','かたそうなけんや筋の部位もやわらかくなったら、下処理は完了です。<br>牛すじをゆで汁から出して、そのまま調理に使いましょう。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ゆで汁は再利用できる'),
array('text','mb2','牛すじのゆで汁には、美味しい牛のエキスが溶け出しています。捨てずに料理へ再利用するとよいですよ。そのままスープにするほか、おでんの<a href="'.$base_url.'/magazine/article/recipe-technic05.php" class="recipe-design__link">だし</a>として使うこともできます。'),
array('text','mb0','逆に「ゆで汁が再利用できなくてもいい」という場合は、生姜やねぎを入れたお湯の代わりに、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">米</a>のとぎ汁を使って臭み取りをすることもできます。牛すじを熱湯でゆでて脂や汚れを流した後、もう一度ゆでる際にとぎ汁を入れましょう。とぎ汁がない場合は、鍋に少量の米を入れてゆでても、同様に臭みを取ることができますよ。'),
array ('plus-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','保存期間の目安は冷凍庫で1ヵ月'),
array('text','mb0','下処理した牛すじが余ったら、冷凍保存するのがおすすめです。ファスナー付き保存袋に入れて、空気を抜いて保存しましょう。保存期間の目安は約1ヵ月です。'),
array ('plus-end'),


// （大見出し2）
array ('ttl_l','mb1','下処理した牛すじの活用レシピ'),
array ('text','mb2','下処理した牛すじを使った人気レシピをご紹介します！定番メニューはもちろん、ゆで汁を使ったレシピもご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','牛すじ煮込み'),
array ('textimg','09','right','牛すじ煮込み','mb2','炊飯器で簡単にできる牛すじ煮込みです。まず、<a href="'.$base_url.'/magazine/article/recipe-technic58.php" class="recipe-design__link">大根</a>を食べやすい大きさに切っておきましょう。炊飯器に大根と下処理をした牛すじ肉、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、みりん、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、酒、水を入れます。そのまま通常炊飯し、お好みで小ねぎを散らせば完成です。味がしっかり染み込んだ煮込みに仕上がりますよ。'),

//（小見出し）
array ('ttl_m','mb1','牛すじカレー'),
array ('textimg','10','left','牛すじカレー','mb2','トロトロに煮込まれた牛すじが絶品のカレーです。まず<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">玉ねぎ</a>、<a href="'.$base_url.'/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>、にんじんを中火で炒めます。玉ねぎがしんなりしてきたら、牛すじ肉とゆで汁を加えて煮立ててください。沸騰したら一旦火を止め、カレールーを入れて、再び煮込んだらできあがり！'),

//（小見出し）
array ('ttl_m','mb1','牛すじおでん'),
array ('textimg','11','right','牛すじおでん','mb2','牛すじのゆで汁を、だしに活用したおでんレシピです。ゆで汁に<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">昆布、かつお節</a>を入れて、弱火で2〜3分煮出します。昆布とかつお節を取り出し、そこに薄口醤油、みりん、塩を入れましょう。鍋に牛すじ肉、大根、<a href="'.$base_url.'/magazine/article/recipe-technic78.php" class="recipe-design__link">こんにゃく</a>の順に具材を入れ、1時間程度煮込んでください。牛すじのうまみが溶け出しただしで、より美味しいおでんの完成です！'),

//（小見出し）
array ('ttl_m','mb1','牛すじとキャベツの味噌炒め'),
array ('textimg','12','left','牛すじとキャベツの味噌炒め','mb0','濃厚な味噌の風味でごはんが進む一品です。フライパンにごま油をひき、キャベツと牛すじ肉を入れて炒めます。キャベツがしんなりしてきたら、酒、味噌、砂糖、豆板醤、おろしたにんにくと生姜を加えて混ぜ合わせます。全体に味がなじんだらできあがり！'),


);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　笑顔
array ('papa','01','みんな～、牛すじ肉でカレーを作ったよ～！'),

//コウちゃん　笑顔
array ('ko','03','わーい！おにく、やわらかくてとろとろ～'),

//ママ　笑顔
array ('mama','01','いつものチキンカレーやポークカレーとはまた違う味わいで、新鮮だね！'),

//フラッキー　通常
array ('fl','01','牛すじの下処理には時間がかかるから、まとめてゆでて冷凍保存しておくのがオススメだぜ！'),

//マサキ　笑顔
array ('papa','01','牛すじは美味しくて家計にも優しくていいね！もっと牛すじレシピのレパートリーを増やそうっと♪'),


);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15019'),
array ('recommend-recipe-id','14022'),
array ('recommend-recipe-id','15116'),
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
