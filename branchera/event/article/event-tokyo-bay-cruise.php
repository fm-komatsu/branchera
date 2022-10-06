<?php
//base
include( "../../function.php" );
$content = get_id_data( '4066' );
$pageTtl = $content[ 'title' ];
$eventSts = $content[ 'icon-img' ];

//meta
$metaTtl = $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array( "/event/", "イベント・キャンペーン" );
    include( $inc_path . "/lib/inc/pan.php" );
    ?>
    <?php
    include( $inc_path . "/lib/inc/page/_event/__main-header.php" );
    ?>

    <section class="main__wrapper">

      <h2 class="u-ttl__l">東京ベイクルーズイベントへ無料ご招待いたします！</h2>

      <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
        <figure>
          <img data-src="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/main-v.png" data-retina="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/main-v@2x.png" alt="<?php echo $pageTtl; ?>" class="u-img__max">
        </figure>
      </div>


      <div class="u-assist">
        <p>来たる2020年のビッグイベントに向けて、開発＆発展が著しい東京湾岸エリア。<br>そんな都市の絶景を海からゆっくり眺めてみませんか？<br>ブランシエラクラブ会員さまを、約120分の海の小旅行に無料ご招待いたします。</p>
        <p>このエリアは、長谷工コーポレーションが施工した多くのマンションがあり、現在進行中のプロジェクトも海上からご覧いただけます。</p>
      </div>

      <h4 class="u-ttl__m">コースのご案内</h4>
      <div class="center mb2">
        <img data-src="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/course_map.png" data-retina="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/course_map@2x.png" class="u-img__max mb2_sp" alt="東京ベイクルーズ　コース案内図"/>
      </div>
      <div class="flex between mb2">
        <div class="w50 mb2_sp">
          <figure><img data-src="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__01.jpg" data-retina="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__01@2x.jpg" class="u-img__max" alt=" <?php echo $pageTtl ?>｜イメージ" />
            <figcaption>イメージ</figcaption>
          </figure>
        </div>
        <div class="w50">
          <figure><img data-src="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__02.jpg" data-retina="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__02@2x.jpg" class="u-img__max" alt="<?php echo $pageTtl ?>｜イメージ"/>
            <figcaption>イメージ</figcaption>
          </figure>
        </div>
      </div>
      <div class="flex between mb2">
        <div class="w50 mb2_sp">
          <figure><img data-src="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__03.jpg" data-retina="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__03@2x.jpg" class="u-img__max" alt="<?php echo $pageTtl ?>｜豊洲市場"/>
            <figcaption>豊洲市場</figcaption>
          </figure>
        </div>
        <div class="w50">
          <figure><img data-src="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__04.jpg" data-retina="<?php echo $img_url ?>/event/event-tokyo-bay-cruise/img__04@2x.jpg" class="u-img__max" alt="東雲水門"/>
            <figcaption>東雲水門</figcaption>
          </figure>
        </div>
      </div>

      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table">
        <dl>
          <dt>[開催日]</dt>
          <dd>2019年7月21日（日） 9:30集合、10:00出航予定<br>※雨天決行、荒天時中止の場合がございます。</dd>
        </dl>
        <dl>
          <dt>[所要時間]</dt>
          <dd>乗船時間 約120分</dd>
        </dl>
        <dl>
          <dt>[集合場所]</dt>
          <dd>天王洲ヤマツピア隣接レストラン［キャプテンズワーフ］前<br><a href="https://goo.gl/maps/tXxbAk8hYHufGE8b7" class="u-icon" target="_blank">地図はこちら</a>
          </dd>
        </dl>
        <dl>
          <dt>[費用]</dt>
          <dd>参加費無料<br>※集合・解散までの交通費等は個人負担となります</dd>
        </dl>
        <dl>
          <dt>[募集人数]</dt>
          <dd>25組50名</dd>
        </dl>
        <dl>
          <dt>[受付期間]</dt>
          <dd>2019年6月6日（木）～6月17日（月）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>ご当選の方には、6月19日（水）よりメールにてご連絡いたします。</dd>
        </dl>
        <dl>
          <dt>[応募条件]</dt>
          <dd class="w75" style="line-height:1.4;">
            <ul class="u-list__ul_dot">
              <li>⻑⾕⼯ID をお持ちのご本人さま（20歳以上）の参加が必須となります。</li>
              <li>ご本人さまを含み、1組2名での応募とさせていただきます。</li>
            </ul>

          </dd>
        </dl>
        <dl>
          <dt>[注意事項]</dt>
          <dd class="w75" style="line-height:1.4;">
            <ul class="u-list__ul_dot">
              <li>当選された方にはメールで詳細をご連絡いたします。</li>
              <li>ベビーカーをご使用のお子さまはご参加いただけません。</li>
              <li>船内にてフリードリンクのご用意があります。</li>
              <li>当イベントの参加権利を譲渡することはできません。</li>
            </ul>
          </dd>
        </dl>
      </div>

      <?php if($eventSts == "new") { ?>

      <div class="u-btn-layout mt2">
        <div class="u-btn-layout__row">
          <a href="<?php echo $mypoint_url ?>/129" target="_blank" class="u-btn_point u-btn-layout__item">ご応募はこちらから</a>
        </div>
      </div>

      <?php } else { ?>
      <label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
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
