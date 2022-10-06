<div class="recipe-main-v ">
	<div class="recipe-main-v__row recipe__new">
		<figure class="recipe-main-v__item">
			<img
			data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-v@2x.png"
			data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-v@2x.png"
			alt="今更聞けない 料理のアレコレ ～うちのご飯は世界イチ番外編～"
			style="max-width: 801px;"
			class="u-img__max u-only__pc"
			>
			<img
			data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-v-sp@2x.png"
			data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/main-v-sp@2x.png"
			alt="今更聞けない 料理のアレコレ ～うちのご飯は世界イチ番外編～"
			style="max-width: 413px;"
			class="u-img__max mb2_sp u-only__sp center"
			>
		</figure>
		<div class="u-only__sp recipe__chara">
			<a href="<?php echo $img_url ?>/magazine/comic02/recipe/common/main-v-sp-chara@2x.png" class="mfp-btn__img u-btn_point center">登場人物紹介</a>
		</div>
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
