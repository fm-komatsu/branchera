<?php
//base
include("../function.php");
$content = get_id_data('90006');
$pageTtl = '長谷工グループのイベント情報';

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "page-list hcg-event";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/hcg/", "長谷工インフォメーション");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<nav class="main__snav snav">
			<?php include($inc_path . "/lib/inc/page/_hcg/__snav.php"); ?>
		</nav>
		<section class="main__item">
			<h2 class="u-ttl__l">長谷工グループのイベント情報</h2>
			<!-- 長谷工マンションミュージアムワークショップ -->
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="<?php echo ($img_url) ?>/hcg/event-img__workshop.jpg" loading="lazy" alt="長谷工マンションミュージアムにて、ワークショップを開催！" class="u-img__max" style="max-width: 389px;">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">長谷工マンションミュージアムにて、ワークショップを開催！</h3>
					<p class="event-list__text u-font__palt">コンクリートを原料から調合する練り体験や強度実験をご覧いただけます！<br>この夏、マンションについてたくさん学んでみませんか？<br>7/20（水）WEBにて先着順で応募受付スタート！ご家族でぜひご参加ください♪<br>たくさんのご応募をいただき、ありがとうございました。<br>受付は終了いたしました。</p>
					<a href="https://www.haseko.co.jp/hmm/event/workshop-2022/" class="event-list__btn u-btn_point" data-ga-click="hcg-page__hmm-workshop2022" target="_blank" rel="sponsored">詳しくはこちら</a>
				</div>
			</div>
			<!-- 長谷工マンションミュージアム -->
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="<?php echo ($img_url) ?>/hcg/haseko_info_hmm_banner@2x.jpg" loading="lazy" alt="長谷工マンションミュージアム" class="u-img__max" style="max-width: 389px;">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">長谷工マンションミュージアム</h3>
					<p class="event-list__text u-font__palt">マンションのあらゆることを展示した「長谷工マンションミュージアム」。集合住宅の歴史、建物ができるまでの過程、未来の住まいなどを"見て、触れて、感じて、学べる"情報発信拠点として、マンションづくりの魅力を広く社外に発信していきます。</p>
					<a href="https://www.haseko.co.jp/hmm/" class="event-list__btn u-btn_point" data-ga-click="hcg-page__hmm" target="_blank" rel="sponsored">詳しくはこちら</a>
				</div>
			</div>
			<!-- 長谷工のおしごと -->
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="<?php echo ($img_url) ?>/hcg/haseko_oshigoto_thumb@2x.jpg" loading="lazy" alt="長谷工のお仕事" class="u-img__max" style="max-width: 389px;">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">長谷工のおしごと</h3>
					<p class="event-list__text u-font__palt">長谷工グループのTVCMとみなさまのライフステージに合わせたサービスをご紹介します。<br>住まいと暮らしの創造企業グループへの飛躍を目指す長谷工グループ各社の事業をぜひご覧ください。<br>ONAIR中のCMとCMのアーカイブはリンク先ページよりご覧いただけます。</p>
					<a href="https://www.haseko-group.jp/" class="event-list__btn u-btn_point" data-ga-click="hcg-page__oshigoto" target="_blank" rel="sponsored">詳しくはこちら</a>
				</div>
			</div>
			<!-- 『暮らしをアップデート』リフォームフェア -->
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="<?php echo ($img_url) ?>/hcg/hrf_thumb@2x.jpg" loading="lazy" alt="『暮らしをアップデート』リフォームフェア" class="u-img__max" style="max-width: 389px;">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">『暮らしをアップデート』リフォームフェア</h3>
					<p class="event-list__text u-font__palt">長谷工リフォームでは、スタッフとショールームアドバイザーがご相談にお応えする『リフォームフェア』を開催します。完全予約制にて、実際の生活空間をイメージして展示されたショールームをご案内。『新しい生活様式』が定着しつつある今、より暮らしやすい住まいについて考えてみませんか。<br>※随時フェア開催の情報を更新しております。</p>
					<a href="https://www.haseko.co.jp/hrf/reform/#tab-kanto" class="event-list__btn u-btn_point mb2" data-ga-click="hcg-page__hrf_cp_2105_info_kanto" target="_blank" rel="sponsored">【関東エリア】詳しくはこちら</a>
					<a href="https://www.haseko.co.jp/hrf/reform/#tab-kansai" class="event-list__btn u-btn_point" data-ga-click="hcg-page__hrf_cp_2105_info_kansai" target="_blank" rel="sponsored">【関西エリア】詳しくはこちら</a>
				</div>
			</div>
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="<?php echo ($img_url) ?>/hcg/hc-children-award.jpg" data-retina="<?php echo ($img_url) ?>/hcg/hc-children-award@2x.jpg" alt="「HASEKO 未来の住まいアイデア こども絵画コンテスト」結果発表！" class="u-img__max" style="max-width: 389px;">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">「HASEKO 未来の住まいアイデア こども絵画コンテスト」結果発表！</h3>
					<p class="event-list__text" style="font-feature-settings : 'palt';">小学1年生から6年生までのみなさんから、未来の理想の住まいを表現した絵画作品をご応募いただきました。<br>たくさんのご応募、誠にありがとうございました。<br>審査の結果、受賞された作品をご紹介いたします。</p>
					<a href="https://www.haseko.co.jp/kodomo_contest/award/" class="event-list__btn u-btn_point" data-ga-click="hcg-page__kodomo_contest" target="_blank">受賞作品紹介はこちらから</a>
				</div>
			</div>
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="../lib/img/hcg/event-img__saisei.png" data-retina="../lib/img/hcg/event-img__saisei@2x.png" alt="長谷工のマンション再生セミナー" class="u-img__max">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">長谷工のマンション再生セミナー</h3>
					<p class="event-list__text">長谷工では、マンションの将来像について、管理組合様がより良い選択をしていただけるように毎年セミナーを開催し、長寿命化と建て替えについて情報のご提供を致しております。ご希望の方には、直近のセミナー配布資料（印刷物）をお送りいたします。お気軽にホームページからご連絡ください。</p>
					<a href="https://www.haseko.co.jp/saisei/seminar/index.php#seminar_report" target="_blank" rel="nofollow" class="event-list__btn u-btn_point" data-ga-click="hcg-page__saisei">セミナー情報はこちら</a>
				</div>
			</div>
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="../lib/img/hcg/event-img__sinir.jpg" data-retina="../lib/img/hcg/event-img__sinir@2x.jpg?220713" alt="長谷工シニアグループのイベント＆見学情報" class="u-img__max">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">長谷工シニアグループのイベント＆見学情報</h3>
					<p class="event-list__text">高齢者の住まいと暮らしを提案する長谷工シニアグループでは、専門家による自分らしく生きるための高齢期の住まい選びのポイントや高齢期の生き方、健康づくり、介護予防セミナーなど、ホームの暮らしを実際に体感できるイベントを開催しています。<small class="u-small">※リンク先ページの下方をご覧ください。</small></p>
					<a href="http://www.haseko-senior.co.jp/" target="_blank" rel="nofollow" class="event-list__btn u-btn_point" data-ga-click="hcg-page__senior">イベント・見学情報はこちら</a>
				</div>
			</div>
			<div class="event-list">
				<div class="event-list__img">
					<img data-src="../lib/img/hcg/event-img__bistation.png" data-retina="../lib/img/hcg/event-img__bistation@2x.png" alt="BISTATION新橋で開催中のセミナー" class="u-img__max">
				</div>
				<div class="event-list__ex">
					<h3 class="event-list__ttl">BISTATION新橋で開催中のセミナー</h3>
					<p class="event-list__text">新橋に誕生したレンタルオフィス「ビステーション新橋」。プライベート性の高いレンタルオフィス。フレキシブルなコワーキングスペースで行われるセミナー情報をご覧ください。</p>
					<a href="https://bistation-members.jp/seminar" target="_blank" rel="nofollow" class="event-list__btn u-btn_point" data-ga-click="hcg-page__bistation">セミナー情報はこちら</a>
				</div>
			</div>
		</section>
		<nav class="main__snav snav__bottom">
			<?php include($inc_path . "/lib/inc/page/_hcg/__snav.php"); ?>
		</nav>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
