<?php
//base
include( "../../function.php" );
$content = get_id_data( '15119' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「トリュフの作り方」を動画とテキストで解説。とろける食感と濃厚な味わいが美味しいトリュフ。板チョコを使って、簡単に作る方法をご紹介します。プレゼントする際のラッピング方法や、アレンジメニューもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '119';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'Sg_5igdxrGQ';

//導入文
$introTxt = '第119回は、「トリュフの作り方」です。人気のチョコレートスイーツを、市販の板チョコで手軽に作るレシピをご紹介します。
';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// ミエ　通常
array ('mama','01','もうすぐバレンタイン！<br>
パパとコウちゃんにはまだ内緒だけど、今年は手作りチョコに挑戦しようと思ってるのよね♪'),

// フラッキー　通常
array ('fl','01','おっ、手作りか！で、何を作るんだ？'),

// ミエ　困る
array ('mama','02','それが、まだ決まってなくて…<br>
簡単にできるものにしたいけど、見た目がシンプルすぎるのもちょっとなあって'),

// フラッキー　通常
array ('fl','01','それなら、トリュフがおすすめだぞ！<br>
一見、作るのが難しそうだけど、実は簡単に手作りできるんだ！'),

// ミエ　驚く
array ('mama','03','えっ、あのトリュフが手作りできちゃうの？よーし、チャレンジしてみよう<br>
フラッキー、作り方を教えて！'),

// フラッキー　褒める
array ('fl','03','よしきた！2人をびっくりさせようぜ♪'),



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
array ('ttl_l','mb0','簡単！トリュフの作り方'),

// （本文1）
array ('text','mb2','生クリームの濃厚な風味と、なめらかな口溶けが人気のトリュフ。型に流し込むテクニックがいらないので、お菓子作り初心者の方でも気軽に作れるのが魅力です。<br>
今年のバレンタインは、ぜひ手作りチョコにチャレンジしてみませんか？'),

// （小見出し）
array ('ttl_m','mb1','材料（12個分）'),
array ('mtr-st'),
array ('mtr','板チョコレート<br class="u-only__sp">（ミルクまたはブラック）','100g<br class="u-only__sp">（2枚分）'),
array ('mtr','生クリーム<br class="u-only__sp">（動物性脂肪40%以上のもの）','50ml'),
array ('mtr','ラム酒','小さじ1'),
array ('mtr-end'),
array ('ttl5','mb0','＜仕上げ＞'),
array ('mtr-st'),
array ('mtr','ココアパウダー','適量'),
array ('mtr','ココナッツファイン','適量'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb0','板チョコレートは細かく手で割り、耐熱ボウルに入れます。'),
array('step','02','mb0','生クリームを加え、ラップをせずに600Wに設定した電子レンジで1分30秒加熱します。'),
array('step','03','mb3','電子レンジから取り出したら、ゴムベラでゆっくりと混ぜて溶かします。<br>溶け残りがあれば、様子を見ながら10秒ずつ追加で加熱してください。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','生クリームは、ホイップクリームや牛乳で代用できる？'),
array ('free','mb0','なめらかな食感とクリーミーな味わいがポイントのトリュフ。この特徴をしっかりと出すには、生クリームを使う必要があるぞ。ズバリ、代用は避けるべし！<br>
ホイップクリームには植物性油脂や砂糖が使われているから、生クリームとは仕上がりや風味が変わってしまうんだ。牛乳も、生クリームより水分が多くて脂肪分が少ないからNG。美味しく仕上げるために、必ず生クリームを使ってくれよな！'),
array ('chk-end'),

array('step','04','mb0','ラム酒を加えて混ぜたら、ボウルを涼しいところに置いて、ゴムベラで時々混ぜながらもったりとするまで冷まします。'),
array('step','05','mb0','ラップを広げ、大さじ1程度ずつチョコレートをのせて丸めます。 '),
array('step','06','mb0','冷蔵庫で15〜30分ほど冷やしたら、ラップを外して手のひらで丸め直してください。'),
array('step','07','mb0','ココアパウダー、ココナッツファインをそれぞれトリュフにまぶします。'),
array('step','08','mb3','できあがり！'),


// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','基本のトリュフをアレンジ！'),
array('text','mb2','基本のトリュフをマスターしたら、風味をアレンジしてみましょう！'),
array ('ttl_s','mb0','抹茶のトリュフ'),
array('text','mb2','抹茶と粉糖を混ぜて、抹茶パウダーを作ります。トリュフの仕上げのココアパウダーの代わりにこちらを使えば、抹茶トリュフに変身！'),
array ('ttl_s','mb0','ホワイトチョコのトリュフ'),
array('text','mb0','材料の板チョコレートをホワイトに変えるだけ！丸めた後、お好みのチョコペンで線を描くようにデコレーションするとおしゃれに仕上がりますよ。'),
array ('plus-end'),

// （大見出し1）
array ('ttl_l','mb0','手作りトリュフを上手に贈るには？保存と包装のコツ'),

// （本文2）
array ('text','mb2','トリュフをギフトにするときは、やわらかく溶けやすい点に注意が必要です。保存と包装のポイントを押さえて、大切な人へ美味しく届けましょう。'),

//（小見出し）
array ('ttl_m','mb1','トリュフの保存方法'),
array ('text','mb2','トリュフは材料に生クリームを使用しているので、冷蔵庫での保存が適しています。常温に置いておくと、溶けたり傷んだりしやすくなるので注意しましょう。<br>
ただし、冷蔵庫で保存していても、あまり長くは日持ちしません。2〜4日以内には食べきれるように、作ったらすぐにプレゼントしましょう。'),

//（小見出し）
array ('ttl_m','mb1','トリュフを包装するには'),
array ('text','mb2','トリュフを包むラッピング材は、袋よりも箱がおすすめです。外から押されて潰れたり、動いて型崩れしたりするのを防げます。中に仕切りが付いているものなら、型崩れを防ぐとともに、見栄えもアップしますよ。'),
array ('textimg','09','right','トリュフを包装するには','mb0','持ち運ぶときは、溶けないように保冷剤を付けるのを忘れずに。保冷材だけでは不安なら、保冷バッグに入れるとベターです。職場や学校などですぐに渡せない場合は、なるべく涼しい場所ヘ置くようにしましょう。<br>
食べるときは常温に戻すと、とろけるような口溶けを楽しめますよ。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','ジャ～ン！今年は手作りバレンタインよ！はい、どうぞ♪'),

//マサキ　通常
array ('papa','01','わあ、トリュフだ！<br>
きれいに箱詰めされて、デパートの高級チョコレートみたいだね'),

//コウちゃん　喜ぶ
array ('ko','03','とりゅふ、やわらかくておいし〜い♪'),

//フラッキー　褒める
array ('fl','03','バレンタイン以外のシーズンでも、旬のフルーツで風味付けすると季節感のあるギフトになるぞ！<br>
春ならいちご、夏ならはっさくやメロンもいいな'),

//ミエ　通常
array ('mama','01','華やかで素敵！今度は、お誕生日や記念日にも作ってみようかな<br>
フラッキー、ありがとう♪'),

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
