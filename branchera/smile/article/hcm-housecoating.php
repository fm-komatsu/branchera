<?php
//base
include ("../../function.php");
$content = get_id_data('8005');
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
          <img data-src="../../lib/img/smile/article/hcm-housecoating-img1.png" data-retina="../../lib/img/smile/article/hcm-housecoating-img1@2x.png" alt="image" style="max-width:375px;" class="u-img__max">
        </figure>
        <figure class="u-column__item">
          <img data-src="../../lib/img/smile/article/hcm-housecoating-img2.png" data-retina="../../lib/img/smile/article/hcm-housecoating-img2@2x.png" alt="image" style="max-width:375px;" class="u-img__max">
        </figure>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl service-1">フロアコーティング</h4>
          <p class="lottery-point__price">18帖までは一律：165,000円～ 18帖以上：1帖につき8,100円～ 追加 <span style="font-size:80%;">（マンション以外については別途見積もりとなります）</span></p>
          <p>キズや汚れが付きやすいフローリングは、フロアコーティングを施すことで、新築・リフォームしたての美しさを長期間保つことができます。ペットと暮らしているご家庭にもおすすめです。</p>
          <div class="u-list__dl_table-housecoating">
            <dl>
              <dt>対応エリア：</dt>
                <dd><span class="pr2">関東</span>東京都・神奈川県・千葉県・埼玉県</dd>
            </dl>
          </div>
          <div class="u-list__dl_table-housecoating mb3">
            <dl>
              <dt></dt>
                <dd><span class="pr2">関西</span>大阪府・兵庫県</dd>
            </dl>
            <small class="u-small mt1">※離島及び上記エリア内でも対応できない場合があります。</small>
          </div>
          <h4 class="lottery-point__ttl service-2"id="yokushitsu">浴室コーティング</h4>
          <p class="lottery-point__price">67,100円～ <span style="font-size:80%;">（マンション以外については別途見積もりとなります）</span></p>
          <p class="mb3">カビや水垢で汚れがちな浴室。お掃除をしていても、どうしても黒ずみが気になってきます。浴室コーティングは浴室の光沢感を復活させるだけでなく、キズや汚れが付きにくくなります。</p>
          <h4 class="lottery-point__ttl service-3">キッチンコーティング</h4>
          <p class="lottery-point__price">53,900円～ <span style="font-size:80%;">（マンション以外については別途見積もりとなります）</span></p>
          <p class="mb3">料理に洗い物に、毎日利用頻度の高いキッチン。キッチンコーティングをすることで、撥水効果が高まり、水垢やキズからもキッチンを守ります。日頃のお手入れが簡単になり、新築のような美しさを保つことができます。</p>
          <h4 class="lottery-point__ttl service-4">トイレコーティング</h4>
          <p class="lottery-point__price">25,850円～ <span style="font-size:80%;">（マンション以外については別途見積もりとなります）</span></p>
          <p>水垢やカビが付きやすく、お掃除もしづらいトイレですが、トイレコーティングをすることで撥水効果が高まり、水垢が付きにくくなります。汚れが付きにくいので、気になる臭いも抑えることが可能です。</p>
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
        <a href="<?php echo $base_url.'/form/form-house-coating/' ?>" target="_blank" class="u-btn_point u-position__center">ハウスコーティングにお申込みをする</a>
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
            <small class="u-small">※受付 / 8：00～20：00（無休※年末年始を除く）</small>
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
