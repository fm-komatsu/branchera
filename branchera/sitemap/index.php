<?php
//base
include("../function.php");
$pageTtl = 'サイトマップ';

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc =  "長谷工グループ「ブランシエラクラブ」のサイトマップページです
。";
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "page-list";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		//$panAry[] = array("/_temp" ,"パンくず名");
		//$panAry[] = array("/_temp/index.php" ,"パンくず名");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl">
						<?php echo $pageTtl; ?>
					</h2>
					<p class="main-header__desc">
						<?php echo $metaDesc; ?>
					</p>
				</div>
			</div>
		</header>
		<section class="main__item sitemap-list">
			<div class="sitemap-list__row">
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m"><a href="<?php echo $base_url; ?>/">ホーム</a></h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url; ?>/news/"><span>ニュース一覧</span></a></li>
						<?php if ($ssoFlag == 1) { ?>
							<li><a href="<?php echo $logout_url ?>"><span>ログアウト</span></a></li>
						<?php } else { ?>
							<li><a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"><span>新規入会</span></a></li>
							<li><a href="<?php echo $login_url; ?>"><span>ログイン</span></a></li>
						<?php }; ?>
						<li><a href="<?php echo $mytop_url; ?>" target="_blank" rel="nofollow"><span>マイページ</span></a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m"><a href="<?php echo $base_url; ?>/magazine">ブランシエラマガジン</a></h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url; ?>/magazine/index_technology.php">長谷工の技術・サービス</a></li>
						<li><a href="<?php echo $base_url ?>/magazine/index_comic03.php">部屋のお掃除プロ監修<br>三毛猫きらりのお掃除攻略ガイド</a></li>
						<li><a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php">あなたの“今”を聞かせて！いま暮らCaf&eacute;</a></li>
						<li><a href="<?php echo $base_url ?>/magazine/index_foris.php">プロが解決！住まいのSOS</a></li>
						<li><a href="<?php echo $base_url; ?>/magazine/index_monozukuri.php">安全・安心・快適な住まいを技術力で支える<br>ものづくりへの想い</a></li>
						<li><a href="<?php echo $base_url; ?>/magazine/index_alsok.php">プロに聞く。暮らしの危機管理。</a></li>
						<li><a href="<?php echo $base_url; ?>/magazine/index_comic02.php">うちのご飯は世界イチ<br>時短＆簡単！お料理レシピ</a></li>
						<li><a href="<?php echo $base_url; ?>/magazine/index_comic01.php">どうしても部屋が片付かない家族の奮闘記<br>何でか、部屋が片付かない。</a></li>
						<li><a href="<?php echo $base_url; ?>/magazine/index_wakuwaku.php">Mr.わくわくメンテナンス講座</a></li>
						<li><a href="<?php echo $base_url ?>/magazine/article/kotsuban_lesson_01.php">お家でチャレンジ！からだづくりレッスン</a></li>
						<li><a href="<?php echo $base_url; ?>/magazine/index_town.php">すてきな「街」みつけました</a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m"><a href="<?php echo $base_url; ?>/gift/">優待サービス</a></h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url ?>/gift/article/cluboff.php">ClubOff by HASEKO</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/online-yoga.php">長谷工コミュニティ×yoga i.umコラボ企画</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/trunk.php">月額500円の収納サービス「CARAETO」初回限定特典</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/day_soko.php">「トランクルーム利用初回限定特典」</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/tfhikkoshi.php">お引越し「基本料金10％OFF」「買い取り金額10%UP」特典</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/tanakami_regular.php">「たなかみ米」販売価格 5％OFF</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/bluenote.php">ブルーノートグループ「ミュージックチャージ1,000円OFF」</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/confetti.php">おトクな「特別鑑賞チケット」ご利用特典</a></li>
						<li><a href="<?php echo $base_url ?>/gift/article/art_corp.php">お引越し「基本料金20％OFF」他3大特典</a></li>
						<li><a href="<?php echo $base_url; ?>/gift/article/nursing.php">長谷工グループの高齢者住宅「無料」体験宿泊</a></li>
						<li><a href="<?php echo $base_url; ?>/gift/article/inet.php">賃貸マンション仲介手数料最大50%OFF</a></li>
						<li><a href="<?php echo $base_url; ?>/gift/article/kasikosh.php">ブランド品・貴金属などの宅配買取「5,000円以上で1,000円UP」</a></li>
						<li><a href="<?php echo $base_url; ?>/gift/article/furniture.php">ブランド家具ご購入割引</a></li>
						<li><a href="<?php echo $base_url; ?>/gift/article/enq.php">商品企画アンケートへのご参加</a></li>
						<li><a href="<?php echo $base_url; ?>/gift/article/mail.php">メルマガ配信・会報誌のお届け</a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m"><a href="<?php echo $base_url; ?>/smile/">住まいレージ</a></h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url; ?>/smile/about.php">住まいレージとは</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/accumulate-smileage.php">住まいレージをためる</a></li>
						<li><a href="<?php echo $base_url ?>/smile/article/lottery-202209.php">抽選で6名さまに当たる！【CLAYMORE】LAMP Cabin クレイモアランプ キャビン</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hit-furniture.php">ブランド家具ご購入</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hre-mediation.php">不動産売買仲介手数料割引</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hre-renovation.php">リノベーションマンション購入</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hcm-tidy.php">整理収納サービス</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hrf-interior.php">室内リフォーム工事</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hcm-housecleaning.php">ハウスクリーニング</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hcm-housecoating.php">ハウスコーティング</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hcm-toilet.php">トイレ・洗面所リフォーム</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hcm-bathroom.php">バスルームリフォーム</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/hcm-kitchen.php">キッチン・換気扇リフォーム</a></li>
						<li><a href="<?php echo $base_url ?>/smile/article/exchange-emergency.php">防災グッズ</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-original_coffee.php#drip_bag">【いま暮ら珈琲】オリジナルコーヒー（ドリップバッグセット）</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-oyasai-crayon.php">【mizuiro】おやさいクレヨン Standard</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-kome.php">たなかみのお米1.8kg</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-original_coffee.php#coffee_beans">【いま暮ら珈琲】オリジナルブレンドコーヒー（豆）</a></li>
						<li><a href="<?php echo $base_url ?>/smile/article/exchange-thermometer.php">【タニタ】電子体温計 （ブルー）</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-ana_tanakami_3pack.php">【ANA FINDELISH】オリジナルカレー3種×たなかみ米上白精米セット</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-tanita.php">【タニタ】体組成計インナースキャン（ホワイト）</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-ana_tanakami_awaodori.php">【ANA FINDELISH】阿波尾鶏とマッシュルームのカレー×たなかみ米上白精米セット</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-sbcurry.php">【エスビー食品】レストランレトルトギフト RRC-50</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-coffee_maker.php">【メリタ】コーヒーメーカー（ツイスト）</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-princess-minipure.php">【PRINCESS】Table Grill Mini Pure ホワイト</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-raycop.php">【RAYCOP】UV除菌ポータブルクリーナー RAYCOP GO</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-irobot250.php">【iRobot】床拭きロボット ブラーバ ジェット 250</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-airdog.php">【Airdog】X3s</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-mochimugi.php">【たなかみのもち⻨×林久右衛⾨のスープ】もち⻨スープセット</a></li>
						<li><a href="<?php echo $base_url; ?>/smile/article/exchange-airweave-pillow.php">【エアウィーヴ】エアウィーヴ ピロー S-LINE</a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m"><a href="<?php echo $base_url; ?>/event">イベント・キャンペーン</a></h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url ?>/event/article/rashiku-monitor.php">《限定１名さま》ご自宅のキッチンにジャストフィット！「RASHIKU」モニターキャンペーン</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/event-online3.php">『オンラインイベント』こだわりのキッチンツアー&料理教室</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/present-campaign888.php">8周年記念プレゼントキャンペーン当選者発表！</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-event-online02.php">『オンラインイベント』収納のお悩みプロが解決！！イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/event-golf20.php">【PGA×ブランシエラクラブ】PGAオリジナルグッズプレゼント</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-event-online.php">『オンラインイベント』おうち時間を楽しもう！おうちでパーティ♪ イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/event-golf19.php">【PGA×BRC】ツアープロから教わるワンポイントレッスン</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-kotsuban4.php">骨盤の調整レッスン 《福岡》 イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf16.php">PGAゴルフラウンドレッスン in 房総CC イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf15.php">PGAスペシャルプロアマ大会2019 in 六甲 イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf14.php">夏休み特別ファミリーイベント野球＆ゴルフ教室レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-tokyo-bay-cruise.php">東京ベイクルーズ無料ご招待レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf13.php">PGAスペシャルプロアマ大会2019 イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-rice-planting2019.php">田植え体験＆信楽焼き陶芸体験2019イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-tanakami2019.php">まぼろしのお米『たなかみ米』～稲の成長レポート 2019～</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-jazz2019.php">ブルーノート東京「JAZZ for CHILDREN 2019 」レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf-debut.php">PGAゴルフデビュープログラム体験レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf12.php">スナッグゴルフ親子体験イベント2019レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/event-golf-index.php">ブランシエラクラブのゴルフイベント</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-jal2019.php">会員限定イベント JAL工場見学レポート ～SKY MUSEUM～</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf11.php">ゴルフラウンドレッスン in 小野東洋GC レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-haseko-museum.php">長谷工マンションミュージアム見学 先行ご招待レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf10.php">ゴルフレッスンイベントレポート2018</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf9.php">PGAゴルフアカデミー体験レッスン2018 東西W開催レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf7-8.php">PGAスペシャルプロアマ大会2018 イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-jazz.php">ブルーノート東京「JAZZ for CHILDREN」レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-tanakami2018-2nd.php">信楽焼き陶芸体験イベント動画・レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-tanakami2018-1st.php">「たなかみ米」田植え体験イベント動画・レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-kotsuban3.php">【脱ゆがみライフ！骨盤の調整レッスン201805】イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-tanakami2018.php">まぼろしのお米『たなかみ米』～稲の成長レポート 2018～</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-bonsai.php">山田香織の手のひらで楽しむ桜のお花見盆栽づくり」イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf6.php">スナッグゴルフ親子体験イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-takarazuka.php">宝塚歌劇 花組公演観劇レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-basket.php">女子プロバスケットボール公式戦観戦レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf3.php">PGAスペシャルプロアマ大会2017 イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf5.php">ゴルフラウンドレッスン in 若洲レポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-kotsuban2.php">骨盤の調整レッスンレポート &laquo;東京・大阪W開催&raquo;</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf4.php">PGAゴルフアカデミー体験レッスン 東西W開催レポート</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-mitaka_farm.php">おいしいイモ煮会と野菜収穫体験イベントレポート</a></li>
						<li><a href="<?php echo $base_url ?>/event/article/report-golf2.php">プロゴルフ観戦ツアー イベントレポート</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-jal.php">JAL工場見学イベントレポート</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-tanakami2.php">「たなかみ米」田植え体験イベントレポート</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-tanakami.php">まぼろしのお米『たなかみ米』～稲とアイガモの成長レポート～</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-golf.php">ゴルフレッスンイベントレポート</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-kotsuban.php">骨盤の調整イベントレポート</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/report-l.php">長谷工ならではの技術見学会 Vol.2</a></li>
						<li><a href="<?php echo $base_url; ?>/event/article/seeing.php">長谷工ならではの技術見学会 Vol.1</a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m"><a href="<?php echo $base_url; ?>/enquete">アンケート</a></h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url ?>/enquete/article/cafe-vol43.php">いま暮らアンケート「機器にも“適齢期”があるんです！《換気扇 編》」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol22-report.php">第22回アンケートレポート「収納に関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol21-report.php">第21回アンケートレポート「満足度・意識調査2022」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol20-report.php">第20回アンケートレポート「お住まいに関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol19-report.php">第19回アンケートレポート「マンションの共用部について」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol18-report.php">第18回アンケートレポート「お住まいのリフォームに関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol17-report.php">第17回アンケートレポート「満足度・意識調査2021」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol16-report.php">第16回アンケートレポート「お住まいに関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol15-report.php">第15回アンケートレポート「リフォームに関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol14-report.php">第14回アンケートレポート「満足度・意識調査2020」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol13-report.php">第13回アンケートレポート「住まいに関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol12-report.php">第12回アンケートレポート「収納に関するアンケート」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol11-report.php">第11回アンケートレポート「SNSに関する利用状況」</a></li>
						<li><a href="<?php echo $base_url ?>/enquete/article/enq-vol10-report.php">第10回アンケートレポート「満足度・意識調査2019」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol09-report.php">第9回アンケートレポート「住まいや暮らしアンケート」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol08-report.php">第8回アンケートレポート「介護に関するアンケート」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol07-report.php">第7回アンケートレポート「インターネット利用に関するアンケート」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol06-report.php">第6回アンケートレポート「ブランシエラクラブについて」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol05-report.php">第5回アンケートレポート「光熱費について」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol04-report.php">第4回アンケートレポート「ペットについて」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol03-report.php">第3回アンケートレポート「住まいの防犯意識について」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol02-report.php">第2回アンケートレポート「住まいの収納について」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq-vol01-report.php">第1回アンケートレポート「会員さま意識調査」</a></li>
						<li><a href="<?php echo $base_url; ?>/enquete/article/enq_nishidai.php">「ブランシエラ板橋西台」WEBアンケート レポート</a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m">長谷工インフォメーション</h4>
					<ul class="u-list__ul">
						<li class="hcg-event"><a href="<?php echo $base_url; ?>/hcg/hcg-event.php">長谷工グループのイベント情報</a></li>
						<li class="hcg-mansion"><a href="<?php echo $base_url; ?>/hcg/hcg-mansion.php">長谷工グループのマンション情報</a></li>
					</ul>
				</div>
				<div class="sitemap-list__item">
					<h4 class="u-ttl__m">その他</h4>
					<ul class="u-list__ul">
						<li><a href="<?php echo $base_url; ?>/about">ブランシエラクラブとは</a></li>
						<li><a href="<?php echo $base_url; ?>/rules">当サービスのご利用について</a></li>
						<li><a href="<?php echo $base_url; ?>/rules/id.php">長谷工ID利用規約</a></li>
						<li><a href="<?php echo $base_url; ?>/form/form-contact/">お問い合わせ</a></li>
						<li><a href="<?php echo $withdrawal_url; ?>" target="_blank">登録解除</a></li>
					</ul>
				</div>
			</div>
		</section>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
