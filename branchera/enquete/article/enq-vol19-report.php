<?php
//base
include ("../../function.php");
$content = get_id_data('11060');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2 enq12";

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

			<section class="main__item mb3 mb1_sp">
				<h2 class="u-ttl__l">マンションの共用部についてのアンケート</h2>
				<div class="u-assist_enq_low07 u-only__pc">
					回答期間　　　：　2021年7月1日（木）～2021年7月18日（日）<br>
					回答者数　　　：　計5,000名<br>

				</div>
				<div class="u-assist_enq_low07 u-only__sp u-font__palt">
					回答期間：2021年7月1日（木）～2021年7月18日（日）<br>
					回答者数：計5,000名<br>

				</div>
				<div class="mb2">
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/main-v@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="<?php echo $pageTtl ?>" />
						<img src="<?php echo $img_url ?>/enquete/report19/main-v-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
				</div>
				<p class="report19__intro">マンションでの暮らしを快適にする共用設備や共用施設。住まいを選ぶ際に重視する方もいるのではないでしょうか？みなさまの暮らしを快適にするために、長谷工リフォームでは共用部のリノベーションも手掛けています。今回のアンケートでは、マンションにお住まいの方が普段、共用部をどのように利用しているのかや、「あったらいいな」と思う理想の共有部についてお聞きしました。マンションに暮らしてよかったことについても伺いましたよ！ぜひご覧ください♪</p>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/intro_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションの共用設備・施設について" />
						<img src="<?php echo $img_url ?>/enquete/report19/intro_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="マンションの共用設備・施設について" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q1_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お住まいのマンションにはどんな共用設備がありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q1_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お住まいのマンションにはどんな共用設備がありますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q1_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="よく利用される共用設備は何ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q1_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="よく利用される共用設備は何ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q1_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションに住むとしたらどんな共用設備があったらいいな、と思いますか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q1_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="マンションに住むとしたらどんな共用設備があったらいいな、と思いますか？" />
					</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q2_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お住まいのマンションにはどんな共用施設がありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q2_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お住まいのマンションにはどんな共用施設がありますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q2_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションに住むとしたらどんな共用施設があったらいいな、と思いますか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q2_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="マンションに住むとしたらどんな共用施設があったらいいな、と思いますか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q3_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションならではのあったらいいなと思う設備・施設についてこんな意見もありました！マンション・戸建てお住まいになって、よかったと思われることは何ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q3_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="マンションならではのあったらいいなと思う設備・施設についてこんな意見もありました！マンション・戸建てお住まいになって、よかったと思われることは何ですか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q4_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションでの暮らしをもっと充実させる！長谷工の共用部のリノベーション" />
						<img src="<?php echo $img_url ?>/enquete/report19/q4_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="マンションでの暮らしをもっと充実させる！長谷工の共用部のリノベーション" />
					</div>
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/post_18.html" data-ga-click="enq19_hrf1" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report19/q4_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report19/q4_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>	
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q4_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工はマンション共用部のリノベーションも行っています。" />
						<img src="<?php echo $img_url ?>/enquete/report19/q4_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工はマンション共用部のリノベーションも行っています。" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q5_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="コロナ禍で、共用施設の使い方にどのような変化がありましたか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q5_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="コロナ禍で、共用施設の使い方にどのような変化がありましたか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q5_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="コロナ禍で、共用部について何か変更・検討されたこと、欲しい設備などはありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q5_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="コロナ禍で、共用部について何か変更・検討されたこと、欲しい設備などはありますか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/intro_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションの共用設備の修繕・改修について" />
						<img src="<?php echo $img_url ?>/enquete/report19/intro_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="マンションの共用設備の修繕・改修について" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q6_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お住まいのマンションの外壁や共用廊下、設備の汚れや劣化が気になりますか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q6_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="お住まいのマンションの外壁や共用廊下、設備の汚れや劣化が気になりますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q6_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="建物劣化をご存知ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q6_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="建物劣化をご存知ですか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
         <!--動画埋め込み-->
						<div class="report19_03">
							<img src="<?php echo $img_url ?>/enquete/report19/q7_bg@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションの建物調査・診断も長谷工におまかせ診断の達人住優師動画" />
							<img src="<?php echo $img_url ?>/enquete/report19/q7_bg-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="マンションの建物調査・診断も長谷工におまかせ診断の達人住優師動画" />
									<div class="report19_03__video_base">
										<iframe class="report19_03__video_emb center" src="https://www.youtube.com/embed/wRjkjrBDu-o?rel=0" frameborder="0"
										gesture="media" allow="encrypted-media" allowfullscreen></iframe>
									</div>
						</div>
         <!--動画埋め込み-->
					<a href="https://www.haseko.co.jp/reform/juyushi/" data-ga-click="enq19_hrf2" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report19/q7_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report19/q7_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>	
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q7_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住優師は長谷工のマンション調査診断の専門チーム！" />
						<img src="<?php echo $img_url ?>/enquete/report19/q7_05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="住優師は長谷工のマンション調査診断の専門チーム！" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q8_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="最新の3D診断技術を用いた建物劣化診断を始めました！どのようなものかご興味はおありですか？" />
						<img src="<?php echo $img_url ?>/enquete/report19/q8_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="最新の3D診断技術を用いた建物劣化診断を始めました！どのようなものかご興味はおありですか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
         <!--動画埋め込み-->
						<div class="report19_03">
							<img src="<?php echo $img_url ?>/enquete/report19/q9_bg@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンションの建物調査・診断も長谷工におまかせ診断の達人住優師動画" />
							<img src="<?php echo $img_url ?>/enquete/report19/q9_bg-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="マンションの建物調査・診断も長谷工におまかせ診断の達人住優師動画" />
									<div class="report19_03__video_base">
										<iframe class="report19_03__video_emb center" src="https://www.youtube.com/embed/2VQIVHJEe-w?rel=0" frameborder="0"
										gesture="media" allow="encrypted-media" allowfullscreen></iframe>
									</div>
						</div>
         <!--動画埋め込み-->
			</section>
			<section>
				<div>
					<a href="https://reg34.smp.ne.jp/regist/is?SMPFORM=njod-lbsdng-16bd8a719842627fa3c2dafbe76e260d" data-ga-click="enq19_hrf3" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report19/q10_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="マンション診断についてのお問い合わせはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report19/q10_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="マンション診断についてのお問い合わせはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/q10_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お住まいのリフォームサービスのご紹介 リフォーム無料オンライン相談 360°施工事例" />
						<img src="<?php echo $img_url ?>/enquete/report19/q10_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="お住まいのリフォームサービスのご紹介 リフォーム無料オンライン相談 360°施工事例" />
					</div>
				</div>
				<div class="flex">
					<div class="report19_w50">
						<a href="https://www.haseko.co.jp/hrf/reform/news/2020/post_22.html" data-ga-click="enq19_hrf4" target="_blank">
								<img src="<?php echo $img_url ?>/enquete/report19/q10_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
					<div class="report19_w50">
						<a href="https://www.haseko.co.jp/hrf/reform/panorama.html" data-ga-click="enq19_hrf5" target="_blank">
							<img src="<?php echo $img_url ?>/enquete/report19/q10_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
				</div>
				<div class="u-only__pc">
					<img src="<?php echo $img_url ?>/enquete/report19/q10_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工リフォーム公式LINE" />
					<a href="https://lin.ee/veZJbc6" data-ga-click="enq19_hrf6" target="_blank">
						<img src="<?php echo $img_url ?>/enquete/report19/q10_06@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="詳しくはこちら" />
					</a>
						<img src="<?php echo $img_url ?>/enquete/report19/q10_07@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="QRコードをスマートフォンで読み込んで、友達登録してね！" />
				</div>
				<div class="u-only__sp">
					<a href="https://www.haseko.co.jp/hrf/reform/news/2020/post_22.html" data-ga-click="enq19_hrf4" target="_blank">
					  <img src="<?php echo $img_url ?>/enquete/report19/q10_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</a>
					 <img src="<?php echo $img_url ?>/enquete/report19/q10_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="360°施工事例" />
					<a href="https://www.haseko.co.jp/hrf/reform/panorama.html" data-ga-click="enq19_hrf5" target="_blank">
						<img src="<?php echo $img_url ?>/enquete/report19/q10_05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
					</a>
						<img src="<?php echo $img_url ?>/enquete/report19/q10_06-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工リフォーム公式LINE" />
					<a href="https://lin.ee/veZJbc6" data-ga-click="enq19_hrf6" target="_blank">
						<img src="<?php echo $img_url ?>/enquete/report19/q10_07-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
					</a>
						<img src="<?php echo $img_url ?>/enquete/report19/q10_08-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工リフォーム公式LINE" />
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/outro_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="貴重なご意見ありがとうございました！">
						<img src="<?php echo $img_url ?>/enquete/report19/outro_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="貴重なご意見ありがとうございました！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/outro_02@2x.png" loading="lazy" class="u-only__pc u-img__max">
						<img src="<?php echo $img_url ?>/enquete/report19/outro_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/outro_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
						<img src="<?php echo $img_url ?>/enquete/report19/outro_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report19/outro_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="第20回アンケートは2021年10月21日（木）〜実施！みなさまのご回答をお待ちしております！" >
						<img src="<?php echo $img_url ?>/enquete/report19/outro_04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="第20回アンケートは2021年10月21日（木）〜実施！みなさまのご回答をお待ちしております！" >
					</div>
				</div>
			</div>
			</section>
		  <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
		</div>
	</article>
</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
