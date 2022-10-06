<?php
//base
include ("../function.php");
$pageTtl = '部屋のお掃除プロ監修 三毛猫きらりのお掃除攻略ガイド';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = '毎日忙しく、なかなかおうちの掃除が行き届かない家族に、ペットの三毛猫「きらり」が掃除方法をレクチャー！基本の掃除方法から、頑固な汚れの落とし方まで、分かりやすく楽しくご紹介♪';
$metaThum = $img_url."/thum/index_cleaning@2x.jpg";

//bodyClass
$body_class ="page-list osouji";

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
		<header class="main__category-title u-category-title">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex u-only__pc">
					<h2 class="u-category-title__ttl">
						<div>
              <div class="u-small">部屋のお掃除プロ監修</div>
							<div class="u-font__palt">三毛猫きらりのお掃除攻略ガイド</div>
            </div>
					</h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<!--<div class="mb1">
				<div>
					<figure>
						<img src="<?php echo $img_url ?>/magazine/imakura-cafe/main-v@2x.png" alt="画像待ち" class="u-img__max" loading="lazy">
					</figure>
				</div>
			</div> -->
			<div class="u-photolist__row">
				<?php echo show_category_photoList("cleaning"); ?>
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
