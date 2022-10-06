<?php
//base
include( "../../function.php" );
$content = get_id_data( '15135' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「酢の物の作り方」を動画とテキストで解説。きゅうりを使った基本の酢の物を、美味しく仕上げるコツと、たこや春雨を使った人気のアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '135';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '_DukgFX1ryE';

//導入文
$introTxt = '第135回は、「きゅうりとわかめの酢の物」です。基本の酢の物を美味しく仕上げるコツのほか、アレンジメニューもご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','きゅうりを切ってるけど、サラダを作ってるの？'),

//ミエ　通常
array ('mama','01','今日は、小口切りにしたきゅうりで酢の物を作ろうと思って'),

//マサキ　通常
array ('papa','01','酢の物か～、さっぱりしていていいね！'),

//ミエ　困る
array ('mama','02','でも、いつも仕上がりが水っぽくなっちゃう…'),

//フラッキー　通常
array ('fl','01','酢の物を水っぽくせずに美味しく仕上げるには、ちょっとしたコツがあるぞ！'),

//ミエ　通常
array ('mama','01','そのコツ、知りたい！フラッキー、ぜひ教えて～'),

//フラッキー　通常
array ('fl','01','OK！美味しくできる酢の物の作り方を教えてやるぜ！'),

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
array ('ttl_l','mb0','きゅうりとわかめの酢の物のレシピ'),

// （本文1）
array ('text','mb2','きゅうりの酢の物は、さっぱりとした味わいとシャキシャキとした食感を楽しめる人気のレシピ。今回はきゅうりとわかめを美味しく酢の物にする、基本のレシピをお伝えします！'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','きゅうり','1本'),
array ('mtr','塩','小さじ1/4'),
array ('mtr','わかめ（乾燥）','2g'),
array ('mtr','米酢','大さじ1'),
array ('mtr','砂糖','大さじ1/2'),
array ('mtr','醤油','小さじ1'),
array ('mtr-end'),

array ('ttl_m','mb1','手順'),
array('step','01','mb0','きゅうりは<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">薄切り</a>にし、ボウルに入れて塩をまぶし、5分ほどおきます。'),
array('step','02','mb3','ボウルのきゅうりの水気を絞ります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','きゅうりの水気を絞るのはタイミングが大切だ！'),
array ('free','mb0','きゅうりは塩を振った後、しんなりするまで5分程度おいておこう！しんなりする前に水気を絞ると、きゅうりが折れたり割れたりして、形が崩れてしまうんだ。水気が出たところを見計らって、しっかり絞るのが大切だぜ！'),
array ('chk-end'),

array('step','03','mb3','わかめは水で戻します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','塩蔵わかめは塩抜きをして使おう！'),
array ('free','mb0','塩蔵わかめを使う場合、わかめの分量は20gだ！ざっと水洗いして、たっぷりの水に5～10分つけて塩抜きをしよう。塩抜きができたら、わかめを食べやすく切ってから使うといいぞ！'),
array ('chk-end'),

array('step','04','mb0','わかめの水気を絞ります。'),
array('step','05','mb3','きゅうりとわかめを合わせ、米酢、砂糖、醤油を加えて混ぜます。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','酢の物の保存期間'),
array('text','mb0','酢の物を保存できる日にちは、冷蔵保存で2～4日程度です。酢の物は日持ちが長くないので、作り置きをするときは量に気を付けましょう。<br>
調味料で味付けをする前であれば、冷凍保存が可能です。冷凍保存をする場合は、塩もみをして水気を絞ったきゅうりをラップに包み、ファスナー付き保存袋に入れます。調理をするときは、自然解凍または流水解凍をし、調味料を加えるだけで酢の物を作ることができますよ。'),
array ('plus-end'),


// （大見出し2）
array ('ttl_l','mb1','人気のアレンジメニュー'),
array ('text','mb2','基本の酢の物の作り方をマスターしたら、アレンジメニューにもチャレンジしてみましょう。たこや春雨など、きゅうりとよく合う食材を使ったレシピをご紹介します'),

//（小見出し）
array ('ttl_m','mb1','きゅうりとたこの酢の物'),
array ('textimg','06','right','きゅうりとたこの酢の物そば','mb2','ヘルシーでボリューム感のあるきゅうりとたこの酢の物は、暑くて食欲がないときにおすすめです。塩をふって水気を絞った小口切りのきゅうりに、ゆでだこをそぎ切りにして合わせ、酢、醤油、砂糖、塩少々を加えて混ぜます。千切りのしょうがや大葉を加えると、清涼感が増します。全ての具材と調味料を混ぜ終えたら完成です。千切りにした大葉は、仕上げにのせましょう。'),

//（小見出し）
array ('ttl_m','mb1','きゅうりと春雨の酢の物'),
array ('textimg','07','left','きゅうりと春雨の酢の物','mb0','きゅうりに春雨を加えると、いつもの酢の物がボリュームおかずに！水気を絞ったきゅうりに、さっとゆでた春雨を加えます。さらに、細切りにした<a href="'.$base_url.'/magazine/article/recipe-technic37.php" class="recipe-design__link">薄焼き卵</a>やハムも加え、酢、醤油、砂糖、塩少々で味を調えます。ごま油を少々加えると、香りとコクが増しますよ。'),


);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','美味しい！全然水っぽくないよ！'),

//コウちゃん　笑顔
array ('ko','01','おいしいね〜'),

//ミエ　通常
array ('mama','01','水気の絞り方に気を付けるだけで、こんなに美味しく酢の物が作れるんだね！我ながら今までで一番のできかも♪'),

//フラッキー　褒める
array ('fl','03','ちょっとしたコツをきちんと押さえておけば、美味しく仕上げられるんだぞ！もずくやめかぶ、じゃこなんかも酢の物にすると美味しいぜ！'),
  
//ミエ　笑顔
array ('mama','01','上手な作り方を覚えたし、これからはいろんな具材の酢の物にもチャレンジしてみようっと！'),


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
