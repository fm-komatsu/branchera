<?php
//base
include( "../../function.php" );
$content = get_id_data( '15158' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「白和えのレシピ」を動画とテキストで解説。ほうれん草を使った簡単な白和えの作り方と、ひじきや柿などのフルーツを使った人気のアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '158';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'R455YGzd2ZA';

//導入文
$introTxt = '第158回は、「白和えのレシピ」です。体に優しく、アレンジやリメイクの幅が広い、和食の定番である白和えの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','疲れがたまってるみたいだから、今日は何か体に優しいものが食べたいな'),
  
//ミエ　通常
array ('mama','01','<a href="'.$base_url.'/magazine/article/recipe-technic80.php" class="recipe-design__link">お豆腐</a>があるんだけど、いつもの冷ややっこや<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">お味噌汁</a>以外に、何か美味しいもの作れないかなあ？'),

//フラッキー　通常
array ('fl','01','白和えなんてどうだ？あっさりした味わいで消化にもいいぜ！'),

//ミエ　困る
array ('mama','02','白和えって、すぐに作れるの？'),

//フラッキー　通常
array ('fl','01','とっても簡単さ！今日は白和えの作り方を教えてやろう！'),

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
array ('ttl_l','mb0','簡単に美味しく作る白和えレシピ'),

