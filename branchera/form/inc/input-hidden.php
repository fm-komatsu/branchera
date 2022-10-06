<?php foreach($_POST as $k=>$v){ ?>
<input type="hidden" name="<?php echo h($k);?>" value="<?php echo h($v);?>">
<?php } ?>
