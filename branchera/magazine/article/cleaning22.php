<?php
//base
include ("../../function.php");
$content = get_id_data('27022');
$pageTtl = '窓の結露対策、どうすればよい？カビの予防方法もご紹介';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '窓の結露対策とカビの予防方法をご紹介！除湿器や換気扇を使った冬の結露対策のやり方や、カビの予防方法を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/22/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/22/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">窓まわりの結露や黒カビの対策についてご紹介します。</p>
          <time datetime=”2022年9月28日”>2022年9月28日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>うわっ、窓のまわりが<a href="<?php echo $base_url?>/magazine/article/cafe-vol27-report.php" data-ga-click="cleaning22_1">結露</a>でビショビショだ〜<br>このままにしておくのはマズイだろうけど、どうしたらいいんだろう…？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>窓の結露を放っておくと、壁やカーテンにカビが生える原因になってしまうのニャ<br><strong>こまめに水滴を取り除いて、カビの栄養源になる汚れもしっかり掃除</strong>してほしいニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:223px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:226px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#ketsuro01">結露はどうして発生するの？</a></li>
										<li><a data-scroll href="#ketsuro02">日頃の習慣に！結露対策</a></li>
										<li><a data-scroll href="#ketsuro03">併せてカビ対策も忘れずに！</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="ketsuro01">結露はどうして発生するの？</h3>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/22/cleaning22-01@2x.jpg" class="u-img__max mb1_sp" alt="窓の結露" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">気温が下がるシーズンになると、窓まわりが結露でビショビショになりがち。拭き掃除も大変ですが、そもそもなぜ結露は発生するのでしょうか？</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">外との寒暖差が発生原因</h4>
				<p class="mb2">結露が発生する原因は、外と室内の温度差です。<br>空気は温度が高いほど、たくさんの水蒸気を含むことができます。しかし、暖かい室内の空気が、外気で冷えた窓や壁に当たると冷たくなり、含みきれなくなった水蒸気が水滴となって、窓や壁に付着するのです。</p>
				<p class="mb3"><strong>結露は、室内外の気温差が激しいほど発生しやすいため、ヒーターやエアコンを使う冬は特に注意が必要</strong>です。</p>
        <h4 class="cleaning01__ttl_m mb2">放置するとカビの温床に</h4>
				<p class="mb2">結露による水分と、窓まわりの汚れは、<a href="<?php echo $base_url?>/magazine/article/cleaning04.php" data-ga-click="cleaning22_2">カビ</a>の発生要因になります。そのため、結露を放っておくと、窓枠、壁、カーテンなどにポツポツと黒カビが生えてしまうことに。黒カビはアレルギー症状を引き起こすこともあるので、注意しましょう。</p>
				<p class="mb3">また、流れ落ちた水滴が窓まわりや床の木材を傷めてしまうこともあります。<strong>結露は早めに取り除き、併せてカビ対策も行なうことが重要</strong>です。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="ketsuro02">日頃の習慣に！結露対策</h3>
				<p class="mb3">普段の結露対策は、「取り除く」「防ぐ」の2つを行ないましょう！</p>
        <h4 class="cleaning01__ttl_m mb2">結露を取り除く</h4>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/22/cleaning22-02@2x.jpg" class="u-img__max mb1_sp" alt="スクイージーで水切りをする方法" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">窓の結露は、気付いたらすぐ取り除きましょう。<br>作業の際は、水切りワイパー（スクイージー）を使うと広い面積を効率よく水切りできるのでおすすめです。下にタオルを敷くと、床や窓まわりがビショビショになるのを防げます。</p>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 水切りワイパーで水滴スッキリ♪" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">水切りワイパーで水滴スッキリ♪</h5>
						<div>
							<p>水切りワイパーは、水気を切るための掃除用具です。さまざまな形やサイズのものがあるので、使いやすいお気に入りを探してみましょう。お風呂場にも便利ですよ。</p>
						</div>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">結露を防ぐ</h4>
				<p class="mb3">結露は、発生する前になるべく防ぐことも大切です。次のような方法を習慣にしてみましょう。</p>
        <dl class="mb2">
          <dt>●<a href="<?php echo $base_url?>/magazine/article/cafe-vol05-report.php" data-ga-click="cleaning22_3">換気</a>を行なう</dt>
          <dd class="mb2">結露を防ぐには、換気を行なって水蒸気を含んだ空気を外へ出すと効果的です。ただし、寒い時期に窓を大きく開けると暖房効率が下がってしまうため、出入りの少ないトイレやお風呂の換気扇を常に回しておくとよいでしょう。</dd>
          <dd>また、寝ている間の汗で湿気がたまりやすい寝室は、起きてすぐ換気を行なうようにします。結露が起きやすい窓の近くには、サーキュレーターや扇風機などを置いて空気を循環させるのもおすすめです。</dd>
        </dl>
        <dl class="mb2">
          <dt>●温度と湿度を調整する</dt>
          <dd>結露は室内外の気温差で発生するため、室外の気温に対して、エアコンの温度を上げ過ぎたり下げ過ぎたりしないようにしましょう。湿度は、40％〜60％程度を目安にしましょう。</dd>
        </dl>
        <dl class="mb2">
          <dt class="mb2">●結露防止グッズを使う</dt>
					<div class="mb3 flex">
						<figure class="w50 center">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/22/cleaning22-03@2x.jpg" class="u-img__max mb1_sp" alt="結露防止グッズ" style="max-width:322px;" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb3 mt0">結露を防ぐためのグッズも市販されています。断熱性を高める結露防止シート（ガラスフィルム）や、窓ガラスに吸水膜を張ってくれる結露防止スプレーなどを活用すると、より効果的でしょう。</p>
						</div>
					</div>
        </dl>
        <dl class="mb2">
          <dt>●除湿機を設置する</dt>
          <dd>除湿機のなかでも、乾燥剤に湿気を吸着させるタイプの「デシカント方式」は、低温時の除湿力が高いので冬場の結露対策に適しています。年間を通して使うなら、気温が高い時期の除湿に優れた「コンプレッサー式」の機能も併せ持った、「ハイブリッド式」の除湿機がおすすめです。</dd>
        </dl>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="ketsuro03">併せてカビ対策も忘れずに！</h3>
				<p class="mb3">結露が発生しやすい場所は、カビ発生のリスクも高い場所。結露対策とカビ対策はセットで行ないましょう！</p>
				<p class="level mb3">■所要時間：10分～<br>■難易度：★★☆☆☆<br>■掃除：汚れやすい窓は1ヵ月〜2ヵ月に1回、除菌：結露がある場合は1日1回</p>
        <h4 class="cleaning01__ttl_m mb2">汚れを取り除く</h4>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/22/cleaning22-04@2x.jpg" class="u-img__max mb1_sp" alt="窓まわりの砂ぼこりと手垢の掃除方法" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0">窓まわりの汚れは、カビの栄養源です。窓ガラスやサッシ、パッキンなどに汚れが付いていると、カビが繁殖する原因になってしまいます。砂ぼこりのような軽い汚れは水拭き、手垢は重曹水（濃度1％。お湯1Lに対して、重曹小さじ2.5杯程度）を使って窓掃除しましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">除菌する</h4>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/22/cleaning22-05@2x.jpg" class="u-img__max mb1_sp" alt="アルコール水の作り方" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">カビは菌なので、カビが生えやすい部分にはアルコール水（濃度35％。水110mlに対して消毒用エタノール90mlを加える）をスプレーして除菌すると効果的です。窓ガラスの内側や、窓に近くカビが生えやすいレースのカーテンにスプレーしましょう。</p>
					</div>
				</div>
				<p>ただし、スプレーする場所に水滴が残っているとアルコール濃度が下がってしまうので、「水滴を取り除いた後に」「乾いてから」スプレーするのがポイントです。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>窓まわりのビショビショが減ったみたいだ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>床もじめじめしないね♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb kirari">
							<div class="inner-border">
								<div>
									<p>寒いからといって換気をしないと、また結露になっちゃうから注意だニャ</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>今年はカビ知らずの冬が過ごせそうね！<br>換気は冬の習慣にしなくちゃ♪</p>
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
