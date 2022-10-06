<?php
//base
include( "../../function.php" );
$content = get_id_data( '14001' );
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
					<span class="recipe-header__num">第1話</span>
					<span class="recipe-header__ttl">鶏と根菜の味噌バター炒め</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">私、ミエはパパと息子のコウちゃんと3人暮らし。<br>コウちゃんが保育園へ入園したこともあって、職場に復帰することになったんだけど。<br>仕事と家事の両立に慣れずに、ちょっと戸惑っているんだよね。<br>パパも手伝ってくれているんだけど…どうも、毎日同じようなレシピになってるような…。</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
						alt="ミエ（ママ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>ふぅ～重い重い！<br>1週間分の食料、買いこんだねー</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01@2x.png"
						alt="マサキ（パパ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>家に帰ったら、パパがスペシャルカレーつくるからなー<br>コウちゃん、カレー好きだもんな</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_kou_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_kou_01@2x.png"
						alt="コウちゃん"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>やったー！パパのカレーだいすき！</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
						alt="ミエ（ママ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>今日みたいに休日だと余裕あるけど<br>平日のご飯作り…もうちょっとなんとかしないとなー</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01@2x.png"
						alt="マサキ（パパ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>先週は肉野菜炒めが、とうとう週3だったよね…</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
						alt="ミエ（ママ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>さすがに味も一緒で、私も飽きてきたな…<br>ほかのママはどうしてるんだろう</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01@2x.png"
						alt="マサキ（パパ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>あれ？こんなところに新しい看板が…<br>ちょっと、見てココ！</p>
				</div>

				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
						alt="ミエ（ママ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>「お料理をもっと効率よく美味しく！料理教室“ハッピーキッチン”」！？<br>…ってこんな近くにお料理教室があったなんて！</p>
				</div>
				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_kou_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_kou_01@2x.png"
						alt="コウちゃん"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>おりょうりきょうしつ？</p>
				</div>
				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
						alt="ミエ（ママ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>お料理を教えてくれるところなんだよ<br>しかも、なんかうちの悩みにあってるね</p>
				</div>
				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png"
						alt="マユ先生"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>（ガチャ…）こんにちは！本日オープンしたんです<br>よかったら無料の体験レッスン受けてみませんか？</p>
				</div>
				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
						alt="ミエ（ママ）"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>えぇー！今からいいんですか！？<br>パパ行ってみようよ！</p>
				</div>
				<div class="recipe-talk">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png"
						alt="マユ先生"
						style="max-width:70px"
						class="u-img__max"
						>
					</figure>
					<p>ぜひ！お子さまも一緒にどうぞ♪</p>
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
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第１回の今回は、いつもの肉野菜炒めにちょっとアレンジを加えた簡単レシピをご紹介します。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/OVoBtIXhr4Y?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>


			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">鶏と根菜の味噌バター炒め</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（4人分）　調理時間目安：20分</h3>
					<dl class="recipe-design__materials">
						<dt>鶏もも肉</dt>
						<dd>小2枚（約400g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>れんこん</dt>
						<dd>小1節（約100g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ごぼう</dt>
						<dd>1/2本（約70g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>にんじん</dt>
						<dd>1/2本（約70g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>酒</dt>
						<dd>大さじ2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：合わせ味噌</dt>
						<dd>大さじ2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：はちみつ</dt>
						<dd>大さじ2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：醤油</dt>
						<dd>大さじ1/2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>バター</dt>
						<dd>20g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>油</dt>
						<dd>小さじ1/2</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>れんこんは皮をむき、1cm厚さの<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a></strong>または<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic11.php" class="recipe-design__link">いちょう切り</a></strong>にし、ごぼうは包丁の背で皮をこそぎ、ひとくち大の<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a></strong>にして、それぞれ水にさらして水気を切ります。にんじんは皮をむき、ひとくち大の<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a></strong>にします。</span></li>
						<li class="recipe-design__howto-item"><span>鶏肉は余分な脂をとりのぞき、1枚を<strong>8等分</strong>に切ります。</span></li>
						<li class="recipe-design__howto-item">「Ａ」を混ぜ合わせておきます。</li>
						<li class="recipe-design__howto-item"><span>フライパンに油を入れて<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a></strong>で熱し、鶏肉を皮目が下になるようにして入れ、こんがりと焼きます。</span></li>
						<li class="recipe-design__howto-item">裏返して焼き、色が変わったらフライパンの端によせて、「1」の野菜を加えて炒めます。</li>
						<li class="recipe-design__howto-item"><span>全体に油がまわったら酒をふり入れ、アルコールを飛ばしてフタをし、<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で5分ほど</strong>蒸し焼きにします。</span></li>
						<li class="recipe-design__howto-item">火が通ったらフタをとり、先ほどの混ぜ合わせた「Ａ」とバターを加えてからめます。とろみがついたら火を止め、器に盛って完成です。</li>
					</ol>
				</div>
				<div class="recipe-design__point">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">酒をふって蒸し焼きにすることでお肉もジューシーに、お野菜も柔らかく仕上がります。今回紹介したお野菜以外にも、れんこんの代わりに<strong>サツマイモ</strong>、にんじんの代わりに根菜ではありませんが彩りのよい<strong>パプリカ</strong>でも美味しく仕上がります。最後に刻んだ<strong>万能ねぎ</strong>を散らすのもオススメです。</p>
				</div>
			</div>

			<div class="recipe-talk">
				<figure>
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png"
					alt="マユ先生"
					style="max-width:70px"
					class="u-img__max"
					>
				</figure>
				<p>さぁ、どうぞ試食してみてください</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_kou_01.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_kou_01@2x.png"
					alt="コウちゃん"
					style="max-width:70px"
					class="u-img__max"
					>
				</figure>
				<p>おいしいーー！</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01@2x.png"
					alt="マサキ（パパ）"
					style="max-width:70px"
					class="u-img__max"
					>
				</figure>
				<p>美味しい！そして早い！<br>20分くらいでできちゃったよね！</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png"
					alt="ミエ（ママ）"
					style="max-width:70px"
					class="u-img__max"
					>
				</figure>
				<p>ほんと、美味しい！<br>ねぇ、パパ…2人でマユ先生の教室に通わない？</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_masaki_01@2x.png"
					alt="マサキ（パパ）"
					style="max-width:70px"
					class="u-img__max"
					>
				</figure>
				<p>うんうん！僕も通いたい<br>僕ら、これまでの料理、自己流なんですけど大丈夫ですか？</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png"
					alt="マユ先生"
					style="max-width:70px"
					class="u-img__max"
					>
				</figure>
				<p>もちろんです！<br>お料理の基本がわかる、基本ミニレッスンもあるので<br>ぜひ、そちらにもお越しください</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">ちょっとしたひと手間で、普段の肉野菜炒めがこんなに変わるなんて！<br>料理教室って通ったことないけれど、優しそうな先生だし、ここなら続けられそう。<br>これまで自己流だった包丁の使い方や、基本情報もしっかり勉強してみたいな。</p>
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
