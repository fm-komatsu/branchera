<?php
//base
include ("../../function.php");
$content = get_id_data('3017');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<section class="main__item mb0">
				<h3 class="u-ttl__l first-of-type">ブランシエラクラブ会員さま限定<br>
カンフェティ倶楽部「特別鑑賞チケット」のご案内</h3>
				<figure class="mb3">
					<img
					data-src="../../lib/img/gift/confetti/main-v.jpg"
					data-retina="../../lib/img/gift/confetti/main-v@2x.jpg"
					alt="おトクな「特別鑑賞チケット」ご利用特典"
					class="u-img__max">
				</figure>
				<div class="mb3">
					<p>ブランシエラクラブとカンフェティ倶楽部がコラボ！<br>おトクな公演チケット情報を、ブランシエラクラブ会員さま限定で先行してお届けいたします！</p>
				</div>
				<div class="u-assist_confetti flex between">
					<figure class="w30 center">
						<img
						data-src="../../lib/img/gift/confetti/confetti_logo.png"
						data-retina="../../lib/img/gift/confetti/confetti_logo@2x.png"
						alt="カンフェティ倶楽部ロゴ"
						style="max-width:190px;"
						class="u-img__max mb2">
					</figure>
					<p class="w70 mb2">Confetti（カンフェティ）は、安心な興行主取扱いチケットを便利に販売するサイトです。</p>
					<figure class="center u-only__pc">
						<img
						data-src="../../lib/img/gift/confetti/icons.png"
						data-retina="../../lib/img/gift/confetti/icons@2x.png"
						alt="カンフェティ倶楽部取り扱いチケット"
						style="max-width:693px;"
						class="u-img__max mb2">
					</figure>
					<figure class="center u-only__sp">
						<img
						data-src="../../lib/img/gift/confetti/icons-sp.png"
						data-retina="../../lib/img/gift/confetti/icons-sp@2x.png"
						alt="カンフェティ倶楽部取り扱いチケット"
						style="max-width:339px;"
						class="u-img__max mb2">
					</figure>

				</div>
				<h4 class="u-ttl__m">ご利用の流れ</h4>
				<p class="mb3">チケットの予約・購入の際は初回のみカンフェティ倶楽部への会員登録（無料）が必要です。<br>ご登録の際、会員IDの頭の部分に必ず「<strong>BRC</strong>」を入れてご登録ください。</p>

				<figure class="u-only__pc center">
					<img
					data-src="../../lib/img/gift/confetti/registration_info.png"
					data-retina="../../lib/img/gift/confetti/registration_info@2x.png"
					alt="ご利用の流れ"
					style="max-width:714px;"
					class="u-img__max mb2">
				</figure>

				<figure class="u-only__sp center">
					<img
					data-src="../../lib/img/gift/confetti/registration_info-sp.png"
					data-retina="../../lib/img/gift/confetti/registration_info-sp@2x.png"
					alt="ご利用の流れ"
					style="max-width:442px;"
					class="u-img__max mb2">
				</figure>

				<?php
				$useName = "特別鑑賞チケットの";
				$useNameAct = "ご案内画面は";
				$useLinks = 'https://club.confetti-web.com/index.php?d=BRC&';
				include ($inc_path."/lib/inc/page/_gift/__u-confetti.php");
				?>


				<h4 class="u-ttl__m">ご注意事項</h4>
				<p>・お電話にてお申し込みをご希望の場合は、ご案内ページに記載されている専用番号へお問い合わせください。</p>

		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
