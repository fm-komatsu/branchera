<?php
//base
include ("../../function.php");
$content = get_id_data('4084');
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

//FLP ID
$flpID = '159';

//buttom message
$btnMesage = 'このイベントに応募する';
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
        <div>
          <div class="u-assist u-clearfix">
            <h3 class="u-ttl__m">「スナッグゴルフ＆ミニサッカー教室」イベント開催中止の決定について</h3>
            <p class="mb2">長谷工グループ「ブランシエラクラブ」事務局は、現在発生している新型コロナウイルス感染症が拡大している状況を受け、3月22日（日）に開催を予定していました「スナッグゴルフ＆ミニサッカー教室」イベントの開催中止を決定しましたので、お知らせいたします。</p>
            <p class="mb2">
            たくさんの方にご応募いただいておりましたが、ご参加されるみなさまや関係者の健康・安全面を第一に考え、誠に遺憾ではありますが、開催を中止することといたしました。
            </p>
            <p class="mb3">
            楽しみにしてくださったみなさまには、大変残念なお知らせとなりますが、何卒ご理解をいただきますよう、よろしくお願いいたします。
            </p>
            <p class="u-float__right">
            長谷工グループ「ブランシエラクラブ」事務局
            </p>

          </div>

        </div>
        <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
        <figure>
          <img src="<?php echo $img_url ?>/event/golf18/main-v@2x.jpg"
           alt="<?php echo $pageTtl; ?>" class="u-img__max u-only__pc">
        </figure>
        <figure>
          <img src="<?php echo $img_url ?>/event/golf18/main-v_sp@2x.jpg"
           alt="<?php echo $pageTtl; ?>" class="u-img__max u-only__sp">
        </figure>
      </div>
      <div class="u-assist">
        <p>前回、関東で開催したスナッグゴルフ親子体験イベントを、好評につき関西で初開催！<br>スナッグゴルフとは、プラスチック製の道具を使用した、誰でもプレーできる簡易版ゴルフのこと。お子さまやゴルフ経験がない方でも、大歓迎！<br>さらに今回は、サッカーインストラクターによるミニサッカー教室も開催！<br>広い芝のグラウンドで、みんなでスポーツを楽しみましょう。<br>ぜひご参加ください！！</p>
      </div>
      <div class="u-assist">
        <div class="flex flex_center">
          <div class="mb2_sp mr1 mr0_sp">
            <img
            data-src="<?php echo $img_url ?>/event/golf-index/pga-logo.png"
            data-retina="<?php echo $img_url ?>/event/golf-index/pga-logo@2x.png"
            style="max-width:130px;"
            alt="<?php echo $pageTtl ?>"
            class="u-img__max">
          </div>
          <div class="self-center">
            <h3 class="u-ttl__s mb0">公益社団法人 日本プロゴルフ協会（PGA)</h3>
          </div>
        </div>
        <hr>
        <p>1957年7月、東西のプロゴルフ協会を統合して設立された男子プロゴルファー団体。<br>今回もご協力いただきます！</p>
      </div>
			<h4 class="u-ttl__m">前回実施した「スナッグゴルフ親子体験イベント2019」のレポートはこちら</h4>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						src="<?php echo($img_url)?>/event/golf18/img__1@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center mb">
					<img
						src="<?php echo($img_url)?>/event/golf18/img__2@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
			</div>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						src="<?php echo($img_url)?>/event/golf18/img__5@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center">
					<img
						src="<?php echo($img_url)?>/event/golf18/img__7@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>

			</div>
			<ul class="u-list__ul">
				<li>
					<a href="report-golf12.php" class="u-icon">スナッグゴルフ親子体験イベントレポート</a>
				</li>
			</ul>
      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table_long mb8">
        <dl>
          <dt>[開催日時]</dt>
          <dd>2020年3月22日（日）13:00～16:30（12:30受付開始）</dd>
        </dl>
        <dl>
          <dt>[開催場所]</dt>
          <dd>生駒北スポーツセンター　グラウンド<br><span class="u-small">※雨天時には同施設の体育館にて開催いたします</span><br>奈良県生駒市高山町166-2 <a href="https://goo.gl/maps/wjsv96PoVwG6x7fKA" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
        </dl>
        <dl>
          <dt>[アクセス]</dt>
          <dd>
            <a href="http://www.hos-ikomakita.com/access/" target="_blank" rel="nofollow" class="u-icon">http://www.hos-ikomakita.com/access/</a>
          </dd>
        </dl>
        <dl>
          <dt>[スケジュール]</dt>
          <dd>
            <ol>
              <li>13:00　開会式</li>
              <li>13:15　ゴルフの基本練習</li>
              <li>14:15　スナッグゴルフ ミニゲーム</li>
              <li>15:15　ミニサッカー教室</li>
              <li>16:15　閉会式</li>
            </ol>
          </dd>
        </dl>
        <dl>
          <dt>[募集人数]</dt>
          <dd>親子15組30名（小学生以上のお子さま1名＋保護者1名）</dd>
        </dl>
        <dl>
          <dt>[費用]</dt>
          <dd>参加費無料（用具貸出代含む）<br><span class="u-small">※現地までの交通費は各自ご負担ください。</span></dd>
        </dl>
        <dl>
          <dt>[応募申込]</dt>
          <dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
        </dl>
        <dl>
          <dt>[受付期間]</dt>
          <dd>2020年2月6日（木）～3月1日（日）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>当選された方へ随時メールにてご連絡いたします</dd>
        </dl>
        <dl>
          <dt>[ご注意事項]</dt>
          <dd>
            <ul class="u-list__ul_dot u-font__palt">
              <li>このイベントはゴルフ未経験者の方を対象としたイベントです。ゴルフ経験者向けのレッスンではございません。</li>
              <li>安全管理上、お子さまは小学生以上とさせていただきます。</li>
              <li>未就学児を連れてのご見学は可能ですが、安全管理には各自十分ご留意願います。</li>
              <li>スナッグゴルフ用具は用意いたします。動きやすい服装、運動靴にてお越しください。</li>
              <li>本レッスンの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
            </ul>
          </dd>
        </dl>
      </div>
			<?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/<?php echo $flpID; ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right"><?php echo $btnMesage; ?></a>
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
