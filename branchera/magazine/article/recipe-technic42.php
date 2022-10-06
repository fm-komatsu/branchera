<?php
//base
include( "../../function.php" );
$content = get_id_data( '15042' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'しいたけは石づきを切り、縦4等分にします。三つ葉は3cmくらいの長さに切ります。';
$altCap02 = '鍋にだし汁を入れて、中火でひと煮立ちさせます。その後は強く煮立て続けるのではなく、沸騰直前くらいのフツフツとした状態を保ちましょう。';
$altCap03 = 'しいたけを加えて、2～3分煮ます。';
$altCap04 = 'だし汁に薄口醤油と塩を入れて味付けし、火を止めます。ちなみに、人が美味しく感じる塩分濃度は約1％といわれますが、すまし汁の場合は少し薄めの0.8～0.9％がベスト。';
$altCap05 = '手まり麩を入れて混ぜて、器に盛ります。';
$altCap06 = '器に盛り付け、最後に三つ葉、柚子の千切りをあしらってでき上がりです。';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
		include( $inc_path . "/lib/inc/pan.php" );
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
		?>
		<section class="main__wrapper recipe">
			<div class="recipe__header recipe-header technic">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">　</span>
					<span class="recipe-header__ttl">すまし汁の作り方</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第42回は「すまし汁の作り方」です。基本のすまし汁の作り方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>マユ先生、前に教えていただいた味噌汁はだいぶ上達してきたので、<br class="u-only__pc">ほかにも簡単に作れる汁物を教えてほしいです！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>勉強熱心でいいですね！<br>汁物でしたら、すまし汁はどうですか？</p>
				</div>
			</div>

			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>すまし汁って何ですか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>すまし汁は、だし汁を塩や醬油などで味付けした汁物のことで、<br class="u-only__pc">漢字では「清汁」と書きます<br>「お吸い物」といわれてイメージするような透明の汁物のことですよ</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>なるほど！あれをすまし汁というんですね</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>すまし汁の作り方はとてもシンプルで、<br class="u-only__pc">だしさえあれば身近な食材を入れて手軽に作ることができます</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>シンプルな料理を美味しく作ることができたらかっこいいですよね<br>早速、教えてください！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/Wuv0b2HLTGc?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">美味しいすまし汁の作り方</h3>
				<p>澄んだスープが上品なすまし汁。お正月・ひなまつりなどのハレの日、来客時の食事など、華やかな場に欠かせないすまし汁は、家庭でも簡単にできる日本料理です。だし汁のとり方を覚えてしまえば、具材を変えていくだけで、バリエーション豊富なすまし汁を作ることができます。料亭のような美味しいすまし汁にぜひチャレンジしてください。</p>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">すまし汁の材料（2人分）</h3>
					<dl class="recipe-design__materials">
						<dt>しいたけ</dt>
						<dd>2個</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>三つ葉</dt>
						<dd>10g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>手まり麩（ふ）</dt>
						<dd>6個</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>柚子の千切り</dt>
						<dd>少々</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>だし汁</dt>
						<dd>2カップ（今回はかつおだしを使用）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>薄口醤油</dt>
						<dd>小さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩</dt>
						<dd>小さじ1/4</dd>
					</dl>
				</div>
				<div class="recipe-design__howto mb3">
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap01); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?>
						</dd>
					</dl>
					<div class="recipe-design__check check">
						<div class="check__row">
							<div class="check__ttl">
								<h4 class="check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
									alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
								</h4>
							</div>
							<h5>すまし汁に使うだしの種類</h5>
							<p>すまし汁を作るときに重要なのが、“美味しいだし汁“を使うこと。ここでは、すまし汁で使われるだしの種類をお伝えします。よく使われるのは「かつおだし」と「かつお昆布だし」ですが、ほかのだし汁でも作ることができます。具材や好みに合わせて、いろいろなだし汁を試してみてくださいね。</p>
							<dl class="mb1">
								<dt>● <a href="<?php echo $base_url?>/magazine/article/recipe-technic06.php#katsuo-dashi" class="recipe-design__link">かつおだし</a></dt>
									<dd>かつおの香りとうまみが濃縮されたかつおだしは、すまし汁のだしにぴったりです。</dd>
							</dl>
							<dl class="mb1">
								<dt>● <a href="<?php echo $base_url?>/magazine/article/recipe-technic06.php#katsuo-kombu-dashi" class="recipe-design__link">かつお昆布だし</a></dt>
									<dd>かつおから出るイノシン酸と昆布から出るグルタミン酸の、二種類のうまみ成分がミックスされているため、味のバランスがよくすまし汁にも多く用いられます。</dd>
							</dl>
							<dl class="mb1">
								<dt>● <a href="<?php echo $base_url?>/magazine/article/recipe-technic05.php#kombu-dashi" class="recipe-design__link">昆布だし</a></dt>
									<dd>上品でやさしい味わいの昆布だしは、具材の味を引き立てます。</dd>
							</dl>
							<dl>
								<dt>● <a href="<?php echo $base_url?>/magazine/article/recipe-technic07.php#niboshi-dashi" class="recipe-design__link">にぼしだし</a></dt>
									<dd>「いりこだし」とも呼ばれるにぼしだしは、しっかりと魚の風味が感じられるため、味が引き締まるのが特徴です。</dd>
							</dl>
						</div>
					</div>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap03); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/tech42-06@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap06); ?>
						</dd>
					</dl>
					<div class="recipe-design__check check mb3">
						<div class="check__row">
							<div class="check__ttl">
								<h4 class="check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
									alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
								</h4>
							</div>
							<p>すまし汁によく用いられる具材には、しいたけ、手まり麩のほか、はまぐりやあさり、えびなどの魚介類や、豆腐、わかめが挙げられます。そのほか、ほうれん草、菜の花などの葉物もよく使われます。かまぼこ、えびしんじょう、鶏団子などの練り物は歯ごたえも加わりおすすめの具材です。</p>
						</div>
					</div>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h4 class="plus1__ttl">すまし汁とお吸い物の違いとは？</h4>
							<p>すまし汁とお吸い物。どちらも和食のスープですが、どのような違いがあるのか気になりませんか？<br>すまし汁は、だし汁に醤油、塩で味付けた澄んだ汁物のこと。具材の有無にかかわらず、すまし汁といいます。</p>
							<p>一方、お吸い物は、すまし汁、お味噌汁、豚汁、お雑煮、卵とじ汁などの総称です。醤油、塩、味噌などで味付けをして、野菜、魚介、肉などの具材を入れた汁物を指します。<br>つまり、「すまし汁はお吸い物の一種」だといえますね。</p>
						</div>
					</div>
					<h3 class="recipe__ttl_l">すまし汁の人気レシピ</h3>
					<p>すまし汁のレシピをいくつか覚えるだけで、料理のレパートリーの幅がぐんと広がり、食卓も上品に華やぎます。代表的なレシピをお伝えしましょう。</p>
					<div class="mb2">
						<h4>お麩とはまぐりのすまし汁</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular01@2x.jpg"
									alt="お麩とはまぐりのすまし汁" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>ひなまつりに欠かせない、はまぐりのすまし汁。作り方はとてもシンプルです。<br>砂抜きと水洗いしたはまぐり、水、昆布を鍋に入れて火にかけます。煮立ったら昆布を取り出し、アクを取り除きましょう。そこに酒、塩を加えて味をととのえます。<br>最後にはまぐり、お湯で戻した麩をお椀に盛り、三つ葉を添えてでき上がり！<br>さらに、塩ゆでした菜の花を入れると春らしい一品に仕上がりますよ。</p>
					</div>
					<div class="mb2">
						<h4>卵のすまし汁</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular02@2x.jpg"
									alt="卵のすまし汁" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>あらかじめ先に<a href="<?php echo $base_url?>/magazine/article/recipe-technic06.php#katsuo-kombu-dashi" class="recipe-design__link">かつお昆布だし</a>を作り、塩で味をととのえておきましょう。<br>溶きほぐした卵に水溶き片栗粉を混ぜ、沸騰しただし汁に回し入れると、ふわふわした食感の卵のすまし汁ができ上がります。お好みでねぎや三つ葉をのせると風味が増し、ひと味違った味わいに。</p>
					</div>
					<div class="mb2">
						<h4>そうめんのすまし汁</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular03@2x.jpg"
									alt="そうめんのすまし汁" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>鍋にだし汁、酒、みりん、塩、薄口醤油を加え、強火にかけます。煮立ったら、半分に折ったそうめんを加え、しいたけ、しょうがなどお好みの具材を加えます。火が通ったら、刻み三つ葉やねぎを加えて器に盛り、完成！</p>
					</div>
					<div class="mb2">
						<h4>お雑煮</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/42/technic42_popular04@2x.jpg"
									alt="お雑煮" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>お正月の定番、お雑煮。地域によってお餅の形や、具や汁の味付けが異なりますが、関東ではすまし汁の中に角餅を入れたお雑煮が主流です。<br>だし汁に短冊切りのだいこん、にんじんを入れ、煮立てた後に、塩と薄口醤油で味をととのえます。湯にさっと通した鶏肉をだし汁に加え火が通ったら、お椀に焼いた角餅、鶏肉、だいこん、にんじん、そのほか、かまぼこ、塩ゆでしたほうれん草、三つ葉、ゆずを盛り付け、すまし汁を注いででき上がりです。</p>
					</div>

				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>やさしい味が染みますね…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>すまし汁のポイントは、だし汁を煮立て続けないことです<br>具材を入れてからは、フツフツと波打つ程度の弱火を保つようにしてくださいね</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>すまし汁は火加減が大事ってことですね！<br>すまし汁はアレンジもできて、バリエーション豊かな食卓になりそうです♪</p>
				</div>
			</div>
			<div class="mb0">
				<?php
				include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
			?>
			</div>
		</section>
	</article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
	$toindex_url = "/magazine/index_comic02.php";
	include( $inc_path . "/lib/inc/toindex__magazin.php" );
	?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
