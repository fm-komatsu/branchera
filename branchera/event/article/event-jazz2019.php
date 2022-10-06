<?php
//base
include ("../../function.php");
$content = get_id_data('4060');
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

			<h2 class="u-ttl__l">前回ご好評の、家族が一緒に楽めるジャズイベント<br class="u-only__pc">ブルーノート東京『JAZZ for CHILDREN』へ無料ご招待</h2>

			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
					data-src="<?php echo $img_url ?>/event/event-jazz2019/main-v.jpg"
					data-retina="<?php echo $img_url ?>/event/event-jazz2019/main-v@2x.jpg"
					alt="ブルーノート東京「JAZZ for CHILDREN」2019無料ご招待"
					class="u-img__max u-only__pc">
					<img
					data-src="<?php echo $img_url ?>/event/event-jazz2019/main-v-sp.jpg"
					data-retina="<?php echo $img_url ?>/event/event-jazz2019/main-v-sp@2x.jpg"
					alt="ブルーノート東京「JAZZ for CHILDREN」2019無料ご招待"
					class="u-img__max u-only__sp">
				</figure>
			</div>


			<div class="u-assist_white">
				<h4 class="u-ttl__m">スムース・ジャズ界を代表する人気サックス奏者が、<br class="u-only__pc">モータウン黄金時代の礎を築いたレジェンドを迎えるプレミアム・ショウ</h4>
				<div class="u-float__left">
					<figure>
						<img
						data-src="<?php echo $img_url ?>/event/event-jazz2019/event-jazz2019_img01.jpg"
						data-retina="<?php echo $img_url ?>/event/event-jazz2019/event-jazz2019_img01@2x.jpg"
						alt="デイヴ・コーズ ヴァレリー・シンプソン｜ブルーノート東京「JAZZ for CHILDREN」2019"
						style="max-width:334px;"
						class="u-img__max">
					</figure>
				</div>
				<p>ハリウッド・ウォーク・オブ・フェイム（栄誉の舗道）に輝くスムース・ジャズ～フュージョンのビッグ・スター、デイヴ・コーズが会心のステージを繰り広げる。しかも今回はソウル・ミュージック界に輝くデュオ“アシュフォード＆シンプソン”で一世を風靡し、作曲家としても高い評価を受ける（2018年に米国作曲家作詞家出版者協会から表彰）ヴァレリー・シンプソンとのコラボレーションだ。ボビー・コールドウェルのバンドを経て、ゴールド・ディスク作品『Lucky Man』を筆頭に数多くの人気アルバムを発表してきたデイヴ。’60～‘70年代のモータウン・レーベルに歌声と楽曲の双方で貢献したヴァレリー。ふたつの魂が出会う、プレミアム級のひとときが待ち遠しい。</p>
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
					<dd>デイヴ・コーズ featuring ヴァレリー・シンプソン</dd>
				</dl>
				<dl>
					<dt>[スケジュール]</dt>
					<dd>5月5日（日） 14:30　開場<br>15:30〜16:30　LIVE<br>※ライブ終了後、サイン会/撮影会を予定</dd>
				</dl>
			</div>

			 <h4 class="u-ttl__m">昨年開催された ブルーノート東京「JAZZ for CHILDREN」イベントのレポートはこちら</h4>
        <div class="flex between mb2">
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo01@2x.jpg" class="u-img__max mb2_sp" /></div>
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo02@2x.jpg" class="u-img__max" /></div>
        </div>
        <ul class="u-list__ul">
          <li>
            <a href="<?php echo $base_url ?>/event/article/report-jazz.php" class="u-icon">ブルーノート東京「JAZZ for CHILDREN」レポート</a>
          </li>
        </ul>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日]</dt>
					<dd>5月5日（日）こどもの日！ 14:30 開場、15:30 開演</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>ブルーノート東京　<a href="https://goo.gl/maps/TNscDaM5HNH2" class="u-icon" target="_blank">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費（ミュージックチャージ）通常「大人」8,800円のところ無料<br>※現地でのご飲食代は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>10組50名程度（後⽇メールで参加⼈数をおうかがいします）</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>3/22（金）〜3/31（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>4/2（火）より随時メール</dd>
				</dl>
				<dl>
					<dt>[応募条件]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>⻑⾕⼯ID をお持ちのご本人さま（20歳以上）の参加が必須となります。</li>
							<li>⼩学⽣〜⾼校⽣のお⼦さま1名以上の参加が必須となります。</li>
							<li>上記2名さまを含み、1組4名さままでの応募とさせていただきます。</li>
						</ul>

					</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>小学生未満のお子さまはご参加いただけません。</li>
							<li>当日、身分証のご提示をお願いする場合がございます。</li>
							<li>⾃由席をご⽤意しております。座席の指定は承ることができませんのでご了承ください。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<?php if($eventSts == "new") { ?>

			<div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/122" target="_blank" class="u-btn_point u-btn-layout__item">このイベントに応募する</a>
				</div>
			</div>

			<?php } else { ?>
				<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>
			<?php } ?>

			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
