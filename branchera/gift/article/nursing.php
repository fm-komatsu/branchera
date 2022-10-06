<?php
// 申し込み受付中フラグ
$giftSts = 0; // 1 受付中

//base
include ("../../function.php");
$content = get_id_data('3010');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「'.$pageTtl.'」-'.siteName();
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
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<div class="main__upper">
			<p class="u-color__red u-font__small_sp">※国内の新型コロナウィルス感染拡大に伴い、体験入居の申し込みを中止させていただきます。<br>状況が改善いたしましたらご案内を再開させていただきます。</p>
		</div>
		<div class="main__wrapper">
			<section class="main__item">
				<img
				data-src="../../lib/img/gift/nursing/img01.png"
				data-retina="../../lib/img/gift/nursing/img01@2x.png"
				alt="会員さまご本人もしくはご家族さまに限り体験宿泊を無料でご利用いただけます。"
				style="max-width:720px;"
				class="u-img__max">
				<p class="mb7">長谷工の「長谷工シニアウェルデザイン」が運営する高齢者住宅にて体験宿泊が“無料”でご利用いただけます。</p>

				<h5 class="u-ttl__m">長谷工グループの高齢者住宅サービス紹介動画</h5>
				<div class="tube ">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/bjYcrwnrK88" frameborder="0" allowfullscreen></iframe>
				</div>
				<?php if($giftSts == 1) {
					$useName = "無料体験宿泊";
					$useNameAct = "お申し込みを";
					$useLinks = $base_url.'/form/form-senior/';
					include ($inc_path."/lib/inc/page/_gift/__u-use.php");
				} else { ?>
					<label class="u-btn_end center mt2 mb3">ただいまお申し込みできません</label>
				<?php } ?>
				<div class="u-assist mt3">
					<p>無料体験宿泊施設一覧は<a href="http://www.haseko-senior.co.jp/home/" target="_blank" rel="nofollow" class="u-icon">こちら</a></p>
				</div>


				<h4 class="u-ttl__m">ご利用の流れ</h4>
				<img
				data-src="../../lib/img/gift/nursing/flow-img.png"
				data-srcset="../../lib/img/gift/nursing/flow-img-sp@2x.png 600w , ../../lib/img/gift/nursing/flow-img@2x.png"
				alt="ご利用の流れ"
				class="u-img__max mb2">

				<small class="u-small">
					※お元気な方を対象とした自立型居室にて体験宿泊をご利用いただけます。<br>
					※各施設の空き状況等により、体験宿泊がご利用いただけない場合がございます。あらかじめご了承ください。
					<br>※当特典のご利用は、会員さまご本人もしくはそのご家族の方で、高齢者住宅への入居を検討されている60歳以上の方に限らせていただきます。
				</small>
				<?php if($giftSts == 1) {
					$useName = "無料体験宿泊";
					$useNameAct = "お申し込みを";
					$useLinks = $base_url.'/form/form-senior/';
					include ($inc_path."/lib/inc/page/_gift/__u-use.php");
				} else { ?>
					<label class="u-btn_end center mt2 mb3">ただいまお申し込みできません</label>
				<?php } ?>
				<div class="u-assist">
					<p>無料体験宿泊施設一覧は<a href="http://www.haseko-senior.co.jp/home/" target="_blank" rel="nofollow" class="u-icon">こちら</a></p>
				</div>

			</section>

			<section class="main__item">

				<h4 class="u-ttl__m">長谷工シニアウェルデザイン　―長谷工の高齢者住宅―</h4>
				<div class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/gift/nursing/img02.png"
					data-retina="../../lib/img/gift/nursing/img02.png"
					alt="長谷工アイネット"
					style="max-width: 266px;"
					class="u-img__max"
					>
				</div>
				<p>なんでもない一日を、かけがえのない一日に。
					<br>長谷工の高齢者住宅はみなさまのライフステージに合った住まいをお選びいただけます。</p>
					<p><a class="u-icon" href="http://www.haseko-senior.co.jp/" target="_blank" rel="nofollow">長谷工シニアウェルデザインのホームページはこちら</a>
					</p>
					<br clear="right">
					<a href="<?php echo $base_url ?>/magazine/article/senior-service.php"  class="u-btn_point_l u-position__center mt3">長谷工の高齢者住宅サービスについて詳しくはこちら</a>

			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
