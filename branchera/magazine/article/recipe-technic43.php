<?php
//base
include( "../../function.php" );
$content = get_id_data( '15043' );
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

//キャプチャALTタグ
$altCap01 = '塩、砂糖、酢を混ぜて、すし酢を作ります。';
$altCap02 = 'ボウルに炊き立てご飯を入れ、すし酢をしゃもじで数回に分け回し入れます。その後、ご飯を切るようにして混ぜ合わせましょう。ボウルを使用する場合はすし酢が下に溜まりやすくなるため、下から上にひっくり返すようにしてください。';
$altCap03 = 'うちわで風を送り、酢飯を冷ましていきます。しゃもじで酢飯を上下に返しながら、全体が人肌ほどの温度になるまであおぎましょう。';
$altCap04 = '混ぜ合わせたら、酢飯を広げます。';
$altCap05 = '人肌くらいまで冷ましたら、濡れふきんをボウルにかぶせて、使用するまで常温に置きます。濡れふきんをかぶせることで乾燥を防ぎます。';
$altCap06 = '';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
		include( $inc_path . "/lib/inc/pan.php" );
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
		?>
		<section class="main__wrapper recipe">
			<div class="recipe__header recipe-header technic">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">　</span>
					<span class="recipe-header__ttl">簡単！酢飯の作り方</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第43回は「酢飯の作り方」です。基本の酢飯の作り方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>マユ先生、聞いてください！<br>昨日、久しぶりに手巻き寿司を作ったのですが、<br class="u-only__pc">酢飯がべたついてしまったんです…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>お寿司にも使える酢飯は子どもにも大人にも大人気ですが、<br class="u-only__pc">失敗しやすいもののひとつかもしれません</p>
				</div>
			</div>

			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>レシピ通りに作ったのですが、なぜか失敗しちゃって…<br>作り方が間違っているのでしょうか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>今回は、酢飯作りのポイントを押さえて、作っていきましょう！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/VCa3spq57NI?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">基本の酢飯の作り方</h3>
				<p class="mb3">市販のすし酢に頼らず、家庭でおいしい酢飯を作る方法をご紹介します。</p>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">酢飯作りに必要な道具</h3>
					<dl class="recipe-design__tools">
						<dt>飯台（はんだい）/ボウル</dt>
						<dd><p>飯台は酢飯を作るための木桶です。木が水分を適度に吸収し、ご飯のべたつきを防いで美味しく仕上げてくれます。</p><p>飯台がない場合は、大きめのボウルで代用できます。ボウルは水分を吸収しない素材ですが、少しずつ酢を加えていくことでべたつきを軽減できます。今回はどのご家庭にもあるボウルを使って酢飯を作っていきます。</p></dd>
					</dl>
					<dl class="recipe-design__tools">
						<dt>しゃもじ</dt>
						<dd>酢飯を混ぜたり、よそったりするときに使う道具です。使う前に水で濡らすと、ご飯粒が付きにくくなります。</dd>
					</dl>
					<dl class="recipe-design__tools">
						<dt>うちわ</dt>
						<dd>酢飯の粗熱を取るときに使います。熱いご飯をあおいで急速に冷ますことで、つやのあるおいしい酢飯に仕上がります。</dd>
					</dl>
					<dl class="recipe-design__tools">
						<dt>ふきん</dt>
						<dd>できあがった酢飯には、濡らして絞ったふきんをかけておきます。蓋やラップではなくふきんを使うことで、酢飯が乾燥したり、必要以上に蒸れたりするのを防ぐことができます。</dd>
					</dl>
				</div>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">酢飯の材料</h3>
					<dl class="recipe-design__materials">
						<dt>炊き立てご飯<br><sumall class="u-small">※酢飯用のご飯は、すし酢を合わせる分だけ少し硬めに炊き上げるのがおすすめ</sumall></dt>
						<dd>3合分</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩（自然塩）</dt>
						<dd>小さじ1と1/2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>砂糖</dt>
						<dd>大さじ2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>酢</dt>
						<dd>大さじ5</dd>
					</dl>
				</div>
				<div class="recipe-design__howto mb3">
					<h3 class="recipe__ttl">すし酢の作り方</h3>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap01); ?>
						</dd>
					</dl>
					<div class="recipe-design__check check mb3">
						<div class="check__row">
							<div class="check__ttl">
								<h4 class="check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
									alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
								</h4>
							</div>
							<h5>ご飯の量に対する酢・塩・砂糖の割合</h5>
							<p>ご飯の量に合わせた、すし酢の配合比は次の通りです。</p>
							<ul class="u-list__ul">
								<li>1合分：酢大さじ1と2/3、砂糖小さじ2、塩小さじ1/2</li>
								<li>2合分：酢大さじ3と1/3、砂糖小さじ4、塩小さじ1</li>
							</ul>

						</div>
					</div>
					<div class="recipe-design__check check mb3">
						<div class="check__row">
							<div class="check__ttl">
								<h4 class="check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
									alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
								</h4>
							</div>
							<h5>酢の種類はお好みで</h5>
							<p>すし酢に使うお酢は米酢がおすすめですが、さっぱりした風味の穀物酢、まろやかさが特長の黒酢もすし酢に使うことができます。お好みに合わせて使い分けてみてください。また、江戸前寿司の茶色い酢飯には、酒かすを原料とする赤酢が使われています。</p>

						</div>
					</div>
					<h3 class="recipe__ttl">ご飯とすし酢の混ぜ方</h3>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap03); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/tech43-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
						</dd>
					</dl>
					<h3 class="recipe__ttl_l mb0">酢飯の美味しいアレンジレシピ</h3>
					<p class="mb2">いろいろな美味しさが楽しめる、酢飯のアレンジレシピをご紹介します。</p>
					<div class="mb2">
						<h4>ひなまつりの寿司ケーキ</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular01@2x.jpg"
									alt="ひなまつりの寿司ケーキ" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>牛乳パックを型にして酢飯を固め、お好きな海鮮や<a href="<?php echo $base_url?>/magazine/article/recipe-technic37.php" class="recipe-design__link">錦糸卵</a>、菜の花をのせると、華やかなひなまつり寿司ケーキに。ひなまつりはもちろん、パーティーのときにも役立つメニューです。<br>※詳しい作り方は、「<a href="<?php echo $base_url?>/magazine/article/recipe16.php" class="recipe-design__link">簡単かわいい！ひなまつりのケーキ寿司</a>」をご覧ください。</p>
					</div>
					<div class="mb2">
						<h4>酢飯チャーハン</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular02@2x.jpg"
									alt="酢飯チャーハン" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>卵、ねぎ、ハムなどお好みの具材と一緒に炒めるだけ。酢飯を炒めると酢の酸味が飛び、まろやかな味わいに仕上がります。</p>
					</div>
					<div class="mb2">
						<h4>酢飯おにぎり</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular03@2x.jpg"
									alt="酢飯おにぎり" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>暑い日もさっぱりいただける酢飯の<a href="<?php echo $base_url?>/magazine/article/recipe-technic21.php#sankaku-onigiri" class="recipe-design__link">おにぎり</a>は、夏場のお弁当におすすめです。刻んだ大葉やきゅうり、鮭フレーク、うめ、しらすなど、さまざまな種類を楽しんで。</p>
					</div>
					<div class="mb2">
						<h4>海鮮丼</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular04@2x.jpg"
									alt="海鮮丼" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>酢飯があれば、豪華な海鮮丼を家庭でも簡単に楽しめます。まぐろやサーモンなど、お好みの具材を酢飯の上に盛るだけ。刻み海苔や大葉を添えると、より美味しくいただくことができます。</p>
					</div>
					<div class="mb2">
						<h4>酢飯のそぼろ丼</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular05@2x.jpg"
									alt="酢飯のそぼろ丼" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>定番のそぼろ丼も、酢飯で作るとさっぱり仕上がり意外な美味しさ。鶏ひき肉と卵のそぼろを酢飯の上にのせ、彩りに三つ葉や絹さやを添えます。</p>
					</div>
					<div class="mb2">
						<h4>酢飯のいなり寿司</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/43/technic43_popular06@2x.jpg"
									alt="酢飯のいなり寿司" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>酢飯を<a href="<?php echo $base_url?>/magazine/article/recipe-technic21.php#tawara-onigiri" class="recipe-design__link">俵型</a>に握り、甘く煮た油揚げで包めば、いなり寿司のできあがり。酢飯にゆかりや紅しょうがなどを混ぜてアレンジするほか、油揚げの口を開いた「オープンいなり」にしてえびやサーモンなどを彩りよくのせれば、おもてなしにもピッタリです。</p>
					</div>

					<div>
						<h3 class="recipe__ttl_l mb0">余った酢飯の保存方法とは？</h3>
						<p>余った酢飯を冷蔵庫で保存すると、パサついて風味が落ちてしまいます。すぐに食べきれない場合は、1食分ずつ小分けにしてラップに包み、冷凍庫で保存しましょう。解凍するときは、電子レンジで温めるか、常温に置いて解凍します。</p>
						<p>解凍した酢飯は酢の風味が飛んでしまうため、そのままお寿司などに使うのではなく、火を通しチャーハンなどにして食べるのがおすすめですよ。</p>
					</div>

				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>ほどよい酸味が、爽やかで美味しいです！<br>この酢飯で、今度のひなまつりパーティーの<br class="u-only__pc">持ち寄り料理も作れそう！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ひなまつりパーティーをするんですね！</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>そうなんです！<br>パーティーは小さい子も来るのですが、<br class="u-only__pc">酢飯って何歳から食べられるのでしょうか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>子どもによって個人差はありますが、<br class="u-only__pc">酢飯は一般的に1歳くらいから<br class="u-only__pc">食べることができるようですよ</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ただ、子どもの好き嫌いや<br class="u-only__pc">すし酢の量によっても変わってくるので、<br class="u-only__pc">様子を見ながら与えるのがいいかと思います！</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>なるほど！今度ひなまつりパーティーに持って行く<br class="u-only__pc">お料理のレシピもこの酢飯を使ったものにしたいなぁ<br>今日は、帰ったらこの酢飯でコウちゃんと一緒に<br class="u-only__pc">手巻き寿司を作ろうと思います♪</p>
				</div>
			</div>
			<div class="mb0">
				<?php
				include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
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
