<?php
//base
include( "../../function.php" );
$content = get_id_data( '2004' );
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
				data-src="../../lib/img/magazine/nishidai80/spot-3-main.png"
				data-retina="../../lib/img/magazine/nishidai80/spot-3-main@2x.png"
				alt="洋菓子製造販売　菓子工房 ガトーマスダ"
				style="max-width:855px;"
				class="u-img__max"
				>
			</h3>



			<ul class="flex flex_around">
				<li class="w50"><div class="img">
					<img
					data-src="../../lib/img/magazine/nishidai80/spot-3-sub-1.png"
					data-retina="../../lib/img/magazine/nishidai80/spot-3-sub-1@2x.png"
					alt="image"
					style="max-width:442px ;"
					class="u-img__max"
					>
				</div>
			</li>
			<li class="w50"><p>50年以上に渡りフルーツの洋酒漬を中心に加工を行う、菓子材料製造の老舗が営む洋菓子店です。</p>
				<p>テレビをはじめ、メディアでも多数紹介されている「完熟アップルパイ」は、契約農家に土壌改良から依頼した、こだわりの山形産完熟リンゴ「ふじ」を使用。長年培ってきた独自の技術が生み出すサクサクのパイ生地と、シャキシャキとしたリンゴの食感、そして素材そのものの風味を活かした優しい甘みが老若男女に幅広く支持されています。</p>
			</li>
		</ul>
		<p>そのほか、ヨード卵光を使った濃厚な生地で純生クリームを包んだロールケーキや、しっとりとした口当たりのフルーツケーキなど、店頭には素材への吟味を重ねた洋菓子が多数並びます。</p>
		<div class="img mb4">
			<img
			data-src="../../lib/img/magazine/nishidai80/spot-3-sub-2.png"
			data-retina="../../lib/img/magazine/nishidai80/spot-3-sub-2@2x.png"
			alt="image"
			style="max-width: 755px;"
			class="u-img__max"
			>
		</div>


		<div class="u-assist">
			<h5 class="u-ttl__s">[洋菓子製造販売]菓子工房 ガトーマスダ</h5>
			<ul class="list">
				<li>住所：板橋区高島平7-14-21</li>
				<li>TEL.03-3939-2992</li>
				<li>営業時間／10：00〜20：00、定休日／元旦</li>
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
					<a href="spot-2.php" >
						<img
						data-src="../../lib/img/magazine/town/shop-2.png"
						data-retina="../../lib/img/magazine/town/shop-2@2x.png"
						alt="インディラ"
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
				<li class="u-only__sp">
					<a href="spot-3.php" >
						<img
						data-src="../../lib/img/magazine/town/shop-2.png"
						data-retina="../../lib/img/magazine/town/shop-2@2x.png"
						alt="インディラ"
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
