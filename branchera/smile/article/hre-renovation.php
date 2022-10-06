<?php
//base
include ("../../function.php");
$content = get_id_data('8002');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルでできる「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];
//bodyClass
$body_class ="page-article";
//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "no_flp";// exchange or lottery or service or no_flp
    $smile_num = "10,000";//必要スマイル数
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__item u-terms">
      <div class="u-terms__row">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li>個人のお客さまのみ対象となり、法人は対象外となります。</li>
            <li>お電話にて住まいレージご利用の旨をお伝えいただいた後、担当者の案内に沿ってお手続きください。</li>
            <li>1スマイル＝1円として10,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="main__wrapper">

      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

    <section class="main__wrapper">

      <div class="u-column__2">
        <figure class="u-column__item">
          <img
          data-src="../../lib/img/smile/article/hre-renovation-img1.png"
          data-retina="../../lib/img/smile/article/hre-renovation-img1@2x.png"
          alt="image"
          style="max-width:375px;"
          class="u-img__max">
        </figure>
        <figure class="u-column__item">
          <img
          data-src="../../lib/img/smile/article/hre-renovation-img2.png"
          data-retina="../../lib/img/smile/article/hre-renovation-img2@2x.png"
          alt="image"
          style="max-width:375px;"
          class="u-img__max">
        </figure>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl service-1">リフォーム済み物件をお得に購入</h4>
          <p class="mb3">長谷工のリノベーションマンションは、今のライフスタイルに合わせた住まいのカタチをご提案。リフォーム済み物件なので、すぐにきれいな部屋にお住まいいただけます。ご購入の際に住まいレージをご利用いただけます。</p>
          <h4 class="lottery-point__ttl service-2">2年間のアフターサービス保証</h4>
          <p class="mb3">リフォーム箇所には2年間のアフターサービス保証付き。住み始めてからも安心です。</p>
          <h4 class="lottery-point__ttl service-3 mb2">仲介手数料は不要！</h4>
          <p>長谷工リアルエステートが売り主だから、仲介手数料は不要です。お得にリフォーム物件をご購入いただけます。</p>
        </div>
      </div>

    </section>

    <section class="main__wrapper" id="flow">
      <h2 class="u-ttl__l">お申込み方法</h2>

      <div class="u-terms">

        <div class="u-terms__row mb2">
          <h4 class="u-terms__ttl">フリーダイヤルへお電話ください。</h4>
          <div class="u-terms__inner">
            <div class="u-terms__tel">
              <a href="tel:0120-585-250">関東：0120-585-250</a>
            </div>
            <div class="u-terms__tel">
              <a href="tel:0120-944-081">関西：0120-944-081</a>
            </div>
            <small class="u-small">※受付 / 9：30～18：00（水曜定休）<br>※対象エリア詳細につきましてはお問い合わせください。</small>

          </div>
        </div>
      </div>

      <h3 class="u-ttl__l">お申込みの流れ</h3>
      <ol class="u-list__ol">
        <li>上記のフリーダイヤルへお電話ください。長谷工リアルエステートの担当者が応対いたします。</li>
        <li>担当者に住まいレージご利用の旨をお伝えいただいた後、担当者の案内に沿ってマイページからお手続きください。</li>
      </ol>
      <div class="u-position__center">
        <a href="<?php echo $mypoint_url ?>/17" target="_blank" class="u-btn_point center">お申込みはこちら</a>
      </div>

      <?php if (!$ssoFlag == 1){ ?>
        <small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
      <?php }; ?>

    </section>

    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>

    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
