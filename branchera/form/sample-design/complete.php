<?php
include ("../../function.php");
$title ="賃貸マンション仲介手数料「最大50％OFF」特典のお申し込み";
$meta_title = '【送信完了】'.$title.' | '.$siteName;
$meta_description = $description;
$body_class ="sendForm form single";
?>

<?php include ($inc_path."/form/inc/head.php") ?>
<?php include ($inc_path."/form/inc/header.php") ?>

<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <p class="MainHead-sub">送信完了</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php
  $tName = "お申し込み内容";
  //$tantou = "";
  include ($inc_path."/inc/u-send-finish.php"); 
?>

<?php include ($inc_path."/form/inc/u-send-info-mail.php") ?>
<?php include ($inc_path."/form/inc/u-send-info-respons.php") ?>
<?php include ($inc_path."/form/inc/u-send-info-etc.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-send-close.php") ?>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/form/inc/foot.php") ?>
