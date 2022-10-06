<?php
//base
include ("../../function.php");
$content = get_id_data('25026');
$pageTtl = 'あなたの今を聞かせて！<br>〜輝け！2022年こそ〇〇〇だ！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '今までと異なる生活様式が定着した2021年、あなたにとってはどんな1年でしたか？楽しかったこと、うれしかったことだけでなく、ガッカリ意気消沈したことや、三日坊主で終わってしまったことなど、苦笑いした出来事もあったのではないでしょうか？2021年を振り返って失敗や後悔をワハハと笑い飛ばし、希望に満ちたハッピーな2022年を迎えましょう！';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年11月25日（木）～12月1日（水）";
// 回答者数
$respondents ="計2,671名";
// 対象者：
$target = "長谷工IDをお持ちの方で、新年こそハッピーなことを期待したい方";

$cafeReportNum = "26";


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
        <h2 class="u-font-size__30 u-color__dark mb2">〜輝け！2022年こそ〇〇〇だ！</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="輝け！2022年こそ〇〇〇だ！｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="輝け！2022年こそ〇〇〇だ！｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>今までと異なる生活様式が定着した2021年、あなたにとってはどんな1年でしたか？楽しかったこと、うれしかったことだけでなく、ガッカリ意気消沈したことや、三日坊主で終わってしまったことなど、苦笑いした出来事もあったのではないでしょうか？2021年を振り返って失敗や後悔をワハハと笑い飛ばし、希望に満ちたハッピーな2022年を迎えましょう！</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="2021年を振り返って点数を付けるとしたら、10点満点中何点？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="2021年を振り返って点数を付けるとしたら、10点満点中何点？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p>コロナ禍というストレスのかかる状況で、楽しみにしていた旅行やコンサートに行けなかったり、ホームパーティーが開けなかったりと、思い通りには過ごせなかったことも多かった2021年。一方で、おうち時間が増えてプライベートが充実したり、リモートワークが普通にできるようになったりと、有意義に過ごせた人もいると思います。あなたの2021年に点数を付けるとしたら、10点満点中何点ですか？会員のみなさんの答えは、7点（22%）、8点（20%）、5点（19%）の順でほぼ横並び。10点満点と答えた評価の高い人も5%いました。逆に0点、1点など低く評価した人はごくわずか。「けっこうがんばった」という人、「まあまあかな」と思った人が多い印象です。</p>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜どこにも出かけられなかったのは辛かったな〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
            </div>
            <div class="u-column__item u-only__pc">
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜どこにも出かけられなかったのは辛かったな〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="2021年のガッカリは「旅行に行けなかった」がダントツ ダイエットやジム通いに挫折して後悔する人も｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="2021年のガッカリは「旅行に行けなかった」がダントツ ダイエットやジム通いに挫折して後悔する人も｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="旅好きの私にとって旅行自粛は痛かったです  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:336px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="色んな場所でコロナによる影響が出ていたな〜  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">2021年を振り返って、「やり残したこと」や「後悔していること」はありますか？会員のみなさんに聞くと、やはりコロナ禍による自粛の影響が大きかったようです。「旅行ができなかった」をあげた人がダントツでした。「2年続けて海外旅行ができず悔しい！」、「恒例のハワイ旅行が取りやめに（涙）」、「楽しみにしていた趣味の全国大会が中止になった」、あるいは「実家に帰省できなくて無念」、「田舎のお墓参りに行けずじまい」といったお嘆きの声がたくさん寄せられました。<br>次いで多かったのが、「断捨離がはかどらなかった」という声。リモートワーク中は意外と家のことはできないですし、在宅時間が長いからこそ、片付かないのが気になりますよね。「運動不足で太ってしまった」、「ダイエットできなかった」「ジム通いが続かなかった」という健康･運動に関する後悔も多く見られました。「筋トレをしてパンツスタイルの似合う体型になりたかったのに…」というあなたも、「がんばろうと思っていた英会話の勉強が三日坊主で終わってしまった…」というあなたも、一度心身共にリセットをして再チャレンジを！2022年こそ、仕事でもプライベートでも大満足できる飛躍の年になるといいですね。</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p class="u-font__palt">2021年を振り返って、「やり残したこと」や「後悔していること」はありますか？会員のみなさんに聞くと、やはりコロナ禍による自粛の影響が大きかったようです。「旅行ができなかった」をあげた人がダントツでした。「2年続けて海外旅行ができず悔しい！」、「恒例のハワイ旅行が取りやめに（涙）」、「楽しみにしていた趣味の全国大会が中止になった」、あるいは「実家に帰省できなくて無念」、「田舎のお墓参りに行けずじまい」といったお嘆きの声がたくさん寄せられました。</p>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="旅好きの私にとって旅行自粛は痛かったです  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
					<p class="u-font__palt">次いで多かったのが、「断捨離がはかどらなかった」という声。リモートワーク中は意外と家のことはできないですし、在宅時間が長いからこそ、片付かないのが気になりますよね。「運動不足で太ってしまった」、「ダイエットできなかった」「ジム通いが続かなかった」という健康･運動に関する後悔も多く見られました。「筋トレをしてパンツスタイルの似合う体型になりたかったのに…」というあなたも、「がんばろうと思っていた英会話の勉強が三日坊主で終わってしまった…」というあなたも、一度心身共にリセットをして再チャレンジを！2022年こそ、仕事でもプライベートでも大満足できる飛躍の年になるといいですね。</p>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="色んな場所でコロナによる影響が出ていたな〜  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
					</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="おうち時間が増えて、うれしかったことも家族の絆が深まり、趣味ライフが充実！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="おうち時間が増えて、うれしかったことも家族の絆が深まり、趣味ライフが充実！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="家でできることって実はたくさんあるんですよね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="在宅ワークで子どもとの時間も増えました！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:355px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 u-only__pc">「新しい生活様式」が始まってから早2年。私たちの生活は一変しましたが、決して悪いことばかりではなかったはず。2021年を振り返って、良かったこと、うれしかったことを思い出してみませんか？会員のみなさんの回答を見ると、おうち時間が増えたことで生まれたプラス面が如実に表れていました。「たくさんの本が読めた」、「自炊生活で料理のレパートリーが広がった」、「家族とふれあう時間が増えた」、「家庭菜園やガーデニングの趣味ができた」など、新たなライフスタイルがもたらしてくれたゆとりの恩恵を実感している人がたくさんいます。<br>2021年の秋頃から事態が収束方向に向かったことで、「ミュージカルやコンサートが開催されるようになってうれしかった」と語ってくれた人や、「飲み会がなくなって出費が減った」と喜ぶ人、「リモートワークに慣れたおかげで、離れて暮らす子どもたちともリモートで頻繁に会えるようになった」という人もいました。みなさんにとって2021年は、家族との絆を深めたり、趣味の時間を充実させたり、健康面により気遣うことができた年となったようです。</p>
							<p class="mb2 u-only__sp">「新しい生活様式」が始まってから早2年。私たちの生活は一変しましたが、決して悪いことばかりではなかったはず。2021年を振り返って、良かったこと、うれしかったことを思い出してみませんか？会員のみなさんの回答を見ると、おうち時間が増えたことで生まれたプラス面が如実に表れていました。「たくさんの本が読めた」、「自炊生活で料理のレパートリーが広がった」、「家族とふれあう時間が増えた」、「家庭菜園やガーデニングの趣味ができた」など、新たなライフスタイルがもたらしてくれたゆとりの恩恵を実感している人がたくさんいます。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="家でできることって実はたくさんあるんですよね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb2 u-only__sp">2021年の秋頃から事態が収束方向に向かったことで、「ミュージカルやコンサートが開催されるようになってうれしかった」と語ってくれた人や、「飲み会がなくなって出費が減った」と喜ぶ人、「リモートワークに慣れたおかげで、離れて暮らす子どもたちともリモートで頻繁に会えるようになった」という人もいました。みなさんにとって2021年は、家族との絆を深めたり、趣味の時間を充実させたり、健康面により気遣うことができた年となったようです。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="在宅ワークで子どもとの時間も増えました！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb4_sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="スキルアップを目指すもよし、体を鍛えるもよし2022年があなたにとって素敵な年になりますように♪｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="スキルアップを目指すもよし、体を鍛えるもよし2022年があなたにとって素敵な年になりますように♪｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="感染対策をしながらいろいろな事に挑戦していきたいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="今年こそは友だちと女子旅したいな〜！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:348px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb8">年明けは何か新しいことを始めるのに絶好の機会ですよね。しっかりと目標を立てれば、やる気に火が点くというもの。新年に向けての抱負やチャレンジしたいことを会員のみなさんに聞いてみました。感心したのは、スキルアップを目指す人が多かったこと。「投資の勉強をしてお金を増やしたい」、「料理の腕を上げたい」、「毛筆で美しい字が書けるようになりたい」、「英会話を習いたい」など意欲満々。ぜひ、がんばって続けてくださいね！<br>健康第一、元気に暮らせることを願って目標を立てる人も多く、「食や運動に気を付けて強い体を作りたい」、「ダイエットに励んで、コロナ太りを解消したい」、「毎日の散歩を習慣にしたい」、「元旦から筋トレを続ける」といった声があがりました。そして、やはりみなさん、今年こそは旅行やエンターテインメントを存分に楽しみたいご様子。「日本各地の桜を見に行きたい」、「ソロキャンプに挑戦したい」、「好きなアーティストのライブコンサートに行きたい」など、たくさんの人が新年に希望を託しています。あなたは2022年をどんな年にしたいですか？</p>
							<div class="cafe-report__link mb3">
								<a href="<?php echo $base_url; ?>/magazine/index_imakura-cafe.php" data-ga-click="cafe26_1">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="今年もいま暮らcafeをよろしくお願いいたしますimage｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:333px" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">年明けは何か新しいことを始めるのに絶好の機会ですよね。しっかりと目標を立てれば、やる気に火が点くというもの。新年に向けての抱負やチャレンジしたいことを会員のみなさんに聞いてみました。感心したのは、スキルアップを目指す人が多かったこと。「投資の勉強をしてお金を増やしたい」、「料理の腕を上げたい」、「毛筆で美しい字が書けるようになりたい」、「英会話を習いたい」など意欲満々。ぜひ、がんばって続けてくださいね！<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="感染対策をしながらいろいろな事に挑戦していきたいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">								
健康第一、元気に暮らせることを願って目標を立てる人も多く、「食や運動に気を付けて強い体を作りたい」、「ダイエットに励んで、コロナ太りを解消したい」、「毎日の散歩を習慣にしたい」、「元旦から筋トレを続ける」といった声があがりました。そして、やはりみなさん、今年こそは旅行やエンターテインメントを存分に楽しみたいご様子。「日本各地の桜を見に行きたい」、「ソロキャンプに挑戦したい」、「好きなアーティストのライブコンサートに行きたい」など、たくさんの人が新年に希望を託しています。あなたは2022年をどんな年にしたいですか？</br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="今年こそは友だちと女子旅したいな〜！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb4">
								<a href="<?php echo $base_url; ?>/magazine/index_imakura-cafe.php" data-ga-click="cafe26_1">
									<figure>
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="今年もいま暮らcafeをよろしくお願いいたします image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="2022年を漢字で表すとしたら？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="2022年を漢字で表すとしたら？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="エピソード紹介 2022年を漢字で表すとしたら？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="エピソード紹介 2022年を漢字で表すとしたら？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
