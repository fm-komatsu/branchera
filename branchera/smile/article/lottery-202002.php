<?php
//base
include ("../../function.php");
$content = get_id_data('9044');
$pageTtl = $content['title'];
$footerTtl = '2月の抽選賞品<br>【ティファール】アクセススチームプラス<br>抽選で7名さまに当たります！';

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
    $smile_month = '02';
    $smile_next ="2020年3月2日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "153";//テストFLP用リンクナンバー
    $smile_id_production = "153";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">強力スチームで一気にシワのばし！アイロン台いらずで速攻お手入れ</h4>
          <p class="lottery-point__ex">なかなか取れない頑固な衣類のシワ。「気になるけど、出かける前にアイロンをかける時間なんてない！」という時におすすめなのが、このアクセススチームプラス。本商品を使えば、<strong>ハンガーにかけたまま、簡単にシワのばしが可能</strong>です！素早く強力なシワのばしの決め手は、圧倒的なスチーム量。平均20g/分のパワフル連続スチームが繊維の奥まで浸透し、シワの原因となる繊維をしっかりほぐしてくれます。<br>しかも、<strong>立ち上がり時間はたったの40秒！</strong>すぐに使えるので、<strong>忙しい朝の時短にぴったり</strong>のアイテムです！</p>
          <h4 class="lottery-point__ttl">花粉・アレルギー対策にも◎これからの季節にお役立ち！</h4>
          <p class="lottery-point__ex">シワのばし以外にも、たくさんの効果が期待できるのが本商品のスゴいところ♪スチームの力で、アイロンがけが難しい寝具などの除菌ケアや、布に染み付いたタバコや焼肉の臭いなどの脱臭もラクラクできちゃいます！<br>そして、ハウスダスト中に含まれる、<strong>ダニ由来のアレル物質を低減させてくれる</strong>ので、子どもが遊ぶぬいぐるみのケアなどにもぴったり。さらに、これからの季節気になる<strong>花粉対策にも効果的！</strong>コートやジャケットなどに付いた<strong>スギ花粉をスチームで低減</strong>。丸洗いが難しい衣類も、しっかりケアすることができます！<br>1台で何役もこなしてくれる、アクセススチームプラス。生活に欠かせないアイテムになること間違いなしです♪</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">本商品のおすすめポイントは、ズバリ「使い勝手のよさ」！ご紹介した多彩な機能のほか、生活に役立つ商品をプロデュースする、ティファールならではの工夫がたくさん♪<br>ドアなどに取り付けられる便利な専用フックが付いているので、置き場所には困りません。さらに、3mと長めの電源コードのため、広範囲で使用することができます！<br>衣類はもちろん、布団やカーテン、クッションやソファなど、さまざまな布製品を手軽にケアできる本商品。ぜひこの機会にご応募ください♪</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl>
              <dt>かけ面
              <dd>セラミック</dd>
            </dl>
            <dl>
              <dt>定格消費電力 (W)</dt>
              <dd>1,200</dd>
            </dl>
            <dl>
              <dt>本体サイズ 幅×長さ×高さ (cm)</dt>
              <dd>13.0×14.1×28.3</dd>
            </dl>
            <dl>
              <dt>本体重量 (g)</dt>
              <dd>約1,220(水タンクが空の時)</dd>
            </dl>
            <dl>
              <dt>コードの長さ (m)</dt>
              <dd>約3.0</dd>
            </dl>
            <dl>
              <dt>ホースの長さ (m)</dt>
              <dd>-</dd>
            </dl>
            <dl>
             <dt>水タンク容量 (ml)</dt>
              <dd>185</dd>
            </dl>
            <dl>
             <dt>ジェットススチームトリガー
              <dd>-</dd>
            </dl>
            <dl>
             <dt>通常スチーム (平均/分)</dt>
              <dd>20g</dd>
            </dl>
            <dl>
              <dt>立ち上がり時間 (秒)</dt>
              <dd>40</dd>
            </dl>
            <dl>
              <dt>連続運転時間 (分)</dt>
              <dd>18（タンクに1回水を注ぎ足した場合）</dd>
            </dl>
            <dl>
              <dt>付属品</dt>
              <dd>ヘッドカバー、ブラシ、ドアフック</dd>
            </dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。
        </small>
      </div>
      <div class="mb4 mb2_sp">
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
