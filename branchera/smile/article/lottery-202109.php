<?php
//base
include ("../../function.php");
$content = get_id_data('9063');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '9月の抽選賞品<br>【長谷工あんしんデリ】たなかみ米 3.6kg<br>抽選で20名さまに当たる！';

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
    $smile_month = '09';
    $smile_next ="2021年10月1日（金）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "209";//テストFLP用リンクナンバー
    $smile_id_production = "209";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">「まぼろしのお米」たなかみ米。美味しさの理由は、水と土にあり。</h4>
          <p class="lottery-point__ex u-font__palt">たなかみ米は、1,300年前天智天皇の命を受け開墾された滋賀県田上地域で作られています。琵琶湖の南に位置し、美味しい米作りに最適な気候に恵まれた田上地域で作られるお米は、その希少性と確かなあじわいから「まぼろしのお米」と呼ばれています。たなかみ米の美味しさを作る源は、信楽の山より流れ着く大戸川の水と、かこう岩系の土、盆地特有の寒暖差のある気候！山あいを流れる清流が、夏場でも水温の低い水田を可能にします。日差しをたっぷりと浴び、夜の涼しい空気に触れて育った稲は、お米一粒一粒にうまみと栄養が詰まっています。</p>
          <h4 class="lottery-point__ttl">土づくりからのこだわり。正真正銘、100%田上産の美味しさをお届け</h4>
          <p class="lottery-point__ex u-font__palt">たなかみ米は、もっちりとした粘り気と強いうまみが特徴のコシヒカリ。社長自らが毎日田んぼに立ち、水と土をチェックして育てたこだわりのお米です。開発から発送までの全行程を長谷工あんしんデリで行い、100%田上産の美味しさをお届けします。化学肥料の使用を通常の半分以下に抑え、泥水が流れにくい栽培方法によって育てたたなかみ米は、農林水産省のガイドラインに準拠した特別栽培米です。人にも環境にもやさしい「環境こだわり農産物」として滋賀県から認証を受けています！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">毎年好評のたなかみ米！今年度も美味しい新米を、鮮度抜群な状態で食べられる真空パックでお届け♪2合ずつの食べきりサイズなので、毎回新鮮なお米をいただけますよ。口いっぱいに広がる甘みが特徴のたなかみ米を、ぜひ新米でお楽しみください！ブランシエラクラブでは美味しい新米の炊き方もご紹介中。やわらかく香りも抜群な新米を、炊き方にこだわってさらに美味しく召し上がってください♪たくさんのご応募お待ちしております！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>サイズ</dt><dd>12個入り（真空パック仕様）</dd></dl>
            <dl><dt>重量</dt><dd>3.6kg<br>※1個 300g（約2合）</dd></dl>
            <dl><dt>その他</dt><dd>化粧箱に入れてお届けします。<br>化粧箱 概略寸法 W160mm×H230mm×D140mm<br>化粧箱を含めた重量 約4kg</dd></dl>
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
