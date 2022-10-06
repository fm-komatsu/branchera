<?php
//base
include ("../../function.php");
$content = get_id_data('4090');
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
			<div class="main__item">
				<section class="mb8">
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event/main-v@2x.jpg" class="u-img__max u-only__pc" alt="" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event/main-v-sp@2x.jpg" class="u-img__max u-only__sp" alt="" loading="lazy">
					</figure>
					<p>ブランシエラクラブ初のオンラインイベントでは、「うちのご飯は世界イチ」の監修をしてくださっている森崎繭香先生が、バル風レシピを教えてくださいました。「双方向で、みなさんと一緒にお料理を作るのは初めて」と楽しげな森崎先生の言葉から始まったレッスン♪ ご参加いただいたみなさんのキッチンからは、食材を用意する物音や楽しそうな会話など、リアルタイムなイベントならではのにぎやかな音声が聞こえていました！当日の様子を、ぜひイベント動画でご覧ください♪</p>
				<!--動画
				<div class="center mb2">
									<div class="event-online__video">
										<div class="event-online__video_base">
											<iframe class="event-online__video_emb" src="https://www.youtube.com/embed/77nnB8km37I?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>
											</iframe>
										</div>
							</div>
						</div>  -->
          <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=77nnB8km37I?rel=0" class="mfp-btn__video"><img src="<?php echo $img_url ?>/event/report-online-event/online_movie_mv_digest.jpg" alt="おうちでパーティーアクアパッツァ" class="u-img__max"></a></div>
					<?php if (!$ssoFlag == 1){ ?>
						<p class="center u-ttl__s u-font__bold">ログインして、イベントの完全版ムービーをチェック！</p>
					<?php } else { }; ?>
					<div class="u-btn-layout mt2 mb5">
						<div class="u-btn-layout__row center mb2_sp">
						<?php if (!$ssoFlag == 1){ ?>
							<a href="<?php echo $login_url ?>" class="u-btn-layout_red" data-ga-click="online_event_report1">
								ログインはこちら
							</a>
						</div>
						<?php } else {; ?>
							<a href="https://www.youtube.com/watch?v=8RD7jj4iN_Y?rel=0" target="_blank" class="u-btn_point mfp-btn__video mb3" style="margin-top : 8px;">完全版ムービーを観る</a>
							<?php };?>
					</div>
					<a href="http://mayucafe.com/" target="_blank" rel="nofollow">
						<img src="<?php echo $img_url?>/event/report-online-event/img01@2x.png" class="u-img__max u-only__pc" alt="" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event/img01-sp@2x.png" class="u-img__max u-only__sp" alt="" loading="lazy">
					</a>
				</section>
				<section class="mb7">
					<h4 class="u-font__r-online-event center">当日チャレンジしたメニューはこちら！</h4>
					<p class="mb5">チャレンジしたメニューは、「アクアパッツァ」「スパニッシュオムレツ」「アメリカンチェリーのコンポート」の3品！簡単に作ることができて、ボリューム感たっぷりのメニューです。「どんな味かな？」とワクワクして、つい手を伸ばしたくなりますね♪旬のアメリカンチェリーをスイーツにすることで季節感も味わえます。この3品を森崎先生が同時進行で作りながら、調理の目的やコツを教えてくださいました。それぞれの詳細レシピは以下の記事でご覧ください！</p>
					<div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event/img05@2x.jpg" class="u-img__max u-only__pc" alt="アクアパッツァのレシピはこちら" loading="lazy">
						</figure>
						<div>
						  <a href="<?php echo $base_url ?>/magazine/article/recipe-technic140.php" data-ga-click="online_event_report2">
								<figure>
									<img src="<?php echo $img_url?>/event/report-online-event/btn02@2x.jpg" class="u-img__max u-only__pc" alt="アクアパッツァのレシピはこちら" loading="lazy">
								</figure>
							</a>
						</div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event/img0607@2x.jpg" class="u-img__max u-only__pc" alt="スパニッシュオムレツ アメリカンチェリーのコンポート" loading="lazy">
						</figure>
						<div class="flex  u-img__max">
							<div class="event-online-btn">
								<a href="<?php echo $base_url ?>/magazine/article/recipe-technic141.php" data-ga-click="online_event_report3">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event/btn03@2x.jpg" class="u-img__max u-only__pc" alt="スパニッシュオムレツのレシピはこちら" loading="lazy">
									</figure>
								</a>
							</div>
							<div class="event-online-btn">
								<a href="<?php echo $base_url ?>/magazine/article/recipe-technic142.php" data-ga-click="online_event_report4">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event/btn04@2x.jpg" class="u-img__max u-only__pc" alt="アメリカンチェリーのコンポートのレシピはこちら" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event/img08@2x.jpg" class="u-img__max u-only__pc" alt="背景" loading="lazy">
						</figure>
					</div>
					<div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event/img05-sp@2x.png" class="u-img__max u-only__sp" alt="アクアパッツァのレシピはこちら" loading="lazy">
						</figure>
						<div>
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic140.php" data-ga-click="online_event_report2">
								<figure>
									<img src="<?php echo $img_url?>/event/report-online-event/btn02-sp@2x.png" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="アクアパッツァのレシピはこちら" loading="lazy">
								</figure>
							</a>
						</div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event/img06-sp@2x.png" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="スパニッシュオムレツ" loading="lazy">
						</figure>
						<div>
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic141.php" data-ga-click="online_event_report3">
								<figure>
									<img src="<?php echo $img_url?>/event/report-online-event/btn03-sp@2x.png" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="スパニッシュオムレツのレシピはこちら" loading="lazy">
								</figure>
							</a>
						</div>
						<figure>
							<img src="<?php echo $img_url ?>/event/report-online-event/img07-sp@2x.png" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="アメリカンチェリーのコンポート" loading="lazy">
						</figure>
						<div>
							<a href="<?php echo $base_url ?>/magazine/article/recipe-technic142.php" data-ga-click="online_event_report4">
								<figure>
									<img src="<?php echo $img_url?>/event/report-online-event/btn04-sp@2x.png" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="アメリカンチェリーのコンポートのレシピはこちら" loading="lazy">
								</figure>
					    </a>
						</div>
					</div>
				</section>
				<section class="mb7">
					<h4 class="u-ttl__m center">準備風景</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img09@2x.jpg" class="u-img__max mb1_sp" alt="準備風景" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img10@2x.jpg" class="u-img__max" alt="食材" loading="lazy">
						</figure>
					</div>
					<p>当日限られた時間で3品を完成させるために、参加者の方々には事前準備をお願いしていました。あさりの砂抜き、アメリカンチェリーの種抜き、それぞれにコツがあります。あさりの砂抜きは「あさりに海の浅瀬にいた頃を思い出してもらう」ことがポイントだそう。参加者の方々の様子を見ながら、森崎先生が丁寧にアドバイスをくれました。先生の丁寧な解説に、参加者の方からも早速質問が出ていました！</p>
				</section>
				<section class="mb7">
					<h4 class="u-ttl__m center">イベントスタート！</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img11@2x.jpg" class="u-img__max mb1_sp" alt="アメリカンチェリーの種を取り除く作業の解説" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img12@2x.jpg" class="u-img__max" alt="オンライン画面" loading="lazy">
						</figure>
					</div>
					<p class="mb5">「あらかじめ準備をお願いしましたが、できましたか？」と森崎先生。「ズッキーニがなくてきのこを用意した」と言う参加者の方には「きのこもおすすめです」とニッコリ。準備の１つの「アメリカンチェリーの種を取り除く作業」はあらかじめ準備できなかった参加者の方もいました。そこでアメリカンチェリーの種の取り除き方を森崎先生が丁寧に解説してくれます。</p>
					<div class="flex between mb4">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img13@2x.jpg" class="u-img__max" alt="スパニッシュオムレツ調理中" loading="lazy">
						</figure>
						<div class="w50">
						<p>当日参加された方たちは普段からよくお料理をされているようで、スパニッシュオムレツの食材を、包丁で手際よく切っていました。MCのAYAさんも「本当にみなさん、切るのが早くてびっくりしちゃいます」とコメント。お母さんと一緒に参加してくださった男の子は「お母さんと(具材を)切るの楽しかった」と話してくれました♪</p>
						</div>
					</div>
					<div class="airdam-back">
						<div class="airdam-flex airdam mb4">
							<figure class="w40">
								<img src="<?php echo $img_url?>/event/report-online-event/airdam@2x.png" class="u-img__max u-only__pc" style="max-width:318px;" alt="Air-DAM" loading="lazy">
								<img src="<?php echo $img_url?>/event/report-online-event/airdam-sp@2x.png" class="u-img__max u-only__sp" alt="Air-DAM" loading="lazy">
							</figure>
							<div class="w60">
								<p class="u-font__palt">今回のオンラインイベントは、ライブ配信サービス『Air-DAM（エアー・ダム）』を利用して行いました！Air-DAMでは、従来のWEB会議システムよりも「ライブ感」のある映像を、スマートフォンやタブレット端末から簡単に配信することができます。Air-DAMを使えば、オンラインでも臨場感のある映像を見ることができるため、物件をご紹介する際にも利用しています。</p><div class="airdam-btn">Air-DAMについて、詳しくは<a href="https://www.dji.co.jp/solution/air-dam.php" target="_blank" data-ga-click="online_event_report5" rel="nofollow" class="u-icon">こちら</a>をご覧ください</div>
							</div>
						</div>
					</div>
				</section>
				<section class="mb7">
					<h4 class="u-ttl__m center">イベント後半戦！</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img16@2x.jpg" class="u-img__max mb1_sp" alt="アクアパッツァ調理方法解説中" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img17@2x.jpg" class="u-img__max" alt="アクアパッツァの具材を火にかける" loading="lazy">
						</figure>
					</div>
					<p class="mb5">オンラインイベントもいよいよ後半戦！森崎先生がいるキッチンからは、美味しそうな香りがしてきました！参加者の方のキッチンからも、よりにぎやかな様子がうかがえます。アクアパッツァの具材を火にかけながら「フライパンが温まる前に魚を焼くと、皮が付いてしまうので注意が必要です」と森崎先生がポイントを教えてくれます。「アクアパッツァは汁を飛ばさなくても大丈夫？」との質問に、「大丈夫です！汁も一緒にスープとして召し上がってください！残った汁をパスタにすると美味しいですよ」と森崎先生。「それは美味しそうですね」とMCのAYAさんが合いの手を入れます。</p>
					<div class="flex between mb5">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event/img18@2x.jpg" class="u-img__max" alt="アメリカンチェリー調理方法解説中" loading="lazy">
						</figure>
						<div class="w50">
						<p>アクアパッツァ、スパニッシュオムレツの横で、アメリカンチェリーの入った鍋が沸騰してきました。「かきまわさなくてもいい？」という質問に、「混ぜるのは数回でOKです。鍋の大きさによって火を弱めます。ほとんど動かさなくて大丈夫です」と森崎先生。鍋の中身がどんどん加熱されると同時に、イベントの様子もヒートアップしていきます！</p>
						</div>
					</div>
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event/img19@2x.jpg" class="u-img__max" alt="アクアパッツァ スパニッシュオムレツ アメリカンチェリーのコンポート" loading="lazy">
					</figure>
					<p>おしゃれなバル風レシピができあがりました！オンラインイベント当初の「驚くほどあっという間にできますよ」という森崎先生の言葉通り、あっという間でしたが、濃密な時間でした！森崎先生の紫陽花をあしらったテーブルセッティングには「わぁ♪素敵！」というため息も。<br>アクアパッツァは、魚やあさりをはじめとして具材を色とりどりに盛り付けるのがポイント。盛り付け前に味見をして味加減を整えることを忘れずに。アクアパッツァのスープも一緒にいただきましょう♪ スパニッシュオムレツはケーキのようにカットしてお皿にのせると見た目がきれいです。アメリカンチェリーのコンポートは、バニラアイスにかける以外にもアレンジの仕方がいくつもありますよ♪</p>
				</section>
				<section class="mb7">
					<h4 class="u-ttl__m center">イベント中のご質問と先生のご回答！</h4>
					<p class="mb7 mb4_sp">イベント中には参加された方々やMCのAYAさん、視聴者の方からさまざまな質問がありました。その中からいくつかピックアップしてお伝えします！</p>
					<div class="event_comment">
						<div class="balloon balloon_widthmax mb fam2_r">
							<div class="inner-border_r">
								<div>
									<p>梅ジュースを作るとき、梅を冷凍してから作りますが、アメリカンチェリーは冷凍してからコンポートを作ってもよいですか？</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb mrsm">
							<div class="inner">
								<div>
									<p>大丈夫です。コンポートにする場合は、種を取り除いてから冷凍しましょう。<br>冷凍状態のまま砂糖をまぶす工程にうつれますよ。<br>ただ、冷凍してからコンポートを作ると煮崩れをしやすいです。コンポートにしてから冷凍する方が長く、美味しく召し上がれますよ。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb fam2_r">
							<div class="inner-border_r">
								<div>
									<p>（アクアパッツァの食材の）白身魚は「真鯛」のほかに何がよいですか？</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb mrsm">
							<div class="inner">
								<div>
									<p>「金目鯛」もおすすめですが、比較的お求めやすい、「たら」や「さわら」でもOKです。白身魚ならなんでも美味しいですよ。風味が多少変わり、アクアパッツァらしさは薄れますが、「サーモン」も試してみてください。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb fam2_r">
							<div class="inner-border_r">
								<div>
									<p>キッチン収納の工夫ポイントはなんですか？</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb2 mrsm">
							<div class="inner">
								<div>
									<p>最近、キッチンをリフォームしたのですが、引き出しの中に45Lのゴミ箱を丸ごと3つ入れています。収納力は落ちますが、ゴミ箱を隠せるので生活感がなくなりますね。それがとても気に入っています。</p>
								</div>
							</div>
						</div>
					</div>
				<div class="txt_reform mt0 mb2">キッチンなどお部屋のリフォームにご興味のある方は、<a href="https://www.haseko.co.jp/hrf/reform/jirei/room/" target="_blank" data-ga-click="online_event_report6" rel="nofollow" class="u-icon">こちら</a>をご覧ください。</div>
        </section>
				<section class="mb7">
					<h4 class="u-ttl__m center">イベントアンケートとご感想</h4>
					<p>初のオンラインイベントは、ちょっぴり緊張を伴いスタートし、時間が進むにつれて森崎先生も参加者のみなさまも場慣れしていった様子。最後には互いにほっとリラックスしながらのやりとりも見られました。先生とリアルタイムで一緒にお料理をするなかで、プロが工夫するポイントや段取りの仕方に、学ぶことも多かったのではないでしょうか。実際にご参加・ご視聴くださった方々の声をお聞きしました！</p>
					<h4 class="u-ttl__s center mb4">週に何度お料理をされますか？</h4>
					<figure class="center">
						<img src="<?php echo $img_url?>/event/report-online-event/img22@2x.jpg" class="u-img__max center" style="max-width:453px;" alt="円グラフ 週に何度お料理をされますか？" loading="lazy">
					</figure>
						<p>オンラインイベントに参加された方の8割が「ほぼ毎日」キッチンに立たれていました。イベント中はみなさんの手際のよさに、森崎先生やMCのAYAさんが感心なさっていました。</p>
					<h4 class="u-ttl__s center mb4">イベントの内容はいかがでしたか？</h4>
					<figure class="center">
						<img src="<?php echo $img_url?>/event/report-online-event/img23@2x.jpg" class="u-img__max center" style="max-width:453px;" alt="円グラフ イベントの内容はいかがでしたか？" loading="lazy">
					</figure>
					<p>8割の方が「とても満足」とのことで、事務局一同ほっとしました。森崎先生はもちろん、当日のMCのAYAさんとのトークもお楽しみいただけたのではないでしょうか？使い慣れた自宅のキッチンにいながら、リアルタイムで森崎先生と一緒にお料理ができる機会を、みなさん楽しんでいるご様子でした。参加者のみなさまのご家族の仲のよさも伝わってきました！</p>
				</section>
				<section>
					<h4 class="u-ttl__m center mb4">参加・視聴していただいた方の声</h4>
					<div class="event_comment">
						<div class="balloon balloon_widthmax mb fam2">
							<div class="inner">
								<div>
									<p>とても楽しい時間でした！！ 自宅で子どもも一緒に参加できるという点がよかったです。アクアパッツァが自宅で作れるとは思っていなかったので、今後また作るのが楽しみです。今は外食を控えており、誕生日や記念日も自宅で過ごすことが多いのですが、素敵なご馳走レシピを教えていただいたので、今日のようにまた子どもたちと一緒にゆっくりと料理を作ることから楽しみ、家族でパーティーをするのが楽しみです。またぜひ参加したいです。ありがとうございました。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb fam2">
							<div class="inner">
								<div>
									<p>３つのレシピを同時進行で、というのがなかなかコツが必要な所。今回のお料理はコンロのタイマーさえつけておけば手早く作れて見栄えよし、ワインに合うし、ちょうどよいレシピでした。是非、同様なレシピで次回以降も企画していただけると嬉しいです。アクアパッツァはパスタとして食べられますね。鶏肉でもやってみます。ありがとうございました。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb fam2">
							<div class="inner">
								<div>
									<p>本日は視聴させていただきありがとうございました。先生のご説明が分かりやすかったのはもちろんですが、参加者のみなさまが実際にお料理されている様子が分かったり、質問への回答コーナーもあったことで、飽きずに楽しく視聴させていただきました！</p>
								</div>
							</div>
						</div>
					</div>
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event/img24@2x.png" class="u-img__max u-only__pc center" style="max-width: 740px;" alt="ここでは一部の掲載となりますが、たくさんのご意見をいただき、ありがとうございました。ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。最新情報は毎週木曜日配信のメルマガでお知らせしますのでぜひ、チェックしてください。" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event/img24-sp@2x.png" class="u-img__max u-only__sp center" alt="ここでは一部の掲載となりますが、たくさんのご意見をいただき、ありがとうございました。ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。最新情報は毎週木曜日配信のメルマガでお知らせしますのでぜひ、チェックしてください。" loading="lazy">
					</figure>
					<h4 class="u-font__r-online-event center mt4">そのほかのお料理もチェック！</h4>
					<div class="u-btn-layout mt2 mb5">
						<div class="u-btn-layout__row center mb2_sp">
							<a href="<?php echo $base_url ?>/magazine/index_comic02.php" class="u-btn-layout_red" data-ga-click="online_event_report7">
								森崎先生監修！<br class="u-only__sp">お料理記事はこちら
							</a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
