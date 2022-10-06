<?php
//base
include ("../../function.php");
$content = get_id_data('8006');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルでできる「'.$pageTtl.'」-'.siteName();
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
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "service";// exchange or lottery or service or no_flp
    $smile_num = "1,000";//必要スマイル数
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
    <section class="main__item u-terms">
      <div class="u-terms__row">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li><span>長谷工グループの管理物件にお住まいの方も、そうでない方もみなさまご利用いただけます。<br><small class="u-small">※ただし、一部地域を除きます。詳細はお問い合わせください。</small></span></li>
            <li>1スマイル＝1円として1,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="main__wrapper">
      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
    </section>
    <section class="main__wrapper">
      <div class="u-column__2">
        <figure class="u-column__item">
          <img data-src="<?php echo $img_url ?>/smile/article/hcm-housecleaning-img1.png" data-retina="<?php echo $img_url ?>/smile/article/hcm-housecleaning-img1@2x.png"
           alt="エアコンクリーニング　作業イメージ" class="u-img__max">
        </figure>
        <figure class="u-column__item">
          <img data-src="<?php echo $img_url ?>/smile/article/hcm-housecleaning-img2.png" data-retina="<?php echo $img_url ?>/smile/article/hcm-housecleaning-img2@2x.png"
           alt="バスルーム　イメージ" class="u-img__max">
        </figure>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 id="cleaning-pack" class="lottery-point__ttl service-1">水まわりクリーニングおとくパック</h4>
          <p class="lottery-point__price">58,690円～ <span style="font-size:80%;">（戸建てについては別途見積もりとなります）</span></p>
          <p class="mb3">ハウスクリーニング10か所セットメニュー。キッチン周りや水まわりなど、頑固な汚れの溜まりやすい箇所をまとめてお掃除いたします。シンク、ガスレンジ＆IHヒーター、魚焼き器、キッチン照明器具、キッチン換気扇、キッチン表面、食器棚、浴室、トイレ、洗面台がセットに。</p>
          <h4 id="kitchen" class="lottery-point__ttl service-2">キッチンおまかせパック</h4>
          <p class="lottery-point__price">47,850円～ <span style="font-size:80%;">（戸建てについては別途見積もりとなります）</span></p>
          <div class="movie-cnt flex mb3">
            <div class="movie-cnt__item_m">
              <p>年に一度はキッチン周りを徹底的にクリーニング。<br>詳しくは動画でご確認ください。</p>
            </div>
            <div class="movie-cnt__item_r1 center">
              <div class="movie-thum">
                <a href="https://www.youtube.com/watch?v=nGmVFu_YAZ8&list=TLGGP0X3xhO1EnEyNjEwMjAyMQ&t=5s" target="_blank" data-ga-click="smileage_housecleaning_service2" class="movie-thum__cat">
                  <img data-src="<?php echo $img_url ?>/smile/article/kitchen_omakase_mov_thumb.png" data-retina="<?php echo $img_url ?>/smile/article/kitchen_omakase_mov_thumb@2x.png"
                   alt="キッチン換気扇内部クリーニング 説明動画" style="max-width:310px" class="u-img__max movie-thum__item">
                </a>
              </div>
            </div>
          </div>
          <h4 id="fan" class="lottery-point__ttl service-3">キッチン換気扇内部クリーニング</h4>
          <p class="lottery-point__price">14,850円～ <span style="font-size:80%;">（戸建てについては別途見積もりとなります）</span></p>
          <p class="mb3">頑固な油汚れが溜まりやすい換気扇。換気扇の吸い込みが悪くなったと感じる方、換気扇のニオイが気になる方、油を使った料理をよくする方は、一度お掃除すると、すっきりお使いいただけます。</p>
          <h4 id="aircon" class="lottery-point__ttl service-4" id="ac">エアコン内部クリーニング</h4>
          <p class="lottery-point__price">12,100円～　お掃除機能付き：21,450円～ <span style="font-size:80%;">（エアコン機能やサイズ、お住まいの地域により価格が異なります。）</span></p>
          <p class="mb3">見えないエアコン内部のフィルターには埃が溜まっています。埃を放置しているとカビが発生し、エアコンの稼働とともに撒き散らされてしまううえ、消費電力が上がる原因に。エアコン内部をすっきりお掃除いたします。</p>
          <h4 id="bathroom" class="lottery-point__ttl service-5">浴室クリーニング</h4>
          <p class="lottery-point__price">18,700円～ <span style="font-size:80%;">（戸建てについては別途見積もりとなります）</span></p>
          <p class="mb3">一度発生すると取れにくい浴室の水垢やカビ。嫌なニオイがする浴室の排水口。自分では掃除しにくい浴室の天井。ご家庭のお掃除だけでは対処しにくい箇所も、全部まとめてきれいにいたします。</p>
        </div>
        <small class="u-small">※表示の参考価格は、すべて消費税込みの金額となります。</small>
      </div>
    </section>
    <section class="main__wrapper" id="flow">
      <h3 class="u-ttl__l">お申込み方法</h3>
      <p>お申込みは、フォームまたはお電話にてお申込みください。</p>
      <?php if ($ssoFlag == 0){ ?>
      <small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
      <?php }; ?>
      <div class="u-terms__row mb-inner mt3">
        <h4 class="u-terms__ttl mb-inner">フォームでのお申込み</h4>
        <a href="<?php echo $base_url.'/form/form-house-cleaning/' ?>" target="_blank" class="u-btn_point u-position__center">ハウスクリーニングにお申込みをする</a>
        <div style="padding:0 24px;" class="mt3">
          <h3 class="u-ttl__s">お申込みの流れ</h3>
          <ol class="u-list__ol">
            <li>上記ボタンから、お申込みください。</li>
            <li>担当者または協力会社より、電話またはメールにて、改めて内容確認の連絡をさせていただきます。</li>
          </ol>
        </div>
      </div>
      <div class="u-terms">
        <div class="u-terms__row mb2">
          <h4 class="u-terms__ttl">お電話でのお申込み<small class="u-small">※長谷工グループコールセンター</small></h4>
          <!--<h3 class="u-terms__ttl">長谷工グループコールセンターへお申込みください。<small class="u-small">※お電話でのお申込みのみ受け付けております。</small></h3>-->
          <div class="u-terms__inner mb-inner">
            <div class="u-terms__tel">
              <a href="tel:0120-39-8450">0120-<ruby>39-8450<rp>(</rp>
                  <rt style="font-size : 1.4rem;">サンキューハセコー</rt>
                  <rp>)</rp>
                </ruby></a>
            </div>
            <small class="u-small">※受付 / 8：00～20：00（無休※年末年始を除く）<br>※動画内の電話番号でも同様のサービスをお受けいただけます。</small>
          </div>
          <div style="padding:0 24px;">
            <h3 class="u-ttl__s">お申込みの流れ</h3>
            <ol class="u-list__ol">
              <li><a href="<?php echo $mytop_url ?>" target="_blank" rel="nofollow" class="u-icon">マイページ</a>から、お客さまの「保有スマイル数」と「会員番号」をご確認ください。</li>
              <li>上記の長谷工グループコールセンターへお電話ください。オペレーターが応対いたします。</li>
              <li>オペレーターに、「住まいレージの利用」「会員番号」をお伝えいただいたのち、オペレーターの案内に沿って当サービスをご利用ください。</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>
    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
