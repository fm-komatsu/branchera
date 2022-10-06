<?php
//base
include ("../../function.php");
$content = get_id_data('4037');
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

			<h2 class="u-ttl__l">大好評のゴルフイベント！<br class="u-only__pc">プロゴルファーとラウンドできるプロアマ大会再び！</h2>
			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
					data-src="../../lib/img/event/golf7/main.png"
					alt="無料ゴルフイベント「PGAスペシャルプロアマ大会2018 ご招待」"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/event/golf7/main-sp.png"
					data-retina="../../lib/img/event/golf7/main-sp@2x.png"
					alt="無料ゴルフイベント「PGAスペシャルプロアマ大会2018 ご招待」"
					class="u-img__max u-only__sp">

				</figure>
			</div>

			<p>昨年も大好評の「PGAスペシャルプロアマ大会」。<br>今年も本ゴルフイベントに会員さま限定で<strong>無料ご招待</strong>いたします。PGA（日本プロゴルフ協会）の<strong>シニアトッププロと1ラウンドプレーできる貴重な機会</strong>です！ゴルフファンのみなさま、奮ってご応募ください！</p>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>PGAスペシャルプロアマ大会2018<br>＜プロ1名/アマ3名の1組4名でラウンド＞</dd>
				</dl>
				<dl>
					<dt>[開催日]</dt>
					<dd>2018年8月2日（木） 7:00 集合、8:00 スタート予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>太平洋クラブ 六甲コース<br>兵庫県三木市吉川町水上1582-1</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>6名</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（1ラウンドのプレーフィーと朝食・昼食代）<br>※交通費、宿泊費、ゴルフ場での個人利用分は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申込み]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2018年6月21日（木）～ 7月1日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2018年7月2日（月）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>2018年8月3日（金）開催の「マルハンカップ太平洋クラブシニア」のプロアマ大会とは別のイベントとなりますのでご注意ください。</li>
							<li>18ホールスループレーの予定となります。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

			<!-- <div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/94" target="_blank" class="u-btn_point u-btn-layout__item">プロアマ大会に応募する</a>
				</div>
			</div> -->

			<!-- <small class="u-small" style="color: red">※お申込みはプロアマ大会・観戦ツアーのいずれか1回のみとなります。</small><br> -->
			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
