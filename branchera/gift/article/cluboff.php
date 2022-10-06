<?php
//cluboffの日終了フラグ [終了 = 1]
$endClubOffDay = 0;

//ClubOff by HASEKOの日内容
$clubOffDay = "9月は「ハーゲンダッツ」の日";

//year month
$clubOffYM = "2209";

//base
include("../../function.php");
$content = get_id_data('3025');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article cluboff";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

// User Agent check
include($inc_path . "/lib/inc/uachk.php");
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/gift/", "優待サービス");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    include($inc_path . "/lib/inc/page/_gift/__main-header.php");
    ?>
    <section class="main__wrapper">
      <div class="product-img">
        <h3 class="u-ttl__l">ClubOff by HASEKO ～ 会員限定の優待サービス ～</h3>
        <div class="cluboff-attention">
          <div class="cluboff-attention__row">
            <figure class="img u-only__pc center">
              <img src="<?php echo ($img_url) ?>/gift/cluboff/main-v@2x.png?<?php echo $clubOffYM; ?>" alt="Image photo" style="max-width:720px;" class="u-img__max" loading="lazy">
            </figure>
            <figure class="img u-only__sp center">
              <img src="<?php echo ($img_url) ?>/gift/cluboff/main-v-sp@2x.png?<?php echo $clubOffYM; ?>" alt="Image photo" class="u-img__max" loading="lazy">
            </figure>
          </div>
        </div>
      </div>
      <div class="mb4">
        <?php
        $useName = "サービスを利用する";
        $useNameAct = "";
        $useLinks = 'https://haseko.flpjp.com/termsAgreement/relocb';
        include($inc_path . "/lib/inc/page/_gift/__u-cluboff.php");
        ?>
      </div>
      <div class="mb4">
        <h4 class="u-ttl__m">ClubOff by HASEKOとは？</h4>
        <div class="u-cluboff__assist">
          <h5 class="u-cluboff__ttl"><span class="u-ilblock mb1">「クローズドマーケット」<br>だからできる<br>会員限定優待サービスです</span><span class="u-color__brand u-bgc__white pt1 pl1 pr1 pb1 u-font__bold u-ilblock">登録料・会費無料！<sup>※1</sup></span></h5>
          <p class="u-cluboff__ex">クラブオフは会員限定の優待サービスです。<br>日々の暮らしに役立つサービスから、旅行やレストランなど、休日の特別な時間の充実にお使いいただけます。一般には公開されないクローズドマーケットならではの特別な優待が満載です。</p>
        </div>
      </div>
      <div class="mb4">
        <h4 class="u-ttl__m">200,000ヵ所以上の優待が、あなたの暮らしを豊かに！</h4>
        <div>
          <div class="flex between">
            <figure class="w50 center mb2">
              <img data-src="<?php echo ($img_url) ?>/gift/cluboff/stay.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/stay@2x.png" alt="宿泊：国内約25,000件のホテル・旅館　最大90％OFF" style="max-width:355px;" class="u-img__max">
            </figure>
            <figure class="w50 center mb2">
              <img data-src="<?php echo ($img_url) ?>/gift/cluboff/leisure.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/leisure@2x.png" alt="レジャー：全国約1,000カ所の遊園地・テーマパーク　最大75％OFF" style="max-width:355px;" class="u-img__max">
            </figure>
          </div>
          <div class="flex between">
            <figure class="w50 center mb2">
              <img data-src="<?php echo ($img_url) ?>/gift/cluboff/theater.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/theater@2x.png" alt="映画：全国約300館の映画館　会員優待価格" style="max-width:355px;" class="u-img__max">
            </figure>
            <figure class="w50 center mb2">
              <img data-src="<?php echo ($img_url) ?>/gift/cluboff/spa.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/spa@2x.png" alt="日帰り湯：全国約700カ所の日帰り湯施設　最大60％OFF" style="max-width:355px;" class="u-img__max">
            </figure>
          </div>
          <div class="flex between">
            <figure class="w50 center mb2">
              <img data-src="<?php echo ($img_url) ?>/gift/cluboff/life.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/life@2x.png" alt="ライフ：暮らしをもっと快適にする様々なサービス　会員優待価格" style="max-width:355px;" class="u-img__max">
            </figure>
            <figure class="w50 center mb2">
              <img data-src="<?php echo ($img_url) ?>/gift/cluboff/image.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/image@2x.png" alt="「cluboff by HASEKO」利用イメージ" style="max-width:355px;" class="u-img__max">
            </figure>
          </div>
        </div>
        <ul class="u-small">
          <li>※1 「ClubOff by HASEKO」の登録料・会費は無料です。何度でもお得な優待をご利用いただけます。また、任意で更にお得なサービスをご利用いただける「VIP会員（月額500円＋消費税）」もご登録いただけます。詳しくは
            <?php
            $useName = "ClubOff by HASEKOページ";
            $useNameAct = "";
            $useLinks = 'https://haseko.flpjp.com/termsAgreement/relocb';
            include($inc_path . "/lib/inc/page/_gift/__u-cluboff_comments.php");
            ?>
            をご覧ください。
          <li>※2 VIP会員がホームページ限定「タイムセール」企画500円の宿をご利用の場合 </li>
          <li>※3 VIP会員の場合</li>
          <li>※ 画像はすべてイメージです</li>
        </ul>
      </div>
      <div id="cluboffday">
        <?php if (isset($endClubOffDay) && $endClubOffDay == 0) : ?>
          <a href="https://haseko.flpjp.com/termsAgreement/relocb">
          <?php else : ?>
          <?php endif; ?>
          <figure class="center">
            <img src="<?php echo ($img_url) ?>/gift/cluboff/cluboff-day_top@2x.png?<?php echo $clubOffYM; ?>" alt="毎月25日はcluboff by HASEKOの日" style="max-width:710px;" class="u-img__max" loading="lazy">
          </figure>
          <div class="<?php echo ('u-cluboff__day-filter_' . $endClubOffDay); ?>">
            <figure class="center">
              <img src="<?php echo ($img_url) ?>/gift/cluboff/cluboff-day@2x.png?<?php echo $clubOffYM; ?>" alt="<?php echo $clubOffDay ?>" style="max-width:710px;" class="u-img__max" loading="lazy">
            </figure>
          </div>
          <?php if (isset($endClubOffDay) && $endClubOffDay == 0) : ?>
          </a>
        <?php else : ?>
        <?php endif; ?>
      </div>
      <ul class="u-small">
        <!--	<li>※1 <a href="https://www.nanaco-net.jp/alliance/" target="_blank" rel="nofollow" class="u-icon__blank">『nanacoが使えるお店』詳しくはこちら</a></li>
        <li>※2 <a href="https://www.nanaco-net.jp/how-to/gift/" target="_blank" rel="nofollow" class="u-icon__blank">『nanacoギフトについて』詳しくはこちら</a></li>
        <li>※3 <a href="https://www.nanaco-net.jp/" target="_blank" rel="nofollow" class="u-icon__blank">『nanaco』ホームページ</a></li>-->
        <li>※ 25日が土・日・祝日の場合は、次の営業日となります。</li>
        <li>※ 詳細は、
          <?php
          $useName = "ClubOff by HASEKOページ";
          $useNameAct = "";
          $useLinks = 'https://haseko.flpjp.com/termsAgreement/relocb';
          include($inc_path . "/lib/inc/page/_gift/__u-cluboff_comments.php");
          ?>
          をご覧ください。</li>
      </ul>
      <h4 class="u-ttl__m">ご利用の流れ</h4>
      <div class="img data-img center mb4">
        <figure class="u-only__pc">
          <img data-src="<?php echo ($img_url) ?>/gift/cluboff/flow.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/flow@2x.png" alt="ご利用の流れ" style="max-width:691px;" class="u-img__max center">
        </figure>
        <figure class="u-only__sp">
          <img data-src="<?php echo ($img_url) ?>/gift/cluboff/flow-sp.png" data-retina="<?php echo ($img_url) ?>/gift/cluboff/flow-sp@2x.png" alt="ご利用の流れ" style="max-width:259px;" class="u-img__max center">
        </figure>
      </div>
      <?php
      $useName = "サービスを利用する";
      $useNameAct = "";
      $useLinks = 'https://haseko.flpjp.com/termsAgreement/relocb';
      include($inc_path . "/lib/inc/page/_gift/__u-cluboff.php");
      ?>
    </section>
    <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
    <?php include($inc_path . "/lib/inc/footer.php"); ?>
    <?php include($inc_path . "/lib/inc/foot.php"); ?>
