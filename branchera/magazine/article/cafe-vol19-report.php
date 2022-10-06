<?php
//base
include ("../../function.php");
$content = get_id_data('25019');
$pageTtl = 'あなたの今を聞かせて！<br>〜気になるお部屋の空気の対策、どうしてますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'おうちで過ごす時間が長くなっているためか、住環境に気を遣う方が増えているようです。なかでも体へダイレクトに影響を与える空気や温度への関心は高め。そんなお部屋の空気を左右するエアコンのお手入れについて、クイズ形式も交えてみなさんに聞いてみました。今回は専門家からの豆知識もあわせてご紹介しますので、お掃除の際にお役に立てていただければ…。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年8月19日（木）～8月25日（水）";
// 回答者数
$respondents ="計3,175名";
// 対象者：
$target = "長谷工IDをお持ちの方で、マンションにお住まいで、お部屋の空気が気になっている方";

$cafeReportNum = "19";


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
        <h2 class="u-font-size__30 u-color__dark mb2">気になるお部屋の空気の対策、どうしてますか？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="気になるお部屋の空気の対策、どうしてますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="気になるお部屋の空気の対策、どうしてますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p></p>おうちで過ごす時間が長くなっているためか、住環境に気を遣う方が増えているようです。なかでも体へダイレクトに影響を与える空気や温度への関心は高め。そんなお部屋の空気を左右するエアコンのお手入れについて、クイズ形式も交えてみなさんに聞いてみました。今回は専門家からの豆知識もあわせてご紹介しますので、お掃除の際にお役に立てていただければ…。
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="「お部屋のほこりが目立つところ」は「テレビなどの家電の上」、「家具の上」などが多数派。でも、一番ほこりを集めているのは実は…？！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="「お部屋のほこりが目立つところ」は「テレビなどの家電の上」、「家具の上」などが多数派。でも、一番ほこりを集めているのは実は…？！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3 u-font__palt">お部屋のほこり…どこが目立つでしょうか。「テレビなどの家電」「家具の上」などが上位。そもそも家電は静電気を発しているのでほこりが吸着しやすいようです。<br>でも実はほこりがたまりやすいのは…今回4位だった「エアコンのフィルター」なのです！<br>なぜなら、エアコンは吸気しているから。エアコンフィルターを掃除された方は、そのほこりの量に驚かれたことがあるのではないでしょうか。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜エアコンは毎日使ってますね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:343px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜エアコンは毎日使ってますね〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="エアコンのフィルター掃除のおすすめ頻度は「週1回」。ここだけはマメに掃除してほしいところだそうです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="エアコンのフィルター掃除のおすすめ頻度は「週1回」。ここだけはマメに掃除してほしいところだそうです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="お掃除をさぼると電気代が余計にかかることも image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:337px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">みなさんからの回答では、フィルター掃除の最適頻度は「月１回」が41％と最多でした。残念！専門家によると、掃除のおすすめ頻度は最も汚れるフィルターが「週１回」、ルーバーやカバーは3カ月に１回だそうです。フィルターの汚れは効率にも影響するようですので、電気代節約のためにもまめな掃除を心掛けたいものです。<br>フィルターを掃除する際にはいきなり水洗いするのではなく、掃除機でざっとほこりを吸い取ってから中性洗剤を溶いた水でやさしくこすり洗いするとよいそうです。</p>
						  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="お掃除をさぼると電気代が余計にかかることも  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3_sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="エアコンの掃除を「自分でする」と答えた方は7割弱。皆さん、お掃除意識高めのようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="エアコンの掃除を「自分でする」と答えた方は7割弱。皆さん、お掃除意識高めのようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="室外機は掃除したことないです image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:323px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">「エアコンを自分で掃除する」と答えた方は64％でした。掃除箇所は限定しなかったので、フィルターと室内機のカバーだけを掃除されている方、ご自身で内部まで掃除されている方、さまざまではないかと思いますが、みなさんエアコンの清潔さには関心をお持ちのようです。<br>ここで専門家からのアドバイスをひとつ。室内機だけでなく、室外機の清掃もお忘れなく。落ち葉や土ぼこりなどで汚れていると、やはり効率に影響を与えるそうです。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="室外機は掃除したことないです image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="エアコン掃除に適した時期、回答は「春」が最多でしたが、実は春と秋。依頼するなら費用の面でもお得です。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="エアコン掃除に適した時期、回答は「春」が最多でしたが、実は春と秋。依頼するなら費用の面でもお得です。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="「使う季節の前後」のお掃除がいいみたい image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:362px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="繁忙期を避けての予約がお得なのね image｜ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:346px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">「エアコン掃除をするのに適した時期はいつだと思いますか？」という質問に対して、「春」という回答が40％弱を獲得して第1位。正解です。ただ秋も適しているのです。<br class="u-only__pc">専門家によると、おすすめ時期は使い始める前の「春（4月～5月）」と、使い終わって冷房で発生したカビを除去できる「秋（9月～10月）」とのことです。</br>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="使う季節の前後」のお掃除がいいみたい  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							特にプロへクリーニングを依頼する場合、梅雨のはじめから暑さが厳しい時期（6月～8月）は繁忙期でもあり、予約が取りにくい上、価格もお得ではないことから、避けた方が無難だとか。<br>他の設問からの回答ですが「引っ越しのタイミングでクリーニングした」という方も目立ちました。退居の際に汚れたエアコンを外して分解清掃をし、新居につけてくれるサービスがあるようです。しかも通常よりもリーズナブルな価格になることもあるので、転居の際には確認してみてもよいかもしれません。<br>自分で掃除する場合も、暑い時期、あるいは寒い時期に、エアコンを止めている部屋で作業するのは大変ですよね…。結果、おすすめは春と秋になります。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="繁忙期を避けての予約がお得なのね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb2_sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="プロに頼んだことがある方は約3割と少なめですが、エアコンを長くもたせるためには、日々のお手入れと年に一度の本格掃除の組み合わせが効果的なようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="プロに頼んだことがある方は約3割と少なめですが、エアコンを長くもたせるためには、日々のお手入れと年に一度の本格掃除の組み合わせが効果的なようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="中のパーツが複雑で自分では掃除しにくいな image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="プロの掃除術気になります！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:316px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">エアコンクリーニングをプロに依頼したことがある方は3４％とまだ少数派。プロにまかせる理由は「徹底的に掃除したい」「自分ではやり方がわからない」が多数を占めました。</br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="中のパーツが複雑で自分では掃除しにくいな image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								「フィルター掃除だけではきれいにならないと感じた」や「自分ではできない内部の掃除をしてもらえるから」など、プロの技で徹底的に掃除してもらいたいという期待がみられます。<br>最近のエアコンは自動清掃機能が付いていますが、電気屋さん曰く「エアコン掃除と自動清掃の意味は違う」という気になるお話も。自動清掃というと、ほったらかしでいいような気がしますが、実は一部の上位モデル以外はきれいにするのはフィルターのみ。内部の熱交換器や吹き出し部分などはやはり、定期的なお掃除が必要ということでした。</p>
							<p class="mb4">プロはどのようにクリーニングするか等、エアコン清掃に関する詳しい情報は「すてきテラス」のページで！</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="プロの掃除術気になります！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">							
								<a href="https://e-suteki.haseko.jp/service/air-conditioner-cleaning.html?utm_source=brc_cafe_vol19&utm_medium=web&utm_campaign=air_conditioner_cleaning" target="blank" data-ga-click="cafe19_1">
									<figure class="mb3">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn@2x.png" alt="エアコン掃除の記事をチェック！エアコンクリーニング｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn-sp@2x.png" alt="エアコン掃除の記事をチェック！エアコンクリーニング image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">							
									</figure>
							  </a>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
		<div class="main__item">
			<h5 class="cafe-backnum">いま暮らCaf&eacute;バックナンバー記事</h5>	
			<p class="mb2">過去にみなさまからの“声”をお聞きした記事も是非ご覧ください！</p>
			<a href="<?php echo($base_url)?>/magazine/article/cafe-vol10-report.php" data-ga-click="">
					<figure class="mb3">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/footer__btn@2x.png" alt="あなたの今を聞かせて！「エアコンでつくる快適空間」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:378px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/footer__btn-sp@2x.png" alt="あなたの今を聞かせて！「エアコンでつくる快適空間」｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</figure>
			</a>
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
