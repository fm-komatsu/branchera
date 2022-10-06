<?php
//base
include ("../../function.php");
$content = get_id_data('25024');
$pageTtl = 'あなたの今を聞かせて！<br>〜わが家の大掃除';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '早いものでもう年末ですね。この時期の恒例行事ということで、去年も取り上げた「わが家の大掃除」についてお聞きしました。世の中が落ち着きつつある今年は、去年と変化があるのかないのか…？';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年10月28日（木）～11月3日（水）";
// 回答者数
$respondents ="計3,394名";
// 対象者：
$target = "長谷工IDをお持ちの方で、迫りくる年末！今年の大掃除はどうしようかと気が重くなっている方";

$cafeReportNum = "24";


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
        <h2 class="u-font-size__30 u-color__dark mb2">わが家の大掃除</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="わが家の大掃除｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="わが家の大掃除｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>早いものでもう年末ですね。この時期の恒例行事ということで、去年も取り上げた「わが家の大掃除」についてお聞きしました。世の中が落ち着きつつある今年は、去年と変化があるのかないのか…？</p>
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
              <p class="mb3 u-font__palt">まずは大掃除の時期について。去年は「年末ギリギリ」が53％と最多でしたが、今年は「12月下旬」が28％と激減しました。代わりに増えたのが「12月初旬」や「12月中旬」。<br>「普段掃除しない所を11月中旬あたりから週末に1ヵ所ずつ行なう」や「12月に入ったら少しずつ普段しない所を掃除していく」など、早めに始める方が増えているようです。<br>また、「年末にこだわらない派」の増加にも注目。「12月は寒いので、できるだけ5月のGWシーズンや夏休み期間に行なう」や「寒い年末にしないで、気候の良い春か秋にする」など、掃除がしやすく、汚れも落ちやすい時期に済ませるという意見もありました。発想の転換ですね！</p>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜おうち時間で掃除時間も変わるんですね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
            </div>
            <div class="u-column__item u-only__pc">
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜おうち時間で掃除時間も変わるんですね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="おうち時間増加の影響は...?時間が増えて片付いたとものが増えてかえって片付かないの二極化？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="おうち時間増加の影響は...?時間が増えて片付いたとものが増えてかえって片付かないの二極化？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="気を使って掃除できないことがありますね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">巣ごもり生活も2年目。増えた“おうち時間”は日々の掃除や片付けに影響を与えたかという質問への回答は両極端に分かれました。<br>まずは「片付け時間が増えて、大掃除が必要ないくらい」というパターン。「断捨離して物を減らしたおかげで掃除がしやすく、大掃除が楽になった」や「目につくところは気になった時に掃除するようになった」などです。<br>もう一方は「テレワークで日中の人数が増え、家の中が常に雑然としています」や「家族が在宅勤務の日は“掃除機はうるさいからやめておこう”とか気を使います」と、かえって片付かなくなった、掃除頻度が減ったパターン。家族構成にもよると思いますが、どちらにせよ、影響は大きかったようです。</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p class="u-font__palt">巣ごもり生活も2年目。増えた“おうち時間”は日々の掃除や片付けに影響を与えたかという質問への回答は両極端に分かれました。<br>まずは「片付け時間が増えて、大掃除が必要ないくらい」というパターン。「断捨離して物を減らしたおかげで掃除がしやすく、大掃除が楽になった」や「目につくところは気になった時に掃除するようになった」などです。<br>もう一方は「テレワークで日中の人数が増え、家の中が常に雑然としています」や「家族が在宅勤務の日は“掃除機はうるさいからやめておこう”とか気を使います」と、かえって片付かなくなった、掃除頻度が減ったパターン。家族構成にもよると思いますが、どちらにせよ、影響は大きかったようです。</p>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="気を使って掃除できないことがありますね  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="大掃除のモチベーションを上げるには？ベランダは雨の日に窓のさんにマスキングテープ宝探しなど、具体的なアイディア多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="大掃除のモチベーションを上げるには？ベランダは雨の日に窓のさんにマスキングテープ宝探しなど、具体的なアイディア多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="ご近所に迷惑かけない事大事ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="日で決めると迷わないねimage｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 u-only__pc">去年もお聞きした「大掃除を乗り切るアイディアやコツ」では、「掃除の水が隣の家に影響しないように、ベランダ掃除は雨の日にやる」や「窓のさんに目立たないマスキングテープを貼って、剥がすだけで掃除ができるようにしている」など、より具体的な方法が寄せられました。<br>なかには「火曜日：レンジ回り、水曜日：水回り、木曜日：観葉植物関連、金曜日：金物の把手やドアノブ等、ちなんだ曜日を決めて取り組んでいます」（童謡「一週間」を彷彿とさせますね）や、「汚れた箇所を写真に撮って子どもたちに探させて掃除。宝探し感覚で楽しんでいました」などの素敵なアイディアも。</p>
							<p class="mb5 u-only__sp">去年もお聞きした「大掃除を乗り切るアイディアやコツ」では、「掃除の水が隣の家に影響しないように、ベランダ掃除は雨の日にやる」や「窓のさんに目立たないマスキングテープを貼って、剥がすだけで掃除ができるようにしている」など、より具体的な方法が寄せられました。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="ご近所に迷惑かけない事大事ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb5 u-only__sp">なかには「火曜日：レンジ回り、水曜日：水回り、木曜日：観葉植物関連、金曜日：金物の把手やドアノブ等、ちなんだ曜日を決めて取り組んでいます」（童謡「一週間」を彷彿とさせますね）や、「汚れた箇所を写真に撮って子どもたちに探させて掃除。宝探し感覚で楽しんでいました」などの素敵なアイディアも。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="日で決めると迷わないね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb3">コツやポイントを押さえるとラクで綺麗に掃除できますよね。長谷工コミュニティのWEBサービス「すてきテラス」でも「大掃除前に整えておきたいこと」と題して、大掃除を効率的に済ませるための事前準備とお埽除のポイントを紹介しています。参考にされてみてはいかがでしょうか？</p>
							<div class="cafe-report__link mb3">
								<a href="https://e-suteki.haseko.jp/suteki/before-housecleaning.html" target="_blank" data-ga-click="cafe24_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn@2x.png" alt="大掃除前に整えておきたいこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn-sp@2x.png" alt="大掃除前に整えておきたいこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb3_sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="プロに頼んだことがある方は約3割。出来栄えについてはさすが！と思った方が6割近くと概ね満足｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="プロに頼んだことがある方は約3割。出来栄えについてはさすが！と思った方が6割近くと概ね満足｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="自分ではできないところまで綺麗にしてくれそう！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="プロの技術はやっぱりスゴイですimage｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4">ではハウスクリーニングを頼んだ方の割合がどのくらいかというと約3割。「頼んだことはないが興味はある」方も含めると、約半数の方がハウスクリーニングを選択肢のひとつととらえていらっしゃるようです。<br>出来栄えについては約1割の方が、「え？この程度？」と思った点はやや気になりますが、「エアコンの掃除で排気口から真っ黒い水が出てくるところを見て、素人ではできない掃除方法であり、これからもプロの方にお願いしようと思った」や「換気扇の油汚れがさっぱりしたので、使うたびについつい触って確かめて悦に入っている」など、納得したエピソードも。「さすがプロ！」と感心された方が58％と満足度は高いようです。</p>
							<p class="u-only__pc mb8">アンケートの回答でも「無理せず場所によってはプロに頼む」と答えた方もいらっしゃいますし、大変な所だけ、掃除が難しい所だけと決めてアウトソーシングするのも手ですね。</p>
							<div class="cafe-report__link mb3">
								<a href="https://e-suteki.haseko.jp/service/house-cleaning.html" target="_blank" data-ga-click="cafe24_2">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn@2x.png" alt="長谷工のハウスクリーニングメニュー一覧 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">ではハウスクリーニングを頼んだ方の割合がどのくらいかというと約3割。「頼んだことはないが興味はある」方も含めると、約半数の方がハウスクリーニングを選択肢のひとつととらえていらっしゃるようです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="自分ではできないところまで綺麗にしてくれそう！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								出来栄えについては、約1割の方が「え？この程度？」と思った点はやや気になりますが、「エアコンの掃除で排気口から真っ黒い水が出てくるところを見て、素人ではできない掃除方法であり、これからもプロの方にお願いしようと思った」や「換気扇の油汚れがさっぱりしたので、使うたびについつい触って確かめて悦に入っている」など、納得したエピソードも。「さすがプロ！」と感心された方が58％と満足度は高いようですね。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="プロの技術はやっぱりスゴイです image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  アンケートの回答でも「無理せず場所によってはプロに頼む」と答えた方もいらっしゃいますし、大変な所だけ、掃除が難しい所だけと決めてアウトソーシングするのも手ですね。
							</p>
							<div class="cafe-report__link">
								<a href="https://e-suteki.haseko.jp/service/house-cleaning.html" target="_blank" data-ga-click="cafe24_2">
									<figure>
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="長谷工のハウスクリーニングメニュー一覧 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="大掃除面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="大掃除面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
