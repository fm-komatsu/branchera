<?php
//base
include( "../../function.php" );
$content = get_id_data( '7003' );
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

				<h3 class="u-ttl__l">お部屋の換気、実はこんなに大事でした</h3>
				<h4 class="u-ttl__m">24時間換気が理想です。</h4>
				<p class="">現在の建築基準法では、シックハウス対策のために新築マンションには24時間換気システム設置が義務付けられています。給気と排気で構成される換気を正しく行なうことによって、私たちははじめて健康な日常生活を営むことができます。</p>

				<h5 class="u-ttl__s">換気の効果</h5>
				<p class="">■ 浴室換気…湿気をとる
					<br>■ トイレ換気…湿気・臭気をとる
					<br>■ キッチン換気…一酸化炭素・ 油煙・匂いをとる
					<br>■ 居室の換気…ホルムアルデヒド等の揮発性有機化合物や二酸化炭素を排出する
				</p>


				<h4 class="u-ttl__m">居室</h4>
				<p>おろそかにしがちですが、人の存在にともなう換気も必要です。
					<br> 快適で健康な生活には、2時間で室内すべての空気を入替える必要があります。しかし、排気ガスや粉塵、花粉など体に取り込みたくない物や騒音、そして寒気の厳しい時期には、窓を開ける換気は現実的ではありません。
				</p>
				<p>気付かないうちに室内空気も汚れてきますので、24時間換気設備のない場合は、浴室換気扇は付けっぱなしにしておくことをおすすめします。</p>

				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol3/02.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol3/img01-sp@2x.png 666w ,../../lib/img/magazine/wakuwaku/vol3/02.jpg"
					alt="image"
					style="max-width:480px ;"
					class="u-img__max"
					>
				</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol3/03.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol3/img02-sp@2x.png 666w,../../lib/img/magazine/wakuwaku/vol3/03.jpg"
					alt="image"
					style="max-width: 630px;"
					class="u-img__max"
					>
				</p>

				<h4 class="u-ttl__m">浴室</h4>
				<p class="">浴室の湿気はふすまの反りや結露の原因となるので、換気が必須です。ただし冬の病の引き金となるヒートショックには気を付けなくてはなりません。脱衣室も暖房を行なうことをおすすめします。</p>

				<h4 class="u-ttl__m">トイレ</h4>
				<p class="">使用後数分間は回しておきましょう。スイッチを切っても数分間換気扇が回り続ける「遅れスイッチ」もあり、簡単に交換できるのでおすすめです。</p>

				<h4 class="u-ttl__m">キッチン</h4>
				<p class="">キッチンの換気扇は料理中に出る油煙を多く吸い込みます。その50％はフィルターに捕集され、残りが換気扇内部に吸い込まれていきます。日常的には使い捨ての換気扇フィルター（不燃材・難燃材）を使い、換気扇内部は1～2年に1回、分解清掃を行ないましょう。</p>

				<h4 class="u-ttl__m">家にもマスクの原則…<br>換気の一翼を担っている給気を忘れずに。</h4>
				<p>換気扇を回して排気を行なっても、給気をしなければ何にもなりません。最近のマンションにはフィルター付き給気口が設置されているので、汚れた空気を取り込むことなく安心して常時開いておくことができます。3カ月に1度のフィルター掃除あるいは交換を忘れずに行なってください。</p>
				<p>また、給気口にフィルターが付いていない場合は、フィルター付き給気口への交換をおすすめします。寒い時期、給気口から入る冷気は身にしみますが、冷気が室内に上手に分散するアイデアで乗り切りましょう。</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol3/04.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol3/img03-sp@2x.png 666w,../../lib/img/magazine/wakuwaku/vol3/04.jpg"
					alt="image"
					style="max-width: 540px;"
					class="u-img__max">
				</p>
			</section>

			<section class="u-assist">
				<h5 class="u-ttl__s">冬のお悩み「結露」解決！</h5>
				<img
				data-src="../../lib/img/magazine/wakuwaku/vol3/05.jpg"
				data-retina="../../lib/img/magazine/wakuwaku/vol3/05.jpg"
				alt="image"
				align="right"
				style="max-width: 183px; margin-left:20px; margin-bottom:20px;"
				class="u-img__max u-only__pc">
				<p>冬につきものの結露。<br>お悩み解決には、お住まいの温度を一定にすることと室内湿度を下げることが必要です。</p>
				<p class="u-position__center u-only__sp">
					<img
					src="../../lib/img/magazine/wakuwaku/vol3/05.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol3/05.jpg"
					style="max-width:183px;"
					class="u-img__max">
				</p>
				<p>温度や湿度のコントロールをしないで窓部分の結露を防ぐだけで満足していると、湿度のいきどころがなくなり、室内のタンスの裏や床の隅にカビが生えるなどお部屋が悲鳴をあげることになりかねません。<br>サッシの溝部分をこまめに掃除して、結露で出た水分を外に出すなどの小さな努力で、お部屋のメンテナンスをしましょう。</p>
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
