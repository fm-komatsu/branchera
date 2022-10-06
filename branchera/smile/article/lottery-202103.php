<?php
//base
include ("../../function.php");
$content = get_id_data('9057');
$pageTtl = $content['title'];
$footerTtl = '3月の抽選賞品<br>【ドクターエア】ストレッチロール S（レッド）<br>抽選で5名さまに当たる！';

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
    $smile_month = '03';
    $smile_next ="2021年4月1日（木）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "195";//テストFLP用リンクナンバー
    $smile_id_production = "195";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">4段階の振動レベルが、時短ストレッチをサポート</h4>
          <p class="lottery-point__ex u-font__palt">ストレッチロールは、自重ストレッチをサポートしてくれる便利アイテム。これを使えば、筋肉や骨を覆う筋膜をほぐす話題のストレッチ方法、「筋膜リリース」を自宅でも簡単に行なうことができます！<br>本賞品の最大のポイントは、従来のストレッチロールとは異なり、4段階の振動機能が付いていること。5分間に最大2万回も振動するので、筋肉を効率よく刺激してくれます。小さな筋肉や骨にあたる部位は弱めの振動で、大きな筋肉には強めの振動にするなど、自由に調整できますよ。</p>
          <h4 class="lottery-point__ttl">1つのストレッチロールで、筋肉の部位に合う最適な凹凸が選べる</h4>
          <p class="lottery-point__ex u-font__palt">本賞品は、1つのストレッチロールに4種の凹凸が備わっています。細かい凹凸でツボを強めに刺激したり、手の平のようなフラットな形状で程よい刺激を与えたりと、筋肉の部位やコリの程度に合ったセルフマッサージが可能です。また、本体重量はたったの870g！コンパクトかつ軽量なので、持ち運びにも困りません。どんな場所でも気軽に使えて、ストレッチをサポートしてくれる本賞品。ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">おうちで過ごす時間が長くなり、ストレッチや筋トレ、ヨガなど「室内で運動をするようになった」という方は多いのではないでしょうか？運動量が減って、「せめてストレッチだけでも自宅でやりたい…！」と思っている方もいらっしゃいますよね。本賞品は、超微振動が筋肉を刺激し、日々のストレッチをサポートしてくれるうえ、操作も簡単♪電源を入れて、振動レベルを選ぶだけ。気軽に使えるのがうれしいポイントです。おうち時間を活用して、より健康的で、しなやかな身体を目指しましょう！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>販売名</dt><dd>ストレッチロール S　SR-002 RD</dd></dl>
            <dl><dt>JANコード</dt><dd>4580235555262</dd></dl>
            <dl><dt>電源</dt><dd>充電式リチウムイオン電池内蔵 7.4V 2,200ｍAh</dd></dl>
            <dl><dt>定格使用時間</dt><dd>約10分</dd></dl>
            <dl><dt>タイマー</dt><dd>約15分</dd></dl>
            <dl><dt>振動回数</dt><dd>レベル1：約2,100回/分 レベル2：約3,000回/分 レベル3：約3,500回/分 レベル4：約4,000回/分</dd></dl>
            <dl><dt>寸法</dt><dd>直径150 × 高さ320mm</dd></dl>
            <dl><dt>質量</dt><dd>870g</dd></dl>
            <dl><dt>原材料</dt><dd>発泡ポリプロピレン</dd></dl>
            <dl><dt>付属品</dt><dd>充電用ACアダプタ、取扱説明書（保証書付き）</dd></dl>
            <dl><dt>耐荷重量</dt><dd>150kg</dd></dl>
            <dl><dt>充電時間※</dt><dd>約3.5時間</dd></dl>
            <dl><dt>電池持続時間※</dt><dd>最大約180分（レベル1の場合）最短約50分（レベル4の場合）</dd></dl>
            <dl><dt>充電可能回数※</dt><dd>約350回</dd></dl>
            <dl><dt>使用環境温湿度</dt><dd> +10〜40℃</dd></dl>
            <div class="mt3 u-font__mid">
							<p>※実際の時間および回数は、使用状況・使用環境により異なります。<br>本製品は医療機器ではありません。</p>
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
