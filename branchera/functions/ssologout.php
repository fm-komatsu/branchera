<?php 
  $dummy_returnUrl = strtok($_SERVER['HTTP_REFERER'], '?');
?>

<p><?php echo $dummy_returnUrl ?>からログアウトしようとしました。</p>
<p>flpAPI経由でセッション削除後</p>
<p><?php echo $dummy_returnUrl ?>へ戻ります。</p>

<a href="<?php echo $dummy_returnUrl.'?dummyssoflag=0' ?>">元のページに戻る</a>
