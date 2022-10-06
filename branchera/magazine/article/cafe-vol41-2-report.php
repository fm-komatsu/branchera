<?php
//base
include("../../function.php");
$content = get_id_data('25042');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']) . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = ($content['description']);
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['title'];

//bodyClass
$body_class = "page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2022年7月27日（水）～8月3日（水）";
// 回答者数
$respondents = "計3,477名";
// 対象者：
$target = "長谷工IDをお持ちの方で、長谷工の事業に興味関心のある方";

$cafeReportNum = "41-2";


//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main" lang="ja">
	<article class="main__row u-font__break">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_imakura-cafe.php", "いま暮らCaf&eacute;");
		include($inc_path . "/lib/inc/pan.php");
		include($inc_path . "/lib/inc/page/_magazine/cafe-header.php");
		?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1';
			//include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php");
			?>
		</aside>
		<div class="main__wrapper cafe-report__wrapper_new">
			<section class="main__item mb8 mb4_sp">
				<h2 class="u-font-size__30 u-color__dark mb2"><?php echo strip_tags($pageTtl) ?></h2>
				<div class="u-assist_cafe_low u-only__pc u-font__palt">
					回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
					回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

				</div>
				<div class="u-assist_cafe_low u-only__sp u-font__palt u-font-size__14_sp">
					回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
				</div>
				<div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v.jpg" alt="○○なら長谷工！どんなイメージ？ ～前編～" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp.jpg" alt="○○なら長谷工！どんなイメージ？ ～前編～" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p><?php echo $metaDesc; ?></p>
				</div>
			</section>
			<section class="mb4 mb4_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl.png" alt="マンションの「リフォーム」、「管理」、「売買」それぞれの事業で思い浮かべる会社はどこ？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp.png" alt="マンションの「リフォーム」、「管理」、「売買」それぞれの事業で思い浮かべる会社はどこ？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb4_sp">
							<p class="mb2">長谷工といえば「マンション施工の会社」というイメージを持つ方が多いのですが、住まいと暮らしにかかわる事業領域は広く、マンションにおけるさまざまな事業を手掛けています。マンション施工以外でみなさんの中に「長谷工」の名前がどれくらい浸透しているのかが、気になるところ。そこで「リフォーム」、「管理」、「売買」について、それぞれパッと思い浮かぶ会社名を挙げてもらいました。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01.png" alt="管理は結構知られているんですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:326px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp.png" alt="管理は結構知られているんですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
						<div class="u-column__item">
							<h5 class="mb0 u-ttl__s cafe-vol41-2-report__color_pink">●リフォーム</h5>
							<p>
								「マンション・建物のリフォームのことなら○○○。思い浮かべるのはどの会社？」の質問に対して、5割以上が「長谷工」と答えてくれました。次いで「住友不動産の新築そっくりさん」、「三井のリハウス」が多く、LIXIL、東急リバブルの名前も挙がりました。
							</p>
							<h5 class="mb0 u-ttl__s cafe-vol41-2-report__color_pink">●管理</h5>
							<p>
								同じく「管理のことなら○○○」の質問には、約7割が「長谷工」と回答。長谷工の管理事業は多くのみなさんに知っていただいているようです。三井不動産、東急コミュニティー、野村不動産、大京などの社名も挙がりました。
							</p>
							<h5 class="mb0 u-ttl__s cafe-vol41-2-report__color_pink">●売買</h5>
							<p>
								「売買のことなら○○○」の質問に、「長谷工」という回答は全体の約4割でした。売買事業はリフォームや管理事業に比べると、やや知名度が低いのかもしれません。他社では三井不動産、住友不動産、東急リバブルの名前が目立ちました。
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl.png" alt="この10年間で長谷工のイメージが変化した人は3割。どんなふうに変わった？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp.png" alt="この10年間で長谷工のイメージが変化した人は3割。どんなふうに変わった？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01.png" alt="「10年ひと昔」。あなたの長谷工グループに対してのイメージは、この10年間で変化がありましたか。 回答円グラフ|<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb5" style="max-width:333px;" loading="lazy">
							<div class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02.png" alt="♪マンションのことならわかるんだ～｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2" style="max-width:308px;" loading="lazy">

							</div>
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p class="mb2 mb4_sp">「10年ひと昔」というように、世の中の移り変わりって激しいですよね。企業のイメージもずっと同じではないはず。世間の「長谷工」に対するイメージは、この10年でどんなふうに変化したのでしょうか？会員のみなさんの回答は「変化なし」が46%、「変化あり」が30%、そして「10年前は知らなかった」が24%でした。
							</p>
							<div class="mb5_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp.png" alt="「10年ひと昔」。あなたの長谷工グループに対してのイメージは、この10年間で変化がありましたか。 回答円グラフ|<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
							</div>
							<h5 class="mb0 u-ttl__s cafe-vol41-2-report__color_pink">●「変化あり」の要因は？</h5>

							<p>
								「変化あり」と答えた方は「テレビCMを見て、視点が多角的でチャレンジングな企業だという印象が強くなりました」といった内容の意見が多いようです。「CO2の排出削減などSDGsへの取り組みから地球にやさしい企業というイメージになった」、「介護事業を手掛けていることを知り、社会貢献に力を入れているイメージが加わった」など、社会的な取り組みに注目している方も少なくありません。「いろいろと情報発信する会社になったと思う」、「昔はゼネコン大手、今はマンション全般的な大手企業」といった声も聞かれました。

							</p>
							<h5 class="mb0 u-ttl__s cafe-vol41-2-report__color_pink"> ●長谷工を知ったきっかけは？
							</h5>
							<p>
								「10年前は知らなかった」と答えた人に長谷工を知ったきっかけを聞くと、圧倒的に多かったのが「テレビCM」と「マンション購入」でした。「SNSで知った」方や、「マンションの管理会社が長谷工になったから」という回答もありました。

							</p>
						</div>
						<div class="mb4_sp u-only__sp">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp.png" alt="♪マンションのことならわかるんだ～｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb6 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl.png" alt="これからの「長谷工」に期待することは何？介護事業、社会貢献、環境保全など内容は多彩｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp.png" alt="これからの「長谷工」に期待することは何？介護事業、社会貢献、環境保全など内容は多彩｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mb4">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01.png" alt="未来の夢の住まいづくりに期待｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mt2 mb4" style="max-width:248px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02.png" alt="プロスポーツのスポンサーになって！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mt2" style="max-width:288px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">みなさんにこれからの「長谷工」に期待することを聞いてみました。結果は十人十色ながら、なるほどとうなずくものばかり。「シニア向けマンション、介護施設の充実」など高齢化社会を見据えたものから、「CO2排出量の削減」、「サステナビリティ」、「SDGsに沿った経営」といった地球環境や社会への配慮を求める声、「災害支援」、「慈善活動」などの社会貢献に期待する声など、実に多彩な内容が寄せられました。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp.png" alt="プロスポーツのスポンサーになって！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:80%;" loading="lazy">
							</div>
							<p class="mt0 mb3_sp">みなさんの熱い期待にお応えできるように、長谷工はこれからもがんばります！
							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp.png" alt="未来の夢の住まいづくりに期待｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:80%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl.png" alt="長谷工に点数を付けたら、10点満点で何点？約4割が8点、合計8割近くが7点以上の高評価｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp.png" alt="長谷工が手掛けている 長谷工に点数を付けたら、10点満点で何点？約4割が8点、合計8割近くが7点以上の高評価｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mt2">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01.png" alt="アフターサービスにさらに力を入れて｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:228px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02.png" alt="引き続き堅実な経営を！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:240px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb0 mb2_sp">10点満点で点数を付けるとしたら「長谷工」は何点ですか？ ずばり、会員のみなさんに評価を聞きました。ドキドキしながら結果を見ると、8点が41%でトップ。次いで7点（18%）、9点（17%）で、10点を付けた方も11%と、かなりの高評価をいただきました。6点（6%）、5点（5%）という回答も少なからずあり、もっと努力しなければと気を引き締めています。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01.png" alt="アフターサービスにさらに力を入れて｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:80%;" loading="lazy">
							</div>
							<div class="mt3_sp mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp.png" alt="引き続き堅実な経営を！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4" style="max-width:80%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl.png" alt="前編で長谷工の “意外な事業”を尋ねたクイズ 正解は「ミュージアム」でした！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl-sp.png" alt="前編で長谷工の “意外な事業”を尋ねたクイズ 正解は「ミュージアム」でした！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<p class="mb3">長谷工コーポレーションの創業80周年を記念して2018年10月、東京都多摩市の長谷工テクニカルセンターの中に「長谷工マンションミュージアム」が誕生しました。集合住宅の歴史や工事現場の様子、未来のカタチなど、マンションにかかわるもの全てを見て、触れて、実感していただける“ミュージアム”です。</p>
						<div>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01.png" alt="ぜひ見学にお越しください｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:85%;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb8">
							<a href=" https://www.haseko.co.jp/hmm/" target="_blank" class="" data-ga-click="cafe41-2_1">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01.png" alt="マンションづくりの歴史が分かる設計やコンクリート練りなどの体験も！「長谷工マンションミュージアム」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:95%;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01-sp.png" alt="マンションづくりの歴史が分かる設計やコンクリート練りなどの体験も！「長谷工マンションミュージアム」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4" loading="lazy">

							</a>

						</div>
						<div class="mb4_sp">
							<a href="<?php echo $base_url; ?>/magazine/article/cafe-vol41-1-report.php" class="" data-ga-click="cafe41-2_2">
								<img src=" <?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02.png" alt="前編を振り返りたい方はこちら！「○○なら長谷工！どんなイメージ？ ～前編～」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:95%;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02-sp.png" alt="前編を振り返りたい方はこちら！「○○なら長谷工！どんなイメージ？ ～前編～」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4" loading="lazy">

							</a>

						</div>
						<div>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01-sp.png" alt="ぜひ見学にお越しください｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4" style="max-width:85%;" loading="lazy">

						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
				</figure>
			</section>
		</div>
		<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2";
		include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php"); ?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
