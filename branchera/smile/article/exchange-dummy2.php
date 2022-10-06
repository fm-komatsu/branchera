<?php
include ("../../function.php");
$title ="【交換景品】シャープ電気無水鍋";
$meta_title ="".$title." | ".$sitename."";
$meta_description ="素材の水分を活用して調理するから、素材本来の旨味がぎっしり！自動調理でらくらく１品が完成です。";
$thumbnail_url = $img_url."/common/dummy/img.png";
$body_class ="article smile"
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php
  $panAry[] = array("/smile/","住まいレージをつかう");
  include ($inc_path."/inc/pan.php");
?>

<div id="conts">

<?php 
  $contents_id=10006;
  $smileNum = "<em>1,000</em>スマイル";
  $mypageLinkNum = 70;
  include ($inc_path."/inc/article-conts-head-exchange.php") 
?>
<article class="article">

  <section class="section pageSmileImg wrapper">
    <div class="pageSmileImg-row">
      <div class="pageSmileImg-item">
        <img src="../../img/common/dummy/square.png" alt="">
      </div>
      <div class="pageSmileImg-item">
        <img src="../../img/common/dummy/square.png" alt="">
      </div>
      <div class="pageSmileImg-item">
        <img src="../../img/common/dummy/square.png" alt="">
      </div>
    </div>

    <div class="pageSmilePoint">
      <h4 class="pageSmilePoint-ttl icon-1">！</h4>
      <p></p>
      <h4 class="pageSmilePoint-ttl icon-2"></h4>
      <p></p>
    </div>

    <div class="pageSmileSpec">
      <h5 class="pageSmileSpec-ttl">詳細スペック</h5>
      <div class="u-spec">
        <div class="u-spec-row">
          <div class="u-spec-item">
            <h6 class="u-spec-ttl"></h6>
            <p class="u-spec-desc"></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="section pageSmileBottom">
    <div class="pageSmileBottom-row wrapper">
      <h3 class="pageSmileBottom-item ttl"></h3>
      <div class="pageSmileBottom-item ex">
        <div>必要スマイル</div>
        <div class="smile"><span>50,000</span>スマイル</div>
      </div>
      <div class="pageSmileBottom-item btn">
        <a href="<?php echo $mypage_point_url ?>70" target="_blank" rel="nofollow"><span>マイページから<br>応募する</span></a>
      </div>
    </div>
  </section>
  
<?php include ($inc_path."/inc/u-smile-snav.php") ?>
</article>
<?php include ($inc_path."/inc/return-smile.php") ?>
</div>
<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/inc/tags.php") ?>
</body>
</html>