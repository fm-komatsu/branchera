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
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">お気に入りの家具に出会うこと。それはまるで運命。<br>こだわりの逸品と出会うなら長谷工インテックの「インテリアサロン」で。</h3>
				<div class="product-img center mb4">
					<div>
						<img
						data-src="../../lib/img/magazine/intech/img01.png"
						data-retina="../../lib/img/magazine/intech/img01@2x.png"
						alt="長谷工インテックの「インテリアサロン」"
						style="max-width:720px;"
						class="u-img__max"
						>
					</div>
				</div>

				<h3 class="u-ttl__l">インテリアサロンは、様々なモデルルームデザインや8万件に及ぶインテリア相談を受けてきた実績から生まれました。</h3>
				<p>本当にお気に入りの家具、一生付き合うことができる家具に出会うことはとても大変です。たとえばソファの座り心地、肌触り、壁紙の色とのマッチング、家族一人ひとりの使いやすさなど、本当に自分にあった家具は人それぞれです。</p>
				<p><strong>多彩なモデルルームのデザインを手がけ、8万件に及ぶインテリア相談を受けてきた長谷工インテック。</strong>その経験と実績から生まれたサービスがインテリアサロンです。</p>
				<p>インテリアサロンでは、お客さま一人ひとりに<strong>専任のコンシェルジュをご用意。</strong>ライフスタイルや好みなどをしっかりとお伺いしたうえで、有名家具ブランドから一般的にはあまり知られていない希少な家具ブランドまで、あなたにぴったりの逸品をあなたと一緒に見つけ出します。</p>
				<div class="img">
					<img
					data-src="../../lib/img/magazine/intech/img02.png"
					data-retina="../../lib/img/magazine/intech/img02@2x.png"
					alt=""
					style="max-width: 720px;"
					class="u-img__max"
					>
				</div>


				<h4 class="u-ttl__m">多彩な家具ブランドから、専任のコンシェルジュと一緒に、あなたにぴったりの家具を見つけられます。</h4>
				<div class="img fr">
					<img
					data-src="../../lib/img/magazine/intech/img03.png"
					data-retina="../../lib/img/magazine/intech/img03@2x.png"
					alt="インテリアサロン"
					style="max-width: 308px;"
					class="u-img__max"
					>
				</div>
				<p>あなたにぴったりの家具、それはあなたの住まいや好みはもちろん、ライフスタイルや家族構成などで大きく変わります。</p>
				<p>インテリアサロンでは、専任のコンシェルジュが一人ひとりのお客さまの家具探しをサポート。30を超える家具メーカーの何万点ものアイテムの中から、あなたにぴったりの逸品をご提案します。</p>
				<p>この、一生の付き合いとなる家具選びにふさわしい知識と経験を活かしたインテリアサロンでの家具提案は、ご利用いただいた多くの方にご好評をいただいています。</p>
				<div class="img center">
					<img
					data-src="../../lib/img/magazine/intech/img04.png"
					data-retina="../../lib/img/magazine/intech/img04@2x.png"
					alt="専任のコンシェルジュが豊富な経験とノウハウを活かし、お客さまとご相談を重ねながら家具選びをお手伝いします。30を超える家具メーカーの何万点ものアイテムから、一生の付き合いにふさわしい家具をご提案します。"
					style="max-width: 474px;"
					class="u-img__max"
					>
				</div>

				<h4 class="u-ttl__m">メーカーショールームでお選びいただいたこだわりの逸品を、ご優待価格でご案内します。</h4>

				<p>インテリアサロンでは、提携するメーカーやブランドの家具をご優待価格でご提供しています。あなたが長く愛着を持って使うことのできる家具との出会いを実現することで、家具のコストパフォーマンスを上げることはもちろん、ご優待価格でのご提供で、お得に手に入れていただけることも、インテリアサロンの特長です。</p>

				<div class="img center mb5">
					<img
					data-src="../../lib/img/magazine/intech/img06.png"
					data-retina="../../lib/img/magazine/intech/img06.png"
					alt="長く愛着をもって使える家具に出会うことで、家具のコストパフォーマンスがアップ。ご優待価格でのご提供で、特別な逸品をお得に手に入れていただけます。"
					style="max-width: 386px;"
					class="u-img__max"
					>
				</div>
				<h5 class="u-ttl__s">ショールーム体感ムービーのご紹介</h5>
				<div class="img center mb4">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/8Uk9RuBoRNU" frameborder="0" allowfullscreen></iframe>
				</div>

				<div class="center">
					<a href="<?php echo $base_url ?>/gift/article/furniture.php"><img src="../../lib/img/magazine/intech/img-gift.png" alt="ブランド家具ご購入優待割引"></a>
				</div>

			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="intech2.php" class="u-pager__link"><span class="u-pager__text">次のページでは、インテリアサロン担当者へのインタビューを紹介します！</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="intech.php">1</a></li>
					<li class="u-pager__item"><a href="intech2.php">2</a></li>
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
