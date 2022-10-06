<?php
//base
include( "../../function.php" );
$content = get_id_data( '15160' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「保存容器の煮沸消毒方法」を動画とテキストで解説。瓶やプラスチック保存容器を清潔に保つための煮沸消毒から、電子レンジやアルコールでの消毒方法もご紹介します！';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '160';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'J4J12BKJH3s';

//導入文
$introTxt = '第160回は、「瓶の煮沸消毒の方法」をご紹介します。瓶やプラスチック保存容器などの煮沸消毒のやり方を分かりやすく動画で解説します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','いちごをたくさんいただいたから、いちごジャムを作ってみた！<br>ジャムの空き瓶があるから、それに保存しようっと'),

//フラッキー　通常
array ('fl','01','おいおい、そのままジャムを入れるのはよくないぞ！<br>瓶に保存するときは、煮沸消毒してからじゃないと<br>ジャムにカビが生えるぜ！'),

//ミエ　通常
array ('mama','01','えっ、そうなの？<br>フラッキー、煮沸消毒の方法を教えて～！'),

//フラッキー　通常
array ('fl','01','よし、教えてしんぜよう！'),

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
array ('ttl_l','mb0','瓶の煮沸消毒のやり方'),

// （本文1）
array ('text','mb2','市販のはちみつやジャムなどが入っていた瓶を、食品の保存容器として利用している人は多いと思います。使い回しが利く瓶ですが、食品を瓶に入れて保存する前に、しっかり消毒して殺菌する必要があります。瓶を消毒してから使用しないと、瓶や蓋に付着している菌が繁殖して、食品が腐食したり、カビが発生したりします。特にジャムや果実酒など長期間保存する食品の場合、容器を消毒しておかないとせっかく作った食品の傷みが早まってしまいます。'),
array ('text','mb2','消毒には「煮沸消毒」という方法があります。煮沸消毒とは、熱湯でぐつぐつ煮て、殺菌する消毒方法のことです。熱に弱い雑菌は、一定の時間煮沸することによって、殺菌することができます。'),
array ('text','mb2','ただし、耐熱性のないガラス容器やプラスチック、メラミン素材、ポリエステルやナイロンの布、漆や木製のもの、革製品など、熱に弱い素材は煮沸消毒には向きませんからご注意くださいね。<br>今回は、瓶とプラスチック保存容器の煮沸消毒の方法をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb3','瓶が入る大きさの鍋を用意します。<br>鍋底にふきんを敷きましょう。瓶は先に洗っておきます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','瓶がぶつからないように鍋底にふきんを敷く！'),
array ('free','mb0','鍋底にふきんを敷くのは、瓶を守るためなんだぜ！煮沸中に瓶が動いて、鍋に当たって瓶が割れることもある。それを防ぐために、最初に鍋底にふきんを敷いておくんだ。'),
array ('chk-end'),

array('step','02','mb3','瓶が完全に浸るくらいの水を入れて、沸騰させます。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','瓶は最初から鍋に入れよう！'),
array ('free','mb0','鍋に水を入れたら、瓶も一緒に入れよう！瓶は急激な温度変化に弱く、割れやすいから、水の状態から鍋に入れて、徐々に熱していくようにするんだぜ。'),
array ('chk-end'),

