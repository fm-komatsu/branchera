<?php
//base
include( "../../function.php" );
$content = get_id_data( '15121' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ハヤシライスの作り方」を動画とテキストで解説。市販のルーを使わずに家にある材料でできる、ハヤシライスのレシピをご紹介します。美味しく作るコツや、アレンジメニューも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '121';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '127T3POoYsI';

//導入文
$introTxt = '第121回は、「美味しいハヤシライスの作り方」です。お家でもコツさえ掴めば、本格的な味わいが楽しめますよ！今回は子どもから大人まで、人気メニューのハヤシライスの基本の作り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//  コウちゃん　通常
array ('ko','01','ね〜ね〜、こうちゃんおなかすいちゃったよ〜'),

// パパ　通常
array ('papa','01','よし！今日はパパがとびっきり美味しいハヤシライスを作ってあげよう！'),

//  コウちゃん　通常
array ('ko','01','パパのハヤシライス～！'),

// パパ　通常
array ('papa','01','せっかくだし、今日はレトルトを使わないで手作りしてみようかな'),

// フラッキー　通常
array ('fl','01','おっ！パパ、やる気じゃないか！<br>オレが家でも簡単に美味しくできる、ハヤシライスの作り方を教えてやるぜ'),

// パパ　通常
array ('papa','01','さすがフラッキー！頼りになるな<br>よろしく頼むよ'),



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
array ('ttl_l','mb0','美味しいハヤシライスの作り方'),

// （本文1）
array ('text','mb2','洋食の定番メニューでもある、ハヤシライス。市販のルーを使う方も多いと思いますが、実は意外と簡単に手作りできるメニューなのです。今回はお肉とトマトのうまみが溶け込んだ、本格的で美味しいハヤシライスの作り方のコツをご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic32.php" class="recipe-design__link">牛こま切れ肉</a>','150g'),
array ('mtr','玉ねぎ','1/2個'),
array ('mtr','マッシュルーム','6個'),
array ('mtr','バター','10g'),
array ('mtr','薄力粉','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1'),
array ('mtr','トマトジュース','200ml'),
array ('mtr','ケチャップ','大さじ2'),
array ('mtr','中濃ソース','大さじ1・1/2'),
array ('mtr','スープの素（顆粒）','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1'),
array ('mtr','ご飯','2人分'),
array ('mtr','パセリ','適量'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb0','牛肉を食べやすい大きさに切ります。'),
array('step','02','mb0','玉ねぎとマッシュルームは薄切りにします。マッシュルームは切る前に、ペーパーで汚れを拭き取りましょう。'),
array('step','03','mb0','鍋にバターを入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し、牛肉を炒めます。牛肉の色が変わったら、玉ねぎとマッシュルームを加えて炒めてください。玉ねぎがしんなりしたら、薄力粉を振り、全体を炒めましょう。'),
array('step','04','mb0','薄力粉の粉っぽさがなくなったら、一旦火を止めます。トマトジュースを少しずつ加えて溶きのばしましょう。'),
array('step','05','mb3','次に、ケチャップ、中濃ソース、スープの素（顆粒）を加えます。蓋をして、弱めの中火で再び加熱してください。<br>とろりとするまで5分程度煮たら、ルーの完成です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','よりスパイシーにさせたいならウスターソースを！'),
array ('free','mb0','少しスパイシーな仕上がりのルーにしたいなら、中濃ソースの代わりにウスターソースを使ってもOK！<br>
中濃ソースもウスターソースも主な原材料は同じだけど、一般的にウスターソースのほうが、スパイシーな味付けのものが多いんだ。<br>
味に深みを出したい場合は、隠し味として赤ワインを入れるのもおすすめだぜ。好みに合わせて試してみてくれ！'),
array ('chk-end'),

array('step','06','mb3','器に盛ったご飯にルーをかけたら、ハヤシライスのできあがりです。お好みで、みじん切りにしたパセリを振りかけてください。'),

// （大見出し2）
array ('ttl_l','mb0','ハヤシライスの人気アレンジレシピ'),

// （本文2）
array ('text','mb2','美味しいルーがあれば、ご飯にかける以外にも、いろいろな料理に応用することができます！手軽にできる、ハヤシライスのアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','煮込み<a href="'.$base_url.'/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>'),
array ('textimg','07','right','煮込みハンバーグ','mb2','余ったルーを使えば、簡単に美味しい煮込みハンバーグが作れますよ。薄切りにした玉ねぎをしんなりするまで炒め、水を加えます。そこに両面を焼いたハンバーグを入れて、沸騰したら<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>を取って煮込んでください。その後、火を一旦止めてルーを入れます。味がなじむまで煮込んだらできあがりです。さらに、バターで炒めたにんじんやじゃがいもを添えると、料理に彩りが出ますよ。'),

//（小見出し）
array ('ttl_m','mb1','ハヤシライスコロッケ'),
array ('textimg','08','left','ハヤシライスコロッケ','mb0','<a href="'.$base_url.'/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>のおかずや、おつまみにぴったりなコロッケのレシピです。余ったルーに、グリンピースと温かいごはん、炒めた玉ねぎ、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>こしょうを混ぜ合わせましょう。全体が混ざったら、丸くまとめて小麦粉、溶き卵、パン粉を順に付けていきます。最後に、きつね色になるまで揚げてできあがりです。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//コウちゃん　喜ぶ
array ('ko','03','パパのハヤシライス、おいしい〜！'),

//ママ　通常
array ('mama','01','悔しいけど、私が前に作ったものより美味しい！<br>市販のルーじゃなくても、こんなに美味しくできるのね'),

//フラッキー　褒める
array ('fl','03','正しい手順で作れば、特別なことをしなくても<br>美味しいハヤシライスができるんだぜ！'),

//パパ　通常
array ('papa','01','フラッキーのおかげで上手に作れたよ！<br>今度はにんにくを入れた、大人のハヤシライスを作ってみようかな？'),

//ママ　通常
array ('mama','01','美味しそうじゃない！食べてみたいわ〜'),

//コウちゃん　通常
array ('ko','01','こうちゃんもいっしょにたべる〜！'),

);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15112'),
array ('recommend-recipe-id','15152'),
array ('recommend-recipe-id','14019'),
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
