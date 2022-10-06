<?php
//base
include( "../../function.php" );
$content = get_id_data( '15106' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「さんまの塩焼きの方法」を動画とテキストで解説。自宅のグリルやフライパンで、美味しくさんまを焼く手順をご紹介します。おすすめの薬味や、アレンジレシピも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '107';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '106';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'vzgZfUF91rQ';

//導入文
$introTxt = '第106回は、「さんまの塩焼きの方法」です。グリル・フライパンで、さんまをふっくらと美味しく焼く方法についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//パパ　通常
	array ('papa','01','今年、まださんまを食べてなかったよね？<br>魚屋さんで売ってたから、買ってきたよ！'),

//ママ　困り顔
	array ('mama','02','わあ、立派なさんま！秋といえば、さんまだもんね！<br>でも、上手に焼けるか不安だわ…。やっぱり七輪とかを使ったほうがいいのかな！？'),

//フラッキー　通常
array ('fl','01','おいおい、ミエ！さんまはグリルでも、フライパンでも美味しく焼けるんだぜ？'),

//ママ　驚く
	array ('mama','03','えっ？グリルでもフライパンでも！？'),

//フラッキー　通常
array ('fl','01','そうだ！皮がパリパリ、中身がふっくらしたさんまが食べられるぜ！<br>さっそく教えてやるから、ついてこいよ〜！'),

//ママ　喜ぶ
	array ('mama','01','ありがとう、フラッキー、よろしくね！'),

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
array('ttl_l','mb0','さんまの美味しい焼き方'),

//  （本文1）
array('text','mb3','秋が旬のさんま。銀色の刀のような姿から、漢字では「秋刀魚」と書きます。旬のさんまは脂がのっているため、美味しさも格別です。さんまをグリル、フライパンで美味しく焼く方法をご紹介します。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ('mtr','さんま','1本'),
array ('mtr','塩','適量'),
array ('mtr','大根おろし、レモンなどの薬味','適量'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','グリルとフライパン共通の下ごしらえ'),
array('step','01','mb3','さんまの表面を包丁でこすり、うろこを取ります。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','身に切り込みは入れなくてOK！'),
array('text','mb0','魚の身に切り込みを入れるのは、火の通りをよくするため。さんまはあまり厚みのない魚だから、切り込みを入れなくても充分火が通るぞ！'),
array('chk-end'),

array('step','02','mb3','流水で軽く洗い、キッチンペーパーで水分を拭き取ります。<br>ここまでが共通の下ごしらえです。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','新鮮なさんまの見分け方'),
array('text','mb0','旬のさんまの美味しさを存分に味わうためにも、活きのよいさんまを選びましょう！<br>見分けるポイントは、さんまの下あごの色。下あごが黄色いものが、新鮮な証です。<a href="'.$base_url.'/magazine/article/recipe-technic40.php" class="recipe-design__link">鮮度</a>が落ちると、さんまのあごの下の色は茶色くなっていきます。'),
array ('plus-end'),

// （小見出し）
array('ttl_m','','グリルで焼く場合'),
array('step','03','mb3','塩を適量指先でつまみ、さんまの体の表面に振りかけます。振りかけた後、手で塩をさんまに馴染ませてください。<br>裏面も同様に塩を振り、馴染ませます。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','さんまにかける塩の量はどのくらい？'),
array('text','mb0','塩を多めに振りかけるのが、さんまを美味しく焼くコツだぜ！塩の量の目安は、さんま1本200gの場合、小さじ1/3程度。表面と裏面それぞれ小さじ1/6ずつ振りかけよう！'),
array('chk-end'),

array('step','04','mb0','グリルの網に油をひき、予熱しておきます。'),
array('step','05','mb0','さんまを網に乗せたら、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で焼いていきます。'),
array('step','06','mb0','片面を5分程度焼き、よい焼き色が付いたら、裏返して3〜4分焼きます。両面グリルの場合、焼き時間の目安は8～9分です。'),
array('step','07','mb3','全体に焼き色が付いて火が通ったら、できあがりです。'),

// （小見出し）
array('ttl_m','','フライパンで焼く場合'),
array('step','08','mb0','さんまを半分に切ります。<br>フライパンにさんまが入りきる場合は、切らなくても大丈夫です。'),
array('step','09','mb0','グリルで焼く場合と同様に、塩を適量指先でつまみ、さんまの体の表面に振りかけます。振りかけた後、手で塩をさんまに馴染ませてください。<br>裏面も同様に塩を振り、馴染ませます。'),
array('step','10','mb0','フライパンを中火で熱します。フライパンにクッキングシートや専用のホイルシートを敷いて、さんまを入れましょう。シートを敷くことで、油を使わずに焼くことができます。'),
array('step','11','mb0','中火で7分程度焼きます。さんまから出た余分な油は、キッチンペーパーで拭き取りましょう。'),
array('step','12','mb0','片面に焼き色が付いたら、裏返します。<br>裏面も中火で7分程度焼きましょう。'),
array('step','13','mb3','全体に焼き色が付いて火が通ったら、できあがりです。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','さんまの内臓（ワタ）の取り方'),
array('text','mb0','旬のさんまのワタにはうまみがあり、栄養価も高いので取らずに焼くのがおすすめです。「どうしても苦手だから事前に取りたい」という場合は、購入時に店頭で依頼するとよいでしょう。自分で取り除く場合は、まず頭の部分を斜めに切り落とします。次に、腹部に1cm程度の切り込みを入れれば、簡単にワタを取り出せますよ。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','さんまにぴったりの薬味&アレンジレシピ'),

// （本文2）
array('text','mb3','さんまの塩焼きにプラスワン！美味しさを引き立たせる薬味と、人気のアレンジレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','おすすめ薬味：大根おろしとすだち'),
array('textimg','14','right','おすすめ薬味：大根おろしとすだち','mb2','さんまの薬味としておすすめなのが、<a href="'.$base_url.'/magazine/article/recipe-technic58.php" class="recipe-design__link">大根おろし</a>とすだち。大根に含まれる消化酵素は、脂の多いさんまの消化を助けてくれます。また、すだちの旬は8月から10月なので、さんまが美味しい時期ともちょうど重なるのです。後味さっぱり、秋ならではの味覚が楽しめる組み合わせを、ぜひお試しください！'),

// （小見出し）
array('ttl_m','','さんまと生姜の混ぜご飯'),
array('textimg','15','left','さんまと生姜の混ぜご飯','mb2','さんまの塩焼きはそのまま食べても美味しいですが、ほかの食べ方を試してみたい方には、混ぜご飯がおすすめです。まず、さんまの塩焼きからワタを取り出してほぐします。ほぐしたさんまとみじん切りにした生姜、醤油を温かいご飯に混ぜたらできあがり。大根おろしや<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">針生姜</a>、<a href="'.$base_url.'/magazine/article/recipe-technic36.php" class="recipe-design__link">白髪ねぎ</a>などの薬味を添えて召し上がれ！'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//パパ　喜ぶ
array ('papa','01','皮がパリッとしてて香ばしい！脂がのってるさんまは、やっぱり美味しいね〜'),

//ママ　通常
array ('mama','01','コウちゃんのさんまは、ワタを取ってあるからね！'),

//コウちゃん　笑顔
array ('ko','03','さんま、ふわふわ～♪'),

//ママ　通常
array ('mama','01','ご飯がすすむー！'),

//フラッキー　通常
array ('fl','01','ミエ、いくら食欲の秋だからって、ご飯のお替わりしすぎじゃないか～？'),

//ママ　通常
array ('mama','01','仕方ないでしょ、この美味しさには抗えないわ！今度はさんまの混ぜご飯、作っちゃおうっと♪'),

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
