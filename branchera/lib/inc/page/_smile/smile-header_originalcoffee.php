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

<header class="main__header smile-header <?php if(isset($smile_id) && $smile_flug == "lottery"){ echo "lottery-header u-text__palt"; }; ?>">
	<?php if($smile_flug == "exchange_multiple_original_coffee"){ ?>
	<div class="smile-header__row_multi">
		<?php }else { ?>
		<div class="smile-header__row">
			<?php } ?>
			<figure class="smile-header__thum">
				<img src="<?php echo $img_url.'/thum/'.$content['image'] ?>" alt="<?php echo $content['title'] ?>の画像" class="u-img__max">
			</figure>
			<?php if($smile_flug == "exchange_multiple_original_coffee"){ ?>
			<div class="smile-header__ex_multi">
				<h2 class="smile-header__ttl"><?php echo $content['title'] ?></h2>
				<p class="smile-header__desc"><?php echo $content['description'] ?></p>
				<?php }else { ?>
				<div class="smile-header__ex">
					<h2 class="smile-header__ttl"><?php echo $content['title'] ?></h2>
					<p class="smile-header__desc<?php if(isset($itemShortage) && $itemShortage) { ?> mb0<?php }?>"><?php echo $content['description'] ?></p>
					<?php } ?>

					<?php if(isset($smile_id) && $smile_flug == "lottery"){ ?>
					<?php }elseif(isset($smile_id) && $smile_flug == "exchange"){ ?>
					<?php if(isset($itemShortage) && $itemShortage) { ?>
					<p class="u-font__bold u-color__red">商品欠品中につき、ただいま受付できません。</p>
					<?php  } elseif(isset($itemShortageOilcut) && $itemShortageOilcut) { ?>
					<p class="u-font__bold u-color__red">ただいま受付できません。</p>
					<?php } elseif(isset($itemEnd)) { ?>
					<p class="u-font__bold u-color__red u-text__palt mb0 mt0"><?php echo $itemEnd; ?></p>
					<?php } else { } ?>

					<?php }; ?>
				</div>
			</div>
			<nav class="main__snav snav">
				<?php include ($inc_path."/lib/inc/page/_smile/__snav.php"); ?>
			</nav>
</header>
