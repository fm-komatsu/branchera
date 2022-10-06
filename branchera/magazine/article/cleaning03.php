<?php
//base
include ("../../function.php");
$content = get_id_data('27003');
$pageTtl = 'レンジフード・換気扇の掃除方法！油汚れをスッキリ落とすには？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'レンジフードや換気扇の油汚れを、スッキリ落とす方法をご紹介します。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cleaning";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month ="3";
$release_day ="31";
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/03/main-v@2x.jpg" alt="" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/03/main-v-sp@2x.png" alt="" class="u-img__max u-only__sp center" loading="lazy">
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
        <h2 class="cleaning01__ttl u-font__palt">レンジフード・換気扇の掃除方法！油汚れをスッキリ落とすには？</h2>
					<p class="cleaning01__desc">レンジフードや換気扇の油汚れを、スッキリ落とす方法をご紹介します。</p>
          <time datetime=”2022年3月31日”>2022年3月31日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>キッチンのレンジフードと換気扇が、汚れてベタベタ…<br>掃除するのは大変そうだけど、どういうやり方ならスッキリ落とせるの？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p class="u-font__palt">レンジフードや換気扇の油汚れには、重曹のようなアルカリ性の洗剤がおすすめ！<br><strong>アルカリ性の洗剤を溶かしたお湯に、取り外したパーツをつけ置き</strong>してみてニャ</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:133px;" loading="lazy">
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
										<li><a data-scroll href="#kankisen01">油汚れの掃除の基本</a></li>
										<li><a data-scroll href="#kankisen02">レンジフードの掃除5ステップ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kankisen01">油汚れの掃除の基本</h3>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/03/cleaning03-01.jpg" class="u-img__max mb1_sp" alt="レンジフードの汚れ" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mt0 mb2">レンジフードや換気扇のベタベタした汚れは、主に油とほこりが混ざったものです。<br>フィルターの網目やファンに付いた油汚れを落とすには、重曹のようなアルカリ性の洗剤が役立ちます。油は酸性なので、反対の性質を持つアルカリ性の洗剤で中和すると、落としやすくなるのです。</p>
					  </div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kankisen02">レンジフードの掃除5ステップ</h3>
					<p class="level">■所要時間(置き時間も含む)：1時間～<br>■難易度：★★★☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
					<p class="mb3">レンジフードと、内側の換気扇を掃除する手順をご紹介します。高所の作業が多いため、十分気を付けて行ってください。</p>
					<h4 class="cleaning01__ttl_m mb2">[ 1 ] 掃除の準備をする</h4>
					<div class="flex between mb2">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/03/cleaning03-02.png" class="u-img__max mb1_sp" alt="換気扇の掃除の準備をする" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">掃除を始める前に、レンジフードから汚れが垂れ落ちないように周囲を養生します。レンジフード下のコンロ台、床など、必要な範囲を新聞紙やビニールシートでカバーしましょう。</p>
							<p class="mb2">また、安全のために換気扇の電源プラグを抜き、メーカーの取扱説明書を手元に用意しておきましょう。</p>
						</div>
					</div>
					<h4 class="cleaning01__ttl_m mb2">[ 2 ] 洗剤液を用意する</h4>
					<p class="mb2">台所用洗剤や、せっけんを溶かしたお湯（濃度は1カップに対して小さじ1）、または重曹水を用意します。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 重曹水の作り方" style="max-width:280px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">重曹水の作り方</h5>
						<div class="flex between">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/03/cleaning03-03.png" class="u-img__max mb1_sp" alt="重曹水の作り方 40度くらいのお湯200mlに重曹小さじ1/2杯を入れて、よく振る" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mb2 mt0">重曹水を作るときは、市販のスプレーボトルを利用すると便利です。スプレーボトルに40度くらいのお湯200ml、重曹小さじ1/2杯（濃度1％）を直接入れ、よく振り混ぜます。<br>アルミや銅にかけると変色する場合があるので、使用しないようにしましょう。</p>
							</div>
						</div>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">[ 3 ] ファン、フィルターを掃除する</h4>
				<div class="flex between mb2">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/03/cleaning03-04.png" class="u-img__max mb1_sp" alt="「シロッコファン」と「プロペラファン」" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">換気扇のファンとフィルターを取り外します。<br>換気扇のファンは、筒のような形をした「シロッコファン」と「プロペラファン」の2タイプに分かれます。プロペラファンの場合、多くはレンジフードが付いていません。<br>シロッコファンとプロペラファンはそれぞれ外し方が異なるため、取扱説明書で手順を確認してから作業しましょう。</p>
					</div>
				</div>
				<div class="flex between mb6">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/03/cleaning03-05.png" class="u-img__max mb1_sp" alt="50〜60度のお湯につけ置き、歯ブラシやスポンジでフィルターをこする" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">外したファンとフィルターを洗剤につけ置き洗いします。<br>キッチンシンクに50～60度の高温のお湯を溜めて洗剤を溶かすか、シンクにごみ袋を用意して、その中にお湯と洗剤を入れ、各パーツをつけ置きしましょう。<br>作業の際には、やけどをしないよう注意をしてください。</p>
						<p class="mb2"><strong>お湯が冷めるまで</strong>放置し、汚れがふやけてゆるんだら、スポンジや古い歯ブラシでこすり落とし、すすいで乾かします。</p>
					</div>
				</div>
				<div class="urawaza mb3">
					<div class="urawaza__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
								alt="裏技" style="max-width:254px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<div class="flex between">
							<figure class="w30 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<div class="w70">
								<p class="mb2">油汚れは高温で、溶けて簡単に落ちるようになるニャ。レンジフードの部品は金属製で熱に強いから、強力な洗剤を使うよりも、高温のお湯につけ置きをした方が部品を傷めずに汚れを落とすことができるニャ！</p>
							</div>
						</div>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">[ 4 ] レンジフードを掃除する</h4>
				<p class="mb3">レンジフードの汚れを拭き取ります。<br>手袋を着用し、洗剤液に浸して絞った雑巾やキッチンペーパーで、汚れの気になる部分を拭いていきます。</p>
				<h4 class="cleaning01__ttl_m mb2">[ 5 ]レンジフードを水拭きする</h4>
				<p class="mb3">仕上げは、固く絞った雑巾で水拭きしましょう。<br>最後に、乾いたファンとフィルターを取り付けたら完了です。</p>
				<div class="urawaza mb3 mt7">
					<div class="urawaza__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
								alt="お掃除のミカタ 頑固な汚れには上からラップ！" style="max-width:254px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="urawaza__ttl">頑固な汚れには上からラップ！</h5>
						<div class="flex between">
							<figure class="w30 mt2 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<div class="w70">
								<p class="mb2">拭いても取れない頑固な汚れには、洗剤液をラップで密着させよう！スポンジに洗剤液をつけて汚れに塗り、上からラップを貼り付けて、しばらく置いてから拭いてみてニャ。</p>
							</div>
						</div>
					</div>
				</div>
			</section>
      <section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="プロによるクリーニングでピカピカに！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb3">プロによるクリーニングでピカピカに！</h5>
							<p class="mb2">レンジフードや換気扇は、汚れやすいのに掃除が難しい場所のひとつですよね。自分で掃除するのが難しい部分は、プロに依頼するのもおすすめ！長谷工のハウスクリーニングでは、可能な限り部品を分解し、専用洗剤で1つひとつ丁寧に洗浄します。その後の掃除も楽になりますよ。</p>
						  <div class="center">
								<p class="pr__txt">キッチン換気扇クリーニング</p>
								<a href="https://e-suteki.haseko.jp/service/kitchen-fan-cleaning.html" target="_blank" data-ga-click="cleaning03_1" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
					</div>
					<div class="">
						<div class="cleaning_comment">
							<div class="balloon balloon_maxborder mb hikari03">
								<div class="inner-border">
									<div>
										<p>レンジフードと換気扇がピカピカになった〜！<br>湯気やニオイの吸い込みもよくなったみたい</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder-r mb koto_r">
								<div class="inner-border_r">
									<div>
										<p>キッチンがお魚臭くない！</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder mb kirari">
								<div class="inner-border">
									<div>
										<p>汚れをずっと放っておくと、今回紹介した方法では簡単に落とせない場​​合もあるニャ<br>きれいな状態を保つための理想の掃除頻度は、月に1〜2回<br>忙しくて掃除する時間がとれない人は、プロに掃除してもらうといいかも！</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder-r mb0 seiji03_r">
								<div class="inner-border_r">
									<div>
										<p>なるほど〜<br>頻繁に掃除するのは大変だから、年に何回かの大掃除はプロにお願いしてみようかな！</p>
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
