<?php
//base
include("../../function.php");
$content = get_id_data('25041');
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
$period = "2022年7月27日（水）～8月3日（水）";
// 回答者数
$respondents = "計3,477名";
// 対象者：
$target = "長谷工IDをお持ちの方で、長谷工の事業に興味関心のある方";

$cafeReportNum = "41-1";


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
			//include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php");
			?>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="○○なら長谷工！どんなイメージ？ ～前編～" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v_sp@2x.jpg" alt="○○なら長谷工！どんなイメージ？ ～前編～" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl_sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>みなさんは「長谷工」についてどんなイメージをお持ちですか？「長谷工」と聞いた途端、あの耳に残る“タラタタッタタ♪”のCMソングを思い出す方が多いかもしれませんね。会員のみなさんの目に、「長谷工」はどのように映っているのでしょうか。気になるあれこれを、楽しいクイズも交えて聞いてみました。その結果を2回に分けてお届けします。では、前編をどうぞ。</p>
				</div>
			</section>
			<section class="mb4 mb4_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="回答者のみなさんのお住まいは長谷工の施工が約3割、管理が約4割｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl_sp@2x.png" alt="回答者のみなさんのお住まいは長谷工の施工が約3割、管理が約4割｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item w40">
							<p class="mb2">今回、アンケートに回答いただいた会員のみなさんは、分譲マンションにお住まいの方が77%と圧倒的多数。続いて持ち家の戸建て住宅にお住まいの方が13%、賃貸マンション・アパートという回答が8%でした。現在のお住まいと長谷工グループのかかわりについて聞いてみたところ、長谷工が管理させていただいている建物にお住まいの方が39％。長谷工が施工した建物が29％、長谷工の販売または賃貸建物は14％とみなさんの暮らしに長谷工がかかわらせていただいています。ありがとうございます。
							</p>
						</div>
						<div class="u-column__item w60">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="多くの方のそばに長谷工…うれしくなっちゃいます｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:326px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01_sp@2x.png" alt="多くの方のそばに長谷工…うれしくなっちゃいます｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="「長谷工は〇〇の会社」にあてはめる言葉は何？半数以上が「マンション建設」と回答｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl_sp@2x.png" alt="「長谷工は〇〇の会社」にあてはめる言葉は何？半数以上が「マンション建設」と回答｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="「長谷工は〇〇の会社」。まず初めに思い浮かんだ〇〇に入る言葉は？ 回答円グラフ|<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:344px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p class="mb2">会員のみなさんに思い浮かべる言葉を聞いてみると、半数を超える人が「マンション建設」（54%）でした。次いで「マンション管理」（28%）、「マンション販売」（11%）と続きます。いずれにしても、 “マンションのことなら長谷工♪”がしっかりと浸透している結果となりました。</p>
							<div class="u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="高過ぎず、質のよいマンションをつくっている印象です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2" style="max-width:308px;" loading="lazy">

							</div>
							<div class="mb5_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01_sp@2x.png" alt="「長谷工は〇〇の会社」。まず初めに思い浮かんだ〇〇に入る言葉は？ 回答円グラフ|<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
							</div>
						</div>
						<div class="mb4_sp u-only__sp">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02_sp@2x.png" alt="高過ぎず、質のよいマンションをつくっている印象です｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb6 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="「長谷工」に抱く印象は「安心」「信頼」「親しみ」老舗で堅実な企業イメージが多いみたい｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl_sp@2x.png" alt="「長谷工」に抱く印象は「安心」「信頼」「親しみ」老舗で堅実な企業イメージが多いみたい｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mb4">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="“マンションのことなら長谷工♪”というCMソングは耳に残ります｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mt2" style="max-width:393px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">ここで少しだけ長谷工のことをお話しさせていただきます。長谷工は2022年2月に創業85年を迎えました。68万戸に及ぶ新築マンションの施工実績は業界NO.1！管理においても約41万戸を手掛け、修繕・改修の工事実績は約73万戸に上ります。ご存じでしたか？<br>では、みなさんは「長谷工」という名前にどんな印象を持っているのでしょうか？うれしいことに、「しっかりしている」、「安心」、「誠実」、「信頼感がある」、「品質が高い」という回答をたくさんいただきました。そして、やはりCM力はビッグ！「タラタタッタタ♪が耳から離れない」、「CMで親しみを感じる」といった答えも目立ちました。総じて老舗で堅実な企業イメージを抱くご意見が多いようです。
							</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img_sp@2x.png" alt="“マンションのことなら長谷工♪”というCMソングは耳に残ります｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:95%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="長谷工が手掛けている “意外な事業”って何？クイズの正解は次回で発表。お楽しみに！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl_sp@2x.png" alt="長谷工が手掛けている “意外な事業”って何？クイズの正解は次回で発表。お楽しみに！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb0 mb2_sp">長谷工グループではさまざまな事業を手掛けていて、なかには「えっ、そんなこともしているの？」とみなさんが驚くような意表を突く事業もあります。そこでクイズです！長谷工が実際に運営している“意外な事業”は、次の5つのうちどれだと思いますか？<br>①スポーツジム　<br class="u-only__sp">②ミュージアム　<br class="u-only__sp">③銀行<br>④保育園　<br class="u-only__sp">⑤撮影スタジオ</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="マンションだけじゃないんだ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:85%;" loading="lazy">
							</div>
							<p>
								会員のみなさんの回答を見ると「スポーツジム」と「ミュージアム」が31%で並んでトップ。次いで「保育園」が25%でした。「銀行」を挙げた人は7%、「撮影スタジオ」は6%と少数でしたが、さてどうでしょう？<span class="u-font__bold">クイズの正解は次回の“いま暮らCafé”で発表</span>します。お楽しみに♪
							</p>
							<div class="mt3_sp mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02_sp@2x.png" alt="気になる正解発表は次回！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4" style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
					<div class="u-column__item">
						<div class="u-only__pc mt2">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="マンションだけじゃないんだ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:329px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="気になる正解発表は次回！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:80%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp ">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl@2x.png" alt="「長谷工」ってどんなイメージ？みなさんから寄せられたうれしい声をピックアップしてみました！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl_sp@2x.png" alt="「長谷工」ってどんなイメージ？みなさんから寄せられたうれしい声をピックアップしてみました！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div>
					<div>
						<div>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="「きちんとマンション管理をしてくれる」「伝統のある会社だけど、常に新しさも求めている」「工務店由来のしっかりした施工」「リフォームも頼みやすい」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4" style="max-width:740px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img_sp@2x.png" alt="「きちんとマンション管理をしてくれる」「伝統のある会社だけど、常に新しさも求めている」「工務店由来のしっかりした施工」「リフォームも頼みやすい」｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb4" loading="lazy">
						</div>
					</div>
				</div>
				<figure class="mb3 mt5_sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>//sec05__footer@2x.png" alt="いかがでしたか？次週の「後編」もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>//sec05__footer_sp@2x.png" alt="いかがでしたか？次週の「後編」もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:65%;" loading="lazy">
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
