<?php
//base
include( "../../function.php" );
$content = get_id_data( '2009' );
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
					data-src="../../lib/img/magazine/urawa/03/main03.png"
					data-retina="../../lib/img/magazine/urawa/03/main03@2x.png"
					alt="【洋菓子】ダンテ工房店"
					style="max-width:720px;"
					class="u-img__max"
					>
				</h3>


				<div class="section" id="urawa03">
					<div class="u-float__left u-only__pc">
						<img
						data-src="../../lib/img/magazine/urawa/03/img03-1.png"
						data-retina="../../lib/img/magazine/urawa/03/img03-1@2x.png"
						alt="image"
						style="max-width: 184px;"
						class="u-img__max"
						>
					</div>
					<p>元イタリアンシェフであるご主人は<strong>チーズを知り尽くしたスペシャリスト</strong>。<br>一般的に流通しているチーズは輸入品が多く、また国産品でも無添加チーズは少ないと言います。</p>
					<div class="u-only__sp">
						<img
						data-src="../../lib/img/magazine/urawa/03/img03-1.png"
						data-retina="../../lib/img/magazine/urawa/03/img03-1.png"
						alt="image"
						style=""
						class="u-img__max"
						>
					</div>
					<br clear="all">
					<div class="u-float__right u-only__pc">
						<img
						data-src="../../lib/img/magazine/urawa/03/img03-2.png"
						data-retina="../../lib/img/magazine/urawa/03/img03-2@2x.png"
						alt="image"
						style="max-width: 184px;"
						class="u-img__max"
						></div>

						<p>安心安全で美味しいチーズを作りたい、チーズから日本の酪農を変えたいという思いからチーズ製品の研究を始めました。</p>
						<div class="u-only__sp">
							<img
							data-src="../../lib/img/magazine/urawa/03/img03-2.png"
							data-retina="../../lib/img/magazine/urawa/03/img03-2@2x.png"
							alt="image"
							style=""
							class="u-img__max"
							>
						</div>
						<br clear="all" />
					</div>

					<div class="mb4 clear">
						<div class="u-float__left u-only__pc">
							<img
							data-src="../../lib/img/magazine/urawa/03/img03-3.png"
							data-retina="../../lib/img/magazine/urawa/03/img03-3@2x.png"
							alt="商品は大丸浦和パルコ店やネット通販でも購入可能！"
							style="max-width:314px ;"
							class="u-img__max"
							>
						</div>
						<p>その取り組みが評価され、「飲むチーズケーキ　ラッテオ（302円：税込）」は2011年度<strong>さいたま市ニュービジネス大賞優秀賞</strong>に、「日本酒とお米のチーズケーキ　八極　3個入り（2,376円：税込）」は第10回<strong>魅力ある日本のおみやげコンテスト準グランプリ受賞</strong>に輝きました。</p>
						<p>気軽に買える自宅用のケーキから1万円を超える高級品、お土産に嬉しいクッキー詰め合わせなどラインアップも多彩です。</p>
						<div class="img u-only__sp">
							<img
							data-src="../../lib/img/magazine/urawa/03/img03-3.png"
							data-retina="../../lib/img/magazine/urawa/03/img03-3@2x.png"
							alt="商品は大丸浦和パルコ店やネット通販でも購入可能！"
							style=""
							class="u-img__max"
							>
						</div><br clear="all" />
					</div>

					<div class="u-assist">
						<h5 class="u-ttl__s">【洋菓子】ダンテ工房店</h5>
						<p>■住所／さいたま市浦和区元町1-31-15　<br>
							■電話番号／048-883-8600　<br>
							■営業時間／9:00～18:00　<br>
							■定休日／なし<br>
							■ホームページ／<a class="u-icon" href="http://www.dante.co.jp" target="_blank" rel="nofollow">http://www.dante.co.jp</a>
							<br><span class="u-small">※掲載の情報は2016年3月現在のもので、変更となる場合がございます。</span>
						</p>
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
								<a href="urawa-02.php" >
									<img
									data-src="../../lib/img/magazine/urawa/btn02.png"
									data-retina="../../lib/img/magazine/urawa/btn02@2x.png"
									alt="鰻　むさし乃"
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
								<a href="urawa-02.php">
									<img
									data-src="../../lib/img/magazine/urawa/btn02.png"
									data-retina="../../lib/img/magazine/urawa/btn02@2x.png"
									alt="鰻　むさし乃"
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
