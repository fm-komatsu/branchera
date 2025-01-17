<?php
//base
include ("../../function.php");
$content = get_id_data('4005');
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
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<div class="main__wrapper">

			<section class="main__item">

				<img
				src="../../lib/img/event/seeing-l/img01.png"
				alt="≪ 限定公開 ≫“長谷工の最先端マンション技術”を紹介する一般非公開施設に特別ご招待！"
				class="u-only__pc u-img__max">
				<img
				src="../../lib/img/event/seeing-l/img01-sp.png"
				alt="≪ 限定公開 ≫“長谷工の最先端マンション技術”を紹介する一般非公開施設に特別ご招待！"
				class="u-only__sp u-img__max">

				<p>
					今回ご見学いただくのは、マンションデベロッパー向けのプレゼンテーションスペースです。
					<br>この施設は長谷工コーポレーションがお客さまに満足いただける商品企画を行うための、企画設計・仕様設定などの具体的提案、および新技術・新商品の情報発信のスペースとして開設しています。
				</p>
				<p class="mb-inner">長谷工コーポレーションオリジナルの次世代マンション企画「Be-Next」や防災設備などの最新技術・新商品をご紹介。普段は見られないマンション内の配線や配管も見ることができます。</p>
				<img
				src="../../lib/img/event/seeing-l/img02.png"
				alt="施設内の様子"
				class="u-only__pc u-img__max">
				<img
				src="../../lib/img/event/seeing-l/img02-sp.png"
				alt="施設内の様子"
				class="u-only__sp u-img__max">
				<p class="mb-inner">長谷工のマンションで使うことのできる部材や設備機器約1,700点を展示しており、カタログだけでは分からない商品の質感を実際に見て、触っていただき、マンションの全体の仕様をこのプレゼンテーションスペース1ヶ所で確認できるようになっています。マンションがどのようにつくられていくのかをぜひご体験ください。</p>

			</div>

		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
