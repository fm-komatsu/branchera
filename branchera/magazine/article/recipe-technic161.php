<?php
//base
include( "../../function.php" );
$content = get_id_data( '15161' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「紅茶のいれ方」を動画とテキストで解説。紅茶のいれ方だけでなく、ミルクティーやフルーツティーなどのアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '161';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'VPz_GmNJp1U';

//導入文
$introTxt = '第161回は、「紅茶のいれ方」です。美味しい紅茶のいれ方を動画でご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','お友達から紅茶をいただいたよ～♪'),

//マサキ　通常
array ('papa','01','おっ、これは本場イギリスの茶葉だ！'),

//ミエ　通常
array ('mama','01','さっそく紅茶をいれようっと♪<br>まずはお湯を沸かさなくちゃね'),

//フラッキー　通常
array ('fl','01','ちょっと待った！紅茶のいれ方にはコツがあるぞ<br>コツを知ってからいれるほうが美味しい紅茶を楽しめるぜ！'),

//ミエ　通常
array ('mama','03','えっ、そうなの？<br>フラッキー、コツを教えて～'),

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
array ('ttl_l','mb0','紅茶を美味しくいれるための道具'),

// （本文1）
array ('text','mb2','紅茶を本格的に美味しくいれるには、専用の道具を使いましょう。美味しい紅茶を飲むための道具と用途、そして選び方の注意点について解説します。'),

// （小見出し）
array ('ttl_m','mb1','ティーポット'),
array ('text','mb2','茶葉から紅茶を抽出するための道具です。ティーポットには丸みを帯びたものや円柱形のものがありますが、美味しい紅茶をいれるには、丸い形のものが最適です。中でお湯が対流を起こしやすいため、茶葉がジャンピングして紅茶を美味しく抽出できますよ。'),
array ('text','mb2','また、中に茶こしが付いていないものを選びましょう。茶こし付きのポットだと、茶葉がジャンピングするスペースが狭くなるため、効率よく抽出できません。'),
array ('text','mb2','素材は、陶器かガラスが適しています。鉄製のものを使うと、紅茶に含まれるタンニンが鉄と化合して、香りがそがれやすくなります。また色も黒っぽくなってしまうので、注意してくださいね。'),

// （小見出し）
array ('ttl_m','mb1','ティーカップ'),
array ('text','mb2','抽出した紅茶を注ぐカップは、浅く、口が広いものがよいでしょう。口が狭いカップよりも紅茶の香りが広がりやすいため、美味しくいただけます。<br>また、紅茶の色を楽しむためには、白い陶器やガラス製のティーカップをおすすめします。'),

// （小見出し）
array ('ttl_m','mb1','ティーコゼー'),
array ('text','mb2','紅茶を冷まさないようにするためのアイテムです。ティーコージー、あるいはティーポットカバーともいいます。ティーポット全体を包み込む形状をしており、中に綿を厚く入れてあるため、外の冷気を防いでくれます。'),

// （小見出し）
array ('ttl_m','mb1','ティーストレーナー'),
array ('text','mb2','茶葉をこすための道具、つまり茶こしのことです。ティーポットからティーカップに紅茶を注ぐときに、ティーストレーナーを使って茶葉がカップに入らないようにします。'),

// （大見出し2）
array ('ttl_l','mb0','紅茶のいれ方'),

// （本文2）
array ('text','mb2','紅茶には、茶葉をそのままポットに入れるリーフティーと、少量の茶葉を薄い紙の袋に詰めたティーバッグがあります。それぞれの美味しいいれ方をお伝えします。'),

