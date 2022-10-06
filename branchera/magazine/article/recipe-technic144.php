<?php
//base
include("../../function.php");
$content = get_id_data('15144');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「サラダチキンの作り方」を動画とテキストで解説。レンジを使って簡単にサラダチキンを手作りできる方法と、ハーブや柚子胡椒などの味付けアレンジ、保存方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '144';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'nIihignQ3Pw';

//導入文
$introTxt = '第144回は、「サラダチキンの作り方」です。ヘルシーで人気の高いサラダチキンの簡単な作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //ミエ　通常
  array('mama', '01', 'コウちゃん、サラダまだいっぱいあるよ！'),

  //コウちゃん　通常
  array('ko', '01', 'はっぱ、もういらない'),

  //ミエ　困る
  array('mama', '02', 'え～、もっと食べてよ～'),

  //マサキ　通常
  array('papa', '01', 'そうだ！最近流行っているサラダチキンを買ってきて入れたらどうかな？'),

  //フラッキー　通常
  array('fl', '01', 'サラダチキンは家で簡単に手作りできるって知ってるか？'),

  //ミエ　驚く
  array('mama', '03', 'え！？自分で作れるの？'),

  //フラッキー　通常
  array('fl', '01', 'よし、簡単にサラダチキンを作る方法を教えてやるぜ！'),

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
  array('ttl_l', 'mb0', 'サラダチキンを電子レンジで作る方法'),

  // （本文1）
  array('text', 'mb2', '鶏のむね肉を使ったサラダチキンは、低脂肪・高タンパクのヘルシーなメニューとして人気があります。サラダに添えるのはもちろん、ひと手間加えるだけで別の料理にもアレンジできるため、基本の作り方を覚えておくと重宝しますよ。<br>今回は、電子レンジを使って簡単にサラダチキンを作る方法をお伝えしましょう。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料（作りやすい分量）'),
  array('mtr-st'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic19.php#torimuneniku" class="recipe-design__link">鶏むね肉</a>', '1枚（250g）'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>', '小さじ2'),
  array('mtr', '酒', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', 'mb1', '手順'),
  array('step', '01', 'mb3', '鶏むね肉は皮を取り除き、フォークで全体に穴をあけます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'フォークで穴をあけることで、やわらかい仕上がりに！'),
  array('free', 'mb0', 'フォークで鶏むね肉に穴をあけておくと、焼き縮みを抑えてやわらかい食感に仕上がるんだ。下味も通りやすくなるぞ！'),
  array('chk-end'),

  array('step', '02', 'mb0', '耐熱皿に鶏むね肉を入れ、塩、砂糖をすり込み、酒をふります。'),
  array('step', '03', 'mb0', 'ふんわりとラップをかけ、500Wに設定した電子レンジで6分加熱します。'),
  array('step', '04', 'mb0', 'ラップをしたまま冷まします。'),
  array('step', '05', 'mb3', '食べやすい大きさにカットして完成です。'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '材料を変えて味付けに変化を！'),
  array('text', 'mb0', '基本の調味料に、ほかの風味を加えるのもおすすめです。たとえば、ハーブや柚子こしょう、マスタード、マヨネーズ、カレー粉などはサラダチキンの味付けに最適です。味のバリエーションが広がり、変化を楽しめますよ。'),
  array('plus-end'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '電子レンジ以外で作る方法'),
  array('text', 'mb2', 'サラダチキンは、鍋や炊飯器でも簡単に作ることができます。'),
  array('ttl_s', 'mb0', '鍋で作る方法'),
  array('text', 'mb2', '鶏のむね肉に味付けをしたら、ラップに包み、保存袋に入れ、空気を抜きます。鍋にお湯を沸かし、沸騰したら鶏むね肉を入れて火を止めます。蓋をして、お湯が冷めるまで放置して予熱で火を通しましょう。切ってみて、肉の断面の色が白っぽく変化していればOKです。<br>もし、断面がピンク色で赤い汁が出てくるようなら、電子レンジで少しずつ追加加熱をしましょう。断面から赤い汁が出なくなればOKです。'),
  array('ttl_s', 'mb0', '炊飯器で作る方法'),
  array('text', 'mb0', '炊飯器の保温機能を使っても、サラダチキンをジューシーに仕上げることができます。
鶏むね肉に味を付けたら、保存袋に入れて空気を抜きます。炊飯器に鶏むね肉を入れ、保存袋全体がかぶるくらいまで熱湯を注ぎます。保温機能のスイッチを押し、1時間ほど放置すれば完成です。'),
  array('plus-end'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', 'サラダチキンの保存方法は？'),
  array('text', 'mb0', '冷蔵保存、冷凍保存が可能です。冷蔵保存の場合は、<strong>3～4日</strong>で使い切るようにします。<br>冷凍保存の場合は、<strong>3週間ほど</strong>で使い切るようにしましょう。解凍する際は、冷蔵庫に移してゆっくり自然解凍させます。'),
  array('plus-end'),

  //（大見出し2）
  array('ttl_l', 'mb1', 'サラダチキンの人気アレンジメニュー'),
  array('text', 'mb2', 'サラダチキンは作り置きしておくと便利な一品です。人気の高いアレンジレシピをご紹介しましょう。'),

  //（小見出し）
  array('ttl_m', 'mb1', '冷やし中華のサラダチキンのせ'),
  array('textimg', '07', 'right', '冷やし中華のサラダチキンのせ', 'mb2', '冷やし中華のハムや<a href="' . $base_url . '/magazine/article/recipe-technic110.php" class="recipe-design__link">チャーシュー</a>の代わりにサラダチキンを具材にします。まず、サラダチキンを食べやすい大きさにほぐします。きゅうりは<a href="' . $base_url . '/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にし、トマトは薄切りにします。卵を溶いて、砂糖、塩を加えてからフライパンで薄く焼き、千切りにして<a href="' . $base_url . '/magazine/article/recipe-technic37.php" class="recipe-design__link">錦糸卵</a>を作ります。'),
  array('text', 'mb2', '中華麺をゆでたら冷水にさらし、水気を切って皿に盛ります。具材を乗せ、冷やし中華のタレをかければできあがりです。お好みで<a href="' . $base_url . '/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>を添えてもよいですね。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'サラダチキンの彩りサラダ'),
  array('textimg', '06', 'left', 'サラダチキンの彩りサラダ', 'mb0', 'タンパク質もしっかりとれるサラダです。まず、サラダチキンをほぐします。ちぎったレタスをボウルに入れ、パプリカやにんじんの千切り、プチトマトを加えて混ぜ合わせます。<br>レモン汁とオリーブオイル、塩、こしょう、はちみつでドレッシングを作り、サラダにかけて召し上がれ。'),

);

//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //コウちゃん　喜ぶ
  array('ko', '03', 'コウちゃん、これすき～！'),

  //ミエ　通常
  array('mama', '01', 'わ～、コウちゃんがたくさんサラダ食べてる～♪'),

  //マサキ　通常
  array('papa', '01', 'サラダチキンがしっとりしていて、美味しいよ！'),

  //フラッキー　通常
  array('fl', '01', 'サラダチキンをピーマンやパプリカと一緒に炒めて、<br>酒、みりん、醤油、にんにくのすりおろしで味付けするのもおすすめだぜ'),

  //マサキ　通常
  array('papa', '01', 'おっ、それも美味しそうだな～！'),

  //フラッキー　通常
  array('fl', '01', 'サラダチキンは鶏むね肉だけでなく、ささみでも作れるぞ！'),

  //ミエ　通常
  array('mama', '01', 'ささみなら、さらにヘルシーだね！<br>たくさん作って、これからいっぱい食べちゃおうっと♪'),

);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '14009'),
  array('recommend-recipe-id', '14019'),
  array('recommend-recipe-id', '15019'),
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
