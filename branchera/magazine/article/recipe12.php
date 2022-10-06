<?php
//base
include( "../../function.php" );
$content = get_id_data( '14012' );
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
					<span class="recipe-header__num">第12話</span>
					<span class="recipe-header__ttl">ローストビーフ</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">クリスマスパーティーまであと少し！今年はメインディッシュをなにか作ってみたいな～。パパもコウちゃんに何か作ってあげたいみたいだし、みんなクリスマスには何を作っているんだろう…</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe__row">
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>クリスマスの飾り付け、どうしようかな～<br>コウちゃんはどっちがいい？</p>
					</div>
				</div>
				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>おほしさまがいい～<br>あっ、マユせんせいだ！</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>コウちゃん、ミエさんこんにちは！<br>今日も冷えますね～<br>クリスマスの飾りものを探しているのですか？</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>そうなんです！<br>クリスマスパーティーに使う飾りものを探していたんです♪</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>クリスマスパーティー、いいですね！<br>どんなメニューを考えているのでしょうか</p>
					</div>
				</div>
				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>実はまだ、メインのお料理が決まっていないんです…<br>コウちゃんが生まれる前は、よくおしゃれなレストランのディナーで<br class="u-only__pc">ローストビーフを食べていましたけど、<br class="u-only__pc">今はコウちゃんがいるから、なかなかそういうわけにもいかず…</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>それなら、お家でおしゃれなディナーをしてみては？<br>お家なら、コウちゃんも一緒に楽しめますよね<br>せっかくのクリスマスですし、そのローストビーフなんていかがでしょう？</p>
					</div>
				</div>
				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>え！ローストビーフ？！<br>私に作れるのかな～…</p>
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
						<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第12回は、とっても簡単で本格的な「ローストビーフ」の作り方をご紹介します。やわらかくてジューシーなローストビーフ、ぜひ作ってみてくださいね！</p>
					</div>
					<div class="recipe-movie__video">
						<div class="recipe-movie__video_base">
							<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/IyfJYe18Itw?rel=0" frameborder="0"
							 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">ローストビーフ</h3>
					<div class="recipe-design__material">
						<h3 class="recipe__ttl">材料（4人分）　調理時間目安：20分（肉を室温に戻す時間、休ませる時間は除く）</h3>
						<dl class="recipe-design__materials">
							<dt>牛ももかたまり肉</dt>
							<dd>400g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>粗びき黒こしょう</dt>
							<dd>適量</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>オリーブ油</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>白ワイン</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>クレソン</dt>
							<dd>あれば適量</dd>
						</dl>
						<h4 class="u-ttl__s">【赤ワインソース】</h4>
						<dl class="recipe-design__materials">
							<dt>A：赤ワイン</dt>
							<dd>1/2カップ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：醤油</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：水</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：はちみつ</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：にんにく（すりおろし）</dt>
							<dd>1かけ分</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：バター</dt>
							<dd>10g</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h3 class="recipe__ttl">作り方</h3>
						<p>※下準備として、牛肉は室温に<strong>1時間</strong>ほど置いておきます。</p>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>肉は、塩・粗びき黒こしょうを全体にまぶします。</span></li>
							<li class="recipe-design__howto-item"><span>フライパンにオリーブ油を入れて熱し、牛肉を入れて、<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>と<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間で<strong>表面と裏面１分</strong>ずつ、<strong>その他の面を30秒</strong>ずつ焼きます。</span></li>
							<li class="recipe-design__howto-item"><span>焼き色がついたら、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#torobi" class="recipe-design__link">とろ火</a>の火加減にします。白ワインを加えフタをして、<strong>4分蒸し焼き</strong>にしたら一度裏返し、ふたたびフタをして<strong>4分蒸し焼き</strong>にします。</span></li>
							<li class="recipe-design__howto-item"><span>取り出してアルミホイルで1枚ずつ二重にしてしっかり包み、さらにふきん等で包んで、室温で<strong>1時間</strong>ほど置きます。（粗熱がとれたら冷蔵庫で寝かすとなお良いです）。</span></li>
							<li class="recipe-design__howto-item"><span>フライパンに余分な油があれば軽くふきとり、バター以外のソースの材料を入れて煮詰めます。<strong>4〜5分</strong>煮詰め、ソースが<strong>2/3量</strong>になったら火を止め、バターを加え混ぜながら溶かします。</span></li>
							<li class="recipe-design__howto-item"><span>「4」を薄く切って器に盛り、「5」のソース、クレソンなどを添えます。</span></li>
						</ol>
					</div>
					<div class="flex flex_around center">
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_finish01@2x.jpg"
							 alt="ローストビーフ 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_finish02@2x.jpg"
							 alt="ローストビーフ 完成画像" style="max-width:362px" class="u-img__max">
						</figure>
					</div>
					<div class="recipe-design__point mb6">
						<h3 class="recipe__ttl">ワンポイント</h3>
						<p class="recipe-design__point-item">ローストビーフは焼き時間が短く、調味料の浸透加減が弱いので、少し多めに塩、粗びき黒こしょうをしておくとお肉にしっかり味が付きます。<br>また、焼いた後は食べる直前まで冷蔵庫で寝かせると、旨みがいきわたり、より一層美味しく仕上がります。</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>今回紹介したレシピは、赤ワインソースを使いましたが、アップルオニオンソースに代えてみるのもオススメですよ。大人の味わいの赤ワインソースと違って、お子さまでも食べやすいソースになっています。</p>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">【アップルオニオンソースの作り方】</h3>
					<div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>りんご（すりおろし）</dt>
							<dd>30g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>玉ねぎ（すりおろし）</dt>
							<dd>20g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>にんにく（すりおろし）</dt>
							<dd>1かけ分</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>醤油</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>みりん</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>バター</dt>
							<dd>5g</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h4 class="recipe__ttl">作り方</h4>
						<p>上記の材料を大きめの耐熱容器に入れて混ぜ、電子レンジで、フタやラップをせずに<strong>600Wで1分30秒加熱</strong>したら完成です。</p>
					</div>
					<div class="flex flex_around center">
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_arrange01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_arrange01@2x.jpg"
							 alt="アップルオニオンソース" style="max-width:362px" class="u-img__max">
						</figure>
						<figure class="w50 mb2">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_arrange02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/12/recipe12_arrange02@2x.jpg"
							 alt="アップルオニオンソース" style="max-width:362px" class="u-img__max">
						</figure>
					</div>
					<div class="recipe-design__point">
						<h3 class="recipe__ttl">ワンポイント</h3>
						<p class="recipe-design__point-item">加熱する際、材料がふきこぼれる可能性があるので、大きめの耐熱容器を使用してください。</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>ん～♪柔らかくて美味しいー！<br>ローストビーフなんて、レストランでしか食べたことがなかったのに<br class="u-only__pc">お家で作れるなんて！</p>
					</div>
				</div>
				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>おにくおいしいー！</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>ソースを変えたら、コウちゃんも食べられそうですね<br>切ったときに、赤茶色の肉汁が出るんですけど、これってきちんと焼けていますか？</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>しっかり焼けているローストビーフでも<br class="u-only__pc">切った時に赤茶色の肉汁が多少出ます<br>でも、それは生焼けではないので心配はいりませんよ<br>おいしいローストビーフ、ぜひみなさんで食べてくださいね！</p>
					</div>
				</div>
			</div>
			<hr class="recipe__line">
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">クリスマスのメイン料理はこれで完璧！今年は、去年と違ったクリスマスパーティーになりそう。早くクリスマスにならないかな～…あ、今年のクリスマスケーキはどうしよう！</p>
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
