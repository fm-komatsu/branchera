<header class="main__header main-header">
	<div class="main-header__row">
		<figure class="main-header__thum">
			<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
		</figure>
		<div class="main-header__ex">
			<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
			<p class="main-header__desc"><?php echo $metaDesc; ?></p>
			<div class="main-header__tags u-tags">
				<h5 class="u-tags__ttl">キーワード</h5>
				<div class="u-tags__row">
					<?php echo show_content_tags($content); ?>
				</div>
			</div>
		</div>
	</div>
</header>
