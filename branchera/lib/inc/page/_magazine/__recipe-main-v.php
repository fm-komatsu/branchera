<div class="recipe-main-v">
	<div class="recipe-main-v__row">
		<figure class="recipe-main-v__item">
			<img
			data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-vis.png"
			data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-vis.png"
			alt="うちのご飯は世界イチ"
			style="max-width: 734px;"
			class="u-img__max u-only__pc"
			>
			<img
			data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-vis-sp.png"
			data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-vis-sp@2x.png"
			alt="うちのご飯は世界イチ"
			style="max-width: 666px;"
			class="u-img__max  u-only__sp"
			>
		</figure>
	</div>
	<?php if (isset($comic02PrId)) {} else if(isset($bannerCmId) && $bannerCmId == '999') { ?>
	<?php } else { ?>
	<div class="mt3 mt2_sp">
		<div>
			<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
		</div>
	</div>
	<?php } ?>
</div>
