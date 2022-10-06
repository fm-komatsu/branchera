<?php
//base
include ("../../function.php");
$content = get_id_data('25001');
$pageTtl = 'あなたの今を聞かせて！<br>テレワークと私の暮らし';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'ウィズコロナ社会の“新しい生活様式” として、在宅勤務を取り入れる企業が増え、テレワークが急速に普及しています。そこで第一回目は、「テレワーク時代の私の仕事場」をテーマに、テレワークで人々の意識や働き方はどんな風に変化したのかを探ってみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

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
        <h2 class="u-font-size__30 u-color__dark mb2">テレワークと私の暮らし</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;2020年10月29日（木）～11月4日（水）<br>
          回答者数&emsp;&emsp;&emsp;：&emsp;計436名<br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;長谷工IDをお持ちの方で、テレワーク（在宅勤務）を経験されたことのある方

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：2020年10月29日（木）～11月4日（水）<br>
					回答者数：計436名<br>
					対象者：長谷工IDをお持ちの方で、テレワーク（在宅勤務）を経験されたことのある方
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/enquete/cafe01/main-v@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/enquete/cafe01/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/enquete/cafe01/ttl__info@2x.png" alt="あなたの今を聞かせて！テレワークと私の暮らし｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/enquete/cafe01/info__ttl-sp@2x.png" alt="あなたの今を聞かせて！テレワークと私の暮らし｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>ウィズコロナ社会の“新しい生活様式” として、在宅勤務を取り入れる企業が増えて、テレワークが急速に普及しています。そこでテレワークを経験したブランシエラクラブ会員のみなさんに、今の思いを聞いてみました！テレワークで意識や働き方はどんなふうに変化したのでしょうか？</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/enquete/cafe01/q1__ttl.png" alt="仕事場は「リビング・ダイニング」が5割！個室が取れなくてガマンしている人も多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/enquete/cafe01/q1__ttl-sp.png" alt="仕事場は「リビング・ダイニング」が5割！個室が取れなくてガマンしている人も多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p>自宅での仕事場を尋ねたところ、なんと二人に一人は「リビング・ダイニング」を使っていることがわかりました。ダイニングテーブルやリビングの片隅に置いたデスクでパソコンを開き、幼い子どもの様子を見守りながらテレワーク。そんな子育てママやパパの奮闘する姿も目に浮かびます。次いで多いのが「自分の部屋」。なるほど、約3割の人はちゃんと個室を用意しているんですね。たしかに仕事に集中したいなら、個室が理想的。でも、現実は部屋数が足りなくて、仕方なくリビングやダイニングで仕事をしている人も多いのでは？<br>どんな工夫をしているのか興味津々です。</p>
						</div>
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/enquete/cafe01/q1__img@2x.png" alt="自宅での仕事場の割合：円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/enquete/cafe01/q1__img-sp@2x.png" alt="自宅での仕事場の割合：円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:335px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec01__ttl@2x.png" alt="メリットは「通勤時間がない」がダントツ！家族と過ごす時間が増えたことを喜ぶ声も｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec01__ttl-sp@2x.png" alt="メリットは「通勤時間がない」がダントツ！家族と過ごす時間が増えたことを喜ぶ声も｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec01__img@2x.png" alt="上：通勤電車内 image　下：家族と一緒の部屋で仕事をしている image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>テレワークになってよかったと感じるのは、「通勤時間がない」こと。そう答えた人が圧倒的でした。特に首都圏では満員電車での通勤ストレスから解放された喜びは大きいようです。やっぱり、ギュウギュウ詰めの電車に長時間揺られるのは誰だってイヤですよね。通勤時間がなくなったおかげで、子どもと遊ぶ時間が増えたり、読書や勉強、趣味の時間が持てるなど、心にもゆとりが生まれた人は多いはず。これもテレワークの大きな恩恵だといえるでしょう。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec01__img01-sp@2x.png" alt="通勤電車内 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							なかには「飼い犬とずっと一緒にいられる♪」、「ランチの後にお昼寝ができる♪」と喜ぶ人もいて、頬がゆるみます。また、通勤やオフィス業務での人との接触がなくなったため、「新型コロナウイルスに感染するリスクが減った」ことに安堵する人も大勢いました。テレワークの普及で、一刻も早く感染が防止されますように！
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec01__img02-sp@2x.png" alt="家族と一緒の部屋で仕事をしている image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec02__ttl@2x.png" alt="オンとオフが切り替えにくいのが悩み　運動不足になりがちなのも気をつけたい｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec02__ttl-sp@2x.png" alt="オンとオフが切り替えにくいのが悩み　運動不足になりがちなのも気をつけたい｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec02__img@2x.png" alt="上：ソファでゴロンと怠ける image　下：子供に邪魔さられて仕事に集中できない image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>慣れないテレワークを始めて、困ったことも聞いてみました。目立ったのが、「仕事とプライベートの切り替えが難しい」という悩み。朝決まった時間に出社し、仕事を終えたら帰宅するという従来の通勤スタイルが、自然とオン･オフの切り替えスイッチの役割を果たしていたのでしょう。たしかに家だとついソファでゴロンと怠けたり、逆にズルズル仕事を続けてしまいそうです。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec02__img01-sp@2x.png" alt="ソファでゴロンと怠ける image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">

							子育て中の人の悩みでは、「子どもに邪魔されて集中できない」が目立ちました。リモート会議中に子どもがはしゃいだり、飼い猫がニャーと登場して冷や汗をかいた経験、あなたにもありませんか？「Wi-Fi環境が不安定で会議が途切れる」「パソコンの動きが遅い」など、仕事環境の悩みも切実。これ、結構ストレスになるので、機器を買い替えるなどして早めに改善することをおすすめします。もうひとつ、忘れてならないのが、運動不足になりがちだということ。散歩やストレッチを毎日の習慣にしちゃいましょう。
							<figure>
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec02__img02-sp@2x.png" alt="子供に邪魔さられて仕事に集中できない image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
							</figure>

						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec03__ttl@2x.png" alt="散歩、筋トレなど体を動かしてストレス解消！好きな音楽や香りで気分転換をするのもいい｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec03__ttl-sp@2x.png" alt="散歩、筋トレなど体を動かしてストレス解消！好きな音楽や香りで気分転換をするのもいい｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec03__img@2x.png" alt="上：テラスで仕事をしている女性 image　下：アロマオイルを香らせてながら仕事をしている image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>テレワークで感じるストレスの解消法も気になるところ。みなさん、十人十色のやり方でストレスを発散しているようですが、参考になるものをちょっと並べてみますね。「時間を決めて休憩し、散歩に出る」「筋トレと読書」「ランニング」「好きな音楽を聴く」「ガーデニング」「美味しい料理とお酒」「愛猫と遊ぶ」……。体を動かして気分転換をしている人が多いと感じました。なかには「寝る！」という人も。短時間の睡眠は、確かにリフレッシュ効果がありそう。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec03__img01-sp@2x.png" alt="テラスで仕事をしている女性 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							生活空間と同じ場で働くことによるイライラを減らすために、デスクに観葉植物を置く、壁に絵を飾る、心地よいBGMを流す、アロマオイルを香らせるなど、五感に気持ちいい仕事環境をつくることもおすすめします。また、ストレスを溜めないためには、規則正しい生活をすることが大切。起きたらストレッチをする、仕事を始める前に着替えるなど、自分なりのルールを決めてはいかがですか？
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec03__img02-sp@2x.png" alt="アロマオイルを香らせてながら仕事をしている image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp center" loading="lazy">
						</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3">
					<figure>
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__ttl@2x.png" alt="椅子、証明、エアコンなど設備の工夫で快適に。簡単リフォームでワークスペース確保も！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__ttl-sp@2x.png" alt="椅子、証明、エアコンなど設備の工夫で快適に。簡単リフォームでワークスペース確保も！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__img@2x.png" alt="上：快適なテレワーク環境 image　下：家を購入する image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>快適なテレワーク環境をつくるために、みなさんいろんな工夫をしている様子。<br>パソコンデスク、オフィスチェア、ヘッドセットの購入、エアコンの交換、明るさの調整できる照明の設置など、けっこう設備にお金をかけていることがわかります。変わったところでは、「フットマッサージ器を足下に置いて、マッサージを行なう」という人もいました。足つぼを刺激すると、なるほど疲れに効きそうですね。また、ビデオ会議で気になるのが室内の映り込み。「部屋の模様替えをした」「バーチャル背景を取り入れた」「お洒落なパーティションを買った」など、生活感が丸見えにならないように気をつかっています。
							</p>
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__img01-sp@2x.png" alt="快適なテレワーク環境 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							<p class="mb3 mb0_sp">ちょっとハッとしたのが、仕事専用の部屋をつくるために「家を買った」という人がいたこと。思い切って「プラス１」の家に住み替える方法もあるんですね。<br>リビングやダイニングで仕事をしている場合、一角をロールスクリーンやパーティションで間仕切りして、「書斎コーナー」をつくり出している人も見受けられます。“新しい生活様式”として在宅勤務は今後も定着しそうですから、いっそ簡単リフォームで、リビングの一部などに壁を立てて“おこもり部屋”をつくってもよさそうですね。
							</p>
								<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__img02-sp@2x.png" alt="家を購入する image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb3_sp center" loading="lazy">
							<div class="cafe-report__link">
								<a href="https://www.haseko.co.jp/hrf/reform/special/R_and_Magazine/01/index.html" target="_blank" data-ga-click="cafe1_1">
									<figure>
										<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__btn@2x.png" alt="快適なワーキングスペースをつくりたい方はこちら（長谷工リフォームへのリンクボタン）｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/enquete/cafe01/sec04__btn-sp@2x.png" alt="快適なワーキングスペースをつくりたい方はこちら（長谷工リフォームへのリンクボタン）｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec05__ttl@2x.png" alt="テレワークおもしろエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/enquete/cafe01/sec05__ttl-sp@2x.png" alt="テレワークおもしろエピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<figure>
					<img src="<?php echo $img_url ?>/enquete/cafe01/sec05__img@2x.png" alt="エピソード紹介｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/enquete/cafe01/sec05__img-sp@2x.png" alt="エピソード紹介｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo $img_url ?>/enquete/cafe01/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/enquete/cafe01/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
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
