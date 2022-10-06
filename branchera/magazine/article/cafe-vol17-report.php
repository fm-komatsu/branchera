<?php
//base
include ("../../function.php");
$content = get_id_data('25017');
$pageTtl = 'あなたの今を聞かせて！<br>〜ハザードマップ、見たことありますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '8月ももうすぐ終わり。9月1日の「防災の日」がやってきます。防災の日の創設 は、関東大震災が発生した日ということだけでなく、私たち一人ひとりが自然災 害に対して心構えをしようという狙いがあったようです。いつどこで発生するか わからない自然災害。ふだんからの準備が大切です。自然災害のリスクを可視化 した地図、ハザードマップのチェックもお忘れなく。今回は過去に自然災害に遭われた経験があるブランシエラ会員のみなさに、防災 に対する意識やハザードマップの活用状況を聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年7月15日（木）～7月21日（水）";
// 回答者数
$respondents ="計2,340名";
// 対象者：
$target = "長谷工IDをお持ちの方で、これまで何らか、自然災害の被害に遭われたことのある方";

$cafeReportNum = "17";


//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_imakura-cafe.php" ,"いま暮らCaf&eacute;");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_magazine/cafe-header.php");
    ?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">ハザードマップ、見たことありますか？</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！ハザードマップ、見たことありますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="あなたの今を聞かせて！ハザードマップ、見たことありますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>8月ももうすぐ終わり。9月1日の「防災の日」がやってきます。防災の日の創設 は、関東大震災が発生した日ということだけでなく、私たち一人ひとりが自然災 害に対して心構えをしようという狙いがあったようです。いつどこで発生するかわからない自然災害。ふだんからの準備が大切です。自然災害のリスクを可視化した地図、ハザードマップのチェックもお忘れなく。<br>今回は過去に自然災害に遭われた経験があるブランシエラ会員のみなさんに、防災に対する意識やハザードマップの活用状況を聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="地震大国ニッポン！過去に体験した災害のトップは「地震」。次いで「台風」、「大雨・水害」が多い。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="地震大国ニッポン！過去に体験した災害のトップは「地震」。次いで「台風」、「大雨・水害」が多い。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">「天災は忘れた頃にやってくる」と言われますが、近年では忘れる暇もないくらい、毎年のように大規模な災害が起こるようになりました。自然災害と一口で言っても、種類はいろいろ。お住まいの地域や建物によっても、被害に遭いやすい災害は異なります。会員のみなさんに「過去にどんな自然災害を体験されたのか」を聞いてみたところ、やはり地震大国ニッポンですね。最も多かったのが「地震」（48%）でした。地震はひとたび発生すれば、広域に被害をもたらすため、体験者も多くなるようです。次いで「台風」（29%）、「大雨・水害」（20%）と続きました。日本は台風の通り道にあるため、暴風雨に見舞われがち。また国土の約7割が山地・丘陵地なので、急勾配で流れの速い河川が多く、氾濫や土砂崩れが起きやすいのも心配ですね。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="円グラフ｜私も万一の備え、考えなくちゃ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
							<a href="https://e-suteki.haseko.jp/suteki/disaster-earthquake.html?utm_source=brc_cafe_vol17&utm_medium=web&utm_campaign=disaster_earthquake" target="blank" data-ga-click="cafe17_1">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn01@2x.png" alt="地震への対策は すてきテラス「災害が起きたら［地震編］」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:322px" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn01-sp@2x.png" alt="地震への対策は すてきテラス「災害が起きたら［地震編］」｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
							<a href="https://e-suteki.haseko.jp/suteki/disaster-rainstorm.html?utm_source=brc_cafe_vol17&utm_medium=web&utm_campaign=disaster_rainstorm" target="blank" data-ga-click="cafe17_2">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn02@2x.png" alt="風水害への対策は すてきテラス「災害が起きたら［風水害編］」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:322px" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__btn02-sp@2x.png" alt="風水害への対策は すてきテラス「災害が起きたら［風水害編］」｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
						</div>
						<div class="u-column__item u-only__pc">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私も万一の備え、考えなくちゃ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="災害を体験すると、一気に高まる防災意識。備えの大切さを痛感し、多くの人が防災用品を準備。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="災害を体験すると、一気に高まる防災意識。備えの大切さを痛感し、多くの人が防災用品を準備。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="被害を少なくするためにも、災害に備えましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:331px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="子どもと一緒に備えています image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:348px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">災害を実際に体験すると、「自分や家族の命は自分で守るしかない」という気持ちになります。「避難所を確認し、家族と自宅以外の待ち合わせ場所を決めた」、「電池やソーラーバッテリーを用意した」、「食料や飲料水を備蓄した」といった声が聞かれました。特に東北地方沿岸部を中心に巨大津波による甚大な被害をもたらした2011年の東日本大震災では、関東一円でも大きな揺れを体験した人が多く、防災に対する意識が一気に高まったようです。「ベッドの近くに防災リュックや運動靴を置くようになった」、「備蓄食糧や非常持ち出し袋など防災グッズを用意した」、「家具が倒壊しないように固定した」、「割れ物を飾るのをやめた」、「停電しても使える手回し充電式のラジオや乾電池式の扇風機を買い足した」など、さまざまな対策を取る人が増えました。新型コロナウイルス感染拡大以降は、防災グッズに除菌・消毒アイテムを追加した人も多いのではないでしょうか。まだ災害経験のないみなさんも、ぜひ日頃から防災意識を持ち、万が一に備えることをおすすめします。</p>
							<a href="<?php echo($base_url)?>/magazine/article/alsok-vol46.php" data-ga-click="cafe17_3">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__btn@2x.png" alt="東日本大震災について 3.11の教訓を未来に生かすために」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:322px" loading="lazy">
								</figure>
							</a>				
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p>災害を実際に体験すると、「自分や家族の命は自分で守るしかない」という気持ちになります。「避難所を確認し、家族と自宅以外の待ち合わせ場所を決めた」、「電池やソーラーバッテリーを用意した」、「食料や飲料水を備蓄した」といった声が聞かれました。特に東北地方沿岸部を中心に巨大津波による甚大な被害をもたらした2011年の東日本大震災では、関東一円でも大きな揺れを体験した人が多く、防災に対する意識が一気に高まったようです。</p>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="被害を少なくするためにも、災害に備えましょう  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
					<p>「ベッドの近くに防災リュックや運動靴を置くようになった」、「備蓄食糧や非常持ち出し袋など防災グッズを用意した」、「家具が倒壊しないように固定した」、「割れ物を飾るのをやめた」、「停電しても使える手回し充電式のラジオや乾電池式の扇風機を買い足した」など、さまざまな対策を取る人が増えました。新型コロナウイルス感染拡大以降は、防災グッズに除菌・消毒アイテムを追加した人も多いのではないでしょうか。まだ災害経験のないみなさんも、ぜひ日頃から防災意識を持ち、万が一に備えることをおすすめします。</p>				
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="子どもと一緒に備えています image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<a href="<?php echo($base_url)?>/magazine/article/alsok-vol46.php" data-ga-click="cafe17_3">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__btn-sp@2x.png" alt="東日本大震災について 3.11の教訓を未来に生かすために｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="お住まいの地域のハザードマップ、持っている人は5割強。4割の人は災害リスクや避難ルートも確認済み！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="お住まいの地域のハザードマップ、持っている人は5割強。4割の人は災害リスクや避難ルートも確認済み！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="スマホに入れておくと便利かも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="家族みんなで避難ルートを確認しました image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:367px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03@2x.png" alt="意外に簡単に検索できます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:329px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5">万が一の事態を落ち着いて乗り越えるには、住んでいる地域の立地や特性をあらかじめ知って、安全性を確認することが大切です。そこで役立つのがハザードマップです。災害における被災想定区域や避難場所、避難経路などを表示した地図ですが、ご自宅に置いていますか？会員のみなさんに聞いたところ、55%と半数強の人がお住まいの地域のハザードマップをお持ちでした。印刷物のマップを保管している人がほとんどですが、スマホにダウンロードしていつでも見られるようにしている人も少なからずいて感心！
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="スマホに入れておくと便利かも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								また、自宅周辺の災害リスクや避難ルートをちゃんと確認している人も39%に上りました。災害リスクだけ確認している人（23%）、避難ルートだけ確認している人（20%）と合わせると、実に82%の人がきちんと防災意識を持っていることがうかがえます。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="家族みんなで避難ルートを確認しました image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  一方で、ハザードマップを持っていない人は45%で、自宅周辺の災害リスクや避難ルートをまったく確認していない人も18%と少なくありません。両方あてはまるなら、ちょっと心配かも！ハザードマップを見れば、たとえば津波や洪水の影響を受ける恐れがあることや、活断層が近くて地震に対する万全の備えが必要であることなど、自分が住む地域のリスクが確かめられます。住んでいる地域のハザードマップは、国土交通省のホームページ「わがまちハザードマップ」で検索・閲覧できます。想定される被害を事前に把握しておけば災害への備えもしやすくなりますから、ぜひチェックしてみてくださいね。
							  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03-sp@2x.png" alt="意外に簡単に検索できます｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="今のお住まいを決めるときに、地域のハザードマップを参考にした人は半数。意外に災害リスクを気にしていない？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="今のお住まいを決めるときに、地域のハザードマップを参考にした人は半数。意外に災害リスクを気にしていない？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="リスクの種類は地域によって大きく違います image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="そう言えば説明を受けたなあ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:316px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 mb4_sp">住まい選びで重視するポイントは人それぞれですが、安全・安心な生活を送りたいのであれば、ハザードマップをチェックして安全性を事前に確認しておきたいもの。災害が起こりやすい地域を避けられますし、すでにマンションを購入済みの人も起こりうる災害に備えることができます。特に「特別警戒区域」に指定されている地域は要注意です。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="リスクの種類は地域によって大きく違います image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								会員のみなさんに、「今のお住まいを決める際に、地域のハザードマップを参考にしましたか？」と尋ねたところ、YESとNOはほぼ半々。真っ二つに分かれる結果となりました。ただし、「かなり参考にした」という意識の高い人が16%も占めたのは予想以上でした。ハザードマップの認知度が高まってきた結果でしょう。ちなみに、現在は法律で宅地建物取引業者に対して、水害ハザードマップを使った物件のリスクの説明をすることが義務付けられています。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="そう言えば説明を受けたなあ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="大地震が発生したときに不安なことは、「建物の倒壊」、「家具の転倒」、「非常食の備蓄不足」。高層階の人はエレベーターの停止も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="大地震が発生したときに不安なことは、「建物の倒壊」、「家具の転倒」、「非常食の備蓄不足」。高層階の人はエレベーターの停止も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="備えあれば憂いなし！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:313px" loading="lazy">
							</figure>
							<figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="高層階ほどしっかりした備えが重要に！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
							</figure>
							<figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03@2x.png" alt="しっかり備えて、安心して暮らしたいですよね〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:221px" loading="lazy">
							</figure>
							</div>	
						<div class="u-column__item">
							<p>自然災害の中でも、特に大きな不安を感じるのが大地震でしょう。政府の地震調査委員会は、3つの震源域で今後30年以内に大型の地震が発生する確率が高いと予想しています。怖いですよね…。もしも大地震が発生したら、今のお住まいで心配なことは何でしょうか？会員のみなさんに聞くと、「建物の倒壊が心配」、「大きな家具が倒れそう」、「非常食の備蓄の量が足りない」と答えた人が多く、ほかにも「高層階なのでエレベーターが使えなくなる」、「自宅避難になったとき、適切な情報収集ができるだろうか」、「海に近いので津波が怖い」など、さまざまな声が上がりました。<br>では、みなさんは大地震に備えて日頃からどんな対策をしているのでしょうか？多かったのは「数日分の非常食や飲料水の備蓄」、「家具の倒れ防止処置」、「非常持ち出し袋の準備」でした。また、「地震保険に加入」を挙げた人も少なからずいました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="備えあれば憂いなし！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="高層階ほどしっかりした備えが重要に！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  地震に対する備えとしては、最低3日分 （1人1日3リットル）の飲料水と非常食を準備しておくことが推奨されています。地震発生後、支援物資が届くまでに時間がかかるためです。家具の固定もお忘れなく。特にマンション上層階に住んでいる場合は地震の揺れが大きく、長時間にわたる可能性がありますから、しっかりと転倒防止対策をしましょう。備えあれば憂いなしですよね。
							  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03-sp@2x.png" alt="しっかり備えて、安心して暮らしたいですよね〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="我が家の地震対策｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="我が家の地震対策｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
			</section>
			<section class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
