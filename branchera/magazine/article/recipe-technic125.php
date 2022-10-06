<?php
//base
include( "../../function.php" );
$content = get_id_data( '15125' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「基本のオムライスのレシピ」を動画とテキストで解説。基本の木の葉型のオムライスの作り方をご紹介します。チキンライスを卵で包むコツや、アレンジメニューも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '125';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'Qqkxel7xbFo';

//導入文
$introTxt = '第125回は、初心者でもできる「基本のオムライスのレシピ」です。子どもだけでなく大人にも人気の本格オムライスの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//コウちゃん　通常
array ('ko','01','まま、こうちゃんおむらいすがたべたいな～。きれいなやつがたべたーい！'),

// ミエ　驚く
array ('mama','03','きれいって…お店で食べるようなオムライス？'),

//コウちゃん　通常
array ('ko','01','うん、おみせでたべたおむらいす、つくって〜！'),

// ミエ　困る
array ('mama','02','確かに、お店のオムライスは表面がきれいだし、形も整ってるよね。<br>いつも私が作るときは、包み方適当だもんなあ…<br>フラッキー！きれいなオムライスを作るにはどうしたらいいの？'),

// フラッキー　通常
array ('fl','01','やっぱり！呼ばれると思ったぜ！<br>さっそく、基本のきれいなオムライスを作る方法を教えるぞ！'),

// ミエ　通常
array ('mama','01','ありがとう、よろしくね！'),


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
array ('ttl_l','mb0','基本のオムライスのレシピ'),

// （本文1）
array ('text','mb2','洋食屋の定番メニュー・オムライス。ビーフシチューがかけてあるものや、半熟の<a href="'.$base_url.'/magazine/article/recipe-technic48.php" class="recipe-design__link">オムレツ</a>をチキンライスにのせた「タンポポオムライス」など、お店によってさまざまなオムライスのメニューがありますよね。今回は最もスタンダードな、チキンライスを卵で包んだ、木の葉型のオムライスのレシピをご紹介します。お店で出てくるような本格オムライスが作れる、基本のレシピと上手な包み方をマスターしましょう。'),

// （小見出し）
array ('ttl_m','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','卵','4個'),
array ('mtr','マヨネーズ','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2'),
array ('mtr','温かいごはん','茶碗2杯分（約300g）'),
array ('mtr','鶏もも肉','100g'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>','少々'),
array ('mtr','こしょう','少々'),
array ('mtr','玉ねぎ','1/4個'),
array ('mtr','ケチャップ','大さじ4'),
array ('mtr','中濃ソース','大さじ1'),
array ('mtr','サラダ油','大さじ2'),
array ('mtr-end'),
array ('text','mb1',' ＜仕上げ用＞'),
array ('mtr-st'),
array ('mtr','ケチャップ','好みで適量'),
array ('mtr-end'),

array ('ttl_m','mb1','手順'),
array('step','01','mb0','鶏肉は2cm角に切り、塩、こしょうを振ります。'),
array('step','02','mb0','玉ねぎは<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。'),
array('step','03','mb0','フライパンにサラダ油大さじ1を入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し、鶏肉を入れて炒めます。<br>色が変わってきたら、玉ねぎを加えてさっと炒めましょう。'),
array('step','04','mb0','ケチャップ、中濃ソースを加えて全体を混ぜ合わせたら、温かい<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>を加えて再度全体を混ぜます。'),
array('step','05','mb0','ごはんをボウルなどに取り出し、フライパンをきれいにします。'),
array('step','06','mb3','別のボウルに卵2個を<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">割って</a>ほぐし、マヨネーズ大さじ1を加えて、菜箸で混ぜます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','卵にマヨネーズを入れるとふわふわになるぞ！'),
array ('free','mb0','卵を加熱するとかたくなるのは、タンパク質の結合が原因。卵にマヨネーズを入れると、マヨネーズに含まれる植物油や酢がタンパク質の結合を和らげてくれるんだ！だからふわふわした仕上がりになるぜ♪<br>さらに、酢の作用で卵の黄色が鮮やかになるから、より見た目もきれいになるんだ。まさに、一石二鳥ってわけ！'),
array ('chk-end'),

array('step','07','mb0','フライパンにサラダ油大さじ1/2を入れて中火で熱し、卵液を流し入れます。<br>大きく2〜3回菜箸で混ぜ、卵液をフライパン全体に広げてください。'),
array('step','08','mb3','半熟状になったら火を止めて、チキンライスを半量、縦にこんもりと置きます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','卵は半熟で火を止めるのがコツ！'),
array ('free','mb0','フライパンに卵を入れたら、スクランブルエッグを作るように菜箸やゴムベラでよくかき混ぜて、半熟で火を止めよう！こうすると、表面に凹凸のないきれいなオムライスになるんだ！'),
array ('chk-end'),

array('step','09','mb0','フライ返しで右側の卵を折り返すようにして、左側に動かしていきます。'),
array('step','10','mb3','フライパンに皿を当てて、ひっくり返すようにして皿に移しましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','左利きの人は右側に動かして皿を当てよう！'),
array ('free','mb0','左利きの人は、左右を逆にしたほうがやりやすくなるぜ！フライ返しで左側の卵を折り返すようにして、右側へ移動させよう！'),
array ('chk-end'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','上手に包むポイントは“フライパンのフチ”を使うこと！'),
array ('free','mb0','チキンライスを卵で上手に包むには、皿に移すときに“フライパンのフチ”をうまく利用するのがポイントだ！フライパンを傾けながら、卵を側面からフチにかけてのカーブに沿わせるようにして、皿に移していこう。カーブに沿わせることで、自然に卵がチキンライスの上側に来るので、きれいに包むことができるぞ！ちなみに皿に移した直後は、全体が隙間なく卵に覆われていなくても大丈夫！最後に形を整える工程があるから、そのときに調整しよう！'),
array ('chk-end'),

array('step','11','mb3','キッチンぺーパーで形を整えて、好みでケチャップをかけたらできあがり！<br>同様の手順で残りのチキンライスを卵で包み、2個目のオムライスを作ってください。'),

// （大見出し2）
array ('ttl_l','mb0','ケチャップ以外にも！オムライスにおすすめのソース'),

// （本文2）
array ('text','mb2','オムライスにかけると美味しいのは、ケチャップだけではありません。好みや気分に合わせて、トマトソースやホワイトソース、デミグラスソースなどに変えてみましょう！お店で出すような、創作オムライスを楽しめますよ。'),

//（小見出し）
array ('ttl_m','mb1','トマトソース'),
array ('textimg','12','right','トマトソース','mb2','さっぱりしたトマトの酸味が、まろやかな卵と相性抜群！実は、本格的なトマトソースは電子レンジで簡単に作ることができます。詳しいレシピは<a href="'.$base_url.'/magazine/article/recipe-technic89.php" class="recipe-design__link">こちら</a>！<br>基本のオムライスにトマトソースをかけて、お好みでパセリやバジルなどを散らしたらできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','きのこ入りホワイトソース'),
array ('textimg','13','left','きのこ入りホワイトソース','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic81.php" class="recipe-design__link">ホワイトソース</a>をかければ、よりコクのある味わいを楽しむことができます。<br>マッシュルームやエリンギなどの<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>を炒め、ホワイトソースと一緒に煮詰めましょう。ホワイトソースも電子レンジで簡単に作れるので、手作りするのがおすすめです。詳しいレシピは<a href="'.$base_url.'/magazine/article/recipe-technic81.php" class="recipe-design__link">こちら</a>！<br><a href="'.$base_url.'/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>や<a href="'.$base_url.'/magazine/article/recipe-technic76.php" class="recipe-design__link">アスパラガス</a>など、緑色の野菜をトッピングすると、より彩りがよくなります。'),

//（小見出し）
array ('ttl_m','mb1','デミグラスソース'),
array ('textimg','14','right','デミグラスソース','mb0','デミグラスソースは、洋食屋でよくオムライスに使われている定番ソース。野菜のうまみが濃縮されたデミグラスソースも、おうちにある材料を使って、電子レンジで作ることができますよ。詳しいレシピは<a href="'.$base_url.'/magazine/article/recipe-technic103.php" class="recipe-design__link">こちら</a>！<br>
バターで軽く炒めたしめじやマッシュルームなどを混ぜたり、とろけるチーズをトッピングしたりしても美味しいですよ。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','コウちゃん、オムライスできたわよ～！'),

//コウちゃん　喜ぶ
array ('ko','03','わーい！ままのおむらいす、きれいだね～！'),
  
//ミエ　通常
array ('mama','01','よかった～！お味はいかが？'),

//コウちゃん　喜ぶ
array ('ko','03','たまご、ふわふわ～！おいしい！'),

//ミエ　通常
array ('mama','01','さすがフラッキー！おかげで本格的なオムライスが作れたわ！'),


//フラッキー　通常
array ('fl','01','エッヘン、俺様になんでも聞いてくれ！<br>ソースをアレンジするだけでいろいろな味が楽しめるから、ぜひ試してくれよな！'),

//ミエ　通常
array ('mama','01','よ〜し、次はデミグラスソースをかけてみようっと！'),


);

//関連記事
$recommendrecipe = array (
  array	('recommend-recipe-st'),
  array ('recommend-recipe-id','15121'),
  array ('recommend-recipe-id','15112'),
  array ('recommend-recipe-id','15148'),
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
