<?php $pageCat = $content[ 'category_list' ]; ?>
<aside class="back-num">
	<h3 class="u-ttl__m">他の記事を読む</h3>
	<div class="back-num__row back-num-tab">
		<div class="back-num-tab_wrap">
			<input id="back-num-tab1" type="radio" name="back-num-tab_btn" checked>
			<input id="back-num-tab2" type="radio" name="back-num-tab_btn">
			<div class="back-num-tab_area">
				<label class="back-num-tab1_label <?php echo $pageCat ?>-tab1_label" for="back-num-tab1">
					<h3 class="back-num-tab_area__ex">
						<?php if ($pageCat !== "recipe") { ?>
						<img src="<?php echo $img_url ?>/magazine/comic02/common/recipe-technic_logo@2x.png" alt="今さら聞けない料理のアレコレ　ロゴ"
						 class="u-img__max" style="max-width:184px">
						<?php } else { ?>
						<img src="<?php echo $img_url ?>/magazine/comic02/common/recipe_logo@2x.png" alt="うちのご飯は世界イチ　ロゴ" class="u-img__max"
						 style="max-width:184px">
						<?php } ?>
					</h3>
				</label>
				<label class="back-num-tab2_label <?php echo $pageCat ?>-tab2_label" for="back-num-tab2">
					<h3 class="back-num-tab_area__ex">
						<?php if ($pageCat == "recipe") { ?>
						<img src="<?php echo $img_url ?>/magazine/comic02/common/recipe-technic_logo@2x.png" alt="今さら聞けない料理のアレコレ　ロゴ"
						 class="u-img__max" style="max-width:184px">
						<?php } else { ?>
						<img src="<?php echo $img_url ?>/magazine/comic02/common/recipe_logo@2x.png" alt="うちのご飯は世界イチ　ロゴ" class="u-img__max"
						 style="max-width:184px">
						<?php } ?>
					</h3>
				</label>
			</div>
			<div class="panel_area">
				<div id="panel1" class="back-num-tab_panel back-num-tab_panel-<?php echo $pageCat ?>">
					<div class="u-ttllist">
						<ul class="u-ttllist__row back-num__row u-list__ul_buck-num">
							<?php
								if ($pageCat == "recipe") {
									echo show_category_titleData("recipe");
								} else {
									echo show_category_titleData("recipe-technic");
								}
							?>
						</ul>
					</div>
				</div>
				<div id="panel2" class="back-num-tab_panel back-num-tab_panel-<?php echo $pageCat ?>">
				<div class="u-ttllist">
						<ul class="u-ttllist__row back-num__row u-list__ul_buck-num">
							<?php
								if ($pageCat !== "recipe") {
									echo show_category_titleData("recipe");
								} else {
									echo show_category_titleData("recipe-technic");
								}
							?>
						</ul>
					</div>
					<!-- <div class="u-photolist__row">
						<?php
							// if ($pageCat !== "recipe") {
							// 	echo show_category_titleData("recipe");
							// } else {
							// 	echo show_category_titleData("recipe-technic");
							// }
							// if ($pageCat == "recipe") {
							// 	echo show_category_photoList("recipe-technic");
							// } else {
							// 	echo show_category_photoList("recipe");
							// }
							?>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</aside>