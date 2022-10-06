<?php
//base
include ("../../function.php");
$content = get_id_data('9050');
$pageTtl = $content['title'];
$footerTtl = '8月の抽選賞品<br>【MoriMori】LED ランタンスピーカー<br>抽選で8名さまに当たります！';

//meta
$metaTtl = strip_tags($pageTtl).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = strip_tags($pageTtl).'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?> <main class="main">
  <article class="main__row"> <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?> <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '20';
    $smile_month = '08';
    $smile_next ="2020年9月1日（火）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "166";//テストFLP用リンクナンバー
    $smile_id_production = "166";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?> <section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?> </section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">温かい炎のような明かりがやさしい、LEDランタン</h4>
          <p class="lottery-point__ex u-font__palt">落ち着いたダークグリーンカラーが特徴的なランタン。まるで本物の炎のような明かりですが、実は火を使わないLEDランタンなんです。火を使わないので、おうちの中でインテリア照明としてもご活用いただけます。500gと軽量で持ち運びしやすく、LEDの光量はつまみで簡単に調節可能！さらに、microUSBケーブルで充電しておけば、ワイヤレスで連続20時間以上点灯できます。デザイン性と実用性を兼ね備えたアイテムです。</p>
          <h4 class="lottery-point__ttl">360度スピーカーで音楽再生も！みんなで楽しい時間をシェアしよう</h4>
          <p class="lottery-point__ex u-font__palt">そして、何といっても1番のポイントは、Bluetooth&reg;でスマートフォンにつなぐだけで音楽再生ができること！360度スピーカーなので、どの位置からも快適に音楽を楽しめます♪約5時間の連続再生ができるので、お気に入りのアルバムを組み合わせたり、リピートしたりして、ゆったりとした時間を過ごせますよ♪<br>オイルランプのようなLEDランタンを囲んで、家族と好きな音楽で楽しい時間を過ごしてみてはいかがでしょうか？</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">置くだけで家の中でもアウトドア気分を味わえるLEDランタン。好きな音楽をかけるだけでなく、森林や小川、焚火などの自然の音を流すことで、いろいろなアウトドアシーンを楽しむことができます。もちろん、火がなくても使えるので、お子さまと一緒にいるときも安心です。持ち運びに便利な、取っ手付きのかわいい外箱に入れてお届けします♪おうちで過ごすリラックスタイムに、キャンプやピクニックなどのお出かけに…と、幅広いシーンに対応する本商品。ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long">
          <h6>＜本体＞</h6>
          <dl>
            <dt>品番</dt>
            <dd>FLS-1701-DG</dd>
          </dl>
          <dl>
            <dt>JANコード</dt>
            <dd>4573111800013</dd>
          </dl>
          <dl>
            <dt>製品名</dt>
            <dd>LED Lantern Speaker</dd>
          </dl>
          <dl>
            <dt>色</dt>
            <dd>ORIGINAL GREEN (ダークグリーン色)</dd>
          </dl>
          <dl>
            <dt>説明</dt>
            <dd>充電式 LED ランタンスピーカー<br>無段階調光LEDライト、スピーカー搭載スマートフォンなどからBluetooth（ワイヤレス接続）で音源再生 </dd>
          </dl>
          <dl>
            <dt>主な材料</dt>
            <dd>ポリカーボネイト、シリコンゴム、硬質ガラス（ポロシリケイト） </dd>
          </dl>
          <dl>
            <dt>表面処理</dt>
            <dd>塗装</dd>
          </dl>
          <dl>
            <dt>本体サイズ</dt>
            <dd>幅110x奥行110x高さ275(mm)（ガラスグローブ装着）</dd>
          </dl>
          <dl>
            <dt>パッケージサイズ</dt>
            <dd>幅135x奥行135x高さ340(mm) </dd>
          </dl>
          <dl>
            <dt>外箱サイズ</dt>
            <dd>幅190x奥行190x高さ370(mm) </dd>
          </dl>
          <dl>
            <dt>本体重量</dt>
            <dd>500g（ガラスグローブ装着） パッケージ重量：900g（製品入り） </dd>
          </dl>
          <dl>
            <dt>外箱重量</dt>
            <dd>1,200g（製品入り）</dd>
          </dl>
          <dl>
            <dt>連続点灯時間</dt>
            <dd>20時間以上（中光量点灯時）</dd>
          </dl>
          <dl>
            <dt>再生時間</dt>
            <dd>5時間（最高音量時）、7時間（中光量、中音量時）</dd>
          </dl>
          <dl>
            <dt>光源種類</dt>
            <dd>LED(0.4w)無段階調光</dd>
          </dl>
          <dl>
            <dt>LED寿命</dt>
            <dd>40,000時間 </dd>
          </dl>
          <dl>
            <dt>色温度</dt>
            <dd>2,000k</dd>
          </dl>
          <dl>
            <dt>照度</dt>
            <dd>30lm</dd>
          </dl>
          <dl>
            <dt>内蔵電池</dt>
            <dd>リチウムイオン充電式電池 3.7V 1700mAh</dd>
          </dl>
          <dl>
            <dt>充電方式</dt>
            <dd>MicroUSB充電</dd>
          </dl>
          <dl>
            <dt>充電時間</dt>
            <dd>4時間（5V-1A）</dd>
          </dl>
          <dl>
            <dt>電池寿命</dt>
            <dd>500回</dd>
          </dl>
          <dl>
            <dt>通信方式 / スピーカー</dt>
            <dd>Bluetooth V4.1</dd>
          </dl>
          <dl>
            <dt>スピーカー消費電力、出力サイズ</dt>
            <dd>5W</dd>
          </dl>
          <dl>
            <dt>最大通信距離</dt>
            <dd>8m</dd>
          </dl>
          <dl>
            <dt>生産国</dt>
            <dd>中国</dd>
          </dl>
          <dl>
            <dt>保証期間</dt>
            <dd>1年間</dd>
          </dl>
          <small class="u-small">※ Bluetooth&reg;はBluetooth SIG,Incの登録商標です。 </small><br>
          <small class="u-small">
            <ul class="u-list__ul_dot">
              <li class="mb0">本製品の仕様は予告なく変更する場合があります</li>
              <li class="mb0">常時通電使用可能</li>
              <li class="mb0">通信距離は目安です。本機を使用される環境により異なります</li>
              <li class="mb0">本製品は防水・防滴仕様ではありません</li>
              <li>多湿な風呂場、屋外での降雨下での使用、放置はしないでください</li>
            </ul>
          </small>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
      </div>
      <div class="mb4 mb2_sp u-font__palt"> <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?> <?php if (!$ssoFlag == 1){ ?> <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small> <?php }; ?> </div>
      <div class="mt2">
        <P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
      </div>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3> <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?> </aside>
    <nav class="main__snav snav"> <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?> </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
