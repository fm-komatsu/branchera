<?php
//base
include ("../../function.php");
$content = get_id_data('25014');
$pageTtl = 'あなたの今を聞かせて！<br>〜お住まいのマンションの資産価値、ご存じですか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '持ち家のマンションに住んでいても、家族構成や生活スタイルの変化などさまざまな理由から、住み替えを考えている人も多いのでは？売却するとなると気になるのは、今のマンションの値段です。あなたのお住まいは資産としてどのくらい価値があるのか、ご存知でしょうか。分譲マンションにお住まいのブランシエラクラブ会員のみなさんに、「資産価値」について聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年6月3日（木）～6月9日（水）";
// 回答者数
$respondents ="計2,971名";
// 対象者：
$target = "長谷工IDをお持ちの方で、自己所有のマンションにお住まいの方";

$cafeReportNum = "14";


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
        <h2 class="u-font-size__30 u-color__dark mb2">お住まいのマンションの資産価値、ご存じですか？</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！お住まいのマンションの資産価値、ご存じですか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！お住まいのマンションの資産価値、ご存じですか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>持ち家のマンションに住んでいても、家族構成や生活スタイルの変化などさまざまな理由から、住み替えを考えている人も多いのでは？売却するとなると気になるのは、今のマンションの値段です。あなたのお住まいは資産としてどのくらい価値があるのか、ご存知でしょうか。分譲マンションにお住まいのブランシエラクラブ会員のみなさんに、「資産価値」について聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="3割の人が今のマンションに住んで5年未満 20年以上住み続けている人も2割強と多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="3割の人が今のマンションに住んで5年未満 20年以上住み続けている人も2割強と多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">「今のマンションに住んで何年ぐらいですか？」と会員のみなさんに聞いたところ、最も多かったのが５年未満で30％でした。次いで10〜14年が17％、5〜9年が15％、15〜19年が14％と続きます。賃貸生活に区切りをつけてマンションを購入した人や、出産、子供の成長、シニアライフへの転換などを理由に住み替えをした人が多い印象です。一方で20年以上住んでいる人も合計すると24％に上り、そのなかで30年以上と答えた人が7％もいました。賃貸住宅と比べるとみなさん長く住み続けていらっしゃるようですね。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜長く住むと愛着が湧きますね｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:337px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜長く住むと愛着が湧きますね｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="マンションの資産価値は立地で決まる？「管理状態」をあげる人もいてナットク｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="マンションの資産価値は立地で決まる？「管理状態」をあげる人もいてナットク｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="やっぱり立地は重要なポイントです image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:307px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="見た目より住みやすさが大切だと思う image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>住み替えを検討している人はもちろんのこと、ずっと住み続けるつもりでも、持ち家のマンションは大切な財産ですよね。とはいえ、価値を計る基準はさまざま。マンションの資産価値は何によって決まるとあなたは思いますか？会員のみなさんによる答えのトップは「最寄り駅からの距離」(18％)でした。実際、都心に近くて利便性の高い立地ほど資産価値も高い傾向にあり、駅から徒歩5分以内の物件は築年数を経ても価値が下がりにくいようです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="やっぱり立地は重要なポイントです image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  次いで多かったのが、「周辺環境」（15％）、「管理状態」（13％）、「学校や買い物などの利便性」（12％）です。なるほど、小さいお子さまがいる家庭なら、学校・保育園・幼稚園・病院・スーパーや安全に遊べる公園が近くにあるマンションに価値を感じますよね。そして、マンションの管理状態をあげる人も多くいらっしゃいました。日々の管理やメンテナンスが良ければ建物も傷まず、資産価値も下がりにくくなると考えているようですね。<br>逆に「外観」、「ブランド」、「建設会社」と答えた人が、いずれも6％と少なかったのは意外！みなさん、イメージよりも実質重視であることがわかりました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="見た目より住みやすさが大切だと思う image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="マンションの資産価値、査定を受けた人は約1割 でも6割の人がいくらなのか気になっている！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="マンションの資産価値、査定を受けた人は約1割 でも6割の人がいくらなのか気になっている！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="査定って面倒なイメージありますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:349px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="ネットでお手軽に査定できるんですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5">いったい自分のマンションはいくらで売れるのか、売却する予定はなくても、資産価値はちょっと気になりますよね。立地や管理状態だけでなく、同じマンション内の同じ間取りであっても、部屋の方位や階数、室内の状態、時期によって売却価格は変わってきます。今住んでいるマンションの資産価値を正確に知るためには不動産会社の査定を受けるのが早道ですが、売却を考えている人でなければ査定を依頼するのはやはり躊躇してしまうのでしょう。会員のみなさんで「査定をしてもらったことがある」と答えた人は9％と少数でした。ただし、「気になっているが知らない」（33％）、「機会があれば聞いてみたい」（28％）を合わせると、約6割の人はやはり資産価値が気になるご様子です。一方で、「特に気にならない」と答えた人も多く、30％に上りました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="査定って面倒なイメージありますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  とりあえずおおざっぱでいいから、マンションの資産価値を自分で調べることができたら…。そう思っている人は、ネットで利用できるAI（人工知能）による査定サービスがおすすめです。ユーザー登録不要で利用できる自動査定サイトもありますから、気軽に試してみてはいかがですか？
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="ネットでお手軽に査定できるんですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<figure class="mb2">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01@2x.png" alt="カンタン入力で資産価値をチェック！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01-sp@2x.png" alt="カンタン入力で資産価値をチェック！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</figure>
							<div class="cafe-report__link mb2">
								<a href="https://www.haseko-chukai.com/sell/satei_syutoken.html?gclid=Cj0KCQjw-LOEBhDCARIsABrC0Tn2uMbh8s4mTtmijVBqPRSi-Cb3m8iUD1URFllb2lPZQZ5Oq_ccEtQaAs_pEALw_wcB" target="_blank" data-ga-click="cafe14_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn02@2x.png" alt="長谷工リアルエステート「売却査定」image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:331px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn02-sp@2x.png" alt="長谷工リアルエステート「売却査定」 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="7割もの人が今のマンションに住み続けたい派！住み替えたい人の理由は「古い」「狭い」がトップ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="7割もの人が今のマンションに住み続けたい派！住み替えたい人の理由は「古い」「狭い」がトップ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="リフォームしたら今の部屋も長く住めるかな〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:364px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="高く売れると嬉しいですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:347px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item">
							<p class="mb5 mb4_sp">「今のマンションにずっと住み続けたいですか？」と尋ねたところ、会員のみなさんはなんと70%近くがYESの返答でした。お気に入りのマンションは、住むほどに愛着が湧いてくるもの。街に顔なじみのお店も増えれば、ずっとそこで暮らし続けたいですよね。引っ越しせずにリフォームをして住み続ける人も多く見受けられます。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="リフォームしたら今の部屋も長く住めるかな〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								一方で14％と少数ながら、NOと答えた人もいました。住み続けたくない理由で最も多かったのは、「古いから」「狭いから」でした。「将来は郊外や田舎で暮らしたいから」と答えた人も意外と多くいらっしゃいました。近年、都市部では地方移住に関心を持つ人が増えるなか、コロナ禍がさらにその後押しとなっているのかもしれません。「いつかは戸建てに住みたいから」、「子供が独立したら、今のマンションは広すぎるから」と答えた人や、シルバー世代からは「夫婦で介護付高齢者住宅や施設等に入居したいと思っているから」という人も。なかには「マナーの悪い住人が多いから」、「周辺からの騒音がひどい」といった声もありました。<br>
                住み替えたい人の理由はさまざまですが、高額なローンを組んで購入したマンションですから、少しでも高値で売却してより快適な新居に引っ越したいとの思いは共通しているのではないでしょうか。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="高く売れると嬉しいですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="理想の住まいのイメージは十人十色 終の｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="思い描く理想のワークスタイルは週1日出社とテレワーク？それとも半分ずつ？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="子供がペットとのびのび過ごせる家がいいな｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:349px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="老後も安心して住める部屋が理想！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:334px" loading="lazy">
						</div>	
						<div class="u-column__item">
							<p>あなたにとっての理想の住まいの条件は何ですか？お料理好きならキッチンの広さは大切ですし、子育て世代ならまわりに気兼ねすることなく子育てができる自然豊かな環境かもしれませんね。また、夜景が美しい高層階の住まいに憧れる人もいれば、家庭菜園ができる庭付きの暮らしに惹かれる人もいるでしょう。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="子供がペットとのびのび過ごせる家がいいな｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  会員のみなさんの“理想”も千差万別。「日当たりと眺望の良いマンション」、「プライバシーを保ちつつ、家族が仲良く暮らせる住まい」、「駅またはバス停まで近く、スーパーマーケット、病院、銀行が徒歩圏内にある住まい」、「安心して住み続けられる災害に強い家」、「ペットの犬が快適に暮らせる家」など、多彩な答えが寄せられています。しかし、高齢になって“終の棲家”を考えるようになると頭に浮かぶのは、「安全・安心・便利」のよう。「バリアフリー」や「商業施設や医療施設が近くにある」ことを求める人が目立ちました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="老後も安心して住める部屋が理想！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
                理想の住まいというと、よりゴージャスな暮らしのイメージを頭に描く人が多いのかと思いきや、みなさんけっこう現実的ですね。夢をただ大きく膨らませるのではなく、いつか実現できればうれしいという想いにあふれていました。
							</p>
						</div>
					</div>
				</div>	
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="理想の住まい｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="理想の住まい｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
			</section>
			<section class="mb3">
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
