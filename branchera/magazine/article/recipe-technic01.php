<?php
//base
include("../../function.php");
$content = get_id_data('15001');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「包丁の持ち方」を動画で解説。包丁の正しい持ち方・姿勢をはじめ、左手の添え方、切るときの力の入れ方など、上手に包丁を使うための注意点を分かりやすくご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_comic02.php#technique", "今さら聞けない料理のアレコレ");
		include($inc_path . "/lib/inc/pan.php");
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
		?>
		<section class="main__wrapper recipe">
			<div class="recipe__header recipe-header technic">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">　</span>
					<span class="recipe-header__ttl">料理のプロに教わる！包丁の正しい持ち方・姿勢</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第1回は、お料理には欠かせない「<a href="<?php echo $base_url ?>/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>の使い方」です。なんとなく自己流でやっていた方も、包丁の正しい持ち方・姿勢を学んで、よりスムーズな料理を目指しましょう。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" alt="ミエ（ママ）" style="max-width:70px" class="u-img__max">
				</figure>
				<p>マユ先生！お料理の基本を習いにきましたー<br>今さら聞けないことばかりですが、よろしくお願いします</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png" alt="マユ先生" style="max-width:70px" class="u-img__max">
				</figure>
				<p>ミエさん、ミニレッスンへようこそ<br>お料理って家庭科の授業でちょっと習ったくらいであとは自己流になりがちですよね</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01@2x.png" alt="ミエ（ママ）" style="max-width:70px" class="u-img__max">
				</figure>
				<p>そうなんです…まず教えてほしいのが包丁の使い方！なんです<br>そもそも持ち方とか合っているのかなって</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png" alt="マユ先生" style="max-width:70px" class="u-img__max">
				</figure>
				<p>包丁は正しく扱うことで、お料理の効率がグンとあがりますよ<br>それでは、実際にレッスンしていきましょう</p>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png" alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/TY2SwjN-LYM?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">包丁の正しい持ち方とは？</h3>
				<p>包丁には、それぞれ<strong>用途に合った種類と持ち方</strong>があり、包丁に合わせて持ち方を変えるだけで気持ちよく包丁を動かすことができます。また、同じ包丁でも、食材によって持ち方を変えることもあります。包丁の持ち方は数種類ありますが、ここでは、<strong>基本的な包丁の正しい持ち方</strong>をお伝えします。包丁を正しく持つと、包丁に効率よく力を伝えられるため、長時間作業しても疲れにくくなりますよ。</p>
				<div class="recipe-design__howto mb0">
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-01.png" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">中指を包丁の柄の付け根部分に引っかけます。</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-02.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-02.png" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">親指と人差し指で、包丁の柄の付け根部分を挟み中指・薬指・小指の3本でしっかりと柄を握ります。</dd>
					</dl>
					<div class="recipe-design__check check mb3">
						<div class="check__row">
							<div class="check__ttl">
								<h4 class="check__ex center">
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
								</h4>
							</div>
							<h5>左利きの人は、左利き用の包丁を！</h5>
							<p>あなたは右利き？左利き？もし左利きなら、<strong>左利き用の包丁</strong>に変えることをおすすめします。一般に出回っている包丁は右利き用のもの。右利きと左利きでは刃の角度が異なります。左利き用の包丁を使いはじめたら、切れ味のよさに驚きますよ！</p>
						</div>
					</div>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h4 class="plus1__ttl">包丁の主な持ち方は３種類</h4>
							<p>包丁の持ち方には種類と名前があります。最も基本的な持ち方は、動画でご紹介した<strong>「握り型」</strong>。野菜をリズミカルに刻むときに適しています。</p>
							<p>また、魚用の出刃包丁や刃渡りの長い刺身包丁を使うときは<strong>「指差し型」</strong>で。人差し指を包丁の背に乗せて、刃がブレないように安定させます。</p>
							<p>繊維がある食材など、強い力が必要なときは<strong>「押さえ型」</strong>で。親指と人差し指で包丁の腹を挟み込み、安定性を保ちます。</p>
						</div>
					</div>
					<h3 class="recipe__ttl_l">包丁を使う時の正しい姿勢とは？</h3>
					<p>包丁を使うときは正しい姿勢で立ちましょう。正しく立つことで、<strong>包丁をスムーズに動かすことができ、疲れも半減します。</strong>また、食材を真上から見るため、正確に切ることができます。</p>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-03.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-03.png" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">包丁を使う際の姿勢は、調理台と体の間に握りこぶし1つ分ほどあけて立ちます。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic34.php" class="recipe-design__link">まな板</a>は調理台と平行に、少しスペースをあけて置きます。</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-04.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/01/tech01-04.png" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">最後に包丁の持ち手が右手なら右足、左手なら左足を半歩後ろに下げ、まな板から少し斜めに立つようにしましょう。</dd>
					</dl>
					<h3 class="recipe__ttl_l">包丁の上手な使い方とは？</h3>
					<p>包丁を上手に使うためには、まず、<strong>まな板がずれたり、動いたりしないようにする</strong>ことが大切です。まな板の下に水で濡らし固く絞ったふきんを敷き、動かないように固定しましょう。<br>また、包丁を使用しないときは、包丁の刃を自分の方へ向けずに、<strong>背を向けてまな板の奥に横にして置いてください</strong>ね。縦に置くと包丁が落ちたときにケガをしてしまいますよ。</p>
					<p class="mb3">では、実際に包丁を使うときの注意点をお伝えしますね。</p>
					<div class="mb2">
						<h4 class="recipe__ttl">左手は「猫の手」で添える</h4>
						<p>包丁は安全に気を付けて使うことが何より大切です。安全に包丁を使うためには、左手の添え方が重要です。</p>
						<p>最初に人差し指、中指の第一関節を食材に付けます。人差し指と中指の第一関節を包丁の側面に当て、切りましょう。親指は伸ばさずに、中指、人差し指より短くしてくださいね！これは<strong>「猫の手」</strong>と呼ばれる添え方で、安全な包丁の使い方の基本です。</p>
					</div>
					<div class="mb2">
						<h4 class="recipe__ttl">上手な切り方は「引いて押す」</h4>
						<p>上手な切り方のポイントは、包丁をまな板に対して、常に<strong>直角</strong>に使うこと。包丁は、手前に引き、奥に押すときに切れますから、「上から下へ」ではなく、<strong>「引いて押す」</strong>を繰り返しながら切るのが基本です。</p>
						<p>ただし、刺身は刃先を使って、引きながら。繊維のある肉などは、前に押しながら切ります。</p>
					</div>
					<div>
						<h4 class="recipe__ttl">皮をむくには包丁を持つ手を固定する</h4>
						<p><a href="<?php echo $base_url ?>/magazine/article/recipe-technic26.php" class="recipe-design__link">りんご</a>・なしなどの皮は上手にむきたいものですね。まず、果物を左手に持ち、右手で包丁の刃を挟むように持ちます。<strong>包丁を持つ手を固定</strong>して、果物を右へ回転させるようにゆっくりスライドしていきます。このとき、包丁を持つ手の親指を皮に添えると、勢いよく切り過ぎる心配がなくなりますよ。<br>また、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic03.php#daikon" class="recipe-design__link">大根</a>の桂むきも同じように、大根の方をまわして皮をむいていきます。</p>
					</div>
				</div>
			</div>

			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" alt="ミエ（ママ）" style="max-width:70px" class="u-img__max">
				</figure>
				<p>うーーん、なんだかちょっとぎこちないかな</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mayu_01@2x.png" alt="マユ先生" style="max-width:70px" class="u-img__max">
				</figure>
				<p>慣れた持ち方があると、最初は窮屈かもしれませんが、1週間ほど意識するとだんだん慣れてきますよ</p>
			</div>
			<div class="recipe-talk">
				<figure>
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/icn_mie_01.png" alt="ミエ（ママ）" style="max-width:70px" class="u-img__max">
				</figure>
				<p>箸の持ち方のようなものですね！<br>お家でも意識して、包丁を使いたいと思います♪</p>
			</div>
			<?php
			//関連記事
			$recommendrecipe = array(
				array('recommend-recipe-st'),
				array('recommend-recipe-id', '15035', 'cooking_2208_1'),
				array('recommend-recipe-id', '15003', 'cooking_2208_2'),
				array('recommend-recipe-id', '15024', 'cooking_2208_3'),
				array('recommend-recipe-end')

			);
			include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
			<div class="mb0">
				<?php
				include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-footer.php");
				?>
			</div>
		</section>
	</article>
</main>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
