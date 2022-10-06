<?php
//base
include ("../function.php");
$pageTtl = '「うちのご飯は世界イチ」家族みんなで作れる簡単お料理レシピ';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "家事に仕事に子育てに…毎日忙しい家族のもとへ、突然現れたフライパンの妖精「フラッキー」！フライパン1つで作ることができる時短＆簡単レシピをフラッキーが動画でご紹介します。";
$metaThum = $img_url."/magazine/comic02/recipe/recipe_index@2x.png";

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
    <section class="main__item">
      <h3 class="u-ttl__l first-of-type" id="recipe">うちのご飯は世界イチ</h3>
      <p class="u-assist">家事に仕事に子育てに…毎日忙しい家族のもとへ、突然現れたフライパンの妖精「フラッキー」！フライパン1つで作ることができる時短＆簡単レシピをフラッキーが動画でご紹介します。</p>
      <div class="u-photolist__row">
        <?php echo show_category_photoList("recipe"); ?>
      </div>
    </section>
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
