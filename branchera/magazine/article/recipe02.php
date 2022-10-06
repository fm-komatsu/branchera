<?php
//base
include( "../../function.php" );
$content = get_id_data( '14002' );
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
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
		include( $inc_path . "/lib/inc/pan.php" );
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		include($inc_path . "/lib/inc/page/_magazine/__recipe-main-v.php" );
		?>
		<section class="main__wrapper recipe">

			<div class="recipe__header recipe-header">
				<h2 class="recipe-header__row">
					<span class="recipe-header__num">第2話</span>
					<span class="recipe-header__ttl">塩麹ぶり大根</span>
				</h2>
			</div>

			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">息子のコウちゃんが保育園に入園したこともあって、今年から職場復帰をしたの。まだ慣れないせいか、パパと一緒に家事と子育てをこなしているんだけど…いつも同じような料理になりがち。そこで、近所でたまたま見つけた料理教室に家族で通うことにしたんだ！</p>
			</div>

			<hr class="recipe__line">

			<div class="recipe__row">

				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>パパ～！おかえりー</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>おぉー、コウちゃん！ただいまー<br>今日は会議で遅くなっちゃったな…はぁお腹すいた…</p>
					</div>
				</div>

				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>私も今日は、なんか1日中バタバタしてたんだよねー<br>…という訳で、本日も「お鍋」になりました！</p>
					</div>
				</div>

				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>チュルン(春雨)も入ってるよー</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>おぉ、美味しそう！いただきまーす！</p>
					</div>
				</div>

				<div class="recipe-icn mie_02">
					<div class="inner">
						<p>困ったときは、つい「お鍋」に頼っちゃうねー<br>時間の掛かりそうな煮物とか、つい避けちゃうんだよね</p>
					</div>
				</div>

				<div class="recipe-icn masaki_02">
					<div class="inner">
						<p>分かる、分かる…<br>コウちゃんも好きだし、いっかなーと思うけど<br class="u-only__pc">他のものも作りたいよね</p>
					</div>
				</div>

				<div class="recipe-icn mie_01">
					<div class="inner">
						<p>今週末のレッスンで、マユ先生に相談してみようかな！？</p>
					</div>
				</div>

				<div class="recipe-icn masaki_01">
					<div class="inner">
						<p>煮物いいね～！魚の煮物とか最近食べてないもんなー</p>
					</div>
				</div>


				<div class="recipe-icn kou_01">
					<div class="inner">
						<p>コウちゃんもおさかな、たべる―！</p>
					</div>
				</div>

			<div class="recipe__movie recipe-movie">

				<h3 class="recipe-movie__ttl">
					<img
					data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl.png"
					data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl@2x.png"
					alt="マユ先生のレシピ"
					style="max-width:159px"
					class="u-img__max">
				</h3>

				<div class="recipe-movie__overview">
					<figure class="recipe-movie__overview_icn">
						<img
						data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe.png"
						data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe@2x.png"
						alt="マユ先生"
						style="width:114px"
						class="u-img__max">
					</figure>
					<p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第２回は、塩麹を使った「塩麹ぶり大根」をご紹介します。大根の下ゆでは、電子レンジを使うことで時間の短縮になります。ぜひ試してみてくださいね。</p>
				</div>

				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/dzfAzK7kxOk?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>

			</div>

			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l">塩麹ぶり大根</h3>
				<div class="recipe-design__material">
					<h3 class="recipe__ttl">材料（4人分）　調理時間目安：30分</h3>
					<dl class="recipe-design__materials">
						<dt>ぶりの切り身</dt>
						<dd>4切れ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：塩麹</dt>
						<dd>大さじ2</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>A：醤油</dt>
						<dd>小さじ1</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>大根</dt>
						<dd>1/2本（約600g）</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>しょうが</dt>
						<dd>1かけ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>水</dt>
						<dd>2カップ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>昆布</dt>
						<dd>10g</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>酒</dt>
						<dd>1/2カップ</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>ゆずの皮（せん切り）</dt>
						<dd>あれば適量</dd>
					</dl>
					<dl class="recipe-design__materials">
						<dt>柚子胡椒</dt>
						<dd>好みで適量</dd>
					</dl>
				</div>
				<div class="recipe-design__howto">
					<h3 class="recipe__ttl">作り方</h3>
					<ol class="u-list__ol_more">
						<li class="recipe-design__howto-item"><span>大根は2cm厚さの輪切りにし、皮を厚めにむいて半分に切ります。<br>耐熱ボウルに入れてラップをし、電子レンジ600Wで<strong>10分加熱</strong>します。</span></li>
						<li class="recipe-design__howto-item"><span>しょうがはよく洗い、皮つきのまま薄切りにします。</span></li>
						<li class="recipe-design__howto-item">ぶりは1切れを3等分にし、ざるに並べて熱湯をまわしかけます。</li>
						<li class="recipe-design__howto-item"><span>ポリ袋に水気をふいた「3」と「A」を入れて軽くもみ、<strong>5分ほど</strong>おきます。</span></li>
						<li class="recipe-design__howto-item"><span>鍋に水、昆布、酒、「1」、「2」を入れ、「4」のぶりを漬け汁ごと加えて<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a></strong>にかけます。<br><strong>煮立ったら弱めの<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a></strong>にし、厚手のキッチンペーパーを落としぶたにして10〜15分煮ます。<br>※今回は煮る時間が短いため、昆布を入れたままにしています。</span></li>
						<li class="recipe-design__howto-item"><span>器に盛り、あればゆずの皮をちらし、好みで柚子胡椒を添えます。</span></li>
					</ol>
				</div>
				<div class="recipe-design__point">
					<h3 class="recipe__ttl">ワンポイント</h3>
					<p class="recipe-design__point-item">工程「4」のぶりに下味をつけたところで、冷蔵庫でひと晩置いても良いでしょう。より味がなじみます。また、火を止めて、冷めるまで置くことで味がしみます。ひと晩置くと、さらにおいしくなります。</p>
				</div>
			</div>

			<div class="recipe-icn mie_03">
				<div class="inner">
					<p>塩麹を使うと、また全然違う味になるんですね！<br>大根に味が染みてて美味しい～</p>
				</div>
			</div>

			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>塩麹は、スーパーでも簡単に手に入りますし<br class="u-only__pc">ちょっと使うだけで、お料理のバリエーションが増えるんです！</p>
				</div>
			</div>

			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>魚料理って、何となくめんどくさいな…と思っていたんですけど<br class="u-only__pc">あっという間にできてしまいましたね<br>これはお酒の好きなパパも喜ぶかも～♪</p>
				</div>
			</div>

			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>魚料理は下処理方法を覚えれば、簡単ですよ！<br>魚は良質なタンパク質やDHAも含まれているので<br class="u-only__pc">ぜひ、コウちゃんにも作ってあげてくださいね</p>
				</div>
			</div>
		</div>

			<hr class="recipe__line">

			<div class="mb0">

			<?php
				include ($inc_path."/lib/inc/page/_magazine/__recipe-footer.php");
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
