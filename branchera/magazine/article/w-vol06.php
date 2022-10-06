<?php
//base
include( "../../function.php" );
$content = get_id_data( '7006' );
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
				<h3 class="u-ttl__l">夏を迎える前にきれいにしたい。おうちのおそうじポイント。<br>Part2</h3>
				<p>梅雨が明けたら夏本番。<br>引き続き今回も、夏だからこそやってしまいたいおそうじのポイントをご紹介します。</p>

				<h4 class="u-ttl__m">【キッチン排水口】臭いの気になる季節</h4>
				<p >キッチンの排水口に付いている排水トラップ（ワントラップ）は、手で左に回すと簡単に外すことができます。台所用中性洗剤を付けたスポンジでワントラップと排水口内部をこすり、水で洗い流したら、ワントラップをもとの位置に戻し、右に回して固定します。</p>
				<div class="u-position__center u-only__pc">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol6/img01.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol6/img01-sp@2x.png 400w ,../../lib/img/magazine/wakuwaku/vol6/img01.jpg"
					style="max-width: 540px;"
					class="u-img__max">
				</div>
				<small class="u-small">〔注〕<br>きちんと固定されていないと、カタカタと異音がしたり、下水から悪臭などが侵入したりする可能性があります。 </small>

				<h5 class="u-ttl__s">ディスポーザーが設置されているご家庭は・・・</h5>
				<p>ディスポーザーの汚れやぬめりを取るには、氷の小片とわずかな台所用中性洗剤を入れて運転させると効果的です。生ごみの嫌な臭いは、レモンなどの柑橘類の皮を入れて運転するとすっきりします。</p>
				<small class="u-small">〔注〕
					<br>ディスポーザーに手や指を入れて掃除するのは危険ですので、やめましょう。また、異物を取り出す必要がある時は、必ず電源スイッチをオフにしましょう。
				</small>

				<h4 class="u-ttl__m">【キッチンのレンジフード】気温が高いほうが油汚れは落ちやすい！</h4>
				<div class="u-position__center u-float__right">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol6/img02.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol6/img02-sp@2x.png"
					style="max-width: 188px;"
					class="u-img__max">
				</div>
				<p>レンジフードは取扱説明書に従って、フィルターなどを取り外し、台所用中性洗剤を溶かしたぬるま湯（35～40℃）に20〜30分つけおきします。汚れを落としたら、水で洗剤を洗い流し、しっかりと乾かしてから取り付けます。</p>
				<p>フード本体など取り外せない部分は、住宅用強力洗剤（キッチン用）を布に含ませて汚れを拭き取ります。汚れがひどいところは、住宅用強力洗剤を含ませたキッチンペーパーを貼りつけておき、汚れが浮き上がってきたら、布などでこすります。最後に水拭きで仕上げます。</p>

				<small class="u-small">〔注〕
					<br>・レンジフードの掃除方法は、機種により異なる場合がありますので、取扱説明書を確認してください。
					<br> ・電気部品に水がかからないように注意してください。
					<br> ・取り外しが難しい場合や、汚れがひどい時は専門業者にクリーニングを依頼しましょう。 </small>

					<h4 class="u-ttl__m">【ちょこっとエコロジー】お子さまと一緒に、自然素材でお手入れを！</h4>
					<p>排水口に重曹1/2カップを振り入れ、酢1カップを流し込みます。重曹と酢が反応して泡立ってくるので、30分放置してからお湯ですすぎます。排水口の詰まりを防止し、臭いを防いでくれます。</p>
					<p class="u-position__center">
						<img
						data-src="../../lib/img/magazine/wakuwaku/vol6/img03.jpg"
						data-retina="../../lib/img/magazine/wakuwaku/vol6/img03-sp@2x.png"
						style="max-width: 540px;"
						class="u-img__max">
					</p>
					<small class="u-small">〔注〕酢と塩素系漂白剤が混ざると有毒な塩素ガスが発生します。絶対に一緒に使用しないでください。</small>
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
