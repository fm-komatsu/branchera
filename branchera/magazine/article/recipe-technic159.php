<?php
//base
include( "../../function.php" );
$content = get_id_data( '15159' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「プリンの作り方」を動画とテキストで解説。オーブンを使わない簡単なプリンの作り方と、人気のアレンジプリンのレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '159';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '7pXWd0ich6U';

//導入文
$introTxt = '第159回は、「プリンの作り方」です。美味しくなめらかなプリンの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//こうちゃん　通常
array ('ko','01','ほいくえんでたべたぷりん、おいしかった<br>また、たべた～い'),

//ミエ　困る
array ('mama','02','えっ、プリン！？<br>カラメルを作らなきゃだし、オーブン使わなきゃだし、時間がかかりそう…'),

//フラッキー　通常
array ('fl','01','ミエ、オーブンを使わなくてもプリンは短時間で簡単に作れるんだぜ！'),

//ミエ　通常
array ('mama','01','簡単なの？<br>お願い、フラッキー、教えて～！'),

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
array ('ttl_l','mb0','蒸しプリンの作り方'),

// （本文1）
array ('text','mb2','<a href="'.$base_url.'/magazine/article/recipe-collect02.php" class="recipe-design__link">卵</a>の風味豊かなカスタードプリンは口当たりがやさしく、子どもにも大人にも人気の<a href="'.$base_url.'/magazine/article/recipe-collect04.php" class="recipe-design__link">スイーツ</a>です。<br>プリンはオーブンやレンジ、<a href="'.$base_url.'/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸し器</a>などを使って作ります。なかでも、蒸し器を使うと、熱をゆっくりと伝えるため、美味しくなめらかで、口でとろけるプリンに仕上がります。<br>今回は、蒸しプリンの作り方をメインにご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('ttl5','mb0','＜プリン液＞'),
array ('mtr','耐熱カップ','4個'),
array ('mtr','牛乳','250ml'),
array ('mtr','卵（L玉）','3個'),
array ('mtr','グラニュー糖','40g'),
array ('mtr','バニラエッセンス','2〜3滴'),
array ('mtr-end'),
array ('ttl5','mb0','＜カラメル＞'),
array ('mtr-st'),
array ('mtr','グラニュー糖','40g'),
array ('mtr','水','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ1</a>'),
array ('mtr','熱湯','大さじ1'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','カラメルを作ります。小鍋にグラニュー<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">糖</a>、水を入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。触らずに、焦げ茶色になるまで加熱します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','カラメルは触らずに加熱！'),
array ('free','mb0','上手にカラメルを作るには、混ぜないことがポイントだぜ。動かさずに加熱するだけで、美味しいカラメルができあがるんだ！かき混ぜると、グラニュー糖が再び結晶化して白く固まってしまうぞ。<br>
それから、色が濃くなるまで煮詰めると苦みが増すから、好みで調整してくれよな。'),
array ('chk-end'),

array('step','02','mb3','火からはずし、熱湯を加えて、型に分け入れます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','熱湯のハネに注意！'),
array ('free','mb0','熱したカラメルが入った鍋に熱湯を入れるとき、カラメルがはねることがあるから、注意しながら熱湯を入れてくれ！'),
array ('chk-end'),

array('step','03','mb3','蒸し器を蒸気が上がる状態にしておきます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','せいろ以外は蓋をふきんで包む'),
array ('free','mb0','ステンレスやアルミの蒸し器の場合は、ほかの<a href="'.$base_url.'/magazine/article/recipe-technic155.php" class="recipe-design__link">蒸し料理</a>を作るときと同様に、蓋をふきんで包もう！<strong>蓋に付いた蒸気が水滴になって落ちると、仕上がりが水っぽくなってしまう</strong>からな。ふきんで蓋を包めば、ふきんが蒸気を吸い取るから、なめらかなプリンができあがるんだ。ただし、せいろの場合はふきんは不要だぜ！'),
array ('chk-end'),

array('step','04','mb0','牛乳を電子レンジ、または小鍋で<strong>60度</strong>程度に温めます。'),
array('step','05','mb3','ボウルに<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵を割り入れ</a>、泡立て器でほぐします。<br>グラニュー糖を加えて、泡立てないように混ぜます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','泡立てるとプリンに「す」ができる'),
array ('free','mb0','プリンは「す」ができやすい。原因の1つは、生地の中の「空気」なんだ。卵は空気を抱え込みやすいから、泡立てると気泡ができて、それが焼いたときに固まって「す」になってしまうんだ。だから、泡立てないようにしよう！泡立て器をボウルの底に当て、ぐるぐると回す程度でいいんだぜ！'),
array ('chk-end'),

array('step','06','mb0','温めた牛乳を少しずつ加えて混ぜます。<br>次に、バニラエッセンスを加えて混ぜます。'),
array('step','07','mb0','カラメルソースを入れたプリンカップに茶こしをのせて、プリン液を注ぎ入れます。'),
array('step','08','mb0','蒸気が上がった蒸し器にプリンカップを入れ、ごく<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で<strong>20分</strong>程度蒸します。'),
array('step','09','mb3','プリンカップを持って揺すり、表面が固まっていれば蒸し上がりです。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','やけどに注意！'),
array ('free','mb0','このときプリンカップが熱くなっているから、やけどには注意してくれ！プリンカップを持つときは、ふきんの上から持つといいぞ！'),
array ('chk-end'),

array('step','10','mb3','蒸し器から取り出し、粗熱が取れたら冷蔵庫で冷やします。<br>お好みでプリンカップからプリンをお皿へ取り出し、完成です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','容器からうまく外す方法は？'),
array ('free','mb0','固まったプリンを上手に取り出すには、つまようじをプリンカップと生地の接着面に刺して、空気穴を作ろう！このとき、プリンを傷つけないようにしてくれよな。<br>カラメルが接着面に入り込んでくるようにプリンカップを傾け、プリンを盛る器をかぶせて、しっかり押さえてひっくり返すんだ。上下に揺らすと簡単にプリンが出てくるぞ。'),
array ('chk-end'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2',' 蒸し器がなければ、フライパンや鍋、オーブンを活用！'),
array ('text','mb0','蒸しプリンはフライパンや鍋でも蒸すことができますよ。フライパンや鍋にお湯を入れ、プリン液を入れたプリンカップにアルミ箔をかぶせて、蓋をすれば蒸し器になります。<br>
また、オーブンを使うと食感がしっかりとしたかための「焼きプリン」に仕上がります。オーブンを使うときは、バットにお湯を入れ、そこにプリンカップを置き、湯煎焼き<sup>※</sup>します。'),
array ('plus-end'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2','<span>マグカップやメスティン<sup>※</sup>でプリンを作る</span>'),
array ('text','mb0','プリンカップが手元にない場合は、マグカップを使うとよいでしょう。一般的なプリンカップよりも、高さのあるプリンができます。<br>また、キャンプ用品のメスティンを使う方法もあります。メスティンにプリン液を入れたら、お湯を張った鍋に入れて10分程度加熱すれば、大きなプリンのできあがりです。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','プリンの人気アレンジレシピ'),

// （本文2）
array ('text','mb2','プリンをアレンジした人気のレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','焼きプリン'),
array ('textimg','11','right','焼きプリン','mb2','焼き目が付き、香ばしい香りとかための食感が魅力の焼きプリンは、オーブンで作ります。最初にオーブンを温めておきます。カラメルソース、プリン液を作り、耐熱用の器に入れます。水を張ったバットにプリン液を入れた器を置き、焼きます。焼き時間は、大きいホールを作る場合は140度で40～50分。小さな器の場合は20分程度です。'),

//（小見出し）
array ('ttl_m','mb1','ヨーグルトプリン'),
array ('textimg','12','left','ヨーグルトプリン','mb2','ヨーグルトを使ったプリンです。卵と卵黄をヨーグルトに入れて混ぜます。牛乳（または豆乳）に砂糖を加えて火にかけ温めます。そこに卵を入れたヨーグルトを加えて、混ぜ合わせます。カラメルを入れた器にプリン液を<a href="'.$base_url.'/magazine/article/recipe-technic63.php" class="recipe-design__link">裏ごし</a>しながら入れ、180度のオーブンで15分程度、湯煎焼きします。冷蔵庫で冷やして召し上がれ。<a href="'.$base_url.'/magazine/article/recipe-technic142.php" class="recipe-design__link">コンポート</a>や<a href="'.$base_url.'/magazine/article/recipe-technic83.php" class="recipe-design__link">フルーツ</a>ソースをかけるのもおすすめですよ。'),

//（小見出し）
array ('ttl_m','mb1','ミルクティープリン'),
array ('textimg','13','right','ミルクティープリン','mb2','紅茶の香りがふわっと漂う上品なプリンです。鍋に紅茶と水を入れて沸騰させ、牛乳、砂糖、コンデンスミルクを入れてから、茶葉を取り出します。ボウルに卵を割り入れてほぐし、少しずつ紅茶と混ぜ合わせます。プリン液を茶こしでこしながらプリンカップに入れ、蒸し器で蒸します。その後、冷蔵庫で冷やせば完成です。ホイップした<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">生クリーム</a>を添えても美味しいですよ。'),

//（小見出し）
array ('ttl_m','mb1','かぼちゃプリン'),
array ('textimg','14','right','かぼちゃプリン','mb0','濃厚でしっとりした<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>プリンも大人気。<a href="'.$base_url.'/magazine/article/recipe-technic149.php" class="recipe-design__link">かぼちゃ</a>は皮を切り落とし、小さめにカットして器に入れ、ラップをしてレンジでやわらかくします。砂糖、卵、牛乳、バニラエッセンスを加えてミキサーで混ぜ、ざるでこしてから、カラメルを入れた器に注ぎます。蒸し器で蒸し、粗熱が取れたら冷蔵庫で冷やします。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','意外と簡単に、しかも上手にできちゃった♪<br>プリン作りって、楽しいな～'),

//コウちゃん　喜ぶ
array ('ko','03','ぷりん、ぷるぷるでおしい～♪'),

//マサキ　通常
array ('papa','01','手作りでこんなになめらかになるんだね！'),

//フラッキー　通常
array ('fl','01','秋、冬はかぼちゃプリンをおすすめするぜ！'),

//ミエ　通常
array ('mama','01','栄養満点のプリンだね！<br>次はアレンジプリンに挑戦しようっと！'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>湯煎焼きとは</dt>
							<dd class="mb2">オーブンの天板やバットにお湯を張り、プリン液や<a href="'.$base_url.'/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>などの生地を耐熱容器に入れて、蒸し焼きにする調理方法です。</dd>
							<dt>メスティンとは</dt>
							<dd>キャンプ用品の1種で、アルミ製の飯盒（はんごう）のこと。四角く、<a href="'.$base_url.'/magazine/article/recipe-technic47.php" class="recipe-design__link">お弁当</a>箱のような形状をしています。</dd>
						</dl>
           </div>
          </div>
      </div>
'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','13004'),
array ('recommend-recipe-id','15119'),
array ('recommend-recipe-id','15156'),
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
