<?php
//base
include( "../../function.php" );
$content = get_id_data( '15046' );
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
$altCap01 = '茎のつけ根に包丁を入れて、房と茎を切り分けます。';
$altCap02 = '枝分かれした箇所に包丁を入れ、1房ずつ切り分けてください。';
$altCap03 = '房が大きい場合は、茎に切れ目を入れて、手で裂きます。';
$altCap04 = '残った茎は、厚めに皮を剥き、ひと口大に切ります。';
$altCap05 = '水を入れたボウルでブロッコリーを洗い、水気を切ります。';
$altCap06 = '鍋に水1500mlを入れて沸騰させ、塩大さじ1とブロッコリーを入れ、2分ほどゆでます。茎の部分を触って硬さを確認し、好みに合わせてゆで時間を調整してください。';
$altCap07 = 'ゆで終わったら、ザルに上げて水気を切り、粗熱を取ります。';
$altCap08 = 'ブロッコリーをラップで包み、ファスナー付きの保存袋に入れて、冷凍保存します。';
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
					<span class="recipe-header__ttl">ブロッコリーの正しいゆで方</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第46回は「ブロッコリーの正しいゆで方」です。ブロッコリーをゆでるときのポイントをご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>今日は、具だくさんの温野菜サラダを作りましょう<br>まずは野菜の下ごしらえから行なっていきます<br>私はにんじんやじゃがいもの下ごしらえをするので、<br class="u-only__pc">ミエさん、ブロッコリーをゆでるのをお願いしてもいいですか ？</p>
				</div>
			</div>

			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>分かりました！任せてください<br>これくらいなら一人でも大丈夫です！<br>よしっ、まずはブロッコリーを切って、<br class="u-only__pc">お湯に入れてっと～</p>
				</div>
			</div>

			<p class="center mb2">～10分後～</p>

			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>わぁ、なにこれ…<br>ブロッコリーがすごく柔らかくなっちゃった<br>歯ごたえが全然なくて、美味しくない…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_02">
				<div class="inner">
					<p>ゆで過ぎてしまったんですね</p>
				</div>
			</div>

			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>たまに、ゆで過ぎちゃうんですよね<br>何がいけないのかな…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ブロッコリーを上手にゆでるにはコツが必要です！<br>栄養をキープした状態で、かつ美味しく食べられるように、<br class="u-only__pc">一緒にゆでていきましょう</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/wSLggmREfAQ?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">ブロッコリーのゆで方</h3>
				<p class="mb3">サラダやスープ、お弁当の彩りなどで大活躍するブロッコリーは、ビタミンやカリウムを豊富に含んだ栄養満点の野菜。ブロッコリーを美味しくいただくために、ブロッコリーの正しいゆで方を学びましょう。</p>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料</h3>
					<dl class="recipe-design__materials">
						<dt>ブロッコリー</dt>
						<dd>1株</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>塩（自然塩）</dt>
						<dd>大さじ１</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>水</dt>
						<dd>1500ml</dd>
					</dl>
				</div>
				<div class="recipe-design__howto mb3">
					<h4 class="recipe__ttl">ブロッコリーのゆで方の手順</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap01); ?>
							<br>
							※茎が短い場合、あらかじめカットしてある状態の場合は、房から切り始めてもOKです。
						</dd>
					</dl>

					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-03@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-04@2x.jpg"
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
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
							<br>
							ブロッコリーは、房のつぼみの部分にゴミや虫が残りやすい野菜です。<strong>水にしばらく浸けてから振り洗い</strong>すると、ゴミが取れやすくなります。虫などが気になる場合は、水を何度か変えながら、水の中で振り洗いをしましょう。
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-06@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap06); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-07@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap07); ?>
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
							<h5>ブロッコリーの茎は食べられる？</h5>
							<p>残ったブロッコリーの茎はどうしたらよいか分からない、という人も多いのではないでしょうか？そのままだと硬くて食べづらい茎ですが、適切な処理をすれば、つぼみと同じように食べることができますよ！ブロッコリーの茎は<strong>ビタミンCやカロテンなどの栄養素も豊富で、食物繊維たっぷり</strong>。ぜひ捨てずに調理してみてください。</p>
							<p>まず茎の硬い皮を、厚めに切り落とします。芯の白っぽくなっている部分を取り出したら、ひとくち大に切り、房と一緒にゆでてください。<br>ゆで上がった茎は程よい歯ごたえがあり、<strong>炒め物や汁物に使うとより美味しく</strong>食べることができます。</p>
						</div>
					</div>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h4 class="plus1__ttl">ブロッコリーのほかの調理方法</h4>
							<p>ブロッコリーは、電子レンジや圧力鍋でも柔らかく調理することができます。</p>
						</div>
					</div>
					<div>
						<h5 class="recipe__ttl mb0">電子レンジ</h5>
						<p class="mb3">耐熱皿に小房に分けたブロッコリーをのせ、大さじ1～2程度の水を回しかけます。ラップをして、電子レンジ500ｗで3分加熱しましょう。</p>
						<h5 class="recipe__ttl mb0">圧力鍋</h5>
						<p class="mb3">ブロッコリーは圧力鍋を使って蒸すと、栄養を逃すことなく、美味しく調理することができます。<br>調理の方法はご使用の圧力鍋によって異なりますが、圧力をかけすぎず、歯ごたえを残すようにすることがポイントです。</p>
					</div>

					<h3 class="recipe__ttl_l mb0">ブロッコリーの保存方法</h3>

					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/46/tech46-08@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap08); ?>
							<br>
							保存期間は、約１カ月です。
						</dd>
					</dl>

					<p>ブロッコリーは日持ちせず、変色しやすい野菜です。<strong>黄色く変色した状態になると、栄養価が落ちる</strong>ので、早めに食べ切るようにしましょう。<br>ブロッコリーのきれいな緑色と栄養を維持しながら長持ちさせたい場合は、<strong>冷凍保存</strong>がおすすめ。生のまま保存する場合と、ゆでてから保存する場合の、冷凍保存の方法をご紹介します。</p>

					<div>
						<h5 class="recipe__ttl mb0">生のまま冷凍する方法</h5>
						<p class="mb3">生のまま冷凍保存すると、<strong>ビタミンなどの栄養素を損なうことなく</strong>、保存することができます。<br>まずブロッコリーを小房に分けて、それぞれをラップに包み、ファスナー付きの保存袋に入れてください。そのまま冷凍庫に入れれば完了です。<br>保存期間は、約1カ月です。</p>
						<h5 class="recipe__ttl mb0">ゆでてから冷凍する方法</h5>
						<p class="mb3">ゆで上がったら水気を切り、キッチンペーパーで残りの水気を拭き取ります。粗熱がとれたら、ブロッコリーをファスナー付きの保存袋に入れて、冷凍庫で保存しましょう。<br>調理する際、生のまま保存したブロッコリーよりも<strong>味が染み込みやすくなるので、お料理の時短にもつながります</strong>。保存期間は、約1ヵ月です。</p>
					</div>

				</div>
				<div>
					<h3 class="recipe__ttl_l mb0">ブロッコリーの作り置きレシピ</h3>
					<p class="mb3">ブロッコリーは、お弁当にも使え、夕食の一品にもなる、<strong>便利な常備菜</strong>。作り置きをしておけば「もう一品ほしい」「緑が足りないな」というときに大活躍です。ブロッコリーの簡単レシピをお教えします。</p>
					<div class="mb3">
						<h4 class="recipe__ttl">ブロッコリーのごまマヨ和え</h4>
						<p>ブロッコリーを小房に切り、塩を入れた熱湯で30秒ゆで、ザルに上げます。キッチンペーパーで水気を拭き取り、軽く塩を振ってください。マヨネーズ、ごま油、ポン酢、すりごまを混ぜて、ブロッコリーと和えたらできあがりです。</p>
					</div>
					<div class="mb3">
						<h4 class="recipe__ttl">半熟卵とブロッコリーのアボカドサラダ</h4>
						<p>半熟のゆで卵を8等分に切っておきます。<br>ブロッコリーは小房にして、塩ゆでしてからザルに上げ、粗熱を取り水気をよく切ってください。<br>アボカドの皮と種を取り除いて、一口大に切り、ボウルに移してレモン汁と合わせます。アボカドをフォークなどで軽く潰したら、ブロッコリーを入れましょう。<br>最後にマヨネーズ、ケチャップ、おろしにんにく・砂糖で味付けして、よく混ぜ合わせたら完成です。</p>
					</div>
					<div class="mb3">
						<h4 class="recipe__ttl">ブロッコリーの茎で簡単きんぴら</h4>
						<p>ブロッコリーの茎とにんじんを斜めに切り、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にします。<br>フライパンにごま油を入れてブロッコリーとにんじんを炒め、しんなりしてきたら、めんつゆとみりんを入れます。汁気がなくなってきたら器に盛って、ごまを振ったら完成です。</p>
					</div>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>教えてもらった方法でゆでたブロッコリー、<br class="u-only">しっかりと歯ごたえがあって美味しい～！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ブロッコリーのゆで加減をマスターしたことで、<br class="u-only">野菜スープも美味しくなりましたね！</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>ブロッコリーのゆで方は、これでもう失敗しないぞ～<br>明日持って行くお弁当にも、ブロッコリーを入れてみよう♪</p>
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
