<?php
//base
include( "../../function.php" );
$content = get_id_data( '15044' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '海苔の長辺を二つ折りにして切り離します。';
$altCap02 = '巻き簾を広げ、海苔をのせます。このとき、光沢のあるほうを下にします。海苔の上に、酢飯70～100gを広げます。海苔の巻き終わりが1cmほど残るようにしてください。';
$altCap03 = '広げた酢飯の中央に、具を置きます。';
$altCap04 = '巻き簾ごと、二つ折りにするように巻いていきます。1周巻いたら、片手で巻き簾を握って手前に軽く引きつつ、もう片方の手で奥の巻き簾を持って押し、しっかりと巻いてください。巻き終わりの海苔が下になるように巻き簾を外し、5分ほど置きます。';
$altCap05 = 'ふきんなどで包丁の刃を濡らしながら、押し出すように切っていきます。';
$altCap06 = '巻き簾を広げ、海苔をのせます。このとき、光沢のあるほうを下にします。海苔の上に、酢飯200gを広げます。海苔の巻き終わりが2cmほど残るようにしてください。';
$altCap07 = '広げた酢飯の中央より少し下に、具を置きます。';
$altCap08 = '海苔の手前を巻き簾ごと持ち上げ、巻き終わり部分まで一気に持っていきます。';
$altCap09 = '1周巻いたら、片手で握りつつ、巻き簾ごと自分の方に軽く引き寄せます。もう片方の手で、巻き簾の巻き終わりを自分の方へ引き寄せ、固く巻いていきましょう。';
$altCap10 = '輪ゴムなどで固定し、5分ほど置いたら巻き簾を外します。';
$altCap11 = 'ふきんなどで包丁の刃を濡らしながら、太巻きを2cm幅に切ります。';
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
					<span class="recipe-header__ttl">海苔巻きの巻き方のコツをご紹介！</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第44回は「海苔巻きの巻き方」です。海苔巻きの巻き方のコツをご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>この間、マユ先生に教えてもらった<a href="<?php echo $base_url?>/magazine/article/recipe-technic43.php" class="recipe-design__link">酢飯</a>を<br class="u-only__pc">ママが作ってくれました！<br>なので、酢飯を使って海苔巻きを作ってみたんですけど<br class="u-only__pc">海苔巻きって上手に作れないものですね～</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>マサキさん、さっそく酢飯を作ってみたのですね！<br>海苔巻きは、<a href="<?php echo $base_url?>/magazine/article/recipe-technic20.php" class="recipe-design__link">ごはん</a>の量と広げる位置がポイントです<br>また、切り方もひと工夫加えることで、きれいな仕上がりになります</p>
				</div>
			</div>

			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>そうそう！なかなかきれいに切ることができなくて、<br class="u-only__pc">海苔や具がぐしゃっと潰れてしまったんです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>では、今回は海苔巻きの巻き方や<br class="u-only__pc">仕上げの切り方を一緒にやってみましょう！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/J4iqyjrE2dI?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">基本的な海苔巻きの作り方</h3>
				<p class="mb3">シンプルな細巻きも、具だくさんの太巻きも、お店のようにきれいに仕上げる作り方のコツをご紹介します。</p>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">用意する道具</h3>
					<dl class="recipe-design__tools">
						<dt>巻き簾（まきす）</dt>
						<dd><p>海苔巻き、<a href="<?php echo $base_url?>/magazine/article/recipe14.php#datemaki" class="recipe-design__link">伊達巻き</a>などを作るための道具です。多くは竹製ですが、最近ではプラスチック製やシリコン製のものも見られます。</p></dd>
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
							<h5>巻き簾がないときの代用品は？</h5>
							<p>巻き簾がないときは、ラップで代用できます。ラップだけだと薄くて不安な場合は、ラップの代わりにアルミホイルを2～3枚重ねて使うと崩れにくくなります。</p>

						</div>
					</div>
					<dl class="recipe-design__tools">
						<dt>まな板</dt>
						<dd>海苔巻きを巻く作業をするときに使います。大きめの<a href="<?php echo $base_url?>/magazine/article/recipe-technic34.php" class="recipe-design__link">まな板</a>を縦向きに置くと、巻きやすくなります。</dd>
					</dl>
					<dl class="recipe-design__tools">
						<dt><a href="<?php echo $base_url?>/magazine/article/recipe-technic01.php" class="recipe-design__link">包丁</a></dt>
						<dd>巻き終わった海苔巻きを食べやすく切るときに使います。よく切れるように、きちんと研いでお手入れしておきましょう。</dd>
					</dl>
					<dl class="recipe-design__tools">
						<dt>ふきん</dt>
						<dd>海苔巻きを切った包丁の刃を拭くときに使います。切る度に絞ったふきんで拭き、刃を湿らすことで、ごはんが付きにくく、切りやすくなります。</dd>
					</dl>
				</div>
				<div class="recipe-design__howto mb3">
					<h3 class="recipe__ttl">細巻きの作り方</h3>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-01@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap02); */ ?>
							巻き簾を広げ、海苔をのせます。このとき、<strong>光沢のあるほうを下に</strong>します。海苔の上に、酢飯70～100gを広げます。<strong>海苔の巻き終わりが1cmほど残るように</strong>してください。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-03@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap05); */ ?>
							ふきんなどで包丁の刃を濡らしながら、<strong>押し出すように</strong>切っていきます。
						</dd>
					</dl>
					<h3 class="recipe__ttl">太巻きの作り方</h3>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-06@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap06); */ ?>
							巻き簾を広げ、海苔をのせます。このとき、<strong>光沢のあるほうを下に</strong>します。海苔の上に、酢飯200gを広げます。<strong>海苔の巻き終わりが2cmほど残るように</strong>してください。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-07@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap07); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-08@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap08); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-09@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap09); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/tech44-10@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap10); */ ?>
							ふきんなどで包丁の刃を濡らしながら、太巻きを<strong>2cm幅</strong>に切ります。
						</dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h4 class="plus1__ttl">細巻きと太巻き、それぞれおすすめの具は？</h4>
							<p>細巻きにおすすめの具材は、かんぴょう、<a href="<?php echo $base_url?>/magazine/article/recipe-technic135.php" class="recipe-design__link">きゅうり</a>、ネギトロ、納豆など。切り口の華やかさも楽しみたい太巻きは、彩りになる<a href="<?php echo $base_url?>/magazine/article/recipe-collect02.php" class="recipe-design__link">卵焼き</a>や桜でんぶ、三つ葉などがおすすめ。<br>そのほか、煮穴子や<a href="<?php echo $base_url?>/magazine/article/recipe-technic68.php" class="recipe-design__link">アボカド</a>サーモン、カロリー控えめのカニかまぼこや<a href="<?php echo $base_url?>/magazine/article/recipe-technic144.php" class="recipe-design__link">鶏のむね肉</a>など、お好みでいろいろな具材を使って作ってみてくださいね！</p>
						</div>
					</div>
					<h3 class="recipe__ttl_l mb0">海苔巻きレシピのおすすめをご紹介！</h3>
					<p class="mb2">おもてなしや<a href="<?php echo $base_url?>/magazine/article/recipe-technic47.php" class="recipe-design__link">お弁当</a>に活躍する、アレンジ海苔巻きにチャレンジ！1歳前後の小さな子どもでも、食べやすく工夫してあげると一緒に海苔巻きを楽しめますよ。</p>
					<div class="mb2">
						<h4>韓国風海苔巻き</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/technic44_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/technic44_popular01@2x.jpg"
									alt="韓国風海苔巻き" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>ごま油の風味が香ばしい、韓国の海苔巻き「キンパ」を家庭で簡単に。<br>海苔の上に、ごま油と<a href="<?php echo $base_url?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>少々を混ぜたごはんを広げ、ごま油で軽く炒めたにんじん・たくあん・<a href="<?php echo $base_url?>/magazine/article/recipe-technic19.php" class="recipe-design__link">牛肉</a>、ゆでた<a href="<?php echo $base_url?>/magazine/article/recipe-technic157.php" class="recipe-design__link">ほうれん草</a>と<a href="<?php echo $base_url?>/magazine/article/recipe-technic65.php" class="recipe-design__link">厚焼き卵</a>をのせて太巻きにします。<br>お好みでキムチやナムルなどを巻いてもよいですね！</p>
					</div>
					<div class="mb2">
						<h4>お花の太巻き</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/technic44_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/technic44_popular02@2x.jpg"
									alt="お花の太巻き" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p><a href="<?php echo $base_url?>/magazine/article/recipe16.php" class="recipe-design__link">ひなまつり</a>やお花見で人気の、花模様の切り口がかわいらしい太巻きです。<br>梅や桜でんぶ、鮭フレークを混ぜてピンク色にした酢飯で、極細の細巻きを5本作ります。同じように、刻んだたくあんを混ぜて黄色にした酢飯で、極細の細巻きを1本作ります。黄色の細巻きを中心に、ピンク色の細巻き5本を並べ、まとめて太巻きに。</p>
					</div>
					<div class="mb2">
						<h4>薄焼き卵の太巻き</h4>
						<div class="flex">
							<figure class="w50 mb2">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/44/technic44_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/44/technic44_popular03@2x.jpg"
									alt="薄焼き卵の太巻き" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>海苔の代わりに、ほんのり甘い<a href="<?php echo $base_url?>/magazine/article/recipe-technic37.php" class="recipe-design__link">薄焼き卵</a>で巻いた太巻きです。チーズやハム、チキンなど洋風の具材とも相性ピッタリで、小さな子どもにもおすすめ。<br><a href="<?php echo $base_url?>/magazine/article/recipe-technic85.php" class="recipe-design__link">片栗粉</a>を少し混ぜて破れにくくした薄焼き卵を、巻き簾に置きます。その上に酢飯を広げ、普通の太巻きと同じ要領でお好みの具を巻きましょう。</p>
					</div>
					<div class="mb2">
						<h4>離乳食後期から食べられる海苔巻き</h4>
						<p>歯ごたえのあるものも食べられる離乳食後期の1歳前後からは、海苔巻きを食べられる子どももいるようです。親子一緒に、<a href="<?php echo $base_url?>/magazine/article/recipe-technic117.php" class="recipe-design__link">節分</a>の恵方巻を楽しんでみてもよいですね。</p>
						<p>酢飯の代わりにやわらかめの白ごはんを使うと、子どもでも食べやすくなります。具は生ものやわさびを避け、刻んだ<a href="<?php echo $base_url?>/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>や鶏肉の<a href="<?php echo $base_url?>/magazine/article/recipe-technic90.php" class="recipe-design__link">そぼろ</a>などを巻きましょう。海苔は噛み切りやすいように細かく刻んでお米の周りに付けると安心です。</p>
					</div>

					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h4 class="plus1__ttl">お弁当箱に海苔巻きをきれいに詰めるには？</h4>
							<p>細巻きも太巻きも切り口が見えるように詰めると、具材が分かりやすく見た目も華やかになります。細巻きはお弁当箱の高さに合わせて切り、具材が見えるように立てて詰めましょう。太巻きは斜めに傾けるように詰めるとよいですよ。</p>
						</div>
					</div>

				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>やっぱり、巻くときの力加減は難しいですね…<br>まだまだ特訓が必要です！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>力加減は、徐々に慣れていきましょう！<br>海苔巻きは日本人に親しまれている伝統的な料理です。<br>節分の恵方巻やひなまつり・子どもの日など<br class="u-only__pc">お祝いごとの際には主役料理となりますから、きれいに作れたらかっこいいですよ！</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>そうですね…！<br>お花見の季節も近付いてきたし<br class="u-only__pc">お花の太巻きもきれいに作れるようになって<br class="u-only__pc">みんなをびっくりさせるぞ！</p>
				</div>
			</div>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','14016'),
				array ('recommend-recipe-id','15021'),
				array ('recommend-recipe-id','15020'),
				array ('recommend-recipe-end')

				);
			?>				
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
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
