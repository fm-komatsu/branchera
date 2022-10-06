<?php
//base
include ("../function.php");
$tagString = htmlspecialchars($_GET['tag'], ENT_QUOTES, "UTF-8");
$pageTtl = "[".$tagString.']ワード検索結果';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "ブランシエラクラブの[".$tagString."]ワードに関する検索結果ページです。ゆたかな暮らしを支える長谷工の技術・サービスや、日々の生活に役立つ情報をお届けします。";
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="page-list";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__icon">
					<img data-src="../lib/img/common/body/category-icon__search.png" data-retina="../lib/img/common/body/category-icon__search@2x.png" alt="<?php echo $pageTtl; ?>の画像" width="56" height="81">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<h2 class="u-ttl__l">
				<?php
				if(isset($tagString)){

					$list = show_photo_list_by_tag($tagString);

					if(empty($list)){
						echo "[".$tagString."]を検索しましたが、該当の記事や情報が見つかりませんでした。";
					}else{
						echo "[".$tagString."]に関する、記事や情報の一覧です。";
					}
				}
				?>
			</h2>
			<!--
			<nav class="u-assist_search">

					<div class="main-header__tags u-tags">
						<h5 class="u-tags__ttl">人気のタグ一覧</h5>
						<?php echo show_all_tags(); ?>
					</div>
			</nav>
-->
			<div class="u-photolist__row">
				<?php echo $list; ?>
			</div>
		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
