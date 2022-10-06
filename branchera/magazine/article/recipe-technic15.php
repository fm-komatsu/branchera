<?php
//base
include( "../../function.php" );
$content = get_id_data( '15015' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「くし形切りの方法」を動画で解説。くし形切りは、丸い食材を縦半分にして、中央から均等に放射線状に切り分ける切り方です。トマト、たまねぎ、キャベツ、じゃがいも等の野菜のほか、りんごのくし形切りの手順やポイントを分かりやすくご紹介します。';
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第15回は、「くし形切りの方法」です。今回は、料理の味が染み込みやすくなる、くし形の切り方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>マユ先生、ちょっと質問が…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>どうされましたか？</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>サラダを作ろうと思ってトマトを切ったのですが<br class="u-only__pc">形がバラバラになってしまって…<br>一切れが厚過ぎるものもあれば、薄いものもあって<br class="u-only__pc">均等に切れないんです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>サラダに入れるトマトであれば、<br class="u-only__pc">丸い食材を放射線状に切る「くし形切り」が見栄えもよくておすすめです<br>野菜を均等にくし形に切るにはコツが必要なので<br class="u-only__pc">一からレッスンしていきましょう！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/CucVtP7p0z8?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0" id="kushigatagiri">くし形切りの方法</h3>
					<p>くし形切りとは、トマトやたまねぎ、キャベツなど丸い野菜を縦半分にして、中央から均等に放射線状に切り分ける切り方です。野菜以外にも、りんごなどの丸みのある果物や、ゆで卵などを切るときに使われます。</p>
					<p>ここでは、食材ごとのくし形切りの方法をご紹介します。</p>
					<h4 class="recipe__ttl">トマトの場合</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-01@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">まず<strong>縦半分</strong>に切ってから、ヘタや芯を取り除きます。包丁をV字に入れてヘタを取るのがポイントです。</dd>
					</dl>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-02@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">半分になったトマトを縦に<strong>2等分</strong>し、切り分けたものをそれぞれ<strong>もう一度2等分</strong>します。食材を立てて切ると、均等に切り分けることができます。</dd>
					</dl>
					<h4 class="recipe__ttl">たまねぎの場合</h4>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-03@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">たまねぎの皮をむき、頭と根の部分を切り落として、縦半分に切ります。<br>切り口を下にして、繊維に沿って、中心の芯の部分に向けて放射線状に包丁を入れていきます。たまねぎの大きさや、使用する料理によって変わりますが、4～6等分にしてください。</dd>
					</dl>
					<h4 class="recipe__ttl">キャベツの場合</h4>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-04@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">丸いキャベツを縦半分に切り、切り口の中央から包丁を入れて2等分、あるいは3等分に切っていきます。</dd>
					</dl>
					<h4 class="recipe__ttl">じゃがいもの場合</h4>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-05@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><a href="<?php echo $base_url?>/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむき</a>、縦半分に切ります。切り口を下にして、中央から均等に放射線状に切り分けます。<br>じゃがいもの芽は毒性の成分を含んでいるので、必ず取り除きましょう。また、切ったじゃがいもは黒ずみやすいので、すぐに水に浸けて変色を防いでください。</dd>
					</dl>
					<h4 class="recipe__ttl">りんごの場合</h4>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/15/tech15-06@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt"><p class="mb2"><a href="<?php echo $base_url?>/magazine/article/recipe-technic26.php" class="recipe-design__link">りんご</a>のくし形切りは、最もポピュラーなりんごの切り方です。<br>まず、上から見たときに十字になるように包丁を入れ、りんごを4等分に切ります。<br>次に、皮を上にしてさらに半分に切り、8等分にします。V字に包丁を入れて芯の部分を取り除いたら、一切れずつむいて完成です。</p>りんごの皮のむき方・くし形以外の切り方は<a href="<?php echo $base_url?>/magazine/article/recipe-technic26.php" class="recipe-design__link">こちら</a></dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
					<div class="plus1__row">
						<h3 class="plus1__ttl">くし形切りに適した野菜、適さない野菜とは？</h3>
						<p>くし形切りに適している野菜は、丸みのある野菜です。ここまでご紹介した野菜のほか、かぶ、チンゲン菜、なすもくし形切りに適しています。また、たけのこの穂先を切り分けるときも、くし形切りが使われます。ちなみに、ももやレモンなどの果物にもおすすめの切り方です。</p>
						<p>逆にくし形切りに適さないのは、にんじんのように硬くて細長い野菜。にんじんには<a href="<?php echo $base_url?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>や、輪切りを半分にした<a href="<?php echo $base_url?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>、<a href="<?php echo $base_url?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>などが用いられます。</p>
					</div>
				</div>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>そうか、均等に切るには野菜を立てて、上から見ればいいんですね！<br>これで美味しいトマトサラダを作ることができそうです！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>くし形切りだけではなく、ほかにも<a href="<?php echo $base_url?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>や<a href="<?php echo $base_url?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>など<br class="u-only__pc">それぞれの食材とお料理にふさわしい切り方があります<br>ぜひマスターして、お料理の幅を広げてくださいね♪</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>はい！よーし、頑張って覚えるぞ～！</p>
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
