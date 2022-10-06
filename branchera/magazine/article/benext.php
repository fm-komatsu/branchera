<?php
//base
include ("../../function.php");
$content = get_id_data('1005');
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
		<div class="main__wrapper">
			<section class="main__item">

				<h3 class="u-ttl__l">「もっと広く、もっと快適・安心」。 <br>長谷工の次世代型マンション企画「Be-Next」の秘密に迫る！</h3>

				<img
				data-src="../../lib/img/magazine/benext/img01.png"
				data-retina="../../lib/img/magazine/benext/img01@2x.png"
				data-srcset="../../lib/img/magazine/benext/img01-sp@2x.png 666w , ../../lib/img/magazine/benext/img01@2x.png"
				alt="長谷工の次世代型マンション企画「Be-Next」の秘密に迫る！"
				style="max-width:806px;"
				class="u-img__max"
				>

			</section>

			<section class="main__item">

				<h3 class="u-ttl__l">キーワードは「快適」「多様性」「環境」「防災」。<br>ライフスタイルや時代の変化に応える次世代マンション企画。</h3>

				<h4 class="u-ttl__m">それは、新しいマンションのあり方を追求し続けてきた長谷工コーポレーションがたどり着いた住まいのカタチ。</h4>
				<div class="b-float__row">
					<div class="b-float__item_left u-only__pc">
						<img
						data-src="../../lib/img/magazine/benext/img21.png"
						data-retina="../../lib/img/magazine/benext/img21@2x.png"
						alt="Be-Next概念"
						style="max-width: 284px;"
						class="u-img__max"
						>
					</div>
					<p>明るく開放的な空間に寛ぐ「快適」な日常を実現すること。時代の変化に対応し、次世代につないでいける「多様性」があること。自然エネルギーを賢く取り込む「環境」に配慮された住まいであること。住まう方の大切な命を守る「防災」性能をしっかりと確保すること。</p>
					<p>その想いを形にし、「Be-Next」が生まれました。</p>
				</div>
				<div class="u-only__sp u-position__center mt2">
					<img
					data-src="../../lib/img/magazine/benext/img21.png"
					data-retina="../../lib/img/magazine/benext/img21@2x.png"
					alt="Be-Next概念"
					style="max-width: 284px;"
					class="u-img__max"
					>
				</div>

				<h4 class="u-ttl__m">新発想の窓付き玄関や、約2.2mのハイサッシなど、明るく気持ちよく過ごすためのアイデアが盛りだくさん。</h4>
				<p>広く、明るく、快適な空間で暮らしたい。そうした声に応えるアイデアをふんだんに提案していることが「Be-Next」の特長です。</p>
				<ul class="flex flex_around" style="margin-bottom: 0;">
					<li class="u-assist js-tile w50">
						<p>高さ約2.2mを確保した<strong>「ハイサッシ」</strong>は、日光をたっぷりと室内に招き入れます。</p>
						<div class="u-position__center mt3">
							<img
							data-src="../../lib/img/magazine/benext/img05.png"
							data-retina="../../lib/img/magazine/benext/img05.png"
							alt="ハイサッシ"
							style="max-width: 320px;"
							class="u-img__max"
							>
						</div>
					</li>
					<li style="margin-bottom:12px;" class="u-assist js-tile w50">
						<p><strong>「アウトフレーム工法」</strong>は、室内の凹凸を解消しすっきりと家具をレイアウトすることを可能にします。</p>
						<div class="u-position__center">
							<img
							data-src="../../lib/img/magazine/benext/img06.png"
							data-retina="../../lib/img/magazine/benext/img06@2x.png"
							alt="アウトフレーム工法"
							style="max-width: 320px;"
							class="u-img__max"
							>
						</div>
					</li>
					<li style="margin-bottom:12px;" class="u-assist js-tile w50">
						<p><strong>「窓付き玄関」</strong>は、居室内の風通しを良くし、暗くなりがちな玄関スペースを明るく演出します。</p>
						<div class="u-position__center img">
							<img
							data-src="../../lib/img/magazine/benext/img03.png"
							data-retina="../../lib/img/magazine/benext/img03@2x.png"
							alt="窓付き玄関"
							style="max-width: 320px;"
							class="u-img__max"
							>
						</div>
					</li>

					<li style="margin-bottom:12px;" class="u-assist js-tile w50">
						<p>新規格サッシ<strong>「ブリーシア」</strong>は居室の明るさとプライベート性を同時に実現します。</p>
						<div class="u-position__center mt3">
							<img
							data-src="../../lib/img/magazine/benext/img04.png"
							data-retina="../../lib/img/magazine/benext/img04@2x.png"
							alt="ブリーシア"
							style="max-width: 320px;"
							class="u-img__max"
							>
						</div>
					</li>
				</ul>
				<small class="u-small">※物件により、上記の全てが採用されていない場合もあります。</small>

				<h4 class="u-ttl__m">より豊かなマンションライフ実現を目指し、「Be-Next」の発想を高層階住戸や角住戸にも拡大した、2つの新開発マンション企画</h4>
				<p>「Be-Next」の心地よさをより多くの方に享受いただけるよう、「広く」「快適」「安心」をますます多くの住まいに採用するための開発を、日夜続けています。</p>
				<p>たとえば、角住戸の快適性に着眼した<strong>「Be-Next L」では柱のレイアウト位置を変更することで、角住戸のリビング空間をますます明るく開放的にする住まい</strong>を開発しました。</p>
				<p class="mb2">また、高層マンションに目を向けた<strong>「Be-Next &#8545;」では、長谷工の技術力を駆使し、地上16階以上の高層階でも扁平梁（へんぺいばり）の採用を可能にしました。これにより、ハイサッシのより開放的な居室が実現</strong>できるようになっています。</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/benext/img22.png"
					data-retina="../../lib/img/magazine/benext/img22@2x.png"
					alt="Be-Next L"
					style="max-width:549px"
					class="u-img__max">
				</div>
			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="benext2.php" class="u-pager__link"><span class="u-pager__text">これまでのマンションとの一番の違いは？</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="benext.php">1</a></li>
					<li class="u-pager__item"><a href="benext2.php">2</a></li>
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
