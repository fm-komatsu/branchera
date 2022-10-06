<?php
//base
include( "../../function.php" );
$content = get_id_data( '14011' );
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
					<span class="recipe-header__num">第11話</span>
					<span class="recipe-header__ttl">ハロウィンにピッタリな2つのシュウマイレシピ</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">今日、保育園でハロウィンのイベントがあったみたいで、コウちゃんもおばけのコスプレを気に入ったみたい♪ハロウィン用のレシピを作ってあげたいけど、キャラご飯なんて作ったことないしな～…。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe__row">
				<div class="recipe-icn kou_04">
					<div class="inner">
						<p>とりっくあーとりーと！！</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>可愛らしいおばけさん<br>はい、<a href="<?php echo($base_url) ?>/magazine/article//recipe-collect04.php" class="recipe-design__link">お菓子</a>どーぞ</p>
					</div>
				</div>
				<div class="recipe-icn kou_04">
					<div class="inner">
						<p>ありがとー♪</p>
					</div>
				</div>
				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>昨日、保育園でハロウィンのイベントがあったんですけど<br class="u-only__pc">出し物でコウちゃんがおばけ役をやって<br class="u-only__pc">すっかりおばけコスプレにハマっちゃって…</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>ハロウィン<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect06.php" class="recipe-design__link">パーティー</a>いいですね♪<br>そうしたら、可愛いおばけさんと<br class="u-only__pc">今日は料理教室で、ハロウィンパーティーをしましょうか！</p>
					</div>
				</div>
				<div class="recipe-icn kou_04">
					<div class="inner">
						<p>はろうぃんぱーてぃー！？</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>いつものシュウマイを<br class="u-only__pc">ハロウィンレシピにアレンジしてみましょう！<br>おばけさんも一緒に手伝ってね</p>
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
						<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第11回は、肉汁がジュワっと口に広がる「肉シュウマイ」の作り方をご紹介します。タネを変えるだけで、いろんなアレンジができるので、ぜひチェックしてくださいね。</p>
					</div>
					<div class="recipe-movie__video">
						<div class="recipe-movie__video_base">
							<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/5TVTUerX7B0?rel=0" frameborder="0"
							 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">肉シュウマイ</h3>
					<div class="recipe-design__material">
						<h4 class="recipe__ttl">材料（4人分）　調理時間目安：30分</h4>
						<dl class="recipe-design__materials">
							<dt>豚ひき肉</dt>
							<dd>300g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>玉ねぎ</dt>
							<dd>1/2個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>しいたけ</dt>
							<dd>2個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>片栗粉</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>醤油</dt>
							<dd>大さじ1/2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>ごま油</dt>
							<dd>小さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>酒</dt>
							<dd>小さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>こしょう</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>シュウマイの皮</dt>
							<dd>24枚</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>キャベツ</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>醤油</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>からし</dt>
							<dd>好みで適量</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h4 class="recipe__ttl">作り方</h4>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>玉ねぎは<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にして、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic27.php" class="recipe-design__link">しいたけ</a>は石づきをのぞき、みじん切りにする。</span></li>
							<li class="recipe-design__howto-item"><span>ボウルに豚ひき肉、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>、醤油、ごま油、酒、塩、こしょう、「1」を加え、<strong>粘りが出るまで</strong>よく混ぜます。</span></li>
							<li class="recipe-design__howto-item"><span><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic18.php" class="recipe-design__link">千切りキャベツ</a>を敷いた耐熱皿を用意します。</span></li>
							<li class="recipe-design__howto-item"><span>親指と人差し指で輪を作ってシュウマイの皮を置き、皮の上に「2」のタネ<strong><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">1/24量（大さじ1程度）</a></strong>をのせて、スプーンやヘラで整えながら詰めていきます。</span></li>
							<li class="recipe-design__howto-item"><span>間隔を空けるようにして「3」の耐熱皿に「4」のシュウマイを並べます。</span></li>
							<li class="recipe-design__howto-item"><span>鍋に蒸し目皿を置き、水を<strong>3cmほど</strong>入れて、<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>と<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間で沸騰させます。</span></li>
							<li class="recipe-design__howto-item"><span>沸騰させたら一旦火を止めて、タネを並べた耐熱皿を置きます。（数回に分けて蒸します。）</span></li>
							<li class="recipe-design__howto-item"><span>大きめの布巾や手ぬぐいなどで包んだフタをしめます。再び<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>と<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間で沸騰させ、8分ほど蒸します。やけどに注意して皿ごと取り出し、好みで醤油、からしを添えます。</span></li>
						</ol>
					</div>
					<div class="flex flex_around center">
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_finish01@2x.jpg"
							alt="肉シュウマイ 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_finish02@2x.jpg"
							alt="肉シュウマイ 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
					</div>
					<h4>今さら聞けない料理の基本</h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic30.php" class="u-icon">第30回　蒸し器の使い方</a></li>
					</ul>
					<div class="recipe-design__point mb6">
						<h3 class="recipe__ttl">ワンポイント</h3>
						<p class="recipe-design__point-item">味を付けたひき肉と玉ねぎを混ぜ合わせたら、すぐに皮で包んで蒸し上げましょう！<br>クッキングシートの代わりにキャベツを敷きましたが、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic111.php" class="recipe-design__link">白菜</a>を敷いてもＯＫです。</p>
					</div>
				</div>
				<div class="recipe__movie recipe-movie">
					<h3 class="recipe-movie__ttl" id="pumpkin_dumplings">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl@2x.png"
						alt="マユ先生のレシピ" style="max-width:159px" class="u-img__max">
					</h3>
					<div class="recipe-movie__overview">
						<figure class="recipe-movie__overview_icn">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe@2x.png"
							alt="マユ先生" style="width:114px" class="u-img__max">
						</figure>
						<p class="recipe-movie__overview_txt">第11回の肉シュウマイのアレンジレシピ「ミイラのかぼちゃシュウマイ」をご紹介します。<br>ハロウィンにピッタリなのでお子さまと一緒にぜひ作ってくださいね♪</p>
					</div>
					<div class="recipe-movie__video">
						<div class="recipe-movie__video_base">
							<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/0XJUisbS5Cw?rel=0" frameborder="0"
							gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">ミイラのかぼちゃシュウマイ</h3>
					<div class="recipe-design__material">
						<h4 class="recipe__ttl">材料（4人分）</h4>
						<dl class="recipe-design__materials">
							<dt>豚ひき肉</dt>
							<dd>200g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>かぼちゃ（種とワタをのぞいたもの）</dt>
							<dd>150g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>玉ねぎ</dt>
							<dd>1/2個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>片栗粉</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>醤油</dt>
							<dd>大さじ1/2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>ごま油</dt>
							<dd>小さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>酒</dt>
							<dd>小さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>こしょう</dt>
							<dd>少々</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>シュウマイの皮</dt>
							<dd>24枚</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>スライスチーズ</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>焼き海苔</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>醤油</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>からし</dt>
							<dd>好みで適量</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h4 class="recipe__ttl">作り方</h4>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic63.php" class="recipe-design__link">かぼちゃ</a>は<strong><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic31.php#hitokuchi" class="recipe-design__link">ひと口大</a></strong>に切り、水にくぐらせてから耐熱皿に並べ、ラップをして電子レンジ<strong>600Wで3分</strong>加熱します。</span></li>
							<li class="recipe-design__howto-item"><span>加熱したら熱いうちに<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic67.php#hitokuchi" class="recipe-design__link">フォークなどで潰し</a>、粗熱をとっておきます。</span></li>
							<li class="recipe-design__howto-item"><span>玉ねぎは<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>にします。</span></li>
							<li class="recipe-design__howto-item"><span>ボウルに豚ひき肉、片栗粉、醤油、ごま油、酒、塩、こしょう「2」、「3」、を加え、粘りが出るまでよく混ぜます。</span></li>
							<li class="recipe-design__howto-item"><span>タネを<strong>1/12量（ピンポン玉ぐらい）</strong>ずつ丸めます。</span></li>
							<li class="recipe-design__howto-item"><span>シュウマイの皮は<strong>3mm幅に細切り</strong>にして、タネに皮をまぶします。</span></li>
							<li class="recipe-design__howto-item"><span>クッキングシートを敷いた耐熱皿にタネを並べます。</span></li>
							<li class="recipe-design__howto-item"><span>鍋に蒸し目皿を置き、水を<strong>3cm</strong>ほど入れて、<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>と<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間で沸騰させます。<br>間隔をあけるようにして「6」を並べます。<br>沸騰させたら一旦火を止めて、タネを並べた耐熱皿を置きます。</span></li>
							<li class="recipe-design__howto-item"><span>再び<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>と<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間で沸騰させ、<strong>12分ほど</strong>蒸します。（数回に分けて蒸す。）</span></li>
							<li class="recipe-design__howto-item"><span>蒸している間に、目玉を作ります。焼き海苔はハサミなどを使って、スライスチーズはストローなどを使って作ります。</span></li>
							<li class="recipe-design__howto-item"><span>やけどに注意して皿ごと取り出し、「10」の目玉を装飾します。好みで醤油、からしを添えます。</span></li>
						</ol>
					</div>
					<div class="flex flex_around center">
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_arrange01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_arrange01@2x.jpg"
							 alt="ミイラのかぼちゃシュウマイ 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_arrange02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/11/recipe11_arrange02@2x.jpg"
							 alt="ミイラのかぼちゃシュウマイ 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
					</div>
				</div>
				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>ミイラさん、おいしい～！</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic63.php" class="recipe-design__link">かぼちゃ</a>のやさしい甘みがプラスされて、子どもでも食べやすいですね♪<br>キャラご飯を作るのって、細かい作業が多そうで<br class="u-only__pc">チャレンジしたことがなかったんですけど、みんなで作ると楽しいですね！</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>シュウマイの簡単な包み方は、手を筒のようにして<br class="u-only__pc">筒の上にシュウマイの皮をのせます<br>皮の上にタネを乗せてスプーンで上から肉を押さえ<br class="u-only__pc">回しながら包むとキレイに包めますよ</p>
					</div>
				</div>
			</div>
			<hr class="recipe__line">
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">今回「ミイラのかぼちゃシュウマイ」で、初めてハロウィンレシピに挑戦したんだけど、作ってる時も楽しかったな～。ひとつひとつ違った表情のミイラができて、コウちゃんも楽しめたみたいでよかった♪</p>
			</div>
			<div class="mb0">
				<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-footer.php"); ?>
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
