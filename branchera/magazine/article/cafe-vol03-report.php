<?php
//base
include ("../../function.php");
$content = get_id_data('25003');
$pageTtl = 'あなたの今を聞かせて！<br>心と身体のエクササイズ';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'コロナ禍で巣ごもり生活を余儀なくされた2020年。外出や屋外での運動などが制限されてストレスがたまりがちな中、どのようなエクササイズをされたかを、ブランシエラクラブ会員の皆さんにうかがいました。健やかな心と身体を保つために、皆さんがされていることとは・・・？';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2020年12月10日（木）～12月16日（水）";
// 回答者数
$respondents ="計922名";
// 対象者：
$target = "長谷工IDをお持ちの方で、心と身体の健康を保つために、お家で意識的にエクササイズなどに取り組んでいる方";


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
        <h2 class="u-font-size__30 u-color__dark mb2">心と身体のエクササイズ</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/main-v@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/ttl__info@2x.png" alt="あなたの今を聞かせて！<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>コロナ禍で巣ごもり生活を余儀なくされた2020年。<br>外出や屋外での運動などが制限されてストレスがたまりがちな中、どのようなエクササイズをされたかを、ブランシエラクラブ会員の皆さんにうかがいました。健やかな心と身体を保つために、皆さんがされていることとは・・・？</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__ttl@2x.png" alt="一番人気と思われた「ヨガ・ピラティス」を抑えて、1位は「骨盤調整などのストレッチ系」、2位はおなじみの「ラジオ体操」！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__ttl-sp@2x.png" alt="一番人気と思われた「ヨガ・ピラティス」を抑えて、1位は「骨盤調整などのストレッチ系」、2位はおなじみの「ラジオ体操」！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">事前の予想では、不動の人気を誇る「ヨガ・ピラティス」が1位かと思われたのですが、「骨盤調整などのストレッチ系」が1位を獲得。激しい運動よりも始めやすく続けやすいという特性や、ネットの動画やアプリなど、手軽に始められるツールが広まってきたことも人気の理由のようです。さらにはテレワークで凝り固まった肩や腰を伸ばしたい！という切実な欲求もあったのかもしれません。<br>意外なダークホースだったのは「ラジオ体操」。テレビやラジオの放映（放送）もあり、子どもの頃からしみ込んだ動きであるという強みがあった模様。「自己流」で行っている方が多かったのも、このラジオ体操です。<br>始めてみると、意外と身近に同好の士がいたことや、近所の公園で実施されていたことに気づいたなど、新たなコミュニティが広がることもあったようです。<br>また、NHKの番組などの影響か、「筋トレ」も人気。「Wii Sports」や「リングフィット」などのゲーム系エクササイズは、親子間や夫婦間の交流に役立ったという感想も多く見受けられました。身体の調子を整えられ、家族間のコミュニケーションも進むなんて素敵ですね。一方、家族との競争につい熱が入って、きつい筋肉痛や故障の原因になるほど熱中した例も。何事もほどほどに・・・。</p>
							<div class="cafe-report__link">
								<a href="<?php echo $base_url ?>/magazine/article/kotsuban_lesson_01.php" data-ga-click="cafe3_1">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__btn@2x.png" alt="骨盤矯正に興味を持ったら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__btn-sp@2x.png" alt="骨盤矯正に興味を持ったら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:428px" loading="lazy">
								</a>
							</div>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__img01-sp@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:335px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__img02@2x.png" alt="ラジオ体操は小学生の夏休みを思い出す〜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__img02-sp@2x.png" alt="ラジオ体操は小学生の夏休みを思い出す〜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:432px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/q1__img03@2x.png" alt="ナイス｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec01__ttl@2x.png" alt="効果を上げるには投資も必要！？購入したツールのダントツ1位は「ヨガマット」。様々なエクササイズに使える優れものです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec01__ttl-sp@2x.png" alt="効果を上げるには投資も必要！？購入したツールのダントツ1位は「ヨガマット」。様々なエクササイズに使える優れものです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec01__img01@2x.png" alt="私も買ったわ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec01__img02@2x.png" alt="まだまだ書籍の需要は健在ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>ヨガやピラティスのみならず、ストレッチや筋トレの際にも使えることから、多くの方が「ヨガマット」を購入されたようです。手ごろなお値段のものも多く、サッと敷いてエクササイズが始められる手軽さも購入の決め手になったようです。<br>次に多かったのがDVDや書籍など。ネット上の動画やアプリが普及している時代ですが、実物を求める方はいまだ多いようです。やはり新しいことを始めるにはしっかりとした知識が必要ということでしょうか。
							<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec01__img01-sp@2x.png" alt="私も買ったわ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">「道具を買ったが、そのうち使わなくなった」「購入しただけで満足してしまった」などのあるある体験も多い中、「10年前に買ったDVDが今回役に立った」なんていう人も。ひと昔前に流行った軍隊系エクササイズが再ブームなんて話もありますので、今回購入したグッズも、今は使わなくても捨てたりしないほうが良いようですよ！<br>そんな中、ひときわ興味をそそられたのが「体操ブーブーというラジオ体操が流れるブタ人形」。気になります！
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec01__img02-sp@2x.png" alt="まだまだ書籍の需要は健在ですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec02__ttl@2x.png" alt="エクササイズで得たのは「軽くしなやかな体」自分の体と向き合って思い切って動かしてみたら、変化を感じられたとの声多数。<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec02__ttl-sp@2x.png" alt="エクササイズで得たのは「軽くしなやかな体」自分の体と向き合って思い切って動かしてみたら、変化を感じられたとの声多数。<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec02__img01@2x.png" alt="心地いいよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec02__img02@2x.png" alt="集中力が続いたり心が落ち着いたり良い効果尽くし〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>
							エクササイズを通じて、多くの方が「肩こりの改善」「腰痛がよくなった」「体重が落ちた」などの効果を感じているようです。さらには「体を動かすことによって頭もすっきりした」や「リフレッシュできて気分がよくなった」「運動後は気分が晴れた」など、心の健康にも役立っていることがうかがえます。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec02__img01-sp@2x.png" alt="心地いいよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								普段、動かすことがあまりない部分を動かすことによって「今まで気づかなかった体の硬さに気づいた」や「自分の体力のなさを思い知った」など、新たな気付きを得られることも。<br>巣ごもり生活の間に自分の身体と向き合って、かえって健康になったという方も多いようです。自分の体に関心を持って、軽い運動でも継続することは大切ですね！
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec02__img02-sp@2x.png" alt="集中力が続いたり心が落ち着いたり良い効果尽くし〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
							</figure>

						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__ttl@2x.png" alt="プロのレッスンをお手軽に！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__ttl-sp@2x.png" alt="コロナ禍で広がる「オンラインレッスン」<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__img01@2x.png" alt="指導があった方が効果が出やすいのは間違いない！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">意外に多いのが、自己流で始めて挫折したり、体を痛めてしまったりといった体験談。<br>やはり、プロの指導を受けながらのほうが、確実な効果や安心感が得られるようです。<br>コロナ禍の現在は、様々なオンラインレッスンが開設されています。リモートワークで時間もある今、思い切って挑戦してみては？<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__img01-sp@2x.png" alt="指導があった方が効果が出やすいのは間違いない！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
						</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/branchera/gift/article/online-yoga.php" data-ga-click="cafe3_2">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__btn01@2x.png" alt="オンラインヨガに興味を持ったら　<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__btn01-sp@2x.png" alt="オンラインヨガに興味を持ったら　<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="cafe-report__link">
								<a href="<?php echo $base_url ?>/event/article/event-golf19.php" data-ga-click="cafe3_3">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__btn02@2x.png" alt="やっぱりゴルフが上手くなりたいと思ったら　<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec03__btn02-sp@2x.png" alt="やっぱりゴルフが上手くなりたいと思ったら　<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<h4 class="mb5">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec04__ttl@2x.png" alt="エクササイズ おもしろエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec04__ttl-sp@2x.png" alt="エクササイズ おもしろエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec04__mg01@2x.png" alt="エピソード紹介｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol03/sec04__img01-sp@2x.png" alt="エピソード紹介｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
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
