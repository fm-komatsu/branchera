<?php
//base
include( "../../function.php" );
$content = get_id_data( '15129' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「そら豆のゆで方」を動画とテキストで解説。そら豆の下ごしらえの方法と、そら豆の栄養を逃さず彩りよく仕上げる、ゆで方のコツをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '129';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'eccH5krXrKw';

//導入文
$introTxt = '第129回は、「そら豆のゆで方」です。そら豆の下ごしらえの方法と、そら豆の栄養を逃さず彩りよく仕上げる、ゆで方のコツをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//コウちゃん　通常
array ('ko','01','おまめ、おおきい～'),

//ママ　通常
array ('mama','01','大きいでしょー？そら豆っていうんだよ！このお豆はね、美味しくて栄養もたっぷりなの'),

//コウちゃん　通常
array ('ko','01','こうちゃん、たべた～い！'),

//ママ　困り顔
array ('mama','02','そうだ、豆ごはん作ってあげる！でも、ゆですぎちゃうことがあるんだよな～'),

//フラッキー　通常
array ('fl','01','俺が美味しくゆでるコツを教えてやるよ！'),

//ママ　通常
array ('mama','01','本当！？フラッキー！そのコツ教えてー！'),


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
array ('ttl_l','mb0','そら豆のゆで方'),

// （本文1）
array ('text','mb2','ゆでるだけで美味しいそら豆。大粒なので、料理に使っても味と見た目のアクセントになりますよ。<br>
そら豆はゆでる前に下ごしらえをして、塩の分量とゆで時間をしっかり守れば、誰でも簡単に美味しくゆでることができます。今回は、そら豆を美味しく仕上げるゆで方のコツをご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','そら豆（さや付き）','400〜500g'),
array ('mtr','塩','ゆでる水に対して2%程度の分量<br class="u-only__sp">（水4カップで大さじ1程度）'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb0','さやの太い筋を上から押して割ります。割れ目に爪を入れて、左右に開いて豆を取り出しましょう。'),
array('step','02','mb3','豆の黒い部分の反対側に、浅く切り込みを入れます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','豆に切り込みを入れると味が染みやすくなる！'),
array ('free','mb0','そら豆に切り込みを入れると、ゆでたとき塩味が染みやすくなるんだ。しかも、しわにならず、皮がむきやすくなるぞ。ひと手間で美味しく仕上がるから、面倒がらずにやっておくべし！'),
array ('chk-end'),

array('step','03','mb3','鍋やフライパンに湯を沸かして、塩を入れます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','臭いを取りたい場合は酒を入れよう！'),
array ('free','mb0','そら豆の独特な臭いが気になるなら、塩と一緒にお酒を1/2カップ（100ml）加えてゆでよう。そら豆の青臭さが消えて、より食べやすくなるぞ～！'),
array ('chk-end'),

array('step','04','mb3','豆を入れて3分程度ゆでましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','1つ食べてかたさを確認しよう！'),
array ('free','mb0','3分のゆで時間はあくまでも目安。好みの仕上がりは人それぞれだから、豆を1つ食べてかたさを確認するといいぞ！かためが好きなら早めにざるにあげて、やわらかくしたい場合はゆで具合に合わせてゆで時間を追加しよう！'),
array ('chk-end'),

array('step','05','mb0','好みのかたさにゆで上がったら、火を止めてざるにあげます。'),
array('step','06','mb3','粗熱が取れたら、薄皮をむいて完成です。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','電子レンジを使ったゆで方'),
array('text','mb0','忙しいときや少量だけ使いたいときは、電子レンジでもゆでられます。<br>
ゆで方は簡単です。まず下ごしらえしたそら豆を、水で軽く濡らしておきます。耐熱の容器に入れて、電子レンジで加熱しましょう。加熱時間は、600Wなら1分半～2分、500Wなら2分半～3分程度が目安です。ゆで上がったら、塩を振りかけて食べましょう。'),
array ('plus-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ゆでたそら豆の保存方法'),
array('text','mb0','ゆでたそら豆は、ファスナー付き保存袋に入れて冷凍するのがおすすめ。保存期間の目安は、約1ヵ月です。解凍するときは、冷蔵庫に半日入れておくか、電子レンジで加熱して解凍しましょう。加熱時間の目安は、100gで1分程度（600Wに設定した電子レンジの場合）です。すぐに解凍できるので、様子を見ながら時間を調整してください。'),
array ('plus-end'),


// （大見出し2）
array ('ttl_l','mb0','そら豆を使った人気のアレンジレシピ'),

// （本文2）
array ('text','mb2','ゆでたそら豆を使った、人気のアレンジレシピをご紹介しましょう。'),

//（小見出し）
array ('ttl_m','mb1','そら豆の豆ごはん'),
array ('textimg','07','right','そら豆の豆ごはん','mb2','そら豆の美味しさをそのまま味わえるシンプルな豆ごはんは、食卓に彩りを添えてくれます。<br>
まず、炊飯器に洗った米、水、酒、塩を入れて炊きます。炊き上がったら、ゆでて皮をむいたそら豆を加えて、全体をさっくりと混ぜましょう。器に盛って、ごまを振りかけたら完成です。'),

//（小見出し）
array ('ttl_m','mb1','そら豆のサラダ'),
array ('text','mb2','そら豆の緑が引き立つ、見た目も美しいサラダです。ゆでて薄皮をむいたそら豆と、スライスした玉ねぎ、レタス、食べやすい大きさに切ったロースハム、角切りにした<a href="'.$base_url.'/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>などをざっくりと混ぜ合わせます。お好みのドレッシングをかけたらできあがり！シーザードレッシングがおすすめです。'),

//（小見出し）
array ('ttl_m','mb1','そら豆の味噌汁'),
array ('text','mb0','<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>の具材に困ったら、そら豆を使う手もありますよ。<br>
まず、基本の手順で味噌汁を作ります。煮立つ直前で火を止めて、お椀に注いでから、ゆでて薄皮をむいたそら豆を加えて完成です。お好みで、ほかの野菜や車麩などを加えても美味しく仕上がりますよ。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ママ　通常
array ('mama','01','緑鮮やかにゆで上がって、すごく美味しそうにできた～！'),

//フラッキー　褒める
array ('fl','03','ちゃんと切り込みを入れたり、時間を測ったりして作ったから美味しく仕上がったんだ！よくやったぞ、ミエ！'),

//パパ　通常
array ('papa','01','このそら豆、かたさも塩味も絶妙で、ビールがすすんじゃうな～'),
  
//コウちゃん　通常
array ('ko','01','おまめごはん、おいしい～！'),

//ママ　通常
array ('mama','01','フラッキー、ありがとう！<br>
いろいろな料理に使えそうだから、たくさんゆでて冷凍しておこうっと♪'),


);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-cnt.php"); ?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php");
  ?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
