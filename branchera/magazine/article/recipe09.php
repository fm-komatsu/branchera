<?php
//base
include( "../../function.php" );
$content = get_id_data( '14009' );
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
					<span class="recipe-header__num">第9話</span>
					<span class="recipe-header__ttl">レンジで簡単バンバンジーサラダ</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">料理教室に通うようになってから、レシピの幅も広がって、パパもコウちゃんもたくさんおかわりをしてくれるようになったんだ！…でも、暑い日が続いているせいか、キッチンで火を使うだけで、汗がふきでてくるんだよね。パパっと作れて、しっかり食べられるレシピなんてないかな～？</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe__row">
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>さぁ、今日も料理レッスンを始めましょうか…って<br>ミエさん、何だかお疲れですね</p>
					</div>
				</div>
				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>夏バテってワケじゃないんですけど<br class="u-only__pc">キッチンに立つのも暑くて、グッタリしちゃうんです</p>
					</div>
				</div>
				<div class="recipe-icn mayu_02">
					<div class="inner">
						<p>確かに、夏場のキッチンは過酷ですよね</p>
					</div>
				</div>
				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>そうなんですよ…<br>火を使わないメイン料理なんて思いつかないし…</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>火を使わないレシピ…<br>それなら電子レンジを活用したお肉料理はいかがですか！？<br>サラダ仕立てにすれば、サッパリといただけますよ</p>
					</div>
				</div>
				<div class="recipe-icn mie_03">
					<div class="inner">
						<p>電子レンジでお肉！？<br>ぜひ、教えてくださーい！</p>
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
						<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第9回は、お肉も野菜もしっかりとれる「レンジで簡単バンバンジーサラダ」をご紹介します。蒸し鶏を使ったアレンジレシピ「鶏ともやしのナムル」も、ぜひチェックしてくださいね。</p>
					</div>
					<div class="recipe-movie__video">
						<div class="recipe-movie__video_base">
							<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/AybsOrVVr8M?rel=0" frameborder="0"
							 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">バンバンジーサラダ</h3>
					<div class="recipe-design__material">
						<h3 class="recipe__ttl">材料（4人分）調理時間目安：15分</h3>
						<dl class="recipe-design__materials">
							<dt>鶏むね肉</dt>
							<dd>1枚（約300g）</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>しょうが（薄切り）</dt>
							<dd>2枚</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>長ねぎの青い部分</dt>
							<dd>1本分</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>酒</dt>
							<dd>大さじ2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>レタス</dt>
							<dd>1/3玉</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>トマト</dt>
							<dd>1個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>きゅうり</dt>
							<dd>1本</dd>
						</dl>
						<h4>【たれ】</h4>
						<dl class="recipe-design__materials">
							<dt>A：白ねりごま</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：米酢</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：醤油</dt>
							<dd>大さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>A：砂糖</dt>
							<dd>大さじ1</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h3 class="recipe__ttl">作り方</h3>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>鶏むね肉の<a href="recipe-technic19.php#torimune" class="recipe-design__link">下ごしらえ</a>をします。余分な脂や筋を切り取ります。</span></li>
							<li class="recipe-design__howto-item"><span>皮を下にして置いて、身をそぐように開きます。裏返して、もう片面も同様に切り開きます。</span></li>
							<li class="recipe-design__howto-item"><span>鶏むね肉の余分な水分（ドリップ）を拭き取り、塩を両面にすりこみます。</span></li>
							<li class="recipe-design__howto-item"><span>耐熱皿に皮を下にして置いて、酒、しょうが、長ねぎの青い部分を加えて、ふんわりとラップをかけます。</span></li>
							<li class="recipe-design__howto-item"><span>電子レンジ<strong>600Wで2分加熱</strong>します。加熱後、ラップを外して鶏むね肉を裏返し、もう一度ラップをして電子レンジ<strong>600Wで2分加熱</strong>します。</span></li>
							<li class="recipe-design__howto-item"><span>加熱後は、ラップをしたまま粗熱が取れるまで蒸らします。粗熱が取れたらラップを外し、皮を剥がしたあとに、鶏むね肉を食べやすい大きさに手で裂きます。</span></li>
							<li class="recipe-design__howto-item"><span>レタスは<strong>縦半分</strong>に切り、重ねて細切りにします。きゅうりは斜めに薄く切り、重ねて<a href="recipe-technic13.php#sengiri">千切り</a>にします。トマトはヘタをのぞいて薄切りにします。</span></li>
							<li class="recipe-design__howto-item"><span>レタスは<strong>縦半分</strong>に切り、重ねて細切りにします。きゅうりは斜めに薄く切り、重ねて<a href="recipe-technic13.php#sengiri" class="recipe-design__link">千切り</a>にします。トマトはヘタをのぞいて薄切りにします。</span></li>
							<li class="recipe-design__howto-item"><span>「A」をすべて混ぜ合わせて、たれを作ります。</span></li>
							<li class="recipe-design__howto-item"><span>器にトマト、レタス、きゅうり、蒸し鶏の順に盛り付けます。</span></li>
						</ol>
					</div>
					<div class="recipe-design__point mb6">
						<h3 class="recipe__ttl">ワンポイント</h3>
						<p class="recipe-design__point-item">蒸し鶏は大きさによって、加熱時間を調節してください。（鶏むね肉300gで表裏2分ずつが目安）加熱後、ラップをしたまま粗熱が取れるまで蒸らすことで、しっとりと仕上がります。</p>
					</div>
				</div>
				<div class="recipe-icn mayu_01">
					<div class="inner">
						<p>レンジで作れる蒸し鶏は、いろいろなアレンジができるんですよ！<br>もやしと一緒に「鶏ともやしのナムル」なんていかがでしょう？<br>簡単に作れて、おつまみにピッタリなんです♪</p>
					</div>
				</div>
				<div class="recipe__design recipe-design">
					<h3 class="recipe__ttl_l">アレンジレシピ<br>鶏ともやしのナムル</h3>
					<div class="recipe-design__material">
						<h3 class="recipe__ttl">材料（4人分）</h3>
						<dl class="recipe-design__materials">
							<dt>レンジ蒸し鶏</dt>
							<dd>1/2枚分</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>貝割れ大根</dt>
							<dd>1/2パック</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>大豆もやし</dt>
							<dd>200g</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>ごま油</dt>
							<dd>大さじ2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>白すりごま</dt>
							<dd>大さじ2</dd>
						</dl>
					</div>
					<div class="recipe-design__howto">
						<h3 class="recipe__ttl">作り方</h3>
						<ol class="u-list__ol_more">
							<li class="recipe-design__howto-item"><span>レンジ蒸し鶏は手で裂きます。貝割れ大根は根元を落とします。</span></li>
							<li class="recipe-design__howto-item"><span>豆もやしは耐熱ボウルに入れ、<strong>ふんわり</strong>とラップをかけて、電子レンジ<strong>600Wで3分加熱</strong>します。</span></li>
							<li class="recipe-design__howto-item"><span>粗熱が取れたらペーパーで包んで水気を切り、塩、ごま油、白すりごまを加えて混ぜます。</span></li>
							<li class="recipe-design__howto-item"><span>「1」を加えてさっくり和え、器に盛ります。</span></li>
						</ol>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>さぁ、今日のご飯はコウちゃんにも手伝ってもらおうかな！</p>
					</div>
				</div>
				<div class="recipe-icn kou_03">
					<div class="inner">
						<p>コウちゃん、おてつだいするよ！</p>
					</div>
				</div>
				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>じゃぁ、このお肉を手で長細くしていってね</p>
					</div>
				</div>
				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>コウちゃんエライな～！<br>今日はママのお手伝いしてるんだね<br>コウちゃんの作るバンバンジーが楽しみだな～</p>
					</div>
				</div>
				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>パパは“なむる”と“びーる”ね！</p>
					</div>
				</div>
				<div class="recipe-icn masaki_03">
					<div class="inner">
						<p>えぇ！？<br>なんかコウちゃん、ママみたいなんだけど～！</p>
					</div>
				</div>
			</div>
			<hr class="recipe__line">
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">バンバンジーが簡単に、電子レンジで作れちゃうなんて！しかも、この蒸し鶏…先生に教えてもらったナムルだけじゃなくて、冷やし中華やそうめんに合わせてもいいかも！いろいろなアレンジを思いつくようになったのも料理教室のおかげかな…なんて♪</p>
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
