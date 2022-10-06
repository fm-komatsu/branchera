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
	<p class="u-font__bold u-color__red smile-footer__shortage">商品欠品中につき、ただいま受付できません。</p>
	<?php if(isset($itemEnd)) { ?>
	<p class="u-font__bold u-color__red u-text__palt mb0"><?php echo $itemEnd; ?></p>
	<?php } else { } ?>
	<?php if(isset($smile_id) && $smile_flug == "exchange_multiple"){ ?>
	<div class="smile-footer__row_multi">
		<h2 class="smile-footer__ttl_multi"><?php echo $smile_itemname ?></h2>
		<?php } elseif (isset($footerTtl) && $footerTtl) { ?>
		<div class="smile-footer__row">
			<h2 class="smile-footer__ttl"><?php echo $footerTtl ?></h2>
			<?php } else { ?>
			<div class="smile-footer__row">
				<h2 class="smile-footer__ttl"><?php echo $pageTtl ?></h2>
				<?php }; ?>

				<?php if(isset($smile_id) && $smile_flug == "exchange"){ ?>

				<div class="smile-footer__ex">
					<p>必要スマイル</p>
					<p><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイル</p>
				</div>
				<p data-scroll class="smile-footer__btn u-btn_end_s smile-footer__btn_shortage u-font__bold mt0">マイページで<br>交換する</p>
			</div>

			<?php }elseif(isset($smile_id) && $smile_flug == "exchange_multiple"){ ?>
			<div class="smile-footer__multi">
				<p>必要スマイル</p>
				<p><span class="smile-footer__num smile-footer__num_multi"><?php echo $smile_num; ?></span>スマイル</p>
			</div>
			<p data-scroll class="u-btn_end_s u-font__bold mt0">マイページで<br>交換する</p>

			<?php }elseif($smile_flug == "double_smile"){ ?>
			<div class="smile-footer__ex">
				<p>必要スマイル</p>
				<p style="text-align:right;white-space: nowrap;"><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイル〜<br><span class="smile-footer__num"><?php echo $smile_num2; ?></span>スマイル〜</p>
			</div>

			<?php }else{ ?>

			<div class="smile-footer__ex">
				<p>必要スマイル</p>
				<p><span class="smile-footer__num"><?php echo $smile_num; ?></span>スマイル〜</p>
			</div>

			<?php }; ?>
		</div>
</footer>
