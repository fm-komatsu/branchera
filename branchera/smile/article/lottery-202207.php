<?php
//base
include ("../../function.php");
$content = get_id_data('9073');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '7月の抽選賞品<br>【ボーネルンド】マグ・フォーマー クリエイティブセット（90ピース）日本語あそび方冊子付<br>抽選で5名さまに当たる！';

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
    $smile_month = '07';
    $smile_next ="2022年8月1日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "238";//テストFLP用リンクナンバー
    $smile_id_production = "238";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">【世界65ヵ国で話題】創造力を育む“つながるブロック”が登場！</h4>
          <p class="lottery-point__ex">世界65ヵ国で話題の“数学センス”を育むマグ・フォーマー。磁石（マグ）で形づくる（フォーム）という名の通り、磁石でつながるブロックです。磁力を利用した三角形や四角形というような基本の形遊びのほかに、扇形や台形もあることから、さまざまな形をつくれます。平面から立体に直観的に変わる過程を体感できるのもマグ・フォーマーの魅力！クリエイティブな力を育む手段として、マグ・フォーマーを算数の授業に利用している学校もあるなど、教育現場でも活用されています。</p>
          <h4 class="lottery-point__ttl">【なぜ話題に？】マグ・フォーマーが人気な3つの理由とは？</h4>
          <p class="lottery-point__ex">マグ・フォーマーが人気な理由は「瞬時につながる、こわせる」、「2次元と3次元の行き来が自在」、「全方向でつながる」の3つ！中で磁石が動き、簡単にカチッとくっつくので遊びやすいのが特徴です。お城やバイクなど複雑なモチーフやダイナミックな構造物をつくれるので、遊びの幅が広がります。また、各ピースは両面で色が異なる全8色となっているので、色の組み合わせを考えながら遊ぶことで、より一層楽しめますね♪遊びを通じて、小学校で習う「図形、角度」の概念を体感できます。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex u-font__palt">今回のプレゼントは、「【ボーネルンド】マグ・フォーマー クリエイティブセット」です。賞品が届く8月中旬は、お子さまの夏休み真っ只中の時期。3歳頃から楽しめるので、親子で一緒に大きなお城を作ってみたり、完成までの時間を競争してみたりしてはいかがでしょうか。お子さまと会話しながら楽しく、いろいろな図形を作ってみてくださいね♪たくさんのご応募お待ちしております！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>品番</dt><dd>MF703004J</dd></dl>
            <dl><dt>重量</dt><dd>2.1kg</dd></dl>
            <dl><dt>素材</dt><dd>ABS、磁石</dd></dl>
            <dl><dt>パッケージ</dt><dd>横58×縦33×奥行7cm</dd></dl>
            <dl><dt>対象年齢</dt><dd>3歳頃～</dd></dl>
            <dl><dt>メーカー国</dt><dd>韓国</dd></dl>
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