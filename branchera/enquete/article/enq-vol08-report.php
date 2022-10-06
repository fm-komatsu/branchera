<?php
//base
include ("../../function.php");
$content = get_id_data('11017');
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
				<h2 class="u-ttl__l">老後・介護に関するアンケートより</h2>
				<div class="u-assist_enq_low07">
					回答期間　　　：　2018年10月1日（月）～2018年10月14日（日）<br>
					回答者数　　　：　計1,698名<br>
					回答者性別　　：　男性1,007人　女性691人<br>
					回答者年齢構成：　20代以下 59人　30代 309人　40代 410人　50代 479人　60代 441人

				</div>

				<figure>
					<img
					data-src="<?php echo $img_url ?>/enquete/report08/main-v.png"
					data-retina="<?php echo $img_url ?>/enquete/report08/main-v@2x.png"
					alt="ブランシエラクラブ みんなのインターネット利用状況　結果発表"
					style="max-width:738px;"
					class="u-img__max">
				</figure>

			</section>

			<div class="enq08__main">

				<section class="enq08__sec01 enq08sec01">
					<div class="enq08sec01__row">
						<h2 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report08/q1_ttl.png"
							data-retina="<?php echo $img_url ?>/enquete/report08/q1_ttl@2x.png"
							alt="自分の老後について不安を感じますか？"
							style="max-width:738px;"
							class="u-img__max center"
							>
						</h2>
						<div class="enq08__cnt">
							<figure class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q1_img01.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q1_img01@2x.png"
								alt="全体｜はい：76％、いいえ：24％"
								style="max-width:738px;"
								class="u-img__max"
								>
							</figure>
							<div class="enq08sec01__box sec01box">
								<div class="sec01box__row">
									<h3 class="enq08sec01__ttl">不安と感じている方が全体の<span class="enq08sec01__strong">約<span class="enq08sec01__strong_big">8</span>割</span>、<span class="enq08sec01__strong"><span class="enq08sec01__strong_big">1,284</span>名！</span></h3>
									<p class="mb2">自分の老後に不安を感じている方が全体の約8割（76％）という結果となりました。年代別で見ると、60代以上の年齢の高い層よりも、若い層の方が将来に不安を感じているということがわかりました。なかでも、30代は不安と回答している方が8割を超えていて、非常に高い数値となりました。まだイメージのつかない将来に、漠然と不安を感じているのかもしれませんね。</p>
								</div>
							</div>
						</div>
						<div class="enq08__cnt">
							<h2 class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q2_ttl.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q2_ttl@2x.png"
								alt="介護や身の回りの世話等、将来あなたのサポートを必要とする人はいますか？"
								style="max-width:738px;"
								class="u-img__max center"
								>
							</h2>

							<figure class="u-ttl mb3 center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q2_img01.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q2_img01@2x.png"
								alt="います：77％、いません：23％"
								style="max-width:710px;"
								class="u-img__max"
								>
							</figure>
						</div>
						<div class="enq08__cnt">
							<h2 class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q3_ttl.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q3_ttl@2x.png"
								alt="あなたのサポートを必要とする人は誰ですか？"
								style="max-width:738px;"
								class="u-img__max center"
								>
							</h2>

							<figure class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q3_img01.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q3_img01@2x.png"
								alt="母：27％、配偶者：22％、父：19％、兄弟姉妹：4％、おじおば：2％、祖父母：2％、その他：1％"
								style="max-width:708px;"
								class="u-img__max"
								>
							</figure>

							<div class="enq08sec01__box sec01box">
								<div class="sec01box__row">
									<h3 class="enq08sec01__ttl"><span class="enq08sec01__strong">約<span class="enq08sec01__strong_big">8</span>割</span>の方が将来的に家族のサポートをする必要が！</h3>
									<p class="mb2">将来あなたのサポートを必要としている方は、全体の77％という結果となりました。身近な存在である両親や配偶者の割合が高く、特に50代は男女共に約3割を超える方が母親をサポートする必要があると感じていることがわかりました。</p>
								</div>
							</div>
						</div>
						<div class="enq08__cnt">
							<h2 class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q4_ttl.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q4_ttl@2x.png"
								alt="あなたのサポートを必要とする親族で、介護サービスや有料老人ホームを利用している方はいますか？"
								style="max-width:738px;"
								class="u-img__max center"
								>
							</h2>

							<figure class="u-ttl mb3 center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/q4_img01.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/q4_img01@2x.png"
								alt="利用している：18％｜利用していない：77％｜他：5％"
								style="max-width:711px;"
								class="u-img__max"
								>
							</figure>

							<div class="enq08sec01__box sec01box">
								<div class="sec01box__row">
									<h3 class="enq08sec01__ttl">将来的にサポートが必要であっても、現時点では<span class="enq08sec01__strong">約<span class="enq08sec01__strong_big">8</span>割</span>の方が<br class="u-only__pc">介護サービス、老人ホームを利用していないという結果に！</h3>
									<p class="mb2">あなたのサポートを必要とする親族で、現在、介護サービス、有料老人ホームを利用している方は全体の18％で、77％の方が利用していないということがわかりました。現時点では、利用する必要がない方が多いようですが、将来的には介護サービスや老人ホームの利用について検討していくのかもしれませんね。</p>
								</div>
							</div>
						</div>
						<div class="enq08__cnt">
							<h2 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report08/q5_ttl.png"
							data-retina="<?php echo $img_url ?>/enquete/report08/q5_ttl@2x.png"
							alt="雑誌やインターネットで介護・有料老人ホームの情報を見ますか？"
							style="max-width:738px;"
							class="u-img__max center"
							>
						</h2>

						<figure class="u-ttl mb5 center">
							<img
							data-src="<?php echo $img_url ?>/enquete/report08/q5_img01.png"
							data-retina="<?php echo $img_url ?>/enquete/report08/q5_img01@2x.png"
							alt="「雑誌では？」読まない：98％、読む：2％｜「インターネットでは？」見ない：77％、よく探す：1％、たまに探す：5％、目に入れば見る：17％"
							style="max-width:682px;"
							class="u-img__max"
							>
						</figure>

						<figure class="u-ttl mb3 center">
							<img
							data-src="<?php echo $img_url ?>/enquete/report08/q5_img02.png"
							data-retina="<?php echo $img_url ?>/enquete/report08/q5_img02@2x.png"
							alt="「インターネットで検索する際は、どんなキーワードで検索しましたか？」"
							style="max-width:679px;"
							class="u-img__max"
							>
						</figure>
						<div class="enq08sec01__box sec01box">
							<div class="sec01box__row">
								<h3 class="enq08sec01__ttl">将来に不安を感じている方が全体の<span class="enq08sec01__strong">約<span class="enq08sec01__strong_big">8</span>割</span>いるのに対し、<br class="u-only__pc">実際に介護情報を見ている・調べている方は少数という結果に！</h3>
								<p class="mb2">介護や有料老人ホームの情報を見ている方は、少ないということがわかりました。将来的に情報が必要になることは感じていても、実際に必要となるまでは情報検索をしない方が多いのかもしれませんね。</p>
							</div>
						</div>
					</div>
				</section>
				<section class="main__item enq08__sec02 enq08sec02">
					<div class="enq08sec02__row">
						<div class="enq08sec02__1st">
							<div class="enq08__cnt">
								<h2 class="u-ttl mb3">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q6_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q6_ttl@2x.png"
									alt="長谷工シニアホールディングスのTVCMを見たことがありますか？"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h2>
								<figure class="u-ttl mb5 center">
										<img
										data-src="<?php echo $img_url ?>/enquete/report08/q6_img01.png"
										data-retina="<?php echo $img_url ?>/enquete/report08/q6_img01@2x.png"
										alt="見たことある！：19％、見たことない：81％"
										style="max-width:712px;"
										class="u-img__max"
										>
									</figure>

									<div class="enq08__movie enq08-movie center">
										<h3 class="enq08-movie__ttl">
											<img
												data-src="<?php echo $img_url ?>/enquete/report08/q6_ttl_mv.png"
												data-retina="<?php echo $img_url ?>/enquete/report08/q6_ttl_mv@2x.png"
												alt="お馴染みの「タラタタッタタ ♪」をバラードバージョンでお届けしているシニア事業のCM" style="max-width:738px" class="u-img__max">
										</h3>
										<figure class="center" style="padding:0 16px;">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/q6_ttl_ex.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/q6_ttl_ex@2x.png"
											alt="ぜひ、この機会にご覧くださいね"
											style="max-width:352px;"
											class="u-img__max"
											>
									</figure>
									<div class="enq08-movie__video">
										<div class="enq08-movie__video_base">
											<iframe class="enq08-movie__video_emb" src="https://www.youtube.com/embed/k59aM7bXzsw?rel=0" frameborder="0"
											gesture="media" allow="encrypted-media" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>



							<div class="enq08__cnt">
								<h2 class="u-ttl mb0 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_ttl@2x.png"
									alt="知っているシニア施設はありますか？（複数回答）"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h2>

								<figure class="u-ttl mb3 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_img01.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_img01@2x.png"
									alt="センチュリーシティ、センチュリーハウス、メディカルケアセンチュリーハウス：32％｜ライフハウス、シニアハウス、ライフ＆シニアハウス：25％｜ついどいの家：8％｜ふるさと：4％｜全て知らない：69％"
									style="max-width:738px;"
									class="u-img__max"
									>
								</figure>

								<div class="enq08sec02__box sec02box">
									<div class="sec02box__row">
										<h3 class="enq08sec02__ttl">実は、長谷工のシニア事業は<span class="enq08sec02__strong">約<span class="enq08sec02__strong_big">30</span>年</span>の実績があるんです！</h3>
										<p class="mb2">長谷工のシニア事業は約30年に渡り、高齢期の住まい・暮らしのサービス提供をしています。我が家にいるような、安心感のある日々を過ごしていただけるよう、老後や介護でお悩みの方をこれからもサポートさせていただきたいと考えています。</p>
									</div>
								</div>
							</div>
							<div class="enq08__cnt">

								<h3 class="u-ttl mb3">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_ttl02.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_ttl02@2x.png"
									alt="長谷工シニア事業 大きな3つのサービス"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h3>

								<figure class="u-ttl mb2">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_img02.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_img02@2x.png"
									alt="お元気な方向けの住まい：入居時に身の回りのことが自分でできる方を対象とした「自立型の住まい」の提供
	"
									style="max-width:738px;"
									class="u-img__max"
									>
								</figure>

								<figure class="u-ttl mb2">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_img03.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_img03@2x.png"
									alt="介護が必要な方向けの住まい：日常的な生活支援や見守りを必要とする方を対象とした介護型の住まいの提供"
									style="max-width:738px;"
									class="u-img__max"
									>
								</figure>

								<figure class="u-ttl mb3">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_img04.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_img04@2x.png"
									alt="在宅介護サービス：介護保険の要介護認定、要支援認定をお持ちの方がご自宅で生活をしながらサポートを受けられる在宅型の介護サービスの提供"
									style="max-width:738px;"
									class="u-img__max"
									>
								</figure>

							</div>
							<div class="enq08__cnt">
								<div class="enq08__infobox infobox">
									<div class="infobox__row">

										<h3 class="infobox__ttl mb0 center">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/q7_ttl03.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/q7_ttl03@2x.png"
											alt="ブランシエラクラブ特別優待情報"
											style="max-width:673px;"
											class="u-img__max"
											>
										</h3>

										<div class="infobox__item">

											<p class="infobox__ex mb3">ブランシエラクラブ会員のみなさまは、優待サービスを使って、「無料」で、「有料老人ホーム・サービス付き高齢者住宅の体験宿泊」をご利用いただけるのをご存知でしたか？気になる方はぜひ、ご覧ください。</p>

											<figure class="u-ttl mb3">
												<img
												data-src="<?php echo $img_url ?>/enquete/report08/q7_img05.png"
												data-retina="<?php echo $img_url ?>/enquete/report08/q7_img05@2x.png"
												alt="有料老人ホーム・サービス付き高齢者住宅の「無料」体験宿泊"
												style="max-width:738px;"
												class="u-img__max"
												>
											</figure>

											<a href="<?php echo $base_url?>/gift/article/nursing.php">
												<figure class="infobox__btn mb3">
													<img
													data-src="<?php echo $img_url ?>/enquete/report08/q7_img06.png"
													data-retina="<?php echo $img_url ?>/enquete/report08/q7_img06@2x.png"
													alt="体験宿泊の詳細はこちら"
													style="max-width:738px;"
													class="u-img__max"
													>
												</figure>
											</a>
										</div>
									</div>
								</div>
							</div>


							<div class="enq08__cnt">
								<h2 class="u-ttl mb3">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q8_ttl.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q8_ttl@2x.png"
									alt="両親や親族は老後・介護について、どこに相談していますか？"
									style="max-width:738px;"
									class="u-img__max center"
									>
								</h2>

								<figure class="u-ttl mb3 center">
									<img
									data-src="<?php echo $img_url ?>/enquete/report08/q7_img07.png"
									data-retina="<?php echo $img_url ?>/enquete/report08/q7_img07@2x.png"
									alt="相談場所が分からない　相談していない　等：57％｜ケアマネージャンー　市役所　等：43％"
									style="max-width:710px;"
									class="u-img__max"
									>
								</figure>

								<div class="enq08sec02__box sec02box">
									<div class="sec02box__row">
										<p class="mb2">半数以上の方が、相談場所がわからない・相談していないということがわかりました。長谷工シニアウェルデザインでは、老後・介護について、幅広いサービスを提供しているので、少しでもお悩みの方はお気軽にご相談ください。</p>
									</div>
								</div>
							</div>
							<div class="enq08sec02__1st_end"><div class="enq08sec02__1st_row"></div></div>
						</div>
						<div class="enq08__cnt">

							<h2 class="u-ttl mb5">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/info_ttl.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/info_ttl@2x.png"
								alt="長谷工シニアホールディングスでは老後・介護に関するお悩み、ご相談をお受けしております"
								style="max-width:738px;"
								class="u-img__max center"
								>
							</h2>

							<figure class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report08/info_img01.png"
								data-retina="<?php echo $img_url ?>/enquete/report08/info_img01@2x.png"
								alt="長谷工シニアホールディングス"
								style="max-width:738px;"
								class="u-img__max"
								>
							</figure>

							<p class="mb2" style="padding : 24px;">「有料老人ホーム・サービス付き高齢者向け住宅・介護サービス等」幅広いサービスを展開しているため、多様なお悩みに対応ができることが強みです。</p>

							<div class="inqbox">
								<div class="inqbox__row">

									<h2 class="u-ttl mb3 inqbox__ttl">
										<img
										data-src="<?php echo $img_url ?>/enquete/report08/info_ttl03.png"
										data-retina="<?php echo $img_url ?>/enquete/report08/info_ttl03@2x.png"
										alt="老後・介護に関してお悩みの方はお気軽にご相談ください"
										style="max-width:738px;"
										class="u-img__max center"
										>
									</h2>

									<div class="inqbox__ex">

										<figure class="u-ttl mb3 mb0_sp">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/info_img03.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/info_img03@2x.png"
											alt="受付時間　平日 9:00～18:00"
											style="max-width:667px;"
											class="u-img__max"
											>
										</figure>
										<figure class="u-ttl mb3 mb0_sp">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/info_img04.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/info_img04@2x.png"
											alt="関東：0120-580-731"
											style="max-width:667px;"
											class="u-img__max"
											>
										</figure>
										<figure class="u-ttl mb3 mb0_sp">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/info_img05.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/info_img05@2x.png"
											alt="東海：0120-864-194"
											style="max-width:667px;"
											class="u-img__max"
											>
										</figure>
										<figure class="u-ttl mb3 mb0_sp">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/info_img06.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/info_img06@2x.png"
											alt="関西：0120-784-177"
											style="max-width:667px;"
											class="u-img__max"
											>
										</figure>
										<a href="https://www.haseko-senior.co.jp/contact/" target="_blank">
											<figure class="u-ttl inqbox__btn">
												<img
												data-src="<?php echo $img_url ?>/enquete/report08/btn_imq.png"
												data-retina="<?php echo $img_url ?>/enquete/report08/btn_imq@2x.png"
												alt="お問い合わせはこちら"
												style="max-width:668px;"
												class="u-img__max"
												>
											</figure>
										</a>
										<p>有料老人ホーム・介護サービスに関する内容は、まずはお電話でご相談ください。<br>約30年の実績で、あなたに合った最適なサービスをご提案させていただきます。</p>
									</div>
								</div>
							</div>
							<div class="infobox__white">
								<div class="white__row">
									<h2 class="u-ttl mb3">
										<img
										data-src="<?php echo $img_url ?>/enquete/report08/info_ttl04.png"
										data-retina="<?php echo $img_url ?>/enquete/report08/info_ttl04@2x.png"
										alt="シニア業界で一緒に働きませんか？"
										style="max-width:666px;"
										class="u-img__max center"
										>
									</h2>
									<p>あなたの豊富な経験と知識を活かして、働きながら一緒に成長していきませんか？人と本気で関わってみたい方は、その気持ちを歓迎します。自分の人間力を試し、個性・アイデアを発揮したい方には、格好の舞台となると思います。</p>
									<a href="http://www.haseko-senior.co.jp/recruit/" target="_blank">
										<figure class="u-ttl infobox__btn">
											<img
											data-src="<?php echo $img_url ?>/enquete/report08/btn_syoukai.png"
											data-retina="<?php echo $img_url ?>/enquete/report08/btn_syoukai@2x.png"
											alt="紹介はこちら"
											style="max-width:660px;"
											class="u-img__max"
											>
										</figure>
									</a>
								</div>
							</div>
					</div>
				</section>
				<section class="main__item enq08__sec03 enq08sec03">
					<div class="enq08sec03__row">
						<figure class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report08/end.png"
							data-retina="<?php echo $img_url ?>/enquete/report08/end@2x.png"
							alt="たくさんのご回答をいただきありがとうございました。今回は1,698人の方にアンケート回答をしていただきました。"
							style="max-width:738px;"
							class="u-img__max"
							>
						</figure>
					</div>
				</section>
				<section class="main__item">

					<h2 class="u-position__center mb3">
						<img
						data-src="<?php echo $img_url ?>/enquete/report08/cnt_bottom_ttl.png"
						data-retina="<?php echo $img_url ?>/enquete/report08/cnt_bottom_ttl@2x.png"
						alt="老後・介護に関するお悩みも長谷工にお任せ！"
						style="max-width:428px;"
						class="u-img__max">
					</h2>
					<ul class="u-assist_blue">
						<li>
							<p>お一人おひとりの心地いい「間」を提供</p>
							<a href="http://www.haseko-senior.co.jp/" target="_blank">株式会社長谷工シニアウェルデザイン</a>
						</li>
						<li>
							<p>すぐに介護が必要な認知症の方にサービスを提供</p>
							<a href="http://www.furusato.net/" target="_blank">株式会社ふるさと</a>
						</li>
					</ul>
				</section>




			</div>

				<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
			</div>
		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
