<?php
//base
include ("../../function.php");
$content = get_id_data('4026');
$pageTtl = $content['title'];

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

			<img data-src="../../lib/img/event/golf6/main.jpg"
			data-srcset="../../lib/img/event/golf6/main-sp@2x.jpg 666w,../../lib/img/event/golf6/main.jpg"
			alt="親子deゴルフ体験"
			class="u-img__max">

			<p>都内近郊のショートコースを貸し切ってのイベントです。やさしく使えるスナッグゴルフ（プラスチック製の道具）を使用しますので、ゴルフ経験がない方も簡単！<br>この機会に親子でゴルフを始めてみませんか？ </p>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>2018年3月3日（土）<br>集合時間：9:30（10:00開始予定）　終了予定時間：12:00</dd>
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
					<dd>2018年1月19日（金）～1月28日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>ご当選者には2月上旬より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>・このイベントはゴルフ未経験者の方を対象としたイベントです。ゴルフ経験者向けのレッスンではございません。<br>・安全管理上、お子さまは小学生以上とさせていただきます。<br>・未就学児を連れてのご見学は可能ですが、安全管理には各自十分ご留意願います。<br>・スナッグゴルフ用具は用意いたします。動きやすい服装、運動靴にてお越しください。</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
