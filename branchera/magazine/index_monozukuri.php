<?php
//base
include( "../function.php" );
$content = get_id_data( '80001' );
$pageTtl = 'ものづくりへの想い';

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '長谷工技術研究所の、これまでの研究やテクノロジーについてご紹介します。';

// User Agent check
include ($inc_path."/lib/inc/uachk.php");

//bodyClass
$body_class = "page-list monozukuri";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>
<main class="main">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		// include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__item">
      <div class="monozukuri-mv mb8 mb2_sp">
        <div class="monozukuri-mv__row">
          <div>
            <figure class="monozukuri-mv__img">
              <img
              data-src="<?php echo $img_url ?>/magazine/monozukuri/mv.png"
              data-retina="<?php echo $img_url ?>/magazine/monozukuri/mv@2x.png"
              alt="ものづくりへの想い"
              class="u-img__max">
            </figure>
          </div>
          <div class="monozukuri-mv__txt">
            <div class="monozukuri-mv__ttl">
              <h2>ものづくりのブレインともいえる<br class="u-only__sp">長谷工の研究施設、<br class="u-only__pc">「長谷工技術研究所」</h2>
            </div>
            <div class="monozukuri-mv__ex">
              <p>一棟のマンションが建つまでには、何年にも亘り、さまざまな研究・技術開発を経て、多くのハードルをクリアする必要があります。長谷工では長年の知識や技能、また最新の情報とテクノロジーを駆使して、安全・安心・快適な住まいを日々提供し続けています。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="monozukuri-articlelist">
        <ul class="monozukuri-articlelist__row">
          <li class="monozukuri-articlelist__item">
            <a href="<?php echo $base_url ?>/magazine/article/monozukuri_introduction.php" class="monozukuri-articlelist__a">
            <h2 class="monozukuri-articlelist__ttl u-only__sp">INTRODUCTION</h2>
              <figure class="monozukuri-articlelist__img">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_introduction.jpg"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_introduction@2x.jpg"
                class="u-only__pc"
                alt="INTRODUCTION">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_introduction-sp.jpg"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_introduction-sp@2x.jpg"
                class="u-only__sp"
                alt="INTRODUCTION">
              </figure>
              <p class="monozukuri-articlelist__ex">私たちの「ものづくり」のコアとなる長谷工技術研究所についてご紹介します。</p>
              <div class="monozukuri-btn">
                <div class="monozukuri-btn__ex">詳しくはこちら</div>
              </div>
              <div class="u-articlelist__icon new"></div>
            </a>
          </li>

          <li class="monozukuri-articlelist__item">
            <a href="<?php echo $base_url ?>/magazine/article/monozukuri_interview01.php" class="monozukuri-articlelist__a">
              <h2 class="monozukuri-articlelist__ttl u-only__sp">INTERVIEW 01</h2>
              <figure class="monozukuri-articlelist__img">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_interview01.jpg"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_interview01@2x.jpg"
                class="u-only__pc"
                alt="INTERVIEW 01">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_interview01-sp.jpg"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_interview01-sp@2x.jpg"
                class="u-only__sp"
                alt="INTERVIEW 01">
              </figure>

              <p class="monozukuri-articlelist__ex">コンクリートの研究に励む博士に、安全なマンションづくりへの想いを聞きました。</p>
              <div class="monozukuri-btn">
                <div class="monozukuri-btn__ex">詳しくはこちら</div>
              </div>
              <div class="u-articlelist__icon new"></div>
            </a>
          </li>

          <li class="monozukuri-articlelist__item">
            <label class="monozukuri-articlelist__a monozukuri-articlelist__a_commingsoon">
              <h2 class="monozukuri-articlelist__ttl u-only__sp">COMMING SOON</h2>
              <figure class="monozukuri-articlelist__img">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_comingsoon.png"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_comingsoon@2x.png"
                class="u-only__pc"
                alt="COMMING SOON">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_comingsoon-sp.png"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_comingsoon-sp@2x.png"
                class="u-only__sp"
                alt="COMMING SOON">
              </figure>

              <p class="monozukuri-articlelist__ex"></p>
            </label>
          </li>

          <li class="monozukuri-articlelist__item">
            <label class="monozukuri-articlelist__a monozukuri-articlelist__a_commingsoon">
              <h2 class="monozukuri-articlelist__ttl u-only__sp">COMMING SOON</h2>
              <figure class="monozukuri-articlelist__img">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_comingsoon.png"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_comingsoon@2x.png"
                class="u-only__pc"
                alt="COMMING SOON">
                <img
                data-src="<?php echo $img_url ?>/thum/monozukuri_comingsoon-sp.png"
                data-retina="<?php echo $img_url ?>/thum/monozukuri_comingsoon-sp@2x.png"
                class="u-only__sp"
                alt="COMMING SOON">
              </figure>

              <p class="monozukuri-articlelist__ex"></p>
            </label>
          </li>

        </ul>
      </div>
    </div>
  </article>
</main>
<?php
  $toindex_url = "/magazine/index_monozukuri.php";
  include ($inc_path."/lib/inc/toindex__monozukuri.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
