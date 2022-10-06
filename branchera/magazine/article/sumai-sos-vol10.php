<?php
//base
include("../../function.php");
$content = get_id_data('26010');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai05 sumai10";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month = "7";
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
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/main-v@2x.jpg" alt="<?php echo $pageTtl ?>｜洋服やバッグ、アクセサリーや着物、食器など…、素敵なモノたちだけど、今はもう使わなくなってしまった…。捨てたいけれど捨てられない。どうしたらいいの？" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>｜洋服やバッグ、アクセサリーや着物、食器など…、素敵なモノたちだけど、今はもう使わなくなってしまった…。捨てたいけれど捨てられない。どうしたらいいの？" class="u-img__max u-only__sp" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/sumaister__mryamazaki01@2x.jpg" alt="株式会社フォリス 商品企画部 新規事業課 山﨑 大介" class="u-img__max u-only__pc" loading="lazy">
						<div class="center u-font__bold sumeister_ex u-only__pc">
							<p class="sumeister_ex01">株式会社フォリス<br>商品企画部 新規事業課</p>
							<ruby data-ruby="やまざき  だいすけ">山﨑 大介<rt> やまざき だいすけ</rt></ruby>
						</div>
					</div>
					<div class="w65 sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon01@2x.png" alt="クローゼットは大きな空間だから、何をどうしまったら上手にたくさんのモノが入れられるか、かえって難しいこともありますよね。デッドスペースがあるなら仕切りを増やして空間を区切ると、ムダなスペースがなくなり、そのぶん収納量をアップできますよ。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon01-sp@2x.png" alt="乾燥機能が弱いと、洗濯物がなかなか乾かなかったりしてストレスがたまりますよね。浴室暖房乾燥機の寿命は10～15年程度*。ヒーターや基盤の劣化による故障がほとんどなんです。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai05__balloon02_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/sumaister__mryamazaki01-sp@2x.png" alt="株式会社フォリス 商品企画部 新規事業課 山﨑 大介" class="u-img__max u-only__sp" style="max-width:200px;margin-top: -20px;" loading="lazy">
						</div>
						<div class="center u-font__bold sumeister_ex">
							<p class="sumeister_ex01">株式会社フォリス<br>商品企画部 新規事業課</p>
							<ruby data-ruby="やまざき  だいすけ">山﨑 大介<rt> やまざき だいすけ</rt></ruby>
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion02">
				<h4 class="setion__ttl01 center mb4 sumai08__point-ttl">そんな時、役に立つのがコレです。</h4>
				<h5 class="setion__ttl02 mb4">棚板の追加にTRYしてみる</h5>
				<div class="solution mb7">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/solution@2x.png" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/solution-sp@2x.png" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01 mt2_sp">Webで注文する</h4>
					<!--アコーディオンメニュー-->
					<div class="option__item04">
						<input id="acd-check01" class="acd-check01" type="checkbox">
						<label class="acd-label01" for="acd-check01">
							<div id="solution_btn" class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/button__green@2x.png" alt="棚板の追加って簡単？" class="u-img__max u-only__pc center acd-check01__img" style="max-width:641px;" loading="lazy">
							</div>
							<div id="solution_btn_sp" class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/button__green-sp@2x.png" alt="棚板の追加って簡単？" class="u-img__max u-only__sp center acd_btn mt2_sp" loading="lazy">
							</div>
						</label>
						<div class="acd-content01 sumai10__acd-content01">
							<p class="acd__ttl_m center u-font__palt mb3">ダボを差し込んで乗せるだけ</p>
							<div class="acdcontent__flex mb2">
								<figure class="w40 u-fig u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/solution-img01@2x.jpg" alt="ダボを差し込む　イメージ" class="u-img__max u-only__pc" style="max-width:271px;" loading="lazy">
								</figure>
								<div class="w60  acdcontent__flex-right">
									<p class="mt0 mb1_sp">棚板は、クローゼット側面の穴に棚受けとなるダボを差し込んで、そこにポンと板を乗せるだけで増やせます。また、棚板もダボもWebで手軽に買えます。一般的なシステム収納※の規格に合ったサイズで売られていたり、オーダーでサイズを指定できたりするので、下記の「サイズの測り方」も参考に、おうちのクローゼットにピッタリなものを選びましょう。</p>
								</div>
								<div class="u-only__sp">
									<small class="u-small u-only__sp">※サイズやパーツが規格化され、棚など必要なパーツを自在に組み合わせて使える収納のこと｡</small>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/solution-img01-sp@2x.jpg" alt="ダボを差し込む　イメージ" class="u-img__max u-only__sp" loading="lazy">
									<figcaption class="u-fig__cap_darken-noshadow mr0 mr0_sp u-only__sp">※写真はイメージです。</figcaption>
								</figure>
							</div>
							<div class="u-only__pc mb3">
								<small class="u-small u-only__pc">※サイズやパーツが規格化され、棚など必要なパーツを自在に組み合わせて使える収納のこと｡</small>
							</div>
							<div>
								<p class="acd__ttl_m center u-font__palt">しまいたいモノに合わせて増設</p>
								<p>洋服はもちろん、帽子、バッグなど、さまざまなサイズのモノに合わせて、ダボ穴の間隔（標準3cmピッチ）で小まめに調節できます。ムダに空いてしまっているスペースがあるなら、そこに棚板を増やしてみましょう。</p>
								<div class="mb3">
									<figure class="u-fig u-only__pc center">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/solution-img02@2x.png" alt="しまいたいモノに合わせて増設　イメージ" class="u-img__max u-only__pc center" style="max-width:85%;" loading="lazy">
									</figure>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/solution-img02-sp@2x.png" alt="しまいたいモノに合わせて増設　イメージ" class="u-img__max u-only__sp mb1_sp" loading="lazy">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div div class="mb3 mb3_sp sumai06_btn u-only__pc">
					<a href="https://foris-online.com/?pid=146772276" data-ga-click="sos10_01" target="_blank" class="mb3">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/tips-button@2x.png" alt="ココでも棚板が買えます！" class="u-img__max center sumai06_btnitem" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__pc">
					<a href="https://e-suteki.haseko.jp/storages/system-foris-6.html?utm_source=brc_sos_vol10&utm_medium=web&utm_campaign=system_foris_6" data-ga-click="sos10_02" target="_blank" class="mt3">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/tips-button02@2x.png" alt="棚板の活用事例～上手な活用法とサイズの測り方" class="u-img__max center sumai06_btnitem" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb7 mb2_sp sumai06_btn u-only__sp">
					<a href="https://foris-online.com/?pid=146772276" data-ga-click="sos10_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/tips-button-sp@2x.png" alt="ココでも棚板が買えます！" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>
				<div div class="mb7 mb5_sp sumai06_btn u-only__sp">
					<a href="https://e-suteki.haseko.jp/storages/system-foris-6.html?utm_source=brc_sos_vol10&utm_medium=web&utm_campaign=system_foris_6" data-ga-click="sos10_02" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/tips-button02-sp@2x.png" alt="棚板の活用事例～上手な活用法とサイズの測り方" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>

				<div class="option mb8 mb2_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/option@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/option-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<div class="sumai10__option" style="background-color:#fdeceb;">
						<div class="option__item04 mb3">
							<input id="acd-check2" class="acd-check2" type="checkbox">
							<label class="acd-label2" for="acd-check2">
								<div id="option01_btn" class="u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/button__red01@2x.png" alt="自分で出品してみる" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								</div>
								<div id="option01_btn_sp" class="u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/button__red01-sp@2x.png" style="" alt="自分で出品してみる" class="u-img__max u-only__sp center acd_btn" loading="lazy">
								</div>
							</label>
							<div class="acd-content2 pb0_sp">
								<div class="acdcontent__flex sumai10__acdcontent-flex">
									<figure class="w50 u-fig u-only__pc">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/option-img01@2x.jpg" alt="棚板を用意する" class="u-img__max u-only__pc" loading="lazy">
									</figure>
									<div class="w50 acdcontent__flex-right">
										<p class="mt0 mb2_sp">ホームセンターなどで、木材をぴったりなサイズに切ってもらえば棚板にできます。ダボも売っているので合わせて買いましょう（穴の大きさに注意）。DIYがお好きなら買ってきた板を自分で切るのも楽しい！ちなみに本などの重いモノを載せたい場合は棚板の厚みに注意しましょう。</p>
									</div>
								</div>
								<figure class="u-fig u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/option-img01-sp@2x.jpg" alt="2．フリマアプリやネットオークションに出品する。" class="u-img__max u-only__sp" loading="lazy">

								</figure>

							</div>
						</div>
						<div class="option__item05 pb2">
							<input id="acd-check3" class="acd-check3" type="checkbox">
							<label class="acd-label3" for="acd-check3">
								<div id="option02_btn" class="u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/button__red02@2x.png" alt="棚板を用意する" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								</div>
								<div id="option02_btn_sp" class="u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/button__red02-sp@2x.png" style="" alt="棚板を用意する" class="u-img__max u-only__sp center acd_btn" loading="lazy">
								</div>
							</label>
							<div class="acd-content3">
								<div class="acdcontent__flex sumai10__acdcontent-flex">
									<div class="w50">
										<figure class="u-fig">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/option-img02@2x.jpg" alt="本体カバー" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
										</figure>
									</div>
									<div class="w50">
										<p class="mt0 mb_sp">「ダボ穴がないクローゼットだから棚板を増やせない」とあきらめていませんか？ 実は棚板を増やしたいところの両サイドに同じ高さの板を立て、その上に板をわたせば棚板は増やせます。ほかにも、棚板代わりに仕切りを作るフリーラックを置いたり、収納ケースやファイルボックスなどを使ってクローゼット内のスペースを有効活用しましょう。</p>
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/option-img02-sp@2x.jpg" alt="本体カバー" class="u-img__max u-only__sp" loading="lazy">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section>
					<div class="sumai09section01__flex mb6 u-only__pc">
						<div class="w35">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/sumaister__mryamazaki01@2x.jpg" alt="株式会社フォリス 商品企画部 新規事業課 山﨑 大介" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="w65 sumai05__balloon02 sumai10__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon02_01@2x.png" alt="棚板を増やしたり、収納グッズを使うことで、使いきれていなかったスペースを上手に活用することができますよ！システム収納のオプションパーツはたくさんあります。いろいろ組み合わせて、自分好みで使い勝手のよい収納を作りましょう。" class="u-img__max u-only__pc" loading="lazy">
							<div class="balloon02-btn">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon02_02@2x.png" alt="" class="u-img__max u-only__pc balloon02-btn__item01" loading="lazy">
								<a href="https://e-suteki.haseko.jp/storages/system-foris-index.html?utm_source=brc_sos_vol10&utm_medium=web&utm_campaign=system_foris_index" target="_blank" class="balloon02-btn__item02 u-only__pc" data-ga-click="sos10_03">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon02_03@2x.png" alt="詳しくはこちら" class="u-img__max u-only__pc" loading="lazy">
								</a>

							</div>
						</div>
					</div>
					<div class="sumai05section01 mb6 u-only__sp">
						<div class="w65 sumai05__balloon02 sumai10__balloon02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon02_01-sp@2x.png" alt="棚板を増やしたり、収納グッズを使うことで、使いきれていなかったスペースを上手に活用することができますよ！システム収納のオプションパーツはたくさんあります。いろいろ組み合わせて、自分好みで使い勝手のよい収納を作りましょう。" class="u-img__max u-only__sp" loading="lazy">
							<div class="balloon02-btn">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon02_02-sp@2x.png" alt="" class="u-img__max u-only__sp balloon02-btn__item01" loading="lazy">
								<a href="https://e-suteki.haseko.jp/storages/system-foris-index.html?utm_source=brc_sos_vol10&utm_medium=web&utm_campaign=system_foris_index" target="_blank" class="balloon02-btn__item02 u-only__sp" data-ga-click="sos10_03">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/balloon02_03-sp@2x.png" alt="詳しくはこちら" class="u-img__max u-only__sp" loading="lazy">
								</a>

							</div>
						</div>
						<div class="sumai10__balloon02_sp">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/sumaister__mryamazaki01-sp@2x.png" alt="株式会社フォリス 商品企画部 新規事業課 山﨑 大介" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</section>
				<section class="mb6">
					<div class="point">
						<div class="point__item01 sumai10__point1 mb4 mb3_sp">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/point1@2x.png" alt="【まずはお片付けの３つの手順を再確認しよう！】片付けの基本は ①整理 ②整頓 ③収納の3スキル。洋服を例にすると、①整理：着ない洋服などをまず手放す②整頓：たたんだりハンガーに掛ける③収納：小分けのカゴを入れるなどの工夫をする①②③のスキルを磨いて、モノをしまいやすく取り出しやすくしましょう。" class="u-img__max sumai10__point1_01 u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/point1-sp@2x.png" alt="【まずはお片付けの３つの手順を再確認しよう！】片付けの基本は ①整理 ②整頓 ③収納の3スキル。洋服を例にすると、①整理：着ない洋服などをまず手放す②整頓：たたんだりハンガーに掛ける③収納：小分けのカゴを入れるなどの工夫をする①②③のスキルを磨いて、モノをしまいやすく取り出しやすくしましょう。" class="u-img__max sumai10__point1_01 u-only__sp center" style="max-width:90%;" loading="lazy">
						</div>
						<div class="point__item02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/point2@2x.jpg" alt="【奥行を上手に使う】奥行のあるクローゼットの場合、無計画に詰め込むと奥のモノが取り出しにくくなります。引き出しやバスケットを使うのも手ですが、「手前側」と「奥側」にスペースを分けて考えるのもひとつの方法です。たとえば、高さのあるモノは奥側に、手前に背の低いもの収納すれば、奥にしまっているモノが見やすいですよね。また、奥行きの浅い棚板を奥に設置し小物を収納。手前側には長尺のものを収納すれば、空間をムダなく使えますよ。" class="u-img__max center u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/point2-sp@2x.jpg" alt="【奥行を上手に使う】奥行のあるクローゼットの場合、無計画に詰め込むと奥のモノが取り出しにくくなります。引き出しやバスケットを使うのも手ですが、「手前側」と「奥側」にスペースを分けて考えるのもひとつの方法です。たとえば、高さのあるモノは奥側に、手前に背の低いもの収納すれば、奥にしまっているモノが見やすいですよね。また、奥行きの浅い棚板を奥に設置し小物を収納。手前側には長尺のものを収納すれば、空間をムダなく使えますよ。" class="u-img__max center u-only__sp" style="max-width:90%;" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<div div class="mb6">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/tips@2x.png" alt="むかし嫁入り道具、いま造り付けシステム収納｜リ衣類を収納する「タンス」は今から330年ほど昔、江戸時代の寛文年間（1661～1673）に大阪で作られたのが起源といわれています。当時は上流階級の人しか持てず、庶民に普及したのは江戸末期。このころ、女の子が生まれると庭に桐の木を植え、嫁入りのころに職人に桐タンスを作らせる風習があったとか。明治以降、日本で着物に替わって洋服が着用されるようになり、洋服タンスが普及しました。日本式のタンスに、ハンガー掛けやネクタイ掛け、鏡などが加わったもので、日本におけるクローゼットの原型とされています。バブル景気のころまでは、桐タンスや洋服タンスが嫁入り道具の定番。その後、1990年代、マンションなど集合住宅の増加に伴い、備え付けタイプのクローゼット収納が増え、次第に、より広いウォークインクローゼットやアレンジのきくシステム収納が主流となっていったのです。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/tips-sp@2x.png" alt="リユースするだけで一石二鳥になる??｜おうちのモノをリユースすると、「おうちもスッキリ」、「地球温暖化防止にも役立つ」と実はいいことがたくさんありますね！" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</section>


				<section>
					<div class="sumeister05 u-only__pc">
						<div class="sumeister05__row">
							<div class="sumeister05__ttl">
								<div class="flex w75 under">
									<div class="sumeister05__badge">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__pc center" style="max-width:104px;" loading="lazy">
									</div>
									<p class="sumeister05__name"><ruby data-ruby="やまざき  だいすけ">山﨑 大介<rt> やまざき だいすけ</rt></ruby><br>株式会社フォリス<br>商品企画部 新規事業課</p>
								</div>
								<div class="sumeister05__img sumeister09__img w30">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/sumaister__mryamazaki02@2x.jpg" alt="山﨑 大介" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
								</div>
							</div>
							<p class="sumeister05__ex">1993年フォリスへ入社し、マンションの内装関連をメインに施工管理や商品開発などを行なってきました。自分で何かを作るのが好きなので、休日は仕事で得た知識も活かしながら、DIYで室内のリニューアルや家具のレストア（修理・再生）などをして楽しんでいます。</p>
						</div>
					</div>
		</div>
		<div class="sumeister05 u-only__sp">
			<div class="sumeister05__row">
				<div class="sumeister05__ttl">
					<div class="flex w50 under">
						<div class="sumeister05__badge">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_06/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__sp" style="max-width:80px;" loading="lazy">
						</div>
						<p class="sumeister05__name"><ruby data-ruby="やまざき  だいすけ">山﨑 大介<rt> やまざき だいすけ</rt></ruby><br>株式会社フォリス<br>商品企画部 新規事業課</p>
					</div>
					<div class="sumeister05__img sumeister09__img w50">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_10/sumaister__mryamazaki02-sp@2x.jpg" alt="山﨑 大介" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
				<p class="sumeister05__ex">1993年フォリスへ入社し、マンションの内装関連をメインに施工管理や商品開発などを行ってきました。自分で何かを作るのが好きなので、休日は仕事で得た知識も活かしながら、DIYで室内のリニューアルや家具のレストア（修理・再生）などをして楽しんでいます。</p>
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
