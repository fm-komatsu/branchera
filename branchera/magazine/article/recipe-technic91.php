<?php
//base
include( "../../function.php" );
$content = get_id_data( '15091' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「拍子木切りの方法」を動画とテキストで解説。拍子木切りは、厚さ1cm程度の太い四角柱にする切り方。野菜の歯ごたえを生かす拍子木切りの方法を、大根、にんじん、じゃがいも、きゅうりに分けてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '91';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'w3K7170SWY4';

//導入文
$introTxt = '第91回は、「拍子木切りの方法」です。野菜の歯ごたえが生かされる、拍子木切りの方法をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// パパ　困る
array ('papa','02','大根ときゅうりがたくさんあるから、ピクルスにでもしてみようと思ったんだけど…<br>この本に書いてある「拍子木切り」って、どんな切り方だろう？'),

// フラッキー　通常
array ('fl','01','マサキ、ひょっとして拍子木切りを知らないのか？'),

// パパ　困る
array ('papa','02','だって～！なかなか普段使わないからなあ～'),

// フラッキー　通常
array ('fl','01','拍子木切りというのは、四角い棒状に切る切り方だ！仕方ない、俺が教えてやるぜ！'),

// パパ　通常
array ('papa','01','フラッキー、ありがとう！'),

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
array('ttl_l','mb0','拍子木切りの基礎知識'),

//  （本文1）
array('text','mb3','拍子木切りは、食材の切り方の1つです。その由来や特徴など、基本的な知識をご紹介しましょう。'),

// （小見出し）
array('ttl_m','','定義'),
array('text','mb3','拍子木切りは、「ひょうしぎぎり」と読みます。<br>拍子木切りとは、「拍子木」の形のように、四角い棒状にする切り方のこと。ちなみに拍子木は、お祭りや火の用心の夜回りの際に、音を鳴らすために使う棒です。<br>長さ4～6cm、幅0.7～1cmくらいの四角柱を目安にして切ります。'),

// （小見出し）
array('ttl_m','','特徴'),
array('free','mb0','<p class="mb2"">拍子木切りは、厚さ1cm程度の太い四角柱にする切り方です。そのため、食材の歯応えをしっかり味わうことができるのが特徴です。</p>
<p class="mb2">同じように細長い形状にする切り方に<span id="tanzaku">「短冊切り」</span>がありますが、短冊切りは厚さ2～3mm程度。拍子木切りの方が、より食べ応えのある仕上がりになります。</p>
<p class="mb3">拍子木切りは、サラダ、ピクルス、バーニャカウダなどのように、素材をそのままの状態で食べる料理によく用いられます。ほかにも炒め煮、甘辛煮などの煮物や、ベーコン巻きのような棒状の料理に用いられることが多いです。</p>'),

//  （大見出し2）
array('ttl_l','mb0','拍子木切りの方法'),

// （本文2）
array('text','mb3','使う食材によって、拍子木切りの方法は少し異なります。それぞれどのように切ればよいのか、食材ごとに手順を解説します。'),

// （小見出し）
array('ttl_m','','大根'),
array('step','01','mb0','長さ4～5cmに切って、皮をむきます。'),
array('step','02','mb0','縦にして、端から幅1cmの板状に切っていきます。'),
array('step','03','mb0','板状にした大根を、縦に幅1cmに切ります。'),
array('step','04','mb3','完成！'),

// （小見出し）
array('ttl_m','','にんじん'),
array('step','05','mb0','長さ4～5cmに切って、皮をむきます。'),
array('step','06','mb0','縦にして、端から幅1cmの板状に切っていきます。'),
array('step','07','mb0','板状にしたにんじんを、縦に幅1cmに切ります。'),
array('step','08','mb3','完成！<br>大根、にんじんと同様の方法で、れんこんやなすなども拍子木切りにできます。'),

// （小見出し）
array('ttl_m','','じゃがいも'),
array('step','09','mb0','皮をむいて、幅1cm程度の輪切りにします。'),
array('step','10','mb0','輪切りにしたじゃがいもを、縦に幅1cmに切ります。'),
array('step','11','mb3','完成！<br>同様の方法で、さつまいもや長芋も拍子木切りができます。'),

// （小見出し）
array('ttl_m','','きゅうり'),
array('step','12','mb0','ヘタを切り落として、長さ4〜5cmに切ります。'),
array('step','13','mb0','縦にして1cm幅に切ります。'),
array('step','14','mb0','さらに、縦に幅1cmに切ります。'),
array('step','15','mb3','完成！'),

// （大見出し3）
array('ttl_l','mb0','拍子木切りの食材を使った人気レシピ'),

// （本文3）
array('text','mb3','拍子木切りにした食材を使ったメニューをご紹介します。簡単にできるものばかりなので、ぜひ試してみてくださいね。'),

// （小見出し）
array('ttl_m','','バーニャカウダ'),
array('textimg','16','right','バーニャカウダ','mb2','バーニャカウダは、アンチョビ、にんにく、オリーブオイルを混ぜたソースを温めて、生野菜を付けて食べる料理です。<br>大根、にんじん、パプリカなど、拍子木切りにした野菜を用意します。手軽な市販のバーニャカウダソースを使えば、温めて添えるだけで完成です。彩りのよい野菜を組み合わせれば、テーブルが華やかになりますよ。'),

// （小見出し）
array('ttl_m','','にんじんとズッキーニのベーコン巻き'),
array('text','mb2','拍子木切りにしたにんじんとズッキーニに、それぞれベーコンを巻きます。巻き終わりを爪楊枝で留めましょう。軽く塩・こしょうをして、フライパンで焼いてください。野菜に火が通ったら完成です。お弁当のおかずにも使えますよ。'),

// （小見出し）
array('ttl_m','','野菜のピクルス'),
array('textimg','17','left','野菜のピクルス','mb2','にんじん、大根、きゅうりなどのお好きな野菜を用意します。それぞれ、皮をむいて拍子木切りにしましょう。<br>小鍋に酢と水を1:3程度の割合になるように入れて、塩、砂糖、鷹の爪を加えて煮立てます。切った野菜を入れた保存容器に、冷ましたピクルス液を注いでください。蓋をして冷蔵庫で一晩置いたら完成です。砂糖をはちみつに変えると、マイルドな味わいになりますよ。'),
);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// パパ　通常
array ('papa','01','このピクルス、どう！？大根もきゅうりも、パパが拍子木切りにしたんだよ～！'),

// コウちゃん　喜ぶ
array ('ko','03','ひょーしぎー♪ひょーしぎー♪'),

// ママ　通常
array ('mama','01','すごい！上手に切れているから、より美味しそうに見えるよ！'),

// フラッキー　褒める
array ('fl','03','これでマサキも拍子木切りは完璧だな！<br>
この際だから、<a href="'.$base_url.'/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>や<a href="'.$base_url.'/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>、<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>など、ほかの切り方もおさらいしておくといいぞ！'),

// パパ　通常
array ('papa','01','よ～し、頑張るぞ～！'),
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
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
