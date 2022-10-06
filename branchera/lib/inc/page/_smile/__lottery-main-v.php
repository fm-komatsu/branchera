<div class="lottery-banner__row">
  <div class="mb4 mb2_sp">
    <div class="lottery-banner__application center">
      <div class="smile-header__nums mb1">
        <h5 class="smile-header__num-ttl">必要<span>スマイル</span></h5>
        <p class="smile-header__num"><?php echo $smile_num; ?><span class="smile-header__lottery">スマイルで<br>１回抽選</span></p>
				<?php if($content['priority'] !== '-1')  { ?>
	        <a href="<?php echo $mypoint_url?>/<?php echo $smile_id; ?>" target="_blank" data-scroll class="smile-header__btn_lottery u-btn_point_s">抽選賞品に<br>応募する</a>
				<?php } else { ?>
				<label class="u-btn_end smile-header__btn">応募は<br>終了しました</label>
				<?php } ?>
      </div>
    </div>
    <?php if (!$ssoFlag == 1){ ?>
      <div class="lottery-banner__atension">
        <small class="u-small">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
        class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small>
      </div>
      <?php }; ?>
  </div>
  <figure class="u-only__pc">
    <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>@2x.png"
    alt="<?php echo($cutHtmlTtl)?>" style="max-width:737px;" class="u-img__max">
    </figure>
    <figure class="u-only__sp">
      <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>-sp@2x.png"
    alt="<?php echo($cutHtmlTtl)?>" style="max-width:534px;" class="u-img__max">
  </figure>
</div>
