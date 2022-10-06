<div class="u-btn-layout mt2">
	<div class="u-btn-layout__row center mb2_sp">
		<?php if (!$ssoFlag == 1){ ?>
		<a href="<?php echo $useLinks ?>" target="_blank" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">ログインしてサービスを利用する</a>
		<?php } else { ?>
		<a href="<?php echo $useLinks ?>" target="_blank" class="u-btn_point u-btn-layout__item" style="margin-top: 8px;">
			<?php echo $useName ?>
			<?php echo $useNameAct ?></a>
		<?php }; ?>
		<form id='guestRelo' name="cluboff" target="_blank" action='<?php echo $link2Cluboff ?>' class="u-btn_black u-btn-layout__item">
			<input type='hidden' name='U' value='dummy' />
			<input type='submit' onclick="javascript:cluboff.submit();" href="javascript:void(0);" value="サンプルページを見る" target="_blank">
		</form>
		<script>
			document.getElementById("guestRelo").click();
		</script>
	</div>
</div>
<?php if (!$ssoFlag == 1){ ?>
<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
	 class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
<?php }; ?>