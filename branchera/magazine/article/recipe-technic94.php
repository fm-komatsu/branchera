<?php
//base
include("../../function.php");
$content = get_id_data('15094');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ホットケーキの作り方」を動画とテキストで解説。ホットケーキミックスなしで作れる、薄力粉を使ったホットケーキのレシピをご紹介します。ふんわり厚めに焼くコツや、人気のアレンジメニューも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '105';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '94';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = '7fIyPPamnKM';

//導入文
$introTxt = '第94回は、「ホットケーキの作り方」です。ホットケーキミックスがなくてもOK！薄力粉を使って、簡単にホットケーキを作る方法をお伝えします！';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // コウちゃん　通常
  array('ko', '01', 'まま～、ほっとけーきたべたい'),

  // ママ　困る
  array('mama', '02', 'ホットケーキか～、今ホットケーキミックスを切らしているのよね'),

  // パパ　通常
  array('papa', '01', '僕、買ってこようか？いつもの店にあるだろ？'),

  // ママ　困る
  array('mama', '02', 'なかったの。お店の人に聞いたら、今日は売り切れなんだって～。<br>ごめんね、コウちゃん…'),

  // フラッキー　通常
  array('fl', '01', 'ストーップ！ホットケーキミックスを使わなくても、家にある小麦粉でホットケーキは作れるぜ。しかも簡単だ！'),

  // ママ　通常
  array('mama', '01', 'ほんと！？フラッキー、ぜひ教えて！コウちゃん、ホットケーキ作れるって！'),

  // コウちゃん　通常
  array('ko', '01', 'やった～！'),


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
  array('ttl_l', 'mb0', 'ホットケーキの作り方'),

  //  （本文1）
  array('text', 'mb3', 'ホットケーキは、ホットケーキミックスがなくても簡単に作ることができます。アレンジ次第でおやつにも食事にもなるホットケーキは、基本の作り方を覚えておくといろいろなシーンで役立ちますよ。さっそく、薄力粉を使ったホットケーキの作り方をご紹介します。'),

  // （小見出し）
  array('ttl_m', '', '材料（4枚分）'),
  array('mtr-st'),
  array('mtr', '薄力粉', '200g'),
  array('mtr', 'ベーキングパウダー', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>2'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>', '50g'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>', '1個'),
  array('mtr', '牛乳', '150ml'),
  array('mtr', 'サラダ油', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2'),
  array('mtr', 'バター、メープルシロップなど', 'お好みで適量'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', '', '手順'),
  array('step', '01', 'mb0', 'ボウル①に薄力粉、ベーキングパウダー、砂糖を入れて泡立て器でよく混ぜます。'),
  array('step', '02', 'mb0', '別のボウル（ボウル②）に卵を割りほぐし、牛乳とサラダ油を加えて混ぜます。'),
  array('step', '03', 'mb3', 'ボウル①に、ボウル②の中身を加えて、泡立て器で混ぜ合わせましょう。'),

  // ■Check
  array('chk-st'),
  array('free', 'mb0', '<p class="mb0">粉をざっくりと混ぜるのが、ふんわり厚めに焼くコツだ！小さなダマが残っているくらいで大丈夫。生地の粘度が高い状態になるから、厚みが出やすくなるぞ。<a href="' . $base_url . '/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>でじっくり焼いてくれよ～！</p>'),
  array('chk-end'),

  array('step', '04', 'mb0', 'フライパンに薄くサラダ油（分量外）をひき、<a href="' . $base_url . '/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で温めます。'),
  array('step', '05', 'mb0', 'ぬれ布巾にフライパンの底を当てて、底全体の温度を均一にします。'),
  array('step', '06', 'mb0', 'フライパンを再度弱火にかけます。ボウルの生地を1/4量おたまですくって、フライパンの中央に流します。'),
  array('step', '07', 'mb0', '弱火で3分ほど焼きます。表面にプツプツと小さな泡が出てきたら、裏返してください。'),
  array('step', '08', 'mb0', '裏面も弱火で2分ほど焼いて、皿に移します。残りの生地も同様に焼きましょう。'),
  array('step', '09', 'mb3', 'お好みでバターをのせ、メープルシロップやはちみつをかけていただきます。'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', 'ホットケーキをヘルシーに仕上げたいときは？'),
  array('free', 'mb0', '<p>「ホットケーキを食べたいけど、カロリーが気になる…」というときにおすすめなのが、牛乳を低脂肪・無脂肪牛乳や豆乳に変える方法です。分量は通常の牛乳を使うときと同じなので、手軽にカロリーカットすることができますよ。</p>'),
  array('plus-end'),

  // （大見出し2）
  array('ttl_l', 'mb0', 'ホットケーキの人気アレンジメニュー'),

  // （本文2）
  array('text', 'mb3', '基本のホットケーキが焼けるようになったら、いろいろな具材と組み合わせてアレンジしてみましょう。人気のアレンジメニューをご紹介します。'),

  // （小見出し）
  array('ttl_m', '', 'りんごのタルトタタン風'),
  array('textimg', '10', 'left', 'りんごのタルトタタン風', 'mb2', 'ボリュームのある見た目で、おもてなしにぴったりの一品です。<br>まずフライパンに、バターを適量入れて溶かします。そこに<a href="' . $base_url . '/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にしたりんご、砂糖を加えて、蓋をして加熱しましょう。火が通ったら、シナモンを加えてざっと混ぜます。りんごをきれいに並べ直したら、ホットケーキの生地を流し入れてください。再び蓋をして極弱火で焼いて、生地に火が通ったらできあがり。<br>お好みで、<a href="' . $base_url . '/magazine/article/recipe-technic51.php" class="recipe-design__link">ホイップした生クリーム</a>、アイスクリームなどを添えて食べても美味しいですよ。'),

  // （小見出し）
  array('ttl_m', '', 'ウインナー添えホットケーキ'),
  array('textimg', '11', 'right', 'ウインナー添えホットケーキ', 'mb2', 'スイーツのイメージが強いホットケーキですが、<a href="' . $base_url . '/magazine/article/recipe-technic84.php" class="recipe-design__link">ウインナー</a>や<a href="' . $base_url . '/magazine/article/recipe-technic93.php" class="recipe-design__link">目玉焼き</a>など、塩気のあるものを添えるのもおすすめです。<br>
レシピ通りに焼いたホットケーキに、ボイル、またはフライパンで焼いたウインナーと目玉焼きを添えます。お好みでバター、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>こしょう、ケチャップをかけましょう。いわゆる”甘じょっぱい”味がお好みの方は、メープルシロップやはちみつなどをかけても美味しくいただけます。<br>また、ホットケーキを裏返した後に、ピザ用チーズやスライスチーズをのせて焼くのもおすすめです。'),

  // （小見出し）
  array('ttl_m', '', '野菜たっぷり！サラダホットケーキ'),
  array('free', 'mb2', '<p class="mb0">野菜と<a href="' . $base_url . '/magazine/article/recipe-technic145.php" class="recipe-design__link">ドレッシング</a>で食べる、朝食やランチにピッタリのメニューです。レタスは水に十分浸して、しっかり水気を切ってから和えると、シャキっとした食感になり、ホットケーキのトッピングによく合います。まずホットケーキを1枚焼き上げます。次に、生ハム、レタス、<a href="' . $base_url . '/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>、トマト、<a href="' . $base_url . '/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>を小さく切り、ドレッシングと和えましょう。最後に、一口大に切ったホットケーキをのせてできあがりです。<br>ドレッシングを吸わないように、ホットケーキは食べる直前にトッピングしましょう。</p>'),

  // （小見出し）
  array('ttl_m', '', '重ねて美味しい！ホットケーキタワー'),
  array('textimg', '12', 'left', '重ねて美味しい！ホットケーキタワー', 'mb0', 'ホットケーキを数枚重ねてフルーツを添えたホットケーキタワー。カラフルでかわいいので、ちょっぴり贅沢な子どもたちのおやつにぴったりです。<br>焼き立てのホットケーキを4～5枚重ねてバターを挟み、メープルシロップや市販のフルーツソース、チョコレートソースなどを上からかけます。仕上げに、バナナやイチゴ、ブルーベリー、オレンジ、キウイなどのフルーツを、生クリームと一緒に彩りよくあしらってください。<br>
「市販のケーキはまだ早いかも」という、1歳くらいの子どものバースデーケーキにもおすすめ。生クリームよりも糖分や脂質が少ない、水切りしたヨーグルトでデコレーションすれば安心です。'),

);



//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  // ママ　通常
  array('mama', '01', '完成！フラッキーの言う通り、ホットケーキミックスがなくても簡単に焼けた～！どう？コウちゃん'),

  // コウちゃん　笑顔
  array('ko', '03', 'おいしい～！'),

  // パパ　通常
  array('papa', '01', 'しっとり、ふわふわしていてすっごく美味しいよ！厚みがあるから食べ応えがあるね！'),

  // フラッキー　通常
  array('fl', '01', '今回紹介したレシピだと、生地が水っぽくならずにふんわり焼けるんだ。<br>より厚めに焼きたいときは、牛乳の代わりにヨーグルトや絹豆腐を使うという裏ワザもあるぜ！'),

  // ママ　通常
  array('mama', '01', 'へえ〜試してみたい！次もふんわり厚めに焼いて、生クリームを添えてみようっと♪'),
);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);

//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '14020'),
  array('recommend-recipe-id', '14013'),
  array('recommend-recipe-id', '15093'),
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
