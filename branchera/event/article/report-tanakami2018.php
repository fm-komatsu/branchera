<?php
//base
include ("../../function.php");
$content = get_id_data('4038');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">
			<section class="section wrapper" style="padding-top: 0;">
				<img data-src="<?php echo $img_url; ?>/event/report-tanakami2018/main-v.jpg" data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/main-v@2x.jpg"
				 alt="まぼろしのお米『たなかみ米』田植え体験 ～収穫レポート2018～" class="u-img__max u-only__pc mb3">
				<img data-src="<?php echo $img_url; ?>/event/report-tanakami2018/main-v-sp@2x.jpg" alt="まぼろしのお米『たなかみ米』田植え体験 ～収穫レポート2018～"
				 class="u-img__max u-only__sp mb3">
				<div class="mb6 date u-position__center">
					<p>【記事一覧】</p>
					<p>
						<span style="display : inline-block;"><a href="#repo180926" data-scroll>
								<date>9月26日（水）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180924" data-scroll>
								<date>9月24日（月）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180923" data-scroll>
								<date>9月23日（日）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180905" data-scroll>
								<date>9月5日（水）</date>
							</a>&emsp;|&emsp;</span><br class="u-only__pc">
						<span style="display : inline-block;"><a href="#repo180829" data-scroll>
								<date>8月29日（水）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180822" data-scroll>
								<date>8月22日（水）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180810" data-scroll>
								<date>8月10日（金）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180805" data-scroll>
								<date>8月5日（日）</date>
							</a>&emsp;|&emsp;</span><br class="u-only__pc">
						<span style="display : inline-block;"><a href="#repo180725" data-scroll>
								<date>7月25日（水）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180720" data-scroll>
								<date>7月20日（金）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180711" data-scroll>
								<date>7月11日（水）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180704" data-scroll>
								<date>7月4日（水）</date>
							</a>&emsp;|&emsp;</span><br class="u-only__pc">
						<span style="display : inline-block;"><a href="#repo180627" data-scroll>
								<date>6月27日（水）</date>
							</a>&emsp;|&emsp;</span>
						<span style="display : inline-block;"><a href="#repo180619" data-scroll>
								<date>6月19日（火）</date>
							</a></span>
					</p>
				</div>
				<article class="repoArea" id="repo180926">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>9月26日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180926-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180926-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180926-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180926-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>収穫したモミを乾燥・調整して、玄米に仕上げたよ！<br>できた玄米は精米するまで、低温保管庫で保管するんだぽん！</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180924">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>9月24日（月）</date>
							</h3>
							<div class="flex between center mb2">
								<figure class="w50 mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180924-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180924-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180924-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180924-01-sp@2x.jpg" />
								</figure>
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180924-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180924-02@2x.jpg" />
								</figure>
							</div>
							<div class="balloon balloon_widthmax mb hasepon">
								<div class="inner_pon">
									<div>
										<p>収穫作業！<br>小さかった苗が大きくなり、そして実り、収獲を迎えたよ！<br>何だか感無量だぽん。。。</p>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180923">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>9月23日（日）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180923-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180923-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180923-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180923-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>台風21号が通過したあと、雨ばかり降り続いて作業ができなかったんだけど、ようやく収穫できそうな天気になったよ。<br>稲穂の確認もばっちりしたし、ようやく収穫するんだぽん。</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180905">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>9月5日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180905-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180905-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180905-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180905-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>台風21号がやってきたんだ。すごく風が強くて、稲の一部が少し倒れてしまったよ。<br>実るまでもう少し耐えてくれるよう祈るんだぽん。</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180829">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>8月29日（水）</date>
							</h3>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180829-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180829-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180829-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180829-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>稲穂が頭（こうべ）を垂れてきたよ！色づくまでもう少しかな。<br>黄金色に変化したら収穫するんだぽん！</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180822">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>8月22日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180822-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180822-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180822-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180822-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>稲穂も出そろい、これから黄金色に染まっていくんだ！太陽の光と清流の水ですくすく育ったお米の収穫が間近に迫ってきたよー。</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180822-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180822-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>稲穂が立った状態で、約100㎝だぽん！<br>これから稲穂が実って(成熟して)、頭が垂れてくるから、刈り取り時は80㎝くらいだよ。</p>
										</div>
									</div>
								</div>
							</div>
							<div class="u-assist">
								<h4 class="u-ttl__s">【ミニコラム】</h4>
								<p>
									<blockquote>
										<strong>秋の田のかりほの庵の苫をあらみわが衣手は露にぬれつつ</strong>
									</blockquote> 百人一首　第1番の首　天智天皇
								</p>
								<p> 現在の滋賀県大津市に都を移した際、天智天皇の命を受け、この「たなかみ」ができました！！ </p>
								</p>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180810">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>8月10日（金）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180810-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180810-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180810-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180810-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>稲穂が顔を出し始めたよ！これからどんどん出てくるぽん！</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180810-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180810-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>バッタがひと休み？稲の葉にバッタがいたよー。毎年、収穫の時は、たくさんのバッタが飛び跳ねているぽん！</p>
										</div>
									</div>
								</div>
							</div>
							<div class="u-assist">
								<h4 class="u-ttl__s">※今年のお米の出来予想</h4>
								<p>
									たなかみ地区での今年のお米作りは、更に特別なものになっています。７月の西日本の豪雨の影響で、稲作を諦めざるをえない農家さんも多い中、幸い大事には至らず、稲作を継続できることは感謝と安堵ではあるものの、この異常なまでの酷暑の影響で、今までとは違っている事がとても多いのが現実。いつもより早く稲穂が出始めたり、その稲穂の成長にたっぷりのお水が必要な時期に連日の高温により、田んぼの水がすぐに無くなったり。
								</p>
								<p> 毎日の巡回で畔の水漏れの確認や、適量の水管理などが欠かせなくなっています。異例づくしの天候ですが、ブランシエラクラブの田んぼでは、お盆休み返上、万全で挑みます。<br>日照時間は多く生育は良好。こまめな管理で良質なお米が採れる見込みです。お米一粒一粒に込められた愛情と自然の恵み、収穫が楽しみです。
								</p>
								</p>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180805">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>8月5日（日）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>今年の夏は、毎日、毎日天気が良くて、いつもお日様が照らしてるから、すっごく成長が早いよ。一番成長している葉で８０㎝位になったよん！</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>栽培しているのはコシヒカリなので、これ以上は大きくならないんだ。このあと、稲穂が顔を出し、実っていくぽん！</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb4">
								<div class="balloon balloon_widthmaxsp mb hasepon">
									<div class="inner_pon">
										<div>
											<p>長谷工あんしんデリが、作っている田んぼの水路で、生き物観察したよん！水路には、メダカ・川エビ・ザリガニ・タニシなどたくさんの生き物が生息してるぽん！</p>
										</div>
									</div>
								</div>
								<figure class="w50">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-03.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180805-03@2x.jpg" />
								</figure>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180725">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>7月25日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-01-sp@2x.jpg" />
								</figure>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>日々大きくなってるよん。猛暑が何日も続いていて、田んぼの水がすぐ干上がってしまうんだ。だから毎日、水を入れてるぽん！</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb4">
								<div class="balloon balloon_widthmaxsp mb hasepon">
									<div class="inner_pon">
										<div>
											<p>ぼくは毎日暑くて夏バテ？気味だけど、鳥たちは大丈夫なのかな？</p>
										</div>
									</div>
								</div>
								<figure class="w50">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-03.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180725-03@2x.jpg" />
								</figure>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180720">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>7月20日（金）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-01-sp@2x.jpg" />
								</figure>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>日に日に大きくなってるよ！今は、「中干し」って言って、田んぼに水が張ってない状態にするんだ！美味しいお米を作るポイントの一つだぽん。</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb4">
								<div class="balloon balloon_widthmaxsp mb hasepon">
									<div class="inner_pon">
										<div>
											<p>中干し前に、合鴨の親子がきたよ！子供たちは、親にぴったりくっついて、後を追いかけてるぽん！</p>
										</div>
									</div>
								</div>
								<figure class="w50">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-03.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180720-03@2x.jpg" />
								</figure>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180711">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>7月11日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180711-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180711-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180711-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180711-01-sp@2x.jpg" />
								</figure>
							</div>
							<div class="balloon balloon_widthmax mb hasepon">
								<div class="inner_pon">
									<div>
										<p>ブランシエラクラブの田んぼの草取りしたぽん。</p>
									</div>
								</div>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180711-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180711-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>チェーン除草で雑草の抑制をしてるけど、それでも生えてくる雑草は人の手でていねいに取り除くんだぽん。</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180704">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>7月4日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-01-sp@2x.jpg" />
								</figure>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>稲はすくすく成長しているよ。でも田んぼの中に少し雑草が生えてきているので、頑張って除草するぽん。</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb4">
								<div class="balloon balloon_widthmaxsp mb hasepon">
									<div class="inner_pon">
										<div>
											<p>6月30日にチェーン除草したよ。田んぼにチェーンを垂らして雑草が生えにくくするんだ。<br>土の表面が攪拌（かくはん）されるのと同時に田んぼの水が濁って、水中の雑草に光が届かず雑草の抑制につながるんだぽん。</p>
										</div>
									</div>
								</div>
								<figure class="w50">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-03.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180704-03@2x.jpg" />
								</figure>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180627">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">
								<date>6月27日（水）</date>
							</h3>
							<div class="center mb2">
								<figure class="mb2">
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180627-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180627-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180627-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180627-01-sp@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmax mb hasepon">
									<div class="inner_pon">
										<div>
											<p>稲は順調に成長しているよ♪</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180627-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180627-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>あれ？田んぼの水面を見て！<br>急に暑くなったからかな～、泡が田んぼ一面に広がっている！？<br>でも、大丈夫、心配ないよ。<br>水管理がんばってやるぽん！</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
				<article class="repoArea" id="repo180619">
					<div class="repoArea__row">
						<section class="repoArea__item">
							<h3 class="mb2">6月19日（火）</h3>
							<div class="center mb2">
								<figure>
									<img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-01.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-01@2x.jpg" />
									<img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-01-sp.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-01-sp@2x.jpg" />
								</figure>
							</div>
							<div class="flex between center mb2">
								<figure class="w50 mb2_sp">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-02.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-02@2x.jpg" />
								</figure>
								<div class="balloon balloon_widthmaxsp mb hasepon_r">
									<div class="inner_r">
										<div>
											<p>こんにちは、長谷工あんしんデリの「はせぽん」だぽん。<br>これから稲の成長をレポートしていくので、よろしくね！</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex between center mb4">
								<div class="balloon balloon_widthmaxsp mb hasepon">
									<div class="inner_pon">
										<div>
											<p>6月9日にみなさんが田植えをしてから、10日が経ったよ。すくすくと大きくなっているね。<br>もう20センチ位まで大きくなったよ。たっぷりの愛情を込めて育てていくぽん！</p>
										</div>
									</div>
								</div>
								<figure class="w50">
									<img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-03.jpg"
									 data-retina="<?php echo $img_url; ?>/event/report-tanakami2018/report-tanakami180619-03@2x.jpg" />
								</figure>
							</div>
						</section>
					</div>
				</article>
			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
