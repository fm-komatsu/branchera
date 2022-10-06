<?php
//base
include( "../../function.php" );
$content = get_id_data( '7008' );
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
				<h3 class="u-ttl__l">窓をあけてフレッシュな風をお部屋に！</h3>
				<p>ついついお部屋に閉じこもっていてお掃除の手を抜いていませんか？<br>フレッシュな風をお部屋に取り入れるために、ふだんからきちんとお手入れしましょう。</p>

				<h4 class="u-ttl__m">バルコニーのお掃除はこまめに。</h4>
				<h5 class="u-ttl__s">床のお掃除</h5>
				<p class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/01.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/img01-sp@2x.png"
					style="max-width: 198px;"
					class="u-img__max">
				</p>
				<p>風雨にさらされているバルコニーは飛来してきたゴミやほこりがすぐにたまってしまいます。突風がふくと小枝や木の葉が飛ばされてくることも。月に一回程度は掃き掃除をしましょう。集めたゴミはちり取りで取るか、クリーナーで吸い込みます。最近はバルコニー用のクリーナーの先端ノズルが購入でき、とても便利です。</p>
				<small class="u-small">〔注〕マンション等の場合、一般的に床は防水仕様ではないため、水を流してのお掃除は階下のバルコニーへ水が垂れる恐れがあります。ご注意ください。水拭きをしたい場合は、固く絞った雑巾やモップを使用しましょう。</small>

				<h5 class="u-ttl__s">壁のお掃除</h5>
				<div class="u-position__center u-float__left">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/02.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/02.jpg"
					style="max-width:146px ;"
					class="u-img__max">
				</div>
				<p>雨水による泥汚れやシミ、水あかなど、バルコニーの手摺壁などは汚れやすい場所です。汚れがついたばかりなら、台所用中性洗剤、住まいの洗剤の薄め液で落ちます。</p>
				<p>がんこにこびりついてしまったら、スプレー式のカビ取り剤や自動車洗浄用の水あか取りをスプレーし、表面が傷つかないようにスポンジでこすります。</p>

				<h5 class="u-ttl__s">手摺のお掃除</h5>
				<p class="u-position__center u-float__right">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/03.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/img03-sp@2x.png"
					alt="image"
					style="max-width:232px ;"
					class="u-img__max"
					>
				</p>
				<p>壁同様、手摺もほこりや汚れがつきやすい場所です。アルミ製の手摺（大多数のマンションがこのタイプです）は水拭きした後に乾拭きをするだけで充分。<p>
				</p>汚れがこびりついてしまったら、台所用中性洗剤の薄め液にひたした布を固く絞り拭き取り、乾拭きします。</p>

				<h5 class="u-ttl__s">排水口</h5>
				<p class="u-float__left u-position__center u-only__pc">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/04.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/img04-sp@2x.png"
					style="max-width: 217px;"
					class="u-img__max">
				</p>
				<p>バルコニーの排水溝や排水口に飛来した木の葉やゴミがつまると、雨水がたまり、階下バルコニーへの水垂れにつながる恐れがあります。</p>
				<p>また、梅雨の季節に入ると、集中的に豪雨が降る場合もありますので、こまめにチェックして日頃からきれいにしておきましょう。</p>
				<br clear="all">

				<h4 class="u-ttl__m">そろそろ思い切り窓を開け放したくなる頃。網戸とサッシもお手入れしましょう。</h4>

				<h5 class="u-ttl__s">ふだんのお手入れ</h5>
				<p class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/05.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/img05-sp@2x.png"
					alt="image"
					style="max-width:148px ;"
					class="u-img__max"
					>
				</p>
				<p>網戸についた汚れやほこりをそのままに放っておくと、風とともに室内に入ってしまいます。週に一度は、ポリバタキかやわらかいブラシで払いましょう。また、網戸の片側に新聞紙をあて、反対側からクリーナーをかけると、ほこりを吸い取ることができます。</p>
				<br clear="all">
				<p class="u-float__left u-position__center ">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/06.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/img06-sp@2x.png"
					alt="image"
					style="max-width:182px ;"
					class="u-img__max"
					>
				</p>
				<p>サッシは室内側と外側の両方にこまめにブラシをかけ、ほこりが付かないようにしましょう。また、サッシが重たく開けにくいと感じたら、レールにゴミがたまっているかもしれません。月に一回程度掃除をしましょう。アルミ部分は水でぬらした雑巾で拭き取ります。</p>
				<br clear="all">

				<h5 class="u-ttl__s">汚れがひどくなったら</h5>
				<p>サッシは台所用中性洗剤をつけたスポンジで窓枠とガラスの汚れを落とし、固く絞った雑巾で水分をよく拭き取ってください。アルミ部分の汚れがひどくなってしまったら、台所用中性洗剤か住まいの洗剤を雑巾に含ませ汚れを落とし、水拭きした後に乾拭きします。</p>
				<small class="u-small">〔注〕表面にキズがつきやすいのでワイヤーブラシやスチールウール、金ベラは使わないでください。<br>網戸の汚れがこびりついて取れなくなったら張替をおすすめします。無理をして力を入れると網がこわれて穴があいてしまう場合があります。</small>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol8/07.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol8/img07-sp@2x.png"
					alt="image"
					style="max-width:540px ;"
					class="u-img__max">
				</p>

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
