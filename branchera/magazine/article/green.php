<?php
//base
include ("../../function.php");
$content = get_id_data('2001');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//release date
$release_year = "2014";
$release_month ="11";
$release_day ="";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_town.php", "すてきな街見つけました" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img center">

				<img
				data-src="../../lib/img/magazine/nishidai80/green-main.png"
				data-retina="../../lib/img/magazine/nishidai80/green-main@2x.png"
				alt="整備された穏やかな緑道を歩く"
				style="max-width:855px;"
				class="u-img__max"
				>

			</div>
			<small class="u-small">※左：高島平緑地、右上：前深谷緑道、右下：imagephoto</small>
			<p>都営三田線「西台」駅から「高島平」駅の間には、幅およそ30mほどの気持ちいい緑道が伸びています。「高島平緑地公園」です。「高島平」駅を抜け「西高島平」駅近くまで続くこの緑道は、豊かな緑が深い森のような風景を育んでおり、高島平通りや都営三田線の高架を身近にしながら自然を満喫できる公園として周辺住民に親しまれています。</p>


			<h4 class="u-ttl__m">「赤塚公園」をはじめ自然に触れ合える、公園や施設が点在するエリア。</h4>
			<div class="flex between">
				<div class="img w50">
					<img
					data-src="../../lib/img/magazine/nishidai80/green-sub-1.png"
					data-retina="../../lib/img/magazine/nishidai80/green-sub-1@2x.png"
					alt="赤塚公園"
					style="max-width: 360px;"
					class="u-img__max"
					>
					<small class="u-small">※上：赤塚公園、下：imagephoto</small>
				</div>
				<div class="w50"><p>もともとは赤塚城という城があったと言われる場所に位置する赤塚公園。1974年には整備されたこの公園は、およそ25万平方メートルの敷地内に、美術館、郷土資料館、野球場、テニスコート、陸上競技場やバーベキュー広場が点在しています。また、この公園は事前の風景や趣きを愉しむための風致公園として整備されており、園内には約2.3kmにわたり武蔵野台地の面影を残す丘陵地が広がっています。丘陵地は自然林におおわれており、その一部はバードサンクチュアリ（野鳥保護区）になっています。</p>
					<p>ゆったりと穏やかな流れが心地いい荒川。そこに架かる戸田橋たもとの河川敷には、川の流れに沿って「荒川戸田橋緑地」が広がっています。中心部には、芝生の上でバーベキューが楽しめる広場や軟式野球試合にも使える運動施設が整備され、気持ちの良い風を愉しみながら思い切りレジャーを楽しむことができます。また、手回しポンプも設置した「水路ふれあいゾーン」では、子どもたちが水の流れや水辺の生き物にふれあいながら遊ぶ風景が見られます。</p>
				</div>
			</div>
		</section>
		<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_town.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
