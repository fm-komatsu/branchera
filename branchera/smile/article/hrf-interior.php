<?php
//base
include ("../../function.php");
$content = get_id_data('8001');
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
    $smile_flug = "reform";// exchange or lottery or service or no_flp
    $smile_num = "10,000";//必要スマイル数
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__item u-terms">
      <div class="u-terms__row">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li>ご利用いただける対象エリアには、制限があります。詳細はお問い合わせください。</li>
            <li>リフォームの範囲はマンションの場合、室内リフォーム（共用部工事は対象外）、戸建の場合は内装・外装リフォームとなります。</li>
            <li>個人のお客さまのみ対象となり、法人は対象外となります。</li>
            <li>1スマイル＝1円として10,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="main__wrapper">

      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

    <section class="main__wrapper">

      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl service-1">あらゆるリフォーム工事に対応</h4>
          <p class="mb3">室内のクロスの貼替から水回り機器の取替そして外壁の塗替まで幅広く対応しています。</p>
          <h4 class="lottery-point__ttl service-2">住まいレージを利用してリフォーム</h4>
          <p>ご家族の変化に合わせて、古くなった住まいを快適に…リフォームをご検討の際は、安心の長谷工グループにおまかせください。</p>
        </div>
      </div>

    </section>

    <section class="main__wrapper" id="flow">
      <h2 class="u-ttl__l">お問い合わせ方法</h2>

      <div id="tel" class="u-terms">
        <div class="u-terms__row mb2">
          <h3 class="u-terms__ttl">長谷工グループコールセンターへお申込みください。<small class="u-small">※お電話でのお申込みのみ受け付けております。</small></h3>
          <div class="u-terms__inner mb-inner">
            <div class="u-terms__tel">
                <a href="tel:0120-39-8450">0120-<ruby>39-8450<rp>(</rp><rt style="font-size : 1.4rem;">サンキューハセコー</rt><rp>)</rp></ruby></a>
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
        <small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
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
