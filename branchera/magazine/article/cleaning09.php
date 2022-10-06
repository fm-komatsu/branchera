<?php
//base
include("../../function.php");
$content = get_id_data('27009');
$pageTtl = '室外機の掃除は必要？自分でできる掃除の仕方をご紹介';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '自分でできるエアコンの室外機の掃除方法をご紹介！外カバー・熱交換機・ドレンホースなど部位ごとの掃除の仕方を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
				<p class="cleaning01__desc">エアコンの室外機を自分で掃除する方法をご紹介します。</p>
				<time datetime=”2022年5月25日”>2022年5月25日</time>
				<hr class="cleaning01__line">
				<div class="cleaning_comment">
					<div class="question">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
					</div>
					<div class="balloon balloon_maxborder mb hikari03">
						<div class="inner-border">
							<div>
								<p>エアコンの室内機は掃除したけど、そういえば室外機の掃除はしたことないなぁ…<br>室外機って、掃除が必要なのかな？</p>
							</div>
						</div>
					</div>
					<div class="answer">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
					</div>
					<div class="balloon balloon_maxborder-r mb0 kirari_r">
						<div class="inner-border_r">
							<div>
								<p>室外機を掃除しないとクーラーや暖房の効果が弱まるニャ<br><strong>外側は濡れ雑巾で拭き、吹き出しグリルの汚れは掃除機やほうきで落とす</strong>といいニャ<br>それから、ドレンホース（排水ホース）の中のごみをかき出すことも忘れずに！</p>
							</div>
						</div>
					</div>
					<div class="mb3">
					  <p>■注意<br>エアコンは室内機、室外機をセットで使用するものです。エアコン内の配管には冷媒ガスが循環しており、室内機・室外機を少しでも動かすことで、ガス漏れの原因になり、非常に危険です。たとえ、エアコンをオフにしていたとしても、絶対に動かさないようにご注意ください。</p>
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
									<li><a data-scroll href="#shitsugaiki01">室外機の掃除はなぜ必要？</a></li>
									<li><a data-scroll href="#shitsugaiki02">室外機の掃除の仕方</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="main__item mb8 mb4_sp">
				<h3 class="cleaning01__secttl mb3" id="shitsugaiki01">室外機の掃除はなぜ必要？</h3>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/cleaning09-01@2x.jpg" class="u-img__max mb1_sp" alt="室外機" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2"><a href="<?php echo $base_url; ?>/magazine/article/cafe-vol10-report.php" data-ga-click="cleaning09_1">エアコン</a>の<a href="<?php echo $base_url; ?>/magazine/article/cleaning08.php" data-ga-click="cleaning09_2">室内機</a>は掃除するけれど、室外機の掃除は不要だと思っている人は、案外多いのではないでしょうか？<br>室外機は雨や砂ぼこりを受けるため、汚れやすく、目詰まりしやすい傾向にあります。特にマンションや賃貸アパート、戸建てのベランダに置かれた室外機は、閉鎖空間にあるため汚れがたまりがちです。</p>
						<p class="mb2">汚れた室外機をそのまま放っておくと、エアコンの運転効率が下がるうえに、電気料金が高くなる可能性も。また、室外機の内部にたまったごみが原因で、故障を引き起こすこともあるため、室内機と同じように室外機も定期的に掃除するようにしましょう。ただし、室外機は決して動かしてはいけません。大事故につながる可能性があるので、注意しましょう。<br>特に、室外機の異音に気付いたときは、掃除の必要性が高まった状態です。汚れがたまっている場所を早めに掃除するか、エアコン業者に故障していないか尋ねるようにしてくださいね。</p>
						<p class="mb2">なお、室外機を本格的に掃除するには、プロの技が必要になります。今回は自分で簡単にできる室外機の掃除の仕方を、部分別にお伝えします。</p>
					</div>
				</div>
			</section>
			<section class="main__item mb3">
				<h3 class="cleaning01__secttl mb3" id="shitsugaiki02">室外機の掃除の仕方</h3>
				<p class="level mb2">■所要時間：30分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：年に1回</p>
				<p class="mb2">自分で掃除できる室外機の部分は、<span class="u-font__bold">外カバー、裏側の熱交換器（フィンまたはファン）、正面の吹き出しグリル（フィルター）、ドレンホース（排水ホース）の4ヵ所</span>です。</p>
				<p>以下のものを準備して掃除に取り掛かりましょう。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>ほうき</li>
					<li>掃除機（ハンディタイプ）</li>
					<li>ちりとり</li>
					<li>雑巾</li>
					<li>バケツ</li>
					<li>歯ブラシ</li>
					<li>割りばし</li>
				</ul>
				<h4 class="cleaning01__ttl_m mb2">外カバー</h4>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/cleaning09-02@2x.jpg" class="u-img__max mb1_sp" alt="室外機の拭き掃除" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">汚れが目に付きやすい外カバーから掃除を始めましょう。砂ぼこりや泥、排気ガスなどによる室外機の外側の汚れを、ほうきで払い落とします。<br>その後、残った砂ぼこりや泥を、濡れた雑巾で拭き取りましょう。<br>泥の汚れがひどいときや、鳩のフンが付いて落ちづらいときは、たっぷりの水で湿らせたキッチンペーパーをのせて汚れをゆるめてから、雑巾で拭くようにします。室外機はもともと雨ざらしになることを前提にして作られているため、少量であれば水を使って掃除しても大丈夫ですよ。しかし、室外機の横や下から水をかけると、内部の機器が故障してしまう可能性があるので、気を付けましょう。</p>
						<p class="mb2">また、使用している室外機メーカーが推奨していない洗剤を使用してはいけません。マニュアルや取扱説明書などに、メーカー推奨の洗剤や注意点が記載されているので、確認しておくことをおすすめします。ほかの洗剤を使用すると部品を傷めたり、変質させたりする恐れがあります。</p>
						<p>外側がきれいになったら、室外機の下に落ち葉やごみがないか確かめましょう。ごみがあれば、ほうきとちりとりを使って取り除いておきます。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">熱交換器（フィンまたはファン）</h4>
				<div class="mb4">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/cleaning09-06@2x.jpg" class="u-img__max mb1_sp" alt="室外機の背面" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb4">室内の温度調節を行なううえで、非常に大切な部品が熱交換器（フィンまたはファン）です。熱交換器は室外機の背面と側面にあるため、目に付くことが少ない箇所ですが、汚れがたまるとトラブルを引き起こすこともあります。</p>
						<p class="mb2">ただ、室外機の設置場所によっては、熱交換器が見えなかったり、手が届かなかったりする場合があります。その際には、決して動かさないようしましょう。ガス漏れなど大事故につながる可能性があります。見えている範囲での掃除にとどめましょう。</p>
						<p class="mb2">まず、ハンディタイプの掃除機にブラシヘッドを付けて、大まかに汚れを吸い取ります。掃除機を使う際は、ブラシの部分だけが触れるようにして優しく掃除します。</p>
						<p class="mb2">フィンは金属板でできており、掃除機の本体が強く当たると、変形してしまうこともあります。あくまで大きいゴミを吸い取る程度にしましょう。</p>
						<p class="mb2">掃除機で取り切れなかった細かいほこりは、歯ブラシを使ってかき出していきます。このときも、強くこすらず、フィンを傷めないように掃除してください。掃除をして室外機を美しくすることを目的とするのではなく、見えているゴミを取るようにしてくださいね。</p>
						<p class="mb5">なお、いくらフィンの汚れがひどいからといって、高圧洗浄機の使用はやめましょう。室外機の内部は大変デリケートです。内部に水が入り、精密機器を壊してしまう恐れがあります。<br>また、市販のスプレー式エアコンクリーナーは詰まりの原因になったり、さびが発生したりする恐れがあるため、注意しましょう。</p>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png" alt="お掃除のミカタ 使い古した歯ブラシを利用する！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">使い古した歯ブラシを利用する！</h5>
						<p class="mb2">使い古した歯ブラシは、フィンや吹き出しグリルの細かな場所の掃除に最適なグッズです。新品の歯ブラシより使い古した歯ブラシのほうが毛先がやわらかいため、特にフィンの掃除に向いています。捨てずに活用しましょう！</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">吹き出しグリル</h4>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/cleaning09-04@2x.jpg" class="u-img__max mb1_sp" alt="室外機の吹き出しグリル" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mt0 mb2">室外機の正面部分が吹き出しグリルです。空気の吸い込み口になっており、フィルターとも呼ばれます。放射状や網状の形態によってごみの侵入を防いでいますが、外気のほこりや排気ガスなどで汚れがたまりやすい箇所です。<br>まず、ほうきでほこりを払い落としましょう。ハンディタイプの掃除機があれば、それでほこりを吸い取ります。<br>その後、細かい箇所のほこりや汚れを歯ブラシで落としていきます。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">ドレンホース（排水ホース）</h4>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/09/cleaning09-05@2x.jpg" class="u-img__max mb1_sp" alt="室外機とドレンホース" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mt0 mb2">ドレンホースとは、エアコンの機器内で発生した<a href="<?php echo $base_url; ?>/magazine/article/cafe-vol27-report.php" data-ga-click="cleaning09_3">結露</a>を、室外機の外に排出するホースのことです。<br>ドレンホース内に汚れが詰まると、室外機に水がたまったり、室内機から水漏れして故障を引き起こす原因にもなりますから、忘れずにホースの中も掃除しましょう。</p>
						<p class="mb2">ホースの中をのぞいて、ごみがないか、蜘蛛の巣や虫が入っていないかを確認します。ごみや虫を見つけた場合は、市販のドレンホースクリーナーと呼ばれる掃除道具を使用します。</p>
						<p class="mb2">ホース内の空気を吸い出す仕組みのため、奥に入った汚れやごみを取り除けます。手で届く範囲であれば、割りばしや木の枝などを使って取り除きます。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">室外機の周辺</h4>
				<p>最後に、室外機の周辺を整理します。室外機は周辺の空気を吸い込み、熱交換を行なうため、ものがあると、障害となって熱交換率の効率が悪くなるのです。室外機の前に鉢植えや植木などのものを置かずに、空気の通りをよくしておきましょう。</p>
			</section>
			<section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png" data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png" alt="本格クリーニングをして電気料金の節約を！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">プロによるエアコンクリーニングで空気をきれいに！</h5>
						<p class="mb2">エアコンの汚れやカビは、家庭では手の届かない内部にもこびりついている可能性があります。そのまま使っていると、不快なニオイや空気の汚れの原因に…。そこでおすすめなのが、長谷工のエアコンクリーニングです。専門知識を持ったプロが、室内機を安全に分解洗浄するので中までスッキリ！省エネ効果にも期待できます。</p>
						<p class="mb2">ブランシエラクラブのオリジナルポイント（スマイル）を利用することで、お得な値段でエアコンクリーニングをすることもできますよ。</p>
						<div class="center">
							<p class="pr__txt">エアコンクリーニング</p>
							<a href="https://e-suteki.haseko.jp/service/air-conditioner-cleaning.html" target="_blank" data-ga-click="cleaning09_4" class="pr__btn center">詳しくはこちら</a>
						</div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>室外機を掃除したらエアコンの効きがますますよくなったみたい！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>やっぱり室外機の掃除も大切なんだね～</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb kirari">
							<div class="inner-border">
								<div>
									<p>エアコンを使い始める季節が来る前に掃除するといいニャ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>電気代の節約にもなるし、エコにもなるし、やり方も難しくないから、定期的に掃除しようっと！</p>
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
