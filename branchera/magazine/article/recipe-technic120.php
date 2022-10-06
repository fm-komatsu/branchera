<?php
//base
include("../../function.php");
$content = get_id_data('15120');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「じゃがいものゆで方」を動画とテキストで解説。煮崩れせず、上手にゆでるコツやゆで時間をご紹介します。皮付きでゆでる方法、皮をむいてゆでる方法のほか、電子レンジで加熱する時短テクニックもお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '106';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '120';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'UWw69XQldqg';

//導入文
$introTxt = '第120回は、「じゃがいものゆで方」です。さまざまな料理に使われるじゃがいもですが、正しい方法でゆでることでより美味しく食べることができます。今回は基本のじゃがいものゆで方と、人気のレシピをご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //  コウちゃん　通常
  array('ko', '01', 'わ〜！じゃがいも、い〜っぱい！'),

  // ママ　笑顔
  array('mama', '01', 'おばあちゃんからたくさんじゃがいもが送られてきたの。ポテトサラダにじゃがバターに…<br>コウちゃんの好きなメニューがたくさん作れるね〜'),

  // フラッキー　通常
  array('fl', '01', 'お、うまそうなじゃがいもだな！<br>そうだ、ミエ！じゃがいもを美味しく食べたいなら、基本のゆで方をおさらいしてみないか？'),

  // ママ　通常
  array('mama', '01', 'フラッキー、大丈夫よ。じゃがいもなら私だって、ちゃんとゆでられるよ！<br>とりあえず火が通ればOKでしょ？'),

  // フラッキー　通常
  array('fl', '01', '甘いな〜！じゃがいもはゆで方次第でグンと美味しくなるんだ！<br>じゃがいもが美味しくなる、ゆで方のコツを教えてやるぜ！'),



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
  array('ttl_l', 'mb0', '基本のじゃがいものゆで方'),

  // （本文1）
  array('text', 'mb2', '肉じゃが、<a href="' . $base_url . '/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>、コロッケなど、定番メニューに欠かせない食材・じゃがいも。じゃがいものゆで方には、丸ごとゆでてから<a href="' . $base_url . '/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむく</a>方法と、先に皮をむき、切ってからゆでる方法があります。<br>
より美味しく食べたい場合は、皮付きでゆでるのがおすすめです。皮付きでゆでると、水っぽさが抑えられて、よりホクホクした食感を楽しめます。短時間で調理したい場合は、皮をむいて、切ってからゆでましょう。短い時間で火が通るので、時短になりますよ。今回は、両方のゆで方をご紹介します！'),

  // （小見出し）
  array('ttl_m', 'mb0', '丸ごと皮付きでゆでる場合の手順'),

  array('step', '01', 'mb3', 'じゃがいもはきれいに水洗いして、芽を取っておきます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '皮をむきやすくしたい場合は、切れ目を入れておこう！'),
  array('free', 'mb0', 'ゆでたじゃがいもは、皮をむくのが意外と手間だよな。ゆでる前に、じゃがいもの表面に浅い切れ目を入れておくと、皮がむきやすくなるぜ。切れ目は、じゃがいもの真ん中をぐるっと一周するように入れるといいぞ！'),
  array('chk-end'),

  array('step', '02', 'mb3', '鍋にじゃがいもとかぶる程度の水を入れて、<a href="' . $base_url . '/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱します。<br>中火で熱して沸騰したら、弱めの中火にして20分程度加熱しましょう。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'じゃがいもを水からゆでる理由は？'),
  array('free', 'mb2', 'じゃがいもは沸騰させたお湯に入れてゆでるのではなく、冷たい水に入れた状態から加熱してゆでるんだ。この理由はズバリ、加熱しすぎてじゃがいもの皮がボロボロにはがれたり、煮崩れしたりするのを防ぐため！沸騰したお湯からゆでると、中心がちょうどいいやわらかさになったころには、外側の皮や実がゆですぎの状態になってしまうんだ。'),
  array('free', 'mb0', 'もっと詳しく説明すると、ボロボロになってしまう原因は、加熱しすぎることによって「ペクチン」という成分の働きが弱くなるから。ペクチンはじゃがいもの細胞と細胞をつなぎ合わせる接着剤のような役割をするんだけど、加熱しすぎると接着力が弱くなって、崩れてしまうんだ！<br>
じゃがいもをきれいにゆでるには、水に入れて加熱するということを忘れずにな！'),
  array('chk-end'),

  array('step', '03', 'mb0', '竹串を刺してスッと通るようになったら、ゆで上がりです。'),
  array('step', '04', 'mb0', 'ざるにあげて、キッチンペーパーに包んだ状態で皮をむきます。'),
  array('step', '05', 'mb3', '完成！'),

  // （小見出し）
  array('ttl_m', 'mb0', '皮をむいてゆでる場合の手順'),

  array('step', '06', 'mb0', 'じゃがいもは皮をむいて、好みの大きさに切っておきます。'),
  array('step', '07', 'mb0', '5分程度水にさらしておきます。'),
  array('step', '08', 'mb0', '鍋にじゃがいもとかぶる程度の水を入れて、中火で熱します。<br>中火で熱して沸騰したら、弱めの中火にして10分程度加熱しましょう。'),
  array('step', '09', 'mb0', '竹串を刺してスッと通るようになったら、ゆで上がりです。'),
  array('step', '10', 'mb3', 'お湯を捨てて、再び中火にかけて鍋を揺すり、水分を飛ばします。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '水分をしっかり飛ばしたいなら、軽く粉ふきの状態にする！'),
  array('free', 'mb0', '切ってからゆでたじゃがいもは、どうしても丸ごとゆでたときよりも水っぽくなってしまう。しっかり水分を飛ばしたいなら、お湯を捨てた後さらに加熱して、粉ふきいもの状態にするといいぞ！'),
  array('chk-end'),

  array('step', '11', 'mb3', '完成！'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '電子レンジで皮付きのじゃがいもを加熱する場合は？'),
  array('text', 'mb0', '「皮付きのじゃがいもをとにかく時短で調理したい！」というときは、電子レンジで加熱する方法がおすすめです。少ない個数であれば、電子レンジを使って短時間で加熱することができます。<br>
まず、皮付きのじゃがいもをラップで包み、600Wに設定した電子レンジで1分30秒程度加熱しましょう。裏返して再び1分30秒程度加熱すれば、完了です。2個加熱する際は、表裏合わせて5〜6分程度加熱してください。加熱後はやけどに注意して、粗熱が取れてから皮をむいてくださいね。キッチンペーパーに包んだ状態だとツルッと皮がむけますよ。<br>
大量のじゃがいもを加熱したい場合は、電子レンジだと余計に時間がかかってしまう可能性があるので、鍋でゆでる方法がおすすめです。'),
  array('plus-end'),

  //（小見出し）
  array('ttl_m', 'mb1', 'ゆでたじゃがいもの保存方法'),
  array('text', 'mb3', '加熱したじゃがいもは、そのまま冷凍すると食感や風味が変わってしまいます。つぶして<a href="' . $base_url . '/magazine/article/recipe-technic67.php" class="recipe-design__link">マッシュポテト</a>にしてから冷凍保存しましょう。じゃがいもが完全に冷めたら、ラップで包んで小分けにします。小分けにした状態で何個かファスナー付き保存袋にまとめて、冷凍してください。
<br>保存期間の目安は、<strong>約1ヵ月</strong>です。'),


  // （大見出し2）
  array('ttl_l', 'mb0', 'ゆでたじゃがいもを使った人気レシピ'),

  // （本文2）
  array('text', 'mb2', 'じゃがいもが美味しくゆで上がったら、さっそく人気のレシピを作ってみましょう。小さな子どもから大人まで夢中になる、じゃがいも料理のレシピをご紹介します。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'ポテトフライ'),
  array('textimg', '12', 'right', 'ポテトフライ', 'mb2', 'あらかじめじゃがいもをゆでておけば、<a href="' . $base_url . '/magazine/article/recipe-technic09.php" class="recipe-design__link">ポテトフライ</a>も簡単に作れます。まず、皮付きのまま丸ごと水からゆでます。竹串がすっと通るくらいになったら、しっかりと水気を切り、粗熱をとって<a href="' . $base_url . '/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にします。180度の油で4分程度揚げたら、ホクホクのポテトフライの完成です。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'ポテトサラダ', 'potato-salad'),
  array('textimg', '13', 'left', 'ポテトサラダ', 'mb2', 'ゆでたじゃがいもをボウルに入れ、軽くつぶします。マヨネーズ、プレーンヨーグルト、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、粗びきこしょうで味付けすれば、シンプルなポテトサラダのできあがり。お好みでハムや<a href="' . $base_url . '/magazine/article/recipe-technic135.php" class="recipe-design__link">きゅうり</a>、にんじんを入れるのもおすすめです。<a href="' . $base_url . '/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>や、もう一品おかずが欲しいときに最適なメニューですよ。'),

  array('ttl_m', 'mb1', 'じゃがバター'),
  array('textimg', '14', 'right', 'じゃがバター', 'mb0', 'バターの塩気がやみつきになるじゃがバターは、お酒のおつまみにもぴったり。ホクホクした食感がポイントなので、じゃがいもは皮付きでゆでましょう。表面を十字に切って、塩とバター、お好みでパセリをかけてください。チーズや明太子をかけるアレンジもおすすめです。'),


);
//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //コウちゃん　通常
  array('ko', '01', 'じゃがばたー、おいもがほくほくして、おいしいねー'),

  //パパ　通常
  array('papa', '01', 'ポテトサラダも箸が止まらないよ！'),

  //ママ　通常
  array('mama', '01', 'じゃがいもって、本当にゆで方次第で美味しさが変わるのね。フラッキー、ありがとう'),

  //フラッキー　通常
  array('fl', '01', 'じゃがいもは色んな料理に使う食材だからな。美味しくゆでられれば、料理のレベルもアップするぜ！'),

  //ママ　通常
  array('mama', '01', '本当ね♪じゃがいものゆで方もマスターしたし、今度はホクホクのコロッケに挑戦しようっと！'),

);

//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '15033'),
  array('recommend-recipe-id', '14005'),
  array('recommend-recipe-id', '14017'),
  array('recommend-recipe-end'),

);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
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
