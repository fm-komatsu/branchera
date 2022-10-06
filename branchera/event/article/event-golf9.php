<?php
//base
include ("../../function.php");
$content = get_id_data('4045');
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
				<figure>

					<img data-src="../../lib/img/event/golf9/main@2x.jpg"
					data-srcset="../../lib/img/event/golf9/main-sp@2x.jpg 666w,../../lib/img/event/golf9/main.jpg"
					alt="PGAゴルフアカデミー体験レッスン2018 東西Ｗ開催ご招待"
					class="u-img__max">
				</figure>
			</div>
			<div class="u-assist">
				<p style="font-feature-settings:'palt';">昨年も好評の<strong>会員さまだけの特別プログラム！</strong><br>日本プロゴルフ協会が30年かけて作り上げたティーチング指導のためのカリキュラムをぜひご体験ください。少人数制で、<strong>レベルに合わせたレッスン</strong>でしっかり指導を受けられます。さらに<strong>ゴルフ場でのレッスンなので実践的！</strong>みなさま、奮ってご応募ください。</p>
			</div>
			<h4 class="u-ttl__m">昨年実施した「PGAゴルフアカデミー体験レッスン」イベントのレポートはこちら</h4>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf4/img__1.png"
						data-retina="<?php echo($img_url)?>/event/report-golf4/img__1@2x.png" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/report-golf4/img__2.png"
						data-retina="<?php echo($img_url)?>/event/report-golf4/img__2@2x.png" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
			</div>
			<ul class="u-list__ul">
				<li>
					<a href="report-golf4.php" class="u-icon">PGAゴルフアカデミー体験レッスン2017 東西W開催レポート</a>
				</li>
			</ul>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催場所]</dt>
					<dd>（1） PGAゴルフアカデミー東条の森　東条の森カントリークラブ内<br>　　　兵庫県加東市大畑1071-7-2<br>（2） PGAゴルフアカデミー太平洋クラブ益子　太平洋クラブ益子PGAコース内<br>　　　栃木県芳賀郡益子町七井3302-1</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>（1）　2018年11月10日（土）7：00集合　16：30解散予定<br>（2）　2018年11月17日（土）7：00集合　16：30解散予定</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>（1） PGAゴルフアカデミー東条の森　3名<br>（2） PGAゴルフアカデミー太平洋クラブ益子　4名</dd>
				</dl>
				<dl>
					<dt>[参加費用]</dt>
					<dd>参加費無料<br>※集合場所までの交通費や宿泊費等は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2018年9月20日（木）～9月30日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2018年10月1日（月）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd style="font-feature-settings:'palt';">・本レッスンの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。<br>・いずれか<strong>1つのコースしかご応募できません</strong>のでご注意ください。</dd>
				</dl>
			</div>

			<h4 class="u-ttl__m">体験レッスンスケジュール（予定）</h4>
			<div class="sc_table">
				<dl>
					<dt>7：30</dt>
					<dd>コース内レッスン・コンディショニング（ストレッチや体操）</dd>
				</dl>
				<dl>
					<dt>10：00</dt>
					<dd>コンディショニング・練習場レッスン</dd>
				</dl>
				<dl>
					<dt>12：00</dt>
					<dd>昼食</dd>
				</dl>
				<dl>
					<dt>13：30</dt>
					<dd>ラウンドレッスン（9ホール）</dd>
				</dl>
				<dl>
					<dt>16：30</dt>
					<dd>解散</dd>
				</dl>
				<dl>
					<dt>ご注意事項</dt>
					<dd>・上記スケジュールは、天候等により変更になる場合があります。<br>・詳細は参加が確定した後、日本プロゴルフ協会よりご案内いたします。</dd>
				</dl>
			</div>

			<div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<label class="u-btn_end">応募の受け付けは終了いたしました</label>
				</div>
			</div>

			<!-- <div class="u-btn-layout mb2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/107" target="_blank" class="u-btn_point u-btn-layout__item">11月10日（土） 東条の森コースに応募する</a>
					<a href="<?php echo $mypoint_url ?>/108" target="_blank" class="u-btn_point u-btn-layout__item">11月17日（土） 益子コースに応募する</a>
				</div>
			</div>

			<small class="u-small" style="color: red; font-weight: bold">※お申込みはいずれか1つのコースのみとなります。</small><br>
			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?> -->

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
