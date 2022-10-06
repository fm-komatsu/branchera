<?php
//base
include ("../function.php");
$pageTtl = 'すてきな街見つけました';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "あなたのそばに長谷工がきっとある。マンション建設をはじめ、住まいに関わり続けた長谷工のある風景をご紹介します。";
$metaThum = $img_url."/thum/magazine-nishidaitown.png";

//bodyClass
$body_class ="page-list";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__category-title u-category-title town">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex">
					<h2 class="u-category-title__ttl"><?php echo $pageTtl; ?></h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<div class="u-photolist__row">

				<article class="u-photolist__item">
					<label class="u-photolist__wrap">
						<a href="<?php echo $base_url; ?>/magazine/town2.php" class="u-photolist__inner">
							<div class="u-photolist__img"><img data-src="<?php echo $img_url; ?>/thum/magazine-urawatown.png" alt="浦和区駒場エリア"></div>
							<h3 class="u-photolist__ttl">浦和区駒場エリア</h3>
							<p class="u-photolist__ex">文教の薫り漂う緑豊かな邸宅街。利便性だけでなくライフスタイルに合わせたお店も多い浦和区駒場エリア。</p>
						</a>
						<div class="u-photolist__tags u-tags">
							<?php echo show_category_tags("town2"); ?>
						</div>
					</label>
				</article>

				<article class="u-photolist__item">
					<label class="u-photolist__wrap">
						<a href="<?php echo $base_url; ?>/magazine/town.php" class="u-photolist__inner">
							<div class="u-photolist__img"><img data-src="<?php echo $img_url; ?>/thum/magazine-nishidaitown.png" alt="浦和区駒場エリア"></div>
							<h3 class="u-photolist__ttl">西台・高島平エリア</h3>
							<p class="u-photolist__ex">穏やかな街並みと心地よい緑。生活利便施設やお洒落なお店も揃う、西台・高島平エリア。</p>
						</a>
						<div class="u-photolist__tags u-tags">
							<?php echo show_category_tags("town"); ?>
						</div>
					</label>
				</article>
			</div>
		</section>

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
