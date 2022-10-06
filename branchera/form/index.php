<?php
//base
include ("../function.php");
$pageTtl = '一覧';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="single";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
?>

<main id="main">
<article>

<div id="container">
<div id="cont">

  <h5 class="m-ttl">お問い合わせ</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-contact/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-contact/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-contact/mail.txt" target="_blank">自動受信メール</a>
  </p>

  <hr>
  <h5 class="m-ttl">登録解除フォーム</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-withdrawal/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-withdrawal/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-withdrawal/mail.txt" target="_blank">自動受信メール</a>
  </p>
  <hr>
  <h5 class="m-ttl">査定額UP！「無料宅配買取」特典</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-kasikosh/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-kasikosh/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-kasikosh/mail.txt" target="_blank">自動受信メール</a>
  </p>

  <hr>
  <h5 class="m-ttl">高齢者住宅1泊2日「無料」体験宿泊特典</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-senior/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-senior/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-senior/mail.txt" target="_blank">自動受信メール</a>
  </p>

  <hr>
  <h5 class="m-ttl">賃貸マンション仲介手数料「最大50％OFF」特典</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-rent/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-rent/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-rent/mail.txt" target="_blank">自動受信メール</a>
  </p>

  <hr>
  <h5 class="m-ttl">ハウスコーティング</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-house-coating/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-house-coating/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-house-coating/mail.txt" target="_blank">自動受信メール</a>
  </p>

	<hr>
	<h5 class="m-ttl">ハウスクリーニング</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-house-cleaning/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-house-cleaning/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-house-cleaning/mail.txt" target="_blank">自動受信メール</a>
  </p>

	<hr>
  <h5 class="m-ttl">たなかみ米</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-tanakami/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-tanakami/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-tanakami/mail.txt" target="_blank">自動受信メール</a>
  </p>

  <hr>
  <h5 class="m-ttl">アート引越センター見積り依頼</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-art-ohikkoshi/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-art-ohikkoshi/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-art-ohikkoshi/mail.txt" target="_blank">自動受信メール</a>
  <hr>
  <h5 class="m-ttl">トレファク引越見積り依頼</h5>
  <p>
    <a href="<?php echo $base_url ?>/form/form-tfhikkoshi/index.php" target="_blank">フォーム</a> ・
    <a href="<?php echo $base_url ?>/form/form-tfhikkoshi/reply.txt" target="_blank">自動返信メール</a> ・
    <a href="<?php echo $base_url ?>/form/form-tfhikkoshi/mail.txt" target="_blank">自動受信メール</a>
  <hr>
</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include($inc_path.'/form/inc/foot.php') ?>
