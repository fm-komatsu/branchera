<?php
//base
include ("../../function.php");
$content = get_id_data('25036');
$pageTtl = $content['title'];
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
$period = "2022年5月11日（水）～5月18日（水）";
// 回答者数
$respondents ="計3,178名";
// 対象者：
$target = "長谷工IDをお持ちで、テレワーク（在宅勤務）を経験されたことのある60代までの方";

$cafeReportNum = "36";


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
    <div class="main__wrapper cafe-report__wrapper_new">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">これからどうなる？テレワーク</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="これからどうなる？テレワーク" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="これからどうなる？テレワーク" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>コロナ禍で「やむを得ず」「仕方なく」行なってきたテレワーク。最初はいろいろと大変だったけどやってみたら意外とできた、今後も続けていきたい、やっぱり対面でないと…など、さまざまな受け止め方があるのではないでしょうか？この3年弱でどのような変化があったのか、みなさんのテレワーク事情をお聞きしてみました！！</p>
				</div>
			</section>
			<section class="mb6 mb4_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="テレワークに賛成？反対？約7割の方が賛成を表明｜
<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="テレワークに賛成？反対？約7割の方が賛成を表明｜
<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<p class="mb2">テレワークが推奨されて3年目。失敗や成功を経てきたみなさんにまずは率直に賛成か反対かを聞いてみました。<br>結果、「どちらかといえば賛成」も含め、約7割の方が賛成と答えました！<br>理由は「通勤のわずらわしさから解放される」「通勤時間を家事などにあてられる」「他人に邪魔されず、自分のペースで仕事が進められる」など。また「家事、育児との両立がしやすい」や「家族との時間が増えた」と、子育て世代には特に好評なようです。</p>
							<div class="u-column__item u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img03-sp@2x.png" alt="ズバリ、あなたはテレワーク賛成派？反対派？：円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4_sp" style="max-width:85%;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="ワークバラインスが取りやすいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb3" style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb3_sp">一方、反対の理由は「分からないことを人に聞けない」「確認したいことなどをすぐに解決できない場合があるので悩ましい」とコミュニケーション不足を危ぶむ声や、「家だと片付けや家事が気になって仕事に集中できない」「モチベーションが保てない」など、職場にいるより仕事に集中できないとの声が聞かれました。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="仕事とプレイベートの上手な区別もポイントなんですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:302px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="仕事とプレイベートの上手な区別もポイントなんですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
						<div class="u-column__item u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="ワークバラインスが取りやすいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:338px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img03@2x.png" alt="ズバリ、あなたはテレワーク賛成派？反対派？：円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:335px;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="「今はしていない」方が6割近くの一方、「週に半分」「毎日」な方が3割ほどで二極化進む？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="「今はしていない」方が6割近くの一方、「週に半分」「毎日」な方が3割ほどで二極化進む？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="雑談から仕事が進むことも多いかも｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2"  style="max-width:374px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p>今現在のテレワークの頻度については、6割の方が「以前はしていたが今はしていない」と回答されている一方、「ほぼ毎日」な方が16％もいらっしゃいました。テレワークから通常勤務に戻った方と、定着した方の二極化が起きているのでしょうか…？<br>「コミュニケーションが取りにくいため、テレワークは週に2～3日程度がよいと思う」という意見もある通り、週に半々くらいが理想的なのかもしれません。</p>
						</div>
					</div>
				</div>
				<div class="mb6 u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="雑談から仕事が進むことも多いかも｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
			</div>
			</section>
			<section class="mb6 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="テレワークの場所は「自宅」が圧倒的多数。カフェなどの利用は少数派？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="テレワークの場所は「自宅」が圧倒的多数。カフェなどの利用は少数派？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="職場と同じ環境を自宅に持つのは難しいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2"  style="max-width:356px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="リモート会議には慣れてきましたがたまに不具合も・・・｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:347px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">では、どこでテレワークをしているのか？約9割の方が「自宅」と回答。カフェや外部のレンタルスペースを利用されている方はまだまだ少数派のようです。<br>とはいえ、自宅を仕事場にするのはなかなか大変な様子。<strong>4割近くもの方が「ネット環境」や「デスクなどの設備」に不満をお持ち</strong>で、ハード面でも環境が整っているとは言いがたいようです。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="職場と同じ環境を自宅に持つのは難しいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
							</div>
							<p class="mt0 mb4">やむなく始まった感じのするテレワークですが、これからも継続していくのでしたら、思い切って環境を見直してもいいかもしれません。</p>
							<div class="mb2 mb4_sp">
								<a href="https://www.haseko.co.jp/hrf/reform/jirei/post_38.html" data-ga-click="cafe36_1" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="テレワーク対応のリフォーム事例「長谷工リフォーム　リラックス＆ワーク〜暮らしやすく働きやすい住まい」リンクボタン｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb5"  style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="テレワーク対応のリフォーム事例「長谷工リフォーム　リラックス＆ワーク〜暮らしやすく働きやすい住まい」リンクボタン｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
								</a>
							</div>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="リモート会議には慣れてきましたがたまに不具合も・・・｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb4">
								長谷工コミュニティが提供するレンタルオフィス「ビステーション」は、ビジネスに最適な環境を手軽に確保できると好評です。マンション管理で培ったノウハウを活用し、快適なビジネス空間をご提供しています。ご興味ある方はぜひご覧になってください。
							</p>
							<div class="mb2 mb4_sp">
								<a href="https://www.bistation.jp/" data-ga-click="cafe36_2" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="個人で法人でも利用できます「ビズステーション」リンクボタン｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02-sp@2x.png" alt="テレワーク対応のリフォーム事例「長谷工リフォーム　リラックス＆ワーク〜暮らしやすく働きやすい住まい」リンクボタン｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="座り方を変えるだけでも？！ちょっとした工夫でテレワークのストレスを軽減｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="座り方を変えるだけでも？！ちょっとした工夫でテレワークのストレスを軽減｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mt5">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="家族も私も心地よく過ごせるのがよいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2"  style="max-width:347px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb4 mb_sp">また、自宅でテレワークされている方の半数近くが「リビング・ダイニング」を利用されていて「家族がいると気を使ってしまう」と困っている方も多いようです。<br>そこで、暮らしのプロ「住まいスター」が、リビングで快適に働けるコツを伝授！<br>ダイニングテーブルでの着席アイデアや、グリーンを活用するなどのちょっとした工夫ですので、すぐにでも試せますよ。ぜひご一読を。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="家族も私も心地よく過ごせるのがよいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
							</div>
							<div class="mb2 mb4_sp">
								<a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol03.php" data-ga-click="cafe36_3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="快適な在宅ワークのアイデアはこちら！「住まいのSOS『食やくつろぎ』とテレワーク等が快適に共存できるリビング・ダイニング」<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="快適な在宅ワークのアイデアはこちら！「住まいのSOS『食やくつろぎ』とテレワーク等が快適に共存できるリビング・ダイニング」<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
								</a>
							</div>
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
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
