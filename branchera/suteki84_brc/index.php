<?php
//base
include ("../function.php");
$content = null;
$pageTtl = "ブランシエラクラブ とは？";
//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '';
//bodyClass
$body_class ="suteki84_brc";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZHC3W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><!--[if lt IE 10]>
<div class="browsehappy"><p class="wrapper">お使いのブラウザはサポートされていません。当サイトをお楽しみにいただくには、<a href="http://browsehappy.com/" target="_blank" rel="nofollow">最新バージョンへのアップデート</a>をお願いいたします。</p></div>
<![endif]-->
<main class="wrapper main">
	<transition name="modal-fade">
		<div class="modal" v-if="modal.isOpen" :class="{'is-active': modal.isActive}">
			<div class="modal__background" @click="modal.isOpen = false"></div>
			<div class="modal__item">
				<div class="modal__close-icon" @click="modal.isOpen = false"></div>
				<div class="modal__item-inner">
					<figure>
					<img src="<?php echo $img_url ?>/lp/suteki84_brc/howto@2x.png" alt="" loading="lazy" class="u-only__pc u-img__max center" style="max-width:844px">
					<img src="<?php echo $img_url ?>/lp/suteki84_brc/howto-sp@2x.png" alt="" loading="lazy" class="u-only__sp u-img__max center" style="max-width:844px">
					</figure>
				</div>
			</div>
		</div>
	</transition>
	<div class="main-v">
		<div class="main-v__row">
			<div class="main-v__bg">
				<div class="main-v__img">
				<h1>
				<img src="<?php echo $img_url?>/lp/suteki84_brc/main-v@2x.png" alt="ブランシエラクラブとは？" loading="lazy" class="center u-img__max u-only__pc" style="max-width:989px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/main-v-sp@2x.png" alt="ブランシエラクラブとは？" loading="lazy" class="center u-img__max u-only__sp">
				</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="section__ttl secttl">
			<div class="secttl__row">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__ttl@2x.png" alt="ブランシエラクラブ4つのおトク！" loading="lazy" class="center u-img__max u-only__pc secttl__top" style="max-width:629px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__ttl-sp@2x.png" alt="ブランシエラクラブ4つのおトク！" loading="lazy" class="center u-img__max u-only__sp" style="margin-top:-5px;">
			</div>
		</div>
		<div class="section__row pb3 pt2_sp">
			<div class="secttl__btm u-only__pc">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__ttl_btn@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc mb3" style="max-width:121px;">
			</div>
			<div class="section__item">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img01@2x.png" alt="住まいレージ" loading="lazy" class="center u-img__max u-only__pc mb5" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img01-sp@2x.png" alt="住まいレージ" loading="lazy" class="center u-img__max u-only__sp mb3_sp">
			</div>
			<div class="section__item">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img02@2x.png" alt="優待サービス" loading="lazy" class="center u-img__max u-only__pc mb5" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img02-sp@2x.png" alt="優待サービス" loading="lazy" class="center u-img__max u-only__sp mb3_sp">
			</div>
			<div class="section__item">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img03@2x.png" alt="イベント・キャンペーン" loading="lazy" class="center u-img__max u-only__pc mb5" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img03-sp@2x.png" alt="イベント・キャンペーン" loading="lazy" class="center u-img__max u-only__sp mb3_sp">
			</div>
			<div class="section__item pb3">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img04@2x.png" alt="ブランシエラクラブ" loading="lazy" class="center u-img__max u-only__pc" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__img04-sp@2x.png" alt="ブランシエラクラブ" loading="lazy" class="center u-img__max u-only__sp">
			</div>
		</div>
		<div class="cta">
			<div class="cta__row">
				<div class="cta__ttl">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__ttl@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc" style="max-width:528px;">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__ttl-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp" >
				</div>
				<a href="<?php echo $myentry_url.$QueryInheritance; ?>" target="_blank" data-ga-click="suteki84__new_1" class="cta__button">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__button@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc" style="max-width:528px;">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__button-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp" >
				</a>
				<p class="u-color__white center u-font__palt">※新規登録の仕方は<span @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="suteki84__modal_1">こちら</span>から<br class="u-only__sp">ご確認ください</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__ttl secttl">
			<div class="secttl__row">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec02__ttl@2x.png" alt="会員さまで限定のさらなるおトクをご紹介！" loading="lazy" class="center u-img__max u-only__pc secttl__center" style="max-width:629px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec02__ttl-sp@2x.png" alt="会員さまで限定のさらなるおトクをご紹介！" loading="lazy" class="center u-img__max u-only__sp" style="margin-top:-5px;">
			</div>
		</div>
		<div class="section__row_blue pb3 pt2_sp">
			<div class="secttl__btm u-only__pc">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec01__ttl_btn@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc mb3" style="max-width:121px;">
			</div>
			<div class="section__item">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec02__img01@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc mb5" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec02__img01-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp mb3_sp">
			</div>
			<div class="section__item">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec02__img02@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc mb5" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec02__img02-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp mb3_sp">
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__row_yellow pb1">
			<div class="section__ttl secttl">
				<div class="secttl__row_none">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/sec03__ttl@2x.png" alt="今なら週替わりプレゼントキャンペーン実施中！" loading="lazy" class="center u-img__max u-only__pc secttl__top" style="max-width:629px;">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/sec03__ttl-sp@2x.png" alt="今なら週替わりプレゼントキャンペーン実施中！" loading="lazy" class="center u-img__max u-only__sp" style="margin-top:-5px;">
				</div>
			</div>
			<div class="section__item mt4">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec03__img01@2x.png" alt="" loading="lazy" class="u-img__max mb5 center u-only__pc" style="max-width:790px;">
				<img src="<?php echo $img_url?>/lp/suteki84_brc/sec03__img01-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp mb3_sp">
			</div>
		</div>
		<div class="cta">
			<div class="cta__row">
				<div class="cta__ttl">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__ttl@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc" style="max-width:528px;">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__ttl-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp" >
				</div>
				<a href="<?php echo $myentry_url.$QueryInheritance; ?>" target="_blank" data-ga-click="suteki84__new_1" class="cta__button">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__button@2x.png" alt="" loading="lazy" class="center u-img__max u-only__pc" style="max-width:528px;">
					<img src="<?php echo $img_url?>/lp/suteki84_brc/cta__button-sp@2x.png" alt="" loading="lazy" class="center u-img__max u-only__sp" >
				</a>
				<p class="u-color__white center u-font__palt">※新規登録の仕方は<span @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="suteki84__modal_1">こちら</span>から<br class="u-only__sp">ご確認ください</p>
			</div>
		</div>
	</section>
	<footer class="suteki84_brc__footer">
		<div class="inner">
			<ul>
				<li><a href="<?php echo $base_url?>/rules/id.php" target="_blank" class="u-icon">長谷工ID規約</a></li>
				<li><a href="http://www.haseko.co.jp/hc/privacy.html" target="_blank" rel="nofollow" class="u-icon">個人情報保護方針</a></li>
				<li><a href="http://www.haseko.co.jp/hc/social.html" target="_blank" rel="nofollow" class="u-icon">ソーシャルメディアガイドライン</a></li>
				<li><a href="http://www.haseko.co.jp/hc/" target="_blank" rel="nofollow" class="u-icon">運営会社</a></li>
			</ul>
			<small>&copy; HASEKO GROUP BRANCHERA CLUB. ALL Rights Reserved.</small>
		</div>
	</footer>
</main>
<?php include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php include ($inc_path."/lib/inc/foot.php"); ?>
