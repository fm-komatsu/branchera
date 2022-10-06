<?php
//base
include ("../../function.php");
$content = get_id_data('13001');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　1/2」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-knowhow";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_knowhow.php", "暮らしのノウハウBOOK" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img center mb4">
				<div class="center mt4 u-only__pc">
					<figure class="mb3">
						<img
						data-src="../../lib/img/magazine/knowhow/main.jpg"
						data-retina="../../lib/img/magazine/knowhow/main.jpg"
						alt="長谷工グループ 暮らしのノウハウBOOK"
						style="max-width:720px;"
						class="u-img__max"
						>
					</figure>
					<h3><img src="../../lib/img/magazine/knowhow/h3.png" alt="掃除・メンテナンス"></h3>
				</div>

				<div class="center mb2 mt4 u-only__sp">
					<figure class="mb2">
						<img
						data-src="../../lib/img/magazine/knowhow/main_sp.jpg"
						data-retina="../../lib/img/magazine/knowhow/main_sp.jpg"
						alt="長谷工グループ 暮らしのノウハウBOOK"
						style=""
						class="u-img__max"
						>
						<h3 class="w90_sp center"><img src="../../lib/img/magazine/knowhow/h3.png" alt="掃除・メンテナンス"></h3>
					</div>
				</div>

				<div class="qArea">
					<div class="qAreaInner01">
						<div class="qTtlIcon"></div>
						<p class="qDate">001<br><span>17.09.19</span></p>
						<h3>酸性・弱アルカリ性・中性、洗剤の種類と違いとは？</h3>
					</div>
					<div class="qAreaInner02">
						<p>リビングやバスルーム、トイレなどの掃除をする時に使用する洗剤には、いろいろな種類がありますよね。酸性や弱アルカリ性、中性などの洗剤をよく見かけますが、それぞれどのような違いがあるのでしょうか？また、洗剤を使用する際の注意点を教えてください。</p>
					</div>
				</div>


				<div class="aArea">
					<div class="aAreaTtlArea">
						<div class="aTtl">
							<figure><img src="../../lib/img/magazine/knowhow/icn_a.png" alt="Answer"></figure>
							<h3>汚れの種類によって洗剤を選びましょう！</h3>
						</div>
						<p>ドラッグストアやスーパーでは、いろいろな種類の洗剤が販売されていますよね。<br>販売されている洗剤の多くは、パッケージなどに使い方が詳しく書かれているので、<br>まずはパッケージをよく確認していただければと思います。<br>ここでは、さらに液性の特長についてご紹介します。</p>
					</div>

					<div class="aAreaInner">
						<h4 class="u-ttl__m">酸性洗剤</h4>
						<ul class="aList">
							<li><span>・</span>便器の尿石</li>
							<li><span>・</span>浴槽の石鹸カス</li>
							<li><span>・</span>水アカ　など</li>
						</ul>
						<div class="flex between mb4">
							<div class="w60">
								<p>酸性洗剤は、<strong>トイレや浴室などの頑固な汚れに効果的です。</strong>汚れに垂らして、すぐ効果がでるものではないため、<strong>湿布をするなどしてから</strong>こするなどして汚れを落とします。<br>一方で、<strong>酸性洗剤は非常に強力なため、材質や手を傷める可能性</strong>があります。使用する際には、手袋・マスク・換気などの準備をしてから使用しましょう。また、塩素系の洗剤と一緒に使用すると、有毒ガスが発生するので、<strong>パッケージに書かれた使用上の注意を必ず確認してください。</strong></p>
							</div>
							<div class="w40">
								<img
								data-src="../../lib/img/magazine/knowhow/illust/mainte-img01.png"
								data-retina="../../lib/img/magazine/knowhow/illust/mainte-img01@2x.png"
								alt="台所用洗剤の液性　イメージ"
								style="max-width: 274px;"
								class="u-img__max"
								>
							</div>
						</div>

						<h4 class="u-ttl__m">弱アルカリ洗剤</h4>
						<ul class="aList">
							<li><span>・</span>ガスコンロ回り</li>
							<li><span>・</span>キッチン換気扇やレンジフード</li>
							<li><span>・</span>頑固な汚れ</li>
							<li><span>・</span>皮脂汚れ</li>
						</ul>
						<p class="mb6">弱アルカリ性洗剤は、<strong>頑固な油汚れに効果的です。</strong>なかなか取れないキッチンの油汚れに使用してみましょう。ただ、<strong>酸性洗剤同様に材質や手を傷める可能性があるので、初めて使用する際には、端っこなどの目立たないところから使用するようにしましょう。</strong>試し塗りは、弱アルカリ性だけでなく、すべての洗剤で実践することをオススメします。</p>

						<h4 class="u-ttl__m">中性洗剤</h4>
						<ul class="aList">
							<li><span>・</span>食器やキッチン汚れ</li>
							<li><span>・</span>フローリングなど</li>
							<li><span>・</span>軽い油汚れ</li>
						</ul>
						<p class="mb6">中性洗剤は、<strong>毎日の食器洗いなど軽い油汚れに効果的です。</strong>安全性が高く、比較的材質も傷めずに使用できます。<strong>ひどい油汚れなどは落ちない場合がある</strong>ので、その場合は弱アルカリ性洗剤を使用するなどしましょう。</p>

						<h4 class="u-ttl__m">洗剤を使用する際の注意点</h4>
						<p class="mb6">マンションや戸建てなどの建物には、いろいろな建材が使用されています。そのため、大丈夫だろうと思って<strong>強力な洗剤を使用すると、材質を痛めてしまう可能性があります。</strong>初めて使用する際には、必ず試し塗りを忘れないようにしてください。</p>


						<div class="aPoint">
							<h5 class="u-ttl__s"><img src="../../lib/img/magazine/knowhow/icon_point.png" alt="Point"></h5>
							<p>洗剤とは違いますが、いろいろな汚れが手軽に落とせるということで「メラミンスポンジ」(「激落ちくん」等)を使用するご家庭も多いかと思います。このメラミンスポンジも洗剤同様に、必ず試してから使用しましょう。傷・変色しやすいものや、光沢のあるものに使用すると、キズがつく可能性があります。</p><p>また、浴室やトイレには汚れがつかないようにコーティングされている場合があるため、一見大丈夫そうに見えても、メラミンスポンジを使用することで、せっかくのコーティングがはがれてしまうこともあるので注意しましょう。</p>
						</div>

						<p class="aLast">汚れに合わせて洗剤を上手に使いこなすことで、ラクにキレイなお部屋をキープすることができます。注意事項を守って、使ってみてください。</p>

					</div>

					<div class="companyInfo">
						<h6>情報提供　　<br class="u-only__sp"><span>株式会社長谷工ライフ</span></h6>
						<p>長谷工ライフは、長谷工グループの総合人材サービス会社として、ニーズにあった人材紹介、お仕事をお探しの方への情報提供、マンション管理員の教育研修を行なっております。</p>
					</div>
					<hr class="lastHr" />
				</div><!-- //aArea -->

				<div class="center mb4"><a href="<?php echo $link_url ?>/magazine/index_knowhow.php" class="u-btn_l center"><span>暮らしのノウハウBOOKの目次に戻る</span></a></div>


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
