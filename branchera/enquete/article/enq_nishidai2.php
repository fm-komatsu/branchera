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

			<!-- section -->
			<section class="main__item cf">

				<h2  class="u-ttl__l">アンケート回答者にお集まりいただき、和やかな雰囲気の中、グループインタビューを実施しました。</h2>
				<p>2014年7月12日・13日、9月12日・15日の2回に渡り、アンケートにご回答いただいた方に実際に顔を合わせてお話をうかがうグループインタビューを実施しました。</p>
				<p>途中、現地近く有名店のアップルパイをいただくなど終始和やかな雰囲気の中、住まいに関するご希望など様々なご意見をいただきました。</p>
				<div class="u-float__left u-position__center">
					<img
					data-src="../../lib/img/event/enq_nishidai/img09.png"
					alt="グループインタビューの様子"
					style="max-width:300px;"
					class="u-img__max" >
				</div>
				<div class="u-assist" style="overflow:hidden;">
					<h5 style="margin-bottom: 6px;">グループインタビュー参加者</h5>
					<p style="line-height: 1.4">参加者数：61組79名　/<br>回答者年齢：30代～40代前半中心</p>
				</div>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">ライフステージやご家族構成により異なる、様々な住まいに関する希望をお聞かせいただきました。</h4>
				<img src="../../lib/img/event/enq_nishidai/img10.png" alt="様々な住まいに関する希望をお聞かせいただきました"
				class="u-img__max u-postion__center">
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">みなさまのご意見を反映し、開放感と高級感のバランスがとれた、モデルルームが完成しました。</h4>

				<p>ご家族の構成やライフスタイル、将来に対する考え方などの違いから、多種多様なご意見が出る中で、共通のご意見として「リビング・ダイニングを広く明るく使いたい！」という声が浮かび上がりました。</p>

				<p>その想いを最大限に生かせるよう、約2.2mのハイサッシや使い勝手の良い引き戸を採用した明るく開放的な空間をご用意。また、開放感を強調するために、床面を初め、壁やキッチンなど明るい色を基調とした内装デザインを予定していましたが、ブラウンを基調とした高級感のある内装デザインに変更しました。</p>

				<p>これは、グループインタビューの中で、やはりせっかく手に入れる新築マンションには、開放感だけでなく高級感も重要だという声も多かったからです。</p>

				<img src="../../lib/img/event/enq_nishidai/img11.png" alt="リビング・ダイニング" class="u-img__max">
			</section>

			<div class="section">
				<h4 class="u-ttl__m">リビングに隣接する和室空間が人気。</h4>

				<p>小さいお子様を安心して遊ばせるための場所や、ゲストをお迎えするための場所、友人が集まった際にリビング・ダイニングとつなげて大空間を演出しやすいなど、ライフスタイルやライフステージにより様々な声がありましたが、共通のご意見として、和室空間が必要だという声を多くいただきました。</p>

				<img src="../../lib/img/event/enq_nishidai/img12.png" alt="和室イメージ" class="u-img__max">

				<p>また、事前に実施したアンケートでも、約半数の方が和室のある空間を求めていました。</p>
				<p class="mb3">モデルルームには和室のプランは反映しておりませんが、「ブランシエラ板橋西台」のプランバリエーションでは多くのタイプにおいて和室空間をご用意させていただきました。</p>

				<div class="u-position__center mb-inner">
					<img
					data-src="../../lib/img/event/enq_nishidai/img13@2x.png"
					style="max-width:560px;"
					class="u-img__max">
				</div>

				<small class="u-small">※ブランシエラ板橋西台は完売いたしました。現在モデルルームはございません。</small>
			</div>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item "><a href="enq_nishidai.php">1</a></li>
					<li class="u-pager__item active"><a href="enq_nishidai2.php">2</a></li>
				</ul>
			</nav>

		</article>
	</main>
	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
