<?php
//base
include ("../../function.php");
$content = get_id_data('25004');
$pageTtl = 'あなたの今を聞かせて！<br>我が家の大掃除';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '一年に一度はやらねばならない「大掃除」。年末の一大イベントを皆さんどのように乗り越えたのか？どこをいつ、どんなふうにお掃除したかを大分析しました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2020年12月24日（木）～12月30日（水）";
// 回答者数
$respondents ="計1,189名";
// 対象者：
$target = "長谷工IDをお持ちの方で、年末の一大イベント「大掃除」で四苦八苦されている方";


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
        <h2 class="u-font-size__30 u-color__dark mb2">我が家の大掃除</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/main-v@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/ttl__info@2x.png" alt="あなたの今を聞かせて！ 我が家の大掃除｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！ 我が家の大掃除｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>1年に一度はやらねばならない「大掃除」。年末の一大イベントを皆さんどのように乗り越えたのか？どこをいつ、どんなふうにお掃除したかを大分析しました。コロナ禍ならではの変化も反映されたのか、少々様変わりしている感もありました。こんな時だからこそ、家の中を気持ちよく整えたいと感じた方も多かったのでは。失敗談や悩み事はもちろん、大切な住まいを整える、あんな工夫、こんなワザを語ってもらいました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__ttl@2x.png" alt="やっぱりギリギリ！大掃除の時期については「年末ギリギリ」派（？）が半数以上。次点は「特に大掃除はしない」。コロナ禍の影響で片付けを事前にされた方も多い模様。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__ttl-sp@2x.png" alt="やっぱりギリギリ！大掃除の時期については「年末ギリギリ」派（？）が半数以上。次点は「特に大掃除はしない」。コロナ禍の影響で片付けを事前にされた方も多い模様。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">できればやりたくなかったり、忙しい年末で後回しにされがちだったりする大掃除。やはり半数以上の方が「ぎりぎり」になってしまったようです。中には、例年「掃除が終わらずお正月に突入」「年末ギリギリからやり始め、夢中になり正月三箇日もやり続けた」なんてツワモノも・・・。<br>次に多かったのが「特に大掃除はしない」でした。去年のデータがないのではっきりとはわかりませんが、おそらくコロナ禍の「巣ごもり生活」の間に、すでにお片付けや掃除を終えられた方が多かったのではないでしょうか。「11月までに済ませた」という方も5％いらっしゃいました。<br>リモートワークなどで在宅時間が長くなり、住まいを整えたい気持ちが高まった上、通勤時間や残業時間を自由な時間として活用できたことで片付けや掃除をする時間が確保できたからのようです。<br>確かに日頃からお掃除をしていれば、年末にあらためてする必要もないですね・・・。「年末に特に『大掃除』としてはやらずに、日頃から些細な汚れに気づいたら行なうようにしている」「日頃のメンテを行ない、なるべく簡単に掃除が済むようにしておく」という見習いたいコメントも。<br>また「年末は寒いので、秋のまだ暖かいうちに大掃除をすると油汚れも落ちやすい」「寒くなるまでに終わらせる」「大掃除はやっぱり夏でしょう」など年末の寒い時期にはあえて大掃除しない、という新しい潮流もみられました。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__img01-sp@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:362px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__img02@2x.png" alt="頑張って掃除した翌日筋肉痛でした〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__img02-sp@2x.png" alt="頑張って掃除した翌日筋肉痛でした〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:362px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__img03@2x.png" alt="頑張って掃除した翌日筋肉痛でした〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/q1__img03-sp@2x.png" alt="頑張って掃除した翌日筋肉痛でした〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:362px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec01__ttl@2x.png" alt="大掃除の主役は？ふだんの掃除よりも男性からの関心が高い「大掃除」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec01__ttl-sp@2x.png" alt="大掃除の主役は？ふだんの掃除よりも男性からの関心が高い「大掃除」｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec01__img01@2x.png" alt="頼りにしてますよ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:362px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec01__img02@2x.png" alt="家族で団結！年間行事のひとつですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:362px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>今回は、男性の関心も高いテーマだったようです。回答者の6割近くを男性が占め、大掃除の主役は「自分」という方も多くいらっしゃいました。<br>ふだんの掃除は担当していなくても、高いところの掃除や重いものを運ぶなど、男性の手が必要な場面も多い大掃除では、男性が主導権を握りやすいようです。<br>また「家族全員」という回答も多く、「前日から担当場所、実施順序、時間を決めておく」とかなり計画的に行なうご家庭も。また「家族総出で一気にやる！」「家族全員で行なって、ご褒美に夜ご飯は外食！」など大掃除が家族の結束を強めている場合もあるようです。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec01__img01-sp@2x.png" alt="頼りにしてますよ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							<p>
								一方、「ハウスクリーニング業者」など外注サービスを利用した方は少な目。大ヒットしたドラマ「私の家政夫ナギサさん」などで家政婦（夫）さんが注目を集めたとはいえ、まだまだ家事の外注は一般的ではないのでしょうか・・・。
							</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec01__img02-sp@2x.png" alt="家族で団結！年間行事のひとつですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__ttl@2x.png" alt="「念入りにお掃除する場所」は、ずばり水回りの二大巨額、「キッチン」と「お風呂場」。手間がかかったり苦手だったりする場所もこのあたりに集中<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__ttl-sp@2x.png" alt="「念入りにお掃除する場所」は、ずばり水回りの二大巨額、「キッチン」と「お風呂場」。手間がかかったり苦手だったりする場所もこのあたりに集中<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__img01@2x.png" alt="いい運動だよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__img02@2x.png" alt="年に一回の大掃除協力していきましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:341px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__img03@2x.png" alt="ラクして、キレイになって、お得しかないです〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:343px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>汚れやすく気になる場所は、やはり水回りに集中し、「キッチン」と「お風呂場」が多数を占めました。次に多かったのは「窓」。毎日掃除はしないけれど、年末などにはきちんと綺麗にしたい箇所として認識されているようです。<br>一方、掃除に「時間がかかる」「苦手な場所」としても、「キッチンの換気扇」と「お風呂場」、「窓」が上位を占め、気になるけれどやりにくい場所であることがわかります。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__img01-sp@2x.png" alt="いい運動だよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							掃除のやり方は「事前にネットで調べる」「レンジフードは必ず写メをとってから分解して掃除」など、ITを駆使するのがイマドキのようです。<br>また、コツとして多く挙げられたのが「いっぺんにやろうとせず毎日少しずつ」、「欲張らず1日1箇所に絞る」など、無理をしないこと。中には「疲れたら終わり」「1日10分ずつ」など、本当にそれで終わりますか･･･？！と思うような回答もありましたが、やはり無理をしないのが一番です！<br>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__img02-sp@2x.png" alt="年に一回の大掃除協力していきましょう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							<p>
							意外に目立ったのが「妻ともめる」「家族からだめだしが出る」「分担決めで大喧嘩」「主人は全く手伝わない」など家族間でもめるケース。掃除が原因で家族とギクシャクするのは悲しいですね。そんなときには掃除をアウトソーシングするのも一つの方法です。<br>苦手なところだけ頼むのもよいかもしれません。また、「年１～２回お願いしている長谷工のハウスクリーニングのスタッフが、今回は前回より水垢が少ないとか、ピンクカビが少ないとか、日々の掃除の成果をほめてくれるのがすごく嬉しい」と、プロの評価で日々のモチベーションを上げている方も。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__img03-sp@2x.png" alt="ラクして、キレイになって、お得しかないです〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
							<p class="mb4">他にも「プロの技を参考にして日々の掃除をしている」「年末に掃除できない場所は、毎年年明けにハウスクリーニングをお願いしている。料金も年末よりお得で、それもとてもいい。」と賢く利用されている方も。試しに一度お願いしてみては？
							</p>
						  <div class="cafe-report__link mb3">
							  <a href="https://e-suteki.haseko.jp/service/house-cleaning.html" target="_blank" data-ga-click="cafe4_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__btn@2x.png" alt="プロの技（ハウスクリーニング）に興味を持ったら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:362px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec02__btn-sp@2x.png" alt="プロの技（ハウスクリーニング）に興味を持ったら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec03__ttl@2x.png" alt="大掃除おもしろエピソード｜あなたの今を聞かせて！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec03__ttl-sp@2x.png" alt="大掃除おもしろエピソード｜あなたの今を聞かせて！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<h4 class="mb3 mb2_sp">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec03__img01@2x.png" alt="エピソード紹介｜あなたの今を聞かせて！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol04/sec03__img01-sp@2x.png" alt="エピソード紹介｜あなたの今を聞かせて！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
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
