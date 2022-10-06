<?php
//base
include("../../function.php");
$content = get_id_data('11076');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article page-enquete-design__2 enq12";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/", "アンケート");
		include($inc_path . "/lib/inc/pan.php");
		include($inc_path . "/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">

			<section class="main__item mb3 mb1_sp">
				<h2 class="u-ttl__l">満足度・意識調査2022</h2>
				<div class="u-assist_enq_low07 u-only__pc">
					回答期間　　　：　2022年1月20日（木）～2022年2月6日（日）<br>
					回答者数　　　：　計5,090名<br>

				</div>
				<div class="u-assist_enq_low07 u-only__sp u-font__palt">
					回答期間：2022年1月20日（木）～2022年2月6日（日）<br>
					回答者数：計5,090名<br>

				</div>
				<div class="mb2">
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/main-v@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="<?php echo $pageTtl ?>" />
						<img src="<?php echo $img_url ?>/enquete/report21/main-v@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
				</div>
				<p class="report21__intro">「新しい生活様式」が定着し、働き方や暮らし方が変わった人も多かった2021年。ブランシエラクラブでも変化に対応しながら、コンテンツやイベントが一層充実したものになるよう心がけてきました。そんな2021年のブランシエラクラブは、会員のみなさまの目にどう映っていたのでしょうか？「最も興味のあるコンテンツは？」「今後、取り上げてほしいテーマは？」など、アンケートを通して率直な感想を伺いました。それでは、満足度・意識調査の結果を発表します！</p>
			</section>
			<section>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="今後、オンラインで開催してほしいイベントはありますか？おうちで楽しめるのが魅力のオンラインイベント。リフォーム、DIY、お掃除など住まいづくりに役立つ講座のほか、「お金」「老後」といったテーマでの勉強会を希望される声も多く挙がっていました。その一方で「オンラインイベントは苦手」というご意見も。ブランシエラクラブのイベントは顔出しや質疑応答は必須というわけではなく、見ているだけのご参加でももちろんOKでうs。ブランシエラクラブでは、どなたでもリラックスしてご参加いただけるイベント開催を目指します！" />
					<img src="<?php echo $img_url ?>/enquete/report21/q1_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="今後、オンラインで開催してほしいイベントはありますか？おうちで楽しめるのが魅力のオンラインイベント。リフォーム、DIY、お掃除など住まいづくりに役立つ講座のほか、「お金」「老後」といったテーマでの勉強会を希望される声も多く挙がっていました。その一方で「オンラインイベントは苦手」というご意見も。ブランシエラクラブのイベントは顔出しや質疑応答は必須というわけではなく、見ているだけのご参加でももちろんOKでうs。ブランシエラクラブでは、どなたでもリラックスしてご参加いただけるイベント開催を目指します！" />
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="「収納のお悩みプロが解決！！」を実施！レポート公開中です　「収納」をテーマに開催した、第2回オンラインイベントのレポート公開中！「プロが解決！住まいのSOS」でおなじみの大橋わか先生が、収納のコツを楽しく伝授します♪" />
					<img src="<?php echo $img_url ?>/enquete/report21/q1_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="「収納のお悩みプロが解決！！」を実施！レポート公開中です　「収納」をテーマに開催した、第2回オンラインイベントのレポート公開中！「プロが解決！住まいのSOS」でおなじみの大橋わか先生が、収納のコツを楽しく伝授します♪" />
				</div>
				<div class="flex u-img__max u-only__pc">
					<div class="event-online-btn">
						<img src="<?php echo $img_url ?>/enquete/report21/q1_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
					</div>
					<div class="event-online-btn">
						<a href="<?php echo $base_url; ?>/event/article/report-event-online02.php" data-ga-click="enq21_1_online_event">
							<img src="<?php echo $img_url ?>/enquete/report21/q1_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
				</div>
				<div class="flex u-img__max u-only__sp">
					<a href="<?php echo $base_url; ?>/event/article/report-event-online02.php" data-ga-click="enq21_1_online_event">
						<img src="<?php echo $img_url ?>/enquete/report21/q1_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</a>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="そのほか、イベントレポートでは過去に行ったオンラインイベントや、おうちで楽しめるゴルフレッスンもご紹介！ぜひご覧ください" />
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="そのほか、イベントレポートでは過去に行ったオンラインイベントや、おうちで楽しめるゴルフレッスンもご紹介！ぜひご覧ください" />
				</div>
				<div>
					<a data-scroll href="<?php echo $base_url; ?>/event/index.php#event-report" data-ga-click="enq21_2_event">
						<img src="<?php echo $img_url ?>/enquete/report21/q1_06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						<img src="<?php echo $img_url ?>/enquete/report21/q1_05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</a>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいスターが答えてくれる、プロが解決「住まいのSOS」をご存知ですか？現在、第6回まで更新されている「プロが解決！住まいのSOS」。まだ更新回数が少ないためか、「掲載していることを知らなかった」と回答された方が最多の40%という結果になりました。こちらの記事では毎回、収納やペットとの暮らし方に関するお悩みや経年に関するお悩みなどを、住まいのプロ・住まいスターが分かりやすく解決しています。我が家にもすぐ取り入れられるヒントが満載で、快適な住まいづくりにとっても役立ちますよ！「知っているが記事を読んだことはない」という方も、ぜひのぞいてみてくださいね。" />
					<img src="<?php echo $img_url ?>/enquete/report21/q1_06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="という結果になりました。こちらの記事では毎回、収納やペットとの暮らし方に関するお悩みや経年に関するお悩みなどを、住まいのプロ・住まいスターが分かりやすく解決しています。我が家にもすぐ取り入れられるヒントが満載で、快適な住まいづくりにとっても役立ちますよ！「知っているが記事を読んだことはない」という方も、ぜひのぞいてみてくださいね。" />
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="こんなことを今後取り上げてほしい！騒音トラブルへの対策　ベランダ・バルコニーの有効活用術　大規模災害への備え" />
					<img src="<?php echo $img_url ?>/enquete/report21/q1_07-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="こんなことを今後取り上げてほしい！騒音トラブルへの対策　ベランダ・バルコニーの有効活用術　大規模災害への備え" />
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_10@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="プロが解決「住まいのSOS」収納スペースやお部屋・水回りのお悩みごとを、住まいのプロ・住まいスターが解決！快適な住まいづくりに役立つヒントとテクニックを分かりやすくお伝えします。" />
					<img src="<?php echo $img_url ?>/enquete/report21/q1_08-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="プロが解決「住まいのSOS」収納スペースやお部屋・水回りのお悩みごとを、住まいのプロ・住まいスターが解決！快適な住まいづくりに役立つヒントとテクニックを分かりやすくお伝えします。" />
				</div>
				<div class="flex u-img__max u-only__pc">
					<div class="event-online-btn">
						<img src="<?php echo $img_url ?>/enquete/report21/q1_11@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
					</div>
					<div class="event-online-btn">
						<a href="<?php echo $base_url; ?>/magazine/index_sumai-sos.php" data-ga-click="enq21_3_sos">
							<img src="<?php echo $img_url ?>/enquete/report21/q1_12@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
				</div>
				<div class="flex u-img__max u-only__sp">
					<a href="<?php echo $base_url; ?>/magazine/index_sumai-sos.php" data-ga-click="enq21_3_sos">
						<img src="<?php echo $img_url ?>/enquete/report21/q1_09-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</a>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report21/q1_13@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
					<img src="<?php echo $img_url ?>/enquete/report21/q1_10-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="" />
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_01@2x.png" loading="lazy" class="u-only__pc u-img__max" style="margin-top:-1px;" alt="ブランシエラクラブのサイトの中で、興味があるコンテンツは次のうちどれですか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="ブランシエラクラブのサイトの中で、興味があるコンテンツは次のうちどれですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="昨年の調査では、お部屋の片付け方法をご紹介する「何でか、部屋が片付かない。」が1位でしたが、今年は住まいのセルフメンテナンス術をご紹介する「Mr.わくわくメンテナンス講座」が並んで同率1位に！おうち時間が増えている今、快適な住まいづくりへの関心がより高まっていることが伺える結果でした。そこでご紹介したいのが、ブランシエラマガジンの新コンテンツ！お掃除のプロが、住まいの掃除方法を分かりやすく丁寧に解説します。清潔で快適な暮らしのラメに、ぜひお役立てください！" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="昨年の調査では、お部屋の片付け方法をご紹介する「何でか、部屋が片付かない。」が1位でしたが、今年は住まいのセルフメンテナンス術をご紹介する「Mr.わくわくメンテナンス講座」が並んで同率1位に！おうち時間が増えている今、快適な住まいづくりへの関心がより高まっていることが伺える結果でした。そこでご紹介したいのが、ブランシエラマガジンの新コンテンツ！お掃除のプロが、住まいの掃除方法を分かりやすく丁寧に解説します。清潔で快適な暮らしのラメに、ぜひお役立てください！" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お掃除に関するお悩みを解決！" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お掃除に関するお悩みを解決！" />
					</div>
					<a href="<?php echo $base_url; ?>/magazine/index_comic03.php" data-ga-click="enq21_4_comic03">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q2_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report21/q2_04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="暮らしの今を切り取りレポートする「いま暮らCafe」をご存知ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="暮らしの今を切り取りレポートする「いま暮らCafe」をご存知ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="こんなことを今後取り上げてほしい！大規模修繕3回目の工事内容 マンションでのグリーンの楽しみ方 子育て世代や、共働きのこと、節約について" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="こんなことを今後取り上げてほしい！大規模修繕3回目の工事内容 マンションでのグリーンの楽しみ方 子育て世代や、共働きのこと、節約について" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="あなたの今を聞かせて！「いま暮らCafe」" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_07-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="あなたの今を聞かせて！「いま暮らCafe」" />
					</div>
					<div class="flex u-img__max u-only__pc">
						<div class="event-online-btn">
							<img src="<?php echo $img_url ?>/enquete/report21/q2_08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
						</div>
						<div class="event-online-btn">
							<a href="<?php echo $base_url; ?>/magazine/index_imakura-cafe.php" data-ga-click="enq21_5_imakura">
								<img src="<?php echo $img_url ?>/enquete/report21/q2_09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							</a>
						</div>
					</div>
					<div class="flex u-img__max u-only__sp">
						<a href="<?php echo $base_url; ?>/magazine/index_imakura-cafe.php" data-ga-click="enq21_5_imakura">
							<img src="<?php echo $img_url ?>/enquete/report21/q2_08-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q2_10@2x.png" loading="lazy" class="u-only__pc u-img__max" />
						<img src="<?php echo $img_url ?>/enquete/report21/q2_09-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q3_01@2x.png" loading="lazy" class="u-only__pc u-img__max" style="margin-top:-1px;" alt="ブランシエラクラブのSNSを使った投稿はご存知ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q3_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ブランシエラクラブのSNSを使った投稿はご存知ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q3_02__01@2x.png" loading="lazy" class="u-only__pc u-img__max" style="margin-top:-1px;" alt="nstagramのフォロワー3000人突破！毎週水曜日更新中！まだの方はぜひフォローしてくださいね♪" />
						<img src="<?php echo $img_url ?>/enquete/report21/q3_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="nstagramのフォロワー3000人突破！毎週水曜日更新中！まだの方はぜひフォローしてくださいね♪" />
					</div>
					<div class="flex u-img__max u-only__pc">
						<div class="event-online-btn">
							<img src="<?php echo $img_url ?>/enquete/report21/q3_02__02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
						</div>
						<div class="event-online-btn">
							<div class="flex u-img__max">
								<div style="width:40%;">
									<a href="https://www.instagram.com/haseko_brancheraclub/" target="_blank" data-ga-click="enq21_6_insta">
										<img src="<?php echo $img_url ?>/enquete/report21/q3_02__03@2x.png" loading="lazy" class="u-only__pc u-img__max " alt="Instagram" />
									</a>
								</div>
								<div style="width:60%;">
									<a href="https://www.facebook.com/hasekobrancheraclub/" target="_blank" data-ga-click="enq21_7_facebook">
										<img src="<?php echo $img_url ?>/enquete/report21/q3_02__04@2x.png" loading="lazy" class="u-only__pc u-img__max " alt="Facebook" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="u-img__max u-only_sp" style="display:flex;">
						<div class="event-online-btn">
							<a href="https://www.instagram.com/haseko_brancheraclub/" target="_blank" data-ga-click="enq21_6_insta">
								<img src="<?php echo $img_url ?>/enquete/report21/q3_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="Instagram" />
							</a>
						</div>
						<div class="event-online-btn">
							<a href="https://www.facebook.com/hasekobrancheraclub/" target="_blank" data-ga-click="enq21_7_facebook">
								<img src="<?php echo $img_url ?>/enquete/report21/q3_04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="Facebook" />
							</a>
						</div>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q3_02__05@2x.png" style="margin-top:-1px;" loading="lazy" class="u-only__pc u-img__max" />
						<img src="<?php echo $img_url ?>/enquete/report21/q3_05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="1日1回スマイルがもらえるチャンス「ラッキールーム」をご存知ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="1日1回スマイルがもらえるチャンス「ラッキールーム」をご存知ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="「ラッキールーム」毎日最大100スマイルゲットのチャンス！" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="「ラッキールーム」毎日最大100スマイルゲットのチャンス！" />
					</div>
					<a href="https://haseko.flpjp.com/dailyPointGrantEntry" data-ga-click="enq21_8_luckyroom">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q4_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="いますぐチャレンジ！" />
							<img src="<?php echo $img_url ?>/enquete/report21/q4_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="いますぐチャレンジ！" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ほかにもスマイルがゲットできるサービスが！メールマガジン バースデーメール 見つけた！ポイント アンケート" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ほかにもスマイルがゲットできるサービスが！メールマガジン バースデーメール 見つけた！ポイント アンケート" />
					</div>
					<a href="https://www.haseko.co.jp/branchera/smile/accumulate-smileage.php" data-ga-click="enq21_9_tameru">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q4_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report21/q4_05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工のサービス利用でもスマイルがたまります！" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_06-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工のサービス利用でもスマイルがたまります！" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ポイントサービス「住まいレージ」を利用されたことがありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_07-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ポイントサービス「住まいレージ」を利用されたことがありますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="優待サービス「ClubOffbyHASEKO」を利用されたことがありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_08-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="優待サービス「ClubOffbyHASEKO」を利用されたことがありますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ブランシエラクラブのサービス ためて、つかって、暮らしを豊かにしませんか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_09-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ブランシエラクラブのサービス ためて、つかって、暮らしを豊かにしませんか？" />
					</div>
					<a href="<?php echo $base_url; ?>/smile/about-smile.php" data-ga-click="enq21_10_about_smile">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q4_10@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいレージはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report21/q4_10-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="住まいレージはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_11@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ClubOffbyHASEKO" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_11-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ClubOffbyHASEKO" />
					</div>
					<a href="<?php echo $base_url; ?>/gift/article/cluboff.php" data-ga-click="enq21_11_cluboff">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q4_12@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ClubOffbyHASEKOはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report21/q4_12-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ClubOffbyHASEKOはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q4_13@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ClubOffbyHASEKO" />
						<img src="<?php echo $img_url ?>/enquete/report21/q4_13-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ClubOffbyHASEKO" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q5_01@2x.png" loading="lazy" style="margin-top:-1px;" class="u-only__pc u-img__max" alt="暮らしをもっと楽しくより快適にを願うブランシエラクラブに、期待したいことや今後知りたい情報などはありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report21/q5_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="暮らしをもっと楽しくより快適にを願うブランシエラクラブに、期待したいことや今後知りたい情報などはありますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q5_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ちなみに、ブランシエラクラブの満足度は10点満点中7点以上をいただきました！" />
						<img src="<?php echo $img_url ?>/enquete/report21/q5_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ちなみに、ブランシエラクラブの満足度は10点満点中7点以上をいただきました！" />
					</div>
					<a href="https://www.haseko.co.jp/branchera/" data-ga-click="enq21_2_top">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q5_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ブランシエラクラブトップへ" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q5_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="レポートで紹介しきれなかったコンテンツも！ぜひご覧ください！" />
					</div>
					<a href="https://www.haseko.co.jp/branchera/" data-ga-click="enq21_2_top">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report21/q5_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ブランシエラクラブトップへ" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/q5_05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="" />
					</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/outro_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="貴重なご意見ありがとうございました！">
						<img src="<?php echo $img_url ?>/enquete/report21/outro_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="貴重なご意見ありがとうございました！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/outro_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
						<img src="<?php echo $img_url ?>/enquete/report21/outro_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report21/outro_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="第22回アンケートは2022年4月21日（木）〜実施！みなさまのご回答をお待ちしております！">
						<img src="<?php echo $img_url ?>/enquete/report21/outro_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="第22回アンケートは2022年4月21日（木）〜実施！みなさまのご回答をお待ちしております！">
					</div>
				</div>
		</div>
		</section>
		<?php include($inc_path . "/lib/inc/page/_enquete/__back_num.php") ?>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
