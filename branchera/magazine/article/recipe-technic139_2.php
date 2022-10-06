<?php
//base
include( "../../function.php" );
$content = get_id_data( '15139' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「レバーの下処理」を動画とテキストで解説。レバーの臭みを取るための下処理の方法と、レバーを使った人気レシピについてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '139';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'FwajW56Wi8c';

//導入文
$introTxt = '第139回は、「レバーの下処理の方法」です。栄養価の高いレバーの下処理の方法を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','夏バテにはレバーがおすすめ！ってお隣さんがいってたから買ってきたよ<br>でも、どうやって下処理するのかな？'),

//マサキ　通常
array ('papa','01','レバーって臭みがあるから、ちょっと苦手だな'),

//ミエ　困る
array ('mama','02','コウちゃん、食べられるかなぁ…'),

//フラッキー　通常
array ('fl','01','臭みを取るには下処理を正しくやればいいだけさ'),

//ミエ　通常
array ('mama','01','お願い、フラッキー！<br>レバーの正しい下処理の方法を教えて～！'),

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
array ('ttl_l','mb0','レバーの下処理方法'),

// （本文1）
array ('text','mb2','レバーは鉄分が豊富で、タンパク質やビタミンB群、ミネラルも取れる栄養たっぷりの食材です。臭みを取って美味しくいただくためのポイントは下処理にあります。今回は、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>、牛乳を使った3種類の下処理方法をご紹介しましょう。鶏、豚、牛、どのレバーを、どの方法で下処理してもOKですよ。'),

// （小見出し）
array ('ttl_m','mb1','鶏レバー(塩を使用する場合)'),
array ('text','mb0','鶏レバー200g、塩<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1、氷水を用意します。'),

array('step','01','mb0','血管や脂肪などを取り除きます。'),
array('step','02','mb0','食べやすい大きさに切ります。'),
array('step','03','mb0','氷水に入れて汚れを落とします。'),
array('step','04','mb0','水を替え、同じ作業を3回繰り返します。'),
array('step','05','mb0','別のボウルにレバーを入れ、塩を全体になじませます。'),
array('step','06','mb0','ラップをして冷蔵庫で20分冷やします。'),
array('step','07','mb0','冷蔵庫から取り出し、流水で洗います。'),
array('step','08','mb2','ざるで水気を切り、キッチンペーパーで残った水気を拭き取ったら完了です。'),

// （小見出し）
array ('ttl_m','mb1','豚レバー(塩と酢を使用する場合)'),
array ('text','mb0','豚レバー200g、塩小さじ2、酢大さじ1 、氷水を用意します。'),

array('step','09','mb0','血の塊を取り、食べやすい大きさに切ります。'),
array('step','10','mb0','氷水に入れて汚れを落とし、水を替え、同じ作業を3回繰り返します。'),
array('step','11','mb0','別のボウルにレバーを入れ、塩と酢を揉み込み、15～20分置きます。'),
array('step','12','mb0','表面が白くねばねばしてきたら、ボウルに張った水で洗います。'),
array('step','13','mb0','水を取り替えながら、水が透明になるまで洗います。'),
array('step','14','mb2','キッチンペーパーで水気をしっかり拭き取ったら完了です。'),

// （小見出し）
array ('ttl_m','mb1','牛レバー(牛乳を使用する場合)'),
array ('text','mb0','牛レバー200g、牛乳100ml、氷水を用意します。'),

array('step','15','mb0','血の塊を取り、食べやすい大きさに切ります。'),
array('step','16','mb0','氷水にレバーを入れて汚れを落とします。'),
array('step','17','mb0','ボウルの水を替えて、3回洗います。'),
array('step','18','mb0','キッチンペーパーでしっかり水気を拭き取ります。'),
array('step','19','mb2','レバーを別のボウルに入れ、牛乳をレバーが浸るくらい入れて20～30分置きます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','臭みをしっかり消すには牛乳・酢が有効'),
array ('free','mb0','牛乳には、レバーの臭みを吸収する成分が含まれている。そして酢には臭みを取るだけでなく、レバーを柔らかくする働きもあるんだぜ。'),
array ('chk-end'),

