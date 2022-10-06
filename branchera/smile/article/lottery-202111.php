<?php
//base
include("../../function.php");
$content = get_id_data('9065');
$pageTtl = $content['title'];
$cutHtmlTtl = strip_tags($pageTtl);
$footerTtl = '11月の抽選賞品<br>【パナソニック】ホームベーカリー ビストロ SD-MDX4<br>抽選で2名さまに当たる！';

//meta
$metaTtl = $cutHtmlTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $cutHtmlTtl . 'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は' . $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article lottery";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row"> <?php
                              $panAry[] = array("/smile/", "住まいレージ");
                              include($inc_path . "/lib/inc/pan.php");
                              ?>
    <?php
    $smile_flug = "lottery"; // exchange or lottery or service or no_flp
    $smile_year = '21';
    $smile_month = '11';
    $smile_next = "2021年12月1日（水）"; // 次回抽選賞品の公開日
    $smile_num = "100"; //必要スマイル数
    $smile_id_test = "216"; //テストFLP用リンクナンバー
    $smile_id_production = "216"; //本番FLP用リンクナンバー
    include($inc_path . "/lib/inc/page/_smile/smile-header.php");
    ?>
    <section class="lottery-banner"> <?php include($inc_path . "/lib/inc/page/_smile/__lottery-main-v.php"); ?></section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>_image01@2x.png" alt="<?php echo $cutHtmlTtl ?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>_image02@2x.png" alt="<?php echo $cutHtmlTtl ?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/lottery-<?php echo $smile_year ?><?php echo $smile_month ?>_image03@2x.png" alt="<?php echo $cutHtmlTtl ?>" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">オリジナルパンやピザなどが簡単に作れる！43種のオートメニュー！</h4>
          <p class="lottery-point__ex">食パンから低糖質パン、バターロール、菓子パンまで、ふっくら美味しく作れるホームベーカリーです。マーブルパンや具入りパン、サンドイッチ用食パンなど、お好みのパンを簡単操作で作れます。米粉パンや米粉ケーキといったグルテンフリーのアレンジレシピも豊富！「お好みのパンをつくる100レシピ」付きなので、毎日飽きずにさまざまなバリエーションの自家製パンを楽しめます。さらに、ピザ・パスタ生地、甘酒なども作れる43種ものオートメニューを搭載！おもち、ミルクジャム、生チョコなど手作りするのに手間がかかるメニューも、このホームベーカリー1つで簡単にできますよ♪<br><small class="u-small mt1">※マーブルパンやアレンジパンは途中で作業を行います。</small></p>
          <h4 class="lottery-point__ttl">プロの技法を取り入れた独自機能で、ふっくら焼き上げる！</h4>
          <p class="lottery-point__ex u-font__palt">パンの美味しさは、ねりと温度管理で決まります。「ホームベーカリー ビストロ」には、パナソニック独自の「3D匠ねり」と「Ｗセンシング発酵」を搭載。「3D匠ねり」で立体的にこねてグルテンをしっかり生成した生地は「3D匠ねり」がないものと比較して、約17%も生地の伸びがアップ！また、「室温センサー」と「庫内温度センサー」の2つを使った「Ｗセンシング発酵」で、最適なタイミングでイーストを自動投入。プロも認める2つの機能で、1年中弾力のあるパンを作ることを可能にしています。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">ホームベーカリー ビストロの魅力は、充実したメニュー！なかでもおすすめは「パン・ド・ミ」機能。しっとりとしたきめ細かい「生」食パンを焼き上げるこだわりのプログラムです。『高級「生」食パン専門店 乃が美』監修の専用レシピも公開中！「乃が美」のようなしっとり美味しいパンをおうちで手作りできますよ♪賞品は12月中旬頃にお届け！ピザやシュトーレン、ケーキなど、クリスマスや年末のホームパーティーにぴったりなメニューも簡単に作れるので、これから大活躍間違いなしのアイテムです♪ぜひご応募ください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl>
              <dt>商品</dt>
              <dd>ホームベーカリー ビストロ </dd>
            </dl>
            <dl>
              <dt>品番</dt>
              <dd>SD-MDX4</dd>
            </dl>
            <dl>
              <dt>タイプ</dt>
              <dd>1斤タイプ</dd>
            </dl>
            <dl>
              <dt>電源</dt>
              <dd>100V・50Hz/60Hz(消費電力：約430W)</dd>
            </dl>
            <dl>
              <dt>サイズ(本体)</dt>
              <dd>幅約26.3×奥行35.6×高さ35.3cm</dd>
            </dl>
            <dl>
              <dt>コード長さ</dt>
              <dd>約1.0m</dd>
            </dl>
            <dl>
              <dt>質量</dt>
              <dd>約6.0kg</dd>
            </dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php if ($smile_month == 12) {
                                                                                                                                        echo ($smile_year  + 1);
                                                                                                                                      } else {
                                                                                                                                        echo ($smile_year);
                                                                                                                                      } ?>年<?php if ($smile_month == 12) {
                                                                                                                                                                                                                                  echo (1);
                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                  echo ($smile_month  + 1);
                                                                                                                                                                                                                                } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
      </div>
      <div class="mb4 mb2_sp u-font__palt"> <?php include($inc_path . "/lib/inc/page/_smile/smile-footer.php"); ?> <?php if (!$ssoFlag == 1) { ?> <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small> <?php }; ?> </div>
      <div class="mt2">
        <P>■<?php if ($smile_month == 12) {
              echo (1);
            } else {
              echo ($smile_month  + 1);
            } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
      </div>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3> <?php include($inc_path . "/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>
    <nav class="main__snav snav"> <?php include($inc_path . "/lib/inc/page/_smile/u-smile-snav.php") ?> </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>