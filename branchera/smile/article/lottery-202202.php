<?php
//base
include ("../../function.php");
$content = get_id_data('9068');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '2月の抽選賞品<br>【BRUNO】電動ミルコーヒーメーカー ベージュ<br>抽選で15名さまに当たる！';

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
    $smile_month = '02';
    $smile_next ="2022年3月1日（火）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "227";//テストFLP用リンクナンバー
    $smile_id_production = "227";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">ミル・ドリッパー・カップがセットになった、手軽なコーヒーメーカー</h4>
          <p class="lottery-point__ex">「BRUNO」の電動ミルコーヒーメーカーは、電動ミル・ドリッパー・真空カップが一体になったコーヒーメーカーです。ミル部分にお気に入りのコーヒー豆を入れたら、ボタンでスイッチオン。挽き終わったらドリッパーを真空カップにセットし、そのままお湯を注げば挽きたての一杯を楽しめます。ミルには、お好みの挽き具合を選べる5段階の調節ダイヤル付き。「ステンレスメッシュフィルター」がセットされているので、ペーパーフィルターは不要です。</p>
          <h4 class="lottery-point__ttl">充電式でコンパクト。お好きな場所に持ち運んでコーヒーブレイク！</h4>
          <p class="lottery-point__ex u-font__palt">電動ミルコーヒーメーカーは充電式なので、電源を気にせず使えるのがポイント。付属のUSBケーブルで充電しておけば、約15回使うことができます。しかも、バッグや棚に収めやすいコンパクトサイズなので、アウトドアやオフィスへの持ち運びもラクラク！お好きな場所で、お好きなときにコーヒーブレイクを楽しめます。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">お届け時期の3月中旬は、まだ肌寒く、温かいコーヒーが美味しいシーズン。そこでおすすめなのが、「BRUNO」の電動ミルコーヒーメーカーです。全自動ミル・ドリッパー・真空カップがセットになっており、1杯分のドリップコーヒーを手軽にいれられます。カップはステンレス製なので、コーヒーの温かさをしっかりキープできるのもうれしいポイント♪ブランシエラクラブの人気コンテンツ「いま暮らCafé」と日本最古のコーヒー店「放香堂加琲」がコラボしたオリジナルコーヒー【いま暮ら珈琲】も、併せてチェックしてくださいね！</p>
        </div>
      </div>
			<a href="<?php echo $base_url?>/smile/article/exchange-original_coffee.php" class="center u-btn_brand mb3">【いま暮らCaf&eacute;×放香堂加琲】<br>オリジナルブレンドコーヒーはこちらから</a>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>型番</dt><dd>BOE080-BE</dd></dl>
            <dl><dt>本体サイズ(mm)</dt><dd>W75×H234×D75</dd></dl>
            <dl><dt>本体重量</dt><dd>600g</dd></dl>
            <dl><dt>容量</dt><dd>200ml</dd></dl>
            <dl><dt>充電時間</dt><dd>約4時間</dd></dl>
            <dl><dt>付属品</dt><dd>USBケーブル</dd></dl>
            <dl><dt>機能</dt><dd>挽き目5段階調整、真空二重構造<br>保温効力:39度以上（6時間）、保冷効力：12度以下（6時間）<br>自動停止機能、連続使用回数：約15回<br>耐熱温度：ドリッパー：120度 キャップ：110度</dd></dl>
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