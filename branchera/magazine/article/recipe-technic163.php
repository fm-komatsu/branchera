<?php
//base
include( "../../function.php" );
$content = get_id_data( '15163' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'きんぴらごぼうの作り方を動画とテキストで解説。きんぴらごぼうの作り方やきんぴらごぼうを使ったアレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '163';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '0sDg352_1jQ';

//導入文
$introTxt = '第163回は、「きんぴらごぼう」です。常備菜としても活躍する、人気のきんぴらごぼうの作り方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','ごぼうをたくさんいただいたから、きんぴらごぼうを作ろう！'),

//マサキ　通常
array ('papa','01','きんぴらごぼう、甘辛くて美味しいよねぇ～！'),

//ミエ　困る
array ('mama','02','でも、あの味付けってどうやったらできるんだろう？'),

//フラッキー　通常
array ('fl','01','なに？ミエはきんぴらごぼうの味付けを知らないのか？<br>簡単に美味しくできる方法があるぞ！！'),

//ミエ　通常
array ('mama','01','教えて、フラッキー！'),

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
array ('ttl_l','mb0','きんぴらごぼうの作り方'),

// （本文1）
array ('text','mb2','「きんぴら」を漢字にすると、「金平」。そのルーツは、江戸時代に流行した人形浄瑠璃「金平浄瑠璃」にあります。金平浄瑠璃とは、金太郎で有名な坂田金時の子ども、金平の武勇伝で、そこから強くて丈夫なものを「きんぴら」と呼ぶようになりました。'),
array ('text','mb2','ごぼうを使ったこの料理も、ごぼう特有のかたさや丈夫さから、「きんぴら」と呼ばれています。今回は、めんつゆで簡単に味付けできるレシピをご紹介しましょう！'),

// （小見出し）
array ('ttl_m','mb1','材料（4人分）'),
array ('mtr-st'),
array ('mtr','ごぼう','1本（150g）'),
array ('mtr','<a href="'.$base_url.'/magazine/article/recipe-technic78.php" class="recipe-design__link">こんにゃく</a>','100g'),
array ('mtr','赤唐辛子（輪切り）','適量'),
array ('mtr','めんつゆ（2倍濃縮タイプ）','<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>4'),
array ('mtr','ごま油','大さじ1'),
array ('mtr-end'),

// （小見出し）
array ('ttl_m','mb1','手順'),
array('step','01','mb2','ごぼうは包丁の背で皮をこそげ取ります。'),
array('step','02','mb2','ごぼうを細切りにします。'),
array('step','03','mb3','水にさっとさらし、ざるに上げて水気をよく切ります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','短時間でごぼうのアク抜きを！'),
array ('free','mb2','ごぼうはアクが強い。だから、切った後、さっと水にさらしてアク抜きをするのが一般的だ。長時間水にさらすと、水が茶色になってしまう。それは、ポリフェノールが流れ出た証拠。栄養を無駄にしないためにも、水にさらす時間は短くしよう！'),
array ('free','mb0','ちなみに、ごぼうを白く仕上げたいメニューのときは、変色を防ぐ酢水を使うのがおすすめだ。ごぼうのアク抜きをするとき、水にさらす場合は5分以内、酢水にさらす場合は1~2分がベストだぜ！'),
array ('chk-end'),

