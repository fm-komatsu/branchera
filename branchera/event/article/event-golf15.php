<?php
//base
include ("../../function.php");
$content = get_id_data('4070');
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
			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
						data-src="<?php echo($img_url)?>/event/golf15/main.png"
						data-srcset="<?php echo($img_url)?>/event/golf15/main-sp@2x.png 666w,
						<?php echo($img_url)?>/event/golf15/main.png"
						alt="ゴルフプロアマ大会参加・プロゴルフ観戦ツアーW開催"
						class="u-img__max"
					>

				</figure>
			</div>
			<div class="u-assist">
				<p>太平洋クラブ六甲コースのプロアマ大会３回目！<br>今年は、昨年までの参加人数6名から、なんと倍の12名をご招待します！！<br>プロゴルファーと一緒に1ラウンドプレーできる、とってもオトクな「プロアマ大会」。みなさま奮ってご応募ください！</p>
			</div>

			<section class="mb4">
				<h3 class="u-ttl__m">参加予定選手プロフィール</h3>
				<div class="flex between mb2 mb1_sp">
					<div class="golf__profile w50">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img">
									<img
									data-src="<?php echo $img_url ?>/event/golf15/event-golf15_pro-mizumaki.jpg"
									data-retina="<?php echo $img_url ?>/event/golf15/event-golf15_pro-mizumaki@2x.jpg"
									style="max-width:640px;"
									alt="水巻善典プロ"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>水巻 善典（みずまき よしのり）</dt>
									<dd>1958年8月27日生</dd>
									<dd>ツアー7勝、シニアツアー2勝、2019ホームテックシニア優勝</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="golf__profile w50 mb1_sp">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img ">
									<img
									data-src="<?php echo $img_url ?>/event/golf15/event-golf15_pro-takahashi.jpg"
									data-retina="<?php echo $img_url ?>/event/golf15/event-golf15_pro-takahashi@2x.jpg"
									style="max-width:640px;"
									alt="髙橋勝成プロ"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>髙橋 勝成（たかはし かつなり）</dt>
									<dd>1950年8月5日生まれ</dd>
									<dd>レギュラーツアー14勝、シニアツアー14勝、グランドシニア2勝<br>2000年～03年4年連続シニア賞金王</dd>
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
									data-src="<?php echo $img_url ?>/event/golf15/event-golf15_pro-sugihara.jpg"
									data-retina="<?php echo $img_url ?>/event/golf15/event-golf15_pro-sugihara@2x.jpg"
									style="max-width:640px;"
									alt="杉原敏一プロ"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>杉原 敏一（すぎはら としかず）</dt>
									<dd>1964年4月8日生</dd>
									<dd>ツアー1勝、父、杉原輝雄</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="golf__profile w50">
						<div class="profile">
							<div class="profile__row">
								<figure class="profile__img">
									<img
									data-src="<?php echo $img_url ?>/event/golf15/event-golf15_pro-yamasoe.jpg"
									data-retina="<?php echo $img_url ?>/event/golf15/event-golf15_pro-yamasoe@2x.jpg"
									style="max-width:640px;"
									alt="山添 昌良プロ"
									class="u-img__max">
								</figure>
								<dl class="profile__ex">
									<dt>山添 昌良（やまぞえ まさよし）</dt>
									<dd>1967年10月15日生</dd>
									<dd>シニアツアー3勝</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<p>※参加選手は、当日の都合により変更になる場合があります。ご了承ください。<br>※奥田選手は都合のため不参加となりました。</p>
			</section>

			<h4 class="u-ttl__m">過去に実施した「PGAスペシャルプロアマ大会」のイベントレポートはこちら</h4>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf3/img__1.png"
						data-retina="<?php echo($img_url)?>/event/report-golf3/img__1@2x.png" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf3/img__2.png"
						data-retina="<?php echo($img_url)?>/event/report-golf3/img__2@2x.png" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
			</div>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf7-8/img__1.png"
						data-src="<?php echo($img_url)?>/event/report-golf7-8/img__1@2x.png" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf7-8/img__2.png"
						data-src="<?php echo($img_url)?>/event/report-golf7-8/img__2@2x.png" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>

			</div>
			<ul class="u-list__ul">
				<li>
					<a href="report-golf3.php" class="u-icon">PGAスペシャルプロアマ大会2017 イベントレポート</a>
				</li>
				<li>
					<a href="report-golf7-8.php" class="u-icon">PGAスペシャルプロアマ大会2018 イベントレポート</a>
				</li>
			</ul>
			<h4 class="u-ttl__m">マルハンカップ 太平洋クラブシニア プロアマ大会 イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>プロ1名 / アマ3名の1組4名で1ラウンドプレーできます。</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2019年9月4日（水） 9:00集合、10:00スタート予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>兵庫県<br><a href="https://www.taiheiyoclub.co.jp/course/rokko/" target="_blank" class=u-icon rel="nofollow">太平洋クラブ六甲コース</a></dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>12名</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（1ラウンドのプレーフィーと朝食代・昼食代）<br>※交通費、宿泊費、ゴルフ場での個人利用分は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申し込み]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2019年7月18日（木）～ 7月29日（月）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選された方には、2019年7月30日（火）より随時メールにてご連絡いたします。<br>落選された方へのご連絡はございませんのでご了承ください。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>
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
						<a href="<?php echo $mypoint_url ?>/132" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">プロアマ大会に申し込む</a>
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
