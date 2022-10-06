<?php
//base
include ("../../function.php");
$content = get_id_data('27002');
$pageTtl = '加湿器の掃除方法。タイプ別お手入れと頻度をご紹介！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '加湿器の適切なお手入れ方法を、タイプ別にご紹介します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/02/main-v@2x.jpg" alt="" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/02/main-v-spp@2x.png" alt="" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="technic__chara u-only__pc mb3">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
    </div>
		<div class="technic__chara u-only__sp">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara-sp@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
    </div>
    <div class="main__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="cleaning01__ttl u-font__palt">加湿器の掃除方法。タイプ別お手入れと頻度をご紹介！</h2>
					<p class="cleaning01__desc">加湿器の適切なお手入れ方法を、タイプ別にご紹介します。</p>
          <time datetime=”2022年3月31日”>2022年3月31日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>冬場からずっと加湿器を使ってきたけど、なんだか最近ニオイが気になるんだよね。<br>どうやって手入れしたらいいんだろう？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>加湿器はこまめに掃除しないと、ニオイだけじゃなく、カビや雑菌も発生しやすいニャ。<br><strong>パーツごとに分けて、適切な方法でこまめに掃除</strong>をしよう！</p>
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
										<li><a data-scroll href="#kashitsuki01">加湿器を掃除しないとどうなる…？</a></li>
										<li><a data-scroll href="#kashitsuki02">タイプ別・加湿器の掃除方法</a></li>
										<li><a data-scroll href="#kashitsuki03">きれいな空気を保つために</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kashitsuki01">加湿器を掃除しないとどうなる…？</h3>
					<div>
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/02/cleaning02-05.jpg" class="u-img__max mb1_sp" alt="加湿器" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">乾燥を防ぐために大活躍する加湿器ですが、実は使用する水は雑菌やカビの温床になり、汚れがたまりやすいことをご存知でしょうか？<br>水道水には消毒効果のある「カルキ」と呼ばれる塩素が含まれていますが、加湿器内で消毒効果が続くのは半日程度です。</p>
							<p class="mt0 mb2"><strong>加湿器を掃除せずにそのまま使い続けると、水中に雑菌が増え、水蒸気と一緒に雑菌とニオイが空気中に広がってしまう</strong>のです。</p>
							<p>また、加湿器の水垢は目詰まりの原因となり、加湿器の性能を落としやすくなるため注意しましょう。<br>水が触れるタンクやフィルター、そのほかの取り外せるパーツを定期的に掃除することで、水垢やカビの発生を防ぐことができますよ。</p>
					  </div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3 cleaninganchor" id="kashitsuki02">タイプ別・加湿器の掃除方法</h3>
						<p class="level">■所要時間：各15分程度<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：タンクは毎日、フィルターは週に1回</p>
						<p class="mb3">加湿器のお掃除は簡単です！加湿器の種類によって、お手入れ方法は異なりますから、お手持ちの加湿器のタイプや説明書を確認して、お掃除を始めましょう！</p>
						<h4 class="cleaning01__ttl_m mb2">超音波式</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/02/cleaning02-01.png" class="u-img__max mb1_sp" alt="超音波式加湿器" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">・タンク…水は継ぎ足さず、毎日取り替えることが基本です。タンクに少量の水を入れて振り洗いし、完全に乾かしてから新しい水を入れます。<br>湿ったまま水を入れると、雑菌が繁殖しやすくなるので注意しましょう。<br>
							・フィルター…週に1回、流水ですすぎ洗いし、布でしっかり水分を拭き取ります。<br>
							・そのほか…水位センサーや超音波振動子に付いた汚れは、やわらかいブラシまたは綿棒で掃除します。</p>
					  </div>
					</div>
					<h4 class="cleaning01__ttl_m mb2">気化式</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/02/cleaning02-02.png" class="u-img__max mb1_sp" alt="気化式（ヒーターレス）加湿器" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">・タンク…水は毎日取り替えます。タンクに少量の水を入れて振り洗いし、完全に乾かしてから新しい水を入れます。<br>・フィルター…月に1回程度、流水ですすぎ洗いします。加湿気化フィルターはブラシでこすったり、洗濯機で洗ったりせず、水で押し洗いをします。すぐ使う場合はそのまま装着し、長期間使わない場合はよく乾かします。</p>
					  </div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ" style="max-width:280px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl">水垢にはクエン酸、カビ・雑菌には過炭酸ナトリウム！</h5>
						<p class="mb2">水垢が気になるときはクエン酸水溶液を使うことをおすすめします。<strong>水200mlに対してクエン酸小さじ1/2程度</strong>を加えてスプレーボトルに入れ、気になる汚れに吹きかけましょう。フィルターは、同濃度のクエン酸水溶液を多めに作ってつけ置き洗いすると効果的です。</p>
						<p class="mb2">ニオイの原因となるカビや雑菌には、除菌効果のある過炭酸ナトリウム(酸素系漂白剤)を使います。過炭酸ナトリウムは、ホームセンターやドラックストア、量販店などで購入できます。<br>40度くらいのお湯2Lに対して過炭酸ナトリウム大さじ1程度を加えた水溶液に、フィルターやつけ置きできるパーツを30分ほどつけ置きしましょう。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">スチーム式</h4>
				<div class="flex between mb2">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/02/cleaning02-03.png" class="u-img__max mb1_sp" alt="スチーム式/スチームファン式加湿器" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">・タンク…水は毎日取り替えます。取り替える際に、少量の水を入れて振り洗いし、完全に乾かしてから新しい水を入れます。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">ハイブリッド式</h4>
				<div class="flex between">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/02/cleaning02-04.png" class="u-img__max mb1_sp" alt="ハイブリッド式加湿器" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">・タンク…抗菌作用のあるフィルターや水が殺菌されるタンクを使用している製品が多い傾向にあり、週に1度水を交換すればよい製品もあります。特別な製品でない場合は、毎日水を取り替えます。水を交換する際は、振り洗いをしましょう。</p>
            <p class="mb2">・フィルター…掃除は週1回の頻度が目安です。フィルターを外してすすぎ洗いをし、十分乾かします。</p>
						<p class="mb2">・そのほか…トレーは水洗い、フロート周りは細めの綿棒や歯ブラシなどで掃除をします。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb4">
        <h3 class="cleaning01__secttl mb3 center" id="kashitsuki03">きれいな空気を保つために</h3>
				<p class="mb2">加湿器は、室内の乾燥を防ぎ、適度な湿度を保つことで風邪予防になる優れた家電製品です。しかし、使い方を誤ると雑菌とカビの温床になり、掃除をしないまま使い続けると、健康を損ねてしまうこともありえます。</p>
				<p class="mb3">適度な湿度できれいな空気を保つためには、毎日タンクの水を取り替えることが大切です。そして、使用しないときは、カビや雑菌を発生させないために、水を捨てて乾かしておきましょう。</p>
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="換気ダクト清掃できれいな空気をキープ！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb3">換気ダクト清掃できれいな空気をキープ！</h5>
							<p class="mb2">室内の空気は、湿度をコントロールするだけでなく、清潔に保つことが大切です。<br>マンションやアパートなどの集合住宅には、換気をよくするために「換気ダクト」がありますが、内部の汚れは目に見えません。キッチン、浴室、トイレなどの換気ダクトの汚れは、プロに依頼すればスッキリきれいになりますよ。<br>換気ダクトを掃除すれば、お部屋の換気力が大きくアップします。換気ダクトの掃除は、長谷工にお任せください！</p>
						  <div class="center">
								<p class="pr__txt">換気ダクト清掃</p>
								<a href="https://e-suteki.haseko.jp/service/ventilation-duct-cleaning.html" target="_blank" data-ga-click="cleaning02_1" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div class="">
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb koto">
							<div class="inner-border">
								<div>
									<p>わ〜い、嫌なニオイがしなくなった〜！！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>加湿器の中には、タンクが抗菌加工されていて、水の交換が週1程度でよいものもあるニャ<br>それ以外は、毎日取り替えるのが基本だニャ</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>うっかり忘れないように気を付けよう！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>加湿器をしまう前にしっかりお掃除しておけば、次に使うときも安心だね！</p>
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
