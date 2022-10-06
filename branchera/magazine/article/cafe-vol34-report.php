<?php
//base
include ("../../function.php");
$content = get_id_data('25034');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = ($content['description']);
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2022年4月7日（木）～4月13日（水）";
// 回答者数
$respondents ="計3,421名";
// 対象者：
$target = "長谷工IDをお持ちで、ご自身の老後に不安を感じる方。サポートが必要な高齢のご家族がいらっしゃる方";

$cafeReportNum = "34";


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
        <h2 class="u-font-size__30 u-color__dark mb2">シニアの暮らしを考える</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>「人生100年時代」といわれる現代。自分の将来に不安を感じたり、身内の方の介護に関する悩みを抱えたりしている人が増えています。そこで、シニアの暮らしについてみなさんに伺ってみました。</p>
				</div>
			</section>
			<section class="mb6 mb2_sp">
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="老後について不安に感じることは「病気やケガ」「認知症」…そして「お金」も｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="老後について不安に感じることは「病気やケガ」「認知症」…そして「お金」も｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
        <div class="u-column">
          <div class="u-column__2">
						<div class="u-column__item center u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__graph@2x.png" alt="「ご自身の老後について不安に感じることは何ですか？」回答：円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc mb4" style="max-width:299px;" loading="lazy">
							<figure class="mb5 mb0_sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="健康は大事ですよね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc" style="max-width:299px;" loading="lazy">
							</figure>
						</div>
            <div class="u-column__item mb3_sp">
              <p>老後の生活の不安についてお伺いしたところ、「病気やケガをすること」が26%でトップ、次いで「認知症を患うこと」（23%）、「介護が必要になること」（21%）、「収入（預金）の不足」（18%）でした。「社会とのつながり」が希薄になることを心配している人も少なからずいます。この結果から見えてきたのは、老後の不安の大半を占めるのは「健康」と「お金」だということ。日本人の平均寿命は、令和2年には男性が81.64歳で女性が87.74歳となり過去最高を更新しました。長生きする分、認知症や骨折など老化に伴う健康の不安はつきまといます。老後資金が枯渇してしまう恐れや、自分も年を取るのに親の介護も必要になる“老老介護”への不安を抱く人が多いことが伺えます。</p>
						</div>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__graph@2x.png" alt="「ご自身の老後について不安に感じることは何ですか？」回答　円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp mb4_sp" style="max-width:85%;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="健康は大事ですよね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp mb5_sp" style="max-width:85%;" loading="lazy">
					</div>
				</div>
			</section>
			<section class="mb6 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="老後の準備は「何もしていない」人が半数4人に1人が私物の処分に着手している！
