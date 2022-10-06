<?php
//base
include("../../function.php");
$content = get_id_data('15118');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「カリフラワーのゆで方」を動画とテキストで解説。サラダやマリネ、炒め物などさまざまな料理に使えるカリフラワー。より美味しく、白くきれいに仕上げるゆで方をご紹介します。フライパンや電子レンジを使った簡単なゆで方も併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '118';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = '2i-jIVPvWlw';

//導入文
$introTxt = '第118回は、「カリフラワーのゆで方」です。サラダやマリネ、炒め物などさまざまな料理に使えて、見た目もかわいいカリフラワー。美味しい食感が味わえる、上手なゆで方のコツをご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // ママ　通常
  array('mama', '01', 'よし、今日はたくさん食材を買ってこれたわ〜！'),

  // コウちゃん　通常
  array('ko', '01', 'これ、おはなみたいでかわいい！'),

  // ママ　通常
  array('mama', '01', 'これはね、カリフラワーっていう野菜なの！かわいいだけじゃなくて、美味しいんだから～'),

  // コウちゃん　喜ぶ
  array('ko', '03', 'へ～！こうちゃん、たべた～い！'),

  // ママ　困り顔
  array('mama', '02', 'そうね、美味しくゆでられたらいいんだけれど…'),

  // フラッキー　通常
  array('fl', '01', 'カリフラワーのゆで方は、以前教えた<a href="' . $base_url . '/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリーのゆで方</a>と基本は一緒だぜ！'),

  // ママ　通常
  array('mama', '01', 'そうか！ブロッコリーとカリフラワーって似ているもんね～<br>
でも、ゆで時間は違うのかな…？'),

  // フラッキー　通常
  array('fl', '01', 'よし、分かった！俺がカリフラワーのゆで方のコツを教えてやるぜ！'),



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
  array('ttl_l', 'mb0', 'カリフラワーのゆで方'),

  // （本文1）
  array('text', 'mb2', '<a href="' . $base_url . '/magazine/article/recipe09.php" class="recipe-design__link">サラダ</a>から加熱料理、お酒のおつまみとしても使える幅の広さが頼もしいカリフラワー。食物繊維やビタミンCなど、栄養の面でも魅力的な野菜です。カリフラワーといえば「白」ですが、最近はオレンジや紫の品種も出てきています。また、イタリアの伝統野菜「ロマネスコ」といった変わり種も国内で出回るようになってきました。今回は、カリフラワーを美味しく、美しく仕上げるためのゆで方のコツをご紹介します。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料'),
  array('mtr-st'),
  array('mtr', 'カリフラワー', '1株'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1'),
  array('mtr', '水', '1,500cc'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', 'mb0', '手順'),

  array('step', '01', 'mb0', 'カリフラワーの葉を、付け根部分から手で取り除きます。手で取りにくい場合は、<a href="' . $base_url . '/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>で切り落としてください。'),
  array('step', '02', 'mb0', '房の部分の花蕾（からい）が枝分かれしている、ギリギリのところに包丁を入れて切り落とします。'),
  array('step', '03', 'mb0', '水を張ったボウルに切り落とした花蕾部分を入れて、揺すりながらゴミやホコリを取り除きます。'),
  array('step', '04', 'mb0', '残った茎の部分は、包丁で厚めに皮をむいた後、7mm程度の厚さに切ります。'),
  array('step', '05', 'mb3', 'カリフラワーが浸かるくらいの水（1.5～2リットル程度が目安）を沸騰させて、塩を適量加えます。塩の量は、水の量の1～2％が目安です。1.5～2リットルの水量の場合、塩の量は大さじ1程度になります。'),


  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '白くきれいに仕上げるには、酢や小麦粉を入れること！'),
  array('free', 'mb0', 'カリフラワーをゆでると、アクが出て茶色っぽく変色することがある。白くきれいに仕上げるには、お湯の中に少量の<a href="' . $base_url . '/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>か小麦粉を入れるといいぞ！お酢の場合大さじ1/2程度、小麦粉の場合<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1程度を水で溶いてから入れよう。<br>
ブロッコリーのゆで方との違いはここにある。カリフラワーは白い分、変色すると気になりやすいからな！'),
  array('chk-end'),

  array('step', '06', 'mb3', '茎が下になるように、沸騰した鍋にカリフラワーを丸ごと入れて1分ゆでます。このとき、<a href="' . $base_url . '/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にした茎も一緒に入れます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '美味しく仕上げるコツは丸ごとゆでる！'),
  array('free', 'mb0', 'カリフラワーをゆでるときは、小房に分けず丸ごとゆでるのがおすすめ！丸ごとゆでたほうが、うまみが閉じ込められて、より美味しく仕上がるんだ。カリフラワーが丸ごと入る、大きめの鍋を使うといいぞ！さらに、小房に分けてゆでるよりも崩れにくくなるぜ。'),
  array('chk-end'),

  array('step', '07', 'mb0', '菜箸でカリフラワーの上下を逆にして、さらに1分間ゆでます。'),
  array('step', '08', 'mb0', 'カリフラワーをざるに上げ、冷まします。'),
  array('step', '09', 'mb3', 'カリフラワーが冷めたら、茎の根元に包丁を入れ、小房に切り分けて完了です。'),


  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', 'フライパンや電子レンジでゆでる方法'),
  array('text', 'mb2', 'カリフラワーは、フライパンや電子レンジでゆでることもできます。フライパンなら水が少量で済みますし、電子レンジなら時短になります。どちらも小房に切り分けてから加熱することになりますが、できるだけ手軽に済ませたいときはおすすめです。それぞれの手順をご紹介しましょう。'),
  array('ttl_s', 'mb0', 'フライパンの場合'),
  array('text', 'mb2', 'カリフラワーの葉を取り除き、小房に切り分けて洗います。フライパンに深さ2cm程度の水を張って加熱しましょう。沸騰したら塩、酢、小房に分けたカリフラワーを入れます。2分程度加熱したら完了です。'),
  array('ttl_s', 'mb0', '電子レンジの場合'),
  array('text', 'mb0', 'カリフラワーの葉を取り除き、小房に切り分けて洗います。耐熱皿に間隔をおいてカリフラワーを並べ、ラップをかけましょう。600Wに設定した電子レンジで1分半程度加熱したら完了です。'),
  array('plus-end'),

  // （小見出し）
  array('ttl_m', 'mb0', 'カリフラワーの冷凍保存方法'),
  array('text', 'mb3', 'カリフラワーを使いきれないときは、ゆでてから冷凍保存する方法がおすすめです。冷蔵保存でも約4〜5日は持ちますが、冷凍すれば長期保存できます。<br>
冷凍する場合は少しかためにゆでて、小房に分けたら水気をよく切ってください。冷ましてから、ファスナー付き保存袋に入れて冷凍しましょう。<br>
冷凍したカリフラワーは、煮物料理や炒め料理などの加熱調理するメニューに使いましょう。調理するときに、凍った状態のまま加えてください。<br>
保存期間の目安は、約1ヵ月です。'),


  // （大見出し1）
  array('ttl_l', 'mb0', 'カリフラワーを使った人気のアレンジレシピ'),

  // （本文2）
  array('text', 'mb2', 'そのままでも美味しいカリフラワーですが、一手間加えるとまた違った味わいを楽しむことができますよ。カリフラワーの人気アレンジレシピをご紹介します。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'カリフラワーの<a href="' . $base_url . '/magazine/article/recipe-technic126.php" class="recipe-design__link">ピクルス</a>'),
  array('textimg', '10', 'left', 'カリフラワーのピクルス', 'mb2', '前菜やおつまみにも使えるピクルス。ゆでて小房に分けたカリフラワーと、食べやすい大きさに切ったパプリカやきゅうりを用意します。鍋に水、酢、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、塩、にんにく、粒こしょうを入れて加熱して、ピクルス液を作りましょう。火を止めてから切った野菜を加え、冷蔵庫で冷やせば完成です。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'カリフラワーとベーコンのスープ'),
  array('textimg', '11', 'right', 'カリフラワーとベーコンのスープ', 'mb2', 'カリフラワーを使った、さっぱりとしたスープです。鍋にオリーブオイルとすりおろしたにんにくを入れて、薄切りにした玉ねぎと、1cm幅に切ったベーコンを炒めます。水とコンソメスープの素を入れ、しばらく煮込みましょう。仕上げにゆでたカリフラワーを加えて、塩、こしょうで味を調えます。ひと煮立ちしたらできあがり！'),

  array('ttl_m', 'mb1', 'カリフラワーのホットサラダ'),
  array('textimg', '12', 'left', 'カリフラワーのホットサラダ', 'mb0', '副菜として使えるホットサラダです。薄切りにした玉ねぎを油でよく炒めます。玉ねぎがきつね色になったら大きめのボウルに移して、レモンの絞り汁と塩、こしょうを入れ、混ぜ合わせます。最後にゆでたカリフラワーを加えて、全体を和えたら完成！'),


);
//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //コウちゃん　喜ぶ
  array('ko', '03', 'かりふらわー、おいしい～！'),

  //パパ　通常
  array('papa', '01', 'うん、美味しいね～！<br>
白くきれいで、歯ごたえもよく仕上がったね～'),

  //フラッキー　褒める
  array('fl', '03', '俺の教えたポイントをちゃんと押さえて作ったから、きれいにゆでられたな！<br>さすがだぞ、ミエ！'),

  //ママ　通常
  array('mama', '01', 'やったー！これで、ブロッコリーもカリフラワーも完璧！<br>
またたくさんゆでようっと♪'),

);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '13003', 'cooking_2208_1'),
  array('recommend-recipe-id', '15033', 'cooking_2208_2'),
  array('recommend-recipe-id', '15155', 'cooking_2208_3'),
  array('recommend-recipe-end')

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
