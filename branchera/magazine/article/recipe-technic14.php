<?php
//base
include( "../../function.php" );
$content = get_id_data( '15014' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「あさりの砂抜き・塩抜きのやり方」を動画で解説。潮干狩りなどで取ったあさりと購入したあさり、それぞれの砂抜きと塩抜きの方法をご紹介します。ほかにも、簡単に砂抜きできるお湯を使った裏技や、下処理済のあさりの保存方法などを詳しく解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'sH5GrcZpHOw';

//導入文
$introTxt = '第14回は、「あさりの砂抜き・塩抜き」です。食べたときの「ジャリッ」がなくなる、あさりの砂抜き・塩抜きの方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = 'あさりが生息している海の浅い場所に近い環境を作り、あさりに砂を吐かせます。<br>バットに洗ったあさりを入れ、<strong>3％濃度の塩水</strong>を注ぎます。（目安：水1カップ200mlに塩<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1）<br>塩水の量は、あさりの頭が少し出る程度までにとどめましょう。多すぎると、貝が呼吸できなくなってしまいます。';
$altCap02 = 'アルミホイルまたは新聞紙で覆い、竹串などで<strong>空気穴</strong>を開けます。あさりは暗い場所が好きなので、あさりにとって居心地のよい環境を作ります。';
$altCap03 = '潮干狩りで取ったあさりは、常温で<strong>5～6時間</strong>塩水に浸けて放置して、砂抜きします。室内の気温が高い場合は冷蔵庫に入れましょう。<br>※購入したあさりは、常温で30分以上塩水に浸けて放置します。';
$altCap04 = '潮干狩りで取ったあさりは、海水を含んでいるので、そのまま調理すると塩辛くなります。そのため、<strong>塩抜きの工程が必要</strong>です。<br>砂抜きをしたあさりを塩水から出し、ざるに入れて、常温で1時間放置して塩抜きをしましょう。<br>※購入したあさりは、この作業は不要です。';
$altCap05 = '塩抜きをしたら、流水で殻と殻をこすり合わせるようにしてよく洗ってください。';
$altCap06 = '砂抜きをしてよく洗ったあさりを、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>と一緒に<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。<br>煮立ったら<a href="'.$base_url.'/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で2～3分煮て、あさりの口が開いたら<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>をすくいます。<br><a href="'.$base_url.'/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>を煮汁で溶きながら加えて、吸い口に小ねぎを散らしてできあがりです。';
$altCap07 = 'シンプルな味付けで、あさりのうまみを生かしたパスタです。<br>※詳しい作り方は、「<a href="'.$base_url.'/magazine/article/recipe06.php" class="recipe-design__link">あさりとキャベツのパスタ</a>」をご覧ください。';
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
			</div>
			<hr class="recipe__line">
      <?php
        $recipeIcon ='mie_01';
        $speech ='マユ先生～！<br>よかったら、これどうぞ！（ドン！）<br>あさりをたくさん取ってきたので、もらってください';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_03';
        $speech ='うわっ！こんなにいっぱいのあさり！どうしたんですか！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='じつは今朝、潮干狩りに行ってきて、たくさんあさりが取れたんです';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='わぁ～、こんなにいっぱい！ありがとうございます！<br>ところでミエさん、あさりの砂抜きと塩抜きの方法って知っていますか？<br>潮干狩りってことは、まだ下処理していないってことですよね？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='そ…そうなんです<br>なので、あさりの下処理の方法も教えてもらおうかな～…なんて<br>マユ先生、あさりの砂抜きと塩抜きの方法を教えてください！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='あさりの下処理は、取ってすぐが勝負ですから、<br class="u-only__pc">さっそく始めましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb2">あさりの砂抜き・塩抜きの方法</h3>
				<h4 class="recipe__ttl">あさりの砂抜きの方法</h4>
				<div class="recipe-design__howto mb3">
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'.strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap01); ?>
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
							<h3>塩の分量に注意！</h3>
							<p>あさりが住んでいる海水の塩分濃度（3％）より、塩分が濃過ぎても薄過ぎても、砂をスムーズに吐いてくれません。特に、濃過ぎるとあさりが死んでしまうこともあるので要注意。</p>

						</div>
					</div>
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
							<h3>死んだあさり・食べられるあさりの見分け方</h3>
							<p>つついても殻が開いたままだったり、異臭がしたりするものは、死んだあさりです。調理すると臭いが付いてしまう場合があるので、使わないようにしましょう。<br>また、貝同士をぶつけたときに軽い音がするものは、中身が入っていない場合があります。</p>

						</div>
					</div>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」'.strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap02); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb2">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap03); ?>
						</dd>
					</dl>
					<h4 class="recipe__ttl">あさりの塩抜きの方法</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap04); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap05); ?>
						</dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h3 class="plus1__ttl">お湯で簡単・短時間に砂抜きする方法</h3>
							<p>塩水の代わりにお湯を使うと、あさりの砂抜きを短時間で行なうことができます。</p>
              <p>あさりがすべて浸かるくらいの、50度程度のお湯（真水）を用意します。その中に洗ったあさりを入れ、さらにこすり洗いします。そのまま10～20分置いておくだけで、砂抜きは完了。最後に、ぬるま湯でよく洗い流しましょう。</p>
              <p>なぜお湯で簡単に砂抜きができるのかというと、急激な温度変化にあさりが反応する、「ヒートショック」の原理を利用しているから。<br>お湯に浸けられたあさりは、呼吸して体を冷やそうと勢いよく水の出し入れを始めるので、砂も素早く排出されやすいといわれています。また、お湯に浸けられると少しだけ口が開くので、その状態で洗うと中の砂まできれいに落とすことができます。</p>
              <p>ポイントは、お湯の温度。熱過ぎるとあさりに火が通ってしまうので要注意！</p>
						</div>
					</div>
          <section>
            <h3 class="recipe__ttl_l mb0">失敗？あさりが開かない場合はどうする？</h3>
            <p>あさりが口を閉じたまま、なかなか開いてくれない…。「もしかしてやり方を間違えた？」と思ったら、次の点を確認してみましょう。</p>
            <h4 class="recipe__ttl">塩水の濃さ</h4>
            <p>塩分濃度が薄いと、砂を吐かないことがあります。塩水を作り直して、様子を見てみましょう。</p>
            <h4 class="recipe__ttl">置き場所</h4>
            <p>明るく騒がしい場所では、あさりがリラックスして呼吸できず、砂抜きしづらくなります。バットの上をアルミホイルや新聞紙で覆って暗くしたら、静かな場所に置き直してみましょう。</p>
            <h4 class="recipe__ttl">水温</h4>
            <p class="mb3">水温が低過ぎるとあさりが動けなくなってしまうので、水温が下がっている場合は50度程度になるように調節しましょう。また、暖かい場所に移動させるのも効果的です。</p>
          </section>
          <section>
            <h3 class="recipe__ttl_l mb0">砂抜き・塩抜きをしたあさりの保存方法とは？</h3>
            <p class="mb3">1日で調理しきれない量のあさりは、砂抜き・塩抜きを済ませてから冷蔵・冷凍保存しましょう。<br>あさりを１食分ずつ小分けにしてファスナー付き保存袋に入れて、空気を抜いて口を閉じます。この状態で冷蔵庫、または冷凍庫に入れましょう。<br>保存期間の目安は、<strong>冷蔵の場合は2～3日、冷凍の場合は2～3週間</strong>です。</p>
          </section>
          <section>
            <h3 class="recipe__ttl_l mb0">あさりを使った料理レシピ</h3>
            <p>あさりのうまみは、和・洋・中を問わず幅広いメニューによく合います。ストレートに味わうなら、シンプルな汁物や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>が一番！</p>
            <h4 class="recipe__ttl">あさりの味噌汁</h4>
            <div class="u-clearfix mb2">
						<p>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-06@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<?php echo ($altCap06); ?>
						</p>
					</div>
					<h4 class="recipe__ttl">あさりとキャベツのパスタ</h4>
					<div class="u-clearfix mb2">
						<p>
							<figure class="u-float__right">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/14/tech14-07@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<?php echo ($altCap07); ?>
						</p>
					</div>
          </section>
				</div>
			</div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='わぁ～、あさりが動いている音がする！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='しっかり砂抜きをすることで、「ジャリッ」とした食感がなくなって<br class="u-only__pc">あさりがもっと美味しくなりますよ！<br>スーパーで買ったあさりも、砂が残っていることがあるので<br class="u-only__pc">砂抜きをしてからお料理に使うと安心です';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','14010'),
				array ('recommend-recipe-id','15140'),
				array ('recommend-recipe-id','15114'),
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
<?php
    $toindex_url = "/magazine/index_comic02.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
