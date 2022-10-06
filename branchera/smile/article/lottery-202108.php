<?php
//base
include ("../../function.php");
$content = get_id_data('9062');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '8月の抽選賞品<br>【HAL】KING無水鍋&reg;24<br>抽選で5名さまに当たる！';

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
    $smile_month = '08';
    $smile_next ="2021年9月1日（水）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "207";//テストFLP用リンクナンバー
    $smile_id_production = "207";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
		<section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?></section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $cutHtmlTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $cutHtmlTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $cutHtmlTtl?>" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">「素材のうまみ」と「料理の楽しみ」を引き出す、台所の名パートナー</h4>
          <p class="lottery-point__ex u-font__palt">素材にもともと含まれている水分や油分を活かし、素材の美味しさを引き出すKING無水鍋&reg;。水を使わないので、食材から栄養分が流出するのを防ぐことができます。無水鍋&reg;で調理した野菜に残るビタミンCは、通常の鍋で調理をした場合と比べ、約2倍！油や調味料が少なくても美味しく仕上がるので、ヘルシーな食卓を叶えます。無水鍋&reg;は、1鍋で8通りの調理法に対応。煮物や炒め物はもちろん、お米もふっくらと美味しく炊き上げます。なんと、パンやケーキもふわふわに作ることができますよ♪多彩な料理ができる無水鍋&reg;は、料理の楽しみを拡げてくれます。</p>
          <h4 class="lottery-point__ttl">アルミニウム鋳物だからこそ実現できる、扱いやすさとスピーディーな調理</h4>
          <p class="lottery-point__ex u-font__palt">KINGシリーズは、1953年に広島で製造された鍋の復刻版モデル。半世紀以上愛される機能的なデザインで、グッドデザイン賞を獲得しています。アルミニウム製の無水鍋&reg;は軽さと熱伝導率に優れ、鉄製の鍋と比較すると1/3の軽さで3倍高い熱伝導率を持っています。綿密に計算された蓋と本体の嚙み合わせ部分には、ウォーターシール(水の膜)が発生。このウォーターシールが鍋を密封することで、鍋内部の圧力を上昇させ、均一な火通りと時短調理を可能にします。保温力も高く、火を止めた後も高温が続くため、ガス代や電気代の節約にもなりますよ！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">「食欲の秋」にぴったりな賞品です。旬の食材を、無水鍋&reg;でより美味しくいただきませんか？余分な水も油も使わない無水調理で、素材本来の豊かな香りや味わいを楽しめるはず！旬の食材の栄養分も逃がさず、より健康的な食卓に。家族で鍋料理を楽しむのもよし、新米を炊くのもよし、毎日の食卓がより彩りのあるものになります。ぜひ無水鍋とともに、充実した「食欲の秋」をお過ごしください♪たくさんのご応募お待ちしています！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>品名</dt><dd>KING無水鍋&reg;24</dd></dl>
            <dl><dt>材質</dt><dd>本体：アルミニウム合金製、内面：ヘアライン仕上げ、外面：鏡面仕上げ、本体外底面：特殊磁性膜加工+耐熱塗装 ※蓋は直火のみ対応</dd></dl>
            <dl><dt>セット内容</dt><dd>本体、蓋、無水鍋&reg;の栞</dd></dl>
            <dl><dt>サイズ</dt><dd>内径24cm、最大長さ31.6cm(取っ手を含んだ長さ)、深さ 本体：9.4cm 、蓋：4.1cm</dd></dl>
            <dl><dt>重量</dt><dd>本体：1340g 蓋：900g</dd></dl>
            <dl><dt>満水容量</dt><dd>本体：4.0L  蓋：1.9L</dd></dl>
            <dl><dt>最大炊飯量</dt><dd>6.5合</dd></dl>
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
