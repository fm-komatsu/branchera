<?php
//base
include ("../../function.php");
$content = get_id_data('4043');
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
						data-src="<?php echo($img_url)?>/event/golf8/main-v.png"
						data-srcset="<?php echo($img_url)?>/event/golf8/main-sp@2x.png 666w,
						<?php echo($img_url)?>/event/golf8/main-v.png"
						alt="ゴルフプロアマ大会参加・プロゴルフ観戦ツアーW開催"
						class="u-img__max"
					>

				</figure>
			</div>
			<div class="u-assist">
				<p>昨年も好評の、<strong>プロゴルファーと一緒に1ラウンドプレーできる</strong>「プロアマ大会」に今年もブランシエラクラブ会員さまを<strong>無料ご招待</strong>いたします。<br>あわせて、「日本プロゴルフシニア選手権大会 住友商事サミットカップ」<strong>決勝トーナメントの観戦ツアー</strong>も行ないます！みなさま奮ってご応募ください！</p>
			</div>

			<h4 class="u-ttl__m">昨年実施した「プロアマ大会」「観戦ツアー」イベントのレポートはこちら</h4>
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
						data-src="<?php echo($img_url)?>/event/report-golf2/img01.jpg"
						data-src="<?php echo($img_url)?>/event/report-golf2/img01@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf2/img02.jpg"
						data-src="<?php echo($img_url)?>/event/report-golf2/img02@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>

			</div>
			<ul class="u-list__ul">
				<li>
					<a href="report-golf2.php" class="u-icon">PGAスペシャルプロアマ大会2017 イベントレポート</a>
				</li>
				<li>
					<a href="report-golf3.php" class="u-icon">プロゴルフ観戦ツアー イベントレポート</a>
				</li>
			</ul>

			<h4 class="u-ttl__m">第57回日本プロゴルフシニア選手権大会<br>住友商事・サミットカップ プロアマ大会ご招待　イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>プロ1名 / アマ3名の1組4名で1ラウンドプレーできます。</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2018年10月1日（月） 7:00集合、8:00スタート予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>サミットゴルフクラブ<br>茨城県石岡市嘉良寿理139</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>6名</dd>
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
					<dd>2018年8月23日（木）～ 9月2日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2018年9月4日（火）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>・2018年10月3日（水）に開催される本戦のプロアマ大会とは異なりますのでご注意ください。<br>・18ホールスループレーの予定となります。<br>・本プロアマ大会の参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
				</dl>
			</div>

			<h4 class="u-ttl__m">第57回日本プロゴルフシニア選手権大会<br>住友商事・サミットカップ 観戦ツアーご招待　イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>プロゴルファーによるガイド付きの観戦ツアーです。（お土産付き）<br>ゴルフに興味のある方、親子・ご友人同士のご参加も大歓迎！</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2018年10月6日（土） 10:30集合、14:30解散予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>サミットゴルフクラブ<br>茨城県石岡市嘉良寿理139</dd>
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
					<dd>2018年8月23日（木）～ 9月2日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2018年9月4日（火）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>・応募・当選されたご本人さまの参加が必須となります。<br>・参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

			<!-- <div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/104" target="_blank" class="u-btn_point u-btn-layout__item">プロアマ大会に応募する</a>
					<a href="<?php echo $mypoint_url ?>/105" target="_blank" class="u-btn_point u-btn-layout__item">観戦ツアーに応募する</a>
				</div>
			</div>

			<small class="u-small" style="color: red; font-weight: bold">※お申し込みはプロアマ大会・観戦ツアーのいずれか1回のみとなります。</small><br>
			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?> -->

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
