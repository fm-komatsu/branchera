<?php
//base
include ("../../function.php");
$content = get_id_data('9069');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '3月の抽選賞品<br>【LOGOS】LOGOS the ピラミッドTAKIBI L<br>抽選で8名さまに当たる！';

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
    $smile_month = '03';
    $smile_next ="2022年4月1日（金）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "229";//テストFLP用リンクナンバー
    $smile_id_production = "229";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">キャンプ初心者でもたき火を楽しめる、組み立て式のたき火台</h4>
          <p class="lottery-point__ex">キャンプといえば、やっぱりたき火。「LOGOS the ピラミッドTAKIBI」は、キャンプ初心者でも簡単にたき火を楽しめる、組み立て式のたき火台です。約10秒で組み立てられるほどシンプルな構造で、付属のゴトクに薪を立てかければ簡単に薪を組むことができます。また、灰受け皿が付いているので自然にやさしく、直火禁止のキャンプ場でも安心です。</p>
          <h4 class="lottery-point__ttl">ダッチオーブンやケトルの直置きOK。串焼きプレートで魚も焼ける</h4>
          <p class="lottery-point__ex u-font__palt">「LOGOS the ピラミッドTAKIBI」は、たき火だけでなく調理も楽しめます。ゴトクは耐荷重性にすぐれているので（目安は約10kg）、重いダッチオーブンやケトルを直接のせることが可能。また、串を刺して立てられる串焼きプレートも標準装備！細い丸串、丈夫な平串、どちらにも対応しているので、魚をはじめ、さまざまな食材を串焼きにできます。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">お届け時期の4月中旬は、気候が暖かくなってお出かけの機会が増えてくる時期。そこでおすすめしたいのが、「LOGOS the ピラミッドTAKIBI」です。収納バッグからパーツを取り出せば、約10秒で組み立てられるたき火台。ゴトクの間に差し込むように薪を立てるだけで、キャンプ初心者でも簡単にたき火を楽しめます。もちろんしまうときも簡単、コンパクトで持ち運びラクラク。ご家族やご友人同士での、キャンプのお供にぜひどうぞ♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>総重量</dt><dd>（約）3.1kg</dd></dl>
            <dl><dt>本体サイズ</dt><dd>（約）39×38.5×28cm</dd></dl>
            <dl><dt>ゴトク幅</dt><dd>（約）13.5cm</dd></dl>
            <dl><dt>収納サイズ</dt><dd>（約）42×26.5×7.5cm</dd></dl>
            <dl><dt>構成</dt><dd>本体、焚火ゴトク（串焼きプレート付）、ワイヤーロストル、収納バッグ</dd></dl>
            <dl><dt>主素材</dt><dd>ステンレス、スチール、ポリエステル</dd></dl>
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