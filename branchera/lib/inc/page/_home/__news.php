<?php
if ($cntId && isset($cntId)) {
	get_id_HomeNews($cntId, $noticeLabel, $category, $cntTtl, $predicate, $dataGaClick);
} else {
?>
	<?php
	// カテゴリーを追加
	if (!empty($category)) {
		$category = '【' . $category . '】';
	}
	?>
	<article class="news__item news-item">
		<label class="news-item__row">
			<div class="news-item__wrap <?php if ($noticeLabel && isset($noticeLabel)) {
																		echo $noticeLabel;
																	} else {
																	} ?>">
				<?php if ($news_cntUrl) { ?>
					<a href="<?php echo ($news_cntUrl) ?>" class="f-photolist__row news-item__link" target="<?php echo $news_tarGet ?>" <?php if (isset($dataGaClick)) {
																																																																echo ('data-ga-click = "' . $dataGaClick . '"');
																																																															} else {
																																																															} ?>>
						<div class="news-item__img">
							<img data-src="<?php echo ($img_url) ?>/<?php echo ($news_imgUrl) ?>" class="u-img__max" alt="<?php echo ($cntTtl) ?>">
						</div>
						<h3 class="news-item__ttl"><?php echo ($category) ?><?php echo ($cntTtl) ?><?php echo ($predicate) ?></h3>
						<?php if ($noticeLabel && isset($noticeLabel)) { ?>
							<div class="news-item__icon <?php echo  $noticeLabel; ?>"><span><?php echo  $noticeLabel; ?></span></div>

						<?php } else {
						} ?>
					</a>
				<?php } else { ?>
					<div class="news-item__link">
						<div class="news-item__img">
							<img data-src="<?php echo ($img_url) ?>/<?php echo ($news_imgUrl) ?>" class="u-img__max" alt="<?php echo ($cntTtl) ?>">
						</div>
						<h3 class="news-item__ttl news-item__ttl_nolink"><?php echo ($category) ?><?php echo ($cntTtl) ?><?php echo ($predicate) ?></h3>
						<?php if ($noticeLabel && isset($noticeLabel)) { ?>
							<div class="news-item__icon <?php echo  $noticeLabel; ?>"><span><?php echo  $noticeLabel; ?></span></div>

						<?php } else {
						} ?>
					</div>
				<?php } ?>
			</div>
		</label>
	</article>
<?php } ?>
