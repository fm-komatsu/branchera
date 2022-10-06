<?php
//base
include( "../../function.php" );
$content = get_id_data( '15147' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「スキレットのお手入れ方法」を動画とテキストで解説。初めて使うときのシーズニングと、サビにくくするための正しい洗い方・保管方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠
$comic02PrId = '101';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '147';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'LxnNY7bEOfc';

//導入文
$introTxt = '第147回は、「スキレットのお手入れ方法」です。美味しく調理ができる人気のスキレットの使い方・洗い方・保管方法を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','今日は奮発して牛肉とスキレットを買ってきたよ～♪'),

//マサキ　驚く
array ('papa','03','わっ、すごい重厚感！<br>
鉄製なんだ'),

//ミエ　通常
array ('mama','01','これでお肉を焼くと美味しいらしいよ<br>
さ、お肉を焼こうっと♪'),

//フラッキー　怒る
array ('fl','02','おいおい、ミエ！<br>
スキレットは使い始めるときには、特別な手入れをするんだぜ！<br>
料理が終わった後も手入れをすると長持ちするぞ'),

//ミエ　驚く
array ('mama','03','えっ、そうなの？<br>
フラッキー、スキレットの使い方とお手入れ方法を教えて～！'),

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
array ('ttl_l','mb0','スキレットを初めて使う前のお手入れ方法'),

// （本文1）
array ('text','mb2','鉄製のフライパン、スキレットは厚みがある分、蓄熱性が高く、焼きもの、炒めもの、煮込み料理なども美味しく仕上げることができます。<br>
スキレットを使い始めるときには「シーズニング（油をなじませること）」の作業が必要です。ただし、すでにシーズニングされている商品の場合は、購入後すぐに使用できます。'),

// （小見出し）
array ('ttl_m','mb1','必要な道具'),
array ('mtr-st'),
array ('mtr','食器用洗剤',''),
array ('mtr','たわし、ささら（細い竹を束ねた洗浄用具）など',''),
array ('mtr','食用油',''),
array ('mtr','キッチンペーパー',''),
array ('mtr','トング、熱に強い手袋（耐熱性手袋・皮手袋など）、または鍋つかみ',''),
array ('mtr','くず野菜',''),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','サビ止めを落とすため、スキレットを洗剤とたわしでこすり洗いして、お湯で流します。'),
array('step','02','mb0','水分を拭き取り、火にかけ、白い煙が出るまで<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で熱します。'),
array('step','03','mb0','スキレットをしばらく冷まします。'),
array('step','04','mb3','油を染み込ませたキッチンペーパーで、取っ手や外側部分までオイルを塗ります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','油はトングを使って染み込ませよう！'),
array ('free','mb0','キッチンペーパーで油を塗るときは、トングを使うといいぞ！スキレットが十分に冷めていない状態でも、トングを使えば油を塗りやすくなる。手が油っぽくなるのも防げるぜ！'),
array ('chk-end'),

array('step','05','mb0','油を塗ったスキレットでくず野菜を炒めて、鉄臭さを消します。<br>
くず野菜を取り除いたら、キッチンペーパーで残った油を拭き取ります。'),
array('step','06','mb3','仕上げに空焚きをしてから、もう1度油を全体に塗ったら、準備完了です！'),

// （大見出し2）
array ('ttl_l','mb0','スキレットを使った後のお手入れ方法'),

// （本文2）
array ('text','mb2','調理の後は、作った料理を入れたままにしないようにしましょう。鉄が酸化してサビの原因になります。<br>
調理が終わったら料理を器に移し、正しい方法でスキレットを洗い、面倒でも毎回シーズニングしましょう。大変に感じますが、毎回シーズニングするとしっかり油の膜ができ、料理が焦げ付きにくくなります。<br>
使用後のスキレットの正しい洗い方とシーズニングの方法、保管方法をご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb1','必要な道具'),
array ('mtr-st'),
array ('mtr','重曹','大さじ1'),
array ('mtr','たわし',''),
array ('mtr','キッチンペーパー',''),
array ('mtr','食用油',''),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','07','mb3','お湯とたわしを使ってスキレットの焦げ付きを落とします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','焦げが落ちないときは重曹を！'),
array ('free','mb0','焦げ付きが落ちないときは、重曹を使うといいぜ！洗剤を使うと、せっかく馴染ませた油が落ちてしまうから気を付けてくれよな。<br>
調理が終わってすぐ冷たい水で洗うのもNGだ！急に温度が変化すると、鉄が変形したり、ひび割れができたりする。冷めたら、洗う。それがスキレットの鉄則なんだぜ！'),
array ('chk-end'),

array('step','08','mb0','洗ったら水分をキッチンペーパーで拭き取ります。'),
array('step','09','mb0','コンロで加熱し水気を完全に飛ばしましょう。'),
array('step','10','mb3','水気がなくなったら、スキレットが熱いうちに、シーズニングをします。<br>
使用後のシーズニングは、油をスキレット全体に薄くのばした後、5分ほどコンロで加熱してください。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','シーズニングに最適なオイルとは？'),
array ('free','mb0','シーズニングに使う油はサラダ油はもちろん、米油、太白ごま油、菜種油など無臭の植物油ならなんでも使えるぜ！無臭のオイルは、料理の味に影響しにくいぞ。オリーブオイルも使えるけど、特有の風味が移る場合があるから気を付けてくれよな。'),
array ('chk-end'),

array('step','11','mb3','シーズニングが完了したら、湿気から守るために、新聞紙に包んだ状態で保管します。'),

//（大見出し3）
array ('ttl_l','mb1','スキレットを使った人気レシピ'),

// （本文3）
array ('text','mb2','美味しくできて、しかも簡単！スキレットを使った本格レシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','えびのアヒージョ'),
array ('textimg','12','right','えびのアヒージョ','mb0','アヒージョは、具材をオリーブオイルで煮込むスペイン料理です。えびの殻をむき、<a href="'.$base_url.'/magazine/article/recipe-technic49.php" class="recipe-design__link">背わたを取り</a>、片栗粉と塩を揉み込み、水洗いして臭みを取ります。スキレットにオリーブオイルと<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>のにんにくを入れ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にかけます。具材と鷹の爪を入れて塩を振り、火が通れば完成です。そのままテーブルに出して召し上がれ。'),
array ('text','mb2','たこ、いかなどでも美味しいアヒージョができますよ。'),

//（小見出し）
array ('ttl_m','mb1','じゃがいものガレット'),
array ('textimg','13','left','じゃがいものガレット','mb2','ガレットは朝食やブランチに合う料理です。じゃがいもは<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にし、細切りのベーコンと薄切りの玉ねぎをボウルに入れて混ぜ合わせ、塩こしょうで味をととのえます。スキレットを熱し、バターを入れ、具材を流し込み、フライ返しで上から押さえて蓋をします。じゃがいもが透明になったら裏返し、焼き色が付いたら、生ハムや野菜をトッピングしてできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','<a href="'.$base_url.'/magazine/article/recipe10.php" class="recipe-design__link">パエリア</a>'),
array ('text','mb2','スキレットを熱し、オリーブオイルで鶏もも肉を炒め、焼き色を付けます。玉ねぎとパプリカを加えて炒め、塩こしょうで味付けします。殻付きのえび、いかを加えて炒め、水を注いで煮こんだ後、えびといかを取り出します。'),
array ('textimg','14','right','パエリア','mb0','米を洗わずに加え、米が透き通ったらカレー粉、コンソメ、水を加えます。えびといかを戻して米を炊き、水気がなくなったら、レモンやパセリを添えて完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　驚く
array ('mama','03','スキレットって、毎回シーズニングが必要なんだ！'),

//フラッキー　通常
array ('fl','01','きちんと手入れすれば、ずっと使えるぞ！'),

//ミエ　通常
array ('mama','01','いろんな料理に使えそうだし、大切に使おうっと！'),

//フラッキー　通常
array ('fl','01','スキレットはアウトドアでも大活躍するぜ！'),

//フマサキ　通常
array ('papa','01','キャンプでアヒージョや<a href="'.$base_url.'/magazine/article/recipe10.php" class="recipe-design__link">パエリア</a>を作ったら楽しそうだな♪'),

//コウちゃん　喜ぶ
array ('ko','03','わ～い、きゃんぷ<br>
こうちゃん、おそとでごはんたべた～い'),

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
