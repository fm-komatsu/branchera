<?php
//base
include("../../function.php");
$content = get_id_data('26011');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai05 sumai11";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month = "8";
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
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/main-v@2x.jpg" alt="<?php echo $pageTtl ?>｜以前は気にならなかったけど、最近換気扇を回していても料理のニオイが部屋中にこもってスッキリしない…。吸い込むチカラが落ちてるのかなぁ？" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>｜以前は気にならなかったけど、最近換気扇を回していても料理のニオイが部屋中にこもってスッキリしない…。吸い込むチカラが落ちてるのかなぁ？" class="u-img__max u-only__sp" loading="lazy">
						</h3>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion01 section01">
				<div class="section01__row mb4">
					<div class="mb6 center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/tell_me@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__pc center" style="max-width:540px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/tell_me-sp@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>

				<div class="sumai05section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/sumaister__mrtsukada01@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__pc" loading="lazy">
						<div class="center u-font__bold sumeister_ex u-only__pc">
							<p class="sumeister_ex01">長谷工コミュニティ<br>素敵生活営業部営業課</p>
							<ruby data-ruby="ごず みちこ">塚田 雅博<rt> つかだ まさひろ</rt></ruby>
						</div>
					</div>
					<div class="w65 sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/balloon01@2x.png" alt="調理臭のお悩みは換気扇（レンジフード）がカギを握ります。入居時は気にならなかったのに近ごろどうも…という場合は、換気扇についた汚れとニオイが取りきれていない状態です。油汚れやホコリが溜まると換気効率が下がり、お部屋の汚れの原因になってしまうことも…かといってファンの清掃は手間もかかり大仕事。ガンコな油汚れには、みなさん手を焼いていらっしゃるようですね。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/balloon01-sp@2x.png" alt="調理臭のお悩みは換気扇（レンジフード）がカギを握ります。入居時は気にならなかったのに近ごろどうも…という場合は、換気扇についた汚れとニオイが取りきれていない状態です。油汚れやホコリが溜まると換気効率が下がり、お部屋の汚れの原因になってしまうことも…かといってファンの清掃は手間もかかり大仕事。ガンコな油汚れには、みなさん手を焼いていらっしゃるようですね。" class="u-img__max u-only__sp center" loading="lazy" style="max-width:90%">
					</div>
					<div class="sumai05__balloon02_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/sumaister__mrtsukada01-sp@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__sp" style="max-width:155px;" loading="lazy">
						</div>
						<div class="center u-font__bold sumeister_ex pt7_sp">
							<p class="sumeister_ex01">長谷工コミュニティ<br>素敵生活営業部営業課</p>
							<ruby data-ruby="つかだ   まさひろ">塚田 雅博<rt> つかだ まさひろ</rt></ruby>
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion02">
				<h4 class="setion__ttl01 center mb4 sumai08__point-ttl">そんな時、こんな選択もアリです。</h4>
				<h5 class="setion__ttl02 mb4">大変なことは<br class="u-only__sp">「プロに任せてすごさを実感」</h5>
				<div class="solution mb9">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/solution@2x.png" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/solution-sp@2x.png" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp u-font-size__20">プロの技が光る！<br> 換気扇（レンジフード）クリーニング</h4>
					<!--アコーディオンメニュー-->
					<div class="option__item04">
						<input id="acd-check01" class="acd-check01" type="checkbox">
						<label class="acd-label01" for="acd-check01">
							<div id="solution_btn" class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/button__green@2x.png" alt="プロの技って何ですか？" class="u-img__max u-only__pc center acd-check01__img" style="max-width:641px;" loading="lazy">
							</div>
							<div id="solution_btn_sp" class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/button__green-sp@2x.png" alt="プロの技って何ですか？" class="u-img__max u-only__sp center acd_btn mt2_sp" loading="lazy">
							</div>
						</label>
						<div class="acd-content01 sumai11__acd-content01">
							<h5 class="center mb3" style="color:#40220f;">プロならではの分解清掃で、<br>手の届かない内部の油汚れも<br class="u-only__sp">スッキリ落とします。</h5>
							<p class="acd__ttl_m center u-font__palt mb3 u-font-size__20">カバーやファンを外して分解清掃</p>
							<div class="acdcontent__flex mb2">
								<figure class="w45 u-fig u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/solution-img01@2x.jpg" alt="カバーやファンを外して分解清掃" class="u-img__max u-only__pc" style="max-width:271px;" loading="lazy">
								</figure>
								<div class="w55 acdcontent__flex-right">
									<p class="mt0 mb2_sp">手ごわいガンコな油汚れはプロにおまかせ。他の場所に汚れや傷がつかないよう養生を行い、専用洗剤での浸け置きやブラシ洗いなどで、しつこい汚れを隅々までクリーニングします。</p>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/solution-img01-sp@2x.jpg" alt="カバーやファンを外して分解清掃" class="u-img__max u-only__sp" loading="lazy">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div div class="mb3 mb3_sp sumai06_btn u-only__pc">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/tips-button__text@2x.png" alt="お誕生日や記念日のプレゼントにいかがですか？" class="u-img__max center mb2 u-only__pc" style="max-width:466px;" loading="lazy">
					<a href="https://e-suteki.haseko.jp/house_cleaning/kitchen-fan-cleaning.html?utm_source=brc_sos_vol11&utm_medium=web&utm_campaign=kitchen_fan_cleaning" data-ga-click="sos11_01" target="_blank" class="mb6 u-only__pc">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/tips-button@2x.png" alt="プロの技がきらり☆長谷工の換気扇（レンジフード）クリーニング" class="u-img__max center sumai06_btnitem u-only__pc" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb4_sp sumai06_btn u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/tips-button__text-sp@2x.png" alt="お誕生日や記念日のプレゼントにいかがですか？" class="u-img__max center mb2 u-only__sp" style="max-width:80%;" loading="lazy">
					<a href="https://e-suteki.haseko.jp/house_cleaning/kitchen-fan-cleaning.html?utm_source=brc_sos_vol11&utm_medium=web&utm_campaign=kitchen_fan_cleaning" data-ga-click="sos11_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/tips-button-sp@2x.png" alt="プロの技がきらり☆長谷工の換気扇（レンジフード）クリーニング" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>

				<div class="option mb8 mb8_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option01@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option01-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">自分でできるお手入れもあります</h4>
					<div class="option__item04 mb3">
						<input id="acd-check2" class="acd-check2" type="checkbox">
						<label class="acd-label2" for="acd-check2">
							<div id="option01_btn" class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/button__red01@2x.png" alt="油汚れはその日のうちに！" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							</div>
							<div id="option01_btn_sp" class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/button__red01-sp@2x.png" style="" alt="油汚れはその日のうちに！" class="u-img__max u-only__sp center acd_btn" loading="lazy">
							</div>
						</label>
						<div class="acd-content2 pb0_sp">
							<div class="acdcontent__flex sumai11__acdcontent-flex">
								<figure class="w50 u-fig u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option-img01@2x.jpg" alt="油汚れはその日のうちに！" class="u-img__max u-only__pc" loading="lazy">
								</figure>
								<div class="w50 acdcontent__flex-right">
									<p class="mt0 mb2_sp">換気扇の外側部分はふだんから小まめに拭いておきましょう。掃除道具には<a href="<?php echo $base_url ?>/smile/article/exchange-cleaning_goods.php#cleanner" class="sumai11__link" data-ga-click="sos11_02">電解質クリーナー</a>と<a href="<?php echo $base_url ?>/smile/article/exchange-cleaning_goods.php#cloth" class="sumai11__link" data-ga-click="sos11_03">マイクロファイバークロス</a>がおススメです。他にも重曹やセスキ炭酸ソーダを水で溶かしてスプレーして拭いたり、薄めた食器用洗剤で湿らせたクロスで拭いたりしても油汚れは落ちます。いろいろ試してお気に入りを探してみるのもいいでしょう。換気扇フィルターを設置すると、汚れ防止に役立ちます（定期的に交換しましょう）。</p>
									<a href="<?php echo $base_url ?>/magazine/article/cleaning03.php" data-ga-click="sos11_04" class="sumai11__link-icon mb2_sp">レンジフードキレイ術の詳細はこちら</a>
								</div>
							</div>
							<figure class="u-fig u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option-img01-sp@2x.jpg" alt="油汚れはその日のうちに！" class="u-img__max u-only__sp" loading="lazy">

							</figure>

						</div>
					</div>
				</div>
				<div class="option mb8 mb8_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option02@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option02-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">長く使っているなら</h4>
					<div class="option__item04 pb2">
						<input id="acd-check3" class="acd-check3" type="checkbox">
						<label class="acd-label3" for="acd-check3">
							<div id="option02_btn" class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/button__red02@2x.png" alt="換気扇（レンジフード）交換" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							</div>
							<div id="option02_btn_sp" class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/button__red02-sp@2x.png" style="" alt="換気扇（レンジフード）交換" class="u-img__max u-only__sp center acd_btn" loading="lazy">
							</div>
						</label>
						<div class="acd-content3">
							<div class="acdcontent__flex sumai10__acdcontent-flex">
								<div class="w50">
									<figure class="u-fig">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option-img02@2x.jpg" alt="換気扇（レンジフード）点検" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									</figure>
								</div>
								<div class="w50">
									<p class="mt0 mb_sp">換気扇（レンジフード）の寿命はだいたい10年程度。汚れで吸い込みが悪かったり、ちょっと大きな音がしていたら、動かなくなる前に思い切って交換をおススメします。新しいタイプのものは掃除もラクで運転音も静か。さらに省エネ設計になっています。</p>
									<a href="https://e-suteki.haseko.jp/kitchen/kitchen.html?utm_source=brc_sos_vol11&utm_medium=web&utm_campaign=kitchen#saisinrengefood" target="_blank" data-ga-click="sos11_05" class="sumai11__link-icon mb2_sp">レンジフードの交換の詳細はこちら</a>
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/option-img02-sp@2x.jpg" alt="換気扇（レンジフード）点検" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
						</div>
					</div>
				</div>
				<section>
					<div class="sumai05section01__flex mb6 mb4_sp u-only__pc">
						<div class="w35" style="align-self: flex-end;">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/sumaister__mrtsukada01@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="w65 sumai05__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/balloon02@2x.png" alt="プロによるクリーニングサービスは、使い方にもよりますが、年に１～2度くらいがおススメです、専門の方に隅々までピカピカにしてもらい、ご家庭では小まめに日ごろのお手入れをしましょう。マメな清掃こそキレイの秘訣。油汚れも日々、拭いていると苦労なく落とせますし、ベタつくこともありません。キレイを保てると気分もいいですね。" class="u-img__max u-only__pc" loading="lazy">
						</div>
					</div>
					<div class="sumai05section01 mb6 u-only__sp">
						<div class="sumai05__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/balloon02-sp@2x.png" alt="プロによるクリーニングサービスは、使い方にもよりますが、年に１～2度くらいがおススメです、専門の方に隅々までピカピカにしてもらい、ご家庭では小まめに日ごろのお手入れをしましょう。マメな清掃こそキレイの秘訣。油汚れも日々、拭いていると苦労なく落とせますし、ベタつくこともありません。キレイを保てると気分もいいですね。" class="u-img__max u-only__sp center" style="max-width:90%;" loading="lazy">
						</div>
						<div class="sumai05__balloon02_sp">
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/sumaister__mrtsukada01-sp@2x.png" alt="長谷工コミュニティ素敵生活営業部営業課塚田 雅博つかだまさひろ" class="u-img__max u-only__sp" style="max-width:155px;" loading="lazy">
							</div>
						</div>
					</div>
				</section>
				<section class="mb6">
					<div class="point flex between">
						<div class="point__item01 sumai10__point1 mb4 mb3_sp w50">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point1@2x.png" alt="【換気扇の汚れは広範囲に影響】換気扇（レンジフード）の吸い込みが悪いと、リビングなど隣接する空間に油や煙が飛散して家具や衣類などが汚れてしまいます。しかも、飛散した油や煙をエアコンが吸い込むと、エアコン内部の汚れや送風時のニオイにつながりますし、エアコン送風によるさらなる油の飛散という悪循環にもつながるんです。" class="u-img__max sumai10__point1_01 u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point1-sp@2x.png" alt="【換気扇の汚れは広範囲に影響】換気扇（レンジフード）の吸い込みが悪いと、リビングなど隣接する空間に油や煙が飛散して家具や衣類などが汚れてしまいます。しかも、飛散した油や煙をエアコンが吸い込むと、エアコン内部の汚れや送風時のニオイにつながりますし、エアコン送風によるさらなる油の飛散という悪循環にもつながるんです。" class="u-img__max sumai10__point1_01 u-only__sp center" style="max-width:90%;" loading="lazy">
						</div>
						<div class="point__item02 w50">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__01@2x.png" alt="【奥行を上手に使う】奥行のあるクローゼットの場合、無計画に詰め込むと奥のモノが取り出しにくくなります。引き出しやバスケットを使うのも手ですが、「手前側」と「奥側」にスペースを分けて考えるのもひとつの方法です。たとえば、高さのあるモノは奥側に、手前に背の低いもの収納すれば、奥にしまっているモノが見やすいですよね。また、奥行きの浅い棚板を奥に設置し小物を収納。手前側には長尺のものを収納すれば、空間をムダなく使えますよ。" class="u-img__max center u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__01-sp@2x.png" alt="【奥行を上手に使う】奥行のあるクローゼットの場合、無計画に詰め込むと奥のモノが取り出しにくくなります。引き出しやバスケットを使うのも手ですが、「手前側」と「奥側」にスペースを分けて考えるのもひとつの方法です。たとえば、高さのあるモノは奥側に、手前に背の低いもの収納すれば、奥にしまっているモノが見やすいですよね。また、奥行きの浅い棚板を奥に設置し小物を収納。手前側には長尺のものを収納すれば、空間をムダなく使えますよ。" class="u-img__max center u-only__sp" loading="lazy" style="max-width:90%;">
							<div class="flex center">
								<div class=" point__item02_01"><img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__02@2x.png" alt="" class="u-img__max center u-only__pc" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__02-sp@2x.png" alt="" class="u-img__max center u-only__sp" loading="lazy">
								</div>
								<a href="https://e-suteki.haseko.jp/cleaning/ventilation-duct.html?utm_source=brc_sos_vol11&utm_medium=web&utm_campaign=ventilation_duct" target="_blank" data-ga-click="sos11_06" class="point__item02_02"><img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__03_link@2x.png" alt="" class="u-img__max center u-only__pc " loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__03_link-sp@2x.png" alt="" class="u-img__max center u-only__sp" loading="lazy"> </a>
								<div class="point__item02_03">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__04@2x.png" alt="" class="u-img__max center u-only__pc " loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__04-sp@2x.png" alt="" class="u-img__max center u-only__sp" loading="lazy">
								</div>
							</div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__05@2x.png" alt="" class="u-img__max center u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/point2__05-sp@2x.png" alt="" class="u-img__max center u-only__sp" loading="lazy" style="max-width:90%;margin-top:-1px;">
						</div>
					</div>
				</section>
				<section>
					<div div class="mb6">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/tips@2x.png" alt="換気扇についての豆知識｜『かつては団地で魚を焼くたび、家中煙だらけ？』レンジフードのルーツは、大正時代に大きな建物や工場などに設置された「排気扇」。昭和30年代、団地や集合住宅ブームに伴って気密性の高い建物が増え、調理の煙やトイレの臭気がこもるのが大問題になりました。そこで住宅を供給する側が「排気扇」を「換気扇」という名称に替え、一般家庭用の換気設備を標準的に導入し始めたのです。当時は、壁に穴を空けて直接排気する「プロペラファン」で、大卒者初任給と同じぐらいの値段だったというから驚きです。その後、建物の設計自由度を高めるためにも、ダクト式で外壁に面していないところにも付けられる「シロッコファン」のレンジフードが主流に。コンロの上で換気するので油煙を集める効果も高く、キッチンレイアウトも自由自在になりました。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_11/tips-sp@2x.png" alt="換気扇についての豆知識｜『かつては団地で魚を焼くたび、家中煙だらけ？』レンジフードのルーツは、大正時代に大きな建物や工場などに設置された「排気扇」。昭和30年代、団地や集合住宅ブームに伴って気密性の高い建物が増え、調理の煙やトイレの臭気がこもるのが大問題になりました。そこで住宅を供給する側が「排気扇」を「換気扇」という名称に替え、一般家庭用の換気設備を標準的に導入し始めたのです。当時は、壁に穴を空けて直接排気する「プロペラファン」で、大卒者初任給と同じぐらいの値段だったというから驚きです。その後、建物の設計自由度を高めるためにも、ダクト式で外壁に面していないところにも付けられる「シロッコファン」のレンジフードが主流に。コンロの上で換気するので油煙を集める効果も高く、キッチンレイアウトも自由自在になりました。" class="u-img__max u-only__sp" loading="lazy">
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
					include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");
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