array('step','04','mb2','こんにゃくを細切りにします。'),
array('step','05','mb2','フライパンを中火で熱し、こんにゃくを入れて<strong>1〜2分程度から煎り</strong><sup>※</sup>します。'),
array('step','06','mb2','フライパンにごま油を入れ、ごぼうを加えて炒めます。'),
array('step','07','mb2','ごぼうがしんなりしたら、赤唐辛子、めんつゆを加えます。'),
array('step','08','mb2','<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で<strong>煮汁がほとんどなくなるまで、炒め煮</strong>にします。'),
array('step','09','mb3','器に盛り付けたら完成です！'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2',' きんぴらごぼうの保存方法'),
array ('text','mb2','きんぴらごぼうは、作り置きできる便利な<a href="'.$base_url.'/magazine/article/recipe-collect08.php" class="recipe-design__link">常備菜</a>です。冷蔵庫での保存期間の目安は約3日～5日です。また、冷凍庫での保存期間の目安は、密閉した状態で約1ヵ月です。'),
array ('text','mb2','ラップに小分けし、ファスナー付き保存袋に入れて冷凍しましょう。お弁当で使うときに便利ですよ。解凍する際は、冷蔵庫に移して自然解凍するか、レンジで加熱して解凍します。'),
array ('text','mb0','ただし、こんにゃくが入っているきんぴらごぼうの場合は、こんにゃくの水分が抜けてしまうため冷凍保存ができません。もし、冷凍保存を考えてきんぴらごぼうを作る場合は、こんにゃくを入れないようにしましょう。'),
array ('plus-end'),

//（大見出し2）
array ('ttl_l','mb1','きんぴらごぼうのアレンジレシピ'),

// （本文2）
array ('text','mb2','きんぴらごぼうの人気のアレンジレシピをご紹介します。'),

//（小見出し）
array ('ttl_m','mb1','きんぴらごぼうのサラダ'),
array ('textimg','10','right','きんぴらごぼうのサラダ','mb2','余ったきんぴらごぼうはサラダにアレンジできます。きんぴらごぼうにマヨネーズと<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">すりごま</a>を入れて、混ぜればできあがりです。<a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>やレモン汁を加えても美味しくなりますよ。'),

//（小見出し）
array ('ttl_m','mb1','きんぴらごぼうの炊き込みご飯'),
array ('textimg','11','left','きんぴらごぼうの炊き込みご飯','mb2','きんぴらごぼうで作る炊き込みご飯です。研いだお米を炊飯器に入れ、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#mirin" class="recipe-design__link">みりん</a>、和風だしを加えてから、分量の線まで水を入れます。細かく切った<a href="'.$base_url.'/magazine/article/recipe04.php" class="recipe-design__link">鶏のもも肉</a>、細切りにしたにんじんと油揚げ、ほぐした<a href="'.$base_url.'/magazine/article/recipe-technic27.php#shimeji" class="recipe-design__link">しめじ</a>、きんぴらごぼうを入れて、ご飯を炊きます。炊き上がったら完成です。'),

//（小見出し）
array ('ttl_m','mb1','五目きんぴら'),
array ('textimg','12','right','五目きんぴら','mb2','具だくさんの五目きんぴらは、一度に多くの食品が摂れる栄養豊富な一品です。<br>ごぼうは千切りに、れんこんは薄切りにして水にさらし、水気を切ります。フライパンにごま油を入れ、豚肉、ごぼうをよく炒めます。れんこん、<a href="'.$base_url.'/magazine/article/recipe-technic13.php#sengiri" class="recipe-design__link">にんじんの千切り</a>、こんにゃく、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>を加えて炒めます。醤油、酒、みりん（めんつゆでも可）を加えて、汁気がなくなったらできあがりです。'),

//（小見出し）
array ('ttl_m','mb1','きんぴらごぼうの離乳食'),
array ('text','mb2','きんぴらごぼうは、パクパク期（1歳～1歳6ヵ月頃）の赤ちゃんの離乳食になります。歯ごたえがあり、アクの強いごぼうですから、しっかりアクを抜き、やわらかくゆでてから与えましょう。'),
array ('text','mb0','ごぼうとにんじんは皮を剥き、繊維を断ち切るように、細かく刻みます。和風だし、醤油、砂糖を加えた水に、アク抜きしたごぼうとにんじんを入れて火にかけ、沸騰したら弱火で煮込み、汁気がなくなったら完成です。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','はい、美味しいきんぴらごぼうができました♪'),

//マサキ　通常
array ('papa','01','きんぴらごぼうで、今夜はご飯がすすむなぁ！'),

//コウちゃん　喜ぶ
array ('ko','03','わーい、あまくてからい、きんぴらごぼう、おいしい～♪'),

//フラッキー　通常
array ('fl','01','いっぱい食べて、丈夫に大きくなるんだぞ<br>ミエ、きんぴらごぼうは、お弁当にぴったりだぜ！'),

//ミエ　通常
array ('mama','01','余った分は冷凍して、コウちゃんの<a href="'.$base_url.'/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>にしようっと♪'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>から煎りとは</dt>
							<dd>フライパンや鍋に油をひかずに、材料を炒めること。材料の余分な水分を飛ばしたり、軽く焦げ目を付けたりすることで、材料の食感や香りを引き立てます。また、材料特有の臭みを消す効果もあります。</dd>
						</dl>
           </div>
          </div>
      </div>
'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15045'),
array ('recommend-recipe-id','14001'),
array ('recommend-recipe-id','15151'),
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
