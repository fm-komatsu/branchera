<?php
//base
include("../../function.php");
$content = get_id_data('15132');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ホットサンドの作り方」を動画とテキストで解説。ホットサンドメーカーで作れる簡単な手順と、卵やチーズなどの人気具材を使った3つのレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '132';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = '1VBgYLqC3v4';

//導入文
$introTxt = '第132回は「ホットサンドのレシピ」です。ホットサンドメーカーを使って手軽に作れるホットサンドは、食べごたえがあり、子どもから大人まで大満足な人気メニュー。今回は、ホットサンドのレシピを具材別に3種類ご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //マサキ　笑顔
  array('papa', '01', '休日の朝はいいな～。よく眠れたせいか、お腹が空いたよ。久しぶりにホットサンドが食べたいな！'),

  //ミエ　困り顔
  array('mama', '02', 'そういえば、ホットサンドメーカー、ずいぶん前に使ったきり出してないなあ<br>いい具材の組み合わせが思いつかないんだよね〜'),

  //フラッキー　笑顔
  array('fl', '01', 'せっかくホットサンドメーカーがあるなら使わないと損だぜっ！<br>ホットサンドにぴったりな具材を、今から俺が紹介していくぞ！'),

  //ミエ　笑顔
  array('mama', '01', '待ってました、フラッキー！じゃあさっそく、お料理開始ね！'),

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
  array('ttl_l', 'mb0', 'ホットサンドの人気レシピ3選'),

  // （本文1）
  array('text', 'mb2', '具材とパンをこんがり焼き上げるホットサンド。パンに挟む具材には、加熱するとより美味しくなる食品を選ぶのがポイントです。たとえば、とろけるチーズやトマトは加熱でより美味しくなり、ホットサンドの具材に最適ですよ。<br>
今回は、ハム・チーズ・<a href="' . $base_url . '/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>、<a href="' . $base_url . '/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>・ベーコン・卵、キャベツ・ツナの3種類の具材の組み合わせをご紹介します。'),

  // （小見出し）
  array('ttl_m', 'mb1', 'ハム・チーズ・卵のホットサンド'),
  array('text', 'mb2', 'ハムと卵にチーズがとろりと絡む、ホットサンドの定番レシピです。ボリュームがあるので、空腹時にぴったりですよ。'),

  array('ttl_s', 'mb1', '材料（2人分）'),
  array('mtr-st'),
  array('mtr', '食パン（8枚切り）', '4枚'),
  array('mtr', 'マヨネーズ', '<a href="' . $base_url . '/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>4'),
  array('mtr', 'ロースハム', '4枚'),
  array('mtr', 'スライスチーズ', '2枚'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>', '2個'),
  array('mtr-end'),

  array('ttl_s', 'mb1', '手順'),
  array('step', '04', 'mb0', 'ホットサンドメーカーを予熱しておきます。'),
  array('step', '01', 'mb0', '2枚の食パンの片面にマヨネーズを塗り、ロースハムをのせます。'),
  array('step', '02', 'mb0', 'ロースハムの上に、スライスチーズとゆで卵をのせます。'),
  array('step', '03', 'mb0', 'マヨネーズの面を下にして、もう1枚の食パンを重ねます。<br>同様にもう1組サンドイッチを作ってください。'),
  array('step', '05', 'mb0', '予熱したホットサンドメーカーに、サンドイッチをセットします。'),
  array('step', '06', 'mb0', '3～4分焼きます。'),
  array('step', '07', 'mb0', 'ホットサンドメーカーの蓋を開いて、焼き加減を見ます。'),
  array('step', '08', 'mb3', 'パンがこんがり焼けていたらできあがり。<br>1組用のホットサンドメーカーを使用する場合は、同じ手順で2組目のサンドイッチを焼きましょう。'),


  // （小見出し）
  array('ttl_m', 'mb1', 'アボカド・トマト・ベーコンのホットサンド'),
  array('text', 'mb2', 'アボカドとトマトは、加熱すると甘みが増すのでホットサンドにぴったりな食品です。ベーコンの塩味がアクセントになります。'),

  array('ttl_s', 'mb1', '材料（2人分）'),
  array('mtr-st'),
  array('mtr', '食パン（8枚切り）', '4枚'),
  array('mtr', 'バター', '大さじ1'),
  array('mtr', '粒マスタード', '小さじ2'),
  array('mtr', 'アボカド', '1個'),
  array('mtr', 'ベーコン（薄切り）', '2枚'),
  array('mtr', 'カマンベールチーズ（切れているタイプ）', '2個（約30g)'),
  array('mtr', 'トマト（<a href="' . $base_url . '/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>）', '2枚'),
  array('mtr-end'),

  array('ttl_s', 'mb1', '手順'),
  array('step', '09', 'mb0', 'ホットサンドメーカーを予熱しておきます。'),
  array('step', '10', 'mb0', '食パン2枚の片面にバターを塗ります。'),
  array('step', '11', 'mb0', '残り2枚の食パンの片面に、粒マスタードを塗ります。'),
  array('step', '12', 'mb0', 'アボカドの皮と種を取り除き、薄切りにします。ベーコンとカマンベールチーズは2等分にしておきましょう。'),
  array('step', '13', 'mb3', 'バターを塗った食パンの上に、ベーコン、トマト、アボカドをのせます。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'ミニトマトもおすすめ！'),
  array('free', 'mb0', 'トマトの代わりにミニトマトを使うと、より甘くフルーティーな仕上がりになるぜ。同じトマトでも違った味わいが楽しめるから、ぜひ試してほしい！'),
  array('chk-end'),

  array('step', '14', 'mb0', '食パンの空いたスペースにカマンベールチーズを置きます。'),
  array('step', '15', 'mb0', 'マスタードを塗った食パンを重ねます。<br>同様にもう1組サンドイッチを作ってください。'),
  array('step', '16', 'mb0', '予熱したホットサンドメーカーに、サンドイッチをセットします。<br>3～4分焼きましょう。'),
  array('step', '17', 'mb0', 'ホットサンドメーカーの蓋を開いて、焼き加減を見ます。'),
  array('step', '18', 'mb3', 'パンがこんがり焼けていたらできあがり。<br>1組用のホットサンドメーカーを使用する場合は、同じ手順で2組目のサンドイッチを焼きましょう。'),


  // （小見出し）
  array('ttl_m', 'mb1', 'キャベツ・ツナのホットサンド'),
  array('text', 'mb2', 'マヨネーズと相性抜群なツナ。シンプルなツナマヨサンドも美味しいですが、キャベツを加えることで、甘みと歯ごたえがプラスされますよ。'),

  array('ttl_s', 'mb1', '材料（2人分）'),
  array('mtr-st'),
  array('mtr', '食パン（8枚切り）', '4枚'),
  array('mtr', 'バター', '大さじ2'),
  array('mtr', 'キャベツ（千切り）', '60g'),
  array('mtr', 'ツナ（缶詰）', '1缶(70g)'),
  array('mtr', 'マヨネーズ', '大さじ2'),
  array('mtr', '<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、粗びき黒こしょう', '各少々'),
  array('mtr-end'),

  array('ttl_s', 'mb1', '手順'),
  array('step', '19', 'mb0', 'ホットサンドメーカーを予熱しておきます。'),
  array('step', '20', 'mb0', '食パン4枚の片面にバターを塗ります。'),
  array('step', '21', 'mb3', 'ボウルに<a href="' . $base_url . '/magazine/article/recipe-technic18.php" class="recipe-design__link">千切りにしたキャベツ</a>、汁気を切ったツナ、マヨネーズを入れて混ぜ合わせます。塩、粗びき黒こしょうで味を調えましょう。'),

  // ■Check
  array('chk-st'),
  array('ttl4', 'mb2', 'キャベツの代わりに水菜を使うのもおすすめ！'),
  array('free', 'mb0', '野菜のシャキシャキ感が好きなら、キャベツの代わりに水菜を使うのもおすすめだぜ！<br>葉先までしっかりハリがある、新鮮なものを使うようにしよう！'),
  array('chk-end'),

  array('step', '22', 'mb0', 'バターを塗った食パンの上に、混ぜた具材をのせて広げます。'),
  array('step', '23', 'mb0', 'バターを塗った面を下にして、もう1枚の食パンを重ねます。<br>同様にもう1組サンドイッチを作ってください。'),
  array('step', '24', 'mb0', '予熱したホットサンドメーカーに、サンドイッチをセットします。'),
  array('step', '25', 'mb0', '3～4分焼きます。'),
  array('step', '26', 'mb0', 'ホットサンドメーカーの蓋を開いて、焼き加減を見ます。'),
  array('step', '27', 'mb3', 'パンがこんがり焼けていたらできあがり。<br>1人用のホットサンドメーカーを使用する場合は、同じ手順で2組目のサンドイッチを焼きましょう。'),


  // ■Plus1
  array('plus-st'),
  array('plus-ttl', 'mb0', 'ホットサンドメーカーなし！フライパンで作るには？'),
  array('text', 'mb0', 'ホットサンドメーカーがない方は、ホットサンドメーカーの代わりにフライパンを使ってホットサンドを作りましょう。<br>
まず、予熱したフライパンにバターを入れ、焦がさないように<a href="' . $base_url . '/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で加熱します。そこに具材を挟んだサンドイッチを置き、アルミホイルをかぶせて、上から重しをのせます。重しは鍋、皿のほか、フライ返しで押さえてもOKです。焼き色が付いたら、裏返して同じようにこんがり焼けば、完成です。'),
  array('plus-end'),

  // （大見出し2）
  array('ttl_l', 'mb1', '食材の残りをホットサンドにアレンジ！'),
  array('text', 'mb2', '多めに作って余ったおかずに、チーズやベーコンをトッピング！手軽にホットサンドにアレンジすることができますよ。いろいろな組み合わせを試して、お好みのホットサンドを作ってみてください。ここでは、ホットサンドと相性のよいおすすめの具材をご紹介します。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'マッシュポテト'),
  array('textimg', '28', 'right', 'マッシュポテト', 'mb2', '<a href="' . $base_url . '/magazine/article/recipe-technic120.php#potato-salad" class="recipe-design__link">ポテトサラダ</a>やコロッケを作ったときに余った<a href="' . $base_url . '/magazine/article/recipe-technic67.php" class="recipe-design__link">マッシュポテト</a>は、ホットサンドと相性抜群。チーズ、ベーコンと一緒に具材にしてみましょう。ホクホクしたポテトにとろりとしたチーズが絡み、濃厚な味わいを楽しめますよ。'),

  //（小見出し）
  array('ttl_m', 'mb1', 'ミートソース'),
  array('textimg', '29', 'left', 'ミートソース', 'mb0', 'パスタや<a href="' . $base_url . '/magazine/article/recipe03.php" class="recipe-design__link">グラタン</a>でおなじみの<a href="' . $base_url . '/magazine/article/recipe-technic64.php#meat-sauce" class="recipe-design__link">ミートソース</a>は、パンとの相性もぴったり。チーズや卵を加えてホットサンドにすると、食欲をそそる一品へと変身しますよ。ミートソースと同じくひき肉を使った、<a href="' . $base_url . '/magazine/article/recipe18.php" class="recipe-design__link">キーマカレー</a>もホットサンドの具材におすすめです。ぜひお試しください！'),


);
//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //マサキ　笑顔
  array('papa', '01', 'うん、うまい！外はカリカリ、中はとろ～り、美味しくてボリューム満点だ！'),

  //コウちゃん　笑顔
  array('ko', '03', 'ちーず、とろとろ～'),

  //ママ　笑顔
  array('mama', '01', '上手にできたわ♪'),

  //フラッキー　笑顔
  array('fl', '01', 'チーズにはちみつをかけてホットサンドにするのも美味しいぜ！あと、あんことバターも甘じょっぱさが癖になるうまさなんだ！'),

  //ママ　笑顔
  array('mama', '01', 'なるほど、具材の組み合わせ次第でおやつにもなるわけね！'),

  //フラッキー　笑顔
  array('fl', '01', 'それにホットサンドはキャンプでの食事にもおすすめだ！'),

  //マサキ　笑顔
  array('papa', '01', 'アウトドアで美味しい<a href="' . $base_url . '/magazine/article/recipe-technic128.php" class="recipe-design__link">コーヒー</a>とホットサンドかぁ、いい組み合わせだな♪<br>今度試してみようっと！'),


);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);
//関連記事
$recommendrecipe = array(
  array('recommend-recipe-st'),
  array('recommend-recipe-id', '14021'),
  array('recommend-recipe-id', '15067'),
  array('recommend-recipe-id', '14018'),
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
