<header class="main__header main-header u-only__pc">
	<div class="main-header__row">
		<figure class="u-fig main-header__thum">
			<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
			<?php if(isset($thumCap)) { ?>
			<figcaption class="u-fig__cap">
				<span><?php echo $thumCap ?></span>
			</figcaption>
		<?php } else { }  ?>
		</figure>
		<div class="main-header__ex">
			<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
			<p class="main-header__desc"><?php echo $metaDesc; ?></p>
		</div>
	</div>
</header>
