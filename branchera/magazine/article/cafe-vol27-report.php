<?php
//base
include ("../../function.php");
$content = get_id_data('25027');
$pageTtl = 'あなたの今を聞かせて！<br>〜みんなどうしてる？結露対策';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '冬の悩みごとのひとつ「結露」。寒い朝、窓にびっしりとついた水滴は困ったものですよね…。みなさんはどの場所での発生が気になって、どのように対処しているのでしょうか？いただいたお悩みやご意見とともに、結露ができる仕組みや試してみたい対策をご紹介。問題を解決する一助にしていただければと思います。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年12月9日（木）～12月15日（水）";
// 回答者数
$respondents ="計2,625名";
// 対象者：
$target = "長谷工IDをお持ちの方で、結露でお悩みの方";

$cafeReportNum = "27";


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
        <h2 class="u-font-size__30 u-color__dark mb2">〜みんなどうしてる？結露対策</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="みんなどうしてる？冬の結露対策｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="みんなどうしてる？冬の結露対策｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>冬の悩みごとのひとつ「結露」。寒い朝、窓にびっしりとついた水滴は困ったものですよね…。みなさんはどの場所での発生が気になって、どのように対処しているのでしょうか？いただいたお悩みやご意見とともに、結露ができる仕組みや試してみたい対策をご紹介。問題を解決する一助にしていただければと思います。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="結露で困ることは、なんといっても「カビ！」サッシはもちろん、クローゼットの中まで｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="結露で困ることは、なんといっても「カビ！」サッシはもちろん、クローゼットの中まで｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p>結露で困ること、被害などをお聞きしたところ、「サッシ回りおよびレースカーテンに黒カビが発生」、「窓枠のゴム部分にカビが発生して掃除しても取れない」など、主に窓回りの被害が深刻なようです。外気と直接触れる窓ガラスは結露しやすい場所なので、よくわかります…。<br>また「クローゼットの中のコート類にカビが生えた。まさかそこまで影響が出るとは思ってもいなかった」や「和室の畳がよれた」など、クローゼットや日当たりが悪い場所で起きることもあるようです。さらには「結露でカビが生えているところで作業していて、咳が止まらなくなったことがあります」と、健康への影響についてのエピソードもあり心配なところです。</p>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="冬は乾燥するのでカビは生えないと思ってました image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt3 mb3 center" loading="lazy">
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02-sp@2x.png" alt="気がつくとカビって発生しているんですよ〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
            <div class="u-column__item u-only__pc">
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="冬は乾燥するのでカビは生えないと思ってました image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:336px" loading="lazy">
              </figure>
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img02@2x.png" alt="気がつくとカビって発生しているんですよ〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:287px" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="結露が起きる仕組みは、６割の方が「知っている」と回答。一方、大多数の方が対策に不満あり！？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="結露が起きる仕組みは、６割の方が「知っている」と回答。一方、大多数の方が対策に不満あり！？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="あきらめている方も多いですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">敵を倒すにはまず知ることから！結露とは「空気中に含まれる水蒸気が、冷たい物体（ガラスなど）に触れて冷やされることで、気体から液体に変わる現象」です。アンケート結果では、60％の方がこの仕組みを「知っている」と回答。知らない人が多いと思いきや、意外とみなさんご存じなのですね…！<br>ただ、仕組みは知っているものの有効な対処法がわからないという方が多いようです。<br>ご自身の結露対策に「満足している」と回答した方はわずか25％。「満足していない」の46％と「していないがあきらめている」の29％を合わせると、実に75％の方が結露対策に不満を持っているという結果に。</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p class="u-font__palt">敵を倒すにはまず知ることから！結露とは「空気中に含まれる水蒸気が、冷たい物体（ガラスなど）に触れて冷やされることで、気体から液体に変わる現象」です。アンケート結果では、60％の方がこの仕組みを「知っている」と回答。知らない人が多いと思いきや、意外とみなさんご存じなのですね…!<br>ただ、仕組みは知っているものの有効な対処法がわからないという方が多いようです。<br>ご自身の結露対策に「満足している」と回答した方はわずか25％。「満足していない」の46％と「していないがあきらめている」の29％を合わせると、実に75％の方が結露対策に不満を持っているという結果に。</p>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="あきらめている方も多いですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
					</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="対策は主に「水滴を拭き取る」と「水滴ができないようにする」。その方法もさまざま｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="対策は主に「水滴を拭き取る」と「水滴ができないようにする」。その方法もさまざま｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="この時期は結露を拭き取るのが日課ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="朝の方が結露が多い気がするなぁ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:336px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 u-only__pc">では、みなさんは具体的にどのような対策をされているのでしょうか？<br>まずは「サッシに吸水テープ」「窓際にバスタオルを置く」「吸水タオルで拭き取る」など、できた水滴を拭き取る対策。忙しい朝、家中の窓を拭いて回るのはかなりの労力を要しますよね。「毎朝の窓拭きで20分位かかり、毎日腕がパンパン」というつらい体験談も。<br>もうひとつは、結露が起きる原因である湿度や温度差を調節する対策です。<br>「対策用フィルムを窓ガラスに貼る」、「半透明のシートやプチプチを窓とカーテンの間に挟んでいる」、「壁と家具との間を10cmほど空けて風通しを良くする」など。なかには「浴槽のお湯を抜き、浴室内の水気を拭き取って換気しておく。 長年、家中のひどい結露に困っていましたが、この対策をしてからは一切結露しなくなり、その効果に驚いています」という、ちょっと試してみたくなる対策も寄せられました。<br>そんなみなさんの奮闘に負けじと（？）、ブランシエラクラブからもプロの知恵をご紹介。住まいの達人が暮らしを快適にするアイデアをまとめた「Mr.わくわくメンテナンス Vol.9」でも、結露ができる仕組みを解説し、キッチンや浴室などで発生する仕組みの図説やワンポイントアドバイスを交え、すぐにできる結露対策をご紹介しています。ぜひご一読を。</p>
							<p class="mb2 u-only__sp">では、みなさんは具体的にどのような対策をされているのでしょうか？<br>まずは「サッシに吸水テープ」「窓際にバスタオルを置く」「吸水タオルで拭き取る」など、できた水滴を拭き取る対策。忙しい朝、家中の窓を拭いて回るのはかなりの労力を要しますよね。「毎朝の窓拭きで20分位かかり、毎日腕がパンパン」というつらい体験談も。</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="この時期は結露を拭き取るのが日課ですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb2 u-only__sp">もうひとつは、結露が起きる原因である湿度や温度差を調節する対策です。<br>「対策用フィルムを窓ガラスに貼る」、「半透明のシートやプチプチを窓とカーテンの間に挟んでいる」、「壁と家具との間を10cmほど空けて風通しを良くする」など。なかには「浴槽のお湯を抜き、浴室内の水気を拭き取って換気しておく。 長年、家中のひどい結露に困っていましたが、この対策をしてからは一切結露しなくなり、その効果に驚いています」という、ちょっと試してみたくなる対策も寄せられました。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="朝の方が結露が多い気がするなぁ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb4_sp center" loading="lazy">
							<p class="mb2 u-only__sp">そんなみなさんの奮闘に負けじと（？）、ブランシエラクラブからもプロの知恵をご紹介。<br>住まいの達人が暮らしを快適にするレシピをご紹介する「Mr.わくわくメンテナンスVol.9」でも、結露ができる仕組みを解説し、キッチンや浴室などで発生する仕組みの図説やワンポイントアドバイスを交え、すぐにできる結露対策をご紹介しています。ぜひご一読を。</p>
							<a href="<?php echo $base_url; ?>/magazine/article/w-vol09.php" data-ga-click="cafe27_1">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn@2x.png" alt="快適な冬のお部屋づくりへのアドバイスMr.わくわくメンテナンス講座Vol.9 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:331px" loading="lazy">
						      <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn-sp@2x.png" alt="快適な冬のお部屋づくりへのアドバイスMr.わくわくメンテナンス講座Vol.9｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mt5" loading="lazy">
								</figure>
							</a>	
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
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="円グラフ 部屋の中で一番結露が起きやすい場所は、次のうちどこでしょう？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="湿気を調整する壁があるなんてすごいです〜！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:348px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb8">「部屋の中で一番結露が起きやすい場所は？」の答えは、実は5つの選択肢（「北側の窓」「南側の窓」「家具の裏」「押し入れやクローゼット」「加湿した寝室」）どれを選んでも正解です。<br>少々、ひっかけ的な問題になってしまいましたが、つまり湿気や温度差の生じる場所すべてが結露の危険にさらされているということなのです！<br>そんな神出鬼没な結露問題を解決するためには、思い切ってリフォームすることも一案です。長谷工リフォームでは、調湿力のある壁材（エコカラット）や二重窓を採用することで、結露のストレスを軽減できる住まいを提案しています。</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/hrf/reform/haseko-method/02/" target="_blank" data-ga-click="cafe27_2">
									<figure>
										<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn@2x.png" alt="実例あり！結露の軽減方法も必見image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:331px" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">「部屋の中で一番結露が起きやすい場所は？」の答えは、実は5つの選択肢（「北側の窓」「南側の窓」「家具の裏」「押し入れやクローゼット」「加湿した寝室」）どれを選んでも正解です。<br>少々、ひっかけ的な問題になってしまいましたが、つまり湿気や温度差の生じる場所すべてが結露の危険にさらされているということなのです！<br>そんな神出鬼没な結露問題を解決するためには、思い切ってリフォームすることも一案です。長谷工リフォームでは、調湿力のある壁材（エコカラット）や二重窓を採用することで、結露のストレスを軽減できる住まいを提案しています。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="円グラフ 部屋の中で一番結露が起きやすい場所は、次のうちどこでしょう？|image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">								
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="湿気を調整する壁があるなんてすごいです〜！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb4">
								<a href="https://www.haseko.co.jp/hrf/reform/haseko-method/02/"  target="_blank" data-ga-click="cafe27_2">
									<figure>
								    <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="実例あり！結露の軽減方法も必見 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
									</figure>
								</a>
							</div>
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
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
