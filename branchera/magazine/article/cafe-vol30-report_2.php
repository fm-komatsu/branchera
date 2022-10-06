<?php
//base
include ("../../function.php");
$content = get_id_data('25030');
$pageTtl = 'あなたの今を聞かせて！<br>大切な命を守るために、防災を！';
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
$period = "2022年1月27日（木）～2月2日（水）";
// 回答者数
$respondents ="計3,161名";
// 対象者：
$target = "長谷工IDをお持ちの方で、身の回りの安全や防災について関心のある方";

$cafeReportNum = "30";


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
			<?php $CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">大切な命を守るために、防災を！</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="大切な命を守るために、防災を！" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="大切な命を守るために、防災を！" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>地震大国ニッポン。過去に記憶に残る大きな震災があり、最近も小さな揺れを含めて各地で地震が頻発しています。いつどこで起きるかわからない地震に備えて、日頃から防災意識を高め、いざというときの対策を心がけておきたいものですね。いま一度、ご一緒に災害への備えを見つめ直しましょう。</p>
				</div>
			</section>
			<section class="mb4">
				<h3 class="mb3">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="大地震が起きたとき一番心配なことは？<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="大地震が起きたとき一番心配なことは？<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h3>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" style="max-width:335px" alt="勤め先で被災したとき交通機関がストップして家族のもとへ戻れないのがとても辛いね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb8" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02@2x.png" style="max-width:302px" alt="トイレが使えないことも大変です！<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb6" >4つのプレートが接する日本列島では、どこへ行っても地震から逃れられないのが現実だそう。今後30年以内に大規模な地震が起きる確率が高いという予想もあり、「もし自分の住むエリアで起きたら…」と思うと不安ですよね。被災によるさまざまなトラブルが予想されますが、最も心配になるのはどんなことなのでしょう？会員のみなさんが心配するのは「家族の安否」で、ダントツでした。次いで多かったのが「水道・ガス・電気などの停止」。さらに「建物の倒壊」、「食料、飲料水、日用品の確保が困難になること」が続きました。家族やライフラインの安全への不安が強いことがわかります。</p>
							<p class="u-only__sp" >4つのプレートが接する日本列島では、どこへ行っても地震から逃れられないのが現実だそう。今後30年以内に大規模な地震が起きる確率が高いという予想もあり、「もし自分の住むエリアで起きたら…」と思うと不安ですよね。被災によるさまざまなトラブルが予想されますが、最も心配になるのはどんなことなのでしょう？会員のみなさんが心配するのは「家族の安否」で、ダントツでした。次いで多かったのが「水道・ガス・電気などの停止」。さらに「建物の倒壊」、「食料、飲料水、日用品の確保が困難になること」が続きました。家族やライフラインの安全への不安が強いことがわかります。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="勤め先で被災したとき交通機関がストップして家族のもとへ戻れないのがとても辛いね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02-sp@2x.png" alt="トイレが使えないことも大変です！<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="備えあれば憂なし 大地震に備えてどんな対策をしている？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="備えあれば憂なし 大地震に備えてどんな対策をしている？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="定期的な備蓄品の確認も必要です。<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb3" style="max-width:327px"loading="lazy">
						</div>
						<div class="u-column__item">
							<p>いつ発生しても不思議ではない大地震への備え。あなたはどんなものを備蓄・保管していますか？多かった回答は「非常持ち出し袋」でした。ひと通りの防災用品が入っているから頼りになりますよね。個別のアイテムでは「懐中電灯・ロウソク」、「飲料水」、「缶詰・インスタント食品」、「携帯ラジオ・テレビ」が目立ちました。夜間の移動に懐中電灯は必須ですし、携帯ラジオは情報収集に役立つので、手回し発電でラジオが聴けて懐中電灯にもなる製品を用意している人も多いようです。水は生命の源ですから、飲料水の確保は何よりも重要かもしれません。ちなみに飲料水は1人1日3リットルが必要な目安と言われています。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="定期的な備蓄品の確認も必要です。<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="大震災時の連絡手段や集合場所を家族で決めている人は2割しかいない！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="大震災時の連絡手段や集合場所を家族で決めている人は2割しかいない！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="被災後のことも考えておかないといけないですね。<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:319px"  loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0">
							<p>会員のみなさんが抱く震災時の最大の不安は「家族の安否」という回答から、「いざというときに確認できるよう、あらかじめ家族間で連絡手段や避難場所を決めている人が多いのでは？」と予想しました。しかし、意外なほど少ない結果にビックリ！決めている人はわずか22％で、多くの人が連絡手段についてあまり真剣に考えていないことが判明しました。大地震に襲われたときには、携帯電話も固定電話もつながりにくい状態になることが多いのでご用心を。家族で話し合って、どのような連絡方法を使うか、集合場所はどこにするかをあらかじめ決めておきましょう。</p>
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="被災後のことも考えておかないといけないですね。<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="連絡は伝言ダイヤルや伝言板の利用をLINEグループなどSNS活用もおススメ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="連絡は伝言ダイヤルや伝言板の利用をLINEグループなどSNS活用もおススメ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item u-only__pc">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="普段からSNSを活用していると非常時もスムーズ<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:337px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="真っ先に両親の無事を確認したいです<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:337px" loading="lazy">
						</div>
					</div>
					<div class="u-column__item u-only__pc">
						<div class="mb0">
							<p class="u-only__pc mb3">震災時の連絡手段・集合場所を決めている人は、どんな方法や場所を選んでいるのでしょうか？連絡方法で多かったのは「NTTの災害用伝言ダイヤル（171）」や「携帯電話の災害用伝言板」の活用でした。通話をせずとも安否を伝言できるサービスは、ぜひ積極的に利用したいところ。「いざというときの連絡網として、LINEで家族や知人とグループを作っている」人も多そうですね。また、「震災の影響がない親戚経由で各自が家族の安否を確認する」という意見もありました。この方法は、携帯電話やメールを使わない人にもおすすめです。集合場所に関しては「緊急避難場所」や「近くの学校」を選んだ人が多く、「まずは自宅」と決めているご家族もいます。自宅以外で家族が集まる場所を決めたら、実際に全員で行って確認しておきましょう。</p>
								<div class="cafe-report__link mb6">
									<a href="<?php echo $base_url; ?>/magazine/article/alsok-vol46.php" data-ga-click="cafe30_1">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="プロに聞く。暮らしの危機管理。3.11の教訓を未来に生かすために｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mt2_sp mb2_sp center" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="cafe-report__link mb6">
									<a href="https://e-suteki.haseko.jp/suteki/disaster-earthquake.html"  target="_blank" data-ga-click="cafe30_2">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="すてきテラス　災害が起きたら[地震編] 第1回｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mt2_sp mb2_pc center" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="cafe-report__link mb4">
									<a href="https://e-suteki.haseko.jp/suteki/disaster-earthquake-2.html"  target="_blank" data-ga-click="cafe30_3">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03@2x.png" alt="すてきテラス　災害が起きたら[地震編] 第2回｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb2_pc center" loading="lazy">
										</figure>
									</a>
								</div>
						</div>
					</div>		
						<div class="u-column__item mb3 u-only__sp">
							  <p>震災時の連絡手段・集合場所を決めている人は、どんな方法や場所を選んでいるのでしょうか？連絡方法で多かったのは「NTTの災害用伝言ダイヤル（171）」や「携帯電話の災害用伝言板」の活用でした。通話をせずとも安否を伝言できるサービスは、ぜひ積極的に利用したいところ。「いざというときの連絡網として、LINEで家族や知人とグループを作っている」人も多そうですね。また、「震災の影響がない親戚経由で各自が家族の安否を確認する」という意見もありました。この方法は、携帯電話やメールを使わない人にもおすすめです。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="普段からSNSを活用していると非常時もスムーズ<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
							  <p>集合場所に関しては「緊急避難場所」や「近くの学校」を選んだ人が多く、「まずは自宅」と決めているご家族もいます。自宅以外で家族が集まる場所を決めたら、実際に全員で行って確認しておきましょう。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="真っ先に両親の無事を確認したいです<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb5" loading="lazy">
								<div class="cafe-report__link mb6">
									<a href="<?php echo $base_url; ?>/magazine/article/alsok-vol46.php" data-ga-click="cafe30_1">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="プロに聞く。暮らしの危機管理。3.11の教訓を未来に生かすために｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="cafe-report__link mb6">
									<a href="https://e-suteki.haseko.jp/suteki/disaster-earthquake.html"  target="_blank" data-ga-click="cafe30_2">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02-sp@2x.png" alt="すてきテラス　災害が起きたら[地震編] 第1回｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="cafe-report__link mb4">
									<a href="https://e-suteki.haseko.jp/suteki/disaster-earthquake-2.html"  target="_blank" data-ga-click="cafe30_3">
										<figure>
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03-sp@2x.png" alt="すてきテラス　災害が起きたら[地震編] 第2回｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
										</figure>
									</a>
								</div>
						</div>
			</section>
			<section class="mb8 mb9_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="住んでいるマンションの耐震等級や耐震構造を知っている？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="住んでいるマンションの耐震等級や耐震構造を知っている？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="建物の構造を確認することも防災への一歩です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:318px" loading="lazy">
						</div>
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="併せて家の中の耐震対策も欠かせませんね！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:291px" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0 u-only__pc">
							<p class="mb6">地震が多い日本に住んでいると、建物の耐震性能が気になるもの。みなさんは自宅マンションの耐震等級や耐震構造についてどれくらいご存知なのでしょうか？結果は「ある程度知っている」人が42％、「あまり知らない」人が38％でした。「全く知らない」人が13％で、「よく知っている」人はわずか7％と、関心のない人が少ない反面、認識は薄いようですね。ちなみに耐震等級とは地震時の建物の耐久力を示す基準で、1〜3等級があり、3が最高です。また、建物の強度を高めて地震への耐性を持たせるのが「耐震構造」で、壁や柱を強化することで、建物を揺れの力から守ります。さらに揺れの力を分散、減衰させる「制震構造」や揺れの力を逃す「免震構造」を採用しているマンションもあります。この機会に、住まいの構造にも目を向けてみてはいかがでしょう。</p>
							<div class="mb6 u-only__pc">
								<a href="https://www.haseko.co.jp/hc/technology/kodawari/framework/taishin_menshin.html" target="_blank" data-ga-click="cafe30_4">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="HASEKOのこだわり地震に負けない構造<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:331px" loading="lazy">
								</a>						
							</div>
							<div class="mb3 u-only__pc">
								<a href="https://www.haseko-sumai.com/kurashi/archive/detail_137.html" target="_blank" data-ga-click="cafe30_5">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02@2x.png" alt="長谷工の住まい　マンション暮らしガイド<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:331px"  loading="lazy">
								</a>						
							</div>
						</div>	
						<div class="mb3 u-only__sp">
							<p class="mb6">地震が多い日本に住んでいると、建物の耐震性能が気になるもの。みなさんは自宅マンションの耐震等級や耐震構造についてどれくらいご存知なのでしょうか？結果は「ある程度知っている」人が42％、「あまり知らない」人が38％でした。「全く知らない」人が13％で、「よく知っている」人はわずか7％と、関心のない人が少ない反面、認識は薄いようですね。ちなみに耐震等級とは地震時の建物の耐久力を示す基準で、1〜3等級があり、3が最高です。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="建物の構造を確認することも防災への一歩です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
							<p class="mb3">また、建物の強度を高めて地震への耐性を持たせるのが「耐震構造」で、壁や柱を強化することで、建物を揺れの力から守ります。さらに揺れの力を分散、減衰させる「制震構造」や揺れの力を逃す「免震構造」を採用しているマンションもあります。この機会に、住まいの構造にも目を向けてみてはいかがでしょう。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="併せて家の中の耐震対策も欠かせませんね！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb6" style="max-width:90%;" loading="lazy">
							<div class="mb6 u-only__sp">
								<a href="https://www.haseko.co.jp/hc/technology/kodawari/framework/taishin_menshin.html" target="_blank" data-ga-click="cafe30_4">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="HASEKOのこだわり　地震に負けない構造<?php echo strip_tags($pageTtl); ?>" class="u-img__max" style="max-width:331px" loading="lazy">
								</a>						
							</div>
							<div class="u-only__sp">
								<a href="https://www.haseko-sumai.com/kurashi/archive/detail_137.html" target="_blank" data-ga-click="cafe30_5">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02-sp@2x.png" alt="長谷工の住まい　マンション暮らしガイド<?php echo strip_tags($pageTtl); ?>" class="u-img__max" style="max-width:331px"  loading="lazy">
								</a>						
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="地震に備えてどんな対策をしている？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="地震に備えてどんな対策をしている？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="エピソード紹介 地震に備えてどんな対策をしている？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="エピソード紹介 地震に備えてどんな対策をしている？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
