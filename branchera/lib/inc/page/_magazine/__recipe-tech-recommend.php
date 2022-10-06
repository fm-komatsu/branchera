        <?php
        for ($i = 0, $size = count($recommendrecipe); $i < $size; ++$i) {
          if ($recommendrecipe[$i][0] === 'recommend-recipe-st') {   // recommend-recipe-start：'recommend-recipe-st'
        ?>
            <section>
              <h5>■関連記事</h5>
              <div class="">
              <?php } elseif ($recommendrecipe[$i][0] === 'recommend-recipe-id') {   // recommend-recipe-start：'recommend-recipe-id'
              $recommenddata = $recommendrecipe[$i][1];
              $recommendrecipecnt = get_id_data($recommenddata);
              $recommendpageTtl = $recommendrecipecnt['title'];
              $recommendThum = $img_url . '/thum/' . $recommendrecipecnt['image'];
              $recommendurl = $base_url . $recommendrecipecnt['url'];
              ?>
                <a href="<?php echo $recommendurl ?>" class="recipe-photolist__item recipe-photolist__reciperecommend" <?php if (isset($recommendrecipe[$i][2]) && $recommendrecipe[$i][0]) { ?>data-ga-click="<? echo $recommendrecipe[$i][2]; ?>" <?php } else {
                                                                                                                                                                                                                                                  } ?>>
                  <article class="recipe-photolist__row">
                    <img data-src="<?php echo $recommendThum ?>" alt="" class="recipe-photolist__reciperecommendimg u-img__max js-show mr1" style="max-width:85px">
                    <p class="reciperecommend-ttl">●<?php echo $recommendpageTtl ?></p>
                  </article>
                </a>
              <?php } elseif ($step[$i][0] === 'recommend-recipe-end') { // recommend-recipe-end：'ecommend-recipe-end'
              ?>
              </div>
            </section>
        <?php }
          } ?>
