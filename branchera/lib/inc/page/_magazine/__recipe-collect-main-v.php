<div class="recipe-main-v ">
	<div class="recipe-main-v__row collect">
		<figure class="recipe-main-v__item">
			<img data-src="<?php echo $img_url; ?>/magazine/comic02/collect/main-v@2x.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/collect/main-v@2x.png" alt="うちのご飯は世界イチ まとめ記事" style="max-width: 801px;" class="u-img__max u-only__pc">
			<img data-src="<?php echo $img_url; ?>/magazine/comic02/collect/main-v-sp@2x.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/collect/main-v-sp@2x.png" alt="うちのご飯は世界イチ まとめ記事" style="max-width: 413px;" class="u-img__max mb2_sp u-only__sp center">
		</figure>
		<div class="u-only__sp collect__chara">
			<a href="<?php echo $img_url ?>/magazine/comic02/collect/fl_info@2x.png" class="mfp-btn__img u-btn_point center">登場人物紹介</a>
		</div>
	</div>
	<?php if (isset($comic02PrId)) {
	} else if (isset($bannerCmId) && $bannerCmId == '999') { ?>
	<?php } else { ?>
		<div class="mt3 mt2_sp">
			<div>
				<?php // $CmGtmId = "1";
				$CmGtmId = "1";
				include($inc_path . "/lib/inc/page/_magazine/__comic02_cm.php"); ?>
			</div>
		</div>
	<?php } ?>
</div>
