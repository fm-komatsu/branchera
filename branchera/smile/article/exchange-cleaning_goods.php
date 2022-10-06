<?php
//base
include ("../../function.php");
$content = get_id_data('10041');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルで交換できる「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = strip_tags($content['description']);
$metaThum = $img_url.'/thum/'.$content['image'];
//bodyClass
$body_class ="page-article";
//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main ">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange_multiple";// exchange or lottery or service or no_flp
    $multi_cnt = "cleaning";
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="cleanner">強力電解水クリーナー</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              src="<?php echo $img_url; ?>/smile/article/exchange-cleanner@2x.jpg"
              alt="強力電解水クリーナー"
              style="max-width:240px"
              class="u-img__max"
              loadin="lazy">
            </figure>
            <p class="w65">おそうじのプロが現場で使用している、完全プロ仕様の電解水クリーナーです。<br>水を独自の方法で電気分解し、1ミリの1000分の1の微細な泡「ウルトラファインバブル」も溶け込ませて洗浄力を高めたアルカリ電解水。<br>界面活性剤を使用していないので泡立ちも無く、無色無臭で排水も汚しません。ニオイの元となる汚れや雑菌を取り除くので、消臭効果も期待できます。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms <?php if(isset($multiShortage) && $multiShortage) { ?>mt8<?php } else { ?><?php } ?>">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_multi">
              <dl>
                <dt>液性</dt>
                <dd>アルカリ性</dd>
              </dl>
              <dl>
                <dt>成分</dt>
                <dd>炭酸カリウム換算1%未満</dd>
              </dl>
              <dl>
              <dt>正味量</dt>
                <dd>300ml</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "強力電解水クリーナー";//商品名
        $smile_num = "1,800";//必要スマイル数
        $smile_id_test = "169";//テストFLP用リンクナンバー
        $smile_id_production = "169";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>

    </section>
    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="cloth">万能ふき取りクロス</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w33 center_sp mb2_sp">
              <img
              src="<?php echo $img_url; ?>/smile/article/exchange-cloth@2x.jpg"
              alt="万能ふき取りクロス"
              style="max-width:240px"
              class="u-img__max"
              loading="lazy">
            </figure>
            <figure class="w33 center_sp">
              <img
              src="<?php echo $img_url; ?>/smile/article/exchange-cloth__02@2x.jpg"
              alt="万能ふき取りクロス"
              style="max-width:240px"
              class="u-img__max"
              loading="lazy">
            </figure>
            <p class="w33">おそうじのプロが選んだ、万能ふき取りクロスです。<br>ミクロの繊維を使った抜群の拭き取り性能と、優れた吸水性により拭きあとが残りにくくなっています。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms mb2 <?php if(isset($multiShortage) && $multiShortage) { ?>mt5<?php } else { ?><?php } ?>">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_multi">
              <dl>
                <dt>サイズ</dt>
                <dd>約300×400mm</dd>
              </dl>
              <dl>
                <dt>素材</dt>
                <dd>ポリエステル100％</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "万能ふき取りクロス";//商品名
        $smile_num = "2,100";//必要スマイル数
        $smile_id_test = "170";//テストFLP用リンクナンバー
        $smile_id_production = "170";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <div class="flex between lottery-terms <?php if(isset($multiShortage) && $multiShortage) { ?>mt5<?php } else { ?><?php } ?>">
        <div class="u-terms u-terms__row w50 smile-footer_wrap <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <?php
          $smile_itemname = "万能ふき取りクロス 2枚セット";//商品名
          $smile_num = "3,300";//必要スマイル数
          $smile_id_test = "171";//テストFLP用リンクナンバー
          $smile_id_production = "171";//本番FLP用リンクナンバー
          if(isset($multiShortage) && $multiShortage) {
            include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
          } else {
            include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
          }
          ?>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "万能ふき取りクロス 3枚セット";//商品名
        $smile_num = "4,500";//必要スマイル数
        $smile_id_test = "172";//テストFLP用リンクナンバー
        $smile_id_production = "172";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
    </section>

    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="cleanner-cloth-gel">強力電解水クリーナー＋万能ふき取りクロス＋除菌消臭ゲル</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>

          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              src="<?php echo $img_url; ?>/smile/article/exchange-cleanner-cloth-gel@2x.jpg"
              alt="強力電解水クリーナー＋万能ふき取りクロス＋除菌消臭ゲル"
              style="max-width:240px"
              class="u-img__max"
              loading="lazy">
            </figure>
            <p class="w65">強力電解水クリーナーと万能ふき取りクロス、除菌消臭ゲルのお得な3点セットです。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="w100 smile-footer_wrap">
        <?php
        $smile_itemname = "強力電解水クリーナー＋万能ふき取りクロス＋除菌消臭ゲル";//商品名
        $smile_num = "5,300";//必要スマイル数
        $smile_id_test = "174";//テストFLP用リンクナンバー
        $smile_id_production = "174";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。<br>※詳細スペックは各商品（単品）に記載の内容をご確認ください。</small>

    </section>

    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="cleanner-cloth">強力電解水クリーナー＋万能ふき取りクロス</h4>
          <?php
            $multiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              src="<?php echo $img_url; ?>/smile/article/exchange-cleanner-cloth@2x.jpg"
              alt="強力電解水クリーナー＋万能ふき取りクロス"
              style="max-width:240px"
              class="u-img__max"
              loading="lazy">
            </figure>
            <p class="w65">強力電解水クリーナーと万能ふき取りクロスのセットです。</span>
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms <?php if(isset($multiShortage) && $multiShortage) { ?>mt5<?php } else { ?><?php } ?>">
        <div class="w100 smile-footer_wrap">
        <?php
        $smile_itemname = "強力電解水クリーナー＋万能ふき取りクロス";//商品名
        $smile_num = "3,000";//必要スマイル数
        $smile_id_test = "175";//テストFLP用リンクナンバー
        $smile_id_production = "175";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。<br>※詳細スペックは各商品（単品）に記載の内容をご確認ください。</small>
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
