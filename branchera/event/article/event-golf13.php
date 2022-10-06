<?php
//base
include ("../../function.php");
$content = get_id_data('4061');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

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
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<section class="main__wrapper">

			<h2 class="u-ttl__l">大好評のゴルフイベント「プロアマ大会」！<br>今回はスクランブル方式採用でペアでの参加を募集！</h2>
			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
					data-src="<?php echo $img_url ?>/event/golf13/main-v.png"
					data-retina="<?php echo $img_url ?>/event/golf13/main-v@2x.png"
					alt="無料ゴルフイベント「PGAスペシャルプロアマ大会2019 ご招待」"
					class="u-img__max u-only__pc">
					<img
					data-src="<?php echo $img_url ?>/event/golf13/main-v-sp.png"
					data-retina="<?php echo $img_url ?>/event/golf13/main-v-sp@2x.png"
					alt="無料ゴルフイベント「PGAスペシャルプロアマ大会2019 ご招待」"
					class="u-img__max u-only__sp">

				</figure>
			</div>

			<div class="u-assist">
				<p>プロゴルファーと一緒に1ラウンドプレーできる「プロアマ大会」へご招待いたします。<br>今回は<strong>ペアでの参加を募集</strong>します！また、<strong>スクランブル方式を採用</strong>しますので、<strong>初級者の方も大歓迎！！</strong>まだコースデビューしていない方も、「上手な人と一緒にプレーするのは・・・」とためらって、なかなかコースに出られない方も、この機会にコースでプレーしませんか？シニアツアープロと一緒に回りますので、プロの力を借りながらプレーできて、ゴルフの指導もしていただけます。<br>ご夫婦、ご友人、親子など・・・パートナーを誘って、みなさま奮ってご応募ください！</p>
				<hr>
				<section>
				<h3 class="u-ttl__s mb0">スクランブル方式とは？</h3>
				<p>すべてのホールにおいて、プロを含めたチーム全員の中で最も良いボールポジションを選択しながらゲームを進める方法です。</p>
				<h4 class="u-ttl__s mb0 mt2">①ティーショット</h4>
				<p>プロを含めた全員が同じティーイングエリアより行ないます。</p>
				<h4 class="u-ttl__s mb0 mt2">②セカンドショット以降</h4>
				<p>プロを含めた全員の中で最も良い条件のボールをチームで決めて選択します。（選択しなかったボールは全部拾います）<br>選択したボールポジションで１クラブ以内でホールに近づかないで全員が順番にショットを行ない、以降、グリーンに乗るまで同じ方法を繰り返します。</p>
				<h4 class="u-ttl__s mb0 mt2">③グリーン上</h4>
				<p>選択したボールの横にマークをしてその位置から順番にパッティングを行ないます。<br>カップインした時点でチームスコアが確定します。</p>
				</section>
			</div>
			<section class="mb4">
				<h3 class="u-ttl__m">参加予定選手プロフィール</h3>
				<div class="flex between mb2 mb1_sp">
					<div class="golf__profile w50 mb1_sp">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img ">
									<img
									data-src="<?php echo $img_url ?>/event/golf13/event-golf13_pro-akiba.jpg"
									data-retina="<?php echo $img_url ?>/event/golf13/event-golf13_pro-akiba@2x.jpg"
									style="max-width:640px;"
									alt="秋葉 真一プロ"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>秋葉 真一（あきば しんいち）</dt>
									<dd>1965年7月15日生</dd>
									<dd>2018年PGAシニアツアー賞金ランキング22位<br>シニアツアー5勝</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="golf__profile w50">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img">
									<img
									data-src="<?php echo $img_url ?>/event/golf13/event-golf13_pro-shimizu.jpg"
									data-retina="<?php echo $img_url ?>/event/golf13/event-golf13_pro-shimizu@2x.jpg"
									style="max-width:640px;"
									alt="PGAスペシャルプロアマ大会2018 イベントレポート"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>清水 洋一（しみず よういち）</dt>
									<dd>1963年2月13日生</dd>
									<dd>2018年PGAシニアツアー賞金ランキング7位</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<div class="flex between">
					<div class="golf__profile w50 mb1_sp">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img">
									<img
									data-src="<?php echo $img_url ?>/event/golf13/event-golf13_pro-takami.jpg"
									data-retina="<?php echo $img_url ?>/event/golf13/event-golf13_pro-takami@2x.jpg"
									style="max-width:640px;"
									alt="PGAスペシャルプロアマ大会2018 イベントレポート"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>高見 和宏（たかみ かずひろ）</dt>
									<dd>1959年12月11日生</dd>
									<dd>2018年PGAシニアツアー賞金ランキング35位<br>レギュラーツアー2勝<br>シニアツアー2勝</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="golf__profile w50">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img">
									<img
									data-src="<?php echo $img_url ?>/event/golf13/event-golf13_pro-teshima.jpg"
									data-retina="<?php echo $img_url ?>/event/golf13/event-golf13_pro-teshima@2x.jpg"
									style="max-width:640px;"
									alt="PGAスペシャルプロアマ大会2018 イベントレポート"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>手嶋 多一（てしま たいち）</dt>
									<dd>1968年10月16日生</dd>
									<dd>レギュラーツアー8勝<br>2019シニアツアー開幕戦優勝</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<p>※参加選手は、当日の都合により変更になる場合があります。ご了承ください。</p>
			</section>

			<section>
				<h3 class="u-ttl__m">過去に実施した「プロアマ大会」のイベントレポートはこちら</h3>
				<div class="flex between">
					<figure class="w50 center mb">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf7-8/img__1.png"
						data-retina="<?php echo $img_url ?>/event/report-golf7-8/img__1@2x.png"
						style="max-width:400px;"
						alt="PGAスペシャルプロアマ大会2018 イベントレポート"
						class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img
						data-src="<?php echo $img_url ?>/event/report-golf7-8/img__3.png"
						data-retina="<?php echo $img_url ?>/event/report-golf7-8/img__3@2x.png"
						style="max-width:400px;"
						alt="PGAスペシャルプロアマ大会2018 イベントレポート"
						class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf3/img__2.png"
							data-retina="<?php echo $img_url ?>/event/report-golf3/img__2@2x.png"
							style="max-width:400px;"
							alt="PGAスペシャルプロアマ大会2017 イベントレポート"
							class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img
							data-src="<?php echo $img_url ?>/event/report-golf3/img__1.png"
							data-retina="<?php echo $img_url ?>/event/report-golf3/img__1@2x.png"
							style="max-width:400px;"
							alt="PGAスペシャルプロアマ大会2017 イベントレポート"
							class="u-img__max">
					</figure>
				</div>
				<ul class="u-list__ul">
					<li>
						<a href="<?php echo $base_url ?>/event/article/report-golf7-8.php" class="u-icon">PGAスペシャルプロアマ大会2018 イベントレポート</a>
					</li>
					<li>
						<a href="<?php echo $base_url ?>/event/article/report-golf3.php" class="u-icon">PGAスペシャルプロアマ大会2017 イベントレポート</a>
					</li>
				</ul>
			</section>

			<h3 class="u-ttl__m">イベント概要</h3>
			<div class="u-list__dl_table mb3">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>プロ1名 / 参加者4名の1組5名でラウンドできます。<br>今回は「スクランブル方式」採用のため、初級者の方も奮ってご参加ください！</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2019年6月12日（水） 7：30 集合、8：30 スタート予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>茨城県　スターツ笠間ゴルフ倶楽部<br>茨城県笠間市池野辺2340-1 <a href="https://goo.gl/maps/yLQtKM2nv772" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>8組 16名</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（1ラウンドのプレーフィーと昼食代）<br>※ 交通費、宿泊費、ゴルフ場での個人利用分は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申込み]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2019年4月18日（木）～ 5月6日（月）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2019年5月8日（水）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul>
							<li>※ 長谷工IDマイページにログインしてお申し込みください。</li>
							<li>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
							<li>※ 本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/124" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">プロアマ大会に申し込む</a>
					</div>
				</div>
			<?php } else { ?>
				<label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
			<?php } ?>

			<?php if (!$ssoFlag == 1){ ?>
			<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
				 class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
