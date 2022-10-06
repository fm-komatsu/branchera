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
	<?php if($smile_flug == "exchange_multiple"){ ?>
	<div class="smile-header__row_multi">
		<?php }else { ?>
		<div class="smile-header__row">
			<?php } ?>
			<figure class="smile-header__thum">
				<img src="<?php echo $img_url.'/thum/'.$content['image'] ?>" alt="<?php echo $content['title'] ?>の画像" class="u-img__max">
			</figure>
			<?php if($smile_flug == "exchange_multiple"){ ?>
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
					<?php  } elseif(isset($annotationMessage) && $annotationMessage) { ?>
					<p class="u-font__bold u-color__red u-font-size__14"><?php echo $annotationMessage; ?></p>
					<?php } else { } ?>

					<div class="smile-header__nums">
						<h5 class="smile-header__num-ttl">必要<span>スマイル</span></h5>
						<p class="smile-header__num"><?php echo $smile_num; ?><span>スマイル</span></p>
						<?php if((isset($itemShortage) && $itemShortage) ||(isset($itemShortageOilcut) && $itemShortageOilcut)){ ?>
						<p data-scroll class="smile-header__btn u-btn_end_s smile-header__btn_shortage u-font__bold u-icon__none mt0">マイページ<br>で交換する</p>
						<?php } else {?>
						<a href="<?php echo $mypoint_url?>/<?php echo $smile_id; ?>" target="_blank" data-scroll class="smile-header__btn u-btn_point_s">マイページ<br>で交換する</a>
						<?php } ?>
					</div>

					<?php }elseif($smile_flug == "exchange_multiple"){ ?>

					<?php }elseif($smile_flug == "service"){ ?>
					<div class="smile-header__nums">
						<h5 class="smile-header__num-ttl">必要<span>スマイル</span></h5>
						<p class="smile-header__num">1,000<span>スマイル～</span></p>
						<a href="#flow" data-scroll class="smile-header__btn u-btn_point_s">お申込み<br>方法</a>
					</div>
					<?php }elseif($smile_flug == "reform"){ ?>
					<div class="smile-header__nums">
						<h5 class="smile-header__num-ttl">必要<span>スマイル</span></h5>
						<p class="smile-header__num-reform">10,000<br class="u-only__sp"><span>スマイル～</span></p>
						<a href="#flow" data-scroll class="smile-header__btn_lottery u-btn_point_s">お問い合わせ<br>方法</a>
					</div>
					<?php }elseif($smile_flug == "double_smile"){ ?>
					<div class="smile-header__nums">
						<h5 class="smile-header__num-ttl">必要<span>スマイル</span></h5>
						<p class="smile-header__num" style="text-align: right; white-space: nowrap;">1,000<span>スマイル～</span><br>10,000<span>スマイル～</span></p>
						<a href="#flow" data-scroll class="smile-header__btn u-btn_point_s">お申込み<br>方法</a>
					</div>
					<?php }else{ ?>

					<div class="smile-header__nums">
						<h5 class="smile-header__num-ttl">必要<span>スマイル</span></h5>
						<p class="smile-header__num">10,000<span>スマイル〜</span></p>
						<a href="#flow" data-scroll class="smile-header__btn u-btn_point_s">お申込み<br>方法</a>
					</div>

					<?php }; ?>
				</div>
			</div>
			<?php if($smile_flug == "exchange_multiple"){ ?>
			<nav class="main__snav snav">
				<?php include ($inc_path."/lib/inc/page/_smile/__snav.php"); ?>
			</nav>
			<?php if (isset($multi_cnt) && $multi_cnt == "cleaning"){ ?>
			<nav class="main__snav snav emergency__nav">
				<?php include ($inc_path."/lib/inc/page/_smile/__snav_ex-cleaning.php") ?>
			</nav>
			<?php } else { ?>
			<nav class="main__snav snav cleaning__nav">
				<?php include ($inc_path."/lib/inc/page/_smile/__snav_ex-emergency.php") ?>
			</nav>
			<?php } ?>
			<?php }else if(strpos($body_class,'lottery') !== false){ } else { { ?>
			<nav class="main__snav snav">
				<?php include ($inc_path."/lib/inc/page/_smile/__snav.php"); ?>
			</nav>
			<?php }}; ?>
</header>
