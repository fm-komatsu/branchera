<section class="main__wrapper mb1_sp">
	<div class="mailpoint__row pt3 pt1_sp pb3 pb2_sp">
		<div>
			<div class="mb5 mb3_sp">
				<figure>
					<img src="<?php echo $img_url ?>/point/c0_title@2x.png" alt="アクションポイントゲットのチャンス！" class="u-img__max u-only__pc center" style="max-width:658px" loading="lazy">
					<img src="<?php echo $img_url ?>/point/c0_title-sp@2x.png" alt="アクションポイントゲットのチャンス！" class="u-img__max u-only__sp center" loading="lazy">
				</figure>
			</div>
			<div class="mailpoint__btn">
				<div class="u-btn-layout mailpoint__get mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mybase_url ?>/externalUrlForLogin/<?php echo $flp_cl_mail ?>" target="_blank" class="u-btn_point u-btn-layout__item mailpoint__item">
							<?php  if ($ssoFlag == 0){ ?>
								<span>ログインしてスマイルをゲット！</span>
							<?php } else { ?>
								<span>スマイルをゲット！</span>
							<?php } ?>
						</a>
					</div>
					<div class="mailpoint__ex center">
						<p>有効期限：<?php echo $mail_expiration ?>まで<br>スマイルゲットはお早めに！</p>
					</div>
					<div class="center u-color__brand_dark u-font__bold">
						<p>スマイルの獲得は、<br>お1人さま1回限りとなります。</p>
					</div>
				</div>
			</div>
			<div>
				<div class="center">
					<a href="<?php echo $base_url.$url ?>" class="mailpoint__link"><span>スマイルを獲得せずに<br class="u-only__sp">記事を読む場合はこちら</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
