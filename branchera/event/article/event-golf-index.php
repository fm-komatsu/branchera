<?php
//base
include ("../../function.php");
$content = get_id_data('4999');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-list";

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
    <section class="main__item">
      <div class="u-assist_overflow">
        <div>
          <p >PGA（日本プロゴルフ協会）とのタイアップにより、ブランシエラクラブ会員さまだけの特別なゴルフイベントを開催しております。<br>プロアマ大会やプロゴルフ大会観戦ツアー、ラウンドレッスン、親子ゴルフ体験プログラムなど参加費無料でご招待しております。ゴルフ好きな方はもちろん、興味のある方もこれからゴルフを始めたい方もぜひご参加ください！！</p>
        </div>
      </div>
    </section>
    <section class="main__item">
      <h2 class="u-ttl__l">ゴルフイベント情報</h2>
      <div class="u-photolist__row">
        <?php
        echo show_event_photoList_tags("event","イベント","ゴルフ","");
        ?>
      </div>
    </section>
    <section class="main__item">
      <h2 class="u-ttl__l first-of-type">ゴルフイベントレポート</h2>
      <div class="u-photolist__row">
        <?php
        echo show_golfrev_photoList_tags("event","イベント","レポート","ゴルフ");
        ?>
      </div>
    </section>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
