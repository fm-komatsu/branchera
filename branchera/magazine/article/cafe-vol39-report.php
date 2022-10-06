<?php
//base
include("../../function.php");
$content = get_id_data('25039');
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
$period = "2022年6月29日（水）～7月6日（水）";
// 回答者数
$respondents = "計2,029名";
// 対象者：
$target = "長谷工IDをお持ちで、ご自宅のリフォームの経験がある方";

$cafeReportNum = "39";


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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="リフォームをやってみて分かったこと" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="リフォームをやってみて分かったこと" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>おうち時間が長くなってきたこともあり、注目が集まっているリフォームですが、お金も時間もかかることから迷っている方も多いのでは。そこで今回は実際にリフォームを経験された方にアンケートを実施し、実体験に基づいた貴重なアドバイスや感想などを集めてみました。</p>
				</div>
			</section>
			<section class="mb4 mb4_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="リフォームした箇所は？トイレ、浴室、キッチンなどの水回りが人気｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="リフォームした箇所は？トイレ、浴室、キッチンなどの水回りが人気｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item w40">
							<p class="mb2">まずはリフォームした場所は？トップがトイレ（23％）で、次いで浴室（22％）、キッチン（19％）と水回りが続きました。やはり水や機器を毎日使うところなので劣化や傷みが目立つのかもしれませんね。<br>また「予算が許すなら、後から追加するより、一度にやってしまった方が良い場合もある」というご意見もありました。
							</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__graph-sp@2x.png" alt="リフォームされた場所はどこですか？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4_sp" style="max-width:85%;" loading="lazy">
							<p>では実施したリフォームの満足度は？10点満点で聞いたところ、「10点満点」（11％）と「9点」（22％）を合わせて3人に1人の方が「大満足」と回答！これに最多の「8点」（36％）と7点（17％）も合わせると、約8割の方が「おおむね満足」という結果に。思い切ってリフォームしてよかったということですね！<br> 「リフォームの満足度合いはコストと比例する」というお声もありましたが、満足度を左右するのは本当に価格のみでしょうか…？</p>
						</div>
						<div class="u-column__item w60">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__graph@2x.png" alt="リフォームされた場所はどこですか？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:338px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_chara@2x.png" alt="トイレは床も張り替えるときれいになりますね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:311px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__chara-sp.png" alt="トイレは床も張り替えるときれいになりますね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="リフォームで気になるところは、まずは「価格」。でも「仕上がり」や「工期」も重要！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="リフォームで気になるところは、まずは「価格」。でも「仕上がり」や「工期」も重要！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt=工期は予算にも生活にもかかわるので確認を｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2" style="max-width:309px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p>気になったところの1位は「価格」。でも「ただ安ければよい」というわけではなく「気になるのはやはり価格ですが機能重視で考えるのが一番だと思います」や「費用を抑えることばかりを重視してしまったため、統一感や好みの点で十分な満足感が得られなかった」など、ほかの条件も欠かせないようです。結果として「仕上がり」にも影響を与える場合があるので、納得できるリフォームのためには、ある程度お金をかけてもよいかもしれません。</p>
						</div>
					</div>
				</div>
				<div class="mb6 u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt=工期は予算にも生活にもかかわるので確認を｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
				</div>
			</section>
			<section class="mb6 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="「決め手」もやはり「価格」が最多ですが「プラン、提案」や「スタッフの対応」も重要！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="「決め手」もやはり「価格」が最多ですが「プラン、提案」や「スタッフの対応」も重要！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mb4">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="さすがプロ！と思える多くの提案により生活しやすくなりました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mt2" style="max-width:351px;" loading="lazy">
						</div>
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="選択肢ごとにメリット・デメリットを説明してもらいたい｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2" style="max-width:329px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">当然、「決め手」としても「価格」を選んだ方が多かったですが、プロと話すことで「自分では気付かない部分にも提案があり、満足のいくリフォームができた」や「こんなことできないかな？と全て伝えてみる。素人では無理と思えても、プロならアイデアが出てくることがある」など、プランや提案力も重視されているようです。<span class="u-only__pc">意外と少なかったのが「口コミ」。SNS時代とはいえ「口コミも判断材料になりますが、やはり見積りを取って、その説明をよく聞くことが大事です」と、希望を伝え、提案を求めるのが成功のカギといえそうです。</span>
							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="さすがプロ！と思える多くの提案により生活しやすくなりました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
							<p class="u-only__sp mb3_sp">意外と少なかったのが「口コミ」。SNS時代とはいえ「口コミも判断材料になりますが、やはり見積りを取って、その説明をよく聞くことが大事です」と、希望を伝え、提案を求めるのが成功のカギといえそうです。</p>
							<div class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="選択肢ごとにメリット・デメリットを説明してもらいたい｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="これからリフォームされる方へのアドバイスは「見積りは複数」「ショールームに行く」「自分でも勉強」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="これからリフォームされる方へのアドバイスは「見積りは複数」「ショールームに行く」「自分でも勉強」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mt2">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="壁紙は小さな見本では分かりづらいからショールームで見よう｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:330px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="生活の導線や１日の行動を考えて選ぶとよいみたいです｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2" style="max-width:355px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb4 mb3_sp">アドバイスをお聞きしたところ、かなりの数の方が「見積りは複数」と挙げられていました。「少なくとも2社から見積りと施工内容を聞いて疑問を投げかけ、その対応も肝心」と、一度に価格と対応を比較するという方法も。<br>さらに「任せきりにせず、自分で工事内容や製品について調べるとよい」など、事前に勉強しておくことも大切だとか。「実物を見ることは絶対に必要。カタログだけでは分からないことも多いので」や「湯船などは実際に入って大きさを確認する」と、ショールームも必見です。
							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="壁紙は小さな見本では分かりづらいからショールームで見よう｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb3_sp mb4">また「マンションに出入りしていて、事業を請け負っている会社に依頼するのが最もよいと思った。構造を把握しているので、プランが最適」というお声のように現場を知る施工会社なら安心感があります。<br>マンションをつくってきた長谷工ならではのプランもご用意しています。ぜひご確認ください。
							</p>
							<div class="mb6 mb4_sp">
								<a href="https://www.haseko.co.jp/hrf/reform/" data-ga-click="cafe39_1" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="長谷工だからできる安心のご提案「長谷工リフォーム」" class="u-img__max u-only__pc center" style="max-width:331px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="長谷工だからできる安心のご提案「長谷工リフォーム」" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
								</a>
							</div>
							<div class="mb6">
								<p class="mb6 mb3_sp">ここでもうひとつ、長谷工から。リフォームよりお手軽な「リメイク」をご存じですか？特にバスルームは浴槽の塗装をやり直す「リメイク」で雰囲気が変わります。ぜひ選択肢のひとつにしてみてください。
								</p>
								<div class="mb6 mb4_sp">
									<a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol06.php" data-ga-click="cafe39_2">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04_btn02@2x.png" alt="短い工期できれいなお風呂へリメイク「住まいのSOS　ピカピカのお風呂で気持ちよく入浴したい」" class="u-img__max u-only__pc center" style="max-width:331px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02-sp@2x.png" alt="短い工期できれいなお風呂へリメイク「住まいのSOS　ピカピカのお風呂で気持ちよく入浴したい」" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
									</a>
								</div>
								<div class="mb4_sp u-only__sp">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="生活の導線や１日の行動を考えて選ぶとよいみたいです｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
								</div>
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
