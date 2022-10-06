<?php
//base
include("../../function.php");
$content = get_id_data('26006');
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
$release_month = "3";
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
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/main-v@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:896px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/main-v-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="main__item sumai05__wrapper">
			<section>
				<div class="sumai05info section_mb">
					<div class="sumai05info__row mb5">
						<h3 class="sumai05info__ttl">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/header__top@2x.jpg" alt="ピカピカのお風呂で気持ちよく入浴したい！浴室の床の黒いカビがどんなにこすっても取れない！浴槽の中も何だかくすんでるし。だからってユニットバスリフォーム？壊れて使えないわけじゃないし、予算も厳しいわ。" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/header__top-sp@2x.jpg" alt="ピカピカのお風呂で気持ちよく入浴したい！浴室の床の黒いカビがどんなにこすっても取れない！浴槽の中も何だかくすんでるし。だからってユニットバスリフォーム？壊れて使えないわけじゃないし、予算も厳しいわ。" class="u-img__max u-only__sp" loading="lazy">
						</h3>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion01 section01">
				<div class="section01__row mb4">
					<div class="mb6 center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/title_01@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__pc center" style="max-width:540px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/title_01-sp@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__sp" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/balloon__01@2x.png" alt="お風呂って1日の疲れを癒す大切な場所ですよね。ブランシエラクラブのアンケートでも浴室のお悩みは常に上位で、お悩みのNO1は汚れが落ちない、特にカビや水垢の汚れに関して問題を抱えている方が多いようです。浴室をキレイに保つためにみなさんいろいろ苦労されているようですよ。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/balloon__01-sp@2x.png" alt="お風呂って1日の疲れを癒す大切な場所ですよね。ブランシエラクラブのアンケートでも浴室のお悩みは常に上位で、お悩みのNO1は汚れが落ちない、特にカビや水垢の汚れに関して問題を抱えている方が多いようです。浴室をキレイに保つためにみなさんいろいろ苦労されているようですよ。" class="u-img__max u-only__sp" loading="lazy">
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
				<h5 class="setion__ttl01 center mb4">そんな時、役に立つのがコレです。</h5>
				<h4 class="setion__ttl02 mb4">リフォームより<br class="u-only__sp">手軽にキレイにする方法があります</h4>
				<div class="solution mb7">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__bg@2x.png" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__bg-sp@2x.png" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<div class="flex solution__wrapper">
						<div class="w50 solution__item01">
							<h4 class="setion__ttl03 u-font__palt mt8 mt2_sp">浴室を「リメイク」する</h4>
						</div>
						<div div class="w50 solution__item02">
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__img02@2x.png" alt="浴室イメージ画像" class="u-img__max u-only__pc center" style="max-width:350px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__img02-sp@2x.png" alt="浴室イメージ画像" class="u-img__max u-only__sp" style="" loading="lazy">
							</div>
						</div>
					</div>
					<!--アコーディオンメニュー-->
					<div class="option__item03">
						<input id="acd-check01" class="acd-check01" type="checkbox">
						<label class="acd-label01" for="acd-check01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__btn_01@2x.png" alt="浴室のリメイクって何ですか？" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__btn_01-sp@2x.png" alt="浴室のリメイクって何ですか？" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content01">
							<p class="u-font__bold center mb4 acd__ttl u-font__palt">浴槽を塗装し浴室床面にシートを上貼りすることで、<br>浴室のリニューアルが可能です。<br>リフォームに比べて低予算で済み、工事も短期間で終わります。</p>
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__img03@2x.png" alt="浴槽塗装" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__img03-sp@2x.png" alt="浴槽塗装" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p class="acd__ttl_m center u-font__palt">浴槽塗装</p>
									<p class="u-font__palt">浴槽の黒ずみやざらつき、水位線など気になるところを吹き付け塗装でキレイにリニューアルします。まず浴室の汚れやカビを除去してから、道具を使い細かいところは手作業で表面をサンディングし、その後エアガンで塗装していきます。<br>1日おいて乾燥させたら、表面が滑らかになるよう仕上げをします。</p>
								</div>
							</div>
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__img04@2x.png" alt="間仕切り壁用ペットドア" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/solution__img04-sp@2x.png" alt="間仕切り壁用ペットドア" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p class="acd__ttl_m center">浴室床シート貼り</p>
									<p class="u-font__palt">何年か使ってカビや汚れが落ちなくなった浴室の床にシートを上貼りし、キレイにリニューアルします。シートのデザインも多く、浴室のイメージチェンジも可能です。<br>まず傷んだ床をポリッシャーで研磨し、下地調整を行なった後、シートを貼っていきます。タイルの床もシート貼りにすることが可能です。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__pc">
					<a href="https://e-suteki.haseko.jp/bathroom/unit-bath-remake.html?utm_source=brc_sos_vol06&utm_medium=web&utm_campaign=unit_bath_remake" data-ga-click="sos06_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/btn_01@2x.png" alt="浴室リメイクについてはこちら" class="u-img__max center sumai06_btnitem" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__sp">
					<a href="https://e-suteki.haseko.jp/bathroom/unit-bath-remake.html?utm_source=brc_sos_vol06&utm_medium=web&utm_campaign=unit_bath_remake" data-ga-click="sos06_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/btn_01-sp@2x.png" alt="浴室リメイクについてはこちら" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>

				<div class="option mb8 mb6_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__img01@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__img01-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">とことん浴室掃除を極めるなら</h4>
					<div class="option__item02">
						<input id="acd-check2" class="acd-check2" type="checkbox">
						<label class="acd-label2" for="acd-check2">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__btn_01@2x.png" alt="お風呂のメンテナンス" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__btn_01-sp@2x.png" style="" alt="お風呂のメンテナンス" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content2">
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option01_04@2x.jpg" alt="お風呂のメンテナンス" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option01_04-sp@2x.jpg" alt="お風呂のメンテナンス" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p>浴室の汚れは3つのタイプがあり、カビ菌には塩素系洗剤、ヌメリやせっけんカスなどの酸性の汚れにはアルカリ性の洗剤、鏡のうろこや水栓の汚れは酸性の洗剤を使います。汚れは市販の中性洗剤を使って、まず落としていきましょう。</p>
									<div class="sumai05__link">
										<a href="https://e-suteki.haseko.jp/suteki/vol83-maintenance.html?utm_source=brc_sos_vol06&utm_medium=web&utm_campaign=vol83_maintenance" target="_blank" data-ga-click="sos06_02">
											<span>お風呂のメンテナンスの詳細はこちら</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="option mb10 mb6_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__img02@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__img02-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">プロのハウスクリーニングに任せるなら</h4>
					<div class="option__item02">
						<input id="acd-check3" class="acd-check3" type="checkbox">
						<label class="acd-label3" for="acd-check3">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__btn_02@2x.png" alt="浴室クリーニング" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option__btn_02-sp@2x.png" style="" alt="浴室クリーニング" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content3">
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option02_04@2x.jpg" alt="プロのハウスクリーニング" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/option02_04-sp@2x.jpg" alt="プロのハウスクリーニング" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p>自分では掃除しきれないエプロン内部やドアやパッキンのカビ、鏡の汚れなどはプロの手を借りましょう。水垢や黒カビ、皮脂の汚れなど、部位に合わせて専用洗剤を使い分け、隅々までキレイにしてくれます。<br><small class="u-font__small">※エプロン内清掃は外せる場合のみ対応します。</small></p>
									<div class="sumai05__link">
										<a href="https://e-suteki.haseko.jp/service/bath-cleaning.html?utm_source=brc_sos_vol06&utm_medium=web&utm_campaign=bath_cleaning" target="_blank" data-ga-click="sos06_03">
											<span class="u-font__palt">浴室のクリーニング（ハウスクリーニング）はこちら</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sumai05section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada01@2x.jpg" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博" class="u-img__max u-only__pc" loading="lazy">
					</div>
					<div class="w65 sumai05__balloon03">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/balloon__02@2x.png" alt="浴槽や浴室の床をリメイクするなら、同時に壁・鏡・水栓も新品に交換して、浴室中をピカピカにする、という手もあります。どんな浴室にしたいか、どこまで手間やお金をかけるか、リメイク前には、イメージを膨らませましょう。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon03">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/balloon__02-sp@2x.png" alt="浴槽や浴室の床をリメイクするなら、同時に壁・鏡・水栓も新品に交換して、浴室中をピカピカにする、という手もあります。どんな浴室にしたいか、どこまで手間やお金をかけるか、リメイク前には、イメージを膨らませましょう。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai05__balloon03_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/sumaister__mrtsukada01-sp@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博" class="u-img__max u-only__sp" style="max-width:155px; margin-top:-100px;" loading="lazy">
						</div>
					</div>
				</div>
			</section>

			<section class="mb6">
				<div class="point flex between">
					<div class="w50 point__item01 mb3_sp">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/point__img_01@2x.png" alt="【お湯は毎日抜いてね】キレイを長持ちさせるには、こまめなお手入れが必要です。特にお風呂のお湯は、家族が使い終わったら毎日抜くこと。節水のために、入浴後もお湯を流さず浴槽にためて洗濯に使う、という方も多いけど、水位線など汚れがこびりつく原因になるんです。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/point__img_01-sp@2x.png" alt="【お湯は毎日抜いてね】キレイを長持ちさせるには、こまめなお手入れが必要です。特にお風呂のお湯は、家族が使い終わったら毎日抜くこと。節水のために、入浴後もお湯を流さず浴槽にためて洗濯に使う、という方も多いけど、水位線など汚れがこびりつく原因になるんです。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="w50 point__item02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/point__img_02@2x.png" alt="【掃除道具も浴室に適したものを】浴室掃除のとき、汚れを落とそうとするあまり、浴槽などに適さない素材の道具でゴシゴシ掃除して、表面が傷んで、そこに汚れがこびりつく、という悪循環になることも。浴室掃除専用の道具を使ってくださいね。そして、掃除後は水分をよく拭き取って乾燥させることをおすすめします。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/point__img_02-sp@2x.png" alt="【掃除道具も浴室に適したものを】浴室掃除のとき、汚れを落とそうとするあまり、浴槽などに適さない素材の道具でゴシゴシ掃除して、表面が傷んで、そこに汚れがこびりつく、という悪循環になることも。浴室掃除専用の道具を使ってくださいね。そして、掃除後は水分をよく拭き取って乾燥させることをおすすめします。" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
			</section>
			<section>
				<div div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/mamechishiki@2x.png" alt="桃の葉にはタンニンやフラボノイドといった成分があり、それぞれ炎症を沈めたり肌を引き締める効果、湿疹改善の効果があるとされています。菖蒲湯は、血行促進効果があり腰痛や肩こりの緩和が期待できます。柚子湯は最もポピュラーですが、こちらも血行促進効果があり、風邪予防や、冷え性の改善に効果があるほか、柚子の皮に含まれるクエン酸やビタミンCはひびやあかぎれに効き目があります。このようなお湯を薬湯といいます。みなさんもいかがですか？" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/mamechishiki-sp@2x.png" alt="桃の葉にはタンニンやフラボノイドといった成分があり、それぞれ炎症を沈めたり肌を引き締める効果、湿疹改善の効果があるとされています。菖蒲湯は、血行促進効果があり腰痛や肩こりの緩和が期待できます。柚子湯は最もポピュラーですが、こちらも血行促進効果があり、風邪予防や、冷え性の改善に効果があるほか、柚子の皮に含まれるクエン酸やビタミンCはひびやあかぎれに効き目があります。このようなお湯を薬湯といいます。みなさんもいかがですか？" class="u-img__max u-only__sp" loading="lazy">
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
