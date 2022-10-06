<?php
//base
include ("../../function.php");
$content = get_id_data('4089');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
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
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    include ($inc_path."/lib/inc/page/_event/__main-header.php");
    ?>

    <section class="main__wrapper">
      <div class="main-v mb2">
        <figure>
          <img src="<?php echo $img_url?>/event/smile-present/main-v__01@2x.jpg" class="u-img__max u-only__pc" alt="" loading="lazy">
          <img src="<?php echo $img_url?>/event/smile-present/main-v__01-sp@2x.jpg" class="u-img__max u-only__sp" alt="" loading="lazy">
        </figure>
       <a href="<?php echo $mytop_url; ?>" target="_blank">
        <figure>
            <img src="<?php echo $img_url?>/event/smile-present/main-v__02@2x.png" class="u-img__max u-only__pc" alt="" loading="lazy">
            <img src="<?php echo $img_url?>/event/smile-present/main-v__02-sp@2x.png" class="u-img__max u-only__sp" alt="" loading="lazy">
          </figure>
        </a>
      </div>
      <div class="u-text__align_r u-text__align_l_sp">
        <p><span class="u-font__bold u-font__palt u-font__mid">※当選者の発表はスマイルの付与をもって代えさせていただきます。</span></p>
      </div>
      <section>
        <div class="u-assist">
          <div class="u-list__dl_table_long">
            <dl>
              <dt>[応募期間]</dt>
              <dd>2021年6月17日（木）～ 2021年6月30日（水）</dd>
            </dl>
            <dl>
              <dt>[当選発表]</dt>
              <dd>2021年7月15日（木）</dd>
            </dl>
            <dl>
              <dt>[応募申込]</dt>
              <dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
            </dl>
            <small class="u-small ml1">※登録情報に変更がありましたら<a href="<?php echo $mytop_url; ?>" target="_blank" rel="nofollow" class="u-icon">マイページ</a>にて修正をお願いいたします。</small>
          </div>
        </div>
        <div class="u-btn-layout mt2 mb5 mb3_sp">
          <div class="u-btn-layout__row center mb2_sp">
				  <label class="u-btn_end center mt2">応募は終了しました</label>
          </div>
        </div>
      </section>
    </section>
  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
