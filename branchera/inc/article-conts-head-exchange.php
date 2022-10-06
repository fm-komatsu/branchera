<?php
  $data = getdata("","", $contents_id, true);
  $article = $data[0];
?>
<div class="conts-head contsHeadExchange">
 <div class="wrapper">
  <div class="contsHeadExchange-row ">
    <div class="contsHeadExchange-item img"><img src="<?php echo $img_url.$article['image'] ?>" alt="<?php echo $article['title'] ?>の画像"></div>
    <div class="contsHeadExchange-item text">
      <h1 class="page-title"><?php echo $article['title'] ?></h1>
      <p class="desc"><?php echo $article['description'] ?></p>
      <div class="inner-row">
        <div class="smileNum inner-item">
          <p class="smileNum-ttl">必要スマイル</p>
          <p class="smileNum-num"><?php echo $smileNum ?></p>
        </div>
        <div class="smileNum-btn inner-item"><a href="<?php echo $mypoint_url.$mypageLinkNum ?>" target="_blank" rel="nofollow"><span>マイページから<br>交換する</span></a></div>
      </div>
    </div>
  </div>
</div>
</div>