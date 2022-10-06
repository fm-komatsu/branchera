<?php if (!$ssoFlag == 1){ ?>
		<a href="<?php echo $useLinks ?>" target="_blank" style="margin-top : 8px;"><?php echo $useName ?></a>
<?php } else { ?>
		<a href="<?php echo $useLinks ?>" target="_blank" "><?php echo $useName ?><?php echo $useNameAct ?></a>
<?php }; ?>