array('step','20','mb3','牛乳を捨て、流水でもう一度洗います。キッチンペーパーで水気を拭き取り、下処理完了です。'),

// （大見出し2）
array ('ttl_l','mb1','下処理したレバーの保存方法'),
array ('text','mb2','下処理したレバーは<a href="'.$base_url.'/magazine/article/recipe-technic32.php" class="recipe-design__link">冷凍で保存</a>できます。生のレバーの賞味期限は2～3日と短いため、買ったらすぐに下処理して冷凍しましょう。'),
array ('text','mb2','ファスナー付き保存袋に下処理済みのレバーを重ならないように薄く広げて入れて、冷凍します。保存期間の目安は2～3週間です。'),
array ('text','mb3','<a href="'.$base_url.'/magazine/article/recipe-technic152.php" class="recipe-design__link">煮物</a>や<a href="'.$base_url.'/magazine/article/recipe04.php" class="recipe-design__link">揚げ物</a>に使う場合は凍ったまま、炒め物の場合は冷蔵庫で半解凍してから使います。電子レンジで解凍すると火が通り過ぎてしまうので注意が必要です。'),

//（大見出し3）
array ('ttl_l','mb1','レバーを使った人気レシピ'),
array ('text','mb2','レバーは健康を支える栄養素が豊富な食材です。簡単にできる人気のスタミナレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','レバニラ炒め'),
array ('textimg','21','right','レバニラ炒め','mb0','レバニラ炒めは、疲労回復に効果的な一品です。下処理した豚レバーに、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#sake" class="recipe-design__link">酒</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、塩、こしょうで下味を付け、<a href="'.$base_url.'/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>を入れて混ぜ合わせます。フライパンに油を入れて、強めの<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>でこんがり焼き、<a href="'.$base_url.'/magazine/article/recipe-technic36.php" class="recipe-design__link">ねぎ</a>、にんにく、生姜、豆板醤、にらともやしを加えて手早く炒めます。オイスターソース、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、醤油、酒を回し入れ、味がからんだら完成です。'),

//（小見出し）
array ('ttl_m','mb1','甘辛煮'),
array ('textimg','22','left','甘辛煮','mb0','レバーの甘辛煮は、甘辛いたれでご飯が進む料理です。下処理した鶏レバーを食べやすい大きさに切り、フライパンに酒、みりん、醤油、砂糖、<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">千切りの生姜</a>を入れて煮込みます。アクを取り除き、水分がなくなるまで煮詰めます。器に移し、青ねぎ、赤唐辛子、胡麻を散らしたらできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','離乳食'),
array ('text','mb2','レバーは、離乳食としても活躍する食材です。赤ちゃんの鉄分が不足してくる離乳中期から後期にかけてレバーを与えることができます。<br>レバーを離乳食として使用する前に、まずは<a href="'.$base_url.'/magazine/article/recipe-technic19.php" class="recipe-design__link">鶏肉</a>を与え、次にクセがあまりない鶏のレバーを与えるとよいでしょう。レバーは新鮮なものを選び、よくゆでて、完全に火を通します。離乳期の段階に合わせて以下のように形状を変えてくださいね。'),
array ('text','mb2','・離乳食中期（7～8ヵ月頃）：ペースト状<br>・離乳食後期（9～11ヵ月頃）：細かく刻んだ状態'),
array ('text','mb0','レバーをやわらかく煮た野菜と一緒にペースト状にすれば、野菜不足も補えますよ。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','レバーでいっぱいおかずを作ってみたよ！'),

//マサキ　通常
array ('papa','01','おっ、まったく臭みがない！<br>レバニラ炒めがお酒に合うな～'),

//コウちゃん　喜ぶ
array ('ko','03','ればー、あまくておいしい～♪'),

//フラッキー　通常
array ('fl','01','レバーは栄養満点！<br>しかも低脂肪だから、健康にも美容にもいいんだぜ！'),

//ミエ　通常
array ('mama','01','一石二鳥！？<br>レバーで美肌になって、スタミナを付けてこの夏を乗り切ろうっと！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15019'),
array ('recommend-recipe-id','15032'),
array ('recommend-recipe-id','15133'),
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
