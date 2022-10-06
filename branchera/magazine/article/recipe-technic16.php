<?php
//base
include( "../../function.php" );
$content = get_id_data( '15016' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「玉ねぎのみじん切り」を動画で解説。玉ねぎのみじん切り方法をはじめ、涙が出ないようにする裏ワザや、みじん切りに適した保存方法をご紹介します。また、玉ねぎ以外の野菜のみじん切り方法も合わせてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
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
					<span class="recipe-header__ttl">玉ねぎのみじん切りの方法</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。第16回は、「玉ねぎのみじん切りの方法」です。簡単に細かく切ることができる、みじん切りの方法をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>マユ先生～、ちょっと相談してもいいですか？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_03">
				<div class="inner">
					<p>どうしたんですか、ミエさん！暗い顔して…</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>ハンバーグを作ろうと思ってるんですけど<br class="u-only__pc">玉ねぎのみじん切りって、いつも細かくできなくて…<br>手順がよく分からないんです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>ハンバーグ、いいですね！<br>玉ねぎは食感がアクセントになって<br class="u-only__pc">ハンバーグの美味しさを引き立たせますよね！<br>今回はハンバーグになくてはならない<br class="u-only__pc">玉ねぎのみじん切りの方法をご紹介します</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/MTrHK7aJcmo?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 id="mijingiri" class="recipe__ttl_l">玉ねぎのみじん切りの方法</span></h3>
					<p>食材を1～2mm程度に細かく刻むみじん切りは、料理の基本です。特に玉ねぎのみじん切りは幅広い料理で大活躍。サクサクッとみじん切りができるだけで、ぐーんとメニューの幅が広がります。</p>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-01@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">玉ねぎの上部を切り落とし、皮をむきます。</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-02@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">縦半分に切り、根元は切り離さず、<strong>縦2～3mm幅</strong>に細かく切り込みを入れます。</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-03@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">玉ねぎを90度回転させ、根元を残したまま、包丁を<strong>水平方向</strong>に動かして2～3ヶ所切り込みを入れます。</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-04@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">端から垂直方向に細かく切ります。</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/tech16-05@2x.jpg"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">粗ければ、包丁の刃先を左手で軽く押さえ、右手で<strong>弧を描くように</strong>動かして刻みます。</dd>
					</dl>
				</div>
				<div class="recipe-design__plus1 plus1 mb3">
					<div class="plus1__row">
						<h3 class="plus1__ttl">涙が出ないようにするには？</h3>
						<p>「玉ねぎをみじん切りにすると涙が出るからイヤ」、という人もいますよね。<strong>涙の原因は「硫化アリル」という成分</strong>。血液をさらさらにしてくれる働きもある成分です。包丁で玉ねぎを切ると細胞が壊れて硫化アリルが気化し、目を刺激するため、涙が出ます。涙が出なくなる裏技をご紹介しましょう。</p>
						<div>
							<h4 class="recipe__ttl">[ 1 ] 電子レンジで加熱</h4>
							<p>玉ねぎの皮をむき、ラップに包んでレンジで20秒温めます。硫化アリルが蒸発するため、その量が減り、包丁で切ったときに涙が出にくくなります。</p>
							<h4 class="recipe__ttl">[ 2 ] 冷蔵庫で冷やす</h4>
							<p>冷蔵庫で冷やすのも効果的。硫化アリルは冷やすと気化しにくくなる性質があります。玉ねぎはあらかじめ冷蔵庫に入れておきましょう。</p>
						</div>
					</div>
				</div>
				<section class="mb3">
					<h3 class="recipe__ttl_l mb0">みじん切り玉ねぎの保存方法</h3>
					<p>玉ねぎのみじん切りは、時間のあるときにたくさん作って、冷凍しておきましょう。ハンバーグや炒め物などに<strong>すぐに使えて、調理の時短になる</strong>ので、とても便利です。</p>
					<p>玉ねぎをみじん切りにしたら、ラップに包んで冷凍します。使う際は、半解凍ぐらいでひき肉に混ぜてもOKです。一度冷凍してから解凍すると、少し火を通したように柔らかくなるので、ひき肉によくなじみます。解凍時に水分が出てくるので、水分が不要な料理のときはラップごと絞り、水分を捨ててから使用しましょう。冷凍の場合は、約2週間保存することができます。</p>
					<p>また、冷蔵庫に入れた場合の保存期間は、約2日。生のみじん切りをラップに包み、それをタッパーに入れて保存しましょう。</p>
				</section>
				<section class="mb3">
					<h3 class="recipe__ttl_l mb0">簡単にみじん切りできる道具</h3>
					<div class="u-float__right w45">
						<figure class="mb2-sp">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular01@2x.jpg"
								alt="フードプロセッサー" style="max-width:362px" class="u-img__max">
						</figure>
					</div>
					<p>「包丁でみじん切りするのは面倒くさい…。」そういう人には、みじん切りが簡単にできる調理道具をおすすめします。</p>
					<p>みじん切り器（チョッパー）にはいろいろなタイプがあります。</p>
					<ul class="u-list__ul_dot">
						<li>紐引きタイプ…紐を引くだけで簡単にみじん切りができるタイプ。</li>
						<li>ハンドルタイプ…つまみをまわして刃を回転させ、カットします。自分で回転数を調整できるので、みじん切りの具合を調整できます。</li>
						<li>プッシュタイプ…蓋を押したときの遠心力で刃を回転させる、みじん切り器。縦長でコンパクトなデザインが特徴です。</li>
					</ul>
					<p>また、みじん切り、スライス、千切り、おろし器など複数の機能が付いたスライサーやフードプロセッサーもおすすめです。<br>さらに、ミキサーでもみじん切りができます。玉ねぎのざく切りを入れ、水を入れて数回クラッシュしてください。玉ねぎをザルに空けて水気を切り、ふきんやキッチンペーパーなどで包んで水気を切れば、みじん切りの完成です。</p>
				</section>
				<section class="u-clearfix mb2">
					<h3 class="recipe__ttl_l mb0">玉ねぎのみじん切りの使い方・人気のレシピ</h3>
					<p>玉ねぎのみじん切りは、幅広いメニューに使えます。ハンバーグにはじまり、オムレツやカレーやチャーハン、スープやサラダ、ドレッシングやソースにもなります。</p>
					<div>
						<h4 class="recipe__ttl">玉ねぎドレッシングの簡単レシピ</h4>
						<p>玉ねぎのみじん切りを使ったドレッシングを作ってみてはいかがでしょう？<br>オリーブオイルにレモン、玉ねぎと粒マスタード、ハチミツを合わせれば、甘味のある美味しいお手製ドレッシングができますよ。マスタードの粒の食感が楽しめるドレッシングです。</p>
					</div>
					<div>
						<h4 class="recipe__ttl">玉ねぎソースの簡単レシピ</h4>
						<div class="u-float__right w45">
							<figure class="mb2-sp">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular02@2x.jpg"
									alt="玉ねぎソース イメージ画像" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>コクがありながらサッパリした後味の玉ねぎソースは、鶏肉や豚肉のソテー、ハンバーグなどにかけて使えます。<br>玉ねぎのみじん切りを炒めた後、醤油と酢、砂糖、ゴマ油を加えてひと煮立ちしたら、できあがりです。</p>
					</div>
				</section>
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
						<h3>玉ねぎの辛みの抜き方</h3>
						<p>加熱すれば甘味が美味しい玉ねぎですが、生で調理するときは辛み抜きが必要になります。辛みを抜くには、水にさらす方法が一般的。そのほか、塩でもむ、砂糖でもむ、酢水にさらすというやり方もあります。</p>
						<p>また、ザルに切った玉ねぎを入れて、熱湯をさっとまわしかけ、数分後に冷水で冷やすとほんのりとした甘みが出るのでおすすめです。電子レンジで温める方法も効果的です。</p>
					</div>
				</div>
				<section>
					<h3 class="recipe__ttl_l mb0">玉ねぎ以外の野菜のみじん切り方法</h3>
					<p>玉ねぎだけではなく、トマト、にんじんもみじん切りの出番が多い野菜です。トマトとにんじんの上手なみじん切り方法をお伝えしましょう。</p>
					<div>
						<h4 class="recipe__ttl">トマトのみじん切り</h4>
						<div class="u-float__right w45">
							<figure class="mb2-sp">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular03@2x.jpg"
									alt="トマトのみじん切り　イメージ画像" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>まず、トマトのヘタを取ります。次に、トマトを<a href="<?php echo($base_url)?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にします。なるべく薄くなるように切りましょう。トマトの皮は繊維がしっかりしているので、少し切れ目を入れてから切ると、すっと切れます。<br>輪切りにしたトマトを縦に細切りにします。中は柔らかいので、あまり細かくしないように、丁寧に切りましょう。あとは、細かく刻めば完成です。</p>
						<p>トマトと玉ねぎのみじん切りを合わせ、オリーブオイルや酢、レモン汁、塩、ハチミツを加えれば、美味しいドレッシングになります。真鯛などのお刺身に乗せて、カルパッチョにするのもおすすめです。</p>
					</div>
					<div>
						<h4 class="recipe__ttl">にんじんのみじん切り</h4>
						<div class="u-float__right w45">
							<figure class="mb2-sp">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/16/technic16_popular04@2x.jpg"
									alt="にんじんのみじん切りを使ったチャーハン" style="max-width:362px" class="u-img__max">
							</figure>
						</div>
						<p>にんじんは皮をむき、1～2mmの<a href="<?php echo($base_url)?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にします。重ねて縦に切り、1～2mm幅の棒状にしたら、90度回転させて、端から1～2mmになるように切っていきます。</p>
						<p>にんじんのみじん切りは、チャーハンやミートソースにも欠かせない素材です。玉ねぎのみじん切りと一緒に、肉そぼろに入れても美味しいですよ。</p>
					</div>
				</section>
			</div>

			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>玉ねぎを縦半分に切って、切り込みを入れるとき、<br class="u-only__pc">根元まで切ってしまうとバラバラになってしまうので、注意してくださいね<br>みじん切りは大きさを揃えると均等に熱が入るので、<br class="u-only__pc">美味しさがぐっと増しますよ♪
					</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>これで、コウちゃんの大好きなハンバーグも<br class="u-only__pc">ササっと作れるかな♪</p>
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
