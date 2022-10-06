<?php
//base
include ("../../function.php");
$content = get_id_data('11009');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">

			<section class="main__item">
				<h2 class="u-ttl__l">ペットに関するアンケートより</h2>
				<div class="u-assist_enq_low" style="wdith:100%">
					回答期間　：　2017年10月3日（火）～2017年10月12日（木）<br>
					回答者数　：　計680名
				</div>

				<div class="main-v">
					<h2>
						<img
						data-src="../../lib/img/enquete/report04/main-vis.png"
						data-retina="../../lib/img/enquete/report04/main-vis@2x.png"
						alt="みんなのペット事情"
						class="u-img__max u-only__pc">
						<img
						data-src="../../lib/img/enquete/report04/main-vis__sp.png"
						data-retina="../../lib/img/enquete/report04/main-vis__sp@2x.png"
						alt="みんなのペット事情"
						class="u-img__max u-only__sp">
					</h2>
					<div class="main-v__assist top_cnt">
						<img
						data-src="../../lib/img/enquete/report04/main-vis_sub.png"
						data-retina="../../lib/img/enquete/report04/main-vis_sub@2x.png"
						alt="ペットと一緒に 暮らしたことがある人、 暮らしている人が50%超え"
						class="u-img__max u-only__pc">
						<img
						data-src="../../lib/img/enquete/report04/main-vis_sub__sp.png"
						data-retina="../../lib/img/enquete/report04/main-vis_sub__sp@2x.png"
						alt="ペットと一緒に 暮らしたことがある人、 暮らしている人が50%超え"
						class="u-img__max u-only__sp">
						<p>街を歩いていると、いろいろな場所でペット連れの人を見かけますよね。カフェなどの飲食店でもペットOKなお店が目に付くようになりました。そこで、今回はブランシエラクラブ会員さまの「ペット事情」についてアンケートを実施いたしました！
							<br>ペットと暮らしたことがある人は、全体の半数超え！2人に1人が過去にペットを飼ったことがある・または現在飼っているという結果でした。
						</p>
					</div>
				</div>

			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report04/obi_1.png"
					data-retina="../../lib/img/enquete/report04/obi_1@2x.png"
					alt="会員のみなさまは、犬派？猫派？"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report04/obi_1__sp.png"
					data-retina="../../lib/img/enquete/report04/obi_1__sp@2x.png"
					alt="会員のみなさまは、犬派？猫派？"
					style="max-width:294px;"
					class="u-only__sp u-position__center"
					>
				</h2>
				<p class="u-position__center">犬派か猫派ってよく話題になりますよね。<br>ブランシエラクラブの会員さまはどちらが多いのでしょうか？</p>
				<figure class="u-position__center mb2">
					<img
					data-src="../../lib/img/enquete/report04/q01_dog_cat_graph.png"
					data-retina="../../lib/img/enquete/report04/q01_dog_cat_graph@2x.png"
					alt="犬派：66％ / 猫派：34%"
					style="max-width:570px;"
					class="u-img__max">
				</figure>
				<p>今回は、『犬・猫のどちらを飼った経験があるか』と調査したところ、66％の人が「犬」を飼ったことがあるということがわかりました！ブランシエラクラブの会員さまは、犬派の方が多いようですね。ちなみにGoogleで”犬””猫”と検索をすると、猫に関する検索結果の方が、犬の2倍以上あるそうです。
				</p>
			</section>

			<section class="main__item">

				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report04/obi_2.png"
					data-retina="../../lib/img/enquete/report04/obi_2@2x.png"
					alt="こんなペット飼ったことある！？みなさまの珍しいペットをご紹介！"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report04/obi_2__sp.png"
					data-retina="../../lib/img/enquete/report04/obi_2__sp@2x.png"
					alt="こんなペット飼ったことある！？みなさまの珍しいペットをご紹介！"
					style="max-width:294px;"
					class="u-only__sp u-position__center"
					>
				</h2>

				<div class="u-column__2" style="max-width:700px;margin:0 auto;">

					<figure class="u-column__item center">
						<img
						data-src="../../lib/img/enquete/report04/q02_uma.png"
						data-retina="../../lib/img/enquete/report04/q02_uma@2x.png"
						alt="“馬”飼ったことがあります！"
						style="max-width:296px;"
						class="u-img__max">
						<figcaption class="enq-serif q02_comment">牧場で飼っていたのでしょうか？<br>まさかお家で…ではないですよね！？</figcaption>
					</figure>
					<figure class="u-column__item center">
						<img
						data-src="../../lib/img/enquete/report04/q02_snail.png"
						data-retina="../../lib/img/enquete/report04/q02_snail@2x.png"
						alt="“かたつむり”飼ったことがあります！"
						style="max-width:296px;"
						class="u-img__max">
						<figcaption class="enq-serif q02_comment">子どもの頃よく見かけましたが…<br>飼うとは珍しいですね！</figcaption>

					</figure>
					<figure class="u-column__item center">
						<img
						data-src="../../lib/img/enquete/report04/q02_tokage.png"
						datar-retina="../../lib/img/enquete/report04/q02_tokage@2x.png"
						alt="“ヒョウモントカゲモドキ”飼ったことがあります！"
						style="max-width:296px;"
						class="u-img__max">
						<figcaption class="enq-serif q02_comment">かわいらしい表情が特徴ですね♪<br>あの有名女優も飼っているのだとか！？</figcaption>
					</figure>
					<figure class="u-column__item center">
						<img
						data-src="../../lib/img/enquete/report04/q02_hato.png"
						data-retina="../../lib/img/enquete/report04/q02_hato@2x.png"
						alt="“鳩”飼ったことがあります！"
						style="max-width:296px;"
						class="u-img__max">
						<figcaption class="enq-serif q02_comment">街中でよく見かけますけど、飼ってるのは珍しい！鳩って懐くのでしょうか？</figcaption>
					</figure>
				</div>

			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report04/obi_3.png"
					data-retina="../../lib/img/enquete/report04/obi_3@2x.png"
					alt="もしも夢が叶うなら…どんなペットを飼ってみたい？"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report04/obi_3__sp.png"
					data-retina="../../lib/img/enquete/report04/obi_3__sp@2x.png"
					alt="もしも夢が叶うなら…どんなペットを飼ってみたい？"
					style="max-width:294px;"
					class="u-only__sp u-position__center"
					>
				</h2>
				<figure class="center">
					<img
					data-src="../../lib/img/enquete/report04/q03_ranking.png"
					data-retina="../../lib/img/enquete/report04/q03_ranking@2x.png"
					alt="第１位：犬、第２位：猫、第３位：ウサギ"
					style="max-width:529px;"
					class="u-img__max">
				</figure>
				<p>なんとここでも「犬」が1番人気！第2位の「猫」とは倍近くの差をつける結果になりました。そして第3位にランクインをした「ウサギ」。モコモコしていてかわいらしいですよね。ウサギの鳴き声ってどうだったっけ？と思って調べたところ、ウサギには声帯がないそうです！でも、喉や鼻を鳴らしたりすることはあるそうですよ。</p>
				<div class="u-assist_enq u-assist_enq_t-padding">
					<h3 class="u-ttl__enq_s u-position__center mb3">
						<img
						data-src="../../lib/img/enquete/report04/q03_ex_ttl.png"
						data-retina="../../lib/img/enquete/report04/q03_ex_ttl@2x.png"
						alt="他にも、こんなペットも飼ってみたい！　番外編"
						style="max-width:445px;"
						class="u-img__max u-only__pc">
						<img
						data-src="../../lib/img/enquete/report04/q03_ex_ttl__sp.png"
						data-retina="../../lib/img/enquete/report04/q03_ex_ttl__sp@2x.png"
						style="max-width:300px;"
						alt="他にも、こんなペットも飼ってみたい！　番外編"
						class="u-img__max u-only__sp u-position__center mb2">
						<!-- 他にも、こんなペットも飼ってみたい！　番外編 -->
					</h3>
					<div class="u-column__4" style="max-width:700px;margin:0 auto;">
						<figure class="u-column__item mb3">
							<div class="u-position__center">
								<img
								data-src="../../lib/img/enquete/report04/q03_ex_kawauso.png"
								data-retina="../../lib/img/enquete/report04/q03_ex_kawauso@2x.png"
								alt="カワウソ"
								style="max-width:145px;"
								class="u-img__max">
							</div>
							<figcaption>つぶらな瞳と愛くるしい顔がかわいいですよね。人懐っこくて甘えん坊なイメージです。</figcaption>
						</figure>
						<figure class="u-column__item mb3">
							<div class="u-position__center">
								<img
								data-src="../../lib/img/enquete/report04/q03_ex_iruka.png"
								data-retina="../../lib/img/enquete/report04/q03_ex_iruka@2x.png"
								alt="イルカ"
								style="max-width:137px;"
								class="u-img__max">
							</div>
							<figcaption>もし夢が叶うなら！一緒に泳いだりして、仲良くなりたい!!まずは大きなプールを用意しないと…</figcaption>
						</figure>
						<figure class="u-column__item mb3">
							<div class="u-position__center">
								<img
								data-src="../../lib/img/enquete/report04/q03_ex_panda.png"
								data-retina="../../lib/img/enquete/report04/q03_ex_panda@2x.png"
								alt="パンダ"
								style="max-width:137px;"
								class="u-img__max">
							</div>
							<figcaption>こちらも憧れの動物のひとつ！あの何とも言えないゆる～い雰囲気は、一緒に暮らしたら毎日癒されそうですね。</figcaption>
						</figure>
						<figure class="u-column__item mb3">
							<div class="u-position__center">
								<img
								data-src="../../lib/img/enquete/report04/q03_ex_ai.png"
								data-retina="../../lib/img/enquete/report04/q03_ex_ai@2x.png"
								alt="AIペット"
								style="max-width:137px;"
								class="u-img__max">
							</div>
							<figcaption>思わず二度見してしまう回答でしたが、ペットもいよいよロボット化！AIなら会話もできそうですね。</figcaption>
						</figure>
					</div>
				</div>
			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report04/obi_4.png"
					data-retina="../../lib/img/enquete/report04/obi_4@2x.png"
					alt="ブランシエラクラブペットの名前ランキング"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report04/obi_4__sp.png"
					data-retina="../../lib/img/enquete/report04/obi_4__sp@2x.png"
					alt="ブランシエラクラブペットの名前ランキング"
					style="max-width:294px;"
					class="u-only__sp u-position__center"
					>
					<!-- <span class="u-ttl__enq_sub">ブランシエラクラブ</span>ペットの名前ランキング -->
				</h2>
				<figure class="u-float__left u-position__center mb3 main__img_right">
					<img
					data-src="../../lib/img/enquete/report04/pet_name.png"
					data-retina="../../lib/img/enquete/report04/pet_name@2x.png"
					alt="第１位：コロ、第２位：ピーちゃん・モモ・ジョン"
					style="max-width:338px;"
					class="u-img__max">
				</figure>
				<p class="u-clearfix">ニュースなどでも目にする「名前ランキング」を、ブランシエラクラブ版として調査しました。第1位は「コロちゃん」。丸っとしたイメージからの命名が多そうですね。そして第2位は「ピーちゃん」、「モモ」、「ジョン」の3つが同着でランクインしました。</p>
				<div class="u-assist_enq u-assist_enq_t-padding">
					<h3 class="u-ttl__enq_s u-position__center mb3">
						<img
						data-src="../../lib/img/enquete/report04/pet_name_ex_ttl.png"
						data-retina="../../lib/img/enquete/report04/pet_name_ex_ttl@2x.png"
						alt="他にも、こ～んな名前も！"
						style="max-width:217px;"
						class="u-img__max">
					</h3>
					<ul class="u-column__3">
						<li class="u-column__item">
							<h4>６代目(猫)</h4>
							<p style="font-feature-settings : 'palt';">名前から想像すると、何だかドッシリとした風格がありそうなイメージですね。思わず、「6代目、今日のご飯です...」と敬語になってしまいそうです！</p>
						</li>
						<li class="u-column__item">
							<h4>侍(クサガメ)</h4>
							<p style="font-feature-settings : 'palt';">こちらも強そうなイメージ！俊敏な動きをしそうなイメージですが、「亀」に付けた名前だそうです。凛々しい顔つきが、侍みたいな亀なのでしょうね！</p>
						</li>
						<li class="u-column__item">
							<h4>おやじくん(チンチラ)</h4>
							<p style="font-feature-settings : 'palt';">名前から察するにきっと人間味にあふれた動作や表情なのでしょうね！「チンチラ」の名前とのことですが、猫とネズミどちらでしょうか？</p>
						</li>
					</ul>
				</div>
			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report04/obi_5.png"
					data-retina="../../lib/img/enquete/report04/obi_5@2x.png"
					alt="ペットと一緒に暮らしたい！でも…ちょっと気になることありませんか？"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report04/obi_5__sp.png"
					data-retina="../../lib/img/enquete/report04/obi_5__sp@2x.png"
					alt="ペットと一緒に暮らしたい！でも…ちょっと気になることありませんか？"
					style="max-width:294px"
					class="u-only__sp  u-position__center"
					>
				</h2>

				<p class="u-position__center">ペットは飼いたいけれど、ニオイや周囲への配慮など、気になることってありますよね。<br>みなさまはどのようなことが気になるのか、調査しました。</p>

				<figure class="center">
					<img
					data-src="../../lib/img/enquete/report04/q04_main-vis.png"
					data-retina="../../lib/img/enquete/report04/q04_main-vis@2x.png"
					alt="ニオイ：68.8%、鳴き声：58.4%、床や家具のキズ：53.8%、抜け毛：62.9%、トイレの始末：54.0%"
					style="max-width:692px;"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/enquete/report04/q04_main-vis__sp.png"
					data-retina="../../lib/img/enquete/report04/q04_main-vis__sp@2x.png"
					alt="ニオイ：68.8%、鳴き声：58.4%、床や家具のキズ：53.8%、抜け毛：62.9%、トイレの始末：54.0%"
					style="max-width:293px;"
					class="u-img__max u-only__sp  u-position__center">
				</figure>

				<p>最も多かったのが「ニオイ」、続いて「抜け毛」についても60％以上の人が”気になる”と答えました。クロスや天井に使われている材料の中には、ペットのニオイを吸収・分解するものや、キズがつきにくいものもあります。</p>

				<p>また、他のご意見として、「飼っているペットが人にケガをさせてしまったらどうしよう」という懸念をお持ちの方もいらっしゃいました。先日メディアでもそのような事件が報道されていましたね。実はペットが人にケガをさせたときでも、飼い主が加入する自動車保険や火災保険の個人賠償責任特約で補償対象になるのだとか。<br>ペットのことでお困りの方は、ぜひご検討ください。</p>

			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report04/obi_6.png"
					data-retina="../../lib/img/enquete/report04/obi_6@2x.png"
					alt="ブランシエラクラブ ペット自慢エピソード うちのペットは天才だ！"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report04/obi_6__sp.png"
					data-retina="../../lib/img/enquete/report04/obi_6__sp@2x.png"
					alt="ブランシエラクラブ ペット自慢エピソード うちのペットは天才だ！"
					style="max-width:294px;"
					class="u-only__sp  u-position__center"
					>
				</h2>
				<div class="u-assist_etc">
					<div class="u-assist_etc__row">
						<div class="q05_epi">
							<h4 class="u-position__center q05_epi_ttl">
								<img
								data-src="../../lib/img/enquete/report04/q05_ep1.png"
								data-retina="../../lib/img/enquete/report04/q05_ep1@2x.png"
								alt="EPISODE1"
								style="min-width:81px; max-width:81px;"
								class="u-img__max">
							</h4>
							<div class="q05_epi_txt">
								<p>夫がてんぷら鍋を火にかけて側を離れたときに、加熱で火事になりかけたが猫が必死に鳴いて知らせてきた。</p>
								<p class="enq-serif q05_epi_comment">家族の危険を察知してくれるなんて！頼もしい猫ちゃんですね。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="u-assist_etc">
					<div class="u-assist_etc__row">
						<div class="q05_epi">
							<h4 class="u-position__center q05_epi_ttl">
								<img
								data-src="../../lib/img/enquete/report04/q05_ep2.png"
								data-retina="../../lib/img/enquete/report04/q05_ep1@2x.png"
								alt="EPISODE2"
								style="min-width:82px; max-width:82px;"
								class="u-img__max">
							</h4>
							<div class="q05_epi_txt">
								<p>我が家のマー坊（猫：♀）は、生まれて半年もたたない頃、自分で部屋のドアを開けて出入りしていました！人間がドアノブを使って扉を開けるところを見て覚えたのでしょう。ドアノブにとびかかった勢いで回し押し、キメ顔をしてましたよ。</p>
								<p class="enq-serif q05_epi_comment">生後半年でドアノブの機能を理解するとは、人間以上の頭脳の持ち主ですね！</p>
							</div>
						</div>
					</div>
				</div>
				<div class="u-assist_etc">
					<div class="u-assist_etc__row">
						<div class="q05_epi">
							<h4 class="u-position__center q05_epi_ttl">
								<img
								data-src="../../lib/img/enquete/report04/q05_ep3.png"
								data-retina="../../lib/img/enquete/report04/q05_ep3@2x.png"
								alt="EPISODE3"
								style="min-width:82px; max-width:82px;"
								class="u-img__max">
							</h4>
							<div class="q05_epi_txt">
								<p>人間用のツナ缶と猫用の缶詰を、缶のふたの開封音で聞き分けている。</p>
								<p class="enq-serif q05_epi_comment">素晴らしい聴覚の持ち主ですね！いろんな缶詰で試してみたくなりました。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="u-assist_etc">
					<div class="u-assist_etc__row">
						<div class="q05_epi">
							<h4 class="u-position__center q05_epi_ttl">
								<img
								data-src="../../lib/img/enquete/report04/q05_ep4.png"
								data-retina="../../lib/img/enquete/report04/q05_ep4@2x.png"
								alt="EPISODE4"
								style="min-width:82px; max-width:82px;"
								class="u-img__max">
							</h4>
							<div class="q05_epi_txt">
								<p>旅行の準備で、スーツケースを出すと、少し離れた所で、チラーっとこちらを見てから、あからさまに溜め息をつく。『どうせ、置いて行く気でしょ。』</p>
								<p class="enq-serif q05_epi_comment">溜め息をついている姿を想像して、ホッコリ♪きっと置いてきぼりが寂しかったんですね。</p>
							</div>
						</div>
					</div>
				</section>

				<section class="main__item bottom_cnt">

					<h2 class="u-position__center mb3">
						<img
						data-src="../../lib/img/enquete/report04/cnt_bottom_ttl.png"
						data-retina="../../lib/img/enquete/report04/cnt_bottom_ttl@2x.png"
						alt="かわいいペットとこれからも安全に楽しく暮らしていくために長谷工グループ ペット関連サービス・商品のご紹介"
						style="max-width:545px;"
						class="u-img__max">
					</h2>
					<ul class="u-assist_blue">
						<li>
							<p>ペットのための医療保険</p>
							<a href="https://www.au-sonpo.co.jp/pc/lp/TAD_1_L.html?DRT_CD=MYS9&CLS_CD=3017693777&SCR=024" target="_blank" data-ga-click="enq-vol04-report_hoken">長谷工システムズ「ペットの保険」</a>
						</li>
						<li>
							<p>ペットと心地よく暮らすためのヒントが満載！</p>
							<a href="https://www.haseko.co.jp/hrf/reform/special/dog_cat.html" target="_blank">長谷工リフォーム「ペットと暮らす」</a>
						</li>
						<li>
							<p>ペットにもマンションにこだわりが！？</p>
							<a href="https://www.haseko-sumai.com/kurashi/archive/detail_046.html" target="_blank">長谷工アーベスト「漫画でわかるマンション購入」</a>
						</li>
					</ul>
				</section>

				<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
			</div>
		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
