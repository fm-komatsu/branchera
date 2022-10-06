<?php
//base
include ("../../function.php");
$content = get_id_data('25016');
$pageTtl = 'あなたの今を聞かせて！<br>地球に優しいこと、何かやっていますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '激しい雷雨の中、Caf&eacute;にいつもと違う顔ぶれが飛び込んできました。塾帰りの小学生の男の子とお母さんが、雨宿りのために通りすがりのCaf&eacute;に入ってきたのです。「最近、雨の降り方が激しいわね。」というお母さんのつぶやきに、子どもが学校で習った「地球の温暖化」や「SDGs」について話し始めます…。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年7月1日（木）～7月7日（水）";
// 回答者数
$respondents ="計2,880名";
// 対象者：
$target = "長谷工IDをお持ちの方で、環境問題に少しでも関心のある方";

$cafeReportNum = "16";


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
        <h2 class="u-font-size__30 u-color__dark mb2">地球に優しいこと、何かやっていますか？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！地球に優しいこと、何かやっていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="あなたの今を聞かせて！地球に優しいこと、何かやっていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>激しい雷雨の中、Caf&eacute;にいつもと違う顔ぶれが飛び込んできました。塾帰りの小学生の男の子とお母さんが、雨宿りのために通りすがりのCaf&eacute;に入ってきたのです。<br>「最近、雨の降り方が激しいわね。」というお母さんのつぶやきに、子どもが学校で習った「地球の温暖化」や「SDGs」について話し始めます…。</p>
				  <div class="cafe-report__sdgs mb3">
						<h5 class="bold">SDGsとは</h5>
						<p class="mb3">SDGsとは「サステナブル・デベロップメント・ゴールズ（持続可能な開発目標）」の略称です。2030年までに持続可能でよりよい世界を目指す国際目標で、17の目標と169のターゲットがあります。<br>地球温暖化や海洋汚染、貧困やジェンダーなど多様な面から世界が抱える問題を考え、「持続可能な社会」を目指す活動です。</p>
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__img01@2x.png" alt="あなたの今を聞かせて！地球に優しいこと、何かやっていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc center mb1" style="max-width:511px" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__img01-sp@2x.png" alt="あなたの今を聞かせて！地球に優しいこと、何かやっていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp center" loading="lazy">
						</figure>
					</div>
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__img02@2x.png" alt="あなたの今を聞かせて！今、学校でも習っているんだよ！｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc center" style="max-width:315px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__img02-sp@2x.png" alt="あなたの今を聞かせて！今、学校でも習っているんだよ！｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp center" loading="lazy">
					</figure>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="「SDGs」を知っていますか？約85%の方が「知っている」「聞いたことがある」と回答。すでに一般的な語句として浸透しているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="「SDGs」を知っていますか？約85%の方が「知っている」「聞いたことがある」と回答。すでに一般的な語句として浸透しているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="意外とみなさん知っているんですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02@2x.png" alt="テレビでも見たことがあるよ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:275px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img03@2x.png" alt="最近、よく耳にしますね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:269px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item mb3_sp">
							<p class="mb3">「SDGs」について「知っている」と答えた方は50%を超えていて関心の高さがうかがえます。さらに「聞いたことはあるが、具体的にはよく分からない」を加えると、約85％となり、言葉としては多くの方が知っていることになります。学校教育やニュース番組などで取り上げられていることもあり、認知度は高いようです。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img04@2x.png" alt="円グラフ｜SDGsをご存知ですか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:337px" loading="lazy">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="円グラフ｜SDGsをご存知ですか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02-sp@2x.png" alt="意外とみなさん知っているんですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					     	<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img03-sp@2x.png" alt="テレビでも見たことがあるよ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					    	<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img04-sp@2x.png" alt="最近、よく耳にしますね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
							</figure>
							</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="関心が高い問題は「地球温暖化」と「食品ロス」。近年の自然災害の多さや、日々のニュースなどから危機感を持ちはじめた方が多いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="関心が高い問題は「地球温暖化」と「食品ロス」。近年の自然災害の多さや、日々のニュースなどから危機感を持ちはじめた方が多いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="温暖化を防ぐためには何をしたらいいのか...ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:327px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="日本での食品ロスは年間約600万tもあるんだって image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:291px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>SDGsが身近になりつつある今、みなさまは環境問題に対してどのようなお考えをお持ちかお聞きしました。<br>関心が高い問題として一番多かったのは「地球温暖化」で30％。ついで「食品ロス」を20％の方が挙げられました。<br>1位の「地球温暖化」については、「年々、猛暑日が増えているし、大きな災害も増えている」や「雨にしても気温にしても、子どもの頃と今の環境が違いすぎる」など、体感として危機感を持っている方が多いように見受けられました。<br>また、2位の「食品ロス」は「テレビで話題になっているし、一番身近に感じるから」や「恵方巻きの廃棄ニュース」など、大々的に取り上げられていることから関心を持つようになった方がほとんどでした。報道の力は大きいですね。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="温暖化を防ぐためには何をしたらいいのか...ですね  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="日本での食品ロスは年間約600万tもあるんだって image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="参考にするのはSNSかと思いきや、半分以上の方が「料理サイト（アプリ）という結果。SNSの活用法は...？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="参考にするのはSNSかと思いきや、半分以上の方が「料理サイト（アプリ）という結果。SNSの活用法は...？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="みんなで気をつけたらみんなが地球を守るヒーローになれるんだね...ぼくも頑張る！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:315px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="そうね。じゃあ、身の回りでできることをもう少し考えてみようか image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:285px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5">私たちが経済活動や社会活動を送る上で、地球の環境が健全であることは大前提です。そのため「環境保全」は基礎的な課題となるでしょう。<br>「SDGs」の17の目標の中でも、「安全な水とトイレを世界中に」「気候変動に具体的な対策を」「海の豊かさを守ろう」「陸の豊かさも守ろう」の4つが掲げられています。それぞれの目標を達成するために「個人でできる具体的な取り組み」をうかがったところ、たくさんの回答をいただきました。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="みんなで気をつけたらみんなが地球を守るヒーローになれるんだね...ぼくも頑張る！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="そうね。じゃあ、身の回りでできることをもう少し考えてみようか image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03@2x.png" alt="プラスチックストローは使わずに紙ストローや、繰り返し使えるマイストローを持参しているわ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc"　style="max-width:701px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03-sp@2x.png" alt="プラスチックストローは使わずに紙ストローや、繰り返し使えるマイストローを持参しているわ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="水質汚染については、多くの方が「汚れを流さない」ことに気を付けているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="水質汚染については、多くの方が「汚れを流さない」ことに気を付けているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="小さなことも汚染を防ぐ第一歩ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:289px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 mb4_sp">「水質汚染」についてうかがったところ、「油を排水溝に流さない」「汚れた食器はペーパーや布でふき取ってから洗う」など、まずは汚れを流さないことに気を付けられている方が多いようです。<br>また「油を使う料理を作る回数を減らす」や「合成界面活性剤を使わない環境にやさしい洗剤を使っている」など、そもそも水の汚れを作らない行動を心掛けている方も。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="小さなことも汚染を防ぐ第一歩ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="ちょっとひと手間でランチをおしゃれに！ブランシエラクラブでは料理のコツがわかる記事も掲載。参考にしてCafe風ランチに挑戦してみませんか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="ちょっとひと手間でランチをおしゃれに！ブランシエラクラブでは料理のコツがわかる記事も掲載。参考にしてCafe風ランチに挑戦してみませんか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="エアコンはこまめに入/切するより温度調整がいいみたい｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:318px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="徒歩や自転車での移動は運動不足の解消にもなりますよ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:346px" loading="lazy">
							</div>	
						<div class="u-column__item">
							<p>CO2の削減といえばまずは節電！ということで「エアコンを使わない」と回答されている方が多かったですが、熱中症のこともあるので、必要な場面でも使わないのはかえって心配です。<br>無理はされずに、「サーキュレーターを使う」や「エアコンの設定温度を上げる」など、上手に使っている方のアイデアを真似してはいかがでしょうか。<br>また「自転車で行けるところは自転車でいく」や「アイドリングストップ」など、車からのCO2削減も関心が高いようです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="エアコンはこまめに入/切するより温度調整がいいみたい｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="徒歩や自転車での移動は運動不足の解消にもなりますよ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl@2x.png" alt="ちょっとひと手間でランチをおしゃれに！ブランシエラクラブでは料理のコツがわかる記事も掲載。参考にしてCafe風ランチに挑戦してみませんか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl-sp@2x.png" alt="ちょっとひと手間でランチをおしゃれに！ブランシエラクラブでは料理のコツがわかる記事も掲載。参考にしてCafe風ランチに挑戦してみませんか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="暑い日は保冷タイプのエコバッグを使っています。今は、様々なタイプがありますね。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:337px" loading="lazy">
							</div>	
						<div class="u-column__item">
							<p>レジ袋の有料化などが進み、すっかりなじんだ感のある「エコバッグ」。多くの方が活用されているようです。「詰め替え用商品を選び、ボトルを購入しないようにしている」や「リサイクルできるものはすべてリサイクルし、なるべくプラスチック容器に入ったものは買わない」など、プラスチック容器の使用を減らす取り組みも目立ちました。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01-sp@2x.png" alt="暑い日は保冷タイプのエコバッグを使っています。今は、様々なタイプがありますね。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__ttl@2x.png" alt="植樹などの活動に実際に参加された方は少数派でしたが、「機会があれば参加したい」と興味をお持ちの方は多いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__ttl-sp@2x.png" alt="植樹などの活動に実際に参加された方は少数派でしたが、「機会があれば参加したい」と興味をお持ちの方は多いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img01@2x.png" alt="森林保全を実感できるし、植樹って楽しそう！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:294px" loading="lazy">
							<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img02@2x.png" alt="企業としての取り組みも聞いてみたいですね｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:297px" loading="lazy">
							<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img03@2x.png" alt="そのバッジ、SDGsのだ。お姉さんも何かしているの？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:326px" loading="lazy">
						</div>	
						<div class="u-column__item">
							<p class="mb2">残念ながら植樹に参加したことがある方は少数でしたが、「そういう機会があれば参加したい」と、情報やチャンスによって希望される方も多いようです。<br>また「購入額の数パーセントが植林、森林保全に使われる商品の採用」や「長持ちする家具を購入。まだできていないが家具のサブスクやリースも利用したい」など、間接的な方法で緑を守る活動をされている方も。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img01-sp@2x.png" alt="森林保全を実感できるし、植樹って楽しそう！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							 <p>実際にお聞きしてみると、予想以上にお一人お一人が日々、環境について考えて行動されているようです。環境問題への関心が高まる中、長谷工グループでも、企業としてSDGsに取り組んでいます。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img02-sp@2x.png" alt="企業としての取り組みも聞いてみたいですね｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
              <p>Caf&eacute;ではちょうど、常連さんの一人である環境住まいスターがお茶を飲んでいました。胸につけられたSDGsのバッジに気づいた男の子が声をかけます。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img03-sp@2x.png" alt="そのバッジ、SDGsのだ。お姉さんも何かしているの？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img04@2x.png" alt="あら、よく気付いたわね。実は私、長谷工という会社のCSR部で働いていまして。最近は、企業として環境問題に取り組んでいるところも多いのですよ。例えばうちの会社では...｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center mb8" style="max-width:640px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img04-sp@2x.png" alt="あら、よく気付いたわね。実は私、長谷工という会社のCSR部で働いていまして。最近は、企業として環境問題に取り組んでいるところも多いのですよ。例えばうちの会社では...｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb8" loading="lazy">
  			</figure>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img05@2x.png" alt="生物多様性に配慮したマンション空間を実現｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img05-sp@2x.png" alt="生物多様性に配慮したマンション空間を実現｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</figure>
							<p>長谷工では「生物多様性に配慮したマンションづくり」に取り組んでいます。敷地内に多様な樹木を植栽し、ウッドチップ敷きや芝生の広場を提供、ビオトープやバードバスを配置するなど、環境と調和する緑豊かな空間を実現しています。</p>
							<div class="cafe-report__link mt3 mb6">
								<a href="https://www.haseko.co.jp/hc/csr/biodiversity/" target="blank" data-ga-click="cafe16_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__btn02-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>	
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img06@2x.png" alt="生物多様性に配慮したマンション空間を実現｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img06-sp@2x.png" alt="生物多様性に配慮したマンション空間を実現｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</figure>
							<p>「社会貢献」「未来志向」「地域との連携」をテーマに、地域の皆さんと一緒に森林整備活動を行っています。<br>創業80周年記念事業の一環として2017年に長野県茅野市で始まり、その後も和歌山県田辺市などで活動を続けています。地域の方々の協力を得て、長谷工グループ社員とその家族で森林散策を楽しむほか、植樹、小木伐採や枯れ木の片づけなどの整備活動を行っています。</p>
							<div class="cafe-report__link mt3">
								<a href="https://www.haseko.co.jp/hc/csr/environment/energy.html#anc_5" target="blank" data-ga-click="cafe16_2">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__btn02-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/hc/csr/biodiversity/" target="blank" data-ga-click="cafe16_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__btn02@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
									</figure>
								</a>
							</div>
						</div>	
						<div class="u-column__item">
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/hc/csr/environment/energy.html#anc_5" target="blank" data-ga-click="cafe16_2">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__btn02@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img07@2x.png" alt="環境に配慮したマンションがあるんだね。住んでみたいなぁ　植樹もいつかやってみたいわね　私たちは個人で。企業は企業で。自分にできることをやればいいんだね｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:618px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec06__img07-sp@2x.png" alt="環境に配慮したマンションがあるんだね。住んでみたいなぁ　植樹もいつかやってみたいわね　私たちは個人で。企業は企業で。自分にできることをやればいいんだね｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
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
