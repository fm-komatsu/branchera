<?php
//base
include ("../function.php");
$pageTtl = '「うちのご飯は世界イチ」家族みんなで作れる簡単お料理レシピ';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "家事に仕事に子育てに…毎日忙しい家族のもとへ、突然現れたフライパンの妖精「フラッキー」！フライパン1つで作ることができる時短＆簡単レシピをフラッキーが動画でご紹介します。";
$metaThum = $img_url."/magazine/comic02/common/thumb_recipe@2x.png";

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
              <div class="u-small">時短＆簡単！お料理レシピ</div>
              <div>うちのご飯は世界イチ</div>

            </div>
          </h2>
          <p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
        </div>
      </div>
    </header>

    <nav class="main__snav mb5 mb3_sp">
      <div class="snav__row">
        <a href="#collect" class="snav__item" data-scroll>うちのご飯は世界イチ まとめ記事</a>
        <a href="#recipe" class="snav__item" data-scroll>うちのご飯は世界イチ</a>
        <a href="#technique" class="snav__item" data-scroll>今さら聞けない料理のアレコレ</a>
      </div>
    </nav>
    <?php if(isset($bannerCmId) && $bannerCmId === '999') { ?>
    <?php } else { ?>
		<div class="mb5 mb3_sp">
			<div>
				<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
			</div>
		</div>
    <?php } ?>
    <section class="main__item">
      <h3 class="u-ttl__l first-of-type" id="collect">うちのご飯は世界イチ まとめ記事</h3>
      <p class="u-assist">「うちのご飯は世界イチ」でこれまでご紹介してきたレシピやお料理の基本の中から、お弁当作りに欠かせない、基本レシピをまとめてご紹介します。</p>
      <div class="u-photolist__row">
        <?php echo show_category_photoList("recipe-collect"); ?>
      </div>
    </section>
    <section class="main__item mb5_sp">
      <h3 id="recipe" class="mb2">
        <img src="<?php echo $img_url; ?>/magazine/comic02/index/head_recipe@2x.png" loading="lazy" alt="うちのご飯は世界イチ" class="u-img__max u-only__pc" style="max-width:790px">
        <img src="<?php echo $img_url; ?>/magazine/comic02/index/head_recipe_sp@2x.png" loading="lazy" alt="うちのご飯は世界イチ" class="u-img__max u-only__sp" style="max-width:635px">
      </h3>
      <p class="u-assist">家事に仕事に子育てに…毎日忙しい家族のもとへ、突然現れたフライパンの妖精「フラッキー」！フライパン1つで作ることができる時短＆簡単レシピをフラッキーが動画でご紹介します。</p>
      <div class="u-photolist__row mb3">
        <?php echo show_category_photoList__random("recipe",6); ?>
      </div>
      <a href="<?php echo $base_url; ?>/magazine/index_recipe.php" class="u-btn u-btn_point center">お料理レシピ一覧ページへ</a>
    </section>
    <section class="main__item">
    <h3 id="technique" class="mb2">
        <img src="<?php echo $img_url; ?>/magazine/comic02/index/head_tech@2x.png" loading="lazy" alt="今さら聞けない料理のアレコレ" class="u-img__max u-only__pc" style="max-width:790px">
        <img src="<?php echo $img_url; ?>/magazine/comic02/index/head_tech_sp@2x.png" loading="lazy" alt="今さら聞けない料理のアレコレ" class="u-img__max u-only__sp" style="max-width:635px">
      </h3>
      <p class="u-assist">「うちのご飯は世界イチ」番外編！包丁の使い方や、出汁の取り方など、今さら聞けない料理の基本を、動画で分かりやすく解説します。</p>
      <h4 class="u-ttl__m">カテゴリー一覧</h4>
      <div class="techcatelist">
        <?php include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-category_list.php"); ?>
      </div>
    </section>
	<?php if(isset($bannerCmId) && $bannerCmId === '999') { ?>
	<?php } else { ?>
    <?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
  <?php } ?>
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
