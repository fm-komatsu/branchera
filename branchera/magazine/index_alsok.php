<?php
//base
include ("../function.php");
$pageTtl = 'プロに聞く。暮らしの危機管理。';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "暮らしに潜む「危険や犯罪」。気をつけておくべきことをプロである綜合警備保障株式会社（ALSOK）にお聞きしました。";
$metaThum = $img_url."/magazine/alsok/common/thumb_alsok@2x.jpg";

//bodyClass
$body_class ="page-list knowhowIndex";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

//release date
$release_year = "2019";
$release_month ="6";
$release_day ="";
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__category-title u-category-title alsok">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex">
					<h2 class="u-category-title__ttl">
						<div>
							<div class="u-small">プロに聞く。</div>
							<div>暮らしの危機管理。</div>

						</div>
					</h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<nav class="main__snav">
			<div class="snav__row">
				<a href="#children" class="snav__item" data-scroll>子ども編</a>
				<a href="#senior" class="snav__item" data-scroll>高齢者編</a>
				<a href="#bousai" class="snav__item" data-scroll>防災編</a>
				<a href="#mansion" class="snav__item" data-scroll>マンション特有の犯罪編</a>
				<a href="#other" class="snav__item" data-scroll>その他の犯罪編</a>
			</div>
		</nav>
		<section class="main__item">
			<section class="mb2">
				<h3 class="u-ttl__bc orange" id="children"><span class="u-ttl__bc_main">子ども編</span><span class="u-ttl__bc_ex">好奇心いっぱいのお子さまを守るために</span></h3>
				<div class="u-photolist__row">
					<?php echo show_category_photoList("alsok-children"); ?>
				</div>
			</section>
			<section class="mb2">
				<h3 class="u-ttl__bc green" id="senior"><span class="u-ttl__bc_main">高齢者編</span><span class="u-ttl__bc_ex">「自分は大丈夫」そう思っていませんか？</span></h3>
				<div class="u-photolist__row">
					<?php echo show_category_photoList("alsok-senior"); ?>
				</div>
			</section>
			<section class="mb4">
				<h3 class="u-ttl__bc yellow" id="bousai"><span class="u-ttl__bc_main">防災編</span><span class="u-ttl__bc_ex">いざというとき、慌てないために</span></h3>
				<div class="u-photolist__row">
					<?php echo show_category_photoList("alsok-bousai"); ?>
				</div>
				<div class="mt3 mt2_sp">
					<div class="center">
						<a class="u-btn_brand_l center" href="<?php echo $base_url?>/smile/article/exchange-emergency.php">交換商品 防災グッズはこちら</a>
					</div>
				</div>
			</section>
			<section class="mb2">
				<h3 class="u-ttl__bc blue" id="mansion"><span class="u-ttl__bc_main">マンション特有の犯罪編</span><span class="u-ttl__bc_ex">マンションのセキュリティとは…</span></h3>
				<div class="u-photolist__row">
					<?php echo show_category_photoList("alsok-mansion"); ?>
				</div>
			</section>
			<section>
				<h3 class="u-ttl__bc violet" id="other"><span class="u-ttl__bc_main">その他の犯罪編</span><span class="u-ttl__bc_ex">社会動向を反映した犯罪とは…</span></h3>
				<div class="u-photolist__row">
					<?php echo show_category_photoList("alsok-other"); ?>
				</div>
			</section>
		</section>

		<nav class="main__snav">
			<div class="snav__row">
				<a href="#children" class="snav__item" data-scroll>子ども編</a>
				<a href="#senior" class="snav__item" data-scroll>高齢者編</a>
				<a href="#bousai" class="snav__item" data-scroll>防災編</a>
				<a href="#mansion" class="snav__item" data-scroll>マンション特有の犯罪編</a>
				<a href="#other" class="snav__item" data-scroll>その他の犯罪編</a>
			</div>
		</nav>

</article>
</main>

<?php
$this_page_article = false;
//$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
