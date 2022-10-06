<?php
//base
include("../../function.php");
$content = get_id_data('15127');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「豆苗の食べ方」を動画とテキストで解説。家計に優しい食材、豆苗の美味しい食べ方と、栽培・再収穫する方法をご紹介します。豆苗を使ったアレンジメニューもご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '127';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'OZMaxQKeh94';

//導入文
$introTxt = '第127回は、「豆苗の美味しい食べ方」です。家計に優しい食材の代表、豆苗の美味しい食べ方と、栽培・再収穫する方法をご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //ミエ　困る
  array('mama', '02', 'はあ〜、お給料日前はいつも食費のやりくりに困っちゃう…。今日もこれからお買い物だけど、コスパのいい食材って何かなあ？'),

  //フラッキー　通常
  array('fl', '01', 'お〜い、ミエ！コスパがいい食材なら、豆苗がおすすめだぜ！'),

  //ミエ　困る
  array('mama', '02', 'あっ、フラッキー！豆苗って、そんなにお得なの？'),

  //フラッキー　褒める
  array('fl', '03', 'おう！豆苗は一年中いつでも手頃に手に入るうえに、残った根から芽を育てて、再収穫することもできるんだぜ！'),

  //ミエ　驚く
  array('mama', '03', 'そういえば、食べた後の豆苗を水に浸けると育つって聞いたことある…！<br>ねえフラッキー、豆苗の美味しい食べ方と育て方を教えてくれない？'),

  //フラッキー　褒める
  array('fl', '03', 'オッケー♪しっかり覚えて、家計のピンチを乗り切るぞ！'),

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
  array('ttl_l', 'mb0', '豆苗の食べ方'),

  // （本文1）
  array('text', 'mb2', '豆苗は、えんどう豆から発芽した若菜。スーパーでは主に、工場で水耕栽培して、豆を発芽させたものが売られています。ビタミンCやβカロテンなどの栄養素を豊富に含み、お手頃ながら栄養満点の優秀野菜です。今回は、豆苗の食べ方をご紹介します。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料'),
  array('mtr-st'),
  array('mtr', '豆苗', '1パック'),
  array('mtr-end'),


  array('ttl_m', 'mb1', '手順'),
  array('step', '01', 'mb3', '豆と根の部分をカットして、葉と茎の部分だけにします。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '豆の少し上の部分を切ろう！'),
  array('textimg', '02', 'right', '', 'mb0', '豆と根の部分は、豆苗を再生する際に必要になるぞ！豆と根を傷つけないように、根元の茎をちょっとだけ残して、豆の少し上の部分を切るのがポイントだ！'),
  array('chk-end'),

  array('step', '03', 'mb3', '食べやすい長さに切ります。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '豆苗を切る長さはどのくらい？'),
  array('free', 'mb0', '豆苗の長さは、一緒に調理する食材や用途に合わせてカットするといいぞ！<a href="' . $base_url . '/magazine/article/recipe-technic134.php" class="recipe-design__link">麺</a>や細長い食材と一緒に調理するときは長めに、薬味のように使うときは短めにするのがおすすめだぜ！'),
  array('chk-end'),

  array('step', '04', 'mb0', '葉と茎をざるに入れて軽く水洗いして、しっかり水気を切ります。'),
  array('step', '05', 'mb3', '下ごしらえ完了です。'),

  // （大見出し2）
  array('ttl_l', 'mb0', '豆苗の育て方'),

  // （本文2）
  array('text', 'mb2', '豆苗は根が付いた状態で売られています。食べる際に茎から切り取りますが、根を取っておけば、もう一度葉を育てて収穫することができます。<br>
一度購入すれば、2〜3度収穫できるお得な豆苗。正しい育て方を覚えて、食費節約につなげましょう。'),

  // （小見出し）
  array('ttl_m', 'mb1', '必要なもの'),
  array('text', 'mb2', '豆苗を使った後の豆と根'),

  array('ttl_m', 'mb1', '手順'),
  array('step', '06', 'mb0', 'タッパーやトレイなどの容器、または豆苗が入っていたプラスチックケースなどに、残しておいた豆と根を入れます。'),
  array('step', '07', 'mb3', '豆にかからない程度の高さまで水を入れます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '水の入れ過ぎに注意'),
  array('free', 'mb0', '水を入れるときは、豆にかからないように注意しよう！豆が水に浸かると、腐りやすくなってしまうぞ。'),
  array('chk-end'),

  array('step', '08', 'mb3', '日当たりのよい場所に置き、毎日水を取り替えます。<br>ある程度芽が伸びたら、カットして収穫しましょう。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '水は常にきれいな状態をキープ'),
  array('free', 'mb0', '1日1回水を取り替えて、きれいな状態を保とう。特に夏場は、水が傷みやすいから忘れずに取り替えてくれよな！'),
  array('chk-end'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '豆苗は2回程度再生させることができる'),
  array('free', 'mb0', '豆苗の水耕栽培は2回程度行なうことができるぞ。再収穫するときも根元の茎を少し残した状態でカットすれば、もう一度同じように育てて収穫できるんだ！<br>
ただし、2回目の栽培は雑菌が増えているおそれがあるから、生食はせずにゆでたり炒めたりして、加熱調理して食べてくれよな！'),
  array('chk-end'),

  // （大見出し3）
  array('ttl_l', 'mb0', '豆苗の活用レシピ'),

  // （本文3）
  array('text', 'mb2', '癖のない味わいで子どもにも食べやすい豆苗は、幅広い料理に使えます。食費を節約できて、しかも美味しい！大満足の豆苗レシピをご紹介します。'),

  //（小見出し）
  array('ttl_m', 'mb1', '豆苗と油揚げの味噌汁'),
  array('textimg', '09', 'right', '豆苗と油揚げの味噌汁', 'mb2', 'シャキシャキの豆苗と、コクのある油揚げが相性抜群の一品です。<br>豆苗は食べやすいサイズに切ります。油揚げは油抜きして、短冊切りにしておきましょう。鍋に<a href="' . $base_url . '/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>を沸かし、豆苗と油揚げを入れます。ひと煮立ちしたら火を止めて、味噌を溶き入れたらできあがりです。ボリュームアップに<a href="' . $base_url . '/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a>を入れるのもおすすめ！'),

  //（小見出し）
  array('ttl_m', 'mb1', '豆苗のサラダ'),
  array('textimg', '10', 'left', '豆苗のサラダ', 'mb2', '豆苗はサラダにしても美味しく食べられます。お好みの食材と<a href="' . $base_url . '/magazine/article/recipe-technic145.php" class="recipe-design__link">ドレッシング</a>を自由に組み合わせて楽しみましょう！<br>
たとえば、豆苗に塩昆布、ゆずの皮を和えれば、爽やかな香りの和風サラダに。豆苗にツナやコーンを加えてマヨネーズで和えれば、子どもの食事にもぴったりなツナマヨサラダになりますよ。'),

  //（小見出し）
  array('ttl_m', 'mb1', '豆苗の卵とじ'),
  array('textimg', '11', 'right', '豆苗の卵とじ', 'mb2', '豆苗の卵とじは、だしの風味とふわふわ<a href="' . $base_url . '/magazine/article/recipe-collect02.php" class="recipe-design__link">卵</a>にほっと癒される一品です。<br>
豆苗は、あらかじめ食べやすいサイズに切っておきましょう。フライパンに白だしと水を入れ火にかけて、煮立ったら豆苗を加えます。豆苗がしんなりしたら溶き卵を回し入れ、好みのかたさになればできあがり！ご飯にのせれば、豆苗の卵とじ丼にもなりますよ。'),


  //（小見出し）
  array('ttl_m', 'mb1', '豆苗のおひたし'),
  array('textimg', '12', 'left', '豆苗のおひたし', 'mb0', '豆苗のおひたしは、食卓にもう1品欲しいとき、手軽に作れる定番おかずです。<br>
たっぷりのお湯で豆苗をさっとゆで、水気を絞ります。お好みの長さでカットして、お皿に盛り、仕上げにかつお節をのせて完成！食べる直前に、だし<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>やポン酢醤油をかけます。簡単&amp;すぐにできるので、ぜひお試しください。'),


);
//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //ミエ　通常
  array('mama', '01', 'お待たせ〜、ご飯できたよ！今日は豆苗でたくさんおかずを作っちゃった♪'),

  //マサキ　通常
  array('papa', '01', 'わあ、すごい品数！豆苗って、生でも加熱しても食べられるし、和洋中いろんなものに使えるんだね'),

  //コウちゃん　通常
  array('ko', '01', 'とーみょー、すごーい！'),

  //フラッキー　褒める
  array('fl', '03', '豆苗を育てるときは、置き場所に注意だぜ。日当たりのいい場所がおすすめだけど、水が傷みやすい夏は直射日光を避けるのがポイント！<br>
あとは、トレーをおしゃれなガラス容器やかごに入れたりすると、育てるのが楽しくなるぞ！'),

  //ミエ　通常
  array('mama', '01', '節約しながら、食べても見ても楽しめるなんて、豆苗って本当優秀〜！フラッキー、ありがとう♪'),
);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);

//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '15039'),
  array('recommend-recipe-id', '15042'),
  array('recommend-recipe-id', '15065'),
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
