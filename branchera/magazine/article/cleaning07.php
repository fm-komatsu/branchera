<?php
//base
include ("../../function.php");
$content = get_id_data('27007');
$pageTtl = 'トイレタンクの掃除方法。部品を傷めない正しい掃除の仕方をご紹介！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'トイレタンクの正しい掃除方法をご紹介！トイレタンクの内部を傷つけない掃除の仕方と手順を解説します。';
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
$release_month ="5";
$release_day ="11";
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/07/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/07/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
        <h2 class="cleaning01__ttl u-font__palt">トイレタンクの掃除方法。部品を傷めない正しい掃除の仕方をご紹介！</h2>
					<p class="cleaning01__desc">トイレタンク内のカビを、部品を傷めずにきれいにする方法をご紹介します。</p>
          <time datetime=”2022年3月31日”>2022年5月11日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>トイレに芳香洗浄剤を使おうと思ったのだけど、タンクに芳香洗浄剤は使用しないようにっていう注意書きがあったんだ<br>トイレタンクの掃除って、どうやるのが正しいの？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>トイレタンクの中には浮き球、ゴムフロートなどのさまざまな部品があって、<strong>芳香洗浄剤や酸性洗剤、アルカリ性洗剤を使うと部品を傷めてしまう可能性がある</strong>ニャ<br>蓋を開けて、タンクの蓋の裏やタンク内側の広い面を掃除するといいニャ！</p>
								</div>
							</div>
						</div>
						<div class="mb3">
							<p>※トイレタンク内の掃除方法を誤ると、漏水につながる恐れもございます。<br>ご自身で掃除をされる場合は、十分にご注意ください。</p>
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
										<li><a data-scroll href="#toilettank01">トイレタンク掃除はなぜ必要？</a></li>
										<li><a data-scroll href="#toilettank02">トイレタンク掃除の注意点</a></li>
										<li><a data-scroll href="#toilettank03">トイレタンクの掃除手順</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="toilettank01">トイレタンク掃除はなぜ必要？</h3>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/07/cleaning07-01@2x.jpg" class="u-img__max mb1_sp" alt="タンク付きの水洗トイレ" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">トイレタンクは湿気が充満しているため、<a href="<?php echo($base_url)?>/magazine/article/cleaning04.php" class="recipe-design__link">カビ</a>や雑菌の温床になりやすい場所です。カビは、栄養源となる汚れや湿度、温度の条件によって発生します。20度～35度くらいの夏場は、特にカビが発生しやすい時期です。しばらく掃除をしないと、タンクの蓋の裏やタンクの壁に大量の黒カビが発生している場合もあります。</p>
							<p class="mt0 mb2">タンクの中はあまり目にする機会がなく、掃除は不要と考える人もいるかもしれません。しかし、せっかく便器をこまめに掃除しても、トイレタンクを掃除しないことで、カビや雑菌、ほこりを含んだ水を流し続けてしまうことになります。</p>
							<p class="mt0 mb2">今回は、トイレタンクの正しい掃除方法をご紹介します。</p>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="toilettank02">トイレタンク掃除の注意点</h3>
					<p class="mb2">タンクの中のカビを見ると、つい洗剤を使って落としたくなりますが、<strong>タンク内に酸性、アルカリ性の洗剤は使えません。</strong></p>
					<p class="mb2">タンク内には樹脂やゴム製、発泡スチロールの部品などがあり、塩素系や酸素系の漂白剤を使用すると部品を傷めてしまいます。また、サビの原因にもなるため、メーカーではトイレタンク内に洗剤を使用することを推奨していません。重曹や酸素系漂白剤もアルカリ性のため、タンク内に入れないようにしましょう。</p>
					<p class="mb2">また、手洗い用水栓口の下に置く芳香洗浄剤の使用も、酸性洗剤やアルカリ性洗剤と同じく、器具を傷めてしまったり、止水不良を起こしてしまったりする可能性があります。</p>
					<div class="flex between mb3">
						<figure class="w50 center">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/07/cleaning07-02@2x.png" class="u-img__max mb1_sp" alt="トイレタンク内部の構造" style="max-width:323px;" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mt0">掃除をする際は、タンク内の部品をつよくこすったり動かしたりしないよう注意をしましょう。タンク内の部品を傷めてしまうと故障につながることもあるので、賃貸の場合は大家さんや管理会社にタンクの蓋を開けて掃除をしてよいか確認をしておくと安心です。</p>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="toilettank03">トイレタンクの掃除手順</h3>
				<p class="level mb2">■所要時間：30分<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：3ヵ月に1回</p>
			  <p class="mb2">掃除方法には、トイレタンク専用の洗浄剤を入れて簡単に掃除を済ませる方法と、蓋を開けてしっかり掃除する方法の2種類があります。<br>タンクの内部がカビだらけの場合は、トイレタンクの蓋を開けてしっかり掃除しましょう。</p>
				<div class="flex between mb3">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/07/cleaning07-03@2x.png" class="u-img__max mb1_sp" alt="トイレの止水栓の位置と閉め方" style="max-width:323px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0">掃除を始める前に、止水栓をマイナスドライバーで閉め、水を止めます。レバーを回して水を流し、タンク内の水を抜きます。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">蓋</h4>
					<div class="mb3">
						<figure class="w50 center u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/07/cleaning07-04@2x.png" class="u-img__max mb1_sp" alt="トイレタンクの蓋の開け方" style="max-width:323px;" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">蓋を外します。手洗い器の付いている蓋は、パイプで接続されているタイプと、給水ホースで接続されているタイプの2種類があります。</p>
							<p class="mt0 mb2">パイプで接続されているタイプは、蓋を真上に持ち上げて外します。<br>給水ホースで蓋とタンクがつながっているタイプは、最初に蓋から給水ホースを外しましょう。蓋とホースがつながる接続部分のナットをドライバーで反時計回りに回すと外れます。</p>
							<p class="mt0 mb2">蓋を浴室に持っていき、中性洗剤を付け、蓋の両面をスポンジでこすって汚れを落とします。細かい所は、歯ブラシを使うとよいでしょう。洗い終わったらしっかりすすぎ、濡れたタオルで拭き、洗剤が残らないようにします。</p>
						</div>
					</div>
				<h4 class="cleaning01__ttl_m mb2">手洗い器</h4>
			  <p class="mb6">手洗い器に付着した<a href="<?php echo($base_url)?>/magazine/article/cleaning01.php" class="recipe-design__link">水垢</a>には、クエン酸水を使用します。</p>
					<div class="mikata mb3">
						<div class="mikata__row">
							<div>
								<h4 class="center mb2">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
									alt="お掃除のミカタ クエン酸水の作り方" style="max-width:278px; margin-top:-40px;" class="u-img__max">
								</h4>
							</div>
							<h5 class="mikata__ttl mb2">クエン酸水の作り方</h5>
							<p class="mb2">スプレーボトルにクエン酸小さじ1/2と水200mlを入れ、ボトルを振ってクエン酸水を作ります。<br>水垢にはクエン酸水が効果的です。水垢汚れはアルカリ性のため、同じアルカリ性の重曹水では効果がありません。</p>
							<p class="mb2"><strong>クエン酸水がタンク内に流れ込まないよう、水栓穴を塞いでから掃除をするか、タンクの蓋を外して浴室に持っていき掃除</strong>をしましょう。<br>クエン酸水を水受けに付いた水垢に吹き付け、数分置いてからスポンジでこすり落とします。</p>
						</div>
					</div>

					<h4 class="cleaning01__ttl_m mb2">タンク内</h4>
					<p class="mb2">中性洗剤を付けたスポンジで、タンク内側の広い面をこすり洗いします。<br>次に、柄の長いブラシと歯ブラシを使って、パイプや部品の汚れを落としていきます。<br>タンクの底の汚れに洗剤をかけて、ブラシでこすり洗いします。</p>
					<p class="mb2">汚れが落ちたら止水栓を少し緩めて、水を出しましょう。その後、洗浄レバーを回し、洗剤が残らないよう、水でよく洗い流します。<br>洗剤の使用については、メーカーにより禁止事項が異なるため、取扱説明書を確認するようにしてください。</p>
					<p class="mb2">蓋を戻し、止水栓を元に戻せば、トイレタンク掃除の完了です。</p>
			</section>
			<section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="トイレをリフォームして節約を" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">トイレをリフォームして節約を</h5>
							<p class="mb2">水の使用量が多いトイレを新しい設備に替えると、水の使用量が減り、水道料金の節約になります。今人気のタイプは、節水機能付きトイレです。トイレ本体の交換推奨年数は20年前後。<br>現在の設備を長く使用されている方は、ぜひ本体交換も検討してみてくださいね。</p>
						  <div class="center">
								<p class="pr__txt">トイレ・洗面所リフォーム</p>
								<a href="<?php echo $base_url; ?>/smile/article/hcm-toilet.php" data-ga-click="cleaning07_2" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>タンクの中がきれいになって、スッキリした気分♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>トイレタンクまで掃除をしたことがなかったけど、汚れてたんだね<br>これからはトイレタンクの掃除を定期的にしなくちゃ<br>次はぼくが掃除をするよ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb0 kirari">
							<div class="inner-border">
								<div>
									<p>トイレタンクの掃除には簡単な方法もあるから、心がけて掃除してきれいなトイレをキープしてほしいニャ</p>
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
