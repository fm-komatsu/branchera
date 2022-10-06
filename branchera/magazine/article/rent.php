<?php
//base
include( "../../function.php" );
$content = get_id_data( '1011' );
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

<main class="main">
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
				<div class="center mb6">
					<h3>
						<img
						data-src="../../lib/img/magazine/rent/img01.png"
						data-retina="../../lib/img/magazine/rent/img01@2x.png"
						alt="長谷工の賃貸サービス"
						class="u-img__max">
					</h3>
				</div>

				<h4 class="u-ttl__m">ポイント<span class="icon">１</span>専門分野に特化したサービスでニーズに応える長谷工の賃貸</h4>

				<p>長谷工の賃貸サービスは、賃貸マンションと不動産のプロとしての高い専門性と対応力を生かしたサービスで、快適な住まいづくりを提案します。</p>
				<div class="u-assist">
					<p class="center">
						<img
						data-src="../../lib/img/magazine/rent/img02.png"
						data-retina="../../lib/img/magazine/rent/img02@2x.png"
						alt="「借りたい」と「貸したい」を結びつける長谷工の賃貸サービス"
						style="max-width: 673px;"
						class="u-img__max"
						>
					</p>
				</div>

				<h4 class="u-ttl__m">ポイント<span class="icon">２</span> ライフスタイルにあわせて住まいとサービスを提供する</h4>
				<p>長谷工は、住まいをお探しのみなさまのために、さまざまな物件を賃貸物件検索サイトでご紹介しています。長谷工のマンションを始めとした6万件<sup>※1</sup>を超える豊富な情報と、わかりやすい検索機能で、「住まいのこだわり」にお応えします。</p>
				<p>また、長期出張などに便利なマンスリーマンションや、急な引っ越しにも安心な家具家電レンタルサービスなど、幅広いフィールドでお客さまのニーズにお応えします。</p>
				<div class="u-assist">
					<p class="center">
						<img
						data-src="../../lib/img/magazine/rent/img03.png"
						data-retina="../../lib/img/magazine/rent/img03@2x.png"
						alt="幅広いフィールドでお客さまのニーズにお応えします"
						style="max-width:661px ;"
						class="u-img__max"
						>
					</p>
				</div>


				<h4 class="u-ttl__m">ポイント<span class="icon">３</span> 賃貸マンションの管理から維持、集金まで、トータルにオーナーさまをサポート</h4>
				<div class="u-column__2">
					<div class="u-column__item u-position__center">
						<img
						data-src="../../lib/img/magazine/rent/img04.png"
						data-retina="../../lib/img/magazine/rent/img04@2x.png"
						alt="トータルにオーナーさまをサポート"
						style="max-width:361px;"
						class="u-img__max"
						>
					</div>
					<div class="u-column__item">
						<p>オーナーさまにとって、居住者の安定した確保は重要事項です。「長谷工ライブネット」では、賃貸管理、運営に加えて、建物の維持、管理も一括してサポートします。<br>全国の賃貸マンション管理、62,288戸、稼働率95%、賃料未収率1.0％未満<sup class="u-small">※1</sup>の数字が信頼を物語ります。<br>また、サブリース（一括借上）、オーナーズリース（マンション1室から管理）など、オーナーさまのご要望に沿った多彩なプランをご用意しています。</p>
					</div>
				</div>

				<div id="cam">
					<h4 class="u-ttl__m">ポイント<span class="icon">４</span> 煩わしい保証人探しから解放「保証人代行システム」</h4>
					<div class="u-column__2">
						<div class="u-column__item u-position__center">
							<img
							data-src="../../lib/img/magazine/rent/img05.png"
							data-retina="../../lib/img/magazine/rent/img05@2x.png"
							alt="煩わしい保証人探しから解放「保証人代行システム」"
							style="max-width: 361px;"
							class="u-img__max"
							>
						</div>
						<div class="u-column__item mb0">
							<p>賃貸マンションの契約時、保証人探しに手間取る方も多いのではないでしょうか。いくらご家族やご親戚でも保証人をお願いするには気が引けるものです。</p>
							<p>「レジデンシャルサービス」では、保証人を代行する「保証人代行システム」を行なっています。保証規定に当てはまる物件を対象に、保証委託契約を締結、保証料は月額賃料等1月分の70％で2年間保証します。<br>また、契約更新の際の保証料は50%となります。入居者さまにとっても、オーナーさまにとっても安心のシステムです。</p>
						</div>
					</div>
				</div>


				<div class="u-position__center mb1">
					<a href="<?php echo $base_url ?>/gift/article/inet.php">
						<img
						data-src="../../lib/img/magazine/rent/img-gift.png"
						data-retina="../../lib/img/magazine/rent/img-gift@2x.png"
						alt="賃貸マンション仲介手数料最大50%※OFF"
						style="max-width:514px;"
						class="u-img__max">
					</a>
				</div>

				<ul class="u-small">
					<li>※1.長谷工コーポレーションのマンション施工累計実績は<a href="http://www.haseko.co.jp/hc/what/works/results/" target="_blank" rel="nofollow" class="u-icon">こちら</a></li>
					<li>※2.2015年9月末現在 ※長谷工コーポレーション調べ</li>
					<li>※3.2015年3月現在 ※長谷工リフォーム調べ</li>
				</ul>
			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="rent2.php" class="u-pager__link"><span class="u-pager__text">長谷工ならではの、きめ細かなサポートとは？</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="rent.php">1</a></li>
					<li class="u-pager__item"><a href="rent2.php">2</a></li>
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
