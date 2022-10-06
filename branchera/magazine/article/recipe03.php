<?php
//base
include( "../../function.php" );
$content = get_id_data( '14003' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
		include( $inc_path . "/lib/inc/pan.php" );
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		include($inc_path . "/lib/inc/page/_magazine/__recipe-main-v.php" );
		?>
		<section class="main__wrapper recipe">

			<div class="recipe__header recipe-header">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">第3話</span>
					<span class="recipe-header__ttl">ひき肉とブロッコリーのマカロニグラタン</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">最近、仕事にもどった私ミエ。家事効率をアップするためにも、パパと一緒に料理教室で勉強中なんだ！そんな中…次の金曜日に社内の送別会に呼ばれているんだけど…パパ、お夕飯大丈夫かな？</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>送別会、来週の金曜だろ？<br>お世話になった人なんだし、気にしないで行ってきなよ！</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>ありがとう！そう言ってくれると助かる～<br>じゃぁ、コウちゃん…金曜日はパパにご飯作ってもらいなね</p>
					</div>
				</div>

				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>パパのカレー！？</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>そうだよ、パパのカレー美味しいもんね</p>
					</div>
				</div>

				<div class="recipe-icn masaki_03">
					<div class="inner">
						<p>…ちょ、ちょっと待った！！<br>パパだって、ハッピーキッチンに通ってるんだから<br class="u-only__pc">そろそろカレーは卒業だ！</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>おぉ～！パパ、頼もしい～</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>コウちゃん、パパに何作ってほしい？</p>
					</div>
				</div>

				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>グラターン！コウちゃんグラタンたべたい！</p>
					</div>
				</div>

				<div class="recipe-icn masaki_02">
					<div class="inner">
						<p>グ…グラタンか…なんだか急にハードルが高いような…</p>
					</div>
				</div>

				<div class="recipe-icn kou_02">
					<div class="inner">
						<p>グラタン、だめ？</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>大丈夫！パパに任せとけ！<br>週末に、マユ先生に教えてもらってくるから！</p>
					</div>
				</div>

			<div class="recipe__movie recipe-movie">

				<h3 class="recipe-movie__ttl">
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl@2x.png"
					alt="マユ先生のレシピ"
					style="max-width:159px"
					class="u-img__max">
				</h3>

				<div class="recipe-movie__overview">
					<figure class="recipe-movie__overview_icn">
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe@2x.png"
						alt="マユ先生"
						style="width:114px"
						class="u-img__max">
					</figure>
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第3回は、子どもも大好きな「ひき肉とブロッコリーのマカロニグラタン」をご紹介します。マカロニを別ゆでしない簡単レシピなので、ぜひ試してみてくださいね。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/ZbxyhIA3Mh8?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">ひき肉とブロッコリーのマカロニグラタン</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（4人分）　調理時間目安：30分</h3>
					<dl class="recipe-design__materials">
						<dt>豚ひき肉</dt>
						<dd>200g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩</dt>
						<dd>小さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>こしょう</dt>
						<dd>少々</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ナツメグ</dt>
						<dd>あれば少々</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>たまねぎ</dt>
						<dd>1/2個(約100g)</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ブロッコリー</dt>
						<dd>1株(約200g)</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ミニトマト</dt>
						<dd>8個</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>バター</dt>
						<dd>20g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>小麦粉（薄力粉）</dt>
						<dd>大さじ3</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>牛乳</dt>
						<dd>400ml</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>水</dt>
						<dd>300ml</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>マカロニ</dt>
						<dd>100g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>卵</dt>
						<dd>4個</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ピザ用チーズ</dt>
						<dd>100g</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>たまねぎは<a href="<?php echo $base_url ?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>にします。<br>ブロッコリーは小房に分け、茎も皮をのぞいてひと口大に切ります。<br>ミニトマトは半分に切ります。</span></li>
						<li class="recipe-design__howto-item"><span>フライパンを<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し、バターを入れて半分ほど溶けたところで<br class="u-only__pc">豚ひき肉、塩、こしょう、あればナツメグを加えて炒めます。</span></li>
						<li class="recipe-design__howto-item"><span>色が変わってきたら、「1」のたまねぎを加えて炒めます。<br>しんなりしてきたら、「1」のブロッコリーの茎を加えてさっと炒め、いったん火を止めます。</span></li>
						<li class="recipe-design__howto-item"><span>小麦粉を加えて全体にからめるように混ぜ、牛乳を少しずつ加えて混ぜます。<br>水、マカロニも加えて<strong>再び<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a></strong>にかけます。<br>マカロニは別ゆでしないで、そのままフライパンにいれます。</span></li>
						<li class="recipe-design__howto-item"><span>とろみがついてきたら<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にし、マカロニの表示のゆで時間に合わせて、混ぜながら煮ていきます。</span></li>
						<li class="recipe-design__howto-item"><span>表示のゆで時間になったら、「1」のブロッコリーを加え、<strong>さらに2分ほど</strong>煮て、マカロニとブロッコリーに火が通ったら火を止めます。</span></li>
						<li class="recipe-design__howto-item"><span>「1」のミニトマトを加えてざっと混ぜてグラタン皿に入れ、中央をくぼませて卵を割り入れます。卵のまわりにピザ用チーズをのせ、<strong>オーブントースターで8～10分ほど</strong>こんがりと色づくまで焼きます。</span></li>
					</ol>
					<h4>＜早ゆでタイプのマカロニの場合＞</h4>
					<p>ゆで時間が短い、早ゆでタイプのマカロニ(表示のゆで時間3～5分)を使用する場合は、<strong>水を200ml</strong>にします。</p>
				</div>
				<div class="recipe-design__point">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">ひき肉を使うことで切る手間が省け、肉が固くなってしまう心配もありません。<br>顆粒コンソメは使わず、塩・こしょうとチーズだけでも旨味たっぷりのグラタンができます。冬の時期ならば、ブロッコリーの代わりに、旬の小松菜もおすすめ。4cm長さのざく切りにし、工程「3」でブロッコリーの芯と同様にさっと炒めればOKです。</p>
				</div>
			</div>

			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>チーズがとろ～りで、ホワイトソースも美味しい！<br>これならコウちゃんも喜んでくれるはずです！</p>
				</div>
			</div>

			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ホワイトソースってちょっと難しそうなイメージがありますが<br class="u-only__pc">炒めた具材に小麦粉をふる方法なら、ダマになりにくく失敗知らず！<br>火を止めて作業すれば、落ち着いてできるのでオススメですよ♪</p>
				</div>
			</div>

			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>う～～ん…これを1人でできるかなぁ<br>でも、コウちゃんにパパだってできるとこ見せたいし…</p>
				</div>
			</div>

			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>グラタンは一度作り方を覚えると<br class="u-only__pc">具材を変えるだけで料理の幅が広がりますよ！</p>
				</div>
			</div>

			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>そ…そうですよね！<br>パパの熱意を見せるためにも、アッツアツのグラタン作るぞぉ！</p>
				</div>
			</div>

			<div class="recipe-icn mayu_02">
				<div class="inner">
					<p>やけどしないように気を付けてくださいね</p>
				</div>
			</div>
		</div>

			<hr class="recipe__line">

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">カレーばかりのパパが、グラタンを作るなんてビックリ！コウちゃんも喜んでて、早速「また食べたーい」だって。家族が喜ぶ顔を見ると、やる気がでてくるな～♪</p>
			</div>

			<div class="mb0">

			<?php
				include ($inc_path."/lib/inc/page/_magazine/__recipe-footer.php");
			?>
		</div>

		</section>
	</article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>

<?php
$toindex_url = "/magazine/index_comic02.php";
include( $inc_path . "/lib/inc/toindex__magazin.php" );
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
