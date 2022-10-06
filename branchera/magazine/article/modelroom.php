<?php
//base
include ("../../function.php");
$content = get_id_data('1002');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　1/2」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<h3 class="u-ttl__m">編集部員の紹介</h3>
			<div class="flex between">
				<div class="w50">
					<img
					data-src="../../lib/img/magazine/modelroom/img-01.png"
					data-retina="../../lib/img/magazine/modelroom/img-01.png"
					alt="マンションギャラリー入り口"
					style="max-width:361px;"
					class="u-img__max"
					>
				</div>
				<div class="w50">
					<p>モデルルームをチェックするのは、ブランシエラクラブ編集部員の女性陣。子育てをしながら働く彼女たちならではの視点で、厳しくチェックします！</p>
					<p class="img">
						<img
						data-src="../../lib/img/magazine/modelroom/img-02.png"
						data-retina="../../lib/img/magazine/modelroom/img-02.png"
						alt="二人のこだわりポイント"
						style="max-width: 330px;"
						class="u-img__max"
						>
					</p>
				</div>
			</div>


			<div class="u-assist mb3">
				<p>今回、編集部のターゲットになったのは、「ブランシエラ板橋西台」マンションギャラリー内に設置されたモデルルーム。当マンションは、<a href="<?php echo $base_url ?>/magazine/article/bim.php">長谷工の新技術「長谷工版BIM(ビム)」</a>を取り入れた長谷工のこだわりがつまったマンション。住宅ジャーナリストより“新しい設計手法のマンション”として紹介をされ、<a href="<?php echo $base_url ?>/news/2014/1121.php">朝の情報番組で取材を受ける</a>など、今、注目のマンションです。<br><span class="u-small">※ブランシエラ板橋西台は完売いたしました</span></p>
			</div>


			<h3 class="u-ttl__l">明るさ、広さ、そして風通しの良さに驚き。</h3>

			<h4 class="u-ttl__m">チェック<span class="icon">１</span>明るく開放感いっぱいのリビング・ダイニング</h4>

			<div class="img">
				<img
				data-src="../../lib/img/magazine/modelroom/img-03.png"
				data-retina="../../lib/img/magazine/modelroom/img-03.png"
				alt="明るく開放感いっぱいのリビング・ダイニング"
				style="max-width: 748px;"
				class="u-img__max"
				>
			</div>
			<p class="mb4">「ブランシエラ板橋西台」マンションギャラリーで公開されているのは、専有面積71.60m&sup2;の3LDK（Fタイプ）。ご家族が住まうための十分な広さを備えたファミリープランです。リビング・ダイニングには南東向きのバルコニーからたっぷりと陽光が射し込み、開放感溢れる空間が広がります。さらに、キッチンはリビングと一体となったオープンタイプ。汚れやすい壁面にはキッチンパネルを配し、カウンターには耐久性と美しさを兼ね備えた人工大理石を採用するなど、キレイな状態をキープできる配慮がなされています。</p>

			<h4 class="u-ttl__m">チェック<span class="icon">２</span>「より広く・より開放的に」ブランシエラ板橋西台のこだわり</h4>

			<div class="img">
				<img
				data-src="../../lib/img/magazine/modelroom/img-04.png"
				data-retina="../../lib/img/magazine/modelroom/img-04.png"
				alt="より広く・より開放的に"
				style="max-width: 831px;"
				class="u-img__max"
				>
			</div>

			<p class="mb4">リビング・ダイニングをより広く使えるよう、様々な工夫が凝らされているのも注目したいポイントです。住居を支える柱は、居室にせり出さないアウトフレーム工法。さらに、隣接する洋室とは「スライドする間仕切り（スライドドア）」で区切られており、開放すれば広々としたスペースを確保できます。また、洋室には大容量の「布団クロゼット」を完備し、かさばる衣類や布団をすっきり収納できます。</p>

			<h4 class="u-ttl__m">チェック<span class="icon">３</span>風通しと採光にこだわった玄関</h4>

			<div class="flex flex_around">
				<div class="w35">
					<img
					data-src="../../lib/img/magazine/modelroom/img-05.png"
					data-retina="../../lib/img/magazine/modelroom/img-05.png"
					alt="風通しと採光にこだわった玄関"
					style="max-width: 246px;"
					class="u-img__max not-w100"
					>
				</div>
				<div class="w65">
					<p>玄関には、やわらかな自然光を取り込むトップライトや開閉可能な玄関窓を設置し、明るく通気性の良い空間を実現。さらに、外からの風が住居内に行き渡るので、お部屋全体の風通しが向上します。</p>


					<div class="u-assist" style="overflow:hidden;">
						<div class="img fl">
							<img
							data-src="../../lib/img/magazine/modelroom/img-07.png"
							data-retina="../../lib/img/magazine/modelroom/img-07.png"
							alt="ブリーシア"
							style="max-width: 207px;"
							class="u-img__max"
							></div>
							<p>さらに、廊下側のお部屋の窓には、防犯性と通風性を実現した、新しい発想のサッシ「ブリーシア」を採用。細かなところまで長谷工の配慮がいきわたります。<br>
								<span class="u-small">※ブリーシアについて詳しくは<a href="http://www.haseko.co.jp/tri/archives/exterior/sash.html" target="_blank" class="u-icon">こちら</a>をご覧ください。</span></p>
							</div>
						</div>
					</div><!-- //section -->

					<nav class="u-pager">
						<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="modelroom2.php" class="u-pager__link"><span class="u-pager__text">働く女性視点で、○○を念入りにチェック！！</span></a></h6></div>
						<ul class="u-pager__row">
							<li class="u-pager__item active"><a href="modelroom.php">1</a></li>
							<li class="u-pager__item"><a href="modelroom2.php">2</a></li>
						</ul>
					</nav>

				</section>
			</article>
		</main>

		<?php
		$toindex_url = "/magazine/index_technology.php";
		include ($inc_path."/lib/inc/toindex__magazin.php");
		?>
		<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
		<?php  include ($inc_path."/lib/inc/footer.php"); ?>
		<?php  include ($inc_path."/lib/inc/foot.php"); ?>
