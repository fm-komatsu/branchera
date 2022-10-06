<?php
	if($recipe_or_tech == 1) {
		$addClass = '-recipe';
	} else {
		$addClass = null;
	}
?>
<div class="recipe-plus1<?php echo $addClass?> mb3">
	<div class="recipe-plus1<?php echo $addClass?>__row">
		<h3 class="recipe-plus1<?php echo $addClass?>__ttl"><?php echo $plus1_ttl ?></h3>
		<?php echo $plus1_cnt ?>
	</div>
</div>
