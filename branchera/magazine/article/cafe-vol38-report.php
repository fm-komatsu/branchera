<?php
//base
include("../../function.php");
$content = get_id_data('25038');
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
$period = "2022年6月15日（水）～6月22日（水）";
// 回答者数
$respondents = "計3,784名";
// 対象者：
$target = "長谷工IDをお持ちで、コーヒー好きの方、喫茶に興味のある方";

$cafeReportNum = "38";


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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="ボーっと使っちゃいけません！SNSの利用は？" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="ボーっと使っちゃいけません！SNSの利用は？" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>ほっこりと心を落ち着かせたいときも、頭をシャキッとさせたいときも恋しくなるのがコーヒー。何て魅惑的な存在なのでしょう&hearts;淹れたてのコーヒーから立ち上る香り、深い味わいは暮らしに極上のリラックスタイムをもたらしてくれます。さあ、美味しいコーヒーを淹れて、おうちカフェを楽しみましょう。</p>
				</div>
			</section>
			<section class="mb4 mb4_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="1日2〜3杯飲んでいる人が4割強。8割の人が1日1杯以上飲んでいる<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="1日2〜3杯飲んでいる人が4割強。8割の人が1日1杯以上飲んでいる<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item w40">
							<p class="mb2">コーヒー好きの会員のみなさんは、どのぐらいコーヒーを飲んでいるのでしょう？頻度を尋ねたところ、「1日に2〜3杯」が44％で最多でした。「1日1杯」の26％、「1日に4杯以上」の8%と合わせると、78%の人が1日に1杯以上コーヒーを飲んでいることになります。一方、「1週間に3杯以下」、「1週間に4〜5杯」の人は合わせて20%で、コーヒーブレイクがしっかりと生活に溶け込んだ習慣になっているようです。
							</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="淹れているときに立ち上る香りが一番好きですー｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:310px;" loading="lazy">
						</div>
						<div class="u-column__item w60">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="あなたはどれぐらいの頻度でコーヒーを飲みますか？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:340px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="あなたはどれぐらいの頻度でコーヒーを飲みますか？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4_sp" style="max-width:85%;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp.png" alt="淹れているときに立ち上る香りが一番好きですー｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="豆の種類は苦味が少なく酸味が爽やかな「モカ」がダントツ人気！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="豆の種類は苦味が少なく酸味が爽やかな「モカ」がダントツ人気！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="同じ品種の豆でも産地や焙煎の浅い・深いによって風味が変わります。いろいろ試して自分好みの味を見つけてみてはいかがでしょう｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2" style="max-width:347px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p>苦味や酸味、甘み、コクなどのバランスで成り立つコーヒーの味。豆の産地や焙煎度合いによって味わいが変わるのも魅力です。だからこそ、コーヒー通は豆にこだわる人が多いのでしょう。会員のみなさんに好きな豆を尋ねたところ、圧倒的な支持を集めたのがモカでした。好きな理由は「苦味が少ない」「まろやか」「香りが好き」など。ちなみにモカはエチオピアなどで収穫されたコーヒーの通称で、フルーティーで爽やかな酸味が特徴です。次いで多かったのがキリマンジャロ。こちらはタンザニア産のコーヒーで、「酸味とコクのバランスがいい」「野性味を感じる」といった声が上がりました。ブルーマウンテン、ブラジルも人気。ハワイのコナやマンデリンをこよなく愛する人もいました。</p>
						</div>
					</div>
				</div>
				<div class="mb6 u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="同じ品種の豆でも産地や焙煎の浅い・深いによって風味が変わります。いろいろ試して自分好みの味を見つけてみてはいかがでしょう｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
				</div>
			</section>
			<section class="mb6 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="購入は「粉」がトップ、次いで「インスタント」。「豆」のまま買う人は意外に少数｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="購入は「粉」がトップ、次いで「インスタント」。「豆」のまま買う人は意外に少数｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="コーヒー豆は鮮度も大事。１ヵ月以内に飲み切れる量を買いましょう。「高温」、「湿気」、「空気」、「日光」を避けた保存が豆の劣化を防ぐコツです｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2" style="max-width:356px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">あなたは自分でコーヒー豆を挽く派？挽いてある粉を購入する派？それともカップオンタイプの簡易ドリップ型を使う？会員のみなさんに購入するコーヒーの状態を聞いてみたところ、トップは粉で37％。次いでインスタントが27％。豆のままの状態で買う人は16％と意外に少数で、簡易ドリップ型（14％）と拮抗しています。挽くというひと手間、忙しいときはけっこう面倒ですものね。簡易ドリップ型コーヒーはやや割高なものの、手間をかけずに本格的なコーヒーを淹れられる利点があります。

							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="コーヒー豆は鮮度も大事。１ヵ月以内に飲み切れる量を買いましょう。「高温」、「湿気」、「空気」、「日光」を避けた保存が豆の劣化を防ぐコツです｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="お気に入りの器具、カップ、過ごし方は？コーヒーの魅力はリラックス効果にあり｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="お気に入りの器具、カップ、過ごし方は？コーヒーの魅力はリラックス効果にあり｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mt5">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="チョコを食べながら飲むと最高にハッピー♪｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:329px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="香りで得られる満足。日々のちょっとした贅沢です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2" style="max-width:316px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb2 mb3_sp">ご自宅でどのようにカフェタイムを楽しんでいるのか、教えてもらいました。「手挽きミルで豆を挽くのが楽しい」、「お湯は鉄瓶で沸かす」、「アルコールランプとサイフォンで淹れる」といった返答にコーヒー通のこだわりが感じられます。美味しく飲むにはカップも大事。「真空のステンレスカップを愛用。好みの温度がずっと保てるから」、「旅先で買った思い出のマグカップで飲んでいる」というご意見も。また過ごし方も「バルコニーで自然を感じながら飲むのが好き」、「音楽を聴きながらコーヒーをすする時間に小さな幸せを感じる」など。こだわりの器具やマイカップ、そしてお気に入りのシーンがあれば、カフェタイムが一層豊かになりそうです。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="チョコを食べながら飲むと最高にハッピー♪｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb3_sp">コーヒーとはどんな存在ですか？そんな問いかけに十人十色の言葉が返ってきましたが、「精神安定剤」、「やすらぎ」、「癒やし」、「気分転換のアイテム」など、リラックス効果を指すものが大半でした。「ストレスをやわらげて健康を維持してくれる、毎日欠かせない飲み物」、「ほっと一息、極上の休息が味わえる一杯」、「豊かな人生の必需品」といった熱い想いのこもった表現もちらほら。みなさんのコメントに深いコーヒー愛を感じました。
							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="香りで得られる満足。日々のちょっとした贅沢です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl@2x.png" alt="そんなコーヒー愛あふれるみなさんに古の香り漂う『いま暮ら珈琲』をご用意！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl-sp@2x.png" alt="そんなコーヒー愛あふれるみなさんに古の香り漂う『いま暮ら珈琲』をご用意！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="ドリップで美味しく淹れるコツは、最初に少量のお湯を注いで粉を20秒ほど蒸らすこと。忘れないでくださいね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:366px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb6 mb3_sp">「いま暮らCafé」と日本最古のコーヒー店「放香堂加琲」がコラボした『いま暮ら珈琲』。これまでスマイル交換でしか楽しめませんでしたが、期間限定で販売中！ぜひこの機会にお試しください！
								詳しくは下記サイト「and.Racine（アンド ラシーネ）」で。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="ドリップで美味しく淹れるコツは、最初に少量のお湯を注いで粉を20秒ほど蒸らすこと。忘れないでくださいね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
							<div class="mb6 mb4_sp">
								<a href="https://www.and-racine.com/c-item-detail?ic=000000000106&utm_source=brc_cafe_vol38&utm_medium=web&utm_campaign=racine_imakura_coffee" data-ga-click="cafe38_1" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01@2x.png" alt="専用サイトから購入しよう！すてきテラスおすすめサイト「and.Racine」期間限定販売のご案内" class="u-img__max u-only__pc center" style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01-sp@2x.png" alt="専用サイトから購入しよう！すてきテラスおすすめサイト「and.Racine」期間限定販売のご案内" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
								</a>
							</div>
							<div class="mb2 mb4_sp">
								<a href="<?php echo $base_url ?>/smile/article/exchange-original_coffee.php" data-ga-click="cafe38_2" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02@2x.png" alt="貯めた「スマイル」と交換しよう！住まいレージ「交換商品」ページ" class="u-img__max u-only__pc center" style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02-sp@2x.png" alt="貯めた「スマイル」と交換しよう！住まいレージ「交換商品」ページ" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
								</a>
							</div>
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
