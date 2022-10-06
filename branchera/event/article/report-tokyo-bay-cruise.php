<?php
//base
include ("../../function.php");
$content = get_id_data('4073');
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
				<img
				data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/main-v.jpg"
				data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/main-v@2x.jpg"
				alt="<?php echo $pageTtl ?>"
				class="u-img__max u-only__pc">
				<img
				data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/main-v-sp.jpg"
				data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/main-v-sp@2x.jpg"
				alt="<?php echo $pageTtl ?>"
				class="u-img__max u-only__sp">

				<p class="mb4 mb2_sp">2020年の東京オリンピックに向けて、開発が進められる東京湾岸エリア。ビルと緑豊かな公園が共存しており、開放感のある景色を見ることができます。そして実は、長谷工コーポレーションが施工したマンションが多いエリアでもあるんです！<br>今回は、この東京湾岸エリアをブランシエラクラブ会員さまとともにクルージング。約120分間の海上の旅の様子をレポートします。</p>

				<h3 class="u-ttl__m mt0">フリードリンクを楽しみながら、海の旅がスタート</h3>
				<div class="flex between mb2">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__1.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__1@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w50">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__2.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__2@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
				</div>
				<div class="mb3 mb2_sp">
					<p>まだ涼しい風が吹く午前10時、会員のみなさまを乗せた船が出港。今回の応募人数はなんと約2500人！あまりの応募人数の多さに、船内からは驚きの声が。フリードリンクを楽しみながら、建設ラッシュの東京湾を眺めます。<br>開発が進む最中の景色は、まさに今しか見られない貴重な光景。カメラのシャッターを切る回数も、自然と増えていきます。</p>
				</div>
				<div class="flex between mb2">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__3.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__3@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w50">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__4.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__4@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
				</div>
				<div class="mb3 mb2_sp">
					<p>普段は車で渡っているレインボーブリッジも、海上から見るといつもよりも近くに感じられ、少し違った印象。海面から50mの高さにある橋を見上げながら、お台場についての説明に耳を傾けます！<br>「お台場」という地名は、1853年（嘉永6年）のペリー来航に危機を感じた江戸幕府が築造した「台場」に由来します。第三台場と第六台場は現存していて、今でも近くで見ることができるんですよ。</p>
				</div>
				<div class="flex between mb2">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__5.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__5@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w50">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__6.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__6@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
				</div>
				<div class="mb4">
					<p>晴海ふ頭に出ると、豊洲新市場がすぐ近くに見えます。このエリアは、2020年のイベント後改修される大規模マンションを中心に、新たな街づくりがされる予定です。海に囲まれた地に吹く新しい風。一体どんな街が誕生するのか、期待が高まります。</p>
				</div>
				<h3 class="u-ttl__m mt0">頭上ギリギリ！ドキドキの橋通過</h3>
				<div class="flex between mb2">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__7.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__7@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w50">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__8.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__8@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
				</div>
				<div class="mb4">
					<p>東雲運河を進むと、江東区豊洲と東雲を結ぶ橋が見えてきました。遠目で見ると大きな橋に見えますが、船で通過すると意外と天井が低く、一同びっくり！橋をくぐるという珍しい場面に、シャッターを切る人が続出しました。中には、頭がぶつかりそうで屈んだり、橋に手を伸ばしてみたりする人も。</p>
				</div>
				<div class="flex between mb3">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__9.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__9@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<div class="w50">
						<p>そして、橋の近くには長谷工コーポレーションが施工中のマンションを発見！<br>ほかにも、この一帯では長谷工コーポレーションが施工する数々のマンションが見られました。完成が待ち遠しいですね。</p>
					</div>
				</div>
				<div class="flex between mb3">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__10.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__10@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<div class="w50">
						<p>辰巳を過ぎると、早くも折り返し地点。すれ違う船や、周囲で釣りをしている子ども達に手を振りながら、のんびりとクルージングを楽しみます。</p>
					</div>
				</div>
				<div class="flex between mb2">
					<figure class="w50 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__11.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__11@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w50">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__12.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__12@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
				</div>
				<div class="mb4">
					<p>そして子どもたちが大喜びだったのが、「船長なりきり」コーナー。船長用の帽子を被り、浮き輪を持って記念撮影を行ないました！このクルージングでしか体験できない特別な時間に、笑みがこぼれます。</p>
				</div>
				<div class="flex between mb2">
					<figure class="w33 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__13.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__13@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w33 mb2_sp">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__14.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__14@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>
					<figure class="w33">
						<img
							data-src="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__15.jpg"
							data-retina="<?php echo $img_url ?>/event/report-tokyo-bay-cruise/img__15@2x.jpg"
							alt="<?php echo $pageTtl ?>｜イベントの様子"
							class="u-img__max">
					</figure>

				</div>
				<div class="mb4">
					<p>約120分間の航海が終わると、丁度太陽が昇りお昼に。曇り空でしたが、そのおかげで暑さも程よく心地のよい海の旅となりました！<br>歴史ある景色と、都市開発の現場が交じり合う東京湾岸エリア。来年の東京オリンピックが終わり、時が経てば、今建設されているビルやマンションも歴史的建造物として、人々に親しまれているかも！？<br>そんな想像をしながらクルージングをするのも楽しそうですね。もし第2弾が開催される際は、今回参加されなかった方もぜひご応募ください！</p>
				</div>
				<div class="u-assist mb4" style="line-height:2;">
					<span class="u-font__bold">ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</span>
				</div>

			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
