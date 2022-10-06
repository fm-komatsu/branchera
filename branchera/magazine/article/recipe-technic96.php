<?php
//base
include("../../function.php");
$content = get_id_data('15096');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「とうもろこしのゆで方」を動画とテキストで解説。とうもろこしを美味しくゆでるための手順やゆで時間などのポイントをご紹介します。電子レンジで加熱する方法や、保存方法も併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '96';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'mOxwDxH1yGU';

//導入文
$introTxt = '第96回は、「とうもろこしのゆで方」です。甘みたっぷり、美味しいとうもろこしのゆで方をご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // パパ　通常
  array('papa', '01', 'さて、スーパーへ買い物に行ってくるよ！何か食べたいものある？'),

  // コウちゃん　通常
  array('ko', '01', 'こうちゃん、とうもろこしたべたい♪'),

  // ママ　通常
  array('mama', '01', 'とうもろこし、いいわね！夏といえば、甘〜いとうもろこしよね'),

  // パパ　困る
  array('papa', '02', 'だね〜！だけど、ゆで方がわからないんだよね…生で買うのは不安だな〜'),

  // フラッキー　通常
  array('fl', '01', 'おいおい、とうもろこしのゆで方は意外と簡単なんだぜ？<br>鍋の代わりに、フライパンやレンジでもできちゃうしな！'),

  // パパ　驚き
  array('papa', '03', 'えっ、そうなの！？フラッキー、さっそくだけどゆで方を教えてくれないかな'),

  // フラッキー　褒める
  array('fl', '03', 'よしきた！オレについてこい、マサキ！'),


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
  array('ttl_l', 'mb0', '鍋・フライパンを使ったとうもろこしのゆで方'),

  //  （本文1）
  array('text', 'mb3', '夏が旬のとうもろこしは、ゆでるだけで食事にもおやつにもなる便利な食材。甘みをしっかり引き出し、粒がシャキっとした食感にゆで上げましょう。何本かまとめてゆでるときは、鍋やフライパンが便利です。手順をご紹介します。'),

  // （小見出し）
  array('ttl_m', '', '材料'),
  array('mtr-st'),
  array('mtr', 'とうもろこし', '1〜2本'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1強'),
  array('mtr', '水', '1,000ml強'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', '', '手順'),
  array('step', '01', 'mb3', '皮付きのとうもろこしは、内側の薄皮1〜2枚を残して外側の皮をむき、さっと水洗いしましょう。<br>外側の皮がないとうもろこしの場合は、ヒゲを取ってから水洗いします。'),

  // ■Check
  array('chk-st'),
  array('free', 'mb0', '<p class="mb0">ゆでるときに薄皮を残しておくと、甘みを閉じ込めるラップの役目をしてくれるんだ。でも、外側の皮を残すと青臭さが移るから要注意だぞ！</p>'),
  array('chk-end'),

  array('step', '02', 'mb3', '鍋、または深めのフライパンに水を入れ、<a href="' . $base_url . '/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で加熱して沸騰させます。そこに塩、とうもろこしを入れて、とうもろこしがひたひたになる程度の水量に調整してください。'),

  // ■Check
  array('chk-st'),
  array('free', 'mb0', '<p class="mb0">とうもろこしが鍋に入りきらないときは、半分か3等分くらいに切ってOKだ。芯がかたいから、切るときはすべらないように注意だぞ！<br>
フライパンを使う際は、丸ごと1〜2本ゆでるのであれば、直径24cm〜28cm程度のフライパンがおすすめだぜ！深さは、水を入れたときにとうもろこしがひたひたになる程度ならOKだ！</p>'),
  array('chk-end'),

  array('step', '03', 'mb3', 'そのまま3分〜5分ゆでましょう。'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '水からとうもろこしをゆでるとどうなる？'),
  array('text', 'mb0', '今回のように、沸騰してからとうもろこしを入れてゆでると、シャキッとした歯ごたえに仕上がります。一方、水の状態からとうもろこしを入れてゆでると、水分を吸ってみずみずしくジューシーな仕上がりになります。水からゆでる場合は、中火で加熱して沸騰させ、そのまま3〜5分ゆでればOKです。お好みに合わせて使い分けてみてくださいね。'),
  array('plus-end'),

  array('step', '04', 'mb3', 'ざるに上げて粗熱を取ったら、最後に薄皮とヒゲを取り除いて完了です。'),

  // （大見出し2）
  array('ttl_l', 'mb0', '電子レンジでゆでる方法'),

  // （本文2）
  array('text', 'mb3', '1本だけゆでるときや、時間を短縮したいときには電子レンジが手軽でおすすめです。水を使わないため、味がギュッと凝縮されます。さっそく手順をご紹介しましょう。'),

  // （小見出し）
  array('ttl_m', '', '材料'),
  array('text', 'mb2', 'とうもろこし（皮なし）　1本'),

  // （小見出し）
  array('ttl_m', '', '手順'),
  array('free', 'mb0', '<p class="mb2">とうもろこしのヒゲを取り除き、さっと水洗いします。ラップに包んで、600Wに設定した電子レンジで4分30秒程度加熱してください。</p>
<p class="mb3">電子レンジから取り出し、しばらく放置します。食べやすい温度になったら、ラップを外していただきましょう。</p>
'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '生で食べられるとうもろこしとは？'),
  array('textimg', '05', 'right', '生で食べられるとうもろこしとは？', 'mb0 mt1_sp', 'とうもろこしには、黄色ではなく白い粒が詰まった「ホワイトコーン」と呼ばれる種類があります。ピュアホワイト、ホワイトショコラなどは、ホワイトコーンの代表的な品種です。ホワイトコーンは、粒がやわらかく甘みが強いので、ゆでずに生のままいただけます。皮をむき、軽く水洗いしてから、実の部分をサラダのトッピングにすると食べやすいですよ。シャキッとした食感と、強い甘味が楽しめます。ぜひ試してみてくださいね。'),
  array('plus-end'),


  // （大見出し3）
  array('ttl_l', 'mb0', 'ゆでたとうもろこしの保存方法'),

  // （本文3）
  array('text', 'mb3', 'ゆでたとうもろこしは、冷蔵・冷凍で保存することができます。多めにゆでて保存しておけば、食べたいときにすぐ用意できるのでおすすめです。数日の間に食べ切る場合は冷蔵、長期間保存したい場合は冷凍しましょう。それぞれの手順をご紹介します。'),

  // （小見出し）
  array('ttl_m', '', '冷蔵保存の方法'),
  array('text', 'mb2', 'ゆでたとうもろこしを熱いうちにラップで包みます。粗熱が取れたら、冷蔵室に入れて保存しましょう。<br>保存期間の目安は、3〜4日です。'),

  // （小見出し）
  array('ttl_m', '', '冷凍保存の方法'),
  array('text', 'mb3', 'かためにゆでてから、3～4cmの<a href="' . $base_url . '/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にして、水気をよく拭き取ります。または、芯から粒を外して、粒だけの状態にします。それらをラップに包んだら、保存容器やファスナー付き保存袋に入れ、冷凍庫で保存します。<br>
保存期間の目安は、約1ヵ月です。'),


  // （大見出し4）
  array('ttl_l', 'mb0', 'ゆでたとうもろこしを使った簡単レシピ'),

  // （本文4）
  array('text', 'mb3', 'ゆでたとうもろこしを使った、簡単&amp;美味しいレシピをご紹介します。ひと手間加えるだけで違った味が楽しめるので、ぜひお試しください！'),

  // （小見出し）
  array('ttl_m', '', '焼きとうもろこし'),
  array('textimg', '06', 'right', '焼きとうもろこし', 'mb2', 'ゆでたとうもろこしを、食べやすいサイズ（2〜3等分）に切ります。バットに<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>と<a href="' . $base_url . '/magazine/article/recipe-technic22.php#mirin" class="recipe-design__link">みりん</a>を適量入れて、とうもろこしを転がしてまんべんなくタレを付けましょう。フライパンにバターを入れて熱し、温まったらとうもろこしを入れます。転がしながら焼き、バットに残ったタレも加えてください。軽く焦げ目が付いたらできあがりです。'),

  // （小見出し）
  array('ttl_m', '', 'とうもろこしのスープ'),
  array('textimg', '07', 'left', 'とうもろこしのスープ', 'mb0', 'ゆでたとうもろこしの実を包丁で取ります。ミキサーやフードプロセッサーにかけて、<a href="' . $base_url . '/magazine/article/recipe-technic63.php" class="recipe-design__link">ペースト状</a>にしてください。それを鍋に入れて、牛乳を注ぎます。火にかけ、木ベラで混ぜながら沸騰させないように加熱しましょう。最後に塩こしょうで味を調えたら完成です。'),

);



//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  // パパ　通常
  array('papa', '01', 'フラッキーに教わって、スーパーで買ってきたとうもろこしをゆでたよ！ママ、コウちゃん、どう？'),

  // ママ　驚く
  array('mama', '03', 'わあ、甘〜い！それに、粒がシャキッとしていて、歯ごたえがちょうどいい！'),

  // コウちゃん　喜ぶ
  array('ko', '03', 'あま〜い！おいし〜い！'),

  // フラッキー　　褒める
  array('fl', '03', 'やったな、マサキ！とうもろこしは新鮮なうちが一番美味しいから、買ってきたらすぐにゆでるのもポイントだぜ！'),

  // パパ　通常
  array('papa', '01', 'ありがとう、フラッキー！これで今年の夏は、いつでも美味しいとうもろこしが楽しめるぞー！'),
);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);

//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '14019'),
  array('recommend-recipe-id', '15157'),
  array('recommend-recipe-id', '15149'),
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
