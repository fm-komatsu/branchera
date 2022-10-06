<?php
//base
include ("../../function.php");
$content = get_id_data('25032');
$pageTtl = 'あなたの今を聞かせて！<br>読んで答えて！いま暮ら“読者”感想文';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = ($content['description']);
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2022年2月24日（木）～3月2日（水）";
// 回答者数
$respondents ="計3,665名";
// 対象者：
$target = "長谷工IDをお持ちの方で、いま暮らCaféのアンケートやレポートに関心のある方";

$cafeReportNum = "32";


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
        <h2 class="u-font-size__30 u-color__dark mb2">読んで答えて！いま暮ら“読者”感想文</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.png" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb8 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="読んで答えて！いま暮ら”読者”感想文" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="読んで答えて！いま暮ら”読者”感想文" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>おかげさまで「いま暮らCafé」は掲載30回を超えました。さらに充実した記事作りを目指して、日頃から「いま暮らCafé」のアンケートに参加していただいているみなさんにご意見を伺ってみました。温かい励ましのお言葉や手きびしいご意見をご紹介します！</p>
				</div>
			</section>
			<section class="mb8 mb2_sp">
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="まずは「読みやすさ」。約8割の方に「読みやすい」という評価をいただけました！<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="まずは「読みやすさ」。約8割の方に「読みやすい」という評価をいただけました！<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p>今回読んでいただいた2つの記事は、どちらも8割以上の方に「読みやすい」との評価をいただきましたが、やはり短めの「結露対策」の方が読みやすさを感じられたようです。また「身近な話題が多いので親しみを感じます」や「全体的に明るい感じで読みやすい」など、多数のお褒めの言葉をいただきました。ありがとうございます！<br>一方、「テーマや内容は良いが、文字の色が薄くて読みにくい」などのご意見もいただきましたので、改善を検討したいと思います。</p>
						</div>
            <div class="u-column__item center">
              <figure class="mb5">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="いつもご来店いただきありがとうございます！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc" style="max-width:299px;" loading="lazy">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="いつもご来店いただきありがとうございます！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp" style="max-width:85%;" loading="lazy">
							</figure>
							<div class="cafe-report__link mb6">
								<a href="<?php echo $base_url ?>/magazine/article/cafe-vol22-report.php" data-ga-click="cafe32_1">
									<figure class="mb5">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn01@2x.png" alt="こんなコンセプトマンションを作ってみたい！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb6">
								<a href="<?php echo $base_url ?>/magazine/article/cafe-vol27-report.php" data-ga-click="cafe32_2">
									<figure class="mb3">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn02@2x.png" alt="みんなどうしてる？結露対策 ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
									</figure>
								</a>
							</div>
            </div>
          </div>
        </div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="記事のボリュームや流れがポイントに。グラフの使い方や切り口に少々課題あり？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="記事のボリュームや流れがポイントに。グラフの使い方や切り口に少々課題あり？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="ノウハウは知りたいですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:247px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="私もテーマの切り口をもっと魅力的にしないと<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:272px;" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>ボリュームの違う2つの記事での質問でしたが回答に大きな差はないものの、長めの記事では「イラストの使い方」が、短めの記事では「全体ボリューム」が読みやすさの理由1位となりました。共通して他に「文字量」や「記事の流れ」も読みやすさの要素のようです。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="ノウハウは知りたいですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:75%;" loading="lazy">
							<p>また「取り上げるテーマは適切だが、ユーザーの感想やグラフより課題への対応ノウハウにウエイトを置くとよい」や「リフォームをしてよかったことがあるのは当たり前なので、もっとこうすればよかったなど、失敗談的な話も聞いてみたい」と、結果そのものよりも、アンケートによって浮き彫りにされた課題についてスペースを割いてほしいというご意見もいただきました。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="私もテーマの切り口をもっと魅力的にしないと<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:75%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="内容については「興味深い」とのお声もありますが、さらに深い内容へのご要望も｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="内容については「興味深い」とのお声もありますが、さらに深い内容へのご要望も｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="もっと深掘りした内容も知りたいな<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:278px;" loading="lazy">
						</div>
						<div class="u-only__pc center">
							<div class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="なるほど！って記事を見つけると、得した気分になるね" class="u-img__max"  style="max-width:266px;" loading="lazy">
							</div>
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<p>記事をお読みになった感想は「へぇ～」が31％、「なるほど」が22％でした。「分かりやすさを追求しているのはいいと思うが、もう少し突っ込んだ内容も入れてくれると『へぇ～』と言えるようになると思う」や「もっと現実的で役に立つ記事を掲載してほしい」とのお声をいただいていますので、より具体的なノウハウや実践的な内容を求められていると感じました。<br class="u-only__pc">一方、「脱炭素社会の話は分かりやすい説明で納得しました。分かったつもりでいたのが正しく修正できてよかった」といううれしいお声も。</p>
						</div>
						<div class="cafe-report__link mb6  u-only__pc">
							<a href="<?php echo $base_url ?>/magazine/article/cafe-vol29-report.php" data-ga-click="cafe32_3">
								<figure class="mb6">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01@2x.png" alt="脱酸素ってなんだろう？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
								</figure>
							</a>
							<p>今後は、「なるほど！」と思っていただける方の割合（現在約2割）を増やすべく努力していきます。</p>
						</div>
						<div class="mb3 u-only__sp mb4_sp">
							<p>記事をお読みになった感想は「へぇ～」が31％、「なるほど」が22％でした。「分かりやすさを追求しているのはいいと思うが、もう少し突っ込んだ内容も入れてくれると『へぇ～』と言えるようになると思う」や「もっと現実的で役に立つ記事を掲載してほしい」とのお声をいただいていますので、より具体的なノウハウや実践的な内容を求められていると感じました。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="もっと深掘りした内容も知りたいな<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb4_sp center" style="max-width:75%;" loading="lazy">
							<p>一方、「脱炭素社会の話は分かりやすい説明で納得しました。分かったつもりでいたのが正しく修正できてよかった」といううれしいお声も。</p>
						</div>
						<div class="u-only__sp">
							<div class="cafe-report__link mb6  u-only__sp">
								<a href="<?php echo $base_url ?>/magazine/article/cafe-vol29-report.php" data-ga-click="cafe32_3">
									<figure class="mb6 mb3_sp">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01@2x.png" alt="脱酸素ってなんだろう？ ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
									</figure>
								</a>
							</div>
							  <p>今後は、「なるほど！」と思っていただける方の割合（現在約2割）を増やすべく努力していきます。</p>
							<div class="mb3_sp center">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="なるほど！って記事を見つけると、得した気分になるね <?php echo strip_tags($pageTtl); ?>" class="u-img__max center" style="max-width:75%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb0 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="今後、取り上げてほしい内容は「収納」「リフォーム」「掃除」など、やはり住宅関連が多め！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="今後、取り上げてほしい内容は「収納」「リフォーム」「掃除」など、やはり住宅関連が多め！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="みなさんが「いいね」できる記事を目指していきます<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:252px;" loading="lazy">
						</div>
						<div class="u-only__pc">
							<div class="mb3 center">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="リフォームは家族が増えると気になりますね" class="u-img__max center"  style="max-width:266px;" loading="lazy">
							</div>
							<div class="mb3 center">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img03@2x.png" alt="みなさんのコメントで勉強させていただいています！" class="u-img__max center"  style="max-width:320px;" loading="lazy">
							</div>
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<p>関心のあるテーマについてお聞きしたところ、やはり「リフォーム」をトップに「収納」「掃除」など住宅に関するものが続きました。さらに「相手に対して効果的かつ波風の立たないような、生活騒音への対処方法」や「マンションの近所付き合い」など、ソフト面の対応へのご要望も。音のテーマは以前取り上げていまして、「マンションの音の問題について、よくまとまっていると思います。今後も継続して取り上げてほしい」と高評価をいただいております。ぜひご一読を。</p>
						</div>
						<div class="cafe-report__link mb6  u-only__pc">
							<a href="<?php echo $base_url ?>/magazine/article/cafe-vol11-report.php" data-ga-click="cafe32_4">
								<figure class="mb6">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="ちょっと気になる音のトラブル教えてください ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
								</figure>
							</a>
							<p class="mb2">また「テレワーク企画をまたお願いします」や「我が家の大掃除。視点を変えて継続希望」など続編のリクエストも。</p>
							<p>今回のアンケートを通じてアーカイブ記事を読んだ感想として「今回改めて結露のコンテンツを読むことができたのでよかったです」「これから時間があったら特集を見てみたい。面白そうな記事があった」といったお言葉をいただいております。<br>「いま暮らCafé」は、これからもみなさんの暮らしに寄り添ってまいりますので、どうぞよろしくお願いします！</p>
						</div>
						<div class="cafe-report__link mb6  u-only__pc">
							<a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php" data-ga-click="cafe32_5">
								<figure class="mb6">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="いま暮らCafeインデックス ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
								</figure>
							</a>
						</div>	
						<div class="mb3 u-only__sp mb4_sp">
							<p class="mb4">関心のあるテーマについてお聞きしたところ、やはり「リフォーム」をトップに「収納」「掃除」など住宅に関するものが続きました。さらに「相手に対して効果的かつ波風の立たないような、生活騒音への対処方法」や「マンションの近所付き合い」など、ソフト面の対応へのご要望も。音のテーマは以前取り上げていまして、「マンションの音の問題について、よくまとまっていると思います。今後も継続して取り上げてほしい」と高評価をいただいております。ぜひご一読を。</p>
							<div class="cafe-report__link mb6  u-only__sp">
								<a href="<?php echo $base_url ?>/magazine/article/cafe-vol11-report.php" data-ga-click="cafe32_4">
									<figure class="mb6 mb3_sp">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="ちょっと気になる音のトラブル、教えてください ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
									</figure>
								</a>
							</div>
							<figure class="mb6 mb3_sp center">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="みなさんが「いいね」できる記事を目指していきます ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" style="max-width:75%;" loading="lazy">
							</figure>
							<p class="mb4">また「テレワーク企画をまたお願いします」や「我が家の大掃除。視点を変えて継続希望」など続編のリクエストも。</p>
							<figure class="mb6 mb3_sp center">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="リフォームは家族が増えると気になりますね ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" style="max-width:75%;" loading="lazy">
							</figure>
							<p class="mb4">今回のアンケートを通じてアーカイブ記事を読んだ感想として「今回改めて結露のコンテンツを読むことができたのでよかったです」「これから時間があったら特集を見てみたい。面白そうな記事があった」といったお言葉をいただいております。<br>「いま暮らCafé」は、これからもみなさんの暮らしに寄り添ってまいりますので、どうぞよろしくお願いします！</p>
						</div>
						<div class="mb3_sp u-only__sp center">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img03@2x.png" alt="みなさんのコメントで勉強させていただいています！ <?php echo strip_tags($pageTtl); ?>" class="u-img__max center" style="max-width:85%;" loading="lazy">
						</div>
						<div class="cafe-report__link mb2  u-only__sp">
							<a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php" data-ga-click="cafe32_5">
								<figure class="mb6 mb3_sp">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="いま暮らCafeインデックス｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
								</figure>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:80%;" loading="lazy">
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
