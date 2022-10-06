<?php if (isset($release_year)){ ?>
	<footer class="article-footer">
	  <small class="u-small">
		<?php
		if ($release_month and $release_day) { ?>
			※この記事の情報は<?php echo($release_year); ?>年<?php echo($release_month); ?>月<?php echo($release_day); ?>日現在のものです
		<?php
	} else {
		if ($release_month) { ?>
				※この記事の情報は<?php echo($release_year); ?>年<?php echo($release_month); ?>月現在のものです
<?php } else { ?>
	※この記事の情報は<?php echo($release_year); ?>年現在のものです
<?php	} } }?>
  </small>
</footer>