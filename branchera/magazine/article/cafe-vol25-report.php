<?php
//base
include ("../../function.php");
$content = get_id_data('25025');
$pageTtl = 'あなたの今を聞かせて！<br>〜知りたい！あなたの家はどんなお雑煮？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '2022年もすぐそこ。晴れやかな気分で新年を迎えたいものですね。お正月の定番料理といえば「お雑煮」。江戸時代にはすでに、1年を無事に過ごせることを願って元旦にお雑煮を食べる習わしがあったそうです。お雑煮は具材やだし汁、お餅の形や食べ方まで、地域や家庭によって実にさまざま。あなたの家ではどんなお雑煮を食べていますか？';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年11月11日（木）～11月17日（水）";
// 回答者数
$respondents ="計2,923名";
// 対象者：
$target = "長谷工IDをお持ちの方で、「お正月はお雑煮！」と思っている方";

$cafeReportNum = "25";


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
        <h2 class="u-font-size__30 u-color__dark mb2">〜知りたい！あなたの家はどんなお雑煮？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="知りたい！あなたの家はどんなお雑煮？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="知りたい！あなたの家はどんなお雑煮？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>2022年もすぐそこ。晴れやかな気分で新年を迎えたいものですね。お正月の定番料理といえば「お雑煮」。江戸時代にはすでに、1年を無事に過ごせることを願って元旦にお雑煮を食べる習わしがあったそうです。お雑煮は具材やだし汁、お餅の形や食べ方まで、地域や家庭によって実にさまざま。あなたの家ではどんなお雑煮を食べていますか？</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="大掃除の時期は年末ギリギリが5割から3割に激減。早めに始めて少しずつ進める方が増えてきているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="大掃除の時期は年末ギリギリが5割から3割に激減。早めに始めて少しずつ進める方が増えてきているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p>お雑煮といえば、「元旦から数日にわたって食べる、お餅が入った汁仕立ての料理」という点では一致しているものの、具材や味付けはバリエーション豊かで、「違う料理なのでは？」というくらい全国各地で違っています。東日本では焼いた角餅を入れた醤油仕立てが好まれ、関西や四国ではゆでた丸餅を入れた白味噌仕立て、そして中国・九州地方ではゆでた丸餅を入れた醤油仕立てのお雑煮が多いようです。会員のみなさんはどんな味付けのお雑煮を食べているのでしょうか？圧倒的に多かったのが「醤油」派で、約7割に上りました。次いで「白味噌」派が約2割で、少数ながら「赤味噌」派の人もいました。<br>お餅の形は東西で違いが見られますが、その境界線は天下分け目の合戦と同じく関ヶ原だそう。関ヶ原よりも東の地域はお餅をのして包丁で切った「角餅」、西の地域は「丸餅」が主流です。</p>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜赤味噌のお雑煮もあるんですね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
            </div>
            <div class="u-column__item u-only__pc">
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜赤味噌のお雑煮もあるんですね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="所変われば、具材もだしも変わる我が家のお雑煮の作り方のルーツはどこ？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="所変われば、具材もだしも変わる我が家のお雑煮の作り方のルーツはどこ？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="実家の味はやっぱり落ち着きますね〜  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">地域によって具材が驚くほど変わるのも、お雑煮文化の楽しさですよね。たとえば、宮城県では焼きハゼ、新潟県ではいくらや鮭、広島県では牡蠣、長崎県ではぶりなど、その土地で採れた海の幸が入っていますし、香川県ではなんと、あんこの入ったお餅を使うのだそうです。あなたの家で食べているお雑煮の味付けや具材は、どこから受け継いだものですか？会員のみなさんにルーツを尋ねると、約6割が「自分のふるさと・実家の味」、そして約3割が「家族（夫や妻）のふるさとの味」でした。「ネットや本で知った美味しそうな味」を我が家のお雑煮にした人もいますが少数の結果に。やはり生まれ育った地域や家庭のお雑煮は多くの人々にとって格別の味なのでしょう。ご夫婦の出身地が違っていても、どちらかのふるさとの味を継承している家庭が多いこともわかりました。</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p class="u-font__palt">地域によって具材が驚くほど変わるのも、お雑煮文化の楽しさですよね。たとえば、宮城県では焼きハゼ、新潟県ではいくらや鮭、広島県では牡蠣、長崎県ではぶりなど、その土地で採れた海の幸が入っていますし、香川県ではなんと、あんこの入ったお餅を使うのだそうです。あなたの家で食べているお雑煮の味付けや具材は、どこから受け継いだものですか？会員のみなさんにルーツを尋ねると、約6割が「自分のふるさと・実家の味」、そして約3割が「家族（夫や妻）のふるさとの味」でした。「ネットや本で知った美味しそうな味」を我が家のお雑煮にした人もいますが少数の結果に。やはり生まれ育った地域や家庭のお雑煮は多くの人々にとって格別の味なのでしょう。ご夫婦の出身地が違っていても、どちらかのふるさとの味を継承している家庭が多いこともわかりました。</p>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="実家の味はやっぱり落ち着きますね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="うちのお雑煮は他とは違う！譲れないこだわりに、郷土愛の深さを見た｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="うちのお雑煮は他とは違う！譲れないこだわりに、郷土愛の深さを見た｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="うちの実家も鶏肉入ってたなぁ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:318px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="うちの実家も鶏肉入ってたなぁ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:367px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 u-only__pc">うちのお雑煮は他とここが違う！そんな「我が家ならではのこだわり」を会員のみなさんに聞いたところ、どなたのお雑煮にも郷土愛がたっぷり。特に個性を感じたのが具材でした。「必ず入れるのは、なると、高野豆腐、里芋」、「焼きあなごが良いだしになります」、「我が家はあごだしに、具はぶり、鶏肉、かつお菜、蒲鉾などが入った博多スタイル」、「奈良独自かも！白味噌仕立てのお雑煮で中の丸餅にきな粉をまぶして食べます」、「アコヤガイの貝柱を入れるのが我が家流」、「故郷の川で採れる青海苔を火で炙ってのせます」など、どれも想像しただけで美味しそう♪なかには「具材は松茸」という贅沢なお雑煮もありました。だし汁は鰹だしや鶏だしが主流ですが、「昆布や干しえびでだしを取る」、「干し椎茸の戻し汁を使う」というご意見や、「帆立の乾燥貝柱でだしを取る」、「瀬戸内の港町にある実家では、干したふぐでだしを取っていた」などご当地色のあるレシピもうかがえます。ご家庭ごとにある自慢のお雑煮、あれこれみんな食べ比べてみたくなりますよね！</p>
							<p class="mb2 u-only__sp">うちのお雑煮は他とここが違う！そんな「我が家ならではのこだわり」を会員のみなさんに聞いたところ、どなたのお雑煮にも郷土愛がたっぷり。特に個性を感じたのが具材でした。「必ず入れるのは、なると、高野豆腐、里芋」、「焼きあなごが良いだしになります」、「我が家はあごだしに、具はぶり、鶏肉、かつお菜、蒲鉾などが入った博多スタイル」、「奈良独自かも！白味噌仕立てのお雑煮で中の丸餅にきな粉をまぶして食べます」、「アコヤガイの貝柱を入れるのが我が家流」、「故郷の川で採れる青海苔を火で炙ってのせます」など、どれも想像しただけで美味しそう♪なかには「具材は松茸」という贅沢なお雑煮もありました。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="我が家の味はどれも一番ですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb2 u-only__sp">だし汁は鰹だしや鶏だしが主流ですが、「昆布や干しえびでだしを取る」、「干し椎茸の戻し汁を使う」というご意見や、「帆立の乾燥貝柱でだしを取る」、「瀬戸内の港町にある実家では、干したふぐでだしを取っていた」などご当地色のあるレシピもうかがえます。ご家庭ごとにある自慢のお雑煮、あれこれみんな食べ比べてみたくなりますよね！</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="我が家の味はどれも一番ですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb4_sp center" loading="lazy">
							<div class="cafe-report__link mb3">
								<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic113.php" data-ga-click="cafe25_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01@2x.png" alt="基本のお雑煮レシピ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01-sp@2x.png" alt="基本のお雑煮レシピ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb3_sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="お雑煮やおせち料理の他に、お正月に決まって食べる定番料理は？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="お雑煮やおせち料理の他に、お正月に決まって食べる定番料理は？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="お寿司は食卓も映えますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:358px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="カニは大好き！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:347px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb8">お正月の料理といえば、真っ先に思いつくのがおせち。でも、おせちやお雑煮ばかり続くと飽きてしまって、違う料理が食べたくなりますよね。だからでしょうか、お正月に決まって食べる特別な定番料理がどのご家庭でもけっこうあるみたいです。会員のみなさんは、どんな料理を毎年楽しんでいるのでしょうか？ダントツで多かったのは「お寿司」でした。親戚が集まったときなどに出すと豪華ですし、お正月気分を味わうのにもぴったりでナットク！同じく大人気だったのが「すき焼き」でした。ちょっと高級なお肉を食べて新年を贅沢にスタートするのもいいですね。お正月にはカニ！という人もたくさんいて、「カニ鍋」という言葉も目立ちました。カニに限らず、鍋料理は使う食材で豪華さを演出できますし、調理の手間もかかりません。おせちに飽きたころに、できたて熱々の鍋物を家族みんなで囲むひとときは、美味しさも楽しさも格別でしょう。</p>
							<div class="cafe-report__link mb3">
								<a href="<?php echo $base_url; ?>/magazine/article/recipe14.php" data-ga-click="cafe25_2">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="「うちのごはんは世界イチ」手作りのおせち料理レシピ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
								<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic116.php" data-ga-click="cafe25_3">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="「うちのごはんは世界イチ」基本のすき焼きの作り方。割り下のレシピもご紹介！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">お正月の料理といえば、真っ先に思いつくのがおせち。でも、おせちやお雑煮ばかり続くと飽きてしまって、違う料理が食べたくなりますよね。だからでしょうか、お正月に決まって食べる特別な定番料理がどのご家庭でもけっこうあるみたいです。会員のみなさんは、どんな料理を毎年楽しんでいるのでしょうか？ダントツで多かったのは「お寿司」でした。親戚が集まったときなどに出すと豪華ですし、お正月気分を味わうのにもぴったりでナットク！<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="お寿司は食卓も映えますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								同じく大人気だったのが「すき焼き」でした。ちょっと高級なお肉を食べて新年を贅沢にスタートするのもいいですね。お正月にはカニ！という人もたくさんいて、「カニ鍋」という言葉も目立ちました。カニに限らず、鍋料理は使う食材で豪華さを演出できますし、調理の手間もかかりません。おせちに飽きたころに、できたて熱々の鍋物を家族みんなで囲むひとときは、美味しさも楽しさも格別でしょう。</br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="カニは大好き！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb4">
								<a href="<?php echo $base_url; ?>/magazine/article/recipe14.php" data-ga-click="cafe25_2">
									<figure>
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="「うちのごはんは世界イチ」手作りのおせち料理レシピ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link">
								<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic116.php" data-ga-click="cafe25_3">
									<figure>
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02-sp@2x.png" alt="「うちのごはんは世界イチ」手作りのおせち料理レシピ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="お雑煮のエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="お雑煮のエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="エピソード紹介 お雑煮のエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="エピソード紹介 お雑煮のエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
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
