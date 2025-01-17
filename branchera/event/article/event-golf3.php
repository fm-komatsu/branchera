<?php
//base
include ("../../function.php");
$content = get_id_data('4017');
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
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<section class="main__wrapper">

			<img data-src="../../lib/img/event/golf3/main.png"
			data-srcset="../../lib/img/event/golf3/main-sp@2x.jpg 666w,
			../../lib/img/event/golf3/main.png"
			alt="ゴルフプロアマ大会参加・プロゴルフ観戦ツアーW開催"
			class="u-img__max">
			<p>前回好評の、プロゴルファーと一緒に1ラウンドプレーできる「プロアマ大会」、今回は茨城県石岡市のサミットGCでの開催へのご招待です。<br>あわせて、「日本プロゴルフシニア選手権大会 住友商事サミットカップ」決勝トーナメントの観戦ツアーも行ないます！みなさま奮ってご応募ください！</p>

			<h4 class="u-ttl__m">PGAスペシャルプロアマ大会2017ご招待　イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>プロ1名 / アマ3名の1組4名で1ラウンドプレーできます。</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2017年10月2日（月） 7：30～スタート予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>茨城県石岡市／サミットゴルフクラブ<br>茨城県石岡市嘉良寿理139</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>6名</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（1ラウンドのプレーフィーと昼食代）<br>※交通費、宿泊費、ゴルフ場での個人利用分は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申し込み]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年8月21日（月）～8月31日（木）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2017年9月4日（月）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>2017年10月4日（水）に開催される本戦のプロアマ大会とは異なりますのでご注意ください。</dd>
				</dl>
			</div>

			<h4 class="u-ttl__m">日本プロゴルフシニア選手権大会 住友商事サミットカップ 観戦ツアー　イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>プロゴルファーによるガイド付きの観戦ツアーです。（お土産付き）<br>ゴルフに興味のある方、親子・ご友人同士のご参加も大歓迎！</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2017年10月7日（土） 10：30～スタート・14：30解散予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>茨城県石岡市／サミットゴルフクラブ<br>茨城県石岡市嘉良寿理139</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>15組30名<br>※長谷工IDをお持ちの18歳以上のご本人と同伴者1名まで</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（昼食としてお弁当を用意します。）<br>※集合場所までの交通費や宿泊費等は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申し込み]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年8月21日（月）～8月31日（木）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2017年9月4日（月）より随時メールにてご連絡いたします。</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
