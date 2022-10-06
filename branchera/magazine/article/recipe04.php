<?php
//base
include( "../../function.php" );
$content = get_id_data( '14004' );
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
					<span class="recipe-header__num">第4話</span>
					<span class="recipe-header__ttl">とりのカレーから揚げ</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">同じような料理ばかりになっていた我が家のレシピを改善すべく、パパと2人で料理教室に通いはじめたの。最近では、息子のコウちゃんが「美味しい！」と言ってくれるのが嬉しくて♪もっとコウちゃんの好きなもの作ってあげたいな～</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>パパ、みてみてー！</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>おぉ、コウちゃん！上手じゃないかー<br>桜の絵を描いたんだね</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>もう桜の季節なんだね、早いなー<br>うちの方は来週末あたりがちょうど見頃かな</p>
					</div>
				</div>

				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>コウちゃん、さくらみたーい</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>じゃぁ、来週末はみんなでお花見にでも行こうか<br>お弁当を持って！</p>
					</div>
				</div>

				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>お…お弁当！？<br>いつか来ると思っていたけれど、実は作ったことないの…</p>
					</div>
				</div>

				<div class="recipe-icn masaki_02">
					<div class="inner">
						<p>お弁当と言えば…やっぱりから揚げかな？</p>
					</div>
				</div>

				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>揚げ物か…これまたハードルが高いけれど…<br>先生のところ、行ってきますか！</p>
					</div>
				</div>

				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>おべんとー！からあげー！</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>よぉしっ！ママに任せておいて！<br>美味しいから揚げの作り方をマユ先生に教わってくるね！<br>今年のお花見は、一味違うぞぉー！</p>
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
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第4回は、お弁当にもピッタリな「とりのカレーから揚げ」です。からっとサクサクに揚げる方法をご紹介していきますね。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/zXVOYuj5TZE?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">とりのカレーから揚げ</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（3～4人分）　調理時間目安：30分</h3>
					<dl class="recipe-design__materials">
						<dt>鶏もも肉</dt>
						<dd>2枚（500g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：醤油</dt>
						<dd>大さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：みりん</dt>
						<dd>大さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：塩（自然塩）</dt>
						<dd>小さじ1/2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：にんにく（すりおろし）</dt>
						<dd>小さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>片栗粉</dt>
						<dd>大さじ5</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>カレー粉</dt>
						<dd>大さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>サラダ油</dt>
						<dd>適量</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>レモン（くし形切り）</dt>
						<dd>適宜</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>サラダ菜</dt>
						<dd>適宜</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>鶏もも肉は余分な脂肪を取り除き、1枚を8等分にするくらいの<strong>大きめのひと口大</strong>に切ります。</span></li>
						<li class="recipe-design__howto-item"><span>袋に「1」と「A」を入れてよくもみ、<strong>10分以上</strong>おきます。</span></li>
						<li class="recipe-design__howto-item">ボウルに片栗粉、カレー粉を入れて混ぜ、「2」を加えて全体にたっぷりまぶします。</li>
						<li class="recipe-design__howto-item"><span>フライパンにサラダ油を深さ2〜3cmほど入れて<strong>強めの<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で170℃</strong>に熱し、手でぎゅっと丸めながら油に入れます。表面が固まってきたら、時々箸で返しながら<strong>4分ほど</strong>揚げます。</span></li>
						<li class="recipe-design__howto-item"><span>最後に<strong>火を強め、1分ほど</strong>カラリと揚げて油を切ります。<br>器に盛り、あればレモン、サラダ菜を添えます。</span></li>
					</ol>
				</div>
				<div class="recipe-design__point">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">揚げる時は、焦げやすいので温度が上がりすぎないように注意しましょう。まぶす片栗粉が少ないと焦げやすくなるので、しっかりと片栗粉をまぶすことがポイントです。動画では、深い鍋を使用しましたが、フライパンのような底が浅い鍋でも揚げることができます。フライパンでも、<a href="recipe-technic09.php" rel="nofollow" class="recipe-design__link">揚げ物の基本</a>は同じで、から揚げの表面が固まるまでは触らないように気を付けましょう。</p>
				</div>
			</div>

			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>すごぉーい！サクサクジュワっとして美味しい～<br>カレー風味になるだけで、お店で食べているみたいです！</p>
				</div>
			</div>

			<div class="recipe-icn mayu_02 mb3">
				<div class="inner">
					<p>そ…そんなに喜んでいただけて嬉しいです<br>これで、来週のお花見もバッチリですね♪</p>
				</div>
			</div>

			<h3 class="center mb3">― お花見 ―</h3>

			<div class="recipe-icn kou_03">
				<div class="inner">
					<p>からあげ、もう1コちょーだい！</p>
				</div>
			</div>

			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>うん、ママのから揚げ最高だよ！<br>このカレー味…ビールを飲みすぎちゃうかも♪</p>
				</div>
			</div>

			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>桜の木の下で食べると、美味しさも倍増だね～<br>揚げ物って今までほとんど作ったことがなかったけれど<br class="u-only__pc">温度と揚げ上がりさえ掴めば、これからも手軽に取り入れられそう！</p>
				</div>
			</div>

			<div class="recipe-icn kou_03">
				<div class="inner">
					<p>さいごの1コ、も～らいっ！</p>
				</div>
			</div>

			<div class="recipe-icn masaki_03">
				<div class="inner">
					<p>あぁー！ね…狙ってたのにぃ～</p>
				</div>
			</div>

		</div>

			<hr class="recipe__line">

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">お弁当を持ってお花見なんてはじめての経験！揚げ物もいざ作ってみると、そこまで大変じゃないんだけど…何となくイメージで「大変」って思っていたみたい。他のレシピにも言えることだけど、あまりネガティブなイメージを持たないことが大切なのかもね！</p>
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
