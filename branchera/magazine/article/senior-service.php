<?php
//base
include( "../../function.php" );
$content = get_id_data( '1014' );
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
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">

			<section class="main__item">
				<h3 class="u-ttl__l">“終の住処”としての価値。<br>自立型から介護型まで、高齢者の快適な住環境を創造する、長谷工のシニア向けサービス。</h3>
				<p>累計66万戸<sup>※1</sup>を超えるマンション施工実績を背景に、そこに住まう方一人ひとりの快適にこだわり続けてきた長谷工グループ。建物構造や空間・仕様などの「ハード」、人によるサービスという「ソフト」、その両面で安全・安心・快適を追求しながらグループ力を高めてきました。</p><p>今回ご紹介する長谷工のシニア事業においても「ハード」「ソフト」両面での安全・安心・快適にこだわり、グループがこれまでに培ってきたノウハウを注ぎ込むことで、一人ひとりに満足いただける「終の住処」をご提案しています。</p>

				<div class="u-column__2">
					<div class="u-column__item">
						<img src="../../lib/img/magazine/senior-service/img01@2x.png"
						class="u-img__max">
						<p><strong>【終の住処にふさわしいカタチ】</strong><br> ●良好な立地の確保<br> ●自立型から介護型まで高齢者の状況に合わせた住まいのカタチ<br> ●快適な居住空間</p>
					</div>
					<div class="u-column__item">
						<img src="../../lib/img/magazine/senior-service/img02@2x.png"
						class="u-img__max">
						<p><strong>【終の住処にふさわしいサービス】</strong><br> ●きめ細やかな介護サービス<br> ●多彩なプロが集まるスタッフ体制<br> ●食事などによる健康管理サービス<br> ●安心の医療サービスや充実のイベント活動</p>
					</div>
				</div>

				<h4 class="u-ttl__m">高齢者一人ひとりの快適の追求、<br>その第一歩は、ライフステージを知ることからはじまります。</h4>
				<figure class="u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-service/img03.png"
					data-retina="../../lib/img/magazine/senior-service/img03@2x.png"
					alt="image"
					style="max-width: 683px;"
					class="u-img__max mb-inner">
					<img
					data-src="../../lib/img/magazine/senior-service/img04.png"
					data-srcset="../../lib/img/magazine/senior-service/img04-sp@2x.png 500w ,../../lib/img/magazine/senior-service/img04@2x.png"
					alt="image"
					style="max-width:588px ;"
					class="u-img__max">
				</figure>

				<h4 class="u-ttl__m">高齢者一人ひとりのライフステージに応える<br>長谷工の高齢者住宅・在宅ケアサービス。</h4>
				<figure class="u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-service/img05.png"
					data-srcset="../../lib/img/magazine/senior-service/img05-sp@2x.png 500w,../../lib/img/magazine/senior-service/img05@2x.png"
					alt="image"
					style="max-width: 659px;"
					class="u-img__max mb-inner">
					<img
					data-src="../../lib/img/magazine/senior-service/img06.png"
					data-srcset="../../lib/img/magazine/senior-service/img06-sp@2x.png 500w,../../lib/img/magazine/senior-service/img06@2x.png"
					alt="image"
					style="max-width: 659px;"
					class="u-img__max mb-inner"
					>
					<img
					data-src="../../lib/img/magazine/senior-service/img07.png"
					data-srcset="../../lib/img/magazine/senior-service/img07-sp@2x.png 500w ,../../lib/img/magazine/senior-service/img07@2x.png"
					alt="image"
					style="max-width:659px ;"
					class="u-img__max mb-inner"
					>
					<img
					data-src="../../lib/img/magazine/senior-service/img08.png"
					data-srcset="../../lib/img/magazine/senior-service/img08-sp@2x.png 500w ,../../lib/img/magazine/senior-service/img08@2x.png"
					alt="image"
					style="max-width:508px"
					class="u-img__max mb-inner"
					>
				</figure>
				<section class="main__item">
					<h4 class="u-ttl__m">お客さまを生涯にわたりサポートするグループの一員として。<br>長谷工のシニア事業では、高齢者のみなさまの快適で自分らしい毎日のための様々なサービスを展開しています。</h4>
					<p>高齢者のライフステージそれぞれのエキスパートである「株式会社長谷工シニアウェルデザイン」「株式会社ふるさと」という2社を中心に、グループのネットワークを活かしながら、最期まで自分らしい毎日をサポート。それが、長谷工のシニア事業です。</p>
					<figure class="u-column__center">
						<img
						data-src="../../lib/img/magazine/senior-service/img09.png"
						data-srcset="../../lib/img/magazine/senior-service/img09-sp@2x.png 500w ,../../lib/img/magazine/senior-service/img09@2x.png"
						alt="image"
						style="max-width:720px ;"
						class="u-img__max">
					</figure>
				</section>

				<section class="main__item">
					<figure class="u-position__center">
						<a href="<?php echo $base_url ?>/gift/article/nursing.php" >
							<img
							data-src="../../lib/img/magazine/senior-nippori/img-gift.png"
							data-srcset="../../lib/img/magazine/senior-nippori/img-gift-sp@2x.png 500w,../../lib/img/magazine/senior-nippori/img-gift@2x.png"
							alt="会員さま限定特典"
							style="max-width: 720px;"
							class="u-img__max">
						</a>
					</figure>
				</section>

				<ul class="u-small bottom">
					<li>※1.長谷工コーポレーションのマンション施工累計実績は<a href="http://www.haseko.co.jp/hc/what/works/results/" target="_blank" rel="nofollow" class="u-icon">こちら</a></li>
				</ul>

			</section>

			<nav class="u-pager">
			<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="senior-urawa.php" class="u-pager__link"><span class="u-pager__text">実際の有料老人ホームをご紹介！【武蔵浦和篇】</span></a></h6></div>
			<ul class="u-pager__row">
			<li class="u-pager__item active"><a href="senior-service.php">1</a></li>
			<li class="u-pager__item"><a href="senior-urawa.php">2</a></li>
			<li class="u-pager__item"><a href="senior-urawa2.php">3</a></li>
			<li class="u-pager__item"><a href="senior-nippori.php">4</a></li>
			<li class="u-pager__item"><a href="senior-nippori2.php">5</a></li>
			<li class="u-pager_nextwrap"><a href="senior-urawa.php" class="u-pager_next">　</a></li>
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
