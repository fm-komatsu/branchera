<div class="u-toindex">
	<div class="u-toindex__row">
		<a href="<?php echo $base_url; ?>/magazine/" class="u-toindex__a">
			<div class="u-toindex__icon"></div>
			<div class="u-toindex__ex">記事一覧</div>
		</a>
	</div>
	<?php if(isset($toindex_url)){ ?>
		<div class="u-toindex__row list">
			<a href="<?php echo $base_url.$toindex_url; ?>" class="u-toindex__a">
				<div class="u-toindex__icon list"></div>
				<div class="u-toindex__ex">目次へ戻る</div>
			</a>
		</div>
	<?php }; ?>
</div>
