<?php
//base
include ("../../function.php");
$content = get_id_data('25010');
$pageTtl = 'あなたの今を聞かせて！<br>エアコンでつくる快適空間';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'これから迎える梅雨時や暑い夏は冷房が欠かせない季節。みなさんはどんなふうにエアコンをお使いですか？賢く使って電気代を抑えながら涼しく快適に過ごしたいですよね。久しぶりにエアコンをつけたときに不快な思いをしないよう、フィルターのお掃除もお早めに！ブランシエラクラブ会員のみなさんに、エアコンの使い方やお手入れについて聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年4月8日（木）～4月14日（水）";
// 回答者数
$respondents ="計2,114名";
// 対象者：
$target = "長谷工IDをお持ちの方で、100戸以上のマンションにお住まいの50歳代の方";

$cafeReportNum = "10";


//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_imakura-cafe.php" ,"いま暮らCaf&eacute;");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_magazine/cafe-header.php");
    ?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">エアコンでつくる快適空間</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！エアコンでつくる快適空間｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！エアコンでつくる快適空間｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>これから迎える梅雨の時期や暑い夏は冷房が欠かせない季節。みなさんはどんなふうにエアコンをお使いですか？賢く使って電気代を抑えながら涼しく快適に過ごしたいですよね。久しぶりにエアコンをつけたときに不快な思いをしないよう、フィルターのお掃除もお早めに！ブランシエラクラブ会員のみなさんに、エアコンの使い方やお手入れについて聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="冷房の設定温度で多いのは25~26℃。男性は暑がりさん？！女性よりも低めの傾向。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="冷房の設定温度で多いのは25~26℃。男性は暑がりさん？！女性よりも低めの傾向。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">高温多湿な日本の夏。環境省によると、冷房時の温度の推奨目安は28℃になっています。しかし、28℃の設定ではちょっと暑いと感じてしまうことがありませんか？実際にはどうなのでしょう。会員のみなさんに聞いてみると、冷房の設定温度でもっとも多かったのは「25～26℃」の回答で、41％を占めました。次いで「27℃以上」が27％、「23～24℃」が22％という結果。推奨温度よりも低めにしている人が多いようです。<br>また、男女別に見てみると、男性の方が設定温度は低めの傾向。男性はやや暑がりであることがわかります。ちなみに冷房時に1℃高めに設定すると約10％も節電になるそうです。ムダに冷えすぎないようにこまめに温度調節をしたいものですね。運転を停止するよりも、温度設定で調整した方が、節電効果が高くておトクになりますよ。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私は27℃に設定してます〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜私は27℃に設定してます〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="エアコンを長く使う場所はリビングが圧倒的多数。風向きの調整でムラなく快適に冷房できる！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="エアコンを長く使う場所はリビングが圧倒的多数。風向きの調整でムラなく快適に冷房できる！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_img01@2x.png" alt="過ごしやすいよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:348px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_img02@2x.png" alt="起きたら寒くて風邪を引いているのはイヤですよね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>家の中でエアコンを使用する時間が一番長い場所はどこですか？会員のみなさんからの回答を見ると、「リビング」が圧倒的多数でしたが、「寝室」と答えた人も少なからずいました。リビングは家族が集まり、一緒に長く過ごす場所ですから、電気代を節約しつつ、居心地のよい涼しさをキープしたいもの。その秘訣は風向きにあり！冷房の効率を上げるために、風向きを水平または上向きにしておくのをおすすめします。冷たい空気は部屋の下のほうにたまりがちなので、風向きを水平や上向きに調節することで冷気が上から下へ降り、ムラなく冷房できます。扇風機やサーキュレーターを併用して、部屋の空気をかき混ぜるとさらに効果的です。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="過ごしやすいよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								また、「ちょっと暑いなぁ」と感じたら、風量を強くするのも賢い手。体感温度が下がって涼しく感じますし、温度設定を下げるよりも消費電力が少なく済みます。寝室の場合は、就寝の1時間前に低めの温度でエアコンをつけて部屋を冷やしておきましょう。そして寝るときに快適な温度まで上げると、寝付きが良くなり、寝ている間も身体が冷えすぎなくて安心ですよ。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="起きたら寒くて風邪を引いているのはイヤですよね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="ニッポンの夏は暑さよりも湿気がつらい？エアコンの機能で人気NO.1は除湿。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="ニッポンの夏は暑さよりも湿気がつらい？エアコンの機能で人気NO.1は除湿。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02_img01@2x.png" alt="気持ちがいいです image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02_img02@2x.png" alt="湿気が下がると過ごしやすくなりますね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>現在お使いのエアコンのうち、最も新しいものの購入時期を尋ねてみたところ、39％の人が「1～3年」、24％の人が「4～6年」でした。引っ越しやエアコンの故障をきっかけに買い替える人が多いのでしょうか。みなさん、けっこう新しいエアコンをお使いになっている印象ですね。一方で「10年以上」と答えた人も16％に上りました。エアコンの故障は修理で解決する場合もありますが、製造年数が古いものは買い替えた方がメリットは大きいかもしれません。新しいエアコンにすると電気代を大幅に節約できますし、フィルター自動お掃除機能、快眠モード、空気清浄機能など、さまざまな魅力的な機能が備わっています。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="気持ちがいいですimage｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								では、エアコンのこうした便利な機能を、みなさんはどのように使っているのでしょうか？冷暖房以外でよく使う機能を聞くと、トップは「除湿」で32％、次いで「タイマー」17％、「フィルター自動洗浄」16％、「自動運転」16％でした。なるほど、高温多湿の日本では、「除湿」モードが大活躍。梅雨の時期もサラッと過ごせて心強いですよね。ただし、除湿をするために冷やした空気を、ちょうどいい温度に暖め直す“再熱除湿”方式のエアコンでは、除湿の方が冷房より電気代が高くなってしまうので注意してください。また、お出かけや就寝のときは、タイマー機能を上手に使って快適に節約している人も多いよう。つい忘れがちなお手入れを自動で行ってくれるフィルター自動洗浄機能の人気が高いのもナットクです。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="湿気が下がると過ごしやすくなりますね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="エアコンでいちばん心配なのは電気代！内部の汚れやカビ、臭いが気になる人も多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="エアコンでいちばん心配なのは電気代！内部の汚れやカビ、臭いが気になる人も多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03_img01@2x.png" alt="電気代怖い...。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03_img02@2x.png" alt="そうなる前に定期的に掃除をしましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:352px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb8 mb4_sp">コロナ禍による外出自粛の影響もあって、今年の夏も自宅で冷房を使用する時間が増えそうです。そうなると、心配なのが電気代ですよね。会員のみなさんからも、「エアコンを使っていて一番気になるのは電気代！」という声がたくさん上がっています。同様に多いのが「内部の汚れやカビ」、「臭い」でした。これ、すべてお掃除と関係があるかも…。温度設定を高くしたり、エアコンの機能を賢く使ったりすると電気代が節約できることは前の項目でお伝えしましたが、実はこまめなお掃除も節電に効果的。エアコンのフィルターにホコリが詰まってしまうと運転効率が悪くなり、余計な電気代がかかってしまうからです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="電気代怖い...。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">また、ホコリや皮脂などの汚れはカビが発生する原因になります。エアコンを久しぶりに動かしたときに、カビくさい、あるいは雑巾くさいような不快な臭いがしたら要注意！カビの胞子を大量に吸い込むと、健康に悪影響をおよぼしかねません。本格的な冷房シーズンが始まる前に、フィルターや吹き出し口をきれいにお掃除しましょう。掃除する時間がないときに手っ取り早く対処したいなら、エアコンの設定を最低温度にして1時間運転するという秘策もあり。内部に大量の結露が発生し、水となってドレンホースに一気に流れることで、臭いの原因となるカビや汚れが押し流されます。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="そうなる前に定期的に掃除をしましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="フィルターの掃除は約半数が半年〜1年に1回。約3人に1人はプロに掃除を依頼した経験あり！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="”フィルターの掃除は約半数が半年〜1年に1回。約3人に1人はプロに掃除を依頼した経験あり！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04_img01@2x.png" alt="意外と忘れちゃうのよね｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:325px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04_img02@2x.png" alt="さすがプロ！めちゃ綺麗になります！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
						</div>	
						<div class="u-column__item">
							<p class="mb8 mb4_sp">カビによる臭いの発生を防ぐためには、定期的なフィルターの掃除が欠かせません。みなさんはどれくらいの頻度で掃除をしているのでしょうか？多かったのは「半年に１回」（24％）、「１年に１回」（23％）という返答で、合わせると約半数。う～ん、ちょっと少ないかも…。「掃除はしていない」という人もかなりいて、17％に上りました。最近のエアコンはフィルター自動洗浄機能が付いているので、掃除の手間が減って助かります。それでも、できれば月１回程度はフィルターを取り外して掃除することをおすすめします。
							<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="意外と忘れちゃうのよね｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							ただし、家庭で掃除できるのはフィルターや吹き出し口といった外側のみで、エアコンの内部にこびりついた汚れまではきれいに除去できません。プロに依頼して奥の汚れまできれいにクリーニングしてもらいたいと思う人も多いのでは？実際、会員のみなさんの３人に１人はエアコンの清掃を依頼した経験があるようです。エアコンのパーツを分解して内部まで掃除してもらえば、奥に潜むカビやハウスダストも一網打尽。イヤな臭いや健康被害も防げますし、エアコン本来の能力がよみがえって効きもよくなります。臭いや冷房の効きの悪さを感じたら、エアコンクリーニングを検討するタイミングかも。早めの対策で、この夏をスッキリと快適に過ごしましょう。</br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="さすがプロ！めちゃ綺麗になります！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb3">
								<a href="https://e-suteki.haseko.jp/service/air-conditioner-cleaning.html?utm_source=brc_cafe_vol10&utm_medium=web&utm_campaign=air_conditioner_cleaning" target="_blank" data-ga-click="cafe10_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn@2x.png" alt="プロの清掃に興味のある方はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn-sp@2x.png" alt="プロの清掃に興味のある方はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<section>
				<div clas="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="Picup!!頼んで良かった、エアコンクリーニング｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="Picup!!頼んで良かった、エアコンクリーニング｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				<div>
				</div>
			</section>
			<section class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
  </article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
