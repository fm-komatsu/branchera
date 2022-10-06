<?php
//base
include ("../../function.php");
$content = get_id_data('25005');
$pageTtl = 'あなたの今を聞かせて！<br>きれいな空気のある暮らし';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '室内の空気をきれいに保つために欠かせないのが「換気」です。家庭内での新型コロナウイルス感染を防ぐためにも、日頃から換気への意識を高めたいものですね。気密性の高いマンションで、お部屋の換気をよくして健やかに暮らすためにはどんな対策をすればいいのでしょうか。ブランシエラクラブ会員のみなさんの悩みや工夫に注目してみましょう！';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年1月14日（木）～1月20日（水）";
// 回答者数
$respondents ="計1,789名";
// 対象者：
$target = "長谷工IDをお持ちの方で、マンションに住み、おうちの空気のことが気になってモヤモヤしている方";


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
        <h2 class="u-font-size__30 u-color__dark mb2">きれいな空気のある暮らし</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/main-v@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/ttl__info@2x.png" alt="あなたの今を聞かせて！きれいな空気のある暮らし｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！きれいな空気のある暮らし｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>室内の空気をきれいに保つために欠かせないのが「換気」です。家庭内での新型コロナウイルス感染を防ぐためにも、日頃から換気への意識を高めたいものですね。気密性の高いマンションで、お部屋の換気をよくして健やかに暮らすためにはどんな対策をすればいいのでしょうか。ブランシエラクラブ会員のみなさんの悩みや工夫に注目してみましょう！</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__ttl@2x.png" alt="9割以上の人が「換気」に関心あり！綺麗な空気を保つ意識はとっても高そう｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__ttl-sp@2x.png" alt="9割以上の人が「換気」に関心あり！綺麗な空気を保つ意識はとっても高そう｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">新型コロナウイルス感染症が世界的に流行し、私たちの暮らしに大きな影響を及ぼしています。外出自粛やテレワークによって在宅時間が増えたこともあり、室内が密閉空間にならないよう、換気の大切さにあらためて気づいた人も多いのではないでしょうか。会員のみなさんに尋ねたところ、なんと家の中の換気について、9割以上の人が関心を持っているとのこと。しかも、「とても関心がある」という意識の高い人が半数近くに上りました。換気は2時間に1回、5～10分程度が目安とされています。特に気密性の高いマンションでは、健やかな暮らしのために空気の入れ換えが欠かせません。換気の効率を上げるために、給気口、換気口、エアコンなどのお手入れもお忘れなく！</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__img01-sp@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:341px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__img02@2x.png" alt="毎朝起きたら窓を開けて換気しますよ〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__img02-sp@2x.png" alt="円グラフ内訳説明｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:341px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/q1__img03-sp@2x.png" alt="毎朝起きたら窓を開けて換気しますよ〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:341px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec01__ttl@2x.png" alt="空気の汚れで気になるのは、やっぱり「ウイルス」季節柄、そろそろ「花粉」も悩みの種に｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec01__ttl-sp@2x.png" alt="空気の汚れで気になるのは、やっぱり「ウイルス」季節柄、そろそろ「花粉」も悩みの種に｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec01__img01@2x.png" alt="こまめに換気します image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec01__img02@2x.png" alt="空気清浄機もいいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:362px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>換気をしないと起きる空気の汚れで、一番気になるのはどんなこと？みなさんの答えのトップは、やはり「ウイルス」でした。コロナウイルスは空気感染しないといわれていますが、問題は飛沫。会話や咳、くしゃみをしたとき、口から飛び散る細かいしぶきのことです。換気の悪い空間では飛沫が空気中にふわふわと舞い続けるため、誰かが放出した飛沫の中にコロナウイルスが含まれていると、その飛沫が口や鼻などから入って感染するリスクがあります。換気することで、飛沫を含んだ空気が屋外へ排出されるので安心ですよね。みなさん、よくわかっていらっしゃる！</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec01__img01-sp@2x.png" alt="こまめに換気します image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							<p>
								次いで気になることで多かったのは「ほこり」、「花粉」です。さらに「におい」、「湿度」、「結露」と続きました。本格的な花粉シーズンがやってきました。花粉症の人にとって、室内に入り込む花粉は厄介な存在。大きく窓を開けて換気するわけにもいかず、悩ましいところです。空気清浄機やエアコンの空気清浄機能などを活用して花粉をできる限りシャットアウトしたいものですね。
							</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec01__img02-sp@2x.png" alt="空気清浄機もいいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__ttl@2x.png" alt="においが気になる場所は「リビング」がトップ。調理臭が残るのは対面キッチンのLDKが増えたせい？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__ttl-sp@2x.png" alt="においが気になる場所は「リビング」がトップ。調理臭が残るのは対面キッチンのLDKが増えたせい？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__img01@2x.png" alt="翌日、臭うよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:358px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__img02@2x.png" alt="ほおっておくと部屋の汚れの原因になることも・・・ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:341px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__img03@2x.png" alt="うちも気になる！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:357px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>あなたの家の中で「ん？なんかにおう」とよく感じるのはどんな場所？空気がよどんで汚れがちだと思うのはどこですか？最近の住まいはリビングダイニングと一緒になった対面型キッチンのLDKが主流だからでしょう。多かったのは「リビング」という回答。「焼肉をした後のにおいがリビングに残る」、「キッチンの調理のにおいが流れてくる」といった声が聞かれました。もしかすると、キッチンの換気扇の汚れが、リビングににおいがこもる原因になっているのかもしれません。換気扇のお掃除は面倒ですが、まめに行なった方がいいですね。換気が良くなると空気も爽やかになりますよ。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__img01-sp@2x.png" alt="翌日、臭うよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							また、「トイレ」と並んで、「玄関」を挙げる人も多くいました。玄関は靴のにおいや、カビの原因となる湿気が溜まりやすい場所。玄関ドアや窓を開けて換気をする際、下駄箱の扉も開けておくとにおいの除去により効果的です。ちょっと意外だったのが「寝室」の多さでした。「閉めきっているので体臭や湿気がこもる」、「寝具から出るほこりが気になる」など、みなさんけっこうお悩みのご様子。寝室はぐっすり眠って疲れを癒す場所ですから、そこがクサかったら体も心も休まりませんよね。朝起きたときに寝室の窓を開ける人は多いと思いますが、夜寝る前にもぜひ換気を。新鮮な空気を取り入れることで酸素濃度も上がり、ぐっすり安眠できる環境が整います。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec02__img02-sp@2x.png" alt="ほおっておくと部屋の汚れの原因になることも・・・image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__ttl@2x.png" alt="窓を開けずに空気を入れ換える「換気システム」マンションで多いのは、排気は機械、給気は自然に任せるタイプ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__ttl-sp@2x.png" alt="窓を開けずに空気を入れ換える「換気システム」マンションで多いのは、排気は機械、給気は自然に任せるタイプ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__img01@2x.png" alt="ナイス！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__img02@2x.png" alt="カビの原因となるので気をつけて！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:352px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>毎日24時間働いてくれる「住宅の換気システム」についても尋ねてみました。換気システムとは、窓を開けずに換気装置を使って強制的に空気の入れ換えができるしくみで、大きく分けて3種類の方法があります。給気、排気ともに機械で強制的に換気をする「第1種換気」、給気を機械的に行ない、排気は自然に排気口から行なう「第2種換気」、排気を強制的に機械で行ない、給気は自然に任せる「第3種換気」です。一般的なマンションでは第3種換気が選ばれるケースが多く、会員のみなさんの答えも半数が第3種換気でした。あなたのマンションはどのタイプ？</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__img01-sp@2x.png" alt="ナイス！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							<p class="mb4">いずれにしても、室内の換気扇と排気口をつなぐダクトは、いわば「空気の通り道」。チリやほこりが溜まって汚れると換気不足になって、においや結露の原因にも…。できれば5～7年ごとに換気ダクトの清掃を行ないたいものです。とはいえ、換気ダクトは見えない場所にあるので、汚れ具合を目で確かめられませんよね。換気扇の効きが悪いと感じたり、外壁に油だれなどの汚れを見つけたりしたら黄信号。迷わずプロに清掃を頼みましょう。汚れた空気がスムーズに屋外に排出できるようになり、お部屋の空気をクリーンに保つことができますよ！</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__img02-sp@2x.png" alt="カビの原因となるので気をつけて！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							<div class="cafe-report__link mb3">
								<a href="https://e-suteki.haseko.jp/service/ventilation-duct-cleaning.html?utm_source=brc_cafe_vol05&utm_medium=web&utm_campaign=ventilation_duct_cleaning" target="_blank" data-ga-click="cafe5_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__btn@2x.png" alt="ダクト清掃に関心のある方はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec03__btn-sp@2x.png" alt="ダクト清掃に関心のある方はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec04__ttl@2x.png" alt="住まいの換気のために、どんな工夫をしている？「窓を開ける」がダントツ、空気清浄機も大活躍！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec04__ttl-sp@2x.png" alt="住まいの換気のために、どんな工夫をしている？「窓を開ける」がダントツ、空気清浄機も大活躍！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec04__img01@2x.png" alt="定期的に換気してますね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:323px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec04__img02@2x.png" alt="空気がキレイだとめちゃテンション上がります！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:347px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>では、みなさんはふだん、換気のためにどんな工夫をしているのでしょうか？当然ながら、「窓を開ける」が圧倒的。「1～2時間ごとに窓を開けて換気する」、「起きたらすべての窓を開けて、家中の空気を入れ換える」など、努力がうかがえます。また、「2カ所の窓を開ける」と答えた人もけっこういました。実はこれ、上手な換気のコツなんです。1カ所の窓を全開にしても部屋の空気はたいして動かず、冬は気温が下がって寒いだけになってしまいます。なるべく対角線上になるように2カ所の窓を開けて、空気の通り道をつくりましょう。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec04__img01-sp@2x.png" alt="定期的に換気してますね　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							また、「空気清浄機を24時間つけっぱなし」、「サーキュレーターと空気清浄機を併用している」など、空気清浄機を活用している人も多数。エアコンの空気清浄機能もよく活用されているようです。換気をすることで、部屋に溜まった湿気を排出し、カビを防ぐ効果も期待できます。それに、きれいな空気を吸っていると、心も体もリフレッシュできるもの。コロナ対策はもちろん、毎日をストレスなく気持ちよく過ごすためにもこまめに換気を行ないたいものですね！</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec04__img02-sp@2x.png" alt="空気がキレイだとめちゃテンション上がります！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec05__ttl@2x.png" alt="我が家の換気の工夫｜おうちの空気をきれいに保つためのみなさんの工夫。いくつかをピックアップしてみました。中には、ちょっと頭が下がる取り組みもあり！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec05__ttl-sp@2x.png" alt="我が家の換気の工夫｜おうちの空気をきれいに保つためのみなさんの工夫。いくつかをピックアップしてみました。中には、ちょっと頭が下がる取り組みもあり！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<h4 class="mb3 mb2_sp">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec05__img01@2x.png" alt="エピソード紹介｜我が家の換気の工夫｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol05/sec05__img01-sp@2x.png" alt="エピソード紹介｜我が家の換気の工夫｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
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
