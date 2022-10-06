<?php
//base
include ("../../function.php");
$content = get_id_data('4051');
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
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>
    <div class="main__wrapper">
      <section class="main__item mb0">
        <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
          <figure>
            <img data-src="<?php echo $img_url ?>/event/event-jal2018/main-sp@2x.png" alt="JAL工場見学～SKY MUSEUM～ご招待"
              class="u-img__max u-only__sp">
            <img data-src="<?php echo $img_url ?>/event/event-jal2018/main@2x.png" data-src="<?php echo $img_url ?>/event/event-jal2018/main.png"
              alt="JAL工場見学～SKY MUSEUM～ご招待" class="u-img__max u-only__pc">
          </figure>
        </div>
        </picture>
        <p>空のお仕事やJALの歴史に触れ、本物の航空機を間近でご覧いただける無料見学会です。<br>見学コースは、『展示エリア』、『航空教室』、『格納庫見学』となります。</p>
        <ul class="u-list__ul" style="font-feature-settings : 'palt';">
          <li>展示エリア・・・JALグループの歴代航空機のモデルプレーン、歴代の制服、仕事紹介エリアなどの見学</li>
          <li>航空教室・・・・航空機の飛ぶ仕組みや羽田空港の概要などの学習</li>
          <li>格納庫見学・・・実際に整備士が働く姿や本物の航空機を間近で見学</li>
        </ul>
        <p><strong>この貴重な機会に、ぜひご参加ください！</strong></p>
        <h4 class="u-ttl__m">昨年実施した「JAL工場見学～SKY MUSEUM～」イベントのレポートはこちら</h4>
        <div class="flex between mb2">
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/report-jal/img05@2x.jpg" class="u-img__max mb2_sp" /></div>
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/report-jal/img06@2x.jpg" class="u-img__max" /></div>
        </div>
        <div class="flex between">
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/report-jal/img07@2x.jpg" class="u-img__max mb2_sp" /></div>
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/report-jal/img08@2x.jpg" class="u-img__max" /></div>
        </div>
        <ul class="u-list__ul">
          <li>
            <a href="report-jal.php" class="u-icon">JAL工場見学イベントレポート</a>
          </li>
        </ul>
        <h4 class="u-ttl__m">イベント概要</h4>
        <div class="u-list__dl_table">
          <dl>
            <dt>[開催日]</dt>
            <dd>2019年1月20日（日）</dd>
          </dl>
          <dl>
            <dt>[開催時間]</dt>
            <dd>9:15集合・受付<br>［見学会（10:00～11:40）開始の前に、展示エリアやお土産コーナーをお楽しみいただけます］</dd>
          </dl>
          <dl>
            <dt>[開催場所]</dt>
            <dd>JALメインテナンスセンター1（東京都大田区羽田空港3-5-1）<br><a href="https://goo.gl/maps/kKY6RKShw6n" target="_blank" rel="nofollow"
                class="u-icon">地図はこちら</a></dd>
          </dl>
          <dl>
            <dt>[アクセス]</dt>
            <dd>東京モノレール「新整備場」駅下車、徒歩2分<br>※普通（各駅停車）のみ停車します。快速・区間快速は停車しません。</dd>
          </dl>
          <dl>
            <dt>[募集人数]</dt>
            <dd>15組30名<br>※長谷工IDをお持ちの18歳以上のご本人と、同伴者1名まで<br>（小学生未満は入場不可）</dd>
          </dl>
          <dl>
            <dt>[費用]</dt>
            <dd>参加無料<br>※交通費等は各自ご負担ください</dd>
          </dl>
          <dl>
            <dt>[イベント内容]</dt>
            <dd>所要時間約100分（10:00～11:40）<br>◆展示エリア<br>◆航空教室<br>◆格納庫見学<br>現地集合・現地解散となります。<br>ブランシエラクラブ専用受付にて受付後、他のお客さまと一緒に見学となります。</dd>
          </dl>
          <dl>
            <dt>[応募申し込み]</dt>
            <dd>長谷工IDマイページにログインしてお申し込みください。</dd>
          </dl>
          <dl>
            <dt>[受付期間]</dt>
            <dd>2018年12月3日（月）～12月9日（日）</dd>
          </dl>
          <dl>
            <dt>[当選者発表]</dt>
            <dd>
              <p style="margin-top:0;">12月12日（水）より随時メールにてご連絡いたします。</p>
            </dd>
          </dl>
          <dl>
            <dt>[ご注意事項]</dt>
            <dd style="font-feature-settings:'palt';">本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
          </dl>
        </div>
        <?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout mt2">
          <div class="u-btn-layout__row">
            <a href="<?php echo $mypoint_url ?>/117" target="_blank" class="u-btn_point u-btn-layout__item">このイベントに応募する</a>
          </div>
        </div>
        <?php } else { ?>
          <label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
        <?php } ?>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