array('step','03','mb0','沸騰したら弱火にして、<strong>5分</strong>程度煮沸します。'),
array('step','04','mb3','箸またはトングで取り出します。やけどしないように注意して取り出しましょう。<br>逆さまにして自然乾燥させたら完了です。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2',' 熱湯消毒も手軽で便利！'),
array ('text','mb0','煮沸消毒のほかに熱湯を使って簡単に消毒する方法があります。熱湯消毒は、保存容器に沸騰したお湯をかけて消毒する方法です。<br>一般的に<strong>80度以上のお湯を10秒以上かける方法を熱湯消毒</strong>といい、<strong>80度以上のお湯で10分以上煮沸することを煮沸消毒</strong>といいます。<br>熱湯消毒は、煮沸消毒に比べると殺菌作用は緩やかですが、手軽にできる便利な消毒方法です。'),
array ('plus-end'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2',' 赤ちゃん用アイテムの煮沸消毒'),
array ('text','mb2','赤ちゃんは免疫力が備わっていないため、口にするものには配慮が必要です。特に口にする機会が多い哺乳瓶は、毎回煮沸消毒するようにしましょう。ミルクには栄養成分が多く、わずかでもミルクが哺乳瓶に残っていると雑菌が繁殖してしまいます。雑菌は洗っても簡単に除去できないため、哺乳瓶は煮沸消毒してから使うようにしてくださいね。'),
array ('text','mb2','なお、プラスチック製のおもちゃの場合は、煮沸消毒すると変形する可能性があるため、熱湯消毒を行ないます。布製のぬいぐるみなら、洗濯してきれいにしておきましょう。'),
array ('plus-end'),

// （大見出し2）
array ('ttl_l','mb0','プラスチック保存容器の消毒のやり方'),

// （本文2）
array ('text','mb2','食品を保存するために大活躍するプラスチック保存容器も消毒しておきたいアイテムです。プラスチック保存容器の消毒の方法をお伝えします。'),

// （小見出し）
array ('ttl_m','mb1','鍋で煮沸消毒する'),

array('step','05','mb3','プラスチック保存容器の耐熱温度を確認します。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','耐熱性でない容器はアルコールで消毒を！'),
array ('free','mb0','プラスチック保存容器の耐熱温度が100度以下だと、容器が変形してしまうから、煮沸消毒はできないぜ。耐熱性かどうかは、容器に貼ってあるラベルや容器に書いてある表示を見て確認しよう！<br>耐熱性でない場合は、アルコールで消毒するといい！ホワイトリカーのような30度前後のアルコールでも一定の効果はあるが、高濃度のアルコールを使うとより効果的だ！<br>アルコールをキッチンペーパーに染み込ませて瓶をくまなく拭くか、スプレータイプのアルコールを吹きかけて、キッチンペーパーで拭かずに乾くまで放置しよう！<br>アルコールが乾けば、消毒完了だぜ！'),
array ('chk-end'),

array('step','06','mb0','プラスチック保存容器が入る大きさの鍋にお湯を沸かします。'),
array('step','07','mb0','沸騰したらプラスチック保存容器を入れ、<strong>5分</strong>程度煮沸します。'),
array('step','08','mb3','箸、またはトングで取り出し、逆さまにして自然乾燥させたら完了です。'),

// （小見出し）
array ('ttl_m','mb0','電子レンジで消毒する'),

array('step','09','mb3','プラスチック保存容器に少量の水を入れて、蓋をします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','電子レンジが使用可能か忘れずに確認！'),
array ('free','mb0','最初に電子レンジを使用できるかどうかを確認してくれよな。本体は電子レンジ可能でも、蓋が電子レンジ使用不可の場合もある。蓋なしで消毒する場合は、プラスチック保存容器に軽くラップをかけて対応すれば大丈夫だぜ！'),
array ('chk-end'),

array('step','10','mb0','600Wに設定した電子レンジで<strong>1分半</strong>加熱します。'),
array('step','11','mb0','レンジから取り出してしばらく置き、容器が冷めたら水を捨てます。'),
array('step','12','mb3','逆さまにして自然乾燥させます。<br>消毒完了です。'),

//（大見出し3）
array ('ttl_l','mb1','保存容器に作り置きできる人気のレシピ'),

// （本文3）
array ('text','mb2','瓶やプラスチック保存容器に長期保存できる人気のレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','梅酒'),
array ('textimg','13','right','梅酒','mb2','2年もの、5年もの、ときには10年ものがあるほど、手作りの梅酒は長期保存が可能な飲料です。青梅を水洗いし、キッチンペーパーにのせて1個ずつ拭き、竹串で青梅のヘタを取り除きます。煮沸消毒した保存瓶に、青梅、氷砂糖を交互に入れ、最後にホワイトリカーを注ぎ、冷暗所に置きます。3ヵ月程度たてば飲めるようになります。また、ホワイトリカーを入れなければ、子どもも飲める梅ジュースになりますよ。'),

//（小見出し）
array ('ttl_m','mb1','いちごジャム'),
array ('textimg','14','left','いちごジャム','mb2','手作りのいちごジャムは、<a href="'.$base_url.'/magazine/article/recipe-technic142.php" class="recipe-design__link">果肉</a>がごろごろしていて格別な美味しさです。いちごはヘタを取り、縦半分に<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">カット</a>します。ボウルにいちご、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、レモン汁を入れて混ぜ、ラップをします。1時間程度常温で置いた後、鍋に入れて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で煮ます。焦げないようにときどき混ぜながら、煮汁が半量程度になるまで煮詰めます。冷めたら消毒した保存瓶に入れて密閉します。<a href="'.$base_url.'/magazine/article/recipe-technic132.php" class="recipe-design__link">トースト</a>やヨーグルトにトッピングして召し上がれ。'),

//（小見出し）
array ('ttl_m','mb1','レモンのはちみつ漬け'),
array ('textimg','15','right','レモンのはちみつ漬け','mb0','夏バテ防止や風邪の予防にもなる、ビタミンCがたっぷり含まれたレモンのはちみつ漬けのレシピです。レモンをよく洗い、薄い<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にします。保存容器にレモンを入れ、はちみつをかけます。レモンが浮かないようにたっぷりはちみつを注いだら、密封します。1日以上置いたら完成です。シロップを冷やした炭酸で割ると、真夏にぴったりの爽やかなドリンクになります。レモンのスライスはそのまま美味しくいただけますよ。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','瓶を十分煮沸消毒したから、これでジャムを保存できる～♪'),

//マサキ　通常
array ('papa','01','プラスチック保存容器も消毒しておいたよ！<br>雑菌が増えるこれからの梅雨の時期も安心だね'),

//フラッキー　通常
array ('fl','01','煮沸消毒は鍋だけでなく、フライパンでもできるんだぜ！<br>時々、保存容器を煮沸消毒して、食品が傷まないようにしっかりと保存してくれよな！'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15034'),
array ('recommend-recipe-id','15035'),
array ('recommend-recipe-id','15147'),
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
