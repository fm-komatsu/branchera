<?php
//base
include( "../../function.php" );
$content = get_id_data( '15097' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ゴーヤの下ごしらえの方法」を動画とテキストで解説。ゴーヤ特有の苦味を食べやすい程度に和らげるコツや、味付けのコツ、正しい保存方法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '97';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'eZszn7IsxAs';

//導入文
$introTxt = '第97回は、「ゴーヤの下ごしらえの方法」です。夏が旬のゴーヤは、独特の苦味が特徴の野菜です。ちょうどよい苦味に抑えつつ、美味しく仕上げるゴーヤの下ごしらえの方法をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // パパ　通常
  array ('papa','01','おっ、ゴーヤだ！ずいぶんたくさんあるね。どうしたの？'),

  // ママ　通常
  array ('mama','01','沖縄出身の同僚からいただいたの！ご実家からたくさん送ってもらったんだって〜<br>ゴーヤチャンプルーを作ってみたいんだけど、どうやって下ごしらえすればいいんだろう…？'),

  // パパ　困る
  array ('papa','02','うーん、実は僕も自分で買ったことはないんだよね。適当にやって苦〜くなったらいやだしなあ…'),

  // フラッキー　通常
  array ('fl','01','これは俺の出番だな！ゴーヤは、正しく下ごしらえすることでより美味しく食べられるぜ！適度な苦味がゴーヤのポイントだけど、ひと手間加えれば和らげることもできるぞ！'),

  // ママ　通常
  array ('mama','01','さすがフラッキー！さっそくゴーヤの下ごしらえの方法を教えて〜！'),

  // フラッキー　通常
  array ('fl','01','ガッテン承知！'),


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
array('ttl_l','mb0','ゴーヤの下ごしらえの方法'),

//  （本文1）
array('text','mb3','ゴーヤの苦味は大事な個性でもありますが、あまりに強すぎると食べづらいことも。正しく下ごしらえすることで、程よい苦味を生かしながら、マイルドに仕上げることができますよ。手順をご紹介します。'),

// （小見出し）
array('ttl_m','','材料'),
array ('mtr-st'),
array ( 'mtr','ゴーヤ','1本'),
array ( 'mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','ゴーヤは軽く洗っておきます。次に、両端を少し切り落とし、縦半分に切ってください。'),
array('step','02','mb0','スプーンを使って、ゴーヤの中の白いワタを削ぎ取りましょう。'),
array('step','03','mb0','ゴーヤを切っていきます。切り方は料理によりますが、サラダや和え物、おひたしなどにするときは2㎜～3㎜、炒め物にするときは5㎜程度の厚みになるように、端から薄切りにしてください。'),
array('step','04','mb3','塩もみをします。ボウルに薄切りにしたゴーヤと塩を入れて、よくもんでください。そのまま10分程度置いて、最後に水気を切りましょう。炒め物に使う場合は、これで下ごしらえは完了です。'),

// ■Check
array('chk-st'),
array('ttl4','mb0','ゴーヤは水にさらさなくても大丈夫！'),
array('free','mb0','<p class="mb2">塩でもむだけで、ゴーヤの苦味は適度に落ちるのさ。ただ、「もっと苦味を和らげたい！」という場合は、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#sato" class="recipe-design__link">砂糖</a>も使ってゴーヤをもむといいぜ！<br>その場合、ゴーヤ1本に対して、塩小さじ1/2、砂糖小さじ2でやってみよう。もんだら10分置いて、水気を切ったら完了だ。出てきた水分には苦味が溶け込んでいるから、使わずに捨ててくれよ！</p>
<p class="mb0">塩だけでもむ場合も、塩と砂糖でもむ場合も、料理の味付けに塩と砂糖を使うなら、もんだ後洗い流さなくてOK。下味になるから、そのまま調理しよう！<br>「砂糖を入れてもんだけど、甘くなったら困る…」という場合は、サッと水洗いしてから調理すれば大丈夫だぜ！'),
array('chk-end'),

array('step','05','mb0','さらに苦味を和らげたい場合や、<a href="'.$base_url.'/magazine/article/recipe-technic144.php" class="recipe-design__link">サラダ</a>や<a href="'.$base_url.'/magazine/article/recipe-technic158.php" class="recipe-design__link">和え物</a>、佃煮に使う場合は下ゆでします。<br>鍋に湯を沸かして、塩もみしたゴーヤを入れます。'),
array('step','06','mb0','10秒程度サッと湯に通したら、ざるにあげます。ゆですぎると歯ごたえが弱くなってしまうので注意しましょう。'),
array('step','07','mb3','粗熱が取れたらギュッと絞って、下ごしらえ完了です。'),

// ■Plus1
array('plus-st'),
array('plus-ttl','mb0','苦味をより和らげる調理&amp;味付けのコツ'),
array('text','mb0','いうときは、下ごしらえに加えて、調理や味付けを工夫することでも苦味を和らげることができます。<br>特におすすめなのが、「塩もみをしてから油で炒める」調理方法です。油がゴーヤをコーティングしてくれるので、苦味がより和らぎます。<br>そして、味噌＋<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin" class="recipe-design__link">みりん</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>＋みりんなどの甘辛味や、豆板醤を使ったピリ辛味など、はっきりした味付けにするとよいでしょう。また、<a href="'.$base_url.'/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>や油揚げなどの具材を入れるのも効果的です。'),
array ('plus-end'),

// （大見出し2）
array('ttl_l','mb0','ゴーヤの保存方法'),

// （本文2）
array('text','mb3','ゴーヤは水気と乾燥に弱い野菜です。すぐに食べるなら常温でも保存できますが、そのまま放置すると黄色く変色したり、味が落ちたりしてしまいます。美味しさを保つ保存方法をご紹介しましょう。'),

// （小見出し）
array('ttl_m','','冷蔵保存の方法'),
array('text','mb2','基本的に、夏場は冷蔵保存しましょう。まずゴーヤを縦半分に切り、ワタをスプーンですくい取ります。ワタや種は傷みやすいので、取り除くことで長持ちしやすくなります。<br>キッチンペーパーで水分を拭いたら、ラップに包んで冷蔵庫の野菜室に入れます。立てた状態で保存しましょう。立てて置くのは、栽培しているときと同じ状態にすることで、持ちがよくなるといわれているからです。<br>保存期間の目安は、約1週間です。'),

// （小見出し）
array('ttl_m','','冷凍保存の方法'),
array('text','mb2','長期間保存したい場合は、冷凍保存がおすすめです。まずゴーヤを縦半分に切り、ワタをスプーンですくい取ります。使いやすい大きさに切ったら、ファスナー付き保存袋に入れて冷凍します。できるだけ重ならないように、薄く広げて入れるのがポイントです。使うときに取り出しやすくなります。食べる際は、凍ったまま加熱調理してください。<br>保存期間の目安は、約2週間です。'),
array('text','mb3','加熱調理ではなく、和え物などに使いたい場合は下ゆでしてから冷凍しましょう。<br>下ごしらえの方法と同じ手順で下ゆでをしたら、キッチンペーパーでしっかり水気を拭き取ります。重ならないようにファスナー付き保存袋に入れて、冷凍保存しましょう。<br>食べる際は、凍ったまま加熱調理するか、流水に1〜2分当てて解凍して使用してください。
<br>保存期間の目安は、約2週間です。'),

// （大見出し3）
array('ttl_l','mb0','ゴーヤを使った人気レシピ'),

// （本文2）
array('text','mb3','ゴーヤの程よい苦味は、料理のアクセントになります。卵や<a href="'.$base_url.'/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a>など、コクのある食材との相性が抜群です。また、ゴーヤは食欲を増進する働きが期待できるので、暑くて食欲が湧かないときにもおすすめ。ここでは、そんなゴーヤを使った人気レシピをご紹介します。ぜひお試しください！'),

// （小見出し）
array('ttl_m','','ゴーヤチャンプルー'),
array('textimg','08','left','卵と豆腐のやさしい甘味と、ゴーヤの苦味がぴったりな夏の定番料理です。まず、下ごしらえをしたゴーヤ、水切りをして一口大にちぎった木綿豆腐、食べやすい大きさに切った豚肉を用意します。卵は、ボウルに割りほぐしておきましょう。<br>フライパンにサラダ油を熱し、卵を流し入れます。混ぜながら半熟に炒めたら、一度皿やバットに移してください。次に同じフライパンでゴーヤ、木綿豆腐、豚肉を炒めたら、卵を戻して全体を混ぜ合わせましょう。塩、砂糖、醤油で味付けをしたら皿に盛りつけます。仕上げにかつお節を振りかけたらできあがり！'),

// （小見出し）
array('ttl_m','','ゴーヤの佃煮'),
array('textimg','09','right','ゴーヤの佃煮','mb2','暑い日にも食べやすい、さっぱりとした一品です。<br>まず下ごしらえしたゴーヤ、砂糖、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>、醤油を小鍋に入れ、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にかけます。汁がなくなるまで煮詰めたら、かつお節、<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">白ごま</a>を加えて混ぜ合わせて、できあがりです。'),

// （小見出し）
array('ttl_m','','ゴーヤカレー'),
array('textimg','10','left','ゴーヤカレー','mb0','ゴーヤと一緒にトマト、なすなどの夏野菜を入れたカレーです。<br>食べやすい大きさに切った玉ねぎ、なす、にんじん、じゃがいも、豚肉と、下ごしらえしたゴーヤを用意します。鍋にサラダ油を入れて中火で熱し、食材を入れて炒めます。玉ねぎがしんなりしてきたら、ホールトマトとローリエを加えて煮込みましょう。全ての食材に火が通ったら、カレールウを加えてできあがりです。<br><a href="'.$base_url.'/magazine/article/recipe18.php" class="recipe-design__link">簡単キーマカレー</a>に入れても美味しいですよ。'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// ママ　通常
array ('mama','01','下ごしらえしたゴーヤで、ゴーヤチャンプルーを作ってみたの！どう？'),

// パパ　通常
array ('papa','01','うん、美味しい！ゴーヤの歯ごたえとちょうどよい苦味が、ふわふわの卵によく合うな〜'),

// フラッキー　　褒める
array ('fl','03','いい出来だぜ！さすが、俺様が教えただけあるな！<br>ちなみに、豚肉をランチョンミートにして作ると、より本場の味に近付くぞ！<br>塩気が強くなるから、塩もみしたゴーヤを使う場合は味付けのときに調整しよう。もちろん苦味が気にならなければ、塩もみせずに炒めてもOKだぜ！'),

// ママ　通常
array ('mama','01','本場の味も食べてみたーい！よし、次はランチョンミートを使ってみようっと！<br>コウちゃんはゴーヤどう？苦くない？'),

// コウちゃん　通常
array ('ko','01','ちょっとにが〜い！でもおいしい〜'),

// フラッキー　　褒める
array ('fl','03','コウちゃん、いいぞ！トライすることが大事なんだ。人生は甘いだけじゃないからな…！'),

// ママ　通常
array ('mama','01','なんだかフラッキー、哀愁漂っているけど…？<br>とにかく、初めてのゴーヤチャンプルーが“苦い思い出”にならなくてよかったわ！'),
);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','14008'),
array ('recommend-recipe-id','15158'),
array ('recommend-recipe-id','15145'),
array ('recommend-recipe-end'),

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
