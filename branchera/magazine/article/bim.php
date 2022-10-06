<?php
//base
include ("../../function.php");
$content = get_id_data('1001');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　1/2」-'.siteName();
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
		<section class="main__wrapper">
			<div class="product-img">
				<h3 class="u-ttl__l">BIM（ビム）ってなんだろう？ Q&amp;Aコーナー</h3>

			</div>

			<h4 class="u-ttl__m"><span class="icon">Q</span>そもそも、BIM（ビム）ってなんですか？</h4>

			<div class="ex2">
				<div class="inner">
					<p>コンピューターの中にプラモデルを組み立てるように、3次元の建物を構築し、その情報を設計、施工、管理などの様々なシーンで活用する考え方です。</p>
					<div class="u-assist"><p>BIM ＝ Building Information Modeling （ビルディング インフォメーション モデリング）</p></div>
				</div>
			</div>


			<h4 class="u-ttl__m"><span class="icon">Q</span>「長谷工版BIM（ビム）」ってなんですか？</h4>
			<div class="ex2">
				<div class="inner">
					<p>豊富なマンション施工実績から得たノウハウをもとに、マンションに関する様々な情報を3Dモデル化し、一元管理できるようにしました。<br>マンションに特化した3D設計技術として展開しているのが「長谷工版BIM（ビム）」なんです。</p>
				</div>
			</div>


			<div class="flex flex_around">
				<div class="w45">
					<h5 class="u-ttl__s">設計・施工に関する情報などを一元化</h5>
					<div class="img" align="center">
						<img
						data-src="../../lib/img/magazine/bim/img-1.png"
						data-retina="../../lib/img/magazine/bim/img-1@2x.png"
						alt="設計・施工に関する情報などを一元化"
						style=""
						class="u-img__max"
						>
					</div>
				</div>
				<div class="w45">
					<h5 class="u-ttl__s">マンションの細部にいたるまでモデル化</h5>
					<div class="img" align="center">
						<img
						data-src="../../lib/img/magazine/bim/img-4.png"
						data-retina="../../lib/img/magazine/bim/img-4@2x.png"
						alt="マンションの細部にいたるまでモデル化"
						style=""
						class="u-img__max"
						>
					</div>
				</div>
			</div>

			<h4 class="u-ttl__m"><span class="icon">Q</span>「長谷工版BIM（ビム）」ってどんなことができるの？</h4>
			<div class="ex2">
				<div class="inner">
					<p>設計段階からとても細やかな3Dモデルを作り上げることで、建物すべてが立体的に確認できます。また、設計から施工に至るいろいろな場面ででも、図面など様々な情報を取り出すことが可能です。</p>
				</div>
			</div>
			<div class="flex flex_around">
				<div class="w45">
					<h5 class="u-ttl__s">マンションの全タイプ住戸内から地面の下の杭まで確認可能！</h5>
					<div class="img" align="center">
						<img
						data-src="../../lib/img/magazine/bim/img-5.png"
						data-retina="../../lib/img/magazine/bim/img-5@2x.png"
						alt="マンションの全タイプ住戸内から地面の下の杭まで確認可能"
						style="max-width: 420px;"
						class="u-img__max"
						>
					</div>
					<p>部屋の中はもちろんのこと、配管や地面の下の基礎・杭まで、普段は見ることができない場所を立体的に確認できます。</p>
				</div>
				<div class="w45">
					<h5 class="u-ttl__s">初期段階から様々な情報を出力可能！</h5>
					<div class="img" align="center">
						<img
						data-src="../../lib/img/magazine/bim/img-6.png"
						data-retina="../../lib/img/magazine/bim/img-6.png"
						alt="初期段階から様々な情報を出力可能"
						style="max-width: 420px;"
						class="u-img__max"
						>
					</div>
					<p>設計から施工に至るいろいろな場面で、各種図面、日影、通風などのシミュレーション情報などが確認可能です。</p>
				</div>
			</div>

			<h3 class="u-ttl__l">マンション販売から管理・修繕まで、将来にわたって<br>「安全・安心」を支えるシステムを目指します。</h3>

			<h4 class="u-ttl__m">マンショントータルサポートのスタート</h4>
			<div class="img fl">
				<img
				data-src="../../lib/img/magazine/bim/img-2.png"
				data-retina="../../lib/img/magazine/bim/img-2@2x.png"
				alt="マンショントータルサポート"
				style="max-width: 317px;"
				class="u-img__max"
				>
			</div>
			<p>長谷工は、設計・施工だけでなく、販売、管理、修繕・リフォームに至るまで、お客さまのライフスタイルをトータルにサポートしています。</p>
			<p class="mb2">マンションに特化した仕組みの「長谷工版BIM（ビム）」は、様々なシーンで、将来にわたり、より質の高い「安全・安心」のサポートを可能にします。</p>
			<br class="all">
			<br>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="bim2.php" class="u-pager__link"><span class="u-pager__text">ここがスゴイ！BIMでできるアレコレをご紹介。</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="bim.php">1</a></li>
					<li class="u-pager__item"><a href="bim2.php">2</a></li>
				</ul>
			</nav>

		</section>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
