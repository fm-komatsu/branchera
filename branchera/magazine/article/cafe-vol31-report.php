<?php
//base
include ("../../function.php");
$content = get_id_data('25031');
$pageTtl = 'あなたの今を聞かせて！<br>親への感謝、伝えていますか？';
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
$period = "2022年2月10日（木）～2月16日（水）";
// 回答者数
$respondents ="計2,631名";
// 対象者：
$target = "長谷工IDをお持ちの方で、親御さんへの感謝の気持ちを伝えたい方";

$cafeReportNum = "31";


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
        <h2 class="u-font-size__30 u-color__dark mb2">親への感謝、伝えていますか？</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.png" alt="<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="親への感謝、伝えていますか？" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="親への感謝、伝えていますか？" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>親御さんへの感謝の気持ち。感じてはいるものの、改まって伝えるのはなかなか難しいのではないでしょうか。きちんと伝えられている方はいつ、どんな風に？また、伝えられていない方の理由は？気になる親子のコミュニケーションについて伺ってみました！</p>
				</div>
			</section>
			<section class="mb4">
				<h3 class="mb3">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="約6割の方が感謝の気持ちを伝えられていると回答。意外と多め？！｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="約6割の方が感謝の気持ちを伝えられていると回答。意外と多め？！｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h3>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<p class="u-only__pc mb6" >「きちんと伝えられている」と回答した方が約6割と、意外と多かった印象です。身構えず「トイレットペーパーなどの大きくて運びにくい日用品をお土産として買って行って喜ばれた」など、ちょっとした気遣いでうまく伝えている方もいました。<br>一方、伝えられていない理由としては「照れくさい」「きっかけがない」が多くを占めました。<br>また「今までは言わなくても・・・と思っていたが、このアンケートを見て、やっぱりちゃんと感謝を伝えたほうがいいかな、と思った」というお言葉も。「伝えられていない」と回答されたみなさん、この機会にチャレンジしてみませんか？</p>
							<p class="u-only__sp" >「きちんと伝えられている」と回答した方が約6割と、意外と多かった印象です。身構えず「トイレットペーパーなどの大きくて運びにくい日用品をお土産として買って行って喜ばれた」など、ちょっとした気遣いでうまく伝えている方もいました。<br>一方、伝えられていない理由としては「照れくさい」「きっかけがない」が多くを占めました。<br>また「今までは言わなくても・・・と思っていたが、このアンケートを見て、やっぱりちゃんと感謝を伝えたほうがいいかな、と思った」というお言葉も。「伝えられていない」と回答されたみなさん、この機会にチャレンジしてみませんか？</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="改めてありがとうと言ってみようかな｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						</div>
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" style="max-width:335px" alt="改めてありがとうと言ってみようかな｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb8" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="伝えるタイミングは「誕生日」がダントツ。ついで「母の日」「お正月」が続きました。｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="伝えるタイミングは「誕生日」がダントツ。ついで「母の日」「お正月」が続きました。｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="誕生日は素直に感謝を伝えられますよね。｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb3" style="max-width:327px"loading="lazy">
						</div>
						<div class="u-column__item">
							<p>ではいつ伝えるのか？を伺ったところ、相手にとって特別な日である「誕生日」を選んだ方が最多でした。なかには「自分の誕生日にケーキを買って実家に帰り、丈夫な体に産んでくれてありがとうと伝えました」という素敵なエピソードも。<br>「お正月」が多かったのは、帰省のタイミングだからでしょうか。「離れて暮らしているので、帰省時には少なくとも伝えたいと思います」と、なかなか里帰りしにくい昨今、久しぶりに会った時には感謝の気持ちもあふれ出しそうです。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="誕生日は素直に感謝を伝えられますよね。｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="約半数がコミュニケーション方法に変化と回答。SNSやビデオ通話デビューも｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="約半数がコミュニケーション方法に変化と回答。SNSやビデオ通話デビューも｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="両親にタブレットをプレゼントしてから話す機会が増えました。｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:319px"  loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0">
							<p>「おうち時間」でコミュニケーション方法が変わった方は約半数。「会う機会が減っているため、電話の回数や時間が増えた」や「両親にスマホデビューをしてもらい、孫とLINEでのコミュニケーションを楽しんでもらっています」など、会えない分、連絡する回数が増えた方も多いようです。「会えなくても写真や動画をiPadで見せるととてもうれしそうに画面へ話しかけています」と、子どもや孫の写真や動画はいくらあってもよいようです。<br>一方、医療・福祉施設で生活されている親御さんがいらっしゃる方からは「面会制限のため全く会えなくなった」など影響大。早く不安な状況が収束することを願います！</p>
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="両親にタブレットをプレゼントしてから話す機会が増えました。｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="喜ばれたプレゼントのベスト3は「食事」「お花」「旅行」。一緒の時間が何よりの贈り物！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="喜ばれたプレゼントのベスト3は「食事」「お花」「旅行」。一緒の時間が何よりの贈り物！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item u-only__pc">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="旅行先だといろいろな事をゆっくり話せました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb3" style="max-width:337px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="お花を選ぶの楽しいですね！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:337px" loading="lazy">
						</div>
					</div>
					<div class="u-column__item u-only__pc">
						<div class="mb0">
							<p class="u-only__pc mb2">選ばれているプレゼントは、お花やお菓子なども多かったのですが、「食事」や「旅行」などの「時間」系が目立つ結果に。<br>「一緒に沖縄旅行したこと。旅費もプレゼントですが、両親は連れて行ってもらえることに喜んでいました」や「食事そのもの以上に企画して集まったことに喜んでくれたようです」など、親御さんにとっては「みんなと一緒にいる時間」がうれしいようです。<br>なかには「お風呂の水栓工事」や「ペットの写真で作ったカレンダー」「一緒に海外旅行。留学させてくれたお礼に通訳をがんばりました」など、気の利いたアイデアも。</p>
							<p class="u-only__pc mb8">とはいえ、まだまだ旅行や食事に誘うには難しい時期が続いています。<br>「お花が大好きですので、誕生日や母の日にいつも贈っています」と、会えない代わりに贈り物をする方も多いようです。<br>最近は、いい香りの石けんでできたお花や、長持ちするプリザーブドフラワーも水やりの手間がなく負担にならないので人気です。</p>
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="「ありがとう」の気持ちを込めて｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb2 center" loading="lazy">
								</figure>
							  <div class="cafe-report__link mb4">
									<a href="https://e-suteki.haseko.jp/service/hibiyakadan-index.html" target="_blank" data-ga-click="cafe31_3">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03@2x.png" alt="すてきテラス　日比谷花壇フラワーギフト＆観葉植物のご案内｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb2_pc center" loading="lazy">
										</figure>
									</a>
								</div>
						</div>
					</div>		
					<div class="u-column__item mb3 u-only__sp">
						<p>選ばれているプレゼントは、お花やお菓子なども多かったのですが、「食事」や「旅行」などの「時間」系が目立つ結果に。<br>「一緒に沖縄旅行したこと。旅費もプレゼントですが、両親は連れて行ってもらえることに喜んでいました」や「食事そのもの以上に企画して集まったことに喜んでくれたようです」など、親御さんにとっては「みんなと一緒にいる時間」がうれしいようです。<br>なかには「お風呂の水栓工事」や「ペットの写真で作ったカレンダー」「一緒に海外旅行。留学させてくれたお礼に通訳をがんばりました」など、気の利いたアイデアも。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="旅行先だといろいろな事をゆっくり話せました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
							<p>とはいえ、まだまだ旅行や食事に誘うには難しい時期が続いています。<br>「お花が大好きですので、誕生日や母の日にいつも贈っています」と、会えない代わりに贈り物をする方も多いようです。<br>最近は、いい香りの石けんでできたお花や、長持ちするプリザーブドフラワーも水やりの手間がなく負担にならないので人気です。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="お花を選ぶの楽しいですね！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb5" loading="lazy">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="「ありがとう」の気持ちを込めて｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb1 center" loading="lazy">
								</figure>
							<div class="cafe-report__link mb4">
								<a href="https://e-suteki.haseko.jp/service/hibiyakadan-index.html" target="_blank" data-ga-click="cafe31_3">
									<figure>
									  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03-sp@2x.png" alt="すてきテラス　日比谷花壇フラワーギフト＆観葉植物のご案内｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								  </figure>
							  </a>
						  </div>
					</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
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
