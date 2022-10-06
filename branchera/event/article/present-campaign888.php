<?php
//base
include("../../function.php");
$content = get_id_data('4096');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl . '-' . siteName();
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
    $panAry[] = array("/event/", "イベント・キャンペーン");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    include($inc_path . "/lib/inc/page/_event/__main-header.php");
    ?>

    <section class="main__wrapper">
      <div class="main-v mb4">
        <div class="main-v u-only__sp">
          <figure>
            <img src="<?php echo $img_url ?>/event/present888_results/main-v@2x.jpg" class="u-img__max u-only__sp" alt="8周年記念プレゼントキャンペーン｜当選者発表" loading="lazy">
          </figure>
          <p>日頃の感謝を込めて募った、ブランシエラクラブ「8周年記念プレゼントキャンペーン」の当選者を発表します♪</p>
        </div>
        <div class="mb4">
          <img src="<?php echo $img_url ?>/event/present888_results/image@2x.jpg" class="u-img__max u-only__pc" alt="たくさんのご応募、ありがとうございました！｜当選者一覧（イニシャル）" loading="lazy">
          <img src="<?php echo $img_url ?>/event/present888_results/image-sp@2x.jpg" class="u-img__max u-only__sp" alt="たくさんのご応募、ありがとうございました！｜当選者一覧（イニシャル）" loading="lazy">
        </div>
        <div class="u-assist">
          <div class="u-list__dl_table_long">
            <dl>
              <dt>[応募期間]</dt>
              <dd> 2022年7月21日（木）〜2022年8月8日（月）</dd>
            </dl>
            <dl>
              <dt>[応募方法]</dt>
              <dd>ページ下部のボタンより、必要事項をご入力の上、送信してください。<br><small class="u-small ml1">※ご確認及びご登録をお願いします。また、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。</small></dd>
            </dl>
            <dl>
              <dt>[当選者発表]</dt>
              <dd>2022年8月25日（木）</dd>
            </dl>
            <dl>
              <dt>[ご注意事項]</dt>
              <dd><small class="u-small">※長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※本プレゼントの当選権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。<br>※登録情報に変更がありましたらマイページにて修正をお願いいたします。</small></dd>
            </dl>
          </div>
        </div>
        <?php if ($eventSts == '') { ?> <div class="u-btn-layout mb2">
            <div class="u-btn-layout__row center mb2_sp">
              <a href="https://haseko.flpjp.com/enquete/1/55" target="_blank" class="u-btn_event u-btn-layout__item" style="margin-top : 8px;" data-ga-click="boshu_campaign888_2">キャンペーンに応募する</a>
            </div>
          </div>
      </div> <?php } else { ?> <label class="u-btn_end center mt2">応募は終了しました</label> <?php } ?> <?php if (!$ssoFlag == 1) { ?><?php }; ?>
    </section>
  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
