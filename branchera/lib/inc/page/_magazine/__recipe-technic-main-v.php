<div class="recipe-main-v ">
	<div class="recipe-main-v__row technic">
		<figure class="recipe-main-v__item">
			<img
			src="<?php echo $img_url; ?>/magazine/comic02/technic/common/main-vis.png"
			alt="今更聞けない 料理のアレコレ ～うちのご飯は世界イチ番外編～"
			style="max-width: 717px;"
			class="u-img__max u-only__pc"
			loading="lazy"
			>
			<img
			src="<?php echo $img_url; ?>/magazine/comic02/technic/common/main-vis-sp.png"
			alt="今更聞けない 料理のアレコレ ～うちのご飯は世界イチ番外編～"
			style="max-width: 666px;"
			class="u-img__max  u-only__sp"
			loading="lazy"
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
