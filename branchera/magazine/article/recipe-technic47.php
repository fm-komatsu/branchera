<?php
//base
include("../../function.php");
$content = get_id_data('15047');
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '103';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//キャプチャALTタグ
$altCap01 = 'ごはんは、なだらかな坂になるように斜めに詰めていきます。';
$altCap02 = 'おかずはなるべく赤・黄・緑のものを詰めるようにすると、彩りがよくなります。温かいおかずは、しっかりと冷ましてから詰めます。温かいまま詰めると、蒸気がこもり、細菌が繁殖しやすくなるので、注意してください。';
$altCap03 = '水気の多いおかずは、しっかりと水気を切ってから詰めます。';
$altCap04 = '大葉やしそは、殺菌作用があるので、しきりにするとよいです。';
$altCap05 = '大きいおかずから、小さいおかずの順番で詰めていきます。今回はから揚げ→卵焼き→ほうれん草のごま和えの順番です。';
$altCap06 = '隙間はミニトマトやピック刺しなどのトッピングで埋めていきます。';
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
        include($inc_path . "/lib/inc/pan.php");
        include($inc_path . "/lib/inc/page/_gift/__main-header.php");
        include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
        ?>
		<!-- 220805追加 -->
		<div class="mt3 mt2_sp mb5 mb3_sp">
			<div>
				<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
			</div>
		</div>
		<!-- /220805追加 -->
		<section class="main__wrapper recipe">
			<div class="recipe__header recipe-header technic">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">　</span>
					<span class="recipe-header__ttl">簡単＆きれい！お弁当の詰め方の基本とコツ</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのごはんは世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第47回は、「お弁当の詰め方の基本とコツ」です。基本と応用のお弁当の詰め方とそのコツをご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>マユ先生、相談です<br>私、職場に<a href="<?php echo($base_url)?>/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>を持って行っているんですけど<br class="u-only__pc">きれいに詰めたつもりでも、蓋を開けるといつもおかずが寄ってしまって<br class="u-only__pc">お弁当箱を開けるのが恥ずかしいんです…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>せっかくきれいに詰めたお弁当が寄ってしまうのは、悲しいですね</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>そうなんですよ～<br>見た目がきれいなお弁当を作りたいです！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>おかずがきれいに詰まっていると、<br class="u-only__pc">美味しそうに見えますよね！<br>おすすめのおかずも一緒にご紹介します！</p>
				</div>
			</div>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/TIdEBuFIKZw?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">お弁当の詰め方の基本</h3>
				<p class="mb3">お弁当は、何よりも「美味しそうに見える」ビジュアルであることが、非常に大切。同じお弁当でも、詰め方次第で見栄えは段違いです！<br>とはいえ、忙しい朝にあまり時間はかけられませんよね。今回は、短時間でできる、きれいなお弁当の詰め方のコツをマスターしましょう。</p>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">今回使うおかずは以下の通りです。</h3>
					<ul class="u-list__ul_dot">
						<li><a href="<?php echo($base_url)?>/magazine/article/recipe04.php" class="recipe-design__link">から揚げ</a></li>
						<li><a href="<?php echo($base_url)?>/magazine/article/recipe-technic65.php" class="recipe-design__link">卵焼き</a></li>
						<li>ミニトマト</li>
						<li><a href="<?php echo($base_url)?>/magazine/article/recipe-technic157.php" class="recipe-design__link">ほうれん草</a>のごま和え</li>
						<li><a href="<?php echo($base_url)?>/magazine/article/recipe-technic95.php" class="recipe-design__link">枝豆</a>のピック刺し</li>
						<li>添え物（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic126.php" class="recipe-design__link">漬物</a>、黒ゴマ）</li>
					</ul>
				</div>
				<div class="recipe-design__howto mb3">
					<h4 class="recipe__ttl">[ 1 ] ごはんを詰める</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap01); ?>
							<br>
							斜めに詰めることで、おかずをごはんに立てかけられるようになるので、仕切りを使わずにきれいに詰めることができます。<br>ごはんを詰めたら、そのまましばらくおいて冷ましましょう。
						</dd>
					</dl>
					<h4 class="recipe__ttl">[ 2 ] おかずを詰める</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap02); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap03); ?>
							<br>水っぽくなりがちなもの（ゆでたほうれん草など）は、ごま和えにしたり、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic06.php" class="recipe-design__link">かつお節</a>を絡めたりすると水分が吸収され、味も落ちず傷みにくくなります。
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap04); ?>
						</dd>
					</dl>
					<h4 class="recipe__ttl">[ 3 ] 隙間を埋める</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap05); ?>
							<br>メインの大きいおかずを先に詰めると、ほかのおかずを入れる場所が自然と決まります。
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/tech47-06@2x.jpg"
								 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap06); ?>
							<br>
							崩れにくくするため、変形するカップや小さいおかずで隙間を埋めます。<br>最後に色どりや見た目を整えます。
						</dd>
					</dl>
					<section class="mb3">
						<div>
							<h3 class="recipe__ttl_l mb0">お弁当箱の形別詰め方ポイント</h3>
							<p>四角形や円形など、お弁当箱の形はさまざま。いつものお弁当はもちろん、イベント時にも活用できる、お弁当箱の形別の詰め方ポイントを伝授します。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">一段</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular01@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>基本の一段のお弁当箱。大ぶりなおかずもそのまま詰められるのが魅力です。<br>まずはごはんをお弁当箱の横幅3/4くらいまで詰め、残り1/4に大きめの卵焼きや煮物、野菜などのおかずを詰めます。隙間に漬物などを詰めたら、最後に魚の半身や大きい切り身をごはんの上にのせてもよいでしょう。<br>写真のように一段の正円の場合、大ぶりな切り身をごはんの真ん中に置き、両側に違うおかずをのせると仕切りのようになり、見栄えがよくなります。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">二段</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular02@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>細長い二段のお弁当箱の場合は幅が狭くなることが多いため、おかずは小さくカットして詰めましょう。<br>その際、一段目と二段目がどちらも華やかになるように、色味などを考慮してバランスよく詰めていくのがポイントです。おかずは少し立て気味にして、立体感が出るような詰め方を意識しましょう。見た目が地味になりがち、という場合は、二種類のおかずを交互に詰めたり、小さなおかずを隙間に詰めたりすることで華やかにすることができます。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">正方形</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular03@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>正方形のお弁当箱は、四角く仕切って使うと見た目も美しく、詰めやすくなるのでおすすめです。カップなども四角いものを使うと、小さいおかずを効率よく詰めることができます。<br>また、大きな正方形のお弁当箱の場合、真ん中に丸いカップを置いてディップソースを入れ、放射線状に野菜やトルティーヤなどを詰めていくというお洒落な見せ方もできますよ。ピクニックなどにおすすめです。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">長方形（普通のもの、細長いもの）</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular04@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>長方形のお弁当箱は、カップに入れたおかずを端から隙間なく詰めていくだけで、自然と美しい見た目になります。色の配置だけを意識すれば、一番簡単に詰められる形が長方形です。<br>また、ホットドックなど筒状の<a href="<?php echo($base_url)?>/magazine/article/recipe-technic132.php" class="recipe-design__link">サンドイッチ</a>を詰めるのにもぴったりです。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">楕円</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular05@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>木製の「曲げわっぱ」の流行で、SNSなどでもよく見かける楕円形のお弁当箱。お弁当箱自体が特徴的なので、真ん中で仕切り、ごはんとおかずを半々に詰めるだけでもかわいらしい印象に。また全体的に斜めにおかずを詰めていくと、立体感が出ておしゃれに仕上がります。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">重箱</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular06@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p><a href="<?php echo($base_url)?>/magazine/article/recipe14.php" class="recipe-design__link">おせち</a>でおなじみの重箱ですが、お花見や運動会など、イベントごとのお弁当にも重宝します。<br>重箱は面積が大きいため、隙間ができやすいという特徴があります。隙間を作らないようにするには、仕切りをうまく利用することと、四角い食材を多用し、モザイク状になるように意識して詰めていくのがポイント。ごはんも、写真のように<a href="<?php echo($base_url)?>/magazine/article/recipe-technic43.php" class="recipe-design__link">いなりずし</a>などにすると詰めやすくなります。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic49.php" class="recipe-design__link">えびフライ</a>など斜めに詰められるおかずでアクセントを付けると、より見た目も華やかになります。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">バスケット</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular07@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>一手間かければおしゃれなお弁当になるのがバスケット。ワックスペーパーやカップなど、強度のある仕切りをうまく使うのがコツです。<br>サンドイッチやバゲットをワックスペーパーにくるんで詰め、卵焼きや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic84.php" class="recipe-design__link">ウインナー</a>などのおかずをプラスチックのカップに入れて添えると、見た目もきれい。おかずが寄ってしまう心配もありません。水気の多いおかずや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic145.php" class="recipe-design__link">サラダ</a>などはバスケットに向いていないので、どうしても詰めたい場合は、しっかり蓋ができる容器に入れてから詰めるようにしましょう。</p>
						</div>
					</section>
					<section>
						<div>
							<h3 class="recipe__ttl_l mb0">シーン別！おすすめのおかずの詰め方</h3>
							<p>お弁当箱の形だけでなく、どんなイベントに持っていくかでもお弁当の種類は変わってきます。<br>ここではシーン別のお弁当の詰め方のテクニックをご紹介しましょう。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">運動会に！ハンバーグ</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular08@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>食べ応えが重要なのが運動会のお弁当。ボリューム満点な<a href="<?php echo($base_url)?>/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>なら、運動中の子どもたちも満足するはずです。<br>まずごはんを斜めに詰めます。次にハンバーグをごはんに立てかけるようにして詰めてください。仕切り付近の隙間には、カップに入れたポテトサラダや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic150.php" class="recipe-design__link">きのこのソテー</a>などを詰め、ハンバーグ周辺の隙間にゆでた<a href="<?php echo($base_url)?>/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>などの<a href="<?php echo($base_url)?>/magazine/article/recipe-technic155.php" class="recipe-design__link">温野菜</a>を詰めましょう。写真のように、ロコモコ丼風に<a href="<?php echo($base_url)?>/magazine/article/recipe-technic93.php" class="recipe-design__link">目玉焼き</a>を添えるのもおすすめ！</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">子どもに！サンドイッチ</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular09@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>サンドイッチは、とにかく具材の水気をよく切ることが大切。そして、断面が見えるように隙間なく詰めることが、より美味しそうに見せるコツです。とはいえ、ギュウギュウ詰めは禁物。ふんわりしたパンの食感はそのまま、インパクトのあるお弁当を作りましょう。<br>細長いお弁当箱なら、縦幅に合わせてサンドイッチを作ると、簡単かつきれいに詰めることができます。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">デートに！メンチカツ</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular10@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p>ボリュームがあり、手の込んだ印象も与えられるメンチカツ。茶色いお弁当にならないよう、色とりどりのおかずと一緒に詰めていきましょう。小さめの円型に<a href="<?php echo($base_url)?>/magazine/article/recipe-technic09.php" class="recipe-design__link">カツ</a>を作った場合は、ハンバーグと同様に少し斜めに倒して詰めます。大きめだったら半分に切るなど、お弁当箱の高さに合わせてください。後は基本通りに、大きいおかずから順に詰めていきましょう。隙間にミニトマトなどの添え物を入れ、バランスよく仕上げます。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">お花見に！海苔巻き</h4>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/47/technic47_popular11@2x.jpg"
									alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:362px" class="u-img__max">
							</figure>
								<p><a href="<?php echo($base_url)?>/magazine/article/recipe-technic44.php" class="recipe-design__link">海苔巻き</a>はみんなで食べられるので、お花見におすすめです。<br>円錐型の海苔巻きの場合、バスケットなど、大き目で深さのあるお弁当箱に詰めましょう。専用ラップなどにくるみ、花束のようにしても素敵です。<br>円筒型の海苔巻きを重箱などに詰めたい場合は、断面が見えるように斜めに並べましょう。おかずはほかの段に詰めると、統一感も出てベターです。</p>
						</div>
					</section>
				</div>
			</div>
			<p class="center mb2">― お花見 ―</p>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>ママ、このお弁当色とりどりでとっても美味しそう！<br>おかずも寄らずに、隙間なく詰まってる～</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>こうちゃんのすきな<a href="<?php echo($base_url)?>/magazine/article/recipe04.php" class="recipe-design__link">からあげ</a>！</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>マユ先生にお弁当の詰め方を教えてもらったの♪<br>前回のお花見のときに作ったお弁当より<br class="u-only__pc">きれいで美味しそうでしょ？</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>見た目もそうだけど、中身も美味しい！<br>ママ、料理の腕を上げたね！ <br>僕もママを見習って、頑張らないと</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>パパもコウちゃんもモリモリ食べてくれて嬉しいな～<br>会社でお弁当箱を開けるのも怖くなくなったし♪<br>この調子で、運動会のお弁当作りも頑張るぞ！</p>
				</div>
			</div>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15021'),
				array ('recommend-recipe-id','13001'),
				array ('recommend-recipe-id','13008'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
			<div class="mb0">
				<?php
                include($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
            ?>
			</div>
		</section>
	</article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php
    $toindex_url = "/magazine/index_comic02.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
