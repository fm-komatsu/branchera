<?php
//base
include( "../../function.php" );
$content = get_id_data( '14010' );
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
					<span class="recipe-header__num">第10話</span>
					<span class="recipe-header__ttl">シーフードパエリア</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">料理教室に通うようになってから、料理への意識もだんだん変わってきて、「本格的な料理にも挑戦したい！」って思えるようになってきたんだ！今度、久しぶりにじぃじとばぁばが遊びに来るのだけれど、もうすぐばぁばのお誕生日だし、せっかくだからとっておきのおもてなし料理を作ってあげたいな♪</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe__row">
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>ママ、週末じぃじとばぁばが来る予定だけど、<br class="u-only__pc">ばぁばのお誕生日も近いし、ご飯どうしようか？</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>いつもお祝いの時って、お寿司の出前か焼肉だよね？<br>せっかく料理教室に通っていることだし、<br class="u-only__pc">今年はお家で、おもてなし料理でも作りたいな</p>
					</div>
				</div>
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>そうだね～…<br>日頃の感謝を込めて、なにか作りたいね！</p>
					</div>
				</div>
				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>華やかな見た目で、みんなでワイワイ食べられる料理がいいよね<br>うーん…ダメだ…お鍋しか思いつかない</p>
					</div>
				</div>
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>よしっ！みんなでマユ先生にとっておきのパーティーレシピを<br class="u-only__pc">教えてもらいに行こうか！</p>
					</div>
				</div>
				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>コウちゃんも、じぃじとばぁばにつくる～！</p>
					</div>
				</div>
				<div class="recipe__movie recipe-movie">
					<h3 class="recipe-movie__ttl">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl@2x.png"
						 alt="マユ先生のレシピ" style="max-width:159px" class="u-img__max">
					</h3>
					<div class="recipe-movie__overview">
						<figure class="recipe-movie__overview_icn">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe@2x.png"
							 alt="マユ先生" style="width:114px" class="u-img__max">
						</figure>
						<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第10話は、みなさまからのリクエストが多かった「パエリア」をご紹介します。魚介の旨味が凝縮したシーフードパエリア、ぜひ試してみてくださいね。</p>
					</div>
					<div class="recipe-movie__video">
						<div class="recipe-movie__video_base">
							<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/neA8H0kRM_o?rel=0" frameborder="0"
							 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">シーフードパエリア</h3>
					<div class="recipe-design__material">
						<h3 class="recipe__ttl">材料（4人分/直径20cmのフライパン1台分）　調理時間目安：40分</h3>
						<dl class="recipe-design__materials">
							<dt>お米</dt>
							<dd>1.5合</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>えび（殻付き）</dt>
							<dd>8尾</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/4</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>こしょう</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>あさり（<a href="recipe-technic14.php" class="recipe-design__link">砂抜き</a>済み）</dt>
							<dd>70ｇ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>にんにく（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>）</dt>
							<dd>1かけ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>玉ねぎ（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>）</dt>
							<dd>1/2個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>パプリカ（赤・黄）</dt>
							<dd>各1/8個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>白ワイン</dt>
							<dd>1/4カップ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>水</dt>
							<dd>250ml</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>顆粒ブイヨン</dt>
							<dd>小さじ1/2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/4</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>オリーブオイル</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>イタリアンパセリ（粗みじん切り）</dt>
							<dd>あれば適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>レモン（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>）</dt>
							<dd>1/2個分</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h3 class="recipe__ttl">作り方</h3>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>えびは竹串などで、<strong>殻付きのまま</strong>背わたを除き、分量外の塩（適量）をもみ込んだ後、水洗いして水気を取ります。塩、こしょうをふって全体になじませます。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic14.php" class="recipe-design__link">砂抜き</a>済みのあさりは殻と殻をこすりながら水で洗います。</span></li>
							<li class="recipe-design__howto-item"><span>パプリカはひとくち大の<a href="<?php echo($base_url)?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>にします。</span></li>
							<li class="recipe-design__howto-item"><span>にんにくは芯を取り除き、薄切りにしてから<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>にします。玉ねぎは、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>にします。</span></li>
							<li class="recipe-design__howto-item"><span>フライパンを用意して、オリーブオイル、にんにくを入れて<strong><a href="recipe-technic02.php#yoawabi" class="recipe-design__link">弱火</a>で熱し</strong>、香りが立ってきたら玉ねぎを加えて<strong><a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>でしんなりするまで</strong>炒めます。しんなりしてきたらお米を加え、炒めてお米の色が透き通ったら、白ワインを加えて混ぜます。その後、水、顆粒ブイヨン、塩の順に加えてざっと混ぜます。</span></li>
							<li class="recipe-design__howto-item"><span>表面を平らにならし、お米のあたまが水面から見えるところまで煮詰めたら「1」のえび、あさり、「2」のパプリカを彩りよく並べます。
								</span></li>
							<li class="recipe-design__howto-item"><span>フタをして<strong><a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>のまま15分</strong>ほど炊きます</span></li>
							<li class="recipe-design__howto-item"><span>フタを外し、<strong><a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で30秒</strong>ほど加熱して、パチパチと音がしたら火を止めます。最後にイタリアンパセリをちらし、レモンを飾ります。</span></li>
						</ol>
					</div>
					<div class="flex flex_around center">
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_finish01@2x.jpg"
							 alt="シーフードパエリア 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_finish02@2x.jpg"
							 alt="シーフードパエリア 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
					</div>
					<div class="recipe-design__point mb6">
						<h3 class="recipe__ttl">ワンポイント</h3>
						<p class="recipe-design__point-item">最後にパチパチ音がするまで<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>をあてることで、フライパンの底に溜まったダシがおこげになって香ばしくなります。</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>ちなみに今回のアレンジレシピは、旬のきのこをたっぷり入れて作る「チキンときのこのパエリア」です。お子さまも喜ぶ鶏手羽中を使っているので、ぜひこちらも作ってみてくださいね！</p>
					</div>
				</div>
				<div class="flex flex_around center">
					<figure class="w50 mb2">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_arrange01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_arrange01@2x.jpg"
						 alt="アレンジレシピ チキンときのこのパエリア" style="max-width:362px" class="u-img__max">
					</figure>
					<figure class="w50 mb2">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_arrange02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/10/recipe10_arrange02@2x.jpg"
						 alt="アレンジレシピ チキンときのこのパエリア" style="max-width:362px" class="u-img__max">
					</figure>
				</div>
				<div class="recipe__design recipe-design" id="paella">
					<h3 class="recipe__ttl_l">アレンジレシピ【チキンときのこのパエリア】</h3>
					<h4 class="recipe__ttl">材料（4人分）</h4>
					<div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>お米</dt>
							<dd>1.5合</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>鶏手羽中</dt>
							<dd>8本</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/4</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>粗挽き黒こしょう</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>にんにく（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri"		 class="recipe-design__link">みじん切り</a>）</dt>
							<dd>1かけ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>玉ねぎ（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>）</dt>
							<dd>1/2個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>マッシュルーム</dt>
							<dd>3個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>エリンギ</dt>
							<dd>1本</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>舞茸</dt>
							<dd>1/2パック</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>白ワイン</dt>
							<dd>1/4カップ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>水</dt>
							<dd>250ml</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>顆粒ブイヨン</dt>
							<dd>小さじ1/4</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/4</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>オリーブオイル</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>イタリアンパセリ（粗みじん切り）</dt>
							<dd>あれば適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>レモン（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>）</dt>
							<dd>1/2個分</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h4 class="recipe__ttl">作り方</h4>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>鶏手羽中は水気を取り、塩、粗挽き黒こしょうをふります。</span></li>
							<li class="recipe-design__howto-item"><span>マッシュルームはペーパーで汚れをふき取って、薄切りにします。エリンギは縦半分に切ってから薄切りにします。舞茸は小房に分けます。</span></li>
							<li class="recipe-design__howto-item"><span>フライパンにオリーブオイルを入れて、<strong><a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱し</strong>「1」の鶏手羽中を<strong>皮目から入れて</strong>焼きます。こんがりしたら裏返して焼き、一旦取り出します。（中まで火が通らなくてもOK）</span></li>
							<li class="recipe-design__howto-item"><span>フライパンの汚れをペーパーでふき取り、オリーブオイルを足して、にんにく、玉ねぎを加えて<strong><a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で炒めます</strong>。しんなりしてきたら、お米を加えてしっかりと炒めます。</span></li>
							<li class="recipe-design__howto-item"><span>お米が透き通ってきたら、白ワインを加えて混ぜます。その後、水、顆粒ブイヨン、塩の順に加えてざっと混ぜます。</span></li>
							<li class="recipe-design__howto-item"><span>表面を平らにならし、お米のあたまが水面から見えるところまで煮詰めたら、「2」のきのこ類、「3」の鶏手羽中を並べます。</span></li>
							<li class="recipe-design__howto-item"><span>フタをして、<strong><a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>のまま15分</strong>ほど炊きます</span></li>
							<li class="recipe-design__howto-item"><span>フタを外し、<strong><a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>で30秒</strong>ほど加熱して、パチパチと音がしたら火を止めます。最後にイタリアンパセリをちらし、レモンを飾ります。</span></li>
						</ol>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>魚貝のダシが染み込んだ、ご飯がたまらない♪</p>
					</div>
				</div>
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>これは、白ワインに合いそうだね</p>
					</div>
				</div>
				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>はやくじぃじとばぁばと、いっしょに食べたーい！</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>上手に作るポイントは、お米をスープの膜でおおいながら<br class="u-onky__pc">ギリギリまで煮つめることです！<br>また、最後にパチパチ音がするまで強火をあてて仕上げると、<br class="u-only__pc">フライパンの底に溜まった“だし”がおこげになって香ばしくなりますよ</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>美味しいパエリアを作って、じぃじとばぁばを喜ばせちゃおう♪</p>
					</div>
				</div>
			</div>
			<hr class="recipe__line">
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">今回は、はりきって2種類のパエリアを作っちゃった！じぃじとばぁばも「美味しい！」って言ってくれて、嬉しいな。コウちゃんの大好物にもなったし、また作ってあげよう♪</p>
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
