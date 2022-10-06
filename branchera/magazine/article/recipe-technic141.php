<?php
//base
include( "../../function.php" );
$content = get_id_data( '15141' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「スパニッシュオムレツの作り方」を動画とテキストで解説。野菜たっぷりのオムレツをフライパンで簡単に作る方法と、ほうれん草やチーズを使った人気のアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '141';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'YM7gZisKBzI';

//導入文
$introTxt = '第141回は、お料理オンラインイベントのメニュー「スパニッシュオムレツの作り方」です。お好みの具材で楽しめるスパニッシュオムレツのレシピを動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//コウちゃん　困る
array ('ko','02','ぱぱ、おなかすいた～'),
  
//マサキ　困る
array ('papa','02','お腹すいたの？えっと冷蔵庫には卵がたくさんあるなあ～。何かいい<a href="'.$base_url.'/magazine/article/recipe-collect02.php" class="recipe-design__link">卵料理</a>はないかな？'),

//マユ先生
array ('mayu','01','先日のオンラインイベントで作ったスパニッシュオムレツなら、コウちゃんにもおすすめですよ'),

//ミエ　驚く
array ('mama','03','マユ先生！スパニッシュオムレツは普通のオムレツとは違うんですか？'),

//マユ先生
array ('mayu','01','スパニッシュオムレツは具だくさんで、フライパン1つで作れるんですよ<br>
今日は、同じレシピを紹介しますね！'),

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
array ('ttl_l','mb0','スパニッシュオムレツの作り方'),

// （本文1）
array ('text','mb2','スパニッシュオムレツは、卵と具材を型に入れてオーブンで焼くスペインの家庭料理。フライパンでも作れるので、忙しい朝のごはんにも<a href="'.$base_url.'/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当のおかず</a>にもおすすめです。<br>今回は簡単に作れるスパニッシュオムレツの作り方をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料4人分（20cmのフライパン1個の場合）'),
array ('mtr-st'),
array ('mtr','卵','4個'),
array ('mtr','塩','小さじ1/2'),
array ('mtr','じゃがいも','1個'),
array ('mtr','玉ねぎ','1/2個'),
array ('mtr','ズッキーニ','1/2本'),
array ('mtr','パプリカ（赤）','1/2個'),
array ('mtr','オリーブオイル','大さじ3'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','玉ねぎを薄切りにし、じゃがいもは皮をむき、<a href="'.$base_url.'/magazine/article/recipe-technic11.php" class="recipe-design__link">いちょう切り</a>にします。ズッキーニとパプリカは1cm角に切りましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','じゃがいもはでんぷんごと炒める！'),
array ('free','mb0','今回は切ったじゃがいもを水にさらさず、そのまま炒めてくれ！じゃがいものでんぷんが、卵を固める役割をしてくれるぞ。'),
array ('chk-end'),

array('step','02','mb3','フライパンにオリーブオイル大さじ2を入れ、玉ねぎ、じゃがいもを加え、塩を振って炒めます。じゃがいもがやわらかくなるまで<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>でしっかり火を通しましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','先に塩を振ると早く炒められる！'),
array ('free','mb0','最初に塩を入れることで野菜から水分が出て、早く炒められるんだ。調理時間がたっぷりあるときは、玉ねぎを飴色になるまで炒めると、うまみが増すぞ！'),
array ('chk-end'),

array('step','03','mb0','じゃがいもに、箸を刺してスッと通ったらズッキーニ、パプリカを加えて油がなじむ程度にさっと炒めます。'),
array('step','04','mb0','ボウルに卵を溶き、炒めた野菜を加えて混ぜましょう。'),
array('step','05','mb0','空になったフライパンをキッチンペーパーで拭きとり、オリーブオイル大さじ1を加えて中火にかけます。'),
array('step','06','mb3','フライパンが温まったら具材を混ぜた溶き卵を流し入れ、箸で外側から2〜3回大きく混ぜ、蓋をして弱火で7〜8分焼きます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','焼くときはあまり触らないこと！'),
array ('free','mb0','最初に全体を大きくかき回したら、後は蓋をして触らずに蒸し焼きにするイメージで焼いてくれ！'),
array ('chk-end'),

array('step','07','mb0','蓋を開けたらフライパンを揺らし、オムレツが底にくっついていないことを確認します。'),
array('step','08','mb0','フライパンにお皿をかぶせてひっくり返し、オムレツをお皿に移動させます。<br class="mb2">裏面も焼くために、お皿からオムレツをスライドさせてフライパンに戻し、蓋をせずに弱火で2〜3分焼きます。'),
array('step','09','mb3','両面が焼けたら、フライ返しを使ってオムレツをお皿に盛り、食べやすく切ってできあがり！'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','スキレットでも美味しく作れる！'),
array('text','mb2','スキレットで作る際はしっかり油をなじませたものを使用してください。スキレットの場合はフライパンの焼き時間よりも短めにすると、ちょうどよい焼き具合になります。'),
array('text','mb0','トースターやオーブンを使って焼く場合、表面だけが先に焦げてしまいそうになったら、アルミホイルをかぶせるとよいですよ。'),
array ('plus-end'),


//（大見出し2）
array ('ttl_l','mb1','人気の具材で楽しむスパニッシュオムレツのアレンジレシピ'),
array ('text','mb2','スパニッシュオムレツは入れる具材を変えるだけで、いろいろなアレンジが楽しめます。スパニッシュオムレツで人気のアレンジレシピをご紹介しましょう。'),

//（小見出し）
array ('ttl_m','mb1','ほうれん草とハムのスパニッシュオムレツ'),
array ('textimg','10','right','ほうれん草とハムのスパニッシュオムレツ','mb0','スパニッシュオムレツの定番食材であるほうれん草をたっぷりと使ったレシピです。<br>
ほうれん草は水洗いし、ざく切りにします。ほうれん草のえぐみが苦手な人は、さっとゆでて水気をしぼってから切りましょう。ハム（ウィンナーでもOK）、玉ねぎを食べやすいサイズにカットしておきましょう。ボウルに溶き卵と粉チーズを入れ、混ぜ合わせます。'),
array ('text','mb2','フライパンにオリーブオイルを引いて玉ねぎを炒め、ほうれん草とハムを加え、塩、こしょうで味をととのえます。炒めた具を溶き卵に加え、軽く混ぜ合わせます。<br>
再びフライパンにオリーブオイルを引き、具の入った卵を流し入れ、大きく混ぜ合わせます。焼き色がついたらオムレツをひっくり返し、反対側にも焦げ目がついたらできあがりです！'),

//（小見出し）
array ('ttl_m','mb1','たっぷりチーズのスパニッシュオムレツ'),
array ('textimg','11','left','たっぷりチーズのスパニッシュオムレツ','mb2','チーズを使ったスパニッシュオムレツは、濃厚なチーズがお酒に合う人気のレシピです。<br>
にんじん、玉ねぎ、キャベツ、ソーセージを細かく切ります。お好みのチーズを組み合わせ、1cm角に切っておきます。ボウルに卵を溶き、牛乳と塩、こしょうを加え混ぜ合わせます。'),
array ('text','mb2','あらかじめ油をなじませたスキレットを温め、オリーブオイルを引き、具材を炒めます。野菜に火が通ったら溶き卵、チーズを加え、トースターやオーブンで焼きます。きれいな焦げ目がついたらパセリを振って完成です！'),

//（小見出し）
array ('ttl_m','mb1','プチトマトとパプリカのカラフルスパニッシュオムレツ'),
array ('textimg','12','right','プチトマトとパプリカのカラフルスパニッシュオムレツ','mb0','プチトマトとパプリカのスパニッシュオムレツは、卵の黄色に赤が色鮮やかなパーティーにもおすすめのレシピです。<br>
プチトマトは<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にし、パプリカとベーコンを食べやすいサイズにカットしておきましょう。ボウルに溶き卵、プチトマト、パプリカ、ベーコン、塩、こしょう、ピザ用チーズを入れてざっくり混ぜ合わせます。'),
array ('text','mb0','あらかじめ油をなじませたスキレットを火にかけます。温まったらオリーブオイルを引き、具材の入った卵を流し込んで、蓋をした状態で弱火にかけます。<br>
焼きあがったら彩りにお好みでバジルやイタリアンパセリをのせて召し上がれ！'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//マサキ　通常
array ('papa','01','ケーキみたいにカットすると、おしゃれなお店の料理みたいだね'),

//コウちゃん　喜ぶ
array ('ko','03','おいしい～、もっとちょうだい！'),

//ミエ　驚く
array ('mama','03','コウちゃん、相当気に入ったみたい'),

//マユ先生
array ('mayu','01','スパニッシュオムレツは具材だけでなく、<a href="'.$base_url.'/magazine/article/recipe-technic89.php" class="recipe-design__link">トマト系</a>やクリーム系などソースでアレンジするのもおすすめですよ'),

//マサキ　通常
array ('papa','01','そうだ！昨日作り過ぎたパスタのトマトソースをかけてみよう！'),

//コウちゃん　喜ぶ
array ('ko','03','やった～、はやくたべたい！'),

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
