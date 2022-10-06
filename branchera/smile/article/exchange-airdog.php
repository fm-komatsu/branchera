<?php
//base
include ("../../function.php");
$content = get_id_data('10052');
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
    $smile_num = "100,000";//必要スマイル数
    $smile_id_test = "237";//テストFLP用リンクナンバー
    $smile_id_production = "237";//本番FLP用リンクナンバー
    $annotationMessage ="Airdog販売価格改定により、交換スマイル数を変更いたしました。";
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__wrapper">
    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-airdog-img1@2x.png"
              alt="<?php echo $pageTtl ?> image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-airdog-img2@2x.png"
              alt="【Airdog】X3s 特許取得TPAフィルターimage"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-airdog-img3@2x.png"
              alt="【Airdog】X3s image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">驚きの吸着力！特許取得TPAフィルター※を採用</h4>
          <p class="mb3 mb2_sp">本商品に使われている特許取得TPAフィルターは、電磁場をつくることで有害物質を帯電させ、磁石のように吸着させるフィルターです。マスクを通り抜ける、0.0146マイクロメートルの微細粒子を99.8%以上浄化します。<br><small class="u-small">※特許番号【国内】特許第6936388号 特許第6936389号 【米国】US9868123B2 US9735568B2</small></p>
          <h4 class="lottery-point__ttl">フィルター交換がいらないから、ランニングコスト0！</h4>
          <p>一般的な空気清浄機に使われているフィルターは交換が必要なのに対して、特許取得TPAフィルターは吸着した汚れを水洗いで落とせます。いつでも清潔に使用することができるうえ、ランニングコストもかかりません。</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>窓を閉め切りがちな冬は、室内の空気が気になりますよね。Airdog「X3s」なら、最小除去単位0.0146マイクロメートルという強力なフィルターで、カビ、ホコリ、ウイルス、バクテリアなどをしっかり吸着してくれます。そのうえフィルターは水洗いOKで交換不要だから、使い続けるほどお得！ぜひお試しくださいね♪</p>
        </div>
      </div>

   			<div class="lottery-terms u-terms">
          <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_long">
              <dl>
                <dt>型番</dt>
                <dd>AIR-X3-NDR110</dd>
              </dl>
              <dl>
                <dt>カラー</dt>
                <dd>ホワイト</p>
              </dl>
              <dl>
                <dt>本体サイズ(mm)</dt>
                <dd>幅260×奥行260×高さ520</dd>
              </dl>
              <dl>
                <dt>質量</dt>
                <dd>7kg</dd>
              </dl>
              <dl>
                <dt>適応スペース</dt>
                <dd>約31畳(48.6㎡)※</dd>
              </dl>
              <dl>
                <dt>電圧</dt>
                <dd>100V 50/60Hz</dd>
              </dl>
              <dl>
                <dt>定格電力</dt>
                <dd>27W</dd>
              </dl>
              <dl>
                <dt>運転音</dt>
                <dd>22.3〜46db</dd>
              </dl>
              <dl>
                <dt>電源コード</dt>
                <dd>1.5m</dd>
              </dl>
              <small class="u-small">※天井の高さは2.4mで算出</small>
            </div>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
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
