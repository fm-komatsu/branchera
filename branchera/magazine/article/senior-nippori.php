<?php
//base
include( "../../function.php" );
$content = get_id_data( '1012' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　1/2」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main senior-nippori">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3>
					<img
					data-src="../../lib/img/magazine/senior-nippori/img01.png"
					data-retina="../../lib/img/magazine/senior-nippori/img01@2x.png"
					data-srcset="../../lib/img/magazine/senior-nippori/img01-sp@2x.png 666w ,../../lib/img/magazine/senior-nippori/img01@2x.png"
					alt="【長谷工の高齢者サービス】ライフ＆シニアハウス日暮里"
					style="max-width:720px;"
					class="u-img__max"
					>
				</h3>
			</section>
			<section class="main__item">
				<h4 class="u-ttl__m">地域とふれ合い、育む。複合型コミュニティハウス。</h4>

				<div class="u-float__right">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img02.png"
					data-retina="../../lib/img/magazine/senior-nippori/img02@2x.png"
					alt="ライフ＆シニアハウス日暮里"
					style="max-width:307px;"
					class="u-img__max"
					>
				</div>
				<p>「ライフ＆シニアハウス日暮里」は、荒川区の事業者選定から生まれた複合型コミュニティハウスです。当ハウスのほか、保育園、クリニック、多世代型の賃貸住宅が併設。地域コミュニティを実現した理想の住まいです。</p>
				<div class="u-assist" style="overflow:hidden;">
					<strong>ライフ＆シニアハウス日暮里</strong>
					<p>介護付有料老人ホーム（一般型特定施設入居者生活介護）
						<br> 公益社団法人全国有料老人ホーム協会　登録ホーム
						<br>所在地 ： 東京都荒川区東日暮里3-9-21
						<br> 最寄駅 ： JR山手線・京浜東北線・日暮里・舎人ライナー「日暮里」駅
					</p>
				</div>
				<p>併設されている保育園の子どもたちは施設を行き交い、食堂では地域のグループメンバーの共同出資による「ワーカーズ・コレクティブ」が栄養士の 管理のもと、温かみのある家庭料理を提供し、地域との架け橋となっています。</p>
				<div class="u-only__pc u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img03.png"
					data-retina="../../lib/img/magazine/senior-nippori/img03@2x.png"
					style="max-width:639px ;"
					class="u-img__max mb3"
					>
					<img
					data-src="../../lib/img/magazine/senior-nippori/img04.png"
					data-retina="../../lib/img/magazine/senior-nippori/img04@2x.png"
					style="max-width: 506px;"
					class="u-img__max"
					>
				</div>
				<div class="u-position__center u-only__sp">
					<img
					src="../../lib/img/magazine/senior-nippori/img03-sp.png"
					data-retina="../../lib/img/magazine/senior-nippori/img03-sp@2x.png"
					style="max-width:286px;"
					class="u-img__max mb3">
					<img
					src="../../lib/img/magazine/senior-nippori/img04-sp.png"
					data-retina="../../lib/img/magazine/senior-nippori/img04-sp@2x.png"
					style="max-width:506px;"
					class="u-img__max">
				</div>

				<h4 class="u-ttl__m">自立と介護を両面から見守る、生涯にわたる高齢者サービス。</h4>
				<p>お元気な方が暮らす自立型（ライフハウス）と、介護が必要な方のための介護型（シニアハウス）が同じ建物に併設しています。 ライフハウスではスタッフがそっと入居者を見守り、助けが必要な場合は徹底的にサポートします。 シニアハウスでは、24時間介護スタッフが常駐して、入居者各々のケアプランに沿った介護サービスを行ないます。</p>
				<div class="u-position__center u-only__pc">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img05.png"
					data-retina="../../lib/img/magazine/senior-nippori/img05@2x.png"
					alt="image"
					style="max-width:719px;"
					class="u-img__max">
				</div>
				<div class="u-position__center u-only__sp">
					<img
					src="../../lib/img/magazine/senior-nippori/img05-sp.png"
					data-retina="../../lib/img/magazine/senior-nippori/img05-sp@2x.png"
					style="max-width:388px;"
					class="u-img__max">
				</div>

				<h4 class="u-ttl__m">一人ひとりの個性を大切に、きめ細やかな心配りでサポート。</h4>
				<div class="u-float__left">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img06.png"
					data-retina="../../lib/img/magazine/senior-nippori/img06@2x.png"
					alt="image"
					style="max-width: 245px;"
					class="u-img__max">
				</div>
				<p>ライフハウスでは、健やかな暮らしを維持し続けられるよう、運動機能、栄養改善、口腔機能などの観点から、介護予防にも積極的に取り組んでいます。
					<br>急な病気のときには入退院の付き添い、趣味やサークル活動などの生きがいづくりのサポートも行ないます。
				</p>
				<br clear="all">
				<div class="u-float__right">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img06-2.png"
					data-retina="../../lib/img/magazine/senior-nippori/img06-2@2x.png"
					alt="image"
					style="max-width:245px ;"
					class="u-img__max">
				</div>
				<p>シニアハウスでは、一人ひとりの個性や生活習慣、生活リズムに配慮しながら、生活としてのケアを実施。リハビリが必要なご入居者に対して外部の理学療法士による訪問リハビリサービスの提供も実施しています。
					<br>「ライフ＆シニアハウス日暮里」は、心のこもったケアとコミュニケーションを大切にかけがえのない毎日を過ごしていただけるハウスなのです。
				</p>
				<br clear="all">
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img11.png"
					data-retina="../../lib/img/magazine/senior-nippori/img11@2x.png"
					style="max-width:486px ;"
					class="u-img__max"
					>
				</div>
				<h4 class="u-ttl__s"><strong>■ケアプラン例</strong></h4>
				<a class="mfp-btn" href="#inner_content">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img001.png"
					data-retina="../../lib/img/magazine/senior-nippori/img001@2x.png"
					alt="ケアプラン例"
					style="max-width: 720px;"
					class="u-img__max"
					>
				</a>

				<div class="mfp-dialog mfp-hide" id="inner_content">
					<img src="../../lib/img/magazine/senior-nippori/img001-l.jpg">
				</div>

			</section>
			<section class="main__item">

				<h4 class="u-ttl__m">施設のご紹介</h4>
				<div class="u-column__3 shisetsu">
					<div class="u-column__item">
						<h6>
							<strong>大浴場（12階）</strong>
						</h6>
						<img
						data-src="../../lib/img/magazine/senior-nippori/img08.png"
						data-retina="../../lib/img/magazine/senior-nippori/img08@2x.png"
						alt="大浴場"
						style="max-width:240px ;"
						class="u-img__max"
						>
						<p>最上階である12階に位置する大浴場です。<br>男湯からは富士山が、女湯からはスカイツリーが臨める絶好のスポット！</p>
					</div>
					<div class="u-column__item">
						<h6>
							<strong>サークル室（9階）</strong>
						</h6>
						<img
						data-src="../../lib/img/magazine/senior-nippori/img09.png"
						data-retina="../../lib/img/magazine/senior-nippori/img09@2x.png"
						alt="サークル室"
						style="max-width:240px ;"
						class="u-img__max">
						<p>ご入居者の方々が趣味などで集うサークル室。<br>最近の人気サークルは麻雀！<br>頭を使いながらコミュニケーションも取れます。</p>
					</div>
					<div class="u-column__item">
						<h6>
							<strong>談話室（8階）</strong>
						</h6>
						<img
						data-src="../../lib/img/magazine/senior-nippori/img10.png"
						data-retina="../../lib/img/magazine/senior-nippori/img10@2x.png"
						alt="談話室"
						style="max-width:237px;"
						class="u-img__max">
						<p>和洋とりそろえた談話室。開放的な雰囲気でおしゃべりがはずみます。</p>
					</div>

					<div class="u-column__item">
						<h6>
							<strong>食堂兼多目的室（1階）</strong>
						</h6>
						<img
						data-src="../../lib/img/magazine/senior-nippori/img10-2.png"
						data-retina="../../lib/img/magazine/senior-nippori/img10-2@2x.png"
						alt="食堂兼多目的室"
						style="max-width: 237px;"
						class="u-img__max">
						<p>お食事はこちらで。レクリエーションなどを行なう多目的室も兼ねています。</p>
					</div>
					<div class="u-column__item">
						<h6>
							<strong>ゲストルーム（11階）</strong>
						</h6>
						<img
						data-src="../../lib/img/magazine/senior-nippori/img10-3.png"
						data-retina="../../lib/img/magazine/senior-nippori/img10-3@2x.png"
						alt="ゲストルーム"
						style="max-width: 237px;"
						class="u-img__max">
						<p>ご入居者の家族の方が宿泊できるゲストルームもございます。</p>
					</div>
				</div>
				<p class="center mb4" style="padding-bottom: 24px;">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img12.png"
					data-retina="../../lib/img/magazine/senior-nippori/img12@2x.png"
					alt="image"
					style="max-width:602px ;"
					class="u-img__max"
					>
				</p>

				<a class="op" href="<?php echo $base_url ?>/gift/article/nursing.php">
					<img
					data-src="../../lib/img/magazine/senior-nippori/img-gift.png"
					data-retina="../../lib/img/magazine/senior-nippori/img-gift@2x.png"
					data-srcset="../../lib/img/magazine/senior-nippori/img-gift-sp@2x.png 666w,../../lib/img/magazine/senior-nippori/img-gift@2x.png"
					alt="会員さま限定特典"
					style="max-width: 720px;"
					class="u-img__max">
				</a>
			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="senior-nippori2.php" class="u-pager__link"><span class="u-pager__text">スタッフに、いろいろ聞いてみました②</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item"><a href="senior-service.php">1</a></li>
					<li class="u-pager__item"><a href="senior-urawa.php">2</a></li>
					<li class="u-pager__item"><a href="senior-urawa2.php">3</a></li>
					<li class="u-pager__item active"><a href="senior-nippori.php">4</a></li>
					<li class="u-pager__item"><a href="senior-nippori2.php">5</a></li>
					<li class="u-pager_nextwrap"><a href="senior-nippori2.php" class="u-pager_next">　</a></li>
				</ul>
			</nav>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
