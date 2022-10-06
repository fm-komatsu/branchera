<?php
//base
include ("../../function.php");
$content = get_id_data('9045');
$pageTtl = $content['title'];
$footerTtl = '3月の抽選賞品<br>【ロゴス】インフレートざぶとん<br>抽選で30名さまに当たります！';

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $pageTtl.'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '20';
    $smile_month = '03';
    $smile_next ="2020年4月1日（水）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "160";//テストFLP用リンクナンバー
    $smile_id_production = "160";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
    <section class="lottery-banner">
      <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?>
    </section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png"
             alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png"
             alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png"
             alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">ポンプがいらない！バルブをひねると空気の自動注入開始</h4>
          <p class="lottery-point__ex">野外イベントや旅行の際に、「今ざぶとんがあればなぁ…」と思った経験はありませんか？地面に直接座りたくないとき、長距離の移動で腰がつらいとき…何かと役立つざぶとんですが、厚みがありかさばるため、特に遠出に持って行くのは大変ですよね。その大変さを解消したのが、今回ご紹介する「インフレートざぶとん」です！<br>本商品は<strong>空気の出し入れが可能</strong>で、<strong>小さくたたんで持ち運びができる</strong>、外出時に大活躍のアイテム。しかも、息を入れたりポンプを使うことなく、<strong>“自動で”膨らませることができる</strong>んです！</p>
          <h4 class="lottery-point__ttl">お花見、ハイキング、テーマパーク…さまざまな場でお役立ち♪</h4>
          <p class="lottery-point__ex">膨らませる際の操作はワンタッチでOK。本体の角にあるバルブ（弁）を開いて、置いておくだけ！数分経つと、ふっくら快適なざぶとんに変身します♪便利な収納袋が付いているので、使った後の収納も簡単です。<br><strong>お花見やハイキング、テーマパークでのショー鑑賞</strong>など、野外で行なうイベントが増えるこれからの季節に大活躍すること間違いなし！<strong>飛行機やバスでの長距離移動</strong>にもぴったりです♪春のお出かけに、ぜひインフレートざぶとんをご活用くださいね！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">野外や旅行先で役立つインフレートざぶとん。4月中旬のお届けなので、お出かけが増えるゴールデンウィークにも間に合います♪レジャーはもちろん、ご自宅のテラスや、お子さまの運動会など、使用シーンはさまざま。2枚1セットでお届けするので、ご家族やお友達との使用にもバッチリです。口を付ける必要がないので、衛生的なのもうれしいポイント！<br>ぜひ、この機会にご応募ください♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">
            <dl>
              <dt>総重量</dt>
              <dd>（約）135g</dd>
            </dl>
            <dl>
              <dt>サイズ</dt>
              <dd>（約）幅38×奥行28×高さ2.5cm</dd>
            </dl>
            <dl>
              <dt>収納サイズ</dt>
              <dd>（約）直径5.5×高さ30cm</dd>
            </dl>
            <dl>
              <dt>主素材</dt>
              <dd>ポリエステル、ポリウレタンフォーム</dd>
            </dl>
            <p class="pl1">●バルブをひねると空気自動注入開始<br>●収納袋付</p>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。
        </small>
      </div>
      <div class="mb4 mb2_sp u-font__palt">
        <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
        <?php if (!$ssoFlag == 1){ ?>
        <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
          class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small>
        <?php }; ?>
      </div>
      <div class="mt2">
        <P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
      </div>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>
    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
