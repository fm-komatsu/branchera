<?php
//base
include("../../function.php");
$content = get_id_data('26009');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai05 sumai09";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month = "6";
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
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/main-v@2x.jpg" alt="<?php echo $pageTtl ?>｜洋服やバッグ、アクセサリーや着物、食器など…、素敵なモノたちだけど、今はもう使わなくなってしまった…。捨てたいけれど捨てられない。どうしたらいいの？" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>｜洋服やバッグ、アクセサリーや着物、食器など…、素敵なモノたちだけど、今はもう使わなくなってしまった…。捨てたいけれど捨てられない。どうしたらいいの？" class="u-img__max u-only__sp" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada01@2x.jpg" alt="カシコシュ青梅新町店 副店長 髙田 将寛" class="u-img__max u-only__pc" loading="lazy">
						<div class="center u-font__bold sumeister_ex u-only__pc">
							<p class="sumeister_ex01">カシコシュ青梅新町店<br>副店長</p>
							<ruby data-ruby="たかだ   まさひろ">髙田 将寛<rt> たかだ まさひろ</rt></ruby>
						</div>
					</div>
					<div class="w65 sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/balloon01@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/balloon01-sp@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai05__balloon02_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada01-sp@2x.png" alt="カシコシュ青梅新町店 副店長 髙田 将寛" class="u-img__max u-only__sp" style="max-width:200px;margin-top: -20px;" loading="lazy">
						</div>
						<div class="center u-font__bold sumeister_ex">
							<p class="sumeister_ex01">カシコシュ青梅新町店<br>副店長</p>
							<ruby data-ruby="たかだ   まさひろ">髙田 将寛<rt> たかだ まさひろ</rt></ruby>
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion02">
				<h4 class="setion__ttl01 center mb4 sumai08__point-ttl">そんな時、役に立つのがコレです。</h4>
				<h5 class="setion__ttl02 mb4">不要品を欲しい人につないでくれる<br class="u-only__sp">リユースサービス</h5>
				<div class="solution mb7">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/solution@2x.png" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/solution-sp@2x.png" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">WEB宅配買取を利用する</h4>
					<!--アコーディオンメニュー-->
					<div class="option__item04">
						<input id="acd-check01" class="acd-check01" type="checkbox">
						<label class="acd-label01" for="acd-check01">
							<div id="solution_btn" class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/button__green@2x.png" alt="WEB宅配買取って何ですか？" class="u-img__max u-only__pc center acd-check01__img" style="max-width:641px;" loading="lazy">
							</div>
							<div id="solution_btn_sp" class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/button__green-sp@2x.png" alt="WEB宅配買取って何ですか？" class="u-img__max u-only__sp center acd_btn mt2_sp" loading="lazy">
							</div>
						</label>
						<div class="acd-content01 sumai09__acd-content01">
							<p class="u-font__bold center mb4 acd__ttl u-font__palt sumai09__acd-ttl">スマホやパソコンの簡単操作で、<br class="u-only__sp">おうちにいながら<br class="u-only__pc">不要なブランド品などの<br class="u-only__sp">査定や売却ができるサービスです。</p>
							<p class="acd__ttl_m center u-font__palt mb3">まずはインターネットで申し込み</p>
							<div class="acdcontent__flex mb3">
								<figure class="w40 u-fig u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/solution-img01@2x.jpg" alt="まずはインターネットで申し込み" class="u-img__max u-only__pc" style="max-width:271px;" loading="lazy">
									<figcaption class="u-fig__cap_darken-noshadow mr0_sp u-only__pc">※写真はイメージです。</figcaption>
								</figure>
								<div class="w60  acdcontent__flex-right">
									<p class="mt0 mb1_sp">Webサイトから申し込み、売りたいモノを送ります。宅配キットが届いたり、配送の手配をしてくれるところも。基本的に送料も査定も無料です。</p>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/solution-img01-sp@2x.jpg" alt="まずはインターネットで申し込み" class="u-img__max u-only__sp" loading="lazy">
									<figcaption class="u-fig__cap_darken-noshadow mr0 mr0_sp u-only__sp">※写真はイメージです。</figcaption>
								</figure>
							</div>
							<div>
								<p class="acd__ttl_m center u-font__palt">査定額に納得できれば売却</p>
								<p>売りたいモノを送った数日後に査定結果の連絡がきます。</p>
								<div class="acdcontent__flex mb3">
									<figure class="w40 u-fig u-only__pc">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/solution-img02@2x.jpg" alt="査定額に納得できれば売却" class="u-img__max u-only__pc" style="max-width:271px;" loading="lazy">
										<figcaption class="u-fig__cap mr0 mr0_sp u-only__pc">※写真はイメージです。</figcaption>
									</figure>
									<div class="w60 acdcontent__flex-right">
										<p class="mt0 mt1_sp"><span>① 査定額に納得したら</span><br>そのまま売却となり、ご指定の口座に入金。</p>
										<p><span>② 査定額に不満なら</span><br>売却はキャンセルとなり、基本的に無料で品物を返送してくれます。</p>
									</div>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/solution-img02-sp@2x.jpg" alt="査定額に納得できれば売却" class="u-img__max u-only__sp mb1_sp" loading="lazy">
									<figcaption class="u-fig__cap mr0 mr0_sp u-only__sp">※写真はイメージです。</figcaption>
								</figure>
							</div>
							<div>
								<h5 class="u-font__normal">★主な取り扱い品★</h5>
								<p>洋服、バッグ、ブランドバッグ、ブランド時計、靴、金やプラチナなどのアクセサリー、ブランド食器、カトラリー、キッチン家電、和服、本</p>
								<div class="u-clearfix">
									<p class="u-text__align_r u-text__align_l_sp">
										<span class="u-small">※ご利用になる買い取り業者によって、ご利用の流れやシステム、取り扱い商品が異なります。</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__pc">
					<a href="https://www.haseko.co.jp/kasikosh/purchase/web/" data-ga-click="sos09_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/tips-button@2x.png" alt="長谷工でもやってます！ 詳しくはこちら" class="u-img__max center sumai06_btnitem" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb7 mb5_sp pt2_sp sumai06_btn u-only__sp">
					<a href="https://www.haseko.co.jp/kasikosh/purchase/web/" data-ga-click="sos09_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/tips-button-sp@2x.png" alt="長谷工でもやってます！ 詳しくはこちら" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>

				<div class="option mb8 mb2_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/option@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/option-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<div class="sumai09__option" style="background-color:#fdeceb;">
						<div class="option__item04 mb3">
							<input id="acd-check2" class="acd-check2" type="checkbox">
							<label class="acd-label2" for="acd-check2">
								<div id="option01_btn" class="u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/button__red01@2x.png" alt="自分で出品してみる" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								</div>
								<div id="option01_btn_sp" class="u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/button__red01-sp@2x.png" style="" alt="自分で出品してみる" class="u-img__max u-only__sp center acd_btn" loading="lazy">
								</div>
							</label>
							<div class="acd-content2 pb0_sp">
								<p>もっと自分が主人公となって不要なモノを売る方法があります。キーワードは「フリマ」。対面とWeb上に大別でき、それぞれの良さは次のとおりです。</p>
								<h5 class="sumai09__option-ttl_s">1.公園や広場で開催されるフリーマーケットに出店する。</h5>
								<p>自分で値札を作ったり、売るルールを決めたり、店主として主体的に売ることができます。また、おうちの不要品をなんでも出品でき、とくにブランド品でないモノや、おもちゃ、子ども服、CD・DVDなども出品しやすいです。対面でお客さまと直接やり取りできることを魅力に感じている方も多いようですね。</p>
								<h5 class="sumai09__option-ttl_s">2.フリマアプリやネットオークションに出品する。</h5>
								<div class="acdcontent__flex sumai09__acdcontent-flex">
									<figure class="w50 u-fig u-only__pc">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/option-img01@2x.jpg" alt="査定額に納得できれば売却" class="u-img__max u-only__pc" loading="lazy">
										<figcaption class="u-fig__cap_darken-noshadow mr2 mr0_sp u-only__pc">※写真はイメージです。</figcaption>
									</figure>
									<div class="w50 acdcontent__flex-right">
										<p class="mt0 mt1_sp">スマホひとつで手軽に売ることができます。とくに人気のアプリはユーザー数も多いので売れる可能性も高いようです。配送も匿名でできるなど、プライバシーの保護にも配慮されています。一品ずつの出品にはなりますが、空いた時間にお小遣い稼ぎする感覚で利用できます。</p>
									</div>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/option-img01-sp@2x.jpg" alt="2．フリマアプリやネットオークションに出品する。" class="u-img__max u-only__sp" loading="lazy">
									<figcaption class="u-fig__cap_darken-noshadow mr2 mr0_sp u-only__sp">※写真はイメージです。</figcaption>

								</figure>

							</div>
						</div>
						<div class="option__item05 pb2">
							<input id="acd-check3" class="acd-check3" type="checkbox">
							<label class="acd-label3" for="acd-check3">
								<div id="option02_btn" class="u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/button__red02@2x.png" alt="回収サービスを利用する" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								</div>
								<div id="option02_btn_sp" class="u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/button__red02-sp@2x.png" style="" alt="回収サービスを利用する" class="u-img__max u-only__sp center acd_btn" loading="lazy">
								</div>
							</label>
							<div class="acd-content3">
								<div class="acdcontent__flex sumai09__acdcontent-flex">
									<div class="w50">
										<figure class="u-fig">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/option-img02@2x.jpg" alt="本体カバー" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/option-img02-sp@2x.jpg" alt="本体カバー" class="u-img__max u-only__sp" loading="lazy">
											<figcaption class="u-fig__cap_darken-noshadow mr2 mr0_sp">※イラストはイメージです。</figcaption>
										</figure>
									</div>
									<div class="w50">
										<p class="mt0 mt2_sp">買い取ってもらいにくいモノや、大型のモノは、不用品回収サービスがおすすめ。そのときポイントになるのが依頼先選びです。口コミや評判などもチェックして複数の見積もりを比較するなど、しっかりと検討して選びましょう。一括見積もり依頼などは、まとめサイトが便利です。</p>
										<a href="https://www.stock-lab.com/fuyouhin/" target="_blank" data-ga-click="sos09_02" class="sumai09__link-icon">不用品買取.comの詳細はこちら</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section>
					<div class="sumai09section01__flex mb6 u-only__pc">
						<div class="w35">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada01@2x.jpg" alt="カシコシュ青梅新町店 副店長 髙田 将寛" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="w65 sumai05__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/balloon02@2x.png" alt="WEB買取宅配でのリユースを基本に考えながら、お近くにリユース店があれば行ってみてもいいでしょう（カシコシュも東京都青梅市に店舗があります）。直接やり取りでき、販売しているモノも見られるので参考になりますし、思いがけない掘り出しモノに出会えるかもしれません。でもまたモノが増えちゃいますね（笑）。また、手放したいモノが大量にあるなら、出張買取や不要品お片づけのサービスが便利ですよ。" class="u-img__max u-only__pc" loading="lazy">
						</div>
					</div>
					<div class="sumai05section01 mb6 u-only__sp">
						<div class="sumai09__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/balloon02-sp@2x.png" alt="WEB買取宅配でのリユースを基本に考えながら、お近くにリユース店があれば行ってみてもいいでしょう（カシコシュも東京都青梅市に店舗があります）。直接やり取りでき、販売しているモノも見られるので参考になりますし、思いがけない掘り出しモノに出会えるかもしれません。でもまたモノが増えちゃいますね（笑）。また、手放したいモノが大量にあるなら、出張買取や不要品お片づけのサービスが便利ですよ。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai09__balloon02_sp">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada01-sp@2x.png" alt="カシコシュ青梅新町店 副店長 髙田 将寛" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</section>
				<section class="mb6">
					<div class="mb4">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point__ttl@2x.png" alt="買取サービス、査定額アップ術" class="u-img__max u-only__pc center" style="max-width:418px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point__ttl-sp@2x.png" alt="買取サービス、査定額アップ術" class="u-img__max u-only__sp center" style="max-width:85%" loading="lazy">
					</div>
					<div class="point flex between">
						<div class="w50 point__item01 sumai09__point1 mb3_sp">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_01.png" alt="【ブランシエラクラブの会員になる】長谷工グループ「ブランシエラクラブ」では、会員さま限定の優待サービスに、『WEB宅配買取の査定額5,000円以上で1,000円UP』があります。長谷工IDをまだお持ちでない方は今すぐ登録して、3ステップで簡単な、カシコシュの無料宅配買取をチェックしてみてください！" class="u-img__max sumai09__point1_01" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_02.png" alt="" class="u-img__max sumai09__point1_02" loading="lazy">
							<a href="<?php echo $base_url ?>/gift/article/kasikosh.php" data-ga-click="sos09_05" class=" sumai09__point1_03">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_03.png" alt="「査定額アップ」の優待サービスはこちら" class="u-img__max" loading="lazy">
							</a>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_04.png" alt="" class="u-img__max sumai09__point1_04" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_05.png" alt="" class="u-img__max sumai09__point1_05" loading="lazy">
							<a href="https://haseko.flpjp.com/regMail?snsSwith=2&memberTypeNo=1&_ga=2.238711299.2019380791.1654476411-2035706664.1600162682&_gl=1*lk2pc4*_ga*MjAzNTcwNjY2NC4xNjAwMTYyNjgy*_ga_0HKEY17TLC*MTY1NDY3NzQzOC40NS4xLjE2NTQ2Nzk0NzkuMA.." data-ga-click="sos09_03" target="_blank" class=" sumai09__point1_06">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_06.png" alt="長谷工ID登録（無料）はこちら" class="u-img__max" loading="lazy">
							</a>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_07.png" alt="" class="u-img__max sumai09__point1_07" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_08.png" alt="ブランシエラクラブでは、お片付けのノウハウを楽しく学べるマンガコラムを公開中。収納アドバイザー監修のお役立ちメソッドが満載です！
