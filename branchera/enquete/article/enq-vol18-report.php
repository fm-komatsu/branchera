<?php
//base
include ("../../function.php");
$content = get_id_data('11051');
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
				<h2 class="u-ttl__l">お住まいのリフォームに関するアンケート</h2>
				<div class="u-assist_enq_low07 u-only__pc">
					回答期間　　　：　2021年4月1日（木）～2021年4月18日（日）<br>
					回答者数　　　：　計3,382名<br>

				</div>
				<div class="u-assist_enq_low07 u-only__sp u-font__palt">
					回答期間：2021年4月1日（木）～2021年4月18日（日）<br>
					回答者数：計3,382名<br>

				</div>
				<div class="mb2">
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/main-v@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="<?php echo $pageTtl ?>" />
						<img src="<?php echo $img_url ?>/enquete/report18/main-v-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
				</div>
				<p>昨年から長く続く「おうち時間」も、日常になりつつありますね。社会的な規模で変化したライフスタイルに合わせて、<span style="font-weight:bold; background:linear-gradient(transparent 50%, #fcd8b9 50%);">住まいも心地よくしたい</span>と考える方が増えているのではないでしょうか？また、長い時間を家で過ごすようになったことで、室内の経年劣化がより気になりだした方もいるかもしれません。そこで今回は、会員のみなさまに<span style="font-weight:bold; background: linear-gradient(transparent 50%, #fcd8b9 50%);">リフォームについてのアンケート</span>を実施しました！リフォームを意識したときに気になるのが、一緒に暮らす家族のことやリフォームに向けた情報収集の方法。レポートでは、大切な家族の一員であるペットとより快適に暮らしたい方に向けたサービスや、外出が気になる今、おうちからでもリフォームについて相談や情報収集ができるオンラインサービスについてもご紹介します！</p>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="Q１ リフォームを検討する際に参考にしたい情報は何ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="Q１ リフォームを検討する際に参考にしたい情報は何ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="リフォームをするとしたらどの箇所ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="リフォームをするとしたらどの箇所ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="もしリフォームするとしたらどのくらいのご予算でお考えですか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="もしリフォームするとしたらどのくらいのご予算でお考えですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="NO.1のマンション施工実績とトップクラスのマンション管理実績" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="NO.1のマンション施工実績とトップクラスのマンション管理実績" />
					</div>
					<a href="https://www.haseko.co.jp/hrf/reform/jirei/mansion/" data-ga-click="enq18_hrf1" target="blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report18/q1_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report18/q1__05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_06@2x.png" loading="lazy" class="u-only__pc u-img__max"  alt="長谷工だからできるリフォーム" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max"  alt="長谷工だからできるリフォーム" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report18/q1_07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工だからできるリフォーム" />
					</div>
					<div class="flex between">
						<div class="w50">
							<a href="https://www.haseko.co.jp/hrf/reform/strength/01/" data-ga-click="enq18_hrf2" target="blank">
									<img src="<?php echo $img_url ?>/enquete/report18/q1_08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							</a>
						</div>
						<div class="w50">
							<a href="https://www.haseko.co.jp/hrf/reform/strength/03/" data-ga-click="enq18_hrf3" target="blank">
								<img src="<?php echo $img_url ?>/enquete/report18/q1_09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							</a>
						</div>
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report18/q1__07-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="長谷工だからできるリフォーム" />
					</div>
					<a href="https://www.haseko.co.jp/hrf/reform/strength/01/" data-ga-click="enq18_hrf2" target="blank">
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report18/q1__08-sp@2x.png" class="u-img__max u-only__sp center" loading="lazy" alt="詳しくはこちら" />
						</div>
					</a>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report18/q1__09-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="長谷工だからできるリフォーム" />
					</div>
					<a href="https://www.haseko.co.jp/hrf/reform/strength/03/" data-ga-click="enq18_hrf3" target="blank">
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report18/q1__10-sp@2x.png" class="u-img__max u-only__sp center" loading="lazy" alt="詳しくはこちら" />
						</div>
					</a>	
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_10@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工だからできるリフォーム" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__11-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="長谷工だからできるリフォーム" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_11@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工リフォームの担当者より" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__12-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="長谷工リフォームの担当者より" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_12@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいレージを活用してクリーニングやリフォームを行いませんか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__13-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="住まいレージを活用してクリーニングやリフォームを行いませんか？" />
					</div>
					<a href="https://www.haseko.co.jp/branchera/smile/use-smileage.php" data-ga-click="enq18_use-smileage">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report18/q1_13@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report18/q1__14-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</div>
					</a>	
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q1_14@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						<img src="<?php echo $img_url ?>/enquete/report18/q1__15-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ペットは何を飼われていますか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__01-sp@2x.png" loading="lazy" style="margin-top:-2px;" class="u-only__sp u-img__max" alt="ペットは何を飼われていますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ペットとの暮らしで、こんな物があればいいなというアイデアを教えてください" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="ペットとの暮らしで、こんな物があればいいなというアイデアを教えてください" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ペットと心地よく暮らすには何が必要でしょうか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="ペットと心地よく暮らすには何が必要でしょうか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="愛犬家住宅コーディネーターに相談してみませんか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="愛犬家住宅コーディネーターに相談してみませんか？" />
					</div>
					<div>
						<a href="https://www.haseko.co.jp/hrf/reform/special/dog_cat.html" data-ga-click="enq18_hrf4" target="blank">
							<img src="<?php echo $img_url ?>/enquete/report18/q2_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report18/q2__05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工リフォームの担当者より" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__07-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="長谷工リフォームの担当者より" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q2_08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="いま暮らCafeでは会員のみなさまにペットと楽しく過ごすための工夫をお聞きしました！" />
						<img src="<?php echo $img_url ?>/enquete/report18/q2__08-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="いま暮らCafeでは会員のみなさまにペットと楽しく過ごすための工夫をお聞きしました！" />
					</div>
					<div>
						<a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php" data-ga-click="enq18_imakura">
							<img src="<?php echo $img_url ?>/enquete/report18/q2_09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report18/q2__09-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>	
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="Q3 オンラインでのリフォーム相談を利用したことはありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="Q3 オンラインでのリフォーム相談を利用したことはありますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ご自宅で気軽にリフォームのご相談" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ご自宅で気軽にリフォームのご相談" />
					</div>
					<div>
						<a href="https://www.haseko.co.jp/hrf/reform/news/2020/post_22.html" data-ga-click="enq18_hrf4" target="blank">
							<img src="<?php echo $img_url ?>/enquete/report18/q3_03@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="詳しくはこちら" >
							<img src="<?php echo $img_url ?>/enquete/report18/q3__03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
				    </a>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工リフォーム公式LINE" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工リフォーム公式LINE" />
					</div>
          <div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="QRコードをスマートフォンで読み込んで友達登録してね！" />
					</div>
					<div>
						<a href="https://www.haseko.co.jp/hrf/reform/news/2020/lineline.html" data-ga-click="enq18_hrf5" target="blank">
							<img src="<?php echo $img_url ?>/enquete/report18/q3_07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report18/q3__06-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
					  </a>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="360℃施工事例" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__07-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="360℃施工事例" />
					</div>
					<div>
						<a href="https://www.haseko.co.jp/hrf/reform/panorama.html" data-ga-click="enq18_hrf6" target="blank">
							<img src="<?php echo $img_url ?>/enquete/report18/q3_09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report18/q3__08-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
					  </a>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_10@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__09-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_11@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工リフォーム担当者より" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__10-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工リフォーム担当者より" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_12@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工管理マンションで、マンション相談会を開催しているのをご存知ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__11-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工管理マンションで、マンション相談会を開催しているのをご存知ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/q3_13@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="どのような相談会なら行ってみたいですか？" />
						<img src="<?php echo $img_url ?>/enquete/report18/q3__12-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="どのような相談会なら行ってみたいですか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/outro_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="貴重なご意見ありがとうございました！">
						<img src="<?php echo $img_url ?>/enquete/report18/outro__01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="貴重なご意見ありがとうございました！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/outro_02@2x.png" loading="lazy" class="u-only__pc u-img__max">
						<img src="<?php echo $img_url ?>/enquete/report18/outro__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/outro_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
						<img src="<?php echo $img_url ?>/enquete/report18/outro__03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report18/outro_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="第19回アンケートは2021年7月1日（木）〜実施！みなさまのご回答をお待ちしております！" >
						<img src="<?php echo $img_url ?>/enquete/report18/outro__04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="第19回アンケートは2021年7月1日（木）〜実施！みなさまのご回答をお待ちしております！" >
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
