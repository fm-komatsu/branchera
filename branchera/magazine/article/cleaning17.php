<?php
//base
include ("../../function.php");
$content = get_id_data('27017');
$pageTtl = 'ガスコンロの掃除方法は？油汚れや焦げ付きを落とす手順を紹介';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'ガスコンロの掃除方法をご紹介！重曹や台所用洗剤を使い、ガスコンロの汚れを落とす方法を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/17/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/17/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">ガスコンロの油汚れや焦げ付きを落とす掃除方法をご紹介します。</p>
          <time datetime=”2022年8月10日”>2022年8月10日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>ガスコンロにこびり付いた油汚れがなかなか取れない！どうしたら落ちるのかな？ガスコンロ掃除の仕方を教えて～！</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>ガスコンロの油汚れは、<strong>重曹と台所用洗剤を使えば、きれいに落ちる</strong>ニャ！<br>ガスコンロはパーツごとに素材や形が違うから、分けて掃除するといいニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:173px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:176px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#gasukonro01">ガスコンロの汚れは3種類</a></li>
										<li><a data-scroll href="#gasukonro02">ガスコンロの汚れに適した洗剤</a></li>
										<li><a data-scroll href="#gasukonro03">ガスコンロの汚れの落とし方</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="gasukonro01">ガスコンロの汚れは3種類</h3>
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/17/cleaning17-01@2x.jpg" class="u-img__max mb1_sp" alt="汚れたガスコンロ" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0 mb2">キッチンのなかでも、特に汚れが付きやすいのは、毎日使うガスコンロ。掃除の方法をご紹介する前に、ガスコンロの汚れの種類について見ていきましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">食品汚れ</h4>
				<p class="mb3">ガスコンロで調理する際に、食品の汁や液体調味料などがこぼれ出ることがあります。食品から出た汚れをそのまま放っておくと、ガスコンロの受け皿が酸化して部分的にさびたり、ときには器具が変色したりすることもあります。</p>
        <h4 class="cleaning01__ttl_m mb2">油汚れ</h4>
				<p class="mb3">油を使って調理すると、油がはねて、ガスコンロに飛び散ります。油は冷えると固まりやすい性質があるため、放っておくとべたべたになります。そして、ほこりを取り込んで固くなり、徐々に落ちにくい汚れへと変化します。さらに、ときがたつと、油は酸化し、酸化した油のニオイがキッチンから外にもれて、ほかの部屋でもニオイがすることがあります。</p>
        <h4 class="cleaning01__ttl_m mb2">焦げ付き</h4>
				<p class="mb3">食品の吹きこぼれや油汚れを長時間放置すると、汚れがこびり付いていきます。その汚れは、ガスコンロを使うたびに加熱されて酸化し、焦げ付いた頑固な汚れへと変化します。<br>焦げ付いた汚れを落とすには、こそげ落としたり、洗剤を染み込ませたりする必要があるため、手間がかかります。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="gasukonro02">ガスコンロの汚れに適した洗剤</h3>
				<p class="mb2">ガスコンロ掃除に最適な洗剤は、台所用洗剤と重曹です。<br>食品汚れや軽い油汚れであれば、台所用洗剤で油を乳化して落とせます。しかし、頑固な焦げ付きは、簡単には落とせません。</p>
				<p class="mb2">頑固な焦げ付きを落とす場合、掃除に適しているのはアルカリ性の重曹です。ガスコンロにできる焦げ付きは酸性の性質を持っており、反対の性質のアルカリ性洗剤を使うと、中和して、効率的に落とすことができます。</p>
				<p class="mb3">また、重曹は水に溶けにくくクレンザーの代用品として使えます。粒子が細かいので、ガスコンロを傷つけにくいというメリットもあります。なお、クエン酸は酸性のため、油汚れを落とせないことは覚えておきましょう。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="gasukonro03">ガスコンロの汚れの落とし方</h3>
				<p class="level mb2">■所要時間：20分～<br>■難易度：★★★☆☆<br>■掃除頻度の目安：気になったとき</p>
				<p class="mb3">ガスコンロの掃除方法は、ガスコンロのパーツごとに変わります。パーツごとに分けて、汚れの落とし方を紹介します。</p>
        <h4 class="cleaning01__ttl_m mb2">五徳</h4>
				<p class="mb2">五徳とは、鍋やフライパンを置くツメのある台のこと。最も油汚れがこびり付きやすいパーツです。</p>
				<p>以下の掃除道具を用意します。</p>
				<ul class="u-list__ul_dot mb2">
					<li>重曹</li>
					<li>五徳が入るサイズの鍋</li>
					<li>使い古した歯ブラシやワイヤーブラシ(または、使わない下敷きや期限切れのクレジットカード)</li>
					<li>スポンジ</li>
				</ul>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/17/cleaning17-02@2x.jpg" class="u-img__max mb1_sp" alt="五徳の掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">鍋に五徳・重曹大さじ3杯・五徳が浸かる程度の水を入れて、加熱をします。お湯が沸騰したら、加熱をやめ、沸騰したお湯が触れるくらいに冷めるまで待ちます。</p>
						<p class="mb2 u-font__palt">お湯が冷めたら、五徳を鍋から取り出し、スポンジを使って汚れをこすり落とします。<br>細かい部分の汚れは、歯ブラシでこすって落とします。</p>
						<p class="mb3">頑固な汚れは、水1カップに重曹小さじ1/2杯を溶かした重曹水を使って落とします。重曹水にキッチンペーパーを浸してから、汚れの部分に貼り付け、10分間パックします。10分がたち、汚れがゆるんだら、キッチンペーパーで拭き取りましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">バーナー</h4>				
				<p class="mb2">バーナーは、「温度センサー」「点火プラグ」「立ち消え安全装置」「バーナーキャップ」で構成された箇所で、焦げ付きが付着しやすいパーツです。</p>
				<p>掃除道具は以下の通りです。</p>
				<ul class="u-list__ul_dot mb2">
					<li>重曹</li>
					<li>スプレーボトル</li>
					<li>歯ブラシ</li>
					<li>スポンジ</li>
				</ul>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/17/cleaning17-03@2x.jpg" class="u-img__max mb1_sp" alt="バーナーキャップの外し方" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">バーナーキャップは、五徳を外してから上に持ち上げることで簡単に外すことができます。</p>
						<p class="mb2">バーナーキャップを外したら、五徳と同じように、鍋にバーナーキャップ・重曹大さじ3杯・バーナーキャップが浸かる程度のお水を加えて、加熱します。お湯が沸騰したら、加熱をやめて、触れるくらいまで冷めるのを待ちます。</p>
						<p class="mb3">お湯が冷めたら、バーナーキャップの溝の部分は、歯ブラシでこすって汚れを落とします。凸凹のない部分は、スポンジで軽くこすって落とすとよいでしょう。その後、水でよくすすいで、乾かします。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">天板</h4>
				<p class="mb2">天板は、吹きこぼれた食品の汚れが付きやすく、汚れが目立ちやすいパーツです。素材は、耐久性に優れたホーロー、油汚れを弾くフッ素コート、焦げ付きにくいガラストップ、軽量なアルミもあります。</p>
				<p>掃除道具は以下の通りです。</p>
				<ul class="u-list__ul_dot mb2">
					<li>重曹</li>
					<li>中性洗剤</li>
					<li>ふきん(またはスポンジ)</li>
				</ul>
				<p class="mb2">使用する洗剤は、天板の素材によって異なります。素材がホーロー、フッ素コート、ガラストップの場合は、重曹水で掃除します。</p>
				<p class="mb2">まず、お湯200mlと重曹小さじ1/2杯を入れ、重曹水を作ります。そこに、キッチンペーパーを浸してから、天板に貼り付け、10分間パックします。汚れがゆるんだら、パックしていたキッチンペーパーで拭き取ります。仕上げにクロスで水拭きをします。</p>
				<p class="mb3">素材がアルミの場合は、中性洗剤を使いましょう。アルミ素材に重曹を用いると、黒く変色することがあるため気を付けましょう。中性洗剤小さじ1杯を、水200mlで薄めて、天板にかけ、スポンジでこすりながら、汚れを落とします。汚れが落ちたら、水ですすぎ、乾かします。</p>
        <h4 class="cleaning01__ttl_m mb2">排気カバー</h4>
				<p class="mb2">排気カバーは、料理中の油のはねやフライパンから飛び落ちた具材が、排気口に入らないようにしている大切なパーツです。排気カバーに油汚れがたまると、うまく排気できなくなるので、注意が必要です。</p>
				<p>掃除道具は以下の通りです。</p>
				<ul class="u-list__ul_dot mb2">
					<li>台所用洗剤・重曹</li>
					<li>スプレーボトル</li>
					<li>スポンジ</li>
				</ul>
				<div class="mb5">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/17/cleaning17-04@2x.jpg" class="u-img__max mb1_sp" alt="排気カバーの外し方" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">排気カバーを外し、スポンジに台所用洗剤を含ませて、こすって汚れを洗い落とします。</p>
						<p class="mb2">台所洗剤を使用しても落ちにくい場合は、シンクに給湯器の一番高い温度で熱いお湯をため、台所用洗剤を溶かし、つけ置きします。お湯が冷めたら、スポンジと台所用洗剤でこすり洗いします。</p>
						<p class="mb3">汚れが取れたら、水で洗い流して乾燥させます。排気カバーは週に1回掃除することをおすすめします。</p>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ IHコンロの掃除には、ラップを使う！？" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">IHコンロの掃除には、ラップを使う！？</h5>
						<div class="flex">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/17/cleaning17-05@2x.jpg" class="u-img__max mb1_sp" alt="IHコンロの掃除方法" style="max-width:320px;" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mt0 mb2">IHコンロの天板掃除には、ラップがおすすめ！ラップは傷が付きにくく、洗剤を吸い込むスポンジと違って、少量の洗剤で掃除できます。</p>
								<p class="mt0">天板の表面温度が冷めたら、使用済みのラップを丸め、台所用洗剤を数滴たらします。丸めたラップで汚れた部分をこすると、汚れが楽に取れますよ。</p>
							</div>
						</div>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">グリル</h4>
				<p class="mb2">魚焼き器として活躍するグリル内も油汚れが焦げ付きやすい場所です。</p>
				<p>掃除道具は以下の通りです。</p>
				<ul class="u-list__ul_dot mb2">
					<li>重曹</li>
					<li>台所用洗剤</li>
					<li>スポンジ(またはふきん)</li>
					<li>アルミホイル</li>
					<li>キッチンペーパー</li>
				</ul>
				<p class="mb2">グリルを引っ張り出し、シンクに出します。給湯器のお湯をグリルの皿と網にかけて、油汚れをふやかします。重曹を振りかけて、冷めるまで一旦放置します。冷めたら、スポンジで汚れをこすり落とします。</p>
				<p class="mb2">なお、網に付着した焦げた汚れは、グリルにキッチンペーパーを被せ、重曹とお湯を振りかけて、つけ置きすると落としやすくなります。10分間つけ置きし、汚れがゆるんだらスポンジでこすり洗いをし、最後に水で流します。</p>
				<p class="mb2">その後、台所用洗剤で仕上げをします。一度すすいで、ぬるつきが残った部分は、台所用洗剤をつけて洗い直します。</p>
				<p class="mb2">また、グリル内の軽い汚れは、やわらかい布に重曹水を含ませて、拭き取るようにします。頑固な汚れの場合は、重曹水を含ませたキッチンペーパーで、グリル内の側面や底面を湿らせて、しばらく放置します。汚れが浮いたら、スポンジ、またはふきんで拭き取ります。</p>
				<p class="mb3">前面のパネルは、重曹水をつけたキッチンペーパーをガラスの内側と外側に貼りつけて15分ほど置きます。その後で、水で濡らしたスポンジ、または水で濡らして絞ったふきんで拭き取れば完了です。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb koto">
							<div class="inner-border">
								<div>
									<p>わ～、ガスコンロの汚れがすっかり取れてる♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>ガスコンロ、新品みたいに、ぴかぴかだね！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>これで、<a href="<?php echo $base_url?>/magazine/index_comic02.php" data-ga-click="cleaning17_1">料理</a>に気合が入る！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>油汚れは気温が高いほうがよく落ちるから、油が固まりやすい冬に比べると、夏は掃除のチャンスだニャ！<br>でも、季節に関係なく、汚れを放っておくと固まって落としにくくなるから、ちょっと汚れたらすぐに掃除するのが大事だニャ！</p>
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
