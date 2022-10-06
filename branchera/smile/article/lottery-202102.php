<?php
//base
include ("../../function.php");
$content = get_id_data('9056');
$pageTtl = $content['title'];
$footerTtl = '2月の抽選賞品<br>【カドー】空気清浄機 LEAF 120（ホワイト）<br>抽選で3名さまに当たる！';

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
    $smile_month = '02';
    $smile_next ="2021年3月1日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "194";//テストFLP用リンクナンバー
    $smile_id_production = "194";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">最大15畳対応！きれいな空気を保つコンパクトな空気清浄機</h4>
          <p class="lottery-point__ex u-font__palt">空気中に混ざっている、花粉やハウスダスト、カビやウイルスなどの有害物質。本賞品はこれらを除去し、きれいな空気を保ってくれる空気清浄機です。高性能フィルターにより、約0.09μm（マイクロメートル）以上の有害物質を捕獲するので、PM2.5などの非常に小さな粒子もしっかり除去できます。<br>そして本賞品の特徴は、なんといってもコンパクトさ。直径240×高さ315mmのミニサイズなので、デスクの上やベッドサイド、棚などに置いて使うことができます。できるだけ床に物を置きたくないという方にもぴったりです♪</p>
          <h4 class="lottery-point__ttl">目に見えない空気のコンディションをLEDで可視化！</h4>
          <p class="lottery-point__ex u-font__palt">本賞品は空気の汚れを自動感知し、汚れのレベルに合わせてLEDライトが点灯。LEDライトの色で「今どのくらい空気が汚れているのか」を判断し、風量を調整できます。周囲の明るさに合わせてLEDの照度が落ちるので、就寝時も安心です。1時間、4時間、8時間のタイマー設定もできますよ。<br>パワフルな空気清浄力と実用性を兼ね備えたLEAF 120。ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">気になるウイルスはもちろん、これからの季節悩まされる方も多い花粉の除去もできる本賞品。タバコの臭い除去にも効果的です。そしてシンプルな構造なので、掃除機でほこりを吸い取りやすく、お手入れが楽なのもおすすめポイント！セルフクリーニング機能により、フィルターの吸着力も長持ちします。<br>快適で健康的な暮らしのサポートに、ぜひ本賞品をお役立てください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>適用床面積</dt><dd>～25m²（15畳）※1</dd></dl>  
            <dl><dt>最大機器風量</dt><dd>180m³/h ※2</dd></dl>
            <dl><dt>質量</dt><dd>4.4kg（フィルター含む）</dd></dl>  
            <dl><dt>センサー</dt><dd>ニオイセンサー／照度センサー</dd></dl>
            <dl><dt>本体色</dt><dd>ホワイト</dd></dl>
            <dl><dt>電源</dt><dd>100-240V　50-60Hz</dd></dl>
            <dl><dt>定格消費電力</dt><dd>最小：0.2A（弱）／最大：1.5A（急速）</dd></dl>
            <dl><dt>運転音</dt><dd>最小：26ｄBA（弱）／最大：59ｄBA（急速）</dd></dl>
            <dl><dt>空気の供給方向</dt><dd>下部全周</dd></dl>
            <dl><dt>空気の吸い込み方向</dt><dd>上面</dd></dl>
            <dl><dt>本体寸法（突起部含む）</dt><dd>直径240×高さ315mm</dd></dl>
            <dl><dt>交換用フィルター</dt><dd>FL-C120：脱臭・集じん・除菌フィルター</dd></dl>
            <div class="mt3 u-font__mid">
							<p>※本製品は、空気中のすべてのウイルス/有害物質を除去するものではありません。<br>※仕様および外観は改良のため予告なく変更することがあります。 高い集じん・脱臭・分解性能を持続させるため、フィルター交換サインが点灯したらフィルターを交換してください。交換の目安は約1年です。 <br>※1 日本電機工業会規格JEM1467に基づく試験方法により算出。急速運転した時の目安。<br>※2 急速モードで運転した場合。</p>
						</div>
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
