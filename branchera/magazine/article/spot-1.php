<?php
//base
include( "../../function.php" );
$content = get_id_data( '2006' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//release date
$release_year = "2014";
$release_month ="11";
$release_day ="";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_town.php", "すてきな街見つけました" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<section class="main__wrapper">

			<h3 class="center mb6">
				<img
				data-src="../../lib/img/magazine/nishidai80/spot-1-main.png"
				data-retina="../../lib/img/magazine/nishidai80/spot-1-main@2x.png"
				alt="[カフェ]cafe hana hana"
				style="max-width:855px;"
				class="u-img__max"
				>
			</h3>


			<h4 class="u-ttl__m">白い外壁に赤いシェードが愛らしい印象のカフェ。</h4>
			<div class="u-float__left">
				<img
				data-src="../../lib/img/magazine/nishidai80/spot-1-sub-1.png"
				data-retina="../../lib/img/magazine/nishidai80/spot-1-sub-1@2x.png"
				alt="cafe hana hana"
				style="max-width: 440px;"
				class="u-img__max"
				>
			</div>
			<p>北欧雑貨や季節のデコレーションが心を和ませてくれる、明るく温かみのある店内には、ふっと肩の力が抜けるような優しい空気が流れています。</p>
			<p>窓からは向かいの公園の木々を眺めることができ、春は桜、秋は紅葉といった四季の彩りも楽しめます。モーニングやランチタイムにはお食事メニューが充実しており、特にランチタイムには、2種のデリが楽しめる「スコーン＆デリ」のプレートやお豆たっぷりのカレー、手ごねハンバーグ、チキン南蛮といったお料理がラインナップ。手作りのおいしさとボリューム感が男性にも好評です。</p>
			<p>お昼時は常連さんを中心に賑わう街の食堂、午後はパンケーキなどのデザートやドリンクをお供にのんびりと過ごす憩いの場として、地域の人々に愛されています。</p>

			<div class="u-position__center mb-inner">
				<img
				data-src="../../lib/img/magazine/nishidai80/spot-1-sub-3.png"
				data-retina="../../lib/img/magazine/nishidai80/spot-1-sub-3@2x.png"
				alt="image"
				style="max-width: 450px;"
				class="u-img__max"
				>
			</div>

			<div class="u-assist" id="shop-info">
				<h5 class="u-ttl__s">[カフェ]cafe hana hana</h5>
				<ul class="list">
					<li>住所：板橋区高島平8-9-1 グリーンコーポ高島105号</li>
					<li>TEL.03-6906-8741</li>
					<li>営業時間／9：00～19：00、定休日／火曜</li>
				</ul>
			</div>

			<div class="section mb6" id="town-list-spot">
				<h4 class="u-ttl__m">西台・高島平のお洒落スポット</h4>
				<ul class="flex bm4">
					<li class="u-only__pc">
						<a href="spot-2.php" >
							<img
							data-src="../../lib/img/magazine/town/shop-2.png"
							data-retina="../../lib/img/magazine/town/shop-2@2x.png"
							alt="インディラ"
							style="max-width: 271px;"
							class="u-img__max"
							>
						</a>
					</li>
					<li style="margin-left: 8px;" class="u-only__pc">
						<a href="spot-3.php" >
							<img
							data-src="../../lib/img/magazine/town/shop-3.png"
							data-retina="../../lib/img/magazine/town/shop-3@2x.png"
							alt="ガトーマスダ"
							style="max-width:271px ;"
							class="u-img__max"
							>
						</a>
					</li>
					<li class="u-only__sp">
						<a href="spot-2.php">
							<img
							data-src="../../lib/img/magazine/town/shop-2.png"
							data-retina="../../lib/img/magazine/town/shop-2@2x.png"
							alt="インディラ"
							style=""
							class="u-img__max"
							>
						</a>
					</li>
					<li class="u-only__sp">
						<a href="spot-3.php" >
							<img
							data-src="../../lib/img/magazine/town/shop-3.png"
							data-retina="../../lib/img/magazine/town/shop-3@2x.png"
							alt="ガトーマスダ"
							style=""
							class="u-img__max "
							>
						</a>
					</li>
				</ul>
			</div>

		</section>
		<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
	</article>
</main>

<?php
$toindex_url = "/magazine/town.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
