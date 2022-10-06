<?php
//base
include ("../../function.php");
$content = get_id_data('4049');
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
		<div class="main__wrapper">
			<section class="section wrapper">
				<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img data-src="<?php echo $img_url ?>/event/golf11/main.png" data-retina="<?php echo $img_url ?>/event/golf11/main@2x.png"
					 alt="PGAゴルフラウンドレッスン in 兵庫 概要" class="u-img__max u-only__pc">
					<img data-src="<?php echo $img_url ?>/event/golf11/main-sp@2x.png" alt="PGAゴルフラウンドレッスン in 兵庫 概要" class="u-img__max u-only__sp">
				</figure>
			</div>
			<p>大好評の<strong>PGA（日本ゴルフ協会）認定ティーチングプロ</strong>にじっくり18ホール指導していただけるラウンドレッスン。今回は、<strong>2011年日本プロゴルフ選手権大会開催コースの小野東洋ゴルフ倶楽部</strong>での開催です。<br>プロ1名とアマチュア3名の少人数、実践的なラウンドレッスンで目標スコアを達成も！？<br>コースは『西の名匠』上田治氏が設計した、東播磨の起状豊かな丘陵地に展開する<strong>プロトーナメント仕様の雄大で骨太なチャンピオンコース！</strong><br>奮ってご応募ください！</p>
			<h4 class="u-ttl__m">2018年1月に実施した「ゴルフラウンドレッスン in 若洲」イベントのレポートはこちら</h4>
			<div class="flex between">
				<figure class="w50 center mb">
					<img data-src="<?php echo($img_url)?>/event/report-golf5/img__1.png" data-retina="<?php echo($img_url)?>/event/report-golf5/img__1@2x.png"
					 style="max-width:400px;" class="u-img__max">
				</figure>
				<figure class="w50 center mb">
					<img data-src="<?php echo($img_url)?>/event/report-golf5/img__2.png" data-retina="<?php echo($img_url)?>/event/report-golf5/img__2@2x.png"
					 style="max-width:400px;" class="u-img__max">
				</figure>
			</div>
			<ul class="u-list__ul">
				<li>
					<a href="report-golf5.php" class="u-icon">ゴルフラウンドレッスン in 若洲レポート</a>
				</li>
			</ul>
			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table mb8">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>参加者3名にプロ1名が同行し、1ラウンド18ホールレッスンをいたします（キャディ付）。</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>2019年1月26日（土） 9:00集合予定<br>※スタート前レッスンも予定しております。<br>また、全組ホールアウト後、懇親会とプロからのアドバイスを兼ねたティーパーティーを実施いたします。（17:00～17:30終了予定）</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>小野東洋ゴルフ倶楽部<br>兵庫県小野市日吉町570-1 <a href="https://goo.gl/maps/sUXRo3pg5Ft" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[交通]</dt>
					<dd>
						<ul class="u-list__ul_dot">
							<li>山陽自動車道 三木小野ICより 8.8Km（約14分）</li>
							<li>中国自動車道 吉川ICより 16.6Kｍ（約27分）</li>
							<li>神戸電鉄 小野駅よりタクシーで約10分（約2,000円）</li>
							<li>JR加古川線 小野町駅よりタクシーで約13分（約2,700円）</li>
						</ul> 詳しくは<a href="http://www.onotoyo-golf.com/access.html" target="_blank" class="u-icon">小野東洋ゴルフ倶楽部のホームページ</a>をご参照下さい。
					</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>15名さま</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料（プレーフィ、レッスン代、昼食、ティーパーティー代含む）<br><small class="u-small">※現地までの交通費、朝食や売店利用等は各自ご負担ください。</small></dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2018年11月15日（木）～11月25日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選者発表は　先着順にてご案内いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>
						<ul class="u-list__ul_dot" style="font-feature-settings : 'palt';">
							<li>参加確定後、10日前までに日本プロゴルフ協会より詳しいご案内を送付いたします。</li>
							<li>本レッスンの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>[運営協力]</dt>
					<dd>公益社団法人 日本プロゴルフ協会</dd>
				</dl>
			</div>
			<div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<label class="u-btn_end">応募の受け付けは終了いたしました</label>
				</div>
			</div>
			<!-- <div class="u-btn-layout mb2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/113" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">イベントに申し込む</a>
				</div>
			</div>
			<?php if (!$ssoFlag == 1){ ?>
			<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
				 class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?> -->
		</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
