<?php
//base
include ("../../function.php");
$content = get_id_data('4010');
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

		<div style="margin:-48px -24px 24px -24px; " class="u-only__pc">
			<img
			data-src="../../lib/img/event/event-tanakami/main.png"
			alt="まぼろしのお米『たなかみ米』田植え体験"
			style="max-width:1330px;"
			class="u-img__max">
		</div>

		<section class="main__wrapper">

			<div class="u-only__sp">
				<img
				data-src="../../lib/img/event/event-tanakami/main-sp@2x.png"
				alt="まぼろしのお米『たなかみ米』田植え体験"
				class="u-img__max mb-inner">
			</div>

			<div class="mb4">
				<img data-src="../../lib/img/event/event-tanakami/img01.png"
				data-retina="../../lib/img/event/event-tanakami/img01-sp@2x.png"
				alt="まぼろしのお米『たなかみ米』田植え体験"
				class="u-img__max">


			</div>

			<div class="mb6">
				<p>長谷工グループ「長谷工あんしんデリ」がご提供するおいしくて安心なお米『たなかみ米』の田植えを、実際に体験しませんか？<br><strong>植えていただいた稲は、当サイトで収穫までリポートし、収穫したお米を参加者へプレゼント</strong>いたします。</p>
			</div>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日]</dt>
					<dd>2017年6月17日（土）　※雨天時、中止の場合がございます</dd>
				</dl>
				<dl>
					<dt>[開催時間]</dt>
					<dd>10:30イベント開始　12:30頃終了（予定）　（開始30分前より受付）</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>株式会社　長谷工あんしんデリ　大津農場<br>滋賀県大津市中野3-5-11</dd>
				</dl>
				<dl>
					<dt>[アクセス]</dt>
					<dd>石山駅（東海道本線・琵琶湖線）より路線バスで約20分、徒歩4分<br>※詳細は当選者の方へメールでお知らせします。マイカーOK</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>20～30人程度（ご当選者さまには後日メールで参加人数をおうかがいします）</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加無料　※交通費等は各自ご負担ください</dd>
				</dl>
				<dl>
					<dt>[イベント内容]</dt>
					<dd>所要時間2～2.5時間程度<br>1）集合後、楽しみながら田植え体験　約60分<br>2）お米ができるまで（施設案内・説明）　約30分<br>3）おみやげプレゼント♪</dd>
				</dl>
				<dl>
					<dt>[応募申し込み]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
				</dl>

				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年5月1日（月）～ 5月14日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>5月17日（水）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[服装]</dt>
					<dd>・汚れても良い服でお越しください（必要な方は着替えをご持参ください）。
						<br>・軍手および農業用長靴はこちらで用意しております。
					</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

		</section>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
