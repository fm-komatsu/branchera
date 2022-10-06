<section>
  <h3 class="recipe-collect__ttl_l">
    <?php echo $collectTtl; ?>
  </h3>
  <div class="recipe__design recipe-design">
    <div class="recipe-design__howto mb0">
      <p class="mb4 mb2_sp"><?php echo $collectTxt;?></p>
      <div>
        <div class="center">
          <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy"  alt="動画でチェック">
          <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy"  alt="動画でチェック">
        </div>
      </div>
      <div class="recipe-movie-new__video-collect">
        <div class="recipe-movie-new__video-collect_base">
          <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $collectMv; ?>?rel=0" frameborder="0"
          gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <a href="<?php echo $base_url; ?>/magazine/article/<?php echo $collectLink; ?>.php" class="u-btn u-btn_point center"><?php echo $collectBtn; ?>の詳細はこちら</a>
    </div>
    <?php if(isset($collectMv02) && $collectMv02 ){ ?>
      <div class="mt8 mt5_sp">
        <div class="center">
          <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy"  alt="動画でチェック">
          <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy"  alt="動画でチェック">
        </div>
      </div>
      <div class="recipe-movie-new__video-collect">
        <div class="recipe-movie-new__video-collect_base">
          <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $collectMv02; ?>?rel=0" frameborder="0"
          gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <a href="<?php echo $base_url; ?>/magazine/article/<?php echo $collectLink02; ?>.php" class="u-btn u-btn_point center"><?php echo $collectBtn02; ?>の詳細はこちら</a>
     </div>
   <?php } else { }?>
</section>
