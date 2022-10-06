<?php
//base
include ("../../function.php");
$content = get_id_data('9061');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '7月の抽選賞品<br>【ブルーノ】マルチスティックブレンダー BOE034-IV<br>抽選で15名さまに当たる！';

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
    $smile_month = '07';
    $smile_next ="2021年8月2日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "206";//テストFLP用リンクナンバー
    $smile_id_production = "206";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">1台5役！料理のバリエーションが拡がるマルチブレンダー</h4>
          <p class="lottery-point__ex u-font__palt">混ぜる・つぶす・刻む・砕く・泡立てるといった料理の工程が、これ一台でできるマルチブレンダーです。付属のアタッチメントを取り替えるだけの簡単操作で、メイン～デザートまで、さまざまな調理に役立ちます。ブレンダー機能を使って、なめらかな口当たりのポタージュやピューレ、離乳食も作れます。チョッパー機能を使えば、野菜のみじん切りやミンチなど、時間のかかる下ごしらえも時短でラクラク完了！さらに、専門家監修のレシピをご紹介したリーフレットも付属♪普段のお料理にたくさん活用できるアイテムです！</p>
          <h4 class="lottery-point__ttl">スリムなデザイン&amp;後片付けも簡単だから、毎日使いやすい！</h4>
          <p class="lottery-point__ex u-font__palt">マルチスティックブレンダーは、スリムかつ軽量なデザイン！手の小さい方や女性の方でも、片手で調理ができます。お手入れもラクラク！付属の目盛りつきカップに洗剤を入れて、ブレンダーを動作させるだけで、汚れを簡単に落とすことができます。チョッパーの刃や細かい部分の汚れは、付属のクリーニングブラシでお掃除できますよ。ブレンダーはお鍋やボウルに直接入れて使用できるので、洗い物が減らせるのも嬉しいポイントです♪</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">賞品お届け時期の8月は夏真っ只中！マルチスティックブレンダーを使って、フローズンドリンク作りはいかがですか？氷もザクザク砕けるパワーを備えているので、おうちでもお店のようなフローズンドリンクが楽しめますよ♪夏のおうち時間がより充実するはず！マルチスティックブレンダーで料理のバリエーションが拡がれば、家族とも料理を通したコミュニケーションが増えるかもしれませんね♪たくさんのご応募お待ちしています！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>品番</dt><dd>BOE034-IV</dd></dl>
            <dl><dt>品名</dt><dd>マルチスティックブレンダー</dd></dl>
            <dl><dt>材質</dt><dd>本体：ポリプロピレン、ブレンダースティック：ポリプロピレン・ステンレス鋼、<br>ホイッパー：ABS 樹脂・ステンレス鋼、チョッパー：ABS 樹脂・ステンレス鋼（チタニウムコーティング）、ブレンダーカップ：AS 樹脂</dd></dl>
            <dl><dt>セット内容</dt><dd>ホイッパー、チョッパーボトル、ボトル用フタ、チョッパーボトル専用カッター、<br>ブレンダーカップ（500ml）、お手入れブラシ、専用レシピリーフ</dd></dl>
            <dl><dt>サイズ(本体)</dt><dd>横幅63×高さ365×奥行き68mm</dd></dl>
            <dl><dt>重量</dt><dd>570g</dd></dl>
            <dl><dt>コード長</dt><dd>約1.5m</dd></dl>
            <dl><dt>電源</dt><dd>AC100V（ブレンダー・チョッパー使用時 消費電力：200W）</dd></dl>
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