// （小見出し）
array ('ttl_m','mb1','リーフティーの場合'),
array('step','01','mb3','やかんに汲みたての水を入れて沸騰させます。5円玉くらいの泡がぼこぼこ出ているのがよい状態です。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','日本の水は紅茶向き'),
array ('free','mb2','わざわざペットボトル入りのミネラルウォーターを買わなくても、水道水で美味しい紅茶をいれられるぜ！紅茶に合う水は、硬水ではなく、ミネラル分が少ない軟水なんだ。日本の水道水はほとんどが軟水だから、紅茶向きというわけさ。<br>
美味しい紅茶をいれるためには、汲みたての水を使おう！汲みたての水には空気がたくさん含まれているから、茶葉の上下運動(ジャンピング)が起こるんだ。そして、香りや旨味が抽出され、美味しい紅茶になるぞ。'),
array ('free','mb0','カルキ臭が気になるときは<strong>1～2分</strong>沸騰させるといいぞ！'),
array ('chk-end'),

array('step','02','mb0','カップとポットにお湯を注いで、温めておきます。'),
array('step','03','mb0','温めたポットにティースプーンで茶葉を入れます。<br><strong>2人分がティースプーン2杯(2～3g)</strong>。<br>ティースプーンに茶葉を盛るとき、1杯あたり細かい茶葉は中盛り、大きい茶葉は大盛りにします。'),
array('step','04','mb3','沸騰したてのお湯をポットに勢いよく入れます。<strong>2人分300ml</strong>が目安です。沸騰したお湯を使うと、対流で茶葉がよく動き、美味しくなります。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','お湯は勢いよく注ごう！'),
array ('free','mb0','沸騰したお湯をポットに入れるときのコツは、こぼさない程度に、勢いよく入れること！茶葉がポットの中でジャンピングして、美味しくなるぜ。'),
array ('chk-end'),

array('step','05','mb3','すぐに蓋をして蒸らします。<strong>細かい茶葉は2分半～3分、大きい茶葉は3～4分</strong>蒸らします。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','ティーコゼーでポットを保温しよう！'),
array ('free','mb0','蒸らす間はティーコゼーでポットを覆って、保温しよう。温度を下げないことが紅茶を美味しくいれるポイントだぜ。'),
array ('chk-end'),

array('step','06','mb3','ポットの蓋を開けて、中をスプーンで軽く混ぜます。ティーストレーナーでこしながら、カップに回しいれたら、できあがりです。'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','最後の1滴まで注ぎ切ろう'),
array ('free','mb0','紅茶を美味しくいれるには、「ベスト・ドロップ(ゴールデン・ドロップ)」と呼ばれる最後の1滴まで注ぐことが大切なんだ。最後の1滴に、茶葉の美味しいエキスがつまっているから、最後まで注ぎ切ろう！'),
array ('chk-end'),

// ■Check
array ('chk-st'),
array ('ttl4','mb2','紅茶が美味しい温度は60～70度'),
array ('free','mb0','紅茶を美味しく飲める温度は<strong>60～70度</strong>といわれているぞ。熱過ぎるものも冷め過ぎていてもおすすめしないぜ。沸騰したお湯でいれた紅茶でも、ティーカップに注ぐと少しずつ温度が下がる。飲みやすい温度になったらいただこう！'),
array ('chk-end'),

// （小見出し）
array ('ttl_m','mb0','ティーバッグの場合'),
array('step','07','mb0','カップに沸騰したお湯を入れて温めておきます。'),
array('step','08','mb0','ティーバッグを軽く振って中の茶葉をほぐします。'),
array('step','09','mb0','カップの中のお湯を捨て、沸騰したお湯を注ぎます。'),
array('step','10','mb0','ティーバッグを入れて、お皿で蓋をして<strong>2分</strong>ほど蒸らします。'),
array('step','11','mb3','ティーバッグをお湯からさっと引き上げてから、しずくを切ります。このとき、お湯の中でティーバッグを振らないように注意しましょう。'),

// ■PLUS1
array ('plus-st'),
array ('plus-ttl','mb2',' 紅茶を外出先に持っていくときは？'),
array ('text','mb0','外出先に紅茶を持っていく際は、保温ポットにお湯のみを入れ、飲む直前にティーバッグで抽出するのがおすすめです。抽出済みの紅茶を保温ポットに長時間放置しておくと、次第に冷めて美味しくなくなってしまいます。'),
array ('plus-end'),

//（大見出し3）
array ('ttl_l','mb1','紅茶のアレンジレシピ'),

// （本文3）
array ('text','mb2','紅茶はストレートでも美味しくいただけますが、ミルクや<a href="'.$base_url.'/magazine/article/recipe-technic83.php" class="recipe-design__link">フルーツ</a>を入れることで味のバリエーションが広がります。簡単にできるアレンジティーのレシピをご紹介しましょう。'),

//（小見出し）
array ('ttl_m','mb1','ミルクティー'),
array ('textimg','12','right','ミルクティー','mb2','紅茶にミルクを加えるとコクが増して、やさしい味わいになります。紅茶に冷たいままの牛乳を注ぎ入れれば完成です。牛乳には紅茶の渋みのもとであるタンニンを和らげる作用があるため、マイルドな味わいになりますよ。<br>牛乳の量は、1人分につき<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1〜大さじ1くらいまでがおすすめです。もっと牛乳を増やしたい場合は、紅茶がぬるくならないように温めた牛乳を使いましょう。'),

//（小見出し）
array ('ttl_m','mb1','ロイヤルミルクティー'),
array ('textimg','13','left','ロイヤルミルクティー','mb2','一般的なミルクティーよりも濃厚な風味と深みがあるのが特長のアレンジティーです。ロイヤルミルクティーは鍋で作ります。茶葉をお湯に入れて、2~3分煮出してしっかり茶葉を開かせます。その後で牛乳を加えます。牛乳は煮たたせないように気を付けましょう。お好みで<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>やはちみつを加えるのもおすすめです。'),

//（小見出し）
array ('ttl_m','mb1','アイスティー'),
array ('textimg','14','right','アイスティー','mb2','適度な渋みがある茶葉にぴったりなのが、アイスティーです。紅茶に使うお湯と同量の氷をグラスに入れ、茶葉の量を通常の2倍ほどにして、濃くいれた紅茶を氷の上から注ぎます。熱い紅茶が一気に冷えて、美味しいアイスティーになりますよ。'),

//（小見出し）
array ('ttl_m','mb1','フルーツティー'),
array ('textimg','15','left','フルーツティー','mb0','フルーツをたっぷり入れて、さわやかな甘みを楽しむアイスティーです。キウイ、オレンジ、レモンを<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にし、いちごは半分に切り、グラスに入れます。別の<a href="'.$base_url.'/magazine/article/recipe-technic160.php" class="recipe-design__link">容器</a>で作ったアイスティーをグラスに注いだら完成です。フルーツの甘みと酸味が紅茶によく合い、華やかな味わいを楽しめます。'),

);

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ミエ　通常
array ('mama','01','なんて優雅な香り！リラックスできる～♪'),

//マサキ　通常
array ('papa','01','味にも深みが出て美味しいね'),

//コウちゃん　喜ぶ
array ('ko','03','みるくてぃー、あまくておいしい～'),

//フラッキー　通常
array ('fl','01','砂糖の代わりに<a href="'.$base_url.'/magazine/article/recipe-technic142.php" class="recipe-design__link">ジャム</a>を入れると美味しいロシアンティーになるぞ～♪'),

//ミエ　通常
array ('mama','01','今度試してみようっと！<br>ちょっとしたコツでこんなに美味しくなるなら、これからもっと紅茶を楽しまなくっちゃ！'),

// 用語解説
array ('ttl_m','mb1','
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
            <h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>ジャンピングとは</dt>
							<dd>ティーポット内のお湯が対流することで、茶葉が上下に動く現象。茶葉からうまく抽出ができている証。</dd>
						</dl>
           </div>
          </div>
      </div> 
'),

);

//関連記事
$recommendrecipe = array (
array	('recommend-recipe-st'),
array ('recommend-recipe-id','15128'),
array ('recommend-recipe-id','15104'),
array ('recommend-recipe-id','13004'),
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
