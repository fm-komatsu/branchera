<?php
//base
include( "../../function.php" );
$content = get_id_data( '15134' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「焼きそばの作り方」を動画とテキストで解説。基本のソース焼きそばの作り方と、塩やピリ辛など人気のアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '134';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'w8bZ3AGht4o';

//導入文
$introTxt = '第134回は、「焼きそばの作り方」です。基本の焼きそばの作り方からアレンジレシピまで、専用の粉末ソースがなくてもできる焼きそばのレシピをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','今日の昼ごはんは僕が作るよ！'),

//ミエ　通常
array ('mama','01','やったー！何を作ってくれるの？'),

//マサキ　通常
array ('papa','01','へへへ～焼きそばにしようかと思ってるんだ！一人暮らししてたときによく作ってたからさ<br>ただ、たまに麺が切れたりべちゃべちゃになったりするんだよな…今日はうまくできるかな！？'),

//フラッキー　通常
array ('fl','01','おいおい、失敗は困るぞ！大丈夫、正しい作り方を覚えれば美味しく作れる！'),

//パパ　通常
array ('papa','01','本当？みんなに喜んでもらえるようにレベルアップしたいから、コツを教えて！'),

//フラッキー　通常
array ('fl','01','ガッテンだ～！'),


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
array ('ttl_l','mb0','基本の焼きそばの作り方'),

// （本文1）
array ('text','mb2','簡単に作れて、幅広い世代から人気の焼きそば。麺と粉末ソースがセットになった、市販の焼きそばは手軽で便利ですよね。ですが、中華蒸し麺を使って自分で味付けをすれば、より好みの風味に仕上げることができますよ。そこで今回は、美味しく仕上げる基本の焼きそばの作り方をご紹介します。'),

// （小見出し）
array ('ttl_s','mb1','材料（2人分）'),
array ('mtr-st'),
array ('mtr','中華蒸し麺','2玉'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic152.php" class="recipe-design__link">豚バラ肉</a>(スライス)','100g'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>','少々'),
array ('mtr','こしょう','少々'),
array ('mtr','キャベツ(小)','3枚'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic146.php" class="recipe-design__link">にんじん</a>','30g'),
array ('mtr','玉ねぎ','1/4個'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic122.php" class="recipe-design__link">もやし</a>','40g'),
array ('mtr','サラダ油','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1'),
array ('mtr','酒','大さじ2'),
array ('mtr','ウスターソース','大さじ2'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>','大さじ1'),
array ('mtr','青のり、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">かつお削り節</a>、紅しょうが','好みで適量'),
array ('mtr-end'),

array ('ttl_s','mb1','手順'),
array('step','01','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic19.php" class="recipe-design__link">豚肉</a>はひと口大に切り、塩、こしょうを振ります。'),
array('step','02','mb0','キャベツはひと口大、にんじんは<a href="'.$base_url.'/magazine/article/recipe-technic91.php#tanzaku" class="recipe-design__link">短冊切り</a>、玉ねぎは薄切りにします。<br>もやしはひげ根と芽を取り除いておきましょう。'),
array('step','03','mb3','中華蒸し麺を、600Wに設定した電子レンジで1分30秒程度加熱します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','麺をほぐれやすくするコツは温めること！'),
array ('free','mb0','中華蒸し麺はフライパンに投入する前に、電子レンジで加熱しておくといいぞ。電子レンジで加熱しておくと麺がほぐしやすくなるから、調味料が均等に行き渡るんだ！<br>
麺を十分にほぐせていない状態で炒めると、麺がちぎれたり、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">調味料</a>が一箇所に固まったりして、仕上がりに影響が出てしまうぞ。このひと手間を忘れずに！'),
array ('chk-end'),

array('step','04','mb0','フライパンにサラダ油を入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し、豚肉を入れて炒めます。色が変わってきたら、にんじん、玉ねぎ、キャベツを順に加えて、さらに炒めましょう。'),
array('step','05','mb0','レンジで加熱した麺を加え、酒を入れてほぐしながら炒め合わせます。'),
array('step','06','mb0','ウスターソース、醤油を回し入れて全体に絡めます。'),
array('step','07','mb3','器に盛り、お好みでかつお削り節や青のりをかけ、紅しょうがを添えたら完成です。'),


// （大見出し2）
array ('ttl_l','mb1','焼きそばの人気アレンジメニュー'),
array ('text','mb2','同じ麺や具材でも、味付けによって全く異なる美味しさを楽しめる焼きそば。簡単にできる、人気アレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','塩焼きそば'),
array ('textimg','08','right','塩焼きそば','mb2','ソースではなく塩で味付けした、さっぱり食べられる焼きそばです。食べやすい大きさに切った豚肉に、塩とこしょうを振りかけて炒めます。肉に火が通ってきたら、斜め切りにした長ねぎともやしを加えて、さらに炒めます。中華蒸し麺を入れて炒め合わせ、鶏がらスープの素を加えて、塩で味を調えたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','韓国風ピリ辛焼きそば'),
array ('textimg','09','left','韓国風ピリ辛焼きそば','mb0','普通の焼きそばに飽きたら、ちょっぴり辛い韓国風の味付けにしてみてはいかがですか？醤油、砂糖、コチュジャン、鶏がらスープの素、ごま油、水を混ぜて、合わせ調味料を作っておきます。食べやすい大きさに切った豚肉、玉ねぎ、キャベツ、にらを順に炒めて、しんなりしてきたら蒸し麺を加えます。最後に合わせ調味料を入れて、よく炒めたらできあがり！'),


);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','よしっ、完成！香ばしいソースの風味がたまらないね♪'),

//コウちゃん　通常
array ('ko','01','やきそば、おいしい～！'),

//ママ　笑顔
array ('mama','01','麺がちぎれてないし、しっかり全体にソースが絡んでいて本当に美味しい！'),

//フラッキー　褒める
array ('fl','03','炒めるだけの簡単な料理も、ちょっとしたコツで仕上がりが格段に変わるぞ！'),

//マサキ　笑顔
array ('papa','01','昔は自分が食べるために作っていたから適当だったけど…丁寧に作ってみんなで食べるとより美味しいな！<br>
フラッキー、ありがとう！'),


);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15019'),
array ('recommend-recipe-id','15143'),
array ('recommend-recipe-id','15087'),
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
