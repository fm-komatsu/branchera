<?php
//base
include( "../../function.php" );
$content = get_id_data( '15002' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「火加減の正しい調整方法」を動画で解説。弱火・中火・強火それぞれの火加減、IH調理器の場合の温度設定、とろ火と弱火の違いなど、気になるポイントを分かりやすくご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '103';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

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
		$panAry[] = array( "/magazine/index_comic02.php#technique", "今さら聞けない料理のアレコレ" );
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
					<span class="recipe-header__ttl">弱火・中火・強火って何度？火加減の正しい調整方法とは</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>
					第2回は、調理の基本ともいえる「火加減の調整方法」です。今まで何となく火加減を調整していた方も、もう一度確認しておきましょう。 </p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>マサキさん、こんにちは！<br>あら？なんだか困り顔ですね</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>はい…<br>実は、来週の結婚記念日は僕が手料理を作ろうと思いまして<br class="u-only__pc">ここは豪華に<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic55.php" class="recipe-design__link">ステーキ</a>を焼こう！と決めたのですが…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>まあ、素敵！</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>でも、レシピの火加減がよく分からないんです<br>「まず強火で軽くあぶり、次は弱火で中へ火を通して…」<br class="u-only__pc">と書いてあるけれど、それぞれどのくらいの火力なのか、<br class="u-only__pc">IHなら何ワットなのか…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>なるほど、ステーキは焼き方が大切ですものね<br>お料理を美味しく仕上げるために、<br class="u-only__pc">改めて火加減についておさらいしましょう！</p>
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
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/7AC60EKwBn0?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l">弱火・中火・強火、火加減の調整方法とは？</h3>
					<p>「弱火」や「強火」という指示はレシピでよく見かけますが、それらは具体的にどのくらいの火力を指すのでしょうか？IH調理器の場合の温度調整についてもお伝えします。</p>
					<h4 class="recipe__ttl" id="tsuyobi">強火とは</h4>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/02/tech02-01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/02/tech02-01.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">強火は、<strong>鍋全体に火があたる程度の火加減鍋全体に火があたる程度の火加減</strong>を指します。<br>IH調理器の温度設定では約200～230度、消費電力では約1,450～2,000ｗ相当です。<br>シャキッと仕上げたい<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic03.php" class="recipe-design__link">野菜</a>炒めや、煮汁を煮立てるときのほか、コンロでお湯を沸かすときは強火にして蓋をすると早く沸騰します。
						<p>強火だからといって、いつも火力を全開にするのではなく、鍋の大きさに合わせて火加減を調節しましょう。</p></dd>
					</dl>
					<h4 class="recipe__ttl" id="chubi">中火とは</h4>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/02/tech02-02.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/02/tech02-02.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">中火は、<strong>鍋の底に火の先が少し触れる程度の火加減</strong>を指します。<br>IH調理器の温度設定では約160～180度、消費電力では約500～1,000ｗ相当です。<br>さっと煮てふっくら仕上げたい<a href="<?php echo($base_url) ?>/magazine/article/recipe02.php" class="recipe-design__link">煮魚</a>や、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic64.php" class="recipe-design__link">麺類</a>をゆでるとき、フライパンを熱するときなどに使用します。
						<p>レシピ内に火加減の指定がないときは中火にしましょう。</p></dd>
					</dl>
					<h4 class="recipe__ttl" id="yowabi">弱火とは</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/02/tech02-03.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/02/tech02-03.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">弱火は、<strong>鍋の底に火があたらない程度の火加減</strong>を指します。<br>IH調理器の温度設定では約150度前後、消費電力では約235～370ｗ相当です。<br><a href="<?php echo($base_url) ?>/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>や肉じゃがなどコトコト煮込む料理のほか、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>の中心に火を通すときなどに使用します。</dd>
					</dl>
					<div class="recipe-design__plus1 plus1">
						<div class="plus1__row">
							<h4 class="plus1__ttl">とろ火と弱火の違い</h4>
							<p>とろ火は、弱火よりもさらに弱い最小の火加減を指します。<br>IH調理器の温度設定では約140度、消費電力では約120ｗ相当です。<br>何分もかからず火が通る<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic37.php" class="recipe-design__link">薄焼き卵</a>や、煮豆など長時間じっくり火を通すとき、保温・温め直しのときなどに使用します。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>強火って、火力をＭＡＸにするということではないのですね！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>そうなんです<br>強過ぎる火力はガス代や電気代が無駄になってしまうので<br class="u-only__pc">正しい火力で料理してくださいね</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>正しい火加減が分かれば、ステーキの焼き方もバッチリ！<br>これで記念日ディナーを成功させるぞ～！</p>
				</div>
			</div>

			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15012'),
				array ('recommend-recipe-id','15001'),
				array ('recommend-recipe-id','15154'),
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
	include( $inc_path."/lib/inc/toindex__magazin.php" );
	?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
