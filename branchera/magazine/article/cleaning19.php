<?php
//base
include ("../../function.php");
$content = get_id_data('27019');
$pageTtl = '「拭き掃除」は掃除の基本！雑巾の使い方・拭き方を解説';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '雑巾を使った拭き掃除の仕方を紹介します！雑巾を使った基本の拭き方や効率的な拭き掃除の仕方を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/19/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/19/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">掃除の基本は拭き掃除。雑巾の使い方や拭き方をご紹介します。</p>
          <time datetime=”2022年8月31日”>2022年8月31日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>掃除機はかけるけど、拭き掃除って面倒だからやってない。最近、床のべたべたが気になるから、拭き掃除もしたほうがいいのかなぁ</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>掃除の基本は、拭き掃除！手間がかかるけど、おすすめするニャ<br><strong>床のべたつきは、皮脂の汚れが原因！</strong><br><strong>拭き掃除をすると、掃除機では取り切れない、細かい砂やほこり、皮脂の汚れや落とした食べ物の汚れがきれいになる</strong>ニャ♪</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:193px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:196px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#fukisouji01">拭き掃除が必要な理由</a></li>
										<li><a data-scroll href="#fukisouji02">拭き掃除の種類</a></li>
										<li><a data-scroll href="#fukisouji03">正しい雑巾の使い方</a></li>
										<li><a data-scroll href="#fukisouji04">拭き掃除の仕方</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="fukisouji01">拭き掃除が必要な理由</h3>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/19/cleaning19-01@2x.jpg" class="u-img__max mb1_sp" alt="雑巾・ゴム手袋・バケツ" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">拭き掃除は手で行なう必要があるうえ、しゃがんだ姿勢で掃除することもあります。そのため、「体力を使うから疲れるし、面倒」と避けている人も多いのではないでしょうか。しかし、拭き掃除は掃除の基本です。</p>
						<p class="mb2">拭き掃除をすることで、掃除機では取り切れない床のべたつきや、スイッチ、リモコン類のようによく触る部分の汚れなどを落とすことができます。ちなみに、床のべたつき、スイッチやリモコン類の汚れは、皮脂や手垢の汚れが原因です。</p>
						<p class="mb2">拭き掃除のメリットは、掃除機のように音を立てることなく掃除できること。もし近くで子どもが寝ていても、睡眠を邪魔することなく掃除できます。また、部屋の空気を汚さずにできる点も拭き掃除のメリットの1つです。</p>
						<p>住まいのなかで、拭き掃除をしたほうがよい箇所はたくさんあります。</p>
						<ul class="u-list__ul_dot mb2">
							<li><a href="<?php echo $base_url?>/magazine/article/cleaning03.php" data-ga-click="cleaning19_1">キッチン</a>の床</li>
							<li><a href="<?php echo $base_url?>/magazine/article/cleaning07.php" data-ga-click="cleaning19_2">トイレ</a>の床</li>
							<li><a href="<?php echo $base_url?>/magazine/article/cleaning14.php" data-ga-click="cleaning19_3">リビングの床</a></li>
							<li>棚</li>
							<li>机</li>
							<li><a href="<?php echo $base_url?>/magazine/article/cleaning15.php" data-ga-click="cleaning19_4">畳</a></li>
							<li>押し入れ</li>
							<li><a href="<?php echo $base_url?>/magazine/article/cleaning10.php" data-ga-click="cleaning19_5">窓</a></li>
							<li>壁</li>
							<li>ドア</li>
							<li>ドアノブ</li>
							<li>手すり</li>
							<li>スイッチ</li>
							<li>リモコン</li>
							<li>家電　など</li>
						</ul>
						<p class="mb3">清潔で快適な住まいを守るため、ぜひ定期的に拭き掃除を行ないましょう。そこで、今回は拭き掃除の正しい方法についてお伝えします。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="fukisouji02">拭き掃除の種類</h3>
				<p class="mb3">拭き掃除には、水拭きと乾拭きの2つの方法があります。それぞれ見ていきましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">水拭き</h4>
				<p class="mb2">水拭きとは、水で絞った雑巾で掃除をすることを意味します。水拭きは、細かい砂やほこり、食品をこぼした跡の汚れを取り除くのに最適な掃除方法です。</p>
				<p class="mb3">水拭きする場合は、雑巾を水で濡らした後、両手で固く絞ってから使用します。水分量が適切だと、軽く拭いただけで汚れが落ちやすくなります。逆に雑巾の水分量が多いと、掃除する箇所がびしょびしょに濡れて、乾くのに時間がかかってしまいますので、注意しましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">乾拭き</h4>
				<p class="mb2">乾拭きとは、乾いた雑巾で掃除をすることです。乾拭きは、ほこりやごみなどの乾いた汚れを取り除くのに最適な方法です。ほこりやごみを舞い上がらせることなく、乾いた汚れを取り除くことができます。</p>
				<p class="mb3">ほこりを見つけたら、水拭きする前に、サッと乾拭きすることをおすすめします。先に水拭きすると、ほこりが湿って床にへばりつき、汚れが広がってしまうためです。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="fukisouji03">正しい雑巾の使い方</h3>
				<p class="mb3">雑巾を効率よく使うためには、「選び方」「畳み方」「絞り方」「持ち方」の4つのコツがあります。</p>
        <h4 class="cleaning01__ttl_m mb2">雑巾の選び方</h4>
				<p class="mb3">拭き掃除をする際、マイクロファイバークロスを雑巾として選ぶことをおすすめします。マイクロファイバークロスは、ナイロンやポリエステルなどの繊維で作られたクロスのことです。タオルを雑巾にしたものと比較して、汚れが落ちやすく、乾きが早いなどの特徴があります。</p>
        <h4 class="cleaning01__ttl_m mb2">雑巾の畳み方</h4>				
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/19/cleaning19-02@2x.jpg" class="u-img__max mb1_sp" alt="雑巾の畳み方" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">雑巾のサイズはそれぞれですが、大き過ぎたり小さ過ぎたりすると、掃除しづらくなります。手のひらサイズに雑巾を畳むことで持ちやすくなり、掃除がしやすくなります。</p>
						<p class="mb3">雑巾のはじを揃えて、2つ折りにし、その後、4つ折りにします。このように、雑巾を畳んでから拭き掃除をすると、汚れた面を裏返して、きれいな面を使って拭き掃除できます。雑巾を畳んで使えば、何度も水ですすぐ必要がないため、拭き掃除が効率的になります。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">雑巾の絞り</h4>				
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/19/cleaning19-03@2x.jpg" class="u-img__max mb1_sp" alt="雑巾の絞り方" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3">雑巾を水に濡らしたら、しっかりと水気を切るようにしましょう。雑巾を横に2つ折りにし、両手を前後にして、バットを握るようにギュッとかために絞ります。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">雑巾の持ち方</h4>				
				<p>8つ折りに畳んだ雑巾がバラバラにならないように、親指と人差し指で雑巾を挟むようにして使います。拭くときのポイントは、指を広げて、均等に力を入れて拭くようにします。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="fukisouji04">拭き掃除の仕方</h3>
				<p class="mb3">次は、拭き掃除の具体的な手順と、効果的な拭き掃除の順番についてお伝えします。</p>
        <h4 class="cleaning01__ttl_m mb2">基本の拭き方</h4>
				<p class="mb2">掃除の基本は、「上から下へ」「奥から手前へ」です。棚に積もったほこりを掃除するときは、最初に一番上の棚を拭き、徐々に下の棚を拭き掃除していきます。そうすることで上のほこりを下に落とすことができます。</p>
				<p class="mb3">また、家具の下のほこりを取るときは、奥から手前に向けて拭いていきます。逆に、手前から奥へ向けて拭くと、ほこりが奥へと押しやられて、ほこりが取りづらくなります。たまったほこりを取るときには、この基本に沿って拭き掃除すると、同じ所を何度も拭かなくて済むため、効率的です。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/19/cleaning19-04@2x.jpg" class="u-img__max mb1_sp" alt="雑巾を使った拭き方" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">また、拭くときは、一方通行でまっすぐ拭くようにしましょう。右利きであれば右から左、左利きであれば左から右に拭きます。体の外から中心に向けて拭くようにすると、最初から最後まで均等に力が入るようになります。また、拭いた箇所が少し重なるようにして拭くと、拭き残しがなくなりますよ。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">効率的な拭き掃除の順番</h4>	
				<p class="mb3">床の拭き掃除は、次のように行ないます。まず、掃除機をかけて、髪の毛や大きなほこりなど目に付くごみを吸い取ります。その後、ドライシートを付けたフローリングワイパーで乾拭きをし、取りこぼしたごみを拭き取ります。そして、最後に水拭きをしましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">水拭きで落ちない・水拭きできない場所には？</h4>
				<p class="mb3">水拭きしてもなかなか落ちない汚れの多くは、油や皮脂によるものです。このような汚れは、酸性なので、アルカリ性の重曹水を使います。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/19/cleaning19-05@2x.jpg" class="u-img__max mb1_sp" alt="重曹水の作り方" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">重曹水は、濃度1％で作ります。40度のお湯200mlに対して、重曹は小さじ1/2です。2Lのお湯であれば、重曹は小さじ5杯になります。</p>
						<p class="mb2">作った重曹水に雑巾を入れ、よく絞ってから、水拭きしましょう。水では落ちなかった汚れをきれいに落とせますよ。</p>
					</div>
				</div>
				<p class="mb2">なお、水を使うとカビが生える恐れがある押し入れや畳などには、揮発性の高いアルコールを使用します。市販されている除菌用アルコールスプレーや35～50%程度のアルコール水を使いましょう。</p>
				<p class="mb5">除菌用アルコールスプレーやアルコール水は、水を使うと故障の原因にもなるリモコンや家電の拭き掃除にも適しています。使用する際は、乾いたクロスに吹き付けて、汚れを拭き取ります。</p>
			</section>
			<section class="main__item mb3">
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 拭き掃除を楽にするグッズは？" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">拭き掃除を楽にするグッズは？</h5>
						<div>
							<p class="mb2">かがんで拭き掃除をするのが大変な場合は、使い捨てシートで掃除するフローリングワイパー(ペーパーモップ)を使用すると、掃除が楽にできます。</p>
							<p class="">最近は、拭き掃除ができるお掃除ロボットも登場しています。進む方向にスプレーを出して、自分で拭いてきれいにしてくれます。こうした便利な家電を利用するのも、掃除を楽に、効率的にする1つの方法です。</p>
						</div>
					</div>
				</div>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb koto">
							<div class="inner-border">
								<div>
									<p>リビングのフローリングがピカピカになった！猫の抜け毛も見当たらないね～</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>キッチンの床のべたつきもなくなったから、気持ちがいい！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>こんなに真剣に拭き掃除したのは、引越し以来かも？</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>拭き掃除は、汚れが落ちやすく、作業が単純！<br>汚れが気になったときに、ささっと拭くといいニャ！<br>拭き掃除の習慣が付くと、きれいな家をキープできるニャ♪</p>
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
