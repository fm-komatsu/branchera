<?php
//base
include ("../function.php");
$pageTtl = '長谷工IDとは';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="";

//htmlHeader
include ("./inc/head.php");
include ("./inc/header.php");
?>
<main class="main">
	<article class="main__row">

		<section class="mainArea" id="sec-main">
			<div class="mainArea-bg">
				<h1 class="l-ttl m-fadeIn">長谷工ID</h1>

				<p class="m-fadeIn">長谷工IDは、長谷工グループの各種サービスを
					<br>“便利でお得に”ご利用いただくための「長谷工グループ共通のID」です。</p>

					<div class="mainAreaInq">
						<a href="<?php echo $myentry_url ?>" class="mainAreaInq-btn" target="_blank">長谷工ID新規登録（無料）</a>
						<img src="<?php echo $base_url ?>/lib/img/id/main-ServTop.svg">
					</div>
				</div>
				<div class="mainAreaServ">

					<div class="mainAreaServ-row">
						<div class="mainAreaServ-item mypage m-slideUp"><span>マイページ</span></div>
						<div class="mainAreaServ-item smaile m-slideUp"><span>住まい<br>レージ</span></div>
						<div class="mainAreaServ-item event m-slideUp"><span>特典や<br>イベント</span></div>
						<div class="mainAreaServ-item conts m-slideUp"><span>コンテンツ</span></div>
					</div>
				</div>

				<p class="mainAreaEx m-slideUp">長谷工IDは、連携サービス拡大中です。</p>

			</section>

			<section class="bran" id="sec-bran">

				<div class="shoulder">
					<div class="shoulder-icon m-slideIn">
						<p>おすすめ
							<br>サイト！</p>
						</div>
					</div>

					<p class="s-ttl m-slideUp">長谷工グループ</p>
					<h2 class="m-ttl m-slideUp">ブランシエラクラブ</h2>

					<p class=" m-slideUp">生活に役立つ情報や楽しい「コンテンツ・イベント」、
						<br>「お得な限定特典」や各種「セミナー」「お住まいに関する情報」など、
						<br>ちょっとお得で、ちょっとうれしい情報が盛りだくさん。</p>

						<a href="<?php echo $base_url ?>/" target="_blank" class="img">
							<img
							src="../lib/img/id/bran-ipad@2x.png"
							style="max-width:403px;"
							class=" m-slideUp u-img__max">
							<div class="balloon">
								<p>長谷工IDが
									<br>あれば、お得な
									<br>特典や商品GETの
									<br>チャンス！</p>
								</div>
							</a>

						</section>

						<section class="service" id="sec-serv">

							<div class="shoulder">
								<div class="shoulder-icon m-slideIn">
									<p>おすすめ
										<br>サービス</p>
									</div>
								</div>

								<h2 class="m-ttl m-slideUp">その他の長谷工ID連携サービス</h2>
								<div class="service-exBox wrap">

									<h5 class="s-ttl">住まいレージ</h5>
									<p>スマイル（ポイント）がたまる・つかえる長谷工のサービスをご紹介。</p>

									<div class="serviceLink">
										<ul class="serviceLink-row">
											<li class="serviceLink-item"><a href="<?php echo $base_url ?>/smile/article/hit-furniture.php" class="a-arrow" target="_blank"><span>長谷工インテックで家具を購入</span></a></li>
											<li class="serviceLink-item"><a href="<?php echo $base_url ?>/smile/article/hrf-interior.php" class="a-arrow" target="_blank"><span>長谷工リフォームでリフォーム工事</span></a></li>
											<li class="serviceLink-item"><a href="<?php echo $base_url ?>/smile/article/hre-mediation.php" class="a-arrow" target="_blank"><span>長谷工リアルエステートでの不動産売買仲介手数料</span></a></li>
											<li class="serviceLink-item"><a href="<?php echo $base_url ?>/smile/article/hre-renovation.php" class="a-arrow" target="_blank"><span>長谷工リアルエステートでリノベーションマンションを購入</span></a></li>
											<li class="serviceLink-item"><a href="<?php echo $base_url ?>/search/?tag=暮らしのサービス" class="a-arrow" target="_blank"><span>長谷工コミュニティで素敵生活サービス利用</span></a></li>
											<li class="serviceLink-item"><a href="<?php echo $base_url ?>/gift/article/enq.php" class="a-arrow" target="_blank"><span>ブランシエラクラブでアンケートに回答！</span></a></li>
										</ul>
									</div>
								</div>

							</section>


							<section class="flow" id="sec-flow">

								<div class="shoulder">
									<div class="shoulder-icon m-slideIn">
										<p>3ステップ
											<br> 新規登録
										</p>
									</div>
								</div>

								<h2 class="m-ttl m-slideUp">長谷工ID登録の流れ</h2>

								<div class="aboutUnder wrap">

									<div class="flowArea">
										<div class="flowArea-row m-fadeIn">
											<img src="<?php echo $base_url ?>/lib/img/about/about/img-flow01-sp@2x.png" alt="STEP1" class="u-img__max"/>
										</div>
										<div class="flowArea-row m-fadeIn">
											<img src="<?php echo $base_url ?>/lib/img/about/about/img-flow02-sp@2x.png" alt="STEP2" class="u-img__max"/>
										</div>
										<div class="flowArea-row end m-fadeIn">
											<img src="<?php echo $base_url ?>/lib/img/about/about/img-flow03-sp@2x.png" alt="STEP3" class="u-img__max"/>
										</div>
										<div class="flowArea-ex m-fadeIn">
											<img src="<?php echo $base_url ?>/lib/img/about/about/img-flow05.png" alt="ステップ3" class="u-img__max"/>
										</div>
									</div>
								</div>

							</section>



						</article>
					</main>

					<fotter id="footer">

						<div class="footInq">
							<a href="<?php echo $myentry_url ?>" target="_blank" class="footInq-btn"><span>長谷工ID新規登録（無料）</span></a>
						</div>

						<nav class="footNav">
							<ul class="footNav-row">
								<li class="footNav-item"><a href="<?php echo $base_url ?>/rules/id.php" class="a-arrow" target="_blank"><span>長谷工ID規約</span></a></li>
								<li class="footNav-item"><a href="http://www.haseko.co.jp/hc/privacy.html" class="a-arrow" target="_blank" rel="nofollow"><span>個人情報保護方針</span></a></li>
								<li class="footNav-item"><a href="http://www.haseko.co.jp/hc/social.html" class="a-arrow" target="_blank" rel="nofollow"><span>ソーシャルメディアガイドライン</span></a></li>
								<li class="footNav-item"><a href="<?php echo $base_url ?>/form/form-contact/" class="a-arrow" target="_blank"><span>お問い合わせ</span></a></li>
								<li class="footNav-item"><a href="<?php echo $base_url ?>" class="a-arrow" target="_blank"><span>運営</span></a></li>
							</ul>
						</nav>

						<address>
							<div class="copyright">© HASEKO GROUP BRANCHERA CLUB. All Rights Reserved.</div>
						</address>

					</fotter>
				</div>
				<?php  include ($inc_path."/lib/inc/foot.php"); ?>