" class="u-img__max sumai09__point1_08" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_09.png" alt="" class="u-img__max sumai09__point1_09" loading="lazy">
							<a href="<?php echo $base_url ?>/magazine/index_comic01.php" data-ga-click="sos09_04" class=" sumai09__point1_10">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_10.png" alt="お片付けコラム「何でか、部屋が片付かない。」はこちら" class="u-img__max" loading="lazy">
							</a>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_11.png" alt="" class="u-img__max sumai09__point1_11" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point1_12.png" alt="" class="u-img__max sumai09__point1_12" loading="lazy">
						</div>
						<div class="w50 point__item02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point2@2x.png" alt="【洗面室【査定額アップのタイミングは？】も換気すること】洗面室の空気が浴室に流れ込むため、洗面室が湿っぽいと、洗濯ものの乾きが遅れます。洗面室のドアもあけておくと良いですよ。" class="u-img__max center u-only__pc" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/point2-sp@2x.png" alt="【洗面室【査定額アップのタイミングは？】も換気すること】洗面室の空気が浴室に流れ込むため、洗面室が湿っぽいと、洗濯物の乾きが遅れます。洗面室のドアもあけておくと良いですよ。" class="u-img__max center u-only__sp" style="max-width:90%;" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<div div class="mb6">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/tips@2x.png" alt="リユースするだけで一石二鳥になる??｜リユースは「再利用」という意味。不要になったものをすぐ捨てず、使いたい人にそのままの形で使ってもらうことで、ゴミの削減やゴミ処理に伴う二酸化炭素排出量軽減につながります。モノを大切に使うことで資源の節約にも！これは、話題のSDGｓ（持続可能な開発目標）の「12.つくる責任 つかう責任」で求められていることでもあるんです。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/tips-sp@2x.png" alt="リユースするだけで一石二鳥になる??｜おうちのモノをリユースすると、「おうちもスッキリ」、「地球温暖化防止にも役立つ」と実はいいことがたくさんありますね！" class="u-img__max u-only__sp" loading="lazy">
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
									<p class="sumeister05__name"><ruby data-ruby="たかだ  まさひろ">髙田 将寛<rt>たかだ まさひろ</rt></ruby><br>カシコシュ青梅新町店<br>副店長</p>
								</div>
								<div class="sumeister05__img sumeister09__img w25">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada02@2x.jpg" alt="髙田 将寛" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada02-sp@2x.jpg" alt="髙田 将寛" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
							<p class="sumeister05__ex">リユース業に携わること18年以上。主に貴金属、ブランドバッグ・財布、腕時計を担当し、査定ではみなさまのお品への思い入れまでを汲み取りながら、できるかぎり高評価に努めています。地球環境にも貢献できる仕事だと思うとうれしいですし、もっと極めようという気になります。<br>わが家も、コロナ禍のおうち時間で使わないモノをだいぶ見直しました。みなさま、ご自宅に眠っている宝石類をはじめ、ぜひご相談いただければと思います！</p>
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
						<p class="sumeister05__name"><ruby data-ruby="たかだ  まさひろ">髙田 将寛<rt>たかだ まさひろ</rt></ruby><br>カシコシュ青梅新町店<br>副店長</p>
					</div>
					<div class="sumeister05__img sumeister09__img w50">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada02@2x.jpg" alt="髙田 将寛" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_09/sumaister__mrtakada02-sp@2x.jpg" alt="髙田 将寛" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
				<p class="sumeister05__ex">リユース業に携わること18年以上。主に貴金属、ブランドバッグ・財布、腕時計を担当し、査定ではみなさまのお品への思い入れまでを汲み取りながら、できるかぎり高評価に努めています。地球環境にも貢献できる仕事だと思うとうれしいですし、もっと極めようという気になります。<br>わが家も、コロナ禍のおうち時間で使わないモノをだいぶ見直しました。みなさま、ご自宅に眠っている宝石類をはじめ、ぜひご相談いただければと思います！</p>
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
