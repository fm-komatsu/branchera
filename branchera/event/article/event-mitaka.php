<?php
//base
include ("../../function.php");
$content = get_id_data('4018');
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

			<img data-src="../../lib/img/event/event-mitaka/main.jpg"
			data-srcset="../../lib/img/event/event-mitaka/main-sp@2x.jpg 666w,../../lib/img/event/event-mitaka/main.jpg"
			alt="野菜収穫体験とイモ煮会"
			class="u-img__max">

			<p>三鷹ファームで穫れた野菜を使用した「イモ煮会」とジャガイモ・大根の収穫体験を開催いたします！<br>山形出身のスタッフが味付けをする渾身のイモ煮鍋です。ぜひふるってご参加ください！</p>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>2017年11月18日（土）<br>受付・収穫体験：午前11時～、イモ煮会：正午～（雨天時翌日に順延予定）</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>三鷹ファーム管理農園[<a href="https://goo.gl/maps/rVqo4XTgXX32" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a>]<br>京王線仙川駅下車徒歩約15分<br>※ 現地集合、現地解散となります。駐車場はありませんので公共交通機関をご利用ください。</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>40名程度</dd>
				</dl>
				<dl>
					<dt>[参加費用]</dt>
					<dd>参加費無料<br>※集合場所までの交通費や宿泊費等は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br />※当選確定後、参加人数、年齢等の確認をさせていただきます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年10月3日（火）～10月15日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2017年10月18日（水）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd style="line-height:1.4;">汚れてもよい服装でご参加ください。</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

			<!--div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/66" target="_blank" class="u-btn_point u-btn-layout__item">イベントに応募する</a>
				</div>
			</div>

			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>-->


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
