<?php
//base
include ("../../function.php");
$content = get_id_data('9075');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '9月の抽選賞品<br>【CLAYMORE】 LAMP Cabin<br>クレイモアランプ キャビン<br>抽選で6名さまに当たる！';

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
    $smile_month = '09';
    $smile_next ="2022年10月3日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "240";//テストFLP用リンクナンバー
    $smile_id_production = "240";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">【手軽なLEDランタン】アウトドア初心者でも安心して使える！</h4>
          <p class="lottery-point__ex">クレイモアランプ キャビンは火を使わないLEDランタンです。ガソリンや灯油を使う燃焼系ランタンとは違い、取り扱いが簡単！アウトドア初心者でも手軽に使えます。特に、割れにくいアクリル素材を使っているクレイモアランプ キャビンは、子どもが持ち運ぶ際も安心♪手持ちのほか、吊り下げ、卓上、また三脚でも立てられる、3WAYならぬ4WAYの設置が可能です。テント全体から手元まで光の届く範囲を調整しながら、自在に明かりを楽しめます。</p>
          <h4 class="lottery-point__ttl">【災害時にも心強い】充電式でモバイルバッテリー機能搭載！</h4>
          <p class="lottery-point__ex">クレイモアランプ キャビンは、充電式でモバイルバッテリー機能搭載！手元を照らすだけなら最大55時間稼働で、スマホの充電も可能です！本体充電中は、バッテリー残量インジケーターの表示灯が点滅して、充電具合を教えてくれる優れもの♪ アウトドアはもちろん、災害時にも心強い味方になってくれます！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex u-font__palt">賞品をお届けする10月中旬は、お月見の頃ですね。秋の夜長に、LEDランタンのクレイモアランプ キャビンはいかがでしょうか?クレイモアランプ キャビンのさまざまな暖色系の光は、インスタ映え間違いなし♪　「風に揺れる光（ろうそくの火）」、「夕焼けの赤色光」、「暗い夜を明るく照らす満月の光」、「朝焼けの暁光」と4種類の光モードがあり、光モードごとに無段階で光の調節ができます。さまざまな光の風合いをお楽しみください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>商品名</dt><dd>【CLAYMORE】LAMP Cabin  クレイモアランプ キャビン</dd></dl>
            <dl><dt>重量</dt><dd>556g</dd></dl>
            <dl><dt>バッテリー容量</dt><dd>Li-ion 3.6V 6,700mAh (24.12Wh)</dd></dl>
            <dl><dt>明るさ</dt><dd>30～640Lm</dd></dl>
            <dl><dt>連続点灯時間</dt><dd>6～55時間</dd></dl>
            <dl><dt>色温度</dt><dd>1,300K - 1,500K - 3,000K</dd></dl>
            <dl><dt>入力</dt><dd>USB 5V1A</dd></dl>
            <dl><dt>充電時間</dt><dd>5時間30分</dd></dl>
            <dl><dt>付属品</dt><dd>リングフック、ペンダントフック、レザーストラップ、USB  Type-C充電ケーブル<br>※ポーチ別売り</dd></dl>
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