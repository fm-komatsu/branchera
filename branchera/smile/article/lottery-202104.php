<?php
//base
include ("../../function.php");
$content = get_id_data('9058');
$pageTtl = $content['title'];
$footerTtl = '4月の抽選賞品<br>【バング&amp;オルフセン】ワイヤレスネットワークスピーカー Beoplay M5（Natural）<br>抽選で2名さまに当たる！';

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
    $smile_year = '21';
    $smile_month = '04';
    $smile_next ="2021年5月6日（木）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "202";//テストFLP用リンクナンバー
    $smile_id_production = "202";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
		<section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?></section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">デザイン性も機能性も抜群！360°に音楽を届けるスピーカー</h4>
          <p class="lottery-point__ex u-font__palt">デンマークの老舗AV機器ブランド「バング&amp;オルフセン」の高級スピーカーが、今月の抽選プレゼントに登場！両手に収まるコンパクトサイズながら、360°全方位に音楽を届けるワイヤレススピーカーです。本賞品の特徴は、そのデザイン性の高さ。円筒形のスピーカーのカバーには、デンマークの有名テキスタイルメーカーKvadrat社のファブリックを採用しています。暖かみがあり、どんなお部屋にもマッチするデザインです♪さらに、毛織物から作られたカバーは、音響効果を高めてくれます。デザイン性と機能性、両方を兼ね備えているのが大きなポイントです！</p>
          <h4 class="lottery-point__ttl">ボタンやリモコンなし！指先で触れるだけで操作可能</h4>
          <p class="lottery-point__ex u-font__palt">本賞品は操作も簡単&amp;シンプル。ボタンやリモコンを使うことなく、スピーカーの表面を触れるだけで、音量調整や再生/一時停止の操作をすることができます。「もっとこだわって自分好みの音にしたい」という方は、バング&オルフセンの公式アプリ（無料）を使えば、ご自身のスマートフォンからお好みのサウンドに細かく調整可能！そのときの気分やシチュエーションにぴったりな音質にすることができますよ♪ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">CDではなく、スマートフォンから音楽を楽しむのが一般的になった昨今。「手軽で便利だけど、たまにはスピーカーから良い音で聴きたい！」という方も多いのではないでしょうか？そんな方々におすすめなのが本賞品です。Bluetoothを使って、簡単にお手持ちのスマートフォンと同期。機器に保存している音楽だけでなく、各ストリーミングサービスで配信されている音楽の再生も可能です♪たくさんの方からのご応募をお待ちしています！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>寸法</dt><dd>幅165×高さ185×奥行き165（mm）</dd></dl>
            <dl><dt>重量</dt><dd>2.54kg</dd></dl>
            <dl><dt>周波数特性</dt><dd>37～22,000Hz</dd></dl>
            <dl><dt>スピーカー</dt><dd>5インチウーファー×1、1.5インチミッドレンジ×1、3/4インチツイーター×3 </dd></dl>
            <dl><dt>アンプ</dt><dd>40WクラスDウーファー用(最大出力 160W)×1、<br>30WクラスDミッドレンジ用 (最大出力 120W)×1、<br>30WクラスDフロントツイーター用 (最大出力 120W)×1、<br>30WクラスDリアツイーター用 (最大出力 60W)×1</dd></dl>
            <dl><dt>接続</dt><dd>Bluetooth 4.0、Wi-Fi(2.4/5GHz 802.11 b/g/a/n)、<br>イーサネット(10/100 Mbit/s)、ラインイン（3.5mmステレオミニ）</dd></dl>
            <dl><dt>付属品</dt><dd>電源ケーブル、クイックガイド</dd></dl>
            <dl><dt>保証期間</dt><dd>2年</dd></dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php if($smile_month == 12) { echo ($smile_year  + 1); } else { echo ($smile_year); } ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
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