<?php
//base
include("../../function.php");
$content = get_id_data('26002');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article foris";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2021";
$release_month = "2";
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
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header__ttl@2x.png" alt="" class="u-img__max u-only__pc center" style="max-width:897px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header__ttl-sp@2x.png" alt="" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="main__wrapper foris__wrapper">
			<section class="main__item">
				<div>
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header_ttl001@2x.png" class="u-only__pc u-img__max center" style="max-width:748px" alt="玄関がゴチャついて悩んでいます！大阪府在住　佐藤さん">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header_ttl001-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:374px" alt="玄関がゴチャついて悩んでいます！大阪府在住　佐藤さん">
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header_ttl002@2x.png" class="u-only__pc u-img__max center" style="max-width:748px" alt="結婚を機に購入したマンションの玄関に、小学生の息子２人の靴がいつも脱ぎっぱなし。見るたびに、小さなストレスが溜まって疲労感に･･･。住まいスターさん、なにかいい方法、ありませんか？">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header_ttl002-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:374px" alt="結婚を機に購入したマンションの玄関に、小学生の息子２人の靴がいつも脱ぎっぱなし。見るたびに、小さなストレスが溜まって疲労感に･･･。住まいスターさん、なにかいい方法、ありませんか？">
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header_ttl003@2x.png" class="u-only__pc u-img__max center" style="max-width:748px" alt="玄関がゴチャついて悩んでいます！大阪府在住　佐藤さん">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/header_ttl003-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:374px" alt="玄関がゴチャついて悩んでいます！大阪府在住　佐藤さん">
				</div>
				<div class="foris__meister forismeister relative mb4">
					<div class="forismeister__row">
						<h2 class="center mb3 relative">わかりました！<br>インテリア住まいスターを派遣いたします！
							<div class="ttl_position__right">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__01@2x.png" class="u-only__pc u-img__max center" style="max-width:37px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:25px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
							</div>
						</h2>
						<div class="flex">
							<div class="mb3 w60">
								<div class="flex_forismeister u-only__pc">
									<div>
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/meister-img__01@2x.png" class="u-only__pc u-img__max left" style="max-width:133px" alt="今回の住まいスター">
									</div>
									<div class="mt3">
										<small class="left u-only__pc">インテリアコーディネーター<br>プロダクトデザイナー</small>
										<h3 class="u-only__pc">川上 ユキ先生</h3>
									</div>
								</div>
								<!--SP今回の住まいスター-->
								<div class="flex_voice">
									<div class="w50">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/meister-img__01-sp@2x.png" class="u-only__sp u-img__max left" style="max-width:82px" alt="今回の住まいスター">
										<small class="left u-only__sp">インテリアコーディネーター<br>プロダクトデザイナー</small>
										<h3 class="u-only__sp">川上 ユキ先生</h3>
									</div>
									<div class="w50">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/meister-img__02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:125px" alt="インテリアコーディネータープロダクトデザイナー川上 ユキ先生">
									</div>
								</div>
								<p class="meister_txt">住宅関連企業で家具や住宅などの商品開発、デザインコンサルタントを行う傍ら、インテリア・収納の講師として女性誌を中心に、新聞やテレビなど含め幅広く活躍。デザイナーとしての実践的な生活提案には定評がある。主な著書に『ふだんの部屋にちょっと手を入れたらステキになりました』『心とカラダがやすまる暮らし図鑑』『収め、納める。』『カエテミル』など。わかりやすい内容とセンスのよい提案から海外翻訳本も多数。</p>
							</div>
							<div class="mt4 w40">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/meister-img__02@2x.png" class="u-only__pc u-img__max center" style="max-width:574px" alt="ンテリアコーディネータープロダクトデザイナー川上 ユキ先生">
							</div>
						</div>
						<p class="meister_txt1">川上 ユキHP<a href="http://www.kawakami-yuki.com">http://www.kawakami-yuki.com</a><br class="u-only__sp">※本ページの収納イラスト ©︎ 2021 yuki kawakami</p>
					</div>
					<div class="forismeister__bg1">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/back_forismeister@2x.png" class="u-only__pc u-img__max center" style="max-width:626px" alt="かなわん">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/back_forismeister-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:313px" alt="かなわん">
					</div>
				</div>

				<div class="flex_voice mb4">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__01@2x.png" class="u-only__pc u-img__max center" style="max-width:126px" alt="かなわん">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="かなわん">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_01@2x.png" class="u-only__pc u-img__max center" style="max-width:459px" alt="スッキリした玄関にならなくて困っています。息子たちは靴を脱ぎっぱなしだし...。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="スッキリした玄関にならなくて困っています。息子たちは靴を脱ぎっぱなしだし">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_02@2x.png" class="u-only__pc u-img__max center" style="max-width:458px" alt="なるほど。玄関は、家族はもちろん、訪れた方にも見える場所なので、「しまう」と「きれい」の両立が大事なんです。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="なるほど。玄関は、家族はもちろん、訪れた方にも見える場所なので、「しまう」と「きれい」の両立が大事なんです。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__02@2x.png" class="u-only__pc u-img__max center" style="max-width:126px" alt="なるほど。玄関は、家族はもちろん、訪れた方にも見える場所なので、「しまう」と「きれい」の両立が大事なんです。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="なるほど。玄関は、家族はもちろん、訪れた方にも見える場所なので、「しまう」と「きれい」の両立が大事なんです。">
					</div>
				</div>
				<div class="flex_voice mb6">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_03@2x.png" class="u-only__pc u-img__max center" style="max-width:323px" alt="ご自宅の玄関は、どのような問題がありますか？">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_03-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="ご自宅の玄関は、どのような問題がありますか？">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__03@2x.png" class="u-only__pc u-img__max center" style="max-width:126px" alt="ご自宅の玄関は、どのような問題がありますか？">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__03-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="ご自宅の玄関は、どのような問題がありますか？">
					</div>
				</div>
				<div class="flex_sumai2 mb6">
					<a href="#typea" data-scroll>
						<div class="relative">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/type__img01@2x.png" class="u-only__pc u-img__max center" style="max-width:238px" alt="靴が散乱">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/type__img01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:232px" alt="靴が散乱">
							<div class="ttl_position">
								<p class="txt_blue__type center ttl_position_type"><span class="marker">靴が散乱</span></p>
							</div>
						</div>
					</a>
					<a href="#typeb" data-scroll>
						<div class="relative">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/type__img02@2x.png" class="u-only__pc u-img__max center" style="max-width:238px" alt="靴が散乱">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/type__img02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:232px" alt="靴が散乱">
							<div class="ttl_position">
								<p class="txt_blue__type center ttl_position_type"><span class="marker">外で使う<br class="u-only__pc">おもちゃが目立つ</span></p>
							</div>
						</div>
					</a>
					<a href="#typec" data-scroll>
						<div class="relative">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/type__img03@2x.png" class="u-only__pc u-img__max center" style="max-width:238px" alt="靴が散乱">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/type__img03-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:232px" alt="靴が散乱">
							<div class="ttl_position">
								<p class="txt_blue__type center ttl_position_type"><span class="marker">色々なものが<br class="u-only__pc">散らかっている</span></p>
							</div>
						</div>
					</a>
				</div>
				<div class="flex_voice mb4">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__04@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="ぜんぶ当てはまるわ！先生、どうしましょう。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__04-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="ぜんぶ当てはまるわ！先生、どうしましょう。">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_04@2x.png" class="u-only__pc u-img__max center" style="max-width:324px" alt="ぜんぶ当てはまるわ！先生、どうしましょう。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_04-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="ぜんぶ当てはまるわ！先生、どうしましょう。">
					</div>
				</div>
				<div class="flex_voice mb10">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_05@2x.png" class="u-only__pc u-img__max center" style="max-width:458px" alt="大丈夫。玄関が散らかるのは、「しまいづらいモノ」「入らないモノ」があるからです。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_05-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="大丈夫。玄関が散らかるのは、「しまいづらいモノ」「入らないモノ」があるからです。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__05@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="大丈夫。玄関が散らかるのは、「しまいづらいモノ」「入らないモノ」があるからです。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__05-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="大丈夫。玄関が散らかるのは、「しまいづらいモノ」「入らないモノ」があるからです。">
					</div>
				</div>
				<div class="relative">
					<h2 class="center">「しまう」と「きれい」を両立させた<br class="u-only__sp">自慢の玄関</h2>
					<h4 class="center mb1">～インテリア住まいスターが教える、<br class="u-only__sp">美しくて快適な玄関デザイン～</h4>
					<div class="ttl_position__right">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__01@2x.png" class="u-only__pc u-img__max center" style="max-width:37px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:25px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
					</div>
				</div>
				<div class="mb3">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__02@2x.png" class="u-only__pc u-img__max center" style="max-width:742px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:638px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
				</div>
				<div class="point mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img000@2x.png" class="u-only__pc u-img__max center" style="max-width:746px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img000-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:610px" alt="「しまう」と「きれい」を両立させた自慢の玄関">
				</div>
				<div class="flex_voice mb8">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__06@2x.png" class="u-only__pc u-img__max center" style="max-width:92px" alt="なるほど！「しまう」と「きれい」の両立が大事なんですね。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__06-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="なるほど！「しまう」と「きれい」の両立が大事なんですね。">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_06@2x.png" class="u-only__pc u-img__max center" style="max-width:459px" alt="なるほど！「しまう」と「きれい」の両立が大事なんですね。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_06-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="なるほど！「しまう」と「きれい」の両立が大事なんですね。">
					</div>
				</div>
				<div class="relative u-only__pc">
					<h3 class="sec02_ttl-h3 mb2">「しまう」と「きれい」が両立していない例</h3>
					<div class="ttl_position__right2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__04@2x.png" class="u-only__pc u-img__max center" style="max-width:142px" alt="「しまう」と「きれい」が両立していない例">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img04-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:70px" alt="「しまう」と「きれい」が両立していない例">
					</div>
					<div class="ttl_position__left">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__03@2x.png" class="u-only__pc u-img__max center" style="max-width:105px" alt="「しまう」と「きれい」が両立していない例">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__03-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:43px" alt="「しまう」と「きれい」が両立していない例">
					</div>
				</div>
				<div class="u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01_ttl01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:640px" alt="「しまう」と「きれい」が両立していない例">
				</div>
				<div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img05@2x.png" class="u-only__pc u-img__max center" style="max-width:725px" alt="「しまう」と「きれい」が両立していない例">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img05@2x.png" class="u-only__sp u-img__max center" style="max-width:560px" alt="「しまう」と「きれい」が両立していない例">
				</div>
				<div class="relative u-only__pc">
					<h3 class="sec02_ttl-h3 mb2">「しまう」と「きれい」が両立した、よい例</h3>
					<div class="ttl_position__right2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__06@2x.png" class="u-only__pc u-img__max center" style="max-width:128px" alt="「しまう」と「きれい」が両立した、よい例">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img06-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="「しまう」と「きれい」が両立した、よい例">
					</div>
					<div class="ttl_position__left">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__03@2x.png" class="u-only__pc u-img__max center" style="max-width:105px" alt="「しまう」と「きれい」が両立した、よい例">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__03-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:43px" alt="「しまう」と「きれい」が両立した、よい例">
					</div>
				</div>
				<div class="u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__ttl02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:640px" alt="「しまう」と「きれい」が両立した、よい例">
				</div>
				<div class="center mb6 bg_yellow relative">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img07@2x.png" class="u-only__pc u-img__max center" style="max-width:517px" alt="「しまう」と「きれい」が両立した、よい例">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img07@2x.png" class="u-only__sp u-img__max center" style="max-width:253px" alt="「しまう」と「きれい」が両立した、よい例">
					<small class="small__l">モノが定位置に収まり、きれいな状態</small>
					<div class="ttl_position__b-right">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img08@2x.png" class="u-only__pc u-img__max" style="max-width:154px" alt="「しまう」と「きれい」が両立した、よい例">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__07@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__07-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_07@2x.png" class="u-only__pc u-img__max center" style="max-width:459px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_07-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_08@2x.png" class="u-only__pc u-img__max center" style="max-width:243px" alt="その通りです！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_08-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:142px" alt="その通りです！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__08@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="その通りです！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__08-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="その通りです！">
					</div>
				</div>
				<div class="flex mb6">
					<h3 class="circle center">原因のモノをしまいきる</h3>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img09@2x.png" class="u-only__pc u-img__max center" style="max-width:65px" alt="原因のモノをしまいきる＋きれいに見える工夫を">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img09@2x.png" class="u-only__sp u-img__max center" style="max-width:64px" alt="原因のモノをしまいきる＋きれいに見える工夫を">
					</div>
					<h3 class="circle center">きれいに見える工夫を</h3>
				</div>
				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_09@2x.png" class="u-only__pc u-img__max center" style="max-width:498px" alt="次は散らかる原因です。モノの量が多いから散らかると考えがちですが、実は、下駄箱に合わないサイズや仕様のモノが原因になりやすいのです。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_09-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="次は散らかる原因です。モノの量が多いから散らかると考えがちですが、実は、下駄箱に合わないサイズや仕様のモノが原因になりやすいのです。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__09@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="次は散らかる原因です。モノの量が多いから散らかると考えがちですが、実は、下駄箱に合わないサイズや仕様のモノが原因になりやすいのです。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__09-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="次は散らかる原因です。モノの量が多いから散らかると考えがちですが、実は、下駄箱に合わないサイズや仕様のモノが原因になりやすいのです。">
					</div>
				</div>
				<div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img10@2x.png" class="u-only__pc u-img__max center" style="max-width:790px" alt="「しまう」と「きれい」が両立していない例">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img10-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:639px" alt="「しまう」と「きれい」が両立していない例">
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img12@2x.png" class="u-only__pc u-img__max left" style="max-width:260px" alt="ポイント">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img12@2x.png" class="u-only__sp u-img__max left" style="max-width:133px" alt="ポイント">
				</div>
				<h3 class="mb8">散らかる原因は、モノの量。<br>ただし見るべきは、量よりも<span class="txt_blue">「何が入っていないか」</span>。</h3>
				<div class="flex_voice mb4">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__10@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__10-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:42px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_10@2x.png" class="u-only__pc u-img__max center" style="max-width:459px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_10-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
				</div>
				<div class="flex_voice mb10">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_11@2x.png" class="u-only__pc u-img__max center" style="max-width:458px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_11-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__11@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__11-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
				</div>
				<h3 class="mb7 center">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__07@2x.png" class="u-only__pc u-img__max center" style="max-width:639px" alt="入っていないモノ」、よくある3つのパターン">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__07-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:319px" alt="入っていないモノ」、よくある3つのパターン">
				</h3>
				<div class="mb6">
					<div class="flex">
						<div class="flex_sumai3">
							<div class="">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img13@2x.png" class="u-only__pc u-img__max center" style="max-width:203px" alt="入っていないモノ」、よくある3つのパターン">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img13-sp@2x.png" class="u-only__sp u-img__max center mb2" style="max-width:100px" alt="入っていないモノ」、よくある3つのパターン">
								<small class="small__center u-only__pc">靴が出しっぱなしになる</small>
							</div>
							<div class="">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img14@2x.png" class="u-only__pc u-img__max center" style="max-width:250px" alt="入っていないモノ」、よくある3つのパターン">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img14-sp@2x.png" class="u-only__sp u-img__max center mb2" style="max-width:118px" alt="入っていないモノ」、よくある3つのパターン">
								<small class="small__center u-only__pc">外出時に使うおもちゃや<br>カバン、帽子が置いたままになる</small>
							</div>
						</div>
						<div class="flex_sumai3">
							<div class="">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img15@2x.png" class="u-only__pc u-img__max center" style="max-width:237px" alt="入っていないモノ」、よくある3つのパターン">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec01__img15-sp@2x.png" class="u-only__sp u-img__max center mb2" style="max-width:112px" alt="入っていないモノ」、よくある3つのパターン">
								<small class="small__center u-only__pc">雑多にモノが散らかる<br>靴、遊び道具、ちりとりなど</small>
							</div>
						</div>
					</div>
				</div>
				<div class="flex_voice mb10 mb3_sp">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_12@2x.png" class="u-only__pc u-img__max center" style="max-width:458px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_12-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__12@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__12-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__13@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__13-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:42px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_13@2x.png" class="u-only__pc u-img__max center" style="max-width:323px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_13-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:142px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
				</div>
				<h3 class="center circle2 mb10"><span class="txt_blue">「入っていないモノ」</span>を見極めて対応すれば、うまくいく</h3>

				<h2 class="mb3">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img01@2x.png" class="u-only__pc u-img__max center" style="max-width:742px" alt="ご自宅の玄関CHECK！入っていないモノ3タイプ">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:319px" alt="ご自宅の玄関CHECK！入っていないモノ3タイプ">
				</h2>
				<!--typea-->
				<div class="">
					<a id="typea">
						<h3>
							<div class="">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__ttl01@2x.png" class="u-only__pc u-img__max center" style="max-width:740px" alt="いつも履く靴が散乱">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__ttl01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:640px" alt="いつも履く靴が散乱">
							</div>
						</h3>
					</a>
				</div>
				<div class="type mb8">
					<div class="img_right">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typea__img01@2x.png" class="u-only__pc u-img__max" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typea__img01-sp@2x.png" class="u-only__sp u-img__max" style="max-width:270px" alt="いつも履く靴が散乱">
					</div>
					<div class="mb4">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typea__img02@2x.png" class="u-only__pc u-img__max" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typea__img02-sp@2x.png" class="u-only__sp u-img__max" style="max-width:270px" alt="いつも履く靴が散乱">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__point_a@2x.png" class="u-only__pc u-img__max center" style="max-width:680px" alt="シューズボックスの中を詰めるアイデアいろいろ">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__point_a-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:280px" alt="シューズボックスの中を詰めるアイデアいろいろ">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img10@2x.png" class="u-only__pc u-img__max center" style="max-width:680px" alt="シューズボックスの中を詰めるアイデアいろいろ">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img10-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:280px" alt="シューズボックスの中を詰めるアイデアいろいろ">
					</div>
					<div class="u-column">
						<ul class="u-column__3">
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img11@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="収納グッズをつかう">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img11-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="収納グッズをつかう">
									<small class="">収納グッズをつかう</small>
								</div>
							</li>
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img12@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="箱を捨てる">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img12-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="箱を捨てる">
									<small class="">箱を捨てる</small>
								</div>
							</li>
							<li class="">
								<div class="mt1_sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img13@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="棚を増やす">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img13-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="棚を増やす">
									<small class="">棚を増やす</small>
								</div>
							</li>
						</ul>
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img14@2x.png" class="u-only__pc u-img__max center" style="max-width:144px" alt="PLUS">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img14-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:70px" alt="PLUS">
					</div>
					<div class="type">
						<div class="mb2">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typea__img03@2x.png" class="u-only__pc u-img__max" style="max-width:689px" alt="PLUS">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typea__img03-sp@2x.png" class="u-only__sp u-img__max" style="max-width:344px" alt="PLUS">
						</div>
					</div>
				</div>
				<div class="flex_voice mb4">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__14@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__14-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:42px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_14@2x.png" class="u-only__pc u-img__max center" style="max-width:323px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_14-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:172px" alt="きちんとしまった上できれいに見えるようにすればいいんですね！">
					</div>
				</div>
				<!--typeb-->
				<div class="">
					<a id="typeb">
						<h3>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__ttl02@2x.png" class="u-only__pc u-img__max center" style="max-width:740px" alt="いつも履く靴が散乱">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__ttl02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:640px" alt="いつも履く靴が散乱">
						</h3>
					</a>
				</div>
				<div class="type relative mb8">
					<div class="img_right">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typeb__img01@2x.png" class="u-only__pc u-img__max" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typeb__img01-sp@2x.png" class="u-only__sp u-img__max" style="max-width:270px" alt="いつも履く靴が散乱">
					</div>
					<div class="relative mb4">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typeb__img02@2x.png" class="u-only__pc u-img__max" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typeb__img02-sp@2x.png" class="u-only__sp u-img__max" style="max-width:270px" alt="いつも履く靴が散乱">
					</div>
					<div class="relative mb6">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec2_point_b@2x.png" class="u-only__pc u-img__max center" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec2__point_b-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:347px" alt="いつも履く靴が散乱">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img24@2x.png" class="u-only__pc u-img__max center" style="max-width:680px" alt="壁面を活用した掛けるアイデアいろいろ">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img24-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:280px" alt="壁面を活用した掛けるアイデアいろいろ">
					</div>
					<div class="u-column mb2">
						<ul class="u-column__3">
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img25@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="連結フックを利用して">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img25-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="連結フックを利用して">
									<small class="">連結フックを利用して</small>
								</div>
							</li>
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img26@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="フックで好きな位置に">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img26-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="フックで好きな位置に">
									<small class="">フックで好きな位置に</small>
								</div>
							</li>
							<li class="">
								<div class="mt1_sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img27@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="マグネットタイプを使って">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img27-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="マグネットタイプを使って">
									<small class="">マグネットタイプを使って</small>
								</div>
							</li>
						</ul>
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img14@2x.png" class="u-only__pc u-img__max center" style="max-width:144px" alt="PLUS">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img14-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:70px" alt="PLUS">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typeb__img03@2x.png" class="u-only__pc u-img__max" style="max-width:689px" alt="PLUS">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typeb__img03-sp@2x.png" class="u-only__sp u-img__max" style="max-width:344px" alt="PLUS">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_15@2x.png" class="u-only__pc u-img__max center" style="max-width:458px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_15-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:225px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__12@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__12-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
				</div>
				<div class="flex_voice mb6">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__16@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="ステキ！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__16-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:42px" alt="ステキ！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_16@2x.png" class="u-only__pc u-img__max center" style="max-width:323px" alt="ステキ！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_16-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:142px" alt="ステキ！">
					</div>
				</div>
				<!--typec-->
				<div class="">
					<a id="typec">
						<h3>
							<div class="type_ttl">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__ttl03@2x.png" class="u-only__pc u-img__max center" style="max-width:740px" alt="いつも履く靴が散乱">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__ttl03-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:640px" alt="いつも履く靴が散乱">
							</div>
						</h3>
					</a>
				</div>
				<div class="type mb8 relative">
					<!--	<div class="mb6"> -->
					<div class="img_right">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typec__img01@2x.png" class="u-only__pc u-img__max" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typec__img01-sp@2x.png" class="u-only__sp u-img__max" style="max-width:270px" alt="いつも履く靴が散乱">
					</div>
					<div class="mb4">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typec__img02@2x.png" class="u-only__pc u-img__max" style="max-width:695px" alt="いつも履く靴が散乱">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typec__img02-sp@2x.png" class="u-only__sp u-img__max" style="max-width:270px" alt="いつも履く靴が散乱">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__point_c@2x.png" class="u-only__pc u-img__max center" style="max-width:680px" alt="壁面を活用した掛けるアイデアいろいろ">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__point_c-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:280px" alt="壁面を活用した掛けるアイデアいろいろ">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img39@2x.png" class="u-only__pc u-img__max center" style="max-width:680px" alt="壁面を活用した掛けるアイデアいろいろ">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img40-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:280px" alt="壁面を活用した掛けるアイデアいろいろ">
					</div>
					<div class="u-column mb2">
						<ul class="u-column__3">
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img40@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="連結フックを利用して">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img41-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="連結フックを利用して">
									<small class="">スリムタイプをたたきに</small>
								</div>
							</li>
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img41@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="フックで好きな位置に">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img42-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="フックで好きな位置に">
									<small class="">下駄箱横の廊下に置く</small>
								</div>
							</li>
							<li class="">
								<div class="">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img42@2x.png" class="u-only__pc u-img__max center" style="max-width:220px" alt="マグネットタイプを使って">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img43-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:110px" alt="マグネットタイプを使って">
									<small class="">下駄箱の下に置く</small>
								</div>
							</li>
						</ul>
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img14@2x.png" class="u-only__pc u-img__max center" style="max-width:144px" alt="PLUS">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/sec02__img14-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:70px" alt="PLUS">
					</div>
					<div class="mb2">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typec__img03@2x.png" class="u-only__pc u-img__max" style="max-width:689px" alt="PLUS">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/typec__img03-sp@2x.png" class="u-only__sp u-img__max" style="max-width:344px" alt="PLUS">
					</div>
				</div>

				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_17@2x.png" class="u-only__pc u-img__max center" style="max-width:458px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_17-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__17@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__17-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
				</div>
				<div class="flex_voice mb6">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__18@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="ステキ！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__18-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:42px" alt="ステキ！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_18@2x.png" class="u-only__pc u-img__max center" style="max-width:359px" alt="ステキ！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_18-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="ステキ！">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_19@2x.png" class="u-only__pc u-img__max center" style="max-width:383px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_19-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__19@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__19-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
				</div>
				<div class="flex_voice mb4">
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_20@2x.png" class="u-only__pc u-img__max center" style="max-width:495px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_20-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__20@2x.png" class="u-only__pc u-img__max center" style="max-width:101px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__20-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:50px" alt="「入っていないモノ」には、傾向があります。あらためて観察してみてください。">
					</div>
				</div>
				<div class="flex_voice mb6">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__21@2x.png" class="u-only__pc u-img__max center" style="max-width:84px" alt="ステキ！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/icon__21-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:42px" alt="ステキ！">
					</div>
					<div class="relative">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_21@2x.png" class="u-only__pc u-img__max center" style="max-width:359px" alt="ステキ！">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/voice_21-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:217px" alt="ステキ！">
					</div>
				</div>
				<p class="center mb2">デザインと使い勝手の良さが光る</p>
				<div class="center mb8">
					<a href="https://e-suteki.haseko.jp/service/genkan-foris-index.html?utm_source=brc_sos_vol02&utm_medium=web&utm_campaign=genkan_foris_index" data-ga-click="foris2_2" target="_blank" class="btn_y center arrow">玄関にあると便利なアイテムはこちら</a>
				</div>
				<div class="relative">
					<h2 class="center mb2">ほかに、こんな方法もおススメです。</h2>
					<div class="ttl_position__right">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__01@2x.png" class="u-only__pc u-img__max center" style="max-width:37px" alt="ほかに、こんな方法もおススメです">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:25px" alt="ほかに、こんな方法もおススメです">
					</div>
				</div>
				<div class="mb3">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl_img__02@2x.png" class="u-only__pc u-img__max center" style="max-width:742px" alt="ほかに、こんな方法もおススメです">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_02/ttl__img02-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:638px" alt="ほかに、こんな方法もおススメです">
				</div>
				<p class="center mb2">思い切ってリフォームする！まずはご相談から</p>
				<div class="center mb5">
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/room/" data-ga-click="foris2_1" target="_blank" class="btn_g arrow02">長谷工リフォーム</a>
				</div>
				<p class="center mb2">システム収納パーツを利用する。いろいろ見て検討するなら</p>
				<div class="center mb8">
					<a href="https://e-suteki.haseko.jp/service/system-foris-index.html?utm_source=brc_sos_vol02&utm_medium=web&utm_campaign=system_foris_index" data-ga-click="foris2_3" target="_blank" class="btn_g arrow02">システム収納はもっと使える</a>
				</div>
			</section>
			<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_sumai.php") ?>
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
