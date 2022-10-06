<?php
//base
include ("../../function.php");
$content = get_id_data('9059');
$pageTtl = $content['title'];
$footerTtl = '5月の抽選賞品<br>【シフラス】リトル ティピー GF-SF09<br>抽選で7名さまに当たる！';

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
    $smile_month = '05';
    $smile_next ="2021年6月1日（火）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "203";//テストFLP用リンクナンバー
    $smile_id_production = "203";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">お子さまの秘密基地に！お部屋に置ける小さなテント</h4>
          <p class="lottery-point__ex u-font__palt">暮らしを彩る商品を販売する「Life on Products」が展開するブランド・シフラス。今回のプレゼント「リトルティピー」は、お子さま用の小さなテントです。幅90cm、高さ170cmとコンパクトなサイズながらも、鳴らして遊べるベルや、道具を入れられるポケットが付いていて、遊び心満載！工具を使わず簡単に組み立てできるので、遊びたいときにすぐテントを広げることができます。普段生活するお部屋の一角が、秘密基地に早変わり♪お届け時期の6月中旬は梅雨の季節ですが、リトルティピーがあれば、外に出なくても冒険気分が味わえますよ！</p>
          <h4 class="lottery-point__ttl">インテリアにも馴染みやすいナチュラル&amp;おしゃれなデザイン</h4>
          <p class="lottery-point__ex u-font__palt">アイボリーの生地と木製のポールで、ナチュラルな雰囲気のリトルティピー。お部屋のインテリアと調和しやすい、シンプルでおしゃれなデザインです。専用のカーペット生地が付いているので、より一層統一された空間をお楽しみいただけます。生地とポールは、まとめて付属の収納バッグに収納することができるので、持ち運びにも便利。お部屋だけでなく、ベランダや公園など、さまざまな場所で遊ぶことができますよ！お子さまへのプレゼントにいかがですか？</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">幼少期に一度は憧れる秘密基地。簡単に組み立てできるテントなら、お手軽かつ安全に楽しむことができます♪さらに、リトル ティピーならではのポイントが、生地に2つ窓が付いていること。テントの中と外を遮断することなく、お子さまの様子を見守ることができるので、おうちの方も安心な本賞品。ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>品番</dt><dd>GF-SF09</dd></dl>
            <dl><dt>品名</dt><dd>リトル ティピー</dd></dl>
            <dl><dt>材質</dt><dd>ティピー用生地・カーペット用生地・収納バッグ・調整用生地：綿65%・ポリエステル35%、<br>ポールA：木材、ポールB：木材・PVC、ベル：スチール、<br>ネームカード：紙、固定ひも：ラテックス、固定バンド：ヤシ・ラテックス</dd></dl>
            <dl><dt>セット内容</dt><dd>ティピー用生地、カーペット用生地、ポールA×5、ポールB×5、<br>ベル、ネームカード、固定ひも、固定バンド、収納バッグ、調整用生地</dd></dl>
            <dl><dt>JAN</dt><dd>4944370019469</dd></dl>
            <dl><dt>S/CODE</dt><dd>A-14800-1</dd></dl>
            <dl><dt>サイズ</dt><dd>縦900×横900×高さ1700mm</dd></dl>
            <dl><dt>重量</dt><dd>3500g</dd></dl>
            <dl><dt>収納時サイズ / 重量（約）</dt><dd>1030×200×100mm/3650g</dd></dl>
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