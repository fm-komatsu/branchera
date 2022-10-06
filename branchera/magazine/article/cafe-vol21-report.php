<?php
//base
include ("../../function.php");
$content = get_id_data('25021');
$pageTtl = 'あなたの今を聞かせて！<br>〜今年のハロウィンの楽しみ方は？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '10月31日はハロウィン。 今や日本でも、子どもと大人が一緒に楽しむ秋の行事のひとつとして根付いていますね。コロナ禍で大勢の人が集まることは避けながらも、自分スタイルでエンジョイしたい人は多いのでは？今年の楽しみ方を会員のみなさんに聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年9月16日（木）～9月22日（水）";
// 回答者数
$respondents ="計2,032名";
// 対象者：
$target = "長谷工IDをお持ちで、お子さまがいらっしゃる、毎年ハロウィンを楽しみにしている方";

$cafeReportNum = "21";


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
        <h2 class="u-font-size__30 u-color__dark mb2">今年のハロウィンの楽しみ方は？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="今年のハロウィンの楽しみ方は？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="今年のハロウィンの楽しみ方は？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>10月31日はハロウィン。 今や日本でも、子どもと大人が一緒に楽しむ秋の行事のひとつとして根付いていますね。コロナ禍で大勢の人が集まることは避けながらも、自分スタイルでエンジョイしたい人は多いのでは？今年の楽しみ方を会員のみなさんに聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="今年のハロウィンイベントは子どもやパートナーなど7割以上が家族だけで楽しむ予定｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="今年のハロウィンイベントは子どもやパートナーなど7割以上が家族だけで楽しむ予定｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3 u-font__palt">ハロウィンの起源をたどると、古代ケルト民族のドゥルイド教で行われていたサウィン祭に行き着きます。 10月31日の夜に先祖の霊が家族に会いに戻ってくると信じられて、一緒にやって来るとされていた悪霊を驚かせて追い払うために仮装や魔除けの焚き火を行ったそうです。<br>最近ではそんな宗教的な意味合いは薄れて、秋のイベントとして日本にも伝わりました。仮装をしたり、飾り付けをしてホームパーティーを開いたり、子どもにお菓子を配ったりと、ワクワクがいっぱいのハッピー・ハロウィン。あなたは誰と一緒に楽しみたいですか？<br>会員のみなさんに尋ねると、「子ども」（40％）がトップで、次いで「夫･妻」（34％）と、家族で楽しむ人が大多数でした。例年なら「友人」と答える人がもっといたと思いますが、コロナ禍の今年、友人と楽しむ人は8％に留まりました。早く心おきなく集まれるようになるといいですね。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="円グラフ｜私はカフェで仮装しようかな image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						</div>
						<div class="u-column__item u-only__pc">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私はカフェで仮装しようかな  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="大勢で集まりにくい今だからこそおうちパーティーで楽しい家族時間を大切にしたい！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="大勢で集まりにくい今だからこそおうちパーティーで楽しい家族時間を大切にしたい！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="ハロウィンは世界的に大人気です image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:311px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="家の中でも気軽に楽しみたい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">毎年、ハロウィンの時期が近付くと、かぼちゃをくり抜いたジャック・オ・ランタンやクモの巣など、ハロウィンのかわいい装飾に彩られた賑やかな街の様子に気分が高まりますよね。アメリカでは仮装をして「トリック・オア・トリート！」（お菓子をくれなきゃ、いたずらしちゃうぞ）の言葉と共に家を訪ねた子どもたちに、「ハッピー・ハロウィン！」と返してお菓子をあげるのがお約束。このイベントを、子どもたちは心待ちにしているそう。<br>日本でも近年、ハロウィンパーティーを毎年の家族イベントにしている家庭が増えています。ただし、今年はやや低調気味の様子。会員のみなさんに今年の予定を聞いたところ、家族パーティーを実施する人は16％に留まりました。やはり、コロナ禍で友人や近所の子どもたちを招きづらいせいでしょうか。とはいえ、「未定」の返答も26％に上ります。「飾り付けや仮装の準備が大変だし…」といった理由で思案している人は、あまり気負わずにかぼちゃを使った料理やかわいいスイーツを用意して、ハロウィンの雰囲気をちょっとだけ楽しんでみてはいかがですか？大勢でワイワイできない状況だからこそ、家族で楽しむ非日常の時間をどうぞ大切に！</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p class="u-font__palt">毎年、ハロウィンの時期が近付くと、かぼちゃをくり抜いたジャック・オ・ランタンやクモの巣など、ハロウィンのかわいい装飾に彩られた賑やかな街の様子に気分が高まりますよね。アメリカでは仮装をして「トリック・オア・トリート！」（お菓子をくれなきゃ、いたずらしちゃうぞ）の言葉と共に家を訪ねた子どもたちに、「ハッピー・ハロウィン！」と返してお菓子をあげるのがお約束。このイベントを、子どもたちは心待ちにしているそう。</p>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="ハロウィンは世界的に大人気です image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
					<p>日本でも近年、ハロウィンパーティーを毎年の家族イベントにしている家庭が増えています。ただし、今年はやや低調気味の様子。会員のみなさんに今年の予定を聞いたところ、家族パーティーを実施する人は16％に留まりました。やはり、コロナ禍で友人や近所の子どもたちを招きづらいせいでしょうか。とはいえ、「未定」の返答も26％に上ります。「飾り付けや仮装の準備が大変だし…」といった理由で思案している人は、あまり気負わずにかぼちゃを使った料理やかわいいスイーツを用意して、ハロウィンの雰囲気をちょっとだけ楽しんでみてはいかがですか？大勢でワイワイできない状況だからこそ、家族で楽しむ非日常の時間をどうぞ大切に！</p>				
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="家の中でも気軽に楽しみたい！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="おうちハロウィンはかぼちゃ料理やランタン、仮装でエンジョイ！友人とのリモートパーティーもおすすめ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="おうちハロウィンはかぼちゃ料理やランタン、仮装でエンジョイ！友人とのリモートパーティーもおすすめ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="かぼちゃ料理は子どももよく食べます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:315px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="仮装してリモートパーティーもありかも！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:333px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5">みなさんに今年のハロウィンの楽しみ方を聞いてみたところ、「かぼちゃ料理を作る」「パンプキンケーキを焼く」など、食でハロウィン気分を味わう人が大多数でした。「リビングの飾り付けをして、家族で仮装を楽しむ」というハロウィン大好きファミリーも少なくありません。魔女、黒猫、コウモリ、オバケ、ゾンビ…子どものコスプレって、ホントかわいい！子どもたちも大喜びするから、やめられませんよね。なかには「ペットの犬をかぶり物で仮装させる」という愉快な家庭もありました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="かぼちゃ料理は子どももよく食べます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								さらに、「ハロウィンキャラクターのパンをたくさん焼いてラッピングし、ハロウィンメイクをして知り合いに配ります」という人や、「毎年かぼちゃをくり抜いてランタンを作ります。今年はどんな顔ができあがるのか楽しみ♪」という人、「玄関まわりにハロウィンの飾り付けをして、道行く人たちにも楽しんでもらえるようにしています」といったコメントもあって、心が和みました。今年は「スマホやタブレットのビデオ通話を使って、友人たちとリモートハロウィンパーティーで盛り上がる」という今ならではの楽しみ方も試してみてはいかが？<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="仮装してリモートパーティーもありかも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="ハロウィンを楽しむようになたのは「子どもが喜ぶから」「仮装が楽しいから」料理やお菓子づくりもモチベーションに｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="ハロウィンを楽しむようになたのは「子どもが喜ぶから」「仮装が楽しいから」料理やお菓子づくりもモチベーションに｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="ハロウィンは飾りつけがかわいい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:327px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="可愛くて美味しいから一石二鳥 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4">ハロウィンが日本で知られるようになったきっかけは、1997年に東京ディズニーランドで開かれた「ディズニー・ハッピー・ハロウィン」の仮装イベントだったそうです。その後、2000年代になると菓子メーカーがハロウィン商品を毎年販売するようになり、バラエティショップにも仮装用品が並び始めました。日本人は季節のイベントが大好き♪クリスマスと同様に、ハロウィンも家族や友人と楽しむお祭りとしてすんなり受け入れられたのですね。<br>では、あなたがハロウィンを楽しむのはどうして？会員のみなさんに理由を聞いてみたところ、子育て中の人からは「子どもに仮装させて写真を撮りたいから」「季節の行事を子どもと楽しみたいから」「子どもの喜ぶ顔が見たいから」といった答えが返ってきました。また、 「ハロウィングッズがかわいいから」「コスプレするのが楽しいから」という理由もあり共感。遊び心のあるハロウィンの飾りや仮装アイテムって、見ているだけで心躍ってしまいますよね。<br>ほかの設問でも食が注目されていたように、「秋にかぼちゃの料理やお菓子作りを楽しみたいから」というクッキング派や、「街で工夫を凝らしたケーキやお菓子に出会えるから」というスイーツ購入派も多かったです。</p>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">ハロウィンが日本で知られるようになったきっかけは、1997年に東京ディズニーランドで開かれた「ディズニー・ハッピー・ハロウィン」の仮装イベントだったそうです。その後、2000年代になると菓子メーカーがハロウィン商品を毎年販売するようになり、バラエティショップにも仮装用品が並び始めました。日本人は季節のイベントが大好き♪クリスマスと同様に、ハロウィンも家族や友人と楽しむお祭りとしてすんなり受け入れられたのですね。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="ハロウィンは飾りつけがかわいい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								では、あなたがハロウィンを楽しむのはどうして？会員のみなさんに理由を聞いてみたところ、子育て中の人からは「子どもに仮装させて写真を撮りたいから」「季節の行事を子どもと楽しみたいから」「子どもの喜ぶ顔が見たいから」といった答えが返ってきました。また、 「ハロウィングッズがかわいいから」「コスプレするのが楽しいから」という理由もあり共感。遊び心のあるハロウィンの飾りや仮装アイテムって、見ているだけで心躍ってしまいますよね。<br>ほかの設問でも食が注目されていたように、「秋にかぼちゃの料理やお菓子作りを楽しみたいから」というクッキング派や、「街で工夫を凝らしたケーキやお菓子に出会えるから」というスイーツ購入派も多かったです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="可愛くて美味しいから一石二鳥 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="おすすめのハロウィン料理＆お菓子はかほちゃを使ったグラタンやパイ！手焼きの創作クッキーも人気｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="おすすめのハロウィン料理＆お菓子はかほちゃを使ったグラタンやパイ！手焼きの創作クッキーも人気｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="アイデア次第でハロウィンっぽく！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:311px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="顔をつけると一気に可愛くなります！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:366px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03@2x.png" alt="可愛い料理でハロウィンを満喫しちゃおう♪ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:217px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4 u-font__palt">子どもから大人まで、みんなで楽しむハロウィンパーティー。そんなとき、手作りの料理やスイーツがあれば、さらに盛り上がること間違いなし。そこで会員のみなさんに、ハロウィンのときに作るお気に入りの料理やお菓子を教えてもらいました。料理部門で目立ったのは子どもも大好き、「かぼちゃのグラタン」。「かぼちゃと鶏肉を炒め、ホワイトソースで和えたものをオーブンで焼くだけ。カンタンですよ」とレシピを教えてくれた人もいました。ほかにも「かぼちゃコロッケ」「かぼちゃシチュー」など、パンプキン料理が主流でした。おもしろいと思ったのが、「ケチャップライスをかぼちゃの形にして、海苔で目鼻を付けたパンプキンおにぎり」というレシピ。アイデア賞ですね♪<br>また、ハロウィンにお菓子は欠かせません。スイーツ部門でもパンプキンが大活躍で「かぼちゃのパイ」や「かぼちゃプリン」が人気です。さらに「オバケやかぼちゃの型でくり抜いたクッキーを焼く」「市販のクッキーにチョコペンでかぼちゃや魔女の顔を描く」など、手作りを楽しむ人もたくさん。「クモのグミキャンディ、魔女の指そっくりのクッキーなど、子どもがびっくりするお菓子を用意する」なんていうお茶目な家庭もあって、みなさん楽しそうです。</p>
							<a href="<?php echo($base_url)?>/magazine/article/recipe11.php#pumpkin_dumplings" data-ga-click="cafe21_1">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="「うちのご飯は世界イチ」ミイラのかぼちゃシュウマイ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								</figure>
							</a>
							<a href="<?php echo($base_url)?>/magazine/article/recipe-collect06.php" data-ga-click="cafe21_2">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02@2x.png" alt="うちのご飯は世界イチ」簡単パーティーレシピ♪｜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								</figure>
							</a>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp u-font__palt">子どもから大人まで、みんなで楽しむハロウィンパーティー。そんなとき、手作りの料理やスイーツがあれば、さらに盛り上がること間違いなし。そこで会員のみなさんに、ハロウィンのときに作るお気に入りの料理やお菓子を教えてもらいました。料理部門で目立ったのは子どもも大好き、「かぼちゃのグラタン」。「かぼちゃと鶏肉を炒め、ホワイトソースで和えたものをオーブンで焼くだけ。カンタンですよ」とレシピを教えてくれた人もいました。ほかにも「かぼちゃコロッケ」「かぼちゃシチュー」など、パンプキン料理が主流でした。おもしろいと思ったのが、「ケチャップライスをかぼちゃの形にして、海苔で目鼻を付けたパンプキンおにぎり」というレシピ。アイデア賞ですね♪<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="アイデア次第でハロウィンっぽく！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								 また、ハロウィンにお菓子は欠かせません。スイーツ部門でもパンプキンが大活躍で「かぼちゃのパイ」や「かぼちゃプリン」が人気です。さらに「オバケやかぼちゃの型でくり抜いたクッキーを焼く」「市販のクッキーにチョコペンでかぼちゃや魔女の顔を描く」など、手作りを楽しむ人もたくさん。「クモのグミキャンディ、魔女の指そっくりのクッキーなど、子どもがびっくりするお菓子を用意する」なんていうお茶目な家庭もあって、みなさん楽しそうです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="顔をつけると一気に可愛くなります！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<a href="<?php echo($base_url)?>/magazine/article/recipe11.php#pumpkin_dumplings" data-ga-click="cafe21_1">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="「うちのご飯は世界イチ」ミイラのかぼちゃシュウマイ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
							<a href="<?php echo($base_url)?>/magazine/article/recipe-collect06.php" data-ga-click="cafe21_2">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02-sp@2x.png" alt="「うちのご飯は世界イチ」簡単パーティーレシピ♪｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03-sp@2x.png" alt="可愛い料理でハロウィンを満喫しちゃおう♪ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" style="max-width:250px" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="忘れられない思い出｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="忘れられない思い出｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
