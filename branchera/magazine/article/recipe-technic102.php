<?php
//base
include( "../../function.php" );
$content = get_id_data( '15102' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「魚の霜降りの方法」を動画とテキストで解説。霜降りとは、素材の臭みを抑えるためにする下処理のこと。煮付けや汁物などの魚料理を美味しく仕上げる霜降りの方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '102';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'DQyMx0IAf80';

//導入文
$introTxt = '第102回は、「魚の霜降りの方法」です。煮魚をはじめとした魚料理を美味しく仕上げるための、霜降りという下処理の方法をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // ママ　通常
  array ('mama','01','今日の晩ごはんは、<a href="'.$base_url.'/magazine/article/recipe02.php" class="recipe-design__link">ぶり大根</a>にしようっと！'),

  // パパ　通常
  array ('papa','01','ぶりか～、楽しみだ～'),

  // ママ　通常
  array ('mama','01','久しぶりに作るからちょっと不安だなあ…<br>えっと、まず切り身を<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>に漬けるんだっけ？'),

  // フラッキー　驚く
  array ('fl','02','ミエ、ストーップ！醤油に漬ける前に、まず霜降りをしないとだぜ！'),

  // ママ　驚く
  array ('mama','03','えっ？フラッキー、霜降りって何だっけ？'),

  // フラッキー　通常
  array ('fl','01','霜降りは、魚の臭みを抑える下処理のことだ！俺が教えてやるから見ておけよ！'),

  // ママ　通常
  array ('mama','01','ありがとう、フラッキー！'),


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
array('ttl_l','mb0','魚の霜降りの方法'),

//  （本文1）
array('text','mb3','魚や<a href="'.$base_url.'/magazine/article/recipe-technic19.php" class="recipe-design__link">肉</a>を料理する際に必要な下処理のひとつに、「霜降り（湯引き）」という方法があります。霜降りは、<strong>素材の臭みを抑える</strong>のに効果的な方法です。<br>魚の場合、<a href="'.$base_url.'/magazine/article/recipe-technic106.php" class="recipe-design__link">焼き料理</a>や<a href="'.$base_url.'/magazine/article/recipe-technic09.php" class="recipe-design__link">揚げ料理</a>なら、生臭さはそれほど気になりません。ですが、煮物や鍋料理の場合は、煮汁や<a href="'.$base_url.'/magazine/article/recipe-technic07.php" class="recipe-design__link">だし汁</a>に臭みが溶け込むため、事前に霜降りをしておく必要があります。さっそく、魚の霜降りの方法をご紹介しましょう。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ('mtr','ぶりなど、血合いの多い魚の切り身','2切'),
array ('mtr','塩','2つまみ','recipe-technic22.php#shio'),
array ('mtr','お湯','適量'),
array ('mtr','冷水','適量'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','バットに魚の切り身を置き、まんべんなく両面に塩をふりかけます。そのまま冷蔵庫で10分程度置きましょう。'),
array('step','02','mb3','ボウルの上にざるを置いて、冷蔵庫から取り出した切り身を入れます。<br>沸騰直前のお湯を全体に回しかけて、魚の表面が白くなったら、冷水の入ったボウルに移してください。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','霜降りのお湯の温度に注意！'),
array('text','mb0','霜降りに使うお湯は、完全に沸騰した熱湯ではなく、<strong>沸騰直前の80度～90度くらいの温度が最適</strong>だ。沸騰直前になったら火を止めるといいぞ。<br>お湯の温度が低すぎると生臭さが残るし、温度が高すぎると魚の身が反り返ってしまうので、注意しよう！'),
array('chk-end'),

array('step','03','mb0','冷水の中で、うろこや血合い、汚れ、ぬめりなどを手で丁寧に取り除きます。'),
array('step','04','mb3','キッチンペーパーで水気を拭き取ったら完了です。'),


// （大見出し2）
array('ttl_l','mb0','霜降りした魚を使った煮魚レシピ'),

// （本文2）
array('text','mb3','調理する前に霜降りすることで、魚の臭みが抑えられてぐんと美味しく仕上がりますよ。代表的な煮魚のレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','かれいの煮付け'),
array('textimg','05','left','かれいの煮付け','mb2','煮魚料理としてはお馴染みの、かれいの煮付け。まず、かれいの切り身を霜降りします。次に、鍋に醤油、みりん、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、酒、水を入れ、<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">生姜</a>の薄切りを入れて煮立てましょう。そこにかれいと食べやすい大きさに切った長ねぎを入れ、落し蓋をして<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で煮ていきます。5～6分したら落し蓋を取って、煮汁をかれいにかけながらさらに4分程度煮れば完成です。'),

// （小見出し）
array('ttl_m','','さばの味噌煮'),
array('textimg','06','right','さばの味噌煮','mb2','脂ののったさばに<a href="'.$base_url.'/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>の味わいがよく合う、さばの味噌煮。まず、適当な大きさに切ったさばを霜降りして、皮目に十字の切り込みを入れます。鍋に味噌、みりん、砂糖、醤油、水を入れて、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で煮立てましょう。<br>さばの皮目を上にして鍋に入れ、酒をたっぷり回しかけます。そこに、薄切りの生姜や長ねぎを加えて加熱を続けてください。沸騰したら落し蓋をして、中火で15分程度煮ます。一旦火を止めて冷ましたら、落し蓋を外し、煮汁に味噌を溶き加えて再び加熱します。軽くとろみが付いたらできあがりです。'),

// （小見出し）
array('ttl_m','','あら汁'),
array('textimg','07','left','あら汁','mb0','魚のうまみたっぷりのあら汁は、寒い日にぴったりの一品です。まず、金目鯛やたらなどのあらを大きめのぶつ切りにして、霜降りします。鍋に水を入れ、<a href="'.$base_url.'/magazine/article/recipe-technic05.php" class="recipe-design__link">昆布</a>を浸しておきます。しばらくしたら鍋を火にかけて、沸騰させましょう。そこに酒、あら、長ねぎを入れます。<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>を取り除きながら、鍋に蓋をして<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で10分程度加熱してください。最後に味噌を溶きながら加えて、小口切りにした青ねぎを加えたら完成です。'),


);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// コウちゃん　喜ぶ
array ('ko','03','おさかな、おいしい～'),

// パパ　通常
array ('papa','01','ぜんぜん臭みがなくて、ふっくら美味しく仕上がっているよ！'),

// フラッキー　　褒める
array ('fl','03','霜降りは、魚の臭みを取るだけでなく、煮崩れ防止にもなるんだ！<br>煮魚料理のときには忘れずにやっておくといいぞ～'),

// ママ　通常
array ('mama','01','ありがとう、フラッキー！これで、<a href="'.$base_url.'/magazine/article/recipe-technic24.php" class="recipe-design__link">刺身</a>や塩焼き以外の魚料理にも自信がついた～！'),
);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','14002'),
array ('recommend-recipe-id','15040'),
array ('recommend-recipe-id','15148'),
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
