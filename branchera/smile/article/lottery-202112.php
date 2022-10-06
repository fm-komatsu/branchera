<?php
//base
include ("../../function.php");
$content = get_id_data('9066');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '12月の抽選賞品<br>【サボネリー】3点セット シャワージェル / バスソルト / ベジタブルソープ<br>抽選で20名さまに当たる！';

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
    $smile_month = '12';
    $smile_next ="2022年1月6日（木）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "220";//テストFLP用リンクナンバー
    $smile_id_production = "220";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">伝統的な製法にこだわり環境問題にも取り組む、仏・サボネリー社の製品</h4>
          <p class="lottery-point__ex">サボネリー社は、南仏プロヴァンスのコート・ダジュールに位置する花いっぱいの村、ボルム・レ・ミモザに自社工場を構えるブランドです。サボネリー社のこだわりは、パラベンフリーの伝統的な製法による丁寧な製品づくり。また、環境問題にも積極的に取り組み、パッケージのリサイクル化に力を注いでいます。プロヴァンスの雄大な自然を感じさせる、ナチュラルな香りのバスアイテムは、心身の疲れを癒したいリラックスタイムにぴったり♪大人から子どもまで、幅広い世代の方々にお楽しみいただけます。</p>
          <h4 class="lottery-point__ttl">毎日のバスタイムが楽しみになる、癒しの香りのアイテム3点セット</h4>
          <p class="lottery-point__ex u-font__palt">今回ご用意したのは、エッセンシャルオイルの豊かな香り立ちを楽しめる、シャワージェル（液体石けん）、バスソルト、ベジタブルソープ（固形石けん）の3点セット。シャワージェルは、植物性の素材をベースに作られており全身に使えます。バスソルトは、600gの大容量でたっぷり使えるお得なサイズ。発汗・血行を促し、リラックス効果を高めてくれます。ベジタブルソープは、肌にやさしくしっとりとした洗い上がりです。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">寒い季節は、お風呂でゆっくり温まるのが何よりの楽しみですよね。そこでお風呂のおともにおすすめしたいのが、仏・サボネリー社のバスアイテム。自社工場がある南仏プロヴァンスの「ボルム・レ・ミモザ」という地名は、ミモザの花をはじめ、一年中さまざまな花が咲き乱れることに由来しています。ナチュラルな香りと、やさしい洗い上がりは、家族のバスタイムにぴったり♪いい香りに包まれて、つい長湯したくなってしまうかも？心も体も温まる、癒しのひとときを、ぜひお楽しみください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>商品</dt><dd>シャワージェル </dd></dl>
            <dl><dt>容量</dt><dd>500ml</dd></dl>
            <dl class="mb2"><dt>原産国</dt><dd>フランス</dd></dl>
            <dl><dt>商品</dt><dd>バスソルト</dd></dl>
            <dl><dt>容量</dt><dd>600g</dd></dl>
            <dl class="mb2"><dt>原産国</dt><dd>フランス</dd></dl>
            <dl><dt>商品</dt><dd>ベジタブルソープ</dd></dl>
            <dl><dt>容量</dt><dd>100g</dd></dl>
            <dl class="mb2"><dt>原産国</dt><dd>フランス</dd></dl>
            <dl class="mb2"><dt>香り</dt><dd>３点すべてラベンダー</dd></dl>
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