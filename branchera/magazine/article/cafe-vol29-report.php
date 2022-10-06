<?php
//base
include ("../../function.php");
$content = get_id_data('25029');
$pageTtl = 'あなたの今を聞かせて！<br>“脱炭素”ってなんだろう？';
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
$period = "2022年1月13日（木）～1月19日（水）";
// 回答者数
$respondents ="計3,916名";
// 対象者：
$target = "長谷工IDをお持ちの方で、環境問題に少しでも関心のある方";

$cafeReportNum = "29";


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
        <h2 class="u-font-size__30 u-color__dark mb2">“脱炭素”ってなんだろう？</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="地球に優しいこと、何かやっていますか？<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="地球に優しいこと、何かやっていますか？<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>ある天気のよい日曜日。小学生の男の子とお母さんが一緒にお出かけをしたとき、マンションの建設現場を通りかかると、仮囲いに描かれたSDGsのマークが目に飛び込んできました。特に目立っていたのがSDGs目標13のマークで、「気候変動に具体的な対策を」と書かれています。それを見た男の子は「ボク、学校で習ったよ」と得意顔。少し先には、前に立ち寄ったCaféが。「ちょっとお茶の時間にしようか」とCaféに入ると、常連さんたちがSDGsと「脱炭素」について話していました…。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div class="cafe-report__sdgs mb3">
					<h5 class="bold">SDGsとは</h5>
					<p class="mb3">SDGsとは「サステナブル・デベロップメント・ゴールズ（持続可能な開発目標）」の略称です。2030年までに持続可能でよりよい世界を目指す国際目標で、17の目標と169のターゲットがあります。<br>地球温暖化や海洋汚染、貧困やジェンダーなど多様な面から世界が抱える問題を考え、「持続可能な社会」を目指す活動です。</p>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/img01@2x.png" alt="SDGsのゴール<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:511px" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/img01-sp@2x.png" alt="SDGsのゴール<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" loading="lazy">
						</figure>
					</h4>
				</div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/img02@2x.png" alt="SDGs目標13はどういう意味なのかしら？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:358px" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/img02-sp@2x.png" alt="SDGs目標13はどういう意味なのかしら？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" loading="lazy">
						</figure>
					</h4>
			</section>
			<section class="mb4">
				<h3 class="mb3">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="脱炭素やカーボンニュートラル、意味まで知っている人は4割弱<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="脱炭素やカーボンニュートラル、意味まで知っている人は4割弱<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h3>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" style="max-width:335px" alt="脱炭素やカーボンニュートラルという言葉やその意味を知っていますか？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb8" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02@2x.png" style="max-width:302px" alt="日本政府も2050年までにカーボンニュートラルを目指すことを宣言しました<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb6" >近年、メディアなどで「脱炭素」、「カーボンニュートラル」という言葉を見聞きしますが、どういう意味なのでしょう？なんとなく「CO2の排出を減らすことだろうな」くらいはわかっても、きちんと理解している人はそれほど多くないのでは？会員のみなさんの回答も「言葉だけは知っている」人が49％と約半数。「意味まで知っている」人は38％で、「知らない」人も13％に上りました。<br>「脱炭素」とは、地球温暖化の原因となるCO2などを減らそうという取り組みで、「カーボンニュートラル」とは脱炭素社会を実現するために、温室効果ガスの排出量と吸収量のつりあいを取ること、つまりプラスマイナスゼロの状態にすることです。現在では世界共通の目標となっています。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img03@2x.png" alt="言葉は最近よく聞きますね〜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:269px" loading="lazy">
							<p class="u-only__sp" >近年、メディアなどで「脱炭素」、「カーボンニュートラル」という言葉を見聞きしますが、どういう意味なのでしょう？なんとなく「CO2の排出を減らすことだろうな」くらいはわかっても、きちんと理解している人はそれほど多くないのでは？会員のみなさんの回答も「言葉だけは知っている」人が49％と約半数。「意味まで知っている」人は38％で、「知らない」人も13％に上りました。<br>「脱炭素」とは、地球温暖化の原因となるCO2などを減らそうという取り組みで、「カーボンニュートラル」とは脱炭素社会を実現するために、温室効果ガスの排出量と吸収量のつりあいを取ること、つまりプラスマイナスゼロの状態にすることです。現在では世界共通の目標となっています。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="脱炭素やカーボンニュートラルという言葉やその意味を知っていますか？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02-sp@2x.png" alt="日本政府も2050年までにカーボンニュートラルを目指すことを宣言しました<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img03-sp@2x.png" alt="言葉は最近よく聞きますね〜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:90%" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="温室効果ガスの排出を減らすために暮らしの中でどんなことを実践している？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="温室効果ガスの排出を減らすために暮らしの中でどんなことを実践している？<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="面倒でもしっかり取り組まなくちゃ！<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc mb3" style="max-width:327px"loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="ハイブリッド車に買い換えました<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:291px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>温室効果ガスの排出を減らすためには、一人ひとりが「脱炭素」を意識した行動を起こすことが大切ですよね。そこで、会員のみなさんに日常生活の中で実践していることを聞いてみたところ、圧倒的に多かったのが「ゴミの分別・削減」でした。ゴミを分別してリサイクル可能なものを増やすことは、限られた資源の有効活用につながりますし、焼却時に発生する温室効果ガスを減らすこともできますね。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="スキーは季節もののスポーツだから やりたくなります<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
							<p>「エコバッグやマイボトルの持参」、「節電・節水」、「公共交通機関の利用」をあげた人も多数いました。「エアコンを省エネタイプに交換した」、「太陽光発電を取り入れた」など、環境に配慮した商品を積極的に利用する意識も高まっているようです。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="気軽にできるから、始めやすい <?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="多少高価でもエコ製品を使いたい人は3割。家計を考えて思案する人もまだ多い様子｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="多少高価でもエコ製品を使いたい人は3割。家計を考えて思案する人もまだ多い様子｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="環境にもお財布にもやさしい商品が増えるとうれしいですよね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:319px"  loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0">
							<p>せっかく買うなら、環境にいい商品を選びたいのは誰しも思うところですが、“エコ”、“サステナブル”などのキーワードがついた商品って、通常の商品と比べて価格が高いことも少なくありません。あなたなら、ちょっと価格が高くても環境のことを考えて迷わず買いますか？それとも、お財布とにらめっこして躊躇する？会員のみなさんに「多少価格が高くても環境に配慮したものを利用したいと思いますか？」と尋ねたところ、YESは33％で、「どちらともいえない」が59％、NOと答えた人が8%いました。家計を考えると思案してしまう気持ち、よくわかります…。</p>
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="環境にもお財布にもやさしい商品が増えるとうれしいですよね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="地球温暖化や気候変動の影響で、最も心配していることってなに？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="地球温暖化や気候変動の影響で、最も心配していることってなに？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="台風など風雨の被害も大きいものが多くなってきた気がするよ<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:337px" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0">
							<p>温室効果ガスは、18世紀後半の産業革命の時代からずっと増え続けていて、特に20世紀になってからの100年間で地球温暖化が急激に進みました。このまま温室効果ガスが増えつづけると気候が変動し、気温・海水面の上昇、降水量の変化、水・食糧不足、健康被害など、さまざまな分野に悪影響を及ぼすそうです。<br>会員のみなさんが思う心配事で多かったのは、自然災害の増加でした。「海面の上昇で大洪水が起きないか気になる」、「異常気象でゲリラ豪雨が増えて、台風も巨大化しそう」といった回答が目立ちます。また、「農作物の収穫量や漁獲量が減少して、食品価格が高騰するのでは？」と食糧不足を懸念する声も。</p>
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="台風など風雨の被害も大きいものが多くなってきた気がするよ<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb9_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="さまざまな企業が力を入れるSDGs「いいね！」と思うのはどんな取り組み？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="さまざまな企業が力を入れるSDGs「いいね！」と思うのはどんな取り組み？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="あるハンバーガーショップでフードロス削減と紙製容器類の使用を掲げていました<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:318px" loading="lazy">
						</div>
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="そういえばさっき、工事しているところでSDGs目標13のマークを見たよ<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:291px" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0">
							<p>近年、人々のSDGsに対する意識が急激に高まり、企業の活動にも注目が集まるようになりました。テレビCMやニュース、インターネットなどのメディアでも、さまざまな活動を目にすることが増えましたよね。あなたが「いいね！」と共感するのはどんな取り組みですか？<br>会員のみなさんからは、「自動車メーカーによる脱ガソリン車への取り組み」、「航空会社によるバイオ燃料の使用」、「ストロー、フォーク、スプーンの木製化」などの回答が寄せられました。一方で、残念ながら「特にありません」という人も多数。ニッポンの企業はもっと広く発信して、知ってもらう努力が必要かも…。</p>
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="あるハンバーガーショップでフードロス削減と紙製容器類の使用を掲げていました<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="そういえばさっき、工事しているところでSDGs目標13のマークを見たよ<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:90%;" loading="lazy">
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03@2x.png" alt="私が勤めている長谷工グループでも、環境にやさしい建設素材の開発や省エネルギーを実現したマンションの設計・施工など、脱炭素社会の実現に向けて取り組んでいるんですよ。多くの人に知ってもらえるとうれしいな！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:640px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03-sp@2x.png" alt="私が勤めている長谷工グループでも、環境にやさしい建設素材の開発や省エネルギーを実現したマンションの設計・施工など、脱炭素社会の実現に向けて取り組んでいるんですよ。多くの人に知ってもらえるとうれしいな！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
			<section>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<a href="https://www.haseko.co.jp/hc/csr/environment/climate.html" target="_blank" data-ga-click="cafe29_1">
							  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="長谷工グループの気候変動対応<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:331px" loading="lazy">
							</a>						
						</div>
						<div class="mb3 u-only__pc">
							<a href="https://www.haseko.co.jp/hc/csr/product/consideration.html" target="_blank" data-ga-click="cafe29_3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn03@2x.png" alt="住んでいたい空間　暮らしの環境配慮<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:331px"  loading="lazy">
							</a>						
							</div>
					</div>
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
							<a href="https://www.haseko.co.jp/hc/csr/environment/energy.html" target="_blank" data-ga-click="cafe29_2">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02@2x.png" alt="大切にしたい風景：エネルギーCO2<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" style="max-width:331px"  loading="lazy">
							</a>						
							</div>
						<div class="mb3 u-only__sp">
							<a href="https://www.haseko.co.jp/hc/csr/environment/climate.html" target="_blank" data-ga-click="cafe29_1">
							  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="長谷工グループの気候変動対応<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb6" loading="lazy">
							</a>
							<a href="https://www.haseko.co.jp/hc/csr/environment/energy.html" target="_blank" data-ga-click="cafe29_2">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02-sp@2x.png" alt="住んでいたい空間　暮らしの環境配慮<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb6" loading="lazy">
							</a>
							<a href="https://www.haseko.co.jp/hc/csr/product/consideration.html" target="_blank" data-ga-click="cafe29_3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn03-sp@2x.png" alt="大切にしたい風景：エネルギーCO2<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
							</a>
						</div>
					</div>
				</div>
				<p class="mb7">Caféに立ち寄ったおかげで、お母さんもSDGsの意義や「脱炭素」への取り組みの大切さがよくわかったみたい。地球環境を話題に親子の会話もはずみそうです。</p>
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn04@2x.png" alt="海洋プラスチックを再利用した買い物かごを使用しているお店がありました 企業の活動に注目しつつ私たちも協力したいですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img04-sp@2x.png" alt="海洋プラスチックを再利用した買い物かごを使用しているお店がありました 企業の活動に注目しつつ私たちも協力したいですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</figure>
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
