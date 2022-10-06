<?php
//base
include ("../../function.php");
$content = get_id_data('9076');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '10月の抽選賞品<br>【長谷工あんしんデリ】たなかみ米 3.6kg<br>抽選で20名さまに当たる！';

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
    $smile_month = '10';
    $smile_next ="2022年11月1日（火）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "243";//テストFLP用リンクナンバー
    $smile_id_production = "243";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">琵琶湖の南、いにしえからの米どころで育った「まぼろしのお米」</h4>
          <p class="lottery-point__ex">「たなかみ米」は、滋賀県田上（たなかみ）地域で育てられたコシヒカリです。1,300年前に天智天皇の命を受けて開墾された田上は、盆地特有の寒暖差のある気候、山あいから流れ込む大戸川の清流、そして花こう岩系の土という好条件を備えた米どころ。土地の恵みを受け、栄養とうまみをたっぷり蓄えて育ったお米は、その確かな味わいと少量しか出回らない希少性から「まぼろしのお米」と呼ばれたそうです。</p>
          <h4 class="lottery-point__ttl">土づくりから配送までこだわり、100%田上産の美味しさをお届け！</h4>
          <p class="lottery-point__ex">「正真正銘、100%田上産」の美味しさを届けるため、長谷工あんしんデリでは開発から発送までの全行程を自社で行なっています。また、環境への取り組みも長谷工あんしんデリの大切なこだわり。化学肥料の使用を通常の半分以下に抑える、代かき期には田んぼから泥水が流れ出ないようにするなど、環境に配慮した栽培方法によって育てたたなかみ米は、農林水産省のガイドラインに準拠した特別栽培米です。また、滋賀県からも、人にも環境にもやさしい「環境こだわり農産物」として認証を受けています。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex u-font__palt">毎年ご好評のたなかみ米が今年も登場！たなかみ米の口いっぱいに広がる甘みを、新米で味わっていただけるチャンスです♪鮮度をキープする真空パック＆2合ずつの食べきりサイズで、美味しさをそのままお届けします。また、ブランシエラクラブでは美味しい新米の炊き方もご紹介中。炊き方のコツを押さえると、新米ならではのみずみずしさと豊かな香りがさらに引き立ちますよ♪たくさんのご応募お待ちしております！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>サイズ</dt><dd>12個入り（真空パック仕様）</dd></dl>
            <dl><dt>重量</dt><dd>3.6kg<br>※1個 300g（約2合）</dd></dl>
            <dl><dt>その他</dt><dd>化粧箱に入れてお届けします。<br>化粧箱　概略寸法　W160mm×H230mm×D140mm<br>化粧箱を含めた重量　約4kg</dd></dl>
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