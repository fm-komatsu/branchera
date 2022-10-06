<?php
//base
include( "../../function.php" );
$content = get_id_data( '15022' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「調味料のさしすせそ」を動画で解説。「さしすせそ」とは、和食の味付けの基本となる5つの調味料、そしてそれを入れるときの順番の語呂合わせです。各調味料の特徴や保存方法、実際にこの「さしすせそ」を活用して煮物を作る方法などを詳しくご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第22回は、「調味料のさしすせそ」です。調味料を入れる順番や保存方法をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p> 砂糖を入れて～次に塩♪<br>酢を入れて～醤油と味噌っと♪ </p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p> ミエさん、調味料のさしすせそですね！ </p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>そうです！これだけはちゃんと覚えているんですよね～<br>でも昔、さしすせその「そ」はソースだと思っていました</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>確かに味噌以外の調味料は頭文字なので、間違えてしまいますよね<br>ちなみに、なぜこの順番に入れるのか知っていますか？</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>う～ん…単純に<br class="u-only__pc">「さしすせそ」が覚えやすいからですかね？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>覚えやすいというのもありますが、実は意味のある順番なんです！<br>知っておくと、料理をするのがもっと楽しくなりますよ<br>今回は「調味料のさしすせそ」についてご紹介しますね</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/R_F4bSSYesc?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l">料理の味付けの基本になる5つの調味料</h3>
					<p>料理の味付けの基本は、「調味料のさしすせそ」。主に和食の味付けに使う調味料の種類、またそれらを使用する際の順番が分かるように作られた語呂合わせです。</p>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-01@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">「さしすせそ」とは、調味料を使う順番を覚えるための語呂合わせです。では、それぞれ何を指しているのでしょうか？</dd>
					</dl>
					<h4 class="recipe__ttl" id="satou">さ＝砂糖</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-02@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><strong>食材を柔らかくし、甘味を付ける調味料</strong>です。砂糖は、食材に味が浸透するのが遅いため、最初に入れます。<br><br>保存方法は、密閉容器に入れて<strong>常温保存</strong>します。</dd>
					</dl>
					<h4 class="recipe__ttl" id="shio">し＝塩</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-03@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><strong>食材から水分を外に出し、塩気を付ける調味料</strong>です。塩は浸透圧が高く、砂糖より先に入れると、砂糖の甘みが食材に浸透しづらくなってしまうため、砂糖の次に入れます。<br><br>保存方法は、密閉容器に入れて<strong>常温保存</strong>します。</dd>
					</dl>
					<h4 class="recipe__ttl" id="osu">す＝酢</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-04@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><strong>食材に酸味や風味を付ける調味料</strong>です。酢は早く入れると酸味が飛んでしまうため、仕上がり近くに入れます。<br><br>保存方法は、開封後の賞味期限を確認し、<strong>常温保存</strong>します。</dd>
					</dl>
					<h4 class="recipe__ttl" id="shoyu">せ＝醤油</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-05@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><strong>味に深みを与え、食材に香りを付ける調味料</strong>です。醤油は香りや風味を逃さないため、仕上がり近くに入れます。<br><br>醤油の保存方法は、開栓後は空気に触れると酸化してしまうため、<strong>冷蔵保存</strong>します。<br>※密封ボトルに入った醤油の場合は、酸化を防ぐ仕組みとなっているため、賞味期限を確認し、常温保存します。</dd>
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
							<h3>なぜ「しょうゆ」が「せ」なの？</h3>
							<p>昔使われていた「歴史的仮名遣い」では、醤油を「せうゆ」と表記するため、醤油が「さしすせそ」の「せ」の調味料となっているといわれています。しかし、実は醤油の正しい歴史的仮名遣いは、「しやうゆ」。「せうゆ」も大衆に使われていた表記ではありますが、歴史的仮名遣いではない「許容仮名遣い」の一種なのです。この「さしすせそ」に当てはめるために、本来とは異なる表記を使用したのですね。</p>
						</div>
					</div>
					<h4 class="recipe__ttl" id="miso">そ＝味噌</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-06@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><strong>味をまろやかにし、食材に香りを付ける発酵食品</strong>です。<br>加熱により香りが飛びやすいので、仕上がり近くに入れます。<br><br>保存方法は、空気が入らないように密閉して、<strong>冷蔵保存</strong>します。</dd>
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
							<h3>なぜ「みそ」だけ下から文字をとるの？</h3>
							<p>「さしすせそ」の「そ」が味噌、というのはちょっと考え付かないですよね。味噌なら「み」じゃないの？と思う人も多いことでしょう。<br>これにはいくつかの説があり、「そ」はさ行の最後の文字だから下からとったという説がよく挙げられています。ほかにも、味噌の「噌」は日本で作られた漢字なので、この一文字で味噌という意味が通じるから…という説があります。</p>
						</div>
					</div>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h3 class="plus1__ttl">酒、みりん、ソースを入れるタイミングとは？</h3>
							<p>味に深みを出すためには、「さしすせそ」以外の調味料が必要なときもありますね。その場合の順番をお教えしましょう。</p>
							<div>
								<div class="mb2">
									<h4 class="recipe__ttl_s mb0" id="sake">酒</h4>
									<p class="mt0">料理酒は、砂糖と同じように食品を柔らかくする作用があります。また、食材の臭みを取ったり、味を染み込みやすくさせる働きもあるので、<strong>砂糖の前</strong>に加えます。<br>「料理酒」として販売されているものには、食塩や甘味料が添加されているものもあります。その場合、塩分の調整に注意しましょう。また、普通の日本酒も料理酒と同じように料理に使用できますが、食塩や甘味料は添加されていないので、自分で味付けする必要があります。</p>
								</div>
								<div class="mb2">
									<h4 class="recipe__ttl_s mb0">みりん</h4>
									<p class="mt0">みりんには「みりん風調味料」と、昔ながらの「本みりん」があります。<br>違いはアルコール分の含有量で、本みりんはアルコール度数が14％前後と高いため、酒のように食材の臭みを消してくれます。みりん風調味料は「みりんタイプ」などとも呼ばれ、アルコール分はほとんど含まれません。</p>
									<p>本みりんは煮崩れを防ぐ効果があるのと、アルコールを飛ばす必要があるため、料理に入れるときは<strong>砂糖よりも前</strong>に入れます。お酒と同じタイミングで入れるとよいでしょう。<br>みりん風調味料は照りや風味を出すために、<strong>味噌よりも後</strong>、調理の仕上げに入れます。みりん風調味料にも食塩が含まれるので、料理酒同様、塩分の調整に注意しましょう。</p>
								</div>
								<div>
									<h4 class="recipe__ttl_s mb0">ソース</h4>
									<p class="mt0">ソースを加えるタイミングは特に決まっていません。仕上げの直前に加えたり、煮込み料理の隠し味に加えて煮込んだりなど、料理の種類や好みに合わせて自由に使いましょう。</p>
								</div>
							</div>
						</div>
					</div>
					<h3 class="recipe__ttl_l mb0">砂糖・塩・醤油を使った調理例</h3>
					<p>砂糖・塩・醤油は味付けの基本中の基本の調味料。特に和食の煮物には、なくてはならないものといえます。「さしすせそ」の順番を踏まえて、美味しい煮物を作る手順をお教えしましょう！</p>
					<h4 class="recipe__ttl">さ=砂糖</h4>
					<dl class="recipe-design__step mb2">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-07@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">和食の煮物の場合、最初に砂糖を入れて味を浸透させます。</dd>
					</dl>
					<h4 class="recipe__ttl">し=塩</h4>
					<dl class="recipe-design__step mb2">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-08@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">砂糖の次に塩を入れて、味気を付けます。</dd>
					</dl>
					<h4 class="recipe__ttl">せ=醤油</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/22/tech22-09@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">塩の次に醤油を入れて、風味や香りをつけます。<br>特に<strong>和食では「さしすせそ」の順番で入れると、美味しく味付けができる</strong>といわれています。</dd>
					</dl>
					<small class="u-small">※レシピによって、入れる順番が異なる場合もあります。</small>
				</div>
			</div>
			<div class="recipe-icn mie_03">
				<div class="inner">
					<p>へぇ～、調味料を入れる順番ってひとつひとつに意味があったんですね！<br>保存方法については全部、冷蔵保存していました…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>間違った保存方法は、カビや酸化の原因になってしまうので<br class="u-only__pc">調味料の風味をきちんと保つためにも、それぞれ適切な方法で保存しましょう</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>よし、帰ったらさっそく<br class="u-only__pc">家にある調味料をチェックしてみよう！</p>
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
