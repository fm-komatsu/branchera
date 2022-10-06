<?php
//base
include( "../function.php" );
$content = get_id_data( '90001' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '住まいレージ「' . $pageTtl . '」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-list";

$smileType ="about-smile";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/","住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    include ($inc_path."/lib/inc/page/_smile/__main-header.php");
    ?>
    <section class="main__item useSmileArea mb4">
      <h3><img src="<?php echo $img_url; ?>/smile/about/img-ttl@2x.png" alt="住まいレージ" class="mb3 u-img__max"></h3>
      <p class="ttl-text mb3">「<strong>住まいレージ</strong>」とはブランシエラクラブが提供するオリジナルポイントサービスです。ブランシエラクラブの<strong>コンテンツやゲームなどをお楽しみいただく</strong>ことでスマイルがたまります。また、たまったスマイルは長谷工グループの<strong>サービスや商品交換・抽選賞品などへの応募</strong>が可能です。ぜひご活用ください！</p>
      <figure>
        <img src="<?php echo $img_url; ?>/smile/about/main-v@2x.png" alt="「住まいレージ」でスマイルを「ためる」「つかう・交換する」イメージ図" class="u-img__max" loading="lazy">
      </figure>
    </section>
    <section class="main__item">
      <div class="howto-use">
        <div class="howto-use__row">
          <div class="u-ttl__l howto-use__ttl">
            <h4>住まいレージのおトクなつかい方</h4>
          </div>
          <div class="u-column__2 u-terms__inner">
            <div class="howto-use__item u-column__item u-terms">
              <div class="u-terms__row">
                <div class="howto-use__item_ttl u-terms__ttl">
                  <h5 class="center">ポイント交換でしっかりおトク</h5>
                </div>
                <div class="howto-use__ex u-terms__inner">
                  <figure>
                    <img src="<?php echo $img_url; ?>/smile/about/game_and_enq@2x.png"
                     alt="ゲームやアンケートでコツコツためる" style="max-width : 320px;" class="u-img__max" loading="lazy">
                  </figure>
                  <h6 class="howto-use__ttl_s mb2">ためたスマイルこんなことにつかっています！</h6>
                  <figure class="center">
                    <img src="<?php echo $img_url; ?>/thum/hcm-housecleaning@2x.png"
                     alt="ハウスクリーニング" style="max-width : 320px;" class="u-img__max mb2" loading="lazy">
                  </figure>
                  <a href="<?php echo $base_url ?>/smile/article/hcm-housecleaning.php" class="u-icon">ハウスクリーニング</a><br>必要スマイル：1,000スマイル～
                  <p>
                    <strong>毎日ラッキールームにチャレンジしたり、アンケートに答えてプレゼントされるスマイル</strong>をためて、年に一度プロにお任せして徹底ハウスクリーニングをお願いしています。
                  </p>
                </div>
              </div>
            </div>
            <div class="howto-use__item u-column__item u-terms">
              <div class="u-terms__row">
                <div class="howto-use__item_ttl u-terms__ttl">
                  <h5 class="center">ドキドキを楽しむ抽選応募</h5>
                </div>
                <div class="howto-use__ex u-terms__inner">
                  <figure>
                    <img src="<?php echo $img_url; ?>/smile/about/lottery_charange@2x.png"
                     alt="たまったスマイルで抽選応募にチャレンジ！" style="max-width : 320px;" class="u-img__max" loading="lazy">
                  </figure>
                  <h6 class="howto-use__ttl_s mb2">ためたスマイルこんなことにつかっています！</h6>
                  <figure class="center">
                    <img data-src="<?php echo $img_url; ?>/smile/about/present_box@2x.jpg"
                     alt="抽選賞品" style="max-width : 320px;" class="u-img__max mb2">
                  </figure>
                  <a href="<?php echo $base_url ?>/smile/use-smileage.php" class="u-icon">抽選賞品</a><br>必要スマイル：100スマイル
                  <p>
                    <strong>メルマガやバースデーメールで獲得したスマイル</strong>を使って<strong>抽選賞品やイベントの応募にチャレンジ</strong>しています！毎月いろいろな賞品に少額のポイントでも応募できるのも魅力ですね。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/__snav.php"); ?>
    </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
