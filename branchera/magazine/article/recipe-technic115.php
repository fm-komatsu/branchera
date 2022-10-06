<?php
//base
include( "../../function.php" );
$content = get_id_data( '15115' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「フライドチキンのレシピ」を動画とテキストで解説。フライドチキンをサクッとジューシーに仕上げるレシピをご紹介します。また、韓国チキン風のソースや、ささみを使ったヘルシーフライドチキンなどのアレンジメニューもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '108';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '115';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '5vzCgxrWlCo';

//導入文
$introTxt = '第115回は、「フライドチキンの簡単レシピ」です。手軽にできる美味しいフライドチキンの作り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
// コウちゃん　普通
array ('ko','01','まま～、おねがいがあるの<br>
こうちゃんね、ふらいどちきんがたべた～い！'),

// ミエ　通常
array ('mama','01','フライドチキン？<br>
うん、いいわよ。コウちゃんの頼みなら、ママはなんでも作っちゃう！'),

// コウちゃん　喜ぶ
array ('ko','03','わ～い！'),

// ミエ　困る
array ('mama','02','でも、フライドチキンってどうやって作るのかしら？<br>
唐揚げとは違うよね…フラッキーに聞かなくちゃ！'),

// フラッキー　通常
array ('fl','01','なになにフライドチキン？俺が美味しい作り方を教えてやるぜ！'),

// ミエ　通常
array ('mama','01','なんて頼もしいの！フラッキー、よろしくね！'),


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
array ('ttl_l','mb0','フライドチキンの作り方'),

// （本文1）
array ('text','mb2','フライドチキンは、アメリカの代表的な料理の1つです。鶏肉に和風の味付けをする唐揚げとは異なり、フライドチキンは衣にハーブやスパイスなどで洋風の味付けをします。スパイシーで美味しいフライドチキンを作る方法をご紹介しましょう。'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('mtr','鶏もも肉、鶏むね肉','合計500g'),
array ('mtr','卵','1個'),
array ('mtr','鶏がらスープの素','小さじ2'),
array ('mtr','塩','小さじ1/2'),
array ('mtr','おろしにんにく','小さじ1'),
array ('mtr-end'),
array ('mtr-st'),
array ('mtr','薄力粉-A','1/2カップ'),
array ('mtr','片栗粉-A','1/2カップ'),
array ('mtr','粗びき黒こしょう-A','小さじ1'),
array ('mtr','ナツメグ-A','小さじ1/2'),
array ('mtr-end'),
array ('mtr-st'),
array ('mtr','サラダ油','適宜'),
array ('mtr-end'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','鶏肉のどの部位がフライドチキンに最適なの？'),
array ('free','mb0','鶏肉には、むね肉、もも肉、骨付きもも肉、手羽元など様々な部位がある。どの部位でも美味しく食べられるけど、ジューシーで濃厚に仕上げたいときは、骨付きの手羽元ともも肉をおすすめするぜ！手羽元ともも肉は肉質がやわらかく、脂肪分も適度にあるから、揚げ物に最適なんだ。そして脂肪分が少ないむね肉とささみは、あっさり軽い仕上がりにしたいときにおすすめだぜ。<br>
今回はもも肉とむね肉を一緒に使って、濃厚とあっさり、両方1度に楽しめるレシピを紹介するぞ！'),
array ('chk-end'),

// （小見出し）
array ('ttl_m','mb0','手順'),

array('step','01','mb3','鶏肉は厚みのあるところは開き、5cm角程度に切ります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','削ぎ切りすることでむね肉もしっとりジューシーに！'),
array ('free','mb0','むね肉のパサつきを抑えてしっとりジューシーに仕上げるには、衣を付ける前に削ぎ切りにしておくといいぞ！削ぎ切りにして繊維を断ち切ることで、肉がやわらかく、しっとりした食感になるんだ！'),
array ('chk-end'),

array('step','02','mb0','ボウルに卵を割り入れます。そこに鶏がらスープの素、塩、おろしにんにく、切った鶏肉を加えてもみ込み、15分程度置きましょう。'),

array('step','03','mb0','バットにAの材料を入れてよく混ぜたら、もみ込んだ鶏肉を入れてまぶします。'),

array('step','04','mb0','全体に粉をまぶしたら、再度ボウルの卵液、バットの衣を付けます。'),

array('step','05','mb0','油を<a href="'.$base_url.'/magazine/article/recipe-technic09.php" class="recipe-design__link">160℃に熱し</a>、衣を付けた鶏肉を揚げましょう。5分程度揚げたら一旦取り出してください。'),

array('step','06','mb3','180℃に熱した油で、2度揚げします。カリッとするまで揚げましょう。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','カリッとジューシーに仕上げるコツは”2度揚げ”！'),
array ('free','mb0','いきなり高温の油で揚げると、中まで火が通る前に表面が焦げてしまうんだ。先に低温の油でじっくりと火を通し、高温の油でサッと2度揚げすれば、表面はカリッ&中はジューシーに仕上げることができるぞ！'),
array ('chk-end'),

array('step','07','mb3','できあがり！'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','圧力鍋を使って美味しさアップ！'),
array('text','mb0','骨付きの鶏肉は、中まで火が通るのに時間がかかることがあります。油でしっかり揚げたのに、中まで火が通っていなかった…そんな失敗を避けるには、揚げる前にゆでることです。圧力鍋で鶏肉を下ゆでし、最初に火を通しておけば、揚げる時間も短縮できますよ。'),
array ('plus-end'),

// ■Plus1
array ('plus-st'),
array('plus-ttl','mb0','ハーブソルトやオールスパイスを使えばより本格派に！'),
array('text','mb0','フライドチキンの味の決め手はスパイスです。基本のこしょうやナツメグのほか、市販のハーブソルトや、シナモン・ナツメグ・クローブの香りを併せ持つ「オールスパイス」という香辛料があると本格的な仕上がりになります。<br>
そのほか、ターメリックやパプリカパウダー、ガラムマサラを衣に加えるのもよいでしょう。辛みが欲しいときは、チリパウダーやカイエンペッパーを調整しながら入れてくださいね。'),
array ('plus-end'),

// （大見出し1）
array ('ttl_l','mb0','フライドチキンのアレンジレシピ'),

// （本文2）
array ('text','mb2','アメリカ生まれのフライドチキンをアレンジした人気のレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','韓国のヤンニョムチキン風！スパイシーハニーチキン'),
array ('textimg','08','right','韓国のヤンニョムチキン風！スパイシーハニーチキン','mb2','基本のレシピで作ったフライドチキンを、韓国風の甘辛ソースで簡単アレンジ！ソースの作り方をご紹介します。<br>
まずフライパンに油を入れ、おろしにんにくを炒めます。醤油、酒、水、オイスターソースを入れて煮立ったら、最後にはちみつを加えます。とろみが出たら、ソースにフライドチキンを絡めてできあがり！'),

//（小見出し）
array ('ttl_m','mb1','サクサク！ささみのクリスピーフライドチキン'),
array ('textimg','09','left','サクサク！ささみのクリスピーフライドチキン','mb2','基本のレシピも、ささみを使って作るとよりサクッと軽い食感になります。<br>
ささみは調理する前に筋を取り、斜めに切って2等分にしておきましょう。縦長になるので、スティック状で食べやすい仕上がりになりますよ♪'),

//（小見出し）
array ('ttl_m','mb1','フライドチキンの簡単バーガー'),
array ('textimg','10','right','フライドチキンの簡単バーガー','mb0','ハンバーガー用のバンズを用意し、半分にカットします。むね肉で作ったフライドチキンと、レタス、トマト、パプリカなどのお好みの野菜を用意し、食べやすいようにカットしておきましょう。<br>
カットしたバンズの上にフライドチキン、野菜をのせます。マスタードとマヨネーズをかけてバンズで挟めば、簡単バーガーのできあがり！お好みでスライスチーズを挟んでも美味しいですよ。'),


);
//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','無事フライドチキン完成〜！はい、コウちゃん、召し上がれ！'),

//コウちゃん　喜ぶ
array ('ko','03','わ～い！ふらいどちきん、おいしい～！'),

//マサキ　通常
array ('papa','01','どれどれ。おっ、これは美味しい！<br>
家で本格的なフライドチキンが食べられるなんて感動するな〜！'),

//ミエ　通常
array ('mama','01','なんだか、料理上手になった気がする～♪<br>
次は、韓国風のフライドチキンを作っちゃおうっと！'),

//マサキ　通常
array ('papa','01','韓国風だとまた違う味わいになりそうだね！楽しみにしてるよ、ママ！'),
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
