<?php
//base
include("../../function.php");
$content = get_id_data('26007');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai07";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month = "4";
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
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/main-v@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:896px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/main-v-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="main__item sumai07__wrapper">
			<section>
				<div class="sumai07info section_mb">
					<div class="sumai07info__row mb5">
						<h3 class="sumai07info__ttl">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/header__top@2x.jpg" alt="うちの子、うれしさのあまりよく走り回るのですが、フローリングって滑りますよね？関節や骨に影響があると聞いたことがあって心配です。ペットにやさしい床ってありますか？" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/header__top-sp@2x.jpg" alt="うちの子、うれしさのあまりよく走り回るのですが、フローリングって滑りますよね？関節や骨に影響があると聞いたことがあって心配です。ペットにやさしい床ってありますか？" class="u-img__max u-only__sp" loading="lazy">
						</h3>
					</div>
				</div>
			</section>
			<section classs="sumai07__setion01 section01">
				<div class="section01__row mb4">
					<div class="mb6 center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/title_01@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__pc center" style="max-width:540px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/title_01-sp@2x.png" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>

				<div class="sumai07section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/sumaister__gozumichiko01@2x.jpg" alt="牛頭 路子 長谷工リフォーム横浜店副店長 愛犬家住宅コーディネーター" class="u-img__max u-only__pc" loading="lazy">
						<div class="center u-font__bold sumeister_ex u-only__pc">
							<p class="sumeister_ex01">長谷工リフォーム<br>愛犬家住宅コーディネーター</p>
							<ruby data-ruby="ごず みちこ">牛頭 路子<rt> ご ず みちこ</rt></ruby>
						</div>
					</div>
					<div class="w65 sumai07__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/balloon__01@2x.png" alt="フローリングの床って滑りやすいんです。遊びに夢中の時は思いきりダッシュして足が空回りすることも。これってペットの足腰にとても負担がかかっているんです。ペットと暮らす方からのご相談で一番多いのは「フローリング」のこと。安全で快適に暮らせる工夫をしてあげたいですよね。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai07section01 mb6 u-only__sp">
					<div class="sumai07__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/balloon__01-sp@2x.png" alt="フローリングの床って滑りやすいんです。遊びに夢中の時は思いきりダッシュして足が空回りすることも。これってペットの足腰にとても負担がかかっているんです。ペットと暮らす方からのご相談で一番多いのは「フローリング」のこと。安全で快適に暮らせる工夫をしてあげたいですよね。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai07__balloon02_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/sumaister__gozumichiko01-sp@2x.png" alt="牛頭 路子 長谷工リフォーム横浜店副店長 愛犬家住宅コーディネーター" class="u-img__max u-only__sp" style="max-width:137px;" loading="lazy">
						</div>
						<div class="u-font__bold sumeister_ex">
							<p class="sumeister_ex01 center">長谷工リフォーム<br>愛犬家住宅コーディネーター</p>
							<ruby data-ruby="ごず みちこ">牛頭 路子<rt> ご ず みちこ</rt></ruby>
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai07__setion02">
				<h5 class="setion__ttl01 center mb4">そんな時、役に立つのがコレです。</h5>
				<h4 class="section__ttl02 mb4">ペットが滑りにくいだけでなく、<br>お手入れもしやすい素材へ</h4>
				<div class="solution mb7">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution_01@2x.jpg" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution_01-sp@2x.jpg" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="section__ttl04 u-font__palt mt2_sp">ペット対応フローリングを検討する</h4>
					<!--アコーディオンメニュー-->
					<div class="sumai07_option__item03">
						<input id="acd-check01" class="acd-check01" type="checkbox">
						<label class="acd-label01" for="acd-check01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution_03@2x.png" alt="ペット対応フローリングって何ですか？" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution_03-sp@2x.png" alt="ペット対応フローリングって何ですか？" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content01">
							<p class="u-font__bold center mb4 acd__ttl u-font__palt">ペットが滑りにくい加工をした<br class="u-only__sp">フローリングです。<br>お部屋に合わせて色も選べ、<br class="u-only__sp">お手入れも簡単！</p>
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution04@2x.jpg" alt="この床歩きやすい！" class="u-img__max u-only__pc center" style="max-width:274px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution04-sp@2x.jpg" alt="この床歩きやすい！" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p class="u-font__palt mb4 mt0">ペットが滑りにくく、歩行時の沈み込み感にも配慮し、快適に歩行できるよう表面仕上げを施してあるフローリングです。天然木に比べてペットの引っかき傷や尿、吐き戻しなどにも強く、お掃除がラクラク！</p>
									<div class="sumai07__link">
										<a href="https://www.haseko.co.jp/hrf/reform/special/dog_cat.html#anc-01" target="_blank" data-ga-click="sos07_01">
											<span>ペット対応フローリングについてはこちら</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div div class="mt8 mb7 sumai06_btn u-only__pc">
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/post_38.html" data-ga-click="sos07_02" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution_04@2x.jpg" alt="ペットにもうれしいリフォーム" class="u-img__max center sumai06_btnitem" style="max-width:541px;" loading="lazy">
					</a>
				</div>
				<div div class="mb5_sp sumai06_btn u-only__sp">
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/post_38.html" data-ga-click="sos07_02" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/solution_04-sp@2x.jpg" alt="ペットにもうれしいリフォーム" class="u-img__max u-only__sp sumai06_btnitem" loading="lazy">
					</a>
				</div>

				<div class="option mb8 mb6_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option01@2x.jpg" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option01-sp@2x.jpg" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="section__ttl03 option__item01 mt2_sp">床に手を加えて、<br>ペットにやさしいお部屋に</h4>
					<div style="background-color:#fdeceb;">
						<div class="option__item04 mb5">
							<input id="acd-check2" class="acd-check2" type="checkbox">
							<label class="acd-label2" for="acd-check2">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option03@2x.png" alt="フロアコーティング" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option03-sp@2x.png" style="" alt="フロアコーティング" class="u-img__max u-only__sp center acd_btn" loading="lazy">
							</label>
							<div class="acd-content2">
								<div class="acdcontent__flex">
									<div class="w50">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option05@2x.jpg" alt="フロアコーティングボールで遊ぶ犬" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option05-sp@2x.jpg" alt="フロアコーティングボールで遊ぶ犬" class="u-img__max u-only__sp" loading="lazy">
									</div>
									<div class="w50">
										<p class="mt0">フロアコーティングにはたくさん種類があり、滑りにくい、傷が付きにくいなどペットと飼い主さまにうれしいメリットがあります。けれど一方で、グリップ性が強く逆にペットが歩きにくくなってしまうことも。<br>また舐めてアレルギー症状を起こしてしまったということもありますので注意が必要です。ペット専用のフロアコーティングもありますよ。</p>
									</div>
								</div>
							</div>
						</div>
						<div class="option__item05">
							<input id="acd-check3" class="acd-check3" type="checkbox">
							<label class="acd-label3" for="acd-check3">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option04@2x.png" alt="タイルカーペット" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option04-sp@2x.png" style="" alt="タイルカーペット" class="u-img__max u-only__sp center acd_btn" loading="lazy">
							</label>
							<div class="acd-content3">
								<div class="acdcontent__flex">
									<div class="w50">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option06@2x.jpg" alt="タイルカーペット" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/option06-sp@2x.jpg" alt="タイルカーペット" class="u-img__max u-only__sp" loading="lazy">
									</div>
									<div class="w50">
										<p class="mt0">フローリングの上に敷くだけ！ 汚れたら簡単に取り替えもできるので便利です。ペットの動線やリラックススペースなど、必要な所だけの利用もできますよね。色やデザインも豊富なので、お部屋の雰囲気に合わせて選んでみてはいかがでしょうか？ コルクマットもおススメです。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sumai07section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/sumaister__gozumichiko01@2x.jpg" alt="住まいスター 牛頭 路子" class="u-img__max u-only__pc" loading="lazy">
					</div>
					<div class="w65 sumai07__balloon03">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/balloon__02@2x.png" alt="ペットは飼い主さまが喜んでいるとうれしくて、機嫌が悪いと憂鬱になるんです。ペットが安全に心地よく過ごせ、しかも飼い主さまは素敵なインテリアに満足...私たちがペットのためのリフォームを考えるとき、このふたつの調和を大切にしています。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai07section01 mb6 u-only__sp">
					<div class="sumai07__balloon03">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/balloon__02-sp@2x.png" alt="ペットは飼い主さまが喜んでいるとうれしくて、機嫌が悪いと憂鬱になるんです。ペットが安全に心地よく過ごせ、しかも飼い主さまは素敵なインテリアに満足...私たちがペットのためのリフォームを考えるとき、このふたつの調和を大切にしています。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai07__balloon03_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/sumaister__gozumichiko01-sp@2x.png" alt="住まいスター 牛頭 路子" class="u-img__max u-only__sp" style="max-width:137px; margin-top:-100px;" loading="lazy">
						</div>
					</div>
				</div>
			</section>

			<section class="mb6">
				<div class="point flex between">
					<div class="w50 point__item01 mb3_sp">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/point_01@2x.jpg" alt="【ペットのケアも大切】ペット対応フローリングでも使い方により、滑る場合があります。こまめなお掃除と、足裏の毛をカットするなどペットのケアもしてあげましょう。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/point_01-sp@2x.jpg" alt="【ペットのケアも大切】ペット対応フローリングでも使い方により、滑る場合があります。こまめなお掃除と、足裏の毛をカットするなどペットのケアもしてあげましょう。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="w50 point__item02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/point_02@2x.jpg" alt="【ペットのリフォーム適齢期】工事中の音やニオイ、リフォーム後の環境の変化がストレスになる場合も。全てを一度にせずに分ける方法もあります。10歳をすぎたくらいのペットは、状態をよく見てあげてください。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/point_02-sp@2x.jpg" alt="【ペットのリフォーム適齢期】工事中の音やニオイ、リフォーム後の環境の変化がストレスになる場合も。全てを一度にせずに分ける方法もあります。10歳をすぎたくらいのペットは、状態をよく見てあげてください。" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
			</section>
			<section>
				<div div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/mamechishiki@2x.png" alt="犬にも猫にも、ぷにぷにとかわいい肉球が足の先にあります。脂肪と線維でできていて、歩く時の衝撃を吸収する...という話は、ペット好きならご存知かもしれません。その肉球、汗をかかないとされている犬や猫でも、汗をかく部位なのです。体温調整や乾燥予防のためとのことですが、緊張や恐怖を感じた時も肉球が湿ることがあるそうです。人間の手のひらと一緒ですね。そんなペットの様子に気付いたらやさしくしてあげましょう。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/mamechishiki-sp@2x.png" alt="犬にも猫にも、ぷにぷにとかわいい肉球が足の先にあります。脂肪と線維でできていて、歩く時の衝撃を吸収する...という話は、ペット好きならご存知かもしれません。その肉球、汗をかかないとされている犬や猫でも、汗をかく部位なのです。体温調整や乾燥予防のためとのことですが、緊張や恐怖を感じた時も肉球が湿ることがあるそうです。人間の手のひらと一緒ですね。そんなペットの様子に気付いたらやさしくしてあげましょう。" class="u-img__max u-only__sp" loading="lazy">
				</div>
			</section>
			<section>
				<div class="sumeister07 u-only__pc">
					<div class="sumeister07__row">
						<div class="u-clearfix">
							<figure class="u-float__right">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/sumaister__gozumichiko02@2x.jpg" alt="牛頭 路子" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
							</figure>
							<div class="flex under">
								<div class="sumeister07__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__pc center" style="max-width:104px;" loading="lazy">
								</div>
								<p class="sumeister07__name mb2"><ruby data-ruby="ご ず   みち こ">牛頭 路子<rt>ご ず みち こ</rt></ruby><br>長谷工リフォーム横浜店　副店長<br>愛犬家住宅コーディネーター</p>
							</div>
							<p class="sumeister07__ex">2011年長谷工リフォームへ入社し、お客さまのこだわりを数多く実現してきたリフォームのスペシャリスト。<br>『その人らしく、その子らしく』をモットーに、人にもペットにも寄り添った住まいの提案を心がけている。現在はロングコートチワワ（11才女の子）との暮らしを楽しみ、うさぎ4匹と暮らしていたことも。<br>ペットを愛するご家族の思いを住まいづくりに生かすことを得意としている。</p>
						</div>
					</div>
				</div>

				<div class="sumeister07 u-only__sp">
					<div class="sumeister07__row">
						<div class="sumeister07__ttl">
							<div class="flex w50 under">
								<div class="sumeister07__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__sp" style="max-width:80px;" loading="lazy">
								</div>
								<p class="sumeister07__name"><ruby data-ruby="ご ず   みち こ">牛頭 路子<rt>ご ず みち こ</rt></ruby><br>長谷工リフォーム横浜店　副店長<br>愛犬家住宅コーディネーター</p>
							</div>
							<div class="sumeister07__img w50">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_07/sumaister__gozumichiko02-sp@2x.jpg" alt="牛頭 路子" class="u-img__max u-only__sp" loading="lazy">
							</div>
						</div>
						<p class="sumeister07__ex">2011年長谷工リフォームへ入社し、お客さまのこだわりを数多く実現してきたリフォームのスペシャリスト。<br>『その人らしく、その子らしく』をモットーに、人にもペットにも寄り添った住まいの提案を心がけている。現在はロングコートチワワ（11才女の子）との暮らしを楽しみ、うさぎ4匹と暮らしていたことも。<br>ペットを愛するご家族の思いを住まいづくりに生かすことを得意としている。</p>
					</div>
				</div>
			</section>

			<div class="main__item">
				<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_sumai.php") ?>
			</div>
			<!--<div class="mt8 mt3_sp mb2_sp">
				<mitsuketa-banner point-id="MitMagSumaiSos06D20220401" img-url="<?php echo $img_url; ?>" login-url="<?php echo $login_url; ?>" :login-status="<?php echo $ssoFlag; ?>"></mitsuketa-banner>
			</div>-->
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
