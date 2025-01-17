<?php
//base
include ("../../function.php");
$content = get_id_data('4024');
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

			<section class="main__item mb0">

				<img
				data-src="../../lib/img/event/event-takarazuka/main.png"
				data-srcset="../../lib/img/event/event-takarazuka/main-sp@2x.png 420w ,../../lib/img/event/event-takarazuka/main@2x.png"
				alt="宝塚歌劇 花組公演ペアチケットプレゼント"
				class="u-img__max mb2">
				<p>宝塚歌劇 花組公演のペアチケットを抽選で5組10名さまにプレゼントいたします。この機会に奮ってご応募ください！</p>
				<p>公演の詳細はマイページにログイン後、申込ページにてご確認ください。</p>

				<h4 class="u-ttl__m">公演・チケット概要</h4>
				<div class="u-list__dl_table">
					<dl>
						<dt>[公演日時]</dt>
						<dd>2018年1月3日（水） 11:00開演 </dd>
					</dl>
					<dl>
						<dt>[公演劇場]</dt>
						<dd>宝塚大劇場 （兵庫県宝塚市栄町1丁目1−57）<br><small class="u-small">※劇場までの交通費や宿泊費等は各自ご負担ください。</small></dd>
					</dl>
					<dl>
						<dt>[当選人数]</dt>
						<dd>5組10名さま ※当選者の方にペアチケットを送付します</dd>
					</dl>
					<dl>
						<dt>[応募申込]</dt>
						<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
					</dl>
					<dl>
						<dt>[募集期間]</dt>
						<dd>2017年12月1日（金）～2017年12月10日（日）</dd>
					</dl>
					<dl>
						<dt>[当選者発表]</dt>
						<dd>当選者の発表は、チケットの発送をもって代えさせていただきます。</dd>
					</dl>
					<dl>
						<dt>[注意事項]</dt>
						<dd>・座席はあらかじめ決められておりますので指定はできません。<br>
							・座席についてのお問い合わせはお答えいたしかねますので、あらかじめご了承ください。<br>
							・上演時間は、幕間休憩（30分）を含めて約3時間です<br>
							・宝塚歌劇では、出演者一同お花のお届け物を辞退させていただいております。<br>・本プレゼントに関するご質問等は、<a href="../../form/form-contact/" class="u-icon" target="_blank">こちら</a>からお問い合わせください。</dd>
					</dl>
				</div>

				<div class="u-btn-layout mt2">
					<div class="u-btn-layout__row">
						<label class="u-btn_end">応募の受け付けは終了いたしました</label>
					</div>
				</div>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
