<?php
//base
include( "../function.php" );
$pageTtl = '住まいレージ';
//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "住まいレージでたまったスマイルは、あなたの暮らしを快適にするサービスや商品に交換することができます。交換特典は随時拡大中です！";
$metaThum = $img_url."/thum/main-header__smile@2x.png";
//bodyClass
$body_class ="page-list";

$smileType ="smile-index";
//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>


<?php /*
//base
include( "../function.php" );
$content = get_id_data( '90000' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '住まいレージ-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-list";

$smileType ="smile-index";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
*/ ?>
<main class="main">
	<article class="main__row">
		<?php
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__icon">
					<img
					data-src="../lib/img/common/body/category-icon__smile.png"
					data-retina="../lib/img/common/body/category-icon__smile@2x.png"
					alt="<?php echo $pageTtl; ?>の画像"
					width="66"
					height="82">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
					<div class="main-header__tags u-tags">
						<?php echo show_category_tags("magazine,town,town2 , wakuwaku,comic"); ?>
					</div>
				</div>
			</div>
		</header>


		<section class="main__item">

			<ul class="u-articlelist__row">
				<li class="u-articlelist__item">
					<a href="<?php echo $base_url ?>/smile/about-smile.php" class="u-articlelist__a">
						<figure class="u-articlelist__img">
							<img
							data-src="../lib/img/thum/about-smileage.png"
							data-retina="../lib/img/thum/about-smileage@2x.png"
							alt="住まいレージとは？">
						</figure>
						<h2 class="u-articlelist__ttl">住まいレージとは？</h2>
						<p class="u-articlelist__ex">住まいレージとは、スマイル（長谷工ポイント）を利用して、あなたの暮らしを快適にするサービスや商品に交換することができる、ポイントサービスです。</p>
						<div class="toIndex">
							<div class="indexIcon"></div>
							<div class="indexWord">詳細ページへ</div>
						</div>
					</a>
				</li>

				<li class="u-articlelist__item">
					<a href="<?php echo $base_url ?>/smile/accumulate-smileage.php" class="u-articlelist__a">
						<figure class="u-articlelist__img accumulate">
							<img
								data-src="<?php echo $img_url; ?>/thum/index-smile.png"
								data-retina="<?php echo $img_url; ?>/thum/index-smile@2x.png"
							 	alt="スマイルをためる">
						</figure>
						<h3 class="u-articlelist__ttl">スマイルをためる</h3>
						<p class="u-articlelist__ex">サイト利用やコンテンツ、ゲームなどをお楽しみいただくことでポイントをためることができます。</p>
						<div class="toIndex">
							<div class="indexIcon"></div>
							<div class="indexWord">詳細ページへ</div>
						</div>
						<div class="u-articlelist__icon"></div>
					</a>
				</li>

				<li class="u-articlelist__item">
					<a href="<?php echo $base_url ?>/smile/use-smileage.php" class="u-articlelist__a">
						<figure class="u-articlelist__img use-smileage">
							<?php
								echo s_show_category_photoList__random("exchange-hcg");
							?>
						</figure>
						<h3 class="u-articlelist__ttl">スマイルをつかう</h3>
						<p class="u-articlelist__ex">抽選賞品の応募や長谷工グループの生活サービスなどに利用できます。</p>
						<div class="toIndex">
							<div class="indexIcon"></div>
							<div class="indexWord">一覧ページへ</div>
						</div>
						<div class="u-articlelist__icon"></div>
					</a>
				</li>

				<li class="u-articlelist__item">
					<a data-scroll href="<?php echo $base_url ?>/smile/use-smileage.php#exchange" class="u-articlelist__a">
						<figure class="u-articlelist__img exchange-product">
							<?php
							echo s_show_category_photoList__random("exchange-product");
							?>
						</figure>
						<h3 class="u-articlelist__ttl">スマイルで交換する</h3>
						<p class="u-articlelist__ex">食用品や家電など、素敵な商品と交換することができます。</p>
						<div class="toIndex">
							<div class="indexIcon"></div>
							<div class="indexWord">一覧ページへ</div>
						</div>
						<div class="u-articlelist__icon"></div>
					</a>
				</li>

			</ul>
		</section>

		<nav class="main__snav snav">
			<?php include ($inc_path."/lib/inc/page/_smile/__snav.php"); ?>
		</nav>

	</article>
</main>

<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
