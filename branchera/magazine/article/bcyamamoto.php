<?php
//base
include ("../../function.php");
$content = get_id_data('1006');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'」-'.siteName();
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
				<h3 class="u-ttl__l">住まいづくりを通じて人は成長する。マンションを建てるところから自分たちで考える「マンション建て替え事業」</h3>
				<img
				data-src="../../lib/img/magazine/bcyamamoto/img01.png"
				data-retina="../../lib/img/magazine/bcyamamoto/img01@2x.png"
				alt="住まいづくりを通じて人は成長する。マンションを建てるところから自分たちで考える<br>「マンション建て替え事業」"
				style="max-width:855px;"
				class="u-img__max u-only__pc">
				<img
				data-src="../../lib/img/magazine/bcyamamoto/img01-sp.png"
				data-retina="../../lib/img/magazine/bcyamamoto/img01-sp@2x.png"
				alt="住まいづくりを通じて人は成長する。マンションを建てるところから自分たちで考える<br>「マンション建て替え事業」"
				style="max-width:855px;"
				class="u-img__max u-only__sp">
			</section>
			<section class="main__item">
				<h3 class="u-ttl__l">「建て替えを検討した時、家族の将来について考えた」。<br >人は住まいづくりを通じて成長します。</h3>
				<div class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/magazine/bcyamamoto/img02.png"
					data-retina="../../lib/img/magazine/bcyamamoto/img02@2x.png"
					alt="image"
					style="max-width: 237px">
				</div>
				<p>老朽化や耐震性などの問題解決を図るための手段である建て替え事業は、住まう方が将来の暮らしを具体的に考える絶好の機会でもあります。<br>マンションを一から建て替えること、それは将来の暮らしへの一歩を力強く踏み出すこと。</p>
				<p>自分や家族はどんな暮らしを望んでいるのか。どんな将来を望んでいるのか。住んでいる地域は、この先どのように変わっていくのか。そんなことを真剣に考える機会となる建て替え事業は、私たちを成長させてくれる絶好の機会でもあるのです。</p>
			</section>
			<section class="main__item">
				<h4 class="u-ttl__m">人の数だけ考え方があり、ライフスタイルがある。理想の暮らしを実現するために、たくさんのお話をお聞きしたいと思っています。</h4>

				<p>建て替え事業は、マンションに暮らすすべての方が関わるものです。そして、同じマンションに暮らしていても、考え方やライフスタイルは一人ひとり違うものです。だから、全員が納得できる建て替えのカタチを決めることはとても大変です。</p>
				<p>私たち長谷工は、まず、たくさんのお話をお聞きすることからはじめます。みなさまのお考えやライフスタイルをきちんと知るためです。</p>
				<p>そのうえで、私たちが積み重ねてきた経験と実績をベースに、住まう方全員が納得できる「理想の暮らし」のための建て替えをご提案します。</p>

				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/bcyamamoto/img03.png"
					data-retina="../../lib/img/magazine/bcyamamoto/img03@2x.png"
					alt="人の数だけ考え方があり、ライフスタイルがあります"
					style="max-width: 509px;"
					class="u-img__max">
				</div>
			</section>
			<section class="main__item">
				<h4 class="u-ttl__m">住まう方の合意の、一歩先にある満足を見つめた建て替え事業。</h4>

				<p>建て替え事業は、マンションに住まう方の合意だけが得られれば大丈夫というわけではありません。</p>
				<p>たとえば大阪府八尾市の由緒ある山本団地の建て替え事業では、半世紀にわたり周辺の方にも愛されてきた場所であることに配慮し、住まう方だけではなく、周辺の方にも納得いただける建て替え事業を目指しました。そして、結果的には住まう方に満足いただける建て替え事業を実現することができました。</p>
				<p>このように、これまで様々なマンションや人の暮らしに関わってきた経験を活かし、ただ合意を得るだけでなく、合意の一歩先にある満足を見つめた建て替えをご提案することも、私たちの建て替え事業の大きな特徴となっています。</p>

				<div class="u-only__pc">
					<img
					data-src="../../lib/img/magazine/bcyamamoto/img04.png"
					data-retina="../../lib/img/magazine/bcyamamoto/img04@2x.png"
					alt="大阪府八尾市の由緒ある山本団地の建て替え事業"
					style="max-width: 787px"
					class="u-img__max">
				</div>
				<div class="u-only__sp u-position__center">
					<img
					src="../../lib/img/magazine/bcyamamoto/img04-sp.png"
					data-retina="../../lib/img/magazine/bcyamamoto/img04-sp@2x.png"
					alt="大阪府八尾市の由緒ある山本団地の建て替え事業"
					style="max-width: 500px;"
					class="u-img__max"
					>
				</div>
			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="bcyamamoto2.php" class="u-pager__link"><span class="u-pager__text">マンション建て替え事業に大切な○○とは？</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="bcyamamoto.php">1</a></li>
					<li class="u-pager__item"><a href="bcyamamoto2.php">2</a></li>
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
