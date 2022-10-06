<?php
//base
include( "../../function.php" );
$content = get_id_data( '15090' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「そぼろの作り方」を動画とテキストで解説。誰にでも簡単に調理できて、作り置きできるそぼろの作り方をご紹介します。ダマにならないようにするコツや、保存方法、アレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '107';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '90';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'z9atOZh7-yU';

//導入文
$introTxt = '第90回は、「そぼろの作り方」です。誰にでも簡単に調理できて、多めに作り置きもできて、便利に使えるそぼろの作り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // コウちゃん　通常
  array ('ko','01','まま～、こうちゃんそぼろたべたい！'),

  // ママ　通常
  array ('mama','01','じゃあ、今日のお昼はそぼろ丼にしようか！<br>…そういえば、前作ったときはダマになっちゃったんだよね～今日は上手に作れるかな？'),

  // フラッキー　通常
  array ('fl','01','そぼろのダマは、ひき肉を混ぜるときに“ある道具”を使うと簡単に解消できるぜ！<br>ちょっとしたコツで上手に仕上がるから、覚えておいて損はないぞ～'),

  // ママ　驚く
  array ('mama','03','“ある道具”！？フラッキー、何を使えばいいのか教えて～！'),

  // フラッキー　通常
  array ('fl','01','よし来た！任せとけ！美味しいそぼろの作り方を教えてやるぜ！')


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
  array('ttl_l','mb0','基本のそぼろの作り方'),

//  （本文1）
  array('text','mb3','ごはんのお供やトッピング、おつまみなど、幅広いメニューに使えるそぼろ。保存もできるので、<a href="'.$base_url.'/magazine/article/recipe-collect08.php" class="recipe-design__link">常備菜</a>として作り置きしても便利な1品です。失敗せずに美味しく作れる、鶏ひき肉のそぼろの作り方をご紹介します。'),

// （小見出し）
array('ttl_m','','材料（4人分）'),
array ('mtr-st'),
array ( 'mtr','鶏ひき肉','200g'),
array ( 'mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2'),
array ( 'mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>','大さじ1</a>'),
array ( 'mtr','酒','大さじ1'),
array ( 'mtr','みりん','大さじ1'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','鍋にすべての材料を入れて、よく混ぜ合わせておきます。'),
array('step','02','mb3','そのまま火にかけて、混ぜながら<a href="'.$base_url.'/magazine/article/recipe-technic02.php" class="recipe-design__link">弱～中火</a>で炒めます。'),



// ■Check
array('chk-st'),
array('ttl4','mb0','鶏ひき肉を混ぜるときは菜箸を4～5本使おう！'),
array('free','mb0','<p class="mb2">鶏ひき肉を混ぜるときに使う“あの道具”とは、菜箸のこと！加熱しながら鶏ひき肉を混ぜるときは、4～5本の菜箸をまとめて持って混ぜよう！<br>2本の菜箸でやるよりも、鶏ひき肉を細かくバラせるから、大きなダマになるのを防ぐことができるぞ！</p>'),
array('chk-end'),

array('step','03','mb0','鶏ひき肉に火が通って色が変わり始めたら、混ぜる手を少し早めましょう。'),
array('step','04','mb0','ダマにならないように手早く混ぜながら、鶏ひき肉がポロポロした状態になるまで火を通します。'),
array('step','05','mb3','引き続き混ぜながら、煮汁がほとんどなくなるまで煮詰めて、汁気を飛ばしていきます。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','余分な油はしっかり拭き取ろう！'),
array('free','mb0','<p class="mb2">鶏ひき肉を炒めているときに出てくる余分な油は、キッチンペーパーなどで拭き取っておこう！仕上がりが油っぽくならずにすむぜ！<br>
特に作り置きするときは、時間が経つと余分な油が出てきやすいから、あらかじめ拭き取っておくようにしよう！</p>'),
array('chk-end'),

array('step','06','mb3','鍋を火から下ろして、粗熱が取れたら容器などに移して完成です。'),


// （大見出し2）
array('ttl_l','mb0','そぼろの保存方法'),

// （本文2）
array('text','mb3','そぼろは冷凍保存ができます。作り置きしておけば、いろいろなメニューにアレンジできるので便利です。常備菜のひとつとして、ぜひストックしてみてくださいね。<br>
次は、冷凍保存と解凍の方法についてご紹介しましょう。'),

// （小見出し）
array('ttl_m','','冷凍保存'),
array('text','mb3','まず、粗熱が取れた状態のそぼろをラップに包みます。このとき、50gや100gずつ小分けにして包むと、1食分ごとに保存できるので便利です。<br>小分けにしたそぼろは、数食分ずつファスナー付き保存袋に入れて、冷凍庫で保存しましょう。<br>保存期間の目安は、約3週間です。'),

// （小見出し）
array('ttl_m','','解凍方法'),
array('text','mb3','ラップのまま、そぼろを耐熱皿に入れて電子レンジで加熱します。50〜100gなら、600Wに設定した電子レンジで、約1分の加熱が目安です。加熱時間は、様子を見て調整してください。'),

// （大見出し3）
array('ttl_l','mb0','そぼろを使った人気アレンジレシピ'),

// （本文3）
array('text','mb3','そぼろは、ボリューム満点のごはんメニューから、おつまみに使える一品まで、幅広くアレンジできます。簡単で美味しいアレンジレシピをご紹介しましょう！'),

// （小見出し）
array('ttl_m','','2色そぼろ丼'),
array('textimg','07','right','2色そぼろ丼','mb2','お肉の茶色と<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>の黄色のコントラストが美しい、2色そぼろ丼。そぼろ以外に、炒り卵を作るだけでOKの簡単メニューです！<br>砂糖、酒、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を入れた溶き卵を、弱火にかけたフライパンに流し入れます。そぼろと同じく、4～5本の菜箸で混ぜながら加熱しましょう。全体に火が通ったら火から下ろします。<br>そぼろと炒り卵を、丼に盛ったごはんの上に、半分ずつになるようにのせていきます。彩りに青ねぎや<a href="'.$base_url.'/magazine/article/recipe-technic98.php" class="recipe-design__link">いんげん</a>などを散らしたら完成です。'),

// （小見出し）
array('ttl_m','','ごぼうそぼろ'),
array('textimg','08','left','ごぼうそぼろ','mb2','そぼろにごぼうが入った、ごはんによく合うピリ辛の一品です。基本のそぼろの作り方をアレンジして作ります。<br>まず、<a href="'.$base_url.'/magazine/article/recipe-technic45.php" class="recipe-design__link">ごぼうはささがき</a>にして、水にさらしておきましょう。すりおろしたにんにくと<a href="'.$base_url.'/magazine/article/recipe-technic53.php" class="recipe-design__link">生姜</a>を油で炒めます。香りが立ったら鶏ひき肉を加えて、混ぜながら加熱しましょう。鶏ひき肉に火が通ったら、基本の調味料、ささがきにしたごぼう、豆板醤を加えてよく炒めます。汁気がなくなるまで炒めたら完成です。'),

// （小見出し）
array('ttl_m','','そぼろチャーハン'),
array('textimg','09','right','そぼろチャーハン','mb2','いつものチャーハンも、そぼろを使うとちょっと甘辛い仕上がりに♪<br><a href="'.$base_url.'/magazine/article/recipe-technic86.php" class="recipe-design__link">基本のパラパラチャーハンの作り方</a>の通りに、卵と混ぜたごはんを炒める手順まで進めます。チャーシューの代わりにそぼろを100gほど加えて、塩こしょうで味をととのえたら完成です。'),
);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　通常
array ('mama','01','ダマにならずにできた～！油っぽくないし、いい感じ♪'),

// フラッキー　褒める
array ('fl','03','しっかり菜箸で混ぜたおかげだな！4〜5本使うのが決め手だぞ！<br>今回は鶏ひき肉だったけど、豚や牛、合い挽き肉でも美味しく作れるぜ。試してみてくれ！'),

// コウちゃん　喜ぶ
array ('ko','03','そぼろどん、おいし～！'),

// パパ　通常
array ('papa','01','いくらでも食べられるなあ～！このそぼろだけで、ごはん3杯は余裕だよ！'),

// ママ　通常
array ('mama','01','褒めてくれるのはうれしいけど、食べ過ぎはダメだからね～！ '),
);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15032'),
array ('recommend-recipe-id','14018'),
array ('recommend-recipe-id','14003'),
array ('recommend-recipe-end'),

);


?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-cnt.php"); ?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
