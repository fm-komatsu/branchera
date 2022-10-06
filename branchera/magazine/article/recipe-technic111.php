<?php
//base
include( "../../function.php" );
$content = get_id_data( '15111' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「白菜の切り方」を動画とテキストで解説。より美味しく、火を通りやすくする正しい白菜の切り方をご紹介します。ざく切り、そぎ切りの方法やメリットを解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '111';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'Daq0IAvje-Q';

//導入文
$introTxt = '第111回は、「白菜の切り方」です。鍋や炒め物の美味しさがアップする、正しい白菜の切り方についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ミエ　通常
array ('mama','01','今日は白菜がお買い得だったから、丸ごと1個買ってきちゃった！'),

// マサキ　通常
array ('papa','01','ということは、今夜は<a href="'.$base_url.'/magazine/article/recipe-technic116.php" class="recipe-design__link">お鍋</a>かな？'),

// ミエ　通常
array ('mama','01','大当たり！さて、白菜を適当に切って〜'),

// フラッキー　通常
array ('fl','01','ちょーっと待った〜！適当に切っても食べられるけど、白菜は正しい切り方で切ればより美味しく食べることができるぜ！'),

// ミエ　驚く
array ('mama','03','えっ、そうなの？フラッキー、お願い！白菜が美味しくなる切り方を教えて～！'),

// フラッキー　通常
array ('fl','01','よしっ！基本の切り方を教えてやるぜっ！'),
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
array ('ttl_l','mb0','白菜の切り方'),

// （本文1）
array ('text','mb2','白菜は定番の鍋のほか、炒め物や煮物、<a href="'.$base_url.'/magazine/article/recipe-technic145.php" class="recipe-design__link">サラダ</a>にも使える便利な野菜です。しかし、「葉の部分はやわらかくて好きだけれど、かたい芯の部分が使いづらい…」という人もいるのではないでしょうか？白菜は、切り方ひとつで食感が変わります。料理に合った切り方をすると、葉から芯まで、丸ごと美味しくいただけるようになりますよ。今回は、白菜の基本の切り方である「ざく切り」と「そぎ切り」の手順をご紹介します。'),

// （小見出し）
array ('ttl_m','mb0','下ごしらえ'),

array('step','01','mb0','白菜の芯の周りに切り込みを入れます。'),

array('step','02','mb0','使う枚数だけ、葉先から根元に向かって1枚ずつはがします。'),

array('step','03','mb3','水洗いして汚れを落とします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','白菜をひと玉丸ごとを買ったときは？'),
array ('free','mb0','ひと玉の白菜は、1/2、1/4に切って使うと便利だぜ。まず1/2に切るには、根元に<a href="'.$base_url.'/magazine/article/recipe-technic01.php" class="recipe-design__link">包丁</a>を入れて縦にまっすぐに切る！さらに、1/2にした白菜を縦に切って半分にすると、1/4にすることができるぞ。こうすれば、葉を1枚1枚取りやすくなるし、冷蔵庫での保存もしやすいぜ！ぜひお試しあれ。'),
array ('chk-end'),

// （小見出し）
array ('ttl_m','mb0','ざく切りの方法'),

array('step','04','mb0','葉と芯の部分を切り分けます。'),

array('step','05','mb0','葉は3〜4cm程度の幅に切ります。'),

array('step','06','mb0','芯は3〜5cm幅に切ってから、繊維に沿って1〜1.5cm幅に切ります。'),

array('step','07','mb3','完了です。'),

// （小見出し）
array ('ttl_m','mb0','芯のそぎ切りの方法'),

array('step','08','mb0','葉と芯を切り分けます。'),

array('step','09','mb0','利き手の逆側に根元が来るように、白菜を横向きに置きます。'),

array('step','10','mb0','芯に手を添えて、包丁を寝かせて斜め下に向かって刃を入れます。<br>
手前に引いて薄く切っていきましょう。'),

array('step','11','mb3','完了です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','そぎ切りの特徴とは？'),
array ('free','mb0','そぎ切りの特徴は、ズバリ「火が通りやすくなる」こと！厚くかたい白菜の芯も、そぎ切りを覚えれば、芯まで美味しくいただけるぜ！<br>
そぎ切りにして切り口の表面積を広くすることで、短時間で均等に火が通りやすくなる。それから、薄くすることによって、さらに火が通りやすくなるんだ！'),
array ('chk-end'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ざく切りとそぎ切りの使い分け方'),
array ('free','mb0','ざく切りとそぎ切り、どちらの切り方も鍋、煮物、炒め物と、いろいろな料理に使えるぜ！<br>
強いて言えば、ざく切りは食感を残したいとき、そぎ切りはより火の通りを早くしたいときに向いているぞ！'),
array ('chk-end'),


// （大見出し2）
array ('ttl_l','mb','白菜の簡単レシピ'),

// （本文2）
array ('text','mb2','白菜は寄せ鍋や<a href="'.$base_url.'/magazine/article/recipe-technic05.php#yudofu" class="recipe-design__link">湯豆腐</a>などの鍋料理はもちろん、煮物、野菜炒め、<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>、サラダ、<a href="'.$base_url.'/magazine/article/recipe-technic126.php" class="recipe-design__link">漬物</a>など、幅広い料理に使える冬の万能野菜です。ざく切りとそぎ切りを使いこなせば、美味しさがさらにアップしますよ。白菜を使った簡単レシピをお伝えしましょう！'),

// （小見出し）
array ('ttl_m','mb','白菜のミルフィーユ鍋'),
array ('textimg','12','left','alt','mb','白菜の葉を1枚ずつ根元から取ります。1枚の白菜の葉に豚バラ肉を数枚のせたら、上に白菜をのせ、また豚バラ肉を重ねます。これを4～5回繰り返したら、5cm幅のざく切りにしましょう。芯の部分も、葉の部分と同様の切り方で大丈夫です。<br>
鍋に水、白だし、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を入れます。そこにカットした白菜と豚肉を、切り口を上にして敷き詰めてください。この状態で、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で10分程度煮込みます。鍋に余白ができた場合は、白菜を詰めると安定しますよ。ポン酢をかけて召し上がれ！'),

// （小見出し）
array ('ttl_m','mb','白菜と油揚げの煮物'),
array ('textimg','13','right','alt','mb','白菜の葉はざく切りに、芯の部分は繊維に沿って1～1.5cm幅に切ります。<br>
水、だし、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、みりん、酒、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を入れた鍋に、白菜と2cm幅に切った油揚げを入れ、蓋をして煮込みましょう。<br>細く切った芯の部分は火の通りが早いため、葉の部分と同じようにとろりとやわらかくなりますよ。'),

// （小見出し）
array ('ttl_m','mb','八宝菜'),
array ('textimg','14','left','alt','mb2','白菜の葉はざく切り、芯の部分はそぎ切りにしておきます。フライパンにごま油を入れ、片栗粉をまぶした豚肉を炒めたら、一度取り出します。<br>
食べやすい大きさに切った玉ねぎ、にんじんを炒め、火が通ったら、<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">しいたけ</a>、<a href="'.$base_url.'/magazine/article/recipe-technic49.php" class="recipe-design__link">えび</a>、いかなどの具材を入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で炒めましょう。途中で白菜と豚肉を加え、塩こしょうをふってください。<br>
水、鶏がらのだし、醤油、砂糖、酒をフライパンに入れ、強火で煮込みます。全体に火が通ったら、火を止めて、<a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">水溶き片栗粉</a>を混ぜます。強火で煮込み、とろみがついたら完成です。'),

// （小見出し）
array ('ttl_m','mb','浅漬け'),
array ('textimg','15','right','alt','mb0','白菜は葉と芯の部分を切り離し、葉は3～4cm幅のざく切りにします。芯は1～1.5cm幅にカットしましょう。ファスナー付き保存袋に白菜、はさみで<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にした昆布、塩を入れ、軽く揉んだら冷蔵庫へ。1時間ほど置けばできあがりです。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','はい、今夜は寄せ鍋ですよ～'),

//マサキ　通常
array ('papa','01','白菜、芯までやわらかいね！これならいくらでも食べられるよ♪'),

//コウちゃん　喜ぶ
array ('ko','03','わ～い！はくさい、とろとろ～'),

//フラッキー　通常
array ('fl','01','ちなみに、白菜は<a href="'.$base_url.'/magazine/article/recipe-technic33.php" class="recipe-design__link">冷凍</a>すれば約1ヵ月間保存可能なんだぜ！<br>
葉はざく切り、芯はそぎ切りにして冷凍すると、料理に使いやすくなるぞ！'),

//ミエ　驚く
array ('mama','03','それは便利ね！切った白菜をいっぱい保存しておこうっと！'),

);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15039'),
array ('recommend-recipe-id','13003'),
array ('recommend-recipe-id','15155'),
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
