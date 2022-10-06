<?php if (!$ssoFlag == 1){ ?>
	<div class="u-btn-layout mt2">
		<div class="u-btn-layout__row flex flex_around">
			<a href="<?php echo $login_url; ?>" target="_blank" class="u-btn_point  mt2 center">ログインしてサービスを利用する</a>
		</div>
	</div>
<?php } else { ?>

	<div class="u-btn-layout mt2">
		<div class="u-btn-layout__row flex flex_around">
			<a href="<?php echo $useLinks ?>" target="_blank" class="u-btn_point center mt2"><?php echo $useName ?><?php echo $useNameAct ?>こちら</a>
		</div>
	</div>
<?php }; ?>

<?php if (!$ssoFlag == 1){ ?>
	<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
<?php }; ?>
