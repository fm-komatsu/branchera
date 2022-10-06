<?php
//base
include( "../../function.php" );
$content = get_id_data( '15059' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「半月切りの方法」を動画で解説。半月切りは、丸い棒状の野菜を縦半分に切り、切り口を下にして、端から切っていく切り方です。今回は、にんじん、だいこん、なす、きゅうり、さつまいも、レモン、トマト、たまねぎの半月切りの方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'にんじんは皮をむいて、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。';
$altCap02 = 'だいこんは皮をむいて、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。';
$altCap03 = 'なすはヘタを切り落として、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。';
$altCap04 = 'きゅうりは最初に両端を切り落として、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。';
$altCap05 = 'さつまいもは最初に両端を切り落として、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。';
$altCap06 = 'レモンの端を切り落として、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。';
$altCap07 = 'トマトは縦半分に切って、ヘタをとります。切り口を下にして、端から一定の幅で切ってください。';
$altCap08 = '玉ねぎは皮をむいて、両端を切り落とし、縦半分に切ります。切り口を下にして、端から切ってください。たまねぎの半月切りには、繊維に沿う切り方と、繊維を断つ切り方があります。';
$altCap09 = 'れんこんの半月切り';
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第59回は、「半月切りの方法」です。見た目や味にも影響する野菜や果物の切り方についてご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>野菜の切り方にはいろいろありますよね<br>以前に教わった<a href="<?php echo $base_url ?>/magazine/article/recipe-technic11.php" class="recipe-design__link">いちょう切り</a>以外に、どんな切り方があるんでしょうか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p><a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>、いちょう切り、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>などたくさんあります<br>切り方をいろいろ覚えると、お料理の幅がぐんと広がりますよ<br>今日は半月切りをご紹介しましょう！</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>半月切り？<br>お月さまみたいですね<br>ぜひ、教えてくださ～い！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/AVY4ndQSkw0?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0">半月切りの方法</h3>
					<p class="mb2">野菜の切り方のひとつ、半月切り。その名の通り半月の形になるため、「はんげつぎり」と呼びます。半月切りは、丸い棒状の野菜を<strong>縦半分</strong>に切り、切り口を下にして、端から切っていきます。厚さは食材や料理によって異なり、調整が必要です。<br>野菜別に、半月切りの切り方と向いている料理についてご紹介します。</p>
					<h4 class="recipe__ttl">にんじんの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap01); */ ?>
							にんじんは<a href="<?php echo $base_url ?>/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむいて</a>、縦半分に切ります。切り口を下にして、端から一定の幅で切ってください。
							<h5>●向いている料理</h5>
							薄切り…味噌汁、豚汁などの汁物、八宝菜ほか中華料理など<br>厚切り…煮物、グラッセなど
						</dd>
					</dl>
					<h4 class="recipe__ttl">だいこんの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?>
							<h5>●向いている料理</h5>
							薄切り…サラダ、漬け物など<br>厚切り…ぶり大根、鍋など
						</dd>
					</dl>
					<h4 class="recipe__ttl">なすの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap03); ?>
							<h5>●向いている料理</h5>
							薄切り…和え物、浅漬けなど<br>厚切り…炒め物、煮物など
						</dd>
					</dl>
					<h4 class="recipe__ttl">なすの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?>
							<h5>●向いている料理</h5>
							薄切り…浅漬け、酢の物など<br>厚切り…炒め物など
						</dd>
					</dl>
					<h4 class="recipe__ttl">さつまいもの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
							<h5>●向いている料理</h5>
							薄切り…さつまいもチップなど<br>厚切り…煮物、大学いもなど
						</dd>
					</dl>
					<h4 class="recipe__ttl">レモンの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-06@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap06); ?>
							<h5>●向いている料理</h5>
							肉・魚のソテーの添え物、刺身のツマなど
						</dd>
					</dl>
					<h4 class="recipe__ttl">トマトの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-07@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap07); ?>
							<h5>●向いている料理</h5>
							薄切り…サラダ、サンドイッチなど<br>厚切り…鍋、グラタンなど
						</dd>
					</dl>
					<h4 class="recipe__ttl">たまねぎの半月切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-08@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap08); */ ?>
							玉ねぎは皮をむいて、両端を切り落とし、縦半分に切ります。切り口を下にして、端から切ってください。たまねぎの半月切りには、<strong>繊維に沿う切り方</strong>と、<strong>繊維を断つ切り方</strong>があります。
							<h5>●向いている料理</h5>
							繊維に沿う切り方…炒め物、煮込み料理など<br>繊維を断つ切り方…サラダ、マリネなど
						</dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h3 class="plus1__ttl mb2">ほかにもある！半月切りに適した食材</h3>
							<figure class="u-float__right">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/59/tech59-09@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<p>ご紹介した野菜以外にも、じゃがいも、れんこん、やまいも、ゴーヤなども、半月切りがよく使われます。じゃがいもややまいもの半月切りは、味噌汁や煮物に。れんこんやゴーヤの半月切りは、炒め物にぴったりです。</p>
							<p>切り口を下にして、安定した状態で切ることができる半月切りは、厚さの調整がしやすい切り方です。歯ごたえがポイントの料理を作る際などに、ぜひ使ってみてください。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>半月切りの野菜を使って<br class="u-only__pc">美味しいお料理がたくさんできそうな気がしてきました！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>半月切りだけでなく、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>や<a href="<?php echo $base_url ?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>も合わせて覚えてくださいね！<br>お料理のレパートリーが広がりますよ</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>ハイ！野菜の切り方をたくさん覚えて<br class="u-only__pc">お料理上手になっちゃいま～す♪</p>
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
