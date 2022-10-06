<?php
//base
include ("../../function.php");
$content = get_id_data('11015');
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

		<div class="main__wrapper enq07">

			<section class="main__item">
				<h2 class="u-ttl__l">インターネット利用に関するアンケートより</h2>
				<div class="u-assist_enq_low07">
					回答期間　：　2018年7月2日（月）～2018年7月16日（月）<br>
					回答者数　：　計1,862名
				</div>

				<figure>
					<img
					data-src="<?php echo $img_url ?>/enquete/report07/main-v.png"
					data-retina="<?php echo $img_url ?>/enquete/report07/main-v@2x.png"
					alt="ブランシエラクラブ みんなのインターネット利用状況　結果発表"
					style="max-width:738px;"
					class="u-img__max u-only__pc">
					<img
					data-src="<?php echo $img_url ?>/enquete/report07/main-v-sp.png"
					data-retina="<?php echo $img_url ?>/enquete/report07/main-v-sp@2x.png"
					alt="ブランシエラクラブ みんなのインターネット利用状況　結果発表"
					style="max-width:632px;"
					class="u-img__max u-only__sp">
				</figure>

			</section>

			<div class="enq07__main">

				<section class="main__item enq07__sec01 enq07sec01">
					<div class="enq07sec01__row">
						<h2 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec01-ttl.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec01-ttl@2x.png"
							alt="まずはインターネットの利用に関するアンケート結果です!"
							style="max-width:740px;"
							class="u-img__max u-only__pc center"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec01-ttl-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec01-ttl-sp@2x.png"
							alt="まずはインターネットの利用に関するアンケート結果です!"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h2>
						<div class="enq06__cnt">
							<h3 class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q01.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q01@2x.png"
								alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
								style="max-width:738px;"
								class="u-img__max u-only__pc"
								>
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q01-sp.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q01-sp@2x.png"
								alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
								style="max-width:633px;"
								class="u-only__sp u-img__max"
								>
							</h3>

							<div class="enq06__fffbg mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q01-graph.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q01-graph@2x.png"
								alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯｜集計グラフ"
								style="max-width:690px;"
								class="u-img__max u-only__pc center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q01-graph-sp.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q01-graph-sp@2x.png"
								alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯｜集計グラフ"
								style="max-width:583px;"
								class="u-img__max u-only__sp">

							</div>
							<div class="enq06__fffbg mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q01-comment.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q01-comment@2x.png"
								alt="どの世代も夜の落ち着いた時間帯にネットを利用されることが多いようですね！"
								style="max-width:633px;"
								class="u-img__max u-only__pc center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q01-comment-sp.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q01-comment-sp@2x.png"
								alt="どの世代も夜の落ち着いた時間帯にネットを利用されることが多いようですね！"
								style="max-width:583px;"
								class="u-img__max u-only__sp">

							</div>
							<p class="mb2" style="padding : 24px;">夜19時～24時の間にネットで情報収集している方が、全体の41.3％ともっとも多く、続いて特に決まっていない方が全体の22.8%、朝が8.8%でした。この結果は年代別に見てもほぼ同様で、みなさま夜の帰宅前後から就寝までの落ち着いた時間にネットを利用されることが多いという結果となりました。</p>
							<h3 class="u-ttl mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q02.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q02@2x.png"
								alt="普段利用しているSNSは？"
								style="max-width:738px;"
								class="u-img__max u-only__pc"
								>
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q02-sp.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q02-sp@2x.png"
								alt="普段利用しているSNSは？"
								style="max-width:633px;"
								class="u-only__sp u-img__max"
								>
							</h3>

							<div class="enq06__fffbg mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q02-sns.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q02-sns@2x.png"
								alt="普段利用しているSNS｜集計結果"
								style="max-width:667px;"
								class="u-img__max u-only__pc center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q02-sns-sp.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q02-sns-sp@2x.png"
								alt="普段利用しているSNS｜集計結果"
								style="max-width:583px;"
								class="u-img__max u-only__sp center">

							</div>
							<div class="enq06__fffbg mb3">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q02-comment.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q02-comment@2x.png"
								alt="LINEが圧倒的1位！続いて、Facebook・YouTubeという結果に。幅広い世代でSNSが浸透していることがわかりました。"
								style="max-width:634px;"
								class="u-img__max u-only__pc center">
								<img
								data-src="<?php echo $img_url ?>/enquete/report07/sec01-q02-comment-sp.png"
								data-retina="<?php echo $img_url ?>/enquete/report07/sec01-q02-comment-sp@2x.png"
								alt="LINEが圧倒的1位！続いて、Facebook・YouTubeという結果に。幅広い世代でSNSが浸透していることがわかりました。"
								style="max-width:583px;"
								class="u-img__max u-only__sp">

							</div>
							<p class="mb2" style="padding : 24px;">約70%の方がLINEを利用しているという圧倒的な結果となりました。年齢や性別に関係なく、多くの方がLINEを利用し、幅広い世代でSNSが浸透していることがわかりました。</p>
						</div>
					</div>
				</section>
				<section class="main__item enq07__sec02 enq07sec02">
					<h2 class="u-ttl mb3">
						<img
						data-src="<?php echo $img_url ?>/enquete/report07/sec02-ttl.png"
						data-retina="<?php echo $img_url ?>/enquete/report07/sec02-ttl@2x.png"
						alt="ここからはブランシエラクラブサイトに関するアンケート結果です！"
						style="max-width:740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url ?>/enquete/report07/sec02-ttl-sp.png"
						data-retina="<?php echo $img_url ?>/enquete/report07/sec02-ttl-sp@2x.png"
						alt="ここからはブランシエラクラブサイトに関するアンケート結果です！"
						style="max-width:633px;"
						class="u-only__sp u-img__max"
						>
					</h2>

					<div class="enq06__cnt">
						<h3 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q1.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q1@2x.png"
							alt="ブランシエラクラブサイトを閲覧する目的は何ですか？"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q1-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q1-sp@2x.png"
							alt="ブランシエラクラブサイトを閲覧する目的は何ですか？"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h3>

						<div class="enq06__fffbg u-only__pc">
							<div class="enq07__flex3 mb2">
									<figure class="enq07__flex3_item">
											<a href="https://haseko.flpjp.com/externalUrlForLogin/ext_login_brc" target="_blank">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-01login.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-01login@2x.png"
										alt="1日1回ログインで5スマイルためたいから：37.5％"
										style="max-width:192px;"
										class="u-img__max u-only__pc">
										</a>
									</figure>


									<figure class="enq07__flex3_item">
										<a href="<?php echo $base_url; ?>/smile/">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-02lottery.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-02lottery@2x.png"
										alt="抽選商品に応募したいから：34.3％"
										style="max-width:192px;"
										class="u-img__max u-only__pc">
										</a>
									</figure>


									<figure class="enq07__flex3_item">
										<a href="<?php echo $base_url; ?>/hcg/hcg-event.php">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-03hcg.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-03hcg@2x.png"
										alt="長谷工グループの情報を見たいから：24.3％"
										style="max-width:192px;"
										class="u-img__max u-only__pc">
										</a>
									</figure>

							</div>
							<div class="enq07__flex4 mb5">

									<figure class="enq07__flex4_item">
										<a href="<?php echo $base_url; ?>/event/">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-04event.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-04event@2x.png"
										alt="イベントに応募したいから：22.4％"
										style="max-width:163px;"
										class="u-img__max u-only__pc">
										</a>
									</figure>


									<figure class="enq07__flex4_item">
										<a href="<?php echo $base_url; ?>/smile/#use-smile">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-05smile.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-05smile@2x.png"
										alt="住まいレージを利用したいから：21.5％"
										style="max-width:163px;"
										class="u-img__max u-only__pc">
										</a>
									</figure>

								<figure class="enq07__flex4_item">
									<a href="<?php echo $base_url; ?>/magazine/">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-06magazine.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-06magazine@2x.png"
										alt="片付けやお料理などの情報コンテンツを見たいから：20.1％"
										style="max-width:163px;"
										class="u-img__max u-only__pc">
									</a>
								</figure>
								<figure class="enq07__flex4_item">
									<a href="<?php echo $base_url; ?>/gift/">
										<img
										data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-07gift.png"
										data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-07gift@2x.png"
										alt="優待サービスを利用したいから：16.8％"
										style="max-width:163px;"
										class="u-img__max u-only__pc">
									</a>
								</figure>
							</div>
						</div>

						<div class="enq06__fffbg u-only__sp" style="padding : 4px;">

								<figure class="mb2">
									<a href="https://haseko.flpjp.com/externalUrlForLogin/ext_login_brc" target="_blank">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-01login-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-01login-sp@2x.png"
									alt="1日1回ログインで5スマイルためたいから：37.5％"
									style="max-width:579px;"
									class="u-img__max u-only__sp">
									</a>
								</figure>


								<figure class="mb2">
									<a href="<?php echo $base_url; ?>/smile/">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-02lottery-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-02lottery-sp@2x.png"
									alt="抽選商品に応募したいから：34.3％"
									style="max-width:579px;"
									class="u-img__max u-only__sp">
									</a>
								</figure>


								<figure class="mb2">
										<a href="<?php echo $base_url; ?>/hcg/hcg-event.php">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-03hcg-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-03hcg-sp@2x.png"
									alt="長谷工グループの情報を見たいから：24.3％"
									style="max-width:579px;"
									class="u-img__max u-only__sp">
									</a>
								</figure>

							<div class="flex sp-flex between mb2">
								<figure class="w50_sp">
									<a href="<?php echo $base_url; ?>/event/">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-04event-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-04event-sp@2x.png"
									alt="イベントに応募したいから：22.4％"
									style="max-width:276px;"
									class="u-img__max u-only__sp">
								</a>
								</figure>
								<figure class="w50_sp">
									<a href="<?php echo $base_url; ?>/smile/#use-smile">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-05smile-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-05smile-sp@2x.png"
									alt="住まいレージを利用したいから：21.5％"
									style="max-width:276px;"
									class="u-img__max u-only__sp">
								</figure>
							</div>
							<div class="flex sp-flex between mb2">
								<figure class="w50_sp">
									<a href="<?php echo $base_url; ?>/magazine/">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-06magazine-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-06magazine-sp@2x.png"
									alt="片付けやお料理などの情報コンテンツを見たいから：20.1％"
									style="max-width:276px;"
									class="u-img__max u-only__sp">
								</a>
								</figure>
								<figure class="w50_sp">
									<a href="<?php echo $base_url; ?>/gift/">
									<img
									data-src="<?php echo $img_url ?>/enquete/report07/sec02-a1-07gift-sp.png"
									data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a1-07gift-sp@2x.png"
									alt="優待サービスを利用したいから：16.8％"
									style="max-width:276px;"
									class="u-img__max u-only__sp">
								</a>
								</figure>
							</div>
						</div>
					</div>
					<div class="enq06__cnt">
						<h3 class="u-ttl mb4">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q2.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q2@2x.png"
							alt="ブランシエラクラブサイトの見やすさに満足していますか？"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q2-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q2-sp@2x.png"
							alt="ブランシエラクラブサイトの見やすさに満足していますか？"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h3>

						<div class="enq06__fffbg mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q2-graph.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q2-graph@2x.png"
							alt="ブランシエラクラブサイトの見やすさに満足していますか？｜集計結果"
							style="max-width:560px;"
							class="u-img__max u-only__pc center">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q2-graph-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q2-graph-sp@2x.png"
							alt="ブランシエラクラブサイトの見やすさに満足していますか？｜集計結果"
							style="max-width:583px;"
							class="u-img__max u-only__sp">

						</div>
						<div class="enq06__fffbg mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q2-comment.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q2-comment@2x.png"
							alt="どの世代も夜の落ち着いた時間帯にネットを利用されることが多いようですね！"
							style="max-width:633px;"
							class="u-img__max u-only__pc center">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q2-comment-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q2-comment-sp@2x.png"
							alt="どの世代も夜の落ち着いた時間帯にネットを利用されることが多いようですね！"
							style="max-width:583px;"
							class="u-img__max u-only__sp">

						</div>
					</div>
					<div style="padding : 0 24px;">
						<div class="balloon balloon_maxborder mb happy01">
							<div class="inner-border tanakami">
								<div>
									<p>字も大きく写真やイラストもふんだんに掲載されており見やすいです。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb happy02_r">
							<div class="inner_r">
								<div>
									<p>クリックしたページへの移行がとても速く快適。視覚的情報がキリッとしていて見やすい。情報の全体的ロケーションが目に飛び込んでくるので、興味がわき自然と読み進めるようになった。<br>抽選賞品の画像もわかりやすくて「あ！抽選！」と飛びつくようになった。もちろん賞品も毎回素敵。</p>
								</div>
							</div>
						</div>

						<div class="balloon balloon_maxborder mb unhappy01">
							<div class="inner-border__unhappy unhappy">
								<div>
									<p>サイトの全体構成がわかりにくい。見たいところにダイレクトに進みたいし、興味のない所もはっきり識別したい。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb unhappy02_r">
							<div class="inner_r">
								<div>
									<p>更新されたニュースがわかりにくい。また、毎日何かしらの変化がほしい。</p>
								</div>
							</div>
						</div>
					</div>
					<p class="mb4" style="padding : 0 24px;">貴重なご意見ありがとうございました。約80％の方に満足していただき大変うれしく思っております。みなさまによりわかりやすく快適にご覧いただけるよう、早速トップページから改善させていただきましたが、いかがでしょうか。新着情報が一目でわかるようになっていますので、ぜひご確認いただければと思います！</p>


					<div class="enq06__cnt">
						<h3 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q3.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q3@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-q3-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-q3-sp@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h3>

						<div class="enq06__fffbg">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-a3.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a3@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯｜集計グラフ"
							style="max-width:690px;"
							class="u-img__max u-only__pc center">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec02-a3-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec02-a3-sp@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯｜集計グラフ"
							style="max-width:583px;"
							class="u-img__max u-only__sp">

						</div>
						<p style="padding : 24px;">住まいレージでポイントをためるサービスや、イベントの充実をご希望される方が多く見られました。みなさまのご意見を参考に、少しでも実現できるよう検討させていただきます。すでに行なっているサービスをご回答された方もいらっしゃいましたので、今後はより多くの方に知っていただけるようにわかりやすくサービスを紹介していきたいと思います。</p>
					</div>

				</section>
				<section class="main__item enq07__sec03 enq07sec01">
					<div class="enq07__cnt">
						<h3 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-ttl.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-ttl@2x.png"
							alt="ブランシエラクラブの最新情報はメールマガジンから発信しています！"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-ttl-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-ttl-sp@2x.png"
							alt="ブランシエラクラブの最新情報はメールマガジンから発信しています！"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h3>
						<h4 class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-q1.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-q1@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-q1-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-q1-sp@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h4>
						<div class="u-ttl mb5">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-graph_mailmaga.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-graph_mailmaga@2x.png"
							alt="はい：75.0％　いいえ：25.0％"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-graph_mailmaga-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-graph_mailmaga-sp@2x.png"
							alt="はい：75.0％　いいえ：25.0％"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</div>
						<div class="mb4" style="padding : 0 24px;">
							<hr style="border-top : 1px solid #fff; padding : 0 24px;">
						</div>

						<h4 class="u-ttl mb0">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-q2.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-q2@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？届いてからどのタイミングでメルマガを見ますか？"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-q2-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-q2-sp@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？届いてからどのタイミングでメルマガを見ますか？"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</h4>
						<div class="u-ttl mb4">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-a2.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-a2@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-a2-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-a2-sp@2x.png"
							alt="パソコンやスマートフォンで、ネットを利用して情報収集する時間帯は？"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</div>
						<div class="mb4" style="padding : 0 24px;">
							<hr style="border-top : 1px solid #fff; padding : 0 24px;">
						</div>
						<div class="u-ttl mb3">
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-mailmagazine.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-mailmagazine@2x.png"
							alt="メールマガジンの配信は月に2回　月初と第3木曜日"
							style="max-width:738px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url ?>/enquete/report07/sec03-mailmagazine-sp.png"
							data-retina="<?php echo $img_url ?>/enquete/report07/sec03-mailmagazine-sp@2x.png"
							alt="メールマガジンの配信は月に2回　月初と第3木曜日"
							style="max-width:633px;"
							class="u-only__sp u-img__max"
							>
						</div>

						<p style="padding : 24px; color : #fff; font-feature-settings : 'palt';">みなさま、メールマガジンの配信日はご存知でしたか？会員さまに月に2回（月初と第3木曜日）、メールマガジンの配信を行なっています。新しいサービス情報やコンテンツ情報をいち早くお届けしていますので、配信日にはぜひチェックしてください！</p>
					</div>

				</section>
				<section class="main__item mb5">
					<div class="enq07__cnt">
						<p style="padding : 0 24px;">たくさんのご意見をお寄せいただきありがとうございました。今回は前回を超える、過去最高1,862名の方にアンケートを回答していただきました。</p><p style="padding : 0 24px;">ブランシエラクラブ事務局一同、みなさまの声をしっかり受け止め、これからのクラブ運営に反映していきたいと思います。新しいサービス情報やコンテンツ情報は、メールマガジンにて配信していきますので、こちらも是非ご覧ください。今後ともよろしくお願いいたします。</p>
					</div>
				</section>




			</div>

				<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
			</div>
		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
