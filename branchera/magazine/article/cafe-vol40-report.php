<?php
//base
include("../../function.php");
$content = get_id_data('25040');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']) . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = ($content['description']);
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['title'];

//bodyClass
$body_class = "page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2022年7月13日（水）～7月20日（水）";
// 回答者数
$respondents = "計2,823名";
// 対象者：
$target = "長谷工IDをお持ちの方で、台風や大雨などの風雨被害に遭われたことのある方、また身近に遭われた人がいらっしゃる方";

$cafeReportNum = "40";


//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main" lang="ja">
	<article class="main__row u-font__break">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_imakura-cafe.php", "いま暮らCaf&eacute;");
		include($inc_path . "/lib/inc/pan.php");
		include($inc_path . "/lib/inc/page/_magazine/cafe-header.php");
		?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1';
			//include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
		<div class="main__wrapper cafe-report__wrapper_new">
			<section class="main__item mb8 mb4_sp">
				<h2 class="u-font-size__30 u-color__dark mb2"><?php echo strip_tags($pageTtl) ?></h2>
				<div class="u-assist_cafe_low u-only__pc u-font__palt">
					回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
					回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

				</div>
				<div class="u-assist_cafe_low u-only__sp u-font__palt u-font-size__14_sp">
					回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
				</div>
				<div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="風雨から自宅や家族を守りたい！対策は？" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="風雨から自宅や家族を守りたい！対策は？" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>近年増えている豪雨や台風による被害。過去には想像もしなかった量の雨が降るなど、今や誰もが災害に直面するリスクを抱えています。<br>「防災の日」を前に、みなさんの風雨被害への意識や備えの実情をご紹介します。寄せられた体験談も必読です！</p>
				</div>
			</section>
			<section class="mb4 mb4_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="災害の備えへの自己評価は？「満点！」はごくわずかで、及第点の「7点以上」は4割弱｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="災害の備えへの自己評価は？「満点！」はごくわずかで、及第点の「7点以上」は4割弱｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item w40">
							<p class="mb2">まずは現時点での「災害への備え」への自己評価をお聞きしたところ、「10点満点」はわずか1％。5点、6点、7点がそろって21％という結果に。<br>「満点とはいえないけど一応備えている…かな」という認識の方が多いようですので、災害への備えをブラッシュアップしてはいかがでしょうか。レポート中盤では、実際に経験した方からのご意見もご紹介いたします。
							</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="何となく用意はしているけど...十分かどうか不安です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:326px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp.png" alt="あなたの備えを自己採点すると、10点満点で何点？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb3" style="max-width:85%;" loading="lazy">
						</div>
						<div class="u-column__item w60">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="あなたの備えを自己採点すると、10点満点で何点？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:330px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp.png" alt="何となく用意はしているけど...十分かどうか不安です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="食料の備蓄や防災用品を準備されている方がほとんど。ハザードマップも要チェック｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="食料の備蓄や防災用品を準備されている方がほとんど。ハザードマップも要チェック｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="お気に入りのお菓子を多めに買っておいたのが役に立った！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:351px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="スマホの電池切れに備えて、連絡先を紙にもメモしておくといいよ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2" style="max-width:330px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p class="mb2">備えを「していない」方はわずか4％。みなさん、何らかの対策はされているようです。<br>最も多かったのが「防災グッズ（懐中電灯など）の準備」と「水や食料品などの備蓄」でした。食料品の備蓄については「1週間は買い物しなくても大丈夫なくらいローリングストックをしています」や「ある程度の乾物、缶詰を日頃から備蓄している」など、防災用食品に限らず、普段食べているものを多めに買っておく「ローリングストック」が注目されているようです。</p>
							<div class="mb3_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="お気に入りのお菓子を多めに買っておいたのが役に立った！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb2">被害に遭われた方からご意見の多かったおすすめアイテムは「運動靴」と「LEDライト」。なかでも運動靴は、水が入ると重くなる長靴よりも水害時には役に立つということで必需品とのこと。万が一、ガラスなどが破損した場合もかけらから足を守れるそうです。<br>また置き場所についても「ライトや声の代わりになる笛などはすぐに使える所に置く。扉や引き出しの中だと探すのに時間がかかる」「寝室に運動靴を置くと安心」など、すぐ持ち出せる所に…とのアドバイスも。</p>
							<p class="mb2">物品以外では「ハザードマップをチェック」が18％とやや高め。「ハザードマップを玄関に貼ってある」「散歩の際に自宅周りを歩き回って避難場所などをチェックしている」など、普段から意識しておくことが重要です。</p>
						</div>
						<div class="mb6 u-only__sp">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="スマホの電池切れに備えて、連絡先を紙にもメモしておくといいよ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb6 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="「そのとき」、情報はどこから？ネットを抑えてテレビが1位。ラジオも注目されています｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="「そのとき」、情報はどこから？ネットを抑えてテレビが1位。ラジオも注目されています｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mb4">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="手回しで充電できて携帯も充電できるラジオが便利｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mt2" style="max-width:318px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">いざ災害が起きたときには、みなさんはどこから情報を得ているのでしょうか。ネットとSNSを合わせたものが37％でしたが、テレビがそれを上回る42％と、ネット社会でもやはりテレビへの信頼は根強いようです。<br>とはいえ「マンション横の川が氾濫したことがあり、大雨の日はネットで河川水位の監視カメラ映像も見る」「ネットで近隣の川の水位・危険度をリアルタイムで確認する」というご意見も。ネットとテレビ、両方を上手に利用したいですね。<br>また、停電時にも使えて、通信状況にも左右されにくいラジオが13％と活用されているようです。
							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="手回しで充電できて携帯も充電できるラジオが便利｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="マンション理事会の防災への取り組みは「ほとんど聞かない」「分からない」が多数派｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="マンション理事会の防災への取り組みは「ほとんど聞かない」「分からない」が多数派｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb4 mb2_sp">ご自身の備えの次に気になるのが地域の備えですよね。ですが、マンション理事会の防災への取り組みは「ほとんど聞かない」が30％、「分からない」が33％と、いまひとつな結果に。<br>一方、「マンションの理事会で防災担当係を1年間やりました。防災管理講習や消防署の方々のお話などを聞けてとてもよい経験に」という声もあり、気苦労の多い担当になるのも悪いことばかりではないようです。
							<p class="mb4_sp u-only__sp">いかがでしたでしょうか？<br>ブランシエラクラブには、ALSOKが提案する風水害への備えを紹介した記事を、すてきテラスにはわかりやすい「防災チェックリスト」を掲載していますので、ぜひご活用ください！
						  </p>
							<div class="mb4_sp u-only__sp">
								<div class="mb4">
									<a href="<?php echo $base_url ?>/magazine/article/alsok-vol86.php?utm_source=brc_cafe_vol40&utm_medium=web&utm_campaign=alsok_vol86" data-ga-click="cafe40_1">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="マンションならではの対策はこちら「マンションの風水害対策」" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
									</a>
								</div>
								<div class="mb6">
									<a href="https://e-suteki.haseko.jp/accident_prevention/disaster-rainstorm.html?utm_source=brc_cafe_vol40&utm_medium=web&utm_campaign=disaster_rainstorm" data-ga-click="cafe40_2" target="_blank">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02-sp@2x.png" alt="日頃そしていざというときには「すてきテラス災害に備える風水害編」" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
									</a>
								</div>	
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="ご近所さんとの協力や理事会での備えもあると安心ですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb4 u-only__pc">いかがでしたでしょうか？<br>ブランシエラクラブには、ALSOKが提案する風水害への備えを紹介した記事を、すてきテラスにはわかりやすい「防災チェックリスト」を掲載していますので、ぜひご活用ください！
							</p>
						</div>
					</div>
					<div class="u-column__item">
						<div>
							<a href="<?php echo $base_url ?>/magazine/article/alsok-vol86.php?utm_source=brc_cafe_vol40&utm_medium=web&utm_campaign=alsok_vol86" data-ga-click="cafe40_1">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="マンションならではの対策はこちら「マンションの風水害対策」" class="u-img__max u-only__pc center mt3 mb5" style="max-width:331px;" loading="lazy">
							</a>
						</div>
						<div>	
							<a href="https://e-suteki.haseko.jp/accident_prevention/disaster-rainstorm.html?utm_source=brc_cafe_vol40&utm_medium=web&utm_campaign=disaster_rainstorm" data-ga-click="cafe40_2" target="_blank">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02@2x.png" alt="日頃そしていざというときには「すてきテラス災害に備える風水害編」" class="u-img__max u-only__pc center mb5" style="max-width:331px;" loading="lazy">
							</a>
						</div>	
						<div class="u-only__pc mt2">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="ご近所さんとの協力や理事会での備えもあると安心ですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:356px;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
				</figure>
			</section>
		</div>
		<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2";
		include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php"); ?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
