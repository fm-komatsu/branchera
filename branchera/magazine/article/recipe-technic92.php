<?php
//base
include( "../../function.php" );
$content = get_id_data( '15092' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「切り干し大根の戻し方」を動画とテキストで解説。栄養価が高く、日持ちする切り干し大根。正しい戻し方や適切な水の量をご紹介します。より時短できる戻し方や、使い切れなかった切り干し大根の保存方法もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '92';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '88Koj85OHoA';

//導入文
$introTxt = '第92回は、「切り干し大根の正しい戻し方」です。保存性の高い乾物である切り干し大根。より美味しく仕上がる、切り干し大根の正しい戻し方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  // ミエ　通常
  array ('mama','01','「体にいい」と聞いて切り干し大根を買ってみたんだけど…実は初めて使うんだよね<br>とりあえず適当に水に浸しておけばいいかなー？'),

  // フラッキー　通常
  array ('fl','01','ストーップ！その水の量じゃ、少なすぎるぞ！<br>乾物は正しく戻さないと、美味しさが半減するぜ。それに、まずは汚れを落とさないと！'),

  // ミエ　困る
  array ('mama','02','なるほど…ただ水に浸けておけばいいってわけじゃないんだ！フラッキー、正しい手順を教えてくれる？'),

  // フラッキー　通常
  array ('fl','01','よしっ！俺に任せとけ～！')


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
  array('ttl_l','mb0','基本の切り干し大根の戻し方'),

//  （本文1）
  array('text','mb3','細切りにした大根を天日に干して、保存性を高めた切り干し大根。干すことで生の大根より栄養価が高くなっており、カルシウムや鉄、食物繊維が豊富な食材です。<br>料理に使うときには、正しい方法で戻すことがポイント。程よい歯ごたえと、濃縮されたうまみが楽しめますよ。<br>まずは、基本の切り干し大根の戻し方をご紹介します。'),

// （小見出し）
array('ttl_m','','材料（2人前）'),
array ('mtr-st'),
array ('mtr','切り干し大根','30g'),
array ('mtr','水(戻す用)','適量'),
array ('text','','<p class="u-text__align_r mt0">(切り干し大根のカサの約3倍)</p>'),
array('mtr-end'),

// （小見出し）
array('ttl_m','','手順'),
array('step','01','mb0','ボウルに切り干し大根と被るくらいの水を入れます。ほぐしながらもみ洗いして、汚れを落としましょう。'),
array('step','02','mb0','一旦ざるに上げて、手で水気を絞ります。'),
array('step','03','mb3','再び切り干し大根をボウルに入れます。ひたひたになるくらいの水を加えて、そのまま浸しておきます。'),



// ■Check
array('chk-st'),
array('ttl4','mb0','水量が大切！水の量は切り干し大根のカサの約3倍！'),
array('free','mb0','<p class="mb0">切り干し大根を戻すときにはたっぷりの水に浸そう！水量の目安は、切り干し大根のカサ(体積)の約3倍程度。このくらいの量の水で戻せば、ちょうどよい食感に仕上がるぜ！<br>水が少ないときちんと戻らず、<a href="'.$base_url.'/magazine/article/recipe-technic22.php" class="recipe-design__link">調味料</a>が染み込みにくくなったり、食感が悪くなったりするから気を付けてくれよ！</p>'),
array('chk-end'),

// ■Check
array('chk-st'),
array('ttl4','mb0','「被るくらい」と「ひたひたになるくらい」の違いって？'),
array('free','mb0','<p class="mb2">料理において、よく量の目安として使われる「被るくらい」と「ひたひたになるくらい」という言葉。同じように聞こえるけど、実はすこ〜し示す水量が違うんだ。それぞれ、具体的にどのくらいの水量なのか解説するぜ！</p>
<p class="mb2">まず「被るくらい」とは、鍋やボウルに入れた材料が、“全部隠れるくらいの水量”だ。<br>一方、「ひたひたになるくらい」とは、鍋やボウルに入れた材料が、“水面から少しだけ出るくらいの水量”。つまり、ギリギリ材料が隠れない程度＝<strong>「被るくらい」よりも少ない水量</strong>を指すぞ！</p>
<p class="mb0">この絶妙なニュアンスの違いを使い分けるのが、お料理マスターへの第一歩だぜ♪</p>'),
array('chk-end'),

array('step','04','mb0','20分程度経って、切り干し大根のカサ（体積）が4倍程度になったらざるに上げてください。'),
array('step','05','mb3','余分な水気を絞って、料理に合わせた長さに切ったら完成です。'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','時短できる！切り干し大根をより早く戻す方法'),
array('free','mb0','<p class="mb2">基本的には水で戻すのが好ましい切り干し大根ですが、どうしてもすぐに使いたい場合にはお湯で戻す方法もあります。<br>
よく洗って絞った切り干し大根に、50℃程度のお湯をかけて3～5分くらい浸しましょう。水で戻した場合よりも食感が残りますので、加熱調理に使うとよいですよ。</p>
<p>また、煮物にする場合は、戻さずに作ることも可能です。洗って絞った後、調味料の分量は変えずに、通常の1.5倍程度の水を入れて煮ましょう。</p>'),
array ('plus-end'),


// （大見出し2）
array('ttl_l','mb0','切り干し大根の保存方法'),

// （本文2）
array('text','mb3','「大量の切り干し大根を戻してしまい、使い切れなかった…」というときは、<a href="'.$base_url.'/magazine/article/recipe-technic33.php" class="recipe-design__link">冷凍保存</a>がおすすめです。通常、戻した切り干し大根は戻す前に比べて日持ちしませんが、冷凍することで長めに保存することができますよ。早速手順を見ていきましょう。'),

// （小見出し）
array('ttl_m','','冷凍保存の方法'),
array('free','mb0','<p class="mb2">水で戻した切り干し大根を冷凍保存する際は、よく絞って水気を切っておくことがポイントです。水気が残ったまま冷凍させてしまうと、解凍したときにべちゃとした食感になってしまいます。</p><p class="mb3">水気を切ったら、使いやすい量に分けてラップに包みましょう。さらに、ファスナー付き保存袋に入れて、空気を抜いて密閉してから冷凍してください。
保存期間の目安は、約1ヵ月です。</p>'),

// （小見出し）
array('ttl_m','','解凍の方法'),
array('text','mb3','冷凍保存した切り干し大根は、自然解凍で戻しましょう。使用する日の前日に、冷凍室から冷蔵室に移して解凍してください。<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>や煮物であれば、冷凍のまま使用できます。'),

// （大見出し3）
array('ttl_l','mb0','切り干し大根の人気レシピ'),

// （本文3）
array('text','mb3','定番の煮物から<a href="'.$base_url.'/magazine/article/recipe-technic145.php" class="recipe-design__link">サラダ</a>や<a href="'.$base_url.'/magazine/article/recipe-technic158.php" class="recipe-design__link">和え物</a>など、切り干し大根を使った人気のレシピをご紹介します。'),

// （小見出し）
array('ttl_m','','切り干し大根の煮物'),
array('textimg','06','right','切り干し大根の煮物','mb2','切り干し大根を使った定番料理といえば、やっぱり煮物。戻し汁を使うので、栄養価も高くなりますよ。<br>
まず、鍋にサラダ油を入れて熱します。戻して適当な長さにカットした切り干し大根、細切りにしたにんじん、油抜きして細切りにした油揚げを入れて炒めましょう。油が馴染んだら、切り干し大根の戻し汁を加えて2〜3分くらい煮ます。<br>
水分が少し減ったら、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#sake" class="recipe-design__link">酒</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin" class="recipe-design__link">みりん</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を入れて煮詰めましょう。煮汁がなくなる程度まで煮詰めたら、最後に<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>で味をととのえて完成です。'),

// （小見出し）
array('ttl_m','','切り干し大根とツナのヨーグルトサラダ'),
array('text','mb0','切り干し大根をヨーグルトの水分で戻したヨーグルトサラダ。戻し汁もそのまま使うので、栄養価の高い一品です。容器に洗った切り干し大根と無糖のヨーグルトを入れて、よく混ぜ合わせましょう。容器の蓋を閉じて、冷蔵庫に半日置けば切り干し大根を戻せます。<br>
戻した切り干し大根に、塩もみした<a href="'.$base_url.'/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>の<a href="'.$base_url.'/magazine/article/recipe-technic135.php" class="recipe-design__link">きゅうり</a>、スライスした玉ねぎ、ツナを加えて混ぜ合わせてください。塩と黒こしょうで味をととのえたら、ヨーグルトサラダのできあがりです。'),

);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
// マサキ　通常
array ('papa','01','この切り干し大根の煮物、歯ごたえもちょうどいいし、しっかり味が染みているね〜！'),

// ミエ　通常
array ('mama','01','初めて作ったとは思えない仕上がりでしょ？ '),

// コウちゃん　喜ぶ
array ('ko','03','きりぼし〜きりぼし〜♪'),

// フラッキー　通常
array ('fl','01','ちなみに、煮物にした切り干し大根も冷凍保存できるんだぜ！<br>
よく水気を絞って、小分けにして冷凍庫に入れれば、2週間程度は持つぞ〜。解凍するときは、前日に冷蔵庫に入れればOKだ！'),

// ミエ　通常
array ('mama','01','それは便利だね！多めに作って、常備菜にしよーっと！'),
);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','13008'),
array ('recommend-recipe-id','14002'),
array ('recommend-recipe-id','15058'),
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
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
