<?php
//base
include( "../../function.php" );
$content = get_id_data( '14007' );
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
					<span class="recipe-header__num">第7話</span>
					<span class="recipe-header__ttl">玉ねぎと干し桜えびのチーズチヂミ</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">最近、料理教室に通っているおかげで料理のレパートリーが少しずつ増えてきているの！いろいろな料理が作れるようになってきたのだけれど、レシピ通りに作っていると野菜やお肉が中途半端に余ることがあるのよね。そういう余りものの食材ってどうすればいいんだろう？</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-icn mie_03">
					<div class="inner">
						<p>あ！こんなところに半分の玉ねぎがー！</p>
					</div>
				</div>

				<div class="recipe-icn masaki_02">
					<div class="inner">
						<p>それ…この間、野菜炒めを作ったときの余りだ…<br>きのこスープも作ったからその余りもあるかも</p>
					</div>
				</div>

				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>そういえば…パパ<br>この前、カレーを作ったときに余ったにんじんが<br class="u-only__pc">ずっと冷蔵庫に入れっぱなしでシワシワになっていたよね</p>
					</div>
				</div>

				<div class="recipe-icn kou_02">
					<div class="inner">
						<p>にんじん？しわしわ？</p>
					</div>
				</div>

				<div class="recipe-icn masaki_02">
				 	<div class="inner">
				 		<p>そ、そんなこともあったね…<br>こういう中途半端な野菜やお肉って、<br class="u-only__pc">僕らみたいな料理修行中の身にはどうしたらいいかわからないよね～</p>
				 	</div>
				</div>

				<div class="recipe-icn mie_01">
				 	<div class="inner">
				 		<p>マユ先生だったら何を作るんだろう…<br>余りもの食材を使った節約レシピを聞いてこよっかな！</p>
				 	</div>
				</div>

				<div class="recipe-icn kou_01">
				 	<div class="inner">
				 		<p>コウちゃんもいっしょにいく～！</p>
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
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第7回は、冷蔵庫で余っている食材を、美味しく変身させるチヂミの作り方をご紹介します。いろいろな食材で作れる万能レシピなので、ぜひ試してみてくださいね。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/gSxSm_SAFBQ?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">玉ねぎと干し桜えびのチーズチヂミ</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（4人分）調理時間目安：20分</h3>
					<dl class="recipe-design__materials">
						<dt>玉ねぎ</dt>
						<dd>1/4個（約50g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>にんじん</dt>
						<dd>1/3本（約50g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>干し桜えび</dt>
						<dd>大さじ3（約10g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>白玉粉</dt>
						<dd>大さじ3</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>水</dt>
						<dd>1/4カップ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>薄力粉</dt>
						<dd>大さじ3</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>溶き卵</dt>
						<dd>1個分</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ピザ用チーズ</dt>
						<dd>50g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩</dt>
						<dd>ひとつまみ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>砂糖</dt>
						<dd>少々</dd>
					</dl>
					<dl class="recipe-design__materials mb3">
						<dt>ごま油</dt>
						<dd>大さじ1</dd>
					</dl>
					<h4>【たれ】</h4>
					<dl class="recipe-design__materials">
						<dt>A：醤油</dt>
						<dd>大さじ1/2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：米酢</dt>
						<dd>大さじ1/2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：白すりごま</dt>
						<dd>小さじ1</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>玉ねぎは薄切りにして、にんじんは皮をむいて、<a href="recipe-technic13.php#sengiri" class="recipe-design__link">千切り</a>にします。</span></li>
						<li class="recipe-design__howto-item"><span>ボウルに白玉粉を入れ、<strong>水を少しずつ分けて入れて</strong>ゴムベラでよく練ります。「1」と干し桜えびを加えて混ぜ合わせます。</span></li>
						<li class="recipe-design__howto-item"><span>薄力粉をふるい入れて、混ぜた後に溶き卵、ピザ用チーズ、塩、砂糖を加えて混ぜます。</span></li>
						<li class="recipe-design__howto-item"><span>フライパンにごま油を<strong>半量</strong>入れて<strong><a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a></strong>で熱し、「3」を流し入れて広げます。ヘラで押さえつけながら、こんがりとするまで焼きます。<br>※ここでは直径25cmのフライパンで焼いています</span></li>
						<li class="recipe-design__howto-item"><span>焼き目がこんがりしたら、裏返して、残りのごま油をフライパンの<strong>ふちから回し入れて</strong>、ヘラで押さえつけながら焼いていきます。</span></li>
						<li class="recipe-design__howto-item"><span>こんがり焼けたら、取り出して格子状に食べやすい大きさに切って器に盛ります。</span></li>
						<li class="recipe-design__howto-item"><span>「A」をすべて混ぜ合わせて添えます。</span></li>
					</ol>
					<h4>今さら聞けない料理の基本</h4>
					<ul class="u-list__ul">
						<li><a href="recipe-technic12.php" class="u-icon">第12回　計量の仕方</a></li>
						<li><a href="recipe-technic13.php" class="u-icon">第13回　千切りの方法</a></li>
					</ul>
				</div>
				<div class="recipe-design__point mb6">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">白玉粉はダマになりやすいので、少しずつ水を加えて溶き、よく練りましょう。<br>ご紹介したたれに、コチュジャンを小さじ1程度加えると、大人向きのピリ辛なたれになります。</p>
				</div>
			</div>

			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ちなみに、今日のレシピは余りものを使った節約レシピなので、<br class="u-only__pc">食材を変えても、美味しいんですよ<br>例えば、ちょっと余った冷凍食品を使ってもOKです！</p>
				</div>
			</div>
			<div class="flex flex_around center">
				<figure class="w50 mb2">
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/07/recipe07_arrange01.jpg"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/07/recipe07_arrange01@2x.jpg"
					alt="アレンジレシピ シーフードといんげんのチーズチヂミ"
					style="max-width:362px"
					class="u-img__max">
				</figure>
				<figure class="w50 mb2">
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/07/recipe07_arrange02.jpg"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/07/recipe07_arrange02@2x.jpg"
					alt="アレンジレシピ シーフードといんげんのチーズチヂミ"
					style="max-width:362px"
					class="u-img__max">
				</figure>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">アレンジレシピ<br>シーフードといんげんのチーズチヂミ</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（4人分）</h3>
					<dl class="recipe-design__materials">
						<dt>冷凍シーフードミックス</dt>
						<dd>100g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>冷凍いんげん</dt>
						<dd>100g</dd>
					</dl>
					<p>玉ねぎ、にんじん、干し桜えびの代わりに冷凍シーフードミックスと冷凍いんげんを使用します。その他の材料の変更はありません。</p>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>冷凍シーフードミックスは熱湯を回しかけ、ペーパーで水気をふき取ります。冷凍いんげんは流水解凍し、<strong>3等分</strong>に切って、ペーパーで水気をふき取ります。</span></li>
						<li class="recipe-design__howto-item"><span>「2」以降は「玉ねぎと干し桜えびのチーズチヂミ」と同じ作り方でOK！</span></li>
					</ol>
				</div>
			</div>

			<div class="recipe-icn mie_01">
			 	<div class="inner">
			 		<p>わぁ！余りものの冷凍食品でもう1品できちゃった！<br>他にどんな食材でアレンジできますか？</p>
			 	</div>
			</div>

			<div class="recipe-icn mayu_01">
			 	<div class="inner">
			 		<p>少し残った野菜や肉、魚介類などでもアレンジできますよ<br>野菜なら、長ねぎ、ニラ、水菜、きのこ類、パプリカ、キムチなどを入れるのもオススメですよ！</p>
			 	</div>
			</div>

			<div class="recipe-icn kou_03">
			 	<div class="inner">
			 		<p>ママー！はやくしわしわでつくろう！</p>
			 	</div>
			</div>

			<div class="recipe-icn mie_02">
			 	<div class="inner">
			 		<p>コウちゃん…シワシワはやめてー！！</p>
			 	</div>
			</div>

		</div>

			<hr class="recipe__line">

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">冷蔵庫の余りもので、メインの料理が作れちゃうなんて！料理上手にまた一歩近づいた感じがするな。これからはせっかくの食材をムダにしちゃう前に、美味しく食べちゃおっと♪</p>
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
