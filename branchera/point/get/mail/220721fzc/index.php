<?php
//220721配信分
//base
include("../../../../function.php");
$session_data = click_point_landing();
// 3要素をセッションから取得
$flp_cl_mail = $session_data["flp_cl_mail"];
$mail_expiration = $session_data["expiry_cl_mail"];
$url = $session_data["url"];

//meta
$metaTtl = 'アクションポイントゲットのチャンス！-長谷工の会員サービス「ブランシエラクラブ」';
$metaDesc = 'ログインしてスマイルゲット！スマイルの獲得は、お1人さま1回限りとなります。';

//nosearch
$nosearch = 1;

//bodyClass
$body_class = "mail-point";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header-mail-point.php");
?>

<div class="mailpoint">
  <div class="mailpoint__box">
    <main class="main mailpoint__main">
      <article class="main__row">
        <?php include($inc_path . "/lib/inc/page/_point/__landing.php"); ?>
      </article>
    </main>
    <?php include($inc_path . "/lib/inc/footer-mail-point.php"); ?>
  </div>
</div>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
