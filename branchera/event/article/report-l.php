<?php
//base
include ("../../function.php");
$content = get_id_data('4005');
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
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<!-- section -->
			<section class="main__item" id="report">

				<img data-src="../../lib/img/event/report-l/h2.png"
				data-srcset="../../lib/img/event/report-l/h2-sp@2x.png 600w ,../../lib/img/event/report-l/h2@2x.png"
				alt="長谷工ならではの技術見学会 Vol.2 レポート"
				class="u-img__max">

				<h2 class="u-ttl__l mt3">通常は、一般非公開。<br>プロのためのプレゼンテーションスペース「LIPS」。</h2>
				<div class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/event/report-l/img02.png"
					data-retina="../../lib/img/event/report-l/img02@2x.png"
					alt="LIPS"
					style="max-width:287px;"
					class="u-img__max">
				</div>
				<img
				data-src="../../lib/img/event/report-l/img01.png"
				data-retina="../../lib/img/event/report-l/img01@2x.png"
				alt="LIPS"
				style="max-width:383px;"
				class="u-img__max">
				<p>天候に恵まれ、穏やかな小春日和となった2016年1月16日（土）、長谷工が運営するマンションのプレゼンテーションスペース「LIPS」にて<strong>最新のマンション設備や仕様の技術見学会を開催</strong>しました。</p>
				<p>普段は一般非公開の「LIPS」は、長谷工がマンションデベロッパーに<strong>企画設計・仕様設定の提案や新技術・新商品の情報発信を実施する場</strong>として運営されており、多種多様な実物展示の数々に、ご参加のみなさまも興味深くご見学くださいました。</p>



			</section>

			<section class="main__item">
				<h4 class="u-ttl__l">見学会レポート</h4>
				<img class="ml3" src="../../lib/img/event/report-l/img03@2x.png" align="right" width="170" height="109"  >
				<p>今回の見学会では総勢21名の会員さまにお集りいただき、午前と午後の二回にわけてご案内させていただきました。</p>
				<p>当日は下図のアルファベットの順にご案内。
					<br> 最新の設備や仕様を、実際に見て、触れながら、マンション設備の裏話などを聞いていただき、見学のみなさまも驚きの連続でした。
				</p>
				<p class="center"><img src="../../lib/img/event/report-l/img04.png" alt="建物平面図" style="max-width:556px;" class="u-img__max"></p>
			</section>
		</div>

		<section class="main__item">

			<div class="rep01">
				<div class="wrapper wide">
					<h3><img src="../../lib/img/event/report-l/h3-01.png" alt="01 江口統括室長からのご挨拶"><p><span>01</span> 江口統括室長からのご挨拶</p></h3>
					<div class="content">
						<img align="right" class="ml20" src="../../lib/img/event/report-l/img05.png" alt="長年にわたってマンション設計に携わってきた江口統括室長。" />
						<p>ご案内させていただいたのは、30年以上にわたってマンションの設計に携わってきた長谷工コーポレーションの設計部門エンジニアリング事業部・江口統括室長。</p>
						<p>マンション検討の際も、なかなか直接話を聞く機会がない設計者の登場は、<strong>より多くの方により快適な暮らしのための知識を持っていただければという思い</strong>から実現。</p>
						<p>現在進行形で多彩なマンションの設計を手掛ける江口統括室長の登場に、見学のみなさまの期待も高まりました。</p>
					</div>
				</div>
			</div>



			<div class="rep02">
				<div class="wrapper wide">
					<h3>
						<img src="../../lib/img/event/report-l/h3-02.png"
						alt="02 プロフェッショナルの現場"><p>
							<span>02</span> プロフェッショナルの現場</p>
						</h3>
						<div class="content">
							<p>最初にご見学いただいたのは、タイルやバルコニー手すり、玄関扉などがずらりと並ぶ<strong>外装材エリア</strong>。</p>
							<div class="u-float__left u-position__center">
								<img
								data-src="../../lib/img/event/report-l/img07.png"
								data-retina="../../lib/img/event/report-l/img07@2x.png"
								alt="種類の豊富さに、ご参加のみなさまもびっくり"
								style="max-width:230px !important;">
							</div>
							<p>江口統括室長が設計者ならではの視点で解説しながら、みなさまには、実際に触れていただきながらご見学。</p>
							<img
							data-src="../../lib/img/event/report-l/img06.png"
							data-retina="../../lib/img/event/report-l/img06@2x.png"
							alt="外装材エリア"
							style="max-width:330px !important;"
							class="u-img__max">
						</div>
					</div>
				</div>

				<div class="rep01">
					<div class="wrapper wide">
						<h3><img src="../../lib/img/event/report-l/h3-03.png" alt="03 気持ちよく暮らす工夫"><p><span>03</span> 気持ちよく暮らす工夫</p></h3>
						<div class="content">

							<div class="u-float__left">
								<img
								data-src="../../lib/img/event/report-l/img08.png"
								data-retina="../../lib/img/event/report-l/img08@2x.png"
								alt="タオルかけだけでもこんなに種類があります。"
								style="max-width:240px !important; "
								class="u-img__max">
							</div>
							<p>「LIPS」でご提案している設備には、長年マンションづくりに関わってきた長谷工ならではのノウハウがぎっしり。<br> そして、そのノウハウの奥底には、<strong>できる限り長い期間にわたり、快適に暮らしていただきたい</strong>という長谷工の理念がしっかり息づいています。</p>
							<p>たとえばタオル掛け。以前はハンガー部分がスイングする可動タイプもありましたが、タオルを取り換える際にハンガー部分が壁に当たることで壁下地のボードの劣化が早まるという経験から、現在は固定タイプに統一されています。</p>



							<p class="center sp"><img src="../../lib/img/event/report-l/img08.png" alt="タオルかけだけでもこんなに種類があります。" /></p>
							<p class="mb2 center"><img src="../../lib/img/event/report-l/img09.png" alt="カーテンボックスと排気スリーブの紹介です。" /></p>
							<p>カーテンボックスは、カーテン開閉による摩耗により将来のリフォームコストが大きくなってしまう壁紙ではなく、樹脂を活用したものを開発・提案しています。</p>
							<p>排気スリーブの紹介（1.住まう方の健康への配慮を追求、 2.騒音の遮断・空気の美しさ・換気量の大きさ、 3.車のマフラーメーカーと共同開発）などに、みなさま、何度も大きく頷きながら見学されていました。</p>
						</div>
					</div>
				</div>

				<div class="rep02">
					<div class="wrapper wide">
						<h3><img src="../../lib/img/event/report-l/h3-04.png" alt="04 マンション技術の最新事情"><p><span>04</span> マンション技術の最新事情</p></h3>
						<div class="content">
							<div class="u-float__left u-position__center">

								<img data-src="../../lib/img/event/report-l/img10.png"
								data-retina="../../lib/img/event/report-l/img10@2x.png"
								alt="生まれたばかりの技術を活かした「サイホン排水システム」。"
								style="max-width:228px !important;"
								class="u-img__max">
							</div>
							<p>続いて見学していただいたのは、長谷工が現在新しく提案している、生まれたばかりの技術を活かした設備。</p>
							<p>傾斜をつけずに水の流れを生み出すサイホン排水システムという技術は、実際に水の流れを実験しながらご紹介。</p>

							<div class="u-position__center">
								<img
								data-src="../../lib/img/event/report-l/img11.png"
								data-retina="../../lib/img/event/report-l/img11.png"
								alt="「サイホン排水システム」は優れた建材・設備を表彰する「建材設備大賞」において最も評価の高い「大賞」を受賞！"
								width="184"
								>
								<img
								data-src="../../lib/img/event/report-l/img12.png"
								data-retina="../../lib/img/event/report-l/img12@2x.png"
								alt="サイホン排水システム"
								style="max-width:400px !important;"
								>
						</div>

						<p>下の階に水が落ちる力を利用して排水管の中に引く力を発生させることで、排水管の小口径化を実現したこのシステムでは、水廻りスペースと排水立て管（上の階から下へと排水をするための排水管）の距離を離すことができるため、<strong>水廻りのレイアウトの自由度が高まる技術として注目</strong>されています。傾斜がないのに勢いよく流れる水に、みなさまからは驚きの声が上がりました。</p>

						<div class="area04">
							<p>他にも、収納スペースを最大限に活用できるフレキシブル折れ戸や、開き戸を簡単に引き戸にリフォームするための技術を、実際にみなさまの手で扉を動かしていただきながら、ご紹介しました。</p>
						</div>

					</div>
				</div>
			</div>

			<div class="rep01">
				<div class="wrapper wide">
					<h3><img src="../../lib/img/event/report-l/h3-05.png" alt="05 身近な発見から生まれた快適設備"><p><span>05</span> 身近な発見から生まれた快適設備</p></h3>
					<div class="content">
						<p>続いて見学いただいたのは「ごみ箱を置くためのスペース」「奥行きのあるアメニティスペース」「取り出しやすく見た目にきれいな収納棚」「二人並んで朝の準備ができるスペース」など、<strong>女性社員のアイデアがぎっしりと詰め込まれた洗面化粧台</strong>。女性はもちろん男性の見学者も「確かにこの形だとうれしい」と納得のご様子でした。</p>
						<img data-src="../../lib/img/event/report-l/img14.png"
						data-retina="../../lib/img/event/report-l/img14@2x.png"
						alt="男性の見学者も納得。アイデア満載の洗面化粧台。"
						class="u-img__max">
						<p>他にも、「<strong>腰かけて靴を履くことができる玄関の工夫</strong>」や、入居者さまとの対話からヒントを得た「<strong>住まう方らしく廊下を演出できるマグネットボード</strong>」など、身近な声や発見から生まれた快適設備をご紹介しました。</p>
					</div>
				</div>
			</div>

			<div class="rep02">
				<div class="wrapper wide">
					<h3><img src="../../lib/img/event/report-l/h3-06.png" alt="06 先進設備いっぱいのモデルルーム"><p><span>06</span> 先進設備いっぱいのモデルルーム</p></h3>
					<div class="content">
						<div class="u-position__center u-float__right">
							<img
							data-src="../../lib/img/event/report-l/img15.png"
							data-retina="../../lib/img/event/report-l/img15@2x.png"
							alt="「防犯性」と「通風性」を両立した、新しい発想のサッシ「ブリーシア」。"
							style="max-width:277px !important;"
							class="u-img__max">
						</div>
						<p>いよいよ見学会はモデルルームへ。<br>今回は、長谷工が現在提案している<strong>最新のマンション住戸仕様である「Be-Next L」</strong>をご体感いただきました。</p>
						<p>ライフスタイルの変化や、活用できる土地状況の変化などを考慮しプランニングに取り組んだこの空間では、「<strong>フレキシブルに間取りをアレンジできる引き戸</strong>」や、「<strong>通気性とプライバシー性を両立する玄関窓</strong>」などの説明を聞きながら、みなさま、ご自身が気になる場所を実際に動かしたり、触れてみたりしながら、一つひとつの設備に盛り込まれているアイデアと快適性を確かめておられました。</p>
						<div class="u-position__center">
							<img
							data-src="../../lib/img/event/report-l/img16.png"
							data-retina="../../lib/img/event/report-l/img16@2x.png"
							alt="高さ約2.2mを確保した「ハイサッシ」。"
							class="u-img__max">
						</div>
					</div>
				</div>
			</div>

			<div class="rep01">
				<div class="wrapper wide">
					<h3><img src="../../lib/img/event/report-l/h3-07.png" alt="07 他にも細かな工夫と驚きが盛りだくさん"><p><span>07</span> 他にも細かな工夫と驚きが盛りだくさん</p></h3>
					<div class="content">
						<p>およそ1時間に及ぶ見学会では、<strong>このページでは紹介しきれない工夫や驚きがたくさんありました</strong>。</p>
						<div class="u-float__left u-position__center">
							<img
							data-src="../../lib/img/event/report-l/img17.png"
							data-retina="../../lib/img/event/report-l/img17@2x.png"
							alt="人感センサーで照明をon/off！"
							style="max-width:262px !important;"
							class="u-img__max">
						</div>
						<p>たとえばマンションの玄関などに使われている人感センサー照明の技術を活用した、手をかざすだけで照明をon/offできる照明スイッチパネル。これによって、今までのスイッチでは<strong>どうしても周辺の壁紙に付着してしまっていた汚れを解消</strong>できるようになります。</p>
						<div class="u-float__right u-position__center">
							<img
							data-src="../../lib/img/event/report-l/img18.png"
							data-retina="../../lib/img/event/report-l/img18@2x.png"
							alt="見た目にもこだわったメールボックスです。"
							style="max-width:248px!important;"
							class="u-img__max">
						</div>
						<p>ICカードで利用するメールボックスは、便利で安心なだけでなく、見た目にも美しく、見学の方も実際にICカードをかざしてみて驚きの声をあげていました。</p>
						<p>他にも、設計はしてみたけれどもコストが上がりすぎたために採用されなかった設備の紹介や、実際に10年使用した排気ダストの汚れ具合など、様々な裏話、こぼれ話もお聞きいただきました。</p>
					</div>
				</div>
			</div>

			<div class="rep02">
				<div class="wrapper wide">
					<h3><img src="../../lib/img/event/report-l/h3-08.png" alt="08 参加された方の声"><p><span>08</span> 参加された方の声</p></h3>
					<div class="content">
						<div class="u-float__right u-position__center">
							<img src="../../lib/img/event/report-l/img19.png" alt="アンケートにご記入いただきました" />
						</div>
						<p>見学会の最後には、参加されたみなさまの感想をうかがう<strong>アンケートを実施</strong>しました。</p>
						<p>みなさま、「興味深かった」「面白かった」「楽しめた」とご回答。江口統括室長の話に「分かりやすく、今後モデルルームを見る際の参考になった」というお言葉もいただきました。</p>

						<div class="mb3">
							<div class="u-only__pc">
								<img
								data-src="../../lib/img/event/report-l/img20@2x.png"
								alt="アンケート結果"
								class="u-img__max">
							</div>
							<div class="u-only__sp">
								<a href="../../lib/img/event/report-l/img20@2x.png" class="mfp-btn__img">
									<img
									data-src="../../lib/img/event/report-l/img20-sp@2x.png"
									alt="アンケート結果"
									class="u-img__max">
								</a>
							</div>
						</div>

						<img
						data-src="../../lib/img/event/report-l/img20-1.png"
						data-srcset="../../lib/img/event/report-l/img20-1-sp@2x.png 450w,../../lib/img/event/report-l/img20-1@2x.png"
						alt="アンケート後には、長谷工の最新マンション情報やブランドチョコ、防災セットなどが入ったお土産をお持ち帰りいただきました。"
						style="max-width:570px;"
						class="u-img__max">
					</div>
				</div>
			</div>

			<div class="rep01 mb4">
				<div class="wrapper wide">

					<h3 class="lips"><img src="../../lib/img/event/report-l/h3-09.png" alt="LIPS見学会を終えて"><p><span>LIPS</span> 見学会を終えて</p></h3>

					<div class="content">
						<p class="center tb"><img src="../../lib/img/event/report-l/img21.png" alt="マンションのすべてに関わる長谷工だから生み出すことができた、快適のためのさまざまな工夫とアイデアに出会えました！" /></p>
						<p class="sp" style="font-size:130%;color:#ff7100;font-weight:bold;">マンションのすべてに関わる長谷工だから生み出すことができた、快適のためのさまざまな工夫とアイデアに出会えました！</p>
						<p class="center tb"><img src="../../lib/img/event/report-l/img22.png" alt="紹介された色々な設備には、長年の経験はもちろん、グループの販売会社からフィードバックされるマンションを検討されている方の声、管理会社から寄せられる実際に住んでいただいている方の声など、さまざまな情報がしっかりと活かされていました。見た目だけではなく、本質が大事なんですね。" /></p>
						<p class="center sp"><img src="../../lib/img/event/report-l/img22-sp.png" alt="紹介された色々な設備には、長年の経験はもちろん、グループの販売会社からフィードバックされるマンションを検討されている方の声、管理会社から寄せられる実際に住んでいただいている方の声など、さまざまな情報がしっかりと活かされていました。見た目だけではなく、本質が大事なんですね。" /></p>
					</div>
				</div>
			</div>
		</section>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
