<?php
//base
include ("../../function.php");
$content = get_id_data('1004');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　1/2」-'.siteName();
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
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img center mb4">
				<div class="u-only__pc">
					<img
					data-src="../../lib/img/magazine/kasikosh/img01.png"
					data-retina="../../lib/img/magazine/kasikosh/img01@2x.png"
					alt="長谷工のリサイクルショップ「カシコシュ」"
					style="max-width:720px;"
					class="u-img__max"
					>
				</div>
				<div class="u-only__sp">
					<img
					data-src="../../lib/img/magazine/kasikosh/img01-sp.png"
					data-retina="../../lib/img/magazine/kasikosh/img01-sp@2x.png"
					alt="長谷工のリサイクルショップ「カシコシュ」"
					style=""
					class="u-img__max"
					>
				</div>
			</div>


			<h3 class="u-ttl__l">カシコシュ、それはグッドデザイン賞を受賞した、新しいリユースのカタチです。</h3>
			<p><strong>「増え続けるモノをどうしよう？」 そんなお客さまの声から、カシコシュが生まれました！</strong></p>
			<p class="mb2">カシコシュは、出張買取や長谷工グループのノウハウを最大限に活かした正確な査定（もちろん無料）を実現することで、「都心マンション住民さまの不用品を地域リサイクル店で循環するビジネスモデル」を策定し、2010年に<strong>GOOD DESIGN AWARD を受賞</strong>いたしました。</p>
			<div class="img center u-only__pc">
				<img
				data-src="../../lib/img/magazine/kasikosh/img02.png"
				data-retina="../../lib/img/magazine/kasikosh/img02@2x.png"
				alt="都心マンション住民さまの不用品を地域リサイクル店で循環するビジネスモデル"
				style="max-width: 719px;"
				class="u-img__max"
				>
			</div>
			<div class="img center u-only__sp">
				<img
				data-src="../../lib/img/magazine/kasikosh/img02-sp.png"
				data-retina="../../lib/img/magazine/kasikosh/img02-sp@2x.png"
				alt="都心マンション住民さまの不用品を地域リサイクル店で循環するビジネスモデル"
				style=""
				class="u-img__max"
				>
			</div>

			<h3 class="u-ttl__l">WEBで、店頭で、ご自宅で。お客様のご要望にあわせたさまざまなカタチで、しっかり査定・買取いたします。</h3>
			<p>WEB宅配買取は、24時間いつでもお申込みいただき、届いた無料宅配キットに品物を詰めるだけ。品物が到着次第、<strong>すぐに査定し、査定結果をお知らせ</strong>します。</p>
			<p class="mb2">また、その場で査定し現金をお支払いする店頭買取のほか、お電話でお申込みいただき、ご自宅で査定とお支払いをする出張買取も便利です。<br>
				<span class="u-small">※出張買取についてはお伺いできる場所が限られております。詳細については<a href="http://www.haseko.co.jp/kasikosh/purchase/attend/" target="_blank" rel="nofollow" class="u-icon">こちら</a>をご参照ください。</span></p>
				<div class="img center u-only__pc">
					<img
					data-src="../../lib/img/magazine/kasikosh/img03.png"
					data-retina="../../lib/img/magazine/kasikosh/img03@2x.png"
					alt="さまざまな買取方法"
					style="max-width: 719px;"
					class="u-img__max"
					>
				</div>
				<div class="img center u-only__sp">
					<img
					data-src="../../lib/img/magazine/kasikosh/img03-sp.png"
					data-retina="../../lib/img/magazine/kasikosh/img03-sp@2x.png"
					alt="さまざまな買取方法"
					style=""
					class="u-img__max"
					>
				</div>

				<h3 class="u-ttl__l">長谷工グループのネットワークがあるから、いつでもいいモノを提供できる充実した品揃えがカシコシュの特長です。</h3>
				<p>長谷工グループのネットワークを活かし、マンションに入居される際に不要になったモノや、日々の暮らしの中で不要になったモノはもちろん、マンションモデルルームで使用した家具や取引先メーカーの余剰在庫などまで、<strong>さまざまなジャンルの商品を豊富に仕入れられる</strong>ことがカシコシュの特長です。
				</p>

				<p>マンション施工実績No.1<small class="u-small">※1</small>の「長谷工コーポレーション」をはじめ、累計34万戸超<small class="u-small">※2</small>のマンション販売実績を持つ「長谷工アーベスト」。「長谷工コミュニティ」、「総合ハウジングサービス」など、合計35万戸超の管理実績<small class="u-small">>※3</small>を誇るグループ内の管理会社。約30年にわたり高齢者住宅に携わってきた「センチュリーライフ」「生活科学運営」など、<strong>グループ各社を通じ、質の良い品を豊富に仕入れています</strong>。</p>
				<div class="u-position__center mb-inner">
					<img
					src="../../lib/img/magazine/kasikosh/img04.png"
					alt="長谷工グループのネットワーク"
					style="max-width:580px;"
					class="u-img__max">
				</div>


				<small class="u-small">
					<ul>
						<li>※1.長谷工コーポレーションのマンション施工累計実績は<a href="http://www.haseko.co.jp/hc/what/works/results/" target="_blank" rel="nofollow" class="u-icon">こちら</a></li>
						<li>※2.長谷工アーベストのマンション販売取扱い実績は<a href="http://www.haseko-urbest.com/about/introduction.html" target="_blank" rel="nofollow" class="u-icon">こちら</a></li>
						<li>※3.長谷工コミュニティ・長谷工スマイルコミュニティ・長谷工コミュニティ九州、3社合計のマンション管理実績は<a href="http://www.haseko.co.jp/hc/mansion_association/" target="_blank" rel="nofollow" class="u-icon">こちら</a>。総合ハウジングサービスのマンション管理実績は<a href="http://www.sgs-mansion.co.jp/mansion_kanri/" target="_blank" rel="nofollow" class="u-icon">こちら</a>。</li>
						<li>※掲載の情報は2015年7月現在のものです</li>
					</ul>
				</small>


				<nav class="u-pager">
					<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="kasikosh2.php" class="u-pager__link"><span class="u-pager__text">ここが違う！？豊富な品揃えの理由。</span></a></h6></div>
					<ul class="u-pager__row">
						<li class="u-pager__item active"><a href="kasikosh.php">1</a></li>
						<li class="u-pager__item"><a href="kasikosh2.php">2</a></li>
					</ul>
				</nav>

			</section>
		</article>
	</main>

	<?php
	$toindex_url = "/magazine/index_technology.php";
	include ($inc_path."/lib/inc/toindex__magazin.php");
	?>
	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
