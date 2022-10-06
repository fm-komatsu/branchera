<?php
  $data = getdata("","", $contents_id, true);
  $article = $data[0];
  $article['description'] = mb_strimwidth($article['description'], 0, 120, "..." ,'utf-8');
?>

<h3 class="s-ttl">Pick UP</h3>

<div class="u-pickup">
  <div class="u-pickup-row">
    <div class="u-pickup-item img"><img src="<?php echo $img_url.$article['image'] ?>" alt="<?php echo $article['title'] ?>"></div>
    <div class="u-pickup-item">
      <h3 class="m-ttl"><?php echo $article['title'] ?></h3>
      <p class="desc"><?php echo $article['description'] ?></p>
      <a href="<?php echo $base_url.$article['url'] ?>" class="u-btn">詳しくはこちら</a>
    </div>
  </div>
</div>
