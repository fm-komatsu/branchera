<?php
//base
include ("../../function.php");
$content = get_id_data('4041');
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

			<h2 class="u-ttl__l">お子さま向けのトークセッションあり！<br class="u-only__pc">ブルーノート東京「JAZZ for CHILDREN」へ無料でご招待いたします。</h2>

			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
					data-src="<?php echo $img_url?>/event/event-jazz/main-v.png"
					data-retina="<?php echo $img_url?>/event/event-jazz/main-v@2x.png"
					alt="ブルーノート東京「JAZZ for CHILDREN」無料ご招待"
					class="u-img__max u-only__pc">
					<img
					data-src="../../lib/img/event/event-jazz/main-v-sp.png"
					data-retina="../../lib/img/event/event-jazz/main-v-sp@2x.png"
					alt="ブルーノート東京「JAZZ for CHILDREN」無料ご招待"
					class="u-img__max u-only__sp">
				</figure>
			</div>


			<div class="u-assist_white">

				<p>世界的ユニット“インコグニート”のリーダー、ブルーイが、ソウル、ジャズ、ファンクへの敬愛を基に発足した別プロジェクト“シトラス・サン”として登場！実力派女性ボーカリストや天才ハーモニカ奏者、そして日本を代表するトランペッター等をフューチャーし、極上のファンキー・メロウ・グルーヴを披露する！</p>
			</div>

			<div class="u-assist">
				<p>
					普段は大人の空間、社交場というイメージが強いジャズクラブですが、お子さまやティーンエイジャーのみなさまにも、そしてご家族一緒に楽しんでいただきたいとスタートしたのが『JAZZ for CHILDREN』。ぜひこの機会にご参加ください♪
				</p>

			</div>

			<h4 class="u-ttl__m">公演内容（予定）</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[公演名]</dt>
					<dd>ブルーイfrom インコグニートpresents “シトラス・サン” <br>with special guest 日野皓正</dd>
				</dl>
				<dl>
					<dt>[スケジュール]</dt>
					<dd>14:00　開場<br>15:00〜15:15　TALK<br>(シトラス・サン/ インコグニートのリーダー＆ギタリスト、ブルーイが、学生および児童のみなさま向けに『バンド演奏とは何か？』をわかりやすく解説！)<br>15:15〜16:00　LIVE<br>※ライブ終了後、サイン会/撮影会を予定</dd>
				</dl>
			</div>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日]</dt>
					<dd>8 月12 日（日） 14:00 開場、15:00 開演</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>ブルーノート東京　<a href="https://goo.gl/maps/TNscDaM5HNH2" class="u-icon" target="_blank">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費（ミュージックチャージ）通常「大人」8,500円のところ無料<br>※現地でのご飲食代は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>10組30名程度（後⽇メールで参加⼈数をおうかがいします）</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>7/19（⽊）〜7/29（日） ※受付順にご案内予定</dd>
				</dl>
				<dl>
					<dt>[応募条件]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>⻑⾕⼯ID をお持ちのご本人さま（20 歳以上）の参加が必須となります。</li>
							<li>⼩学⽣〜⾼校⽣のお⼦さま1 名以上の参加が必須となります。</li>
							<li>上記2 名さまを含み、1 組4 名さままでの応募とさせていただきます。</li>
						</ul>

					</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>小学生未満のお子さまはご参加いただけません。</li>
							<li>当日、身分証のご提示をお願いする場合がございます。</li>
							<li>スペシャルゲストは1 曲のみの出演予定となっております。</li>
							<li>⾃由席をご⽤意しております。座席の指定は承ることができませんのでご了承ください。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

			<!-- <div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/96" target="_blank" class="u-btn_point u-btn-layout__item">このイベントに応募する</a>
				</div>
			</div> -->

			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
