<?php
//base
include( "../../function.php" );
$content = get_id_data( '15164' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「煮しめの作り方」を動画とテキスト解説。煮しめの作り方や、残り物の煮しめを使ったアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '164';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'jTDuMrwWd7Y';

//導入文
$introTxt = '第164回は、「煮しめのレシピ」です。おせち料理にも登場する煮しめの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','お隣さんから、里芋をたくさんいただいちゃった<br>何を作ろうかな～'),

//マサキ　通常
array ('papa','01','お煮しめなんてどう？'),

//ミエ　困る
array ('mama','02','お煮しめって、素材別に味付けるんでしょ？<br>時間がかかりそうだし、上手にできる自信がないなぁ'),

//フラッキー　通常
array ('fl','01','ミエ、簡単に美味しく作れるレシピがあるぞ！'),

//ミエ　通常
array ('mama','01','そうなの？<br>フラッキー！お願い、教えて～！'),

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
array ('ttl_l','mb0','「煮しめ」のいわれとは？'),

// （本文1）
array ('text','mb2','旬の食材をたっぷり使った煮しめは、おせち料理にも登場する和食の定番料理。人気の高い料理ですが、なぜ「煮しめ」というのでしょうか？レシピをご紹介する前に、そのいわれについてご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','煮しめの意味'),
array ('text','mb2','「煮しめ」の名前の由来は、調理法の一種「煮しめる」から来ています。煮しめるとは、時間をかけて、煮汁がなくなるまでじっくりと煮ることを意味します。<br>煮しめは、お正月や節句などの祝い事にも出されることが多い、縁起のよい料理です。'),
array ('text','mb2','おせち料理の定番でもある煮しめは、重箱の三段目（参の重）に入れます。里芋やしいたけ、こんにゃくなど多くの食材を一緒にすることから、煮しめには「家族皆で仲よく、末永く繁栄しますように」という願いが込められています。'),
array ('text','mb2','また、使用する食材にも、それぞれ縁起をかついだ意味があります。'),
array ('text','mb2','・里芋…親いもの下に小いも、その下に孫いもが付くことから、子宝に恵まれた「子孫繁栄」の願いが込められています。'),
array ('text','mb2','・ごぼう…地中深くまで根を張り、力強く成長することから、「家業の土台が安定し、安泰に暮らせますように」という願いが込められています。'),
array ('text','mb2','・れんこん…丸い穴が空いていて向こう側が見えることから、「将来の見通しがよくなりますように」という願いが込められています。'),
array ('text','mb2','・しいたけ…長寿の象徴である亀の甲羅に見立てて切り抜くこともあり、「長生きできますように」という願いが込められています。'),
array ('text','mb2','・にんじん…梅の花の型にくり抜いたにんじんは「ねじり梅」と呼ばれ、「暮らしが豊かになりますように」という願いが込められています。'),
array ('text','mb2','・こんにゃく…真ん中をねじったこんにゃくは、手綱（たづな） に似ていることから「手綱こんにゃく」と呼ばれます。結び目の形から、縁を結ぶと考えられ「良縁成就・夫婦円満でありますように」という願いが込められています。'),

//（小見出し）
array ('ttl_m','mb1','筑前煮との違い'),
array ('text','mb2','煮しめに似ており、「同じもの？」と思われがちな筑前煮。筑前煮は、煮る前に食材を炒めて作りますが、煮しめは炒めずに煮しめていきます。また、筑前煮には鶏肉が使われますが、煮しめは鶏肉を必ず使用するわけではありません。'),

//（大見出し2）
array ('ttl_l','mb1','煮しめの作り方'),