// （本文1）
array ('text','mb2','白和えは、豆腐、白ごま、白味噌の「白を和える」ことから名付けられた料理。食材が白い衣をまとっているように見えることから「和え衣」と呼ぶこともあります。'),
array ('text','mb2','家庭料理として親しまれてきた白和えですが、最近は栄養価の高さと食べやすさから、赤ちゃんの<a href="'.$base_url.'/magazine/article/recipe-technic56.php" class="recipe-design__link">離乳食</a>としても人気です。今回は簡単にできる白和えの作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','〈白和え衣〉',''),
array ('mtr','木綿豆腐','100g'),
array ('mtr','練りごま(白)','大さじ2'),
array ('mtr','薄口醤油','大さじ1/2'),
array ('mtr','砂糖','小さじ1'),
array ('mtr','塩','適量'),
array ('mtr','〈具材〉',''),
array ('mtr','ほうれん草','2株'),
array ('mtr','にんじん','60g'),
array ('mtr','こんにゃく','60g'),
array ('mtr','塩','適量'),
array ('mtr','だし汁','100ml'),
array ('mtr','薄口醤油','小さじ2'),
array ('mtr','みりん','小さじ2'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','木綿豆腐を2枚重ねたキッチンペーパーで包みます。'),
array('step','02','mb3','豆腐の上に、お皿やバット、蓋など平板なものをのせ、重石をして30分ほど水切りします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','豆腐の水切りでは重石をのせる'),
array ('free','mb0','豆腐を水切りするときは、重石をのせてくれよな！重石をのせて水切りすると、豆腐のみずみずしい舌触りと風味が活かされるんだ。'),
array ('chk-end'),

array('step','03','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic157.php" class="recipe-design__link">ほうれん草</a>は根元に十字の切り込みを入れてよく洗います。'),
array('step','04','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を入れたお湯でほうれん草を1分ほどゆでて、冷水に取ります。'),
array('step','05','mb0','ほうれん草の水気を絞り、食べやすい大きさに切った後、再びほうれん草の水気を絞ります。'),
array('step','06','mb3','にんじんの<a href="'.$base_url.'/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむいて</a>、縦4cmほどの長さの<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にします。'),
array('step','07','mb3','<a href="'.$base_url.'/magazine/article/recipe-technic78.php" class="recipe-design__link">アク抜きしたこんにゃく</a>を短冊切りにします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','こんにゃくはアク抜きする'),
array ('free','mb0','こんにゃくを料理するときはアク抜きしてくれ！臭みが取れるし、味が染み込むから美味しくなるぞ。特に白和えは、豆腐の風味を楽しむ料理だからな。アク抜きしたこんにゃくのほうが、アク抜きしてないものよりも豆腐の風味が活きるんだ。'),
array ('chk-end'),

array('step','08','mb0','小鍋に、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>、薄口<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、みりん、にんじん、こんにゃくを入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。'),
array('step','09','mb0','沸騰したら、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にして4～5分煮ます。'),
array('step','10','mb0','小鍋の火を止めて、冷まします。'),
array('step','11','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">すり鉢</a>に、水切りした豆腐をちぎり入れ、すりこぎでなめらかにします。'),
array('step','12','mb0','豆腐に、練りごま、薄口醤油、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加えて、全体を混ぜます。'),
array('step','13','mb3','全体が混ざったら、ほうれん草と具材を加えて和えます。塩で味をととのえたらできあがり！'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2',''),
array ('text','mb0','豆腐の水切り方法は、重石をのせる以外にもあります。時短したいときは電子レンジを使い、味を染み込ませたいときは鍋でゆでるとよいですよ。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','白和えのアレンジレシピ'),

// （本文2）
array ('text','mb2','クセがなくさっぱりとした白和えは幅広い食材との相性がよく、簡単にアレンジできますよ。今回は<a href="'.$base_url.'/magazine/article/recipe-technic155.php" class="recipe-design__link">野菜</a>やくだもの、ほかの総菜と組み合わせたアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','かぼちゃ、さつまいも、くりの白和え'),
array ('textimg','14','right','かぼちゃ、さつまいも、くりの白和え','mb2','甘い野菜を使った、子どもにも喜ばれる白和えです。<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>、<a href="'.$base_url.'/magazine/article/recipe-technic108.php" class="recipe-design__link">さつまいも</a>、くりをやわらかくし、水切りをします。なめらかにつぶした豆腐、白味噌、練りごま、砂糖を和えて、できあがりです。'),

//（小見出し）
array ('ttl_m','mb1','ひじきの煮物の白和え'),
array ('textimg','15','left','ひじきの煮物の白和え','mb0','ひじきの煮物のうまみがアクセントになり、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>とよく合う一品です。ひじきの煮物に、水切りをしてなめらかにした豆腐を加えます。お好みですりごまを加えたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','フルーツの白和え'),
array ('textimg','16','right','フルーツの白和え','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic83.php" class="recipe-design__link">フルーツ</a>のみずみずしさが美味しい、箸休めにもなる一品です。豆腐を水切りし、すりこぎでなめらかにします。豆腐に白味噌、練りごま、砂糖を加えたら、できあがり！<br class="mb2">'),
array ('text','mb0','砂糖の代わりに、てんさい糖やはちみつ、メープルシロップなどで甘みを付けるのもおすすめです。(※はちみつは、1歳未満のお子さまには与えないように注意してください)<br>
また、マスカルポーネチーズやクリームチーズ、泡立てていない<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">生クリーム</a>などを加えると、デザートとして楽しめますよ。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//コウちゃん　喜ぶ
array ('ko','03','やわらかくて、おいしい～'),

//ミエ　通常
array ('mama','01','白和えって体に優しいし、いろんなアレンジができるから、我が家の定番にしたいね'),

//マサキ　通常
array ('papa','01','ごはんのおかずにもなるし、お酒にも合う。白和えって幅広く使えるんだね'),

//フラッキー　通常
array ('fl','01','白和えはコロッケや春巻きの具材にしたり、<a href="'.$base_url.'/magazine/article/recipe-technic143.php" class="recipe-design__link">お好み焼き</a>にしたりすることもできるぜ！'),

//ミエ　通常
array ('mama','01','わあ～、さらに1品増やせるなんて便利で嬉しい！'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>てんさい糖とは</dt>
							<dd>さとうだいこんから作られる砂糖。上白糖に比べて、オリゴ糖が多く含まれている。</dd>
						</dl>
           </div>
          </div>
      </div> 
'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15101'),
array ('recommend-recipe-id','15155'),
array ('recommend-recipe-id','15126'),
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
