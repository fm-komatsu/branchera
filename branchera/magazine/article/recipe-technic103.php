<?php
//base
include("../../function.php");
$content = get_id_data('15103');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「デミグラスソースを手作りする方法」を動画とテキストで解説。ハンバーグやオムライスのソース、シチューやハヤシライスなど、さまざまな料理に使えるデミグラスソース。家にある材料で、電子レンジで簡単に手作りする方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '103';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'tMGbMVXyU8k';

//導入文
$introTxt = '第103回は、「デミグラスソースを手作りする方法」です。電子レンジを使って、簡単にデミグラスソースを作る方法をご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // ママ　通常
  array('mama', '01', '今日の晩ごはんはオムライスよ！コウちゃん、好きでしょ？'),

  // コウちゃん　通常
  array('ko', '01', 'コウちゃん、<a href="' . $base_url . '/magazine/article/recipe-technic125.php" class="recipe-design__link">オムライス</a>だ～いすき～！'),

  // ママ　困り顔
  array('mama', '02', 'あっ！今日はデミグラスソースをかけようと思ってたのに、買うの忘れてた…！<br>仕方ない。いつも通りケチャップにするか～'),

  // フラッキー　通常
  array('fl', '01', 'ソースぐらい、自分で作ったらいいじゃないか！'),

  // ママ　困り顔
  array('mama', '02', 'そんなこと言われても、今から作る時間ないよ！'),

  // フラッキー　通常
  array('fl', '01', 'フッフッフ。電子レンジを使えば、3分くらいで完成するんだぜ？'),

  // ママ　通常
  array('mama', '01', 'えっ！？そんなに時短できるの！？フラッキー、作り方を教えて！！'),


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
  array('ttl_l', 'mb0', 'レンジで手作りできる簡単デミグラスソースの作り方'),

  //  （本文1）
  array('text', 'mb3', '<a href="' . $base_url . '/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>やオムライス、<a href="' . $base_url . '/magazine/article/recipe-technic121.php" class="recipe-design__link">ハヤシライス</a>など、幅広い料理に使えるデミグラスソース。玉ねぎをよく炒めて、じっくり手作りするのもよいですが、電子レンジを使えば手軽に短時間で作れますよ。さっそく作り方をご紹介しましょう。'),

  // （小見出し）
  array('ttl_m', '', '材料（ハンバーグ2個分程度）'),
  array('mtr-st'),
  array('mtr', 'ケチャップ', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>3'),
  array('mtr', '赤ワイン', '大さじ2'),
  array('mtr', '中濃ソース', '大さじ1'),
  array('mtr', 'バター', '10g'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', '', '手順'),
  array('step', '01', 'mb0', '耐熱ボウルにケチャップ、赤ワイン、中濃ソースを入れて軽く混ぜます。ラップをせずに600Wに設定した電子レンジで2分加熱しましょう。'),
  array('step', '02', 'mb3', '電子レンジから取り出して、熱いうちにバターを加えます。よく混ぜたら完成です。'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '鍋で加熱して作る場合'),
  array('text', 'mb0', '多めに作りたいときには、鍋でも即席のデミグラスソースを作ることができます。材料は電子レンジで作る場合と同じ。それぞれの材料の割合を守って、作りたい分量をご用意ください。<br>
作り方は、まず鍋にバター以外の材料を入れ、火にかけてよく混ぜます。ひと煮立ちしてきたら、<a href="' . $base_url . '/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にしましょう。そのまま3分程度、混ぜながら煮ていきます。<br>とろみが付いてきたらバターを加えて、よく混ぜて完成です。そのまま鍋に具材を入れれば、ビーフシチューや煮込みハンバーグを作ることができますよ。'),
  array('plus-end'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '残ったデミグラスソースの保存方法'),
  array('text', 'mb0', 'デミグラスソースが残ったときは、冷凍保存がおすすめです。<br>まず、デミグラスソースをファスナー付き保存袋に入れます。密閉したら、冷凍庫に入れて保存しましょう。<br>使用時は電子レンジの解凍モードで解凍、または冷蔵庫に置いて解凍してください。保存期間の目安は、約3週間です。'),
  array('plus-end'),

  // （大見出し2）
  array('ttl_l', 'mb0', '人気のアレンジレシピ'),

  // （本文2）
  array('text', 'mb3', 'デミグラスソースを使ってできる、人気のアレンジレシピをご紹介します。'),

  // （小見出し）
  array('ttl_m', '', 'オムライス'),
  array('textimg', '03', 'left', 'オムライス', 'mb2', 'いつものケチャップをデミグラスソースに変えるだけで、本格的な洋食屋で食べるオムライスのような味わいに。<br>まず、普段通りにオムライスを作ります。できあがったオムライスの上に、デミグラスソースをたっぷりかければ完成です。彩りよくしたい場合は、パセリやグリーンピースを散らしてください。お好みで、しめじやマッシュルームなどの炒めた<a href="' . $base_url . '/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>を加えても美味しいですよ。'),

  // （小見出し）
  array('ttl_m', '', 'ハヤシライス'),
  array('textimg', '04', 'right', 'ハヤシライス', 'mb2', '多めに作り置きしたデミグラスソースがあれば、ハヤシライスも簡単に作ることができます。あらかじめ、1人分につき100g程度のデミグラスソースを準備しておきましょう。<br>
フライパンにバターを熱し、薄くスライスした玉ねぎをじっくり炒めます。そこに薄切りの牛肉を入れて、肉の色が変わってきたら赤ワインを加えてください。アルコールが飛んだら、デミグラスソースとケチャップ、水を加えて3分程度煮込みましょう。最後に<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>こしょうで味を調えたら完成です。'),

  // （小見出し）
  array('ttl_m', '', 'ビーフシチュー'),
  array('textimg', '05', 'left', 'ビーフシチュー', 'mb0', 'じっくり時間をかけて具材を煮込めば、ビーフシチューも作れますよ。まず、一口大に切ったシチュー用の牛肉を鍋で炒めます。牛肉に焼き色が付いたら、<a href="' . $base_url . '/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にした玉ねぎと、<a href="' . $base_url . '/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>にしたにんじんを加えてください。玉ねぎがしんなりするまで炒めたら、赤ワインと水を加えて蓋をして、<a href="' . $base_url . '/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で1時間30分程度煮込みましょう。さらに、大きめの一口大に切ったじゃがいも、デミグラスソース（1人分につき100g程度）、ケチャップを加え、蓋をせずに20分程度煮込みます。器に盛り、ゆでた<a href="' . $base_url . '/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>をのせたら完成です。'),


);



//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  // コウちゃん　喜ぶ
  array('ko', '03', 'おむらいす、とってもおいし～！'),

  // パパ　通常
  array('papa', '01', '本当だ、すごく美味しい！ソースが濃厚で、いつもと一味違うね。ハンバーグにも合うだろうな～'),

  // フラッキー　通常
  array('fl', '01', '電子レンジでサッと作れるようにしておけば、いろいろな料理に使うことができるぞ！'),

  // ママ　通常
  array('mama', '01', 'フラッキー、ありがとう！よ～し、次はハンバーグにかけてみようっと！<br>みんな、期待していてね！'),
);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);

//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '15125', 'cooking_2208_1'),
  array('recommend-recipe-id', '15112', 'cooking_2208_2'),
  array('recommend-recipe-id', '15121', 'cooking_2208_3'),
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
