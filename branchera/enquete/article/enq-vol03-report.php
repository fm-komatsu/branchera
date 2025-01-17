<?php
//base
include ("../../function.php");
$content = get_id_data('11006');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<h2 class="u-ttl__l">住まいの防犯意識に関するアンケートより</h2>
				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex">
							<p>今回は普段から気になる「住まいの防犯」について、アンケートを実施いたしました。 今回は、ALSOKさまにご協力いただき、 防犯のプロ目線のアドバイスも掲載していますので、最後までご覧ください♪</p>
							<div class="u-assist">
								<p>回答期間　：　2017年7月3日（月）～2017年7月12日（水）<br>回答者数　：　計612名</p>
							</div>
							<p>※ページの最後に、次回以降のアンケート等のご案内を記載しています。</p>
						</div>
					</div>
				</div>
			</section>

			<section class="mb6">
				<h4 class="u-ttl__m">みなさまの防犯意識</h4>
				<p><img data-src="../../lib/img/enquete/report03/img01@2x.jpg"
					data-retina="../../lib/img/enquete/report03/img01-sp@2x.jpg"
					alt="ご自宅の訪販について、不安に思うことはありうますか？"
					class="u-img__max" >
				</p>
				<p>「不安に思うことがある」と回答した方が全体の67％で、中でも40代以下の一人暮らしをされている女性に着目すると、86％もの方が「不安に思うことがある」と回答されました。
					一方で、60代以上の男性では「不安に思うことがある」と回答された方が50％と他性年代と比較すると圧倒的に低い値を示し、特に分譲集合住宅に住んでいる方は「マンションのセキュリティ対策については、万全だ」「管理人が在中する有人管理やセキュリティシステムが設置されている安心感があるため満足」と考えている方も多く見受けられる結果となりました。</p>
				</section>

				<section class="section wrapper mb6">
					<h4 class="u-ttl__m">意識、実行している防犯対策</h4>
					<p class="mb1"><img data-src="../../lib/img/enquete/report03/img02@2x.jpg"
						data-retina="../../lib/img/enquete/report03/img02-sp@2x.jpg"
						alt="普段から意識している防犯対策"
						class="u-img__max" >
					</p>
					<p class="mb6">ほぼすべての項目で女性が男性よりも高い値を示し、特に「就寝時には窓を閉める」「外から家の中が見えない工夫をする」は男女間で20％以上もの差があり、男女間で大きな意識の差が見られました。さらに女性では「まだ対策は不十分だと思う」「できる対策は行なっているが不安だ」と答える方も多く、意識を持って防犯対策を行なっているものの、まだ不安に思っている人も多い結果となりました。やはり、男性よりも女性のほうが防犯対策に対して高い意識を持っているようですね。<br>また、「近所の人に挨拶をする」と回答した方は、女性に比べ男性は少なく、特に50代以上で15％と低い値を示しています。この項目においても男女間で意識の差が見られましたが、住居タイプ別では特に差は見られませんでした。</p>

					<div class="u-assist mb3">
						<p class="mb5"><img data-src="../../lib/img/enquete/report03/img03@2x.png"
							alt="現在、設置・契約している防犯設備や防犯グッズ"
							class="u-img__max" >
						</p>
						<div class="flex between mb2">
							<div class="w50">
								<p><img data-src="../../lib/img/enquete/report03/img03-01@2x.png"
									data-retina="../../lib/img/enquete/report03/img03-01@2x.png"
									alt="全体の約3人に2人"
									class="u-img__max" >
								</p>
								<p>全体でみると最も多く設置されているのはモニタ付きドアホンで、約3人に2人が設置をしていました。<br>集合住宅だけでなく、戸建てにおいても約3人に2人がモニタ付きドアホンを設置しており、標準的な装備としての認識が広まってきていることが伺えます。</p>
							</div>
							<div class="w50">
								<p><img data-src="../../lib/img/enquete/report03/img03-02@2x.png"
									data-retina="../../lib/img/enquete/report03/img03-02@2x.png"
									alt="戸建て居住者の約3人に1人"
									class="u-img__max" >
								</p>
								<p>住居タイプ別でみると戸建てに住まわれている方の約3人に1人が玄関や庭に人感センサーライトを設置されてるという結果に。集合住宅のように周りに人がいないことが多い分、意識的に気を付けている方も多いようです。</p>
							</div>
						</div>

						<div class="flex between">
							<div class="w50">
								<p><img data-src="../../lib/img/enquete/report03/img03-03@2x.png"
									data-retina="../../lib/img/enquete/report03/img03-03@2x.png"
									alt="分譲集合住宅居住者の約2人に1人"
									class="u-img__max" >
								</p>
								<p>分譲集合住宅では、警備会社と契約しているという方が約半数いらっしゃいました。「管理人・警備員が24時間体制でいてくれるからこのマンションを選んだ」などという回答も目立ち、セキュリティ対策が充実しているかという点がマンションを選ぶ段階でのポイントになっていることがわかります。</p>
							</div>
							<div class="w50">
								<p><img data-src="../../lib/img/enquete/report03/img03-04@2x.png"
									data-retina="../../lib/img/enquete/report03/img03-04@2x.png"
									alt="賃貸集合住宅居住者の約3人に1人"
									class="u-img__max" >
								</p>
								<p>賃貸集合住宅では「防犯設備の設置や契約は行なっていない」という方が約3人に1人いらっしゃいました。防犯設備が備わっていない集合住宅も多く、また、「賃貸ゆえに設置の自由度が低い」などの回答もあり、自分が思ったように対策を施すことができない現状も見受けられます。そのことが賃貸集合住宅居住者の約3人に1人が現状の防犯対策について満足していないという回答結果に表れているのかもしれません。</p>
							</div>
						</div>
					</div>

					<p class="mb6">実行している防犯設備対策では住居タイプ別で違いがあり、戸建ては自発的に防犯設備を取り付けている方も多く見受けられますが、分譲集合住宅はもともと備わっている防犯設備のみで、安心している方が多く、追加で防犯対策を行なっている方は少ないという現状が伺えました。分譲住宅では「セキュリティがしっかりしたマンションだと思う」や「防犯設備が充実している」との回答が目立ち、その点が大きな安心感につながっていることが伺えます。</p>


					<h4 class="u-ttl__m">空き巣や泥棒などの被害経験</h4>
					<p><img data-src="../../lib/img/enquete/report03/img04@2x.jpg"
						data-retina="../../lib/img/enquete/report03/img04-sp@2x.jpg"
						alt="空き巣や泥棒などの被害経験"
						class="u-img__max" >
					</p>
					<p class="mb6">警察庁の調べによると、全国の空き巣の被害件数（認知件数）はなんと年間190万件（平成26年度）。今回のアンケートでも12人に1人が被害を経験されており、さらには被害に遭われた中の約13％の方が2回以上被害に遭われているという結果となりました。2回以上被害に遭われた方は窓が道路から死角になっていたり、隣家や庭木などと距離が近かったりと、侵入がしやすい構造になっている傾向が見られました。また、事務局にも「朝方に自宅のカギをガチャガチャされて開けられそうになったことがある」という経験をしたスタッフがいたり、いかに犯罪が身近に潜んでいるかを実感します。日頃用心をしていても、一瞬の隙に、被害に遭われてしまった方も見受けられました。普段から防犯設備について過信せず気を付けることで、避けることができる被害もあるかもしれません。</p>


					<h4 class="u-ttl__m">防犯のプロ「ALSOK」 ～防犯の心がけとおすすめ防犯対策～</h4>
					<p class="mb4">
						<img data-src="../../lib/img/enquete/report03/img-b@2x.png"
						alt="今回は、当社グループと提携警備会社のひとつである、防犯のプロALSOKさまから防犯対策についてアドバイスをもらいました。"
						class="u-img__max" >
					</p>

					<p class="mb4">
						<img
						data-src="../../lib/img/enquete/report03/img05.jpg"
						data-srcset="../../lib/img/enquete/report03/img05-sp@2x.jpg 500w ,../../lib/img/enquete/report03/img05@2x.jpg"
						alt="防犯のプロALSOK"
						class="u-img__max" >
					</p>

					<p style="color: #1075a6" class="mb2">これから迎える秋のおでかけシーズン<br><span style="font-size: 150%; font-weight: bold;">気持ちを引き締めて防犯対策を行ないましょう。</span></p>
					<p class="mb4">行楽の秋には家族そろってのおでかけの機会も増えるのではないでしょうか。留守の家は犯罪者にとって格好の的となるため、いつも以上に注意が必要です。最低限行うべき防犯対策や日常生活から取り入れたい防犯対策をご紹介いたします。</p>

					<div class="flex between mb3">
						<div class="w75">
							<h4 class="u-ttl__m">留守を知られない工夫を</h4>
							<p>家族旅行など、長期で家を空ける場合、しっかりと戸締りをしておくことはもちろんですが、留守をさとられないようにする工夫も大切です。新聞を止めたり、郵便物は郵便局の「不在留置サービス」を利用したりして、郵便受けにためないようにしましょう。また、消費電力の少ない電灯を夕方に点灯するようにセットしておくのも有効です。</p></div>
							<div class="w25"><img data-src="../../lib/img/enquete/report03/img06@2x.jpg"
								data-retina="../../lib/img/enquete/report03/img06-sp@2x.jpg"
								alt="Image"
								class="u-img__max" ></div>
							</div>
							<div class="flex between mb5">
								<div class="w25"><img data-src="../../lib/img/enquete/report03/img07@2x.jpg"
									data-retina="../../lib/img/enquete/report03/img07-sp@2x.jpg"
									alt="Image"
									class="u-img__max" ></div>
									<div class="w75">
										<h4 class="u-ttl__m">ご近所付き合いも有効な防犯対策</h4>
										<p>「ご近所付き合いは煩わしい」。そう思われている方も多いかもしれません。しかし、ご近所付き合いは防犯対策の有効な手段の一つとなります。お付き合いとまではいかなくても、あいさつをすることから始めてみましょう。顔を合わせあいさつを交わすなどお互いに認識しあうことが、有効な防犯対策となります。</p></div>
									</div>

									<p class="mb4"><img data-src="../../lib/img/enquete/report03/img08@2x.jpg"
										data-srcset="../../lib/img/enquete/report03/img08-sp@2x.jpg 450w ,../../lib/img/enquete/report03/img08@2x.jpg"
										alt="セキュリティ対策が整った分譲集合住宅に住むということも選択肢のひとつですが、何よりも自らが防犯対策に対して意識を高く持つことが大切です。どのような住まいでも防犯設備を整えるだけが防犯対策ではなく、一つの心掛けが防犯対策につながることもあります。今回のアンケート結果でもご近所付き合いなどの手軽に取り組める防犯対策でもまだ取り組めていない方が多くいらっしゃることが分かった一方で、「管理人さんにも何かあったら相談しやすいし、近所関係も良好で安心して暮らせている」「地域の目が安心につながっている」という回答もありました。普段から良好なご近所関係を築き、地域が一体となって防犯対策に取り組むことが安心を生みだす第一歩と言えそうです。"
										class="u-img__max" ></p>


										<h4 class="u-ttl__m">まとめ</h4>
										<p>今回は防犯対策に関するアンケートを実施しました。防犯のプロのALSOKさまに教えていただいた防犯対策に取り組み、日ごろから防犯に対する心構えをしましょう。</p>

									</section>



									<div class="u-assist">
										<h5 class="u-ttl__m">次回アンケート概要</h5>
										<div class="u-list__dl_table">

											<dl>
												<dt class="w15"><strong style="background: none; color: #333">受付期間</strong></dt>
												<dd class="w85">2017年10月3日（火）～2017年10月12日（木）</dd>
											</dl>
											<dl>
												<dt class="w15"><strong style="background: none; color: #333">対象者</strong></dt>
												<dd class="w85">長谷工IDをお持ちの方</dd>
											</dl>
											<dl>
												<dt class="w15"><strong style="background: none; color: #333">特典</strong></dt>
												<dd class="w85">ご回答いただいた方全員に300スマイルプレゼント<br><span class="cap">※スマイルの付与はアンケート終了から1週間程度とさせていただいております。<br>     また、複数ご回答いただいた場合でも付与スマイルは300とさせていただきます。 </span>
												</dd>
											</dl>
											<dl>
												<dt class="w15"><strong style="background: none; color: #333">回答方法</strong></dt>
												<dd class="w85">ページ下部の「第4回会員さまアンケートはこちらから」ボタンよりお答えください</dd>
											</dl>
											<dl>
												<dt class="w15"><strong style="background: none; color: #333">集計結果</strong></dt>
												<dd class="w85">本WEBサイトにて公開させていただきます</dd>
											</dl>
										</div>
									</div>

									<p class="mb6">本日より実施する第4回目のアンケートのテーマは「ペット」について。<br>ワンちゃんネコちゃんだけでなく、鳥や虫などを飼われている方も大歓迎。ペットを飼われている方もそうでない方も、奮ってご回答ください。。<br><br>最後になりますが、今回アンケートにご回答いただいた会員のみなさま、改めましてありがとうございました。アンケート結果は一部のみの掲載となりましたが、事務局ではすべてのアンケートを拝読させていただいております。みなさまの声を元に、随時改善に努めてまいりますので、今後もブランシエラクラブをぜひご活用ください。</p>


				<div class="center w50">
					<label class="u-btn_end u-position__center">アンケートは終了いたしました</label>
				</div>
								</section>
								<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>

							</article>
						</main>

						<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
						<?php  include ($inc_path."/lib/inc/footer.php"); ?>
						<?php  include ($inc_path."/lib/inc/foot.php"); ?>
