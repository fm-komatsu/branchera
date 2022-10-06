<?php
//base
include ("../../function.php");
$content = get_id_data('9074');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '8月の抽選賞品<br>【象印】STAN. 自動調理なべ<br>抽選で3名さまに当たる！';

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
    $smile_month = '08';
    $smile_next ="2022年9月1日（木）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "239";//テストFLP用リンクナンバー
    $smile_id_production = "239";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">材料をセットするだけ！ほったらかしOKの自動調理なべ</h4>
          <p class="lottery-point__ex">「STAN.自動調理なべ」は、材料を入れてセットするだけで、カレーやシチューなどの時間がかかる料理を簡単においしく作れます！火加減の調節や途中で材料を入れる必要もなく、ほったらかしのおまかせ自動調理が可能です。さらに、予約調理や保温機能もついているのでお出かけしている間に調理ができちゃいますよ♪</p>
          <h4 class="lottery-point__ttl">同時に2品のパック調理が可能！</h4>
          <p class="lottery-point__ex">なべ料理以外にも、ジッパーつき食品保存袋を使ったパック料理も可能です。保存袋に食材と調味料を入れて、自動調理なべ専用のパックホルダーをセットするだけ！水をいれてスイッチオンで、簡単に調理ができます。主菜と副菜を同時に調理したり、副菜を2品同時に調理している間に主菜を作ることができるため、忙しい合間でも、食卓に並ぶ品数を増やすことができます！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex u-font__palt">高い技術力に定評のある象印が、クリエイティブユニット「TENT」とのコラボで創りだした「STAN.シリーズ」。まるで陶器を思わせるようなスタイリッシュで洗練されたデザインは、お部屋のインテリアを壊すことなく、お使いいただけます。コンパクトなデザインにも関わらず、なんと6人前まで調理できる大容量なところもポイント。レシピブックが付属されるのもうれしいですね。家族や友人と美味しくて楽しい食卓を囲んで、素敵なおうち時間を過ごしましょう！たくさんのご応募お待ちしております♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>型名</dt><dd>EL-KA23</dd></dl>
            <dl><dt>カラー</dt><dd>ブラック</dd></dl>
            <dl><dt>消費電力</dt><dd>900W</dd></dl>
            <dl><dt>最大調理容量</dt><dd>2.3L</dd></dl>
            <dl><dt>外形寸法</dt><dd>(約)幅28.5cm×奥行31cm×高さ22.5cm（※ふた開き時の高さ46.5cm）</dd></dl>
            <dl><dt>本体重量</dt><dd>(約)7.0kg</dd></dl>
            <dl><dt>電源コード</dt><dd>(約)1.4m</dd></dl>
            <dl><dt>付属品</dt><dd>なべ用フタ、パックホルダー、パックホルダーカバー、炊飯用軽量カップ、レシピブック</dd></dl>
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