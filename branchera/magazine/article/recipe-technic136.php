<?php
//base
include("../../function.php");
$content = get_id_data('15136');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'かつおのたたきに欠かせない「薬味だれ」の作り方を動画とテキストで解説。作った薬味だれやかつおが余ったときのアレンジレシピも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '136';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'EtATgkJgdhE';

//導入文
$introTxt = '第136回は、「かつおのたたきの薬味だれ」です。かつおのたたきに欠かせない、美味しい薬味だれの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //ミエ　通常
  array('mama', '01', '今日はかつおのたたきが安かったから、買ってきたよ！'),

  //マサキ　通常
  array('papa', '01', 'おー、これは大きくて立派だね～'),

  //ミエ　困る
  array('mama', '02', 'でも、これだけ大きいと、付属のたれだけじゃ足りなさそう…'),

  //フラッキー　通常
  array('fl', '01', '美味しい薬味だれは自分で簡単に作れるぞ！'),

  //ミエ　困る
  array('mama', '02', 'え？作れるの？教えてフラッキー！'),

  //フラッキー　通常
  array('fl', '01', 'よし、まかせとけ！美味しい薬味だれの作り方を教えてやるぜ！'),

);

// 手順
$step = array(
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
  array('ttl_l', 'mb0', 'かつおのたたきの薬味だれの作り方'),

  // （本文1）
  array('text', 'mb2', 'かつおは表面を炙ったたたきが人気の魚。旬は年に2回あり、春から初夏に出回る「初がつお」は味がさっぱり。秋に出回る「戻りがつお」は脂が乗っています。<br>
今回は、そんなかつおのたたきによく合う薬味だれのレシピをご紹介しましょう。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料（2人分）'),
  array('mtr-st'),
  array('mtr', 'かつおのたたき（さく）', '250g'),
  array('mtr', '青ねぎ', '4本'),
  array('mtr', 'みょうが', '1個'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic53.php" class="recipe-design__link">生姜</a>（すりおろし）', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1/2'),
  array('mtr', 'にんにく（すりおろし）', '小さじ1/2'),
  array('mtr', '米酢', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>', '大さじ2'),
  array('mtr', '砂糖', '小さじ1'),
  array('mtr', '大葉、新玉ねぎ（スライス）など', 'あれば適量'),
  array('mtr-end'),

  array('ttl_m', 'mb1', '手順'),
  array('step', '01', 'mb0', 'かつおのたたきは1cmの厚さに切ります。'),
  array('step', '02', 'mb0', '青ねぎは小口切りに、みょうがは粗みじん切りにします。'),
  array('step', '03', 'mb3', '薬味だれを作ります。ボウルに青ねぎ、みょうが、生姜、にんにくを入れ、米酢、醤油、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加えて混ぜ合わせます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'かつおのたたきに合うほかの薬味は？'),
  array('free', 'mb0', 'かつおのたたきには、青ねぎやみょうが以外にも、<a href="' . $base_url . '/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>や新<a href="' . $base_url . '/magazine/article/recipe07.php" class="recipe-design__link">玉ねぎ</a>もぴったりだぜ。大葉は<a href="' . $base_url . '/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にし、新玉ねぎは薄くスライスして、かつおの上に一緒に盛ると美味しいぞ！'),
  array('chk-end'),

  array('step', '04', 'mb3', 'かつおのたたきを皿に盛り、薬味だれをかければ完成です。'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '違う味を楽しみたいときのアレンジだれ'),
  array('text', 'mb2', 'かつおのたたきは酢醤油のたれで食べるのも美味しいですが、洋風の味付けもおすすめです。ときには一味違うかつおのたたきを楽しんでみましょう。'),
  array('ttl_s', 'mb1', '洋風だれ'),
  array('text', 'mb2', 'フライパンに薄切りのにんにくとオリーブオイルを入れて弱火にかけ、にんにくが薄く色づいたら取り出します。オイルが冷めたら、粒マスタード、パセリ、酢、醤油、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、砂糖を混ぜれば完成です。取り出したにんにくや<a href="' . $base_url . '/magazine/article/recipe-technic74.php" class="recipe-design__link">トマト</a>、貝割れ大根などを添えると美味しいですよ。'),
  array('ttl_s', 'mb1', 'ポン酢マヨネーズだれ'),
  array('text', 'mb2', 'ポン酢にマヨネーズを混ぜ合わせてたれを作ります。<br>レタスの上にかつおのたたきをのせ、貝割れ大根を散らして、ポン酢マヨネーズだれをかければ、サラダ風になりますよ。'),
  array('ttl_s', 'mb1', 'レモンだれ'),
  array('text', 'mb0', 'さっぱりといただきたいときは、酸味のきいたレモンだれがおすすめです。レモン汁にオリーブオイル、塩、こしょうを加えるだけで完成です。<br>薄くスライスした玉ねぎやみょうがなどを添えて召し上がれ。'),
  array('plus-end'),


  // （大見出し2）
  array('ttl_l', 'mb1', 'かつおのたたきや薬味だれを使ったアレンジレシピ'),
  array('text', 'mb2', 'たれが余ってしまったり、かつおのたたきが残ってしまったときは、別のお料理に活用しましょう。ひと手間加えるだけで、新たな料理として楽しめますよ。'),

  //（小見出し）
  array('ttl_m', 'mb1', '薬味だれを使ったさっぱりパスタ'),
  array('text', 'mb2', 'ボイルいかを使った<a href="' . $base_url . '/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>です。ボイルいかはリング状にカットしたものでもよいですし、ほたるいかのボイルをそのまま入れても美味しいですよ。'),
  array('textimg', '05', 'right', '薬味だれを使ったさっぱりパスタ', 'mb2', '<a href="' . $base_url . '/magazine/article/recipe06.php" class="recipe-design__link">キャベツ</a>はひと口大に切ります。たっぷりのお湯に塩を入れた鍋で、パスタを固めにゆでます。フライパンに油を入れ、すりおろし生姜、キャベツ、いかを炒めます。ゆであがったパスタを加え、全体をなじませます。火を止めてから、薬味だれを混ぜ合わせれば完成です。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'かつおのたたきの漬け丼'),
  array('text', 'mb2', 'かつおのたたきを使ったどんぶりです。かつおのたたきは、ひと口大にカットします。みりんと酒を合わせ、レンジで50秒ほど加熱し、アルコールを飛ばします。そこに醤油を合わせ、かつおのたたきを漬け込み、30分ほど冷蔵庫に入れて味をなじませます。'),
  array('textimg', '06', 'left', 'かつおのたたきの漬け丼', 'mb0', '味が染み込んだかつおのたたきを<a href="' . $base_url . '/magazine/article/recipe-technic20.php" class="recipe-design__link">ご飯</a>にのせ、生卵の黄身、大葉、刻みのりなどをトッピングすればできあがりです。'),


);

//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //ミエ　通常
  array('mama', '01', 'コウちゃんはまだみょうがが食べられないから、ポン酢マヨネーズだれを作ったよ'),

  //コウちゃん　喜ぶ
  array('ko', '03', 'かつお、おいしい～'),

  //マサキ　通常
  array('papa', '01', '薬味だれは、お酒にもご飯にも合うな～！'),

  //ミエ　通常
  array('mama', '01', 'たれを手作りすると、薬味の風味がいつもより新鮮で美味しく感じる～'),

  //フラッキー　通常
  array('fl', '01', 'たれを数種類作っておくと、いろいろな味が楽しめるぞ！'),

  //ミエ　通常
  array('mama', '01', '次は洋風だれにもチャレンジしてみよう～'),

  //マサキ　通常
  array('papa', '01', 'いいね！洋風のかつおのたたき、今から楽しみだ！'),


);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '15040'),
  array('recommend-recipe-id', '15072'),
  array('recommend-recipe-id', '15024'),
  array('recommend-recipe-end'),

);

?>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-cnt.php"); ?>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
