<?php
//base
include ("../../function.php");
$content = get_id_data('27014');
$pageTtl = 'フローリング掃除の手順。拭き掃除でベタつきや黒ずみがすっきり！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'フローリングの掃除方法や手順を解説！フローリングの拭き掃除の手順や、掃除を行なう際の注意点をご紹介します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/14/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/14/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">フローリングのベタつきや黒ずみを落とす掃除方法についてご紹介します。</p>
          <time datetime=”2022年6月29日”>2022年7月13日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>最近暑いから、靴下やスリッパを脱いで、はだしで過ごしているんだけど<br>なんだかフローリングのベタつきが気になるなあ…</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>そのベタつきの原因は、皮脂や油汚れ！<br>フローリング掃除はほこりを取り除くだけでなく、定期的な拭き掃除も必要なのニャ<br><strong>ベタつき解消には薄めの重曹水、頑固な黒ずみにはセスキ炭酸ソーダがおすすめ</strong>ニャ〜</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:143px;" loading="lazy">
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
										<li><a data-scroll href="#flooring01">フローリングの汚れを落とすには？</a></li>
										<li><a data-scroll href="#flooring02">フローリングの拭き掃除の手順</a></li>
										<li><a data-scroll href="#flooring03">部分的な黒ずみの落とし方</a></li>
										<li><a data-scroll href="#flooring04">フローリング掃除の注意点</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="flooring01">フローリングの汚れを落とすには？</h3>
					<p class="mb2">フローリングは、畳やカーペットに比べると掃除しやすいイメージがあります。ところが、毎日フローリングワイパーや掃除機をかけていても、なぜかベタつきや黒ずみが気になりがち…。</p>
					<div class="mb3 flex">
						<figure class="w50 center">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/14/cleaning14-01@2x.jpg" class="u-img__max mb1_sp" alt="フローリング掃除" style="max-width:320px;" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2 mt0">これらの原因は、足の裏から出る皮脂汚れや、<a href="<?php echo $base_url?>/magazine/article/cleaning11.php" data-ga-click="cleaning14_1">キッチン</a>から出る<a href="<?php echo $base_url?>/magazine/article/cleaning03.php" data-ga-click="cleaning14_2">油汚れ</a>です。ベタつきや黒ずみを解消するには、フローリングワイパーや掃除機でほこりを取り除く普段の掃除に加えて、定期的な拭き掃除も行ないましょう！</p>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="flooring02">フローリングの拭き掃除の手順</h3>
				<p class="level mb2">■所要時間（置き時間も含む)：30分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：週に1回</p>
				<p class="mb2">フローリングのベタつきには、重曹水での拭き掃除が効果的です。<br>重曹は弱アルカリ性の洗剤なので、皮脂汚れや油汚れのような酸性の汚れを落とすのに適しています。また、「赤ちゃんがいるので化学洗剤を避けたい」という人にもおすすめです。</p>
				<p class="mb2">ただし、床に使われている材質が「無垢材」の場合、重曹水やセスキ炭酸ソーダを使って拭き掃除をすると、木に含まれるタンニンが反応して染みになってしまうことがあります。無垢材は、1本の天然木から切り出した木材のことを指します。もし、床材に無垢材が使われていたら、乾拭きをしましょう。</p>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/14/cleaning14-02@2x.jpg" class="u-img__max mb1_sp" alt="フローリングの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">フローリングの拭き掃除を始める前に、ほこりを取り除きます。まず、使い捨てのドライシートを付けたフローリングワイパーで<a href="<?php echo $base_url?>/magazine/article/cleaning05.php" data-ga-click="cleaning14_3">ほこり</a>を大まかに取り除きます。それから掃除機で細かなほこりを吸い上げましょう。<br><strong>先に掃除機を使うと排気でほこりが舞い上がってしまう</strong>ので、必ず後から使うようにしてください。</p>
					</div>
				</div>
				<div class="mb5">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/14/cleaning14-03@2x.jpg" class="u-img__max mb1_sp" alt="重曹水を使用した掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">重曹水で拭き掃除をします。<br>濃度1％（2Lのお湯に対して重曹小さじ5杯）の重曹水を手作りし、クロスを10枚〜20枚程度浸して絞っておきます。こうしてまとめて絞っておくと、すすぎに行く手間を省くことができますよ。</p>
						<p class="mb3">フローリングの溝や、家具の隙間などの細かな部分は、割りばしやヘラなどにクロスを巻き付けて拭くときれいになります。</p>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 拭き掃除にはマイクロファイバークロス！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">拭き掃除には<br class="u-only__sp">マイクロファイバークロス！</h5>
						<p>フローリングを拭くクロスには「マイクロファイバークロス」がおすすめです。<br>マイクロファイバークロスとは、ナイロンやポリエステルなどの極細の繊維で作られたクロスのこと。やわらかいので床を傷つけにくく、汚れが落ちやすい、すぐ乾くなどのメリットがあります。スーパーや量販店などで手に入ります。<br>ちなみに、家の掃除に活用されることが多い新聞紙は、フローリングに使うと傷やインク移りの原因になる場合があるためおすすめできません。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="flooring03">部分的な黒ずみの落とし方</h3>
				<p class="level mb2">■所要時間（置き時間も含む)：30分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：黒ずみが気になったとき</p>
				<p class="mb2">フローリングの皮脂汚れや油汚れが黒ずみになってしまっている部分には、重曹よりもアルカリ性が強いセスキ炭酸ソーダを使ってみましょう。手荒れする場合があるので、ゴム手袋をしてから行なうのがおすすめです。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/14/cleaning14-04@2x.jpg" class="u-img__max mb1_sp" alt="セスキ炭酸ソーダ水の作り方" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0">水にごく少量のセスキ炭酸ソーダを混ぜ、スプレー用の水溶液を手作りします。水200mlに対して、セスキ炭酸ソーダ小さじ1/2杯が目安です。</p>
					</div>
				</div>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/14/cleaning14-05@2x.jpg" class="u-img__max mb1_sp" alt="フローリングの黒ずみ拭き" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">黒ずみの部分に、セスキ炭酸ソーダの水溶液をスプレーで吹き付け、水で絞ったクロスで拭き取ります。汚れが取れるまで、これを繰り返しましょう。</p>
						<p class="mb2">汚れが取れたら、水拭きで仕上げます。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="flooring04">フローリング掃除の注意点</h3>
				<p class="mb3">フローリング掃除は、誤った方法で行なうと床を傷めてしまうことがあります。大切な住まいを守るために、フローリング掃除の注意点も知っておきましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">床材に注意</h4>
				<p class="mb3">フローリングの床材は、切り分けられた天然木をつなぎ合わせた「集成材」と、1本の天然木から切り出した「無垢材」の2つに大きく分けられます。前述した通り、無垢材のフローリングは基本的に乾拭きでお手入れを行ないましょう。もし、汚れが気になる部分がある場合は、水に浸してかたく絞ったクロスで拭くようにします。</p>
				<h4 class="cleaning01__ttl_m mb2">重曹水の濃度に注意</h4>
				<p class="mb3">フローリングの拭き掃除に使う重曹水の濃度は、1%が目安です。濃過ぎると、拭いた後に白残りするので注意しましょう。もし白残りしてしまったら、水拭きで白残りを拭き取ります。</p>
				<h4 class="cleaning01__ttl_m mb2">スチームクリーナーの蒸気に注意</h4>
				<p class="mb3">スチームクリーナーは、高温の蒸気を噴射して汚れを浮かせることができる掃除機です。ただし、熱や水分がフローリングを傷めてしまう場合が多いため、正しい使用方法や適している材質について必ず確認しましょう。</p>
				<h4 class="cleaning01__ttl_m mb2">汚れと洗剤の相性に注意</h4>
				<p class="mb3">除菌効果があるので掃除によく使われるクエン酸や酢は、いずれも酸性。フローリングの皮脂汚れや油汚れも酸性なので、床掃除には適していません。汚れの種類に合わせて、洗剤を使い分けましょう。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>フローリングがサラサラだ！はだしで歩いてもベタつかな〜い♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>特にベタつきやすい夏は、定期的な拭き掃除を忘れずに行なうといいニャ！<br>フローリングは範囲が広いから、家族みんなで協力するのがおすすめニャ〜</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb0 koto">
							<div class="inner-border">
								<div>
									<p>みんなでやればあっという間だもんね<br>私もお手伝いしようっと！</p>
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
