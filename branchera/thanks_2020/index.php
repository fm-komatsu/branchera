<?php
//base
include ("../function.php");
$content = get_id_data('80002');
$pageTtl = "おかげさまで！長谷工ID登録20万人突破記念キャンペーン！";
//meta
$metaTtl = $pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '';
//bodyClass
$body_class ="thanks2020";

$thanks_2020 = 1;

// check  querystring
if(isset($_GET['_xuid']) && $_GET['_xuid'] && isset($_GET['_article']) && $_GET['_article']) {
	$QueryInheritance = '?'.'_xuid='.$_GET['_xuid'].'&'.'_article='.$_GET['_article'];
} else { $QueryInheritance = null; }

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
<main class="thanks2020__wrapper wrapper main">
	<transition name="modal-fade">
		<div class="modal" v-if="modal.isOpen" :class="{'is-active': modal.isActive}">
			<div class="modal__background" @click="modal.isOpen = false"></div>
			<div class="modal__item">
				<div class="modal__close-icon" @click="modal.isOpen = false"></div>
				<div class="modal__item-inner">
					<figure>
          <img src="<?php echo $base_url ?>/thanks_2020//img/modal1@2x.png" alt="" loading="lazy" class="u-only__pc u-img__max center" style="max-width:844px">
          <img src="<?php echo $base_url ?>/thanks_2020//img/modal1-sp@2x.png" alt="" loading="lazy" class="u-only__sp u-img__max center" style="max-width:844px">
				</figure>
			</div>
		</div>
	</div>
	</transition>
	<div class="main-v">
		<div class="main-v__row">
			<div class="main-v__bg">
				<div class="main-v__top">
					<figre class="main-v__logo">
						<a href="<?php echo $base_url ?>/" data-ga-click="CP2020__brc">
						<img src="<?php echo $base_url ?>/thanks_2020//img/logo@2x.png" class="u-img__max u-only__pc"  style="max-width:200px;" alt="ブランシエラクラブ　ロゴ" loading="lazy">
						<img src="<?php echo $base_url ?>/thanks_2020//img/logo-sp@2x.png" class="u-img__max u-only__sp" alt="ブランシエラクラブ　ロゴ" loading="lazy">
						</a>
					</figre>
				</div>
				<div class="main-v__ttl mainv-ttl">
					<figure class="mainv-ttl__item">
						<img src="<?php echo $base_url ?>/thanks_2020//img/mv_all@2x.png" class="u-img__max u-only__pc" alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
					<figure class="mainv-ttl__item">
						<img src="<?php echo $base_url ?>/thanks_2020//img/mv_all-sp@2x.png" class="u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
				</div>
			</div>
		</div>
	</div>
	<div class="cont-wrapper">
	<section class="section01">
		<div class="section01__row pb2_sp">
			<div class="section01__ttl center mb3 pt4_sp">
				<figure>
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__ttl@2x.png" class="center u-img__max u-only__pc" style="max-width:1082px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__ttl-sp@2x.png" class="center u-img__max u-only__sp" style="max-width:1082px;" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
			</div>
			<div class="section01__ex sec01ex">
				<div class="sec01ex__row">
					<div class="sec01ex__item_01 mb4_sp">
						<label target="_blank" class="section01__link u-only__pc">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__vixen@2x.png" class="center u-img__max u-only__pc" style="max-width:314px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<figure class="center">
								<img src="<?php echo $base_url ?>/thanks_2020//img/oubtn@2x.png" class="center u-img__max" style="max-width:314px;" alt="この賞に応募する！" loading="lazy">
							</figure>
						</label>
						<label target="_blank" class="section01__link u-only__sp mt3_sp">
							<figure class="center">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__switch-sp@2x.png" class="center u-img__max u-only__sp mb2_sp" style="max-width:314px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/oubtn@2x.png" class="center u-img__max" style="max-width:314px;" alt="この賞に応募する！" loading="lazy">
							</figure>
						</label>
					</div>
					<div class="sec01ex__item_02 mb2_sp">
						<label target="_blank" class="section01__link section01__link_center u-only__pc">
							<figure class="center">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__switch@2x.png" class="center u-img__max u-only__pc" style="max-width:405px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/oubtn@2x.png" class="center u-img__max" style="max-width:314px;" alt="この賞に応募する！" loading="lazy">
							</figure>
						</label>
						<label target="_blank" class="section01__link u-only__sp mt3_sp">
							<figure class="center">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__vixen-sp@2x.png" class="center u-img__max u-only__sp mb2_sp" style="max-width:314px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/oubtn@2x.png" class="center u-img__max" style="max-width:314px;" alt="この賞に応募する！" loading="lazy">
							</figure>
						</label>
					</div>
					<div class="sec01ex__item_03 mb2_sp">
						<a class="section01__link mt3_sp" target="_blank">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__catalog@2x.png" class="center u-img__max u-only__pc" style="max-width:314px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec01__catalog-sp@2x.png" class="center u-img__max u-only__sp mb3_sp" style="max-width:314px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<figure class="center">
								<img src="<?php echo $base_url ?>/thanks_2020//img/oubtn@2x.png" class="center u-img__max" style="max-width:314px;" alt="この賞に応募する！" loading="lazy">
							</figure>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="amazon">
			<div class="amazon__row">
				<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/amazon@2x.png" class="center u-img__max u-only__pc" style="max-width:843px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/plus01-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/amazon-sp@2x.png" class="center u-img__max u-only__sp" style="max-width:843px;" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
			</div>
			<div class="amazon-btn">
				<div class="amazon-btn__row pt5_sp">
					<div class="amazon-btn__item mb4 center_sp">
						<div>
							<figure class="center mb1">
								<img src="<?php echo $base_url ?>/thanks_2020//img/id_ok@2x.png" class="center u-img__max" style="max-width:384px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<label>
								<figure class="center">
									<img src="<?php echo $base_url ?>/thanks_2020//img/amazon_oubo@2x.png" class="center u-img__max" style="max-width:420px;" alt="<?php echo $pageTtl?>" loading="lazy">
								</figure>
							</label>
						</div>
					</div>
					<div class="amazon-btn__item mb4 center_sp">
						<div>
							<figure class="center mb1">
								<img src="<?php echo $base_url ?>/thanks_2020//img/id_ng@2x.png" class="center u-img__max" style="max-width:384px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<a href="<?php echo $myentry_url.$QueryInheritance; ?>" target="_blank" data-ga-click="CP2020__new_1">
								<figure class="center">
									<img src="<?php echo $base_url ?>/thanks_2020//img/id_new@2x.png" class="center u-img__max" style="max-width:420px;" alt="<?php echo $pageTtl?>" loading="lazy">
								</figure>
							</a>
							<p class="u-color__white center u-font__palt">※新規登録の仕方は<span @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="CP2020__modal_1">こちら</span>から<br class="u-only__sp">ご確認ください</p>
						</div>
					</div>
				</div>
				<div>
					<figure class="center">
						<img src="<?php echo $base_url ?>/thanks_2020//img/amazon__btm02-sp@2x.png" class="center u-img__max u-only__sp"alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
				</div>
			</div>
		</div>
		<div class="attention">
			<div class="attention__row">
				<h3>応募時のご注意</h3>
				<ul class="u-list__ul_dot">
					<li>本キャンペーンのご応募はお一人さま1回とし、お一人で複数回応募された場合は、ご応募を無効とさせていただきます。</li>
					<li>抽選時に退会していないこと、及び、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。</li>
					<li>本キャンペーンの当選権利を譲渡することはできません。</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="section02" id="entry">
		<div class="section02__row">
			<div class="section02__ttl pt2_sp">
				<h3>
					<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__ttl@2x.png" class="center u-img__max u-only__pc" style="max-width:1080px;" alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__ttl-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
				</h3>
			</div>
			<div class="section02__ex sec02ex">
				<div class="sec02ex__row">
					<label class="sec02ex__item mb2 mb0_sp">
						<div class="sec02ex__left">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__switch_01@2x.png" class="center u-img__max u-only__pc" style="max-width:476px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__switch-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
						</div>
						<div class="sec02ex__right">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__switch_02@2x.png" class="center u-img__max u-only__pc" style="max-width:604px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<div class="sec02ex__btn">
								<div class="sec02ex__top">
										<figure class="sec02ex__button">
											<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__item_btn@2x.png" class="center u-img__max u-only__pc" style="max-width:604px;" alt="<?php echo $pageTtl?>" loading="lazy">
											<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__btn02-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
										</figure>
									<figure class="sec02ex__button">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__btm-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
									</figure>
								</div>
							</div>
						</div>
					</label>
					<label class="sec02ex__item mb3">
						<div class="sec02ex__left">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__vixen_01@2x.png" class="center u-img__max u-only__pc" style="max-width:476px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__vixen-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
						</div>
						<div class="sec02ex__right">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__vixen_02@2x.png" class="center u-img__max u-only__pc" style="max-width:604px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<div class="sec02ex__btn">
								<div class="sec02ex__top">
									<figure class="sec02ex__button">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__item_btn@2x.png" class="center u-img__max u-only__pc" style="max-width:604px;" alt="<?php echo $pageTtl?>" loading="lazy">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__btn02-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
									</figure>
									<figure class="sec02ex__button">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__btm-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
									</figure>
								</div>
							</div>
						</div>
					</label>
					<label class="sec02ex__item pb5 pb0_sp">
						<div class="sec02ex__left">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__catalog_01@2x.png" class="center u-img__max u-only__pc" style="max-width:476px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__catalog-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
						</div>
						<div class="sec02ex__right">
							<figure>
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__catalog_02@2x.png" class="center u-img__max u-only__pc" style="max-width:604px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<div class="sec02ex__btn">
								<div class="sec02ex__top">
									<figure class="sec02ex__button">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__item_btn@2x.png" class="center u-img__max u-only__pc" style="max-width:604px;" alt="<?php echo $pageTtl?>" loading="lazy">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__btn02-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
									</figure>
									<figure class="sec02ex__button">
										<img src="<?php echo $base_url ?>/thanks_2020//img/sec02__btm-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
									</figure>
								</div>
							</div>
						</div>
					</label>
				</div>
			</div>
			<figure class="center plus">
				<img src="<?php echo $base_url ?>/thanks_2020//img/plus02@2x.png" class="center u-img__max u-only__pc" style="max-width:80px;" alt="<?php echo $pageTtl?>" loading="lazy">
			</figure>
		</div>
		<div class="amazon02">
			<div class="amazon02__row">
				<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/amazon@2x.png" class="center u-img__max u-only__pc" style="max-width:843px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/amazon02-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
			</div>
			<div class="amazon-btn">
				<div class="amazon-btn__row pt5_sp">
					<div class="amazon-btn__item mb4 center_sp">
						<div>
							<figure class="center mb1">
								<img src="<?php echo $base_url ?>/thanks_2020//img/id_ok@2x.png" class="center u-img__max" style="max-width:384px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<label>
								<figure class="center">
									<img src="<?php echo $base_url ?>/thanks_2020//img/amazon_oubo@2x.png" class="center u-img__max" style="max-width:420px;" alt="<?php echo $pageTtl?>" loading="lazy">
								</figure>
							</label>
						</div>
					</div>
					<div class="amazon-btn__item center_sp">
						<div>
							<figure class="center mb1">
								<img src="<?php echo $base_url ?>/thanks_2020//img/id_ng@2x.png" class="center u-img__max" style="max-width:384px;" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
							<a href="<?php echo $myentry_url.$QueryInheritance; ?>" target="_blank" data-ga-click="CP2020__new_2">
								<figure class="center">
									<img src="<?php echo $base_url ?>/thanks_2020//img/id_new@2x.png" class="center u-img__max" style="max-width:420px;" alt="<?php echo $pageTtl?>" loading="lazy">
								</figure>
							</a>
							<p class="u-color__white center u-font__palt">※新規登録の仕方は<span @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="CP2020__modal_2">こちら</span>から<br class="u-only__sp">ご確認ください</p>
						</div>
					</div>
				</div>
				<div>
					<figure class="center">
						<img src="<?php echo $base_url ?>/thanks_2020//img/amazon__btm02-sp@2x.png" class="center u-img__max u-only__sp"alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section class="section03 section03__cluboff">
		<div class="section03__row center">
			<h3 class="mt1 mt0_sp mb3 mb0_sp">
				<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec03__ttl@2x.png" class="center u-img__max u-only__pc" style="max-width:945px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/cluboff__01-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
			</h3>
			<a href="https://haseko.flpjp.com/termsAgreement/relocb" target="_blank" class="section03__link" data-ga-click="CP2020__cluboff">
				<div class="mb3 mb0_sp">
					<figure class="center">
						<img src="<?php echo $base_url ?>/thanks_2020//img/sec03__item@2x.png" class="center u-img__max u-only__pc" style="max-width:1080px;" alt="<?php echo $pageTtl?>" loading="lazy">
						<img src="<?php echo $base_url ?>/thanks_2020//img/cluboff__02-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
				</div>
				<div class="mb0_sp">
					<figure class="center">
						<img src="<?php echo $base_url ?>/thanks_2020//img/sec03__btn@2x.png" class="center u-img__max u-only__pc" style="max-width:630px;" alt="<?php echo $pageTtl?>" loading="lazy">
						<img src="<?php echo $base_url ?>/thanks_2020//img/cluboff__btn02-sp@2x.png" class="center u-img__max u-only__sp mb0_sp" alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
				</div>
			</a>
			<figure class="center bt0_sp">
				<img src="<?php echo $base_url ?>/thanks_2020//img/cluboff__btm-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
			</figure>
			<p class="center u-only__pc">※ログインが必要になります。会員登録がお済みで無い場合は新規登録してご利用ください。</p>
		</div>
	</section>
	<section class="section04 mb3">
		<div class="section04__row pt2_sp">
			<h3 class="mb4 mb1_sp">
				<div>
				<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec04__ttl@2x.png" class="center u-img__max u-only__pc" style="max-width:1080px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/brc__ttl-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
				</div>
			</h3>
			<div class="mb4">
				<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec04__ex@2x.png" class="center u-img__max u-only__pc" style="max-width:1080px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/brc__ex-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
			</div>
			<div>
				<figure class="center">
					<img src="<?php echo $base_url ?>/thanks_2020//img/sec04__item@2x.png" class="center u-img__max u-only__pc" style="max-width:1080px;" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/brc__01-sp@2x.png" class="mb2_sp center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/brc__02-sp@2x.png" class="mb2_sp center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
					<img src="<?php echo $base_url ?>/thanks_2020//img/brc__03-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
				</figure>
			</div>
		</div>
		<img src="<?php echo $base_url ?>/thanks_2020//img/brc__btm-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
		<div class="amazon-btn">
			<div class="amazon-btn__row2 pl0_sp pr0_sp pb0_sp">
				<div class="amazon-btn__item-single">
					<div>
						<figure class="center mb1">
							<img src="<?php echo $base_url ?>/thanks_2020//img/id_ng@2x.png" class="center u-img__max u-only__pc" style="max-width:384px;" alt="<?php echo $pageTtl?>" loading="lazy">
							<img src="<?php echo $base_url ?>/thanks_2020//img/id_ng-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
						</figure>
						<a href="<?php echo $myentry_url.$QueryInheritance; ?>" target="_blank" data-ga-click="CP2020__new_3">
							<figure class="center">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec04__btn@2x.png" class="center u-img__max u-only__pc" style="max-width:786px;" alt="<?php echo $pageTtl?>" loading="lazy">
								<img src="<?php echo $base_url ?>/thanks_2020//img/sec04__btn-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
							</figure>
						</a>
						<p class="u-color__white center">※新規登録の仕方は<span @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="CP2020__modal_3">こちら</span>から<br class="u-only__sp">ご確認ください</p>
					</div>
				</div>
			</div>
			<figure class="center">
						<img src="<?php echo $base_url ?>/thanks_2020//img/sec04__btm-sp@2x.png" class="center u-img__max u-only__sp" alt="<?php echo $pageTtl?>" loading="lazy">
					</figure>
		</div>
	</section>
	<section class="section05">
		<div class="section05__row">
	<h4 class="u-ttl__m">キャンペーン概要</h4>
		<div class="u-list__dl_table_long3 mb8">
			<dl>
				<dt>[キャンペーン内容]</dt>
				<dd><div class="mb2">「長谷工ID 登録者20万人突破記念キャンペーン」<br>応募者の中から抽選でプレゼント！<br><span class="u-font__bold">絆を深めま賞</span>：Nintendo Switch+ソフト2本セット（「あつまれ　どうぶつの森」「東北大学加齢医学研究所 川島隆太教授監修 脳を鍛える大人のNintendo Switchトレーニング」）　3名さま<br><span class="u-font__bold">夜空を見上げま賞</span>：Vixen CELESTRON 天体望遠鏡StarSense Explorer DX130AZ　3名さま<br><span class="u-font__bold">舌鼓を打ちま賞</span>：カタログギフト「やさしいごちそう　10,000円コース」　20名さま</div>
				<div class="mb2">上記にもれた方の中から抽選でプレゼント！<br>Amazon ギフト券　1,000円分　200名さま</div>
				<div>当選発表：2020年12月下旬（ブランシエラクラブからの連絡または賞品の発送をもって、発表に代えさせていただます）</div>
			</dd>
			</dl>
			<dl>
				<dt>[キャンペーン期間]</dt>
				<dd>2020年10月1日(木)～2020年11月30日(月)</dd>
			</dl>
			<dl>
				<dt>[応募対象]</dt>
				<dd>
				期間中、長谷工グループ「ブランシエラクラブ」のキャンペーン専用ページからご応募いただいた会員さま
				</dd>
			</dl>
			<dl>
				<dt>[プレゼント内容]</dt>
				<dd>
					<div><span class="u-font__bold">絆を深めま賞</span>：Nintendo Switch+ソフト2本セット（「あつまれ　どうぶつの森」「東北大学加齢医学研究所 川島隆太教授監修 脳を鍛える大人のNintendo Switchトレーニング」）　3名さま<br><span class="u-font__bold">夜空を見上げま賞</span>：Vixen CELESTRON 天体望遠鏡StarSense Explorer DX130AZ　3名さま<br><span class="u-font__bold">舌鼓を打ちま賞</span>：カタログギフト「やさしいごちそう　10,000円コース」　20名さま</div>
					<div>Amazon ギフト券　1,000円分　200名さま<br>・本キャンペーンは長谷工コーポレーションによる提供です。 本キャンペーンについてのお問い合わせはAmazonではお受けしておりません。長谷工グループ「ブランシエラクラブ」事務局（brancheraclub@haseko.co.jp）までお願いいたします。<br>・Amazon、Amazon.co.jpおよびそれらのロゴはAmazon.com, Inc.またはその関連会社の商標です。</div>
				</dd>
			</dl>
			<dl>
				<dt>[抽選および当選者発表]</dt>
				<dd>・ブランシエラクラブにて厳正なる抽選の上、当選者を決定いたします。<br>・ブランシエラクラブからの連絡または賞品の発送をもって、発表に代えさせていただます。</dd>
			</dl>
			<dl>
				<dt>[本キャンペーンにおける注意事項]</dt>
				<dd>・本キャンペーンのご応募はお一人さま1回とし、お一人で複数回応募された場合は、ご応募を無効とさせていただきます。<br>・抽選時に会員であること、及び、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。<br>・本キャンペーンの当選権利を譲渡することはできません。</dd>
			</dl>
			<dl class="mb4">
				<dt>[応募申込]</dt>
				<dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
			</dl>
			<p>※キャンペーンの応募には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url.$QueryInheritance; ?>" target="_blank" data-ga-click="CP2020__new_4" class="u-icon__nofollow u-color__dark">長谷工ID新規登録（無料）</a>をお願いいたします。</p>

		</div>
		</div>

	</section>
	</div>
	<footer class="thanks2020__footer">
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