<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="老後の準備は「何もしていない」人が半数4人に1人が私物の処分に着手している！
<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="もし自分が認知症になったら資産は…｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:302px;" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>では、ご自身の老後に向けて、会員のみなさんはどのような準備をしているのでしょうか？何と、最も多かったのは「何もしていない」（47%）。約半数が、いわゆる“終活”に手をつけていないとの回答でした。年齢にもよりますが、「元気だからまだいいか」と先延ばしにすることや、「何から手を付ければよいのやら」と戸惑っている場合が多いのかもしれません。実際に準備をしているという回答で挙げられたトップは「私物の処分」で、23%の人が断捨離を始めているようです。家族に迷惑が掛からないよう、早めに身辺整理しておくことで、老後の人生が身軽になるメリットもありそうですね。次いで「エンディングノート」を用意したという声があり、「相続税対策」「住み替え」「遺言書」という回答が少数で並びました。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="もし自分が認知症になったら資産は…｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb6 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="老後はどんな住まいで暮らしたい？「住み慣れたわが家」が7割強とダントツ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="老後はどんな住まいで暮らしたい？「住み慣れたわが家」が7割強とダントツ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="子供に負担はかけたくないな｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:324px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p>自分が高齢になったとき、あなたはどんな住まいで暮らしたいですか？会員のみなさんの思いを聞くと、「自宅」が72%と圧倒的多数でした。次いで多かったのが「サービス付き高齢者向け住宅」（18%）。やはり、年を取っても住み慣れたわが家が一番。ずっとこのまま住み続けたい気持ち、よく分かります。ただ、老後も自宅で暮らすとなると、さまざまな不安が生まれてくるのが現実です。今は多彩な高齢者向けの住宅があり、元気なうちから住み替えを考えている人も少なくないのでは？一方、「子どもなど家族の家」を挙げた人は3%とわずかで、身内に面倒を掛けたくない気持ちが強いのかもしれません。</p>
						</div>
					</div>
				</div>
				<div class="mb6 u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="子供に負担はかけたくないな｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
			</div>
			</section>
			<section class="mb6 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="「有料老人ホーム」の利用を考えるとき「費用の高さ」が悩みのタネに｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="「有料老人ホーム」の利用を考えるとき「費用の高さ」が悩みのタネに｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="今の貯金や年金だけで有料の施設に入居できるのかな？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:326px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p>現在、実際に身近なシニアの方の身の回りのお世話や介護サポートをしている会員のみなさんは、介護サービスや「有料老人ホーム」の利用について、どんな悩みや不安を抱いているのでしょうか？介護サービスについては「訪問介護員（ホームヘルパー）との相性」が不安という意見や「介護サービスの質と費用」を気にする方、見ず知らずの人に介護を頼むことへの抵抗を感じる方が多いようです。一方、「有料老人ホーム」の利用についての思いを聞いてみたところ、圧倒的に多かったのが「費用」の悩みでした。「金銭面での負担が心配」、「有料老人ホームは料金が非常に高額」というコメントが目立ちました。また、「環境になじめるかどうか」「ほかの入居者との人間関係」を心配する方もいました。</p>
						</div>
					</div>
					<div class="mb6 u-only__sp">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="今の貯金や年金だけで有料の施設に入居できるのかな？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="自力での自宅介護には限界あり　介護サービスや施設の利用で安心を｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="自力での自宅介護には限界あり　介護サービスや施設の利用で安心を｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="優良な施設はどうやって見つけるんだろう？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb5"  style="max-width:356px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="自分も家族も安心できるサービスを見つけたいですね…｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:347px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6 mb4_sp">
							<p class="pb0 mb4_sp">現家族の精神的・肉体的負担を考えると、自力での自宅介護には限界があります。専門家による介護サービスや施設を上手に利用するほうが、介護する側もされる側も安心できることは多いはず。高齢者施設への入所を検討するにしても、費用や情報の入手を含めて心の準備をなるべく早めに行なっておきたいものです。</p>
							<div class="mb4 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="優良な施設はどうやって見つけるんだろう？｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
							</div>
							<p class="pt0">介護についての相談先にはたくさんの種類がありますが、見当が付かない際はお住まいの市町村に設置されている「地域包括支援センター」に相談してみるのもひとつの方法でしょう。高齢者が住み慣れた地域で生活できるように、専門知識を持った職員が介護サービスや介護予防サービス、保健福祉サービス、日常生活支援などの相談に応じています。</p>
						</div>
						<div class="cafe-report__link mb6 u-only__pc">
							<a href="https://www.haseko-senior.co.jp/" data-ga-click="cafe34_1" target="_blank">
								<figure class="mb5 u-only__pc">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="長谷工では多彩な高齢者住宅を運営しています - 長谷工シニアウェルデザイン｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__pc" loading="lazy">
								</figure>
							</a>
						</div>
					</div>
					<div class="mb6_sp u-only__sp">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="自分も家族も安心できるサービスを見つけたいですね…｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
					</div>
					<div class="cafe-report__link mb6 u-only__sp">
						<a href="https://www.haseko-senior.co.jp/" data-ga-click="cafe34_1" target="_blank">
							<figure class="mb5">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="長谷工では多彩な高齢者住宅を運営しています - 長谷工シニアウェルデザイン｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center u-only__sp" style="max-width:85%;" loading="lazy">
							</figure>
						</a>
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
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
