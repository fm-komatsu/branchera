<?php
//base
include ("../../function.php");
$content = get_id_data('4002');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
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
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<section class="main__item">

				<h2 class="u-ttl__m">「ブランシエラ板橋西台」の外観デザイン・プランなどに、アンケートの結果が反映されました！</h2>
				<p>
					<img src="../../lib/img/event/enq_nishidai/img01.png"
					alt="ブランシエラ板橋西台"
					class="u-img__max">
				</p>

				<div class="event-picture">
					<div class="event-picture__row">
						<div class="event-picture__ex">
							<p>2014年７月に「ブランシエラ板橋西台」商品企画に関するアンケート調査を実施し、魅力を感じる外観デザインやプランなどについてみなさまの声をお聞きしました。</p>
							<p>その結果分かった、実際に住まう方が本当に求めているデザインとはどんなものなのか？「ブランシエラ板橋西台」に実際に反映されたアンケート結果をご紹介します。</p>
						</div>
						<div class="event-picture__img u-position__center">
							<img src="../../lib/img/event/enq_nishidai/img02@2x.png"
							style="max-width:424px;"
							class="u-img__max">
						</div>
					</div>
				</div>
				<br clear="all">
				<div class="u-assist">
					<h5 class="u-ttl__s">本アンケートについて</h5>
					<p>有効回答数：238件　/　回答者年齢：30代～40代前半中心</p>
				</div>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">好まれたのは、重厚で落ち着きのある外観デザインと、顔となるシンボルツリーがあるマンション。</h4>
				<p>まずは、外観デザインに関するアンケート結果を見てみましょう。</p>
				<p>落ち着いた雰囲気の中にスタイリッシュさのある外観について、約79%の方が魅力的、非常に魅力的と回答されています。また、外観に対する二択のアンケートでは、「重厚なタイル張りのブラウンを基調した高級感」が、「白を基調とした明るいデザイン」を大きく上回る約66%の方に、魅力的だと回答されました。</p>
				<p >また、マンションのランドスケープデザインに関するアンケートでは、「シンボルツリーを設けた緑潤う植栽計画」への関心が高く、約74%の方が魅力的・非常に魅力的と回答されました。</p>

				<h5 class="u-ttl__s">落ち着いた雰囲気の中にスタイリッシュさのある外観をどう思いますか？</h5>

				<img
				data-src="../../lib/img/event/enq_nishidai/img03.png"
				data-retina="../../lib/img/event/enq_nishidai/img03@2x.png"
				alt="アンケート結果"
				style="max-width:365px;"
				class="u-img__max">

				<h5 class="u-ttl__s">分譲マンションの商品企画として魅力的な外観はどちらですか？</h5>
				<img
				data-src="../../lib/img/event/enq_nishidai/img04.png"
				data-retina="../../lib/img/event/enq_nishidai/img04@2x.png"
				alt="アンケート結果"
				style="max-width:445px;"
				class="u-img__max">

				<h5 class="u-ttl__s">シンボルツリーを設けた緑潤う植栽計画をどう思いますか？</h5>
				<img
				data-src="../../lib/img/event/enq_nishidai/img05.png"
				data-retina="../../lib/img/event/enq_nishidai/img05@2x.png"
				alt="アンケート結果"
				style="max-width:315px;"
				class="u-img__max mb-inner">
				<br clear="all">
				<div class="u-float__left">
					<img
					data-src="../../lib/img/event/enq_nishidai/img06.png"
					data-retina="../../lib/img/event/enq_nishidai/img06@2x.png"
					alt="ブランシエラ板橋西台"
					style="max-width:330px;"
					class="u-img__max" >
				</div>
				<p>ブラウンを基調とする重厚さの中にも、どこかスタイリッシュさを感じられる外観デザイン。質感の高いタイル張りの外壁は、シンボルツリーの緑を引き立て、存在感を際立てています。</p>
				<p>ブランシエラクラブのみなさまの声を反映し、周辺の街並と調和しながら、オンリーワンの魅力を主張するマンションに仕上がりました。</p>

			</section>

			<section  class="main__item">
				<h4 class="u-ttl__m">また、以下のようなご意見も参考にさせていただききました。</h4>

				<h5 class="u-ttl__s">共用設備・施設として欠かせないものをお選びください（複数回答可）</h5>
				<img
				data-src="../../lib/img/event/enq_nishidai/img07.png"
				data-retina="../../lib/img/event/enq_nishidai/img07@2x.png"
				alt="アンケート結果"
				style="max-width:498px;"
				class="u-img__max">
				<h5 class="u-ttl__s">プランについて魅力的なプランはどちらですか？<br>どちらを選んでも専有面積・間取り・価格・管理費などに影響がないものとします</h5>
				<img
				data-src="../../lib/img/event/enq_nishidai/img08.png"
				data-retina="../../lib/img/event/enq_nishidai/img08@2x.png"
				alt="アンケート結果"
				style="max-width:533px;"
				class="u-img__max mb4">

			</section>
			<small class="u-small">※ブランシエラ板橋西台は完売いたしました。現在モデルルームはございません。</small>
			<!-- //section -->

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="enq_nishidai2.php" class="u-pager__link"><span class="u-pager__text">グループインタビューでみなさまの声をお聞きしました。</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item active"><a href="enq_nishidai.php">1</a></li>
					<li class="u-pager__item"><a href="enq_nishidai2.php">2</a></li>
				</ul>
			</nav>

		</div><!-- //wrapper -->




	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
