<?php
//base
include ("../../function.php");
$content = get_id_data('4064');
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
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>
		<div class="main__wrapper">

			<section class="main__item">
				<h2>
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/main-v.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/main-v@2x.jpg"
						alt="PGAゴルフデビュープログラム 参加者の体験レポート"
						class="u-img__max u-only__pc">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/main-v-sp.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/main-v-sp@2x.jpg"
						alt="PGAゴルフデビュープログラム 参加者の体験レポート"
						class="u-img__max u-only__sp">
				</h2>

			<p>ゴルフのはじめてを応援するイベント「PGAゴルフデビュープログラム」に、会員さまを無料ご招待いたしました。<br>今回は、見事当選された関東在住「Kさま」の体験レポートをご紹介します。</p>

			<div class="u-list__dl_table mb4 mb2_sp">
				<dl>
					<dt>[開催場所]</dt>
					<dd>
						<ul class="u-list__ul_num">
							<li>ゴルフ場レッスン：加藤農園ゴルフリンクス</li>
							<li>コースレッスン：東我孫子カントリークラブ</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>[参加日]</dt>
					<dd>
						<ul class="u-list__ul_num">
							<li>第1回：2018年10月26日（金）<br>第2回：2018年11月2日（金）<br>第3回：2018年11月9日（金）<br>第4回：2018年11月16日（金）<br>第5回：2018年11月30日（金）</li>
							<li>2018年12月7日（金）</li>
						</ul>
						<p>※参加日は希望の日を選択できました</p>
					</dd>
				</dl>
			</div>
			<h3 class="u-ttl__l first-of-type mt0">ブランシエラクラブ会員「Kさま」の体験レポート</h3>
			<div class="mb5">
				<div class="pink-wall">
					<div class="pink-wall__row">
						<div class="pink-wall__top">
							<div class="pink-wall__bottom">
								<div class="pink-wall__cnt">
									<h4 class="mb5 mb2_sp mt2_sp">
										<img
										data-src="<?php echo $img_url ?>/event/report-golf-debut/sec02__ttl.png"
										data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec02__ttl@2x.png"
										style="max-width:525px;"
										alt="まさかの当選！ハッピーでリッチなプレゼントで毎日の生活が楽しく過ごせています"
										class="u-img__max">
									</h4>

									<p class="mb5 mb2_sp">主婦業＆ママ業で、すっかり自分のことは二の次だった私。<br>子供の成長によって自分の時間が少し持てるようになったし、最近は、何かストレス発散できる趣味でも見つけたいと思っていました。<br>そんな中、『ブランシエラクラブ』のメルマガで『PGAゴルフデビュープログラム ご招待』という参加募集を目にしました。<br>周りの女性もゴルフをやっている人が増えて、なんだか楽しそうで気になり始めていたので応募したところ、幸運にも当選！</p>

									<div class="u-clearfix">

										<figure class="u-float__right">
											<img
											data-src="<?php echo $img_url ?>/event/report-golf-debut/sec01__img01.png"
											data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec01__img01@2x.png"
											style="max-width:215px;"
											alt="６回で本当にゴルフボールを打てるようになるの？しかもコースデビューもするって大丈夫かなぁ・・・？"
											class="u-img__max"></figure>

										<h5 class="u-ttl__s pink-wall__ttl">全6回のプログラム（コースレッスンつき）</h5>
										<p>６回で本当にゴルフボールを打てるようになるの？<br>しかもコースデビューもするって大丈夫かなぁ・・・？</p>


									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>

				<div class="u-assist">
					<div class="u-float__left u-position__center">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/kanemoto_pro.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/kanemoto_pro@2x.jpg"
						style="max-width:200px;"
						alt="PGA（公益社団法人日本プロゴルフ協会）所属 NSCA認定パーソナルトレーナー 金本 圭史プロ"
						class="u-img__max">
					</div>
					<h6 style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">教えてくれたのはこの方！</h6>
					<p class="font-palt">PGA（公益社団法人日本プロゴルフ協会）所属<br>NSCA認定パーソナルトレーナー</p>
					<h5>金本 圭史プロ</h5>
					<h6 class="u-ttl__s">豊富な授業数だから自分に合わせて受けられる</h6>
					<p>複数のレッスンプロと、朝10時から夜10時頃までみっちり詰まった沢山の授業があるゴルフ場レッスン。デビューレッスンも多様なニーズに対応できる時間割になっており、自分の都合に合った日程を組めたので、主婦ママの私も最後まで続けられました。<br>今回、私がお世話になったのは金本プロでした。<br>「打ち方は基本、同じ。それを覚えれば難しくないよ。ボールが飛ぶと楽しいよ。」と、爽やかな笑顔で緊張をほぐしてくれる、会話上手な金本プロのメンタルフォローのおかげで、終始楽しくレッスンを受けられました。</p>
				</div>
				<h4 class="mb2">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__ttl.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__ttl@2x.png"
						style="max-width:740px;"
						alt="さあ、ゴルフライフが始まる！"
						class="u-img__max u-only__pc">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__ttl-sp.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__ttl-sp@2x.png"
						style="max-width:740px;"
						alt="さあ、ゴルフライフが始まる！"
						class="u-img__max u-only__sp">
				</h4>

				<figure class="mb2">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__katonouen.jpg"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__katonouen@2x.jpg"
						style="max-width:740px;"
						alt="加藤農園ゴルフリンクス"
						class="u-img__max">
				</figure>

				<div class="u-assist">
					<div class="flex between">
						<figure class="center mb2_sp w20 self-center">
							<img data-src="<?php echo $img_url ?>/event/report-golf-debut/logo-1.png"
								style="max-width:75px;" class="u-img__max">
						</figure>

						<div class="w80">
							<h5 class="u-ttl__s">加藤農園ゴルフリンクス</h5>
							<div>
								<p>大田区蒲田で50年以上続くゴルフ練習場です。 現在は屋外練習場、インドアゴルフスクール、カフェ＆レストランの３店舗を運営しています。<br>最初の予約の電話の際から、未経験の私も安心できるよう優しく丁寧に話してくださいました。</p>
							</div>
						</div>
					</div>
				</div>

				<div class="u-float__right w33 u-only__pc">
					<figure class="mb2">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__img01.png"
							data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__img01@2x.png"
							style="max-width:257px;"
							alt="加藤農園ゴルフリンクスにて金本プロの指導を受けるKさま"
							class="u-img__max">
					</figure>
					<div>
						<a href="https://www.youtube.com/watch?v=A-V4NmPP6r0" class="mfp-btn__video">
							<img
								data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__img02.png"
								data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__img02@2x.png"
								style="max-width:257px;"
								alt="加藤農園ゴルフリンクスにて金本プロの指導を受けるKさま"
								class="u-img__max">
						</a>
					</div>
				</div>
				<div class="w65">
					<div class="green-wall mb2">
						<div class="green-wall__row">
							<div class="green-wall__cnt">
								<div class="green-wall__line_yoko">
									<div class="green-wall__line_tate">
										<div class="green-wall__ex">
											<p>構え、スイング、アプローチ！<br>ゴルフについて習った後は実践、実践。<br>ここですでに、経験値ゼロからプロに教わる利点を実感しました。<br>持ったことはあっても、きちんと握ったことはなかったゴルフクラブ。<br>正しい握り方やボールに対してのポジションを習い、常に一人ずつ丁寧にチェックしてくださるので、初打から空振りなくボールに当てることができました。</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<figure class="u-only__pc">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__img03.png"
							data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__img03@2x.png"
							style="max-width:487px;"
							alt="加藤農園ゴルフリンクスにて金本プロの指導を受けるKさま"
							class="u-img__max">
					</figure>
					<div class="flex sp-flex u-only__sp mb2_sp">
						<div class="sp-w50 u-only__sp">
							<img
							data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__img03_sp.png"
							data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__img03_sp@2x.png"
							style="max-width:487px;"
							alt="加藤農園ゴルフリンクスにて金本プロの指導を受けるKさま"
							class="u-img__max">
						</div>
						<div class="sp-w50 u-only__sp">
							<div>
								<a href="https://www.youtube.com/watch?v=A-V4NmPP6r0" class="mfp-btn__video">
									<img
										data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__img02.png"
										data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__img02@2x.png"
										style="max-width:257px;"
										alt="加藤農園ゴルフリンクスにて金本プロの指導を受けるKさま"
										class="u-img__max">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex between mb4">
					<div class="self-center w25 u-only__pc">
						<figure>
							<img
								data-src="<?php echo $img_url ?>/event/report-golf-debut/sec03__img04.png"
								data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec03__img04@2x.png"
								style="max-width:200px;"
								alt=""
								class="u-img__max">
						</figure>
					</div>
					<div class="green-wall w75">
						<div class="green-wall__row">
							<div class="green-wall__cnt">
								<div class="green-wall__line_yoko">
									<div class="green-wall__line_tate">
										<div class="green-wall__ex">
											<p>そして、おかしな癖がつく前にプロが正しく修正してくださるので、『もうその握り方しかできない自分』になれたのは、プロに習って始める最大のメリットだったと思います。<br>レッスン1回目～5回目まで、メニューに沿ってクラブの種類が増え、スイングが大きくなり、アプローチや、狙いをつけて打席に入って素早く打つ練習など、自然とこなせるレッスンメニューは、上達の壁にぶつからず進むので飽きません。<br>『打ち方は同じ』ですが、同じことを習っているようで、実はアップデートしている指導内容なので、楽しいままどんどん上手くなっていきます。教わった内容は自然と身についているから、今でも体が覚えています。</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h4 class="mb2">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__ttl.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__ttl@2x.png"
						style="max-width:740px;"
						alt="いよいよ、コースレッスン！"
						class="u-img__max u-only__pc">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__ttl-sp.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__ttl-sp@2x.png"
						style="max-width:740px;"
						alt="いよいよ、コースレッスン！"
						class="u-img__max u-only__sp">
				</h4>

				<div class="image-bg mb3">
					<div class="image-bg__row">
						<div class="image-bg__cnt">
							<div class="u-float__right u-only__pc w35">
								<figure class="u-only__pc">
									<img
									data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__img01.png"
									data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__img01@2x.png"
									style="max-width:250px;"
									alt="コースレッスンを受けるKさま"
									class="u-img__max">
								</figure>
							</div>
							<div class="fairway-wall w70 mb5">
								<div class="fairway-wall__row">
									<div class="fairway-wall__cnt">
										<div class="fairway-wall__ex">
											<p>初めて足を踏み入れた芝生の楽園は、広くて静か。<br>もうそこに立っただけで「あー！こんな世界観だったのか！ゴルフ最高！応募してよかったー！」と、ブランシエラクラブに改めて感謝した瞬間でした。<br>練習場では学べない、コースならではの数多くのシーンも、プロに指導をいただきながら回るので安心でした。</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex sp-flex between">
							<div class="w33 sp-w50">
								<figure>
									<img
									data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__img02.png"
									data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__img02@2x.png"
									style="max-width:250px;"
									alt="コースレッスンを受けるKさま"
									class="u-img__max">
								</figure>
							</div>
							<div class="w33 sp-w50">
								<figure class="upimg">
									<img
									data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__img03.png"
									data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__img03@2x.png"
									style="max-width:250px;"
									alt="コースレッスンを受けるKさま"
									class="u-img__max">
								</figure>
							</div>
							<div class="w33 u-only__pc">
								<figure class="u-only__pc">
									<img
									data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__img04.png"
									data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__img04@2x.png"
									style="max-width:250px;"
									alt="コースレッスンを受けるKさま"
									class="u-img__max">
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div class="flex between mb3">
					<figure class="w30 u-only__pc">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec04__img05.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec04__img05@2x.png"
						style="max-width:200px;"
						alt=""
						class="u-img__max">
					</figure>
					<div class="green-wall w70">
						<div class="green-wall__row">
							<div class="green-wall__cnt">
								<div class="green-wall__line_yoko">
									<div class="green-wall__line_tate">
										<div class="green-wall__ex">
											<p>どんなシーンも「同じ打ち方」になるようにする術を習えるのは、プロ同伴の醍醐味。<br>なんてリッチなレッスン内容なのでしょう。<br>基本はもちろんのこと、ちょっとしたマナーも教えてくださり、初心者でもスマートに動けるよう、ご指導いただきました。</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h4 class="mb2">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec05__ttl.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec05__ttl@2x.png"
						style="max-width:740px;"
						alt="全日程を終了して"
						class="u-img__max u-only__pc">
					<img
						data-src="<?php echo $img_url ?>/event/report-golf-debut/sec05__ttl-sp.png"
						data-retina="<?php echo $img_url ?>/event/report-golf-debut/sec05__ttl-sp@2x.png"
						style="max-width:740px;"
						alt="全日程を終了して"
						class="u-img__max u-only__sp">
				</h4>
				<div class="ending">
					<div class="ending__row">
						<div class="yellow-wall">
							<div class="yellow-wall__row">
								<div class="yellow-wall__cnt">
									<div class="yellow-wall__line_yoko">
										<div class="yellow-wall__line_tate">
											<div class="yellow-wall__ex">
												<p>日々の生活にないブンッと手を振る動き。クラブがボールに当たった時のカラッとした音と感触。<br>そして、遠くに飛んでいくボールを見ると、ストレスも鬱憤も一緒に飛んで行ってしまうくらい爽快。<br>全身を使うのに疲れない、むしろコリもほぐれて日常にいい影響しかないゴルフ体験でした。<br>これからも、自主練習やPGAのレッスンを続けて、ゴルフ友達ができるといいなと思います。</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="u-assist" style="line-height:2;">
					<span class="u-font__bold">Kさま、体験レポートありがとうございました。楽しんでいただけて何よりです。<br>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</span>
				</div>
			</section>


	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
