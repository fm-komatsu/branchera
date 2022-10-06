<?php
//base
include( "../../function.php" );
$content = get_id_data( '15021' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「おにぎりの握り方」を動画で解説。基本の三角型・俵型・丸型の3種類のおにぎりの握り方や、上手に具を入れるコツをご紹介します。また、時短につながる冷凍おにぎりの作り方や、簡単におにぎりを握るのに役立つ便利グッズなども合わせてお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

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
			$panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
			include( $inc_path . "/lib/inc/pan.php" );
			include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
			include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
		?>
		<section class="main__wrapper recipe">
			<div class="recipe__header recipe-header technic">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">　</span>
					<span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第21回は、「おにぎりの握り方」です。三角型・俵型・丸型の3種類のおにぎりの握り方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>わぁ～！美味しそうなおにぎりがいっぱいですね！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>
						<a href="recipe-technic20.php" class="recipe-design__link">「お米の炊き方」</a>で炊いたごはんでおにぎりを作ってみました♪<br>はい、コウちゃん食べてみて</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>さんかくおにぎり！<br>ふわふわでおいしいー</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>僕が作ると、いつも形が崩れちゃうんですよね…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>コツさえ覚えれば、ふっくらしているけれど崩れにくいおにぎりが作れますよ！<br>海苔の巻き方もご紹介しますので<br class="u-only__pc">ぜひマスターしてくださいね！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/NJjXMDY6BcU?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">３種のおにぎりの握り方をマスターしよう！</h3>
				<p>おにぎりは、かために握ったものよりも、口の中でふわっとほぐれるくらいの握り方が美味しいですよね。今回は三角おにぎり・俵型おにぎり・丸型おにぎりの握り方をお伝えしましょう。</p>
				<div class="recipe-design__howto mb0">
					<h4 class="recipe__ttl" id="sankaku-onigiri">三角おにぎりの握り方</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-01@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">両手を少量の水で濡らし、<strong><a class="recipe-design__link" href="recipe-technic12.php#hitotsumami"
								 data-scroll>ひとつまみ</a>より少し多めの<a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link" data-scroll>塩</a></strong>を広げます。<br>冷めてから食べる場合は、塩気が弱く感じるので、もう少し塩を多めに入れてもOKです。</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-02@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">お茶碗半分のごはん（約80g）を片手にのせます。</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-03@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><strong>反対の手を「く」の字</strong>にして、やさしく回転させながら、三角に整えます。握るときは、力を加え過ぎないようにしましょう。</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-04@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">具を入れる場合は<strong>中央にくぼみ</strong>を作り、まわりのごはんで覆いながら、やさしく握ります。</dd>
					</dl>
					<h4 class="recipe__ttl" id="tawara-onigiri">俵型おにぎりの握り方</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-05@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">お茶碗半分のごはん（約80g）を片手にのせます。<br><strong>反対の手を丸めて</strong>、やさしく回転させながら、指先で俵型に整えます。</dd>
					</dl>
					<h4 class="recipe__ttl" id="marugata-onigiri">丸型おにぎりの握り方</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/technic21_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/technic21_other01@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">三角おにぎりと同じ要領で握ります。ポイントは握るときの手の角度。ごはんを片手にのせたら、反対の手を「く」の字にせず、角度をゆるくした状態で握ると、丸いおにぎりになりますよ。<br>なお、左利きの人も作る過程は同じです。利き手を上にして握ってくださいね。</dd>
					</dl>
					<section>
						<h3 class="recipe__ttl_l mb0">海苔の巻き方</h3>
						<p><a href="<?php echo $base_url ?>/magazine/article/recipe-technic44.php" class="recipe-design__link">海苔の巻き方</a>は、おにぎりの型によってそれぞれ異なります。形別の海苔の巻き方をお伝えしましょう！</p>
						<h4 class="recipe__ttl">三角おにぎりの海苔の巻き方</h4>
						<dl class="recipe-design__step mb2">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-06@2x.jpg"
									alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">全形（約21cm×19cm）を<strong>3等分</strong>に切った海苔を用意し、<strong>海苔の半分の位置</strong>におにぎりをのせて、<strong>2つ折り</strong>にして包みます。</dd>
						</dl>
						<h4 class="recipe__ttl">俵型おにぎりの海苔の巻き方</h4>
						<dl class="recipe-design__step mb2">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/tech21-07@2x.jpg"
									alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">全形（約21cm×19cm）を<strong>4等分</strong>に切った海苔を用意し、<strong>海苔の端</strong>におにぎりをのせて、転がしながら包みます。</dd>
						</dl>
						<h4 class="recipe__ttl">丸型おにぎりの海苔の巻き方</h4>
						<p class="mb2">全形（約21cm×19cm）を2等分に切った海苔を用意し、片方の海苔の中央におにぎりを置きます。さらにその上に、もう一枚の海苔を45度ずらして重ねてください。海苔の四隅をおにぎりに巻いて、ごはん全体を包みます。</p>
					</section>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h3 class="plus1__ttl">便利グッズを使った握り方</h3>
						<p>最近は、量販店でおにぎりを簡単に作れるグッズを売っています。ごはんを入れて振るだけで一口サイズのミニおにぎりが作れるケースや、簡単に三角おにぎりが作れるシリコンケースなどが代表的です。ほかにも、星やハートの形をした押し型や、海苔の抜き型など、かわいいおにぎりを作れるグッズがあります。<br>基本的な形のおにぎりは手で握り、特殊な形のおにぎりはグッズを使う…など、用途に合わせて使い分けるとよいですね。</p>
						</div>
					</div>
					<section>
						<h3 class="recipe__ttl_l mb0">おにぎりが崩れない！上手に具を入れるコツ</h3>
						<div class="u-clearfix">
							<figure class="u-float__right w45">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/technic21_other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/technic21_other02@2x.jpg"
								alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>

							<p><a href="<?php echo $base_url ?>/magazine/article/recipe-technic148.php" class="recipe-design__link">鮭</a>、梅干し、明太子にツナマヨ…と、多種多様な具が楽しめるおにぎりですが、使う食材によっては、おにぎりが崩れやすくなることもありますよね。おにぎりが崩れないように、上手に具を入れるコツをお伝えしましょう。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">[ 1 ] 中央に具材を置く</h4>
							<p>おにぎりを握る前に、片手にのせたごはんの中央部に穴を開けます。その穴部分に具材を置き、具材をごはんで包むように握ってください。中央に具材を置いて、偏りを防ぐことが、おにぎりを崩れないようにするための大切なポイントです。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">[ 2 ] 具材に工夫を加える</h4>
							<p>おにぎりの崩れやすさは、握り方だけではなく、具材にも原因があります。できるだけ崩れにくくするために、下準備をしてから入れるようにしましょう。</p>
						</div>
						<div>
							<h5 class="recipe__ttl_s">ツナマヨ</h5>
							<p class="mt0">ツナマヨは人気の高いおにぎりですが、崩れやすいおにぎりのトップ1です。油がたっぷりのツナマヨ。油は、ごはんがくっ付くのを妨げてしまうので、おにぎりがまとまりづらくなり崩れやすくなります。ツナマヨをおにぎりの具材にする際は、ツナの油をしっかり絞り、マヨネーズも極力少なめにして作りましょう。</p>
						</div>
						<div>
							<h5 class="recipe__ttl_s"><a href="<?php echo $base_url ?>/magazine/article/recipe-technic151.php" class="recipe-design__link">炊き込みごはん</a></h5>
							<p class="mt0">炊き込みごはんを使ったおにぎりの場合、具材が大きかったり、多かったりすると崩れやすくなります。炊き込みごはんのおにぎりを作るときは、できるだけごはんに混ざっている具材を小さく、少なめにし、おにぎりの外にはみ出ないようにしましょう。</p>
						</div>
						<div>
							<h5 class="recipe__ttl_s"><a href="<?php echo $base_url ?>/magazine/article/recipe-technic86.php" class="recipe-design__link">チャーハン</a></h5>
							<p class="mt0">人気のあるチャーハンおにぎりですが、チャーハンはごはんがパラっとしていてまとまりづらく、おにぎりにすると崩れやすくなります。チャーハンでおにぎりを作る際は、少し粘度が増している冷めたチャーハンで、かために握るのがコツですよ。</p>
						</div>
						<div>
							<h5 class="recipe__ttl_s">鶏<a href="<?php echo $base_url ?>/magazine/article/recipe-technic90.php" class="recipe-design__link">そぼろ</a>ふりかけ</h5>
							<p class="mt0">鶏のそぼろをおにぎりの具材にすると、ごはんが崩れてしまいます。そぼろ自体がくっ付かないため、ごはんで包もうとしてもなかなかうまくいきません。そぼろのおにぎりを作るときは、そぼろの分量を少なめにし、普通のおにぎりよりもかためにぎゅっと握りましょう。また、油分や水分が少ないそぼろを使うのも崩れにくくするポイントです。</p>
						</div>
					</section>
					<section>
						<h3 class="recipe__ttl_l mb0">冷凍保存おにぎりで時短しよう</h3>
						<p>実は、おにぎりは冷凍保存できることをご存じですか？冷凍しておけば、食べたいときにすぐ食べられて、とても便利！冷凍した場合、約1ヵ月保存することができます。おにぎりを冷凍保存する際のポイントをお伝えしましょう。</p>
						<div class="mb2">
							<h4 class="recipe__ttl">素手ではなくラップを使って握る</h4>
							<div class="u-clearfix">
								<figure class="u-float__left w45">
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/21/technic21_other03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/21/technic21_other03@2x.jpg"
									alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
								<div>
									<p>冷凍保存する場合は、雑菌の繁殖を抑えるため手を使わず、ラップやおにぎり型の容器を使って握るようにしましょう。</p>
								</div>
							</div>
						</div>
						<div class="mb2">
							<h4 class="recipe__ttl">少量のお<a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>を入れる</h4>
							<p>ごはんにお酢（米酢・穀物酢）を少し混ぜることで、傷みにくくなります。ごはん3合に対し、お酢は大さじ1.5～２杯が目安です。味付けされた酢飯の状態で冷凍したい場合は、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic43.php" class="recipe-design__link">こちら</a>をご覧ください。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">具材に注意</h4>
							<p>腐りにくい具材を入れるようにしましょう。おすすめの具材は、梅干し、焼鮭、塩昆布など、塩分が多く、水分が少ないもの。人気のツナマヨは油分・水分が多く傷みやすいので、冷凍おにぎりには不向きです。生ものも避けてください。</p>
						</div>
						<div class="mb2">
							<h4 class="recipe__ttl">海苔は巻かない</h4>
							<p>海苔は傷みやすい食材のひとつで、海苔を巻いた場所から傷み始めます。海苔を巻くのは解凍した後、食べる直前にしましょう。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">解凍は電子レンジで</h4>
							<p>冷凍したおにぎりは、電子レンジで解凍します。できたての温かいごはんで握ってラップで包むと、熱い蒸気も一緒に閉じ込められるので、電子レンジで加熱すると、まるで炊き立てのようにふっくらとしたおにぎりになります。逆に、自然解凍するとぱさぱさした食感になってしまいます。</p>
							<p>食べたいときにすぐ食べられる、便利な冷凍おにぎり。ごはんがたくさん余ってしまったときは、冷凍おにぎりにして作り置きしておきましょう。</p>
						</div>
					</section>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>今まで作ったおにぎりは塩が少なかったかも…<br>ひとつまみより少し多めの塩を入れるんですね！</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>パパのおにぎりも、ふわふわだね！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>力を加え過ぎず、軽く形を整える程度に握ることで<br class="u-only__pc">米粒が口の中でほろっと崩れるような、ふんわりおにぎりが作れますよ</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>よーし！帰ったらママにも教えてあげよう♪</p>
				</div>
			</div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15020'),
				array ('recommend-recipe-id','15029'),
				array ('recommend-recipe-id','15056'),
				array ('recommend-recipe-end')

				);
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
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
