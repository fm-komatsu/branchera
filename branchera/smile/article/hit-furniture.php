<?php
//base
include ("../../function.php");
$content = get_id_data('8004');
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
    $smile_flug = "no_flp";// exchange or lottery or service or no_flp
    $smile_num = "10,000";//必要スマイル数
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__item u-terms">
      <div class="u-terms__row">
        <h3 class="u-terms__ttl">ご利用条件</h3>
        <div class="u-terms__inner">
          <p>こちらのサービスをご利用いただく場合は、以下の内容をご確認ください。</p>
          <ul class="u-list__ul">
            <li>長谷工インテックが取り扱うブランド家具の購入代金にスマイルを充当できます。</li>
            <li>お電話にて住まいレージご利用の旨をお伝えいただいた後、担当者の案内に沿ってお手続きください。</li>
            <li>1スマイル＝1円として10,000スマイル単位で何スマイルでもご利用可能です。</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="main__wrapper">

      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

    <section class="main__wrapper">

      <div class="product-img">
        <h3 class="u-ttl__l">提携メーカー一覧</h3>
        <div class="product-img__row">
          <figure class="product-img__item">
            <a href="https://www.keyuca.com/" target="_blank">
              <img
              data-src="../../lib/img/smile/article/list-keyuca.png"
              data-retina="../../lib/img/smile/article/list-keyuca@2x.png"
              alt="moda en casa-特別ご優待「20%」"
              width="267"
              height="81"
              style="max-width:267px;">
            </a>
            <figcaption>インテリアショップ「ＫＥＹＵＣＡ」(ケユカ)オリジナルデザインのシンプルで機能的な家具を特別ご優待にてご案内させていただきます。</figcaption>
          </figure>
          <figure class="product-img__item">
            <a href="http://www.hukla.co.jp/" target="_blank">
              <img
              data-src="../../lib/img/smile/article/list-hukla.png"
              data-retina="../../lib/img/smile/article/list-hukla@2x.png"
              alt="HUKLA-特別ご優待"
              width="255"
              height="81"
              style="max-width:255px;">
            </a>
            <figcaption>上質な暮らしの空間をテーマに、クオリティーにこだわったものづくりをすすめています。</figcaption>
          </figure>
          <figure class="product-img__item">
            <a href="http://www.karimoku.co.jp/" target="_blank">
              <img
              data-src="../../lib/img/smile/article/list-karimoku.png"
              data-retina="../../lib/img/smile/article/list-karimoku@2x.png"
              alt="KARIMOKU-特別ご優待"
              width="267"
              height="81"
              style="max-width:267px;"
              >
            </a>
            <figcaption>100歳の木を使うなら、その年輪にふさわしい家具をつくりたい。</figcaption>
          </figure>
        </div>

        <h5 class="u-ttl__m">その他、30種以上のブランドを取扱いしております。<br><small class="u-small">※こちらに記載のないメーカーブランドの取扱いもございますので、ぜひお問い合わせください。</small></h5>

        <img
        data-src="../../lib/img/gift/furniture/list-others.png"
        data-retina="../../lib/img/gift/furniture/list-others@2x.png"
        alt="その他のブランド"
        class="u-img__max mb5">

        <div class="lottery-point">
          <div class="lottery-point__row">
            <h4 class="lottery-point__ttl">有名ブランド家具を多数ご用意</h4>
            <p class="mb2">長谷工インテックで取り扱っている30種類以上のブランド家具を、たまったスマイルを使ってご購入いただけます。</p>
            <h4 class="lottery-point__ttl">さらに、会員さま特典として優待割引も！</h4>
            <p>住まいレージを利用いただけるだけでなく、会員さま特典として、優待割引価格でご提供しています。優待割引については<a href="<?php echo $base_url ?>/gift/article/furniture.php">こちら</a>をご覧ください。</p>
          </div>
        </div>

      </section>

      <section class="main__wrapper" id="flow">
        <h2 class="u-ttl__l">お申し込み方法</h2>

        <div class="u-terms">

          <div class="u-terms__row mb2">
            <h4 class="u-terms__ttl">関西圏・東海圏以外のお客さまはこちら<br>コンシェルジュデスクへお電話ください。</h4>
            <div class="u-terms__inner">
              <div class="u-terms__tel">
                <a href="tel:0120-875-713">0120-875-713</a>
                <br><small class="u-small">※受付 / 9：00～17：30（定休日 / 水・土・日・祝日・国民の休日・夏季・冬季休暇）</small>
              </div>
            </div>
          </div>

          <div class="u-terms__row mb2">
            <h4 class="u-terms__ttl">
              関西圏・東海圏のお客さまはこちら
              <br><small class="u-small">※対象範囲：大阪府・京都府・兵庫県・奈良県・滋賀県・和歌山県・愛知県・三重県</small>
            </h4>
            <div class="u-terms__inner">
              <p>実際に家具を見て検討をご希望の方は、下記ショールームにご予約ください。</p>
              <ul class="u-list__ul">
                <li>
                  <div>
                    「IDC大塚家具」大阪南港ショールーム<br>TEL：06-6612-4321　法人担当まで　/　Adrs：大阪市住之江区南港北2-1-10　ATC ITM棟
                    <br><small class="u-small">受付/10:30～18:30　※南港ショールーム以外をご希望の方はその旨をお伝えください。</small>
                  </div>
                </li>
                <li><div>「＋CASA（プラスカーサ）」<br>Tel:077-553-5500　/　Fax:077-553-5039　/　Adrs:滋賀県栗東市上鈎69-2
                  <br><small class="u-small">※受付 / 11:00～19：00（平日）、10:00～19：00（土日祝）</small>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <h3 class="u-ttl__m">お申し込みの流れ</h3>
      <ol class="u-list__ol">
        <li>上記のコンシェルジュデスクへお電話ください。長谷工インテックの担当者が応対いたします。</li>
        <li>担当者に住まいレージご利用の旨をお伝えいただいた後、担当者の案内に沿ってマイページからお手続きください。</li>
      </ol>

      <div class="u-column__2">
        <div class="u-column__item">
          <a href="<?php echo $mypoint_url ?>/11" target="_blank" class="u-btn_point_l">関西圏・東海圏以外の方はこちら</a>
        </div>
        <div class="u-column__item">
          <a href="<?php echo $mypoint_url ?>/13" target="_blank" class="u-btn_point_l">関西圏・東海圏の方はこちら</a>
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
