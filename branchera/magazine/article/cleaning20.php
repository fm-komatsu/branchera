<?php
//base
include ("../../function.php");
$content = get_id_data('27020');
$pageTtl = '洗面台の掃除方法！水垢やもらいサビをきれいに落とすには？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '洗面台の掃除方法を解説！毎日の掃除方法や汚れが目立つときの掃除方法をご紹介します。また、洗面台掃除に適した洗剤を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/20/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/20/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">洗面台の水垢やもらいサビを落とす掃除方法をご紹介します。</p>
          <time datetime=”2022年8月31日”>2022年9月14日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>洗面台のボウルやふちの汚れって、こすっても全然落ちない！<br>汚れがだんだんひどくなってきて憂鬱だよ〜</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p><strong>洗面台の主な汚れは水垢！落とすにはクエン酸を使う</strong>のがコツなのニャ<br><strong>そのほかの汚れも、それぞれに適した洗剤を使う</strong>と効果的だニャ〜</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:203px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:206px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#senmendai01">洗面台の汚れの種類</a></li>
										<li><a data-scroll href="#senmendai02">洗面台の掃除に適した洗剤は？</a></li>
										<li><a data-scroll href="#senmendai03">洗面台掃除の仕方</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="senmendai01">洗面台の汚れの種類</h3>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/20/cleaning20-01@2x.jpg" class="u-img__max mb1_sp" alt="洗面台" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3">洗顔、歯磨き、ヘアセットなどを行なう洗面台は、汚れの種類もさまざま。単にこすっても落ちない汚れがあるのは、このためです。掃除を始める前に、洗面台の汚れの種類について見ていきましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">主な汚れは水垢</h4>
				<p class="mb2">洗面台の汚れのなかでも、特に多いのは水垢です。洗面ボウル、蛇口、鏡など、水がはねやすい場所によくこびり付きます。</p>
				<p class="mb3">この<a href="<?php echo $base_url?>/magazine/article/cleaning01.php" data-ga-click="cleaning20_1">水垢</a>の正体は、水道水に含まれるマグネシウムやカルシウムなどです。水滴が付いて蒸発すると、これらのミネラル分が残って水垢になるのです。水垢は白い塊状のほか、汚れが付着して茶色になっている場合もあります。</p>
        <h4 class="cleaning01__ttl_m mb2">そのほかの汚れ</h4>
				<p class="mb2">水垢以外に付く洗面台の汚れには、次のようなものがあります。</p>
				<dl class="mb2">
					<dt>●皮脂、髪の毛</dt>
					<dd>手洗いや洗顔などを行なう場所なので、お風呂と同じような汚れも多く見られます。</dd>
			  </dl>
				<dl class="mb2">
					<dt>●サビ</dt>
					<dd>茶色い汚れのようなサビが、洗面台のふちに見られることもあります。原因は、置きっ放しにしたヘアピンやカミソリなどの金属類。これらから出たサビが洗面台に付着したものは、「もらいサビ」とも呼ばれます。</dd>
			  </dl>
				<dl class="mb2">
					<dt><a href="<?php echo $base_url?>/magazine/article/cleaning05.php" data-ga-click="cleaning20_2">●ほこり</a></dt>
					<dd>鏡周りの収納部分や照明器具、洗面台と壁の間などには、ほこりがたまりがち。普段あまり触らない、高所や隙間には要注意です。</dd>
			  </dl>
				<dl class="mb2">
					<dt><a href="<?php echo $base_url?>/magazine/article/cleaning04.php" data-ga-click="cleaning20_3">●黒ずみ（カビ）</a></dt>
					<dd>洗面台横の壁、コーキング（ゴムパッキン）部分などによく見られる黒ずみの正体はカビです。水気が残りやすい部分には、黒カビが生えやすくなります。</dd>
			  </dl>
				<dl class="mb2">
					<dt>●ぬめり</dt>
					<dd>排水口や排水栓には、不快なぬめりが付きがち。原因は、皮脂や石鹸カス、クレンジング剤などと考えられます。</dd>
			  </dl>
				<dl class="mb2">
					<dt>●詰まり</dt>
					<dd>手の届かない排水管の中には、さまざまな種類の汚れが詰まっていることも。水の流れが悪いと感じたら、詰まりがあるサインです。</dd>
				</dl>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="senmendai02">洗面台の掃除に適した洗剤は？</h3>
				<p class="mb3">種類が多い洗面台の汚れを落とすには、汚れごとに適した洗剤を使い分けるのがポイントです！おすすめの洗剤の特長と効果は、次の通りです。</p>
        <h4 class="cleaning01__ttl_m mb2">クエン酸</h4>
				<p class="mb3">クエン酸は、主に水垢を落とすのに適しています。水垢はアルカリ性の汚れなので、酸性の洗剤で中和すると落としやすくなるためです。酢でも同じような効果が得られますが、刺激臭がしないクエン酸のほうが掃除には使いやすいでしょう。<br>ほかに、もらいサビにもクエン酸水とメラミンスポンジが使えます。</p>
        <h4 class="cleaning01__ttl_m mb2">重曹</h4>
				<p class="mb2">アルカリ性の重曹は、クエン酸を合わせると発泡し始めます。この発泡する作用は、排水管の詰まりを解消するのに効果的です。重曹の代わりに、詰まり専用の液体パイプクリーナーを使用してもよいでしょう。ただし、パイプクリーナーは効果が強力なので、使用上の注意をよく読んでから使うようにしましょう。</p>
				<p class="mb3">また、重曹はアルカリ性なので、酸性の皮脂汚れを落とすのにも適しています。粒子が細かく水に溶けにくい特長を利用して、皮脂汚れやぬめりを磨き落とすクレンザー代わりに使うのもおすすめです。</p>
				<h4 class="cleaning01__ttl_m mb2">塩素系漂白剤</h4>
				<p>黒ずみのように見えるカビには、市販の塩素系漂白剤を使いましょう。カビは汚れではなく菌なので、強力な除菌効果がある専用洗剤が適しています。</p>		
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/20/cleaning20-02@2x.jpg" class="u-img__max mb1_sp" alt="塩素系漂白剤と酸性洗剤" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3">ただし、クエン酸のような酸性の洗剤と混ざると有毒ガスが発生する危険があるため、同時に使うのは避けてください。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="senmendai03">洗面台掃除の仕方</h3>
				<p class="mb3">洗面台は、毎日の軽い汚れを落とす掃除と、手ごわい汚れを落とす掃除の2パターンできれいな状態をキープできます。<br>それぞれの具体的な方法についてご紹介しましょう！</p>
        <h4 class="cleaning01__ttl_m mb2">毎日の掃除</h4>
				<p class="level mb2">■所要時間（置き時間も含む)：5分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：毎日</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/20/cleaning20-03@2x.jpg" class="u-img__max mb1_sp" alt="洗面台掃除" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2 mt0">排水口の髪の毛や大きなゴミを取り除き、スポンジや雑巾で洗面ボウルをこすり洗いします。このとき、クレンザー代わりに重曹をスポンジや雑巾に付けると、目に見えにくい皮脂汚れも落とせますよ。</p>
						<p class="mb3">最後に、洗面ボウルや周囲の水滴をよく拭き取りましょう。こうすると、水垢やカビを防げます。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">気になったときの掃除</h4>
				<p class="level mb2">■所要時間（置き時間も含む)：15分～<br>■難易度：★★★★★<br>■掃除頻度の目安：気になったとき</p>
        <dl class="mb2">
          <dt>●水垢</dt>
          <dd>洗面ボウルに付いた水垢は、全体にクエン酸水（水200mlに対してクエン酸小さじ1/2）をスプレーして雑巾やクロスで拭き上げます。蛇口や水栓周りにこびり付いた頑固な水垢には、クエン酸水パックがおすすめです。</dd>
        </dl>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/20/cleaning20-04@2x.jpg" class="u-img__max mb1_sp" alt="クエン酸を使った掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">クエン酸水をスプレーし、その上からキッチンペーパーで包んでさらにスプレーします。5分置いたら、水拭きした後、乾拭きで仕上げましょう。鏡に付いたうろこ状の水垢も、クエン酸水パックをしてスポンジでこすり洗いし、乾拭きで仕上げます。</p>
					</div>
				</div>
			</section>
			<section class="main__item mb3">
				<div class="urawaza mb3">
					<div class="urawaza__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
								alt="クエン酸以外に使えるものは？" style="max-width:254px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="urawaza__ttl">頑固な水垢をゆるめるクエン酸水パック</h5>
						<div class="flex between">
							<figure class="w30 mt2 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<div class="w70 mt2">
								<p>クエン酸水をスプレーするだけでは落ちにくい水垢には、パックがおすすめニャ！クエン酸水が水垢にしっかり密着するから、頑固な水垢もゆるみやすくなるのニャ〜♪</p>
							</div>
						</div>
					</div>
				</div>
        <dl class="mb2">
          <dt>●サビ</dt>
          <dd>洗面台に付いてしまったもらいサビには、クエン酸水パックが効果的です。<br>サビ部分にクエン酸水をスプレー、その上からキッチンペーパーで包んでさらにスプレーします。5分置いたら、メラミンスポンジでやさしくこすり落とします。水ですすいだ後、乾拭きで仕上げましょう。
					</dd>
        </dl>
        <dl class="mb2">
          <dt>●ほこり</dt>
          <dd>高い所、狭い隙間などにたまったほこりは、ハンディモップで吸着させるようにして払います。照明カバーや収納などに軽い汚れが付いていたら、濡らして固く絞った雑巾で拭き取りましょう。
					</dd>
        </dl>
        <dl class="mb2">
          <dt>●カビ</dt>
          <dd class="mb2">コーキング（ゴムパッキン）部分にポツポツと見える黒いカビには、ジェルタイプの塩素系漂白剤を使いましょう。あらかじめコーキングの水気をよく拭き取り、洗剤が薄まるのを防ぐのがポイントです。</dd>
          <dd class="mb2">洗面台横の壁に生えたカビの場合、水をはじく壁紙であればスプレータイプの塩素系漂白剤が使えますが、それ以外のものには使用できません。壁紙を傷めないよう、専門の業者やプロなどに相談するのがおすすめです。</dd>
        </dl>
        <dl class="mb2">
          <dt>●ぬめり</dt>
					<div class="mb3 flex">
						<figure class="w50 center">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/20/cleaning20-05@2x.jpg" class="u-img__max mb1_sp" alt="排水口掃除" style="max-width:320px;" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">排水口のぬめりは、歯ブラシや排水口用ブラシでこすり洗いします。手が届きやすい部分は歯ブラシでこすり、排水口の奥は市販の排水口用ブラシを使うと簡単に届きます。</p>
						</div>
					</div>
        </dl>
        <dl class="mb2">
          <dt>●詰まり</dt>
          <dd><a href="<?php echo $base_url?>/magazine/article/cleaning11.php#haisuiko02" data-ga-click="cleaning20_4">排水管の詰まり</a>は、重曹＋クエン酸の発泡作用で一掃しましょう。<br>排水口に、重曹を1/2～1カップ振りかけます。鍋に2L以上のお湯を沸かし、クエン酸大さじ2杯程度を溶かしたら、重曹を振りかけた排水口に注ぎます。泡の力で汚れがはがれて浮いてきたら、最後に水を流しましょう。</dd>
        </dl>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>洗面台がピカピカになって気持ちいい〜！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>鏡もよく見えるね♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb kirari">
							<div class="inner-border">
								<div>
									<p>毎日、大まかなゴミを取って水気を拭くだけで、きれいな洗面台をキープできるし掃除も楽になるのニャ</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>なるほど〜<br>家族それぞれ、洗面台を使った後の習慣にしたいね！</p>
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
