<?php
//base
include ("../../function.php");
$content = get_id_data('25013');
$pageTtl = 'あなたの今を聞かせて！<br>〜テレワーク、上手にしていますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '感染を予防しながら日常生活を送る「ウィズコロナ」の世の中になって１年以上が経ち、私たちの働き方もガラリと変わりました。テレワークにすっかり慣れて、「自宅で働けるなんて快適！」と大喜びの人がいる一方で、今も馴染めずにため息をついている人もいるのでは…。ブランシエラクラブ会員のみなさんはどんな思いなのでしょうか？テレワークについてご質問をした第1回のいま暮らCaféから半年、今のホンネを聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年5月20日（木）～5月26日（水）";
// 回答者数
$respondents ="計2,108名";
// 対象者：
$target = "長谷工IDをお持ちの方で、テレワーク（在宅勤務）を経験されたことのある方";

$cafeReportNum = "13";


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
        <h2 class="u-font-size__30 u-color__dark mb2">テレワーク、上手にしていますか？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！テレワーク、上手にしていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！テレワーク、上手にしていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>感染を予防しながら日常生活を送る「ウィズコロナ」の世の中になって１年以上が経ち、私たちの働き方もガラリと変わりました。テレワークにすっかり慣れて、「自宅で働けるなんて快適！」と大喜びの人がいる一方で、今も馴染めずにため息をついている人もいるのでは…。ブランシエラクラブ会員のみなさんはどんな思いなのでしょうか？テレワークについてご質問をした第1回のいま暮らCaféから半年、今のホンネを聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="ポストコロナ時代もテレワークを続けたい？半数はYESだけれど、判断に迷う人も多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="どんなペットを飼っていますか？想像以上に多いのが「その他」。熱帯魚やメダカ、金魚...騒音や汚れの心配がない「水槽系」の支持は高いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">ワクチン接種が進む欧米では、ポストコロナの世界が見えてきた国も出てきました。日本でもワクチン接種がスピーディーに進んで、早くトンネルの出口が見えてくるといいですね。そんな今、気になるのがコロナ終息後の働き方です。あなたはこのままずっとテレワークを続けたい派？それとも、元の通勤生活に戻りたい派ですか？ 会員のみなさんに聞くと、男女を問わず２人に１人はテレワークを「続けたい」派でした。ただし、「続けたくない」が1割強、「どちらとも言えない」も4割近くに上り、テレワークに魅力を感じている人ばかりではなさそうです。職場の人との雑談で気晴らしができない、家族がいる自宅では仕事に集中しにくいなど、手放しでテレワークに賛成できない気持ちが伝わってきました。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜カフェでも仕事される方を見かけますね｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:345px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜カフェでも仕事される方を見かけますね｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="テレワークに慣れた今、感じるメリットは半年前と同じで「通勤時間がない」がトップ！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="テレワークに慣れた今、感じるメリットは半年前と同じで「通勤時間がない」がトップ！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="通勤がない分時間に余裕ができました image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="テレワークで浮いた通勤時間を家事に当てる人は多いですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:334px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>テレワークに慣れた現在、みなさんはこの働き方にどんなメリットを感じているのでしょうか？テレワークが定着し始めた半年前に聞いたときは、「通勤時間がない」と答えた人が圧倒的でしたが、今回も変わらずダントツでトップでした。ひとたび満員電車や長時間の通勤に伴うストレスから解放されると、もう以前と同じ働き方には戻りたくないと思う気持ちはより強まりますよね。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="通勤がない分時間に余裕ができました image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  テレワークが日常になって、「仕事の合間に家事ができる」というメリットに気づいた人も多いようです。家事は共働き＆子育て世代の悩みのタネ。仕事の合間に片付けられるとゆとりが生まれて、子どもとふれあう時間も増えそう。思わずクスッとしたのが、「洋服や化粧品代がかからなくていい」「ランチ代や飲み代が浮く」の声！お洒落や外食ができなくてちょっと物足りない毎日ですが、確かにムダ遣いが減ってお財布にはうれしいかも。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="テレワークで浮いた通勤時間を家事に当てる人は多いですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="テレワークによる「運動不足」がストレスに 座りっぱなしによる「肩こり・腰痛」もツライ！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="テレワークによる「運動不足」がストレスに 座りっぱなしによる「肩こり・腰痛」もツライ！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="腰痛対策で机と椅子を新調しました！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:322px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="意識的に休憩を挟みましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03@2x.png" alt="空いた時間でストレッチ！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>「通勤がなくなってラクになったはずなのに、なぜこんなに疲れるの？」と感じることってありませんか？そう、テレワークで自宅にこもる生活に切り替わったことで、心身の調子を崩した人もけっこういるみたいです。会員のみなさんは、テレワークを続ける中で、どんな疲れやストレスを感じるようになったのでしょうか？最も多かったのが、運動不足による体調不良やストレスでした。会社にいると会議や打ち合わせ、お昼休みなどで席を立つ機会がありますが、自宅にいるとずっとパソコンの前に居続けてしまいがちですよね。座りっぱなしによる「肩こり」「腰痛」や、パソコンによる「目の疲れ」に悩む人もたくさんいてナットク。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="腰痛対策で机と椅子を新調しました！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  メンタルにもさまざまな影響があるようです。「外出できないからイライラする」「孤独を感じる」「同僚とコミュケーションが取れない」といった声があがりました。「電気代はかかるし、食べ過ぎ、運動不足で太るし、良いことがない！」とお嘆きの人も。テレワークをしているとついひと休みする時間を取り忘れてしまい、疲れやストレスが溜まります。人間が集中力を維持できるのは90分が限度といわれていますから、気力が萎えたときは思い切って休憩するのがGood！軽い散歩や空気の入れ替えをしてみてはいかがですか。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="意識的に休憩を挟みましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="注目のコワーキングスペースやレンタルオフィスを利用した人からは「集中できる」と好評！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="注目のコワーキングスペースやレンタルオフィスを利用した人からは「集中できる」と好評！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="自宅ではワークスペースが確保できない人も image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:346px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="充実した設備でお仕事もはかどりそう！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:339px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 mb4_sp">半年前に会員のみなさんに「自宅で仕事をするようになって困ったこと」を聞いたところ、目立ったのが「仕事とプライベートの切り替えが難しい」という悩みでした。実際、家族と過ごす自宅を仕事場にするのは、スペース的にも心理的にもけっこうタイヘン！そこで最近注目されるようになったのが、「サテライトオフィス」や「コワーキングスペース」「レンタルオフィス」です。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="自宅ではワークスペースが確保できない人も image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								Wi-Fi環境も良く、プリンター、スキャナ、コピー機、ドリンクバーなどの設備が整ったところが多いことから、テレワークの仕事場として利用する人が増えています。会員のみなさんの関心も高く、半数の人が興味津々でした。少数ながら実際に利用している人もいて、「気分転換ができて仕事がはかどる」「集中できて良い」「環境が変わっていい刺激になる」という声や「オン･オフの切り替えができるのがいい」という声もあがっています。朝や夜だけ、平日だけなど、ワークスタイルに合わせてプランが選べる「コワーキングスペース」もあるので、自宅で仕事がはかどらない人は一度見学して、雰囲気や居心地を確かめてみてはいかが？<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="充実した設備でお仕事もはかどりそう！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb2">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn@2x.png" alt="レンタルオフィス、コワーキングスペースに興味があるなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="レンタルオフィス、コワーキングスペースに興味があるなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
							</div>
							<div class="cafe-report__link mb2">
								<a href="https://www.bistation.jp/?utm_source=brc_cafe_vol13&utm_medium=web&utm_campaign=shimbashi_home" target="_blank" data-ga-click="cafe13_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="ビステーション新橋｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="ビステーション新橋｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb2">
								<a href="https://www.bistation.jp/shinyokohama/?utm_source=brc_cafe_vol13&utm_medium=web&utm_campaign=shinyokohama_home" target="_blank" data-ga-click="cafe13_2">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="ビステーション新横浜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02-sp@2x.png" alt="ビステーション新横浜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
								<a href="https://www.bistation.jp/tenjin/?utm_source=brc_cafe_vol13&utm_medium=web&utm_campaign=tenjin_home" target="_blank" data-ga-click="cafe13_3">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03@2x.png" alt="ビステーション福岡天神｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03-sp@2x.png" alt="ビステーション福岡天神｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="思い描く理想のワークスタイルは週1日出社とテレワーク？それとも半分ずつ？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="思い描く理想のワークスタイルは週1日出社とテレワーク？それとも半分ずつ？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="対面のほうが話が弾みやすいですよね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:340px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="作業はテレワークの方が集中できるかな｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:344px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03@2x.png" alt="上手に使い分けたいな｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:359px" loading="lazy">
						</div>	
						<div class="u-column__item">
							<p>通勤しないで自宅で働くテレワークを経験してみると、家事や育児との両立もしやすくていいけれど、同僚とのコミュニケーションが減ったり、プライベートと仕事の境界があいまいになったりと、一長一短に気づいた人も多いようですね。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="対面のほうが話が弾みやすいですよね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  とはいえ、働き方が多様化しつつある今、テレワークスタイルはコロナ禍の終息後も定着する可能性があります。これらからの時代を見つめたとき、どんな働き方が理想的なのでしょうか？会員のみなさんに聞いたところ、多かったのは、「出社とテレワーク、半分ずつがいい」、あるいは「週１回の出勤で、あとはテレワークがいい」という声でした。「週1回の出社で、テレワークの日はリゾート地で仕事をしたい」「会社に行って決まった時間働くのではなく、好きな場所でフレックスに働きたい」という自由を求める人や、「自宅ではなく、好きなサテライトオフィスで働きたい」という環境を求める人もいました。	<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="作業はテレワークの方が集中できるかな｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03-sp@2x.png" alt="上手に使い分けたいな｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
						    なかには「やはり、長年親しんだオフィスでの勤務がいい。雑談も業務効率をあげるのに一役買っているように感じます。私、古いのかな？」という声に代表される保守派もチラホラ。いずれにしろ、仕事と生活のバランスがとれた暮らしを叶えるために、自分にとってメリットと感じる働き方を上手に取り入れていきたいものですね。あなたはどんなワークスタイルが理想ですか？
							</p>
						</div>
					</div>
				</div>	
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="憧れのワークスタイル｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="憧れのワークスタイル｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img01@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb4" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img01-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb1" loading="lazy">
				</div>
				<div style="text-align:right;">
					<div class="cafe-report__link" style="display:inline-block;">
							<a href="https://www.branchera.com/ms/matsuyama150/" target="_blank" data-ga-click="cafe13_5">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__btn02@2x.png" alt="書斎がわりに利用できるコワーキングスペースを設けたブランシエラ道後樋又｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:394px;" loading="lazy">
							</figure>
						</a>	
					</div>
				</div>
				<div class="cafe-report__link mb3 u-only__sp">
					<a href="https://www.branchera.com/ms/matsuyama150/" target="_blank" data-ga-click="cafe13_5">
					  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__btn02-sp@2x.png" alt="書斎がわりに利用できるコワーキングスペースを設けたブランシエラ道後樋又｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				  </a>
				</div>	
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img02@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img02-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
			</section>
			<section class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
		<div class="main__item u-text__align_r">
	    <a href="<?php echo($base_url)?>/magazine/article/cafe-vol01-report.php">半年前にみなさまからの“声”をお聞きした、<br>「テレワークと私の暮らし」はコチラ ＞</a>
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
