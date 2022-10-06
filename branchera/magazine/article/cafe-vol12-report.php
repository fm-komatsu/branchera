<?php
//base
include ("../../function.php");
$content = get_id_data('25012');
$pageTtl = 'あなたの今を聞かせて！<br>どんなペットと暮らしていますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'コロナ禍でおうち時間が長くなった影響もあってか、ペットと暮らし始める方が増えているようです。近年ではペット可のマンションも一般的になってきていますが、集合住宅で暮らすにはいろいろと気になること、気を使うことも多いようです。すでにペットと暮らしている方、これから暮らそうと思っている方、ペットにまつわるリアルな声をぜひ参考にしてみてくださいね！';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年5月6日（木）～5月12日（水）";
// 回答者数
$respondents ="計1,668名";
// 対象者：
$target = "長谷工IDをお持ちの方で、マンションにお住まいでペットを飼っている方";

$cafeReportNum = "12";


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
        <h2 class="u-font-size__30 u-color__dark mb2">どんなペットと暮らしていますか？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！どんなペットと暮らしていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！どんなペットと暮らしていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>コロナ禍でおうち時間が長くなった影響もあってか、ペットと暮らし始める方が増えているようです。近年ではペット可のマンションも一般的になってきていますが、集合住宅で暮らすにはいろいろと気になること、気を使うことも多いようです。<br>すでにペットと暮らしている方、これから暮らそうと思っている方、ペットにまつわるリアルな声をぜひ参考にしてみてくださいね！</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="どんなペットを飼っていますか？想像以上に多いのが「その他」。熱帯魚やメダカ、金魚...騒音や汚れの心配がない「水槽系」の支持は高いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="どんなペットを飼っていますか？想像以上に多いのが「その他」。熱帯魚やメダカ、金魚...騒音や汚れの心配がない「水槽系」の支持は高いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">鳥やハムスター、爬虫類などの小動物をのぞき、犬猫と人気を分けたのが「その他」。コメントによると金魚やメダカ、熱帯魚などのお魚を飼っている方が意外に多いようでした。「金魚を飼っています。鳴き声や、匂いは気にならなくていいです」や「マンションで隣などに迷惑をかけないように、自分の部屋の小さな水槽に小魚を飼っている」など、隣近所に影響が少ないペットとして選ばれている様子。<br>ただ、犬や猫ほどの深い交流はないのかと思いきや、「具合の悪そうなメダカがいると、他のメダカたちが看病するかのように周りに集まって世話をしているところを見るととても可愛いです」「水槽に近づくと、金魚たちが寄ってきます。 餌やりの時、指を入れると吸ってくれて癒されます」など、ちゃんとペット感があってハマっている方も多数？</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私はハムスターを飼っていますよ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:293px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜私はハムスターを飼っていますよ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="ペットとの暮らしで気になるのは「音」と「匂い」。周囲に影響を与えないよう対策をとっている方がほとんど。お部屋の傷みも気になるところです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="ペットとの暮らしで気になるのは「音」と「匂い」。周囲に影響を与えないよう対策をとっている方がほとんど。お部屋の傷みも気になるところです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="騒音・匂いはアイテムで対策します image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:376px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>過去にご紹介した「音に関するアンケート」でもペットの足音や吠え声について心配する方が目立っていました。「犬の足音を消すために柔らかめの敷物を利用している」「遊ぶ場所にはマットを敷いて、階下に気を配っている（ジャンプの音とかうるさいので）」など、スリップ防止も兼ねて、床にコルクをはじめとするマットなどを敷いている方が多いようです。また、匂い対策としては「一日中、空気清浄機をつけている」「こまめに壁や床を掃除している」「防音、防臭のために、ペアガラス設置」などが挙げられました。<br>さらに、大切なお部屋を傷めないように「壁紙などをペット用のものにしている」「専用のコーティングをしている」など徹底している方も。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="騒音・匂いはアイテムで対策します image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="ペットと快適に暮らすために工夫していることは？気になる音や匂いへの対策のほか、「エレベーターやマンション内では必ず抱っこする」など周囲への気遣いが多くみられました。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="ペットと快適に暮らすために工夫していることは？気になる音や匂いへの対策のほか、「エレベーターやマンション内では必ず抱っこする」など周囲への気遣いが多くみられました。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="共用部分ではリードは必ずつけます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:368px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>マンションは多くの人が暮らす場所。匂いや音に気を付けるのはもちろんですが「自分は動物が好きでも、周りの人に嫌いな人がいるかもしれないと気を使っています」と、ペットを飼っていない方への配慮を挙げられた方も多くいらっしゃいました。<br>愛犬家は特に（私もです！）「うちの子は世界一かわいい！」と盲目的になりがちですが、「ペットが苦手な方もいるので、エレベーターに乗る際に声掛けをするようにしています」「散歩の為に外に出るまでカートに乗せた。聞きなれない足音に吠えるので、廊下を通る人が少ない、端に近い部屋を選んだ」という声のように、冷静な視点を持って配慮することも必要ですね。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="共用部分ではリードは必ずつけます　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="人気を集めている「ペット共生住宅」。専用エレベーターや洗い場などのハード面はもちろん、「ペットクラブ」などのソフト面が充実しているところを気に入っている方も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="人気を集めている「ペット共生住宅」。専用エレベーターや洗い場などのハード面はもちろん、「ペットクラブ」などのソフト面が充実しているところを気に入っている方も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="洗い場は散歩で汚れた時に助かりますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:325px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="ペットと住むならペット好きが多いマンションがいいな image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:326px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb8 mb4_sp">住んでいるマンションの「気に入っているところ」としては「ベランダが広い。 エレベーターに“ペット乗車中ボタン”が付いている」や「外にペット用の洗い場があること」「マンション１階にトリミングルームがあることと、そこから外に出入りができること」など、ペットと暮らす上で便利な機能は当然ですが、「畳の部屋があること」や「部屋のドアが引き戸になっているため、ドアが風などで勢いよく閉まることがなく危険が少ない」など意外な点をペットと暮らす上で気に入っていることとして挙げられている方も。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="洗い場は散歩で汚れた時に助かりますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								施設が充実している分、ペット好きが集まってくるのか、「ペットを飼っている人が多く、世代を超えた犬友がいること」「他にも沢山の方がペットを飼っていらして、ペットを通じてお話できる方が増えたこと」など楽しそうな声も。<br>さらに「ペットクラブ」などの組織があるマンションもあり、「ペットに関する情報交換や交流の機会がある」「管理組合公認のペットクラブがあり、ペットに関する住民からの苦情等に対応している」とペットを飼っている人といない人双方の満足度が高いようです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="ペットと住むならペット好きが多いマンションがいいな image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="共用施設とまではいかなくても、ご自宅をペットが快適に過ごすためにリフォームすることもできます。プロの施工でペットも飼い主さんも大満足の生活を手に入れられます。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="共用施設とまではいかなくても、ご自宅をペットが快適に過ごすためにリフォームすることもできます。プロの施工でペットも飼い主さんも大満足の生活を手に入れられます。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="ペットに喜んでもらえる部屋なんて素敵ですね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:326px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb4">長谷工グループでは、滑りにくく音も軽減される床材や汚れがつきにくい壁材、出入りがラクになる「ペットドア」、猫ちゃんが上下移動を楽しめる「ねこステップ」など、様々なリフォームメニューをご用意しています。ですが、残念ながら「ご存じない」方が約８割と寂しい現状。アンケートにお答えいただいた方から「4月に長谷工リフォームさんにリビングをペット用フローリングへリフォームしてもらい、より快適になりました」という、嬉しいお声もいただいています。ぜひ下記サイトでペットとの楽しい生活をのぞいてみてみませんか？
							<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="ペットに喜んでもらえる部屋なんて素敵ですね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/hrf/reform/special/dog_cat.html" target="_blank" data-ga-click="cafe12_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn@2x.png" alt="ペットとの快適な暮らしを実現するリフォームは｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn-sp@2x.png" alt="ペットとの快適な暮らしを実現するリフォームは｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="ペットのほっこりエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="ペットのほっこりエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
