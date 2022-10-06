<?php
//base
include ("../../function.php");
$content = get_id_data('25022');
$pageTtl = 'あなたの今を聞かせて！<br>〜こんなコンセプトマンションを作ってみたい！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '趣味をとことん楽しめる環境に住みたい、自分流のライフスタイルを追求したい…。そんな暮らしを夢見る人の間で、 “好きと暮らす”をテーマにしたコンセプトマンションが最近注目を集めています。あなたなら、どんな特長を備えたマンションに住んでみたいですか？会員のみなさんに「あったらいいな」、「企画してみたいな」と思う理想のコンセプトマンションについて聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年9月30日（木）～10月6日（水）";
// 回答者数
$respondents ="計3,145名";
// 対象者：
$target = "長谷工IDをお持ちの方で、自分の“好き”にこだわりを持っている方";

$cafeReportNum = "22";


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
        <h2 class="u-font-size__30 u-color__dark mb2">こんなコンセプトマンションを作ってみたい！</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="こんなコンセプトマンションを作ってみたい！｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="こんなコンセプトマンションを作ってみたい！｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>趣味をとことん楽しめる環境に住みたい、自分流のライフスタイルを追求したい…。そんな暮らしを夢見る人の間で、 “好きと暮らす”をテーマにしたコンセプトマンションが最近注目を集めています。あなたなら、どんな特長を備えたマンションに住んでみたいですか？会員のみなさんに「あったらいいな」、「企画してみたいな」と思う理想のコンセプトマンションについて聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="趣味で多いのは「映画」「読書」「ペット」「音楽」「筋トレ」「ランニング」などスポーツ系も人気！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="趣味で多いのは「映画」「読書」「ペット」「音楽」「筋トレ」「ランニング」などスポーツ系も人気！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="読書する人ランニングする人 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center mb1" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02@2x.png" alt="私は最近ベランダ菜園にハマっています image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:268px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item mb3_sp">
							<p class="mb3 u-font__palt">仕事や家事に追われる毎日でも、時間を作って熱中できる好きなことがあれば、暮らしに楽しさや張り合いが生まれますよね。実際、趣味を持っている人って、プライベートが幸福感や充実感に満ちている感じがします。会員のみなさんはどうでしょう？好きなことや夢中になれる趣味は何かと聞いてみたところ、返答は実にバラエティ豊か。なかでも多かったのが、「映画」「読書」「ペットと過ごす」「音楽を聴く」「スポーツ観戦」「ゲーム」「料理」でした。コロナ禍で増えた“おうち時間”を利用して読書にふけったり、動画配信サービスで映画鑑賞にハマる喜びを知った人も多いのではないでしょうか。<br>「筋トレ」「ヨガ」「ランニング」「テニス」「水泳」「ゴルフ」などのスポーツ系も目立ちました。ステイホーム中の運動不足も解消できて健康にもいいから、続けたいですよね！「家庭菜園」や「ガーデニング」など、土とふれあう園芸系も人気。なかには「株式投資」「断捨離」「フリマアプリでの売買」といった実益を兼ねたお楽しみもありました。これと言った趣味がないという人は、今から何か新しいことにトライしてみてはいかがですか？ストレス解消になりますし、交友関係も広がりますよ。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="読書する人ランニングする人 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02-sp@2x.png" alt="私は最近ベランダ菜園にハマっています image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:202px" loading="lazy">
							</div>
					</div>
				</div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="今の住まいで自分らしいライフスタイルや好きな趣味をエンジョイしている人が6割も！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="今の住まいで自分らしいライフスタイルや好きな趣味をエンジョイしている人が6割も！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="円グラフ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:337px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">みなさんは今のお住まいで自分らしいライフスタイルや趣味をどれくらい楽しんでいますか？会員のみなさんに尋ねたところ、「80％以上」「70％くらい」と答えたエンジョイ派が6割近くに上り、「あまり楽しめていない」は1.5割に留まっています。男女で比べてもそれほど差はありませんでした。実は「誰にも邪魔されず、一人でゆっくりと集中できるスペースがなくて…」とお嘆きの人が多いのではないかと思っていたのですが、予想が外れてうれしい結果になりました。我が家で大好きなことが心おきなくできれば、毎日の暮らしが心豊かになりますから、これはいい傾向！みなさん、自分の時間を満喫するために、今のお住まいでいろんな工夫をされているのかもしれないですね。</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p class="u-font__palt">みなさんは今のお住まいで自分らしいライフスタイルや趣味をどれくらい楽しんでいますか？会員のみなさんに尋ねたところ、「80％以上」「70％くらい」と答えたエンジョイ派が6割近くに上り、「あまり楽しめていない」は1.5割に留まっています。男女で比べてもそれほど差はありませんでした。実は「誰にも邪魔されず、一人でゆっくりと集中できるスペースがなくて…」とお嘆きの人が多いのではないかと思っていたのですが、予想が外れてうれしい結果になりました。我が家で大好きなことが心おきなくできれば、毎日の暮らしが心豊かになりますから、これはいい傾向！みなさん、自分の時間を満喫するために、今のお住まいでいろんな工夫をされているのかもしれないですね。</p>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="円グラフ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="9割の人が好きと暮らすをテーマとしたコンセプトマンションに興味を持っている｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="9割の人が好きと暮らすをテーマとしたコンセプトマンションに興味を持っている｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="趣味に没頭できる生活。楽しそうですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="毎日を過ごす場所だからこだわりたい！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 u-only__pc">コンセプトマンションとは、特定の趣味や好みを持った人々をターゲットにしたテーマのあるマンションのこと。たとえば「思いっきり楽器演奏を楽しみたい」「大好きなペットと暮らしたい」「愛車と暮らしたい」といった希望が叶えられるよう、設備や仕様、テーマにふさわしい工夫が凝らされています。人々のライフスタイルや価値観が多様化し、住まいにも個性が求められる時代になったからでしょう。自分の“好き”を追求したい人々から、こうしたコンセプトマンションに今、熱い視線が注がれています。とはいえ、まだ存在を知らない人が大多数。会員のみなさんも「コンセプトマンション」という言葉を初めて聞いた人が多かったと思います。それでも従来のマンションとは一線を画したこだわり派向けのスタイルにどこか心惹かれるのでしょう。9割の人が“好きと暮らす”をテーマとしたコンセプトマンションに「興味がある」と答えています。しかも3人に1人は「とても興味がある！」とのことでした。</p>
							<p class="mb5 u-only__sp">コンセプトマンションとは、特定の趣味や好みを持った人々をターゲットにしたテーマのあるマンションのこと。たとえば「思いっきり楽器演奏を楽しみたい」「大好きなペットと暮らしたい」「愛車と暮らしたい」といった希望が叶えられるよう、設備や仕様、テーマにふさわしい工夫が凝らされています。人々のライフスタイルや価値観が多様化し、住まいにも個性が求められる時代になったからでしょう。自分の“好き”を追求したい人々から、こうしたコンセプトマンションに今、熱い視線が注がれています。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="趣味に没頭できる生活。楽しそうですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb5 u-only__sp">とはいえ、まだ存在を知らない人が大多数。会員のみなさんも「コンセプトマンション」という言葉を初めて聞いた人が多かったと思います。それでも従来のマンションとは一線を画したこだわり派向けのスタイルにどこか心惹かれるのでしょう。9割の人が“好きと暮らす”をテーマとしたコンセプトマンションに「興味がある」と答えています。しかも3人に1人は「とても興味がある！」とのことでした。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="毎日を過ごす場所だからこだわりたい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="住んでみたいなと思うトップ3は音楽・料理・映画をテーマにしたマンション｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="住んでみたいなと思うトップ3は音楽・料理・映画をテーマにしたマンション｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="ホームシアターなら大音量で思いっきり楽しめそうです！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="いいきっかけね！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4">あなたが「住んでみたいな」と思うのは、どんなテーマのコンセプトマンションでしょうか？会員のみなさんのトップ3は「音楽」「料理」「映画」でした。音楽好きにとっては、いつでも気兼ねなく大音量で音楽を聴いたり、思い切り楽器を演奏できるマンションライフは憧れの的。また、料理好きが集まったり、お料理教室を開催できたりするクッキングスタジオや、共用のシアタースペースがあるマンションなど夢が広がりますよね。次いで「トレーニング」「ペット」「アウトドア」「ものづくり」「車」といったテーマも多くの支持を集めました。<br>防音ルームや共用の趣味スペースなど、個人で実現するのは難しいことも叶えられるのがコンセプトマンションの魅力ですが、それだけじゃありません。同じ価値観の仲間と出会えるのもうれしいこと。マンションの住民は共通の趣味や嗜好を持つ人ばかりですから、初対面でも会話がはずみ、自然に交流が生まれることでしょう。隣人の顔も知らない暮らしが珍しくない現代にあって、コンセプトマンションは温かいコミュニティづくりの舞台にもなりそうです。</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.livwiz.jp/" target="_blank" data-ga-click="cafe22_1">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn@2x.png" alt="好きと暮らす実例！長谷工のコンセプトマンション image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01@2x.png" alt="好きと暮らす実例！長谷工不動産 LIVWIZ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
								<a href="https://www.livwiz.jp/play/" target="_blank" data-ga-click="cafe22_2">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02@2x.png" alt="音楽を愛する人のためのPLAYプレイ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>	
							<div class="cafe-report__link mb3">
								<a href="https://www.livwiz.jp/lubricant/" target="_blank" data-ga-click="cafe22_3">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03@2x.png" alt="自転車が好きでたまらない人のためのLUBRICANTルブリカント image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>	
							<div class="cafe-report__link mb3">
								<a href="https://www.livwiz.jp/track/" target="_blank" data-ga-click="cafe22_4">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn04@2x.png" alt="次世代クリエイターのためのTRACKトラック image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>	
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">あなたが「住んでみたいな」と思うのは、どんなテーマのコンセプトマンションでしょうか？会員のみなさんのトップ3は「音楽」「料理」「映画」でした。音楽好きにとっては、いつでも気兼ねなく大音量で音楽を聴いたり、思い切り楽器を演奏できるマンションライフは憧れの的。また、料理好きが集まったり、お料理教室を開催できたりするクッキングスタジオや、共用のシアタースペースがあるマンションなど夢が広がりますよね。次いで「トレーニング」「ペット」「アウトドア」「ものづくり」「車」といったテーマも多くの支持を集めました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="ホームシアターなら大音量で思いっきり楽しめそうです！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								防音ルームや共用の趣味スペースなど、個人で実現するのは難しいことも叶えられるのがコンセプトマンションの魅力ですが、それだけじゃありません。同じ価値観の仲間と出会えるのもうれしいこと。マンションの住民は共通の趣味や嗜好を持つ人ばかりですから、初対面でも会話がはずみ、自然に交流が生まれることでしょう。隣人の顔も知らない暮らしが珍しくない現代にあって、コンセプトマンションは温かいコミュニティづくりの舞台にもなりそうです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="いいきっかけね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link">
								<a href="https://www.livwiz.jp/" target="_blank" data-ga-click="cafe22_1">
									<figure>
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="好きと暮らす実例！コンセプトマンション LIVWIZ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn01-sp@2x.png" alt="好きと暮らす実例！コンセプトマンション LIVWIZ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb3_sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link">
								<a href="https://www.livwiz.jp/play/" target="_blank" data-ga-click="cafe22_2">
									<figure>
										<img class="mb4" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn02-sp@2x.png" alt="音楽を愛する人のためのPLAYプレイ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>	
							<div class="cafe-report__link">
								<a href="https://www.livwiz.jp/lubricant/" target="_blank" data-ga-click="cafe22_3">
									<figure>
										<img class="mb4" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn03-sp@2x.png" alt="自転車が好きでたまらない人のためのLUBRICANTルブリカント image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
									</figure>
								</a>
							</div>	
							<div class="cafe-report__link">
								<a href="https://www.livwiz.jp/track/" target="_blank" data-ga-click="cafe22_4">
									<figure>
										<img class="mb4" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn04-sp@2x.png" alt="次世代クリエイターのためのTRACKトラック image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="あなたならどんなコンセプトマンションを企画する？自由な発想で夢を語ってもらった結果は｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="あなたならどんなコンセプトマンションを企画する？自由な発想で夢を語ってもらった結果は｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="理想が現実になるかも！？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:369px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="コンセプトマンションの今後に期待大！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:347px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4 u-font__palt">好きなことや趣味は人それぞれですから、理想のコンセプトマンションも十人十色。あなたがプランナーなら、どんなコンセプトマンションを企画しますか？あなたが“好き”と暮らすために「あったらいいな」と憧れるのはどんな特徴を備えたマンションでしょうか。会員のみなさんに尋ねたところ、夢の企画にテンションが上がったみたいで、心が躍るプランが続出しました。現実感のあるものでは「臭い対策もバッチリ！猫と楽しく住める部屋」「共用庭でBBQができるマンション」「テレワークスペースのあるマンション」「スポーツジムのあるマンション」など。マニアックなものでは、「釣り船を共有する」「大型バイクが入る住戸」「将棋好きが集うマンション」といった声もあがりました。なかには「おとぎ話の世界を再現したマンション」「ご近所と和気あいあいで暮らせる江戸時代の長屋」「映画『コットンクラブ』のように、飲食しながら気軽にコンサートが楽しめる暮らし」などユニークなプランもあって、発想の豊かさに驚かされました。</p>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp u-font__palt">好きなことや趣味は人それぞれですから、理想のコンセプトマンションも十人十色。あなたがプランナーなら、どんなコンセプトマンションを企画しますか？あなたが“好き”と暮らすために「あったらいいな」と憧れるのはどんな特徴を備えたマンションでしょうか。会員のみなさんに尋ねたところ、夢の企画にテンションが上がったみたいで、心が躍るプランが続出しました。現実感のあるものでは「臭い対策もバッチリ！猫と楽しく住める部屋」「共用庭でBBQができるマンション」「テレワークスペースのあるマンション」「スポーツジムのあるマンション」など。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="理想が現実になるかも！？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								 マニアックなものでは、「釣り船を共有する」「大型バイクが入る住戸」「将棋好きが集うマンション」といった声もあがりました。なかには「おとぎ話の世界を再現したマンション」「ご近所と和気あいあいで暮らせる江戸時代の長屋」「映画『コットンクラブ』のように、飲食しながら気軽にコンサートが楽しめる暮らし」などユニークなプランもあって、発想の豊かさに驚かされました。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="コンセプトマンションの今後に期待大！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="コンセプトマンションの今後に期待大！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="コンセプトマンションの今後に期待大！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
