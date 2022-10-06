<?php
//base
include ("../../function.php");
$content = get_id_data('11012');
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

		<div class="main__wrapper enq06">

			<section class="main__item">
				<h2 class="u-ttl__l">満足度・意識度調査アンケートより</h2>
				<div class="u-assist_enq_low05">
					回答期間　：　2018年4月2日（月）～2018年4月15日（日）<br>
					回答者数　：　計1,282名
				</div>

				<figure>
					<img
					data-src="../../lib/img/enquete/report06/main-v.png"
					data-retina="../../lib/img/enquete/report06/main-v@2x.png"
					alt="ブランシエラクラブ 満足度・意識度調査"
					style="max-width:738px;"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/enquete/report06/main-v_sp.png"
					data-retina="../../lib/img/enquete/report06/main-v_sp@2x.png"
					alt="ブランシエラクラブ 満足度・意識度調査"
					style="max-width:632px;"
					class="u-img__max u-only__sp">
				</figure>

			</section>

			<div class="enq06__main">

				<section class="main__item">
					<h2 class="u-ttl mb3">
						<img
						data-src="../../lib/img/enquete/report06/sec01-ttl.png"
						data-retina="../../lib/img/enquete/report06/sec01-ttl@2x.png"
						alt="お料理動画を毎週更新しているのをご存知ですか？"
						style="max-width:738px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="../../lib/img/enquete/report06/sec01-ttl_sp.png"
						data-retina="../../lib/img/enquete/report06/sec01-ttl_sp@2x.png"
						alt="お料理動画を毎週更新しているのをご存知ですか？"
						style="max-width:633px;"
						class="u-only__sp u-img__max"
						>
					</h2>
					<div class="enq06__cnt">
						<div class="enq06-box">
							<div class="enq06-box__row">
								<div class="enq06-box__item">
									<ul class="enq06-box__chklist section01">
										<li>毎週更新している「お料理動画」をご存知の方は、全体の16.5%</li>
										<li>男女比は男性平均が14.7％、女性平均が20.7%で女性の方が認識している</li>
										<li>女性20代以下（32.1%）、女性50代（21.6%）に特に認知度が高い</li>
									</ul>
								</div>
							</div>
						</div>

						<p>さまざまな情報を発信する「ブランシエラマガジン」では、現在、お料理動画を更新しています。これまでもお片付けのマンガコラムやお部屋のメンテナンスに関する情報などをご紹介しているので、ぜひチェックしてみてくださいね。</p>
						<div class="enq06__fffbg">
							<h3 class="center">
								<img
								data-src="../../lib/img/enquete/report06/sec01-cooklng__ttl.png"
								data-retina="../../lib/img/enquete/report06/sec01-cooklng__ttl@2x.png"
								alt="うちのご飯は世界イチ・今さら聞けない料理のアレコレ"
								style="max-width:692px;"
								class="u-img__max center u-only__pc">
								<img
								data-src="../../lib/img/enquete/report06/sec01-cooklng__ttl_sp.png"
								data-retina="../../lib/img/enquete/report06/sec01-cooklng__ttl_sp@2x.png"
								alt="うちのご飯は世界イチ・今さら聞けない料理のアレコレ"
								style="max-width:583px;"
								class="u-img__max u-only__sp">
							</h3>
							<div class="enq06__fffbg_box enq06__fffbg_sec01">
								<p class="mb3">家事に仕事に子育てに…毎日忙しい家族が、もっと簡単で美味しいご飯を作るために奮闘する物語です。月に1回オリジナルレシピをご紹介。その他の週では、今さら聞けない料理の基本を、動画で分かりやすく解説しています。</p>
								<div class="flex between">
									<div class="w50 center mb3">
										<a href="<?php echo $base_url ?>/magazine/article/recipe06.php" class="enq06_cooking">
											<h4 class="enq06_cooking__ttl center" style="font-feature-settings: 'palt' 1;">あさりとキャベツのパスタ</h4>
											<figure class="center">
												<img
												data-src="../../lib/img/enquete/report06/sec01-movie1.png"
												data-retina="../../lib/img/enquete/report06/sec01-movie1@2x.png"
												alt="うちのご飯は世界イチ「あさりとキャベツのパスタ」"
												style="max-width:306px;"
												class="u-img__max u-only__pc">
												<img
												data-src="../../lib/img/enquete/report06/sec01-movie1_sp.png"
												data-retina="../../lib/img/enquete/report06/sec01-movie1_sp@2x.png"
												alt="うちのご飯は世界イチ・今さら聞けない料理のアレコレ"
												style="max-width:430px;"
												class="u-img__max center u-only__sp">
											</figure>
											<div class="center sec01_item_link">
												<p class="enq06__link-btn sec01_item_link">詳しくはこちら</p>
											</div>
										</a>
									</div>
									<div class="w50 u-only__pc">
										<a href="<?php echo $base_url ?>/magazine/article/recipe-technic06.php" class="enq06_cooking">
											<h4 class="enq06_cooking__ttl">かつお昆布だしの取り方</h4>
											<figure>
												<img
												data-src="../../lib/img/enquete/report06/sec01-movie2.png"
												data-retina="../../lib/img/enquete/report06/sec01-movie2@2x.png"
												alt="今さら聞けない料理のアレコレ「かつお昆布だしの取り方」"
												style="max-width:306px;"
												class="u-img__max u-only__pc">
											</figure>
											<div class="center sec01_item_link">
												<p class="enq06__link-btn sec01_item_link">詳しくはこちら</p>
											</div>
										</a>
									</div>
								</div>
								<div class="position__center">
									<figure>
										<img
										data-src="../../lib/img/enquete/report06/sec01-mayu_comment.png"
										data-retina="../../lib/img/enquete/report06/sec01-mayu_comment@2x.png"
										alt="うちのご飯は世界イチ・今さら聞けない料理のアレコレ レシピ制作　森崎　繭香先生"
										style="max-width:654px;"
										class="u-img__max u-only__pc">
										<img
										data-src="../../lib/img/enquete/report06/sec01-mayu_comment_sp.png"
										data-retina="../../lib/img/enquete/report06/sec01-mayu_comment_sp@2x.png"
										alt="うちのご飯は世界イチ・今さら聞けない料理のアレコレ レシピ制作　森崎　繭香先生"
										style="max-width:532px;"
										class="u-img__max u-only__sp">
									</figure>
								</div>
							</div>
						</div>
						<div>
							<div>
								<h3 class="mb3">
									<img
									data-src="../../lib/img/enquete/report06/sec01-2ndttl.png"
									data-retina="../../lib/img/enquete/report06/sec01-2ndttl@2x.png"
									alt="作ってみたいお料理やレシピは何ですか？"
									style="max-width:692px;"
									class="u-img__max u-only__pc">
									<img
									data-src="../../lib/img/enquete/report06/sec01-2ndttl_sp.png"
									data-retina="../../lib/img/enquete/report06/sec01-2ndttl_sp@2x.png"
									alt="作ってみたいお料理やレシピは何ですか？"
									style="max-width:583px;"
									class="u-img__max u-only__sp">
								</h3>
								<div class="mb3 center">
									<img
									data-src="../../lib/img/enquete/report06/sec01-2nd_cnt.png"
									data-retina="../../lib/img/enquete/report06/sec01-2nd_cnt@2x.png"
									alt="「作ってみたいお料理やレシピは何ですか？」回答上位"
									style="max-width:631px;"
									class="u-img__max center u-only__pc">
									<img
									data-src="../../lib/img/enquete/report06/sec01-2nd_cnt_sp.png"
									data-retina="../../lib/img/enquete/report06/sec01-2nd_cnt_sp@2x.png"
									alt="「作ってみたいお料理やレシピは何ですか？」回答上位"
									style="max-width:578px;"
									class="u-img__max center u-only__sp">

								</div>

							</div>
							<hr class="enq06__hr">
							<div class="center">
								<img
								data-src="../../lib/img/enquete/report06/sec01-comment02.png"
								data-retina="../../lib/img/enquete/report06/sec01-comment02@2x.png"
								alt="編集部からのコメント"
								style="max-width:570px;"
								class="u-img__max center u-only__pc">
								<img
								data-src="../../lib/img/enquete/report06/sec01-comment02_sp.png"
								data-retina="../../lib/img/enquete/report06/sec01-comment02_sp@2x.png"
								alt="編集部からのコメント"
								style="max-width:557px;"
								class="u-img__max center u-only__sp">

							</div>

						</div>
					</div>
				</section>
				<section class="main__item">
					<h2 class="u-ttl mb3">
						<img
						data-src="../../lib/img/enquete/report06/sec02-ttl.png"
						data-retina="../../lib/img/enquete/report06/sec02-ttl@2x.png"
						alt="ブランシエラクラブのイベントに応募したことがありますか？"
						style="max-width:738px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="../../lib/img/enquete/report06/sec02-ttl_sp.png"
						data-retina="../../lib/img/enquete/report06/sec02-ttl_sp@2x.png"
						alt="ブランシエラクラブのイベントに応募したことがありますか？"
						style="max-width:633px;"
						class="u-only__sp u-img__max"
						>
					</h2>
					<div class="enq06__cnt">
						<div class="enq06-box">
							<div class="enq06-box__row">
								<div class="enq06-box__item">
									<ul class="enq06-box__chklist section02">
										<li>「イベント実施」をご存知の方は、全体の64.3%</li>
										<li>実際に応募したことがある方は全体の17.5%</li>
										<li>応募経験がもっとも多い層は、男性が50代で25.7%、女性が60代で23.5％</li>
									</ul>
								</div>
							</div>
						</div>

						<p  class="mb3">ブランシエラクラブでは、みなさまと直接お会いするイベントを定期的に開催しています。食育を学べる田植え体験・野菜収穫体験や大人向けのゴルフレッスン、骨盤の調整…などなどバラエティも豊富！イベントの参加募集はメルマガで告知しております。</p>
						<div class="enq06__fffbg">
							<h3 class="enq06__fffbg_ttl enq06__icon_flag">
								<span>どんなイベントがあるの？</span>
							</h3>
							<div class="enq06__fffbg_box">
								<div class="flex between mb3">
									<div class="w50 mb3">
										<p class="enq06__fffbg_sec02">これまで開催したイベントのレポートも掲載しているのでぜひチェックしてみてください！</p>
									</div>
									<div class="w50">
										<figure>
											<img
											data-src="../../lib/img/enquete/report06/sec02-event__photo.png"
											data-retina="../../lib/img/enquete/report06/sec02-event__photo@2x.png"
											alt="過去に開催したイベント"
											style="max-width:315px;"
											class="u-img__max u-only__pc">
											<img
											data-src="../../lib/img/enquete/report06/sec02-event__photo_sp.png"
											data-retina="../../lib/img/enquete/report06/sec02-event__photo_sp@2x.png"
											alt="過去に開催したイベント"
											style="max-width:513px;"
											class="u-img__max u-only__sp">
										</figure>
									</div>
								</div>
								<div class="center">
									<a href="<?php echo $base_url ?>/event/" class="enq06__link-btn center">イベントページはこちら</a>
								</div>
							</div>
						</div>
						<div class="position__center">
							<h3 class="u-position__center mb2">
								<img
								data-src="../../lib/img/enquete/report06/sec02-column__ttl.png"
								data-retina="../../lib/img/enquete/report06/sec02-column__ttl@2x.png"
								alt="今後どのようなイベントを開催してほしいですか？"
								style="max-width:692px;"
								class="u-img__max u-only__pc">
								<img
								data-src="../../lib/img/enquete/report06/sec02-column__ttl_sp.png"
								data-retina="../../lib/img/enquete/report06/sec02-column__ttl_sp@2x.png"
								alt="今後どのようなイベントを開催してほしいですか？"
								style="max-width:583px;"
								class="u-img__max u-only__sp">
							</h3>
						</div>
						<div>
							<div>
								<div class="flex sec2-column">
									<div class="sec2-column__left">
										<img
										data-src="../../lib/img/enquete/report06/sec2-cplumn__01.png"
										data-retina="../../lib/img/enquete/report06/sec2-cplumn__01@2x.png"
										alt="子どもと参加できるもの！"
										style="max-width:209px;"
										class="u-img__max u-only__pc">
										<img
										data-src="../../lib/img/enquete/report06/sec2-cplumn__01_sp.png"
										data-retina="../../lib/img/enquete/report06/sec2-cplumn__01_sp@2x.png"
										alt="子どもと参加できるもの！"
										style="max-width:239px;"
										class="u-img__max u-only__sp">
									</div>
									<div class="sec2-column__right">
										<ul class="u-list__ul_dot">
											<li>子ども料理教室</li>
											<li>子どもの職業体験</li>
											<li>子ども向けコンサートや観劇</li>
										</ul>
									</div>
								</div>
								<div class="flex sec2-column">
									<div class="sec2-column__left">
										<img
										data-src="../../lib/img/enquete/report06/sec2-cplumn__02.png"
										data-retina="../../lib/img/enquete/report06/sec2-cplumn__02@2x.png"
										alt="新しいことやってみたい！"
										style="max-width:209px;"
										class="u-img__max u-only__pc">
										<img
										data-src="../../lib/img/enquete/report06/sec2-cplumn__02_sp.png"
										data-retina="../../lib/img/enquete/report06/sec2-cplumn__02_sp@2x.png"
										alt="新しいことやってみたい！"
										style="max-width:239px;"
										class="u-img__max u-only__sp">
									</div>
									<div class="sec2-column__right">
										<ul class="u-list__ul_dot">
											<li>乗馬体験</li>
											<li>熱気球体験</li>
											<li>ビール作り体験</li>
										</ul>
									</div>
								</div>
								<div class="flex sec2-column">
									<div class="sec2-column__left">
										<img
										data-src="../../lib/img/enquete/report06/sec2-cplumn__03.png"
										data-retina="../../lib/img/enquete/report06/sec2-cplumn__03@2x.png"
										alt="やっぱり知りたいマンション関係"
										style="max-width:209px;"
										class="u-img__max u-only__pc">
										<img
										data-src="../../lib/img/enquete/report06/sec2-cplumn__03_sp.png"
										data-retina="../../lib/img/enquete/report06/sec2-cplumn__03_sp@2x.png"
										alt="子どもと参加できるもの！"
										style="max-width:239px;"
										class="u-img__max u-only__sp">
									</div>
									<div class="sec2-column__right">
										<ul class="u-list__ul_dot">
											<li>リフォームの事例がたくさん見られる会</li>
											<li>住まいを美しく保つ掃除講座</li>
											<li>建設中のマンション見学</li>
										</ul>
									</div>
								</div>

							</div>
							<hr class="enq06__hr">
							<div class="center">
								<img
								data-src="../../lib/img/enquete/report06/sec02-comment02.png"
								data-retina="../../lib/img/enquete/report06/sec02-comment02@2x.png"
								alt="編集部からのコメント"
								style="max-width:570px;"
								class="u-img__max center u-only__pc">
								<img
								data-src="../../lib/img/enquete/report06/sec02-comment02_sp.png"
								data-retina="../../lib/img/enquete/report06/sec02-comment02_sp@2x.png"
								alt="編集部からのコメント"
								style="max-width:557px;"
								class="u-img__max center u-only__sp">

							</div>
						</div>


					</div>
				</section>
				<section class="main__item">
					<h2 class="u-ttl mb3">
						<img
						data-src="../../lib/img/enquete/report06/sec03-ttl.png"
						data-retina="../../lib/img/enquete/report06/sec03-ttl@2x.png"
						alt="住まいレージを利用したことがありますか？"
						style="max-width:738px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="../../lib/img/enquete/report06/sec03-ttl_sp.png"
						data-retina="../../lib/img/enquete/report06/sec03-ttl_sp@2x.png"
						alt="住まいレージを利用したことがありますか？"
						style="max-width:633px;"
						class="u-only__sp u-img__max"
						>
					</h2>
					<div class="enq06__cnt">
						<div class="enq06-box">
							<div class="enq06-box__row">
								<div class="enq06-box__item">
									<ul class="enq06-box__chklist section03">
										<li>「住まいレージ」の利用経験者は、全体で22.1％</li>
										<li>「住まいレージ」を知っているけれど、利用したことがない方が61.2％</li>
										<li>女性20代以下の利用経験者は32.1%ともっとも多い</li>
									</ul>
								</div>
							</div>
						</div>

						<p>長谷工IDを取得することでご利用いただけるオリジナルのポイントサービス「住まいレージ」。長谷工グループのサービスの利用やアンケートに回答することで「スマイル」をためることができます！</p>
						<div class="enq06__fffbg">
							<h3 class="enq06__fffbg_ttl enq06__icon_coin">
								<span>住まいレージって？</span>
							</h3>
							<div class="enq06__fffbg_box">
								<div class="flex flex__between">
									<div class="w50 enq06__fffbg_sec03 mb2_sp">
										<h4 class="enq06__fffbg_sec03_ttl sec03_ttl">住まいレージの<span class="sec03_ttl_strong">ため方</span></h4>
										<div class="enq06__fffbg_sec03_flex">
											<div class="enq06__fffbg_sec03_item">
												<p>ログイン</p>
											</div>
											<div class="enq06__fffbg_sec03_item">
												<p>アンケートに<br class="u-only__pc">回答</p>
											</div>
											<div class="enq06__fffbg_sec03_item">
												<p>不動産仲介<br class="u-only__pc">手数料</p>
											</div>
											<div class="enq06__fffbg_sec03_item">
												<p>ブランド家具<br class="u-only__pc">購入費用</p>
											</div>
										</div>
										<div class="center sec03_item_link">
											<a href="<?php echo $base_url ?>/smile/about-smile.php#save" class="enq06__link-btn">住まいレージの<span class="sec03_ttl_strong">ため方</span></a>
										</div>
									</div>
									<div class="w50 enq06__fffbg_sec03 mb2_sp">
										<h4 class="enq06__fffbg_sec03_ttl sec03_ttl">住まいレージの<span class="sec03_ttl_strong">使い方</span></h4>
										<div class="enq06__fffbg_sec03_flex">
											<div class="enq06__fffbg_sec03_item">
												<p>毎月変わる<br class="u-only__pc">抽選賞品に応募</p>
											</div>
											<div class="enq06__fffbg_sec03_item">
												<p>ハウス<br class="u-only__pc">クリーニング</p>
											</div>
											<div class="enq06__fffbg_sec03_item">
												<p>室内リフォーム<br class="u-only__pc">工事代金</p>
											</div>
											<div class="enq06__fffbg_sec03_item">
												<p>商品と交換</p>
											</div>
										</div>
										<div class="center">
											<a href="<?php echo $base_url ?>/smile/about-smile.php#use" class="enq06__link-btn sec03_item_link">住まいレージの使い方</a>
										</div>

									</div>
								</div>
							</div>
							<div>
								<div class="position__center">
									<h3 class="u-position__center mb2">
										<img
										data-src="../../lib/img/enquete/report06/sec03-column__ttl.png"
										data-retina="../../lib/img/enquete/report06/sec03-column__ttl@2x.png"
										alt="今後、住まいレージに欲しいサービス期待したいことはありますか？"
										style="max-width:692px;"
										class="u-img__max u-only__pc">
										<img
										data-src="../../lib/img/enquete/report06/sec03-column__ttl_sp.png"
										data-retina="../../lib/img/enquete/report06/sec03-column__ttl_sp@2x.png"
										alt="今後、住まいレージに欲しいサービス期待したいことはありますか？"
										style="max-width:583px;"
										class="u-img__max u-only__sp">
									</h3>
								</div>
							</div>

							<div class="mb3">
								<img
								data-src="../../lib/img/enquete/report06/sec03-column__cnt.png"
								data-retina="../../lib/img/enquete/report06/sec03-column__cnt@2x.png"
								alt="「今後、住まいレージに欲しいサービス期待したいこと」回答数上位"
								style="max-width:668px;"
								class="u-img__max u-only__pc">
								<img
								data-src="../../lib/img/enquete/report06/sec03-column__cnt_sp.png"
								data-retina="../../lib/img/enquete/report06/sec03-column__cnt_sp@2x.png"
								alt="「今後、住まいレージに欲しいサービス期待したいこと」回答数上位"
								style="max-width:542px;"
								class="u-img__max u-only__sp">


							</div>
							<div class="flex between u-only__pc">
								<div class="w50 u-only__pc">
									<div class="enq06__man">
										<p class="enq06__comment-box">
											<span>
												全国各地の名産品と交換できたらいいのに
											</span>
										</p>
									</div>
								</div>
								<div class="w50 u-only__pc">
									<div class="enq06__woman">
										<p class="enq06__comment-box">
											<span>
												家にまつわるものを購入できる商品券。家中の照明をLEDに替えたいな！
											</span>
										</p>
									</div>
								</div>
								<div class="w50 u-only__pc">
									<div class="enq06__man">
										<p class="enq06__comment-box">
											<span>
												誕生月に期間限定のポイントサービスがあると嬉しい！
											</span>
										</p>
									</div>
								</div>
								<div class="w50 u-only__pc">
									<div class="enq06__woman">
										<p class="enq06__comment-box">
											<span>
												ポイントアップキャンペーンでためやすくしてほしい！
											</span>
										</p>
									</div>
								</div>

							</div>
							<hr class="enq06__hr">
							<div class="center">
								<img
								data-src="../../lib/img/enquete/report06/sec03-comment02.png"
								data-retina="../../lib/img/enquete/report06/sec03-comment02@2x.png"
								alt="編集部からのコメント"
								style="max-width:570px;"
								class="u-img__max center u-only__pc">
								<img
								data-src="../../lib/img/enquete/report06/sec03-comment02_sp.png"
								data-retina="../../lib/img/enquete/report06/sec03-comment02_sp@2x.png"
								alt="編集部からのコメント"
								style="max-width:557px;"
								class="u-img__max center u-only__sp">

							</div>
						</div>
					</div>
				</section>
				<section class="main__item">
					<h2 class="u-ttl mb3">
						<img
						data-src="../../lib/img/enquete/report06/sec04__ttl.png"
						data-retina="../../lib/img/enquete/report06/sec04__ttl@2x.png"
						alt="優待サービスを利用したことがありますか？"
						style="max-width:738px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="../../lib/img/enquete/report06/sec04__ttl_sp.png"
						data-retina="../../lib/img/enquete/report06/sec04__ttl_sp@2x.png"
						alt="優待サービスを利用したことがありますか？"
						style="max-width:633px;"
						class="u-only__sp u-img__max"
						>
					</h2>
					<div class="enq06__cnt">
						<div class="enq06-box">
							<div class="enq06-box__row">
								<div class="enq06-box__item">
									<ul class="enq06-box__chklist section04">
										<li>「優待サービス」を利用したことがある方は、全体の5.5%</li>
										<li>サービス自体を知っている方は全体の72.4%と認知度は高め</li>
										<li>年代別に見ると、男性20代以下が8.7%、女性30代が8.8％で、他の年代と比較すると利用者が多かった</li>
									</ul>
								</div>
							</div>
						</div>

						<p>長谷工IDを取得することで、どなたでもご利用いただける「優待サービス」。ライブや舞台のチケットをお得にご購入いただける特典や、お引越しの割引サービスなど…今後も随時追加予定ですので、ぜひご利用ください！</p>
						<div class="enq06__fffbg">
							<h3 class="enq06__fffbg_ttl enq06__icon_none">
								<span>どんな優待サービスがあるの？</span>
							</h3>
							<div class="enq06__fffbg_box enq06__fffbg_sec05">
								<h4 class="enq06__fffbg_ttl_sub">いつでも・すぐに使える！<br class="u-only__sp">おトクな優待サービス</h4>
								<div class="enq06__sec05box mb3">
									<div class="enq06__sec05box_item">
										<p>舞台や音楽、<br class="u-only__pc">スポーツ観戦<br class="u-only__pc">などの<br class="u-only__pc">特別鑑賞チケット</p>
									</div>
									<div class="enq06__sec05box_item">
										<p>ブルーノート<br class="u-only__pc">グループ<br class="u-only__pc">ミュージック<br class="u-only__pc">チャージ<br class="u-only__pc">1,000円OFF</p>
									</div>

									<div class="enq06__sec05box_item">
										<p>お引越し<br class="u-only__pc">基本料金<br class="u-only__pc">特別割引</p>
									</div>
									<div class="enq06__sec05box_item">
										<p>たなかみ米<br class="u-only__pc">販売価格<br class="u-only__pc">5%OFF</p>
									</div>
								</div>
								<div class="center">
									<a href="<?php echo $base_url ?>/gift/" class="enq06__link-btn sec05_item_link center">優待サービス情報はこちら</a>
								</div>
							</div>
						</div>

						<hr class="enq06__hr">
						<div>
							<img
							data-src="../../lib/img/enquete/report06/sec04-comment02.png"
							data-retina="../../lib/img/enquete/report06/sec04-comment02@2x.png"
							alt="編集部からのコメント"
							style="max-width:576px;"
							class="u-img__max center u-only__pc">
							<img
							data-src="../../lib/img/enquete/report06/sec04-comment02_sp.png"
							data-retina="../../lib/img/enquete/report06/sec04-comment02_sp@2x.png"
							alt="編集部からのコメント"
							style="max-width:557px;"
							class="u-img__max center u-only__sp">

						</div>
					</div>
				</section>
				<section class="main__item">
					<h2 class="u-ttl mb3">
						<img
						data-src="../../lib/img/enquete/report06/sec05__ttl.png"
						data-retina="../../lib/img/enquete/report06/sec05__ttl@2x.png"
						alt="ブランシエラマガジンで興味のあるコンテンツはどれですか？"
						style="max-width:738px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="../../lib/img/enquete/report06/sec05__ttl_sp.png"
						data-retina="../../lib/img/enquete/report06/sec05__ttl_sp@2x.png"
						alt="ブランシエラマガジンで興味のあるコンテンツはどれですか？"
						style="max-width:633px;"
						class="u-only__sp u-img__max"
						>
					</h2>
					<div class="enq06__cnt">
						<div class="enq06-box">
							<div class="enq06-box__row">
								<div class="enq06-box__item">
									<ul class="enq06-box__chklist section05">
										<li>第1位は「片付け」で、全体の539名(42.0%)の方が選択</li>
										<li>第2位は「メンテナンス講座」で、全体の494名(38.5%)の方が選択</li>
										<li>第3位は「お料理レシピ」で、全体の353名(27.5%)の方が選択</li>
									</ul>
									<small class="u-small enq06-box__nth">※複数回答・N値=1,282</small>
								</div>
							</div>
						</div>
						<div class="center">
							<img
							data-src="../../lib/img/enquete/report06/sec05-graph.png"
							data-retina="../../lib/img/enquete/report06/sec05-graph@2x.png"
							alt="「ブランシエラマガジンで興味のあるコンテンツ」回答数グラフ"
							style="max-width:692px;"
							class="u-img__max center u-only__pc">
							<img
							data-src="../../lib/img/enquete/report06/sec05-graph_sp.png"
							data-retina="../../lib/img/enquete/report06/sec05-graph_sp@2x.png"
							alt="「ブランシエラマガジンで興味のあるコンテンツ」回答数グラフ"
							style="max-width:583px;"
							class="u-img__max center u-only__sp">

						</div>


						<hr class="enq06__hr">
						<div class="center">
							<img
							data-src="../../lib/img/enquete/report06/sec05-matome.png"
							data-retina="../../lib/img/enquete/report06/sec05-matome@2x.png"
							alt="編集部からのコメント"
							style="max-width:572px;"
							class="u-img__max center u-only__pc">
							<img
							data-src="../../lib/img/enquete/report06/sec05-matome_sp.png"
							data-retina="../../lib/img/enquete/report06/sec05-matome_sp@2x.png"
							alt="編集部からのコメント"
							style="max-width:557px;"
							class="u-img__max center u-only__sp">

						</div>
					</div>
				</section>
				<section class="main__item">
					<h2 class="u-ttl mb3">
						<img
						data-src="../../lib/img/enquete/report06/sec06-comment.png"
						data-retina="../../lib/img/enquete/report06/sec06-comment@2x.png"
						alt="編集部総括"
						style="max-width:738px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="../../lib/img/enquete/report06/sec06-comment_sp.png"
						data-retina="../../lib/img/enquete/report06/sec06-comment_sp@2x.png"
						alt="編集部総括"
						style="max-width:632px;"
						class="u-only__sp u-img__max"
						>
					</h2>
				</section>




			</div>

				<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
			</div>
		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
