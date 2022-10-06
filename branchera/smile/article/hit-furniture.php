<?php
//base
include("../../function.php");
$content = get_id_data('8004');
$pageTtl = $content['title'];

//meta
$metaTtl = 'スマイルでできる「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/", "住まいレージ");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "no_flp"; // exchange or lottery or service or no_flp
    $smile_num = "10,000"; //必要スマイル数
    include($inc_path . "/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__item u-terms">
      <div class="u-terms__row">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li>長谷工インテックが取扱う家具の購入代金にスマイルを充当できます。</li>
            <li>1スマイル＝1円として10,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="main__wrapper">

      <?php include($inc_path . "/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

    <div class="main__wrapper">
      <section class="main__item">
        <div>
          <?php include($inc_path . "/lib/inc/page/_gift/__furniture-list.php"); ?>
        </div>
      </section>
    </div>


    <section class="main__wrapper">

      <section class="main__item mb4" id="flow">
        <div class="mb4">
          <?php include($inc_path . "/lib/inc/page/_gift/__furniture-flow.php"); ?>
        </div>
        <div>
          <?php include($inc_path . "/lib/inc/page/_gift/__furniture-request.php"); ?>
        </div>
      </section>
      <div>
        <?php include($inc_path . "/lib/inc/page/_gift/__furniture-attention.php"); ?>
      </div>

      <?php if (!$ssoFlag == 1) { ?>
        <small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
      <?php }; ?>

    </section>

    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include($inc_path . "/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>

    <nav class="main__snav snav">
      <?php include($inc_path . "/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
