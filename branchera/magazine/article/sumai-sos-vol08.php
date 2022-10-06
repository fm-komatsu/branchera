<?php
//base
include("../../function.php");
$content = get_id_data('26008');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai05";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month = "5";
$release_day = "";
?>
<main class="main magazine">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_sumai-sos.php", "プロが解決！住まいのSOS");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/head_title@2x.png" alt="プロが解決！住まいのSOS｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:896px;">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/head_title-sp@2x.png" alt="プロが解決！住まいのSOS｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center">
				</div>
			</div>
		</div>
		<div class="main__item sumai05__wrapper">
			<section>
				<div class="sumai05info section_mb">
					<div class="sumai05info__row mb5">
						<h3 class="sumai05info__ttl">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/main-v@2x.jpg" alt="<?php echo $pageTtl ?>｜雨の日は洗濯物を乾かすのに浴室暖房乾燥機が欠かせないわ。でも最近、時間をかけても湿っぽさが取れないんです。" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>｜雨の日は洗濯物を乾かすのに浴室暖房乾燥機が欠かせないわ。でも最近、時間をかけても湿っぽさが取れないんです。" class="u-img__max u-only__sp" loading="lazy">
						</h3>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion01 section01">
				<div class="section01__row mb4">
					<div class="mb6 center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/tell_me@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__pc center" style="max-width:540px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/tell_me-sp@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>

				<div class="sumai05section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada01@2x.jpg" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__pc" loading="lazy">
						<div class="center u-font__bold sumeister_ex u-only__pc">
							<p class="sumeister_ex01">長谷工コミュニティ<br>素敵生活営業部営業課</p>
							<ruby data-ruby="ごず みちこ">塚田 雅博<rt> つかだ まさひろ</rt></ruby>
						</div>
					</div>
					<div class="w65 sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/balloon01@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。
" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/balloon01-sp@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。
" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai05__balloon02_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada01-sp@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__sp" style="max-width:155px;" loading="lazy">
						</div>
						<div class="center u-font__bold sumeister_ex">
							<p class="sumeister_ex01">長谷工コミュニティ<br>素敵生活営業部営業課</p>
							<ruby data-ruby="つかだ   まさひろ">塚田 雅博<rt> つかだ まさひろ</rt></ruby>
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion02">
				<h4 class="setion__ttl01 center mb4 sumai08__point-ttl">そんなとき、注目したいのはこのポイントです。</h4>
				<h5 class="setion__ttl02 mb4">状態をチェックしてみましょう。</h5>
				<div class="solution mb7">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/solution@2x.png" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/solution-sp@2x.png" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">浴室暖房乾燥機の交換を検討</h4>
					<!--アコーディオンメニュー-->
					<div class="option__item03">
						<input id="acd-check01" class="acd-check01" type="checkbox">
						<label class="acd-label01" for="acd-check01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/button__green@2x.png" alt="交換のサインを確認するならこちら！" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/button__green-sp@2x.png" alt="交換のサインを確認するならこちら！" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content01 sumai08__acd-content01">
							<p class="u-font__bold center mb4 acd__ttl u-font__palt sumai08__acd-ttl">交換サインにひとつでも該当したり、<br>標準使用期間の10年を経過している場合は<br>交換を検討しましょう。</p>
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/solution-img@2x.png" alt="浴槽塗装" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/solution-img-sp@2x.png" alt="浴槽塗装" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p class="acd__ttl_m center u-font__palt">交換のサインを見逃さないで！</p>
									<ul class="sumai08__check">
										<li>電源が入らない</li>
										<li>なかなか暖かくならない</li>
										<li>風量が弱くなった</li>
										<li>フィルタ―ランプが点滅する</li>
										<li>使用中異臭がする</li>
									</ul>
									<div class="u-text__align_r"><a href="https://e-suteki.haseko.jp/cleaning/vol88-maintenance.html?utm_source=brc_sos_vol08&utm_medium=web&utm_campaign=vol88_maintenance#check" target="_blank" data-ga-click="sos08_02">その他のサインはこちら</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__pc">
					<a href="https://e-suteki.haseko.jp/cleaning/vol88-maintenance.html?utm_source=brc_sos_vol08&utm_medium=web&utm_campaign=vol88_maintenance#irui" data-ga-click="sos08_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/tips-button@2x.png" alt="浴室暖房乾燥機を上手に使うコツ" class="u-img__max center sumai06_btnitem" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__sp">
					<a href="https://e-suteki.haseko.jp/cleaning/vol88-maintenance.html?utm_source=brc_sos_vol08&utm_medium=web&utm_campaign=vol88_maintenance#irui" data-ga-click="sos08_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/tips-button-sp@2x.png" alt="浴室暖房乾燥機を上手に使うコツ" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>

				<div class="option mb8 mb6_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/option@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/option-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">普段のお手入れも欠かさずに</h4>
					<div class="sumai08__option" style="background-color:#fdeceb;">
						<div class="option__item04 mb3">
							<input id="acd-check2" class="acd-check2" type="checkbox">
							<label class="acd-label2" for="acd-check2">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/button__red01@2x.png" alt="フィルター" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/button__red01-sp@2x.png" style="" alt="フィルター" class="u-img__max u-only__sp center acd_btn" loading="lazy">
							</label>
							<div class="acd-content2">
								<div class="acdcontent__flex sumai08__acdcontent-flex">
									<div class="w50">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/option-img01@2x.png" alt="フィルター" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/option-img01-sp@2x.png" alt="フィルター" class="u-img__max u-only__sp" loading="lazy">
									</div>
									<div class="w50">
										<p class="mt0 mt2_sp">浴室暖房乾燥機はカビや汚れが付きやすいので、2ヵ月に1回はフィルターを外して洗いましょう。乾燥機能を使っている場合は、衣類からのほこりもたまり乾きが悪くなってしまいます。汚れがひどいときは、ぬるま湯かせっけん水に浸して軽く洗い、よく乾かしてください。</p>
										<small class="u-smali">！注意：フィルターを外す前に必ず浴室暖房乾燥機の運転スイッチとブレーカーを切っておきましょう。</small>
										<p class="u-text__align_r"><a href="https://e-suteki.haseko.jp/cleaning/vol88-maintenance.html?utm_source=brc_sos_vol08&utm_medium=web&utm_campaign=vol88_maintenance#point" target="_blank" data-ga-click="sos08_03">フィルター水洗いのPoint</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="option__item05 pb2">
							<input id="acd-check3" class="acd-check3" type="checkbox">
							<label class="acd-label3" for="acd-check3">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/button__red02@2x.png" alt="本体カバー" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/button__red02-sp@2x.png" style="" alt="本体カバー" class="u-img__max u-only__sp center acd_btn" loading="lazy">
							</label>
							<div class="acd-content3">
								<div class="acdcontent__flex sumai08__acdcontent-flex">
									<div class="w50">
										<figure class="u-fig">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/option-img02@2x.png" alt="本体カバー" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/option-img02-sp@2x.png" alt="本体カバー" class="u-img__max u-only__sp" loading="lazy">
											<figcaption class="u-fig__cap_darken-noshadow mr2 mr0_sp">※イメージ写真です。</figcaption>
										</figure>
									</div>
									<div class="w50">
										<p class="mt0 mt2_sp">ぬるま湯に浸してかたく絞った布でやさしく拭いていきます。吹出し口の目が多く、くぼみが入り組んでいる場合は、綿棒があると便利です！</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section>
					<div class="sumai05section01__flex mb6 u-only__pc">
						<div class="w35">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada01@2x.jpg" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="w65 sumai05__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/balloon02@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。
	" class="u-img__max u-only__pc" loading="lazy">
						</div>
					</div>
					<div class="sumai05section01 mb6 u-only__sp">
						<div class="sumai05__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/balloon02-sp@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。
	" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai05__balloon02_sp">
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada01-sp@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__sp" style="max-width:155px;" loading="lazy">
							</div>
						</div>
					</div>
				</section>
				<section class="mb6">
					<div class="point flex between">
						<div class="w50 point__item01 mb3_sp">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/point1@2x.png" alt="【お手入れの際は注意してね】浴室暖房乾燥機をお手入れする際、本体に浴室用洗剤、防カビ剤、塩素系洗剤などは使わないで！また本体にお湯や水をかけるのはやめましょう。
" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/point1-sp@2x.png" alt="【お手入れの際は注意してね】浴室暖房乾燥機をお手入れする際、本体に浴室用洗剤、防カビ剤、塩素系洗剤などは使わないで！また本体にお湯や水をかけるのはやめましょう。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="w50 point__item02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/point2@2x.png" alt="【洗面室も換気すること】洗面室の空気が浴室に流れ込むため、洗面室が湿っぽいと、洗濯物の乾きが遅れます。洗面室のドアもあけておくと良いですよ。
" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/point2-sp@2x.png" alt="【洗面室も換気すること】洗面室の空気が浴室に流れ込むため、洗面室が湿っぽいと、洗濯物の乾きが遅れます。洗面室のドアもあけておくと良いですよ。" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<div div class="mb6">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/tips@2x.png" alt="夏の入浴法は｜夏はシャワーだけという人も多いですが･･･湯船に入って、ゆっくり体を温めると血流がよくなり、体の中の老廃物の排出が促進されて、夏バテ予防になります。暑くてもシャワーだけではなく、湯船に入ったほうが疲労回復に効果があります。
" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_08/tips-sp@2x.png" alt="夏の入浴法は｜夏はシャワーだけという人も多いですが･･･湯船に入って、ゆっくり体を温めると血流がよくなり、体の中の老廃物の排出が促進されて、夏バテ予防になります。暑くてもシャワーだけではなく、湯船に入ったほうが疲労回復に効果があります。
" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</section>


				<section>
					<div class="sumeister05 u-only__pc">
						<div class="sumeister05__row">
							<div class="sumeister05__ttl">
								<div class="flex w75 under">
									<div class="sumeister05__badge">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__pc center" style="max-width:104px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/meisterbadge-sp@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__sp" loading="lazy">
									</div>
									<p class="sumeister05__name"><ruby data-ruby="つかだ  まさひろ">塚田 雅博<rt>つかだ まさひろ</rt></ruby><br>長谷工コミュニティ<br>素敵生活営業部営業課</p>
								</div>
								<div class="sumeister05__img w25">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada02@2x.jpg" alt="塚田 雅博" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada02-sp@2x.jpg" alt="塚田 雅博" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
							<p class="sumeister05__ex">2008年長谷工コミュニティに入社し、日々お客さまの専有部のお困り事にお応えし、住まいの環境改善のお手伝いをするスペシャリスト。<br>
								私生活では、10歳と4歳の2児の子どもの父親。自宅の浴室のミストサウナですごすのもリラックスタイムですが、温泉でリフレッシュするのが休日の定番の楽しみです。</p>
						</div>
					</div>
					<div class="sumeister05 u-only__sp">
						<div class="sumeister05__row">
							<div class="sumeister05__ttl">
								<div class="flex w50 under">
									<div class="sumeister05__badge">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__pc center" style="max-width:104px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__sp" style="max-width:80px;" loading="lazy">
									</div>
									<p class="sumeister05__name"><ruby data-ruby="つかだ  まさひろ">塚田 雅博<rt>つかだ まさひろ</rt></ruby><br>長谷工コミュニティ<br>素敵生活営業部営業課</p>
								</div>
								<div class="sumeister05__img w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada02@2x.jpg" alt="塚田 雅博" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada02-sp@2x.jpg" alt="塚田 雅博" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
							<p class="sumeister05__ex">2008年長谷工コミュニティに入社し、日々お客さまの専有部のお困り事にお応えし、住まいの環境改善のお手伝いをするスペシャリスト。<br>
								私生活では、10歳と4歳の2児の子どもの父親。自宅の浴室のミストサウナですごすのもリラックスタイムですが、温泉でリフレッシュするのが休日の定番の楽しみです。</p>
						</div>
					</div>
				</section>

				<div class="main__item">
					<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_sumai.php") ?>
				</div>
				<div class="mb3">
					<?php $CmGtmId = "";
					include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php");
					?>
				</div>
		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_foris.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
