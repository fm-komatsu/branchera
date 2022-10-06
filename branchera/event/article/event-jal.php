<?php
//base
include ("../../function.php");
$content = get_id_data('4011');
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
				data-src="../../lib/img/event/event-jal/main.png"
				data-srcset="../../lib/img/event/event-jal/main-sp@2x.png 420w ,../../lib/img/event/event-jal/main@2x.png"
				alt="JAL工場見学～SKY MUSEUM～ご招待 / 会員限定イベント第4弾"
				class="u-img__max mb2">
				<p>空のお仕事やJALの歴史に触れ、本物の航空機を間近でご覧いただける無料見学会です。<br>見学コースは、『展示エリア』、『航空教室』、『格納庫見学』となります。</p>
				<p>
					◆展示エリア・・・JALグループの歴代航空機のモデルプレーン、歴代の制服、仕事紹介エリアなどの見学
					<br>◆航空教室・・・・航空機の飛ぶ仕組みや羽田空港の概要などの学習
					<br>◆格納庫見学・・・実際に整備士が働く姿や本物の航空機を間近で見学
				</p>
				<p>この貴重な機会に、ぜひご参加ください！</p>

				<h4 class="u-ttl__m">イベント概要</h4>
				<div class="u-list__dl_table">
					<dl>
						<dt>[開催日]</dt>
						<dd>2017年7月1日（土）</dd>
					</dl>
					<dl>
						<dt>[開催時間]</dt>
						<dd>11：00集合・受付（見学は11：30～13：10となります）</dd>
					</dl>
					<dl>
						<dt>[開催場所]</dt>
						<dd>JALメインテナンスセンター1（東京都大田区羽田空港3-5-1）<br><a href="https://goo.gl/maps/kKY6RKShw6n" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
					</dl>
					<dl>
						<dt>[アクセス]</dt>
						<dd>東京モノレール「新整備場」駅下車、徒歩2分<br>※普通（各駅停車）のみ停車します。快速・区間快速は停車しません。</dd>
					</dl>
					<dl>
						<dt>[募集人数]</dt>
						<dd>10組20名<br>※長谷工IDをお持ちの18歳以上のご本人と、同伴者1名まで<br>（小学生未満は入場不可）</dd>
					</dl>
					<dl>
						<dt>[費用]</dt>
						<dd>参加無料<br>※交通費等は各自ご負担ください</dd>
					</dl>
					<dl>
						<dt>[イベント内容]</dt>
						<dd>所要時間約100分（11：30～13：10）<br>◆展示エリア<br>◆航空教室<br>◆格納庫見学<br>現地集合・現地解散となります。<br>ブランシエラクラブ専用受付にて受付後、他のお客さまと一緒に見学となります。</dd>
					</dl>
					<dl>
						<dt>[応募申し込み]</dt>
						<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
					</dl>
					<dl>
						<dt>[受付期間]</dt>
						<dd>2017年5月15日（月）～ 5月21日（日）</dd>
					</dl>
					<dl>
						<dt>[当選者発表]</dt>
						<dd><p style="margin-top:0;">5月24日（水）より随時メールにてご連絡いたします。</p></dd>
					</dl>
				</div>

				<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>
			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
