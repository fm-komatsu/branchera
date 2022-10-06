<?php
//base
include( "../../function.php" );
$content = get_id_data( '15153' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ポトフのレシピ」を動画とテキストで解説。ゴロゴロ野菜とお肉を煮込んだ、寒い冬に嬉しいポトフの作り方を伝授！カレーやスープパスタなど、ポトフを使ったアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '153';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'xJJWw9gtNEE';

//導入文
$introTxt = '第153回は、「ポトフのレシピ」です。圧力鍋なしでできる本格的なポトフの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','寒い季節は、温かいスープが食べたくなるな～<br>
野菜がいっぱい入ったポトフなんていいよね'),

//マサキ　通常
array ('papa','01','コウちゃんも野菜食べてくれそう！<br>
でも、ポトフって圧力鍋がなくても作れるのかな？'),

//フラッキー　通常
array ('fl','01','大丈夫だ！オレ様が圧力鍋を使わずに作る方法を教えるぜ！'),

//マサキ　通常
array ('papa','01','フラッキー頼もしい！作りたいからぜひ教えて！'),

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
array ('ttl_l','mb0','本格ポトフの作り方'),

// （本文1）
array ('text','mb2','ポトフはフランス語で「火にかけた鍋」という意味。肉と野菜を煮込んだフランスの家庭料理です。栄養バランスがよいうえ体も温まり、寒い季節におすすめの一品です。'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('mtr','ウインナー','8本'),
array ('mtr','キャベツ','1/4個（300g）'),
array ('mtr','玉ねぎ','1個'),
array ('mtr','にんじん','1本'),
array ('mtr','じゃがいも','2個'),
array ('mtr','乾燥ローリエ','1枚'),
array ('mtr','水','800ml'),
array ('mtr','顆粒状ブイヨン','小さじ1'),
array ('mtr','塩','少々'),
array ('mtr','こしょう','少々'),
array ('mtr','粒マスタード（または<br class="u-only__sp">ディジョンマスタード）','適量'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic84.php" class="recipe-design__link">ウインナー</a>は斜めに切り込みを入れます。'),
array('step','02','mb0','キャベツは2等分の<a href="'.$base_url.'/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形</a>に切ります。'),
array('step','03','mb0','玉ねぎは4等分のくし形に切ります。にんじんは<a href="'.$base_url.'/magazine/article/recipe-technic03.php" class="recipe-design__link">皮</a>を<a href="'.$base_url.'/magazine/article/recipe-technic23.php" class="recipe-design__link">むいて</a>4等分の<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>にします。'),
array('step','04','mb0','じゃがいもは皮をむいて芽を取り除き、半分に切ります。<br>5分ほど水にさらして、水気を切りましょう。'),
array('step','05','mb0','鍋にキャベツ、玉ねぎ、にんじん、じゃがいもを入れて水を注ぎ、ブイヨン、乾燥ローリエを加えて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。煮立ったら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a><strong>にして20分</strong>ほど煮ます。'),
array('step','06','mb0','ウインナーを加えて、さらに<strong>10分ほど弱火</strong>で煮ます。野菜がやわらかくなったら、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">塩こしょう</a>で味をととのえます。'),
array('step','07','mb0','キャベツは半分に切ってほかの具材と一緒に器に盛ります。'),
array('step','08','mb3','マスタードを添えたら、完成です。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','圧力鍋、無水鍋を使った調理のメリット'),
array ('free','mb2','ポトフは普通の鍋でも美味しく作れますが、圧力鍋や無水鍋での調理もおすすめです。それぞれのメリットをご紹介します。'),
array ('ttl_s','mb0','圧力鍋'),
array ('free','mb2','調理時間が通常の鍋に比べ、1/3〜1/4に短縮されます。そのため、時短につながるうえに、光熱費の節約にもなるメリットがあります。<br>
また、加熱時間が少なく済む分、煮崩れが起きにくい点も圧力鍋の特長です。'),
array ('ttl_s','mb0','無水鍋'),
array ('free','mb0','水分を加えずに調理できるので、食材の栄養素やうまみを逃さないというメリットがあります。<br>
また、火の通りが早く加熱時間が短縮されるので、光熱費の節約にもつながります。'),
array ('plus-end'),

//（小見出し）
array ('ttl_m','mb1','保存方法'),
array ('text','mb2','ポトフは傷みやすいため、常温保存は避けましょう。冷めたらすぐ冷蔵庫へ移して保存します。冷蔵保存の場合は、<strong>翌日まで</strong>が保存の目安です。<br>
また、具材によっては冷凍で<strong>1ヵ月</strong>保存することもできます。冷凍すると食感が変わってしまう大きめのじゃがいもやにんじんは避け、それ以外のキャベツ、玉ねぎ、ウインナーなどを冷凍用の容器に移して冷凍します。解凍は電子レンジで行いましょう。'),

//（大見出し2）
array ('ttl_l','mb1','ポトフの人気アレンジレシピ'),

// （本文2）
array ('text','mb2','ポトフを作りすぎてしまったときには、別のメニューにリメイクしてみましょう。簡単に美味しくできる人気のレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','カレー'),
array ('textimg','09','right','カレー','mb2','残ったポトフは<a href="'.$base_url.'/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>にリメイクできますよ。ポトフの汁が少ない場合は水を適量入れ、加熱します。沸騰したら一旦火を止めて、ルーを入れます。味を見てから、もう一度火を入れ、とろみが付いたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','クリームシチュー'),
array ('textimg','10','left','クリームシチュー','mb2','クリームシチューとポトフの具材はほぼ同じなので、アレンジにぴったり！作り方は、余ったポトフに生クリームやシチューのルーを加えて加熱するだけ。すでに具材を煮込んであるので、時短調理になりますよ。'),

//（小見出し）
array ('ttl_m','mb1','スープパスタ'),
array ('textimg','11','right','スープパスタ','mb2','ポトフの<a href="'.$base_url.'/magazine/article/recipe-technic140.php" class="recipe-design__link">スープ</a>を使った<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>です。残ったポトフにバター、牛乳、生クリームを入れます。ゆでたパスタにスープをからめ、粉チーズ、粗びきこしょう、パセリを振りかければ、具だくさんのスープパスタの完成です。'),

//（小見出し）
array ('ttl_m','mb1','ロールキャベツ'),
array ('textimg','12','left','ロールキャベツ','mb0','具材の少なくなったポトフのスープを利用して、<a href="'.$base_url.'/magazine/article/recipe-technic74.php" class="recipe-design__link">トマト</a>風味のロールキャベツを作ります。まず、キャベツの葉をレンジでやわらかくします。豚ひき肉に玉ねぎの<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>を加え、よく混ぜ合わせ、塩こしょうで味をととのえます。キャベツの葉にタネをのせて包み、爪楊枝で止めます。ポトフのスープに<a href="'.$base_url.'/magazine/article/recipe-technic89.php" class="recipe-design__link">トマトソース</a>を加え、ロールキャベツを入れて煮込めばできあがりです。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','絶品！体も温まる～'),
 
//コウちゃん　喜ぶ
array ('ko','03','おやさいとおにくがごろごろしてるね～'),

//フマサキ　通常
array ('papa','01','コウちゃんが野菜食べてくれてよかった！<br>栄養バランスがいいからたくさん食べてね'),
 
//フラッキー　通常
array ('fl','01','キャベツの代わりに<a href="'.$base_url.'/magazine/article/recipe-technic111.php" class="recipe-design__link">白菜</a>、トマトを入れても美味しいぞ！<br>
<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">和風のだし</a>を使えば、和風ポトフにもなる<br>
手羽先を入れると美味しく仕上がるぜ！'),

//フマサキ　通常
array ('papa','01','和風仕立てのポトフもいいね！次はそれにトライしようっと！'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>ディジョンマスタードとは</dt>
							<dd>ディジョンマスタードとは、からしの種の外皮を取り除いて作られるマスタードのこと。からしの種の外皮に辛みがあるため、粒マスタードに比べてまろやかな味わいが特徴。<br>フランスの都市、ディジョンが発祥のため、ディジョンマスタードと呼ばれる。</dd>
						</dl>
           </div>
          </div>
      </div> 
'),

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
