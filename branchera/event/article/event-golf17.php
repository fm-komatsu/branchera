<?php
//base
include ("../../function.php");
$content = get_id_data('4078');
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
$flpID = '141';

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
        <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
        <figure>
          <img data-src="<?php echo $img_url ?>/event/golf17/main.jpg" data-retina="<?php echo $img_url ?>/event/golf17/main@2x.jpg"
           alt="<?php echo $pageTtl; ?>" class="u-only__pc u-img__max">
           <img data-src="<?php echo $img_url ?>/event/golf17/main-sp.jpg" data-retina="<?php echo $img_url ?>/event/golf17/main-sp@2x.jpg"
           alt="<?php echo $pageTtl; ?>" class="u-only__sp u-img__max">
        </figure>
      </div>
      <div class="u-assist">
        <p>ゴルフイベントでタイアップしているPGA（日本プロゴルフ協会）がブランシエラクラブ会員のみなさまを「日本プロスポーツ大賞授賞式＆パーティー」にご招待いたします。<br>たいへん貴重な機会ですので、みなさま奮ってご応募ください！！</p>
      </div>
      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table mb8">
        <dl>
          <dt>[イベント内容]</dt>
          <dd>日本プロスポーツ大賞授賞式＆パーティーご招待</dd>
        </dl>
        <dl>
          <dt>[開催日時]</dt>
          <dd>2019年12月19日（木）<br>授賞式　17:00～18:30（予定）<br>パーティー　19:00～20:30（予定）</dd>
        </dl>
        <dl>
          <dt>[開催場所]</dt>
          <dd>ホテル ニューオータニ（東京） 鶴の間 <a href="https://goo.gl/maps/uBeQfgceFmUEmJgi6" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
        </dl>
        <dl>
          <dt>[募集人数]</dt>
          <dd>5組10名 ※20歳以上の方に限らせていただきます。</dd>
        </dl>
        <dl>
          <dt>[応募申込]</dt>
          <dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
        </dl>
        <dl>
          <dt>[受付期間]</dt>
          <dd>2019年11月7日（木）～2019年11月17日（日）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>当選された方へ2019年11月19日（火）より随時メールにてご連絡いたします</dd>
        </dl>
        <dl>
          <dt>[ご注意事項]</dt>
          <dd>
            <ul class="u-list__ul_dot" style="font-feature-settings : 'palt';">
              <li>長谷工IDマイページにログインしてお申し込みください。</li>
              <li>長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
              <li>本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
              <li>当選者さま、ご同伴者さまともに20歳以上の方に限らせていただきます。</li>
              <li>当選者さまには授賞式10日前までに日本プロゴルフ協会より詳しいご案内を送付いたします。</li>
              <li>ドレスコードはありませんが、軽装はご遠慮いただければと思います。</li>
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
