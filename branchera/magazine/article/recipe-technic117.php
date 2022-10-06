<?php
//base
include("../../function.php");
$content = get_id_data('15117');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「煎り大豆の作り方」を動画とテキストで解説。節分で投げる豆はもちろん、おやつやおつまみにもなる煎り大豆。フライパン・電子レンジ・オーブンそれぞれを使った作り方や、簡単アレンジメニューをご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '117';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'YaU0XH2g5rI';

//導入文
$introTxt = '第117回は、「煎り大豆の作り方」です。節分でまくのはもちろん、おやつやおつまみにもなる煎り大豆の作り方を解説。また、余ったときのアレンジ方法もご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  // ママ　通常
  array('mama', '01', '今年もそろそろ節分ね～！今回は煎り大豆、手作りしちゃおうかな？'),

  // パパ　通常
  array('papa', '01', 'ママ、豆まき用の豆の作り方知ってるの？'),

  // ママ　通常
  array('mama', '01', 'えっ？大豆を火にかければ終わりじゃないの？'),

  // フラッキー　通常
  array('fl', '01', 'おいおい、ずいぶん乱暴だな！煎り大豆を作るには、いきなり豆を火にかけちゃダメだぞ！'),

  // ママ　驚く
  array('mama', '03', 'そうなの～？フラッキー、教えてくれる？'),

  // フラッキー　通常
  array('fl', '01', 'もちろん！俺は鬼じゃないからなっ！さっそく正しい煎り大豆の作り方を教えてやるぜ！'),



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
  array('ttl_l', 'mb0', '煎り大豆の作り方'),

  // （本文1）
  array('text', 'mb2', '香ばしく、カリっとした歯ごたえがくせになる煎り大豆。節分のときにまく豆として有名ですが、普段のおやつにも使えます。煎り大豆は、フライパンやオーブンなどで簡単に手作りすることが可能ですよ。自分で作れば、好みのかたさに仕上げられるので、ぜひ試してみてください。'),

  // （小見出し）
  array('ttl_m', 'mb1', '材料'),
  array('mtr-st'),
  array('mtr', '乾燥大豆', '1カップ'),
  array('mtr-end'),

  // （小見出し）
  array('ttl_m', 'mb0', '手順'),

  array('step', '01', 'mb3', '大豆は、一晩水に浸けておきます。<br>
一晩たったら大豆の水気を切り、キッチンペーパーの上で1時間ほど自然乾燥させます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', '急いで戻したい場合は熱湯を使う'),
  array('free', 'mb0', '「一晩浸ける時間がない！」というときは、熱湯を使えば当日中に大豆を戻すことができるぞ！乾燥大豆を熱湯で戻すときには、浸す時間が重要。戻し時間が短ければかために、長ければやわらかく仕上がるんだ。程よい歯ごたえを残すなら1時間程度、やわらかい仕上がりが好きなら2時間ぐらい浸そう！'),
  array('chk-end'),

  array('step', '02', 'mb3', 'フライパンに大豆を入れます。<a href="' . $base_url . '/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にかけて、揺すったり混ぜたりしながら煎りましょう。<br>パチパチしてきたら<a href="' . $base_url . '/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にして、15〜20分ほど混ぜながら煎ります。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'フライパンで調理するときは常に揺するor混ぜる！'),
  array('free', 'mb0', 'フライパン調理の場合は、焼き色を見ながら作れるから、煎り具合が分かりやすいという特徴がある！ただし、焦げやすいので注意が必要だ。フライパンを揺すったり、木べらで混ぜたりして、豆を転がしながら加熱するのが美味しく仕上げるコツだぞ！'),
  array('chk-end'),

  array('step', '03', 'mb3', '器に盛ってできあがり！'),

  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', '電子レンジ&オーブンで煎り大豆を作る方法'),
  array('text', 'mb2', '煎り大豆は電子レンジやオーブンでも作ることができます。それぞれ仕上がりが異なるので、お好みに合わせて作り方を変えてみてくださいね。'),
  array('ttl_s', 'mb0', '電子レンジで作る方法'),
  array('text', 'mb2', '大豆1カップを熱湯に1時間浸したら、耐熱皿に広げます。600Wに設定した電子レンジで4分を目安に加熱してください。いったん取り出して、全体を軽く揺すります。全体が混ざったら再び4分加熱しましょう。取り出してざっと混ぜたら4分加熱、を繰り返し、合計4回加熱したら完成です。電子レンジを使うと短い時間で水分が抜けるため、カリっとした食感に仕上がりますよ。'),
  array('ttl_s', 'mb0', 'オーブンで作る方法'),
  array('text', 'mb2', '電子レンジの場合と同様に、大豆1カップを熱湯に1時間浸します。天板にオーブンシートをひき、熱湯で戻した豆を重ならないように敷き詰めます。160度のオーブンで30分加熱すればできあがりです。より水分を飛ばしたい場合は、アルミホイルをかぶせて追加で10分加熱してください。オーブンで作る場合は焦げやすくなるので、パチンと弾ける音が聞こえたらすぐに取り出すようにしましょう。'),
  array('text', 'mb0', '短時間で作りたいなら電子レンジ、より香ばしい仕上がりにしたい場合はオーブンかフライパンで作るのがおすすめです。ぜひお試しください。'),
  array('plus-end'),

  // （大見出し1）
  array('ttl_l', 'mb0', '煎り大豆を使った人気アレンジレシピ'),

  // （本文2）
  array('text', 'mb2', 'カロリー控えめで、たんぱく質やイソフラボンなどの栄養素が詰まった煎り大豆。煎り大豆をアレンジすれば、ヘルシーで美味しいメニューが楽しめますよ。簡単にできるアレンジレシピをご紹介します！節分で使う煎り大豆が余った際には、ぜひお試しください。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'はちみつ大豆&きな粉大豆'),
  array('text', 'mb2', '煎り大豆をはちみつやきな粉でコーティングすれば、甘いお菓子に早変わり！'),
  array('ttl_s', 'mb0', 'はちみつ大豆の作り方'),
  array('textimg', '04', 'right', 'はちみつ大豆の作り方', 'mb2', 'フライパンに水とグラニュー糖、はちみつを入れて弱火にかけ、とろみが付くまで煮詰めます。そこに煎り大豆を加えて、大豆の色が褐色に変わるまで木べらで混ぜましょう。バターを加えて全体になじませたら、火を止めます。クッキングシートの上に広げて、熱いうちにグラニュー糖を振りかけ、そのまま冷ましたら完成です。'),
  array('ttl_s', 'mb0', 'きな粉大豆の作り方'),
  array('text', 'mb2', '水とグラニュー糖を弱火にかけて、煎り大豆を入れます。全体を混ぜて水分が少なくなったらきな粉を加えて、サラサラになるまで混ぜれば完成です。'),

  //（小見出し）
  array('ttl_m', 'mb1', '煎り大豆の炊き込みご飯'),
  array('textimg', '05', 'left', '煎り大豆の炊き込みご飯', 'mb2', '煎り大豆は、晩ごはんのメニューにもアレンジできます。炊飯器に<a href="' . $base_url . '/magazine/article/recipe-technic20.php" class="recipe-design__link">米</a>と<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#sake" class="recipe-design__link">酒</a>、<a href="' . $base_url . '/magazine/article/recipe-technic22.php#mirin" class="recipe-design__link">みりん</a>を入れ、水を加えます。煎り大豆とちりめんじゃこ、食べやすい大きさに切ったにんじんや油揚げを加えて、炊飯ボタンを押せば完成です。煎り大豆が香ばしく、じゃことも相性抜群ですよ。'),

  //（小見出し）
  array('ttl_m', 'mb1', '煎り大豆のチョコチップクッキー'),
  array('textimg', '06', 'right', '煎り大豆のチョコチップクッキー', 'mb0', '定番のチョコチップクッキーに煎り大豆を入れると、ポリっとした食感がアクセントに！ナッツのような感覚で食べられますよ。まずボウルにバターを入れて混ぜ、砂糖を加えてさらに混ぜます。そこに卵と、あらかじめ合わせてふるっておいた薄力粉とベーキングパウダーを加えて混ぜ込んでください。8割程度混ざったら、煎り大豆と刻んだ板チョコを加えて、粉っぽさがなくなるまで混ぜます。生地を等分してクッキーの形に成型し、オーブンで焼き上げたら完成です。'),


);
//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //ママ　通常
  array('mama', '01', 'やっぱり作りたての煎り大豆は香ばしくていいわね～'),

  //パパ　通常
  array('papa', '01', 'うん、歯ごたえもちょうどいい！'),

  //コウちゃん　喜ぶ
  array('ko', '03', 'おまめ、おいしい～'),

  //フラッキー　通常
  array('fl', '01', 'おいおい、そんなに食べたら節分に使う分がなくなるぞ！'),

  //ママ　通常
  array('mama', '01', '大丈夫よ！なくなったら、また作るから！'),

  //コウちゃん　喜ぶ
  array('ko', '03', 'おにはそと〜♪まめはうち〜♪'),
);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '15002', 'cooking_2208_1'),
  array('recommend-recipe-id', '15095', 'cooking_2208_2'),
  array('recommend-recipe-id', '15151', 'cooking_2208_3'),
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
