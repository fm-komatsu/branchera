<?php
//base
include ("../../function.php");
$content = get_id_data('4082');
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

      <h2 class="u-ttl__l">小さいお子さまと一緒に楽しめるクラシックコンサート！<br>長谷工グループのお客さま感謝イベントへご招待いたします。</h2>

      <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
        <figure>
          <img
          data-src="<?php echo $img_url ?>/event/event-special-concert/main-v.jpg"
          data-retina="<?php echo $img_url ?>/event/event-special-concert/main-v@2x.jpg"
          alt="<?php echo $pageTtl; ?>"
          class="u-img__max">
        </figure>
      </div>

      <div class="u-assist">
        <p>日頃からお世話になっているお客さまへの感謝の気持ちを込めて開催される、長谷工グループ主催イベント「HASEKO PRESENTS『スーパーキッズ・オーケストラ＆かつみ<span style="color:#febeca;">♥</span>さゆり』SPECIAL CONCERTへ、ブランシエラクラブ会員さまを無料でご招待いたします。<br>小さいお子さまと一緒に楽しめるクラシックコンサートです。あの人気芸人「かつみ<span style="color:#febeca;">♥</span>さゆり」が登場してトークショー、さゆりさんによる素敵なピアノ演奏も同時開催！この機会にぜひご参加ください！</p>
      </div>

      <div class="mb2">
        <figure>
            <img
            data-src="<?php echo $img_url ?>/event/event-special-concert/event.jpg"
            data-retina="<?php echo $img_url ?>/event/event-special-concert/event@2x.jpg"
            alt="<?php echo $pageTtl; ?>"
            class="u-img__max">
        </figure>
      </div>

      <div class="u-assist">
      <h3 class="u-ttl__m mb2">
        <figure>
            <img
            data-src="<?php echo $img_url ?>/event/event-special-concert/sko__ttl.png"

            data-retina="<?php echo $img_url ?>/event/event-special-concert/sko__ttl@2x.png"
            alt="スーパーキッズ・オーケストラ"
            class="u-img__max">
        </figure>
      </h3>
        <p class="mb2">兵庫県立芸術文化センターの事業として2003年より開始。全国公募のオーディションで選抜された小学生から高校生までの子どもたちで編成され、芸術監督：佐渡 裕が最も愛情を注いでいる弦楽オーケストラ。同センターでの演奏会、テレビ番組への出演をはじめ、2011年からは東日本大震災の被災地を毎年訪問し、心の復興を願う演奏会「東北“こころのビタミン”プロジェクト」を実施するなど、クオリティの高い演奏と純粋な音楽で注目を集めている。</p>
        <figure>
            <img
            data-src="<?php echo $img_url ?>/event/event-special-concert/sko.jpg"
            data-retina="<?php echo $img_url ?>/event/event-special-concert/sko@2x.jpg"
            alt="<?php echo $pageTtl; ?>"
            class="u-img__max">
        </figure>
      </div>

      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table">
        <dl>
          <dt>[開催日]</dt>
          <dd>2020年2月1日（土） 開場 14:00 開演 15:00（17:20終了予定）</dd>
        </dl>
        <dl>
          <dt>[開催場所]</dt>
          <dd>大阪市中央公会堂（大阪府大阪市北区中之島1-1-27） <a href="https://goo.gl/maps/csgwn4VPucEuzLvs7" class="u-icon" target="_blank">地図はこちら</a>
          <ul class="u-list__ul_dot">
            <li>Osaka Metro御堂筋線「淀屋橋駅」1番出口より 徒歩5分</li>
            <li>Osaka Metro堺筋線「北浜駅」19番出口より 徒歩3分</li>
            <li>京阪本線「淀屋橋駅」1番出口より 徒歩5分</li>
            <li>京阪中之島線「なにわ橋駅」1番出口より 徒歩1分</li>
            <li>大阪市営バス8号系統「淀屋橋」より 徒歩5分</li>
            <li>大阪市営バス62号系統「淀屋橋」より 徒歩5分</li>
            <li>大阪市営バス88号系統「淀屋橋」より 徒歩5分</li>
          </ul>
        </dl>
        <dl>
          <dt>[スケジュール]</dt>
          <dd>
            <ol>
              <li>14:00 開場</li>
              <li>15:00 開演
                <ol class="u-list__ul_dot ml2">
                  <li>【第一部】かつみ<span style="color:#febeca;">♥</span>さゆりトークショー（さゆりさんの演奏あり） 30分</li>
                  <li>【第二部】スーパーキッズ・オーケストラ（第一幕）</li>
                  <li>休憩</li>
                  <li>【第二部】スーパーキッズ・オーケストラ（第二幕）</li>
                </ol>
              </li>
              <li>17:20 終演</li>
            </ol>
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
          <dd>2020年1月9日（木）～1月19日（日）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>チケットの発送を以て、当選発表に代えさせていただきます。<br>（1月25日頃ご自宅へ郵送予定です）</dd>
        </dl>
        <dl>
          <dt>[応募条件]</dt>
          <dd class="w75" style="line-height:1.4;">
            <ul class="u-list__ul_dot">
              <li>⻑⾕⼯ID をお持ちのご本人さま（20歳以上）の参加が必須となります。</li>
              <li>ご本人さまを含み、1組5名までの応募とさせていただきます。</li>
            </ul>

          </dd>
        </dl>
        <dl>
          <dt>[ご注意事項]</dt>
          <dd class="w75" style="line-height:1.4;">
            <ul class="u-list__ul_dot">
            <li>長谷工IDマイページにログインしてお申し込みください。</li>
              <li>長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
            <li>ご鑑賞には、「特別ご招待チケット」が必要です。</li>
              <li>会場は全席指定席となっております。</li>
              <li>未就学児童の方は特別ご招待チケットなしでご参加いただけますが、原則保護者のひざの上でご鑑賞ください。</li>
              <li>中学生以下の方は保護者同伴でご鑑賞ください。</li>
              <li>車イスご使用のお客さまは事前にお知らせください。</li>
              <li>会場内での飲食物のお持込みはご遠慮ください。</li>
              <li>お車でお越しの方は、駐車台数（15台）に限りがございますので、できるだけ公共交通機関をご利用ください。（有料）</li>
              <li>多数のご来場で会場が混雑することが予想されますので、お早めにお越しください。</li>
              <li>当イベントの参加権利を譲渡することはできません。</li>
            </ul>
          </dd>
        </dl>
      </div>

      <?php if($eventSts == "new") { ?>

      <div class="u-btn-layout mt2">
        <div class="u-btn-layout__row">
          <a href="<?php echo $mypoint_url ?>/152" target="_blank" class="u-btn_point u-btn-layout__item">ご応募はこちらから</a>
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
