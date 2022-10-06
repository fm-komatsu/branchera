<?php
//base
include("../../function.php");
$content = get_id_data('4092');
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
      <div class="main-v mb2">
        <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
          <figure>
            <img src="<?php echo $img_url ?>/event/golf20/main-v@2x.jpg" class="u-img__max u-only__pc" alt="" loading="lazy">
            <img src="<?php echo $img_url ?>/event/golf20/main-v-sp@2x.jpg" class="u-img__max u-only__sp" alt="" loading="lazy">
          </figure>
        </div>
        <p class="mb-inner">PGA（日本プロゴルフ協会）とブランシエラクラブのタイアップにより、会員さま限定で<strong>ツアープロから教わるワンポイントレッスン</strong>を公開中です。今回は、みなさまへの日頃の感謝を込めて、PGA＆ブランシエラクラブから、少し早いクリスマスプレゼント！「第88回日本プロゴルフ選手権大会」の大会グッズが抽選で当たります！みなさま奮ってご応募ください♪</p>
        <div class="u-btn-layout mt2 mb5 mb3_sp">
          <div class="u-btn-layout__row center mb2_sp">
            <a href="<?php echo $base_url; ?>/event/article/event-golf19.php#lesson1" class="u-btn_point u-btn-layout__item" style="margin-top : 8px; max-width:380px;">ツアープロから教わるワンポイントレッスンはこちら</a>
          </div>
        </div>
        <figure>
          <img src="<?php echo $img_url ?>/event/golf20/img01@2x.png" class="u-img__max u-only__pc" alt="" loading="lazy">
          <img src="<?php echo $img_url ?>/event/golf20/img01-sp@2x.png" class="u-img__max u-only__sp" alt="" loading="lazy">
        </figure>
      </div>
      <section>
        <div class="u-assist">
          <div class="u-list__dl_table_long">
            <dl>
              <dt>[応募期間]</dt>
              <dd> 2021年11月18日（木）～12月5日（日）</dd>
            </dl>
            <dl>
              <dt>[応募方法]</dt>
              <dd>ページ下部のボタンより、必要事項をご入力の上、送信してください。<br><small class="u-small ml1">※ご確認及びご登録をお願いします。また、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。</small></dd>
            </dl>
            <dl>
              <dt>[当選者発表]</dt>
              <dd>賞品の発送をもってかえさせていただきます。</dd>
            </dl>
            <dl>
              <dt>[ご注意事項]</dt>
              <dd><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※本プレゼントの当選権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</small></dd>
            </dl>
          </div>
        </div>
        <?php if ($eventSts == 'new') { ?> <div class="u-btn-layout mb2">
            <div class="u-btn-layout__row center mb2_sp">
              <a href="https://haseko.flpjp.com/enquete/1/27" target="_blank" class="u-btn_event u-btn-layout__item" style="margin-top : 8px;">特別プレゼントに応募する</a>
            </div>
          </div>
          </div> <?php } else { ?> <label class="u-btn_end center mt2">応募は終了しました</label> <?php } ?> <?php if (!$ssoFlag == 1) { ?><?php }; ?>
      </section>
  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>