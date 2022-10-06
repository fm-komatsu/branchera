<?php
//base
include("../../function.php");
$content = get_id_data('15023');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「ピーラーの使い方」を動画で解説。野菜の皮むきに用いるピーラー。ピーラーを使った真っすぐな食材のむき方、丸い食材のむき方、じゃがいもの芽の取り方を詳しくご紹介します。また、「T型は長い食材や大きい食材」「I型は丸い食材」など、各型ごとの特徴や、適した食材も合わせてご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

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
		$panAry[] = array("/magazine/index_comic02.php", "今さら聞けない料理のアレコレ");
		include($inc_path . "/lib/inc/pan.php");
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第23回は、「ピーラーの使い方」です。きれいに食材の皮がむける基本のT型ピーラーから話題のピーラーまで、さまざまなピーラーの使い方をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>マユ先生、僕、ピーラーを使うのが下手で…<br>毎回、手を切ってしまいそうになるんです
					</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ピーラーは、角度や力加減に気を付ければ<br class="u-only__pc">きれいに皮をむくことができますよ！</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p> 今まで角度や力加減を、気にしたことがなかったです…<br>正しいピーラーの使い方、教えてください！ </p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>食材によってピーラーの使い方が違うので、<br class="u-only__pc">ぜひ、この機会にいろいろな使い方を知っておきましょう！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png" alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/eF5Wcx8q7yk?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0">実はたくさんある！ピーラーの種類</h3>
					<p class="mb2">皮むきの時短アイテムとして大活躍のピーラー。そのピーラーにもいろいろな種類があるのをご存じですか？まずは使い方の前に、ピーラーの種類と選び方をご紹介しましょう。</p>
					<div class="mb2">
						<h4 class="recipe__ttl" id="itpeeler">T型ピーラー</h4>
						<div>
							<div class="u-float__left">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-01@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」T型ピーラー'); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</div>
							<p>基本の形はこのT型。T型ピーラーは、刃の下にあるアゴを食材にあて、引きながら皮をむいていきます。<br>T型は、量販店でも買えるとてもお手軽なタイプで、刃が幅広のため、一度に多くの皮をむくことのできる便利な一品です。柄が握りやすく、長い食材や大きい食材の薄皮むきに向いています。<br>このT型が大きくなったタイプがワイドピーラー。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic18.php" class="recipe-design__link">キャベツの千切り</a>やたまねぎのスライスもすぐにできあがります。</p>
						</div>
					</div>
					<div class="mb2">
						<h4 class="recipe__ttl" id="ipeeler">I型ピーラー</h4>
						<div>
							<div>
								<figure class="u-float__left w45">
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/technic23_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/technic23_other01@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」Ｉ型ピーラー'); ?>" style="max-width:362px" class="u-img__max">
								</figure>
							</div>
							<p>棒のように縦に長いI型ピーラーは、ナイフのように使えるため、丸い食材にぴったり。I型は両刃（りょうば）といって刃先の両面に刃が付いていることが多く、右利き・左利きどちらでも使えるようになっています。<br>ただ、縦型でむける皮の幅が比較的狭いので、手を動かす回数が多くなることと、食材を<a href="<?php echo $base_url ?>/magazine/article/recipe-technic34.php" class="recipe-design__link">まな板</a>に置いて使うのが難しいことなどから、子ども向きではないかもしれません。</p>
						</div>
					</div>
					<div class="mb2">
						<h4 class="recipe__ttl" id="peeler">千切りピーラー</h4>
						<div>
							<div>
								<figure class="u-float__left w45">
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/technic23_other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/technic23_other02@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」千切りピーラー'); ?>" style="max-width:362px" class="u-img__max">
								</figure>
							</div>
							<p>千切りピーラーには、皮をむいたときにそのまま別刃が細切りにスライスしていくものと、裏返して使うと千切りができるタイプがあります。形はT型と似ていますが、千切り用の刃はギザギザになっており、力の入れ方にコツが必要です。 <a href="<?php echo $base_url ?>/magazine/article/recipe-technic36.php" class="recipe-design__link">白髪ねぎ</a>も簡単にできるので、料理の幅も広がりますよ。</p>
						</div>
					</div>
					<div class="mb2">
						<h4 class="recipe__ttl">きんぴらピーラー</h4>
						<div>
							<p>きんぴらピーラーとは、千切りピーラーのギザギザの刃の間隔を広くしたもの。きんぴら<a href="<?php echo $base_url ?>/magazine/article/recipe-technic45.php" class="recipe-design__link">ごぼう</a>を、丁度よい太さにスライスできる優れものです。</p>
						</div>
					</div>
					<div>
						<h4 class="recipe__ttl">栗ピーラー</h4>
						<div>
							<p>栗ピーラーは、むくのが大変なかたい鬼皮も、薄い渋皮も一度にむける栗専用の便利グッズです。ペンチのようなハサミ型、短刀のような形のものがあります。栗好きには必需品ですね。</p>
						</div>
					</div>
					<div class="recipe-design__plus1 plus1 mb3">
						<section class="plus1__row">
							<h3 class="plus1__ttl mb2">子どもは何歳からピーラーを使えるの？</h3>
							<figure class="u-float__right w45">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/technic23_other03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/technic23_other03@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」ピーラーで皮むきの手伝いをする子供（イメージ）'); ?>" style="max-width:362px" class="u-img__max">
							</figure>
							<p>子どもは手や指の力が弱いため、お手伝いをしたがっても任せられることが少ないですよね。手や指が発達して、道具が使えるようになってくるのは3、4歳といわれています。そのため、ピーラーを使わせるのも<strong>3～4歳くらいからがよい</strong>でしょう。</p>
							<p>子どもに<strong>おすすめのピーラーは、U型</strong>というニュータイプ。トングのような形をしていてグリップがしなり、ストッパーにもなるため、刃の部分に直接手指が触れることなく、安全に皮をむくことができます。</p>
							<p>しかし、いくら安全とはいえ、子どもだけでピーラーを使わせるのではなく、必ず大人もそばに付いて見守りましょう。</p>
						</section>
					</div>
					<section class="mb4">
						<h3 class="recipe__ttl_l mb0">正しいピーラーの使い方とは？</h3>
						<p class="mb2">せっかく時短を期待してピーラーを利用しても、間違った使い方をしては効果半減です。正しく使えば、ピーラーほど便利な調理グッズはありません。安全でスピーディー、しかもきれいに仕上がるピーラーの使い方とは、どのような方法でしょうか？</p>
						<h4 class="recipe__ttl">真っ直ぐな食材の場合</h4>
						<p>真っ直ぐな食材には、<a href="<?php echo $base_url ?>/magazine/article/recipe02.php" class="recipe-design__link">だいこん</a>や<a href="<?php echo $base_url ?>/magazine/article/recipe-technic146.php" class="recipe-design__link">にんじん</a>といった野菜が当てはまります。幅広い面で長く皮をむけるものが向いています。</p>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-02@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">真っ直ぐな食材は手で持たずに、横向きにして置きます。</dd>
						</dl>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-03@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">ピーラーのアゴを食材に当てて、力を入れずに横に動かします。横に動かすことで、均一にむくことができます。</dd>
						</dl>
						<h4 class="recipe__ttl">むき方の悪い例</h4>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-05@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">動かす方向に、親指が出ていると危険です。</dd>
						</dl>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-06@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">ピーラーを持つ手に力を入れすぎると、食材に引っ掛かり、均一にむけません。</dd>
						</dl>
						<h4 class="recipe__ttl">丸い食材の場合</h4>
						<p>丸い食材には、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>などのいも類やカブ、ラディッシュなどがあります。特に小さい野菜はむきにくいため、注意しましょう。</p>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-07@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">丸い食材は、持つ手の向きを変えながら、ピーラーを下に引きます。</dd>
						</dl>
						<h4 class="recipe__ttl">むき方の悪い例</h4>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-08@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">食材を持つ際に、親指が動かす方向にあると危険です。</dd>
						</dl>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-09@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">親指のつけ根の上に、ピーラーが重なると危険です。</dd>
						</dl>
						<h3 class="recipe__ttl">じゃがいもの芽の取り方</h3>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/23/tech23-10@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">じゃがいもの芽はピーラー横についている芽取りで、えぐり取ります。じゃがいもの芽には、ソラニンという有毒物質が含まれているので、必ず取るようにしましょう。※大きい芽が出たじゃがいもは、根元から完全に取り除きます。</dd>
						</dl>
					</section>
					<section>
						<h3 class="recipe__ttl_l mb0">ピーラーのお手入れ方法とは？</h3>
						<p class="mb2">ピーラーにはいろいろな型があるだけでなく、何に使うかによって刃の素材も異なります。それぞれの特徴と、お手入れ方法をご紹介しましょう。</p>
						<div>
							<h4 class="recipe__ttl">ステンレス製</h4>
							<p>かたくて切れ味がよく、耐久性があるステンレス製ピーラー。ただ水気を切らないと錆びやすいため、使用後はすぐに洗ってよく乾かすことが大切です。S字フックなどにかけてキッチンに干しておくのがおすすめ。</p>
							<p>刃が汚れて黄ばんだ場合は、重曹につけ置きしてから、洗いましょう。金属のため、塩素系漂白剤は使えないので注意。時間がなければ、硬めの歯ブラシに食器用洗剤を付けてよく洗ってください。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">セラミック製</h4>
							<p>耐熱性があり、軽くて錆びることのないセラミック製ピーラー。切れ味も長持ちします。衝撃に弱い部分があるため、ぶつけたり落としたりしないように気を付けましょう。漂白除菌がOKなので、使用後は台所用漂白剤で黄ばみや汚れを落としてください。</p>
						</div>
						<div>
							<h4 class="recipe__ttl">チタン製</h4>
							<p>抗菌性があり、水気に強く錆びないのがチタン製ピーラー。丈夫で長持ちして、金属アレルギーがある人も安心して使えます。清潔に保ちやすいため、赤ちゃんの<a href="<?php echo $base_url ?>/magazine/article/recipe-technic63.php#rinyushoku" class="recipe-design__link">離乳食</a>作りなどにも向いています。塩分や酸・アルカリにも影響されず、強い素材なので、食器洗いや乾燥機も使えるという特徴も。価格は少し高めです。</p>
						</div>
						<hr>
						<div>
							<p>ちなみに、どのタイプのピーラーでも、購入するときのポイントは「<strong>皮が詰まりにくいタイプを選ぶ</strong>」ということ。むいている最中に皮が詰まってしまい、いちいち作業を中断するのはとてもストレスですよね。できれば事前に口コミなどを見て、使用感を調べてから購入できるとベストです。</p>
							<p>また、ステンレス製のピーラーの切れ味が落ちたら、買い替えのタイミングと考えてよいでしょう。セラミック製やチタン製は、比較的切れ味が落ちにくいといわれています。</p>
						</div>
					</section>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>にんじんを置いてむいたら、スラスラむけました！<br>ピーラーって軽い力でも、簡単にむけるのですね</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ピーラーを上手に使って、皮を薄くむけば<br class="u-only__pc">栄養素を残すことができますよ<br>ピーラーは包丁で皮をむくより簡単なので、<br class="u-only__pc">正しい使い方を覚えて活用してくださいね！
					</p>
				</div>
			</div>
			<div class="recipe__assist mb3">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>鬼皮とは</dt>
							<dd>木の実などの外側の厚くかたい皮のこと。</dd>
						</dl>
						<dl class="recipe-assist__term">
							<dt>渋皮とは</dt>
							<dd>樹木や果実の外皮の内側にある薄い皮のこと。タンニンを多く含み、渋いことから付いた名称。</dd>
						</dl>
					</div>
				</div>
			</div>
			<?php
			//関連記事
			$recommendrecipe = array(
				array('recommend-recipe-st'),
				array('recommend-recipe-id', '15033'),
				array('recommend-recipe-id', '14002'),
				array('recommend-recipe-id', '14017'),
				array('recommend-recipe-end')

			);
			?>
			<?php
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
