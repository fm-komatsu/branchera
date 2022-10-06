<?php
//base
include( "../../function.php" );
$content = get_id_data( '1009' );
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
			<h3 class="u-ttl__l">ご家族・ご親族とご高齢者をつなぎ、
				安心と暮らしの快適さを提供する見守りサービス。</h3>

				<div class="center mb6">
					<div class="u-only__pc">
						<img
						data-src="<?php echo $img_url ?>/magazine/senior/img01.png"
						data-retina="<?php echo $img_url ?>/magazine/senior/img01@2x.png"
						alt="長谷工あんしん見守りサービス"
						style="max-width:721px;"
						class="u-img__max"
						>
					</div>
					<div class="u-only__sp">
						<img
						data-src="<?php echo $img_url ?>/magazine/senior/img01-sp.png"
						data-retina="<?php echo $img_url ?>/magazine/senior/img01-sp@2x.png"
						alt="長谷工あんしん見守りサービス"
						style=""
						class="u-img__max"
						>
					</div>
				</div>
				<div class="mb4">
					<h4 class="u-ttl__m">ポイント<span class="icon">１</span> そっと見守る「人感センサー」</h4>
					<div class="u-float__right">
						<img
						data-src="<?php echo $img_url ?>/magazine/senior/img02.png"
						data-retina="<?php echo $img_url ?>/magazine/senior/img02@2x.png"
						style="max-width:123px;"
						class="u-img__max u-only__pc"
						>
					</div>
					<p>離れて暮らしているご家族でも、室内に設置した「人感センサー」が、ご高齢者の室内での動きを感知し、ご家族・ご親族はPCやスマートフォン・携帯電話から専用サイトにログインして毎日の様子を確認することができます。カメラではないので、ご高齢者にストレスがありません。また、人感センサーに一定時間動きがない場合は受信センターよりご連絡いたします。</p>
					<div class="u-position__center u-only__sp mb3">
						<img
						data-src="<?php echo $img_url ?>/magazine/senior/img02.png"
						data-retina="<?php echo $img_url ?>/magazine/senior/img02@2x.png"
						alt="人感センサー"
						style="max-width:123px;"
						class="u-img__max "
						>
					</div>
					<p class="center u-only__pc">
						<img
						data-src="<?php echo $img_url ?>/magazine/senior/img03.png"
						data-retina="<?php echo $img_url ?>/magazine/senior/img03@2x.png"
						alt="人感センサー設置イメージ"
						style="max-width: 722px;"
						class="u-img__max"
						></p>
						<p class="center u-only__sp">
							<img
							data-src="<?php echo $img_url ?>/magazine/senior/img03-sp.png"
							data-retina="<?php echo $img_url ?>/magazine/senior/img03-sp@2x.png"
							alt="人感センサー設置イメージ"
							style=""
							class="u-img__max"
							>
						</p>


						<h4 class="u-ttl__m">ポイント<span class="icon">２</span> 簡単操作で3つの機能「ボタン通報機」</h4>
						<div class="u-column__2">

							<p>長谷工あんしん見守りサービスには、「人感センサー」のほかに3つの機能を備えたボタン通知機もご用意。ご高齢者の「安心」をサポートします。</p>
							<div class="u-column__item">
								<h6 class="u-ttl__s mb0">きんきゅう</h6>
								<p>体の不調など、緊急時に押すと受信センサーが安否確認のお電話をご家族・ご親族へメールで通知します。状況に応じて救急車の手配を行ないます。</p>
								<h6 class="u-ttl__s mb0 mt1">あいさつ</h6>
								<p>ご家族・ご親族へ「今日のあいさつ」をお届けします。</p>
								<h6 class="u-ttl__s mb0 mt1">ごようきき</h6>
								<p>長谷工コミュニティがご用件を伺い生活支援サービスの手配を行ないます。</p>
							</div>
							<div class="u-column__item">
								<img
								data-src="<?php echo $img_url ?>/magazine/senior/img04.png"
								data-retina="<?php echo $img_url ?>/magazine/senior/img04@2x.png"
								alt="簡単操作で3つの機能「ボタン通報機」"
								style="max-width:320px; "
								class="u-img__max u-only__pc"
								>
							</div>
						</div>

						<p class="center">
							<img
							data-src="<?php echo $img_url ?>/magazine/senior/img04.png"
							data-retina="<?php echo $img_url ?>/magazine/senior/img04@2x.png"
							alt="簡単操作で3つの機能「ボタン通報機」"
							style=""
							class="u-img__max u-only__sp"
							>
						</p>
						<p class="center u-only__pc">
							<img
							data-src="<?php echo $img_url ?>/magazine/senior/img05.png"
							data-retina="<?php echo $img_url ?>/magazine/senior/img05@2x.png"
							alt="３つの機能を備えたボタン通報器”安心”を支える"
							style="max-width: ;"
							class="u-img__max"
							>
						</p>
						<p class="center u-only__sp">
							<img
							data-src="<?php echo $img_url ?>/magazine/senior/img05-sp.png"
							data-retina="<?php echo $img_url ?>/magazine/senior/img05-sp@2x.png"
							alt="３つの機能を備えたボタン通報器”安心”を支える"
							style=""
							class="u-img__max"
							></p>

							<h4 class="u-ttl__m">ポイント<span class="icon">３</span> さまざまな状況にあわせたプランをご用意</h4>
							<p>「長谷工あんしん見守りサービス」は「お手軽プラン」（人感センサー、安否確認・消防署への通報、メール配信）と「あんしんプラン」（人感センサー、安否確認・消防署への通報、メール配信、ボタン通報器）の2つの基本プランのほか、オプションプランもご用意。さまざまな状況にあわせてお選びいただけます。</p>
							<p class="center u-only__pc">
								<img
								data-src="<?php echo $img_url ?>/magazine/senior/img06.png"
								data-retina="<?php echo $img_url ?>/magazine/senior/img06@2x.png"
								alt="選べる料金プラン"
								style="max-width: 720px;"
								class="u-img__max"
								>
							</p>
							<p class="center u-only__sp">
								<img
								data-src="<?php echo $img_url ?>/magazine/senior/img06-sp.png"
								data-retina="<?php echo $img_url ?>/magazine/senior/img06-sp@2x.png"
								alt="選べる料金プラン"
								style=""
								class="u-img__max"
								>
							</p>

							<!-- <h4 class="u-ttl__m">サービスの詳しい内容はこちら（動画）</h4>
							<p>クリックしていただきますと、長谷工あんしん見守りサービスについての詳しい内容が動画でご覧いただけます。</p>
							<div class="center mb4"><iframe src="https://www.youtube.com/embed/JUKriVkig0E" frameborder="0" allowfullscreen></iframe></div> -->
					<a href="https://www.haseko-hcm.co.jp/mimamori/" target="_blank" data-ga-click="hcg-page__hcm" rel="nofollow" class="u-btn u-icon center">サービスの詳細・お問い合わせはこちら</a>
</section>

							<nav class="u-pager">
								<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="senior2.php" class="u-pager__link"><span class="u-pager__text">日常も緊急時も。新しいサービスのカタチ。</span></a></h6></div>
								<ul class="u-pager__row">
									<li class="u-pager__item active"><a href="senior.php">1</a></li>
									<li class="u-pager__item"><a href="senior2.php">2</a></li>
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
