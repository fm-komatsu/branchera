<?php
//base
include ("../../function.php");
$content = get_id_data('8009');
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
          <img
          data-src="../../lib/img/smile/article/hcm-kitchen-img1.png"
          data-retina="../../lib/img/smile/article/hcm-kitchen-img1@2x.png"
          alt="image"
          style="max-width:375px;"
          class="u-img__max"
          >
        </figure>
        <figure class="u-column__item">
          <img
          data-src="../../lib/img/smile/article/hcm-kitchen-img2.png"
          data-retina="../../lib/img/smile/article/hcm-kitchen-img2@2x.png"
          alt="image"
          style="max-width:375px;"
          class="u-img__max"
          >
        </figure>
      </div>

      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl service-1">キッチン交換</h4>
          <!-- <p class="lottery-point__price">2,100mmの場合　443,000円（工事費別）～　標準工事費：377,000円～</p> -->
          <p class="mb3">毎日使うキッチンは、調理も掃除もササッと快適にできることがポイントです。キッチンリフォームで、動線に合わせた設計、より使いやすい収納、便利な設備に交換することが可能です。</p>
          <h4 class="lottery-point__ttl service-2">キッチン換気扇交換</h4>
          <!-- <p class="lottery-point__price">96,700円（工事費込）～</p> -->
          <p class="mb3">毎日動いているキッチンの換気扇は、15年前後での本体交換がおすすめです。装着しやすいタイプのフィルターに変えると、お掃除がもっと楽になります。</p>
          <h4 class="lottery-point__ttl service-3">食器洗い乾燥機</h4>
          <!-- <p class="lottery-point__price">188,200円（工事費別）～　標準工事費：37,800円～</p> -->
          <p class="mb3">便利な食器洗い乾燥機。毎日の洗い物の手間がグッと減るので、空いた時間を他のことに使えます。清潔なうえに、節水・節約効果も。</p>
          <h4 class="lottery-point__ttl service-4">ビルトインガスコンロ交換</h4>
          <!-- <p class="lottery-point__price">136,080円（工事費別）～　標準工事費：24,840円～</p> -->
          <p class="mb3">便利で使いやすいデザインのコンロや、掃除のしやすいタイプに交換することで、家事の時短にもつながります。</p>
          <h4 class="lottery-point__ttl service-5">ディスポーザー交換</h4>
          <!-- <p class="lottery-point__price">97,200円（工事費込）～</p> -->
          <p>便利なディスポーザーも、何年か使っていくうちに交換が必要になります。音や振動が気になる、以前より粉砕に時間がかかる、スイッチが入りづらい、などの症状があれば、そろそろ交換をおすすめします。</p>
        </div>
        <!-- <small class="u-small">※表示の参考価格は、すべて消費税込みの金額となります。</small> -->
      </div>


    </section>

    <section class="main__wrapper" id="flow">
      <h2 class="u-ttl__l">お申込み方法</h2>

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
