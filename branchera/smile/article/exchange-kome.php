<?php
//base
include ("../../function.php");
$content = get_id_data('10017');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルで交換できる「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];
//bodyClass
$body_class ="page-article";
//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

// 欠品フラグ
$itemShortage = 0;

?>


<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange";// exchange or lottery or service or no_flp
    $smile_num = "3,600";//必要スマイル数
    $smile_id_test = "19";//テストFLP用リンクナンバー
    $smile_id_production = "19";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>



    <section class="main__wrapper">
      <div class="flex flex_around">
      </div>

    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              data-src="../../lib/img/smile/article/exchange-kome-img1.png"
              data-retina="../../lib/img/smile/article/exchange-kome-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              data-src="../../lib/img/smile/article/exchange-kome-img2.png"
              data-retina="../../lib/img/smile/article/exchange-kome-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              data-src="../../lib/img/smile/article/exchange-kome-img3.png"
              data-retina="../../lib/img/smile/article/exchange-kome-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">長谷工が自ら育て、収穫</h4>
          <p>私たち長谷工の仕事は、「住まい」を通じて、幸せな暮らしづくりをプロデュースすることです。私たち自ら、土づくりから田植え、稲刈りまで丹念に育て、収穫した「たなかみ米」は、いつもおいしい、いつも安心なお米です。</p>
          <h4 class="lottery-point__ttl">滋賀県、琵琶湖の南で作られる「まぼろしのお米」</h4>
          <p>田上（たなかみ）の地は天智天皇の命を受け開墾されたと言い伝えられ市場に出回る量が少なかったことから、「まぼろしのお米」と呼ばれたそうです。<br>米本来の旨みと香りを凝縮しほどよい粘り気が特徴のコシヒカリ、正真正銘の滋賀田上産のお米です。</p>
          <h4 class="lottery-point__ttl">減農薬で、安心・安全</h4>
          <p>「たなかみのお米」は、安心安全な農産物栽培のために定めた農林水産省新ガイドラインに準拠した、特別栽培米です。「たなかみのお米」が育つ場所は、農薬や化学肥料の使用を抑え、濁水を流さないなど周辺環境に配慮した、「環境こだわり米」として、滋賀県知事より認証されたお米です。</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>たなかみ米の<strong>美味しさの特徴は、食べたときに口いっぱいに広がる甘み</strong>です！水田に育つ稲は、陽差しをたっぷりと浴び、涼しい夜を過ごすことで栄養をじっくりと蓄えます。<br>山間の盆地という昼夜の寒暖差が大きい田上（たなかみ）の地は、一粒一粒に、「まぼろしのお米」という名にふさわしい旨みと栄養をもたらしてくれます。みなさまもぜひ味わってみてくださいね♪</p>
        </div>
      </div>

        <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>たなかみのお米 2合（約300g）真空キューブ×6セット</dd>
          </dl>
          <dl>
            <dt>容量</dt>
            <dd>1.8kg</dd>
          </dl>
          <dl>
            <dt>サービス提供</dt>
            <dd>長谷工あんしんデリ</dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="flex flex_around mt2 mb2">
    </div>
    <small class="u-small">※お届けまで2週間ほどお時間を要する場合がございます。</small>

        <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

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
