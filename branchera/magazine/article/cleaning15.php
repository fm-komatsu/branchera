<?php
//base
include ("../../function.php");
$content = get_id_data('27015');
$pageTtl = '畳にカビが生えた！？エタノールで除去する方法と予防対策';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '畳に生えたカビの除去方法と予防方法を解説！エタノールを使ったカビの取り方と、カビの発生の対策方法をご紹介します。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cleaning";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic03.php" ,"部屋のお掃除プロ監修 三毛猫きらりのお掃除攻略ガイド");
    include ($inc_path."/lib/inc/pan.php");
    ?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/15/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/15/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">畳に生えたカビの落とし方と予防対策をご紹介します。</p>
          <time datetime=”2022年7月20日”>2022年7月20日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>蒸し暑い夏は湿気がひどくて家中がじめじめする<br>そのせいかな？気付いたら、畳にカビが生えてた！<br>ど、ど、どうしよう？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>畳にカビが生える原因は主に湿気だニャ<br><strong>畳のカビを取るには、水拭きをしたり、掃除機をかけたりせずに、消毒効果と揮発性の高いエタノールを使って掃除する</strong>といいニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:153px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:146px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#tatami01">畳にカビが生えるのはなぜ？</a></li>
										<li><a data-scroll href="#tatami02">畳のカビの掃除方法</a></li>
										<li><a data-scroll href="#tatami03">畳のカビを予防するコツ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="tatami01">畳にカビが生えるのはなぜ？</h3>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/15/cleaning15-01@2x.jpg" class="u-img__max mb1_sp" alt="畳に生えたカビ" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">じめじめした梅雨の時期には、畳に緑色のカビや白っぽいカビ、黒いカビが生えることがあります。畳にカビが生える主な原因は、湿気によるものです。湿度が60％を超えると、カビが発生し始めます。</p>
						<p class="mb2">畳の素材であるイ草には、湿気を吸収する性質があり、ある程度の湿気なら吸収してくれます。しかし、あまりに湿気が多くなると、イ草の水分が飽和状態になり、たまった湿気が原因でカビが発生してしまうのです。</p>
						<p class="mb2">また、カビの発生には気温も関係してきます。カビが生えやすい室温は20度～30度といわれており、高温多湿の梅雨の時期になるとカビが生えやすくなるのです。さらに、カビの栄養分となる汚れがあると、より畳にカビが生えやすくなります。</p>
						<p class="mb2">畳に布団やカーペットやマットを敷いている人は、特に注意が必要です。布団を敷いている場合、寝ている間の寝汗が布団を通して畳に吸収されるため、布団の下にカビが生え、ダニも発生しやすくなります。畳ベッドを使用している場合も同様です。カーペットを敷いている場合も、湿気が畳とカーペットの合間にこもり、カビが繁殖しやすくなります。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="tatami02">畳のカビの掃除方法</h3>
				<p class="level mb2">■所要時間（置き時間も含む)：30分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：気になったとき</p>
				<p class="mb2">畳のカビ掃除をする際の大事なポイントは、カビに湿気を与えないこと、そしてカビの胞子を飛び散らせないことです。水拭きをすると、カビが好む湿気をさらに与えてしまううえに、掃除機やはたきをかけると、カビの胞子が周囲に飛び散って、さらにカビを広げることになってしまいます。水拭きをしたり、掃除機やはたきをかけたりすることは避けてくださいね。</p>
				<p class="mb2">今回は、うっすら生えた緑色のカビや白っぽいカビなど、拭いたら落ちるカビの正しい掃除方法を紹介します。</p>
				<p>畳のカビ掃除には、以下の掃除道具を準備します。</p>
				<ul class="u-list__ul_dot">
					<li>マスク</li>
					<li>ゴム手袋</li>
					<li>消毒用エタノール</li>
					<li>エタノール用スプレー容器</li>
					<li>エタノールを入れるコップ</li>
					<li>使い古した歯ブラシ</li>
					<li>乾いた雑巾2枚</li>
				</ul>
				<p class="mb2">畳のカビ掃除は、なるべく天気のよい日に行なうことをおすすめします。窓を開けて、十分換気できる状態にして、少しでも部屋の空気を乾燥させるようにしましょう。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/15/cleaning15-02@2x.jpg" class="u-img__max mb1_sp" alt="エタノールを用いた掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">エタノールをスプレー容器に入れます。カビの胞子を吸い込まないようにマスクをし、エタノールで手が荒れないようにゴム手袋をはめましょう。</p>
						<p class="mb2">カビ全体にエタノールを吹き付けて、20分程度置きます。</p>
					</div>
				</div>
				<p class="mb3">時間を置くことで、エタノール成分のアルコールがカビの根元まで行き渡り、殺菌してくれます。その後、再度エタノールを吹き付け、乾いた雑巾で拭き取ります。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/15/cleaning15-03@2x.jpg" class="u-img__max mb1_sp" alt="歯ブラシを用いた掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p>畳の目に詰まったカビは、歯ブラシを使ってかき出します。強い力でカビをかき出すと畳が傷むため、優しく畳の目に沿ってカビをかき出すようにします。</p>
					</div>
				</div>
				<p class="mb2">また、一度カビをかき出すのに使用した歯ブラシにはカビが付着していますから、かき出すたびに、エタノールを入れたプラスチックのコップの中で歯ブラシをすすぐようにします。</p>
				<p class="mb2">歯ブラシをその都度すすぐことで、カビの胞子が広がることを防げます。なお、歯ブラシをすすいだエタノールは、変色したら交換するようにしてください。</p>
				<p class="mb5">全てのカビを取り終わったら、もう一度エタノールを吹き付けます。雑巾で、畳の目に沿って乾拭きをして、完了です。このとき、一度使った雑巾には胞子が付いているため、最後の乾拭きは別の雑巾を使うようにしましょう。</p>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 畳のカビにはエタノールを！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">畳のカビにはエタノールを！</h5>
						<div class="flex mb2">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/15/cleaning15-04@2x.jpg" class="u-img__max mb1_sp" alt="畳のカビにはエタノール" style="max-width:320px;" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mt0"><strong>畳に生えたカビ掃除には、エタノールが最適</strong>です。エタノールはアルコールの一種で、消毒効果が高く、揮発しやすい性質があります。揮発するため、畳に湿気を残すことがありません。</p>
							</div>
						</div>
					</div>
				</div>
				<p class="mb2">なお、重曹水や酢は、一般のカビ掃除には効果的ですが、畳のカビ掃除には不向きです。重曹水や酢は畳に染み込んでしまうため、さらにカビを増やす原因になってしまいます。</p>
				<p class="mb2">また、塩素系漂白剤やアルカリ性洗剤を使うと畳が変色する可能性があるので、おすすめできません。畳のカビ掃除には、重曹水、酢、塩素系漂白剤、アルカリ性洗剤は使用せず、エタノールを使うようにしましょう！</p>
				<p class="mb2">今回紹介した掃除方法は、緑色のカビ、白っぽいカビなどの軽度のカビ掃除に向いています。上記の方法で黒いカビを除去できなかった場合、また畳の広範囲にカビが生えている場合は、畳の張替えを検討することをおすすめします。</p>
				<p class="mb3">なお、広範囲にカビが生える場合、畳の下の床板に湿気がたまっている可能性があります。床板の材質が調湿性の低い合板だとカビが生じやすくなります。床板を湿度調整に優れた「杉板」に替えることで、カビを予防することができます。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="tatami03">畳のカビを予防するコツ</h3>
				<p class="mb3">畳のカビは、水分・栄養・湿度(60%以上)・温度（20度以上）といった、カビの発生にかかわるいずれかの条件について対策を施すことで予防できます。次に、予防対策を見ていきましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">換気を行なう</h4>
				<p class="mb2">畳の部屋に湿気や熱がこもらないように、天気のよい日は窓を開ける習慣を付けましょう。換気をよくすることで、部屋の湿度を下げることができるうえに、室内に浮遊するカビの胞子を多少なりとも追い出すことができます。</p>
				<p class="mb3">窓が開けられない雨の日や梅雨の時期は、除湿器や<a href="<?php echo $base_url?>/magazine/article/cleaning08.php" data-ga-click="cleaning15_1">エアコン</a>で除湿して、湿気を除去するようにしましょう。また、イ草素材の寝ござをマットとして使用している人は、日に当てて、よく乾かし、湿気を取るようにしてくださいね。</p>
				<h4 class="cleaning01__ttl_m mb2">湿度を上げない</h4>
				<p class="mb2">畳に布団を敷きっ放しにしないことが大切です。布団に吸収された寝汗が原因でカビが生えることが多いので、こまめに布団を上げて、畳の湿気を取るようにします。</p>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/15/cleaning15-05@2x.jpg" class="u-img__max mb1_sp" alt="湿気防止シート" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">また、畳にカーペットやマットを敷くと、湿気がこもって、カビが繁殖しやすくなります。カーペットを敷く場合は、畳とカーペットの間に湿気防止シートを敷くことをおすすめします。</p>
						<p class="mb2">除湿シートが湿気を吸い取ってくれるため、畳の湿気を抑えることができます。</p>
						<p class="mb2">畳の上にウッドカーペットを敷き、和室を洋室風にする場合も注意しましょう。畳にカビが生えやすくなるため、時折ウッドカーペットを取って除湿し、通気性をよくするようにしてください。</p>
						<p class="mb3">なお、室内の湿度を上げないために、<a href="<?php echo $base_url?>/magazine/article/cleaning02.php" data-ga-click="cleaning15_2">加湿器</a>の利用や洗濯物の室内干しは、畳の部屋では控えましょう。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">掃除をする</h4>
				<p class="mb2">カビの栄養となるのは、<a href="<?php echo $base_url?>/magazine/article/cleaning05.php" data-ga-click="cleaning15_3">ほこり</a>や皮脂汚れです。畳をこまめに掃除して、カビの栄養となる汚れを取り除けば、カビの発生を防止できます。</p>
				<p class="mb2">畳に掃除機をかけるときは、畳の目に沿ってかけるようにしましょう。また、水やジュースなどの液体をこぼした場合は、すぐ拭いてから、ドライヤーで乾かします。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>畳のカビがスッキリ取れた！<br>きれいになってよかった～</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>わーい！これで、安心してゴロゴロできる～♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb0 kirari">
							<div class="inner-border">
								<div>
									<p>畳のカビをきれいに落としたら、これからはカビの予防を心がけよう！<br>それには、普段からよく換気することが大切だニャ<br>それから、ほこりをためないように、こまめに掃除することを忘れないでニャ！</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
    </div>
    <div class="main__item mb0">
			<?php
				include ($inc_path."/lib/inc/page/_magazine/__cleaning-footer.php");
			?>
		</div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
