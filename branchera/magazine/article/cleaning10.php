<?php
//base
include("../../function.php");
$content = get_id_data('27010');
$pageTtl = '網戸掃除を簡単に！外さずほこりをきれいに落とす掃除方法をご紹介';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '簡単にできる網戸の掃除方法をご紹介！マンションでもできる、網戸を外さないで汚れを楽に落とせる掃除の仕方を解説します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['title'];

//bodyClass
$body_class = "page-article cleaning";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

?>
<main class="main">
	<article class="main__row ">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_comic03.php", "部屋のお掃除プロ監修 三毛猫きらりのお掃除攻略ガイド");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="technic__chara u-only__pc mb3">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
		</div>
		<div class="technic__chara u-only__sp">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara-sp@2x.jpg" class="chara-btn center mfp-btn__img pt0 pb0">登場人物紹介はこちら</a>
		</div>
		<div class="main__wrapper">
			<section class="main__item mb8 mb4_sp">
				<h2 class="cleaning01__ttl u-font__palt"><?php echo $pageTtl ?></h2>
				<p class="cleaning01__desc">網戸を外さず汚れをきれいにする方法をご紹介します。</p>
				<time datetime=”2022年6月8日”>2022年6月8日</time>
				<hr class="cleaning01__line">
				<div class="cleaning_comment">
					<div class="question">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
					</div>
					<div class="balloon balloon_maxborder mb seiji">
						<div class="inner-border">
							<div>
								<p>暖かくなってきたから、窓を開けて部屋の<a href="<?php echo $base_url; ?>/magazine/article/cafe-vol05-report.php" class="recipe-design__link" data-ga-click="cleaning10_1">換気</a>をしたいんだけど、近くで見たら網戸がずいぶん汚れてるんだよね…。<br>網戸って、窓から取り外して掃除しなくちゃいけないのかな？</p>
							</div>
						</div>
					</div>
					<div class="answer">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
					</div>
					<div class="balloon balloon_maxborder-r mb kirari_r">
						<div class="inner-border_r">
							<div>
								<p>網戸は外さなくても掃除ができるニャ！<br>網戸掃除のコツは<strong>最初に<a href="<?php echo $base_url; ?>/magazine/article/cleaning05.php" class="recipe-design__link" data-ga-click="cleaning10_2">ほこり</a>を落としてから始める</strong>こと！先にほこりを落としてしまえば、後は拭いて汚れを取るだけでいいニャ<br>網戸の掃除は意外と簡単だから、定期的な掃除をおすすめするニャ！</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cleaning_contents contents">
					<div class="contents__row">
						<div class="w25 contents__ttl">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:133px;" loading="lazy">
						</div>
						<div class="w5 contents__line">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
						</div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:146px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
						</div>
						<div class="w70">
							<div class="contents__list">
								<ul>
									<li><a data-scroll href="#amido01">簡単にできる網戸掃除の6つの方法</a></li>
									<li><a data-scroll href="#amido02">網戸掃除のおすすめの季節は？</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="main__item mb8 mb4_sp">
				<h3 class="cleaning01__secttl mb3" id="amido01">簡単にできる網戸掃除の6つの方法</h3>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/cleaning10-01@2x.jpg" class="u-img__max mb1_sp" alt="網戸掃除をする女性" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">網戸は外気と接しているため、汚れがたまりやすい場所。家の外側の面には、ほこりや排気ガス、花粉や黄砂が、そして家の内側の面には、キッチンの<a href="<?php echo $base_url; ?>/magazine/article/cleaning03.php" data-ga-click="cleaning10_3">油汚れ</a>やたばこのヤニなどが付着しています。こうした汚れが原因で、網戸にカビが発生することもあるほど、網戸の汚れは不衛生です。<br>網戸が汚れていると、カーテンや窓ガラスに汚れが付きやすくなるだけでなく、呼吸器系の病気や花粉症を引き起こす可能性も高まります。</p>
						<p class="mb2">気持ちのよい風を住まいに入れるためにも、網戸掃除は必要です。とはいえ、「網戸を取り外すのは面倒くさい」「網戸を水洗いするスペースがない」と網戸掃除を後回しにしている人もいるのではないでしょうか？網戸は取り外さなくても、簡単に掃除できますよ。<br>汚れがひどくなるほどきれいになりづらくなるので、早めに掃除をすることをおすすめします。</p>
						<p class="mb2">網戸掃除のコツは、先にほこりを落とすことです。最初に水拭きをすると汚れが落ちにくいうえに、汚れが広がってしまいますから気を付けましょう。また、掃除の際に網戸がたわまないようにすることも大切です。</p>
						<p class="mb3">今回は、楽にできる網戸掃除の6つの方法をご紹介します。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">ブラシを使う方法</h4>
				<p class="level mb2">■所要時間：10分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p>ブラシを使って掃除するには、以下の道具を準備します。</p>
				<ul class="mb2 u-list__ul_dot">
					<li>洗車ブラシ（毛足のやわらかい大きめのブラシ）</li>
					<li>水の入ったバケツ</li>
					<li>雑巾2枚（水拭き用・乾拭き用）</li>
					<li>マスク</li>
				</ul>
				<p>まず、マスクをして、窓を閉めます。網戸にブラシをかけるとほこりが舞うため、部屋にほこりが入らないように窓を閉めてから掃除を始めましょう。</p>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/cleaning10-02@2x.jpg" class="u-img__max mb1_sp" alt="網戸の汚れをブラシでかき出す" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">洗車用ブラシのような毛足のやわらかい大きめのブラシで、網戸の外側の汚れをはたき落とします。溝の中のほこりもかき出すようにしてしっかり落としましょう。<br>たわしのように毛のかたいブラシの使用は、網がずれて偏る原因になるので、やわらかい毛足のブラシを使いましょう。</p>
						<p class="mb2">ほこりが落ちたら、雑巾で水拭きします。<br>網戸掃除をすると窓ガラスにほこりが付くため、網戸のほこりを落としたら、窓ガラスも水拭きをします。最初から乾拭きをすると、窓ガラスに付いた土や砂で傷を付けてしまう可能性があります。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">掃除機を使う方法</h4>
				<p class="level mb2">■所要時間：15分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p>以下の道具を準備します。</p>
				<ul class="mb2 u-list__ul_dot">
					<li>掃除機</li>
					<li>新聞紙</li>
					<li>ガムテープ</li>
				</ul>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/cleaning10-03@2x.jpg" class="u-img__max mb1_sp" alt="網戸に新聞紙を貼って掃除" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">まず、網戸の外側の面に新聞紙を広げ、ガムテープで貼ります。新聞紙で片側をふさぐ理由は、掃除機の吸引力をしっかり利用するためです。<br>そして、網戸の内側から掃除機をかけて、内側のほこりを吸い取ります。</p>
						<p class="mb2">次に、内側に新聞紙を貼り、掃除機で外側の面のほこりを吸い取れば完了です。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">ストッキング・靴下を使う方法</h4>
				<p class="level mb2">■所要時間：10分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p>準備する道具は以下の通りです。</p>
				<ul class="mb5 u-list__ul_dot">
					<li>不用になったストッキング</li>
					<li>不用になった靴下</li>
					<li>新聞紙</li>
					<li>掃除機</li>
					<li>ハサミ</li>
				</ul>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png" alt="お掃除のミカタ ストッキングと靴下を使ったスポンジの作り方" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">ストッキングと靴下を使ったスポンジの作り方</h5>
						<div class="mb3">
							<figure class="w50 center u-float__left">
								<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/cleaning10-04@2x.jpg" class="u-img__max mb1_sp" alt="ストッキングと靴下を使ったスポンジの作り方" style="max-width:320px;" loading="lazy">
							</figure>
							<div>
								<p class="mt0 u-font__palt">不用なストッキングを使ったスポンジが網戸の掃除に活躍しますよ！ストッキングは静電気が起きやすい素材です。ストッキングから静電気が発生すると、ほこりが引き寄せられてくっつきやすくなります。<br>まず、ストッキングの足の部分をハサミで切り、つま先部分に不用な靴下を詰め込みます。握りやすい大きさに丸めれば、スポンジのできあがりです！</p>
							</div>
						</div>
					</div>
				</div>
				<p class="mb2">部屋にほこりが入らないように、網戸の内側に新聞紙を貼り、ガムテープで止めます。網戸の外側からストッキングのスポンジで拭いていきます。上から下に向けて拭いていくと、ほこりがよく取れますよ。<br>次に、外側に新聞紙を貼り、内側からも同じようにストッキングスポンジで拭いて、汚れを落とします。</p>
				<p class="mb3">下に落ちたほこりは掃除機で吸い取っておきましょう。</p>
				<h4 class="cleaning01__ttl_m mb2">重曹水を使う方法</h4>
				<p class="level mb2">■所要時間：30分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p class="mb2"><a href="<?php echo $base_url; ?>/magazine/article/cafe-vol24-report.php" class="recipe-design__link" data-ga-click="cleaning10_4">大掃除</a>で念入りにきれいにしたいときは、重曹水とマイクロファイバークロスを使って、汚れをしっかり落としましょう。</p>
				<p>以下の道具を準備します。</p>
				<ul class="mb2 u-list__ul_dot">
					<li>重曹水</li>
					<li>マイクロファイバークロス 2枚</li>
					<li>雑巾 2枚</li>
					<li>掃除機</li>
					<li>新聞紙</li>
					<li>水を入れたバケツ</li>
				</ul>
				<p class="mb2">網戸の内側に新聞紙を貼り、外側から掃除機をかけてほこりを落とします。次に網戸の外側に新聞紙を貼り、内側から掃除機をかけ、ほこりを取ってから新聞紙を外します。</p>
				<p class="mb5">内側の床に別の新聞紙を敷いて養生します。重曹水を準備します。</p>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png" alt="お掃除のミカタ 重曹水の作り方" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">重曹水の作り方</h5>
						<p class="mt0 mb2">重曹を使うと、水拭きに比べて網戸をピカピカにすることができます。理由は、重曹には油汚れを落とす力や研磨作用があるためです。<br>水200mlに重曹小さじ1/2を入れ、1％濃度の重曹水を作ります。濃度が濃いと、乾いた後に重曹が白く残ってしまうため、分量に注意をしましょう。</p>
					</div>
				</div>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/10/cleaning10-05@2x.jpg" class="u-img__max mb1_sp" alt="網戸をマイクロファイバークロスで掃除" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mt0 mb2">マイクロファイバークロスを1％濃度の重曹水に浸し、よく絞ります。<br>2枚のマイクロファイバークロスで、網戸を挟むように拭きます。<br>網戸の両側から拭くことで、一方のみに力がかかってしまうのを抑え、網がたわんだり、外れてしまったりするのを防ぐことができます。</p>
						<p>マイクロファイバークロスが黒くなったら、バケツの水で洗い、再び拭いていきます。<br>汚れが落ちたら、両側を乾いた雑巾で乾拭きします。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">網戸専用スプレーを使う方法</h4>
				<p class="level mb2">■所要時間：10分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p>市販されている網戸専用スプレーを使用するのも効果的です。網戸専用スプレーは、網戸が汚れやすい環境にある場合におすすめします。<br>網戸専用スプレーを利用するときは、以下の道具を準備します。</p>
				<ul class="mb2 u-list__ul_dot">
					<li>掃除機</li>
					<li>網戸専用スプレー</li>
					<li>雑巾</li>
				</ul>
				<p>まず、掃除機で網戸の内側と外側のほこりを吸い取ります。その後、網戸の汚れが気になる部分に上から下方向にスプレーしていきます。<br>スプレーから出た泡が消えたら、水に濡らした雑巾で拭き取っていきましょう。</p>
			</section>
			<section class="main__item mb3">
				<h3 class="cleaning01__secttl mb3" id="amido02">網戸掃除のおすすめの季節は？</h3>
				<p class="mb2">網戸掃除は月に1回程度、定期的に行なうときれいな状態がキープできます。忙しくて毎月掃除できない場合は、最低、年に2回の掃除をおすすめします。<strong>時期は、花粉シーズンが過ぎた5月、そして台風シーズンが過ぎた9月～10月頃</strong>が最適でしょう。</p>
				<p class="mb2">5月に掃除するのは、夏に向けて、窓を開けて過ごすことが増えるためです。春、網戸に付着した花粉やほこりを室内に入れないように掃除しましょう。<br>また、<a href="<?php echo $base_url; ?>/magazine/article/alsok-vol82.php" class="recipe-design__link" data-ga-click="cleaning10_5">台風シーズン</a>が過ぎた頃は、雨風により網戸に詰まった汚れがまだこびりついていないため、汚れが落ちやすいのです。</p>
				<p>なお、<strong>網戸の掃除は晴れている日よりも、曇りの日に行なうのがポイント</strong>です。曇りの日のほうが晴れの日と比較して、大気中の湿度が多く、網戸の汚れも湿度を含んで落ちやすくなるのです。逆に晴れの日は網戸が乾燥しているために、汚れが落ちづらく感じるでしょう。また、網戸のほこりが飛びやすいのも、晴れの日です。網戸掃除は、多少湿気のある曇りの日を選んで行ないましょう！</p>
			</section>
			<section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png" data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png" alt="換気力をアップしてきれいな空気を取り込む！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">換気力をアップしてきれいな空気を取り込む！</h5>
						<p class="mb2">せっかく網戸をきれいにして、外のきれいな空気を窓から取り入れたとしても、部屋の換気力が落ちていたら、網戸掃除の効果も半減してしまいます。<br>部屋の換気力を上げて、さらに部屋の空気をきれいにする方法があることをご存知でしょうか？<br>それは、換気ダクトをきれいにすること！換気ダクトは、汚れた空気を排出する風の通り道です。</p>
						<p class="mb2">キッチンやトイレ、バスルームなどにありますが、残念ながら自分では掃除できない箇所です。<br>一度プロにクリーニングを任せてみてはいかがでしょう。換気ダクトを徹底的に掃除するだけで、家の中は常にきれいな空気で満たされますよ。</p>
						<div class="center">
							<p class="pr__txt">換気ダクト清掃</p>
							<a href="https://e-suteki.haseko.jp/service/ventilation-duct-cleaning.html" target="_blank" data-ga-click="cleaning10_6" class="pr__btn center">詳しくはこちら</a>
						</div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb koto">
							<div class="inner-border">
								<div>
									<p>網戸がピカピカになってる～！！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>汚れた網戸がようやくきれいになった～！<br>部屋の空気がスッキリして気持ちいいなぁ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb0 kirari">
							<div class="inner-border">
								<div>
									<p>網戸の掃除は定期的にやったほうがいいニャ！<br>ブラシでほこりを払うだけで、きれいな網戸をキープできるよ<br>それから、網戸が変形したり壊れたりしないように、優しく掃除することをおすすめするニャ！</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="main__item mb0">
			<?php
			include($inc_path . "/lib/inc/page/_magazine/__cleaning-footer.php");
			?>
		</div>
	</article>
</main>

<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
