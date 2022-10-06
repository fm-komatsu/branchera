<?php
//base
include("../../function.php");
$content = get_id_data('15112');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「美味しいハンバーグの作り方」を動画とテキストで解説。ふっくらジューシーなハンバーグに仕上げるコツをご紹介します。「よりふんわり」「よりジューシー」にしたいときのおすすめ食材や、人気のアレンジレシピもご紹介します。';
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
$currentNumber = '112';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'PkmrZxf5xmg';

//導入文
$introTxt = '第112回は、「美味しいハンバーグの作り方」です。家族みんなから人気のハンバーグを美味しく仕上げるコツをご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // パパ　通常
  array('papa', '01', '先週お店で食べたハンバーグ、美味しかったな～。肉汁が口いっぱいに広がって…'),

  // コウちゃん　通常
  array('ko', '01', 'おいしかった～！'),

  // パパ　通常
  array('papa', '01', 'あんな美味しいハンバーグが家で作れたら最高なのにな～'),

  // フラッキー　通常
  array('fl', '01', '家でも美味しいハンバーグは簡単に作れるぜ！<br>ポイントを押さえれば、プロ顔負けのハンバーグだって夢じゃないぞ！'),

  // パパ　驚く
  array('papa', '03', 'ええ～？僕でも作れるかな～？'),

  // フラッキー　通常
  array('fl', '01', '大丈夫、俺に任せろ！ジューシーで美味しいハンバーグの作り方を教えてやるぜ！'),
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

  // （大見出し1）
  array('ttl_l', 'mb0', '美味しいハンバーグの作り方'),

  // （本文1）
  array('text', 'mb2', '子どもから大人まで、幅広い世代に人気のハンバーグ。ふっくらジューシーな食感が魅力ですが、プロのように上手に作るのはなかなか難しいですよね。「ひび割れてしまった」「パサパサになってしまった」という経験がある方もいるのではないでしょうか？でも、実はコツを押さえるだけで、美味しいハンバーグを簡単に作ることができるのです！今回は、美味しいハンバーグの作り方を詳しくご紹介します。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料（2人分）'),
  array('ttl5', 'mb0', '＜ハンバーグ＞'),
  array('mtr-st'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe18.php" class="recipe-design__link">合びき肉</a>', '250g'),
  array('mtr', '玉ねぎ', '1/2個'),
  array('mtr', 'パン粉', '1/2カップ'),
  array('mtr', '牛乳', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>3'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>', '1個'),
  array('mtr', '塩', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1/2'),
  array('mtr', 'こしょう', '少々'),
  array('mtr', 'ナツメグ', '少々'),
  array('mtr', 'サラダ油', '大さじ1'),
  array('mtr-end'),
  array('ttl5', 'mb0', '＜ソース＞'),
  array('mtr-st'),
  array('mtr', 'ケチャップ', '大さじ3'),
  array('mtr', '赤ワイン', '大さじ2'),
  array('mtr', '中濃ソース', '大さじ1'),
  array('mtr', 'バター', '10g'),
  array('mtr-end'),


  // （小見出し）
  array('ttl_m', 'mb0', '手順'),

  array('step', '01', 'mb0', '玉ねぎを<a href="' . $base_url . '/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。フライパンにサラダ油（大さじ1/2）を入れて<a href="' . $base_url . '/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけ、みじん切りにした玉ねぎをしんなりするまで炒めてください。炒め上がった玉ねぎは、バットに取り出して冷まします。'),

  array('step', '02', 'mb3', 'ボウルに合いびき肉、炒めた玉ねぎ、パン粉、牛乳、卵、塩、こしょう、ナツメグを入れて、手でぎゅっぎゅっとつかむようにして混ぜます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '材料はより冷たい状態で！'),
  array('free', 'mb0', '肉だねをこねる際に、体温や室温で肉だねが温まると肉から油が溶け出て、パサっとした仕上がりになるおそれがあるぞ。できるだけ、食材は使う直前に冷蔵庫から出すようにしよう！また、夏場は氷水や保冷剤で手を冷やしてからこねるのもおすすめだぜ！'),
  array('chk-end'),

  array('step', '03', 'mb3', '全体が混ざったら、指先でぐるぐると練り混ぜます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'ひび割れしないためのポイントは”粘り”と塩！'),
  array('free', 'mb0', 'ハンバーグを焼いたときに、ひび割れを起こすことがあるよな。あれは、ハンバーグの肉だねがよく混ざっていないことが原因なんだ！肉だねの材料をボウルに入れたら、しっかりとこねて、粘り気を出すことが重要だぜ。肉だねを粘りが出るくらいこねると、材料がよくまとまってひび割れしづらくなるんだ！そして、忘れちゃいけないのが塩！塩は肉のタンパク質を分解して、粘りを出す効果があるぞ。'),
  array('chk-end'),

  array('step', '04', 'mb3', '肉だねを2等分にします。肉だねを右手と左手でキャッチボールするように20回程度投げて、中の空気を抜いてください。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '空気を抜くのは何のため？'),
  array('free', 'mb0', '肉だねの空気を抜くのは、焼いたときに崩れるのを防ぐためなんだ！肉だねに空気が入った状態で焼くと、加熱によって空気が膨張して、肉だねの中に空洞ができたり形が崩れてしまったりするんだ。ハンバーグが崩れると、見た目が悪くなるだけでなく、肉汁があふれ出て美味しさが半減する原因になるぜ。空気を抜くことは、仕上がりのよさと美味しさ、両方にかかわると覚えておこう！'),
  array('chk-end'),

  array('step', '05', 'mb3', '手のひらにサラダ油（分量外）を塗り、肉だねを1.5cm程度の厚さの楕円形に成型します。形を整えたら、中央を軽く押さえてへこませましょう。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '中央をへこませるのは何のため？'),
  array('free', 'mb0', '焼く前に肉だねの中央をへこませるのは、生焼きを防いで、美味しく焼きあげるのに欠かせない工程なんだ！<br>
肉は焼くと内側に向かって収縮するから、そのまま焼くと肉だねの中央が盛り上がってしまう。すると、厚みが変わって均一に火が通らなくなってしまうんだ。でも事前にへこませておけば、中央だけ厚くなるのを防いで、火の通りを均一にすることができるんだぜ！'),
  array('chk-end'),

  array('step', '06', 'mb0', 'フライパンにサラダ油（大さじ1/2）を入れて、中火で熱します。肉だねをそっと入れて、焼き色が付くまで約3分焼きます。'),

  array('step', '07', 'mb0', 'ハンバーグを裏返したらフライパンに蓋をして、弱火で10分程度蒸し焼きにします。'),

  array('step', '08', 'mb0', 'ハンバーグに竹串を刺して、透明な肉汁が出れば焼きあがりです。焼きあがったハンバーグを皿に移します。'),

  array('step', '09', 'mb0', 'ハンバーグを焼いた後のフライパンでソースを作ります。余分な油をキッチンペーパーで拭いて、バター以外の材料を全て入れ、軽く煮詰めます。火を止めてからバターを加えて、全体を混ぜたら完成です。'),

  array('step', '10', 'mb3', '皿に盛ったハンバーグにソースをかけたら、できあがり！'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', 'プラスαでさらに美味しく！'),
  array('text', 'mb2', 'ご紹介した基本の作り方に“ある材料”をプラスすることで、より「ふんわり」「ジューシー」な仕上がりにすることができます！お好みに合わせて、ぜひお試しください。'),
  array('ttl_s', 'mb0', 'マヨネーズを入れてふんわり！'),
  array('text', 'mb2', '肉だねにマヨネーズを少量入れると、よりふんわりした仕上がりになります。これは、マヨネーズに含まれる油の粒子の効果で、肉だねのタンパク質の結合が緩やかになるためです。'),
  array('ttl_s', 'mb0', 'パン粉の代わりにお麩を使ってジューシーに！'),
  array('text', 'mb0', 'パン粉の代わりにお麩を使うと、ジューシーに仕上がります。お麩はパン粉に比べて吸水能力が高く、肉汁を閉じ込めやすくするからです。お麩は先に水に浸して戻してから、1cm角にちぎって使いましょう。'),
  array('plus-end'),


  // （大見出し2）
  array('ttl_l', 'mb0', 'ハンバーグの人気アレンジレシピ'),

  // （本文2）
  array('text', 'mb2', '手軽にできる、ハンバーグのアレンジレシピをご紹介します。'),

  // （小見出し）
  array('ttl_m', 'mb', 'チーズ入りハンバーグ'),
  array('textimg', '11', 'left', 'alt', 'mb', 'とろりとしたチーズが入ったハンバーグ。まず基本の手順通りに肉だねを作ります。成形する際に、折りたたんだスライスチーズを、肉だねの中心に入れ込みましょう。その後、基本の手順と同じように焼き上げれば完成です。簡単にできるアレンジなので、ぜひお試しください！'),

  // （小見出し）
  array('ttl_m', 'mb', 'おろしポン酢ハンバーグ'),
  array('textimg', '12', 'right', 'alt', 'mb', '大根おろしとポン酢を添えるだけで、和風ハンバーグにアレンジできますよ。<br>基本の手順通りにハンバーグを作ったら、大葉と水気をしぼった<a href="' . $base_url . '/magazine/article/recipe-technic58.php" class="recipe-design__link">大根おろし</a>をのせます。最後にポン酢をかければ完成です。'),

  // （小見出し）
  array('ttl_m', 'mb', 'ハンバーググラタン'),
  array('textimg', '13', 'left', 'alt', 'mb0', 'ハンバーグとグラタンを合わせた、ボリューム満点のメニュー！基本のハンバーグを作って耐熱皿に入れ、<a href="' . $base_url . '/magazine/article/recipe-technic81.php" class="recipe-design__link">ホワイトソース</a>を加えます。お好みでプチトマトやゆでた<a href="' . $base_url . '/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>などの野菜を加えて、表面全体にとろけるチーズをのせましょう。オーブントースターで焼き色が付くまで加熱したら完成です。'),

);

//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //ママ　通常
  array('mama', '01', 'パパ！このハンバーグ、ジューシーで本当に美味しい！'),

  //コウちゃん　喜ぶ
  array('ko', '03', 'おいし～！じゅ〜し〜！'),

  //パパ　通常
  array('papa', '01', 'この間食べたお店のハンバーグと同じくらい美味しくできたな～♪'),

  //フラッキー　褒める
  array('fl', '03', '<a href="' . $base_url . '/magazine/article/recipe-technic103.php" class="recipe-design__link">デミグラスソース</a>、<a href="' . $base_url . '/magazine/article/recipe-technic89.php" class="recipe-design__link">トマトソース</a>、<a href="' . $base_url . '/magazine/article/recipe-technic81.php" class="recipe-design__link">ホワイトソース</a>と、ソースを変えるだけでも違った味わいを楽しめるぜ！<br>
どれも電子レンジで作れるから、ぜひ試してみてくれよ！'),

  //パパ　通常
  array('papa', '01', 'ありがとう、フラッキー！なんだか料理の自信が湧いてきたよ～'),

  //ママ　通常
  array('mama', '01', '今後ハンバーグは、パパが担当で決まりね！'),
);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '14003', 'cooking_2208_1'),
  array('recommend-recipe-id', '15107', 'cooking_2208_2'),
  array('recommend-recipe-id', '15074', 'cooking_2208_3'),
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
