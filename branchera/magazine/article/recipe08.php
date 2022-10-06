<?php
//base
include( "../../function.php" );
$content = get_id_data( '14008' );
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
					<span class="recipe-header__num">第8話</span>
					<span class="recipe-header__ttl">なす豚しゃぶのごまマヨ丼</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">料理教室のマユ先生のおかげで、私とパパはちょっとずつ新しいレシピにもチャレンジしているところなんだけど…最近の暑さにどうもやられちゃって、同じようなレシピばっかりなんだよね。今日は1日、パパとコウちゃんでお留守番なんだけど、夕飯の準備…大丈夫かな？</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe__row">
				<div class="recipe-icn kou_02">
					<div class="inner">
						<p>パパぁ～～あつい～<br>とけちゃいそうだね～</p>
					</div>
				</div>
				<div class="recipe-icn masaki_02">
					<div class="inner">
						<p>本当、持ってるアイスもとけちゃうぐらい暑いね～<br>こんなに暑いと今日の夜ご飯、何がいいのかわかんないな…</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>あれ、コウちゃん！マサキさんも、こんにちは！<br>今日も一段と暑いですね</p>
					</div>
				</div>
				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>あー！マユせんせい、こんにちは！</p>
					</div>
				</div>
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>こんにちは！今日も暑いですね～<br>こんなに暑いと冷たい料理がいいですよね～<br>そうめんとか、そうめんとか…毎日そうめんでもいいですよねぇ</p>
					</div>
				</div>
				<div class="recipe-icn kou_02">
					<div class="inner">
						<p>…コウちゃん、そーめんもうイヤ～</p>
					</div>
				</div>
				<div class="recipe-icn mayu_03">
					<div class="inner">
						<p>そ…そんなに、そうめんばかりなんですね…<br>でも、まだまだ暑さは続くんですから栄養のあるものを食べないと！<br>さぁ！こんなところで涼んでないで、夏バテ対策の料理を作りましょうー！</p>
					</div>
				</div>
				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>おぉー！！</p>
					</div>
				</div>
				<div class="recipe-icn masaki_03">
					<div class="inner">
						<p>ちょっ…ちょっと2人とも待ってよぉ～</p>
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
						<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第8回は、夏バテ対策にピッタリ！スタミナ満点で食べやすい「なす豚しゃぶのごまマヨ丼」をご紹介します。栄養もしっかりとれるので、ぜひ試してみてくださいね。</p>
					</div>
					<div class="recipe-movie__video">
						<div class="recipe-movie__video_base">
							<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/tIBOopzVhSw?rel=0" frameborder="0"
							 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">なす豚しゃぶのごまマヨ丼</h3>
					<div class="recipe-design__material">
						<h3 class="recipe__ttl">材料（4人分）調理時間目安：20分</h3>
						<dl class="recipe-design__materials">
							<dt>豚薄切り肉（しゃぶしゃぶ用）</dt>
							<dd>250g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>水</dt>
							<dd>3カップ（600㏄）</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>酒</dt>
							<dd>1/2カップ（100㏄）</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd><a href="recipe-technic12.php#hitotsumami" class="recipe-design__link">ひとつまみ</a></dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>なす</dt>
							<dd>4本</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>みょうが</dt>
							<dd>4本</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>大葉</dt>
							<dd>10枚</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>ご飯</dt>
							<dd>お茶碗4杯分（1人1杯）</dd>
						</dl>
						<h4>【たれ】</h4>
						<dl class="recipe-design__materials">
							<dt>A：白すりごま</dt>
							<dd>大さじ2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：マヨネーズ</dt>
							<dd>大さじ2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：醤油</dt>
							<dd>大さじ1</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h3 class="recipe__ttl">作り方</h3>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>みょうがを縦半分に切り、薄切りにします。大葉は茎を取り除き、丸めて<a href="recipe-technic13.php#sengiri" class="recipe-design__link">千切り</a>にします。</span></li>
							<li class="recipe-design__howto-item"><span>なすは水にくぐらせ、<strong>1本ずつ</strong>ラップで包みます。<strong>電子レンジ600Wで8〜10分</strong>ほど加熱し、熱が通ったら取り出して、粗熱をとります。</span></li>
							<li class="recipe-design__howto-item"><span>粗熱がとれたら、ヘタをとって縦半分に切り、さらに<strong>3等分</strong>に切ります。</span></li>
							<li class="recipe-design__howto-item"><span>鍋に水、酒、塩を入れて熱し、<strong>沸騰したら<a href="recipe-technic02.php#yoawabi" class="recipe-design__link">弱火</a></strong>にします。表面がゆらゆらする程度の<a href="recipe-technic02.php#yoawabi" class="recipe-design__link">弱火</a>にし、豚肉を<strong>1枚ずつ広げて</strong>茹でます。色が変わったら、ザルにあげて冷まします。</span></li>
							<li class="recipe-design__howto-item"><span>「A」をすべて混ぜ合わせて、たれを作ります。 </span></li>
							<li class="recipe-design__howto-item"><span>器にご飯を盛り、「2」の豚肉、「4」のなす、「1」のみょうがと大葉をのせ、たれをかけます。</span></li>
						</ol>
					</div>
					<div class="recipe-design__point mb6">
						<h3 class="recipe__ttl">ワンポイント</h3>
						<p class="recipe-design__point-item">豚肉は沸騰したお湯で茹でると、固くなりやすくなります。また、茹でた豚肉を冷やす際に、氷水で急激に冷やしても固くなる原因に。ザルやバットにあげて冷ますと、柔らかく仕上がるのでおすすめです。さらに、豚肉を鍋に入れるときは、一度にたくさん入れると、急激に温度が下がって、臭みが出る原因となります。茹でる時は豚肉を入れすぎないようにしましょう。</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>今回紹介したレシピは、ごまマヨだれを使いましたが、代わりに梅マヨだれをかけるのもおすすめですよ。ごまマヨだれより、さわやかな味わいになります。</p>
					</div>
				</div>
				<div class="flex flex_around center">
					<figure class="w50 mb2">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/08/recipe08_arrange01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/08/recipe08_arrange01@2x.jpg"
						 alt="アレンジレシピ 梅マヨだれ" style="max-width:362px" class="u-img__max">
					</figure>
					<figure class="w50 mb2">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/08/recipe08_arrange02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/08/recipe08_arrange02@2x.jpg"
						 alt="アレンジレシピ なす豚しゃぶの梅マヨ丼" style="max-width:362px" class="u-img__max">
					</figure>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">【梅マヨだれの作り方】</h3>
					<div class="recipe-design__material">
						<p>たたいた梅干し（約40g）、醤油（小さじ2）、みりん（小さじ2）、マヨネーズ（大さじ2）をすべて混ぜ合わせれば完成です。</p>
					</div>
				</div>
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>最近暑くて食欲がなかったけど、パクパクと食べられちゃう！<br>ご飯がすすむぅ～</p>
					</div>
				</div>
				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>ごはんがすすむぅ～♪おいしいね</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>簡単に作れて、食べやすいのでご飯がすすんじゃいますよね！<br>たれを変えるだけで2種類の楽しみ方ができます！<br>そうめんばかり食べていてはダメですよ～</p>
					</div>
				</div>
				<div class="recipe-icn masaki_02">
					<div class="inner">
						<p>そ、そうですよね～、さすがに毎日そうめんはダメですよね！<br>元気も出てきたことだし、さっそくママにも作ってあげよう</p>
					</div>
				</div>
			</div>
			<hr class="recipe__line">
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">夏バテ気味で、食欲がなかったパパもコウちゃんも、たくさん食べられてよかった！やっぱりご飯を食べると元気になるな～。丼ものって洗い物も少なくてすむし、結構手軽だから、ほかの丼ものレシピも調べてみようっと♪</p>
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
