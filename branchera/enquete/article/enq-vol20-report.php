<?php
//base
include ("../../function.php");
$content = get_id_data('11070');
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
				<h2 class="u-ttl__l">お住まいに関するアンケート</h2>
				<div class="u-assist_enq_low07 u-only__pc">
					回答期間　　　：　2021年10月21日（木）～2021年10月31日（日）<br>
					回答者数　　　：　計3,937名<br>

				</div>
				<div class="u-assist_enq_low07 u-only__sp u-font__palt">
					回答期間：2021年10月21日（木）～2021年10月31日（日）<br>
					回答者数：計3,937名<br>

				</div>
				<div class="mb2">
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/main-v@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="<?php echo $pageTtl ?>" />
						<img src="<?php echo $img_url ?>/enquete/report20/main-v-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
				</div>
				<p class="report20__intro">マンションで暮らしていると、ハウスクリーニングやリフォームなどさまざまな要望が生じてくるものです。それらに応えられるサポート体制やサービスがあるかどうかは、住まい選びのポイントのひとつといえます。今回のアンケートでは、住まいと暮らしに関するご要望を幅広く調査。「リフォームや模様替えが気になっている場所」「関心があるサービス」「給湯器について」「ネットショッピングについて」という質問から、みなさまがどのようなことを感じているのかうかがいました。ぜひご覧ください♪</p>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q1@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お部屋の中で模様替えやリフォームなど、特に気になる場所は？" />
						<img src="<?php echo $img_url ?>/enquete/report20/q1-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お部屋の中で模様替えやリフォームなど、特に気になる場所は？" />
					</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q2@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいや暮らしのサービスで関心のあるものは？" />
						<img src="<?php echo $img_url ?>/enquete/report20/q2-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="住まいや暮らしのサービスで関心のあるものは？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q3@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="プロのハウスクリーニングを依頼したことがありますか？" />
						<img src="<?php echo $img_url ?>/enquete/report20/q3-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="プロのハウスクリーニングを依頼したことがありますか？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q4@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="プロに頼んでよかった点は？" />
						<img src="<?php echo $img_url ?>/enquete/report20/q4-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="プロに頼んでよかった点は？" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q5_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工のハウスクリーニング" />
						<img src="<?php echo $img_url ?>/enquete/report20/q5_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工のハウスクリーニング" />
					</div>
					<a href="https://e-suteki.haseko.jp/service/house-cleaning.html" data-ga-click="enq20_1" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q5_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report20/q5_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>	
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q5_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="複数箇所をまとめてきれいに！おとくなパックも！" />
						<img src="<?php echo $img_url ?>/enquete/report20/q5_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="複数箇所をまとめてきれいに！おとくなパックも！" />
					</div>
					<a href="https://e-suteki.haseko.jp/service/deals-package.html" data-ga-click="enq20_2" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q5_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report20/q5_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>	
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q5_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ハウスクリーニングで住まいレージを利用できます！" />
						<img src="<?php echo $img_url ?>/enquete/report20/q5_05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ハウスクリーニングで住まいレージを利用できます！" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q6_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="給湯器を交換したことがありますか？そのきっかけは？" />
						<img src="<?php echo $img_url ?>/enquete/report20/q6_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="給湯器を交換したことがありますか？そのきっかけは？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q6_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="給湯器交換" />
						<img src="<?php echo $img_url ?>/enquete/report20/q6_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="給湯器交換" />
					</div>
					<a href="https://e-suteki.haseko.jp/service/water-heater-replace.html#totsuzen" data-ga-click="enq20_3" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q6_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report20/q6_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q6_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q7_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいのお困りごとや設備の故障などがあった際、どのような対応をしていますか？"/>
						<img src="<?php echo $img_url ?>/enquete/report20/q7_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="住まいのお困りごとや設備の故障などがあった際、どのような対応をしていますか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q7_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいの不具合、素早く解決します！長谷工プレミアムアフターサービス"/>
						<img src="<?php echo $img_url ?>/enquete/report20/q7_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="住まいの不具合、素早く解決します！長谷工プレミアムアフターサービス" />
					</div>
					<a href="<?php echo($base_url)?>/magazine/article/pas.php" data-ga-click="enq20_4">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q7_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="住まいの不具合、素早く解決します！長谷工プレミアムアフターサービス"/>
							<img src="<?php echo $img_url ?>/enquete/report20/q7_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="住まいの不具合、素早く解決します！長谷工プレミアムアフターサービス" />
						</div>
					</a>
					<a href="https://www.haseko.co.jp/hc/company/library/pas/list.html" data-ga-click="enq20_5" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q7_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工プレミアムアフターサービスは、本サービスを売主が採用した物件にご提供いたします。" />
							<img src="<?php echo $img_url ?>/enquete/report20/q7_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="長谷工プレミアムアフターサービスは、本サービスを売主が採用した物件にご提供いたします。" />
						</div>
					</a>	
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q8_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ネットで注文した際、重視したことは何ですか？" />
						<img src="<?php echo $img_url ?>/enquete/report20/q8_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ネットで注文した際、重視したことは何ですか？" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q8_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ネットでこんなものが買われています" />
						<img src="<?php echo $img_url ?>/enquete/report20/q8_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="ネットでこんなものが買われています" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q9_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="暮らしを快適にするアイテムもネットでゲット！暮らしの快適アップ術" />
						<img src="<?php echo $img_url ?>/enquete/report20/q9_01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="暮らしを快適にするアイテムもネットでゲット！暮らしの快適アップ術" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q9_02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="場所別におすすめアイテムをご紹介！" />
						<img src="<?php echo $img_url ?>/enquete/report20/q9_02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="場所別におすすめアイテムをご紹介！" />
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q9_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="キャスター付き下駄箱下収納" />
						<img src="<?php echo $img_url ?>/enquete/report20/q9_03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="キャスター付き下駄箱下収納" />
					</div>
					<a href="https://e-suteki.haseko.jp/service/kurashi-up-index.html" data-ga-click="enq20_6" target="_blank">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q9_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report20/q9_04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="詳しくはこちら" />
						</div>
					</a>
					<a href="<?php echo($base_url)?>/magazine/index_sumai-sos.php" data-ga-click="enq20_7">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report20/q9_05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
							<img src="<?php echo $img_url ?>/enquete/report20/q9_05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="" />
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/q9_06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="" />
						<img src="<?php echo $img_url ?>/enquete/report20/q9_06-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div>
						<!-- <img src="<?php echo $img_url ?>/enquete/report20/outro_01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="貴重なご意見ありがとうございました！">
						<img src="<?php echo $img_url ?>/enquete/report20/outro_01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="貴重なご意見ありがとうございました！"> -->
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/outro_02@2x.png" loading="lazy" class="u-only__pc u-img__max">
						<img src="<?php echo $img_url ?>/enquete/report20/outro_02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/outro_03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
						<img src="<?php echo $img_url ?>/enquete/report20/outro_03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report20/outro_04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="第21回アンケートは2022年1月20日（木）〜実施！みなさまのご回答をお待ちしております！" >
						<img src="<?php echo $img_url ?>/enquete/report20/outro_04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max mb3" alt="第21回アンケートは2022年1月20日（木）〜実施！みなさまのご回答をお待ちしております！" >
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
