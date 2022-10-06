<?php
//base
include( "../../function.php" );
$content = get_id_data( '15105' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「いちじくの食べ方」を動画とテキストで解説。生のいちじくを美味しくいただくための、皮のむき方と保存方法についてご紹介します。冷蔵保存、冷凍保存それぞれの手順や、アレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '105';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'p1AkeZnummo';

//導入文
$introTxt = '第105回は、「いちじくの食べ方」です。生のいちじくを美味しくいただくために、簡単な下ごしらえと保存方法についてご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ママ　通常
	array ('mama','01','スーパーに並んでたから、いちじくを買ってきちゃった♪'),

//パパ　通常
	array ('papa','01','秋を感じるね〜！ところでこれ、どうやって食べるの？'),

//ママ　困る
	array ('mama','02','皮をむけば食べられると思うけど…<br>あれ？皮と実がくっついちゃってうまくむけない！どうしよう…'),
//フラッキー　通常
	array ('fl','01','おいおい！そんなに乱暴に引っ張ったら、実が崩れちゃうぞ！'),

//ママ　困る
	array ('mama','02','だって初めて買ってみたんだもん！フラッキー、どうすればきれいにむけるの？'),

//フラッキー　通常
	array ('fl','01','よし！いちじくの皮のむき方と、美味しく食べる方法を教えてしんぜよう！')
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
array('ttl_l','mb0','いちじくの食べ方'),

//  （本文1）
array('text','mb2','豊かな甘味、とろっとした食感が特徴のいちじく。いちじくは漢字で「無花果」と書きますが、花が無いわけではありません。実の内側に花が咲くため、外から見えないことが由来となっています。'),
array('text','mb3','そんないちじくの旬は、5月末〜6月ごろと8〜9月ごろ。初夏に実がなるものと、秋に実がなるものがあるため、旬が2回あります。また、いちじくは栄養豊富で、食物繊維、カリウム、カルシウム、鉄分などの栄養素が含まれています。正しい食べ方を覚えて、ぜひ日々の食卓に取り入れてくださいね。'),

// （小見出し）
array('ttl_m','','手で皮をむく方法'),
array('step','01','mb0','いちじくは洗っておきます。'),
array('step','02','mb0','ヘタをゆっくりと下に引っ張って、皮をむいていきます。残りの部分も同様に、上から下に引っ張って皮をむいていきましょう。'),
array('step','03','mb0','むききれなかった皮は、<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>でそぐように取り除いてください。'),
array('step','04','mb3','できあがりです。'),

// （小見出し）
array('ttl_m','','包丁で皮をむく方法'),
array('step','05','mb0','いちじくは洗っておきます。'),
array('step','06','mb0','ヘタの付け根を切り落とします。'),
array('step','07','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にします。'),
array('step','08','mb0','端から包丁を入れて、皮をむいていきます。'),
array('step','09','mb3','できあがりです。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','いちじくの食べごろはどんな状態？ '),
array('text','mb2','一般的な赤茶色のいちじくの場合、ヘタの部分まで赤くなり、軽く指で押すと、中の部分までやわらかくなっていることが分かる状態が食べごろです。実がふっくらしていて、皮に適度なハリがあるものを選びましょう。'),
array('text','mb0','ただし、完熟しても実が緑、または白っぽい色をしたままのいちじくもあります。「バナーネ」という品種です。この品種の場合、熟しても赤くなることはありません。完熟すると表面に亀裂が入るので、それを目安にしましょう。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','いちじくの保存方法'),

// （本文2）
array('text','mb3','いちじくは実がやわらかいため傷みやすく、鮮度が落ちやすい果物。常温で保存すると、すぐに熟して苦みが出てしまいます。美味しさを保つためには、冷蔵保存が適しています。数日で食べきれない分は、冷凍保存がおすすめです。それぞれの手順をご紹介します。'),

// （小見出し）
array('ttl_m','','冷蔵保存方法'),
// （本文2）
array('text','mb3','いちじくを1個ずつラップに包んで、バットに重ならないように並べて冷蔵庫で保存しましょう。<br>保存期間の目安は、<strong>2～3日</strong>です。'),

// （小見出し）
array('ttl_m','','冷凍保存方法'),
// （本文2）
array('text','mb3','いちじくは洗った後、キッチンペーパーなどで水気を拭き取っておきます。<br>1個ずつラップで包み、数個まとめてファスナー付きの保存袋に入れてください。その状態で冷凍庫に入れて保存します。保存期間の目安は、<strong>約1ヵ月</strong>です。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','解凍の方法は？ '),
array('text','mb2','冷凍保存したいちじくは、常温で5分程度おけば解凍できます。<br>また、いちじくのお尻の部分に切り込みを入れて冷凍し、流水をあてて解凍すると皮がむきやすくなります。'),
array('text','mb0','完全に解凍してから食べるととろっとした食感を、半解凍の状態で食べると、シャリシャリしたシャーベットのような食感を楽しめますよ。'),
array ('plus-end'),


// （大見出し2）
array('ttl_l','mb0','いちじくのおすすめレシピ'),

// （本文2）
array('text','mb3','いちじくはそのまま食べても美味しいですが、少し手を加えてアレンジするのもおすすめです。手軽に作れるレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','いちじくとクリームチーズの生ハム巻き '),
array('textimg','10','right','マシュマロをのせて ','mb2','いちじくはくし形切りにしておきます。生ハムを広げ、その上にクリームチーズを伸ばし、ルッコラを適量のせます。その上にいちじくをのせ、生ハムでくるっと巻いたら完成です。甘いいちじくと、塩味が効いた生ハムとの相性が抜群ですよ。<br>また、生ハムで巻かずに、いちじく、角切りにしたクリームチーズ、ルッコラやレタスを一緒に和えて<a href="'.$base_url.'/magazine/article/recipe-technic145.php" class="recipe-design__link">サラダ</a>にアレンジするのもおすすめです。'),

// （小見出し）
array('ttl_m','','いちじくの<a href="'.$base_url.'/magazine/article/recipe-technic142.php" class="recipe-design__link">コンポート</a>（甘露煮）'),
array('textimg','11','left','いちじくのコンポート（甘露煮）','mb2','鍋に水、グラニュー糖を入れ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。グラニュー糖が溶けたら、皮をむいたいちじくを入れてください。落とし蓋をして、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で煮込みましょう。<br>火を止めたらレモン汁を入れます。粗熱が取れたら容器に入れ、冷蔵庫で冷やしてできあがりです。いちじくの色味を生かしたい場合は、皮をむかずに煮込んでください。お好みで赤ワインやシナモンを入れると、ちょっぴり大人の味になりますよ。'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ママ　通常
array ('mama','01','パパ、コウちゃん！おやつだよ～'),

//パパ　通常
array ('papa','01','おっ！いちじく、きれいにむけてるね！'),

//コウちゃん　喜ぶ
array ('ko','03','わーい、とろとろ～♪あまくておいしい～'),

//ママ　通常
array ('mama','01','旬のいちじくを美味しく食べられてよかった♪次はコンポートを作ってみようかな～'),

//フラッキー　褒める
array ('fl','03','いちじくのコンポートは、アイスクリームとの相性が抜群だぜ！<br>煮沸消毒した瓶に入れて冷蔵保存すれば、約2週間は持つぞ！'),

//ママ　通常
array ('mama','01','アイスクリームと一緒に食べてみたい！しかも、長持ちするなんて最高〜<br>まあ、2〜3日で全部食べ切っちゃいそうだけどね！'),

//フラッキー　通常
array ('fl','01','おいおい！ゆっくり味わって食べてくれよ〜！')
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15026'),
array ('recommend-recipe-id','15083'),
array ('recommend-recipe-id','15068'),
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
