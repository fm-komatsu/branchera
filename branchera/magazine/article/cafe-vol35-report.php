<?php
//base
include ("../../function.php");
$content = get_id_data('25035');
$pageTtl = $content['title'];
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
$period = "2022年4月21日（木）～4月27日（水）";
// 回答者数
$respondents ="計3,336名";
// 対象者：
$target = "長谷工IDをお持ちで、100戸以上のマンションにお住まいでお部屋の空気が気になる方";

$cafeReportNum = "35";


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
    <div class="main__wrapper cafe-report__wrapper_new">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">きれいな空気、最高！おうちで何ができる？</h2>
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
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>行動規制が緩くなるなど、終わりの兆しは見えるものの、まだまだ続きそうな「おうち時間」。目には見えないですが住環境のクオリティに直結する「空気」について、ブランシエラクラブ会員のみなさんに気になるポイントやエアコンクリーニングの感想などを伺いました！</p>
				</div>
			</section>
			<section class="mb6 mb2_sp">
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="お部屋の空気をきれいにするためにしていることは「換気」が最多｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="お部屋の空気をきれいにするためにしていることは「換気」が最多｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p class="mb2 mb3_sp">「お部屋の空気のためにしていること」として、最も多くの方が挙げられたのが「換気」で42%でした。昨年1月の「換気についてのアンケート」でも9割の方が関心を示していたほど。コロナウイルス感染予防の対策としてすっかり浸透した感じがありますね！</p>
								<a href="https://www.haseko.co.jp/branchera/magazine/article/cafe-vol05-report.php" data-ga-click="cafe35_1" class="u-only__sp mb3_sp">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn-sp@2x.png" alt="「換気」について昨年のアンケート結果はこちら「きれいな空気のある暮らし」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp" style="max-width:80%;" loading="lazy">
								</a>
							<p>次いで多かったのが「エアコンの掃除」と「空気清浄機を置く」。空気清浄機の売り上げはここ数年伸びているということで注目されていますし、エアコン掃除は夏前のこの時期、気になり始める頃ですね。</p>
						</div>
						<div class="u-column__item center">
							<figure class="mb5 mb0_sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="ここ数年、換気を意識するようになりました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc mb3" style="max-width:288px;" loading="lazy">
								<a href="https://www.haseko.co.jp/branchera/magazine/article/cafe-vol05-report.php" data-ga-click="cafe35_1" class="u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn@2x.png" alt="「換気」について昨年のアンケート結果はこちら「きれいな空気のある暮らし」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc" style="max-width:332px;" loading="lazy">
								</a>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="ここ数年、換気を意識するようになりました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp" style="max-width:80%;" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb6 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="半数以上の方が「エアコンの掃除は自分で」と
<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="回答するも、大変なことも多いようです
<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="高い所の作業は首が痛くなるよね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:302px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="奥まできれいにできなくて…｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:302px;" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>「エアコンの掃除を自分でする」と回答した方は半数近く。ただ「フィルター以外は掃除できない」や「どこまできれいにすればよいか迷います」などの声から察するに、主にフィルター部分のみで、内部まで掃除をされている方は少なそうです。<br>困っていることについては、「高い所に取り付けてあるので、フィルターの取り外しなどが大変」という声が多数。確かに、天井近くに設置されているエアコンを掃除するのは大変ですね。<br>また「きちんと洗えているか確認が難しい」や「奥のほうの掃除が大変」など、内部の清潔さに疑問を持っている方も多数いらっしゃる模様。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="高い所の作業は首が痛くなるよね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="奥まできれいにできなくて…｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="エアコンクリーニングを頼んだことがある方は昨年から微増。仕上がりはおおむね満足！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="エアコンクリーニングを頼んだことがある方は昨年から微増。仕上がりはおおむね満足！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="少しずつ利用する人が増えているようだね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2"  style="max-width:324px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="さすがはプロ！頼んでよかった！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:324px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p>プロにエアコンクリーニングを頼んだことがある方は昨年4月のアンケートでは30%でしたが、36%に増えていました。「普段はフィルターのみ自分で清掃していますが、年に2回はプロにお願いしています」など、上手に使い分けている方も増えてきたようです。「下手に分解してしまって戻し方が分からなくなったことがあります…」ということもあるそうなので、プロにおまかせしたほうが無難ですね。<br>気になる仕上がりについては「大変満足」が25%で、「満足」の56%と合わせると、約8割の方が満足されているようです。</p>
						</div>
					</div>
				</div>
				<div class="mb6 u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="少しずつ利用する人が増えているようだね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="さすがはプロ！頼んでよかった！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
			</div>
			</section>
			<section class="mb6 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="「内部まできれいになった」「さすがプロ」という喜びの声が多い一方、ちょっぴり不満も｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="「内部まできれいになった」「さすがプロ」という喜びの声が多い一方、ちょっぴり不満も｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc mt5">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="もう少しお手頃価格だったらいいなあ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2"  style="max-width:356px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="お願いする所によって仕上がりに差があるみたい｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:347px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb2">プロに清掃を頼まれた方からは「黒い汚れがたっぷり取れすっきりした」「自分ではできないような丁寧な作業をしてもらった」など、頼んでよかったという喜びの声が多かった一方、価格や依頼先選びへの不満も挙がりました。「仕上がりには満足だが価格が高い」と、よりリーズナブルなサービスを求める回答が目立ちます。会社によっては2台目から割引してくれるキャンペーンなどもあるようなので要チェックです。<br>また、「きちんとやってくれる会社もあるが、仕事が雑で汚れも落ちず床や壁も汚されたことがある。選び方が難しい」という声のように、残念な経験をされた方もいるようです。価格のほかにも内容をしっかり確認して、検討することが大切ですね。</p>
							<div class="mb6 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="もう少しお手頃価格だったらいいなあ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="お願いする所によって仕上がりに差があるみたい｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb5">長谷工でもエアコンクリーニングを承っています。ご利用いただいた方からは「丁寧でいろいろ質問にも答えてくれて、豆知識も知れるなどとても助かりました」といううれしいお声が届いています。気になる方はぜひ！</p>
							<a href="https://e-suteki.haseko.jp/service/air-conditioner-cleaning.html" data-ga-click="cafe35_2" target="_blank" class="mb3_sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="ご相談からお気軽に！価格や作業の様子も載っています｜すてきテラス「エアコンクリーニング」<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc" style="max-width:332px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="ご相談からお気軽に！価格や作業の様子も載っています｜すてきテラス「エアコンクリーニング」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp" style="max-width:80%;" loading="lazy">
								</a>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
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
