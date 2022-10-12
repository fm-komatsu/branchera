<?php
//base
include ("../../function.php");
$content = get_id_data('27023');
$pageTtl = '油汚れの落とし方・場所別の掃除方法と汚れを予防するアイデア ';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '油汚れの落とし方と場所別の掃除方法、汚れ対策をご紹介！油汚れの性質や、重曹や洗剤を用いた油汚れの落とし方を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/23/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/23/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
				<p class="cleaning01__desc">キッチンや食卓などにこびり付いた油汚れの落とし方をご紹介します。</p>
				<time datetime="2022年10月12日">2022年10月12日</time>
				<hr class="cleaning01__line">
				<div class="cleaning_comment">
					<div class="question">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
					</div>
					<div class="balloon balloon_maxborder mb seiji">
						<div class="inner-border">
							<div>
								<p>ほこりを掃除するのは簡単だけど、油汚れって頑固で落としにくいよね〜。どうすれば上手に落とせるのかな？</p>
							</div>
						</div>
					</div>
					<div class="answer">
						<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
					</div>
					<div class="balloon balloon_maxborder-r mb kirari_r">
						<div class="inner-border_r">
							<div>
								<p><strong>油汚れは酸性だから、アルカリ性の洗剤で中和すると落としやすくなるニャ！</strong>レンジフード、食卓まわりの床など、油汚れが付いている場所に応じた方法で掃除していこうニャ〜</p>
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
									<li><a data-scroll href="#aburayogore01">油汚れの特徴を知ろう</a></li>
									<li><a data-scroll href="#aburayogore02">場所別の落とし方</a></li>
									<li><a data-scroll href="#aburayogore03">油汚れのこびり付きを予防するには？</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="main__item mb8 mb4_sp">
				<h3 class="cleaning01__secttl mb3" id="aburayogore01">油汚れの特徴を知ろう</h3>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/23/cleaning23-01@2x.jpg" class="u-img__max mb1_sp" alt="唐揚げの調理" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">キッチンや食卓などに付きやすい油汚れは、こびり付いて固まったり、布類に染み込んだりして落としにくいのが悩みどころ。上手に落とすには、まず油汚れの特徴を把握しましょう！</p>
					</div>
				</div>

				<h4 class="cleaning01__ttl_m mb2">油汚れの原因</h4>
				<p class="mb3">油汚れの多くは、調理中の油が跳ねたり、食べ物に含まれる油が付いたりするのが原因です。<br>また、よく触る場所に皮脂が付くのも、油汚れの一種といえます。</p>
				
				<h4 class="cleaning01__ttl_m mb2">油汚れが多い場所</h4>
				<p class="mb2">家の中で油汚れが付きやすいのは、次のような場所です。</p>
				<p class="mb2">●キッチン…レンジフード、換気扇、ガスコンロなど<br>●床…食卓のまわりの食べ物が落ちやすい部分、リビングや廊下など<br>●壁…キッチン内のほか、スイッチのまわりなどよく触る部分<br>●布類…カーテン、ソファカバーなど</p>
				<p class="mb3">これらの部分を重点的に掃除すると、汚れもベタつきもスッキリして、快適な空間になりますよ！</p>
				
				<h4 class="cleaning01__ttl_m mb2">油汚れの性質</h4>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/23/cleaning23-02@2x.jpg" class="u-img__max mb1_sp" alt="アルカリ性の洗剤" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">皮脂も含めた油汚れは、酸性の汚れです。そのため、掃除にはアルカリ性の洗剤を使うと中和されて落としやすくなります。アルカリ性の洗剤に挙げられるのは、重曹、セスキ炭酸ソーダ、せっけんなどです。</p>
					</div>
				</div>
				<p class="mb2">また、中性洗剤（市販の台所用洗剤）は重曹やせっけんより油汚れへの作用が強いので、こちらを使ってもきれいに落とせます。</p>
				<p class="mb3">ほかに、油汚れには「冷えると固まり、温めるとゆるむ」という性質もあります。<br>たとえば、キッチンの油汚れは調理の余熱が残っているうちにすぐ掃除すれば、ゆるんでいるので落とすのがラクです。逆に、冷えて固まると落としにくく、周囲のほこりと結び付いてべっとりこびり付いたりするとさらに落としづらくなってしまうので注意が必要です。</p>
			</section>
			<section class="main__item mb8 mb4_sp">
				<h3 class="cleaning01__secttl mb3" id="aburayogore02">場所別の落とし方</h3>
				<p class="mb3">油汚れが付きやすい場所である「キッチン」「床」「壁」「布類」について、それぞれの油汚れの落とし方をご紹介します！</p>
				
				<h4 class="cleaning01__ttl_m mb2">キッチン</h4>
				<p class="mb3">調理を行なうキッチンは、最も油汚れが付きやすい場所です。パーツごとに分けて、丁寧に汚れを落としていきましょう。</p>
				<p class="">●<a href="<?php echo $base_url?>/magazine/article/cleaning03.php" data-ga-click="cleaning23_1">レンジフード・換気扇</a></p>
				<p class="level mb3">■所要時間（置き時間も含む）：1時間～<br>■難易度：★★★★☆<br>■掃除頻度の目安：2ヵ月に1回</p>
				<p class="mb2">掃除を始める前に、レンジフード下のコンロ台や床を新聞紙やビニールなどで養生し、汚れが垂れ落ちるのを防ぎましょう。また、安全のために電源プラグを抜き、取扱説明書を手元に用意してください。</p>
				<p class="mb2">換気扇は、ファンとフィルターを外してつけ置き洗いします。<br>シンクにお湯をため、市販の台所用洗剤かせっけん（大さじ2～3）、または重曹（大さじ2～3）を適宜溶かし、ファンとフィルターをつけ置きします。排水口がせき止められない場合は、ごみ袋の中でお湯と洗剤を溶かしましょう。お湯が冷めたら、ゆるんだ汚れを歯ブラシやスポンジでこすり落とします。</p>
				<p class="mb2">レンジフードは拭き掃除で汚れを落とします。<br>上記の洗剤液に浸した雑巾やキッチンペーパーで汚れを拭き取り、仕上げに固く絞った雑巾で水拭きしましょう。</p>
				<p class="">●<a href="<?php echo $base_url?>/magazine/article/cleaning17.php" data-ga-click="cleaning23_2">ガスコンロ</a></p>
				<p class="level mb3">■所要時間：20分～<br>■難易度：★★★★☆<br>■掃除頻度の目安：毎日</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/23/cleaning23-03@2x.jpg" class="u-img__max mb1_sp" alt="ガスコンロの部品の名称" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">ガスコンロは、「五徳」「バーナー」「天板」「排気カバー」「グリル」とパーツごとに分けて掃除を行ないます。どのパーツにも重曹が使えますが、アルミ素材の場合は変色の恐れがあるため、中性洗剤を使いましょう。</p>
					</div>
				</div>
				<p class="mb3">・五徳…水と重曹大さじ3杯を入れた鍋につけて沸騰させ、お湯が冷めたらスポンジで汚れをこすり落とします。<br>・バーナー…五徳と同様に水と重曹大さじ3杯をいれた鍋につけて沸騰させ、お湯が冷めたら歯ブラシで汚れをこすり落とします。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/23/cleaning23-04@2x.jpg" class="u-img__max mb1_sp" alt="天板の掃除方法" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">・天板…40度くらいのお湯200mlに重曹小さじ1/2杯を加えた重曹水を作り、キッチンペーパーを浸して天板に貼り付けます。10分置いたら汚れを拭き取り、仕上げに水拭きしましょう。アルミ素材の場合は、水200mlに中性洗剤小さじ1を溶かし、天板にかけてスポンジでこすります。仕上げは水ですすぎましょう。</p>
					</div>
				</div>
				<p class="mb3">・排気カバー…せっけんを含ませたスポンジでこすって洗い落とします。落ちにくい場合は、シンクに高温のお湯をためてせっけんを溶かし、つけ置き洗いしましょう。<br>・グリル…お湯をかけて汚れをゆるめ、重曹を振りかけます。熱が冷めたらスポンジで汚れをこすって洗い落とします。グリル内の汚れは重曹水で拭き取り、前面のパネルは重曹水に浸したキッチンペーパーで15分程度パックしてから水拭きしましょう。</p>
				
				<h4 class="cleaning01__ttl_m mb2">床</h4>
				<p class="level mb3">■所要時間（置き時間も含む）：30分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：週に1回</p>
				<p class="mb2">床の油汚れは、食べ物を落としたときの汚れや皮脂によるもの。黒ずみやベタつきになってしまっている部分には、重曹水やセスキ炭酸ソーダ水が効果的です。</p>
				<p class="mb3">まず、ドライシートを付けたフローリングワイパーでほこりを取り除き、次に掃除機をかけて細かなほこりも吸い上げます。その後、濃度1％の重曹水（2Lのお湯に対して重曹小さじ5杯）でマイクロファイバークロスを10枚〜20枚ほどまとめて絞り、床を拭きましょう。重曹水を使った拭き掃除の場合、仕上げの水拭きは不要です。床が無垢材の場合は、水を固く絞って水拭きを行ないます。コーティングをしていない場合は、水分を含んでしまうと床材がゆがんでしまうため乾拭きにとどめましょう。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/23/cleaning23-05@2x.jpg" class="u-img__max mb1_sp" alt="黒ずみの掃除方法" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb3 mt0">黒ずみが落ちにくい部分には、スプレーボトルにセスキ炭酸ソーダ水（水200mlに対して、セスキ炭酸ソーダ小さじ1/2杯）を作り、吹きかけてから水拭きします。</p>
					</div>
				</div>
				<p class="mb3">セスキ炭酸ソーダ水を使った拭き掃除の後は、必ず仕上げの水拭きを行ない、セスキ炭酸ソーダ水が残らないようにしてください。重曹よりアルカリ性が強いため、残ると素材を傷めたり、肌にも影響が出たりする心配があります。</p>

				<h4 class="cleaning01__ttl_m mb2">壁</h4>
				<p class="level mb3">■所要時間（置き時間も含む）：15分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：気になったとき</p>
				<p class="mb2">キッチンの壁の油跳ね、またスイッチのまわりに多い黒ずみには、重曹水やセスキ炭酸ソーダ水を使いましょう。</p>
				<p class="mb3">床と同じく、濃度1％の重曹水をマイクロファイバークロスに含ませ、壁の気になる部分を拭き上げます。汚れが落ちにくい場合は、これも床と同じくセスキ炭酸ソーダ水を吹きかけ、水拭きしましょう。</p>

				<h4 class="cleaning01__ttl_m mb2">布類</h4>
				<p class="level mb3">■所要時間（置き時間も含む）：10分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：付いてしまったとき</p>
				<p class="mb2">「家で揚げ物や焼き肉をした後、室内の油のニオイが気になる」というときは、カーテンやソファカバーなどの大きな布類が油を吸ってしまっている場合があります。</p>
				<p class="mb3">このような、すぐに洗濯できないものの応急処置には重曹水（お湯200mlに対して重曹小さじ1/2）を使いましょう。スプレーすると、布の上の油汚れを中和してくれます。</p>
			</section>
			<section class="main__item mb3">
				<h3 class="cleaning01__secttl mb3" id="aburayogore03">油汚れのこびり付きを予防するには？</h3>
				<p class="mb2">毎日の生活のなかで、油汚れはどうしても避けられないもの。ですが、次のような対策を行なうと、こびり付いて落としにくくなるのを予防できますよ。</p>
				<p class="">●ガスコンロ</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/23/cleaning23-06@2x.jpg" class="u-img__max mb1_sp" alt="ガスコンロの油汚れ防止方法" style="max-width:322px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0">周囲に油汚れ防止シートを貼るか、油跳ねガードを設置してみましょう。気付きにくい細かな油跳ねまでカバーできて安心です。</p>
					</div>
				</div>
				<p class="mb3">●換気扇<br>換気扇に油汚れがこびり付くと、吸い込みが悪くなって油を含んだ蒸気がこもったり、リビングへ流れ込んだりする原因になります。換気扇フィルターはこまめに取り替えること、そして換気扇の掃除をなるべく頻繁に行なうことで、吸気効率が下がるのを防げます。</p>
				<p class="mb3">●キッチンの床<br>油が跳ねたり、食べ物が落ちたりと油汚れが付きやすいキッチンの床。マットを敷きがちですが、油で汚れたマットを頻繁に洗濯する手間がかかってしまいます。それよりは、ウェットタイプのシートを付けたフローリングワイパー、あるいはマイクロファイバークロスを取り付けられるワイパーで、拭き掃除をこまめに行なうほうがラクですよ。</p>
			</section>
			<section class="main__item mb4">
			<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="換気扇汚れは長谷工にお任せ！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">換気扇汚れは長谷工にお任せ！</h5>
							<p class="mb2">レンジフードや換気扇は、汚れやすいのに掃除が難しい場所のひとつですよね。自分で掃除するのが難しい部分は、プロに依頼するのもおすすめ！長谷工がご案内しているハウスクリーニングでは、可能な限り部品を分解し、専用洗剤で1つひとつ丁寧に洗浄します。ぜひ、お気軽にご相談ください！ </p>
							<div class="center">
								<p class="pr__txt">キッチンクリーニング</p>
								<a href="https://e-suteki.haseko.jp/house_cleaning/kitchen-fan-cleaning.html" target="_blank" data-ga-click="pr_cleaning23" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>見て！油汚れの特徴と正しい掃除方法が分かったら、こんなにきれいに落とせた〜♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>でも、時間が経ったものは落とすのが大変だったね〜</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb kirari">
							<div class="inner-border">
								<div>
									<p>油汚れはスピード勝負！付いたらなるべくすぐ拭き取ると、後がラクなんだニャ</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>特に汚れやすいキッチンは、使ったらまわりをさっと掃除するのを習慣にしたいね！</p>
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
