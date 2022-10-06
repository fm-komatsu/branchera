<?php
//base
include ("../../function.php");
$content = get_id_data('4068');
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

			<h2 class="u-ttl__l">夏休み特別スポーツコラボイベント開催！！</h2>
			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
					data-src="<?php echo $img_url ?>/event/golf14/main-v.png"
					data-retina="<?php echo $img_url ?>/event/golf14/main-v@2x.png"
					alt="夏休み特別スポーツコラボイベント開催！！"
					class="u-img__max">
					<!-- <img
					data-src="<?php echo $img_url ?>/event/golf14/main-v.png"
					data-retina="<?php echo $img_url ?>/event/golf14/main-v@2x.png"
					alt="無料ゴルフイベント「PGAスペシャルプロアマ大会2019 ご招待」"
					class="u-img__max u-only__sp"> -->

				</figure>
			</div>

			<div class="u-assist">
				<p>ファミリーで参加できるスポーツイベントとして、<strong>元プロ野球選手による野球教室とPGA所属ティーチングプロによるスナッグゴルフ教室</strong>を屋内で開催いたします。<br>お子さまとの夏休みの思い出に！みなさま奮ってご応募ください！</p>
			</div>
			<section class="mb4">
				<h3 class="u-ttl__m">参加予定の元プロ野球選手</h3>
				<div class="u-assist">
					<ul class="u-list__ul_dot">
						<li>久保 文雄 氏（元横浜DeNAベイスターズ）</li>
						<li>高橋 雅裕 氏（元横浜DeNAベイスターズ）</li>
						<li>西山 秀二 氏（元広島東洋カープ）</li>
					</ul>
				</div>
				<p>※元プロ野球選手は、都合により当日変更になる場合があります。予めご了承ください。</p>
			</section>

			<section class="mb5 mb2_sp">
				<h3 class="u-ttl__m">イベントイメージ</h3>
				<div class="flex between mb2 mb1_sp">
					<div class="w50 mb1_sp">
						<figure class="u-fig">
							<img
							data-src="<?php echo $img_url ?>/event/golf14/event-golf14__img01.jpg"
							data-retina="<?php echo $img_url ?>/event/golf14/event-golf14__img01@2x.jpg"
							style="max-width:640px;"
							alt="<?php echo $pageTtl ?>｜イメージ"
							class="u-img__max">
							<figcaption class="u-fig__cap">image photo</figcaption>
						</figure>
					</div>
					<div class="w50">
						<figure class="u-fig">
							<img
							data-src="<?php echo $img_url ?>/event/golf14/event-golf14__img02.jpg"
							data-retina="<?php echo $img_url ?>/event/golf14/event-golf14__img02@2x.jpg"
							style="max-width:640px;"
							alt="<?php echo $pageTtl ?>｜イメージ"
							class="u-img__max">
							<figcaption class="u-fig__cap">image photo</figcaption>
						</figure>
					</div>
				</div>
				<div class="flex between">
					<div class="w50 mb1_sp">
						<figure class="u-fig">
							<img
							data-src="<?php echo $img_url ?>/event/golf14/event-golf14__img03.jpg"
							data-retina="<?php echo $img_url ?>/event/golf14/event-golf14__img03@2x.jpg"
							style="max-width:640px;"
							alt="<?php echo $pageTtl ?>｜イメージ"
							class="u-img__max">
							<figcaption class="u-fig__cap">image photo</figcaption>
						</figure>
					</div>
					<div class="w50">
						<figure class="u-fig">
							<img
							data-src="<?php echo $img_url ?>/event/golf14/event-golf14__img04.jpg"
							data-retina="<?php echo $img_url ?>/event/golf14/event-golf14__img04@2x.jpg"
							style="max-width:640px;"
							alt="<?php echo $pageTtl ?>｜イメージ"
							class="u-img__max">
							<figcaption class="u-fig__cap">image photo</figcaption>
						</figure>
					</div>
				</div>
				<p>※実際のイベントはすべて室内で行ないます。<p>
			</section>

			<section>
				<div class="u-assist">
					<div class="flex flex_center">
						<div class="mb2_sp mr1 mr0_sp">
							<img
							data-src="<?php echo $img_url ?>/event/golf-index/pga-logo.png"
							data-retina="<?php echo $img_url ?>/event/golf-index/pga-logo@2x.png"
							style="max-width:130px;"
							alt="<?php echo $pageTtl ?>"
							class="u-img__max">
						</div>
						<div class="self-center">
							<h3 class="u-ttl__s mb0">公益社団法人 日本プロゴルフ協会（PGA)</h3>
						</div>
					</div>
						<hr>
						<p>1957年7月、東西のプロゴルフ協会を統合して設立された男子プロゴルファー団体。今回は、誰でも簡単にゴルフの基本が学べる『スナッグゴルフ』を用いて、ゴルフの基礎を教えていただきます。</p>
						<h4 class="u-ttl__s">過去に実施した「スナッグゴルフ親子体験イベント」のレポートはこちら</h4>
						<ul class="u-list__ul">
							<li>
								<a href="report-golf6.php" class="u-icon">スナッグゴルフ親子体験イベント2018レポート</a>
							</li>
							<li>
								<a href="report-golf12.php" class="u-icon">スナッグゴルフ親子体験イベント2019レポート</a>
							</li>
						</ul>
				</div>
				<div class="u-assist">
					<p>本イベントはPGAの協力のもと、ゴルフと野球をコラボさせ、PGA所属ティーチングプロと元プロ野球選手が子ども達に直接指導することにより、子ども達にスポーツの楽しさを知ってもらおうと企画しました。</p>
				</div>
			</section>

			<h3 class="u-ttl__m">イベント概要</h3>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>屋内で行なう元プロ野球選手による野球教室とPGA所属ティーチングプロによるスナッグゴルフ教室</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2019年8月4日（日） 9：30 受付開始、10：00 イベント開始予定</dd>
				</dl>
				<dl>
					<dt>[スケジュール]</dt>
					<dd>9：30 受付開始<br>10：00 イベント開始<br>グループ分けをして、グループ単位で、野球教室とゴルフ教室を順に体験していただきます。<br>12:00　終了（予定）<br>※体験後、ご家族ごとに写真撮影を行なう予定です（デジタルカメラやスマートフォンをご用意ください）。</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>長谷工コーポレーション本社体育館<br>東京都港区芝2-32-1 <a href="https://goo.gl/maps/cxBkhRtJ2AwXPSc38" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a><br>アクセス：JR田町駅三田口 徒歩7分、地下鉄都営三田線・浅草線三田駅 徒歩4分</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>25組 100名（1家族4名まで）</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料<br>※ 交通費等は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申込み]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※ ご参加人数は、別途当選メールにてお伺いします。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2019年7月4日（木）～7月15日（月・祝）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選された方には、2019年7月17日（水）より随時メールにてご連絡いたします。<br>落選された方へのご連絡はございませんのでご了承ください。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>
						<ul class="u-list__ul_dot" style="font-feature-settings : 'palt';">
							<li>長谷工IDマイページにログインしてお申し込みください。</li>
							<li>長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
							<li>安全管理上、お子さまは小学生以上とさせていただきます。</li>
							<li>未就学児を連れてのご見学は可能ですが、安全管理には各自十分ご留意願います。</li>
							<li>スナッグゴルフ用具は用意いたします。</li>
							<li>野球用具はグローブの持ち込みのみ可能です。</li>
							<li>その他（野球のバット、ゴルフのクラブ等）の持ち込みはできませんので、ご了承ください。 </li>
							<li>動きやすい服装、運動靴にてお越しください。</li>
							<li>本イベントの参加権利をご友人等に譲渡することはできませんので、ご了承ください。 </li>
						</ul>
					</dd>
				</dl>
			</div>

			<?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/131" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">ファミリーイベントに申し込む</a>
					</div>
				</div>
			<?php } else { ?>
				<label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
			<?php } ?>

			<?php if (!$ssoFlag == 1){ ?>
			<small class="u-small">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
				 class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
