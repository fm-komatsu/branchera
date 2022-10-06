<?php
//base
include( "../../function.php" );
$content = get_id_data( '15145' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ドレッシングの作り方」を動画とテキストで解説。サラダやカルパッチョなどいろいろなメニューに使える、3種類のドレッシングの作り方をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '145';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'RhozZPe_KEc';

//導入文
$introTxt = '第145回は、「ドレッシングの手作りレシピ」です。和風や洋風など、3種類のドレッシングの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','よし！これでおしゃれな生ハムサラダが完成だ～'),

//ミエ　通常
array ('mama','01','わあ～、美味しそう！'),

//マサキ　困る
array ('papa','02','あれっ！ドレッシング切らしているの忘れてた！'),

//フラッキー　通常
array ('fl','01','大丈夫だ！ミキサーを使わなくても簡単に美味しいドレッシングが作れるぞ！'),

//マサキ　驚く
array ('papa','03','フラッキー、ドレッシングって自分で作れるの？教えて！'),

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
array ('ttl_l','mb0','ドレッシングの定番レシピ3選'),

// （本文1）
array ('text','mb2','サラダやカルパッチョなどに欠かせないドレッシングは、素材そのものの美味しさを引き立ててくれる調味料。種類の豊富な市販のドレッシングも手軽でよいですが、手作りするとお好みの味にアレンジできたり、使う分だけ作れたりするのでおすすめです。<br>
今回は、ドレッシングの手作りレシピをご紹介します。'),

// （小見出し）
array ('ttl_m','mb0','和風ドレッシング'),
array ('text','mb2','定番で人気の和風ドレッシングは、サラダはもちろん、<a href="'.$base_url.'/magazine/article/recipe09.php" class="recipe-design__link">蒸し鶏</a>や<a href="'.$base_url.'/magazine/article/recipe-technic155.php" class="recipe-design__link">温野菜</a>など、幅広い料理に使えます。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">米酢</a>','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1と1/2'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>','大さじ1と1/2'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>','小さじ1'),
array ('mtr','すりごま（白）','小さじ1'),
array ('mtr','サラダ油','大さじ1'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','ボウルに米酢、醤油、砂糖、<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">すりごま</a>を入れ、よく混ぜます。'),
array('step','02','mb3','サラダ油を少しずつ加えて混ぜ、全体が馴染んだら完成です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','サラダ油は少しずつ混ぜながら加えよう！'),
array ('free','mb0','サラダ油を加えるときは、いきなり分量全部を加えたらだめだぞ！サラダ油を一気に加えると、酢と油の成分がきちんと混ざらなくなって分離してしまうんだ。まず、サラダ油以外の材料を混ぜてから、サラダ油を少しずつ入れて混ぜるようにしてくれ！<br>
ほかのドレッシングを作るときも、同じようにサラダ油やオリーブオイルは少しずつ入れるようにしてくれよな！'),
array ('chk-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','材料を追加してアレンジもおすすめ！'),
array('text','mb0','和風ドレッシングに、すりおろした玉ねぎやりんごを加えると、味に奥深さが出ておすすめです。お好みの食材でアレンジを楽しんでください。'),
array ('plus-end'),

// （小見出し）
array ('ttl_m','mb1','イタリアンドレッシング'),
array ('text','mb2','イタリアンドレッシングは、白ワインビネガーを効かせた洋風ドレッシングの1つ。トマトとモッツァレラでシンプルに仕上げたカプレーゼや、濃厚な<a href="'.$base_url.'/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>サラダなどによく合います。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','白ワインビネガー','大さじ1/2'),
array ('mtr','おろしにんにく','少々'),
array ('mtr','塩','小さじ1/3'),
array ('mtr','粗びき黒こしょう','少々'),
array ('mtr','オリーブオイル','大さじ2'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','03','mb0','ボウルに白ワインビネガー、おろしにんにく、塩、粗びき黒こしょうを入れ、よく混ぜます。'),
array('step','04','mb3','オリーブオイルを少しずつ加えて混ぜ、全体が馴染んだら完成です。'),

// （小見出し）
array ('ttl_m','mb1','フレンチドレッシング','french-dressing'),
array ('text','mb2','洋風ドレッシングとして昔から親しまれてきたフレンチドレッシング。サラダのほかに、魚介のカルパッチョにもおすすめです。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','白ワインビネガー（または米酢）','大さじ1/2'),
array ('mtr','マスタード','小さじ1'),
array ('mtr','塩','ひとつまみ'),
array ('mtr','サラダ油','大さじ2'),
array ('mtr-end'),

array ('ttl_m','mb1','手順'),
array('step','05','mb3','ボウルに白ワインビネガー、マスタード、塩を入れ、よく混ぜます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','白ワインビネガーは米酢で代用してもOK！'),
array ('free','mb0','もしも家に白ワインビネガーがなかったら、米酢を使っても大丈夫だ！米酢で代用すると酸味が少し抑えられるぞ！'),
array ('chk-end'),

array('step','06','mb3','サラダ油を少しずつ加えて混ぜ、全体が馴染んだら完成です。'),


//（大見出し2）
array ('ttl_l','mb1','手作りドレッシングの活用レシピ'),
array ('text','mb2','ご紹介した3種類のドレッシングによく合う料理のレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','サラダチキン'),
array ('textimg','07','right','サラダチキン','mb2','あっさりした味わいの<a href="'.$base_url.'/magazine/article/recipe-technic144.php" class="recipe-design__link">サラダチキン</a>は、和風の味付けにもよく合います。サラダほうれん草や水菜など、お好みの葉物野菜と、薄切りにしたサラダチキンをお皿に盛り、和風ドレッシングを添えたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','アボカドサラダ'),
array ('textimg','08','left','アボカドサラダ','mb2','濃厚なアボカドとみずみずしいトマトの組み合わせが相性ぴったりのサラダです。2cm角に切った<a href="'.$base_url.'/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>をボウルに入れてレモン汁を振りかけます。トマトを2cm角に切って、アボカドと一緒に皿に盛り、イタリアンドレッシングをかけたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','カルパッチョ'),
array ('textimg','09','right','カルパッチョ','mb0','新鮮な生の魚介類を美味しく食べるヘルシーな一皿です。鯛やすずきなどの白身魚を<a href="'.$base_url.'/magazine/article/recipe-technic111.php" class="recipe-design__link">そぎ切り</a>にして器に並べ、春菊やルッコラ、芽ねぎなどの野菜を飾ります。フレンチドレッシングを振りかけたら完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','自家製ドレッシングができたから、これで生ハムサラダが完成だ～'),

//ミエ　通常
array ('mama','01','市販品に負けないくらい美味しい！'),

//コウちゃん　喜ぶ
array ('ko','03','こうちゃん、これすき～'),

//ミエ　通常
array ('mama','01','コウちゃん、いつもより野菜いっぱい食べてるね～'),

//マサキ　通常
array ('papa','01','大人用には、和風ドレッシングに柚子皮や柚子こしょう、イタリアンドレッシングにオリーブを刻んで入れるのもいいかも…'),

//フラッキー　通常
array ('fl','01','材料によっては傷みやすいから、使い切れる分だけ作るように注意してくれよな！'),

);

//関連記事
$recommendrecipe = array (
  array	('recommend-recipe-st'),
  array ('recommend-recipe-id','14009'),
  array ('recommend-recipe-id','15030'),
  array ('recommend-recipe-id','13003'),
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
