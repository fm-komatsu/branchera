<div class="entry__ttl"><h3>ブランシエラクラブで、暮らしをもっと楽しくより快適に</h3></div>
  <div class="entry__cnt">
    <div class="u-column mb3">
      <div class="u-column__3">
        <div class="u-column__item">
          <div class="entry__catttl"><h4>ブランシエラマガジン</h4></div>
          <div class="entry__ex">ゆたかな暮らしを支える情報をお届けします。</div>
          <figure class="u-articlelist__img mb2_sp">
            <?php
          echo s_show_category_photoList__random("recipe");
          ?>
          </figure>
        </div>
        <div class="u-column__item">
          <div class="entry__catttl"><h4>優待サービス</h4></div>
          <div class="entry__ex">プレゼント企画や優待サービスなど、おトクな情報が満載！</div>
          <figure class="u-articlelist__img mb2_sp">
            <?php
              echo s_show_category_photoList__random("gift");
            ?>
          </figure>
        </div>
        <div class="u-column__item">
          <div class="entry__catttl"><h4>イベント・キャンペーン</h4></div>
          <div class="entry__ex">普段は体験できないイベントに参加できるチャンス！</div>
          <figure class="u-articlelist__img">
            <?php
              echo s_show_category_photoList__random("event");
            ?>
          </figure>
        </div>
      </div>
    </div>
    <div class="entry__catttl"><h4>住まいレージ</h4></div>
    <div class="entry__ex center">ためて、つかえるポイントサービス</div>
    <div class="flex flex_center mb2">
      <div class="w50 mb2_sp">
        <figure>
          <img data-src="<?php echo $img_url ?>/event/common/tameru.png" data-retina="<?php echo $img_url ?>/event/common/tameru@2x.png"
          alt="ためる" class="u-img__max center" style="max-width:326px;">
        </figure>
      </div>
      <div class="w50">
        <figure>
          <img data-src="<?php echo $img_url ?>/event/common/tsukau.png" data-retina="<?php echo $img_url ?>/event/common/tsukau@2x.png"
          alt="つかう" class="u-img__max center" style="max-width:326px;">
        </figure>
      </div>
    </div>
  </div>
  <div class="entry__end">ぜひ新規登録して、会員限定の本イベントにご応募ください！</div>
</div>

<div class="u-btn-layout mb2">
  <div class="u-btn-layout__row">
    <a href="<?php echo $myentry_url ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">長谷工IDのご登録はこちら</a>
  </div>
</div>
