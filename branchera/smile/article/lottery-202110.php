<?php
//base
include ("../../function.php");
$content = get_id_data('9064');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '10月の抽選賞品<br>【いま暮らCaf&eacute;×放香堂加琲】オリジナルブレンドコーヒー(豆)<br>抽選で25名さまに当たる！';

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
    $smile_year = '21';
    $smile_month = '10';
    $smile_next ="2021年11月1日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "210";//テストFLP用リンクナンバー
    $smile_id_production = "210";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">いま暮らCaf&eacute;×放香堂加琲のコラボで、ここだけのオリジナル商品が誕生！</h4>
          <p class="lottery-point__ex u-font__palt">いま暮らCaf&eacute;から、なんとオリジナル商品が誕生しました！神戸港が開港し、諸外国との貿易が盛んに行われていた明治7年（1874年）、神戸に開店した「放香堂」。コーヒー豆の輸入を手掛け、明治11年（1878年）日本で初めて「店頭でのコーヒー飲用自由」を謳った新聞広告（讀賣新聞）を掲載したことから、「日本最古のコーヒー店」といわれています。長谷工の創業の地も、実は兵庫県！同じ創業地、“いま”と“昔”のコラボレーション企画として、『いま暮らCaf&eacute;×放香堂加琲オリジナルブレンド』が生まれました。<br><small class="u-small">※看板のロゴ「放香堂加琲」の中の「加」は現代とは使い方が違いますが、この木版画の中で使用されている当時の使い方に倣っています。</small></p>
          <h4 class="lottery-point__ttl">飲んだ瞬間に広がる果実味と鼻に抜ける香りを楽しめる豆を厳選！</h4>
          <p class="lottery-point__ex u-font__palt">ブランシエラクラブ会員さま限定のオリジナルブレンド「いま暮ら珈琲」は、豆の生産地として数百年の歴史を持ち、“モカマタリ”で有名な中東イエメンのコーヒー豆を柱に、しっかりとしたコクを持ちながら華やかな香りも感じる上質な中浅煎りの焙煎に仕上げました。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">今回のプレゼントは、ブランシエラクラブでしか手に入らないオリジナル商品！ブランシエラクラブの人気アンケート企画「いま暮らCaf&eacute;」から誕生したオリジナルブレンドです。おうち時間が続いている今、本格的なコーヒーをいれて、おうちカフェをしてみては？リラックスタイムのお供に、歴史あるコーヒーの香りと味わいをゆっくりお楽しみください♪たくさんのご応募お待ちしております！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>商品</dt><dd>オリジナルブレンドコーヒー(豆)</dd></dl>
            <dl><dt>内容量</dt><dd>100g×2袋(豆)</dd></dl>
            <dl><dt>産地</dt><dd>イエメン・ペルー・コロンビア</dd></dl>
            <dl><dt>その他</dt><dd>賞味期限は製造から1年間です</dd></dl>
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
