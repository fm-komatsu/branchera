<!DOCTYPE html>
<html class="no-js">

<head>
  <?php include ($inc_path."/lib/inc/gtm_head.txt"); ?>

  <!-- canonical -->
  <?php
    $path = $_SERVER['PHP_SELF'];
    $path =  str_replace('index.php' , '' , $path);
  ?>

  <link rel="canonical" href="https://www.haseko.co.jp<?php echo $path ?>">

  <!-- base -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-language" content="ja">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <?php if(isset($nosearch) && $nosearch == 1 ) { ?>
  <!-- nosearch -->
  <meta name="robots" content="noindex,nofollow,noarchive" />
  <?php } ?>

  <!-- title/description -->
  <title><?php echo strip_tags($metaTtl); ?></title>
  <meta name="description" content="<?php echo strip_tags($metaDesc); ?>">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $base_url ?>/lib/css/styles.css">
  <?php
  /**
   * CDN CSS追加
   * 各ページ(inc/head.php呼び出し前)に、$cdnStyles配列へ格納
   * 例: $cdnStyles[] = '<link rel="stylesheet" href="https://cdn/styles.css">';
   */
  if (isset($cdnStyles)) {
    foreach ($cdnStyles as $style){
      echo $style;
      echo PHP_EOL;
    };
  }
  ?>

  <!-- cdn -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015"></script>
  <?php
  /**
   * CDN スクリプト追加
   * 各ページ(inc/head.php呼び出し前)に、$cdnScripts配列へ格納
   * 例: $cdnScripts[] = '<script src="https://cdn/vue.js"></script>';
   */
  if (isset($cdnScripts)) {
    foreach ($cdnScripts as $script){
      echo $script;
      echo PHP_EOL;
    };
  }
  ?>

  <!-- icons -->
  <link rel="apple-touch-icon" href="<?php echo $base_url ?>/lib/img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo $base_url ?>/lib/img/icons/favicon-16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo $base_url ?>/lib/img/icons/favicon-32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo $base_url ?>/lib/img/icons/favicon-48.png" sizes="48x48">

  <?php if(isset($nosearch) && $nosearch == 1 ) { } else { ?>
  <!-- OGP 共通項目 -->
  <?php if (strpos($body_class,'page-recipe') !== false) { $hashTag ='おうちごはん'; } ?>
  <meta property="og:title" content="<?php if (empty($hashTag)) { echo $metaTtl; } else { echo $metaTtl.' '.$hashTag; } ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $page_url; ?>">
  <meta property="og:site_name" content="<?php siteName(); ?>">
  <meta property="og:description" content="<?php echo strip_tags($metaDesc); ?>">
  <meta property="og:image" content="<?php echo $metaThum; ?>">

  <!-- OGP Twitter用 -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $metaTtl ?>">
  <meta name="twitter:url" content="<?php echo $page_url; ?>">
  <meta name="twitter:description" content="<?php echo strip_tags($metaDesc); ?>">
  <?php } ?>

  <!-- Auto Line -->
  <script type="text/javascript" src="https://autoline.link/haseko/c/haseko/main.js"></script>

  <script src="<?php echo $base_url ?>/lib/js/modernizr.js"></script>

  <?php if(isset($thanks_2020) && $thanks_2020 == 1 ) { ?>
  <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '397199681672633');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=397199681672633&ev=PageView&noscript=1"
    /></noscript>
  <!-- End Facebook Pixel Code -->
  <?php } else { } ?>

</head>
<?php
  $month = date('n');
  $season;
    if($month == 12 || $month == 1 || $month == 2) {
    $season = 'winter';
  } else if ($month == 3 || $month == 4 || $month == 5) {
    $season = 'spring';
  } else if ($month == 6 || $month == 7 || $month == 8) {
    $season = 'summer';
  } else if ($month == 9 || $month == 10 || $month == 11) {
    $season = 'autumn';
  }
?>

<body class="<?php echo $body_class." ".$mydir." ".$filename." ".$ssoClass."  now_".$season; ?>">
  <?php include ($inc_path."/lib/inc/gtm_body.txt"); ?>
  <?php include ($inc_path."/lib/inc/ie10.php"); ?>
  <div id="all">
