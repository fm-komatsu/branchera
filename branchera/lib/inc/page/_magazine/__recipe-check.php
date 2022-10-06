<?php
	if($recipe_or_tech == 1) {
		$addClass = '-recipe';
	} else {
		$addClass = null;
	}
?>
<div class="recipe-check<?php echo $addClass?> mb3">
  <div class="recipe-check<?php echo $addClass?>__row">
    <div class="recipe-check<?php echo $addClass?>__ttl">
      <h4>
      <div class="recipe-check<?php echo $addClass?>__ex center">
        <img
        data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl<?php echo $addClass?>.png"
        data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl<?php echo $addClass?>@2x.png"
        alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
      </div></h4>
      <?php echo $check_cnt?>
    </div>
  </div>
</div>
