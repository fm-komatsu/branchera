<?php 

  $htmlHeaderLogin = '<a href="'.$login_url.'" class="login">ログイン</a>';
  $htmlHeaderHnav_info = '';
  $htmlHeaderHnav_inq = '<a href="'.$myentry_url.'" class="signup"><span>新規登録<br class="spOnly"><em>(無料)</em></span></a>';

 if ($ssoFlag == 1){
    $htmlHeaderLogin = '<a href="'.$logout_url.'" class="logout">ログ<br class="spOnly">アウト</a>';
    $htmlHeaderHnav_info = '<a href="'.$mytop_url.'" class="HnavInfoIDinfo" target="_blank"><span>'.$IDinfo["last_name"].' '.$IDinfo["first_name"].' さま / 住まいレージ：<b>'.$IDinfo["pnt_value"].'</b>スマイル</span></a>';
    $htmlHeaderHnav_inq = '<a href="'.$mytop_url.'" target="_blank" class="mypage">マイページ</a>';
  }

?>

<div id="header">
<div class="Header">

<div class="Header-row">
  <div class="Header-logo"><a href="<?php echo $base_url ?>/">[<?php echo $title ?>]<?php echo $site_name ?></a></div>

  <nav class="HeaderHnav">
    <div class="HeaderHnav-inner">
      <ul class="HeaderHnav-links">
        <li><a href="<?php echo $base_url ?>/" class="home">ホーム</a></li>
        <li><a href="<?php echo $base_url ?>/about/faq.php" class="faq">よくあるご質問</a></li>
        <li><a href="<?php echo $base_url ?>/sitemap/" class="sitemap">サイトマップ</a></li>
        <li>
          <?php echo $htmlHeaderLogin ?>
        </li>
      </ul>
      <div class="HeaderHnav-info">
       <a href="<?php echo $base_url ?>/about/post.php" class="HnavInfoDemand"><span>ご意見・ご要望はこちら</span></a>
        <?php echo $htmlHeaderHnav_info ?>
      </div>
    </div>
    <div class="HeaderHnav-inq">
      <?php echo $htmlHeaderHnav_inq ?>
    </div>
  </nav>

</div>

<div class="HeaderHnav-info tbOnly">
  <?php if($ssoFlag == 0){ ?>
    <a href="<?php echo $base_url ?>/about/post.php" class="HnavInfoDemand"><span>ご意見・ご要望はこちら</span></a>
  <?php }; ?>
  <?php echo $htmlHeaderHnav_info ?>
</div>

<div class="HeaderMenu tbOnly"><a href="<?php echo $no_link ?>" class="disable"><span>menu</span></a></div>

<nav class="HeaderGnav">
  <ul class="HeaderGnav-row">
    <li class="HeaderGnav-item"><a href="<?php echo $base_url ?>/magazine/" class="magazine"><span>ブランシエラマガジン</span></a></li>
    <li class="HeaderGnav-item"><a href="<?php echo $base_url ?>/gift/" class="gift"><span>会員さま特典</span></a></li>
    <li class="HeaderGnav-item"><a href="<?php echo $base_url ?>/smile/" class="smile"><span>住まいレージをつかう</span><span class="newMark sp">NEW</span></a><span class="newMark tb">NEW</span></li>
    <li class="HeaderGnav-item"><a href="<?php echo $base_url ?>/event/" class="event"><span>アンケート・イベント</span></a></li>
    <li class="HeaderGnav-item"><a href="<?php echo $base_url ?>/mansion/" class="mansion"><span>販売中の物件情報</span></a></li>
    <li class="HeaderGnav-item"><a href="<?php echo $base_url ?>/about/" class="about"><span>ブランシエラクラブとは?</span></a></li>
  </ul>
</nav>

</div>
</div>
