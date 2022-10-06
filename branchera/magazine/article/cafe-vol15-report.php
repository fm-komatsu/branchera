<?php
//base
include ("../../function.php");
$content = get_id_data('25015');
$pageTtl = 'あなたの今を聞かせて！<br>～夏のCafeメニューは？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '持ち家のマンションに住んでいても、家族構成や生活スタイルの変化などさまざまな理由から、住み替えを考えている人も多いのでは？売却するとなると気になるのは、今のマンションの値段です。あなたのお住まいは資産としてどのくらい価値があるのか、ご存知でしょうか。分譲マンションにお住まいのブランシエラクラブ会員のみなさんに、「資産価値」について聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年6月17日（木）～6月23日（水）";
// 回答者数
$respondents ="計1,980名";
// 対象者：
$target = "長谷工IDをお持ちの方で、コロナ禍で、ランチをおうちご飯にすることが増えた方";

$cafeReportNum = "15";


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
        <h2 class="u-font-size__30 u-color__dark mb2">夏のCafeメニューは？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！夏のCafeメニューは？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！夏のCafeメニューは？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>テレワークやオンライン授業が一般化してきているためか、自宅でランチする機会が増えていますよね。コロナ禍で料理を始めた方も多いようですし、ホットサンドメーカーなどの調理家電も売れ、ＳＮＳには素敵なランチ写真が多数アップされています。<br>「ホントのところ、みんなどんなものを食べているの？」「素敵なランチって面倒じゃないの？」など、気になる「お隣のランチ事情」をあれこれ聞いてみました！</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="まずは「Cafe風ランチ」作ったことありますか？「よく作る」「たまに作る」を合わせても、35%と少数。ただ「Cafe風」と認識せずに作っている方も多いのかも！？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="まずは「Cafe風ランチ」作ったことありますか？「よく作る」「たまに作る」を合わせても、35%と少数。ただ「Cafe風」と認識せずに作っている方も多いのかも！？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">「よく作る」と答えた方はわずか５％。「たまに作る」も30％と意外な結果でした…。<br>ただ「どういうものがCafe風なのか、把握できていないので」「ガパオライスは作るがCafe風はつくらない」など、言葉の認知度がいまひとつ低かったのも原因のようです。極端な話、複数の料理をおしゃれに盛り付ければ、それすなわちCafe風と言ってもよいのではないでしょうか。<br>また、作るジャンルは半分以上が「洋風」で、「作らない」方が食べるものは麺類が多い、という結果でしたが、和風のおかずを盛り付けても、具沢山のそうめんでも「Cafe風ランチ」と言える場合も。おそらく「潜在的Cafe風ランチ」はもっと多いのではないかと推察します…。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私は毎日Cafeごはん作ります｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:336px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜私は毎日Cafeごはん作ります｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="「作る理由」は「気分が上がる」が一番。「面倒だから作らない」という意見がある一方、「ワンプレートで洗いものがラク」という意見も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="「作る理由」は「気分が上がる」が一番。「面倒だから作らない」という意見がある一方、「ワンプレートで洗いものがラク」という意見も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="食事がたのしくなりますね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="意外と楽ちん  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:363px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>作る理由は「テレワーク中の気分転換になる」や「目先が変わって、子供も喜んでたくさん食べてくれるから」「コロナ禍で毎日の食卓に変化をつけたかったから」など、食事や料理のモチベーションアップのためが目立ちました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="食事がたのしくなりますね  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  また「ワンプレートでおしゃれに楽しめる。片付けるのにも早く済むので」や「ワンプレートにすると食器の洗い物も減るので」など、盛り付けに手間をかける代わりに片付けがラクになるという実用的な理由も。「作らない理由」でトップだった「面倒だから」はおそらく盛り付けなどのことと推察されますが、その分、片付けはラクにできるようですよ！<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="意外と楽ちん image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  一方、「出かけられない代わりに自分で料理することに楽しみを覚えたから」「なかなか外出も外食も出来ないので、家での食事が増え、最大の楽しみとも言えるので、今日はあのカフェ風、あのレストラン風と楽しさを重視するようになったため」など、おうちご飯を楽しみとするようになった方もいらっしゃるようです。
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
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="ご飯は味も見た目もだいじ！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:371px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5">料理をする際に参考にするものは？という質問には、「料理サイト（アプリ）」と答えた方が半数以上でした。SNSが多いかと思っていたのですが、「参考にしているSNSで使用しているお皿と同じデザインをえらぶ」など、SNSは主にビジュアルのヒントとして、レシピや材料などの情報は料理サイトを活用しているようです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="ご飯は味も見た目もだいじ！  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="「Cafe風」のキーワードは「ワンプレート」。大きなお皿に複数のおかずを載せるのがコツ。あまり気負わず、あるものを少しずつ使うだけで素敵なランチに変身！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="「Cafe風」のキーワードは「ワンプレート」。大きなお皿に複数のおかずを載せるのがコツ。あまり気負わず、あるものを少しずつ使うだけで素敵なランチに変身！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="色と形を考えてバランスよく配置するのがポイントです。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:353px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="意外と時短できるかも image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 mb4_sp">Cafe風に見せる工夫はなんといっても「ワンプレート」。「ワンプレートに主食、主菜、副菜をバランスよく盛り付ける」など、大きなお皿に載せるのがポイント。<br>できれば「紫色のキャベツや玉ねぎ、トマト、パプリカなどカラフルな野菜を必ず入れる」「ご飯を丸く盛ったり、高さを出したりしている。赤、緑、黄を使うようにしている」など、色合いや盛り付けにも気を付けるとベターです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="色と形を考えてバランスよく配置するのがポイントです。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								載せるものについても、イチから数種類のおかずを作らなくても、「冷蔵庫にあるもので作る、お任せランチ！」や「時間が合わない娘のランチは何を隠そう、家族の残り物を大皿に少しずつかわいく盛ったもの」など、常備菜や残り物を活用する方も。<br>でも、それでいいのです！我が家でも、残ったおかずを家族に食べてもらうべく、少しずつ「配給」する際に「今日はお洒落なワンプレートランチだよ」と言うと不思議と食べてくれます。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="意外と時短できるかも image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
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
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="料理サイトはレシピに悩んだ時の強い味方です！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:348px" loading="lazy">
						</div>	
						<div class="u-column__item">
							<p>作らない方の理由は「面倒」「作り方がわからない」が大多数。「手間がかかるイメージがある。おしゃれだと思うが時間がない平日に実施するのは難しいと感じる」「できたらいいだろうけれど、中々時間をかけて作れないので」という方にお勧めしたいのが、ブランシエラクラブのお料理ページ『うちのご飯は世界イチ』。Cafe風ランチにアレンジできる「常備菜レシピ」や「パーティレシピ」などをご紹介しています。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="子供がペットとのびのび過ごせる家がいいな｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						<div class="cafe-report__link mt3">
							<a href="<?php echo $base_url; ?>/magazine/index_comic02.php" data-ga-click="cafe15_1">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="時短！簡単！お料理レシピうちのご飯は世界イチ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="時短！簡単！お料理レシピうちのご飯は世界イチ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="Cafeランチ面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="Cafeランチ面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl@2x.png" alt="Instagramに投稿の写真をご紹介！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl-sp@2x.png" alt="Instagramに投稿の写真をご紹介！" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="皆さんもCafe風ランチを作ったら、ハッシュタグ#brcいまくらcafeを付けて投稿してみてくださいね。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01-sp@2x.png" alt="皆さんもCafe風ランチを作ったら、ハッシュタグ#brcいまくらcafeを付けて投稿してみてくださいね。" class="u-img__max u-only__sp mb3" loading="lazy">
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
