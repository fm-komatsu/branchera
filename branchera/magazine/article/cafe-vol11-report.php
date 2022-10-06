<?php
//base
include ("../../function.php");
$content = get_id_data('25011');
$pageTtl = 'あなたの今を聞かせて！<br>ちょっと気になる音のトラブル、<br>教えてください';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '大勢の方が隣り合って暮らすマンションでは、ささいなことでトラブルが発生することも。その中で多いのは「音の問題」ではないでしょうか。テレワークなどで在宅時間が増えたことで、今まで気づかなかった「音」が気になっている方も多いようです。音に関する考え方や感じ方、どんな音が気になるのか、などなど「音」にまつわる色々を聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年4月22日（木）～4月28日（水）";
// 回答者数
$respondents ="計2,994名";
// 対象者：
$target = "長谷工IDをお持ちのマンションにお住まいの方で、隣近所からの音や自宅の音のトラブルを心配されている方";

$cafeReportNum = "11";


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
        <h2 class="u-font-size__30 u-color__dark mb2">ちょっと気になる音のトラブル、教えてください</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！ちょっと気になる音のトラブル、教えてください｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！ちょっと気になる音のトラブル、教えてください｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>大勢の方が隣り合って暮らすマンションでは、ささいなことでトラブルが発生することも。その中で多いのは「音の問題」ではないでしょうか。テレワークなどで在宅時間が増えたことで、今まで気づかなかった「音」が気になっている方も多いようです。<br>音に関する考え方や感じ方、どんな音が気になるのか、などなど「音」にまつわる色々を聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="隣近所の音が気になったことは？「たまにある」を含めると、実に8割以上の方が「ある」と回答。気になっているのは、あなただけではないようです...！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="隣近所の音が気になったことは？「たまにある」を含めると、実に8割以上の方が「ある」と回答。気になっているのは、あなただけではないようです...！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">「日常的にある」（25％）と「たまにある」（57%）を合わせると、ほとんどの方が何らかの音を気にされたことがあるようです。「日中は様々な音で気にならないが、夜10時過ぎ辺りからは周りが静かになるため気になって仕方がない」など、日常の些細な「音」でも気になりだすと「悩み」や「トラブル」に発展することも。<br>また「テレワークが主流となり、家にいる機会が多くなったことで生活音が日常的になったため、音に対して意識するようになった」と生活スタイルの変化も影響しているようです。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私も音には気を遣っていますね〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:293px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜私も音には気を遣っていますね〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="「気になる音」のダントツは「ドアの開閉音などの生活音」。ついで「洗濯機や掃除機などの機械音」。気になるかどうかは「時間」が関係も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="「気になる音」のダントツは「ドアの開閉音などの生活音」。ついで「洗濯機や掃除機などの機械音」。気になるかどうかは「時間」が関係も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_img01@2x.png" alt="話し声より物音の方が気になるんだね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:316px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_img02@2x.png" alt="思いやりが大切！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:318px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>「ピアノなど楽器の音」が多いのではと予想していたのですが、全体の半分以上の方が「ドアの開閉音」や「洗濯機などの機械音」と、いわゆる生活音を挙げています。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="話し声より物音の方が気になるんだね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								生活していたらこれらの音が出るのは仕方がない？どうしたらいいの！？と頭を抱えそうですが、問題はその時間。「昼間の音はお互い様だし仕方ないと思いますが、早朝や夜遅くはなるべく静かになるといいなと思います」「ミキサーなどの音の大きな物は、使用する時間を考えて使う」「夜9時を過ぎたらディスポーザーの使用は控える」と、多くの方はその時間帯を気にしているようです。「掃除は朝8時以降、洗濯は夜9時までにしています」「夜7時以降は掃除機を使わない」「夜10時過ぎ辺りからは周りが静かになるため気になって仕方がない」と、幅はありますが、おおむね朝7時から夜9時くらいまでの生活音は許容範囲…なのでは。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="思いやりが大切！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="気になる音はどこから聞こえてくるのか？「上の階」が半分以上ですが、調べてみると実は...。特定できないこともあるので注意が必要です。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="気になる音はどこから聞こえてくるのか？「上の階」が半分以上ですが、調べてみると実は...。特定できないこともあるので注意が必要です。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02_img01@2x.png" alt="勘違いには気をつけなくちゃ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:310px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02_img02@2x.png" alt="気をつけていても生活音は出てしまうものですよね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:300px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>足音や掃除機の音など、上の階からの音が気になる方は半数近くと多い模様。ただし「知人宅での事ですが、音を立てていないのに苦情が度々あり、その後２部屋隣の音が階下に響いていることがわかりました。配管等の関係で真下に響くとは限らないことを知って驚きました」「当初、物音は階上からのものと思い込んで直接ご相談に伺ったところ、そちらからではないと判明。どこからの物音かは判別しにくいのだと気づかされた」などの体験談もあるように、音の伝わり方によって発生源が特定できないこともあるようです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="勘違いには気をつけなくちゃ　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								また「下の階に音が響かないように気をつけるようにしている。たまに物を落としたりすると、すみません、と聞こえないけど謝る」と、かなり気を付けている方がほとんどなので多少はお見逃しをお願いしたいところです。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="気をつけていても生活音は出てしまうものですよね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="自宅から出る音や他からの音に対しての対策は？床材を変更したり、行動を変えたりと、皆さんそれなりの努力をされているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="自宅から出る音や他からの音に対しての対策は？床材を変更したり、行動を変えたりと、皆さんそれなりの努力をされているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03_img01@2x.png" alt="ちょっとした気遣いで伝わる音が減らせます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:309px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb8 mb4_sp">聞こえてくる音に対しては「何もしていない」という方が多かったですが、自宅から出る音には「ラグやマット、クッションマットを敷いている」「カーテンを閉める」「フローリング材に気を使っている」や、「掃除、洗濯の時間に気を付けている」「忍び足で歩いている」「ドアの開閉をそっとしている」など、環境や行動に気を使っている方がほとんど。<br>さらにハイテク時代を反映してか「TVの音を落とし、手元スピーカで聞いている」や「電子ピアノを購入した」など、テクノロジーの力を借りる方法も。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="ちょっとした気遣いで伝わる音が減らせます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="音のトラブルに対して有効な策は？ルールや注意喚起より「心遣い」や「気の持ちよう」という回答が多め。一声かけて納得できることも多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="音のトラブルに対して有効な策は？ルールや注意喚起より「心遣い」や「気の持ちよう」という回答が多め。一声かけて納得できることも多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04_img01@2x.png" alt="ひろい心でお互いに気持ちよく暮らしたいですね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:309px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04_img02@2x.png" alt="あいさつが基本なのね。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:323px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04_img03@2x.png" alt="しっかりした造りのマンションなら音の悩みも減りますよね｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:304px" loading="lazy">
						</div>	
						<div class="u-column__item">
							<p class="mb4">こうした音のトラブルへの有効な策として多かったのは「マナーや気遣い」。回答でも「お互いさま」という言葉が目立ち、子どもの足音や生活音などはある程度仕方がないと思われている方が大多数のようです。
							<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="ひろい心でお互いに気持ちよく暮らしたいですね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							ただ「入居の際に子連れであいさつに来られたので、ある程度は許容範囲だと思えた。顔がわかるのと、見ず知らずの人だと受け取り方も違ってくるなと感じた」や「リフォームをするお宅が増えて来ていますが、きちんとあいさつをし、日程を教えてくださるので、多少の騒音は我慢できます」など、入居時やリフォーム時に一声かけておくことでトラブルを回避できる場合も多いようです。</br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="あいさつが基本なのね。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<p class="mb4">
							次に多かったのは「防音対策」。フロアマットなどご自身でできる対策もありますが、長谷工ではフローリングの遮音リフォームや、隣戸からの音を遮る仕様などを開発しております。今回のアンケートでも、「防音対策がしっかり施されているマンションのため、あまり気にならないですね」「長谷工の新築マンションに住んで1年7カ月程ですが全く生活音は聞こえません。良いマンションです」などの嬉しいお言葉もいただいております。<br>	
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03-sp@2x.png" alt="しっかりした造りのマンションなら音の悩みも減りますよね｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							長谷工では、リフォームによって遮音性を高めるお手伝いもしています。是非ご覧ください。
							</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/hrf/reform/haseko-method/02/#anc02" target="_blank" data-ga-click="cafe11_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn@2x.png" alt="遮音リフォームに関心があるならこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:289px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn-sp@2x.png" alt="遮音リフォームに関心があるならこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
