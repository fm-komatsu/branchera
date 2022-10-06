<?php
//base
include ("../../function.php");
$content = get_id_data('10018');
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

<main class="main ">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange_multiple";// exchange or lottery or service or no_flp
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="owl_light">ふくろう型停電灯</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-owl_light.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-owl_light@2x.jpg"
              alt="ふくろう型停電灯"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">停電になったとき、ナイトスイッチをオンにしておけば、光センサーにより暗くなると自動点灯します。<br>かわいいふくろうの停電灯は、プラグが収納できますので、手持ちライトとしても使用でき、廊下やお部屋のコンセントにさしておけばOKです。<br>アウトドアや災害時、停電時に幅広く活躍します。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_multi">
              <dl>
                <dt>本体サイズ</dt>
                <dd>約58×32×87mm</dd>
              </dl>
              <dl>
                <dt>重量</dt>
                <dd>約71g</dd>
              </dl>
              <dl>
              <dt>材質</dt>
                <dd>本体/ABS樹脂</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "ふくろう型停電灯";//商品名
        $smile_num = "3,500";//必要スマイル数
        $smile_id_test = "84";//テストFLP用リンクナンバー
        $smile_id_production = "84";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl_nonum mb4" id="compact_toilet">コンパクトイレセット（3日分）</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>

          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-compact_toilet.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-compact_toilet@2x.jpg"
              alt="コンパクトイレセット（3日分）"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">大地震などの災害時に最初に困ったのは、食事でも飲料水でもなく「トイレ問題」と言われています。避難所では、トイレの設営に時間がかかり、数も少なく順番待ちで長蛇の列ができます。<br>コンパクトイレセットは、トイレの便座に専用の袋を装着して凝固剤をふりかけると排泄物が固まります。<br>災害はいつ自分にふりかかってくるか予測できません。万が一のために備えておけば、非常時にも安心です。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
						<div class="u-terms__inner u-list__dl_table_multi">
              <dl>
                <dt>内容</dt>
                <dd>
                  <ul>
                    <li>コンパクトイレ×20</li>
                    <li>凝固剤×20</li>
                    <li>汚物専用ポリ袋×2</li>
                    <li>取扱説明書×1</li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt>商品サイズ</dt>
                <dd>310×210×25mm</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "コンパクトイレセット（3日分）";//商品名
        $smile_num = "4,300";//必要スマイル数
        $smile_id_test = "85";//テストFLP用リンクナンバー
        $smile_id_production = "85";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl_nonum mb4" id="disaster_helmet">防災用ヘルメット　IZANO2（ホワイト/オレンジライン）</h4>

          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-disaster_helmet.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-disaster_helmet@2x.jpg"
              alt="防災用ヘルメット　IZANO２（ホワイト/オレンジライン）"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65 mb9 mb0_sp">国家検定「飛来・落下物用」「墜落時保護用」取得折りたたみヘルメット。<br>ワンアクションで組み立てられ、どなたでも「イザ」というときに素早く装着できます。<br>使用しないときには約半分の高さに折りたたんで収納が可能です。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
           <div class="u-terms__inner u-list__dl_table_multi">
              <dl>
                <dt>外寸</dt>
                <dd>
                  <ul>
                    <li>使用時：<br class="u-only__pc">幅222×奥行297×高さ139mm</li>
                    <li>折りたたみ時：<br class="u-only__pc">幅222×奥行297×高さ63mm</li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt>内寸</dt>
                <dd>幅216×奥行253mm</dd>
              </dl>
              <dl>
                <dt>頭囲の目安</dt>
                <dd>47～62㎝</dd>
              </dl>
              <dl>
                <dt>本体重量</dt>
                <dd>450g</dd>
              </dl>
              <dl>
                <dt>材質</dt>
                <dd>ABS樹脂</dd>
              </dl>
              <dl>
                <dt>仕様</dt>
                <dd>国家検定合格品(飛来落下物用・墜落時保護用)</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "防災用ヘルメット IZANO2<br>（ホワイト/オレンジライン）";//商品名
        $smile_num = "5,500";//必要スマイル数
        $smile_id_test = "208";//テストFLP用リンクナンバー
        $smile_id_production = "208";//本番FLP用リンクナンバー
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

   <!-- <section class="main__wrapper">
      <div class="lottery-point pb4 pb0_sp">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="emergency-light">ダイナモエマージェンシーライト</h4>
          <?php
            $multiShortage = 0; //欠品 = 1
            $smileAnnotation = '欠品中につき、お届けまでに1ヶ月以上お時間を要します。';
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-emergency_light.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-emergency_light@2x.jpg"
              alt="ダイナモエマージェンシーライト"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">携帯電話充電、FM/AMラジオ、サイレン、ライトの4機能。災害時の情報取得、照明、通信、救難に役立ちます。電源は単4乾電池3本使用（別売）、ソーラー充電機能（約10時間直射日光を照射すると満充電になります）、ダイナモ（手回し充電：乾電池の備蓄や夜間、悪天候時でソーラー電池が効かないときに有効）<br><span class="u-small">※一部機種は充電できない場合があります。<br>※充電時は純正ケーブルのご利用をおすすめします。</span>
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb6_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
           <div class="u-terms__inner u-list__dl_table_multi u-font__palt">
              <dl>
                <dt>内容</dt>
                <dd>本体、接続コード、携帯充電コネクタ×2種</dd>
              </dl>
              <dl>
                <dt>材質</dt>
                <dd>ABS樹脂</dd>
              </dl>
              <dl>
              <dt>本体サイズ</dt>
                <dd>約幅140×奥行き80×高さ36mm</dd>
              </dl>
              <dl>
              <dt>重量</dt>
                <dd>約290g</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        // $smile_itemname = "ダイナモエマージェンシーライト";//商品名
        // $smile_num = "5,400";//必要スマイル数
        // $smile_id_test = "157";//テストFLP用リンクナンバー
        // $smile_id_production = "157";//本番FLP用リンクナンバー
        // if(isset($multiShortage) && $multiShortage) {
        //   include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        // } else {
        //   include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        // }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>

    </section>-->

    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="alpha-rice">尾西のご飯シリーズ<br class="u-only__sp">（アルファ米 12食）</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
            $smileAnnotation = 'メーカーの生産の遅れにより、お届けに1ヵ月半程度かかる場合がございます。ご了承ください。';
          ?>

          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-eonishi_gohan.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-eonishi_gohan@2x.jpg"
              alt="尾西のご飯シリーズ（アルファ米 12食）"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">アルファ米は炊き立てのご飯のおいしさをそのままに急速乾燥したものです。お湯で15分、水で60分でふんわりご飯が出来上がり。いろいろな味が楽しめます。5年保存可能。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else if(isset($smileAnnotation) && $smileAnnotation) { ?>mb7_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
           <div class="u-terms__inner u-list__dl_table_multi">
              <dl>
                <dt>内容</dt>
                <dd>
                五目ご飯、わかめご飯、<br class="u-only__pc">ドライカレー、チキンライス 各3食
                </dd>
              </dl>
              <dl>
                <dt>梱包サイズ</dt>
                <dd>幅236×奥行き168×高さ152mm</dd>
              </dl>
              <dl>
                <dt>重量</dt>
                <dd>約1.5kg</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap u-font__palt">
        <?php
        $smile_itemname = "尾西のご飯シリーズ<br>（アルファ米 12食）";//商品名
        $smile_num = "5,500";//必要スマイル数
        $smile_id_test = "155";//テストFLP用リンクナンバー
        $smile_id_production = "155";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage == 1) {
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
          <h4 class="lottery-point__ttl_nonum mb4" id="led-lanthanum">リムーブLEDランタンDX</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-led_lantern.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-led_lantern@2x.jpg"
              alt="リムーブLEDランタンDX"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">本体から取り外して使えるライトが二つ付いています。通常時は全方位を明るく照らす大光量ランタンとして使用でき、両脇のライトを取り外せば手持ちライトとして使えます。夜間に出歩くときや、停電時に備え、枕もとなどに用意しておけば安心です。<br><span class="u-small">※仕様および外観は、改良のため予告なく変更される場合があります。また、メーカーの欠品により納品までお時間をいただく場合があります。</span>
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
           <div class="u-terms__inner u-list__dl_table_multi u-font__palt">
              <dl>
                <dt>内容</dt>
                <dd>
                ランタン光源：LED（発光ダイオード）70個使用<br>電源DC6V ランタン＝電池：単一電池3本（別売）、ライト＝DC4.5V
                </dd>
              </dl>
              <dl>
                <dt>材質</dt>
                <dd>本体：ABS樹脂 / ホヤ：ポリスチレン / 持ち手：鉄（クロムメッキ）</dd>
              </dl>
              <dl>
                <dt>商品サイズ</dt>
                <dd>約幅134×奥行き127×高さ255mm</dd>
              </dl>
              <dl>
                <dt>重量</dt>
                <dd>約780g</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "リムーブLEDランタンDX";//商品名
        $smile_num = "8,000";//必要スマイル数
        $smile_id_test = "158";//テストFLP用リンクナンバー
        $smile_id_production = "158";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl_nonum mb4" id="1day_emergency_set">1DAY災害対策25点セット</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>

          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/1day_emergency_set.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/1day_emergency_set@2x.jpg"
              alt="1DAY災害対策25点セット"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">A4ファイルサイズのパッケージで棚や引き出しに効率よく収納。オフィスや家庭での棚や引き出しなどに常備しやすい化粧箱入り。<br>職場や避難所での1日分の滞在をサポートする災害対策25点セットです。
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_multi u-font__palt">
              <dl>
                <dt>セット内容</dt>
                <dd>
                  非常用持出袋・ウェットティッシュ・静音アルミブランケット・綿棒&amp;バンソウコウ※カイロ×3・救急てぬぐい・軍手・バランススティック×3・8徳ナイフ・マスク・FMラジオ（電池別売り：単四電池2本）・ホイッスル・ダイナモLEDライト・ネックピロー・アイマスク・耳栓・携帯用トイレ×3・7年保存水500ml×2(製造年月日より7年。お届けは6年半以上の物を出荷いたします)<small class="u-small">※医療機器届出番号：27B3X00138000001</small>
                </dd>
              </dl>
              <dl>
                <dt>サイズ</dt>
                <dd>
                  非常持出袋：約34×39cm<br>箱サイズ：31×24×8.5cm
                </dd>
              </dl>
              <dl>
                <dt>素材</dt>
                <dd>
                  非常持出袋：ポリエステル
                </dd>
              </dl>
              <dl>
                <dt>原産国</dt>
                <dd>
                  中国製・日本製・他
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "1DAY災害対策25点セット";//商品名
        $smile_num = "8,000";//必要スマイル数
        $smile_id_test = "223";//テストFLP用リンクナンバー
        $smile_id_production = "223";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>

    </section>    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="tranker">【車載用防災セット】トランカー 計20点入</h4>
          <?php // 欠品フラグ
            $multiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img
              data-src="<?php echo $img_url.'/smile/article/exchange-tranker.jpg'?>"
              data-retina="<?php echo $img_url; ?>/smile/article/exchange-tranker@2x.jpg"
              alt="【車載用防災セット】トランカー 計20点入"
              style="max-width:240px"
              class="u-img__max">
            </figure>
            <p class="w65">トランカーは、自然災害や交通渋滞など、乗車中に起こりうるさまざまなトラブルを想定した車載用防災グッズです。高い視認性で安全を守る「セーフティベスト」、防寒や雨具、着替えに役立つ「3WAYポンチョ」、連続15時間点灯できる「ルミカ2WAYランタン」、緊急脱出ハンマーの「ライフハンマープラス」、20時間点滅し続ける「非常信号灯」など、本当に役立つ20点の防災用品を専用スチールケースにセット。マイカーに積んでおくだけで、万が一の事態に幅広く備えることができます。</span>
            </p>
          </div>
        </div>
      </div>

      <div class="flex between lottery-terms">
        <div class="u-terms u-terms__row w50 <?php if(isset($multiShortage) && $multiShortage) { ?>mb6_sp<?php } else { ?>mb2_sp<?php } ?>">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
           <div class="u-terms__inner u-list__dl_table_multi u-font__palt">
              <dl>
                <dt>本体サイズ（スチールケース）</dt>
                <dd>
                220×380×90mm
                </dd>
              </dl>
              <dl>
                <dt>重量</dt>
                <dd>3.1㎏</dd>
              </dl>
              <dl>
                <dt>セット内容</dt>
                <dd>■専用スチールケース×1 ■使い捨て携帯トイレ（大小便兼用）×1 ■使い捨て携帯トイレ（小便専用）×2<br>■3WAYポンチョ×1 ■反射材付きグローブ×1 ■緊急用ホイッスル×1 ■使い捨て簡易ライト×1 ■常備用カイロ×2 ■3M社製防じんマスク×2 ■ウェットティッシュ×1 ■タオル＆グローブ×1 ■防災ペン＆伝言カード×1 ■非常信号灯（単4電池付き）×1 ■ライフハンマープラス×1 ■2WAYランタン（単3電池付き）×1 ■救急絆創膏※×1 ■セーフティーベスト×1※医療機器届出番号：13B2X00023000112</dd>
              </dl>
              <small class="u-small">注意事項：車内の急激な温度変化などにより、一部商品については機能が低下する場合がございます。直射日光の当たる場所での保管は避け、必ず商品の定期的な確認を行ってください。</small>
            </div>
          </div>
        </div>
        <div class="w50 smile-footer_wrap">
        <?php
        $smile_itemname = "【車載用防災セット】<br>トランカー 計20点入";//商品名
        $smile_num = "25,000";//必要スマイル数
        $smile_id_test = "226";//テストFLP用リンクナンバー
        $smile_id_production = "226";//本番FLP用リンクナンバー
        if(isset($multiShortage) && $multiShortage) {
          include ($inc_path."/lib/inc/page/_smile/smile-footer-shortage.php");
        } else {
          include ($inc_path."/lib/inc/page/_smile/smile-footer.php");
        }
        ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
    </section>    <aside class="main__item">
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
