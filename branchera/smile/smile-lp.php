<?php
//base
include( "../function.php" );
$content = get_id_data('90005');
$pageTtl = 'スマイルがたまる！アクションポイント';
//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "楽しみながらポイントをゲットできるサービスが盛りだくさん！ブランシエラクラブサイトを毎日お楽しみくださいね♪";
$metaThum = $img_url."/thum/main-header__smile@2x.png";
//bodyClass
$body_class ="page-list smile-lp";

$smileType ="smile-index";
//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?> <?php /*
//base
include( "../function.php" );
$content = get_id_data( '90000' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '住まいレージ-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-list";

$smileType ="smile-index";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
*/ ?> <main class="main">

<transition name="modal-fade">
  <div class="modal" v-if="modal.isOpen" :class="{'is-active': modal.isActive}">
		<div class="modal__background" @click="modal.isOpen = false"></div>
		<div class="modal__item">
		  <div class="modal__close-icon" @click="modal.isOpen = false"></div>
			<div class="modal__item-inner">
			<figure>
          <img src="<?php echo $img_url ?>/smile/smile-lp/modal@2x.png" alt="ブランシエラクラブのポイントサービス「住まいレージ」がもっと楽しく！もっと貯まりやすく！リニューアルされました。これまで以上のみなさまのご利用をお待ちしています。" loading="lazy" class="u-only__pc u-img__max center" style="max-width:844px">
          <img src="<?php echo $img_url ?>/smile/smile-lp/modal-sp@2x.png" alt="ブランシエラクラブのポイントサービス「住まいレージ」がもっと楽しく！もっと貯まりやすく！リニューアルされました。これまで以上のみなさまのご利用をお待ちしています。" loading="lazy" class="u-only__sp u-img__max center" style="max-width:844px">
        </figure>

		</div>

		</div>
	</div>
	</transition>

  <header class="main__row">
    <?php
    $panAry[] = array("/smile/","住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    </header>
  <article class="smile-lp">
    <div class="smile-lp__row">
      <section class="smile-lp-info">
        <div class="smile-lp-info__row pb8 pb4_sp">
          <div class="smile-lp-info__item">
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/title@2x.png" alt="ブランシエラクラブのポイントサービス「住まいレージ」がもっと楽しく！もっと貯まりやすく！リニューアルされました。これまで以上のみなさまのご利用をお待ちしています。" loading="lazy" class="u-only__pc u-img__max center" style="max-width:985px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/title-sp@2x.png" alt="ブランシエラクラブのポイントサービス「住まいレージ」がもっと楽しく！もっと貯まりやすく！リニューアルされました。これまで以上のみなさまのご利用をお待ちしています。" loading="lazy" class="u-only__sp u-img__max">
            </figure>
          </div>
        </div>
      </section>
      <section class="smile-lp-point">
        <div class="smile-lp-point__row">
          <div class="smile-lp-point__top mb3 mb0_sp">
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/mid-txt@2x.png" alt="スマイル（ポイント）のたまるチャンスがいっぱい！新しいポイントサービス" loading="lazy" class="u-only__pc u-img__max center" style="max-width:607px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/mid-txt-sp@2x.png" alt="スマイル（ポイント）のたまるチャンスがいっぱい！新しいポイントサービス" loading="lazy" class="u-only__sp u-img__max">
            </figure>
          </div>
          <div class="smile-lp-point__item smile-lp-point__item_1st mb3 mb1_sp">
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point1_01@2x.png" alt="1日1回の運だめし！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point1_01-sp@2x.png" alt="1日1回の運だめし！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
            <figure class="mt0 mb0">
              <a href="<?php echo $mylucky_url; ?>" data-ga-click="smilage_lp_lucky" style="max-width:970px">
								<img src="<?php echo $img_url ?>/smile/smile-lp/point1_02@2x.png" alt="1日1回の運だめし！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px;">
              	<img src="<?php echo $img_url ?>/smile/smile-lp/point1_02-sp@2x.png" alt="1日1回の運だめし！" loading="lazy" class="u-only__sp u-img__max">
							</a>
            </figure>
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point1_03@2x.png" alt="1日1回の運だめし！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px;">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point1_03-sp@2x.png" alt="1日1回の運だめし！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
          </div>
          <div class="smile-lp-point__item mb3 mb1_sp">
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point2_01@2x.png" alt="第1・第3木曜配信！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point2_01-sp@2x.png" alt="第1・第3木曜配信！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
            <figure>
							<a href="<?php echo $myinfo_url; ?>" data-ga-click="smilage_lp_setteihenkou1" style="max-width:970px">
								<img src="<?php echo $img_url ?>/smile/smile-lp/point2_02@2x.png" alt="メルマガ配信設定変更" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px;">
								<img src="<?php echo $img_url ?>/smile/smile-lp/point2_02-sp@2x.png" alt="メルマガ配信設定変更" loading="lazy" class="u-only__sp u-img__max">
							</a>
            </figure>
						<div @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="smilage_lp_mordal1">
							<figure>
								<img src="<?php echo $img_url ?>/smile/smile-lp/point2_03@2x.png" alt="配信設定の変更方法はこちら" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px;">
								<img src="<?php echo $img_url ?>/smile/smile-lp/point2_03-sp@2x.png" alt="配信設定の変更方法はこちら" loading="lazy" class="u-only__sp u-img__max">
							</figure>
						</div>
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point2_04@2x.png" alt="第1・第3木曜配信！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px;">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point2_04-sp@2x.png" alt="第1・第3木曜配信！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
          </div>
          <div class="smile-lp-point__item pb5 pb1_sp">
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point3_01@2x.png" alt="ご登録のお誕生月に配信！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point3_01-sp@2x.png" alt="ご登録のお誕生月に配信！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
            <figure>
              <a href="<?php echo $myinfo_url; ?>" data-ga-click="smilage_lp_setteihenkou2" style="max-width:970px">
                <img src="<?php echo $img_url ?>/smile/smile-lp/point3_02@2x.png" alt="メルマガ配信設定変更" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
                <img src="<?php echo $img_url ?>/smile/smile-lp/point3_02-sp@2x.png" alt="メルマガ配信設定変更" loading="lazy" class="u-only__sp u-img__max">
              </a>
            </figure>
						<div @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="smilage_lp_mordal2">
              <figure>
                <img src="<?php echo $img_url ?>/smile/smile-lp/point3_03@2x.png" alt="配信設定の変更方法はこちら" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
                <img src="<?php echo $img_url ?>/smile/smile-lp/point3_03-sp@2x.png" alt="配信設定の変更方法はこちら" loading="lazy" class="u-only__sp u-img__max">
              </figure>
						</div>
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point3_04@2x.png" alt="ご登録のお誕生月に配信！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point3_04-sp@2x.png" alt="ご登録のお誕生月に配信！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
          </div>
          <div class="smile-lp-point__item pb5 pb1_sp">
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point4_01@2x.png" alt="ブランシエラクラブ サイト内に出現する「見つけた！」ボタンを押してスマイルゲット！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point4_01-sp@2x.png" alt="ブランシエラクラブ サイト内に出現する「見つけた！」ボタンを押してスマイルゲット！" loading="lazy" class="u-only__sp u-img__max">
            </figure>
            <figure>
              <a href="<?php echo $myinfo_url; ?>" data-ga-click="smilage_lp_setteihenkou3" style="max-width:970px">
                <img src="<?php echo $img_url ?>/smile/smile-lp/point4_02@2x.png" alt="メルマガ配信設定変更" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
                <img src="<?php echo $img_url ?>/smile/smile-lp/point4_02-sp@2x.png" alt="メルマガ配信設定変更" loading="lazy" class="u-only__sp u-img__max">
              </a>
            </figure>
						<div @click="modal.isOpen = !modal.isOpen" class="modal__trigger" data-ga-click="smilage_lp_mordal2">
              <figure>
                <img src="<?php echo $img_url ?>/smile/smile-lp/point4_03@2x.png" alt="配信設定の変更方法はこちら" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
                <img src="<?php echo $img_url ?>/smile/smile-lp/point4_03-sp@2x.png" alt="配信設定の変更方法はこちら" loading="lazy" class="u-only__sp u-img__max">
              </figure>
						</div>
            <figure>
              <img src="<?php echo $img_url ?>/smile/smile-lp/point4_04@2x.png" alt="" loading="lazy" class="u-only__pc u-img__max center" style="max-width:970px">
              <img src="<?php echo $img_url ?>/smile/smile-lp/point4_04-sp@2x.png" alt="" loading="lazy" class="u-only__sp u-img__max">
            </figure>
          </div>
        </div>
      </section>
      <section class="smile-lp-close">
        <div class="smile-lp-close__row mt5 mt2_sp">
          <figure>
            <img src="<?php echo $img_url ?>/smile/smile-lp/close@2x.png" alt="住まいレージリニューアルは今後も継続中です！お楽しみに！" loading="lazy" class="u-only__pc u-img__max center" style="max-width:768px">
            <img src="<?php echo $img_url ?>/smile/smile-lp/close-sp@2x.png" alt="住まいレージリニューアルは今後も継続中です！お楽しみに！" loading="lazy" class="u-only__sp u-img__max">
          </figure>
          <div class="smile-lp-close__ex">
            <p class="smile-lp-close__text">
            ※⻑⾕⼯グループサービス利⽤の際のスマイル付与および、ログインポイントにつきましては2020年6⽉30⽇（⽕）をもって終了いたしました。<br>
            ※今お持ちのスマイルは、7月以降も引き続きご利用いただけます。<br>
            ※新ポイントサービスにつきましては、都合により変更になる場合がありますので予めご了承ください。<br>
            ※当ページに掲載の画面は開発中のものにつき、実際の仕様とは異なる場合があります。
            </p>
          </div>
        </div>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
