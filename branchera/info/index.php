<?php
//base
include ("../function.php");
$content = get_id_data('99999');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

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
	<article class="main__row ">
		<?php
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item u-clearfix">
				<h2 class="u-ttl__l">イベント開催中止の決定について</h2>

				<p class="mb2">長谷工グループ「ブランシエラクラブ」事務局は、現在発生している新型コロナウイルス感染症が拡大している状況を受け、下記イベントの開催中止を決定しましたので、お知らせいたします。</p>
				<div class="u-assist">
					<ul class="u-list__ul mt0 mb0">
						<li>3月7日（土）「林家正蔵 落語会」</li>
						<li>3月22日（日）「スナッグゴルフ＆ミニサッカー教室」</li>
					</ul>
				</div>
				<p class="mb2">たくさんの方にご応募いただいておりましたが、ご参加されるみなさまや関係者の健康・安全面を第一に考え、誠に遺憾ではありますが、開催を中止することといたしました。</p>
				<p class="mb3">楽しみにしてくださったみなさまには、大変残念なお知らせとなりますが、何卒ご理解をいただきますよう、よろしくお願いいたします。</p>
				<p class="u-float__right">長谷工グループ「ブランシエラクラブ」事務局</p>

			</section>

		</div>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
