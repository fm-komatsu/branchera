<?php
//base
include("../../function.php");
$content = get_id_data('15095');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「枝豆のゆで方」を動画とテキストで解説。枝豆を美味しくゆでるための手順やゆで時間、塩加減などのポイントをご紹介します。電子レンジで加熱する方法や、保存方法も併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '95';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'YLNLAM1NODg';

//導入文
$introTxt = '第95回は、「枝豆のゆで方」です。枝豆を美味しくゆでるには、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>加減がポイント。簡単で美味しい、ゆで方のコツをお伝えします。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // パパ　通常
  array('papa', '01', 'さて、今日のビールのお供は枝豆だ！さあ、ゆでるぞ〜'),

  // ママ　困る
  array('mama', '02', 'パパって、枝豆ゆでたことあったっけ？塩加減とか分かるの？'),

  // パパ　通常
  array('papa', '01', '「とりあえず、熱湯に枝豆と塩少々を入れればOK！」と思ってたけど…'),

  // フラッキー　通常
  array('fl', '01', 'おいおい！枝豆は正しくゆでないと、せっかくの美味しさが半減するぜ〜！ゆでる前の下処理も忘れずやらないと！'),

  // パパ　驚き
  array('papa', '03', 'ええ？そうなの？ただゆでるだけじゃダメなのか〜！'),

  // フラッキー　通常
  array('fl', '01', 'もちろんさ！色鮮やかで美味しく仕上げる、枝豆のゆで方を伝授するぜ！'),


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
  array('ttl_l', 'mb0', '枝豆のゆで方'),

  //  （本文1）
  array('text', 'mb3', 'ビールのお供やおかず、小腹が空いたときのおやつなど、さまざまなシーンで活躍する枝豆。ゆでるだけで立派な1品になる、便利な食材です。そんな枝豆の美味しさを引き出すには、ゆで方が重要！今回は、鍋を使う基本の枝豆のゆで方のほか、電子レンジやフライパンを使ってゆでる方法をご紹介します。'),

  // （小見出し）
  array('ttl_m', '', '材料'),
  array('mtr-st'),
  array('mtr', '枝豆', '1袋（約200g～250g）'),
  array('mtr', '塩（もみ込み用 ）', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1'),
  array('mtr', '塩（ゆで用）', '大さじ1強'),
  array('mtr', '※塩の量の目安：もみ込み用とゆで用を合わせて水に対して4％', ''),
  array('mtr', '水', '1000ml'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', '', '手順'),
  array('step', '01', 'mb0', '枝豆は茎から外しておきます。'),
  array('step', '02', 'mb3', '茎につながっているさやの先端部分を5mm程度切り落とします。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb0', 'なぜさやの先端を切るの？'),
  array('free', 'mb0', '<p class="mb0">さやの先端部分を切り落とすことで、さやの内側までしっかりお湯が回るようになるぞ。すると豆に塩味が付きやすくなって、より美味しく仕上がるんだ！</p>'),
  array('chk-end'),

  array('step', '03', 'mb0', '枝豆は軽く洗ってから水気を切り、ボウルに入れます。'),
  array('step', '04', 'mb3', 'ボウルに塩を加え、枝豆を塩もみします。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb0', '塩もみをする理由'),
  array('free', 'mb0', '<p class="mb0">塩もみすると、枝豆表面の産毛が取れて、塩味が乗りやすくなるぜ。加えて、色鮮やかに仕上げる効果もあるぞ！</p>'),
  array('chk-end'),

  array('step', '05', 'mb0', '鍋に水を入れて沸騰させ、ゆで用の塩を入れます。そこに、塩もみした枝豆を塩が付いたまま入れましょう。ボウルに残った塩も、少量の水で溶かして鍋に入れてください。'),
  array('step', '06', 'mb0', '時折、菜箸で鍋の中を混ぜながら、4～5分ゆでます。'),
  array('step', '07', 'mb0', '鍋から枝豆を1～2個取って食べ、豆のかたさを確認します。ゆで上がっていたら、ざるに上げましょう。'),
  array('step', '08', 'mb3', '冷まして食べる場合は、ざるにのせて粗熱を取り、冷蔵庫で冷やしましょう。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb0', '枝豆は冷蔵庫で冷やそう！'),
  array('free', 'mb0', '<p class="mb0">ゆであがった枝豆を水にさらして冷ますのはNG！水っぽい仕上がりになってしまう上、栄養成分やせっかく付けた塩味が流れ落ちてしまうぜ。常温で冷ました後、冷蔵庫に入れよう！</p>'),
  array('chk-end'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '鍋以外の道具を使ってゆでる場合'),
  array('text', 'mb2', '鍋を使わず、より短時間で枝豆をゆでたいときにおすすめの方法をご紹介します。'),
  array('ttl_s', 'mb0', '電子レンジを使う場合'),
  array('text', 'mb2', '電子レンジを使う場合、水をほとんど使わずに加熱することができます。<br>鍋でゆでる場合と同じ手順で塩もみまでやったら、よく水で流して汚れを落とします。水分が付いたまま耐熱皿にのせて、塩適量を振りかけましょう。<br>
最後に500Wに設定した電子レンジで、5分程度加熱したらできあがりです。'),
  array('ttl_s', 'mb0', 'フライパンを使う場合'),
  array('free', 'mb0', '<p class="mb2">鍋でゆでる場合よりも少量の湯でゆでるので、より枝豆の味が濃くなる方法です。<br>
電子レンジの場合と同様に、枝豆は塩もみした後軽く水洗いして汚れを落とします。次に、フライパンに1カップ（200ml）程度の水と塩適量を入れて沸騰させましょう。そこに枝豆を入れて、蓋をして5分程度蒸したらできあがりです。</p>
<p>どちらも、鍋でゆでるよりも少量の湯で蒸す方法になります。程よい歯ごたえが残り、ぎゅっと濃縮された枝豆の味が楽しめますよ。</p>'),
  array('plus-end'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '枝豆の種類ごとの特徴'),
  array('text', 'mb2', '一口に「枝豆」といっても、複数の種類があり、それぞれ異なる特徴があるのをご存知ですか？枝豆の種類は、大きく分けて「白毛豆（青豆）」「茶豆」「黒豆」の3種類。各種の見た目や、味の特徴についてご紹介します。'),
  array('ttl_s', 'mb0', '白毛豆（青豆）'),
  array('text', 'mb2', '国内で最も流通しているタイプの枝豆です。さやのうぶ毛が白いことから、「白毛豆」と呼ばれています。さやと豆の色は鮮やかな緑色で、クセがなく、程よい甘味が特徴です。関東を中心に、全国で栽培されています。'),
  array('ttl_s', 'mb0', '茶豆'),
  array('text', 'mb2', '豆が茶色の薄皮に包まれているタイプが茶豆です。外見は白毛豆と大きな違いはありません。白毛豆よりも糖分を多く含んでいて、強い甘味と香ばしい香りがするのが特徴です。<br>茶豆は東北を中心に栽培されており、山形県には「だだ茶豆」、新潟県には「新潟茶豆」というその地を代表するブランド茶豆が存在します。'),
  array('ttl_s', 'mb0', '黒豆'),
  array('free', 'mb0', '<p class="mb2">豆が黒っぽい薄皮に包まれているタイプが黒豆です。白毛豆、茶豆と同様に、さや自体は緑色をしています。黒大豆が成熟して、黒豆になる前の状態で収穫します。黒豆特有の濃厚な甘味と、もっちりとした食感が特徴です。<br>
関西で多く栽培されており、京都府や兵庫県で栽培される「丹波の黒豆」が有名です。</p>
<p class="mb0">ご紹介した3種類それぞれに、多くの品種が存在しています。ぜひ食べ比べて、ご自身の好みのタイプを見つけてくださいね。</p>'),
  array('plus-end'),

  // （大見出し2）
  array('ttl_l', 'mb0', '枝豆の保存方法'),

  // （本文2）
  array('text', 'mb3', '枝豆は鮮度が落ちやすく、時間が経つと豆が痩せてうまみが失われてしまいます。一度に食べきれない量の枝豆を入手したら、適切な方法で保存して鮮度を保つようにしましょう。生で保存する方法と、ゆでてから保存する方法をご紹介します。'),

  // （小見出し）
  array('ttl_m', '', '生で保存する場合'),
  array('text', 'mb2', 'ゆでる前の生の状態で冷凍保存すると、美味しさを保ちやすいのでおすすめです。<br>
まず、さや付きの枝豆を水洗いし、汚れやホコリを取り除きます。キッチンペーパーでよく水気を取ってから、ファスナー付き保存袋に入れて冷凍庫に入れましょう。<br>
効率よく冷凍できるように、平べったい形に整えて入れるのがコツです。食べるときは、そのまま塩と一緒に熱湯に入れてゆでましょう。<br>
保存期間の目安は、約3週間です。'),

  // （小見出し）
  array('ttl_m', '', 'ゆでて保存する場合'),
  array('text', 'mb3', '枝豆をゆでて保存する場合は、水にさらさず、風に当てて冷ましてから冷凍します。<br>
生のまま保存する場合と同様に、ファスナー付き保存袋に入れて冷凍保存してください。1食分ずつ小分けにしておくと、食べるときに楽なのでおすすめです。解凍する際は、保存袋に入れたまま流水解凍しましょう。<br>
保存期間の目安は、約3週間です。'),

  // （大見出し3）
  array('ttl_l', 'mb0', '枝豆を使った人気レシピ'),

  // （本文2）
  array('text', 'mb3', '枝豆には、ビタミン類やイソフラボンなどの栄養素が豊富に含まれています。いろいろな調理方法を試しながら、ぜひ日々の食事に取り入れてくださいね。'),

  // （小見出し）
  array('ttl_m', '', '枝豆のおにぎり'),
  array('textimg', '09', 'left', '枝豆のおにぎり', 'mb2', 'ゆでた枝豆をさやから取り出し、薄皮をむきます。塩少々、細かく刻んだ梅干し、ちりめんじゃこなどと一緒に、温かいご飯に入れます。それを軽く混ぜ合わせて、<a href="' . $base_url . '/magazine/article/recipe-technic21.php" class="recipe-design__link">お好みの形に握りましょう</a>。枝豆の食感と香ばしさが生かされる一品です。'),

  // （小見出し）
  array('ttl_m', '', '枝豆と大根のサラダ'),
  array('textimg', '10', 'right', '枝豆と大根のサラダ', 'mb0', 'ゆでてさやから出した枝豆と、<a href="' . $base_url . '/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にした大根、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>とマヨネーズ、塩を混ぜます。冷蔵庫にしばらく置いて、味がなじんだらできあがり。<br>
枝豆とマヨネーズの甘味と、大根のさっぱりとした味わいのバランスが良いサラダです。'),

);



//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  // パパ　通常
  array('papa', '01', 'フラッキーのおかげで、上手に枝豆がゆでられたよ！ビールに枝豆はやっぱり最高だ〜！'),

  // フラッキー　　褒める
  array('fl', '03', '枝豆には、アルコールの分解を助ける成分も含まれているんだ。だから、おつまみにはぴったりだぜ！'),

  // ママ　通常
  array('mama', '01', 'そうなの？よーし、じゃあこれからお酒を飲むときは、パパに枝豆を準備してもらわなくっちゃ！'),

  // コウちゃん　笑顔
  array('ko', '03', 'こうちゃんも、おやつにえだまめたべたーい！'),

  // パパ　通常
  array('papa', '01', 'これはもう逃げられないな…！この夏は「枝豆担当」として頑張るぞ〜！'),
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
  array('recommend-recipe-id', '15129', 'cooking_2208_3'),
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
