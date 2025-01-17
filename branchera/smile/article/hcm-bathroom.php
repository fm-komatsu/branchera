<?php
//base
include ("../../function.php");
$content = get_id_data('8008');
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
    $smile_flug = "double_smile";// exchange or lottery or service or no_flp
    $smile_num = "1,000";//必要スマイル数
    $smile_num2 = "10,000";
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
    <section class="main__item u-terms">
      <div class="u-terms__row mb4">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li>ご利用いただける対象エリアには、制限があります。詳細はお問い合わせください。</li>
            <li>1スマイル＝1円として、1,000スマイル単位、または10,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
          <small class="u-small">詳細は「<a data-scroll href="#tel">長谷工グループコールセンター</a>」へお問い合わせください。</small>
        </div>
      </div>
    </section>
    <section class="main__wrapper">
      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
    </section>
    <section class="main__wrapper">
      <div class="u-column__2">
        <figure class="u-column__item">
          <img data-src="<?php echo($img_url)?>/smile/article/hcm-bathroom-img1.png" data-retina="<?php echo($img_url)?>/smile/article/hcm-bathroom-img1@2x.png"
             alt="<?php echo $pageTtl?>" style="max-width:375px;" class="u-img__max">
        </figure>
        <figure class="u-column__item">
          <img data-src="<?php echo($img_url)?>/smile/article/hcm-bathroom-img2.png" data-retina="<?php echo($img_url)?>/smile/article/hcm-bathroom-img2@2x.png"
             alt="<?php echo $pageTtl?>" style="max-width:375px;" class="u-img__max">
        </figure>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl service-1">ユニットバス交換</h4>
          <p class="mb3">本体は20年前後で交換するのがおすすめ。家族や生活に合わせて、新しいユニットバスに交換すると、もっと安心＆快適。サイズ、保温性、掃除のしやすさ、バリアフリー、リラックス機能まで選ぶことが可能です。</p>
          <h4 class="lottery-point__ttl service-2">給湯器交換</h4>
          <p class="mb3">給湯器は、設置から12年後が交換のピークです。お湯の温度が安定しなくなった、給湯器の音が大きくなった、と感じる場合は、そろそろ替え時です。</p>
          <h4 class="lottery-point__ttl service-3">浴室換気乾燥機</h4>
          <p class="mb3">浴室換気乾燥機は、10年に一度は本体交換をしましょう。あると便利な浴室暖房、涼風機能、衣類乾燥機能などを付けることも可能です。</p>
          <h4 class="lottery-point__ttl service-4">浴室換気扇交換</h4>
          <p class="mb3">回すことの多い換気扇は、使用年数とともに劣化します。10年に一度は本体交換をするのがおすすめです。</p>
          <h4 class="lottery-point__ttl service-5">電気温水器交換</h4>
          <p>電気でお湯を沸かす電気温水器は、長期間使用しているうちに劣化が起こってきます。不具合を感じるようなら、交換を検討しましょう。</p>
        </div>
      </div>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
    </section>
    <section class="main__wrapper" id="flow">
      <h2 class="u-ttl__l">お申込み方法</h2>
      <div id="tel" class="u-terms">
        <div class="u-terms__row mb2">
          <h3 class="u-terms__ttl">長谷工グループコールセンターへお申込みください。<small class="u-small">※お電話でのお申込みのみ受け付けております。</small></h3>
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
            <h4 class="u-ttl__s">お申込みの流れ</h4>
            <ol class="u-list__ol">
              <li><a href="<?php echo $mytop_url ?>" target="_blank" rel="nofollow" class="u-icon">マイページ</a>から、お客さまの「保有スマイル数」と「会員番号」をご確認ください。</li>
              <li>上記の長谷工グループコールセンターへお電話ください。オペレーターが応対いたします。</li>
              <li>オペレーターに、「住まいレージの利用」「会員番号」をお伝えいただいたのち、オペレーターの案内に沿って当サービスをご利用ください。</li>
            </ol>
          </div>
        </div>
      </div>
      <?php if (!$ssoFlag == 1){ ?>
      <small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
         class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
      <?php }; ?>
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
