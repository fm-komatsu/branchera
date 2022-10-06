<?php
//base
include ("../../function.php");
$content = get_id_data('6001');
$pageTtl = $content['title'];

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
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">

      <section class="section" id="report">
        <h2>【ブランシエラ板橋西台】全員に当たる！竣工記念キャンペーン開催中！</h2>
        <div class="mb4">
          <img src="../../lib/img/event/event/img-nishidai1601.png" alt="【ブランシエラ板橋西台】竣工記念キャンペーン開催中！">
        </div>
        <?php include ($inc_path."/lib/inc/page/_magazine/__nishidai80-link.php") ?>
      </section>

    </div><!-- //wrapper -->

    <div class="return event"><a href="<?php echo $link_url ?>/event">アンケート・イベント一覧へ</a></div>

  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
