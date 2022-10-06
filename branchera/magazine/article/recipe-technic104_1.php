<?php
//base
include( "../../function.php" );
$content = get_id_data( '15104' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「美味しいココアの作り方」を動画とテキストで解説。手軽&時短で作れる電子レンジを使った作り方と、香り豊かに仕上がる鍋を使った作り方をご紹介します。ホイップクリームやマシュマロを使ったアレンジ方法も併せてご紹介。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '104';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'Tpgt_UC6oXE';

//導入文
$introTxt = '第104回は、「美味しいココアの作り方」です。ココアパウダーと電子レンジを使った、本格ココアの作り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // パパ　通常
  array ('papa','01','やっぱり食後に飲む<a href="'.$base_url.'/magazine/article/recipe-technic128.php" class="recipe-design__link">コーヒー</a>はうまいな～。これぞ、大人の味！'),

  // コウちゃん　笑顔
  array ('ko','01','こうちゃんにものませて～！！'),

  // ママ　笑顔
  array ('mama','01','コウちゃんはまだ小っちゃいから、コーヒーは苦くて飲めないの<br>代わりにママがココアを作ってあげる！'),

  // コウちゃん　笑顔
  array ('ko','01','ここあ、のむ～'),

  // フラッキー　通常
  array ('fl','01','ミエ、インスタントではなく、本格的なココアを簡単に作る方法を知ってるか？'),

  // ママ　通常
  array ('mama','01','え！？そんな方法があるの！？'),

  // フラッキー　通常
  array ('fl','01','ココアパウダーと牛乳、お湯で簡単に作れるぞ！<br>俺がとびきり美味しいココアの作り方を教えてしんぜよう！'),


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

// check start：array ('chk-st'),
// check end：array ('chk-end'),

// plus1 start：array ('plus-st'),
// plus1 title：array ('plus-ttl'),
// plus1 end：array ('plus-end'),

// 材料 start：array ('mtr-st'),
// 材料 end：array ('mtr-end'),
// 材料 array ('mtr','材料名','分量'),

// 手順：array ('step','num','mb','text'),

//  （大見出し1）
array('ttl_l','mb0','基本のココアの作り方'),

//  （本文1）
array('text','mb2','子どもからも大人からも愛されるココアの原料は、コーヒーやチョコレートと同じカカオ豆です。カカオ豆を粉砕し、脂肪分を除き、粉末にしたものがココアの元のココアパウダーになります。<br>
ココアの主成分はポリフェノールで健康促進にも役立つといわれています。インスタントよりも、純ココア（ココアパウダー）から作る方が砂糖を調整できるので、より健康的。'),
array('text','mb3','今回は、電子レンジでココアを作る方法と、鍋でココアを作る方法をご紹介します。電子レンジで作る方法は、カップに直接材料を入れて作れるので、洗い物が少なく時短になります。鍋で作る方法は、純ココアを煎る工程があるため、ココア本来の香りを引き立たせることができます。お好みの方法で作ってくださいね。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ('mtr','純ココア','小さじ2'),
array ('mtr','砂糖','小さじ2'),
array ('mtr','牛乳','10ml（練る用）'),
array ('mtr','牛乳','150ml'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','電子レンジで作る方法'),
array('step','01','mb0','耐熱マグカップに純ココアと砂糖を入れて、よく混ぜます。'),
array('step','02','mb3','牛乳（10ml）を入れてかき混ぜます。ペースト状になるまで練ってください。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','ダマにならないようにするコツ'),
array('text','mb0','ダマにならないようにするコツは、ペースト状になるまでしっかりと純ココアを練ること！電子レンジで作る場合も、鍋で作る場合も同じだぜ！<br>純ココアには油分が含まれるから、練りが足りないと、焦げたり粉っぽくなったりする原因になるぞ。'),
array('chk-end'),

array('step','03','mb0','ペースト状になったら、牛乳（150ml）をゆっくり注いでかき混ぜましょう。'),
array('step','04','mb3','600Wに設定した電子レンジで1分半程度加熱して、できあがりです。'),

// （小見出し）
array('ttl_m','','鍋で作る方法'),
array('step','05','mb0','鍋に純ココアを入れて、軽く煎ります。'),
array('step','06','mb0','純ココアの色が濃くなり、香ばしい匂いがしてきたら火を止めます。'),
array('step','07','mb0','牛乳（10ml）を加えて、照りのあるペースト状になるまでよく練ります。'),
array('step','08','mb0','ペースト状になったら、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>と牛乳（150ml）を入れてよく混ぜ合わせます。'),
array('step','09','mb3','鍋を<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にかけ、静かにかき混ぜます。沸騰寸前で火を止めて、マグカップに注いだらできあがりです。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ココアとホットチョコレートの違いは？ '),
array('text','mb2','お店によって、「ココア」表記の場合と、「ホットチョコレート」表記の場合があります。何か違いがあるのか、気になったことがある方もいるのではないでしょうか？'),
array('text','mb2','一般的には、どちらも同じカカオを原料にしているため、風味や成分に大きな違いはありません。厳密にいうと、ココアはココアパウダーを牛乳やお湯で溶かしたドリンク、ホットチョコレートは、<a href="'.$base_url.'/magazine/article/recipe-technic119.php" class="recipe-design__link">チョコレート</a>を溶かして牛乳で伸ばした飲み物を指します。<br>
しかし、必ずしも区別されているわけではなく、ココアパウダーから作っているものを「ホットチョコレート」と称して販売していることもあります。'),
array('text','mb0','同じココアでも、砂糖の入っていない純ココアから作るのと、粉乳や砂糖が加えられている調整ココアから作るのでは味わいは変わります。ホットチョコレートも同様に、ミルクチョコレートを使うか、ビターチョコレートを使うかで違う風味を楽しめます。<br>
いろいろなお店で飲み比べて、自分の好みに合う味を探してみてくださいね。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','人気のアレンジレシピ'),

// （本文2）
array('text','mb3','豊かな香りと程よい甘味で、心身をリラックスさせてくれるココア。ほかの材料を“ちょい足し”することで、バラエティに富んだ味を楽しむことができますよ。少し贅沢な時間を過ごしたいときに、ぜひお試しください。'),

// （小見出し）
array('ttl_m','','マシュマロをのせて '),
array('textimg','10','right','マシュマロをのせて ','mb2','甘～いスイーツのようなココアを飲みたいときは、マシュマロを浮かべましょう。マシュマロがココアに溶けて、よりクリーミーな味わいを楽しめます。上からチョコソースをかけると、より濃厚になりますよ。'),

// （小見出し）
array('ttl_m','','ホイップクリームをのせて'),
array('textimg','11','left','ホイップクリームをのせて','mb2','生クリームを泡立てた<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">ホイップクリーム</a>をのせれば、さらにリッチで芳醇な味わいに！<br>クリームに入れる砂糖の量は、ココアの甘さに合わせて調整してくださいね。'),

// （小見出し）
array('ttl_m','','スパイスと合わせて'),
array('text','mb2','実は、スパイスと相性バツグンなココア。スパイスを一振りすると、味わいに奥行きが生まれます。スパイスは、シナモン、ナツメグ、スターアニスなどがおすすめです。寒い日にどうぞ。'),

// （小見出し）
array('ttl_m','','アイスにして'),
array('textimg','12','right','アイスにして','mb0','暑い日には、冷たいココアが飲みたくなりますよね。<br>まず、氷を8分目程度まで入れたグラスを用意しましょう。そこに濃い目に入れたココアを注げば、アイスココアのできあがり！バニラアイスを添えて、フロートにしても美味しいですよ。'), 


);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// コウちゃん　笑顔
array ('ko','01','わーすごい！ましゅまろものってる～！'),

// ママ　通常
array ('mama','01','マシュマロが溶けるともっと美味しくなるわよ～'),

// パパ　通常
array ('papa','01','すごい、カフェで出されるココアみたいだ！<br>コーヒーを飲んだ後だけど、ココアも飲みたくなってきちゃうな'),

// フラッキー　通常
array ('fl','01','ココアの原料であるカカオには、「テオブロミン」というリラックス効果のある成分が含まれているんだ<br>だから、寝る前にはおすすめだぜ！'),

// パパ　通常
array ('papa','01','へえ～！それじゃあ、今後は食後のコーヒーからココアに替えようかな？'),

// ママ　通常
array ('mama','01','まあ、パパはいつでも安眠だけどね♪'),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15119'),
array ('recommend-recipe-id','15128'),
array ('recommend-recipe-id','13004'),
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
