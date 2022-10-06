<?php
//base
include ("../../function.php");
$content = get_id_data('10019');
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
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange";// exchange or lottery or service or no_flp
    $smile_num = "10,000";//必要スマイル数
    $smile_id_test = "149";//テストFLP用リンクナンバー
    $smile_id_production = "149";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>



    <section class="main__wrapper">

    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              data-src="<?php echo $img_url ?>/smile/article/exchange-sbcurry-img1.png"
              data-retina="<?php echo $img_url ?>/smile/article/exchange-sbcurry-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              data-src="<?php echo $img_url ?>/smile/article/exchange-sbcurry-img2.png"
              data-retina="<?php echo $img_url ?>/smile/article/exchange-sbcurry-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              data-src="<?php echo $img_url ?>/smile/article/exchange-sbcurry-img3.png"
              data-retina="<?php echo $img_url ?>/smile/article/exchange-sbcurry-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
      <h4 class="lottery-point__ttl">食べ比べするしかない！？4種類のカレーが楽しめる！</h4>
      <p>4種類のカレーをぜいたくに詰め合わせたオリジナルギフトセット。バランスのとれた専門店ビーフカレー、フォン・ド・ボーソースで煮込んだレストランディナービーフカレー、たっぷりのあめ色玉ねぎと生クリームで仕上げた牛すね肉のローストオニオンカレー、ビーフブイヨンのコク深い味わいの北海道産野菜のビーフカレー…ぜーんぶお試しいただけます！食べ比べや、あいがけも楽しめちゃう♪</p>
      <h4 class="lottery-point__ttl">各種5袋、合計20袋を詰め合わせ！人が集まるときにも◎</h4>
      <p><strong>各種5袋ずつ、合計20袋</strong>を詰め合わせた大満足のボリューム！ご家族で召し上がるのはもちろん、大人数が集まる日のお食事にもおすすめです。手間いらずで、レストランで食べるような絶品カレーのできあがり♪食事中の会話が弾むこと間違いなしです！</p>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>ご家庭でレストランの本格的な味を再現したレトルトカレーのセットです。<strong>お湯で温めるか、お皿に移して電子レンジでチンするだけでOK</strong>なので、急な来客時の対応や、ちょっと家事をお休みしたいときにも役立ちます。いろいろなシーンで活用できる便利で美味しい商品ですよ♪</p>
        </div>
      </div>

         <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>
              <ul class="u-list__ul_dot">
                <li>専門店ビーフカレー中辛 ×5 </li>
                <li>レストランディナービーフカレー中辛 ×5</li>
                <li>牛すね肉のローストオニオンカレー ×5</li>
                <li>北海道産野菜のビーフカレー ×5</li>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt>原材料</dt>
            <dd>
              <div class="mb2"><span class="u-font__bold">◆ 専門店ビーフカレー中辛 200g</span><br>牛肉、食用油脂（牛脂、コーン油、豚脂）、小麦粉、野菜・果実（じゃがいも、バナナ）、砂糖、食塩、カレー粉、ウスターソース、ソテー・ド・オニオン、乳糖、ビーフエキス、香辛料、フォン・ド・ボーソース、ソースパウダー、脱脂粉乳、チキンブイヨン、オニオンパウダー、ぶどう糖、カラメル色素、調味料（アミノ酸等）、酸味料、香辛料抽出物、香料、（一部に小麦・乳成分・牛肉・大豆・鶏肉・バナナ・豚肉・りんごを含む）</div>
              <div class="mb2"><span class="u-font__bold">◆ レストランディナービーフカレー中辛 200g</span><br>味付牛肉（牛肉、乳たん白、食塩）、ソテー・ド・オニオン、小麦粉、野菜・果実（人参、バナナ）、リンゴペースト、食用油脂（牛脂、豚脂）、砂糖、乳糖、食塩、カレー粉、トマトケチャップ、牛豚エキス、フォン・ド・ボーソース、酵母エキス調味料、オニオンパウダー、香辛料、ソースパウダー、酵母エキスパウダー、チキンブイヨン、脱脂粉乳、ぶどう糖、バター、調味料（アミノ酸等）、カラメル色素、酸味料、香辛料抽出物、香料、（一部に小麦・乳成分・牛肉・大豆・鶏肉・バナナ・豚肉・りんごを含む）</div>
              <div class="mb2"><span class="u-font__bold">◆ 牛すね肉のローストオニオンカレー 180g</span><br>牛肉（オーストラリア）、ソテー・ド・オニオン、牛脂、小麦粉、脱脂濃縮乳、オニオンパウダー、砂糖、ローストオニオンペースト、ウスターソース、カレー粉、ビーフブイヨン、食塩、トマトペースト、水飴、加工油脂（なたね油、大豆油、食塩）、酵母エキスパウダー、香辛料、ローストガーリック、生クリーム、フライドオニオン、乳等を主要原料とする食品（バターオイル、パーム油、脱脂濃縮乳、パーム核油、その他）／調味料（アミノ酸等）、着色料（カラメル、カロテン）、香料、（一部に小麦・卵・乳成分・牛肉・大豆・豚肉を含む）</div>
              <div class="mb2"><span class="u-font__bold">◆ 北海道産野菜のビーフカレー 180g</span><br>野菜（じゃがいも（国産）、人参、玉ねぎ、にんにく）、牛脂、小麦粉、牛肉、砂糖、ソテー・ド・オニオン、カレー粉、食塩、トマトペースト、ビーフブイヨン、生クリーム、ビーフオイル、ウスターソース、ビーフエキス、酵母エキス、フォン・ド・ボーソース、香辛料／調味料（アミノ酸等）、着色料（カラメル、カロテン）、塩化Ca、香料、（一部に小麦・乳成分・牛肉・大豆・豚肉を含む）</div>
            </dd>
          </dl>
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
