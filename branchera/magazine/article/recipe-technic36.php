<?php
//base
include( "../../function.php" );
$content = get_id_data( '15036' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '白髪ねぎの作り方」を動画で解説。包丁やフォークを使って、簡単にシャキシャキで美味しい白髪ねぎを作る方法をご紹介します。また、作った白髪ねぎの保存方法やおすすめアレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '長ねぎの白い部分を使用します。';
$altCap02 = '4～5cmの長さに切ります。';
$altCap03 = '縦に切り込みを入れて、芯を取り除きます。';
$altCap04 = '外側の白い部分だけ重ねます。';
$altCap05 = '繊維に沿って千切りにします。';
$altCap06 = '5分ほど水にさらします。';
$altCap07 = 'キッチンペーパーなどで、しっかりと水気を切ります。';
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第36回は「白髪ねぎの作り方」です。料理の飾りや食感・味のアクセントになる白髪ねぎの作り方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>マユ先生、見てください！<br>この間、豚の角煮を作ったのですが<br class="u-only__pc">上手にできたので、つい写真を撮っちゃいました</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>わぁ～！とても美味しそうですね<br>甘辛くて、やわらかい豚肉…<br>豚の角煮って美味しいですよね！</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>あとちょっとで100点満点だったのですが<br class="u-only__pc">上にのせた白髪ねぎがしんなりしてしまって…<br>シャキシャキ感がなくて、少し物足りなかったんです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>白髪ねぎのシャキシャキ感、大事ですよね<br>今回は白髪ねぎの作り方をご紹介しましょう！<br>いろいろな料理に活用してくださいね</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/5evkqwoqJ_k?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0">白髪ねぎの作り方</h3>
					<p class="mb2">和食はもちろん、中華料理のトッピングとしてもよく使われる白髪ねぎ。料理に盛るだけで、ぐっと華やぐのが魅力の一つです。シャキシャキとした食感の、白髪ねぎの作り方とコツをお伝えしましょう。</p>
					<h4 class="recipe__ttl">白髪ねぎを切る手順</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-01@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?>
						</dd>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-03@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-04@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?><br>シャキシャキした食感かつ、見た目をきれいにするコツは、なるべく細く切ることです。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-06@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap06); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb2">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/tech36-07@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap07); ?>
						</dd>
					</dl>
					<div class="mb4">
						<h4 class="recipe__ttl">白髪ねぎの保存方法</h4>
						<p>白髪ねぎは<strong>冷蔵庫で3～4日間ほど持ちます</strong>が、たくさん作り置きしたい人は、冷凍保存しましょう。<br>白髪ねぎを冷凍保存する場合は、水にさらさず、そのまま保存します。水気があると霜で凍ってしまうので、キッチンペーパーなどで事前によく拭き取ってください。<br>一回分ごとに小分けしてラップに包み、密封容器やファスナー付きの保存袋に入れて冷凍します。<strong>保存期間は、約1ヵ月</strong>です。</p>
						<p>また白髪ねぎは、レンジなどを使わなくても、冷凍庫から出して常温の場所に置けば自然解凍できます。凍った状態のまま温かい料理に盛って、料理の温度で解凍してもOK。時短につながります。</p>
					</div>
					<section class="mb4">
						<div>
							<h3 class="recipe__ttl_l mb0">簡単に白髪ねぎが作れる！便利グッズ</h3>
							<p class="mb2">白髪ねぎを作るのって時間がかかりそう…、と思う人は、簡単に白髪ねぎを作れる便利グッズを使うのがおすすめ。グッズを取り入れて、時短クッキングを楽しみましょう。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">フォーク</h4>
							<p>まず、いつも使っているフォークを一本用意します。<br>ねぎの端から5cmほどの位置にフォークを刺し、引っかくようにフォークをスライドさせます。長ねぎを回転させながら、５回ほど繰り返します。裂けた部分を包丁で切り落とせば、白髪ねぎの完成です。なお、フォークをねぎに深く差し込むとスライドしづらくなり、裂くのに時間がかかってしまいます。そのため、まずはねぎの表面から3～5mmだけ刺し込み、スライドする回数を増やして裂くようにしましょう。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">専用スライサー</h4>
							<p>白髪ねぎ専用のスライサーが市販されています。このスライサーを使うと、ねぎの表面をスーッと軽く走らせるだけで、きれいな白髪ねぎが作ることができます。</p>
						</div>
					</section>
					<section>
						<div>
							<h3 class="recipe__ttl_l mb0">白髪ねぎを使ったおすすめレシピ</h3>
							<p class="mb2">いつものお料理に白髪ねぎをトッピングするだけで、味にアクセントが付くだけではなく、ひと手間かかった豪華な雰囲気に大変身します。簡単にできるおすすめレシピをご紹介！</p>
						</div>
						<div class="mb2">
							<h4 class="recipe__ttl">のせるだけでOK！レシピ</h4>
							<div class="u-clearfix mb2_sp">
								<figure class="u-float__right w45">
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/technic36_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/technic36_other01@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」ラーメンに白髪ねぎ'); ?>" style="max-width:362px"
									class="u-img__max">
								</figure>
								<p>白髪ねぎを乗せるだけでお店の料理のような雰囲気に仕上がるのは、牛丼や担々麺などの麺類です。ラーメンに白髪ねぎをたっぷり盛れば、あっという間にねぎラーメンのできあがりです。</p>
							</div>
							<div class="u-clearfix">
								<figure class="u-float__left w45">
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/36/technic36_other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/36/technic36_other02@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」煮つけに白髪ねぎ'); ?>" style="max-width:362px"
									class="u-img__max">
								</figure>
								<p>また、金目鯛などの魚の煮付けや、豚の角煮、豚汁や水餃子などに盛ると、ねぎの辛味がこってりした味付けのアクセントになり、より美味しくなりますよ。</p>
							</div>
						</div>
						<div>
							<h4 class="recipe__ttl">シンプル白髪ねぎサラダ</h4>
							<p>醤油、酢、砂糖、ごま油、鶏ガラスープの素、にんにくのすりおろし、ラー油、すりごまをボールに入れて、混ぜ合わせておきます。水気を切った白髪ねぎをよく和えたら、できあがりです。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">白髪ねぎスープ</h4>
							<p>たっぷりの白髪ねぎを用意します（2人分で長ねぎ3本）。鍋に水を入れ、沸騰したら鶏ガラスープの素を入れます。塩をお好みで入れ、白髪ねぎを投入。10～15秒ほど煮たら、器に盛って召し上がれ。体が温まりますよ。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">ささみとザーサイの白髪ねぎ和え</h4>
							<p>味付けは塩だけの簡単なレシピです。おつまみにもぴったりですよ。<br>最初に、鶏のささみ3本分の筋を引いて耐熱容器に並べ、酒を振りかけます。塩こしょうをして、ふんわりとラップをかけ、電子レンジ（600W）で1分30秒～2分加熱。そのまま余熱で中まで火を通してください。火が通ったらささみは食べやすい大きさに裂き、ザーサイは細切りにしましょう。<br>ボウルに、ささみ、ザーサイ、白髪ねぎ、塩、ごま油を入れて混ぜ合わせ、器に盛った後、ラー油と白ごまをかけたら完成です。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">ねぎチャーシュー</h4>
							<p>豚のブロック肉をファスナー付きの保存袋に入れます。味付けは、市販のすき焼きのたれを使います。たれ（300gの豚肉に対し、100～150ccほど）を袋の中に注ぎ、刻んだにんにくを投入し、袋の上から軽く揉みこみます。空気が入らないようにジッパーを閉め、冷蔵庫で半日～１日置きます。その後、お肉を漬け汁と一緒に鍋に移して、落とし蓋をして中火で煮詰めます。煮詰まったら、お肉を取り出し、薄く切って器に盛ります。白髪ねぎを盛って完成です。</p>
						</div>
					</section>
				</div>
			</div>
			<div class="recipe-icn mie_03">
				<div class="inner">
					<p>白髪ねぎって、外側の白い部分だけを使うのですね！<br>今まで、ねぎをそのまま切っていました…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>白髪ねぎは、水に5分ほどさらして<br class="u-only__pc">水の中で揉むと辛みを抑えることができますよ<br>いろいろな料理に取り入れてくださいね！</p>
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
