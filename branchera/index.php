<?php
//base
include("function.php");
$pageTtl = '公式';

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "home";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header-home.php");
?>
<main class="main">
  <?php include($inc_path . "/lib/inc/page/_home/__main-v.php"); ?>
  <article class="main__row">
    <section class="main__news news-top">
      <h2 class="news__ttl logo__<?php echo $month; ?>"><span class="news__ttl_ex">News & Topics</span></h2>
      <?php // News & Topics
      include($inc_path . "/lib/inc/page/_home/__news-and-topics.php");
      ?>
      <a href="<?php echo $base_url; ?>/news/" class="news__more u-btn_s">ニュース一覧を見る</a>
    </section>
    <section class="main__service service-contents">
      <h2 class="news__ttl">Service & Contents</h2>
      <div class="service-contents__row">
        <aside class="service-contents__item">
          <div class="service-contents__wrap">
            <div class="service-contents__header">
              <img data-src="<?php echo ($img_url) ?>/home/category-icon/__magazine.png" data-retina="<?php echo ($img_url) ?>/home/category-icon/__magazine@2x.png" alt="ブランシエラマガジン" class="search-word__img u-img__max" style="max-width : 84px">
              <h3 class="service-contents__ttl"> ブランシエラマガジン </h3>
              <p class="service-contents__ex"> ゆたかな暮らしを支える情報をお届けします！ </p>
            </div>
            <div class="service-contents__innner">
              <?php echo (show_service_home__random('recipe', 1)); ?>
              <?php echo (show_service_home__random('magazine', 1)); ?>
            </div>
            <div class="service-contents__footer">
              <a href="<?php echo ($base_url) ?>/magazine/" class="service-contents__btn">
                <span>もっと見る</span>
              </a>
            </div>
          </div>
        </aside>
        <aside class="service-contents__item">
          <div class="service-contents__wrap">
            <div class="service-contents__header">
              <img data-src="<?php echo ($img_url) ?>/home/category-icon/__gift.png" data-retina="<?php echo ($img_url) ?>/home/category-icon/__gift@2x.png" alt="優待サービス" class="search-word__img u-img__max" style="max-width : 84px">
              <h3 class="service-contents__ttl"> 優待サービス </h3>
              <p class="service-contents__ex"> プレゼント企画や優待サービスなど、お得な情報が盛りだくさん！ </p>
            </div>
            <div class="service-contents__innner">
              <?php echo (show_service_home__random('gift', 2, 0)); ?>
            </div>
            <div class="service-contents__footer">
              <a href="<?php echo ($base_url) ?>/gift/" class="service-contents__btn">
                <span>もっと見る</span>
              </a>
            </div>
          </div>
        </aside>
        <aside class="service-contents__item">
          <div class="service-contents__wrap">
            <div class="service-contents__header">
              <img data-src="<?php echo ($img_url) ?>/home/category-icon/__smile.png" data-retina="<?php echo ($img_url) ?>/home/category-icon/__smile@2x.png" alt="住まいレージ" class="search-word__img u-img__max" style="max-width : 84px">
              <h3 class="service-contents__ttl"> 住まいレージ </h3>
              <p class="service-contents__ex"> 住まいレージでたまったスマイルを、サービスや景品に交換しよう！ </p>
            </div>
            <div class="service-contents__innner">
              <?php echo (show_service_home__random('smile', 2)); ?>
            </div>
            <div class="service-contents__footer">
              <a href="<?php echo ($base_url) ?>/smile/" class="service-contents__btn">
                <span>もっと見る</span>
              </a>
            </div>
          </div>
        </aside>
        <aside class="service-contents__item">
          <div class="service-contents__wrap">
            <div class="service-contents__header">
              <img data-src="<?php echo ($img_url) ?>/home/category-icon/__event.png" data-retina="<?php echo ($img_url) ?>/home/category-icon/__event@2x.png" alt="イベント・キャンペーン" class="search-word__img u-img__max" style="max-width : 84px">
              <h3 class="service-contents__ttl"> イベント・キャンペーン </h3>
              <p class="service-contents__ex"> 普段は体験できないイベントに参加してみませんか？ </p>
            </div>
            <div class="service-contents__innner">
              <?php echo (show_service_home__random('event', 2)); ?>
            </div>
            <div class="service-contents__footer">
              <a href="<?php echo ($base_url) ?>/event/" class="service-contents__btn">
                <span>もっと見る</span>
              </a>
            </div>
          </div>
        </aside>
        <aside class="service-contents__item">
          <div class="service-contents__wrap">
            <div class="service-contents__header">
              <img data-src="<?php echo ($img_url) ?>/home/category-icon/__enquete.png" data-retina="<?php echo ($img_url) ?>/home/category-icon/__enquete@2x.png" alt="アンケート" class="search-word__img" style="max-width : 84px">
              <h3 class="service-contents__ttl"> アンケート </h3>
              <p class="service-contents__ex"> アンケートに答えて、スマイルを貯めよう！ </p>
            </div>
            <div class="service-contents__innner">
              <?php echo (show_service_home__random('enq', 2)); ?>
            </div>
            <div class="service-contents__footer">
              <a href="<?php echo ($base_url) ?>/enquete/" class="service-contents__btn">
                <span>もっと見る</span>
              </a>
            </div>
          </div>
        </aside>
        <aside class="service-contents__item">
          <div class="service-contents__wrap">
            <div class="service-contents__header">
              <img data-src="<?php echo ($img_url) ?>/home/category-icon/__info.png" data-retina="<?php echo ($img_url) ?>/home/category-icon/__info@2x.png" alt="長谷工インフォ" class="search-word__img u-img__max" style="max-width : 84px">
              <h3 class="service-contents__ttl"> 長谷工インフォメーション </h3>
              <p class="service-contents__ex"> 長谷工グループのイベント・セミナー情報や、マンション情報をお届けします！ </p>
            </div>
            <div class="service-contents__innner">
              <article class="service-inner__item">
                <label class="service-inner__wrap">
                  <?php include($inc_path . "/lib/inc/page/_hcg/__hcg-event.php"); ?>
                </label>
              </article>
              <article class="service-inner__item">
                <label class="service-inner__wrap">
                  <?php include($inc_path . "/lib/inc/page/_hcg/__hcg-apartment.php"); ?>
                </label>
              </article>
            </div>
            <div class="service-contents__footer">
              <a href="<?php echo ($base_url) ?>/hcg/" class="service-contents__btn">
                <span>もっと見る</span>
              </a>
            </div>
          </div>
        </aside>
      </div>
    </section>
  </article>
</main>

<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