// （本文2）
array ('text','mb2','プロの料理人が本格的に作る煮しめは、素材ごとに別々の鍋で味付けをし、煮しめてから最後に盛り合わせます。しかし、煮しめは1つの鍋で作ることもできます。ここからは家庭で簡単に美味しく作る方法をご紹介します。'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('mtr','干ししいたけ','4枚'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic66.php" class="recipe-design__link">里芋</a>（小）','8個'),
array ('mtr','ごぼう','小1本'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic109.php" class="recipe-design__link">れんこん</a>','1節（150g）'),
array ('mtr','たけのこ（水煮）','1/2個（60g）'),
array ('mtr','にんじん','1/2本'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic78.php" class="recipe-design__link">こんにゃく</a><br class="u-only__sp">（アク抜き済のもの）','1/2枚（130g）'),
array ('mtr','きぬさや','12枚'),
array ('mtr-end'),
array ('ttl5','mb0','〈A〉'),
array ('mtr-st'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>3'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin2" class="recipe-design__link">みりん</a>','大さじ2'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>','大さじ2'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>','小さじ1/4'),
array ('mtr','だし','300ml'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb2','干ししいたけはひたひたの水（100ml）に入れてやわらかくなるまで戻し、軸を切り落とします。戻し汁（100ml）は取っておきます。'),
array('step','02','mb2','里芋は皮をむき、ボウルに塩（分量外）大さじ1程度とともに入れ、よくもみ込んでぬめりを取り、流水で洗います。'),
array('step','03','mb3','ごぼうは皮をたわしでこすってよく洗い、5mm幅で斜めに切ります。水にさらして、水気を切ります。'),

// ■Check
// array ('chk-st'),
// array ('ttl4','mb2','短時間でごぼうのアク抜きを！'),
// array ('free','mb2','ごぼうはアクが強い。だから、切った後、さっと水にさらしてアク抜きをするのが一般的だ。長時間水にさらすと、水が茶色になってしまう。それは、ポリフェノールが流れ出た証拠。栄養を無駄にしないためにも、水にさらす時間は短くしよう！'),
// array ('free','mb0','ちなみに、ごぼうを白く仕上げたいメニューのときは、変色を防ぐ酢水を使うのがおすすめだ。ごぼうのアク抜きをするとき、水にさらす場合は5分以内、酢水にさらす場合は1~2分がベストだぜ！'),
// array ('chk-end'),

array('step','04','mb2','れんこんは1cm幅に切って花形にします。<br>水にさらして、水気を切ります。'),
array('step','05','mb2','たけのこはさっと洗い、根元は1cm幅の半月切り、穂先は扇形に切ります。'),
array('step','06','mb2','にんじんは1.5cm幅に切って花形に抜き、<a href="'.$base_url.'/magazine/article/recipe-technic113.php#nejiriume" class="recipe-design__link">ねじり梅</a>にします。'),
array('step','07','mb2','こんにゃくはさっと洗って5mm幅に切り、中央に2cmほどの切り込みを入れて、一方をくぐらせ、手綱（たづな）の形にします。'),
array('step','08','mb2','きぬさやは筋を取ります。そして、沸かしたお湯に塩（分量外）を加え、きぬさやを入れ、さっとゆでます。'),
array('step','09','mb2','鍋にきぬさや以外の具を入れ、〈A〉と1で取り置いたしいたけの戻し汁を加えて<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。煮立ったら落とし蓋をして<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で約30分煮つめます。'),
array('step','10','mb3','野菜に火が通ったら火を止め、そのまま冷まします。'),
array('step','11','mb3','器に彩りよく盛り付け、きぬさやを飾ったら、完成です。'),

//（大見出し3）
array ('ttl_l','mb1','煮しめの保存方法'),

// （本文3）
array ('text','mb2','お正月や祝い事、また普段の食卓に出される煮しめはどのくらい日持ちするのでしょうか？量をたくさん作ることが多い煮しめの保存方法についてご紹介します。'),

// ■PLUS1
// array ('plus-st'),
// array ('plus-ttl','mb2',' きんぴらごぼうの保存方法'),
// array ('text','mb2','きんぴらごぼうは、作り置きできる便利な<a href="'.$base_url.'/magazine/article/recipe-collect08.php" class="recipe-design__link">常備菜</a>です。冷蔵庫での保存期間の目安は約3日～5日です。また、冷凍庫での保存期間の目安は、密閉した状態で約1ヵ月です。'),
// array ('text','mb2','ラップに小分けし、ファスナー付き保存袋に入れて冷凍しましょう。お弁当で使うときに便利ですよ。解凍する際は、冷蔵庫に移して自然解凍するか、レンジで加熱して解凍します。'),
// array ('text','mb0','ただし、こんにゃくが入っているきんぴらごぼうの場合は、こんにゃくの水分が抜けてしまうため冷凍保存ができません。もし、冷凍保存を考えてきんぴらごぼうを作る場合は、こんにゃくを入れないようにしましょう。'),
// array ('plus-end'),

//（小見出し）
// array ('ttl_m','mb1','きんぴらごぼうのサラダ'),
// array ('textimg','10','right','きんぴらごぼうのサラダ','mb2','余ったきんぴらごぼうはサラダにアレンジできます。きんぴらごぼうにマヨネーズと<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">すりごま</a>を入れて、混ぜればできあがりです。<a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>やレモン汁を加えても美味しくなりますよ。'),

//（小見出し）
// array ('ttl_m','mb1','きんぴらごぼうの炊き込みご飯'),
// array ('textimg','11','left','きんぴらごぼうの炊き込みご飯','mb2','きんぴらごぼうで作る炊き込みご飯です。研いだお米を炊飯器に入れ、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin" class="recipe-design__link">みりん</a>、和風だしを加えてから、分量の線まで水を入れます。細かく切った<a href="'.$base_url.'/magazine/article/recipe04.php" class="recipe-design__link">鶏のもも肉</a>、細切りにしたにんじんと油揚げ、ほぐした<a href="'.$base_url.'/magazine/article/recipe-technic27.php#shimeji" class="recipe-design__link">しめじ</a>、きんぴらごぼうを入れて、ご飯を炊きます。炊き上がったら完成です。'),

//（小見出し）
// array ('ttl_m','mb1','五目きんぴら'),
// array ('textimg','12','right','五目きんぴら','mb2','具だくさんの五目きんぴらは、一度に多くの食品が摂れる栄養豊富な一品です。<br>ごぼうは千切りに、れんこんは薄切りにして水にさらし、水気を切ります。フライパンにごま油を入れ、豚肉、ごぼうをよく炒めます。れんこん、<a href="'.$base_url.'/magazine/article/recipe-technic13.php#sengiri" class="recipe-design__link">にんじんの千切り</a>、こんにゃく、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加えて炒めます。醤油、酒、みりん（めんつゆでも可）を加えて、汁気がなくなったらできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','常温・冷蔵保存'),
array ('text','mb2','煮しめの保存期間は、冷蔵庫で<strong>約5日</strong>が目安です。常温の保存は、食材が傷むためおすすめしません。なお、おせち料理の場合、煮しめを作る日は、保存期間から考えて<strong>12月31日</strong>がベストでしょう。余裕を持たせたい場合は、前日の12月30日に作ることをおすすめします。'),

//（小見出し）
array ('ttl_m','mb1','冷凍保存は不向き'),
array ('text','mb2','煮しめは水分を多く含むため、冷凍すると風味や食感が変わってしまいます。冷凍保存には向きませんが、どうしても冷凍したいときには、まだ鍋に煮汁がたくさんある料理の途中で火を止めて、ファスナー付き保存袋に入れて冷凍するとよいでしょう。'),
array ('text','mb2','具材が煮汁に浸かっている状態で冷凍した場合の保存期間は、<strong>約1ヵ月</strong>が目安です。使うときは、自然解凍し、鍋に移して煮しめていきます。ただし、たけのことこんにゃくは冷凍に向かないため、煮しめるときに入れるようにします。'),

//（大見出し4）
array ('ttl_l','mb1','煮しめのアレンジレシピ'),

// （本文4）
array ('text','mb2','残ってしまった煮しめは、アレンジ次第でいろいろな料理にリメイクできます。人気の高い煮しめのアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','煮しめの和風カレー'),
array ('textimg','12','right','煮しめの和風カレー','mb2','煮しめを使うと、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし</a>の香りが漂う優しい和風カレーになります。煮しめを鍋に入れ、カレーのレシピに書かれている分量のだし汁を加えて、温めます。一旦火を止めて、カレールウを加えます。めんつゆや顆粒のだしで味を整えたら、できあがりです。'),

//（小見出し）
array ('ttl_m','mb1','煮しめの炊き込みごはん'),
array ('textimg','13','left','煮しめの炊き込みごはん','mb2','煮しめを使えば、炊き込みごはんが簡単に作れます。<br>お米を洗い、ざるにあげ、煮しめと鶏肉を小さく刻みます。炊飯器に<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">お米</a>を入れ、普通に炊くときの水量線まで、水、酒、みりん、醤油を加えます。刻んだ煮しめと鶏肉を入れて、炊き上げます。約10分蒸らしたら、完成です。'),

//（小見出し）
array ('ttl_m','mb1','煮しめの親子丼'),
array ('text','mb2','煮しめにはだしがたっぷり染み込んでいるので、調味料をほとんど使わず、短時間で親子丼ができます。'),
array ('textimg','14','right','煮しめの親子丼','mb2','煮しめに水を加えて醤油や塩で味をととのえ、ひと煮立ちさせます。具材が温まったら、溶き卵を回しかけ、蓋をして約15秒～20秒、火を通します。丼によそったごはんに乗せたら、できあがりです。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','お煮しめが上手にできました！どうぞ召し上がれ♪'),

//コウちゃん　喜ぶ
array ('ko','03','わ～、おいも、ほくほく～♪'),

//マサキ　通常
array ('papa','01','味がしっかり染みてて、美味しいね！<br>れんこんはシャキシャキ、ごぼうも香ばしいな～♪'),

//フラッキー　通常
array ('fl','01','もっと簡単に作るには、めんつゆを利用するといい！<br>里芋の皮をむくのがめんどうなら水煮を使えばいいし、冷凍野菜を使う手もあるぜ！'),

//ミエ　通常
array ('mama','01','お煮しめはヘルシーだし、こんなに美味しくできるなら、いつでも作っちゃおう！'),

// 用語解説
// array ('ttl_m','mb1','
//       <div class="recipe__assist">
// 				<div class="recipe-assist-technic">
// 					<div class="recipe-assist-technic__row">
//             <h3 class="recipe-assist-technic__ttl">用語解説</h3>
// 						<dl class="recipe-assist-technic__term">
// 							<dt>から煎りとは</dt>
// 							<dd>フライパンや鍋に油をひかずに、材料を炒めること。材料の余分な水分を飛ばしたり、軽く焦げ目を付けたりすることで、材料の食感や香りを引き立てます。また、材料特有の臭みを消す効果もあります。</dd>
// 						</dl>
//            </div>
//           </div>
//       </div>
// '),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15113'),
array ('recommend-recipe-id','15151'),
array ('recommend-recipe-id','15152'),
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
