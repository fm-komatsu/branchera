<?php
//base
include( "../../function.php" );
$content = get_id_data( '15150' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「きのこのソテーのレシピ」を動画とテキストで解説。秋の味覚の代表、きのこを存分に味わえるソテーの作り方をご紹介！ほか、パスタやポン酢炒めなど、きのこのソテーの美味しさが広がるアレンジレシピも伝授します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '150';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'q5wBRGu5ZME';

//導入文
$introTxt = '第150回は、「きのこのソテーのレシピ」です。簡単に美味しくできるきのこのソテーの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','今日はきのこをたくさん買ってきたよ！<br>しいたけ、まいたけ、しめじにエリンギ♪'),

//ミエ　驚く
array ('mama','03','わっ、こんなにたくさん！<br>
いったい何を作るつもり？'),

//マサキ　通常
array ('papa','01','きのこのソテーを作ろうと思って<br>
簡単にできるからね'),

//フラッキー　通常
array ('fl','01','ふふふっ、マサキ<br>
美味しいきのこのソテーを作るにはコツがあるんだぜ！'),

//マサキ　通常
array ('papa','01','えっ、コツ？<br>
フラッキー、お願い、教えてくれる？'),

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
array ('ttl_l','mb0','きのこのソテーの作り方'),

// （本文1）
array ('text','mb2','「秋の味覚」として人気の高いきのこ。きのこは1年を通して買うことができますが、天然きのこの旬は9月～11月頃です。ビタミン、ミネラル、食物繊維などの栄養に富むうえ、しいたけ、しめじ、まいたけ、えのき、エリンギなど種類も豊富です。今回はきのこをたっぷり使ったソテーの作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','しいたけ','4個'),
array ('mtr','しめじ','1/2パック'),
array ('mtr','まいたけ','1/2パック'),
array ('mtr','にんにく','1/2かけ'),
array ('mtr','オリーブオイル','大さじ2'),
array ('mtr','塩','小さじ1/4'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','しいたけは石づきを取り除き、4等分に切ります。しめじは石づきを取り除いてからほぐし、まいたけはそのままほぐします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','きのこは洗わない！'),
array ('free','mb0','市販の<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこは、水洗いせずに使おう！</a>水で洗うと水溶性のビタミンB群やカリウムが失われ、風味やうまみも落ちてしまうんだ。<br>
日本ではきのこに使用できる農薬の質や量が決まっていて、厳しく管理されている。だから、洗わなくても安心して食べられるってわけ♪<br>
汚れやほこりが気になるときは、水で湿らせたキッチンペーパーで拭き取ろう。<br>
ただし、同じきのこでも、真空パック入りのなめこはぬめりがあるから、水洗いするんだぜ。'),
array ('chk-end'),

array('step','02','mb0','にんにくを<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。'),
array('step','03','mb0','フライパンにオリーブオイル、にんにくを入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で熱し、香りが立ってきたところで、きのこ、塩を加えます。'),
array('step','04','mb3','強火にして、ときどき混ぜながら<strong>5分</strong>ほど炒めたらできあがり！'),

//（大見出し2）
array ('ttl_l','mb0','きのこの保存方法'),

// （本文2）
array ('text','mb3','きのこは鮮度が命の食材です。水が付くと傷みやすくなり、またそのままにしておくと乾燥して干からびてしまいます。長持ちさせるには、水分から遠ざけ、乾燥を避けることが大切です。<br>
きのこは保存の仕方によって長期保存が可能です。長持ちさせる保存方法をご紹介しましょう。'),

//（小見出し）
array ('ttl_m','mb0','2～3日で使う場合は冷蔵保存'),

array ('text','mb3','数日で使い切る場合は、冷蔵保存します。<br>
買ってきたときのパックや袋のまま冷蔵庫に入れると、中が蒸れて傷みやすくなります。種類別にキッチンペーパーで包んでから、ファスナー付き保存袋に入れて冷蔵保存します。保存期間の目安は、<strong>約1週間</strong>です。'),

//（小見出し）
array ('ttl_m','mb0','すぐに使い切れない場合は冷凍保存'),

array ('text','mb2','使い切れずに余った場合は、冷凍保存が可能です。冷凍したきのこは調理すると酵素の働きでうまみと香りが増し、さらに美味しくなりますよ。'),
array ('text','mb2','冷凍の場合の保存期間は、<strong>約1ヵ月</strong>です。保存方法は、きのこの種類によって異なります。'),
array ('ttl_s','mb0','しいたけ'),
array ('text','mb2','軸を根元で切り落とし、傘だけをファスナー付き保存袋に入れて冷凍保存します。'),
array ('ttl_s','mb0','しめじ'),
array ('text','mb2','石づきを切り落とし、小房にほぐしてから、ファスナー付き保存袋に入れて密封し、冷凍保存します。'),
array ('ttl_s','mb0','まいたけ'),
array ('text','mb2','手でほぐしてから、ファスナー付き保存袋に入れて密封し、冷凍保存します。'),
array ('ttl_s','mb0','えのき'),
array ('text','mb2','根元部分を切り落とし、使いやすいサイズに手でほぐして、ファスナー付き保存袋へ入れ、密封したら冷凍保存します。'),
array ('ttl_s','mb0','マッシュルーム'),
array ('text','mb2','軸が付いたまま薄切りにカットし、ファスナー付き保存袋へ入れ、密封後、冷凍保存します。'),
array ('ttl_s','mb0','なめこ'),
array ('text','mb3','真空パック入りの場合は、袋のまま冷凍します。<br>生の場合は、なめこをほぐし、塩を加えたお湯にサッとくぐらせます。粗熱を取った後、ファスナー付き保存袋に入れ、密封し、冷凍保存します。'),

//（大見出し2）
array ('ttl_l','mb1','きのこのソテーの人気アレンジレシピ'),

// （本文2）
array ('text','mb2','きのこのソテーをアレンジした手軽にできる人気レシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','きのこのペペロンチーノ'),
array ('textimg','05','right','きのこのペペロンチーノ','mb2','きのこのソテーをたっぷり使った<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>料理です。鍋にたっぷりの水を入れ、沸騰したら塩を入れ、パスタをゆでます。フライパンにオリーブオイルを入れ、にんにくの薄切り、赤唐辛子、ベーコンを炒めます。パスタのゆで汁を加えた後、パスタを投入し、塩、こしょうで味付けします。最後にきのこのソテーを混ぜ合わせたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','鮭ときのこのソテー'),
array ('textimg','06','left','鮭ときのこのソテー','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic148.php" class="recipe-design__link">鮭</a>ときのこを使った洋風レシピです。鮭は塩を振り、出てきた水分をキッチンペーパーで取った後、フライパンにオリーブオイルを入れ、焼きます。焼き色が付いたら、白ワイン、粒マスタードを加え、きのこのソテーを添えてできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','ほうれん草ときのこのバターポン酢炒め'),
array ('textimg','07','right','ほうれん草ときのこのバターポン酢炒め','mb0','バターとポン酢を使ったごはんに合うレシピです。塩を入れたお湯でほうれん草をゆで、氷水に入れて冷まし、水気を絞り、食べやすい大きさに切ります。フライパンにバターを入れ、すりおろしたにんにくを軽く炒めます。きのこのソテーとベーコンを入れて炒め、塩、こしょう、ポン酢と醤油を加え味をととのえたら完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','いつもよりきのこの風味を感じる～♪'),

//コウちゃん　喜ぶ
array ('ko','03','きのこ、おいしい～'),

//フマサキ　通常
array ('papa','01','きのこは低カロリーだからいくらでも食べられるな'),
 
//フラッキー　通常
array ('fl','01','きのこのソテーは<a href="'.$base_url.'/magazine/article/recipe-technic32.php" class="recipe-design__link">肉</a>や<a href="'.$base_url.'/magazine/article/recipe-technic72.php" class="recipe-design__link">魚介</a>にも合うし、<a href="'.$base_url.'/magazine/article/recipe-technic141.php" class="recipe-design__link">オムレツ</a>の付け合わせにもいいぜ！<br>
サラダにのせるだけでも美味しいぞ♪'),

//フマサキ　通常
array ('papa','01','よしっ！これからきのこのソテーを使ったレシピを増やしていこうっと！'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>石づきとは</dt>
							<dd>きのこには「傘」「軸」「石づき」という部位があり、石づきは軸の最先端部分を指します。生えていたときに地面や木に付着していた部位で、土やおがくずが付いていることがあります。</dd>
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
