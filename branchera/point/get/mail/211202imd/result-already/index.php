<?php
//211202配信分
// flpSSOチェックを有効化
$flp_check_redirect = true;

// 直接アクセス除外
if(!isset($_GET["refresh_token"])){
	header("HTTP/1.0 404 Not Found");
	header("location:../../../../../http404/");
	exit();
}
//base
include ("../../../../../function.php");
$data = click_point_result_already();
$url = $data["url"];
$expiry_cl_mail = $data["expiry_cl_mail"];
?>
<script language='javascript'>
let url = new URL(location.href)
let params = new URLSearchParams(url.search.slice(1))
if(!params.has('url')){
	params.append('url', '<?php echo $url;?>')
}
if(!params.has('expiry_cl_mail')){
	params.append('expiry_cl_mail', '<?php echo $expiry_cl_mail;?>')
}
window.history.replaceState(null, null, '?' + params);
</script>
<?php
//meta
$metaTtl = 'ポイント獲得済みです-長谷工の会員サービス「ブランシエラクラブ」';
$metaDesc = 'ポイント獲得は1回限りです。次回もチャレンジしてね！';

//nosearch
$nosearch = 1;

//bodyClass
$body_class ="mail-point";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header-mail-point.php");
?>

<div class="mailpoint">
  <div class="mailpoint__box">
  <main class="main mailpoint__main">
    <article class="main__row">
      <?php include ($inc_path."/lib/inc/page/_point/__result-already.php"); ?>
    </article>
  </main>
<?php  include ($inc_path."/lib/inc/footer-mail-point.php"); ?>
</div>
</div>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
