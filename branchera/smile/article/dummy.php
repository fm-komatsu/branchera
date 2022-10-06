<?php
include ("../../function.php");
$title ="ハウスクリーニング";
$meta_title ="".$title." | ".$sitename."";
$meta_description ="ダミーダミーダミーダミーダミーダミーダミー";
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

<?php $contents_id=8001;include ($inc_path."/inc/article-conts-head.php") ?>

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
        <a href="<?php echo $mypoint_url ?>70" target="_blank" rel="nofollow"><span>マイページから<br>応募する</span></a>
      </div>
    </div>
  </section>
  
<?php include ($inc_path."/inc/u-smile-snav.php") ?>
</article>

<div class="return magazine"><a href="<?php echo $link_url ?>/magazine">マガジン一覧へ</a></div>
</div>
<!--　//conts -->


<?php include ($inc_path."/inc/footer.php") ?>

<!-- add scripts -->


<!-- //add scripts -->
<?php include ($inc_path."/inc/tags.php") ?>
</body>
</html>