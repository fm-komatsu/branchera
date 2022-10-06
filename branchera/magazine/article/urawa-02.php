<?php
//base
include( "../../function.php" );
$content = get_id_data( '2008' );
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
				<h3 class="center mb6">
					<img
					data-src="../../lib/img/magazine/urawa/02/main02.png"
					data-retina="../../lib/img/magazine/urawa/02/main02@2x.png"
					alt="【鰻】鰻 むさし乃"
					style="max-width:720px;"
					class="u-img__max"
					>
				</h3>

				<div class="u-clearfix">
				<div class="u-position__center u-float__left">
					<img
					data-src="../../lib/img/magazine/urawa/02/img02-1.png"
					data-retina="../../lib/img/magazine/urawa/02/img02-1@2x.png"
					alt="大人向けの落ち着いた店内。お子さまも大歓迎というのは嬉しいですね。"
					style="max-width: 290px;"
					class="u-img__max"
					>
				</div>

				<p>「うなぎといえば丑の日やハレの日に食べるものだけど、浦和の人は日常的にうなぎを食べるんだよ」とは三代目ご主人。</p>
				<p>大正時代までは浦和の沼地でうなぎが捕れたせいか、<strong>浦和にはうなぎ文化が根づいています</strong>。そのとおり取材にお邪魔したときは近隣のサラリーマンの方がランチに訪れていました。</p>

				</div>

				<br clear="all" />

				<div class="mb3 u-clearfix">
					<div class="u-position__center u-float__right">
						<img
						data-src="../../lib/img/magazine/urawa/02/img02-2.png"
						data-retina="../../lib/img/magazine/urawa/02/img02-2@2x.png"
						alt="image"
						style="max-width: 328px;"
						class="u-img__max"
						>
					</div>
					<p>ご主人のこだわりは<strong>川魚特有の臭みと200本近い小骨を徹底的に取り除くこと</strong>。丁寧な仕事には、お子さまが初めて食べたうなぎをおいしいものだと認識して、うなぎ文化を次世代へ残していきたいという想いが込められています。</p>
					<p>最上級は「和匠鰻重（4860円・税込）」で食べた方は「おいしかった」ではなく「びっくりした」という感想を残すそう。うなぎ専門店は大人向けのイメージがありますが、小さいお子さまも大歓迎。食べず嫌いの方もぜひ挑戦して欲しい極上うなぎです。</p>
				</div>


				<div class="u-position__center mb4">
					<img
					data-src="../../lib/img/magazine/urawa/02/img02-3.png"
					data-srcset="../../lib/img/magazine/urawa/02/img02-3@2x.png 500w ,../../lib/img/magazine/urawa/02/img02-3@2x.png"
					alt="県民でさえ知らない「浦和のうなぎ」"
					style="max-width:720px ;"
					class="u-img__max"
					>
				</div>

				<div class="section mb6" id="town-list-spot">
					<h4 class="u-ttl__m">浦和区駒場のお洒落スポット</h4>
					<ul class="flex bm4">
						<li  class="u-only__pc">
							<a href="urawa-01.php" >
								<img
								data-src="../../lib/img/magazine/urawa/btn01.png"
								data-retina="../../lib/img/magazine/urawa/btn01@2x.png"
								alt="ネストカフェ"
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
							<a href="urawa-01.php" >
								<img
								data-src="../../lib/img/magazine/urawa/btn01.png"
								data-retina="../../lib/img/magazine/urawa/btn01@2x.png"
								alt="ネストカフェ"
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
				<a href="<?php echo $base_url ?>/magazine/town2.php" class="u-btn_l center">浦和区駒場タウンガイドトップ</a>
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
