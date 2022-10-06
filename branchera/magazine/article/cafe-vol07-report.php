<?php
//base
include ("../../function.php");
$content = get_id_data('25007');
$pageTtl = 'あなたの今を聞かせて！<br>引っ越し新生活';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'いよいよ春本番ですね。去年以上にコロナ禍の影響が感じられる今年の春ですが、転勤や就職などで引っ越しの多いこの時期に、新生活を始められる方も多いと思います。<br>そこで今回は、この一年で新しい生活を始められた方々に「きっかけ」や「その場所に決めた理由」など、気になる色々についてうかがってみました！';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年2月18日（木）～2月24日（水）";
// 回答者数
$respondents ="計1,076名";
// 対象者：
$target = "長谷工IDをお持ちの方で、この1年で引っ越しを伴う新しい生活をスタートさせた（させる）方";


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
        <h2 class="u-font-size__30 u-color__dark mb2">引っ越し新生活</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/main-v@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/ttl__info@2x.png" alt="あなたの今を聞かせて！引っ越し新生活｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！引っ越し新生活｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>いよいよ春本番ですね。去年以上にコロナ禍の影響が感じられる今年の春ですが、転勤や就職などで引っ越しの多いこの時期に、新生活を始められる方も多いと思います。<br>そこで今回は、この一年で新しい生活を始められた方々に「きっかけ」や「その場所に決めた理由」など、気になる色々についてうかがってみました！</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/q1__ttl@2x.png" alt="「新生活スタートのきっかけは」？就職や転職、進学などを抑えて、「ライフスタイルの変化」がトップに。テレワークが増えたことから、住環境を見直した方も多いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/q1__ttl-sp@2x.png" alt="「新生活スタートのきっかけは」？就職や転職、進学などを抑えて、「ライフスタイルの変化」がトップに。テレワークが増えたことから、住環境を見直した方も多いようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">どのような理由で新しい生活をスタートさせたのか？「転職」「就職」「進学」などの定番理由を抑えてトップをとったのは「ライフスタイルの変化」でした。<br>「コロナ禍ということもあり、家の近くに公園などが多く、かつ駅近の物件を探しました」や「在宅勤務も長くなり、老親のいる実家と自宅の2カ所で生活することにした」、「テレワークが増えて間取りを増やして検討していたが、探しづらかった」など、その後の設問への回答から察するに、この一年に限っては、テレワークが増えたことや、コロナ感染予防などが影響したケースが多かったことがうかがえます。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/q1__img01-sp@2x.png" alt="円グラフ｜私はマンションの最上階に住むのが夢なんです〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:234px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/q1__img02@2x.png" alt="私はマンションの最上階に住むのが夢なんです〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:304px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__ttl@2x.png" alt="通勤時間や交通の便よりも住環境重視？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__ttl-sp@2x.png" alt="通勤時間や交通の便よりも住環境重視？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__img01@2x.png" alt="この時間がたのしい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__img02@2x.png" alt="やっぱりこども重視で考えます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__img03@2x.png" alt="予防するのは大事　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:362px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>新生活を始めるにあたって一番重視したこと、気にしたことは、世代によって少し違っているようです。全体的には、通勤時間などよりも住環境重視の傾向が強かったのはやはり、巣ごもり生活の影響でしょうか。<br>世代別に見てみると、「職場への距離」「通勤時間」を選んだ方は20代では少数派。「周辺環境」や「実家の近く」などを挙げた方が大多数を占めました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__img01-sp@2x.png" alt="この時間がたのしい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								子育て世代である30～50代でも、「子育てのしやすさ」「教育環境」などの子育て関連や、「駅近」「利便性」などの周辺環境が最も多く、「通勤時間」などの回答は少な目でした。<br>「テレワークに適した場所」「テレワークに快適なこと」とずばり挙げている方もいて、やはり、テレワークが増えたことも一因のようです。中には「海が好きなので、リモートワークへの切り替えを機に海が見えるマンションを購入しました。毎日海を見ながら仕事ができて幸せです」なんてうらやましい方も！場所に縛られない仕事のしかたへの変化、ずっと憧れていた場所に住まいを移すのもよいかもしれませんね。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__img02-sp@2x.png" alt="やっぱりこども重視で考えます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								60代～70代では「コロナ感染予防」とはっきり挙げている方もチラホラ。「巣ごもり生活から解放されたいので施設内で食事もできてジムやプールがある自立式の高齢者マンションに引っ越しする予定で部屋を押さえた」という方もいて、コロナ予防の観点が重視されている様子がうかがわれます。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec01__img03-sp@2x.png" alt="予防するのは大事 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec02__ttl@2x.png" alt="新生活の舞台は「購入した物件」が最多。「実家」が多いのも今年ならでは？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec02__ttl-sp@2x.png" alt="新生活の舞台は「購入した物件」が最多。「実家」が多いのも今年ならでは？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec02__img01@2x.png" alt="憧れのマイホームで過ごせるのは素敵ですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>では、新生活を送る舞台はどんなところなのでしょう？一番多かったのは「購入した物件」ですが、3位は「実家」。「コロナ渦でリモート勤務になったため、都内から実家がある横浜に戻りました」や「実家の建て替えに伴い同居」など実家に戻られる方も多かったようです。「実家の、当時自分の使っていた部屋の掃除をしていたら、学生時代の笑えるものが色々出て来た」ということもあるそうなので、楽しみもあるようですよ。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec02__img01-sp@2x.png" alt="憧れのマイホームで過ごせるのは素敵ですね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__ttl@2x.png" alt="そんな大事な新生活を迎える場所を選ぶのに参考にしたのは「サイトの情報」が最多。次いで「専門家の意見」「友人や先輩のアドバイス」と続きます。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__ttl-sp@2x.png" alt="そんな大事な新生活を迎える場所を選ぶのに参考にしたのは「サイトの情報」が最多。次いで「専門家の意見」「友人や先輩のアドバイス」と続きます。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__img01@2x.png" alt="いろいろ比較するにはいいかも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__img02@2x.png" alt="イイアイデアね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:348px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__img03@2x.png" alt="友人の意見とかとても信頼できて頼れます！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:347px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb8 mb4_sp">多くの方はまずはネットの情報を検索して不動産会社や工務店、リフォーム会社にたどり着いているようです。でも自分で調べるのはなかなか大変。「はじめてのマンション購入だったので、知識や勉強不足だったことが購入後にわかり残念なこともあった」「リフォームにあたってどこの業者さんに依頼すればよいか情報がなく大変困りました」などの残念な体験をされた方も見られました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__img01-sp@2x.png" alt="いろいろ比較するにはいいかも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							一方、「不動産会社選びが成功のカギです」というアドバイスも。「自分では思いつかなかったリフォーム。設計士さんの提案で、マンションなのに広々生まれ変わった玄関を見て、遊びに来た友人もビックリ」「感染症蔓延の最中ではありましたが、信頼できるリフォーム会社でしかもご担当の方の適切、温かなご対応は選択してよかったとしみじみ感じました」など専門家の意見を活用して成功した例も。信頼できるパートナーを得られるかは大事ですね。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__img02-sp@2x.png" alt="イイアイデアね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
						中には「長谷工の仲介でマンションの売却をしました。長谷工さんの的確で親身なアドバイスのおかげで納得のいく売却ができました」「長谷工の販売担当者の方がとても親身に対応してくださったので、マンション購入を決めた」という、大変うれしいお声もいただきました！
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__img03-sp@2x.png" alt="友人の意見とかとても信頼できて頼れます！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<p class="mb4">
							長谷工グループでは、マンション購入から住み替え、一戸建て建築など、グループ企業一丸となって様々なご要望にお応えしています。「住み替えたいな」と思われた際はぜひご用命ください！
							</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko-sumai.com/" target="_blank" data-ga-click="cafe7_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn01@2x.png" alt="新築分譲マンションに興味をお持ちなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn01-sp@2x.png" alt="新築分譲マンションに興味をお持ちなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko-chukai.com/syutoken/?gclid=Cj0KCQjwrsGCBhD1ARIsALILBYrQdvH1eoc_5IU5bSjbXCF9eWNrJqnGEdq4rzzQ8W7hME6-Tg3NfiUaAqgnEALw_wcB" target="_blank" data-ga-click="cafe7_2">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn02@2x.png" alt="中古のマンションやリノベーション購入｜お住まいの売却に興味をお持ちなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn02-sp@2x.png" alt="中古のマンションやリノベーション購入｜お住まいの売却に興味をお持ちなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
							  <a href="https://www.inet-haseko.com/" target="_blank"  data-ga-click="cafe7_3">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn03@2x.png" alt="賃貸のお住まいに興味があるなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn03-sp@2x.png" alt="賃貸のお住まいに興味があるなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
							  <a href="https://www.hosoda.co.jp/" target="_blank"  data-ga-click="cafe7_4">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn04@2x.png" alt="戸建て住宅に関心があるなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn04-sp@2x.png" alt="戸建て住宅に関心があるなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/hrf/reform/" target="_blank"  data-ga-click="cafe7_5">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn05@2x.png" alt="リフォームを検討しているなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn05-sp@2x.png" alt="リフォームを検討しているなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko-senior.co.jp/home/jiritsugata/" target="_blank" data-ga-click="cafe7_6">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn06@2x.png" alt="そろそろ安心の高齢者住宅にとお考えなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec03__btn06-sp@2x.png" alt="そろそろ安心の高齢者住宅にとお考えなら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec04__ttl@2x.png" alt="新生活面白エピソード｜新生活を迎えるにあたっての準備は様々。昔の地図を調べる方から、チャンスと捉え断捨離にいそしむ方などなど。バラエティに富んでいました。そして意外に多かったのがカーテンに関するもの。引っ越しが決まったらまず、カーテンのサイズを確認すべし！が鉄則！？また、新生活をスタートするにあたって、色々と準備することを楽しまれている方も多く、引っ越しは大変ですが、住まいを変えるのは楽しいことだと再確認させて頂きました。アンケートに答えてくださったみなさまは、新生活を存分に楽しんでくださいね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec04__ttl-sp@2x.png" alt="新生活面白エピソード｜新生活を迎えるにあたっての準備は様々。昔の地図を調べる方から、チャンスと捉え断捨離にいそしむ方などなど。バラエティに富んでいました。そして意外に多かったのがカーテンに関するもの。引っ越しが決まったらまず、カーテンのサイズを確認すべし！が鉄則！？また、新生活をスタートするにあたって、色々と準備することを楽しまれている方も多く、引っ越しは大変ですが、住まいを変えるのは楽しいことだと再確認させて頂きました。アンケートに答えてくださったみなさまは、新生活を存分に楽しんでくださいね！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec04__img01@2x.png" alt="新生活面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol07/sec04__img01-sp@2x.png" alt="新生活面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
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
