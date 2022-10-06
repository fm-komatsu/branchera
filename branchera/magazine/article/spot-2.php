<?php
//base
include( "../../function.php" );
$content = get_id_data( '2005' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//release date
$release_year = "2014";
$release_month ="11";
$release_day ="";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_town.php", "すてきな街見つけました" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<section class="main__wrapper">

			<h3 class="center mb6">
				<img
				data-src="../../lib/img/magazine/nishidai80/spot-2-main.png"
				data-retina="../../lib/img/magazine/nishidai80/spot-2-main@2x.png"
				alt="欧風カレー インディラ"
				style="max-width:855px;"
				class="u-img__max"
				>
			</h3>

			<h4 class="u-ttl__m">研究に10年以上の歳月を費やして</h4>
			<div class="flex flex_around">
				<div class="w45">
					<p>研究に10年以上の歳月を費やして生まれたというカレーの味を、昭和48年の創業以来、変わらぬスタイルで提供する欧風カレーの老舗です。</p>
					<p>カレーを注文すると一緒に提供されるポテトは、初代店主が考案したもの。じゃがいもに含まれるデンプンが辛さを緩やかにしてくれるので、カレーとの相性は抜群です。</p>
				</div>
				<div class="w55">
					<div class="img">
						<img
						data-src="../../lib/img/magazine/nishidai80/spot-2-sub-1.png"
						data-retina="../../lib/img/magazine/nishidai80/spot-2-sub-1.png"
						alt="欧風カレー インディラ"
						style="max-width: 489px;"
						class="u-img__max"
						></div>
					</div>
				</div>

				<div class="flex flex_around mb4">
					<div class="w50"><div class="img">
						<img
						data-src="../../lib/img/magazine/nishidai80/spot-2-sub-2.png"
						data-retina="../../lib/img/magazine/nishidai80/spot-2-sub-2@2x.png"
						alt="image"
						style="max-width:480px ;"
						class="u-img__max"
						></div></div>
						<div class="w50">
							<p>一番人気の「ビーフカレー」は、柔らかく煮込まれた牛肉がゴロゴロと入っているのがうれしい、味わい深い一皿。スパイスの辛さと、野菜と果物の甘みが食欲をそそります。</p>
							<p>カレーを堪能した後は、コーヒーがおすすめ。こちらも、初代店主が様々なコーヒーを試飲し、欧風カレーと合うものを選んだのだそう。すっきりとした飲み口が爽やかな一杯です。</p>
						</div>
					</div>

					<div class="u-assist" >
						<h5 class="u-ttl__s">[欧風カレー]インディラ</h5>
						<ul class="list">
							<li>住所：板橋区高島平1-74-10 日東ビル1F</li>
							<li>TEL.03-3936-8969</li>
							<li>営業時間／11：00～20：30（L.O.）、定休日／火曜</li>
						</ul>
					</div>


					<div class="section" id="town-list-spot">
						<h4 class="u-ttl__m">西台・高島平のお洒落スポット</h4>
						<ul class="flex mb4">
							<li class="u-only__pc">
								<a href="spot-1.php" >
									<img
									data-src="../../lib/img/magazine/town/shop-1.png"
									data-retina="../../lib/img/magazine/town/shop-1@2x.png"
									alt="カフェ　ハナハナ"
									style="max-width: 271px;"
									class="u-img__max"
									>
								</a>
							</li>
							<li style="margin-left: 8px;" class="u-only__pc">
								<a href="spot-3.php" >
									<img
									data-src="../../lib/img/magazine/town/shop-3.png"
									data-retina="../../lib/img/magazine/town/shop-3@2x.png"
									alt="ガトーマスダ"
									style="max-width: 271px;"
									class="u-img__max"
									>
								</li>
								<li class="u-only__sp">
									<img
									data-src="../../lib/img/magazine/town/shop-1.png"
									data-retina="../../lib/img/magazine/town/shop-1@2x.png"
									alt="カフェ　ハナハナ"
									style=""
									class="u-img__max mb2"
									>
								</a>
							</li>
							<li style="margin-left: 8px;" class="u-only__sp">
								<a href="spot-3.php" >
									<img
									data-src="../../lib/img/magazine/town/shop-3.png"
									data-retina="../../lib/img/magazine/town/shop-3@2x.png"
									alt="ガトーマスダ"
									style=""
									class="u-img__max"
									>
								</a>
							</li>
						</ul>
					</div><!-- //section -->

				</section>
				<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
			</article>
		</main>

		<?php
		$toindex_url = "/magazine/town.php";
		include ($inc_path."/lib/inc/toindex__magazin.php");
		?>
		<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
		<?php  include ($inc_path."/lib/inc/footer.php"); ?>
		<?php  include ($inc_path."/lib/inc/foot.php"); ?>
