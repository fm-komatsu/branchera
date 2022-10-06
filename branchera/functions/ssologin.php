<?php 
  $dummy_returnUrl = strtok($_SERVER['HTTP_REFERER'], '?');
?>

<p>マイページのログイン画面に移動します。
<a href="https://stg-haseko-blue.dev.fanlife-platform.com/memDisplay" target="_blank">https://stg-haseko-blue.dev.fanlife-platform.com/memDisplay</a>
</p>

<p>マイページ画面でログイン完了後、<?php echo $dummy_returnUrl ?>へ戻ります。</p>

<a href="<?php echo $dummy_returnUrl.'?dummyssoflag=1' ?>">元のページに戻る</a>
