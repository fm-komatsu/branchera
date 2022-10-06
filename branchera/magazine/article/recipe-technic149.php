<?php
//base
include( "../../function.php" );
$content = get_id_data( '15149' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「かぼちゃのポタージュのレシピ」を動画とテキストで解説。ハロウィンメニューとしてもおすすめの濃厚で美味しいポタージュの作り方をご紹介！にんじん、ほうれん草を使ったレシピや冷製スープなど、人気のアレンジも伝授します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '149';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '1L9qJiqqz2s';

//導入文
$introTxt = '第149回は、「かぼちゃのポタージュ」です。お腹も心も温める、かぼちゃのポタージュの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','お隣さんから、かぼちゃのおすそ分けをもらっちゃった♪'),

//マサキ　通常
array ('papa','01','大きいかぼちゃだね！いろんな料理が作れそう'),

//ミエ　困る
array ('mama','02','かぼちゃでポタージュを作ったら美味しそうだけど、難しいかな…'),

//フラッキー　通常
array ('fl','01','かぼちゃのポタージュは簡単に作れるぜ！よし、俺が作り方を教えてやろう！'),

//ミエ　通常
array ('mama','01','教えてほしい♪よろしくね！フラッキー！'),

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
array ('ttl_l','mb0','かぼちゃのポタージュの作り方'),

