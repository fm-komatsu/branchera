<?php
//base
include( "../../function.php" );
$content = get_id_data( '15037' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「卵の割り方」を動画で解説。卵の殻がうまく割れなかったり、破片が入ってしまったりすることを防ぐコツや、卵白と卵黄をきれいに分ける方法をご紹介します。また、応用編としてうずらの卵やゆで卵の殻のむき方もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '卵を割り入れます。';
$altCap02 = '卵白を切るように溶きます。';
$altCap03 = '酒・砂糖・片栗粉・塩を入れて混ぜます。';
$altCap04 = 'ザルでこします。';
$altCap05 = 'フライパン全体に油をひいていきます。';
$altCap06 = '中火で熱し、温まったら濡れぶきんの上にフライパンをのせて底を冷まし、温度を均一にします。';
$altCap07 = '数秒経ったらフライパンをコンロに戻して、すぐに卵液を流し入れます。その後、フライパンを傾けて厚さが均等になるように広げます。';
$altCap08 = '弱火と中火の間の火加減で1分ほど焼いていきます。';
$altCap09 = '卵のふちがフライパンから離れてきたら、菜箸1本を卵の下に入れて引っかけるようにして、持ち上げて裏返します。';
$altCap10 = '20秒ほど焼いて取り出し、3等分に切ります。';
$altCap11 = '重ねて細切りにしたら完成です。';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
	<article class="main__row">
		<?php
			$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
			$panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
			include( $inc_path . "/lib/inc/pan.php" );
			include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
			include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
		?>
		<section class="main__wrapper recipe">
			<div class="recipe__header recipe-header technic">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">　</span>
					<span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第37回は「錦糸卵の作り方」です。薄くてきれいな錦糸卵の作り方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>マユ先生、<a href="<?php echo $base_url ?>/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>の彩りをよくするために<br class="u-only__pc">おすすめのトッピングを教えてください！<br>何だかいつも、茶色っぽいお弁当になってしまって…<br>手軽に使えて、華やかなお弁当にできる具材はないでしょうか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>それなら、一度にたくさん作って、冷凍保存ができる<br class="u-only__pc">錦糸卵がおすすめですよ</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>錦糸卵って、薄焼き卵が破れちゃって<br class="u-only__pc">きれいに作れたことがないんです…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>薄焼き卵は、ちょっとしたコツで失敗せずに作ることができますよ！<br>錦糸卵はお弁当以外にも、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic100.php#chirashi" class="recipe-design__link">丼もの</a>や<a href="<?php echo $base_url ?>/magazine/article/recipe-technic145.php" class="recipe-design__link">サラダ</a>などいろいろな料理に合うので<br class="u-only__pc">ぜひ、マスターしてくださいね！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/oLP7Qj9aKqk?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">錦糸卵</h3>
				<p>薄焼き卵ができれば、後は切るだけの錦糸卵。巻いたりする必要がないので、料理初心者の方でも簡単に作ることができます。まずは基本の手順を覚えていきましょう。</p>
					<div class="recipe-design__material">
						<h4 class="recipe__ttl">材料</h4>
						<dl class="recipe-design__materials">
							<dt>卵</dt>
							<dd>2個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>酒</dt>
							<dd><a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a></dt>
							<dd>小さじ2</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>片栗粉</dt>
							<dd>小さじ1</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a></dt>
							<dd>ひとつまみ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>油</dt>
							<dd>あれば適量</dd>
						</dl>
					</div>
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl">手順</h3>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo ($altCap01); */ ?>
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵を割り入れ</a>ます。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<!-- <?php echo ($altCap02); ?> -->
							<strong>卵白を切るように</strong>溶きます。
						</dd>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap03); ?>
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
							<h3>なぜ錦糸卵に片栗粉を入れるの？</h3>
							<p>ズバリ、「薄焼き卵が破れにくくなるから」。片栗粉の主成分はデンプン質。このデンプン質が卵の弾力性を増強し、焼いたときに破れるのを防いでくれるのです。片栗粉はしっかり溶かないとダマになるので、気を付けましょう。</p>
						</div>
					</div>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-04@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-05@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-06@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<!-- <?php echo ($altCap06); ?> -->
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で熱して、温まったら濡れぶきんの上にフライパンをのせて底を冷まし、温度を均一にします。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-07@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap07); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-08@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<!-- <?php echo ($altCap08); ?> -->
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php" class="recipe-design__link">弱火と中火</a>の間の火加減で<strong>1分</strong>ほど焼いていきます。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-09@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap09); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-10@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap10); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<!-- <?php echo ($altCap10); ?> -->
							<strong>20秒</strong>ほど焼いて取り出し、<strong>3等分</strong>に切ります。
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/tech37-11@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap11); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap11); ?>
						</dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h3 class="plus1__ttl">ほかの調理器具を使った作り方</h3>
							<p>錦糸卵は、フライパンを使わなくても作ることができます。フライパン以外の調理器具を使った錦糸卵の作り方をご紹介します。</p>
							<h4 class="recipe__ttl">電子レンジ</h4>
							<p>大きめの平たいお皿を使って、レンジで簡単に錦糸卵を作ることができます。<br>お皿にラップを敷き、卵液をのせてレンジで加熱。加熱時間は600wで1分を基準にして、様子を見ながら加熱時間を追加してください。<br>全体が固まったら、温かいうちにまな板にひっくり返し、ラップを剥がして卵を細切りにすればできあがり。</p>
							<h4 class="recipe__ttl">卵焼き器</h4>
							<p>長方形の卵焼き器を使えば、幅が均一できれいな仕上がりの錦糸卵を作ることができます。基本的な作り方はフライパンで作るときと同じですが、片面が焼けた卵を裏返す際にコツが必要です。菜箸で卵を持ち上げるときに、真ん中の位置まで菜箸が通ったら、そのまま真上に上げて卵を2つ折りにします。焼けていないもう片方の面を、卵焼き器に接するように返して卵を広げ、20秒ほど焼いたらできあがり。</p>
							<p>レンジは手軽に作りたいときに、卵焼き器は錦糸卵の幅を均等にしたいときにぴったりの方法です。状況や用途に合わせて使い分けてくださいね。</p>
						</div>
					</div>
					<h3 class="recipe__ttl_l">錦糸卵を使った人気レシピ</h3>
					<p>見栄えがよく、いろいろな料理のトッピングに大活躍の錦糸卵。色鮮やかな錦糸卵を使って、おすすめの人気レシピを作ってみましょう。</p>
					<div class="u-clearfix">
						<h4 class="recipe__ttl">冷やし中華</h4>
						<figure class="u-float__left w45">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular01@2x.jpg"
							alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」錦糸卵を使った人気レシピ｜冷やし中華'); ?>" style="max-width:362px"
							class="u-img__max">
						</figure>
						<p>ゆでて水洗いした中華麺を皿に盛ります。錦糸卵のほか、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にしたきゅうりとハム、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic110.php" class="recipe-design__link">チャーシュー</a>、紅しょうがなどをのせ、タレをかけてできあがりです。</p>
					</div>
					<div class="u-clearfix">
						<h4 class="recipe__ttl">ちらし寿司</h4>
						<figure class="u-float__right w45">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular02@2x.jpg"
							alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」錦糸卵を使った人気レシピ｜ちらし寿司'); ?>" style="max-width:362px"
							class="u-img__max">
						</figure>
						<p>ちらし寿司に錦糸卵がのっていると、とっても豪華に見えて嬉しいですよね。<br>錦糸卵を使った<a href="<?php echo $base_url ?>/magazine/article/recipe16.php" class="recipe-design__link">ケーキ寿司</a>もおすすめです。</p>
					</div>
					<div class="u-clearfix">
						<h4 class="recipe__ttl">錦糸卵のせそうめん</h4>
						<figure class="u-float__left w45">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular03@2x.jpg"
							alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」錦糸卵を使った人気レシピ｜錦糸卵のせそうめん'); ?>" style="max-width:362px"
							class="u-img__max">
						</figure>
						<p>ふんわりした錦糸卵は、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic52.php" class="recipe-design__link">そうめん</a>とも相性グッド。夏場は食欲が落ちる季節なので、一緒にさまざまな具材をのせて彩りも楽しみましょう。</p>
					</div>
					<div class="u-clearfix">
						<h4 class="recipe__ttl">そぼろ弁当</h4>
						<figure class="u-float__right w45">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/37/technic37_popular04@2x.jpg"
							alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」錦糸卵を使った人気レシピ｜ちらし寿司'); ?>" style="max-width:362px"
							class="u-img__max">
						</figure>
						<p>きれいな錦糸卵は、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic90.php" class="recipe-design__link">そぼろ</a>弁当にのせても美味しく見せてくれます。茶色に傾きがちな色合いに、錦糸卵で彩りを加えましょう。赤みが欲しい場合は、漬け物や紅しょうがを添えてもよいでしょう。</p>
					</div>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>わぁ～！キレイな錦糸卵が作れちゃった！<br>錦糸卵の鮮やかな黄色がいい感じ<br>やっぱり彩りって大事ですね</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>錦糸卵の賞味期限ですが、冷蔵保存の場合は約2～3日、<br>冷凍保存の場合は約1～3ヵ月もつといわれています<br>冷凍保存の方法は、使いやすい分量に分けてラップに包み、<br class="u-only__pc">なるべく空気を抜いて、ファスナー付きの保存袋に入れます<br>いろいろな料理に活用してくださいね！</p>
				</div>
			</div>
			<section class="mb3">
				<h5>■関連記事</h5>
				<ul>
					<li class="recipe-photolist__item recipe-photolist__reciperecommend">
					<a href="<?php echo $base_url; ?>/magazine/article/recipe-collect02.php" class="recipe-photolist__row">
						<img data-src="<?php echo $img_url; ?>/thum/comic02/recipe_collect02.jpg" alt="●卵料理の簡単レシピ7選！朝食やお弁当におすすめ♪" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						<p class="reciperecommend-ttl">●卵料理の簡単レシピ7選！朝食やお弁当におすすめ♪</p>
					</a>
					</li>
					<li class="recipe-photolist__item recipe-photolist__reciperecommend">
					<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic47.php" class="recipe-photolist__row">
						<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech47.jpg" alt="●簡単＆きれい！お弁当の詰め方の基本とコツ" class="f-photolist__reciperecommendimg js-show" style="max-width:85px">
						<p class="reciperecommend-ttl">●簡単＆きれい！お弁当の詰め方の基本とコツ</p>
					</a>
					</li>
					<li class="recipe-photolist__item recipe-photolist__reciperecommend">
					<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic65.php" class="recipe-photolist__row">
						<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech65.jpg" alt="●だし巻き卵の作り方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						<p class="reciperecommend-ttl">●だし巻き卵の作り方</p>
					</a>
					</li>
				</ul>
			</section>
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
