<?php
//base
include( "../../function.php" );
$content = get_id_data( '15045' );
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
$altCap01 = 'ごぼうの泥や汚れを、たわしなどを使って水で洗い、包丁の背でこするように皮をこそげ取ります。';
$altCap02 = '包丁を使う場合は、10cmほどの切り込みを入れてください。';
$altCap03 = '鉛筆を削るようにごぼうを回しながら、包丁の刃先で薄く削ります。';
$altCap04 = '切り込みの終わりまで削ったら、再度切り込みを入れて、削るのを繰り返します。';
$altCap05 = 'ごぼうが短くなり、削りにくくなったら斜め薄切りにします。';
$altCap06 = 'ごぼうに10cmほどの切り込みを入れ、まな板の上に置き、片手で回しながら薄く削っていきます。';
$altCap07 = 'ごぼうが短くなったら、同様に斜めに切ります。';
$altCap08 = '削ったごぼうは、水に5分ほど浸けてアクをとり、アクがとれたら水気を切ります。';
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
					<span class="recipe-header__ttl">ごぼうのささがきの方法</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第45回は、「ごぼうのささがきの方法」です。薄く広く削ぐことで味をよく染み込ませることができる、ごぼうのささがきの方法をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>マユ先生、この前実家に帰ったときに<br class="u-only__pc">母がきんぴらごぼうを作ってくれたんですけど、<br class="u-only__pc">美味しくって何回もおかわりをしてしまいました！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>おふくろの味、いいですね！<br>きんぴらごぼうは細切りが多いですが、<br class="u-only__pc">ささがきで作ったきんぴらごぼうは、<br class="u-only__pc">フワッとした食感になるのでおすすめですよ</p>
				</div>
			</div>

			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>ささがきで作る？<br>マユ先生、ささがきって何ですか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ささがきは、鉛筆を削るように野菜を切っていく切り方で、<br class="u-only__pc">きんぴらや天ぷら、お鍋に向いているといわれています<br>味が染みやすく火が通りやすい切り方なので、ぜひ覚えてくださいね！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/zSq9lGghl6o?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">ごぼうのささがきのやり方</h3>
				<p class="mb3">ごぼうは食物繊維やポリフェノールが多く含まれていて、健康にも美容にもとてもよい食材です。きんぴらや天ぷらにしたり、豚汁や炊き込みご飯に入れても美味しいですよね。</p>
				<p>そんなごぼうの切り方のひとつに、ささがきがあります。漢字では「笹掻き」と書き、文字通り笹の葉のように細長い形が特徴です。今回は、包丁を使った場合、ピーラーを使った場合の2パターンご紹介します。</p>
				<div class="recipe-design__howto mb3">
					<h4 class="recipe__ttl">ごぼうの下処理</h4>
					<p>香りがよく、食欲をそそるごぼう。ささがきは、ごぼうの香りを生かすための切り方でもあります。見た目がよりきれいで、香り豊かなささがきになるよう、ごぼうの下処理からやりましょう。</p>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap01); */ ?>
							ごぼうの泥や汚れを、<strong>たわしなどを使って水で洗い、</strong>包丁の背でこするように<strong>皮をこそげ取り</strong>ます。
						</dd>
					</dl>

					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap02); */ ?>
							<p>包丁を使う場合は、<strong>10cmほど</strong>の切り込みを入れてください。</p>
							<p>下準備が整えば、包丁かピーラーを使ってささがきを行なっていきます。</p>
						</dd>
					</dl>
					<h4 class="recipe__ttl">[ 1 ] 包丁を使ったささがき</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-03@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-04@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
						</dd>
					</dl>
					<h4 class="recipe__ttl">[ 2 ] ピーラーを使ったささがき</h4>
					<p>包丁が苦手で、うまく削れないという人には、ピーラーを使うという手があります。量販店でも買えるT字ピーラーは手軽で簡単にできるため、時短にもなります。ぜひトライしてみましょう。</p>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-06@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap06); */ ?>
							ごぼうに10cmほどの切り込みを入れ、まな板の上に置き、<strong>片手で回しながら薄く削っていきます。</strong>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-07@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap07); ?>
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
							<h5>ささがきした後の端っこ(余り部分)の処理について</h5>
							<p>ささがきをしてごぼうが短くなると、残りが少なくて不安定な状態になりますね。そのとき、ボウルや皿に直接削っている場合は、まな板に置き直してささがきしましょう。<br>ささがきができないくらい短くなったら、最後は薄切りにすれば無駄なくごぼうを使い切ることができますよ。</p>
						</div>
					</div>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h4 class="plus1__ttl">ささがきが苦手な人におすすめのグッズ</h4>
							<p>T字ピーラーだけでなく、ささがきに使える便利グッズはいろいろあります。中でもささがき専用のピーラーは、ごぼうを先に向かって削いでいけばできあがり、という優れもの。また、大根おろしのような形をしたグッズもあり、ごぼうを斜めにして器具に当て、下に向かって削るとささがきができます。</p>
						</div>
					</div>

					<h4 class="recipe__ttl">ささがき後のアク抜き</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/45/tech45-08@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap08); ?>
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
							<h5>「洗いごぼう」でもアク抜きは必要</h5>
							<p>スーパーに行くと、土が付いているごぼうと付いていないごぼうが売っていますよね。<br>土が落としてあるごぼうは、「洗いごぼう」といいます。洗いごぼうは皮をむかなくてもよく、シンクを汚さないというメリットがありますが、軽く土が付いていることもあるので水洗いは必要。また、ごぼうのアクは皮でなく実に含まれています。そのため、アク抜きはしっかり行ないましょう。</p>
						</div>
					</div>
				</div>
				<div>
					<h3 class="recipe__ttl_l mb0">ささがきごぼうの保存方法</h3>
					<p class="mb3">ささがきごぼうの保存方法は、冷蔵と冷凍の2種類があります。</p>
					<div class="mb3">
						<h4 class="recipe__ttl">冷蔵保存方法</h4>
						<p>ボウルなどに水、または薄い酢水を張り、ささがきごぼうを入れてラップをします。密閉式のタッパーがあれば、きっちり蓋をすればOK。水を毎日取り換えることで2～3日は持たせることができます。ただし、栄養素は流れ出やすいため、早めに使い切るようにしましょう。</p>
					</div>
					<div class="mb3">
						<h4 class="recipe__ttl">冷凍保存方法</h4>
						<p>アク抜きしたささがきごぼうの水気をキッチンペーパーなどでよく拭き取り、ジッパー付きのビニール袋に入れて冷凍します。小分けにパックし、できるだけ平らに保存すると、使うときにごぼう同士がくっつかずに便利です。<br>余裕があれば、ささがきごぼうを軽くゆでてから冷まして、水気を切ってから冷凍しましょう。風味や歯ごたえを損なわずに保存することができますよ。<br>冷凍ささがきごぼうは1ヵ月程度持ちます。解凍したり湯で戻したりせず、そのまま調理に使ってください。</p>
					</div>
				</div>
				<div>
					<h3 class="recipe__ttl_l mb0">ささがきならコレ！簡単レシピ</h3>
					<p class="mb3">ささがきごぼうを使った、簡単にできるレシピをいくつかご紹介します。</p>
					<div class="mb3">
						<h4 class="recipe__ttl"><a href="<?php echo $base_url ?>/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a></h4>
						<p>風味のよいささがきごぼうは、味噌汁にもぴったり。<br>まずささがきごぼうをごま油でさっと炒めます。だし汁を加え、煮立ったら弱火にして4～5分煮ます。火を止め、味噌を溶き入れたらひと煮立ちさせて完成。お好みで七味唐辛子を加えるのもおすすめです。</p>
					</div>
					<div class="mb3">
						<h4 class="recipe__ttl">サラダ</h4>
						<p>ささがきごぼう、ささがきにんじんを約2分ゆで、水気と粗熱を取ったら細切りハムを加えて、ごまドレッシングで和えます。サラダ菜を敷いた器に盛り付けてできあがりです。</p>
					</div>
					<div class="mb3">
						<h4 class="recipe__ttl">鍋</h4>
						<p>昆布を1枚鍋に敷き、たっぷりの湯を沸かします。鶏肉、ささがきごぼう、ねぎ、しいたけをベースに、しらたきや糸こんにゃくなど好みの具材を加えていきましょう。</p>
					</div>
					<div>
						<h4 class="recipe__ttl">炊き込みごはん</h4>
						<p>洗った米に、だし、醤油、酒を加えてください。そこにささがきごぼう、ささがきにんじん、しいたけの薄切り、油抜きした油揚げを入れて、炊飯器で炊きます。<br>お好みで、炊き上がり後にゆでたグリーンピースを足してもよいでしょう。</p>
					</div>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>ささがきができるようになると、<br class="u-only">料理の幅が広がりますね！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>そうですね。ごぼうのささがきの方法は<br class="u-only">にんじんなど、ほかの細長い野菜にも応用できます<br>いろいろな野菜のささがきを料理に使ってみてくださいね</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>はい！今夜は早速教えてもらったささがきで、<br class="u-only">ごぼうとにんじんのきんぴらにチャレンジしてみよう♪</p>
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
