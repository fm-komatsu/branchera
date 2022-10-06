<?php
//base
include ("../../function.php");
$content = get_id_data('11019');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper enq07">

			<section class="main__item">
				<h2 class="u-ttl__l">みんなの住まいや暮らし</h2>
				<div class="u-assist_enq_low07">
					回答期間　　　：　2019年1月8日（火）～2019年1月21日（月）<br>
					回答者数　　　：　計2,466名<br>

				</div>

				<figure>
					<img
					data-src="<?php echo $img_url ?>/enquete/report09/main-v.png"
					data-retina="<?php echo $img_url ?>/enquete/report09/main-v@2x.png"
					alt="ブランシエラクラブ みんなの住まいや暮らし　結果発表"
					style="max-width:740px;"
					class="u-img__max">
				</figure>

			</section>

			<div class="enq09__main">

				<section class="enq09__sec01 enq09sec01">
					<div class="enq09sec01__row">
						<h2 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report09/sec01_q1_ttl.png"
							data-retina="<?php echo $img_url ?>/enquete/report09/sec01_q1_ttl@2x.png"
							alt="お住まいの住宅の築年数は？"
							style="max-width:738px;"
							class="u-img__max center"
							>
						</h2>
						<div class="enq09__cnt">
							<figure class="u-ttl mb3 center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report09/sec01_q1_graph.png"
								data-retina="<?php echo $img_url ?>/enquete/report09/sec01_q1_graph@2x.png"
								alt="「お住まいの住宅の築年数は？」回答"
								style="max-width:654px;"
								class="u-img__max"
								>
							</figure>
							<div class="enq09sec01__box sec01box">
								<div class="sec01box__row">
									<h3 class="enq09sec01__ttl">最も多い築年数は<span class="enq09sec01__strong">10年未満</span>という結果に！</h3>
									<p class="mb2">最も多い築年数は10年未満という結果となりました。ちなみに、築年数10年未満の住宅にお住まいなのは、30代から40代の方々が中心。ご自身の築年数を参考に、下記のアンケート結果をご覧ください。</p>
								</div>
							</div>
						</div>
						<div class="enq09__cnt">
							<h2 class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report09/sec01_q2_ttl.png"
								data-retina="<?php echo $img_url ?>/enquete/report09/sec01_q2_ttl@2x.png"
								alt="模様替えやリフォームで気になる場所はどこ？"
								style="max-width:738px;"
								class="u-img__max center"
								>
							</h2>

							<figure class="u-ttl mb6 center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report09/sec01_q2_graph.png"
								data-retina="<?php echo $img_url ?>/enquete/report09/sec01_q2_graph@2x.png"
								alt="「模様替えやリフォームで気になる場所はどこ？」回答"
								style="max-width:661px;"
								class="u-img__max"
								>
							</figure>
						</div>
						<div class="enq09__cnt">
							<h2 class="u-ttl mb2">
								<img
								data-src="<?php echo $img_url ?>/enquete/report09/sec01_q3_ttl.png"
								data-retina="<?php echo $img_url ?>/enquete/report09/sec01_q3_ttl@2x.png"
								alt="メンテナンス時期の目安を知っていますか？"
								style="max-width:738px;"
								class="u-img__max center"
								>
							</h2>
							<p class="enq09__txt mb3">実はあまり知られていない、住宅設備のメンテナンス時期の目安をご紹介します。これからリフォームやメンテナンスを考えている方は、ぜひ参考にしてみてください！</p>

							<figure class="u-ttl mb3 center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report09/sec01_q3_ans.png"
								data-retina="<?php echo $img_url ?>/enquete/report09/sec01_q3_ans@2x.png"
								alt="「メンテナンス時期の目安を知っていますか？」回答"
								style="max-width:653px;"
								class="u-img__max"
								>
							</figure>

							<div>
								<p class="enq09__txt enq09__txt_bold mb2 u-small"><span class="enq09__color_green">※1</span>  突発的な交換は費用が高くなるのでトラブル前の交換は必須です。<br><span class="enq09__color_green">※2</span>  7、8年目にモーター交換を行うことで15年周期のリニューアルに延命させる選択肢もあります。</p>
							</div>

							<div class="enq09sec01__box sec01box mb5">
								<div class="sec01box__row">
									<h3 class="enq09sec01__ttl">ブランシエラクラブの<span class="enq09sec01__strong">「住まいレージ」</span>を活用して<br class="u-only__pc">お得にクリーニングやリフォームを！</h3>
									<p class="mb2">長谷工グループが提供するサービスのご利用で「スマイル（長谷工ポイント）」がたまり、そのたまった「スマイル」でクリーニングやリフォームサービスを利用することができます。<br>これから「スマイル」と交換可能なサービスを一部ご紹介！「スマイル」を活用して、お得に快適な暮らしを手に入れましょう。</p>
								</div>
							</div>
						</div>
						<div class="enq09sec01__box sec01box">
							<div class="sec01box__row">
								<h3 class="u-ttl mb3 sec01box__ttl">
									<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec01_save_ttl.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec01_save_ttl@2x.png"
										alt="スマイルをクリーニング・リフォームでためる！"
										style="max-width:551px;"
										class="u-img__max center"
									>
								</h3>
								<p class="mb3">長谷工グループでクリーニング、室内リフォームなどのサービスを<br class="u-only__pc">お支払いただくと、ご利用金額の5％ が「スマイル」として付与されます。</p>

								<figure class="u-ttl mb3 center filter_smile_renewal">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec01_smile_image.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec01_smile_image@2x.png"
									alt="ご利用金額の5％ が「スマイル」として付与されます。"
									style="max-width:672px;"
									class="u-img__max"
									>
								</figure>
								<a href="<?php echo $base_url?>/smile/accumulate-smileage.php">
									<figure class="u-ttl mb3 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec01_btn.png"
										alt="住まいレージはこちら"
										style="max-width:672px;"
										class="u-img__max"
										>
									</figure>
								</a>	
							</div>
						</div>
						<figure class="u-ttl mb3 center">
							<img
							data-src="<?php echo $img_url ?>/enquete/report09/yajirushi.png"
							data-retina="<?php echo $img_url ?>/enquete/report09/yajirushi@2x.png"
							alt=""
							style="max-width:60px;"
							class="u-img__max"
							>
						</figure>
						<div class="enq09sec01__box sec01box mb3">
							<div class="sec01box__row">

								<h3 class="u-ttl mb3 sec01box__ttl">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec01_use_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec01_use_ttl@2x.png"
									alt="たまったスマイルをクリーニング・リフォームでつかう！"
									style="max-width:551px;"
									class="u-img__max center"
									>
								</h3>
								<p class="mb2">たまった「スマイル」は、長谷工グループサービスに1スマイル＝1円でご利用でき、<br class="u-only__pc">次回のクリーニング、リフォームなどのサービスをお得に行なうことができます。</p>
								<h2 class="u-ttl mb3 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec01_use_service-ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec01_use_service-ttl@2x.png"
									alt="主なサービス"
									style="max-width:134px;"
									class="u-img__max center"
									>
								</h2>

								<figure class="u-ttl mb5 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec01_use_service-img.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec01_use_service-img@2x.png"
									alt="住まいレージをご利用いただける主なサービス"
									style="max-width:608px;"
									class="u-img__max"
									>
								</figure>
								<div class="center">
									<a href="<?php echo $base_url?>/smile/use-smileage.php">
										<img
											data-src="<?php echo $img_url ?>/enquete/report09/btn_01.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/btn_01@2x.png"
											alt="詳しくはこちら"
											style="max-width:649px;"
											class="u-img__max center"
											>
									</a>
								</div>
							</div>
						</div>
					</div>

				</section>
				<section class="enq09__sec02 enq09sec02">
					<div class="enq09sec02__row">
						<div class="mb2 mb0_sp"></div>
						<div class="enq09sec02__1st">
							<div class="enq09__cnt">
								<h2 class="u-ttl mb3 mb1_sp">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec02_q1_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec02_q1_ttl@2x.png"
									alt="どんな生活情報に関心がある？"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h2>
								<h3 class="u-ttl mb3 mb0_sp">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec02_q1_ans-ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec02_q1_ans-ttl@2x.png"
									alt="多かった回答はこちら"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h3>
								<div class="center">
									<figure class="u-ttl mb5 mb0_sp center">
											<img
											data-src="<?php echo $img_url ?>/enquete/report09/sec02_q1_image.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/sec02_q1_image@2x.png"
											alt="「どんな生活情報に関心がある？」回答"
											style="max-width:681px;"
											class="u-img__max center u-only__pc"
											>
											<img
											data-src="<?php echo $img_url ?>/enquete/report09/sec02_q1_image-sp.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/sec02_q1_image-sp@2x.png"
											alt="「どんな生活情報に関心がある？」回答"
											style="max-width:666px;"
											class="u-img__max u-only__sp"
											>
									</figure>
								</div>
							</div>
							<div class="enq09sec02__box sec02box mb2_sp">
								<div class="sec02box__row">
									<h3 class="enq09sec02__ttl">最も関心のある生活情報は<span class="enq09sec02__strong">収納！</span></h3>
									<p class="mb2">僅差ですが、最も関心が高いのは「収納情報」ということが分かりました。20代から50代まで、幅広い年代の方々が収納に関心を抱いているようです。</p>
								</div>
							</div>

							<div class="enq09__cnt">
								<h2 class="u-ttl mb3 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec02_clm_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec02_clm_ttl@2x.png"
									alt="ブランシエラクラブでは暮らしに役立つ情報を発信していますぜひチェックしてみてください！"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h2>

								<h3 class="u-ttl mb3 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec02_kataduke_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec02_kataduke_ttl@2x.png"
									alt="片付けの基本をご紹介"
									style="max-width:738px;"
									class="u-img__max"
									>
								</h3>

								<div class="enq09__padding">
									<div class="mb3">
										<p class="enq09__txt">部屋の片付けが苦手な家族が、片付けのノウハウを学びながら憧れの部屋を目指すマンガコラムです。物語の中には、<span class="enq09__underline">整理収納アドバイザー監修</span>のお役立ち情報が盛りだくさん！<span class="enq09__underline">大変好評なため、全話リニューアルを実施</span>し、新たな情報を追加しました。</p>
									</div>

									<figure class="u-ttl mb3 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec02_kataduke_img.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec02_kataduke_img@2x.png"
										alt="ブランシエラマガジン「何でか、部屋が片付かない」イメージ"
										style="max-width:656px;"
										class="u-img__max"
										>
									</figure>
								</div>
								<div class="center mb5">
									<a href="<?php echo $base_url?>/magazine/index_comic01.php">
										<img
											data-src="<?php echo $img_url ?>/enquete/report09/btn_02.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/btn_02@2x.png"
											alt="詳しくはこちら"
											style="max-width:649px;"
											class="u-img__max"
											>
									</a>
								</div>
								<h3 class="u-ttl mb3 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report09/sec02_recipe_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report09/sec02_recipe_ttl@2x.png"
									alt="時短レシピ＆料理のテクニックをご紹介"
									style="max-width:738px;"
									class="u-img__max"
									>
								</h3>
								<div class="enq09__padding">
									<div class="mb3">
										<p class="enq09__txt">家事に仕事に子育てに…毎日忙しい家族が、<span class="enq09__underline">もっと簡単で美味しい料理をつくる</span>ために奮闘する物語です。<span class="enq09__underline">月に1回オリジナルレシピをご紹介</span>。さらに毎週、今さら聞けない料理の基本を、動画で分かりやすく解説しています。</p>
									</div>
									<figure class="u-ttl mb3 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec02_recipe_img.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec02_recipe_img@2x.png"
										alt="時短レシピ＆料理のテクニックをご紹介"
										style="max-width:674px;"
										class="u-img__max"
										>
									</figure>
								</div>
								<div class="mb5 center">
									<a href="<?php echo $base_url?>/magazine/index_comic02.php">
										<img
											data-src="<?php echo $img_url ?>/enquete/report09/btn_03.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/btn_03@2x.png"
											alt="「うちのご飯は世界イチ」「今さら聞けない料理のアレコレ」"
											style="max-width:674px;"
											class="u-img__max"
											>
									</a>
								</div>
							</div>
						</div>
					</section>
					<section class="main__item enq09__sec03 enq09sec03">
						<div class="enq09sec03__row">
							<div class="mb3 mb0_sp"></div>
							<div class="enq09sec03__1st">
								<div class="enq09__cnt">

									<h2 class="u-ttl mb3">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec03_q01_ttl.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec03_q01_ttl@2x.png"
										alt="マンションにあったらいいなと思うサービスは？"
										style="max-width:738px;"
										class="u-img__max center"
										>
									</h2>

									<div class="balloon_base">
										<div class="balloon balloon_maxborder mb man">
											<div class="inner-border balloon-bg">
												<div>
													<p>顔認証で入館できたり、鍵がなくても出入りできるシステムがあれば助かります。</p>
												</div>
											</div>
										</div>
										<div class="balloon balloon_maxborder mb woman_r">
											<div class="inner_r">
												<div>
													<p>貸し農園！近くに畑があって、自分で野菜とか作れたらいいなーって思います！</p>
												</div>
											</div>
										</div>

										<div class="balloon balloon_maxborder mb man">
											<div class="inner-border balloon-bg">
												<div>
													<p>子どもや高齢者に関する施設やサービスがあると嬉しい。</p>
												</div>
											</div>
										</div>
										<div class="balloon balloon_maxborder mb woman_r">
											<div class="inner_r">
												<div>
													<p>ペットの一時お預かりサービス、屋上やルーフバルコニーを利用してのドッグランスペースの提供。</p>
												</div>
											</div>
										</div>
									</div>

									<figure class="u-ttl mb6 mb3_sp">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec03_q1_matome.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec03_q1_matome@2x.png"
										alt="貴重なご意見ありがとうございました。"
										style="max-width:738px;"
										class="u-img__max"
										>
									</figure>

								</div>
								<div class="enq09__cnt">

									<h3 class="infobox__ttl mb4 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec03_q2_ttl.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec03_q2_ttl@2x.png"
										alt="管理会社に期待することは？"
										style="max-width:738px;"
										class="u-img__max"
										>
									</h3>

									<div class="enq09__padding">

										<figure class="u-ttl mb3 center">
											<img
											data-src="<?php echo $img_url ?>/enquete/report09/sec03_q2_img.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/sec03_q2_img@2x.png"
											alt="「管理会社に期待することは？」回答"
											style="max-width:696px;"
											class="u-img__max"
											>
										</figure>
									</div>

									<h3 class="infobox__ttl mb2 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/sec03_q2_matome_ttl.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/sec03_q2_matome_ttl@2x.png"
										alt="マンション管理も長谷工にお任せ！"
										style="max-width:738px;"
										class="u-img__max"
										>
									</h3>


									<div class="mb3">

										<p class="enq09__txt">マンション事業をトータルプロデュースする長谷工グループでは、管理に関してもお客さまに合ったサービスを提供しています。今回はマンション管理のエキスパート、長谷工管理ホールディングスをご紹介いたします。</p>

									</div>
									<figure class="u-ttl mb0 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report09/yajirushi_02.png"
										data-retina="<?php echo $img_url ?>/enquete/report09/yajirushi_02@2x.png"
										alt=""
										style="max-width:60px;"
										class="u-img__max"
										>
									</figure>
								</div>
								<div class="enq09__infobox infobox">
									<div class="infobox__row mb5">
										<h3 class="infobox__ttl mb3 center">
											<img
											data-src="<?php echo $img_url ?>/enquete/report09/haseko-kh_logo.png"
											data-retina="<?php echo $img_url ?>/enquete/report09/haseko-kh_logo@2x.png"
											alt="長谷工管理ホールディングスロゴ"
											style="max-width:259px;"
											class="u-img__max"
											>
										</h3>
										<p>長谷工管理ホールディングスは、長谷工グループの分譲マンション管理会社5社を統括する会社です。これまで各社が管理事業の中で得た 知識・経験・ノウハウを集約し、水平展開することで、管理の質の向上を図っています。各社が提供してきたサービス・特長を活かしつつ、更に幅広いサービスをご提供し、日本一の管理会社グループを目指して参ります。</p>
									<div class="kh-service">
										<div class="kh-service__row">
											<div class="kh-service__item find w50">
												<div class="center mb2">
													<img
														data-src="<?php echo $img_url ?>/enquete/report09/sec03_find_ttl.png"
														data-retina="<?php echo $img_url ?>/enquete/report09/sec03_find_ttl@2x.png"
														alt="管理会社をお探しの方"
														style="max-width:271px;"
														class="u-img__max"
														>
												</div>
												<div class="mb2">
													豊富な経験に基づく、多様なマンション管理のご提案をさせていただきます。
												</div>
												<div class="kh-service__btn center">
													<a href="http://www.haseko-hkh.co.jp/find.html" target="_blank">
														<img
														data-src="<?php echo $img_url ?>/enquete/report09/sec03_find_btn.png"
														data-retina="<?php echo $img_url ?>/enquete/report09/sec03_find_btn@2x.png"
														alt="詳しくはこちら"
														style="max-width:304px;"
														class="u-img__max"
														>
													</a>
												</div>
											</div>
											<div class="kh-service__item comu w50">
												<div class="center mb2">
													<img
														data-src="<?php echo $img_url ?>/enquete/report09/sec03_com_ttl.png"
														data-retina="<?php echo $img_url ?>/enquete/report09/sec03_com_ttl@2x.png"
														alt="コミュニティーサポート"
														style="max-width:271px;"
														class="u-img__max"
														>
												</div>
												<div class="mb2">
													マンションライフを、快適に楽しく過ごしていただくための様々な支援をご提供しています。
												</div>
												<div class="kh-service__btn center">
													<a href="http://www.haseko-hkh.co.jp/community.html" target="_blank">
														<img
														data-src="<?php echo $img_url ?>/enquete/report09/sec03_com_btn.png"
														data-retina="<?php echo $img_url ?>/enquete/report09/sec03_com_btn@2x.png"
														alt="詳しくはこちら"
														style="max-width:304px;"
														class="u-img__max"
														>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="enq09__foot-coment">
							<figure class="u-ttl mb3 center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report09/foot__coment.png"
								data-retina="<?php echo $img_url ?>/enquete/report09/foot__coment@2x.png"
								alt="たくさんのご意見・ご回答をいただきありがとうございました。今回はこれまでの中で最も多い、2,466人の方にアンケート回答をしていただきました。"
								style="max-width:698px;"
								class="u-img__max"
								>
							</figure>
						</div>
				</div>
			</section>

				<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
			</div>
		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
