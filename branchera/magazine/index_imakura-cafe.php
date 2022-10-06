<?php
//base
include ("../function.php");
$pageTtl = 'あなたの“今”を聞かせて！いま暮らCaf&eacute;';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = 'ブランシエラクラブのみなさまを対象に実施したアンケート結果から、トレンドを読み解くシリーズ。で、"暮らしの今"をお話ししませんか？';
$metaThum = $img_url."/magazine/imakura-cafe/index_imakura-cafe@2x.jpg";

//bodyClass
$body_class ="page-list imakura-cafe";

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
              <div class="u-small">あなたの“今”を聞かせて！</div>
							<div>いま暮らCaf&eacute;</div>
            </div>
					</h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>
		<section class="main__item">
			<div class="mb1">
				<div>
					<figure>
						<img src="<?php echo $img_url ?>/magazine/imakura-cafe/main-v@2x.png" alt="いらっしゃいませ。いま暮らCaf&eacute;" class="u-img__max" loading="lazy">
					</figure>
				</div>
			</div>
			<aside class="mt3 mb3">
			  <?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		  </aside>
			<div class="u-photolist__row">
				<?php echo show_category_photoList("cafe-report"); ?>
			</div>
		</section>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php
$this_page_article = false;
//$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
