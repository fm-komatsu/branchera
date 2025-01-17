<?php
//base
include ("../../function.php");
$content = get_id_data('4055');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = ''.$pageTtl.'-'.siteName();
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

				<img data-src="<?php echo $img_url?>/event/golf12/main.jpg"
					data-retina="<?php echo $img_url?>/event/golf12/main@2x.jpg"
					alt="親子deゴルフ体験"
					class="u-img__max u-only__pc">
				<img data-src="<?php echo $img_url?>/event/golf12/main-sp.jpg"
					data-retina="<?php echo $img_url?>/event/golf12/main-sp@2x.jpg"
					alt="親子deゴルフ体験"
					class="u-img__max u-only__sp">
			</div>

			<div class="u-assist">

			<p>前回も大好評！<strong>都内近郊のショートコースを貸し切っての親子イベント</strong>です。やさしく使えるスナッグゴルフ（プラスチック製の道具）を使用しますので、<strong>ゴルフ経験のない大人の方もお子さまも簡単！</strong>PGA（公益財団法人 日本プロゴルフ協会）認定のティーチングプロがゴルフの基本をやさしく教えてくれますので、親子で楽しんでいただけます。<br>この機会に<strong>親子でゴルフを始めてみませんか？</strong> </p>

			</div>

			<h4 class="u-ttl__m">前回実施した「スナッグゴルフ親子体験イベント2018」のレポートはこちら</h4>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf6/report-golf06_02.jpg"
						data-retina="<?php echo($img_url)?>/event/report-golf6/report-golf06_02@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf6/report-golf06_03.jpg"
						data-retina="<?php echo($img_url)?>/event/report-golf6/report-golf06_03@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
			</div>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf6/report-golf06_04.jpg"
						data-src="<?php echo($img_url)?>/event/report-golf6/report-golf06_04@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf6/report-golf06_05.jpg"
						data-src="<?php echo($img_url)?>/event/report-golf6/report-golf06_05@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>

			</div>
			<ul class="u-list__ul">
				<li>
					<a href="report-golf6.php" class="u-icon">スナッグゴルフ親子体験イベントレポート</a>
				</li>
			</ul>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>2019年3月9日（土）10:00～12:00　※9:30より受付開始<br>※雨天時には室内にて開催いたします。</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>東京ゴルフ専門学校内、教場ショートコース（ハイランドセンター）<br>東京都杉並区高井戸東3-11-7<br>京王井の頭線 浜田山駅より徒歩6分、高井戸駅より徒歩8分　<a href="https://goo.gl/maps/yEdcguxEDb52" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>親子21組42名（小学生以上のお子さま1名＋保護者1名）</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（用具貸出代含む）<br><small class="u-small">※現地までの交通費は各自ご負担ください。</small></dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2019年2月1日（金）～2月11日（月・祝）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>ご当選者には2月中旬より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>
						<ul class="u-list__ul_dot" style="font-feature-settings : 'palt';">
							<li>このイベントはゴルフ未経験者の方を対象としたイベントです。ゴルフ経験者向けのレッスンではございません。</li>
							<li>安全管理上、お子さまは小学生以上とさせていただきます。</li>
							<li>未就学児を連れてのご見学は可能ですが、安全管理には各自十分ご留意願います。</li>
							<li>スナッグゴルフ用具は用意いたします。動きやすい服装、運動靴にてお越しください。</li>
							<li>本レッスンの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/120" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">イベントに申し込む</a>
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
