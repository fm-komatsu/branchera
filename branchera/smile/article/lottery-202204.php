<?php
//base
include ("../../function.php");
$content = get_id_data('9070');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '4月の抽選賞品<br>【Panasonic】頭皮エステ サロンタッチタイプ<br>〈スパイラル&amp;スライド〉 EH-HE0G<br>抽選で4名さまに当たる！';

//meta
$metaTtl = $cutHtmlTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $cutHtmlTtl.'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?> 
<main class="main">
  <article class="main__row"> <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?> 
    <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '22';
    $smile_month = '04';
    $smile_next ="2022年5月2日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "233";//テストFLP用リンクナンバー
    $smile_id_production = "233";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
		<section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?></section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item_center">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $cutHtmlTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item_center">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $cutHtmlTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item_center">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $cutHtmlTtl?>" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">プロの手技を再現、本格ヘッドマッサージ機</h4>
          <p class="lottery-point__ex">このヘッドマッサージ機を使えば、2つのアタッチメントブラシと3つのモードの組み合わせで、おうちで簡単に多様なプロの手技を体感できます。従来のヘッドスパよりも左右に大きくスライドする「ストレッチスライド(ストレッチブラシ)」。硬さの異なる3つのブラシがそれぞれ独立して動く「ワイドフォーフィンガースパイラル(密着もみ出しブラシ)」。この2つのブラシで、プロの手技を再現。エステの手技を取り入れた贅沢スカルプケアで、疲れをリフレッシュしましょう！さらに、防水式なので、お風呂でも使用可能です。</p>
          <h4 class="lottery-point__ttl">根元からハリ・コシのある髪の毛を実現！</h4>
          <p class="lottery-point__ex u-font__palt">硬さの異なるブラシが頭皮に密着し、毛穴に残った皮脂などの汚れを洗浄。手洗いよりも洗浄力がアップし、根元からハリ・コシのある髪の毛に生まれ変わります！また、使い続けることで頭皮環境が整い、髪の毛のハリ・コシだけでなく、ボリューム感のアップにもつながります。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex u-font__palt">春は新しいことが始まり、外出する機会も多くなる季節。忙しい1日を送っている人におすすめしたいのが、頭皮エステサロンタッチタイプ〈スパイラル&amp;スライド〉 EH-HE0Gです。ヘッドスパサロンから学んだテクニックを取り入れ、おうちでも気軽にプロのマッサージを体験できます。このヘッドマッサージ機をお風呂に持ち込んで、溜まった疲れを癒すリラックスタイムを過ごしましょう♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>電源方式</dt><dd>充電式</dd></dl>
            <dl><dt>充電時間</dt><dd>約1時間（室温15～35℃）</dd></dl>
            <dl><dt>使用可能時間</dt><dd>1日1回使用（約3分30秒）で約5～7回使用可能（フル充電時）</dd></dl>
            <dl><dt>収納時本体寸法</dt><dd>高さ20.1×幅11.2×奥行12.8cm（置き台含む）</dd></dl>
            <dl><dt>ブラシ</dt><dd>密着もみ出しブラシ<br>ストレッチブラシ</dd></dl>
            <dl><dt>質量</dt><dd>密着もみ出しブラシ取付時：約365g（置き台含まず）<br>ストレッチブラシ取付時：約390g（置き台含まず）</dd></dl>
            <dl><dt>消費電力</dt><dd>約6W（充電時）</dd></dl>
            <dl><dt>付属品</dt><dd>ACアダプター、置き台、簡単クイックマニュアル</dd></dl>
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