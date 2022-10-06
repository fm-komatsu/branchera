<?php
//base
include ("../../function.php");
$content = get_id_data('1015');
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
		<div class="main__wrapper lottery-point">
			<section class="main__item">
				<figure>
					<img
					data-src="../../lib/img/magazine/insurance/img01.png"
					data-srcset="../../lib/img/magazine/insurance/img01-sp.png 600w ,../../lib/img/magazine/insurance/img01@2x.png"
					alt="長谷工の保険サービス"
					style="max-width:720px;"
					class="u-img__max">
				</figure>

				<h4 class="u-ttl__m">ポイント<span class="icon">１</span>長谷工のグループ力を活かし、マンションライフの安心をトータルにサポート</h4>
				<p>長谷工アネシス保険サービス事業部は、創業以来「マンションをよく知る」長谷工グループの一員として、数多くのマンションでリスクケア・リスクマネジメントを追求し続けてきました。<br>そのなかで培ってきた豊富な経験を活かし、グループ各社とのネットワークを活かした３つの部門により、マンションに関わる安全・安心・快適をトータルにサポートしています。</p>

				<p class="center mb2">
					<img
					data-src="../../lib/img/magazine/insurance/img02.png"
					data-retina="../../lib/img/magazine/insurance/img02@2x.png"
					alt="取り扱いマンション棟数"
					style="max-width: 514px;"
					class="u-img__max"
					>
				</p>
				<div class="u-assist">
					<p class="center mb2">
						<img
						data-src="../../lib/img/magazine/insurance/img03.png"
						data-retina="../../lib/img/magazine/insurance/img03@2x.png"
						alt="長谷工の保険サービス事業部"
						style="max-width: 648px;"
						class="u-img__max"
						>
					</p>
					<figure class="center">

						<img
						data-src="../../lib/img/magazine/insurance/img04.png"
						data-retina="../../lib/img/magazine/insurance/img04@2x.png"
						alt="マンションに関わるｓ全部の安心をサポートするのが、長谷工アネシス保険サービス事業部"
						style="max-width: 532px;"
						class="u-img__max"
						>
					</figure>
				</div>

				<h4 class="u-ttl__m">ポイント<span class="icon">２</span> 【法人部門】マンション建設や修繕工事などの際のリスクを幅広くサポート</h4>
				<p>法人部門では、マンション施工やマンション修繕工事など、マンションに関わる様々な会社に対する保険を取り扱っています。</p>
				<p>豊富なマンション施工実績のある長谷工グループの経験を活かし、適切なリスクマネジメントを実現しています。</p>
				<div class="u-assist">
					<p class="center">
						<img
						data-src="../../lib/img/magazine/insurance/img07.png"
						data-retina="../../lib/img/magazine/insurance/img07@2x.png"
						alt="image"
						style="max-width: 560px;"
						class="u-img__max"
						>
					</p>
				</div>


				<h4 class="u-ttl__m">ポイント<span class="icon">３</span> 【管理組合部門】共用部の火災保険を中心に、管理組合のリスクマネジメントをサポート</h4>
				<p>マンション施工・管理の実績を活かし、長谷工アネシス保険サービス事業部ではマンション共用部の保険においても、管理組合のリスクマネジメントをサポートする様々な保険をご提供しています。</p>
				<p>万が一の事故の際、豊富な経験やグループのネットワークを活かし、迅速かつ適切に対応できることも大きな特長となっています。</p>
				<div class="u-assist">
					<p class="center">
						<img
						data-src="../../lib/img/magazine/insurance/img06.png"
						data-retina="../../lib/img/magazine/insurance/img06@2x.png"
						alt="image"
						style="max-width: 560px;"
						class="u-img__max"
						>
					</p>
				</div>

				<h4 class="u-ttl__m">ポイント<span class="icon">４</span> 【個人部門】火災保険を中心にマンション専有部に関するリスクを幅広くサポート</h4>
				<p>マンション専有部のリスクケアにおいて中心となる火災保険は、火災や落雷・風水害などの自然災害から、建物・家財の損害を補償するための保険です。近年異常気象によると思われる自然災害も増加傾向にあり、火災保険の重要性はますます高まっています。</p>
				<p>また、長谷工アネシス保険サービス事業部では、火災保険では補償されない地震や津波などの災害に備える地震保険や、日常生活における損害賠償請求に備えての個人賠償責任保険など、マンションライフにおける様々なリスクに対応した保険を取り扱っています。</p>
				<div class="u-assist">
					<p class="center">
						<img
						data-src="../../lib/img/magazine/insurance/img05.png"
						data-retina="../../lib/img/magazine/insurance/img05@2x.png"
						alt="image"
						style="max-width: 560px;"
						class="u-img__max"
						>
					</p>
				</div>

				<small class="u-small">
					※掲載の情報は2016年6月現在のものです。
				</small>
			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="insurance2.php" class="u-pager__link"><span class="u-pager__text">長谷工だから提案できる「マンションのための保険」</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="insurance.php">1</a></li>
					<li class="u-pager__item"><a href="insurance2.php">2</a></li>
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
