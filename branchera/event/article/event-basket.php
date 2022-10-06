<?php
//base
include ("../../function.php");
$content = get_id_data('4020');
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

			<img data-src="../../lib/img/event/event-basket/main.jpg"
			data-srcset="../../lib/img/event/event-basket/main-sp@2x.jpg 666w,../../lib/img/event/event-basket/main.jpg"
			alt="【 東京羽田ヴィッキーズ 】女子プロバスケットボール公式戦観戦ご招待"
			class="u-img__max">

			<p class="mb4">東京羽田ヴィッキーズ vs トヨタ自動車アンテローブスのWリーグ公式戦観戦に、抽選で5組10名さまをご招待いたします。今回は長谷工グループが主催するゲームとして、スペシャル観覧席をご利用いただけますので、この機会に奮ってご応募ください！</p>

			<div class="w90 center">
				<figure>
					<img data-src="../../lib/img/event/event-basket/img01.jpg"
			data-srcset="../../lib/img/event/event-basket/img01@2x.jpg 666w,../../lib/img/event/event-basket/img01.jpg"
			alt="【 東京羽田ヴィッキーズ 】女子プロバスケットボール公式戦観戦"
			class="u-img__max">
				</figure>
			</div>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>2017年11月12日（日）13：00～試合開始</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>大田区総合体育館　<a href="http://www.ota.esforta.jp/access/index.html" target="_blank">地図はこちらから</a><br>※集合場所までの交通費や宿泊費等は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>5組10名さま　※当選者の方にペアチケットを送付します</dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年10月17日（火）～10月27日（金）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選者の発表は、チケットの発送をもって代えさせていただきます。</dd>
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
