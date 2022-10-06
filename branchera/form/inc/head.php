<?php
// XXS対策
function h($s) {
	return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html class="no-js" lang="ja" >
<head>
	<?php include ($inc_path."/lib/inc/gtm_head.txt"); ?>

	<!-- base -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-language" content="ja">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" >

	<!-- title/description -->
	<title><?php echo $metaTtl ?></title>
	<meta name="description" content="<?php echo $metaDesc; ?>">

	<!-- js/css/icon -->
	<link rel="stylesheet" href="<?php echo $base_url ?>/lib/css/styles__form.css">
	<script src="<?php echo $base_url ?>/lib/js/modernizr.js"></script>

	<!-- cdn -->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es2015"></script>
	<?php if ($severName === 'localhost' || $severName === '127.0.0.1') { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js"></script>
	<?php } else { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>
	<?php }; ?>
	<script src="https://unpkg.com/vue-cookies@1.7.0/vue-cookies.js"></script>

</head>

<body class="<?php echo $body_class." ".$mydir." ".$filename." ".$ssoClass; ?>">
	<?php include ($inc_path."/lib/inc/gtm_body.txt"); ?>
	<?php include ($inc_path."/lib/inc/ie10.php"); ?>
	<div id="all">
