<?php
//base
include ("../../function.php");
$content = get_id_data('4083');
$pageTtl = 'ブランシエラクラブプレゼンツ <br class="u-only__pc">林家正蔵 落語会 ご招待';
$eventSts = $content['icon-img'];

//meta
$metaTtl = ''.strip_tags($pageTtl).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article new-entry";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

//FLP ID
$flpID = '150';
$flpID2 = '151';

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
          <h3 class="u-ttl__m">「林家正蔵 落語会」イベント開催中止の決定について</h3>
          <p class="mb2">長谷工グループ「ブランシエラクラブ」事務局は、現在発生している新型コロナウイルス感染症が拡大している状況を受け、3月7日（土）に開催を予定していました「林家正蔵 落語会」イベントの開催中止を決定しましたので、お知らせいたします。</p>
          <p class="mb2">
          たくさんの方にご応募いただいておりましたが、ご来場されるみなさまや関係者の健康・安全面を第一に考え、誠に遺憾ではありますが、開催を中止することといたしました。
          </p>
          <p class="mb2">
          楽しみにしてくださったみなさまには、大変残念なお知らせとなりますが、何卒ご理解をいただきますよう、よろしくお願いいたします。
          </p>
          <p class="mb3">
          時期を見て改めて今回のような落語会を企画し、ご案内したいと考えております。<br>
          その際にはまたご応募賜りますようお願いいたします。
          </p>
          <p class="u-float__right">
          長谷工グループ「ブランシエラクラブ」事務局
          </p>

        </div>

      </div>
        <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
        <figure class="u-fig u-clearfix">
          <img data-src="<?php echo $img_url ?>/event/event-shozo-rakugo/main-v.jpg" data-retina="<?php echo $img_url ?>/event/event-shozo-rakugo/main-v@2x.jpg"
           alt="<?php echo (strip_tags($pageTtl)); ?>" class="u-img__max">
           <figcaption class="u-small u-float__right u-text__align_l">林家正蔵　写真 武藤奈緒美（撮影協力：渋谷らくご）<br>林家つる子・三増紋之助　写真 橘蓮二</figcaption>
        </figure>
      </div>
      <div class="u-assist">
        <p>おなじみ！人気落語家・林家正蔵さんの落語会に、ブランシエラクラブの会員のみなさまをご招待！若手女流落語家の林家つる子さんや、曲独楽師の三増紋之助さんも登場し、ブランシエラクラブだけの特別編成でお送りします！ぜひご応募ください♪</p>
      </div>
      <div class="icn-ohgi">
        <h4 class="u-ttl__m icn-ohgi__ex">当日のスケジュール（予定）</h4>
      </div>
      <div>
        <div class="u-font__palt">
          <table class="timetable__table mb3_sp">
            <tr>
              <th>18:30</th>
              <td>開場</td>
            </tr>
            <tr>
              <th>19:00</th>
              <td>開演・オープニング</td>
            </tr>
            <tr>
              <th>19:05</th>
              <td>落語 林家つる子</td>
            </tr>
            <tr>
              <th>19:25</th>
              <td>落語 林家正蔵</td>
            </tr>
            <tr>
              <th>19:50</th>
              <td>中入り</td>
            </tr>
            <tr>
              <th>20:05</th>
              <td>トークコーナー</td>
            </tr>
            <tr>
              <th>20:15</th>
              <td>曲独楽 三増紋之助</td>
            </tr>
            <tr>
              <th>20:30</th>
              <td>落語 林家正蔵</td>
            </tr>
            <tr>
              <th>20:55</th>
              <td>抽選会</td>
            </tr>
            <tr>
              <th>21:00</th>
              <td>終演</td>
            </tr>
          </table>
        </div>
      </div>
      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table mb8">
        <dl>
          <dt>[イベント内容]</dt>
          <dd>ブランシエラクラブプレゼンツ 林家正蔵 落語会 ご招待</dd>
        </dl>
        <dl>
          <dt>[開催日時]</dt>
          <dd>2020年3月7日（土）<br>開場 18:30　開演 19:00　終演 21:00（予定）</dd>
        </dl>
        <dl>
          <dt>[開催場所]</dt>
          <dd>千代田区立内幸町ホール（〒100-0011 東京都千代田区内幸町1丁目5-1）　<a href="https://goo.gl/maps/tbGs8UrqCDtTS76z8" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a>
            <ul class="u-list__ul_dot">
              <li>都営三田線「内幸町」A5番出口より 徒歩5分</li>
              <li>東京メトロ銀座線「新橋」7番出口に向かい内幸町地下通路より 徒歩5分</li>
              <li>都営浅草線「新橋」7番出口に向かい内幸町地下通路より 徒歩5分</li>
              <li>JR「新橋」日比谷口より 徒歩5分</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>[募集人数]</dt>
          <dd>合計180名</dd>
        </dl>
        <dl>
          <dt>[費用]</dt>
          <dd>参加無料　※ 交通費等は各自負担</dd>
        </dl>
        <dl>
          <dt>[応募申込]</dt>
          <dd>「一人で参加」「ペアで参加」の2つの応募ボタンの中からご希望の方をお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
        </dl>
        <dl>
          <dt>[受付期間]</dt>
          <dd>2020年1月9日（木）～2月2日（日）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>当選された方へ2020年2月4日（火）より随時メールにてご連絡いたします</dd>
        </dl>
        <dl>
          <dt>[ご注意事項]</dt>
          <dd>
            <ul class="u-font__palt">
              <li>※ 長谷工IDマイページにログインしてお申し込みください。</li>
              <li>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
              <li>※ 本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
              <li>※ 応募多数の場合は抽選となります。</li>
              <li>※ “1人で参加”、“ペアで参加”のどちらか一方のみのご応募となります。</li>
              <li>※ ご応募は、成人の会員さまに限らせていただきます。</li>
            </ul>
          </dd>
        </dl>
      </div>
      <?php if($eventSts == 'new') { ?>
        <div>
        <div>
          <div class="u-btn-layout center">
            <div class="u-btn-layout__row">
              <a href="<?php echo $mypoint_url ?>/<?php echo $flpID; ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">1人で参加</a>
              <a href="<?php echo $mypoint_url ?>/<?php echo $flpID2; ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">ペアで参加</a>
            </div>
          </div>
        </div>
        <!--div class="w50 center">
          <p class="bt wide"><a href="<?php echo $mypoint_url ?>/56" target="_blank">大阪開催（14時～のみ）応募はこちら</a></p>
        </div-->
      </div>
      <?php } else { ?>
        <label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
      <?php } ?>

      <?php if (!$ssoFlag == 1){ ?>
      <small class="u-small mb5">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
         class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
         <div class="hasekoid-entry entry mb8 mb5_sp">
          <figure class="center entry__top">
            <img data-src="<?php echo $img_url ?>/event/common/registration.png" data-retina="<?php echo $img_url ?>/event/common/registration@2x.png"
            alt="この機会にぜひ会員登録を！" class="u-img__max center" style="max-width:277px;">
          </figure>
      <?php include ($inc_path."/lib/inc/page/_event/__new-hasekoid.php"); ?>
      <?php }; ?>
    </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
