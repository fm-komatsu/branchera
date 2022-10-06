<?php
//base
include ("../../function.php");
$content = get_id_data('4025');
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
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<figure>
				<img
				data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/main-v.png"
				data-srcset="<?php echo $img_url; ?>/event/report-mitaka_farm/main-sp@2x.png 666w ,
				<?php echo $img_url; ?>/event/report-mitaka_farm/main-v@2x.png"
				alt="おいしいイモ煮会と野菜収穫体験 イベントレポート"
				class="u-img__max">
				</figure>


				<p class="mb3">三鷹ファームが開催している、ジャガイモと大根の収穫体験と芋煮会イベントに、ブランシエラクラブも参加させていただきました！当初の予定の11月18日があいにくの雨で、開催日が翌日に延期となりましたが、快晴に恵まれ、たくさんの方にご参加いただきました。</p>

				<div class="u-assist mb4" style="line-height:2;">
					<h4 class="u-ttl__m">農業法人 株式会社三鷹ファーム</h4>
					<p>三鷹市内の農地を保全し、都市農業を永続的に発展させていくことを目的として設立された三鷹ファーム。菜園インストラクター養成講座や野菜づくり講座などを展開し、三鷹市の自然と共生するまちづくりに貢献しています。</p>
				</div>

				<h4 class="u-ttl__m">土のにおいが心地いい、三鷹ファーム管理農園。</h4>
				<div class="flex between">
					<div class="w55">
						<p>イベントを予定していた11月18日のお天気はどこへやら…翌日は快晴に恵まれ、とても気持ちのいいスタートになりました。</p><p>午前の澄み切った空気の中、駅から住宅街を抜け、畑に向かって歩き進めていくと、徐々にどこか懐かしい土のにおいが！会場では、芋煮の準備が進む大きなお鍋と大きく実った野菜畑。<br>収穫への期待が高まります。</p><p>三鷹ファームの岡田代表の挨拶から、イベントスタート。2チームに分かれて順番に収穫が始まりました。</p>
					</div>
					<figure class="w45">
						<img
						data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/image01.png"
						data-retina="<?php echo $img_url; ?>/event/report-mitaka_farm/image01@2x.png"
						style="max-width : 360px;"
						class="u-img__max">
					</figure>
				</div>

				<h4 class="u-ttl__m">大きな大根とジャガイモをみんなで収穫！</h4>
				<div class="flex between">
					<div class="w50 mb2">
						<img
						 data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/image02.png"
						 data-retina="<?php echo $img_url; ?>/event/report-mitaka_farm/image02@2x.png"
						 style="max-width : 360px;"
						 class="u-img__max" />

					 </div>
					<div class="w50 mb2">
						<img
						 data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/image03.png"
						 data-retina="<?php echo $img_url; ?>/event/report-mitaka_farm/image03@2x.png"
						 style="max-width : 360px;"
						  class="u-img__max" /></div>
					<div class="w50">
					<p>ブランシエラクラブのみなさまも、いよいよ収穫です！最初はジャガイモから。少し掘るだけで、次々とジャガイモたちが！畑のあちらこちらから子どもたちの「ここにもあった！」と歓声が響きます。</p>
					<p class="mb2">次は大きな大根です。<br>あまりの大きさでなかなか引っこ抜けないほど！大根の収穫は初めて…という人も多かったようで、日常ではなかなかできない体験を味わえました。</p>
					</div>
					<div class="w50">
						<img
						 data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/image04.png"
						 data-retina="<?php echo $img_url; ?>/event/report-mitaka_farm/image04@2x.png"
						 style="max-width : 360px;"
						 class="u-img__max" />
					 </div>
				</div>

				<h4 class="u-ttl__m">収穫の後は、お待ちかねのアツアツの芋煮会！</h4>
				<div class="flex between">
					<div class="w50 mb2">
						<img
						 data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/image05.png"
						 data-retina="<?php echo $img_url; ?>/event/report-mitaka_farm/image05@2x.png"
						 style="max-width : 360px;"
						 class="u-img__max" />
					 </div>
					<div class="w50">
						<img
						data-src="<?php echo $img_url; ?>/event/report-mitaka_farm/image06.png"
						data-retina="<?php echo $img_url; ?>/event/report-mitaka_farm/image06@2x.png"
						style="max-width : 360px;"
						class="u-img__max" />
					</div>
				</div>
				<p class="mb4">収穫体験の後は、みなさまお待ちかねの芋煮会です！<br>大きなお鍋２つから、暖かそうな湯気と共に、美味しそうなにおいが漂います。山形県で開催される「日本一の芋煮会」で腕をふるっていた方が監修しているとのことで、とても本格的！ニンジン・大根・里芋と牛肉などが入った具沢山の芋煮は、醤油ベースでほんのり甘く、とても美味しかったです。</p>
				<p>お土産に大根とジャガイモ、ブランシエラクラブからは「たなかみ米」をお配りし、イベントは終了しました。自然に触れる体験に、大人も子どもも楽しめたイベントでした。</p>

				<div class="u-assist mb4 center" style="line-height:2;">
					<strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong>
				</div>

			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
