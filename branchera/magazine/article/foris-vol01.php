<?php
//base
include( "../../function.php" );
$content = get_id_data( '26001' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article foris";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2021";
$release_month ="1";
$release_day ="";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_foris.php", "プロが解決！住まいのSOS" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/foris/foris_01/main-v@2x.png" alt="" class="u-img__max u-only__pc center" style="max-width:897px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/foris_01/main-v-sp@2x.png" alt="" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
    <div class="main__wrapper foris__wrapper">
      <section class="main__item">
				<div class="foris__header forisheader mb5">
					<div class="forisheader__row">
						<div class="mb3">
							<img src="<?php echo $img_url ?>/magazine/foris/foris_01/header__ttl@2x.png" class="u-only__pc u-img__max center" style="max-width:445px" alt="モノがあふれて困っています！東京都在住　鈴木さん">
							<img src="<?php echo $img_url ?>/magazine/foris/foris_01/header__ttl-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:375px" alt="モノがあふれて困っています！東京都在住　鈴木さん">
						</div>
						<div class="mb3">
							<div>
								<p class="forisheader__ex">マンションに越してきて３年。<br class="u-only__sp">クローゼットの収納がなかなか上手に使いこなせません。<br>毎日小さなストレスが溜まるばかり･･･。住まいスターさん、どうしたらいいか教えてください。</p>
							</div>
						</div>
						<div>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/foris_01/header__img@2x.png" class="u-only__pc u-img__max center" style="max-width:574px" alt="モノがあふれて困っています！東京都在住　鈴木さん">
								<img src="<?php echo $img_url ?>/magazine/foris/foris_01/header__img-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:375px" alt="モノがあふれて困っています！東京都在住　鈴木さん">
							</div>
						</div>
					</div>
				</div>
				<div class="foris__meister forismeister mb4">
					<div class="forismeister__row">
						<div class="mb3">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/meister__top@2x.png" class="u-only__pc center u-img__max" style="max-width:247px;" alt="わかりました！収納住まいスターを派遣いたします！">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/meister__top-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:212px;" alt="わかりました！収納住まいスターを派遣いたします！">
						</div>
						<div class="forismeister__img">
							<div class="forismeister__flex">
								<div class="forismeister__item_l">
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/meister__img@2x.png" class="u-only__pc center u-img__max" style="max-width:461px;" alt="わかりました！収納住まいスターを派遣いたします！">
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/meister__img-sp@2x.png" class="u-only__sp center u-img__max" alt="わかりました！収納住まいスターを派遣いたします！">
									<div class="forismeister__ex">
										<p><span class="foris__bigfont">大</span>手カーテンメーカーを経て、青山の輸入家具・雑貨のセレクトショップでインテリアコーディネーターとして勤務。<br>個人宅と建売住宅のコーディネートを行う中で、「見せるためのインテリア」と「実生活でキレイを維持できるインテリア」は全く違うと知り、整理収納の大切さに気づく。「収納のチカラで叶えるインテリア」をコンセプトに個人宅の整理収納を中心にフリーランスとして約7年活動。2016年にチームで仕事を開始し、2018年1月株式会社設立となる。現在、テレビ・メディア多数で活躍。</p>
									</div>
								</div>
								<div class="forismeister__item_r u-only__pc">
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/meister__img-pc@2x.png" class="u-only__pc center u-img__max" style="max-width:336px;" alt="わかりました！収納住まいスターを派遣いたします！">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex between mb4 mb2_sp">
					<div class="w65">
						<div class="u-column__item">
							<div>
								<div class="forisballoon mb suzuki01">
									<div class="inner-border__q forisballoon">
										<div>
											<p>クローゼットの収納がうまく使いこなせなくて困ってます。</p>
										</div>
									</div>
								</div>
							<img src="<?php echo $img_url ?>/magazine/foris/foris_01/q__img-sp@2x.png" alt="" class="u-img__max u-only__sp center mb3_sp" loading="lazy">
							</div>
							<div class="forisballoon mb waka01">
								<div class="inner-border__a forisballoon">
									<div>
										<p>ちょっと拝見。マンションでよく見られるシステム収納ですね。なるほど。<br class="u-only__pc">下の図で示した片づけの4つのタイプのうち、あなたはどのタイプにあてはまりますか？ご自分のタイプを知ることで収納のポイントがつかめますよ。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w35">
						<img src="<?php echo $img_url ?>/magazine/foris/foris_01/q__img@2x.png" alt="" class="u-img__max u-only__pc center" style="max-width:244px;" loading="lazy">
					</div>
				</div>
				<div class="mb5 mb3_sp">
					<div>
						<img src="<?php echo $img_url ?>/magazine/foris/foris_01/sec01__img01@2x.png" class="u-only__pc u-img__max center" style="max-width:766px" alt="片づけ４タイプ、あなたのタイプは？">
						<div class="u-only__sp u-font__small u-font__palt">
							<img src="<?php echo $img_url ?>/magazine/foris/foris_01/sec01__img01-sp@2x.png" class="u-only__sp u-img__max center" alt="片づけ４タイプ、あなたのタイプは？">
							<div>
								<p>整理力…暮らしに必要なモノを選び取る力。<br>整頓力…モノの見た目を整える力。</p>
							</div>
							<div>
								<ul>
									<li>◎タイプ：きれいなおうちに住んでいる</li>
									<li>A タイプ：部屋は散らかっていても引き出しはガラガラ</li>
									<li>B タイプ：引き出しの中は整理されたモノでギッシリ</li>
									<li>C タイプ：お片づけ効果を感じやすく伸びしろはある</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="forisballoon mb waka01">
					<div class="inner-border__a forisballoon">
						<div>
							<p>モノ、手放せるほうですか？<br>出したら戻すの得意ですか？</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb suzuki01">
					<div class="inner-border__q forisballoon">
						<div>
							<p>Aだわ！先生どうしよう。<br>手放せるけどすぐ散らかるんです。</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb waka02">
					<div class="inner-border__a forisballoon">
						<div>
							<p>大丈夫。<br class="u-only__sp">Aの方は収納の仕組みさえできれば、<br class="u-only__sp">キレイに収納できるようになります。<br class="u-only__sp">片づけは３つのスキルで考えましょう。</p>
						</div>
					</div>
				</div>
				<div class="mt3 mb5 mb3_sp">
					<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec02__img@2x.png" class="u-only__pc center u-img__max" alt="片づけに必要な3つのスキル">
					<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec02__img-sp@2x.png" class="u-only__sp center u-img__max" alt="片づけに必要な3つのスキル">
				</div>
				<div class="forisballoon mb suzuki03">
					<div class="inner-border__q forisballoon">
						<div>
							<p>なるほど！<br><span class="u-font__bold">取り出しやすく収める、<br class="u-only__sp ">キレイに収納に戻す。</span><br>この２つがポイントなんですね！</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb waka01">
					<div class="inner-border__a forisballoon">
						<div>
							<p>ご自宅のシステム収納で早速実践してみましょう。</p>
						</div>
					</div>
				</div>
				<div class="mt8 mb6 mb3_sp">
					<div>
						<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec03__ttl@2x.png" class="u-only__pc u-img__max" alt="システム収納ってこんなに使える！">
						<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec03__ttl-sp@2x.png" class="u-only__sp center u-img__max" alt="システム収納ってこんなに使える！">
					</div>
				</div>
				<div class="forisballoon mb waka01">
					<div class="inner-border__a forisballoon">
						<div>
							<p>具体的にいま、システム収納のどんな点がお悩みですか？</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb suzuki01">
					<div class="inner-border__q forisballoon">
						<div>
							<p><span class="u-font__bold">①モノがキレイに入らない。<br>②何がどこにあるかわからなくなる。<br>③奥にしまったものが取り出しにくい。</span><br>ですね。</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb waka03">
					<div class="inner-border__a forisballoon">
						<div>
							<p>まさに収納方法でお困りですね。一つずつ見ていきましょう。</p>
						</div>
					</div>
				</div>
				<div class="mt6 mb4">
					<div>
						<div class="forisissue__ttl_l">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue01__ttl@2x.png" class="u-only__pc u-img__max"  style="max-width:394px;" alt="モノがキレイに入らない">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue01__ttl-sp@2x.png" class="u-only__sp center u-img__max" alt="モノがキレイに入らない">
						</div>
						<div class="foris__issue forisissue">
							<div class="forisissue__row_l">
								<div>
									<div class="forisissue__box">
										<div class="forisissue__before">
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/ex_before@2x.png" class="u-only__pc u-img__max center mb1"  style="max-width:51px;" alt="">
											</div>
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue01__img01@2x.png" class="u-only__pc u-img__max"  style="max-width:261px;" alt="">
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue01__img01-sp@2x.png" class="u-only__sp center u-img__max" alt="">
											</div>
											<div>
												<p>もったいない空間が目立ちますね。</p>
											</div>
										</div>
										<div class="forisissue__arrow">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/arrow__r@2x.png" class="u-only__pc u-img__max"  style="max-width:14px;" alt="">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/arrow-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:24px;" alt="">
										</div>
										<div class="forisissue__after">
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/ex_after@2x.png" class="u-only__pc u-img__max center mb1"  style="max-width:41px;" alt="">
											</div>
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue01__img02@2x.png" class="u-only__pc u-img__max"  style="max-width:261px;" alt="">
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue01__img02-sp@2x.png" class="u-only__sp center u-img__max" alt="">
											</div>
											<div>
												<p>空いているスペースにまだ収納できます。高さのある袋や重ねられるボックスを使いましょう。無駄なく使えるようになります。</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb4">
					<div>
						<div class="forisissue__ttl_r">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue02__ttl@2x.png" class="u-only__pc u-img__max"  style="max-width:503px;" alt="何がどこにあるかわからなくなる">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue02__ttl-sp@2x.png" class="u-only__sp center u-img__max" alt="何がどこにあるかわからなくなる">
						</div>
						<div class="foris__issue forisissue">
							<div class="forisissue__row_r">
								<div>
									<div class="forisissue__box">
										<div class="forisissue__before">
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/ex_before@2x.png" class="u-only__pc u-img__max center mb1"  style="max-width:51px;" alt="">
											</div>
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue02__img01@2x.png" class="u-only__pc u-img__max"  style="max-width:261px;" alt="">
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue02__img01-sp@2x.png" class="u-only__sp center u-img__max" alt="">
											</div>
											<div>
												<p>雑然と、いろいろなものが混在してますね。</p>
											</div>
										</div>
										<div class="forisissue__arrow">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/arrow__r@2x.png" class="u-only__pc u-img__max"  style="max-width:14px;" alt="">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/arrow-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:24px;" alt="">
										</div>
										<div class="forisissue__after">
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/ex_after@2x.png" class="u-only__pc u-img__max center mb1"  style="max-width:41px;" alt="">
											</div>
											<div>
												<div class="forisissue__bigimg forisissue__bigimg_r u-only__pc">
													<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue02__img02@2x.png" class="u-only__pc u-img__max"  style="max-width:261px;" alt="">
												</div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue02__img02-sp@2x.png" class="u-only__sp center u-img__max" alt="">
											</div>
											<div>
												<p>モノの定位置を決めましょう。<br>形やサイズ、または使用頻度別に整理すればいいですよ。よく使うものは手前や取り出しやすいところに置き、ラベリングをしましょう。</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb6 mb3_sp">
					<div>
						<div class="forisissue__ttl_l">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue03__ttl@2x.png" class="u-only__pc u-img__max"  style="max-width:579px;" alt="取り出しにくい、奥にしまい込んでいる">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue03__ttl-sp@2x.png" class="u-only__sp center u-img__max" alt="取り出しにくい、奥にしまい込んでいる">
						</div>
						<div class="foris__issue forisissue">
							<div class="forisissue__row_l">
								<div>
									<div class="forisissue__box">
										<div class="forisissue__before">
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/ex_before@2x.png" class="u-only__pc u-img__max center mb1"  style="max-width:51px;" alt="">
											</div>
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue03__img01@2x.png" class="u-only__pc u-img__max"  style="max-width:261px;" alt="">
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue03__img01-sp@2x.png" class="u-only__sp center u-img__max" alt="">
											</div>
											<div>
												<p>奥のモノを出すのにぜんぶ出さなくてはいけない置き方になっていますね。</p>
											</div>
										</div>
										<div class="forisissue__arrow">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/arrow__r@2x.png" class="u-only__pc u-img__max"  style="max-width:14px;" alt="">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/arrow-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:24px;" alt="">
										</div>
										<div class="forisissue__after">
											<div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/ex_after@2x.png" class="u-only__pc u-img__max center mb1"  style="max-width:41px;" alt="">
											</div>
											<div>
												<div class="forisissue__bigimg forisissue__bigimg_l u-only__pc">
													<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue03__img02@2x.png" class="u-only__pc u-img__max"  style="max-width:261px;" alt="">
												</div>
												<img src="<?php echo $img_url?>/magazine/foris/foris_01/issue03__img02-sp@2x.png" class="u-only__sp center u-img__max" alt="">
											</div>
											<div>
												<p>奥まで上手に使うためには引き出しが便利です。<br>オープンタイプの引き出しを使うことで、奥に何がしまってあるか見やすく、小さなお子さまにも使いやすいですよ。</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="forisballoon mb suzuki02">
					<div class="inner-border__q forisballoon">
						<div>
							<p>なるほど！使いにくさの理由や、一つひとつの問題点がわかってきました。</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb8 mb4_sp waka01">
					<div class="inner-border__a forisballoon">
						<div>
							<p>今回のポイントは<br><span class="u-font__bold">「空間を無駄なく活用できるグッズを選ぶ」<br>「形、サイズ、使用頻度別などでしっかり分ける」<br>「定位置を決めたらラベリングをする」<br>「オープンタイプの引き出しで奥まで使いやすく」</span><br>です。<br>これを実践するとこんな感じになります。どうですか？</p>
						</div>
					</div>
				</div>
				<div class="mb6 mb3_sp">
					<div class="flex flex_around center">
						<div class="65 mb3_sp">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec04__img01@2x.png" class="u-only__pc u-img__max"  style="max-width:396px;" alt="ママとお子さまの収納">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec04__img01-sp@2x.png" class="u-only__sp center u-img__max" alt="ママとお子さまの収納">
							<p class="center">ママとお子さまの収納</p>
						</div>
						<div class="w35">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec04__img02@2x.png" class="u-only__pc u-img__max center"  style="max-width:179px;" alt="パパの収納">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/sec04__img02-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:174px;" alt="パパの収納">
							<p class="center">パパの収納</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb suzuki03">
					<div class="inner-border__q forisballoon">
						<div>
							<p>ステキ！<br>何をどこにしまえばいいか、わかりやすいです！それに、取りやすいですね！</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb waka02">
					<div class="inner-border__a forisballoon">
						<div>
							<p>いろいろ便利な収納パーツを使うといいですよ。<br>これまでご紹介したことを実際に形にできます。収納便利グッズがいろいろあるので見てください。<br>今の家の収納の写真と比べてみると良いと思いますよ！アイデアがどんどんわいてきます！</p>
						</div>
					</div>
				</div>
				<div class="forisballoon mb9 mb4_sp suzuki04">
					<div class="inner-border__q forisballoon">
						<div>
							<p>早速、便利な収納グッズ見てみます。ありがとうございました！</p>
						</div>
					</div>
				</div>
				<div class="mb9 mb4_sp">
					<div>
						<p class="center u-font__bold">便利なオプションパーツがイロイロ！！</p>
					</div>
					<a href="https://e-suteki.haseko.jp/service/system-foris-index.html?utm_source=brc_foris_vol01&utm_medium=web&utm_campaign=system_foris_index" target="_blank" data-ga-click="foris1_1" class="foris__btn">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__goods@2x.png" class="u-only__pc u-img__max center"  style="max-width:528px;" alt="上手な収納のための便利グッズはこちら">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__goods-sp@2x.png" class="u-only__sp center u-img__max center" style="max-width:357px;" alt="上手な収納のための便利グッズはこちら">
					</a>
				</div>
				<div class="foris__recommend forisrecommend">
					<div class="u-only__sp ml3">
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/footer__fukidashi-sp@2x.png" class="u-only__sp center u-img__max center" style="max-width:304px;" alt="ほかに、こんな方法もおススメです">
					</div>
					<div class="forisrecommend__row">
						<div>
							<img src="<?php echo $img_url?>/magazine/foris/foris_01/footer__fukidashi@2x.png" class="u-only__pc u-img__max"  style="max-width:398px;" alt="ほかに、こんな方法もおススメです">
						</div>
						<div class="forisrecommend__btnbox">
							<div class="mb4">
								<ul class="u-list__ul_maru">
									<li>
										思い切ってライフスタイルを一新。<br class="u-only__sp">ミニマリスト生活に興味があるなら
									</li>
								</ul>
								<div class="mb3">
									<a href="<?php echo $base_url ?>/magazine/index_comic01.php" data-ga-click="foris1_2" class="foris__btn">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__comic01@2x.png" class="u-only__pc u-img__max"  style="max-width:398px;" alt="何でか部屋が片付かない">
											<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__comic01-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:272px;" alt="何でか部屋が片付かない">
									</a>
								</div>
								<a href="https://e-suteki.haseko.jp/suteki/vol85-interior.html?utm_source=brc_sos_vol01&utm_medium=web&utm_campaign=vol85_interior" target="_blank" data-ga-click="foris1_3" class="foris__btn" >
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__suteki@2x.png" class="u-only__pc u-img__max"  style="max-width:398px;" alt="｢素敵生活｣ 85号インテリア">
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__suteki-sp@2x.png" class="u-only__sp u-img__max center" style="max-width:272px;" alt="｢素敵生活｣ 85号インテリア">
								</a>
							</div>
							<div class="mb4">
								<ul class="u-list__ul_maru">
									<li>自分では上手にできない！<br class="u-only__sp">プロの収納サービスを頼みたいと思ったら</li>
								</ul>
								<a href="https://e-suteki.haseko.jp/suteki/kid-special-2.html?utm_source=brc_sos_vol01&utm_medium=web&utm_campaign=kid_special_2" target="_blank" data-ga-click="foris1_4" class="foris__btn">
										<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__haseko@2x.png" class="u-only__pc u-img__max"  style="max-width:398px;" alt="長谷工の整理収納サービスはこちら">
										<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__haseko-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:272px;" alt="長谷工の整理収納サービスはこちら">
								</a>
							</div>
							<div>
								<h5>
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/related@2x.png" class="u-only__pc u-img__max"  style="max-width:151px;" alt="関連記事">
									<img src="<?php echo $img_url?>/magazine/foris/foris_01/related-sp@2x.png" class="u-only__sp u-img__max" style="max-width:115px;" alt="関連記事">
								</h5>
								<ul class="u-list__ul_maru">
									<li>片づけ4タイプに興味のある方はこちら</li>
								</ul>
								<a href="https://e-suteki.haseko.jp/suteki/vol85-storage.html?utm_source=brc_foris_vol01&utm_medium=web&utm_campaign=vol85_storage" target="_blank" data-ga-click="foris1_5" class="foris__btn">
										<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__shindan@2x.png" class="u-only__pc u-img__max"  style="max-width:398px;" alt="片付けタイプ診断　リンクボタン">
										<img src="<?php echo $img_url?>/magazine/foris/foris_01/btn__shindan-sp@2x.png" class="u-only__sp center u-img__max" style="max-width:272px;" alt="片付けタイプ診断　リンクボタン">
								</a>
							</div>
						</div>
					</div>
				</div>
      </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_foris.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
