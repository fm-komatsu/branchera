<?php
//base
include( "../../function.php" );
$content = get_id_data( '7005' );
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

				<h3 class="u-ttl__l">夏を迎える前にきれいにしたい。おうちのおそうじポイント。</h3>
				<p>もうすぐ夏がやってきますね。<br>今回は、夏だから気になってしまう場所のおそうじポイントをご紹介します。</p>

				<h4 class="u-ttl__m">【エアコン】掃除で冷房効率UP！ 空気も爽快に</h4>
				<p>夏のお部屋を涼しく快適にしてくれるエアコン。フィルターが目詰まりすると、冷房効率が低下するだけでなく、消費電力もアップしてしまいます。フィルターは外して掃除機で汚れを吸い取った後、浴室などで水洗いし、水気を切って、日陰でしっかりと乾かしてから取り付けます。</p>
				<p>熱交換器（フィン）などの内部に付いた汚れを放っておくと、かび臭やハウスダストを部屋中にまき散らしてしまいます。また、フィルターのお掃除機能付きエアコンも同様です。こうしたご自身で掃除するのが難しい箇所は、専門業者による定期的なクリーニングをおすすめします。</p>
				<p>また、最近の家庭用エアコンの消費電力量は、10年前の製品と比較して約11％も低くなっています。耐用年数は一般に7～10年といわれていますので、購入後7年以上経過している場合は、買い替えも視野に入れて検討すると良いでしょう。</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol05/01.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol05/01-sp@2x.png"
					alt="エアコンの構造"
					style="max-width: 418px;"
					class="u-img__max">
				</p>
				<small class="u-small">〔注〕
					<br> ・フィルターの掃除方法は、機種により異なる場合がありますので、取扱説明書を確認してください。
					<br> ・掃除は必ず電源プラグをコンセントから抜いて行なってください。
				</small>

				<h5 class="u-ttl__s">室外機の前に物を置いていませんか？</h5>
				<p>室内の熱を外に捨てる役割をしている室外機。吹き出し口の前に物を置くと、冷房の効率が下がってしまいます。エアコンを使う前に点検してみましょう。</p>

				<h4 class="u-ttl__m">【シューズボックス】湿気がたまりやすく、玄関の臭いの原因になることも</h4>
				<div class="u-position__center u-float__right">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol05/02.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol05/02-sp@2x.png"
					style="max-width:238px;"
					class="u-img__max">
				</div>
				<p>シューズボックスは靴をすべて取り出したら、ぞうきんやほうきを使って、ほこりや砂をきれいに取り除きましょう。その後、リビング用洗剤をスプレーしたぞうきんで拭いて、乾燥させます。</p>
				<p>また、せっかく掃除をしても、雨や汗などの湿気を含んだ靴をそのまましまうと、カビや雑菌が繁殖しやすい環境を作ってしまいます。1日履いた靴は、風通しのよい場所で乾燥させてから収納しましょう。</p>
				<br clear="all">


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
