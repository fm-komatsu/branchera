<?php
//base
include ("../../function.php");
$content = get_id_data('11011');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2";

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
				<h2 class="u-ttl__l">光熱費に関するアンケートより</h2>
				<div class="u-assist_enq_low05">
					回答期間　：　2018年1月5日（金）～2018年1月14日（日）<br>
					回答者数　：　計1,080名
				</div>

				<figure>
					<img
					data-src="../../lib/img/enquete/report05/main-vis.png"
					data-retina="../../lib/img/enquete/report05/main-vis@2x.png"
					alt="みんなの光熱費"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/enquete/report05/main-vis__sp.png"
					data-retina="../../lib/img/enquete/report05/main-vis__sp@2x.png"
					alt="みんなの光熱費"
					class="u-img__max u-only__sp">
				</figure>

			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report05/obi_1.png"
					data-retina="../../lib/img/enquete/report05/obi_1@2x.png"
					alt="うちの光熱費って高いの？安いの？会員さまの光熱費事情"
					style="max-width:740px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report05/obi_1__sp.png"
					data-retina="../../lib/img/enquete/report05/obi_1__sp@2x.png"
					alt="うちの光熱費って高いの？安いの？会員さまの光熱費事情"
					style="max-width:633px;"
					class="u-only__sp u-img__max center"
					>
				</h2>
				<p class="u-position" style="font-feature-settings: 'palt' 1;">住まいの広さや家族構成、生活スタイルによって異なる「光熱費」。<br>毎月なんとなく支払っているけれど、実際にご自分の光熱費が高いのか、安いのかってなかなか分かりませんよね。今すぐできる節約術が気になる方は、ご参考にしてみてください。</p>
				<figure class="u-position__center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph01.png"
					data-retina="../../lib/img/enquete/report05/graph01@2x.png"
					alt="単身世帯光熱費：戸建て、集合住宅"
					style="max-width:740px;"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/enquete/report05/s_obi_single.png"
					data-retina="../../lib/img/enquete/report05/s_obi_single@2x.png"
					alt="単身世帯光熱費"
					style="max-width:632px;"
					class="u-img__max u-only__sp center">
					<img
					data-src="../../lib/img/enquete/report05/icn-detached.png"
					data-retina="../../lib/img/enquete/report05/icn-detached@2x.png"
					alt="戸建て"
					style="max-width:632px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph01a.png"
					data-retina="../../lib/img/enquete/report05/graph01a@2x.png"
					alt="単身世帯光熱費：戸建て"
					style="max-width:637px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/icn-complex.png"
					data-retina="../../lib/img/enquete/report05/icn-complex@2x.png"
					alt="集合住宅"
					style="max-width:632px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph01b.png"
					data-retina="../../lib/img/enquete/report05/graph01b@2x.png"
					alt="単身世帯光熱費：集合住宅"
					style="max-width:637px;"
					class="u-img__max u-only__sp center">
				</figure>
				<figure class="u-position__center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph02.png"
					data-retina="../../lib/img/enquete/report05/graph02@2x.png"
					alt="2人世帯光熱費：戸建て、集合住宅"
					style="max-width:740px;"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/enquete/report05/s_obi-nuclear.png"
					data-retina="../../lib/img/enquete/report05/s_obi-nuclear@2x.png"
					alt="2人世帯光熱費"
					style="max-width:632px;"
					class="u-img__max u-only__sp center">
					<img
					data-src="../../lib/img/enquete/report05/icn-detached.png"
					data-retina="../../lib/img/enquete/report05/icn-detached@2x.png"
					alt="戸建て"
					style="max-width:632px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph02a.png"
					data-retina="../../lib/img/enquete/report05/graph02a@2x.png"
					alt="2人世帯光熱費：戸建て"
					style="max-width:637px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/icn-complex.png"
					data-retina="../../lib/img/enquete/report05/icn-complex@2x.png"
					alt="集合住宅"
					style="max-width:632px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph02b.png"
					data-retina="../../lib/img/enquete/report05/graph02b@2x.png"
					alt="2人世帯光熱費：集合住宅"
					style="max-width:637px;"
					class="u-img__max u-only__sp center">
				</figure>
				<figure class="u-position__center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph03.png"
					data-retina="../../lib/img/enquete/report05/graph03@2x.png"
					alt="3人以上世帯光熱費：戸建て、集合住宅"
					style="max-width:740px;"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/enquete/report05/s_obi-family.png"
					data-retina="../../lib/img/enquete/report05/s_obi-family@2x.png"
					alt="3人世帯光熱費"
					style="max-width:632px;"
					class="u-img__max u-only__sp center">
					<img
					data-src="../../lib/img/enquete/report05/icn-detached.png"
					data-retina="../../lib/img/enquete/report05/icn-detached@2x.png"
					alt="戸建て"
					style="max-width:632px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph03a.png"
					data-retina="../../lib/img/enquete/report05/graph03a@2x.png"
					alt="3人以上世帯光熱費：戸建て"
					style="max-width:637px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/icn-complex.png"
					data-retina="../../lib/img/enquete/report05/icn-complex@2x.png"
					alt="集合住宅"
					style="max-width:632px;"
					class="u-img__max u-only__sp center mb2">
					<img
					data-src="../../lib/img/enquete/report05/graph03b.png"
					data-retina="../../lib/img/enquete/report05/graph03b@2x.png"
					alt="3人以上世帯光熱費：集合住宅"
					style="max-width:637px;"
					class="u-img__max u-only__sp">
				</figure>
				<figure class="u-position__center mb3">
					<img
					data-src="../../lib/img/enquete/report05/graph-legends.png"
					data-retina="../../lib/img/enquete/report05/graph-legends@2x.png"
					alt="凡例"
					style="max-width:697px;"
					class="u-img__max u-only__pc center">
					<img
					data-src="../../lib/img/enquete/report05/graph-legends__sp.png"
					data-retina="../../lib/img/enquete/report05/graph-legends__sp@2x.png"
					alt="凡例"
					style="max-width:600px;"
					class="u-img__max u-only__sp center mb2">
				</figure>
				<figure class="u-position__center mb2">
					<img
					data-src="../../lib/img/enquete/report05/reference01.png"
					data-retina="../../lib/img/enquete/report05/reference01@2x.png"
					alt="光熱費参考　出典：「家計調査結果」総務省統計局ホームページ"
					style="max-width:699px;"
					class="u-img__max u-only__pc center">
					<img
					data-src="../../lib/img/enquete/report05/reference__sp.png"
					data-retina="../../lib/img/enquete/report05/reference__sp@2x.png"
					alt="光熱費参考　出典：「家計調査結果」総務省統計局ホームページ"
					style="max-width:634px;"
					class="u-img__max u-only__sp center mb2">
				</figure>
				<p class="u-small">※ 出典：「家計調査結果」総務省統計局ホームページ<br> （<a href="https://www.e-stat.go.jp/stat-search/files?page=1&toukei=00200561&tstat=000000330001" class="u-icon" target="_blank">https://www.e-stat.go.jp/stat-search/files?page=1&toukei=00200561&tstat=000000330001</a>）<br>
					※ 光熱費の平均金額は選択いただいた金額の平均値より算出しております。<br>例7,001円~10,000円：8,500円
				</p>
			</section>

			<section class="main__item">

				<h3 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report05/obi_2.png"
					data-retina="../../lib/img/enquete/report05/obi_2@2x.png"
					alt="電気代がかかっていそうな 電化製品ランキング"
					style="max-width:741px;"
					class="u-img__max u-only__pc center"
					>
					<img
					data-src="../../lib/img/enquete/report05/obi_2__sp.png"
					data-retina="../../lib/img/enquete/report05/obi_2__sp@2x.png"
					alt="電気代がかかっていそうな 電化製品ランキング"
					style="max-width:633px;"
					class="u-only__sp u-img__max center"
					>
				</h3>

				<div>
					<p style="font-feature-settings: 'palt' 1;">家の中には、さまざまな電化製品がありますが、一番電気代がかかっていそうな電化製品はなんでしょうか？みなさまの回答をランキング形式でご紹介！</p>
					<figure class="u-position__center mb2">
						<img
						data-src="../../lib/img/enquete/report05/ranking.png"
						data-retina="../../lib/img/enquete/report05/ranking@2x.png"
						alt="一番電気代がかかっていそうな電化製品ランキング：1位エアコン 24.2%｜2位冷蔵庫 20%｜3位テレビ 13.8%｜4位洗濯機、洗濯乾燥機 10.3%"
						style="max-width:606px;"
						class="u-img__max mb2">

						<img
						data-src="../../lib/img/enquete/report05/rank4-10.png"
						data-retina="../../lib/img/enquete/report05/rank4-10@2x.png"
						alt="一番電気代がかかっていそうな電化製品ランキング5～10位：5位電子レンジ 8.4%｜6位照明器具 6.1%｜7位食器洗い乾燥機 3.2%｜8位パソコン 3.0%｜9位ドライヤー 2.7%｜10位炊飯器 2.4%"
						style="max-width:634px;"
						class="u-img__max u-only__pc center mb4">

						<img
						data-src="../../lib/img/enquete/report05/rank4-10__sp.png"
						data-retina="../../lib/img/enquete/report05/rank4-10__sp@2x.png"
						alt="一一番電気代がかかっていそうな電化製品ランキング5～10位：5位電子レンジ 8.4%｜6位照明器具 6.1%｜7位食器洗い乾燥機 3.2%｜8位パソコン 3.0%｜9位ドライヤー 2.7%｜10位炊飯器 2.4%"
						style="max-width:633px;"
						class="u-img__max u-only__sp center mb2">
					</figure>
					<p style="font-feature-settings: 'palt' 1;">1位は季節によっては長時間使いっぱなしになってしまいがちな「エアコン」でした。続いて生活には欠かせない「テレビ」「冷蔵庫」「洗濯機」と続きました。みなさまの選んだものはランクインしていましたか？</p>
				</div>

			</section>

			<section class="main__item enq-repo05__bg">
				<h3 class="enq-repo05__ttl mb3">
					<img
					data-src="../../lib/img/enquete/report05/break_ttl.png"
					data-retina="../../lib/img/enquete/report05/break_ttl@2x.png"
					alt="光熱費よりも何とかしたい！ 何とかしてほしい！と思っている出費は？"
					style="max-width:650px;"
					class="u-img__max u-only__pc u-position__center"
					>
					<img
					data-src="../../lib/img/enquete/report05/break_ttl__sp.png"
					data-retina="../../lib/img/enquete/report05/break_ttl__sp@2x.png"
					alt="光熱費よりも何とかしたい！ 何とかしてほしい！と思っている出費は？"
					style="max-width:557px;"
					class="u-only__sp u-img__max u-position__center"
					>
				</h3>
				<div class="u-assist_etc05">
					<div class="u-assist_etc05__row">
						<div class="enq-repo05">
							<div class="enq-repo05_epi_txt">
								<p class="enq-repo05_epi_comment_r_men_n"><span class="enq-repo05_epi_txt_l">お菓子代。</span><br class="u-only__sp"><span class="enq-repo05_epi_txt_m">ダイエットで食べてはいけない。</span><br class="u-only__sp"><span class="enq-repo05_epi_txt_s">（50代　男性）</span></p>
									<p class="enq-repo05_epi_comment_l_women_n"><span class="enq-repo05_epi_txt_l">食費。</span><span class="enq-repo05_epi_txt_m">2人住まいですがちょっと多め。忙しいとつい単価の高いお惣菜などに頼りがちですが、なるべく自炊して少し食費を減らそうと思っています。</span><br class="u-only__sp"><span class="enq-repo05_epi_txt_s">（40代　女性）</span></p>

									<p class="enq-serif enq-repo05_epi_comment_r">ダイエットなのに、ついつい買ってしまうお菓子…毎日忙しいとお惣菜に頼る気持ち…とてもよくわかります！食費は毎日のことですから、できるだけ抑えたいところですよね。<br>ブランシエラクラブでは、みなさまの食生活をサポートすべく、<a href="<?php echo $base_url ?>/magazine/index_comic02.php">「うちのご飯は世界イチ」という料理動画</a>を、毎週更新しています。ぜひ、毎日の食事にお役立てください！</p>
							</div>
						</div>
					</div>
				</div>
				<div class="u-assist_etc05">
					<div class="u-assist_etc05__row">
						<div class="enq-repo05">
							<div class="enq-repo05_epi_txt">
									<p class="enq-repo05_epi_comment_r_women_n"><span class="enq-repo05_epi_txt_l">出掛ける時の交通費。</span><span class="enq-repo05_epi_txt_m">交通系ICカードを使うので感覚がないが、一ヵ月に使用した料金を見ると、意外と高いです…</span><br class="u-only__sp"><span class="enq-repo05_epi_txt_s">(20代　女性)</span></p>
								<p class="enq-serif enq-repo05_epi_comment_l">確かに交通費がいくらかってあまり考えていないかもしれません。便利になった分、どれだけ使っているのかきちんと把握する必要がありそうですね。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="u-assist_etc05">
					<div class="u-assist_etc05__row">
						<div class="enq-repo05">
							<div class="enq-repo05_epi_txt">
									<p class="enq-repo05_epi_comment_l_men_n"><span class="enq-repo05_epi_txt_m">無駄に買ってしまう旅行の<span class="enq-repo05_epi_txt_l">お土産</span>。</span><br class="u-only__sp"><span class="enq-repo05_epi_txt_s">(40代　男性)</span></p>
								<p class="enq-serif enq-repo05_epi_comment_r">旅行に行くと、つい「せっかく来たんだから♪」と、ついつい買いすぎてしまうことってありますよね。</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report05/obi_3.png"
					data-retina="../../lib/img/enquete/report05/obi_3@2x.png"
					alt="教えて！みんなの光熱費節約術"
					style="max-width:740px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report05/obi_3__sp.png"
					data-retina="../../lib/img/enquete/report05/obi_3__sp@2x.png"
					alt="教えて！みんなの光熱費節約術"
					style="max-width:633px;"
					class="u-only__sp u-img__max center"
					>
				</h2>

				<p style="font-feature-settings: 'palt' 1;">毎月の家計節約のためにも、光熱費の節約アイディアを取り入れていきたいですよね！そこでブランシエラクラブ会員さまが実践されている、光熱費節約術を募集いたしました。毎日のコツコツが、実を結ぶ…はず！光熱費が気になる方は、参考にしてみてください。</p>

				<div class="enq-repo05__column">
					<div class="enq-repo05__column_item">
						<h4 class="enq-repo05__column_ttl mb3">
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl01.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl01@2x.png"
							alt="エアコンの使用時間・設定温度を調整"
							style="max-width:289px;"
							class="u-img__max u-only__pc column__ttl_img"
							>
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl01__sp.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl01__sp@2x.png"
							alt="エアコンの使用時間・設定温度を調整"
							style="max-width:507px;"
							class="u-only__sp u-img__max u-position__center"
							>
						</h4>
						<p style="font-feature-settings: 'palt' 1;">
							たくさんの節約術が寄せられた「エアコン」。エアコンを長時間使用せずに、季節に合わせて、こたつや湯たんぽ、扇風機と併用されているという意見が寄せられました。また設定温度をこまめに調整している方も多いようです。
						</p>
					</div>
					<div class="enq-repo05__column_item">
						<h4 class="enq-repo05__column_ttl mb3">
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl02.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl02@2x.png"
							alt="まめにスイッチOFF"
							style="max-width:208px;"
							class="u-img__max u-only__pc column__ttl_img"
							>
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl02__sp.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl02__sp@2x.png"
							alt="まめにスイッチOFF"
							style="max-width:507px;"
							class="u-only__sp u-img__max u-position__center"
							>
						</h4>
						<p style="font-feature-settings: 'palt' 1;">
							さまざまな電化製品に関して、「まめにスイッチをOFF」にするという節約術が寄せられました。これは意識するだけで、すぐにも試せるアイディアのひとつですね。季節家電や照明など、ぜひ実践してみてください。
						</p>
					</div>
					<div class="enq-repo05__column_item">
						<h4 class="enq-repo05__column_ttl mb3">
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl03.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl03@2x.png"
							alt="冷蔵庫の詰めすぎ、開けっ放しNG!"
							style="max-width:197px;"
							class="u-img__max u-only__pc column__ttl_img"
							>
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl03__sp.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl03__sp@2x.png"
							alt="冷蔵庫の詰めすぎ、開けっ放しNG!"
							style="max-width:507px;"
							class="u-only__sp u-img__max u-position__center"
							>
						</h4>
						<p style="font-feature-settings: 'palt' 1;">
							ずっと電気を使う電化製品のひとつが、冷蔵庫ですよね。冷蔵庫の節約術は、冷蔵庫内にモノを詰めすぎないように、そしてドアの開閉時間を意識している人が多い結果となりました。冷蔵庫の開閉はご家族みんなで協力できるといいですね！
						</p>
					</div>
					<div class="enq-repo05__column_item">
						<h4 class="enq-repo05__column_ttl mb3">
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl04.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl04@2x.png"
							alt="続けてお風呂に入って、ガス代節約！"
							style="max-width:256px;"
							class="u-img__max u-only__pc column__ttl_img"
							>
							<img
							data-src="../../lib/img/enquete/report05/saving_ttl04__sp.png"
							data-retina="../../lib/img/enquete/report05/saving_ttl04__sp@2x.png"
							alt="続けてお風呂に入って、ガス代節約！"
							style="max-width:507px;"
							class="u-only__sp u-img__max u-position__center"
							>
						</h4>
						<p style="font-feature-settings: 'palt' 1;">
							毎日のお風呂に関する回答も多数寄せられました。中でも多かったのは、続けてお風呂に入る…というもの。お風呂の時間をまとめることで、追い焚きの回数が減り、ガス代の節約につながります！特に冬場は、より節約につながりますので、ぜひご家族で取り入れてみてくださいね。
						</p>
					</div>
				</div>



			</section>

			<section class="main__item">
				<h2 class="u-ttl mb3">
					<img
					data-src="../../lib/img/enquete/report05/obi_4.png"
					data-retina="../../lib/img/enquete/report05/obi_4@2x.png"
					alt="ブランシエラクラブペットの名前ランキング"
					style="max-width:741px;"
					class="u-img__max u-only__pc"
					>
					<img
					data-src="../../lib/img/enquete/report05/obi_4__sp.png"
					data-retina="../../lib/img/enquete/report05/obi_4__sp@2x.png"
					alt="ブランシエラクラブペットの名前ランキング"
					style="max-width:633px;"
					class="u-only__sp u-img__max center"
					>
				</h2>
				<p class="u-clearfix">電気をつけっぱなしで外出！水道がチョロチョロと出しっぱなしだった！など、電気・ガス・水道に関する失敗談を募集いたしました。おもわず「あるある」と頷いてしまう内容ばかり。自分は大丈夫…と思わずに、これを機に、ぜひ注意していきましょう。</p>
					<div class="enq-repo05_epi">
						<div class="enq-repo05_epi_txt">
							<p class="enq-serif_repo05 enq-repo05_epi_comment_r_women">冬は、エアコンを使わずに電気ストーブを使用しているため、在宅時はつけっぱなしにしている。近くに買い物に出て帰ったら、電気ストーブがついたままだった。近くに部屋着がかかっており、一瞬頭の中が真っ白になった。<br><span class="enq-repo05_epi_txt_s">（40代　女性）</span></p>
						</div>
					</div>
					<div class="enq-repo05_epi">
						<div class="enq-repo05_epi_txt">
							<p class="enq-serif_repo05 enq-repo05_epi_comment_l_men">風呂の栓をし忘れてお湯をためようとしてしまい、そのままお湯が排水されてしまっていたことに気が付かず、しばらく時間が過ぎていったことがありました。もったいない。<br><span class="enq-repo05_epi_txt_s">（40代　男性）</span></p>
						</div>
					</div>
					<div class="enq-repo05_epi">
						<div class="enq-repo05_epi_txt">
							<p class="enq-serif_repo05 enq-repo05_epi_comment_r_women">実家の話ですが、トイレの温水便座が故障していて水が少しずつ漏れていたのに気付かず、水道会社から値段が３倍以上になっているとの連絡が来てようやく発覚。泣く泣く支払うことに。大変な目にあいました。<br><span class="enq-repo05_epi_txt_s">（30代　女性）</span></p>
						</div>
					</div>
			</section>

				<section class="main__item">

					<h2 class="u-position__center mb3">
						<img
						data-src="../../lib/img/enquete/report05/cnt_bottom_ttl.png"
						data-retina="../../lib/img/enquete/report05/cnt_bottom_ttl@2x.png"
						alt="暮らしの節約も長谷工にお任せ！長谷工グループ 商品・サービスのご紹介"
						style="max-width:428px;"
						class="u-img__max">
					</h2>
					<ul class="u-assist_blue">
						<!--li>
							<p>毎月の電気料金をもっとお得に！</p>
							<a href="http://www.haseko.co.jp/ha/service/sm/" target="_blank">長谷工アネシス　「マンション向け電力サービス」</a>
						</li-->
						<li>
							<p>住まいレージを活用して、節約設備にリフォーム！</p>
							<a data-scroll href="<?php echo $base_url ?>/smile/#use-smile">ブランシエラクラブ　「住まいレージ」</a>
						</li>
					</ul>
				</section>

				<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
			</div>
		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
