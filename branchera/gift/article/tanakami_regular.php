<?php
//base
include ("../../function.php");
$content = get_id_data('3018');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include($inc_path."/lib/inc/head.php");
include($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/gift/" ,"優待サービス");
    include($inc_path."/lib/inc/pan.php");
    ?>
    <?php include($inc_path."/lib/inc/page/_gift/__main-header.php"); ?>
    <section class="main__wrapper">
      <figure>
        <img
        data-src="../../lib/img/gift/tanakami5/main-v.png"
        data-retina="../../lib/img/gift/tanakami5/main-v@2x.png"
        alt="特別栽培米滋賀県知事認証「環境こだわり農産物」滋賀県大津市「ふるさと納税返礼品」"
        class="u-img__max u-only__pc"
        >
        <img
        data-src="../../lib/img/gift/tanakami5/main-v__sp.png"
        data-retina="../../lib/img/gift/tanakami5/main-v__sp@2x.png"
        alt="特別栽培米滋賀県知事認証「環境こだわり農産物」滋賀県大津市「ふるさと納税返礼品」"
        class="u-img__max u-only__sp"
        >
      </figure>
      <div class="tanakami-about">
        <div class="u-only__pc">
          <h3 class="tanakami-about__ttl">たなかみ米について</h3>
          <figure class="u-float__right">
            <img
            data-src="../../lib/img/gift/tanakami5/about-img.png"
            data-retina="../../lib/img/gift/tanakami5/about-img.png"
            alt="写真：稲穂"
            style="max-width:200px;"
            >
          </figure>
          <p>「たなかみのお米」が作られる、滋賀県 田上（たなかみ）地域は、1300年前、天智天皇の命を受け開墾されたと言い伝えられています。
            <br>その確かな味わいと、市場に出回る量が少なかったことから、「まぼろしのお米」と呼ばれています。
            <br>ぜひ、「まぼろしのお米」をお試しくださいませ。
          </p>
          <p>たなかみ米の詳細につきましては<a href="http://www.haseko.co.jp/ha-delicious/" target="_blank" class="u-icon" rel="nofollow">長谷工あんしんデリWEBサイト</a>をご覧ください。</p>
          <br clear="all">
        </div>
        <figure class="u-position__center u-only__pc">
          <img
          data-src="../../lib/img/gift/tanakami5/about-benefits.png"
          data-retina="../../lib/img/gift/tanakami5/about-benefits@2x.png"
          alt="<?php echo $pageTtl ?>"
          style="max-width:673px;"
          class="u-img__max">
        </figure>
        <figure class="u-position__center u-only__sp">
          <img
          data-src="../../lib/img/gift/tanakami5/about-benefits__sp.png"
          data-retina="../../lib/img/gift/tanakami5/about-benefits__sp@2x.png"
          alt="<?php echo $pageTtl ?>"
          style="max-width:300px;"
          class="u-img__max">
        </figure>
      </div>
      <h4 class="u-ttl__m">ご利用の流れ</h4>
      <figure class="u-only__pc mb">
        <img
        data-src="../../lib/img/gift/tanakami5/flow-img.png"
        data-retina="../../lib/img/gift/tanakami5/flow-img@2x.png"
        alt="ご利用の流れ"
        style="max-width:722px;"
        class="u-img__max"
        >
      </figure>
      <figure class="u-only__sp u-position__center mb4">
        <img
        data-src="../../lib/img/gift/tanakami5/flow-img__sp.png"
        data-retina="../../lib/img/gift/tanakami5/flow-img__sp@2x.png"
        alt="ご利用の流れ"
        style="max-width:347px;"
        class="u-img__max"
        >
      </figure>
      <small class="u-small">※ <span class="u-color__red u-font__bold">本サービスは「住まいレージ」対象商品ではございません。スマイル（ポイント）はご利用いただけませんのでご注意ください。</span>
        <br>※ 農林水産省 新ガイドラインに準拠。環境こだわり農産物 第1170018号 平成29年度大津市ふるさと納税返礼品。
        <br>※ 配送は日本国内に限ります。
        <br>※ 在庫切れの場合は、長谷工あんしんデリ担当者よりご連絡させていただきますのでご容赦ください。
        <br>※ 特定商取引法に基づく表記・送料については<a href="http://www.haseko.co.jp/ha-delicious/law/" target="_blank" class="u-icon" rel="nofollow">長谷工あんしんデリWEBサイト</a>をご確認ください。
      </small>
      <?php
        $useName = "たなかみ米販売価格5%OFF";
        $useNameAct = "申込む";
        $useLinks = $base_url.'/form/form-tanakami/';
        include ($inc_path."/lib/inc/page/_gift/__u-use_wo.php");
      ?>
    </section>
    <section class="main__wrapper">
      <h2 class="u-ttl__l">お申し込み方法</h2>
      <p>お申込みは、フォームにてお申込みください</p>
      <div class="u-terms mb">
        <div class="u-terms__row">
          <h4 class="u-terms__ttl">フォームでのお申込み</h4>
          <div class="u-terms__inner pt0">
            <?php
            $useName = "たなかみ米販売価格5%OFF";
            $useNameAct = "申込む";
            $useLinks = $base_url.'/form/form-tanakami/';
            include ($inc_path."/lib/inc/page/_gift/__u-use_wo.php");
            ?>
            <h5 class="u-ttl__s">お申込みの流れ</h5>
            <ol class="u-list__ol">
              <li>上記ボタンからお申込みください。</li>
              <li>長谷工あんしんデリ担当者より、改めて内容確認の連絡をさせていただきます。</li>
            </ol>
            <small class="u-small">※長谷工あんしんデリ担当者からの確認連絡を持ちましてご注文を確定させていただきます。</small>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
