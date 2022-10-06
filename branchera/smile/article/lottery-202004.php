<?php
//base
include ("../../function.php");
$content = get_id_data('9046');
$pageTtl = $content['title'];
$footerTtl = '4月の抽選賞品<br>【レコルト】プレスサンドメーカー プラッド<br>抽選で20名さまに当たります！';

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
    $smile_month = '04';
    $smile_next ="2020年5月1日（金）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "161";//テストFLP用リンクナンバー
    $smile_id_production = "161";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">業界最速約2分半で焼き上げ♪具だくさんのホットサンドが簡単に焼ける！</h4>
          <p class="lottery-point__ex">パンに好きな具材を挟んで、こんがりと焼いたホットサンド。手軽に作れるのに満足感があり、アレンジの幅が広いのが魅力ですよね。<br>今回ご紹介するプレスサンドメーカー プラッドは、<strong>分厚く、具だくさんのホットサンドを焼くことができる</strong>新しいホットサンドメーカー。深めのプレートと5段階のハンドルロックの力で、従来品より<strong>焼ける厚みが20％もアップ！</strong>しかも、<strong>約2分半</strong>で耳はカリッ、中はふわっと焼き上げてくれる、超優れものなんです♪</p>
          <h4 class="lottery-point__ttl">厚い具材も重ねて入れられるから、より幅広い組み合わせが楽しめる！</h4>
          <p class="lottery-point__ex">従来のホットサンドは、プレスする際に中身が飛び出るのを防ぐため、スライスチーズやハムなどの薄い具材が中心でした。でもこのプレスサンドメーカー プラッドなら、ゆで卵と厚切りベーコンを重ねたり、グリルしたチキンやふわふわの厚焼き卵を入れたり、焼きそばを挟んだり…と具材の幅が一気に広がります！そして、複数の具材を重ねて層にできるから、<strong>切ったときの断面がとってもかわいい</strong>のも大きなポイント♪色の組み合わせを楽しむことができるんです！<br>ボリューミー＆カラフルなホットサンドを作って、毎日の食卓を彩ってみませんか？</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">本商品の特徴は、とにかく「使い勝手がよい！」ということ。お好みの具材を入れたらプレスして、カバーを閉じたら約2分半待つだけで完成！そして<strong>使用後のお手入れは、湿らせたキッチンペーパーでプレートを拭き取るだけでOK♪</strong>難しい操作いらずで、手軽にご利用いただけます。<br>そして食パンに限らず、バゲットやイングリッシュマフィンなど、さまざまな種類のパンに対応可能！<strong>50種類のレシピが掲載されたレシピブックも付いてくる</strong>ので、アレンジに自信がない方でも、バラエティ豊かなレシピを楽しめますよ！ぜひこの機会にご応募くださいね♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">
            <dl>
              <dt>カラー/品番</dt>
              <dd>Matte Red マットレッド RPS-2 （R）</dd>
            </dl>
            <dl>
              <dt>セット内容</dt>
              <dd>本体、専用レシピブック </dd>
            </dl>
            <dl>
              <dt>消費電力</dt>
              <dd>700W</dd>
            </dl>
            <dl>
              <dt>定格電圧</dt>
              <dd>100V 50/60Hz</dd>
            </dl>
            <dl>
              <dt>サイズ</dt>
              <dd>本体： 約 幅13.0 × 奥行21.0 × 高さ12.0cm<br>プレート：約 幅12.7 × 奥行14.5cm</dd>
            </dl>
            <dl>
              <dt>重量</dt>
              <dd>約960g</dd>
            </dl>
            <dl>
              <dt>材質</dt>
              <dd>本体：フェノール樹脂<br>プレート：アルミダイキャスト（ノンスティック加工）</dd>
            </dl>
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
