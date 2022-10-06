<?php
  $data = getdata("","", $contents_id, true);
  $article = $data[0];
?>
<div class="conts-head">
  <div class="wrapper">
    <div class="thumbnail"><img src="<?php echo $img_url.$article['image'] ?>" alt="<?php echo $article['title'] ?>の画像"></div>
    <div class="inner">
      <h1 class="page-title"><?php echo $article['title'] ?></h1>
      <p><?php echo $article['description'] ?></p>
    </div>
  </div>
  <hr>
  <div class="tags">
    <h5 class="tags-ttl">人気ワード</h5>
    <?php
      foreach($article['tag'] as $tag) {
      echo '<a href="'.$search_link."?tag=".$tag['tag_name'].'">'
      .'<em>'.$tag['tag_name'].'</em>'
      .'<span class="num">'.$tag['tag_count'].'</span></a>';
      };
    ?>
  </div>
</div>
