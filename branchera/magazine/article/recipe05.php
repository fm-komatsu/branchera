<?php
//base
include( "../../function.php" );
$content = get_id_data( '14005' );
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
					<span class="recipe-header__num">第5話</span>
					<span class="recipe-header__ttl">じゃがいもといんげんのペースト＆ハムのケークサレ</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">来週末、久しぶりにママ友たちと、我が家でランチ会をすることになったの♪今まではピザを頼んだりしていただけなんだけど…料理教室に通っていることもあって、つい調子にのったことを言っちゃったのよねぇ…</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>マユ先生ぇ～～！！<br>私ったら、余計なこと言っちゃいましたー…</p>
					</div>
				</div>

				<div class="recipe-icn mayu_03">
				 	<div class="inner">
				 		<p>ミ…ミエさん！？<br>どうしたんですか？そんなに慌てて…</p>
				 	</div>
				</div>

				<div class="recipe-icn mie_02">
				 	<div class="inner">
				 		<p>それが…来週末にうちでランチ会をするのですが、<br class="u-only__pc">ママ友たちから「料理教室のレシピを教えて！」と言われて、<br class="u-only__pc">つい「まかせといて！」なんて言ってしまいまして…</p>
				 	</div>
				</div>

				<div class="recipe-icn mayu_02">
				 	<div class="inner">
				 		<p>そうだったんですね…<br>でも、せっかくのランチ会なら、ママ友さんたちを驚かせるような<br class="u-only__pc">オシャレなお料理でおもてなしをしたいですね</p>
				 	</div>
				</div>

				<div class="recipe-icn mie_02">
				 	<div class="inner">
				 		<p>おもてなしか～…みんなで食べられるものが良いけれど、<br class="u-only__pc">子どもたちの中にはまだ離乳食の子もいるんですよね</p>
				 	</div>
				</div>

				<div class="recipe-icn mayu_01">
				 	<div class="inner">
				 		<p>離乳食……<br>子どももママも嬉しいレシピはいかがですか？<br>フランス料理でオシャレにおもてなししましょうよ♪</p>
				 	</div>
				</div>

				<div class="recipe-icn mie_03">
				 	<div class="inner">
				 		<p>フ…フランス料理～！？<br>さすがにそれは難しすぎますよー</p>
				 	</div>
				</div>

				<div class="recipe-icn mayu_01">
				 	<div class="inner">
				 		<p>いろんな調理器具を使うので、<br class="u-only__pc">ちょっと上級者向けに思うかもしれませんが、<br class="u-only__pc">きっと、ママ友さんたちを驚かせることができますよ！</p>
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
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第5回は、離乳食としてもお使いいただける「じゃがいもといんげんの野菜ペースト」と、さらにその野菜ペーストを活かした、おかず風ケーキ「ケークサレ」にもチャレンジ。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/bZa7Vt77i30?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">じゃがいもといんげんのペースト</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（調理時間目安：30分）</h3>
					<dl class="recipe-design__materials">
						<dt>じゃがいも</dt>
						<dd>2個（約200g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>いんげん</dt>
						<dd>20本（約200g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>たまねぎ</dt>
						<dd>1/2個（約100g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>水</dt>
						<dd>大さじ5</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩</dt>
						<dd>ひとつまみ</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>じゃがいもは皮をむいて半分に切って薄切りにします。変色を防ぐため、<strong>10分～15分</strong>ほど水にさらして水気を切ります。いんげんは筋をのぞいて<strong>3等分</strong>に切ります。たまねぎは半分に切ってから、繊維と垂直に薄切りにします。</span></li>
						<li class="recipe-design__howto-item"><span>鍋にたまねぎ、いんげん、じゃがいもの順に入れて水と塩を加えます。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけ、煮立ったらふたをして<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で15分</strong>ほど蒸し煮にします。</span></li>
						<li class="recipe-design__howto-item"><span>火を止め、粗熱がとれたらミキサーなどでなめらかに攪拌（かくはん）し、ペーストにします。</span></li>
					</ol>
				</div>
				<div class="recipe-design__point mb6">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">鍋底にじゃがいもを入れると焦げやすくなるので、たまねぎ、いんげんが下になるように重ね入れましょう。また、ペーストは保存容器・保存袋に入れると冷蔵庫で5日、冷凍庫で1ヵ月の保存が可能です。</p>
				</div>
				<h3 class="recipe__ttl_l">じゃがいもといんげんのケークサレ</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（調理時間目安：50分）</h3>
					<dl class="recipe-design__materials">
						<dt>ロースハム（スライス）</dt>
						<dd>4枚（約70g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>卵</dt>
						<dd>2個</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>じゃがいもといんげんのペースト</dt>
						<dd>100g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>オリーブオイル</dt>
						<dd>大さじ3</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>パルメザンチーズ（すりおろし）</dt>
						<dd>60g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩</dt>
						<dd>ひとつまみ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：薄力粉</dt>
						<dd>100g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：ベーキングパウダー</dt>
						<dd>小さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>パセリ</dt>
						<dd>適量</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<p>下準備：オーブンは<strong>180℃</strong>に予熱します。パウンド型に敷紙を敷いておきます。</p>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>ロースハムは半分に切ってから細切りにします。パセリはみじん切りにします。</span></li>
						<li class="recipe-design__howto-item"><span>ボウルに卵を割り入れて溶きほぐし、オリーブオイル、じゃがいもといんげんのペースト、パルメザンチーズ、塩の順に加えて混ぜます。</span></li>
						<li class="recipe-design__howto-item"><span>「A」をふるい入れ、ゴムベラでさっくり混ぜます。「1」のロースハムを加えて混ぜ、型に流し入れ、平らにならしたあとに数回打ちつけて、空気を抜きます。「1」のパセリをちらします。</span></li>
						<li class="recipe-design__howto-item"><span>180℃に温めておいたオーブンで<strong>40分</strong>ほど焼きます。焼き上がったら型からはずし、網の上で冷まします。</span></li>
					</ol>
				</div>
				<div class="recipe-design__point">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">小麦粉を混ぜすぎてしまうとふくらみが悪くなったり、固くなったりしてしまうので、小麦粉を加えたら混ぜすぎないように注意しましょう。焼き上がりの確認の仕方は、竹串を刺してみてどろっとした生地がついてこなければ焼き上がりになります。下準備のパウンド型に敷紙を敷く方法は、まず型よりも大きめの敷紙を用意し、型に合わせて折り目をつけます。次に折り目に合わせて、ハサミで切り込みを入れて切り込み部分を折り込みながら、型にはめ込んたら完成です。</p>
				</div>
			</div>

			<div class="recipe-icn mama_friend01">
				<div class="inner">
					<p>すごぉーい！なんだかカフェみたい！<br>このケーキみたいなものは、なぁに？</p>
				</div>
			</div>

			<div class="recipe-icn mie_01">
			 	<div class="inner">
			 		<p>これは「ケークサレ」というフランス料理で<br class="u-only__pc">おかず風のケーキみたいなものなんだよ<br>余った野菜をポンポンと入れて作れちゃうから、<br class="u-only__pc">さくらちゃんも基本の作り方を覚えると、結構使えるかもよ～</p>
			 	</div>
			</div>

			<div class="recipe-icn mama_friend01">
			 	<div class="inner">
			 		<p>「ケークサレ」かぁ～何だか名前もオシャレだね<br>この野菜ペーストで作っているんだよね？</p>
			 	</div>
			</div>

			<div class="recipe-icn mie_01">
			 	<div class="inner">
			 		<p>そうそう、野菜ペーストは離乳食にも使えるし、<br class="u-only__pc">常備菜にもなるから便利だよ！</p>
			 	</div>
			</div>

			<div class="recipe-icn mama_friend01">
			 	<div class="inner">
			 		<p>うちの息子も、美味しそうにパクパク食べてる！<br>野菜ペーストの作り方、私にも教えて！</p>
			 	</div>
			</div>

			<div class="recipe-icn mie_02">
			 	<div class="inner">
			 		<p>う…野菜ペーストは、このあいだマユ先生が作ったものなんだけど…<br>ま、復習もかねてやってみよっかな！</p>
			 	</div>
			</div>

		</div>

			<hr class="recipe__line">

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">まさか私がオーブンを使った料理を作るなんて…！オーブンレンジを買ったものの、ずっとレンジ機能しか使っていなかったのに。でも、マユ先生の言った通り、みんなを驚かせることができて、ちょっと良い気分だったな♪</p>
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
