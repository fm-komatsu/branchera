<?php
//base
include ("../../function.php");
$content = get_id_data('1001');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　2/2」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<div class="main__wrapper">

			<section class="main__item">
				<h3 class="u-ttl__l">マンション選びをサポートする、3D設計技術「長谷工版BIM（ビム）」</h3>
				<img
				data-src="../../lib/img/magazine/bim/img.gif"
				alt="長谷工版BIM（ビム）"
				class="u-img__max mb2">
				<p><strong>「マンション購入前に、モット詳しく知りたい！」</strong></p>
				<p>そんな声にお応えするために、全タイプの住戸から地面の下の杭まで見えるようにいたしました。</p>
				<p>マンション選びで苦労すること、それは図面からマンションの全景を想像すること。<strong>マンションに特化した「長谷工版BIM（ビム）」</strong>を導入することで、これまで2次元であった設計を３次元化。全タイプの住戸や共用部の空間、地面の下の基礎や杭をモデルルームのモニター上で、ご確認<span class="u-small">※1</span>いただけます。</p>

				<small class="u-small">※1 物件によって異なります。詳しくは各物件窓口にご確認ください。</small>

				<h4 class="u-ttl__m">その<span class="icon">１</span>自由な視点での確認</h4>
				<p>コントローラーを使って、自由な視点でマンションをご覧いただけます。実際に敷地内を歩いているような感覚で、さらには空を飛んだり、地面の下へ潜ったりも可能です。購入前に気になる点をご確認いただけます。</p>
				<div class="u-list-title">コントローラーで自由に確認</div>
				<div class="img">
					<img
					data-src="../../lib/img/magazine/bim/bim-img-1.png"
					data-retina="../../lib/img/magazine/bim/bim-img-1@2x.png"
					alt="自由な視点での確認"
					style="max-width: 688px;"
					class="u-img__max"
					>
				</div>

				<h4 class="u-ttl__m">その<span class="icon">2</span>普段は見られない部分まで確認</h4>
				<p>普段は、地面の下の杭ってどうなっているか確認できませんよね。<strong>「長谷工版BIM（ビム）」は全てがつまった3D設計図</strong>。外観や部屋の中だけでなく、地面の下の杭や配管の様子、設備点検のための通り道など、普段ではみられないところまでもご確認いただけます。</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/bim/bim-img-2.png"
					data-retina="../../lib/img/magazine/bim/bim-img-2@2x.png"
					alt="普段は見られない部分まで確認"
					style="max-width: 709px;"
					class="u-img__max"
					>
				</div>


				<h4 class="u-ttl__m">その<span class="icon">3</span>シミュレーションで事前確認</h4>

				<p>実際に住むまで確認できない・・・・と諦めていたことってありますよね。<strong>「長谷工版BIM（ビム）」はマンションに特化した3Dモデル</strong>。設計段階より、住戸内の通風状況や、温熱状態、日照の様子までBIM上でシミュレーション<span class="u-small">※1</span>することができます。<br>また、BIMデータを活用して、床やドアなどの色をかえたり、ベランダ越しの眺望を眺めたりすることができるシステムを構築。事前に確認できるので、ライフスタイルにあったお部屋をお選びいただけます。</p>
				<small class="u-small mb2">※1 物件によって異なります。詳しくは各物件窓口にご確認ください。</small>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/bim/bim-img-3.png"
					data-retina="../../lib/img/magazine/bim/bim-img-3@2x.png"
					alt="設計段階より、住戸内の通風状況や、温熱状態、日照の様子までBIM上でシミュレーション"
					style="max-width: 769px;"
					class="u-img__max"
					>
				</div>

			</section>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item"><a href="bim.php">1</a></li>
					<li class="u-pager__item active"><a href="bim2.php">2</a></li>
				</ul>
			</nav>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
