<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-new-main-v.php");
    ?>
    <!-- ★220805追加 -->
    <?php if ($currentNumber === '123' || $currentNumber === '147' || $currentNumber === '143' || $currentNumber === '112' || $currentNumber === '94' || $currentNumber === '120' || $currentNumber === '107' || $currentNumber === '90' || $currentNumber === '106' || $currentNumber === '115' || $currentNumber === '152' || $currentNumber === '116' || $currentNumber === '133' || $currentNumber === '128') { ?>
    <div class="mt3 mt2_sp mb5 mb3_sp">
      <div>
        <?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
      </div>
    </div>
    <?php } ?>
    <!-- /220805追加 -->
    <section class="main__wrapper recipe mt4 mt1_sp">
      <div class="recipe__header recipe-header technic__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
      <?php
        if(isset($comic02PrId)) {
      ?>
      <div>
        <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); ?>
      </div>
      <?php
        $comic02PrId = null;
        } else {}
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
        <?php
          for($i = 0, $size = count($step); $i < $size; ++$i) {
            if ($step[$i][0] === 'ttl_l') {
        ?>
          <h3 class="recipe__ttl_l <?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></h3>
        <?php
            } elseif ($step[$i][0] === 'ttl_m') {
        ?>
          <h4 class="recipe__ttl_tech <?php echo $step[$i][1]; ?>" <?php if (isset($step[$i][3])&& !empty($step[$i][3])) { ?>id="<?php echo ($step[$i][3]);?>"<?php } else {} ?>><?php if (isset($step[$i][4])&& !empty($step[$i][4])) { ?><a href="<?php echo $base_url ?><?php echo $step[$i][4] ?>" class="recipe-design__link"><?php echo $step[$i][2]; ?></a><?php } else { ?><?php echo $step[$i][2]; ?><?php } ?></h4>
        <?php
            } elseif ($step[$i][0] === 'ttl_s') {
          ?>
          <h4 class="recipe__ttl_s <?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></h4>
        <?php
          } elseif ($step[$i][0] === 'ttl3') {
        ?>
          <h3 <?php echo $step[$i][1]; ?>><?php echo $step[$i][2]; ?></h3>
        <?php
          } elseif ($step[$i][0] === 'ttl4') {
        ?>
          <h4 <?php echo $step[$i][1]; ?>><?php echo $step[$i][2]; ?></h4>
        <?php
          } elseif ($step[$i][0] === 'ttl5') {
        ?>
          <h5 <?php echo $step[$i][1]; ?>><?php echo $step[$i][2]; ?></h5>
        <?php
            } elseif ($step[$i][0] === 'text') {
        ?>
          <p class="<?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></p>
        <?php
          } elseif ($step[$i][0] === 'free') {
        ?>
        <?php if(isset($step[$i][1]) && $step[$i][1]) { ?>
          <div class="<?php echo $step[$i][1]?>">
        <?php } else { ?>
          <div>
        <?php }?>
            <?php echo $step[$i][2]; ?>
          </div>
        <?php
          } elseif ($step[$i][0] === 'textimg') {
          // 画像ありテキスト：'textimg','num','float方向','mb','alt','text'
        ?>
          <div class="u-clearfix <?php echo $step[$i][4]; ?>">
            <figure class="u-float__<?php echo $step[$i][2]; ?>">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>@2x.jpg"
                alt="<?php echo (strip_tags($step[$i][3])).'｜フラッキーのHow To「'.$pageTtl.'」'; ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>
            <?php echo $step[$i][5]; ?>
            </p>
          </div>

        <?php
          } elseif ($step[$i][0] === 'step') { // 手順：'step','num','mb','text'
        ?>
          <dl class="recipe-design__step <?php echo $step[$i][2]; ?>">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>@2x.jpg"
                 alt="<?php echo ( strip_tags($step[$i][3].'｜フラッキーのHow To「'.$pageTtl.'」')); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($step[$i][3]); ?>
            </dd>
          </dl>
          <?php
          } elseif ($step[$i][0] === 'mtr-st') { // 材料 start：'mtr-st'
          ?>
          <div class="recipe-design__material">
        <?php
          } elseif ($step[$i][0] === 'mtr-end') { // 材料 end：'mtr-end'
        ?>
          </div>
        <?php
          } elseif ($step[$i][0] === 'mtr') { // 材料 'mtr','材料名','分量'
        ?>
          <dl class="recipe-design__materials">
            <dt><?php if (isset($step[$i][3])&& !empty($step[$i][3])) { ?><a href="<?php echo $base_url ?>/magazine/article/<?php echo $step[$i][3] ?>" class="recipe-design__link"><?php echo $step[$i][1]; ?></a><?php } else { ?><?php echo $step[$i][1]; ?><?php } ?></dt>
            <dd><?php if (isset($step[$i][4])&& !empty($step[$i][4])) { ?><a href="<?php echo $base_url ?>/magazine/article/<?php echo $step[$i][3] ?>" class="recipe-design__link"><?php echo $step[$i][2]; ?></a><?php } else { ?><?php echo $step[$i][2]; ?><?php } ?></dd>
          </dl>
        <?php } elseif ($step[$i][0] === 'chk-st') {   // check start：'chk-st'
        ?>
        <section>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4>
                  <div class="recipe-check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                    alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                  </div>
                </h4>
        <?php } elseif ($step[$i][0] === 'chk-end') { // check end：'chk-end'
          ?>
              </div>
            </div>
          </div>
        </section>
        <?php } elseif ($step[$i][0] === 'plus-st') { ?>
        <section>
          <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
        <?php } elseif ($step[$i][0] === 'plus-ttl') { ?>
        <h3 class="recipe-plus1__ttl"><?php echo $step[$i][2]; ?></h3>
        <?php } elseif ( $step[$i][0] === 'plus-end') { ?>
            </div>
          </div>
        <section>
        <?php } ?>
        <?php } ?>
        </div>
      </div>
      <?php
        for($i = 0, $size = count($sp02); $i < $size; ++$i) {
          $recipeIcon = $sp02[$i][0].'_'.$sp02[$i][1];
          $speech = $sp02[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
        <?php
        for($i = 0, $size = count($step); $i < $size; ++$i) {
        if ($recommendrecipe[$i][0] === 'recommend-recipe-st') {   // recommend-recipe-start：'recommend-recipe-st'
        ?>
        <section>
          <h5>■関連記事</h5>
          <div class="">
            <?php } elseif ($recommendrecipe[$i][0] === 'recommend-recipe-id') {   // recommend-recipe-start：'recommend-recipe-id'
            $recommenddata = $recommendrecipe[$i][1] ;
            $recommendrecipecnt = get_id_data($recommenddata);
            $recommendpageTtl = $recommendrecipecnt[ 'title' ];
            $recommendThum = $img_url . '/thum/' .$recommendrecipecnt[ 'image' ];
            $recommendurl = $base_url.$recommendrecipecnt[ 'url' ];
              ?>
            <a href="<?php echo $recommendurl ?>" class="recipe-photolist__item recipe-photolist__reciperecommend">
              <article class="recipe-photolist__row">
                  <img data-src= "<?php echo $recommendThum ?>" alt="" class="recipe-photolist__reciperecommendimg u-img__max js-show mr1" style="max-width:85px">
                  <p class="reciperecommend-ttl">●<?php echo $recommendpageTtl ?></p>
              </article>
            </a>
            <?php } elseif ($step[$i][0] === 'recommend-recipe-end') { // recommend-recipe-end：'ecommend-recipe-end'
            ?>
					</div>
        </section>
        <?php }} ?>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
