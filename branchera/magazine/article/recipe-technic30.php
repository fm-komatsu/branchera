<?php
//base
include( "../../function.php" );
$content = get_id_data( '15030' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「蒸し器の使い方」を動画で解説。家庭でよく使用されるステンレス製の蒸し器をはじめ、和せいろや中華せいろなど、蒸し器の種類ごとに使い方をご紹介します。また、それぞれのお手入れ方法や、蒸し器を使った肉まんや蒸しパンなどの人気レシピをお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '110';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'ステンレス製蒸し器を使用する場合は、下段に約5～7割の水を入れて、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>と<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間の火加減で沸騰させます。';
$altCap02 = '蒸気が出ていることを確認したら、上段の鍋を重ねて置きます。';
$altCap03 = '耐熱皿にのせた食材を入れます。';
$altCap04 = '大きめのふきんや、手ぬぐいなどで包んだ蓋を閉めて蒸します。ふきんや手ぬぐいで包むことにより、水滴で食材が水っぽくなるのを防ぐ効果があります。';
$altCap05 = '蓋を開けるときは、手前に蒸気がこないように開けましょう。';
$altCap06 = 'スチームバスケットを使用する場合は、食材にかからない程度の水を入れて沸騰させてから、直接スチームバスケットに食材をのせ、ステンレス製蒸し器同様に蒸します。';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';

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
					<span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第30回は「蒸し器の使い方」です。食材のうまみをたっぷりと引き出せる“蒸し料理”。今回は「蒸し器の使い方」をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p><a href="<?php echo($base_url)?>/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic108.php" class="recipe-design__link">さつまいも</a>って、なかなか一度に使い切れないよね…</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p> この前教えてもらった「<a href="<?php echo $base_url ?>/magazine/article/recipe07.php" class="recipe-design__link">余った食材で作るチヂミ</a>」は、食べたばっかりだしな～<br>う～ん…どうしよう
					</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>コウちゃん、あまいおやさいたべたい！</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p> 甘いお野菜か～<br>あっ、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic155.php" class="recipe-design__link">温野菜</a>なんかいいかも！簡単だし！</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p> 蒸し料理か…この前、蒸し器を使ったら<br class="u-only__pc">水っぽくなっちゃったんだよね… </p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>だから最近、蒸し器を使ってなかったんだね…<br>よし！せっかくだからみんなでマユ先生に、<br class="u-only__pc">正しい蒸し方を教えてもらいに行こうか！</p>
				</div>
			</div>
			<div class="recipe-icn mie_kou_01">
				<div class="inner">
					<p> お～！！ </p>
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
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/TvrJ8IrhCDc?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0">蒸し器の使い方</h3>
					<p>美味しく蒸し料理を作るのに欠かせない蒸し器。蒸し器にも種類があり、それぞれ特徴があります。今回は、家庭でよく用いられるステンレス製蒸し器の使い方を紹介します。</p>
					<h4 class="recipe__ttl">ステンレス製蒸し器の使い方</h4>
					<p>熱伝導がよく、短時間で蒸すことができるのがステンレス製の蒸し器です。洗いやすく、お手入れも簡単なので、手軽に使うことができます。</p>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-01@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap01); ?><br><small class="u-small mt1">※プリンや茶碗蒸しは、加熱をし過ぎてしまうと「す」（材料の中の水分が沸騰してできる細かい泡）が立ってしまい、口当たりが悪くなるので例外になります。沸騰しないくらいの温度を維持しましょう。</small></dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-02@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-03@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?><br>蒸し時間が長いときは、下段のお湯がなくなることがあるので、確認しながらお湯を足します。</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/tech30-06@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap06); ?>
						</dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
						<section class="plus1__row">
							<h3 class="plus1__ttl">ほかにもある！家庭で使われる蒸し器</h3>
							<p>ステンレス製の蒸し器のほかにも、よく見かけるのが「せいろ」。せいろとは、竹や木を使っている蒸し器のことです。ここでは、せいろの特徴についてご紹介します。</p>
							<div>
								<h4 class="recipe__ttl_s">和せいろ</h4>
								<div class="u-clearfix">
									<figure class="u-float__left w45">
										<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_other01@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」和せいろ'); ?>" style="max-width:362px"
									class="u-img__max">
									</figure>
									<p>日本古来の蒸し器である和せいろ。厚い木の蓋が付いた丸型の木枠の底に、すだれを敷いた形をしており、お湯を沸かした鍋の上にのせて使います。中華せいろに比べて高さがあるため、茶わん蒸しなど、縦に長い器を使うときに役立ちます。鍋とせいろのサイズが合わないときは、「蒸し台」「蒸し板」と呼ばれる穴の開いた板を間に挟みましょう。</p>
								</div>
								<hr>
								<h4 class="recipe__ttl_s">中華せいろ</h4>
								<div class="u-clearfix">
									<figure class="u-float__right w45">
										<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_other02@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」中華せいろ'); ?>" style="max-width:362px"
									class="u-img__max">
									</figure>
									<p>「中華せいろ」は、竹を細かく編んだ中国式の蒸し器です。せいろ専門店のほか、最近は量販店でも手に入ります。飲食店ではシュウマイや肉まんなどの点心を蒸して、そのまま食卓に出されることも多いので、みなさまにとってもなじみ深いアイテムなのではないでしょうか？</p>
									<p>お湯を沸かした<a href="<?php echo($base_url)?>/magazine/article/recipe-technic123.php" class="recipe-design__link">中華鍋</a>か、普通の鍋の上にのせて使いますが、蒸し板を挟むと鍋のサイズを気にせず使うことができるうえ、せいろの焦げ付き防止にもなります。2～3段重ねて使うこともできるので、家族の人数や用途に応じて段数を決めるとよいでしょう。</p>
								</div>
							</div>
						</section>
					</div>
					<section class="mb2">
						<h3 class="recipe__ttl_l mb0">蒸し器のお手入れ方法</h3>
						<p>蒸し器をよい状態で長く使うためのお手入れ方法についてご紹介します。</p>
						<div>
							<h4 class="recipe__ttl">ステンレス製蒸し器、スチームバスケットの場合</h4>
							<p>金属製のほかの調理器具と同じく、洗剤で洗ってすすぎ、よく乾かすだけでOKです。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">和せいろの場合</h4>
							<p>洗剤は使わずに、たわしなどで細かい部分を洗って水ですすぎます。風通しのよいところで陰干しして、しっかり乾燥させてから保管しましょう。</p>
							<p>油汚れが付いている場合は洗剤を使っても構いませんが、その分よく洗い流してください。シュウマイや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic19.php" class="recipe-design__link">肉</a>・<a href="<?php echo($base_url)?>/magazine/article/recipe-technic40.php" class="recipe-design__link">魚</a>などを蒸すときは、あらかじめお皿やクッキングシート、葉物野菜を底に敷くと汚れが付きにくくなります。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">中華せいろの場合</h4>
							<p>和せいろと同じく、洗剤は避けます。普段は固く絞ったふきんで水拭きして、1段ずつ外して陰干ししましょう。油汚れが付いた場合は、ぬるま湯でさっと洗い流します。</p>
						</div>
					</section>
					<section>
						<h3 class="recipe__ttl_l mb0">料理別！蒸し器を使った調理方法</h3>
						<p>簡単なのに、ふっくら美味しく仕上がる！蒸し器を使った調理のコツを、メニュー別にご紹介します。</p>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">蒸し野菜</h4>
							<figure class="u-float__left w45">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular01@2x.jpg"
								alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」蒸し野菜'); ?>" style="max-width:362px"
								class="u-img__max">
							</figure>
							<p>彩りよくヘルシーな蒸し野菜を作るコツは、野菜に均一に火が通るようにすること。野菜を切るときは、大きさを揃えるようにすると加熱ムラを防ぐことができます。また、さつまいもや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>などのいも類、かぼちゃや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic109.php" class="recipe-design__link">れんこん</a>といった固い野菜は、先に蒸し器に入れて5分ほど蒸しましょう。その後、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>やいんげんなど、ほかの野菜を入れ、全体に火が通るまで蒸し上がったら完成です。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">肉まん</h4>
							<figure class="u-float__right w45">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular02@2x.jpg"
								alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」肉まん'); ?>" style="max-width:362px"
								class="u-img__max">
							</figure>
							<p>市販の<a href="<?php echo($base_url)?>/magazine/article/recipe-technic94.php" class="recipe-design__link">ホットケーキ</a>ミックスを使えば、ほんのり甘い皮に包まれたジューシーな肉まんを簡単に作ることができます。ホットケーキミックスに水または牛乳、サラダ油を加え、麺棒でのばして皮を作り、豚ひき肉のあんを包みます。肉まんの大きさに合わせて切ったクッキングシートに1つずつのせ、蒸気の上がった蒸し器で10分ほど蒸したらできあがりです。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">シュウマイ</h4>
							<figure class="u-float__left w45">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular03@2x.jpg"
								alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」シュウマイ'); ?>" style="max-width:362px"
								class="u-img__max">
							</figure>
							<p>一度にたくさんできる<a href="<?php echo $base_url ?>/magazine/article/recipe11.php" class="recipe-design__link">シュウマイ</a>は、ホームパーティーなどのおもてなしにもぴったりのメニュー。豚ひき肉と玉ねぎ、しいたけを混ぜたあんを、市販のシュウマイの皮にスプーンでのせ、ひだを寄せるようにして包みます。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic18.php" class="recipe-design__link">千切りキャベツ</a>を敷いた耐熱皿にシュウマイを並べ、蒸し器で7～8分ほど蒸しましょう。うまみの濃縮されたシュウマイの完成です。</p>
							<p>※詳しい作り方は、「<a href="<?php echo $base_url ?>/magazine/article/recipe11.php" class="recipe-design__link">ハロウィンにピッタリな2つのシュウマイレシピ</a>」をご覧ください。</p>
						</div>
						<div class="u-clearfix">
							<h4 class="recipe__ttl">蒸しパン</h4>
							<figure class="u-float__right w45">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/30/technic30_popular04@2x.jpg"
								alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」蒸しパン'); ?>" style="max-width:362px"
								class="u-img__max">
							</figure>
							<p>手軽な朝食やおやつにうれしい蒸しパン。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic104.php" class="recipe-design__link">ココア</a>や黒糖など、風味をアレンジするとバリエーションが広がります。シリコンカップや、プリン型のグラシンカップに蒸しパン生地を流し込んだら、強火で蒸しましょう。蒸しパンの大きさによって蒸し時間は変わりますが、直径5cmほどのカップ4～5個分で約20分です。竹串を刺して、竹串に生地が付かなければ蒸しあがりです。</p>
						</div>
						<h4 class="recipe__ttl">ほかにもたくさん！蒸し器を使うと美味しい料理</h4>
						<p>シュウマイや肉まんのほか、本格点心の小籠包も蒸し器で作ることができます。栗や山菜の季節には、おこわがおすすめ。もち米の粘りや甘さが引き出され、もっちり美味しく仕上がります。また、蒸し器で調理すると火がゆっくり通るので、茶碗蒸しやプリンはしっとりなめらかな食感に。油を控えたいときも、魚やお肉に<a href="<?php echo($base_url)?>/magazine/article/recipe-technic32.php" class="recipe-design__link">下味</a>を付けて蒸すだけで、あっさりとしたヘルシーメニューができあがります！「今日はおかずを作るのが面倒だな」という日に大活躍です。</p>
					</section>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>温野菜って簡単にできて、余っている野菜を入れるだけで<br class="u-only__pc">1品作れちゃうのがうれしい！</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>おやさいあま～い！！おいしい♪</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>蒸し加減を確認するときに、蓋の手前側を開けてしまうと<br class="u-only__pc">熱い蒸気が一気に出てきて、やけどをしてしまう危険があります<br>必ず手前に蒸気がこないようにして、蓋を開けてくださいね！</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>コウちゃん、甘いお野菜が食べられてよかったね！<br>パパもいただきま～す！</p>
				</div>
			</div>
			<div class="recipe-icn kou_02">
				<div class="inner">
					<p>あ～！コウちゃんのさつまいも！！</p>
				</div>
			</div>
			<div class="recipe__assist mb3">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>グラシンカップとは</dt>
							<dd>マフィンの型などに使われる、グラシン紙製のカップ。グラシン紙は紙の原料となるパルプを潰し、プレスして作られた紙。光沢と透明感があり、お菓子の型にぴったり。</dd>
						</dl>
					</div>
				</div>
			</div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15155'),
				array ('recommend-recipe-id','15154'),
				array ('recommend-recipe-id','15123'),
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
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php
	$toindex_url = "/magazine/index_comic02.php";
	include( $inc_path . "/lib/inc/toindex__magazin.php" );
	?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
