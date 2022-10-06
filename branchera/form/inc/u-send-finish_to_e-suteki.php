<?php
include ($inc_path."/form/inc/u-formflow.php");
  if (!isset($tName)){
    $tName = $title;
  };
  if(!isset($tantou)){
    $tantou = "<p>担当者または協力会社より、電話またはメールにて、改めて内容確認の連絡をさせていただきます。</p>";
  };
?>
<hr class="mt0">
<h2 class="l-ttl mb3">入力内容の送信が完了いたしました</h2>
<p>このたびは、<b><?php echo $tName ?></b>いただきまして、誠にありがとうございます。ご登録いただいたメールアドレスに<b>「自動返信メール」</b>をお送りいたしましたのでご確認ください。</p>
<?php echo $tantou ?>
<hr>
