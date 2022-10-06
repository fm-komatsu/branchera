<?php
//base
include ("../../function.php");
$content = get_id_data('9067');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '1月の抽選賞品<br>【デュクス】タワー型超音波式加湿器 Beam(ビーム) 通常モデル<br>抽選で5名さまに当たる！';

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
    $smile_month = '01';
    $smile_next ="2022年2月1日（火）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "222";//テストFLP用リンクナンバー
    $smile_id_production = "222";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">効率的な加湿で室内の空気を快適に保つ、タワー型超音波式加湿器</h4>
          <p class="lottery-point__ex">Beam(ビーム)は、オランダのエアトリートメント製品メーカー・duux(デュクス社)が開発した、超音波式加湿器です。その特長は、タワー型のフォルム。高い位置から加湿することで、室内上部に集まった温かい空気に水分を溶け込みやすくし、効率よく快適な湿度を保ちます。また、中のタンクには本体上部から直接水を注げるので、給水もラクラク。タンクを取り外したり持ち運んだりする手間なく、1度の給水で最大約33時間の連続運転が可能です。</p>
          <h4 class="lottery-point__ttl">加湿フィルターがいらない超音波式だから、お手入れが簡単！</h4>
          <p class="lottery-point__ex u-font__palt">Beamの加湿方式は、超音波式。タンク内の水に超音波の振動を与えることで微細な霧を作り出す仕組みなので、加湿フィルターがいらず、お掃除や交換の手間がかかりません。また、ヒーターやファンを使うタイプの加湿器より省電力なので、コスト的にもお得。加湿器を毎日使いたい冬場も安心です。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">空気の乾燥が気になる冬場。湿度が下がるとお肌やのどの不快感につながるだけでなく、ウイルスも増殖しやすくなるといわれています。おうちで過ごす時間が長いシーズンだからこそ、お部屋の空気にはしっかり気を配りたいものですね。そこでおすすめなのが、タワー型超音波式加湿器 Beamです。温かい空気が集まる上部へ水分を届けやすいタワー型のフォルムは、効率よく快適な湿度を保てるうえに見た目もおしゃれ！洗練されたシンプルなデザインなので、お住まいのインテリアにしっくりなじんでくれますよ♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>カラー</dt><dd>ブラック</dd></dl>
            <dl><dt>型番</dt><dd>DXHU04</dd></dl>
            <dl><dt>本体サイズ(mm)</dt><dd>(約)幅220×奥行220×高さ675</dd></dl>
            <dl><dt>本体重量</dt><dd>(約)2.0kg</dd></dl>
            <dl><dt>水タンク容量</dt><dd>5L</dd></dl>
            <dl><dt>連続運転時間</dt><dd>(約)14〜33時間</dd></dl>
            <dl><dt>付属品</dt><dd>リモコン、アロマケース（アロマパット付）、ゴミ取りフィルター、テスト用単4形乾電池×2本、お手入れブラシ、取扱説明書（保証書付）</dd></dl>
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