<?php
//base
include ("../../function.php");
$content = get_id_data('4023');
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

			<img data-src="../../lib/img/event/golf5/main.png"
			data-srcset="../../lib/img/event/golf5/main-sp@2x.png 666w,../../lib/img/event/golf5/main.png"
			alt="PGAゴルフラウンドレッスン in 若洲 概要"
			class="u-img__max">

			<p>都内近郊ゴルフ場にてPGA（日本ゴルフ協会）認定ティーチングプロにじっくり18ホール指導していただけます。
				プロ1名とアマチュア3名の少人数、実践的なラウンドレッスンで目標スコアを達成も！？開催会場は、都心から好アクセスの若洲ゴルフリンクス！奮ってご応募ください！</p>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>参加者3名にプロ1名が同行し、1ラウンド18ホールレッスンをいたします（キャディ付）。</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>2018年1月20日（土） 8：49～ OUTコーススタート予定<br>※全組ホールアウト後、懇親会とプロからのアドバイスを兼ねたティーパーティーを実施いたします。（16時半頃終了予定）</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>若洲ゴルフリンクス<br>東京都江東区若洲3-1-2 <a href="https://goo.gl/maps/xDvu1PAhci82" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>15名さま</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（ゴルフプレー代、レッスン代、昼食、ティーパーティー代含む）<br><small class="u-small">※現地までの交通費、朝食や売店利用等は各自ご負担ください。</small></dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年12月1日（金）～12月10日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2017年12月12日（火）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>参加確定後、10日前までに日本プロゴルフ協会より詳しいご案内を送付いたします。</dd>
				</dl>
				<dl>
					<dt>[運営協力]</dt>
					<dd>公益社団法人 日本プロゴルフ協会</dd>
				</dl>
			</div>

			<div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<label class="u-btn_end">応募の受け付けは終了いたしました</label>
				</div>
			</div>

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