// （本文1）
array ('text','mb2','「ポタージュ」はフランス語でスープ全般を指す言葉ですが、日本では食材をペースト状にした、とろみのあるスープを指します。ここではバターや生クリームなどを使わない、ヘルシーなかぼちゃのポタージュをご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('mtr','かぼちゃ','1/4個（約300g）'),
array ('mtr','玉ねぎ','1/2個（約100g）'),
array ('mtr','オリーブオイル','大さじ1'),
array ('mtr','塩','小さじ1/2'),
array ('mtr','水','200ml'),
array ('mtr','牛乳','200ml'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>を薄切りにします。'),
array('step','02','mb0','玉ねぎは半分に切り、繊維と垂直に薄切りにします。'),
array('step','03','mb0','鍋にオリーブオイルを入れ、玉ねぎ、塩を加えて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で炒めます。'),
array('step','04','mb0','玉ねぎがしんなりしたら、かぼちゃを入れてさっと混ぜます。'),
array('step','05','mb0','鍋の具材に油がまわったら、水を入れて蓋をし、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にします。煮立ったら<strong>弱火にして10分</strong>ほど煮ます。'),
array('step','06','mb0','火を止め、鍋の具材をブレンダーで撹拌してなめらかにします。'),
array('step','07','mb3','具材がなめらかになったら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。牛乳を少しずつ加えながらのばし、混ぜます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','牛乳の代わりに豆乳でもOK！'),
array ('free','mb0','牛乳が苦手だったり、動物性のものを避けたかったりするときは、代わりに豆乳を使ってみてくれ！豆乳にもさっぱりした味わいのものや、豆腐のこっくり感が広がるものまでいろいろあるから、好みの豆乳を探してみるといいぞ！'),
array ('chk-end'),

array('step','08','mb3','十分に温まったら、できあがり！'),

// ■Check
array ('plus-st'),
array ('plus-ttl','mb2','冷製ポタージュの作り方'),
array ('free','mb0','冷製ポタージュは、暑い夏場の食事や熱々の料理が並ぶときのお口直しにおすすめです。できあがったポタージュの粗熱を取った後、冷蔵庫で冷やせば、冷製ポタージュの完成です。'),
array ('plus-end'),

// （小見出し）
array ('ttl_m','mb0','保存方法'),

// （本文2）
array ('text','mb3','できあがったポタージュは、ファスナー付き保存袋に小分けして冷凍保存できます。食べるときは、湯煎で温めると風味が逃げずにいただけるので美味しいですよ。<br>
または、具材をペーストにした状態で冷凍してもOKです。食べるときは、少量なら冷凍のペーストに牛乳を入れてレンジ加熱、数人分なら冷凍のペーストに牛乳を入れて鍋で温めましょう。<br>
冷凍保存したポタージュの保存期間は、<strong>3週間程度</strong>です。'),


//（大見出し2）
array ('ttl_l','mb1','ポタージュの人気アレンジレシピ'),

// （本文2）
array ('text','mb2','かぼちゃのポタージュの作り方をマスターしたら、アレンジレシピにも挑戦してみましょう！'),

//（小見出し）
array ('ttl_m','mb1','にんじんのポタージュ'),
array ('textimg','09','right','にんじんのポタージュ','mb2','にんじんを使ったポタージュは、カロテンたっぷり！あざやかなオレンジが食欲をそそる、栄養豊富でとろみのあるスープです。<br>
にんじん、玉ねぎ、<a href="'.$base_url.'/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>を薄切りにして、油を熱した鍋でよく炒めます。塩と水を加え、野菜がやわらかくなったら、火を止めて粗熱を取り、ミキサーまたはブレンダーにかけましょう。なめらかになった具材を鍋に戻し、牛乳を加えながら温めつつ混ぜます。塩で味をととのえ、仕上げに刻んだパセリを散らして完成です。'),

//（小見出し）
array ('ttl_m','mb1','コーンポタージュ'),
array ('textimg','10','left','コーンポタージュ','mb2','子どもにも人気が高いのが、定番のコーンポタージュです。<a href="'.$base_url.'/magazine/article/recipe-technic96.php" class="recipe-design__link">とうもろこし</a>は、<a href="'.$base_url.'/magazine/article/recipe-technic50.php" class="recipe-design__link">缶詰</a>でも生でも、どちらでもOKです。どちらの場合も、あらかじめ仕上げの飾り付けに使う粒を少し残しておきます。生のとうもろこしは包丁で粒をそぎ落としましょう。<br>とうもろこしを用意したら、玉ねぎを薄切りにします。バターを入れて温めた鍋で、とうもろこしと玉ねぎをよく炒め、ミキサーまたはブレンダーでなめらかにします。なめらかになった具材に、牛乳を少しずつ加えながら温めます。塩で味をととのえ、とうもろこしの粒を散らして完成です。'),

//（小見出し）
array ('ttl_m','mb1','じゃがいものポタージュ'),
array ('textimg','11','right','じゃがいものポタージュ','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>を使った、優しい味わいのポタージュです。じゃがいもと玉ねぎを薄切りにし、バターで炒めます。じゃがいもをあらかじめレンジで加熱しておくと時短になります。<br>
じゃがいもと玉ねぎがやわらかくなったら、水を加えてさらに煮ます。その後ミキサーまたはブレンダーにかけ、ペースト状になったら鍋に戻し、牛乳を加えながら温めて塩で味をととのえます。これを冷やせば、冷製ポタージュのビシソワーズになりますよ！'),

//（小見出し）
array ('ttl_m','mb1','離乳食用ポタージュ'),
array ('textimg','12','left','離乳食用ポタージュ','mb0','野菜をペースト状にしているポタージュは、食べやすく消化もよいため、離乳食に最適です。生後7～8ヵ月の離乳食中期のお子さまになら、調味料をごく控えめにしたポタージュを作りましょう。<br>
ゆでたほうれん草や<a href="'.$base_url.'/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>を、じゃがいもと一緒にミキサーまたはブレンダーでなめらかにします。牛乳を加えながら温めれば完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','やったー♪なめらかな濃厚ポタージュ完成！ありがとう、フラッキー！'),

//コウちゃん　喜ぶ
array ('ko','03','とろとろでおいしい〜'),

//フマサキ　通常
array ('papa','01','クリーミーでまるでホテルの味だね♪'),

//フラッキー　褒める
array ('fl','03','美味しいだろう？かぼちゃのほかに、さつまいもやかぶ、トマトや<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>なんかでも栄養たっぷりの美味しいポタージュができるぞ！'),

//ミエ　通常
array ('mama','01','ポタージュは野菜がいろいろ食べられてヘルシーだね、次は食物繊維たっぷりのさつまいものポタージュを作ってみる！'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>ビシソワーズとは</dt>
							<dd>ビシソワーズとは、冷製のじゃがいものポタージュのこと。本国フランスではポロ葱が欠かせない材料。ポロ葱は玉ねぎで代用でき、本場フランスのビシソワーズと変わらない風味が出る。</dd>
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
