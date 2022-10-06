<nav class="main__snav snav__bottom">
  <div class="snav__row">
    <a href="<?php echo $base_url ?>/magazine/index_comic02.php#collect" class="snav__item" data-scroll>うちのご飯は世界イチ まとめ記事</a>
    <a href="<?php echo $base_url ?>/magazine/index_comic02.php#recipe" class="snav__item" data-scroll>うちのご飯は世界イチ</a>
    <a href="<?php echo $base_url ?>/magazine/index_comic02.php#technique" class="snav__item" data-scroll>今さら聞けない料理のアレコレ</a>
  </div>
</nav>
<?php if (isset($comic02PrId)) {} else if(isset($bannerCmId) && $bannerCmId == '999') { ?>
<?php } else { ?>
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<?php } ?>
