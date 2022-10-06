<?php
//base
include( "../../function.php" );
$content = get_id_data( '15011' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「いちょう切りの方法」を動画で解説。いちょう切りは、丸く輪切りにした野菜を半分に切って、それをさらに半分にした形です。短時間で火が通る、一口大で食べやすいなどのメリットがあるいちょう切り。今回は、にんじん、だいこん、りんご、じゃがいものいちょう切りの方法をご紹介します。';
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
					<span class="recipe-header__ttl">いちょう切りの方法</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。第11回は、「いちょう切りの方法」です。見た目もきれいで食べやすい、いちょう切りの方法をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>マユ先生、ちょっと聞きたいことがあります！<br>先日、豚汁を作ってみたのですが、にんじんだけ火が通りづらくて…<br>長めに煮込んだら、今度はほかの野菜がやわらかくなってしまったんです<br>どうすれば、均等に火が通るようになるのでしょうか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>野菜はそれぞれ硬さが違うから、火加減調整だけだと難しいですよね<br>ちなみに、にんじんはどんな切り方で入れましたか？</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>えっと…なんとなく一口大になるように切って入れたので<br class="u-only__pc">きれいに揃った切り方ではなかったです…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>なるほど！それでは、確かに火が通りづらいと思います<br>豚汁に入れるにんじんは、火も通りやすく見た目もきれいな<br class="u-only__pc">「いちょう切り」がおすすめですよ♪<br>さっそく今から、いちょう切りの方法をご紹介しますね！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to｜<?php echo $pageTtl ?>" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/zeP8Qehe64Y?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l">いちょう切りの方法</h3>
					<p>普段食べている料理によく使われている「いちょう切り」。いちょう切りは、丸く<a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にした野菜をさらに半分に切って（<a href="<?php echo $base_url ?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>）、それをさらに半分にした形（元の<a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>の1/4サイズ）です。切り口がいちょうの葉に似ていることから名付けられたこの切り方には、以下のメリットがあります。</p>
					<ul class="u-list__ul_dot">
						<li>短時間で火が通る</li>
						<li>一口大で食べやすい</li>
						<li>煮汁が染み込みやすい</li>
					</ul>
					<div class="u-clearfix">
						<figure class="u-float__right"><img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other01@2x.jpg"
									alt="マユ先生のHow To にんじんのいちょう切り" style="max-width:300px" class="u-img__max"></figure>
						<p>簡単な手順でできるので、多くの料理に用いられています。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>・<a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>とともに、料理を始めたら、まずマスターしておきたい基本の切り方です。<br>今回は、にんじん、だいこん、りんご、じゃがいものいちょう切りの方法をご紹介します。</p>
					</div>
					<h4 class="recipe__ttl">にんじんの場合</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/11/tech11-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/11/tech11-01@2x.jpg"
								 alt="マユ先生のHow To｜<?php echo $pageTtl ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt" id="wagiri">
							真ん中で2等分に切ったにんじんを、縦半分に切ります。平面を下にしてさらに縦半分に切り、４等分にします。<br>すると、横から見たときの切り口がいちょう形になるので、端から2mm～1cmの厚み（料理に合わせて変える）に揃えて切れば、いちょう切りの完成です。
						</dd>
					</dl>
					<h4 class="recipe__ttl">だいこんの場合</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other02	@2x.jpg"
								 alt="マユ先生のHow To｜<?php echo $pageTtl ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむいて</a>から、にんじんと同じ手順で切っていきます。
						</dd>
					</dl>
					<h4 class="recipe__ttl">りんごの場合</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other03@2x.jpg"
								 alt="マユ先生のHow To｜<?php echo $pageTtl ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							一個を8等分の<a href="<?php echo $base_url ?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にします。Ⅴ字に切り込みを入れて芯を取り、端から2～3mm幅に薄く切ってください。
						</dd>
					</dl>
					<h4 class="recipe__ttl">じゃがいもの場合</h4>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other04@2x.jpg"
								 alt="マユ先生のHow To｜<?php echo $pageTtl ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							じゃがいもの場合は、ちょうど真ん中のあたりに十字に包丁を入れ、4等分（四つ割り）にします。それぞれ端から料理に応じた厚みに切ってください。
						</dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3 u-clearfix">
						<div class="plus1__row">
							<h3 class="plus1__ttl">いちょう切りはどんな料理によく使われる？</h3>
							<p>いちょう切りは、<strong>短時間で火が通り、厚さを変えることで食感に変化を出しやすい</strong>ため、多くの料理に使われています。中でもよく使われるのが豚汁などの汁物や、煮物、炒め物です。<br>汁物や煮物のように長時間火を通す料理であれば、厚めに切って食べ応えを出すことができます。一気に加熱する炒め物の場合、薄めに切れば下ゆでなしでも火が通りやすくなります。</p>
							<figure class="u-float__right">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/11/technic11_other05@2x.jpg"
								 alt="マユ先生のHow To｜<?php echo $pageTtl ?>" style="max-width:300px" class="u-img__max">
							</figure>
							<p class="mb3">また、いちょう切りは野菜だけでなく、<strong>果物にも適している切り方</strong>です。<br>ご紹介したりんご以外だと、レモンやキウイ、パイナップルなどによく用いられます。食べやすくなるだけでなく、見た目も華やかになるのでおすすめですよ。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>ちゃんと厚さを揃えていちょう切りにしたら、<br class="u-only__pc">にんじんもすぐ火が通るようになりました！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>それはよかったです！<br>お料理や野菜の種類によって適した切り方は変わるので、<br class="u-only__pc">基本の切り方は一通りできるようにしておくとベターですね<br><a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>や<a href="<?php echo $base_url ?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>など、ほかの切り方も覚えていきましょう！</p>
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
