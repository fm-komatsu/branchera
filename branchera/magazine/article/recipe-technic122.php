<?php
//base
include( "../../function.php" );
$content = get_id_data( '15122' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「もやしの正しいゆで時間とゆで方」を動画とテキストで解説。もやしをシャキッとおいしく仕上げるためのポイントをご紹介します。冷蔵、冷凍保存する際の注意点や、アレンジメニューも併せてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '122';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'slZGwMkCeKo';

//導入文
$introTxt = '第122回は、「もやしのゆで時間とゆで方」です。もやしは安価に手に入る、とても使いやすい野菜。そして低カロリーなことでも知られています。今回は、そんなもやしをさらに美味しく食べるために、正しいゆで方や保存する際のコツをご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//  コウちゃん　通常
array ('ko','01','まま～！<br>このもやし、ふにゃふにゃだよ〜'),

// ママ　通常
array ('mama','01','こうちゃん、ごめん〜！急いで作ったら失敗しちゃった…<br>もやしってゆで加減が難しくて、いつも水っぽくなるんだよね'),

// フラッキー　通常
array ('fl','01','そんなに落ち込むなよ！<br>もやしは正しいゆで時間とコツを知れば、誰でも上手にゆでられるんだ<br>さっそく、俺が教えてやるぜ！'),


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
array ('ttl_l','mb0','もやしのゆで時間とゆで方'),

// （本文1）
array ('text','mb2','もやしは味が淡白な分、食感が重要になる野菜です。ゆで加減ひとつで、美味しさに差が出ます。難しい下ごしらえをする必要はありませんが、ちょっとしたコツを押さえるだけで、シャキッとした美味しいもやしに仕上げることができますよ。さっそく、正しいゆで時間とゆで方を見ていきましょう。'),

// （小見出し）
array ('ttl_m','mb1','材料'),
array ('mtr-st'),
array ('mtr','もやし','1袋(約200g)'),
array ('mtr','塩','ひとつまみ'),
array ('mtr','酢','大さじ1/2'),
array ('mtr','水','2L'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb3','もやしのひげ根をとり、サッと水洗いしておきます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','もやしをシャキッとさせるなら軽く水洗い！'),
array ('free','mb0','袋詰めのもやしは水洗いされているから、急いでいるなら洗わずにゆでてもOKだ。ただし、よりシャキシャキした歯ごたえにしたいなら、軽く水洗いしておこう。水洗いすると食感がよくなるだけじゃなく、もやしの独特な臭みも抑えられるんだぜ！'),
array ('chk-end'),

array('step','02','mb0','鍋に湯を沸かして、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>と<a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>を入れます。'),
array('step','03','mb3','もやしを入れて1分ゆでてください。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ゆでるときに塩と酢を入れるのはどうして？'),
array ('free','mb0','もやしをゆでるときに酢と塩を入れるのは、もやしの独特な臭みを取るためなんだ。臭みがなくなることで、癖がなくなり調理しやすくなるぞ。さらに、酢はもやしをシャキッとした仕上がりにする働きもあるんだ！<br>
どちらも、必ず入れなきゃいけないわけではないけど、家にある場合は使うのをおすすめするぜ！'),
array ('chk-end'),

array('step','04','mb0','ゆで上がったら、もやしをざるにあげます。もやしは水気を切って、そのまま冷ましましょう。'),
array('step','05','mb3','完成！'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','水っぽくなるので冷水で冷まさないこと！'),
array ('free','mb0','もやしを冷ますときに冷水に入れてないか？冷水に入れると、ゆでたもやしが水っぽくなってしまうぞ。ざるに入れた状態で、そのまま冷ますようにしよう！'),
array ('chk-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','もやしを電子レンジでゆでる方法'),
array('text','mb0','時短したいときにおすすめなのが、電子レンジでもやしを加熱する方法です。<br>まず水洗いしたもやしを耐熱容器に入れて、ラップをかけます。<br>1パック分（約200g）のもやしなら、600Wに設定した電子レンジで約3分温めたら完成です。時間がないときは、ぜひ試してみてくださいね。'),
array ('plus-end'),

// （大見出し2）
array ('ttl_l','mb0','ゆでたもやしの保存方法'),

// （本文2）
array ('text','mb2','ゆでたもやしはあまり日持ちしないため、しっかりと水気を切るのが保存する際のポイントです。冷蔵で保存する場合と、冷凍で保存する場合の2通りの保存方法をご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','冷蔵で保存する場合'),
array ('text','mb2','もやしはゆで終わったら、しっかりざるを振って水気を切ります。冷めたら保存容器に入れて、冷蔵保存しましょう。<br>冷蔵保存したもやしの保存期間の目安は、<strong>約2〜3日</strong>です。'),

//（小見出し）
array ('ttl_m','mb1','冷凍で保存する場合'),
array ('text','mb3','ゆでたもやしは、冷凍するとシャキッとした食感が損なわれてしまいます。そのため、スープや<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>などの汁物に使うようにしましょう。<br>まずは冷蔵保存のときと同様、しっかりと水気を切ります。水気があると霜の原因になるので、気を付けましょう。<br>
続いて、ファスナー付き保存袋に入れ、空気を抜いた状態で冷蔵保存しましょう。<br>冷凍保存したもやしの保存期間の目安は、<strong>約2週間〜1ヵ月</strong>です。<br>解凍する際は、凍ったまま汁物に入れて、加熱調理してください。'),


// （大見出し3）
array ('ttl_l','mb0','ゆでたもやしの簡単人気レシピ'),

// （本文3）
array ('text','mb2','もやしを使ったメニューは、もう1品プラスしたいときにぴったり！簡単に作れる、ゆでたもやしを使った人気レシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','もやしのナムル'),
array ('textimg','06','right','もやしのナムル','mb2','白い<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>にも合う、もやしのナムルのレシピです。ゆでたもやしに塩を少々振り、冷まします。冷めたら、にんにくとごま油、塩、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>ともやしを混ぜ合わせます。お好みで粉唐辛子やごまを加えるのもおすすめです。粉唐辛子は、辛味がマイルドな韓国産のものを使いましょう。混ぜ終えたら、冷蔵庫で1〜2時間程度おき、味を染み込ませたらできあがり！'),

//（小見出し）
array ('ttl_m','mb1','もやしのサラダ'),
array ('textimg','07','left','もやしのサラダ','mb2','簡単！もやしの<a href="'.$base_url.'/magazine/article/recipe09.php" class="recipe-design__link">サラダ</a>のレシピです。ハムと<a href="'.$base_url.'/magazine/article/recipe-technic135.php" class="recipe-design__link">きゅうり</a>を<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にしたら、ゆでたもやしと塩こしょう、酢とオリーブオイルを混ぜるだけで完成！簡単に作れるのに、やみつきなる美味しさですよ。'),

//（小見出し）
array ('ttl_m','mb1','もやし炒め'),
array ('textimg','08','right','もやし炒め','mb0','もやし料理の定番のひとつ、もやし炒めも簡単に作れますよ！フライパンに油をひき、縦に細切りしたかまぼこと、ゆでたもやしをサッと炒めます。このときに豚肉を加えると、さらに豪華になりますよ。塩、こしょうを少々振り、お好みの味付けにしたら完成です。'),

);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ママ　通常
array ('mama','01','フラッキーのアドバイス通りにもやしをゆでてみたけど…<br>このもやしのサラダ、どうかしら？'),
  
//コウちゃん　喜ぶ
array ('ko','03','わあ、しゃきしゃき！！おいしい〜！'),

//パパ　通常
array ('papa','01','本当だ！今までのもやしサラダと食感が全然違うな！<br>やっぱり、もやしはこの歯ごたえがいいんだよな～<br>もやしの独特な臭いもしないし、すごく美味しいよ！'),

//ママ　通常
array ('mama','01','よかったわ〜<br>もやしってちょっとのコツですごく美味しくなるのね！'),

//フラッキー　通常
array ('fl','01','そうそう！たかがもやし、されどもやし…<br>ポイントを掴めば、ぐんと美味しくゆでられるんだ！'),

//パパ　通常
array ('papa','01','俺もママに負けてられないな<br>今度もやしたっぷりのラーメンを作ってみようっと！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15127'),
array ('recommend-recipe-id','15124'),
array ('recommend-recipe-id','15098'),
array ('recommend-recipe-end'),

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
