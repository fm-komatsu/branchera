<?php
//base
include("../function.php");
$content = get_id_data('90004');
$pageTtl = $content['title'];

//meta
$metaTtl = '住まいレージ「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];
//bodyClass
$body_class = "page-list";

$smileType = "use-smileage";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/", "住まいレージ");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<?php
		include($inc_path . "/lib/inc/page/_smile/__main-header.php");
		?>

		<section id="smile-lottery" class="main__item smile-lottery">
			<h2 class="u-ttl__l">スマイルで抽選に応募する</h2>
			<div class="u-photolist__row">
				<?php
				echo show_category_photoList("lottery");
				?>
			</div>
		</section>

		<section class="main__item">
			<h2 class="u-ttl__l" id="use">スマイルをサービスでつかう</h2>
			<div class="u-photolist__row">
				<?php
				echo show_category_photoList("exchange-hcg");
				?>
			</div>
		</section>

		<section class="main__item smile-exchange mb10">
			<h2 class="u-ttl__l" id="exchange">スマイルを商品に交換する</h2>
			<div class="smile-exchange__row new-year-dishes mb3">
				<h3 class="smile-exchange__ttl new-year-dishes mb2" id="osechi"><span class="smile-exchange__ex">《期間限定 お申込みは<br class="u-only__sp">2022年12月6日（火）まで！》<br>3種のおせち</span></h3>
				<div class="u-photolist__row">
					<?php /*  echo show_id_smile_photo("10064"); 【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍） */ ?>
					<article class="u-photolist__item smile-exchange new">
						<label class="u-photolist__wrap smile-exchange new">
							<a href="<?php echo $base_url ?>/smile/article/exchange-new-year-dishes_2023.php#shingen" class="u-photolist__inner new">
								<div class="u-photolist__exchange">
									<div class="u-photolist__pcwrap u-clearfix">
										<div class="u-photolist__img smile-exchange new"><img alt="【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）" class="new js-show" src="<?php echo $img_url ?>/thum/exchange-new-year-dishes_2023_shingen.jpg"></div>
										<div class="u-photolist__txtbox">
											<h4 class="u-photolist__ttl new">【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）</h4>
										</div>
									</div>
									<div class="u-photolist__pointwrap">
										<p class="u-photolist__point new">16,500<span class="u-font__small">スマイル</span></p>
									</div>
								</div>
								<div class="u-photolist__icon new"><span>new</span></div>
							</a>
						</label>
					</article>
					<?php /* echo show_id_smile_photo("10065"); 【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍） */ ?>
					<article class="u-photolist__item smile-exchange new">
						<label class="u-photolist__wrap smile-exchange new">
							<a href="<?php echo $base_url ?>/smile/article/exchange-new-year-dishes_2023.php#tatsumi" class="u-photolist__inner new">
								<div class="u-photolist__exchange">
									<div class="u-photolist__pcwrap u-clearfix">
										<div class="u-photolist__img smile-exchange new"><img alt="日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）" class="new js-show" src="<?php echo $img_url ?>/thum/exchange-new-year-dishes_2023_tatsumi.jpg"></div>
										<div class="u-photolist__txtbox">
											<h4 class="u-photolist__ttl new">【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）</h4>
										</div>
									</div>
									<div class="u-photolist__pointwrap">
										<p class="u-photolist__point new">20,000<span class="u-font__small">スマイル</span></p>
									</div>
								</div>
								<div class="u-photolist__icon new"><span>new</span></div>
							</a>
						</label>
					</article>
					<?php echo show_id_smile_photo("10066"); /* 【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍） */ ?>
				</div>
			</div>
			<div class="smile-exchange__row gourmet mb3">
				<h3 class="smile-exchange__ttl gourmet mb2"><span class="smile-exchange__ex">グルメ</span></h3>
				<div class="u-photolist__row">
					<?php echo show_id_smile_photo("10061"); /* 【たなかみのもち⻨×林久右衛⾨のスープ】もち⻨スープセット */ ?>
					<?php echo show_id_smile_photo("10048"); /* オリジナルコーヒードリップバックセット */ ?>
					<?php echo show_id_smile_photo("10017"); /* たなかみのお米1.8kg */ ?>
					<?php echo show_id_smile_photo("10047"); /* オリジナルブレンドコーヒー（豆） */ ?>
					<?php echo show_id_smile_photo("10022"); /* 【ANA FINDELISH】オリジナルカレー3種×たなかみ米上白精米セット */ ?>
					<?php echo show_id_smile_photo("10021"); /* 【ANA FINDELISH】阿波尾鶏とマッシュルームのカレー×たなかみ米上白精米セット */ ?>
					<?php /* */ echo show_id_smile_photo("10019"); ?>
				</div>
			</div>
			<div class="smile-exchange__row dp mb3">
				<h3 class="smile-exchange__ttl dp mb2"><span class="smile-exchange__ex">防災</span></h3>
				<div class="u-photolist__row mb2">
					<?php echo show_id_smile_photo("10031"); /* コンパクトイレセット（3日分） */ ?>
					<?php echo show_id_smile_photo("10030"); /* 尾西のご飯シリーズ（アルファ米　12食） */ ?>
					<?php echo show_id_smile_photo("10032"); /* 防災用ヘルメット　IZANO2 */ ?>
					<?php echo show_id_smile_photo("10049"); /* 1DAY災害対策25点セット */ ?>
					<?php echo show_id_smile_photo("10060"); /* リムーブLEDランタンDX */ ?>
					<?php echo show_id_smile_photo("10033"); /* 【車載用防災セット】トランカー 計20点入 */ ?>
				</div>
			</div>
			<div class="smile-exchange__row care mb3">
				<h3 class="smile-exchange__ttl care mb2"><span class="smile-exchange__ex">からだケア</span></h3>
				<div class="u-photolist__row">
					<?php echo show_id_smile_photo("10045"); /* 【タニタ】電子体温計 （ブルー） */ ?>
					<?php echo show_id_smile_photo("10025"); /* 【タニタ】体組成計インナースキャン（ホワイト） */ ?>
					<?php echo show_id_smile_photo("10024"); /* 【フェスティノ】フェイシャルハンディミスト（ピンク） */ ?>
					<?php echo show_id_smile_photo("10062"); /* 【エアウィーヴ】エアウィーヴ ピロー S-LINE */ ?>
				</div>
			</div>
			<div class="smile-exchange__row clean mb3">
				<h3 class="smile-exchange__ttl clean mb2"><span class="smile-exchange__ex u-font__palt">クリーニング<span class="u-font-size__14">（きれいな暮らし）</span></span></h3>
				<div class="u-photolist__row mb2">
					<?php echo show_id_smile_photo("10023"); /* 強力電解水クリーナー */ ?>
					<?php echo show_id_smile_photo("10034"); /* 万能ふき取りクロス */ ?>
					<?php echo show_id_smile_photo("10036"); /* 強力電解水クリーナー＋万能ふき取りクロス */ ?>
					<?php echo show_id_smile_photo("10035"); /* 強力電解水クリーナー＋万能ふき取りクロス＋除菌消臭ゲル */ ?>

					<?php /* */ echo show_id_smile_photo("10050"); ?>
					<?php /* */ echo show_id_smile_photo("10020"); ?>
					<?php /* */ echo show_id_smile_photo("10052"); ?>
				</div>
			</div>
			<div class="smile-exchange__row kitchen mb3">
				<h3 class="smile-exchange__ttl kitchen mb2"><span class="smile-exchange__ex">キッチン</span></h3>
				<div class="u-photolist__row">
					<?php /* echo show_id_smile_photo("10026"); 【ツインバード】オーブントースター（レッド） */ ?>
					<?php echo show_id_smile_photo("10043"); /* 【メリタ】コーヒーメーカー（ツイスト） */ ?>
					<?php echo show_id_smile_photo("10055"); /* 【PRINCESS】Table Grill Mini Pure ホワイト */ ?>
				</div>
			</div>
			<!--<div class="smile-exchange__row living mb3">
				<h3 class="smile-exchange__ttl living mb2"><span class="smile-exchange__ex">リビング</span></h3>
				<div class="u-photolist__row">
					<?php // echo show_id_smile_photo("10051"); /* 【BALMUDA】<br>BALMUDA The Speaker */
					?>
				</div>
			</div>-->
			<div class="smile-exchange__row ecology">
				<h3 class="smile-exchange__ttl ecology mb2"><span class="smile-exchange__ex">エコロジー</span></h3>
				<div class="u-photolist__row">
					<?php echo show_id_smile_photo("10054"); /* 【mizuiro】おやさいクレヨン Standard */ ?>
				</div>
			</div>
		</section>
		<nav class="main__snav snav">
			<?php include($inc_path . "/lib/inc/page/_smile/__snav.php"); ?>
		</nav>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
