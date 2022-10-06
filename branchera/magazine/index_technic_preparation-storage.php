<?php
//base
include ("../function.php");
$pageTtl = '下準備・保存方法の基本';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "「うちのご飯は世界イチ」番外編！包丁の使い方や、出汁の取り方など、今さら聞けない料理の基本を、動画で分かりやすく解説します。";
$metaThum = $img_url."/magazine/comic02/technic/tech_cate01@2x.png";

//bodyClass
$body_class ="page-list recipeindex";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic02.php#technique" ,"今さら聞けない料理のアレコレ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <header class="main__category-title u-category-title techcate">
      <div class="u-category-title__row">
        <figure class="u-category-title__thum">
          <img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
        </figure>
        <div class="u-category-title__ex">
          <h2 class="u-category-title__ttl">
            <div>
              <div class="u-small">家族みんなで作れる簡単お料理レシピ</div>
              <div>今さら聞けない料理のアレコレ</div>

            </div>
          </h2>
          <p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
        </div>
      </div>
    </header>
    <?php if(isset($bannerCmId) && $bannerCmId === '999') { ?>
    <?php } else { ?>
		<div class="mb5 mb3_sp">
			<div>
				<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
			</div>
		</div>
    <?php } ?>
    <section class="main__item">
      <h3 class="u-ttl__l" id="hocho">下準備・保存方法の基本</h3>
      <div class="recipephotolist__row mb3">
        <?php echo show_event_photoList_2tags("recipe-technic","動画","下準備・保存方法の基本") ?>
      </div>
    </section>

    <div class="main__item">
      <section>
        <h2 class="u-ttl__m">カテゴリー 一覧</h4>
        <div class="recipephotolist">
          <?php include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-category_list.php"); ?>
        </div>
      </section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>

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
