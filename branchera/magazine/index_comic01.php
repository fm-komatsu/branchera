<?php
//base
include ("../function.php");
$pageTtl = 'どうしても部屋が片付かない家族の奮闘記「何でか、部屋が片付かない。」';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "部屋の片付けが苦手な家族が、片付けのノウハウを学びながら憧れの部屋を目指すマンガコラムです。物語の中には、収納アドバイザー監修のお役立ちメソッドが満載！";
$metaThum = $img_url."/magazine/comic01/comic01-01.png";

//bodyClass
$body_class ="page-list knowhowIndex";

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
		<header class="main__category-title u-category-title commic">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex">
					<h2 class="u-category-title__ttl">
						<div>
							<div class="u-small">どうしても部屋が片付かない家族の奮闘記</div>
							<div>何でか、部屋が片付かない。</div>
						</div>
					</h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
			<aside class="mt3">
				<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
			</aside>
		</header>
		<section class="main__item">
			<div class="u-photolist__row">
				<?php echo show_category_photoList("comic"); ?>
			</div>
		</section>
		<aside class="mt3">
			<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
		</aside>

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
