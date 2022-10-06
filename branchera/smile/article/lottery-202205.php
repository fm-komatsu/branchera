<?php
//base
include ("../../function.php");
$content = get_id_data('9071');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '5月の抽選賞品<br>【BRUNO】マルチふとんドライヤー（アイボリー）<br>抽選で8名さまに当たる！';

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
    $smile_month = '05';
    $smile_next ="2022年6月1日（水）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "234";//テストFLP用リンクナンバー
    $smile_id_production = "234";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">コンパクトサイズで操作は簡単！手軽な布団乾燥機</h4>
          <p class="lottery-point__ex">ノズルを伸ばして布団をかぶせ、ダイヤルをONするだけ。【BRUNO】マルチふとんドライヤーは、簡単な操作ですぐ使える布団乾燥機です。季節に応じて選べる2種類の仕上がりモードで、夏はからっと、冬はほかほかに。本体サイズはコンパクトなので、使うときもしまうときも省スペース。縦置きでの収納も可能です。</p>
          <h4 class="lottery-point__ttl">梅雨どきの室内干し、冬の暖房代わりにも！一年中マルチに使える</h4>
          <p class="lottery-point__ex u-font__palt">【BRUNO】マルチふとんドライヤーは、布団乾燥以外にもさまざまなシーンで使えます。梅雨や花粉シーズンの室内干し、濡れた靴の乾燥（専用アタッチメント付き）、収納の湿気取り、パーソナルスペースのヒーター代わりにも！ナチュラルなデザインなので、一年中出しっぱなしにしていてもインテリアになじんでくれます。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex u-font__palt">賞品をお届けする6月中旬は、曇りや雨の日が多くなる梅雨どき。そんなシーズンにおすすめしたいのが【BRUNO】マルチふとんドライヤーです。湿気やダニが気になる布団の乾燥はもちろん、室内干しの洗濯物に温風を当てたり、専用アタッチメントで濡れた靴を乾かしたりなど、1台でマルチに活躍してくれます。ハンドル付きで1.4kgと軽量なので、家の中での持ち運びもラクラク！梅雨どき以外も、一年中便利にお使いいただけますよ♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>型番</dt><dd>BOE047-IV</dd></dl>
            <dl><dt>本体サイズ</dt><dd>横幅360mm×高さ225mm×奥行115mm（コード長：約2m）</dd></dl>
            <dl><dt>重量</dt><dd>1,400g</dd></dl>
            <dl><dt>材質</dt><dd>ポリプロピレン/ABS樹脂</dd></dl>
            <dl><dt>生産国</dt><dd>中国</dd></dl>
            <dl><dt>機能</dt><dd>・定格消費電力：500W、安全装置（温度過昇防止用サーモスタット、温度ヒューズ）、吹き出し口付近の温風温度：最高約75℃<br>・ふとん乾燥：60分(冬)/120分(夏)、ダニ対策：120分、衣類乾燥：90分、くつ乾燥：30分</dd></dl>
            <dl><dt>電源</dt><dd>AC100V</dd></dl>
            <dl><dt>付属品</dt><dd>くつ乾燥アタッチメント</dd></dl>
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