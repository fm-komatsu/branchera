<?php
//base
include( "../../function.php" );
$content = get_id_data( '14006' );
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
					<span class="recipe-header__num">第6話</span>
					<span class="recipe-header__ttl">あさりとキャベツのパスタ</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">料理教室に通い始めた私、ミエとパパ。徐々にできることが増えてきて、パパも楽しくなってるみたい。そんな折、会社の人に誘われて家族みんなで潮干狩りに行ってきたの！あさりの砂抜き方法はマユ先生に教えてもらったんだけれど…せっかくの大漁のあさりだもん！いろいろなバリエーションでも食べた～い！</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>コウちゃん、はじめての潮干狩りどうだった？</p>
					</div>
				</div>

				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>コウちゃん、あさり100コとったよ！</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>コウちゃん、がんばってたもんね～<br>あさりの酒蒸し、あさりバター…いっぱい食べられるね</p>
					</div>
				</div>

				<div class="recipe-icn masaki_03">
				 	<div class="inner">
				 		<p>ママ！あさり料理のレシピが２つしかない！</p>
				 	</div>
				</div>

				<div class="recipe-icn mie_02">
				 	<div class="inner">
				 		<p>うっ…うーん…確かに</p>
				 	</div>
				</div>

				<div class="recipe-icn kou_02">
				 	<div class="inner">
				 		<p>コウちゃん、おいしいあさりたべたーい！</p>
				 	</div>
				</div>

				<div class="recipe-icn masaki_02">
				 	<div class="inner">
				 		<p>マユ先生やご近所さんにおすそ分けした分をのぞいても<br class="u-only__pc">あと2キロはあるよね！？<br>もっといろんな食べ方したいよな…<br>よし！またマユ先生に相談してくるかっ<br>行ってきまーす！</p>
				 	</div>
				</div>

				<div class="recipe-icn kou_03">
				 	<div class="inner">
				 		<p>はやく、あさりたべたーい！</p>
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
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第6回は、シンプルな味付けで素材の旨味を引き立てる「あさりとキャベツのパスタ」を作っていきます。基本のパスタの作り方もご紹介するので、ぜひ試してみてくださいね。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/YGTmQJUrS0o?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">あさりとキャベツのパスタ</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（4人分）調理時間目安：30分</h3>
					<dl class="recipe-design__materials">
						<dt>あさり（殻付き）</dt>
						<dd>300g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>にんにく</dt>
						<dd>1かけ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>キャベツ</dt>
						<dd>150g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>オリーブオイル</dt>
						<dd>大さじ3</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>白ワイン</dt>
						<dd>1/4カップ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>スパゲッティ</dt>
						<dd>320g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩</dt>
						<dd>適量</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>あさりは<a href="recipe-technic14.php" class="recipe-design__link">砂抜き</a>して、よく洗います。にんにくは芽をのぞき、薄切りにします。キャベツは<strong>ひと口大</strong>に切ります。</span></li>
						<li class="recipe-design__howto-item"><span>深めのフライパン（または浅い鍋）にオリーブオイル、「1」のにんにくを入れて<a href="recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で熱し、香りがたったら、「1」のあさりと白ワインを加えます。火を強めてふたをし、あさりの口が開くまで蒸し煮にします。</span></li>
						<li class="recipe-design__howto-item"><span>大きめの鍋に湯を沸かし、湯に対して<strong>1%の塩</strong>※を加えてスパゲッティを茹でます。<strong>茹で上がりの2分前</strong>に「1」のキャベツを加えます。</span></li>
						<li class="recipe-design__howto-item"><span>「2」のフライパンに「3」の茹で汁を<strong>おたま1杯分</strong>ほど加えて混ぜます。</span></li>
						<li class="recipe-design__howto-item"><span>「3」のスパゲッティとキャベツを加えてからめ、塩で味をととのえます。</span></li>
					</ol>
					※例えば1ℓのお湯に対し、塩は約10g（小さじ2）入れます。
				</div>
				<div class="recipe-design__point mb6">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">あさりの<a href="recipe-technic14.php" class="recipe-design__link">砂抜き</a>は、あさりを塩水につけ、購入したあさりの場合、常温で30分以上、潮干狩りで獲ったあさりの場合、常温で5〜6時間ほどおきます。潮干狩りで獲ったあさりは、<a href="recipe-technic14.php" class="recipe-design__link">塩抜き</a>も忘れずに行ないましょう。スパゲッティは表示の1分前に茹で上げ、ソースとからめている間にちょうど良い茹で加減に仕上がるようにしましょう。茹で上がりの目安は1本つまみ、しんなりと曲がるくらいが理想です。</p>
				</div>
			</div>

			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>んん～～あさりの旨味がたまらないな～<br>パスタをササっと作れる男になりたかったんですよー！</p>
				</div>
			</div>

			<div class="recipe-icn mayu_01">
			 	<div class="inner">
			 		<p>シンプルなレシピなので、ぜひササっと作ってあげてください<br>今回のレシピはパスタを入れずに「あさりとキャベツの白ワイン蒸し」として<br class="u-only__pc">お酒のおつまみにもなるんですよ♪</p>
			 	</div>
			</div>

			<div class="recipe-icn masaki_01">
			 	<div class="inner">
			 		<p>うわぁ！それいいですね！<br>冷えた白ワインと合いそうですよね<br>ママも喜ぶだろうなぁ～</p>
			 	</div>
			</div>

			<div class="recipe-icn mayu_01">
			 	<div class="inner">
			 		<p><a href="recipe-technic14.php" class="recipe-design__link">あさりの砂抜きと塩抜き</a>も忘れずに行なってくださいね♪</p>
			 	</div>
			</div>

		</div>

			<hr class="recipe__line">

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">今回の潮干狩りは天気も良くて、たくさんあさりを獲ることができたの！パパのパスタもあさりたっぷりで、あさりの旨味を楽しめる料理だったな～。コウちゃんにも、自分で獲ったものを食べるという経験をさせてあげられてよかった♪</p>
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
