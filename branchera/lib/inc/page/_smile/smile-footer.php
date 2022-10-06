<?php

if(isset($smile_id_test)||isset($smile_id_production)){
	if(HTTP_HOST === "www.haseko.co.jp" ||
		HTTP_HOST === "www1.haseko.co.jp" ||
		HTTP_HOST === "stage.ism.life" ||
		HTTP_HOST === "haseko.dj-demo.net") {
		$smile_id = $smile_id_production;
  } else {
    $smile_id = $smile_id_test;
  }
}

?>

<footer class="smile-footer">
	<?php if(isset($smileAnnotation) && $smileAnnotation) { ?>
	<p class="u-font__bold u-color__red smile-footer__shortage_br u-font__palt"><?php echo $smileAnnotation;?></p>
	<?php $smileAnnotation = null; }else if(isset($itemShortage) && $itemShortage) { ?>
	<p class="u-font__bold u-color__red">商品欠品中につき、ただいま受付できません。</p>
	<?php $smileAnnotation = null; }else if(isset($itemShortageOilcut) && $itemShortageOilcut) { ?>
	<p class="u-font__bold u-color__red">ただいま受付できません。</p>
	<?php } elseif(isset($itemEnd)) { ?>
	<p class="u-font__bold u-color__red u-text__palt mb0"><?php echo $itemEnd; ?></p>
	<?php } else { } ?>
	<?php if(isset($smile_id) && $smile_flug == "exchange_multiple"){ ?>
	<div class="smile-footer__row_multi">
		<h2 class="smile-footer__ttl_multi"><?php echo $smile_itemname ?></h2>
		<?php } elseif (isset($footerTtl) && $footerTtl) { ?>
		<div class="smile-footer__row">
			<h2 class="smile-footer__ttl"><?php echo $footerTtl ?></h2>
		<?php } elseif (isset($smile_id) && $smile_flug == "exchange_multiple_original_coffee") { ?>
		<div class="smile-footer__row">
			<h2 class="smile-footer__ttl"><?php echo $smile_itemname ?></h2>
			<?php } else { ?>
			<div class="smile-footer__row">
				<h2 class="smile-footer__ttl"><?php echo $pageTtl ?></h2>
				<?php }; ?>

				<?php if(isset($smile_id) && $smile_flug == "lottery"){ ?>

				<div class="smile-footer__ex">
					<p>必要スマイル</p>
					<p><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイルで１回抽選<br>
						<span class="u-small u-color__red">※お1人さま1回限りの応募とさせていただきます。</span>
					</p>

    </div>
	<?php if($content['priority'] !== '-1')  { ?>
    <a href="<?php echo $mypoint_url?>/<?php echo $smile_id; ?>" target="_blank" data-scroll class="smile-footer__btn u-btn_point_s">抽選賞品に<br>応募する</a>
	<?php } else { ?>
		<label class="u-btn_end smile-footer__btn mt2">応募は終了しました</label>
	<?php } ?>
  <?php }elseif(isset($smile_id) && $smile_flug == "exchange"){ ?>

				<div class="smile-footer__ex">
					<p>必要スマイル</p>
					<p><span class="smile-footer__num"><?php echo $smile_num; ?></span><span class="u-ilblock">スマイル</span></p>
				</div>
				<?php if((isset($itemShortage) && $itemShortage) ||(isset($itemShortageOilcut) && $itemShortageOilcut)){ ?>
				<p data-scroll class="smile-footer__btn u-btn_end_s smile-footer__btn_shortage u-font__bold mt0">マイページで<br>交換する</p>
				<?php } else {?>
				<a href="<?php echo $mypoint_url?>/<?php echo $smile_id; ?>" target="_blank" data-scroll class="smile-footer__btn u-btn_point_s">マイページで<br>交換する</a>
				<?php } ?>
			</div>

			<?php }elseif(isset($smile_id) && $smile_flug == "exchange_multiple"){ ?>
			<div class="smile-footer__multi">
				<p>必要スマイル</p>
				<p><span class="smile-footer__num smile-footer__num_multi"><?php echo $smile_num; ?></span>スマイル</p>
			</div>
			<a href="<?php echo $mypoint_url?>/<?php echo $smile_id; ?>" target="_blank" data-scroll class="u-btn_point_s">マイページで<br>交換する</a>

			<?php }elseif($smile_flug == "double_smile"){ ?>
			<div class="smile-footer__ex">
				<p>必要スマイル</p>
				<p style="text-align:right;white-space: nowrap;"><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイル〜<br><span class="smile-footer__num"><?php echo $smile_num2; ?></span>スマイル〜</p>
			</div>

			<?php }elseif(isset($smile_id) && $smile_flug == "exchange_multiple_original_coffee"){ ?>
				<div class="smile-footer__ex">
					<p>必要スマイル</p>
					<p><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイル</p>
				</div>
				<?php if((isset($itemShortage) && $itemShortage) ||(isset($itemShortageOilcut) && $itemShortageOilcut)){ ?>
				<p data-scroll class="smile-footer__btn u-btn_end_s smile-footer__btn_shortage u-font__bold mt0">マイページで<br>交換する</p>
				<?php } else {?>
				<a href="<?php echo $mypoint_url?>/<?php echo $smile_id; ?>" target="_blank" data-scroll class="smile-footer__btn u-btn_point_s">マイページで<br>交換する</a>
				<?php } ?>
			</div>

			<?php }else{ ?>

			<div class="smile-footer__ex">
				<p>必要スマイル</p>
				<p><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイル〜</p>
			</div>
			<?php }; ?>
</footer>
