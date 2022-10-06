<?php
//base
include( "../../function.php" );
$content = get_id_data( '7009' );
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

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_wakuwaku.php", "Mr.わくわくメンテナンス講座" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">結露と上手に付き合って、冬のお部屋を快適に</h3>

				<p>土壁や和紙などを使った昔の日本家屋と違い、気密性の高いマンションでは、冬場の結露に悩まされているお宅も多いのではないでしょうか。結露は空気中の余分な水分を排除してくれる役割をする一方、カビの発生や建物を傷める原因にもなりますので、仕組みを知って、結露を抑える工夫をしましょう。</p>

				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol9/01.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol9/img01-sp@2x.png"
					style="max-width: 540px;"
					class="u-img__max mb2">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol9/02.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol9/img02-sp@2x.png"
					style="max-width: 540px;"
					class="u-img__max">
				</div>

				<h4 class="u-ttl__m">結露の仕組み</h4>
				<p class="u-position__center u-float__right">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol9/03.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol9/03.jpg"
					alt="image"
					style="max-width: 193px;"
					class="u-img__max">
				</p>
				<p>結露は空気中に含まれる水蒸気が、冷たい物体に触れて冷やされることで、気体から液体に変わる現象です。</p>

				<p>冷たい水を入れたグラスに水滴が付くのと同じ原理で、冬は窓ガラスなど、外気の影響を受けて冷たくなった部分に結露が発生しやすくなります。</p>

				<p>また、空気は温度が高い方がより多くの水蒸気を含むことができ、逆に北向きなど温度の低い部屋では、空気中に含むことができなかった水蒸気が結露となって現れやすくなります。</p>

				<h4 class="u-ttl__m">結露の原因の一つは過剰な湿度</h4>
				<p class="u-position__center u-float__right">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol9/04.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol9/img04-sp@2x.png"
					style="max-width: 240px;"
					class="u-img__max">
				</p>
				<p>室内に干した洗濯物や水槽・観葉植物は、湿度を上げる原因になります。過剰な湿度は結露の発生しやすい状況をつくります。温湿度計などで、室内の状態をチェックし、冬は室内温度で20～23℃、湿度は50%以下を目指しましょう。ただし、乳幼児にとって乾燥は良くありませんので、乳幼児のいるお部屋は60%以下が目安となります。</p>

				<h4 class="u-ttl__m">結露を軽減するための工夫</h4>
				<h5 class="u-ttl__s">湿度が高い場合はまずは換気</h5>
				<p>24時間換気システム（※）などの機械換気設備が設置されている場合は、夜間・外出時を含め24時間365日運転させておきましょう。その際、給気口が閉まっていると十分な換気が行なえませんので、日頃から全開にしておきます。</p>

				<p>※［24時間換気システム］とは<br>ファンなどを使い、常時給排気を行なうシステム。シックハウス対策のため、2003年7月1日以降に着工したマンションの居室には、設置が義務づけられています。</p>
				<p>天気の良い日は、窓を開けて空気の入れ替えをすることも習慣にしましょう。</p>
				<p>カーテンを閉めたままにしておくと、窓との間に冷気がたまって結露しやすくなりますので、適宜カーテンを開けて空気を循環させるようにします。</p>
				<p>押入れやクローゼットも湿気がたまりやすい場所です。スノコを敷いたり、時々扉を開けて、空気を循環させるようにしましょう。</p>
				<p>また、水蒸気は発生した場所で、すぐに排出することが大切です。お湯を沸かすときも必ず換気扇を回して、室内に湿度をためないようにしましょう。</p>


				<h5 class="u-ttl__s">室内の空気を改善するアイテムを活用してみる</h5>
				<p>換気だけで湿度を下げることができない場合には、除湿機や、エコカラットなど調湿力のある壁材の利用も有効です。除湿機を使う際は、寒い北側の部屋に置くことがポイントです。</p>
				<p>また、窓の結露がひどい場合には、二重サッシ（内窓）を設置したりすることで、室内側が外気の影響を受けにくくなり、結露を軽減することができます。暖房効率もアップして、冬のお部屋をより快適にしてくれます。</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol9/05.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol9/img05-sp@2x.png 400w ,../../lib/img/magazine/wakuwaku/vol9/05.jpg"
					alt="image"
					style="max-width: 540px;"
					class="u-img__max"
					>
				</div>
			</section>
			<?php  include ($inc_path."/lib/inc/page/_magazine/__back-wakuwaku.php"); ?>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
