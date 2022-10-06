<?php
//base
include("../../function.php");
$content = get_id_data('26005');
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
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/main-v@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:896px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/main-v-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="main__item sumai05__wrapper">
			<section>
				<div class="sumai05info section_mb">
					<div class="sumai05info__row mb5">
						<h3 class="sumai05info__ttl">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/header__top@2x.jpg" alt="可愛いペットに家の中を自由に歩き回らせてあげたい！ごめんね。部屋から部屋へ自由に歩き回りたいよね。でもエアコンつけてドアを開けっぱなしにしておくと光熱費が大変！なんとかなりませんか？" class="u-img__max u-only__pc center" style="max-width:791px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/header__top-sp@2x.jpg" alt="可愛いペットに家の中を自由に歩き回らせてあげたい！ごめんね。部屋から部屋へ自由に歩き回りたいよね。でもエアコンつけてドアを開けっぱなしにしておくと光熱費が大変！なんとかなりませんか？" class="u-img__max u-only__sp" loading="lazy">
						</h3>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion01 section01">
				<div class="section01__row mb4">
					<div class="mb6 center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/ttl_01@2x.jpg" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__pc center" style="max-width:540px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/ttl_01-sp@2x.jpg" alt="住まいスターさん、教えてください！！" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>

				<div class="sumai05section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumaister__gozumichiko01@2x.jpg" alt="牛頭 路子 長谷工リフォーム横浜店副店長 愛犬家住宅コーディネーター" class="u-img__max u-only__pc" loading="lazy">
						<div class="center u-font__bold sumeister_ex u-only__pc">
							<p class="sumeister_ex01">長谷工リフォーム<br>愛犬家住宅コーディネーター</p>
							<ruby data-ruby="ごず みちこ">牛頭 路子<rt> ご ず みちこ</rt></ruby>
						</div>
					</div>
					<div class="w65 sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/balloon__01@2x.png" alt="そうですよね。ペットも飼い主さまも共にハッピーになる解決策を考えましょう。実は、行動が制限されるとペットもストレスが溜まるんです。でもエアコンが効かない、音が漏れるなど、各部屋のドアを開けっ放しにするのは抵抗ありますよね。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumai05__balloon02-sp@2x.png" alt="そうですよね。ペットも飼い主さまも共にハッピーになる解決策を考えましょう。実は、行動が制限されるとペットもストレスが溜まるんです。でもエアコンが効かない、音が漏れるなど、各部屋のドアを開けっ放しにするのは抵抗ありますよね。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai05__balloon02_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumaister__gozumichiko01-sp@2x.png" alt="牛頭 路子 長谷工リフォーム横浜店副店長 愛犬家住宅コーディネーター" class="u-img__max u-only__sp" style="max-width:137px;" loading="lazy">
						</div>
						<div class="u-font__bold sumeister_ex">
							<p class="sumeister_ex01 center">長谷工リフォーム<br>愛犬家住宅コーディネーター</p>
							<ruby data-ruby="ごず みちこ">牛頭 路子<rt> ご ず みちこ</rt></ruby>
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai05__setion02">
				<h5 class="setion__ttl01 center mb4">そんな時、役に立つのがコレです。</h5>
				<h4 class="setion__ttl02 mb4">ペットのお気に入りの動線にそって･･･<br class="u-only__sp"><span class="marker">各部屋に</span></h4>
				<div class="solution mb7">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__bg@2x.png" alt="solution" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img01-sp@2x.png" alt="solution" class="u-img__max u-only__sp" loading="lazy">
					<div class="flex solution__wrapper">
						<div class="w50 solution__item01">
							<div class="mt2 mb2">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img_01@2x.png" alt="solution" class="u-img__max u-only__pc center" style="max-width:148px;" loading="lazy">
							</div>
							<h4 class="setion__ttl03">ペットドアを設置する</h4>
						</div>
						<div div class="w50 solution__item02">
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img02@2x.png" alt="犬猫イメージ画像" class="u-img__max u-only__pc center" style="max-width:350px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img02-sp@2x.png" alt="犬猫イメージ画像" class="u-img__max u-only__sp" style="" loading="lazy">
							</div>
						</div>
					</div>
					<!--アコーディオンメニュー-->
					<div class="option__item03">
						<input id="acd-check" class="acd-check" type="checkbox">
						<label class="acd-label" for="acd-check">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__btn_01@2x.png" alt="ペットドアって何ですか？" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__btn01-sp@2x.png" alt="ペットドアって何ですか？" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content pb6">
							<p class="u-font__bold center mb4 acd__ttl u-font__palt">ドアが閉まっていても、<br class="u-only__sp">ペットが自由に部屋から部屋へ<br>移動できるペット専用のドアです。</p>
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img03@2x.png" alt="室内用ペットドアから出る猫" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img03-sp@2x.png" alt="室内用ペットドアから出る猫" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p class="acd__ttl_m center u-font__palt">ドアに設置する室内用ペットドア</p>
									<p>夜中にトイレに行きたくなった時や飼い主が留守の時などに便利。ドアは柔らかい素材を使用しているので、ペットを傷つける心配もありません。マグネットのドアストッパーが付いているのでピッタリ閉まります。</p>
								</div>
							</div>
							<div class="acdcontent__flex">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img04@2x.png" alt="間仕切り壁用ペットドア" class="u-img__max u-only__pc center" style="max-width:273px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/solution__img04-sp@2x.png" alt="間仕切り壁用ペットドア" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="w50">
									<p class="acd__ttl_m center">間仕切り壁用ペットドア</p>
									<p>壁で仕切られた空間にドアを付けます。<br>ドアを閉めておけるので、冷暖房効果が損なわれることがありません。くぐり戸がピッタリ閉まるマグネットストッパー付きです。</p>
									<div class="sumai05__link">
										<a href="https://www.haseko.co.jp/hrf/reform/special/dog_cat.html#anc-04" target="_blank" data-ga-click="sos05_03">
											<span>ペットドアについてはこちら</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div div class="mb3">
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/kansai_68.html" data-ga-click="sos05_01" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/btn_01@2x.png" alt="ペットと暮らすリフォーム事例〜愛猫たちと過ごすためのリビング" class="u-img__max u-only__pc center" style="max-width:541px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/btn_01-sp@2x.png" alt="ペットと暮らすリフォーム事例〜愛猫たちと過ごすためのリビング" class="u-img__max u-only__sp" loading="lazy">
					</a>
				</div>
				<div div class="mb7">
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/kansai_71.html" data-ga-click="sos05_02" target="_blank">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/btn_02@2x.png" alt="ペットと暮らすリフォーム事例〜キャットウォーク充実のセカンドハウス" class="u-img__max u-only__pc center" style="max-width:541px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/btn_02-sp@2x.png" alt="ペットと暮らすリフォーム事例〜キャットウォーク充実のセカンドハウス" class="u-img__max u-only__sp center" loading="lazy">
					</a>
				</div>

				<div class="option mb10 mb1_sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__img01@2x.png" alt="option" class="u-img__max u-only__pc center" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__img01-sp@2x.png" alt="option" class="u-img__max u-only__sp" loading="lazy">
					<h4 class="setion__ttl03 option__item01">工事不要で<br class="u-only__sp">ご自身で取り付け可能なアイテム</h4>
					<div class="option__item02">
						<input id="acd-check1" class="acd-check1" type="checkbox">
						<label class="acd-label1" for="acd-check1">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__btn_01@2x.png" alt="わんにゃんフリーパス" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__btn01-sp@2x.png" style="" alt="わんにゃんフリーパス" class="u-img__max u-only__sp center acd_btn" loading="lazy">
						</label>
						<div class="acd-content1">
							<div class="flex between">
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__img02@2x.png" alt="ドアにワイヤー取り付け金具を固定" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__img04-sp@2x.png" alt="ドアにワイヤー取り付け金具を固定" class="u-img__max u-only__sp mb1" loading="lazy">
								</div>
								<div class="w50">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__img03@2x.png" alt="ドアを押し開けるペット" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/option__img02-sp@2x.png" alt="ドアを押し開けるペット" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
							<p>ドア枠上部に本体を取り付け、ドアにワイヤー取り付け金具を固定し、本体からワイヤーを取り付け金具につなぐだけ。設置時間は約15分と簡単です。ドアが完全に閉まっていない状態ですが、隙間がなく空調には影響を与えません。ペットがドアを押して開ける方法とサポートアングルを使うパターンのどちらかを選べます。ドアはゆっくり閉まるので安全です。目立たないのでインテリアにこだわる方にもおすすめです。</p>
						</div>
					</div>
				</div>
				<div class="sumai05section01__flex mb6 u-only__pc">
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumaister__gozumichiko01@2x.jpg" alt="牛頭 路子 長谷工リフォーム横浜店副店長 愛犬家住宅コーディネーター" class="u-img__max u-only__pc" loading="lazy">
					</div>
					<div class="w65 sumai05__balloon03">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/balloon__02@2x.png" alt="飼い主さま同様、ペットも一人ひとり性格が違い、個性があります。ペットの習性とあわせて、飼い主さまはペットの性格や好みに十分気を付けて住環境を整えてあげることが大切です。" class="u-img__max u-only__pc" loading="lazy">
					</div>
				</div>
				<div class="sumai05section01 mb6 u-only__sp">
					<div class="sumai05__balloon03">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumai05__balloon03-sp@2x.png" alt="飼い主さま同様、ペットも一人ひとり性格が違い、個性があります。ペットの習性とあわせて、飼い主さまはペットの性格や好みに十分気を付けて住環境を整えてあげることが大切です。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="sumai05__balloon03_sp">
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumaister__gozumichiko01-sp@2x.png" alt="牛頭 路子 長谷工リフォーム横浜店副店長 愛犬家住宅コーディネーター" class="u-img__max u-only__sp" style="max-width:137px; margin-top:-100px;" loading="lazy">
						</div>
					</div>
				</div>
			</section>

			<section class="mb6">
				<h4 class="setion__ttl02 mb3"><span class="marker">次の点を考慮しましょう!</span></h4>
				<div class="point flex between">
					<div class="w50 point__item01 mb3_sp">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/point__img_01@2x.png" alt="ご自身で商品を選び、取り付けを行う場合は、ペットのことをよく理解し信頼できるメーカーの製品であることを確認しましょう。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/point__img_01-sp@2x.png" alt="ご自身で商品を選び、取り付けを行う場合は、ペットのことをよく理解し信頼できるメーカーの製品であることを確認しましょう。" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="w50 point__item02">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/point__img_02@2x.png" alt="扉や壁にペットドアを取り付ける際には、扉などの強度にも注意が必要なため専門家に相談しましょう。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/point__img_02-sp@2x.png" alt="扉や壁にペットドアを取り付ける際には、扉などの強度にも注意が必要なため専門家に相談しましょう。" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
			</section>
			<section>
				<div div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/tips__img01@2x.png" alt="ペットに関する豆知識鼻紋 犬や猫には人間の指紋のように鼻紋という個別認証できる鼻の模様があり、一生変わらないそうです。最近では鼻紋のデータベースを作って色々な分野に役立てる動きも出ています。飼い主さまにとってはどの子もこの世界ではたった1つの鼻紋をもっているという事実！を想うと、家族の一員である犬や猫がさらに愛おしくなるのではないでしょうか。" class="u-img__max u-only__pc center" style="max-width:641px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/tips__img01-sp@2x.png" alt="ペットに関する豆知識鼻紋 犬や猫には人間の指紋のように鼻紋という個別認証できる鼻の模様があり、一生変わらないそうです。最近では鼻紋のデータベースを作って色々な分野に役立てる動きも出ています。飼い主さまにとってはどの子もこの世界ではたった1つの鼻紋をもっているという事実！を想うと、家族の一員である犬や猫がさらに愛おしくなるのではないでしょうか。" class="u-img__max u-only__sp" loading="lazy">
				</div>
			</section>
			<section>
				<div class="sumeister05 u-only__pc">
					<div class="sumeister05__row">
						<div class="u-clearfix">
							<figure class="u-float__right">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumaister__gozumichiko02@2x.jpg" alt="牛頭 路子" class="u-img__max u-only__pc" style="max-width:180px;" loading="lazy">
							</figure>
							<div class="flex under">
								<div class="sumeister05__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__pc center" style="max-width:104px;" loading="lazy">
								</div>
								<p class="sumeister05__name mb2"><ruby data-ruby="ご ず   みち こ">牛頭 路子<rt>ご ず みち こ</rt></ruby><br>長谷工リフォーム横浜店　副店長<br>愛犬家住宅コーディネーター</p>
							</div>
							<p class="sumeister05__ex">2011年長谷工リフォームへ入社し、お客さまのこだわりを数多く実現してきたリフォームのスペシャリスト。<br>『その人らしく、その子らしく』をモットーに、人にもペットにも寄り添った住まいの提案を心がけている。現在はロングコートチワワ（11才女の子）との暮らしを楽しみ、うさぎ4匹と暮らしていたことも。<br>ペットを愛するご家族の思いを住まいづくりに生かすことを得意としている。</p>
						</div>
					</div>
				</div>
				<div class="sumeister05 u-only__sp">
					<div class="sumeister05__row">
						<div class="sumeister05__ttl">
							<div class="flex w50 under">
								<div class="sumeister05__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/meisterbadge@2x.png" alt="住まいスターバッチ" class="u-img__max u-only__sp" style="max-width:80px;" loading="lazy">
								</div>
								<p class="sumeister05__name"><ruby data-ruby="ご ず   みち こ">牛頭 路子<rt>ご ず みち こ</rt></ruby><br>長谷工リフォーム横浜店　副店長<br>愛犬家住宅コーディネーター</p>
							</div>
							<div class="sumeister05__img w50">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_05/sumaister__gozumichiko02-sp@2x.jpg" alt="牛頭 路子" class="u-img__max u-only__sp" loading="lazy">
							</div>
						</div>
						<p class="sumeister05__ex">2011年長谷工リフォームへ入社し、お客さまのこだわりを数多く実現してきたリフォームのスペシャリスト。<br>『その人らしく、その子らしく』をモットーに、人にもペットにも寄り添った住まいの提案を心がけている。現在はロングコートチワワ（11才女の子）との暮らしを楽しみ、うさぎ4匹と暮らしていたことも。<br>ペットを愛するご家族の思いを住まいづくりに生かすことを得意としている。</p>
					</div>
				</div>
			</section>

			<section class="main__item sumai04__section02 section02">
				<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_sumai.php") ?>
			</section>
		</div>
		<div class="mb3">
			<?php $CmGtmId = "";
			include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php");
			?>
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
