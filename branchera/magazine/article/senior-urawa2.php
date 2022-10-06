<?php
//base
include ("../../function.php");
$content = get_id_data('1013');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　2/2」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main senior-urawa">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<h3>
				<div class="product-img center mb4">
					<div class="u-only__pc">
						<img
						data-src="../../lib/img/magazine/senior-urawa/img11.png"
						data-retina="../../lib/img/magazine/senior-urawa/img11@2x.png"
						alt="センチュリーハウス武蔵浦和 Q&Aコーナー"
						style="max-width:720px;"
						class="u-img__max"
						>
					</div>
					<div class=" u-only__sp">
						<img
						data-src="../../lib/img/magazine/senior-urawa/img11-sp.png"
						data-retina="../../lib/img/magazine/senior-urawa/img11-sp@2x.png"
						alt="センチュリーハウス武蔵浦和 Q&Aコーナー"
						style=""
						class="u-img__max"
						>
					</div>
				</div>
				<figure class="mb4 img">
					<img
					data-src="../../lib/img/magazine/senior-urawa/img12.png"
					data-retina="../../lib/img/magazine/senior-urawa/img12@2x.png"
					alt="（株）センチュリーライフセンチュリーハウス武蔵浦和生活サービス部 介護スタッフ 北村 弘枝"
					style="max-width: 364px;"
					class="u-img__max"

					></figure>
				</h3>


				<div class="ex2">
					<div class="inner">
						<div>
							<p>こんにちは、北村さん。本日はよろしくお願いします。<br>
								まず、センチュリーハウス武蔵浦和の特徴を教えてください。</p>
							</div>
						</div>
					</div>
					<div class="balloon">
						<div class="inner">
							<div>
								<img
								data-src="../../lib/img/magazine/senior-urawa/img13.png"
								data-retina="../../lib/img/magazine/senior-urawa/img13@2x.png"
								alt="image"
								style="max-width:203px ; margin-left:10px;"
								class="u-img__max u-only__pc"
								>

								<div>
									<p>こちらこそ、よろしくお願いします。<br>当ホームは、予防介護を実施しているため、ご自分でできることはなるべくご自分で行なっていただくようにしています。過度なサポートではなく、そばで見守り、必要に応じてお手伝いするように心がけています。</p>

									<p class="center">
										<img
										data-src="../../lib/img/magazine/senior-urawa/img13.png"
										data-retina="../../lib/img/magazine/senior-urawa/img13@2x.png"
										alt="image"
										style=""
										class="u-img__max u-only__sp" >
									</p>

									<p>介護の現場では、ついすぐに手を貸してしまうことが多いのですが、それではみなさまのためにはなりませんから。今まで洋服を着られなかった方が、ホームにいらしてから着られるようになったこともあるのですよ。ご自分で試してみることがリハビリのひとつなので、私たちはそれをそばで見守り、サポートしています。</p>
								</div>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">このお仕事で大切なことはなんでしょうか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>同じ認知症でも帰宅願望があったり、幻覚症状があったり、一人ひとり症状が異なるのです。また、朝と夜でもその症状が違うこともあります。<br>昨日そうであっても今日は違うという意識をもって、常にみなさまのそばに寄り添い、ちょっとした変化を見逃さず、迅速で正確な判断を行なうことが大切です。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">さまざまなアクティビティがありますが、みなさまの反応はいかがですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<img
								data-src="../../lib/img/magazine/senior-urawa/img14.png"
								data-retina="../../lib/img/magazine/senior-urawa/img14@2x.png"
								alt="image"
								align="right"
								style="max-width:203px ; margin-left:10px;"
								class="u-img__max u-only__pc"
								>
								<div>
									<p>歌やボール投げ、トランプ、ボウリングなど、いつもニコニコ楽しみながらも「負けたくない！」って夢中になってがんばっていますよ。</p>
									<p class="center"><img src="../../lib/img/magazine/senior-urawa/img14.png" alt="" style="width:auto;" class="u-only__sp" /></p>
									<p>それに、みなさまはたいへんな時代を生きてきた方たちですから、芯が強いのですよね。次はがんばるぞって、何事にもポジティブに考えていらっしゃるところをみると見習わなくちゃいけないなと思います。</p>
								</div>
							</div>
						</div>
					</div>

					<figure class="mb4 img">
						<img
						data-src="../../lib/img/magazine/senior-urawa/img15.png"
						data-retina="../../lib/img/magazine/senior-urawa/img15@2x.png"
						alt="（株）センチュリーライフセンチュリーハウス武蔵浦和生活サービス部 主任 田口 大陽"
						style="max-width:364px ;"
						class="u-img__max"
						>
					</figure>

					<div class="ex2">
						<div class="inner">
							<div>
								<p>それでは、続いて田口主任、よろしくお願いします。<br>
									まず、ご入居者の方と接する際に気を付けていることはなんですか？</p>
								</div>
							</div>
						</div>
						<div class="balloon mb urawa1">
							<div class="inner">
								<div>
									<p>みなさま人生の先輩ですから、それに相応しい言葉遣いや立ち振る舞いをするように気をつけています。<br>日々のコミュニケーションのなかで、親しみを込めて意識してくだけてみたりすることもありますが（笑）。</p>
								</div>
							</div>
						</div>

						<h4 class="u-ttl__m u-icon__q">ご家族とのお付き合いで大切にしていることはありますか？</h4>
						<div class="balloon mb urawa1">
							<div class="inner">
								<div>
									<img
									data-src="../../lib/img/magazine/senior-urawa/img16.png"
									data-retina="../../lib/img/magazine/senior-urawa/img16@2x.png"
									alt="image"
									align="right"
									style="max-width: 203px; margin-left:10px;"
									class="u-img__max u-only__pc"
									>
									<div>
										<p>当ホームは来訪されるご家族が多いので、そのときにご入居者の様子や変化、これからのケアプランについてなど、直接お話しさせていただいています。その際には、ご家族の要望もありますし、スタッフからお願いやご提案をすることもあります。</p>
										<p class="center">
											<img
											data-src="../../lib/img/magazine/senior-urawa/img16.png"
											data-retina="../../lib/img/magazine/senior-urawa/img16.png"
											alt="image"
											style="max-width:203px ;"
											class="u-img__max u-only__sp"
											>
										</p>
										<p>ご入居者のために、スタッフとご家族が一緒になってホームをつくっていくという思いを持って、より多くのコミュニケーションをとれる関係を築けるようにしています。</p>
									</div>
								</div>
							</div>
						</div>

						<h4 class="u-ttl__m u-icon__q">スタッフ教育に関して心がけていることはありますか？</h4>
						<div class="balloon mb urawa1">
							<div class="inner">
								<div>

									<img
									data-src="../../lib/img/magazine/senior-urawa/img17.png"
									data-retina="../../lib/img/magazine/senior-urawa/img17@2x.png"
									alt="image"
									align="right"
									style="max-width: 203px;"
									class="u-img__max u-only__pc"
									>
									<p class="center">
										<img
										data-src="../../lib/img/magazine/senior-urawa/img17.png"
										data-retina="../../lib/img/magazine/senior-urawa/img17@2x.png"
										alt="image"
										style="max-width: ;"
										class="u-img__max u-only__sp"
										>
									</p>
									<div>
										<p>全体の取り組みとしては、どのようにホームを運営いくかというビジョンを明確に示して、スタッフ全員で共有し、実行するようにしています。実務の部分では、ご入居者との関係と同じように、本人の意見を尊重して同じ目標に向かってがんばっています。</p>
										<p>また、介護福祉資格、専門医資格、講座・研修など、休日を利用して講座や研修を行なうのではなく、勤務時間内に学校に通ったり、実技講習に参加できるようなバックアップ体制を全社として取り組んでいます。</p>
									</div>
								</div>
							</div>
						</div>

						<h4 class="u-ttl__m u-icon__q">このお仕事をされてうれしかったことは？</h4>
						<div class="balloon mb urawa1">
							<div class="inner">
								<div>
									<img
									data-src="../../lib/img/magazine/senior-urawa/img18.png"
									data-retina="../../lib/img/magazine/senior-urawa/img18@2x.png"
									alt="image"
									align="right"
									style="max-width:203px;"
									class="u-img__max u-only__pc"
									>
									<div>
										<p>ご家族が来訪されたときに、ご入居者のお姿を見て、いきいきしていると感謝のお言葉をいただいたときです。</p>
										<p class="center">
											<img
											data-src="../../lib/img/magazine/senior-urawa/img18.png"
											data-retina="../../lib/img/magazine/senior-urawa/img18@2x.png"
											alt="image"
											style=""
											class="u-img__max u-only__sp"
											>
										</p>
										<p>ご家族のみなさまは、ご自宅との生活環境も変わりますし、ご心配されることが多いと思うのです。<br>高齢者向け住宅は、日常生活が充実していることがとても大切ですので、私たちの想いが伝わったと感じてうれしかったです。</p>
									</div>
								</div>
							</div>
						</div>
						<div class="u-terms__row mb1">
							<h4 class="u-terms__ttl">≪TOPICS≫ ご入居者インタビュー</h4>
							<div class="u-terms__inner">
								<img
								data-src="../../lib/img/magazine/senior-urawa/img19.png"
								data-retina="../../lib/img/magazine/senior-urawa/img19@2x.png"
								alt="image"
								align="right"
								style="max-width:165px ;  margin-left:10px;"
								class="u-img__max u-only__pc"
								>
								<p class="center">
									<img
									data-src="../../lib/img/magazine/senior-urawa/img19.png"
									data-retina="../../lib/img/magazine/senior-urawa/img19@2x.png"
									alt="image"
									style=""
									class="u-img__max u-only__sp"
									>
								</p>
								<div>
									<p>最初は戸惑いもありましたが、スタッフのみなさんが親身になって接していただいて、今はとても居心地がいいですよ。</p>

									<p>施設が新しいので、お部屋もきれいだし見晴らしもいいし、なんと言ってもお風呂がいいですね。<br>広いし一人でゆっくり入れます。<br>入居したときは、要介護5で車椅子がないと移動できなかったのですが、今では支援2レベルまで回復して、リハビリとして、施設の廊下を歩いています。<br>もう少ししたら武蔵浦和駅まで歩こうと思っています。</p>

									<p>自宅での生活に戻りたいですが、ここでの生活も毎日楽しく充実しているので、帰ろうかどうか迷ってしまいます（笑）。</p>
								</div>
							</div>
						</div>

						<div class="img section mb4">
							<img
							data-src="../../lib/img/magazine/senior-urawa/img20.png"
							data-retina="../../lib/img/magazine/senior-urawa/img20@2x.png"
							alt="取材中、介護スタッフやご入居者と出会うとみなさま笑顔で「こんにちは」と声をかけてくれました。スタッフとご入居者が一緒になってハウスを楽しい施設にしたいという想いから生まれた環境なのだと実感しました。"
							style="max-width: 602px;"
							class="u-img__max"
							>
						</div>
						<section class="main__item">
							<p class="center" style="padding-top: 24px;">
								<a class="op" href="<?php echo $base_url ?>/gift/article/nursing.php">
									<img
									data-src="../../lib/img/magazine/senior-nippori/img-gift.png"
									data-retina="../../lib/img/magazine/senior-nippori/img-gift@2x.png"
									alt="会員さま限定特典"
									style="max-width:720px; ;"
									class="u-img__max u-only__pc center"
									>
									<img
									data-src="../../lib/img/magazine/senior-nippori/img-gift-sp.png"
									data-retina="../../lib/img/magazine/senior-nippori/img-gift-sp@2x.png"
									alt="会員さま限定特典"
									style=""
									class="u-img__max u-only__sp center"
									>
								</a>
							</p>
						</section>

						<nav class="u-pager">
							<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="senior-nippori.php" class="u-pager__link"><span class="u-pager__text">実際の有料老人ホームをご紹介！【日暮里篇】</span></a></h6></div>
							<ul class="u-pager__row">
								<li class="u-pager__item"><a href="senior-service.php">1</a></li>
								<li class="u-pager__item"><a href="senior-urawa.php">2</a></li>
								<li class="u-pager__item active"><a href="senior-urawa2.php">3</a></li>
								<li class="u-pager__item"><a href="senior-nippori.php">4</a></li>
								<li class="u-pager__item"><a href="senior-nippori2.php">5</a></li>
								<li class="u-pager_nextwrap"><a href="senior-nippori.php" class="u-pager_next">　</a></li>
							</ul>
						</nav>
					</section>
				</article>
			</main>

			<?php
			$toindex_url = "/magazine/index_technology.php";
			include ($inc_path."/lib/inc/toindex__magazin.php");
			?>
			<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
			<?php  include ($inc_path."/lib/inc/footer.php"); ?>
			<?php  include ($inc_path."/lib/inc/foot.php"); ?>
