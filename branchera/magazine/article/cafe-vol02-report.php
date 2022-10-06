<?php
//base
include ("../../function.php");
$content = get_id_data('25002');
$pageTtl = 'あなたの今を聞かせて！<br>親子のコミュニケーション';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '子どもの思いを理解し、親の気持ちを伝えるためにも、ふだんから親子がふれあい、会話を交わすのはとても大切なこと。そこで、今回はブランシエラクラブ会員のみなさんに、どんなふうにして親子のコミュニケーションを深めているのかを聞いてみました。愛情を込めて子育てを楽しむパパ・ママの姿が浮かび上がってきました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2020年11月19日（木）～11月25日（水）";
// 回答者数
$respondents ="計481名";
// 対象者：
$target = "長谷工IDをお持ちの方で、小学生のお子さまがいらっしゃる方";


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
        <h2 class="u-font-size__30 u-color__dark mb2">親子のコミュニケーション</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/main-v@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/main-v-sp@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/ttl__info@2x.png" alt="あなたの今を聞かせて！<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>子どもの思いを理解し、親の気持ちを伝えるためにも、ふだんから親子がふれあい、会話を交わすのはとても大切なこと。そこで、今回はブランシエラクラブ会員のみなさんに、どんなふうにして親子のコミュニケーションを深めているのかを聞いてみました。愛情を込めて子育てを楽しむパパ・ママの姿が浮かび上がってきました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/q1__ttl.png" alt="親子の触れ合いの場は「リビング」トップ。「お風呂」もコミュニケーション空間として人気！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/q1__ttl-sp.png" alt="親子の触れ合いの場は「リビング」トップ。「お風呂」もコミュニケーション空間として人気！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p>家の中で親子のコミュニケーションの場所になっているのは、「リビング」がトップ。次いで「ダイニング」でした。「キッチン」までを合わせると、約7割の人がLDKを子どもとのふれあいの場所にしています。家族団らんの場であるリビングや、食事を共にするダイニングを居心地の良い空間にすれば、親子で過ごす時間がもっと楽しくなり、会話も自然にはずみそうです。続いて、コミュニケーション空間として人気が高いのが、なんと「お風呂」でした。共働きの家庭が多い今、あわただしい日常の中でも、入浴タイムは子どもとゆっくり向き合っておしゃべりをしたり、遊んであげたりできる貴重な時間なんですね。身体を洗いっこしたり、広めの浴槽に一緒に浸かってスキンシップ！パパ・ママにとっては最高に楽しいひとときではないでしょうか。</p>
						</div>
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/q1__img01-sp@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:335px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec01__ttl@2x.png" alt="会話の内容は「学校での出来事」がダントツ　好きなアニメやゲームの話題でも盛り上がる♪<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec01__ttl-sp@2x.png" alt="会話の内容は「学校での出来事」がダントツ　好きなアニメやゲームの話題でも盛り上がる♪<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec01__img01@2x.png" alt="勉強をしている子供 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec01__img02@2x.png" alt="一家団欒 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>では、親子の会話で話題に上るのはどんなこと？いちばん多かったのは「学校での出来事」でした。育ち盛りの子どもにとって、先生や友達と過ごす学校生活は毎日が新鮮で、楽しい発見の連続なのでしょう。パパやママは会話から我が子の学校での行動や友達づきあい、興味のある分野を知ることができますし、ふだんから親身に話を聞いてあげていれば、学校で何かあって子どもの心に黄信号が点滅しているときも、いち早くキャッチできそうです。
							<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec01__img01-sp@2x.png" alt="勉強をしている子供 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">また、「アニメ」「ゲーム」の話で盛り上がる家庭も多く、中でも話題となったのは、空前のブームを巻き起こしたアニメ『鬼滅の刃』だったそう。「全集中」で始まる必殺技、子どもたちはみんな真似していますね。目を輝かせて大好きなアニメやゲームのことを語る子どもの話に耳を傾けるうちに、「興味が湧いて、親の自分が夢中になっちゃった」というケースも珍しくありません。親と共通の趣味を持っていることは、子どもの自慢のタネになるはず。時間の制限など家庭内でルールを決めて一緒に楽しめば、親子のコミュニケーションがより深まりそうです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec01__img02-sp@2x.png" alt="一家団欒 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec02__ttl@2x.png" alt="対面キッチン、スタディーコーナーなど　子供に目が届き、会話がしやすいLDKづくり<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec02__ttl-sp@2x.png" alt="対面キッチン、スタディーコーナーなど　子供に目が届き、会話がしやすいLDKづくり<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec02__img01@2x.png" alt="対面キッチンでコミュニケーションを取る親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec02__img02@2x.png" alt="リビングで過ごす親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>
							子どもとコミュニケーションをとりやすいよう、みなさん、住まいの間取りや家具の配置なども工夫している様子です。「家事をしながら子どもと話したいから、対面キッチンにした」「リビングに子どものスタディーコーナーを設けて、目が届くようにしている」「子ども部屋をあえてつくらない」「必ずリビングを通る生活動線にした」など、家族が集まりやすいLDKづくりが目立ちました。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec02__img01-sp@2x.png" alt="対面キッチンでコミュニケーションを取る親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								「リビングの真ん中にラグだけを敷いて、親子で床に座ったり、一緒に寝転びながら話ができるようにしている」という人も。なるほど、親子で仲良くゴロゴロすれば、親密度も増して楽しそうですね。
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec02__img02-sp@2x.png" alt="子供に邪魔さられて仕事に集中できない image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
							</figure>

						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__ttl@2x.png" alt="家族揃って食事をする、お風呂に一緒に入る　そんな普段の心がけが親子の絆を育んでいる！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__ttl-sp@2x.png" alt="家族揃って食事をする、お風呂に一緒に入る　そんな普段の心がけが親子の絆を育んでいる！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__img01@2x.png" alt="親子でランチをしている image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__img02@2x.png" alt="ソファでくつろぎながらコミュニケーションを取る親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">親子のコミュニケーションを増やすために、ふだん心がけていることを聞いたところ、「家族そろって食事をする」「食事中はテレビをつけない」という声がたくさん挙がりました。そう、食事で大切なのは、栄養を摂ることだけではありません。子どもたちが、家族で食卓を囲む時間が大好きと思えるようにしたいもの。みなさんのお答えからも、「食事は子どもと会話をする時間」という意識を持ち、会話の妨げになるテレビ、スマホ、ゲーム機の使用を禁止している人が多いことがわかります。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__img01-sp@2x.png" alt="親子でランチをしている image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								また、入浴タイムや寝る前の時間を有効活用している人も見受けられました。お風呂を上手に活用している例では、「洗い場の床にマットを敷いて休憩場所をつくり、長湯をして子どもと遊ぶ」「浴室の壁に九九の表を貼って、親子で楽しく読み上げている」いったものもありました。仕事の都合でたとえ一緒に食事ができなくても、「お風呂に一緒に入って、その日の出来事を聞く」「一緒に布団に入り、寝付くまで話す」「寝る前に絵本を読んであげる」といった特別な時間を持てば、子どもの心が満たされ、親子の絆もしっかりと育まれそうですね。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__img02-sp@2x.png" alt="ソファでくつろぎながらコミュニケーションを取る親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</p>
							<div class="cafe-report__link">
								<a href="https://e-suteki.haseko.jp/service/unit-bath-replace.html?utm_source=brc_cafe_vol02&utm_medium=web&utm_campaign=unit_bath_replace" target="_blank" data-ga-click="cafe2_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__btn@2x.png" alt="気持ちの良いお風呂で親子の触れ合いを楽しもうと思ったら　ボタン<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec03__btn-sp@2x.png" alt="気持ちの良いお風呂で親子の触れ合いを楽しもうと思ったら　ボタン<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec04__ttl@2x.png" alt="忙しくて子供と向き合う時間が取れないのが悩み　子供に親お思いが伝わらず、頭を抱える人も<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec04__ttl-sp@2x.png" alt="忙しくて子供と向き合う時間が取れないのが悩み　子供に親お思いが伝わらず、頭を抱える人も<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec04__img01@2x.png" alt="話し合いをする親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec04__img02@2x.png" alt="交換日記をする親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>子どもとのコミュニケーションをもっと増やしたいけれど、仕事が忙しくて時間が取れない…。そんな悩みを抱えているパパやママの多いこと！子どもと会話できる機会が少ない人は、LINEアプリでトークをしたり、置き手紙や日記の交換をしてはいかがですか？対面では親に言いにくいことも、逆に素直に話してくれるかもしれません。また、「些細なことでスネてしまう」「反抗期なのか、親の言うことを聞かない」「ゲームに熱中すると返事をしない」など、子どもの態度に頭を抱える人もたくさん。「カッとならないように気をつけているが、疲れていると我慢がきつい」という切ないコメントには、思わず大きくうなずいてしまいました。<br class="u-only__sp">


							</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec04__img01-sp@2x.png" alt="話し合いをする親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">ただし、ふだんの会話がたとえば「早く起きて！」「ゲームをやめなさい！」「宿題をやっちゃいなさい！」といった指示や命令ばかりになっている人もいるのでは？子どものことを思ってつい説教してしまう気持ちはよ〜くわかります。でも、押しつけは親子間の気持ちのすれ違いを生んでしまいがち。一方向のコミュニケーションにならないように気をつけたいものですね。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec04__img02-sp@2x.png" alt="交換日記をする親子 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb3_sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<h4 class="mb5">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec05__ttl@2x.png" alt="親子のコミュニケーション おもしろエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec05__ttl-sp@2x.png" alt="親子のコミュニケーション おもしろエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec05__img01@2x.png" alt="エピソード紹介｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol02/sec05__img01-sp@2x.png" alt="エピソード紹介｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<figure>
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
