<?php
//base
include ("../../function.php");
$content = get_id_data('4075');
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
          <img data-src="<?php echo $img_url ?>/event/golf16/main.png" data-retina="<?php echo $img_url ?>/event/golf16/main@2x.png"
           alt="PGAゴルフラウンドレッスン in 房総cc 概要" class="u-img__max u-only__pc">
          <img data-src="<?php echo $img_url ?>/event/golf16/main-sp@2x.png" alt="PGAゴルフラウンドレッスン in 房総cc 概要" class="u-img__max u-only__sp">
        </figure>
      </div>
      <div class="u-assist">
        <p><strong>毎回大好評のイベント！</strong><br>都内近郊ゴルフ場にて<strong>PGA（日本プロゴルフ協会）認定ティーチングプロにじっくり18ホール指導</strong>していただけます。プロ1名とアマチュア3名の少人数、<strong>実践的なラウンドレッスン</strong>で目標スコアを達成も！？奮ってご応募ください！！</p>
      </div>
      <h4 class="u-ttl__m">過去に実施した「ゴルフラウンドレッスン」イベントレポートはこちら</h4>
      <div class="flex between">
        <figure class="w50 center mb">
          <img data-src="<?php echo($img_url)?>/event/report-golf11/img__1.jpg" data-retina="<?php echo($img_url)?>/event/report-golf11/img__1@2x.jpg"
           style="max-width:400px;" class="u-img__max">
        </figure>
        <figure class="w50 center mb">
          <img data-src="<?php echo($img_url)?>/event/report-golf11/img__3.jpg" data-retina="<?php echo($img_url)?>/event/report-golf11/img__3@2x.jpg"
           style="max-width:400px;" class="u-img__max">
        </figure>
      </div>
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
          <a href="report-golf11.php" class="u-icon">ゴルフラウンドレッスン in 小野東洋GC レポート</a>
        </li>
        <li>
          <a href="report-golf5.php" class="u-icon">ゴルフラウンドレッスン in 若洲レポート</a>
        </li>
      </ul>
      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table mb8">
        <dl>
          <dt>[イベント内容]</dt>
          <dd>参加者3名にプロ1名が同行し、1ラウンド18ホールレッスンをいたします（OUTコーススタート キャディ付）。</dd>
        </dl>
        <dl>
          <dt>[開催日時]</dt>
          <dd>2019年11月23日（土・祝） 集合時間 7:30、開始時間 8:30予定<br>※スタート前レッスンも予定しております。<br>※ 全組ホールアウト後、懇親会とプロからのアドバイスを兼ねたティーパーティーを実施いたします。（16:30頃終了予定）</dd>
        </dl>
        <dl>
          <dt>[開催場所]</dt>
          <dd>房総カントリークラブ 東コース<br>千葉県長生郡睦沢町極楽寺2300 <a href="https://goo.gl/maps/ByLGBi26eCMWPq6V8" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
        </dl>
        <dl>
          <dt>[募集人数]</dt>
          <dd>12名</dd>
        </dl>
        <dl>
          <dt>[費用]</dt>
          <dd>参加費無料（ゴルフプレー代、レッスン代、昼食、ティーパーティー代含む）<br><small class="u-small">※現地までの交通費、朝食や売店利用等は各自ご負担ください。</small></dd>
        </dl>
        <dl>
          <dt>[応募申込]</dt>
          <dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
        </dl>
        <dl>
          <dt>[受付期間]</dt>
          <dd>2019年9月19日（木）～2019年9月30日（月）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>当選された方へ2019年10月1日（火）より随時メールにてご連絡いたします</dd>
        </dl>
        <dl>
          <dt>[ご注意事項]</dt>
          <dd>
            <ul class="u-list__ul_dot" style="font-feature-settings : 'palt';">
              <li>※ 長谷工IDマイページにログインしてお申し込みください。</li>
              <li>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
              <li>※ 本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
              <li>※ 参加確定後、10日前までに日本プロゴルフ協会より詳しいご案内を送付いたします。</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>[運営協力]</dt>
          <dd>公益社団法人 日本プロゴルフ協会</dd>
        </dl>
      </div>
			<?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/135" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">ラウンドレッスンに申し込む</a>
					</div>
				</div>
			<?php } else { ?>
				<label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
			<?php } ?>

			<?php if (!$ssoFlag == 1){ ?>
			<small class="u-small">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
				 class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>
    </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
