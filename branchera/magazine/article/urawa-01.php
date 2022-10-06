<?php
//base
include( "../../function.php" );
$content = get_id_data( '2007' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main urawa">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_town.php", "すてきな街見つけました" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">

				<h3 class="u-position__center">
					<img
					data-src="../../lib/img/magazine/urawa/01/main01.png"
					data-retina="../../lib/img/magazine/urawa/01/main01@2x.png"
					alt="ネストカフェ"
					style="max-width:720px;"
					class="u-img__max"
					>
				</h3>

			</section>
			<section class="main__item">

				<div class="u-float__left">
					<img
					data-src="../../lib/img/magazine/urawa/01/img01-1.png"
					data-retina="../../lib/img/magazine/urawa/01/img01-1@2x.png"
					alt="夜は5名以上で貸切可能。お誕生日会やママ友ランチも。こんなオシャレなカフェなら忙しい日常を忘れることができそう。"
					style="max-width: 297px;"
					class="u-img__max"
					>
				</div>

				<p>地元育ちのご主人と奥さまが経営するこじんまりとしたカフェで、店内にはレトロなアメリカ雑貨がセンスよく並んでいます。</p>
				<p><strong>お料理は作り置きはせずソースからすべて手作り</strong>で取材日には「キャラメルシフォンwithバナナ（430円：税込）」と「スパイシータコライス　スープ・サラダ付（930円：税込）」を出していただきました。</p>

				<br clear="left">
				<div class="u-float__left">
					<img
					data-src="../../lib/img/magazine/urawa/01/img01-2.png"
					data-retina="../../lib/img/magazine/urawa/01/img01-2@2x.png"
					alt="image"
					style="max-width: 296px;"
					class="u-img__max"
					>
				</div>
				<p>お買い物帰りの主婦グループや隣で経営されている英会話教室の保護者の方が多いようですが、本を読んだり仕事をしたりするおひとりさまもいらっしゃるのだとか。「やはり<strong>家事と育児の合間にひとりでぼんやりできる空間も必要</strong>ですよね」と奥さま。何かと忙しい主婦に寄り添ってくださるのも安心できます。</p>
				<p>新しい土地、自分だけの時間。静かにゆったりとネットワークが広がっていきそうなソーシャルカフェです。</p>

				<div class="u-position__center u-only__pc">
					<img
					data-src="../../lib/img/magazine/urawa/01/img01-3.png"
					data-retina="../../lib/img/magazine/urawa/01/img01-3@2x.png"
					alt="作り置きはせずソースからすべて手作り。「キャラメルシフォンwithバナナ（430円：税込）」と「スパイシータコライス スープ・サラダ付（930円：税込）」"
					style="max-width:454px ;"
					class="u-img__max"
					>
				</div>

			</section>

			<div class="u-assist">
				<h5 class="u-ttl__s">【カフェ】ネストカフェ</h5>
				<p>■住所／さいたま市浦和区領家1-6-1
					<br> ■電話番号／048-753-9185
					<br> ■営業時間／［火水木］11:00～19:00 ［金土］11：00〜22：00
					<br> ■定休日／月曜・日曜
					<br>
					<span class="u-small">※掲載の情報は2016年3月現在のもので、変更となる場合がございます。</span></p>
				</div>


				<div class="section mb6" id="town-list-spot">
					<h4 class="u-ttl__m">浦和区駒場のお洒落スポット</h4>
					<ul class="flex bm4">
						<li  class="u-only__pc">
							<a href="urawa-02.php" >
								<img
								data-src="../../lib/img/magazine/urawa/btn02.png"
								data-retina="../../lib/img/magazine/urawa/btn02@2x.png"
								alt="鰻　むさし乃"
								style="max-width: 229px;"
								class="u-img__max"
								>
							</a>
						</li>
						<li style="margin-left: 8px;" class="u-only__pc">
							<a href="urawa-03.php" >
								<img
								data-src="../../lib/img/magazine/urawa/btn03.png"
								data-retina="../../lib/img/magazine/urawa/btn03@2x.png"
								alt="ダンテ工房店"
								style="max-width:229px ;"
								class="u-img__max"
								>
							</a>
						</li>
						<li class="u-only__sp" style="padding-bottom: 16px;">
							<a href="urawa-02.php" >
								<img
								data-src="../../lib/img/magazine/urawa/btn02.png"
								data-retina="../../lib/img/magazine/urawa/btn02@2x.png"
								alt="鰻　むさし乃"
								style=""
								class="u-img__max"
								>
							</a>
						</li>

						<li class="u-only__sp">
							<a href="urawa-03.php">
								<img
								data-src="../../lib/img/magazine/urawa/btn03.png"
								data-retina="../../lib/img/magazine/urawa/btn03@2x.png"
								alt="ダンテ工房店"
								style=""
								class="u-img__max"
								>
							</a>
						</li>
					</ul>
				</div>
				<div class="mb0">
					<a href="<?php echo $base_url ?>/magazine/town2.php" class="u-btn_l center">浦和区駒場タウンガイドトップ</a>
				</div>
			</section>


		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/town2.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
