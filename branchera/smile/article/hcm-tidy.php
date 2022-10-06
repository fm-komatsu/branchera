<?php
//base
include ("../../function.php");
$content = get_id_data('8010');
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
    <section class="main__wrapper">
      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
    </section>
    <section class="main__wrapper">
      <h3 class="u-ttl__l">整理収納アドバイザー1級の片付けのプロが片付けのお悩みを解決します</h3>
      <p class="mb3">片付けの専門家がご自宅にお伺いし、それぞれの方に合わせたお悩み内容やライフスタイルから、最適な収納方法をご提案。片付け、オーダーメイドな収納づくりなどをご提供します。整理収納サービスは一生使える片付けの習慣が身につくコンサルティングサービスです。<br><strong>それぞれのスペースに適した整理収納グッズをアドバイス、必要に応じて収納家具のご提案</strong>もいたします。</p>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl service-1">1か所片付けプラン：4時間（1名作業）</h4>
          <div class="movie-cnt flex mb3">
            <div class="movie-cnt__item_l">
              <p class="lottery-point__price_fixed">26,400円（税込）<span style="font-size:80%;">※交通費・材料費は別途かかります。</span></p>
              <p>お試しで整理収納したい方向けのプランです。<br>玄関、洗面、キッチン下収納、吊り戸棚、カップボード、クローゼットなど、ご希望の場所1か所についてサービスをご利用いただけます。<br>サービスの目安時間はコンサルティング1時間／整理作業3時間となります。</p>
              <small class="u-small mb3">※交通費：1名1,650円（税込）〜</small>
            </div>
            <div class="movie-cnt__item_r">
              <figure class="u-column__item mb2 mt2 center">
                <img data-src="<?php echo $img_url ?>/smile/article/hcm-tidy__01.jpg" data-retina="<?php echo $img_url ?>/smile/article/hcm-tidy__01@2x.jpg"
                 alt="1か所片付けプラン 1名作業" class="u-img__max center" style="max-width:250px;">
                </figure>
            </div>      
          </div>
          </div>      
          <h4 class="lottery-point__ttl service-2">しっかり片付けプラン：4時間（2名作業）</h4>
          <div class="movie-cnt flex mb3">
            <div class="movie-cnt__item_l">
              <p class="lottery-point__price_fixed">48,400円（税込）<span style="font-size:80%;">※交通費・材料費は別途かかります。</span></p>
              <p>最初から2か所しっかり整理収納したい方向けのプランです。<br>例えばクローゼット2か所、キッチン下収納とカップボードなど、ご希望の場所2か所の組み合わせについてサービスをご利用いただけます。<br>サービスの目安時間はコンサルティング1時間／整理作業3時間となります。</p>
              <small class="u-small">※交通費：2名3,300円（税込）〜</small>
            </div>
            <div class="movie-cnt__item_r">
              <div>
                <figure class="u-column__item mb2 mt2 center">
                  <img data-src="<?php echo $img_url ?>/smile/article/hcm-tidy__02.jpg" data-retina="<?php echo $img_url ?>/smile/article/hcm-tidy__02@2x.jpg"
                  alt="しっかり片付けプラン 2名作業" class="u-img__max center" style="max-width:250px;">
                </figure>
                <figure class="u-column__item center">
                  <img data-src="<?php echo $img_url ?>/smile/article/hcm-tidy__03.jpg" data-retina="<?php echo $img_url ?>/smile/article/hcm-tidy__03@2x.jpg"
                  alt="しっかり片付けプラン イメージ" class="u-img__max center" style="max-width:250px;">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <article class="main__row">
    <section class="main__item u-terms">
      <div class="u-terms__row">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li><span>長谷工グループの管理物件にお住まいの方も、そうでない方もみなさまご利用いただけます。</span></li>
            <li><span>サービス対象エリアは、関東エリア（東京都・神奈川県・埼玉県・千葉県・栃木県・茨城県）とさせていただいております。<br><small class="u-small">※詳細確認は下記「ご利用条件詳細」をご確認ください。</small></span></li>
            <li>1スマイル＝1円として1,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
          <h3 class="ttl-dot">ご利用条件詳細</h3>
          <ul class="u-list__ul">
            <li><span>整理収納サービスエリアについて<br>サービス対象エリアは、関東エリア（東京都・神奈川県・埼玉県・千葉県・栃木県・茨城県）とさせていただいております。<br>目安として、「表参道駅」からご自宅まで片道2時間以内が料金内での訪問可能エリアとなります。<br><small class="u-small mt1">※2時間以上の場合は出張費として一回毎にプラス2,750円/人(税込)頂戴いたします。<br>また、交通費が表参道駅から往復3,000円を超える場合も、初回訪問の際に交通費実費のご負担をお願いすることもございます。</small></span></li>
            <li><span>初回訪問について<br>初回の訪問時間は4時間（延長可能）です。初回訪問では、ご要望の箇所を拝見し、ご要望やお悩みをお聞きします。時間の許す限り収納、家具、レイアウトのご提案、実際のお片付けをさせていただきます。<br>コンサル中心の場合は4時間以内で終わることもございますが、料金は変わりません。2回以上の継続作業が必要な場合は、プランやお見積書を作成いたしますので、初回訪問後にご検討ください。<br>時間延長は30分単位となります。<br>［延長料金］ 1か所片付けプラン：3,300円（税込）、しっかり片付けプラン：6,050円（税込）</span></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="main__wrapper" id="flow">
    <h3 class="u-ttl__l">お問い合わせ方法</h3>
      <p>お申込みは、フォームまたはお電話にてお申込みください。</p>
      <?php if ($ssoFlag == 0){ ?>
      <small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
      <?php }; ?>
      <div class="u-terms__row mb-inner mt3">
        <h4 class="u-terms__ttl mb-inner">フォームでのお申込み</h4>
        <a href="<?php echo $base_url.'/form/form-tidy/' ?>" target="_blank" class="u-btn_point u-position__center">整理収納サービスにお申込みをする</a>
        <div style="padding:0 24px;" class="mt3">
          <h3 class="u-ttl__s">お申込みの流れ</h3>
          <ol class="u-list__ol">
            <li>上記ボタンから、お申込みください。</li>
            <li>サービス提供会社（おうちデトックス）又は担当者からお電話又はメールにて、改めて内容確認の連絡をさせていただきます。</li>
          </ol>
        </div>
      </div>
      <div class="u-terms">
        <div class="u-terms__row mb2">
        <h4 class="u-terms__ttl">お電話でのお申込み<small class="u-small">※長谷工グループコールセンター</small></h4>
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
      <?php if ($ssoFlag == 0){ ?>
      <!--<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
         class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small> -->
      <?php }; ?>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>    
    </article>
    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
